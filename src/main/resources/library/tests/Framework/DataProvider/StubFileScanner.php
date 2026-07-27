<?php

namespace StubTests\Framework\DataProvider;

/**
 * Recursively finds files under a directory using scandir().
 *
 * Why not RecursiveDirectoryIterator? Over the Docker Desktop (Windows) bind mount —
 * gRPC-FUSE/virtiofs — the SPL directory iterators (RecursiveDirectoryIterator,
 * DirectoryIterator) return a TRUNCATED listing: the head of each directory stream is
 * silently dropped, so whole extension directories (Core, curl, dom, FFI, ...) vanish from
 * the scan. The affected files are never read, never parsed, and never make it into the
 * generated Stubs*.json / PhpStormStubsMap.php / meta references — with no error, because the
 * files are never even discovered. scandir() reads the whole directory in a single call and
 * is not affected, so it is the single source of truth for tree traversal in this codebase.
 */
final class StubFileScanner
{
    /**
     * Recursively collect file paths under $root.
     *
     * @param string $root Directory to scan.
     * @param callable(string $path, string $name): bool $accept  Return true to include a file.
     * @param callable(string $path, string $name): bool $descend Return true to recurse into a
     *                                                             subdirectory; use it to prune
     *                                                             directories (e.g. vendor, tests).
     * @return string[] Matching file paths in filesystem-native (unsorted) order; callers that
     *                  need determinism should sort the result.
     */
    public static function collect(string $root, callable $accept, callable $descend): array
    {
/**
 * <div id="reserved.variables.files" class="refentry"> <div class="refnamediv">  <h1 class="refname">\$_FILES</h1>  <p class="refpurpose"><span class="refname">\$_FILES</span> — <span class="dc-title">HTTP 文件上传变量</span></p> </div>  <div class="refsect1 description" id="refsect1-reserved.variables.files-description">  <h3 class="title">说明</h3>  <p class="para">   通过 HTTP POST 方式上传到当前脚本的项目的<span class="type" style="color:#EAB766">数组</span>。   此数组的概况在    <a href="https://php.net/manual/zh/features.file-upload.post-method.php" class="link">POST 方法上传</a> 章节中有描述。  </p> </div>   <div class="refsect1 notes" id="refsect1-reserved.variables.files-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">“Superglobal”也称为自动化的全局变量。这就表示其在脚本的所有作用域中都是可用的。不需要在函数或方法中用<strong class="command">global \$variable;</strong> 来访问它。</span></p></blockquote> </div> <div class="refsect1 seealso" id="refsect1-reserved.variables.files-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link move_uploaded_file()} - 将上传的文件移动到新位置</span></li>    <li><a href="https://php.net/manual/zh/features.file-upload.php" class="link">处理文件上传</a></li>   </ul>   </div></div>
 */
        $files = [];
        self::walk($root, $accept, $descend, $files);
        return $files;
    }

    /**
     * @param callable(string $path, string $name): bool $accept
     * @param callable(string $path, string $name): bool $descend
     * @param string[] $files
     */
    private static function walk(string $directory, callable $accept, callable $descend, array &$files): void
    {
        // Suppress the warning for an unreadable/missing directory; the false return is handled.

        $entries = @scandir($directory);
        if ($entries === false) {
            return;
        }

        foreach ($entries as $entry) {
            if ($entry === '.' || $entry === '..') {
                continue;
            }


            $path = $directory . DIRECTORY_SEPARATOR . $entry;

            if (is_dir($path)) {
                if ($descend($path, $entry)) {
                    self::walk($path, $accept, $descend, $files);
                }
                continue;
            }

            if ($accept($path, $entry)) {
                $files[] = $path;
            }
        }
    }
}
