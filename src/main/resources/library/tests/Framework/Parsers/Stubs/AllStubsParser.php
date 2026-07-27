<?php

namespace StubTests\Framework\Parsers\Stubs;

use StubTests\Framework\DataProvider\StubsDataProvider;
use StubTests\Framework\Parsers\Storage\ParsedDataStorageManager;


class AllStubsParser
{
    /**
     * @param StubsDataProvider $dataProvider
     * @param ParsedDataStorageManager $storageManager
     * @param MultiEntityStubParserInterface[] $parsers Array of parsers implementing MultiEntityStubParserInterface
     */
    public function __construct(
        private StubsDataProvider $dataProvider,
        private ParsedDataStorageManager $storageManager,
        private array $parsers
    ) {}


    public function parseAll(): void
    {
/**
 * <div id="reserved.variables.files" class="refentry"> <div class="refnamediv">  <h1 class="refname">\$_FILES</h1>  <p class="refpurpose"><span class="refname">\$_FILES</span> — <span class="dc-title">HTTP 文件上传变量</span></p> </div>  <div class="refsect1 description" id="refsect1-reserved.variables.files-description">  <h3 class="title">说明</h3>  <p class="para">   通过 HTTP POST 方式上传到当前脚本的项目的<span class="type" style="color:#EAB766">数组</span>。   此数组的概况在    <a href="https://php.net/manual/zh/features.file-upload.post-method.php" class="link">POST 方法上传</a> 章节中有描述。  </p> </div>   <div class="refsect1 notes" id="refsect1-reserved.variables.files-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">“Superglobal”也称为自动化的全局变量。这就表示其在脚本的所有作用域中都是可用的。不需要在函数或方法中用<strong class="command">global \$variable;</strong> 来访问它。</span></p></blockquote> </div> <div class="refsect1 seealso" id="refsect1-reserved.variables.files-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link move_uploaded_file()} - 将上传的文件移动到新位置</span></li>    <li><a href="https://php.net/manual/zh/features.file-upload.php" class="link">处理文件上传</a></li>   </ul>   </div></div>
 */
        $files = $this->dataProvider->getAllStubFiles();

        $stubsRoot = $this->dataProvider->getStubsRootPath();

        // PHASE 1: Collect all entities (deferred processing)
        foreach ($files as $filePath) {

            $sourcePath = self::relativizePath($filePath, $stubsRoot);

            // A read failure means the whole file contributes nothing. Warn instead of
            // letting it abort the run (or, worse, silently skip every entity it defines).
            try {

                $content = $this->dataProvider->getStubFileContent($filePath);
            } catch (\RuntimeException $e) {
                self::warn("could not read {$sourcePath}: {$e->getMessage()}");
                continue;
            }

            // Parse with all parsers using polymorphic interface

            $parseErrorWarned = false;
            foreach ($this->parsers as $parser) {
                try {

                    $entities = $parser->extractAndParseAll($content);

                    foreach ($entities as $entity) {
                        $entity->initStubsMetadata()->setSourcePath($sourcePath);
                        $this->storageManager->addEntityRaw($entity);
                    }
                } catch (\PhpParser\Error $e) {
                    // A syntax error fails every parser identically and drops the entire
                    // file from the cache — warn once so the gap is visible.
                    if (!$parseErrorWarned) {
                        self::warn("parse error in {$sourcePath}; all entities skipped: {$e->getMessage()}");

                        $parseErrorWarned = true;
                    }
                } catch (\RuntimeException $e) {
                    self::warn(self::shortName($parser) . " skipped {$sourcePath}: {$e->getMessage()}");
                }
            }
        }

        // PHASE 2: Process all collected entities through pipeline (includes deduplication if configured)
        $this->storageManager->process();
    }

    /**
     * Return $absolutePath as a forward-slash path relative to $stubsRoot.
     *
     * Source paths are persisted to the JSON cache and shared across
     * environments (local macOS, Linux CI, Docker, WSL), so storing the
     * absolute path would tie the cache to the machine that generated it.
     * The relative form (e.g. "gmp/gmp.php") is portable and lets consumers
     * decide whether to resolve against the current root.
     *
     * Falls back to the unmodified path when it does not live under the
     * configured stubs root — defensive, but should not occur with the
     * standard AllStubsDataProvider.
     */
    /**
     * Emit a non-fatal warning to STDERR about a file that was skipped during parsing.
     * Skips used to be swallowed silently, which made missing cache entities (e.g. whole
     * extensions dropping out) impossible to diagnose from the run output.
     */
    private static function warn(string $message): void
    {

        $stream = defined('STDERR') ? STDERR : fopen('php://stderr', 'w');
        fwrite($stream, "[stubs-parser] WARNING: {$message}\n");
    }

    /**
     * Short (unqualified) class name of a parser, for readable warnings.
     */
    private static function shortName(object $parser): string
    {

        $class = get_class($parser);

        $pos = strrpos($class, '\\');

        return $pos === false ? $class : substr($class, $pos + 1);
    }


    private static function relativizePath(string $absolutePath, string $stubsRoot): string
    {

        $normalizedPath = str_replace('\\', '/', $absolutePath);

        $normalizedRoot = rtrim(str_replace('\\', '/', $stubsRoot), '/');

        if ($normalizedRoot !== '' && str_starts_with($normalizedPath, $normalizedRoot . '/')) {
            return substr($normalizedPath, strlen($normalizedRoot) + 1);
        }

        return $normalizedPath;
    }
}
