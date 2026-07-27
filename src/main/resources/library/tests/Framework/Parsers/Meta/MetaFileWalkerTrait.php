<?php

namespace StubTests\Framework\Parsers\Meta;

use PhpParser\Node\Stmt;
use PhpParser\ParserFactory;
use StubTests\Framework\DataProvider\StubFileScanner;


trait MetaFileWalkerTrait
{
    /**
     * Yields [filePath, Stmt[]] pairs for each PHPSTORM_META namespace found in meta files.
     *
     * @return iterable<array{string, Stmt[]}>
     */
    private function getMetaNamespaceBlocks(string $rootDir): iterable
    {
        foreach ($this->findMetaFiles($rootDir) as $file) {

            $stmts = $this->parseFile($file);
            if ($stmts === null) {
                continue;
            }
            foreach ($stmts as $stmt) {
                if ($stmt instanceof Stmt\Namespace_ && $this->isPhpStormMetaNamespace($stmt)) {
                    yield [$file, $stmt->stmts];
                }
            }
        }
    }

    /**
     * @return string[]
     */
    private function findMetaFiles(string $rootDir): array
    {
        // scandir-based traversal (see StubFileScanner) — RecursiveDirectoryIterator truncates
        // listings over the Docker Desktop Windows bind mount, dropping directories such as FFI/
        // and with them the meta references they declare (\FFI::new, ...).
/**
 * <div id="reserved.variables.files" class="refentry"> <div class="refnamediv">  <h1 class="refname">\$_FILES</h1>  <p class="refpurpose"><span class="refname">\$_FILES</span> — <span class="dc-title">HTTP 文件上传变量</span></p> </div>  <div class="refsect1 description" id="refsect1-reserved.variables.files-description">  <h3 class="title">说明</h3>  <p class="para">   通过 HTTP POST 方式上传到当前脚本的项目的<span class="type" style="color:#EAB766">数组</span>。   此数组的概况在    <a href="https://php.net/manual/zh/features.file-upload.post-method.php" class="link">POST 方法上传</a> 章节中有描述。  </p> </div>   <div class="refsect1 notes" id="refsect1-reserved.variables.files-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">“Superglobal”也称为自动化的全局变量。这就表示其在脚本的所有作用域中都是可用的。不需要在函数或方法中用<strong class="command">global \$variable;</strong> 来访问它。</span></p></blockquote> </div> <div class="refsect1 seealso" id="refsect1-reserved.variables.files-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link move_uploaded_file()} - 将上传的文件移动到新位置</span></li>    <li><a href="https://php.net/manual/zh/features.file-upload.php" class="link">处理文件上传</a></li>   </ul>   </div></div>
 */
        $files = StubFileScanner::collect(
            $rootDir,
            fn (string $path, string $name): bool => $name === '.phpstorm.meta.php',
            // Meta files under tests/ and vendor/ are not project stubs.
            fn (string $path, string $name): bool => $name !== 'tests' && $name !== 'vendor',
        );
        sort($files);
        return $files;
    }

    /**
     * @return Stmt[]|null
     */
    private function parseFile(string $filePath): ?array
    {

        $code = file_get_contents($filePath);
        if ($code === false) {
            return null;
        }

        $parser = (new ParserFactory())->createForNewestSupportedVersion();
        return $parser->parse($code);
    }


    private function isPhpStormMetaNamespace(Stmt\Namespace_ $ns): bool
    {
        return $ns->name !== null && $ns->name->toString() === 'PHPSTORM_META';
    }
}
