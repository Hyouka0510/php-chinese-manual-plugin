<?php

/**
 * Stubs for APC (apcu_bc nowadays) extension
 */

/**
 * @link https://php.net/manual/en/apc.constants.php
 */
define('APC_BIN_VERIFY_MD5', 1);
/**
 * @link https://php.net/manual/en/apc.constants.php
 */
define('APC_BIN_VERIFY_CRC32', 2);

/**
 * Retrieves cached information and meta-data from APC's data store
 * @link https://php.net/manual/en/function.apc-cache-info.php
 * @param string $type If cache_type is "user", information about the user cache will be returned.
 * If cache_type is "filehits", information about which files have been served from the bytecode
 * cache for the current request will be returned. This feature must be enabled at compile time
 * using --enable-filehits. If an invalid or no cache_type is specified, information about the
 * system cache (cached files) will be returned.
 * @param bool $limited If limited is TRUE, the return value will exclude the individual list
 * of cache entries. This is useful when trying to optimize calls for statistics gathering.
 * @return array|false Array of cached data (and meta-data) or FALSE on failure.
 */
function apc_cache_info($type = '', $limited = false) {}

/**
 * Clears the APC cache
 * @link https://php.net/manual/en/function.apc-clear-cache.php
 * @param string $cache_type If cache_type is "user", the user cache will be cleared;
 * otherwise, the system cache (cached files) will be cleared.
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function apc_clear_cache($cache_type = '') {}

/**
 * Retrieves APC's Shared Memory Allocation information
 * @link https://php.net/manual/en/function.apc-sma-info.php
 * @param bool $limited When set to FALSE (default) apc_sma_info() will
 * return a detailed information about each segment.
 * @return array|false Array of Shared Memory Allocation data; FALSE on failure.
 */
function apc_sma_info($limited = false) {}

/**
 * Cache a variable in the data store
 * @link https://php.net/manual/en/function.apc-store.php
 * @param string|array $key String: Store the variable using this name. Keys are cache-unique,
 * so storing a second value with the same key will overwrite the original value.
 * Array: Names in key, variables in value.
 * @param mixed $var [optional] The variable to store
 * @param int $ttl [optional]  Time To Live; store var in the cache for ttl seconds. After the ttl has passed,
 * the stored variable will be expunged from the cache (on the next request). If no ttl is supplied
 * (or if the ttl is 0), the value will persist until it is removed from the cache manually,
 * or otherwise fails to exist in the cache (clear, restart, etc.).
 * @return bool|array Returns TRUE on success or FALSE on failure | array with error keys.
 */
function apc_store($key, $var, $ttl = 0) {}

/**
 * Fetch a stored variable from the cache
 * @link https://php.net/manual/en/function.apc-fetch.php
 * @param string|string[] $key The key used to store the value (with apc_store()).
 * If an array is passed then each element is fetched and returned.
 * @param bool|null &$success Set to TRUE in success and FALSE in failure.
 * @return mixed|false The stored variable or array of variables on success; FALSE on failure.
 */
function apc_fetch($key, &$success = null) {}

/**
 * Removes a stored variable from the cache
 * @link https://php.net/manual/en/function.apc-delete.php
 * @param string|string[]|APCIterator $key The key used to store the value (with apc_store()).
 * @return bool|string[] Returns TRUE on success or FALSE on failure. For array of keys returns list of failed keys.
 */
function apc_delete($key) {}

/**
 * Defines a set of constants for retrieval and mass-definition
 *
 * define() is notoriously slow. Since the main benefit of APC is to increase
 * the performance of scripts/applications, this mechanism is provided to streamline
 * the process of mass constant definition. However, this function does not perform
 * as well as anticipated. For a better-performing solution, try the hidef extension from PECL.
 *
 * @link https://php.net/manual/en/function.apc-define-constants.php
 * @param string $key The key serves as the name of the constant set being stored.
 * This key is used to retrieve the stored constants in apc_load_constants().
 * @param array $constants An associative array of constant_name => value pairs.
 * The constant_name must follow the normal constant naming rules. Value must evaluate to a scalar value.
 * @param bool $case_sensitive The default behaviour for constants is to be declared case-sensitive;
 * i.e. CONSTANT and Constant represent different values. If this parameter evaluates to FALSE
 * the constants will be declared as case-insensitive symbols.
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function apc_define_constants($key, array $constants, $case_sensitive = true) {}

/**
 * Caches a variable in the data store, only if it's not already stored
 * @link https://php.net/manual/en/function.apc-add.php
 * @param string $key Store the variable using this name. Keys are cache-unique,
 * so attempting to use apc_add() to store data with a key that already exists will not
 * overwrite the existing data, and will instead return FALSE. (This is the only difference
 * between apc_add() and apc_store().)
 * @param mixed $var The variable to store
 * @param int $ttl Time To Live; store var in the cache for ttl seconds. After the ttl has passed,
 * the stored variable will be expunged from the cache (on the next request). If no ttl is supplied
 * (or if the ttl is 0), the value will persist until it is removed from the cache manually,
 * or otherwise fails to exist in the cache (clear, restart, etc.).
 * @return bool
 */
function apc_add($key, $var, $ttl = 0) {}

/**
 * Stores a file in the bytecode cache, bypassing all filters
 * @link https://php.net/manual/en/function.apc-compile-file.php
 * @param string|string[] $filename Full or relative path to a PHP file that will be
 * compiled and stored in the bytecode cache.
 * @param bool $atomic
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function apc_compile_file($filename, $atomic = true) {}

/**
 * Loads a set of constants from the cache
 * @link https://php.net/manual/en/function.apc-load-constants.php
 * @param string $key The name of the constant set (that was stored
 * with apc_define_constants()) to be retrieved.
 * @param bool $case_sensitive The default behaviour for constants is to be declared case-sensitive;
 * i.e. CONSTANT and Constant represent different values. If this parameter evaluates to FALSE
 * the constants will be declared as case-insensitive symbols.
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function apc_load_constants($key, $case_sensitive = true) {}

/**
 * Checks if APC key exists
 * @link https://php.net/manual/en/function.apc-exists.php
 * @param string|string[] $keys A string, or an array of strings, that contain keys.
 * @return bool|string[] Returns TRUE if the key exists, otherwise FALSE
 * Or if an array was passed to keys, then an array is returned that
 * contains all existing keys, or an empty array if none exist.
 */
function apc_exists($keys) {}

/**
 * Deletes the given files from the opcode cache
 *
 * Accepts a string, array of strings, or APCIterator object.
 * Returns True/False, or for an Array an Array of failed files.
 *
 * @link https://php.net/manual/en/function.apc-delete-file.php
 * @param string|string[]|APCIterator $keys
 * @return bool|string[]
 */
function apc_delete_file($keys) {}

/**
 * Increase a stored number
 * @link https://php.net/manual/en/function.apc-inc.php
 * @param string $key The key of the value being increased.
 * @param int $step The step, or value to increase.
 * @param bool|null &$success Optionally pass the success or fail boolean value to this referenced variable.
 * @return int|false Returns the current value of key's value on success, or FALSE on failure.
 */
function apc_inc($key, $step = 1, &$success = null) {}

/**
 * Decrease a stored number
 * @link https://php.net/manual/en/function.apc-dec.php
 * @param string $key The key of the value being decreased.
 * @param int $step The step, or value to decrease.
 * @param bool|null &$success Optionally pass the success or fail boolean value to this referenced variable.
 * @return int|false Returns the current value of key's value on success, or FALSE on failure.
 */
function apc_dec($key, $step = 1, &$success = null) {}

/**
 * Updates an old value with a new value
 * @link https://php.net/manual/en/function.apc-cas.php
 * @param string $key
 * @param int $old
 * @param int $new
 * @return bool
 */
function apc_cas($key, $old, $new) {}

/**
 * Returns a binary dump of the given files and user variables from the APC cache
 *
 * A NULL for files or user_vars signals a dump of every entry, while array() will dump nothing.
 *
 * @link https://php.net/manual/en/function.apc-bin-dump.php
 * @param string[]|null $files The files. Passing in NULL signals a dump of every entry, while passing in array() will dump nothing.
 * @param string[]|null $user_vars The user vars. Passing in NULL signals a dump of every entry, while passing in array() will dump nothing.
 * @return string|false|null Returns a binary dump of the given files and user variables from the APC cache, FALSE if APC is not enabled, or NULL if an unknown error is encountered.
 */
function apc_bin_dump($files = null, $user_vars = null) {}

/**
 * Output a binary dump of the given files and user variables from the APC cache to the named file
 * @link https://php.net/manual/en/function.apc-bin-dumpfile.php
 * @param string[]|null $files The file names being dumped.
 * @param string[]|null $user_vars The user variables being dumped.
 * @param string $filename The filename where the dump is being saved.
 * @param int $flags Flags passed to the filename stream. See the file_put_contents() documentation for details.
 * @param resource $context The context passed to the filename stream. See the file_put_contents() documentation for details.
 * @return int|false The number of bytes written to the file, otherwise FALSE if APC
 * is not enabled, filename is an invalid file name, filename can't be opened,
 * the file dump can't be completed (e.g., the hard drive is out of disk space),
 * or an unknown error was encountered.
 */
function apc_bin_dumpfile($files, $user_vars, $filename, $flags = 0, $context = null) {}

/**
 * Load the given binary dump into the APC file/user cache
 * @link https://php.net/manual/en/function.apc-bin-load.php
 * @param string $data The binary dump being loaded, likely from apc_bin_dump().
 * @param int $flags Either APC_BIN_VERIFY_CRC32, APC_BIN_VERIFY_MD5, or both.
 * @return bool Returns TRUE if the binary dump data was loaded with success, otherwise FALSE is returned.
 * FALSE is returned if APC is not enabled, or if the data is not a valid APC binary dump (e.g., unexpected size).
 */
function apc_bin_load($data, $flags = 0) {}

/**
 * Load the given binary dump from the named file into the APC file/user cache
 * @link https://php.net/manual/en/function.apc-bin-loadfile.php
 * @param string $filename The file name containing the dump, likely from apc_bin_dumpfile().
 * @param resource $context The files context.
 * @param int $flags Either APC_BIN_VERIFY_CRC32, APC_BIN_VERIFY_MD5, or both.
 * @return bool Returns TRUE on success, otherwise FALSE Reasons it may return FALSE include APC
 * is not enabled, filename is an invalid file name or empty, filename can't be opened,
 * the file dump can't be completed, or if the data is not a valid APC binary dump (e.g., unexpected size).
 */
function apc_bin_loadfile($filename, $context = null, $flags = 0) {}

/**
 * The APCIterator class
 *
 * The APCIterator class makes it easier to iterate over large APC caches.
 * This is helpful as it allows iterating over large caches in steps, while grabbing a defined number
 * of entries per lock instance, so it frees the cache locks for other activities rather than hold up
 * the entire cache to grab 100 (the default) entries. Also, using regular expression matching is more
 * efficient as it's been moved to the C level.
 *
 * @link https://php.net/manual/en/class.apciterator.php
 */
class APCIterator implements Iterator
{
    /**
     * Constructs an APCIterator iterator object
     * @link https://php.net/manual/en/apciterator.construct.php
     * @param string $cache The cache type, which will be 'user' or 'file'.
     * @param string|string[]|null $search A PCRE regular expression that matches against APC key names,
     * either as a string for a single regular expression, or as an array of regular expressions.
     * Or, optionally pass in NULL to skip the search.
     * @param int $format The desired format, as configured with one ore more of the APC_ITER_* constants.
     * @param int $chunk_size The chunk size. Must be a value greater than 0. The default value is 100.
     * @param int $list The type to list. Either pass in APC_LIST_ACTIVE  or APC_LIST_INACTIVE.
     */
    public function __construct($cache, $search = null, $format = APC_ITER_ALL, $chunk_size = 100, $list = APC_LIST_ACTIVE) {}

    /**
     * Rewinds back the iterator to the first element
     * @link https://php.net/manual/en/apciterator.rewind.php
     */
    public function rewind() {}

    /**
     * Checks if the current iterator position is valid
     * @link https://php.net/manual/en/apciterator.valid.php
     * @return bool Returns TRUE if the current iterator position is valid, otherwise FALSE.
     */
    public function valid() {}

    /**
     * Gets the current item from the APCIterator stack
     * @link https://php.net/manual/en/apciterator.current.php
     * @return mixed|false Returns the current item on success, or FALSE if no more items or exist, or on failure.
     */
    public function current() {}

    /**
     * Gets the current iterator key
     * @link https://php.net/manual/en/apciterator.key.php
     * @return string|int|false Returns the key on success, or FALSE upon failure.
     */
    public function key() {}

    /**
     * Moves the iterator pointer to the next element
     * @link https://php.net/manual/en/apciterator.next.php
     * @return bool Returns TRUE on success or FALSE on failure.
     */
    public function next() {}

    /**
     * Gets the total number of cache hits
     * @link https://php.net/manual/en/apciterator.gettotalhits.php
     * @return int|false The number of hits on success, or FALSE on failure.
     */
    public function getTotalHits() {}

    /**
     * Gets the total cache size
     * @link https://php.net/manual/en/apciterator.gettotalsize.php
     * @return int|bool The total cache size.
     */
    public function getTotalSize() {}

    /**
     * Get the total count
     * @link https://php.net/manual/en/apciterator.gettotalcount.php
     * @return int|bool The total count.
     */
    public function getTotalCount() {}
}

/**
 * Stubs for APCu 5.0.0
 */

/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_LIST_ACTIVE', 1);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_LIST_DELETED', 2);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_TYPE', 1);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_KEY', 2);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_FILENAME', 4);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_DEVICE', 8);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_INODE', 16);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_VALUE', 32);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_MD5', 64);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_NUM_HITS', 128);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_MTIME', 256);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_CTIME', 512);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_DTIME', 1024);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_ATIME', 2048);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_REFCOUNT', 4096);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_MEM_SIZE', 8192);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_TTL', 16384);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_NONE', 0);
/**
 * <span class="simpara">    </span>
 * 
 * @link https://php.net/manual/zh/apcu.constants.php
 */
define('APC_ITER_ALL', -1);

/**
 * <div id="function.apcu-clear-cache" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_clear_cache</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.0)</p><p class="refpurpose"><span class="refname">apcu_clear_cache</span> — <span class="dc-title">   Clears the APCu cache  </span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-clear-cache-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_clear_cache</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="simpara">   Clears the cache.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-clear-cache-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-clear-cache-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> always  </p> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-clear-cache-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_cache_info()} - 从 APCu 存储中获取缓存信息</span></li>  </ul> </div></div>
 * 
 * Clears the APCu cache
 * @link https://php.net/manual/zh/function.apcu-clear-cache.php
 *
 * @return bool Returns TRUE always.
 */
function apcu_clear_cache() {}

/**
 * <div id="function.apcu-sma-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_sma_info</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.0)</p><p class="refpurpose"><span class="refname">apcu_sma_info</span> — <span class="dc-title">   Retrieves APCu Shared Memory Allocation information  </span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-sma-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_sma_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$limited</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="simpara">   Retrieves APCu Shared Memory Allocation information.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-sma-info-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">limited</span></dt>    <dd>     <span class="simpara">      When set to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> (default) <span class="function"><strong style="color:#CC7832">apcu_sma_info()</strong></span> will      return a detailed information about each segment.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-sma-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Array of Shared Memory Allocation data; <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.  </p> </div> <div class="refsect1 examples" id="refsect1-function.apcu-sma-info-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 A <span class="function"><strong style="color:#CC7832">apcu_sma_info()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">apcu_sma_info</span><span style="color: #007700">());<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例的输出类似于：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[num_seg]&nbsp;=&gt;&nbsp;1<br>&nbsp;&nbsp;&nbsp;&nbsp;[seg_size]&nbsp;=&gt;&nbsp;31457280<br>&nbsp;&nbsp;&nbsp;&nbsp;[avail_mem]&nbsp;=&gt;&nbsp;31448408<br>&nbsp;&nbsp;&nbsp;&nbsp;[block_lists]&nbsp;=&gt;&nbsp;Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0]&nbsp;=&gt;&nbsp;Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0]&nbsp;=&gt;&nbsp;Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[size]&nbsp;=&gt;&nbsp;31448408<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[offset]&nbsp;=&gt;&nbsp;8864<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br><br>)</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-sma-info-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li>    <a href="https://php.net/manual/zh/apcu.configuration.php" class="link">APCu configuration directives</a>   </li>  </ul> </div></div>
 * 
 * Retrieves APCu Shared Memory Allocation information
 * @link https://php.net/manual/zh/function.apcu-sma-info.php
 * @param bool $limited When set to FALSE (default) apcu_sma_info() will
 * return a detailed information about each segment.
 *
 * @return array|false Array of Shared Memory Allocation data; FALSE on failure.
 */
function apcu_sma_info($limited = false) {}

/**
 * <div id="function.apcu-store" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_store</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.0)</p><p class="refpurpose"><span class="refname">apcu_store</span> — <span class="dc-title">   缓存一个变量到存储中  </span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-store-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_store</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$var</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$ttl</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="methodsynopsis dc-description"><span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_store</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$values</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$unused</span><span class="initializer"> = NULL</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$ttl</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="simpara">   缓存一个变量到存储中。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    与 PHP 中常见的变量生命周期不同的是，通过 <span class="function"><strong style="color:#CC7832">apcu_store()</strong></span> 存储的变量可以在多个 request 之间共享（直到该变量从 cache 中被删除）。   </span>  </p></blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-store-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <span class="simpara">      使用此名称存储变量。<span class="parameter" style="color:#3A95FF">key</span> 是唯一的，因此当多次使用同样的 <span class="parameter" style="color:#3A95FF">key</span> 存储变量时，后一次会覆盖前一次的值。     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">var</span></dt>    <dd>     <span class="simpara">      被存储的变量     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">ttl</span></dt>    <dd>     <span class="simpara">      变量生存时间（Time To Live）；被存储的 <span class="parameter" style="color:#3A95FF">var</span> 经过 <span class="parameter" style="color:#3A95FF">ttl</span> 秒后，会从存储中被删除（下一次请求时）。如果没提供 <span class="parameter" style="color:#3A95FF">ttl</span> （或 <span class="parameter" style="color:#3A95FF">ttl</span> 为 <span class="literal">0</span> ），该变量会一直存在直到手动删除它，或者其他原因导致该变量从缓存中消失（清除，重启等等。）。     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">values</span></dt>    <dd>     <span class="simpara">      数组索引作为 key，数组值作为被存储的 var。     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-store-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   第二种语法返回包含存储失败的 key 的数组。  </p> </div> <div class="refsect1 examples" id="refsect1-function.apcu-store-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">apcu_store()</strong></span> 示例</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'BAR'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">apcu_store</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #9876AA">\$bar</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">apcu_fetch</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">string(3)&nbsp;"BAR"</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-store-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_add()} - 缓存一个新变量到存储中</span></li>   <li><span class="function">{@link apcu_fetch()} - Fetch a stored variable from the cache</span></li>   <li><span class="function">{@link apcu_delete()} - Removes a stored variable from the cache</span></li>  </ul> </div></div>
 * 
 * Cache a variable in the data store
 * @link https://php.net/manual/zh/function.apcu-store.php
 * @param string|string[] $key String: Store the variable using this name. Keys are cache-unique,
 * so storing a second value with the same key will overwrite the original value.
 * Array: Names in key, variables in value.
 * @param mixed $var [optional] The variable to store
 * @param int $ttl [optional]  Time To Live; store var in the cache for ttl seconds. After the ttl has passed,
 * the stored variable will be expunged from the cache (on the next request). If no ttl is supplied
 * (or if the ttl is 0), the value will persist until it is removed from the cache manually,
 * or otherwise fails to exist in the cache (clear, restart, etc.).
 * @return bool|array Returns TRUE on success or FALSE on failure | array with error keys.
 */
function apcu_store($key, $var, $ttl = 0) {}

/**
 * <div id="function.apcu-fetch" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_fetch</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.0)</p><p class="refpurpose"><span class="refname">apcu_fetch</span> — <span class="dc-title">   Fetch a stored variable from the cache  </span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-fetch-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_fetch</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;\$success</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="simpara">   Fetches an entry from the cache.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-fetch-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <span class="simpara">      The <span class="parameter" style="color:#3A95FF">key</span> used to store the value (with      <span class="function">{@link apcu_store()}</span>). If an array is passed then each      element is fetched and returned.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">success</span></dt>    <dd>     <span class="simpara">      Set to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> in success and <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> in failure.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-fetch-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   The stored variable or array of variables on success; <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure  </p> </div> <div class="refsect1 changelog" id="refsect1-function.apcu-fetch-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>PECL apcu 3.0.17</td>      <td>       The <span class="parameter" style="color:#3A95FF">success</span> parameter was added.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.apcu-fetch-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 A <span class="function"><strong style="color:#CC7832">apcu_fetch()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'BAR'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">apcu_store</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #9876AA">\$bar</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">apcu_fetch</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">string(3)&nbsp;"BAR"</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-fetch-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_store()} - 缓存一个变量到存储中</span></li>   <li><span class="function">{@link apcu_delete()} - Removes a stored variable from the cache</span></li>   <li><span class="classname"><a href="https://php.net/manual/zh/class.apcuiterator.php" class="classname">APCUIterator</a></span></li>  </ul> </div></div>
 * 
 * Fetch a stored variable from the cache
 * @link https://php.net/manual/zh/function.apcu-fetch.php
 * @param string|string[] $key The key used to store the value (with apcu_store()).
 * If an array is passed then each element is fetched and returned.
 * @param bool|null &$success Set to TRUE in success and FALSE in failure.
 * @return mixed|false The stored variable or array of variables on success; FALSE on failure.
 */
function apcu_fetch($key, &$success = null) {}

/**
 * <div id="function.apcu-delete" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_delete</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.0)</p><p class="refpurpose"><span class="refname">apcu_delete</span> — <span class="dc-title">   Removes a stored variable from the cache  </span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-delete-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_delete</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="simpara">   Removes a stored variable from the cache.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-delete-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>    <span class="simpara">     A <span class="parameter" style="color:#3A95FF">key</span> used to store the value as a     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> for a single key,     or as an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of strings for several keys,     or as an <span class="classname"><a href="https://php.net/manual/zh/class.apcuiterator.php" class="classname">APCUIterator</a></span> <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.object.php" class="type object" style="color:#EAB766">object</a></span>.    </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-delete-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   If <span class="parameter" style="color:#3A95FF">key</span> is an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>, an indexed <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of the keys is returned.   Otherwise <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> is returned on success, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.  </p> </div> <div class="refsect1 examples" id="refsect1-function.apcu-delete-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 A <span class="function"><strong style="color:#CC7832">apcu_delete()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'BAR'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">apcu_store</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #9876AA">\$bar</span><span style="color: #007700">);<br></span><span style="color: #9876AA">apcu_delete</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">);<br></span><span style="color: #FF8000">// this is obviously useless in this form<br><br>// Alternatively delete multiple keys.<br></span><span style="color: #9876AA">apcu_delete</span><span style="color: #007700">([</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">, </span><span style="color: #DD0000">'baz'</span><span style="color: #007700">]);<br><br></span><span style="color: #FF8000">// Or use an Iterator with a regular expression.<br></span><span style="color: #9876AA">apcu_delete</span><span style="color: #007700">(new </span><span style="color: #9876AA">APCUIterator</span><span style="color: #007700">(</span><span style="color: #DD0000">'#^myprefix_#'</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-delete-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_store()} - 缓存一个变量到存储中</span></li>   <li><span class="function">{@link apcu_fetch()} - Fetch a stored variable from the cache</span></li>   <li><span class="function">{@link apcu_clear_cache()} - Clears the APCu cache</span></li>   <li><span class="classname"><a href="https://php.net/manual/zh/class.apcuiterator.php" class="classname">APCUIterator</a></span></li>  </ul> </div></div>
 * 
 * Removes a stored variable from the cache
 * @link https://php.net/manual/zh/function.apcu-delete.php
 * @param string|string[]|APCUIterator $key The key used to store the value (with apcu_store()).
 * @return bool|string[] Returns TRUE on success or FALSE on failure. For array of keys returns list of failed keys.
 */
function apcu_delete($key) {}

/**
 * <div id="function.apcu-add" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_add</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.0)</p><p class="refpurpose"><span class="refname">apcu_add</span> — <span class="dc-title">   缓存一个新变量到存储中  </span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-add-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_add</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$var</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$ttl</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="methodsynopsis dc-description"><span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_add</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$values</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$unused</span><span class="initializer"> = NULL</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$ttl</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="simpara">   将一个从未被缓存过的变量添加到到存储中。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    与 PHP 中常见的变量生命周期不同的是，通过 <span class="function"><strong style="color:#CC7832">apcu_add()</strong></span> 存储的变量可以在多个 request 之间共享（直到该变量从 cache 中被删除）。   </span>  </p></blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-add-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <span class="simpara">      使用此名称存储变量。<span class="parameter" style="color:#3A95FF">key</span> 必须是唯一的，因此如果用 <span class="function"><strong style="color:#CC7832">apcu_add()</strong></span> 存储变量时指定的 key 已经存在， 就会直接返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，不会覆写已有的数据。（这也是 <span class="function"><strong style="color:#CC7832">apcu_add()</strong></span> 和 <span class="function">{@link apcu_store()}</span> 之间唯一的区别。）     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">var</span></dt>    <dd>     <span class="simpara">      被存储的变量     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">ttl</span></dt>    <dd>     <span class="simpara">      变量生存时间（Time To Live）；被存储的 <span class="parameter" style="color:#3A95FF">var</span> 经过 <span class="parameter" style="color:#3A95FF">ttl</span> 秒后，会从存储中被删除（下一次请求时）。如果没提供 <span class="parameter" style="color:#3A95FF">ttl</span> （或 <span class="parameter" style="color:#3A95FF">ttl</span> 为 <span class="literal">0</span> ），该变量会一直存在直到手动删除它，或者其他原因导致该变量从缓存中消失（清除，重启等等。）。     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">values</span></dt>    <dd>     <span class="simpara">      数组索引作为 key，数组值作为被存储的 var。     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-add-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   变量被成功添加时返回 TRUE，否则返回 FALSE。第二种语法返回包含添加失败的 key 的数组。  </p> </div> <div class="refsect1 examples" id="refsect1-function.apcu-add-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1  <span class="function"><strong style="color:#CC7832">apcu_add()</strong></span> 示例</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'BAR'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">apcu_add</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #9876AA">\$bar</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">apcu_fetch</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">));<br>echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'NEVER GETS SET'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">apcu_add</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #9876AA">\$bar</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">apcu_fetch</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">));<br>echo </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">string(3)&nbsp;"BAR"<br>string(3)&nbsp;"BAR"</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-add-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_store()} - 缓存一个变量到存储中</span></li>   <li><span class="function">{@link apcu_fetch()} - Fetch a stored variable from the cache</span></li>   <li><span class="function">{@link apcu_delete()} - Removes a stored variable from the cache</span></li>  </ul> </div></div>
 * 
 * Caches a variable in the data store, only if it's not already stored
 * @link https://php.net/manual/zh/function.apcu-add.php
 * @param string|array $key Store the variable using this name. Keys are cache-unique,
 * so attempting to use apcu_add() to store data with a key that already exists will not
 * overwrite the existing data, and will instead return FALSE. (This is the only difference
 * between apcu_add() and apcu_store().)
 * Array: Names in key, variables in value.
 * @param mixed $var The variable to store
 * @param int $ttl Time To Live; store var in the cache for ttl seconds. After the ttl has passed,
 * the stored variable will be expunged from the cache (on the next request). If no ttl is supplied
 * (or if the ttl is 0), the value will persist until it is removed from the cache manually,
 * or otherwise fails to exist in the cache (clear, restart, etc.).
 * @return bool|array Returns TRUE if something has effectively been added into the cache, FALSE otherwise.
 * Second syntax returns array with error keys.
 */
function apcu_add($key, $var, $ttl = 0) {}

/**
 * <div id="function.apcu-exists" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_exists</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.0)</p><p class="refpurpose"><span class="refname">apcu_exists</span> — <span class="dc-title">Checks if entry exists</span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-exists-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_exists</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></span> <span class="parameter" style="color:#3A95FF">\$keys</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></span></div>  <p class="simpara">   Checks if one or more APCu entries exist.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-exists-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">keys</span></dt>    <dd>     <span class="simpara">      A <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>, or an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of strings, that      contain keys.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-exists-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the key exists, otherwise <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> Or if an   <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> was passed to <span class="parameter" style="color:#3A95FF">keys</span>, then   an array is returned that contains all existing keys, or an empty   array if none exist.  </p> </div> <div class="refsect1 examples" id="refsect1-function.apcu-exists-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">apcu_exists()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$fruit  </span><span style="color: #007700">= </span><span style="color: #DD0000">'apple'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$veggie </span><span style="color: #007700">= </span><span style="color: #DD0000">'carrot'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">apcu_store</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #9876AA">\$fruit</span><span style="color: #007700">);<br></span><span style="color: #9876AA">apcu_store</span><span style="color: #007700">(</span><span style="color: #DD0000">'bar'</span><span style="color: #007700">, </span><span style="color: #9876AA">\$veggie</span><span style="color: #007700">);<br><br>if (</span><span style="color: #9876AA">apcu_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #DD0000">"Foo exists: "</span><span style="color: #007700">;<br>    echo </span><span style="color: #9876AA">apcu_fetch</span><span style="color: #007700">(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">);<br>} else {<br>    echo </span><span style="color: #DD0000">"Foo does not exist"</span><span style="color: #007700">;<br>}<br><br>echo </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>if (</span><span style="color: #9876AA">apcu_exists</span><span style="color: #007700">(</span><span style="color: #DD0000">'baz'</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #DD0000">"Baz exists."</span><span style="color: #007700">;<br>} else {<br>    echo </span><span style="color: #DD0000">"Baz does not exist"</span><span style="color: #007700">;<br>}<br><br>echo </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$ret </span><span style="color: #007700">= </span><span style="color: #9876AA">apcu_exists</span><span style="color: #007700">(array(</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #DD0000">'donotexist'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">));<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ret</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例的输出类似于：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Foo&nbsp;exists:&nbsp;apple<br>Baz&nbsp;does&nbsp;not&nbsp;exist<br>array(2)&nbsp;{<br>&nbsp;&nbsp;["foo"]=&gt;<br>&nbsp;&nbsp;bool(true)<br>&nbsp;&nbsp;["bar"]=&gt;<br>&nbsp;&nbsp;bool(true)<br>}</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-exists-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_cache_info()} - 从 APCu 存储中获取缓存信息</span></li>   <li><span class="function">{@link apcu_fetch()} - Fetch a stored variable from the cache</span></li>  </ul> </div></div>
 * 
 * Checks if APCu key exists
 * @link https://php.net/manual/zh/function.apcu-exists.php
 * @param string|string[] $keys A string, or an array of strings, that contain keys.
 * @return bool|string[] Returns TRUE if the key exists, otherwise FALSE
 * Or if an array was passed to keys, then an array is returned that
 * contains all existing keys, or an empty array if none exist.
 */
function apcu_exists($keys) {}

/**
 * <div id="function.apcu-inc" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_inc</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.0)</p><p class="refpurpose"><span class="refname">apcu_inc</span> — <span class="dc-title">Increase a stored number</span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-inc-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_inc</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$step</span><span class="initializer"> = 1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;\$success</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$ttl</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="simpara">   Increases a stored number.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-inc-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <span class="simpara">      The key of the value being increased.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">step</span></dt>    <dd>     <span class="simpara">      The step, or value to increase.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">success</span></dt>    <dd>     <span class="simpara">      Optionally pass the success or fail boolean value to      this referenced variable.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">ttl</span></dt>    <dd>     <span class="simpara">      TTL to use if the operation inserts a new value (rather than incrementing an existing one).     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-inc-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns the current value of <span class="parameter" style="color:#3A95FF">key</span>'s value on success,    或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>  </p> </div> <div class="refsect1 examples" id="refsect1-function.apcu-inc-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">apcu_inc()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Let's do something with success"</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">apcu_store</span><span style="color: #007700">(</span><span style="color: #DD0000">'anumber'</span><span style="color: #007700">, </span><span style="color: #9876AA">42</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">apcu_fetch</span><span style="color: #007700">(</span><span style="color: #DD0000">'anumber'</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br>echo </span><span style="color: #9876AA">apcu_inc</span><span style="color: #007700">(</span><span style="color: #DD0000">'anumber'</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">apcu_inc</span><span style="color: #007700">(</span><span style="color: #DD0000">'anumber'</span><span style="color: #007700">, </span><span style="color: #9876AA">10</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">apcu_inc</span><span style="color: #007700">(</span><span style="color: #DD0000">'anumber'</span><span style="color: #007700">, </span><span style="color: #9876AA">10</span><span style="color: #007700">, </span><span style="color: #9876AA">\$success</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$success</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">"Now, let's fail"</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">apcu_store</span><span style="color: #007700">(</span><span style="color: #DD0000">'astring'</span><span style="color: #007700">, </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$ret </span><span style="color: #007700">= </span><span style="color: #9876AA">apcu_inc</span><span style="color: #007700">(</span><span style="color: #DD0000">'astring'</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">\$fail</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ret</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$fail</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例的输出类似于：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Let's&nbsp;do&nbsp;something&nbsp;with&nbsp;success<br>42<br>43<br>53<br>63<br>bool(true)<br>Now,&nbsp;let's&nbsp;fail<br><br>bool(false)<br>bool(false)</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-inc-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_dec()} - Decrease a stored number</span></li>  </ul> </div></div>
 * 
 * Increase a stored number
 * @link https://php.net/manual/zh/function.apcu-inc.php
 * @param string $key The key of the value being increased.
 * @param int $step The step, or value to increase.
 * @param int $ttl Time To Live; store var in the cache for ttl seconds. After the ttl has passed,
 * the stored variable will be expunged from the cache (on the next request). If no ttl is supplied
 * (or if the ttl is 0), the value will persist until it is removed from the cache manually,
 * or otherwise fails to exist in the cache (clear, restart, etc.).
 * @param bool|null &$success Optionally pass the success or fail boolean value to this referenced variable.
 * @return int|false Returns the current value of key's value on success, or FALSE on failure.
 */
function apcu_inc($key, $step = 1, &$success = null, $ttl = 0) {}

/**
 * <div id="function.apcu-dec" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_dec</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.0)</p><p class="refpurpose"><span class="refname">apcu_dec</span> — <span class="dc-title">Decrease a stored number</span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-dec-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_dec</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$step</span><span class="initializer"> = 1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;\$success</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$ttl</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="simpara">   Decreases a stored integer value.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-dec-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <span class="simpara">      The key of the value being decreased.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">step</span></dt>    <dd>     <span class="simpara">      The step, or value to decrease.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">success</span></dt>    <dd>     <span class="simpara">      Optionally pass the success or fail boolean value to      this referenced variable.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">ttl</span></dt>    <dd>     <span class="simpara">      TTL to use if the operation inserts a new value (rather than decrementing an existing one).     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-dec-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns the current value of <span class="parameter" style="color:#3A95FF">key</span>'s value on success,    或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>  </p> </div> <div class="refsect1 examples" id="refsect1-function.apcu-dec-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">apcu_dec()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Let's do something with success"</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">apcu_store</span><span style="color: #007700">(</span><span style="color: #DD0000">'anumber'</span><span style="color: #007700">, </span><span style="color: #9876AA">42</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">apcu_fetch</span><span style="color: #007700">(</span><span style="color: #DD0000">'anumber'</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br>echo </span><span style="color: #9876AA">apcu_dec</span><span style="color: #007700">(</span><span style="color: #DD0000">'anumber'</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">apcu_dec</span><span style="color: #007700">(</span><span style="color: #DD0000">'anumber'</span><span style="color: #007700">, </span><span style="color: #9876AA">10</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">apcu_dec</span><span style="color: #007700">(</span><span style="color: #DD0000">'anumber'</span><span style="color: #007700">, </span><span style="color: #9876AA">10</span><span style="color: #007700">, </span><span style="color: #9876AA">\$success</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$success</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">"Now, let's fail"</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">apcu_store</span><span style="color: #007700">(</span><span style="color: #DD0000">'astring'</span><span style="color: #007700">, </span><span style="color: #DD0000">'foo'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$ret </span><span style="color: #007700">= </span><span style="color: #9876AA">apcu_dec</span><span style="color: #007700">(</span><span style="color: #DD0000">'astring'</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">\$fail</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ret</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$fail</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例的输出类似于：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Let's&nbsp;do&nbsp;something&nbsp;with&nbsp;success<br>42<br>41<br>31<br>21<br>bool(true)<br>Now,&nbsp;let's&nbsp;fail<br><br>bool(false)<br>bool(false)</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-dec-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_inc()} - Increase a stored number</span></li>  </ul> </div></div>
 * 
 * Decrease a stored number
 * @link https://php.net/manual/zh/function.apcu-dec.php
 * @param string $key The key of the value being decreased.
 * @param int $step The step, or value to decrease.
 * @param int $ttl Time To Live; store var in the cache for ttl seconds. After the ttl has passed,
 * the stored variable will be expunged from the cache (on the next request). If no ttl is supplied
 * (or if the ttl is 0), the value will persist until it is removed from the cache manually,
 * or otherwise fails to exist in the cache (clear, restart, etc.).
 * @param bool|null &$success Optionally pass the success or fail boolean value to this referenced variable.
 * @return int|false Returns the current value of key's value on success, or FALSE on failure.
 */
function apcu_dec($key, $step = 1, &$success = null, $ttl = 0) {}

/**
 * <div id="function.apcu-cas" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_cas</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.0)</p><p class="refpurpose"><span class="refname">apcu_cas</span> — <span class="dc-title">Updates an old value with a new value</span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-cas-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_cas</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$old</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$new</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="simpara">   <span class="function"><strong style="color:#CC7832">apcu_cas()</strong></span> updates an already existing integer value if the   <span class="parameter" style="color:#3A95FF">old</span> parameter matches the currently stored value   with the value of the <span class="parameter" style="color:#3A95FF">new</span> parameter.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-cas-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <span class="simpara">      The key of the value being updated.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">old</span></dt>    <dd>     <span class="simpara">      The old value (the value currently stored).     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">new</span></dt>    <dd>     <span class="simpara">      The new value to update to.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-cas-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.apcu-cas-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 <span class="function"><strong style="color:#CC7832">apcu_cas()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>apcu_store</span><span style="color: #007700">(</span><span style="color: #DD0000">'foobar'</span><span style="color: #007700">, </span><span style="color: #9876AA">2</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">'\$foobar = 2'</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">'\$foobar == 1 ? 2 : 1 = '</span><span style="color: #007700">, (</span><span style="color: #9876AA">apcu_cas</span><span style="color: #007700">(</span><span style="color: #DD0000">'foobar'</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">2</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'ok' </span><span style="color: #007700">: </span><span style="color: #DD0000">'fail'</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">'\$foobar == 2 ? 1 : 2 = '</span><span style="color: #007700">, (</span><span style="color: #9876AA">apcu_cas</span><span style="color: #007700">(</span><span style="color: #DD0000">'foobar'</span><span style="color: #007700">, </span><span style="color: #9876AA">2</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'ok' </span><span style="color: #007700">: </span><span style="color: #DD0000">'fail'</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br>echo </span><span style="color: #DD0000">'\$foobar = '</span><span style="color: #007700">, </span><span style="color: #9876AA">apcu_fetch</span><span style="color: #007700">(</span><span style="color: #DD0000">'foobar'</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br>echo </span><span style="color: #DD0000">'\$f__bar == 1 ? 2 : 1 = '</span><span style="color: #007700">, (</span><span style="color: #9876AA">apcu_cas</span><span style="color: #007700">(</span><span style="color: #DD0000">'f__bar'</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">2</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'ok' </span><span style="color: #007700">: </span><span style="color: #DD0000">'fail'</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">apcu_store</span><span style="color: #007700">(</span><span style="color: #DD0000">'perfection'</span><span style="color: #007700">, </span><span style="color: #DD0000">'xyz'</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">'\$perfection == 2 ? 1 : 2 = '</span><span style="color: #007700">, (</span><span style="color: #9876AA">apcu_cas</span><span style="color: #007700">(</span><span style="color: #DD0000">'perfection'</span><span style="color: #007700">, </span><span style="color: #9876AA">2</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'ok' </span><span style="color: #007700">: </span><span style="color: #DD0000">'epic fail'</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br>echo </span><span style="color: #DD0000">'\$foobar = '</span><span style="color: #007700">, </span><span style="color: #9876AA">apcu_fetch</span><span style="color: #007700">(</span><span style="color: #DD0000">'foobar'</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例的输出类似于：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">\$foobar&nbsp;=&nbsp;2<br>\$foobar&nbsp;==&nbsp;1&nbsp;?&nbsp;2&nbsp;:&nbsp;1&nbsp;=&nbsp;fail<br>\$foobar&nbsp;==&nbsp;2&nbsp;?&nbsp;1&nbsp;:&nbsp;2&nbsp;=&nbsp;ok<br>\$foobar&nbsp;=&nbsp;1<br>\$f__bar&nbsp;==&nbsp;1&nbsp;?&nbsp;2&nbsp;:&nbsp;1&nbsp;=&nbsp;fail<br>\$perfection&nbsp;==&nbsp;2&nbsp;?&nbsp;1&nbsp;:&nbsp;2&nbsp;=&nbsp;epic&nbsp;fail<br>\$foobar&nbsp;=&nbsp;1</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-cas-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_dec()} - Decrease a stored number</span></li>   <li><span class="function">{@link apcu_store()} - 缓存一个变量到存储中</span></li>  </ul> </div></div>
 * 
 * Updates an old value with a new value
 *
 * apcu_cas() updates an already existing integer value if the old parameter matches the currently stored value
 * with the value of the new parameter.
 *
 * @link https://php.net/manual/zh/function.apcu-cas.php
 * @param string $key The key of the value being updated.
 * @param int $old The old value (the value currently stored).
 * @param int $new The new value to update to.
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function apcu_cas($key, $old, $new) {}

/**
 * <div id="function.apcu-entry" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_entry</h1>  <p class="verinfo">(PECL apcu &gt;= 5.1.0)</p><p class="refpurpose"><span class="refname">apcu_entry</span> — <span class="dc-title">   Atomically fetch or generate a cache entry  </span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-entry-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_entry</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">\$callback</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$ttl</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="simpara">   Atomically attempts to find <span class="parameter" style="color:#3A95FF">key</span> in the cache, if it cannot be found <span class="parameter" style="color:#3A95FF">callback</span>   is called, passing <span class="parameter" style="color:#3A95FF">key</span> as the only argument. The return value of the call is then cached with the optionally specified   <span class="parameter" style="color:#3A95FF">ttl</span>, and returned.  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    When control enters <span class="function"><strong style="color:#CC7832">apcu_entry()</strong></span> the lock for the cache is acquired exclusively, it is released when control leaves <span class="function"><strong style="color:#CC7832">apcu_entry()</strong></span>:    In effect, this turns the body of <span class="parameter" style="color:#3A95FF">callback</span> into a critical section, disallowing two processes from executing the same code paths concurrently.    In addition, it prohibits the concurrent execution of any other APCu functions, since they will acquire the same lock.   </span>  </p></blockquote>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    The only APCu function that can be called safely by <span class="parameter" style="color:#3A95FF">callback</span> is <span class="function"><strong style="color:#CC7832">apcu_entry()</strong></span>.   </p>  </div> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-entry-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <span class="simpara">      Identity of cache entry     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">callback</span></dt>    <dd>     <span class="simpara">      A callable that accepts <span class="parameter" style="color:#3A95FF">key</span> as the only argument and returns the value to cache.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">ttl</span></dt>    <dd>     <span class="simpara">      Time To Live; store the <span class="parameter" style="color:#3A95FF">callback</span>'s return value in the cache for      <span class="parameter" style="color:#3A95FF">ttl</span> seconds. After the      <span class="parameter" style="color:#3A95FF">ttl</span> has passed, the stored entry will be      expunged from the cache (on the next request). If no <span class="parameter" style="color:#3A95FF">ttl</span>      is supplied (or if the <span class="parameter" style="color:#3A95FF">ttl</span> is      <span class="literal">0</span>), the value will persist until it is removed from      the cache manually, or otherwise fails to exist in the cache (clear,      restart, etc.).     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-entry-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns the cached value  </p> </div> <div class="refsect1 examples" id="refsect1-function.apcu-entry-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 An <span class="function"><strong style="color:#CC7832">apcu_entry()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$config </span><span style="color: #007700">= </span><span style="color: #9876AA">apcu_entry</span><span style="color: #007700">(</span><span style="color: #DD0000">"config"</span><span style="color: #007700">, function(</span><span style="color: #9876AA">\$key</span><span style="color: #007700">) {<br> return [<br>   </span><span style="color: #DD0000">"fruit" </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">apcu_entry</span><span style="color: #007700">(</span><span style="color: #DD0000">"config.fruit"</span><span style="color: #007700">, function(</span><span style="color: #9876AA">\$key</span><span style="color: #007700">){<br>     return [<br>       </span><span style="color: #DD0000">"apples"</span><span style="color: #007700">,<br>       </span><span style="color: #DD0000">"pears"<br>     </span><span style="color: #007700">];<br>   }),<br>   </span><span style="color: #DD0000">"people" </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">apcu_entry</span><span style="color: #007700">(</span><span style="color: #DD0000">"config.people"</span><span style="color: #007700">, function(</span><span style="color: #9876AA">\$key</span><span style="color: #007700">){<br>     return [<br>      </span><span style="color: #DD0000">"bob"</span><span style="color: #007700">,<br>      </span><span style="color: #DD0000">"joe"</span><span style="color: #007700">,<br>      </span><span style="color: #DD0000">"niki"<br>     </span><span style="color: #007700">];<br>   })<br> ];<br>});<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(2)&nbsp;{<br>&nbsp;&nbsp;["fruit"]=&gt;<br>&nbsp;&nbsp;array(2)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;string(6)&nbsp;"apples"<br>&nbsp;&nbsp;&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;string(5)&nbsp;"pears"<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;["people"]=&gt;<br>&nbsp;&nbsp;array(3)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;string(3)&nbsp;"bob"<br>&nbsp;&nbsp;&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;string(3)&nbsp;"joe"<br>&nbsp;&nbsp;&nbsp;&nbsp;[2]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;string(4)&nbsp;"niki"<br>&nbsp;&nbsp;}<br>}</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-entry-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_store()} - 缓存一个变量到存储中</span></li>   <li><span class="function">{@link apcu_fetch()} - Fetch a stored variable from the cache</span></li>   <li><span class="function">{@link apcu_delete()} - Removes a stored variable from the cache</span></li>  </ul> </div></div>
 * 
 * Atomically fetch or generate a cache entry
 *
 * <p>Atomically attempts to find key in the cache, if it cannot be found generator is called,
 * passing key as the only argument. The return value of the call is then cached with the optionally
 * specified ttl, and returned.
 * </p>
 *
 * <p>Note: When control enters <i>apcu_entry()</i> the lock for the cache is acquired exclusively, it is released when
 * control leaves apcu_entry(): In effect, this turns the body of generator into a critical section,
 * disallowing two processes from executing the same code paths concurrently.
 * In addition, it prohibits the concurrent execution of any other APCu functions,
 * since they will acquire the same lock.
 * </p>
 *
 * @link https://php.net/manual/zh/function.apcu-entry.php
 *
 * @param string $key Identity of cache entry
 * @param callable $generator A callable that accepts key as the only argument and returns the value to cache.
 * <p>Warning
 * The only APCu function that can be called safely by generator is apcu_entry().</p>
 * @param int $ttl [optional] Time To Live; store var in the cache for ttl seconds.
 * After the ttl has passed, the stored variable will be expunged from the cache (on the next request).
 * If no ttl is supplied (or if the ttl is 0), the value will persist until it is removed from the cache manually,
 * or otherwise fails to exist in the cache (clear, restart, etc.).
 * @return mixed Returns the cached value
 * @since APCu 5.1.0
 */
function apcu_entry($key, callable $generator, $ttl = 0) {}

/**
 * <div id="function.apcu-cache-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_cache_info</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.0)</p><p class="refpurpose"><span class="refname">apcu_cache_info</span> — <span class="dc-title">   从 APCu 存储中获取缓存信息  </span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-cache-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_cache_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$limited</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="simpara">   从 APCu 存储中获取缓存信息和元数据（meta-data）。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-cache-info-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">limited</span></dt>    <dd>     <span class="simpara">      如果 <span class="parameter" style="color:#3A95FF">limited</span> 为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，则不会返回具体被缓存的数据的列表，这在尝试根据统计数据进行调用优化时是很有用的。     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-cache-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   成功时返回包含缓存数据（和元数据）的数组 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    当 <span class="function"><strong style="color:#CC7832">apcu_cache_info()</strong></span> 无法获取到缓存信息时会触发警告（warning），这种情况通常是因为没有开启 APC 功能。   </span>  </p></blockquote> </div> <div class="refsect1 changelog" id="refsect1-function.apcu-cache-info-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>PECL apcu 3.0.11</td>      <td>       引入了 <span class="parameter" style="color:#3A95FF">limited</span> 参数。      </td>     </tr>     <tr>      <td>PECL apcu 3.0.16</td>      <td>       为 <span class="parameter" style="color:#3A95FF">cache_type</span> 参数增加了 "<span class="literal">filehits</span>" 选项。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.apcu-cache-info-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1  <span class="function"><strong style="color:#CC7832">apcu_cache_info()</strong></span> 示例</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">apcu_cache_info</span><span style="color: #007700">());<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例的输出类似于：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[num_slots]&nbsp;=&gt;&nbsp;2000<br>&nbsp;&nbsp;&nbsp;&nbsp;[ttl]&nbsp;=&gt;&nbsp;0<br>&nbsp;&nbsp;&nbsp;&nbsp;[num_hits]&nbsp;=&gt;&nbsp;9<br>&nbsp;&nbsp;&nbsp;&nbsp;[num_misses]&nbsp;=&gt;&nbsp;3<br>&nbsp;&nbsp;&nbsp;&nbsp;[start_time]&nbsp;=&gt;&nbsp;1123958803<br>&nbsp;&nbsp;&nbsp;&nbsp;[cache_list]&nbsp;=&gt;&nbsp;Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0]&nbsp;=&gt;&nbsp;Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[filename]&nbsp;=&gt;&nbsp;/path/to/apcu_test.php<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[device]&nbsp;=&gt;&nbsp;29954<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[inode]&nbsp;=&gt;&nbsp;1130511<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[type]&nbsp;=&gt;&nbsp;file<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[num_hits]&nbsp;=&gt;&nbsp;1<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mtime]&nbsp;=&gt;&nbsp;1123960686<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[creation_time]&nbsp;=&gt;&nbsp;1123960696<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[deletion_time]&nbsp;=&gt;&nbsp;0<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[access_time]&nbsp;=&gt;&nbsp;1123962864<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ref_count]&nbsp;=&gt;&nbsp;1<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[mem_size]&nbsp;=&gt;&nbsp;677<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]&nbsp;=&gt;&nbsp;Array&nbsp;(...依次列出每个缓存文件)<br>)</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-cache-info-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><a href="https://php.net/manual/zh/apcu.configuration.php" class="link">APCu 配置指令</a></li>   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::getTotalSize()} - Get total cache size</span></li>   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::getTotalHits()} - Get total cache hits</span></li>   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::getTotalCount()} - Get total count</span></li>  </ul> </div></div>
 * 
 * Retrieves cached information from APCu's data store
 *
 * @link https://php.net/manual/zh/function.apcu-cache-info.php
 *
 * @param bool $limited If limited is TRUE, the return value will exclude the individual list of cache entries.
 * This is useful when trying to optimize calls for statistics gathering.
 * @return array|false Array of cached data (and meta-data) or FALSE on failure
 */
function apcu_cache_info($limited = false) {}

/**
 * <div id="function.apcu-enabled" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_enabled</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.3)</p><p class="refpurpose"><span class="refname">apcu_enabled</span> — <span class="dc-title">Whether APCu is usable in the current environment</span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-enabled-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_enabled</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="simpara">   Returns whether APCu is usable in the current environment.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-enabled-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-enabled-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> when APCu is usable in the current environment, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div></div>
 * 
 * Whether APCu is usable in the current environment
 *
 * @link https://www.php.net/manual/en/function.apcu-enabled.php
 *
 * @return bool
 */
function apcu_enabled() {}

/**
 * <div id="function.apcu-key-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">apcu_key_info</h1>  <p class="verinfo">(PECL apcu &gt;= 4.0.2)</p><p class="refpurpose"><span class="refname">apcu_key_info</span> — <span class="dc-title">   Get detailed information about the cache key  </span></p> </div> <div class="refsect1 description" id="refsect1-function.apcu-key-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>apcu_key_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></span></div>  <p class="simpara">   Get detailed information about the cache key  </p> </div> <div class="refsect1 parameters" id="refsect1-function.apcu-key-info-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <span class="simpara">      The key to retrieve information for.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.apcu-key-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   An array containing the detailed information about the cache key, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> if the key does not exist.  </p> </div> <div class="refsect1 examples" id="refsect1-function.apcu-key-info-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 A <span class="function"><strong style="color:#CC7832">apcu_key_info()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>apcu_add</span><span style="color: #007700">(</span><span style="color: #DD0000">'a'</span><span style="color: #007700">,</span><span style="color: #DD0000">'b'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">apcu_key_info</span><span style="color: #007700">(</span><span style="color: #DD0000">'a'</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(7)&nbsp;{<br>&nbsp;&nbsp;["hits"]=&gt;<br>&nbsp;&nbsp;int(0)<br>&nbsp;&nbsp;["access_time"]=&gt;<br>&nbsp;&nbsp;int(1606701783)<br>&nbsp;&nbsp;["mtime"]=&gt;<br>&nbsp;&nbsp;int(1606701783)<br>&nbsp;&nbsp;["creation_time"]=&gt;<br>&nbsp;&nbsp;int(1606701783)<br>&nbsp;&nbsp;["deletion_time"]=&gt;<br>&nbsp;&nbsp;int(0)<br>&nbsp;&nbsp;["ttl"]=&gt;<br>&nbsp;&nbsp;int(0)<br>&nbsp;&nbsp;["refs"]=&gt;<br>&nbsp;&nbsp;int(0)<br>}</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.apcu-key-info-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_store()} - 缓存一个变量到存储中</span></li>   <li><span class="function">{@link apcu_fetch()} - Fetch a stored variable from the cache</span></li>   <li><span class="function">{@link apcu_delete()} - Removes a stored variable from the cache</span></li>  </ul> </div></div>
 * 
 * @param string $key
 * @return array|null
 */
function apcu_key_info($key) {}

/**
 * <div id="class.apcuiterator" class="reference"> <h1 class="title">APCUIterator 类</h1>  <div class="partintro"><p class="verinfo">(PECL apcu &gt;= 5.0.0)</p>  <div class="section" id="apcuiterator.intro">   <h2 class="title">简介</h2>   <p class="simpara">    <span class="classname"><strong class="classname">APCUIterator</strong></span> 类可以更轻松的迭代大型 APCu 缓存。    它所支持的逐步迭代功能对于遍历大型缓存非常有用，每次加锁后只会获取指定数量（默认 100 条）的缓存条目就会释放锁而非一直锁住整个缓存，以便其他活动对缓存进行操作。    此外，使用正则表达式匹配是更高效的，因为它已经被移到了 C 语言层级（C level）。   </p>  </div>  <div class="section" id="apcuiterator.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">APCUIterator</strong>     </span>     <span class="oointerface"><span class="modifier">implements</span>        <a href="https://php.net/manual/zh/class.iterator.php" class="interfacename">Iterator</a></span> {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/apcuiterator.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">\$search</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$format</span><span class="initializer"> = APC_ITER_ALL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$chunk_size</span><span class="initializer"> = 100</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$list</span><span class="initializer"> = APC_LIST_ACTIVE</span></span><br>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/apcuiterator.current.php" class="methodname" style="color:#CC7832">current</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/apcuiterator.gettotalcount.php" class="methodname" style="color:#CC7832">getTotalCount</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/apcuiterator.gettotalhits.php" class="methodname" style="color:#CC7832">getTotalHits</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/apcuiterator.gettotalsize.php" class="methodname" style="color:#CC7832">getTotalSize</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/apcuiterator.key.php" class="methodname" style="color:#CC7832">key</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/apcuiterator.next.php" class="methodname" style="color:#CC7832">next</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/apcuiterator.rewind.php" class="methodname" style="color:#CC7832">rewind</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/apcuiterator.valid.php" class="methodname" style="color:#CC7832">valid</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link APCUIterator::__construct} — Constructs an APCUIterator iterator object</li><li>{@link APCUIterator::current} — Get current item</li><li>{@link APCUIterator::getTotalCount} — Get total count</li><li>{@link APCUIterator::getTotalHits} — Get total cache hits</li><li>{@link APCUIterator::getTotalSize} — Get total cache size</li><li>{@link APCUIterator::key} — Get iterator key</li><li>{@link APCUIterator::next} — Move pointer to next item</li><li>{@link APCUIterator::rewind} — Rewinds iterator</li><li>{@link APCUIterator::valid} — Checks if current position is valid</li></ul></div>
 * 
 * The APCUIterator class
 *
 * The APCUIterator class makes it easier to iterate over large APCu caches.
 * This is helpful as it allows iterating over large caches in steps, while grabbing a defined number
 * of entries per lock instance, so it frees the cache locks for other activities rather than hold up
 * the entire cache to grab 100 (the default) entries. Also, using regular expression matching is more
 * efficient as it's been moved to the C level.
 *
 * @link https://php.net/manual/zh/class.apcuiterator.php
 * @since APCu 5.0.0
 */
class APCUIterator implements Iterator
{
    /**
 * <div id="apcuiterator.construct" class="refentry"> <div class="refnamediv">  <h1 class="refname">APCUIterator::__construct</h1>  <p class="verinfo">(PECL apcu &gt;= 5.0.0)</p><p class="refpurpose"><span class="refname">APCUIterator::__construct</span> — <span class="dc-title">Constructs an APCUIterator iterator object</span></p> </div> <div class="refsect1 description" id="refsect1-apcuiterator.construct-description">  <h3 class="title">说明</h3>  <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>APCUIterator::__construct</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">\$search</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$format</span><span class="initializer"> = APC_ITER_ALL</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$chunk_size</span><span class="initializer"> = 100</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$list</span><span class="initializer"> = APC_LIST_ACTIVE</span></span><br>)</div>  <p class="simpara">   Constructs an <span class="classname"><a href="https://php.net/manual/zh/class.apcuiterator.php" class="classname">APCUIterator</a></span> <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.object.php" class="type object" style="color:#EAB766">object</a></span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-apcuiterator.construct-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">search</span></dt>    <dd>     <span class="simpara">      Either a <a href="https://php.net/manual/zh/book.pcre.php" class="link">PCRE</a> regular expression that      matches against APCu key names, given as a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>.      Or an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>s with APCu key names.      Or, optionally <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> to skip the search.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">format</span></dt>    <dd>     <span class="simpara">      The desired format, as configured with one or more of the      <a href="https://php.net/manual/zh/apcu.constants.php" class="link">APC_ITER_*</a> constants.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">chunk_size</span></dt>    <dd>     <span class="simpara">      The chunk size. Must be a value greater than 0. The default      value is 100.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">list</span></dt>    <dd>     <span class="simpara">      The type to list. Either pass in <strong><span><a href="https://php.net/manual/zh/apcu.constants.php#constant.apc-list-active">APC_LIST_ACTIVE</a></span></strong>      or <strong><span><a href="https://php.net/manual/zh/apcu.constants.php#constant.apc-list-deleted">APC_LIST_DELETED</a></span></strong>.     </span>    </dd>     </dl> </div> <div class="refsect1 examples" id="refsect1-apcuiterator.construct-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 A <span class="function"><strong style="color:#CC7832">APCUIterator::__construct()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">foreach (new </span><span style="color: #9876AA">APCUIterator</span><span style="color: #007700">(</span><span style="color: #DD0000">'/^counter\./'</span><span style="color: #007700">) as </span><span style="color: #9876AA">\$counter</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">\$counter</span><span style="color: #007700">[</span><span style="color: #9876AA">key</span><span style="color: #007700">]</span><span style="color: #DD0000">: </span><span style="color: #9876AA">\$counter</span><span style="color: #007700">[</span><span style="color: #9876AA">value</span><span style="color: #007700">]</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br>    </span><span style="color: #9876AA">apc_dec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$counter</span><span style="color: #007700">[</span><span style="color: #DD0000">'key'</span><span style="color: #007700">], </span><span style="color: #9876AA">\$counter</span><span style="color: #007700">[</span><span style="color: #DD0000">'value'</span><span style="color: #007700">]);<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-apcuiterator.construct-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link apcu_exists()} - Checks if entry exists</span></li>   <li><span class="function">{@link apcu_cache_info()} - 从 APCu 存储中获取缓存信息</span></li>  </ul> </div></div>
 * 
     * Constructs an APCUIterator iterator object
     * @link https://php.net/manual/zh/apcuiterator.construct.php
     * @param string|string[]|null $search A PCRE regular expression that matches against APCu key names,
     * either as a string for a single regular expression, or as an array of regular expressions.
     * Or, optionally pass in NULL to skip the search.
     * @param int $format The desired format, as configured with one ore more of the APC_ITER_* constants.
     * @param int $chunk_size The chunk size. Must be a value greater than 0. The default value is 100.
     * @param int $list The type to list. Either pass in APC_LIST_ACTIVE  or APC_LIST_DELETED.
     */
    public function __construct($search = null, $format = APC_ITER_ALL, $chunk_size = 100, $list = APC_LIST_ACTIVE) {}

    /**
 * <div id="apcuiterator.rewind" class="refentry"> <div class="refnamediv">  <h1 class="refname">APCUIterator::rewind</h1>  <p class="verinfo">(PECL apcu &gt;= 5.0.0)</p><p class="refpurpose"><span class="refname">APCUIterator::rewind</span> — <span class="dc-title">Rewinds iterator</span></p> </div> <div class="refsect1 description" id="refsect1-apcuiterator.rewind-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>APCUIterator::rewind</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="simpara">   Rewinds back the iterator to the first element.  </p> </div> <div class="refsect1 parameters" id="refsect1-apcuiterator.rewind-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-apcuiterator.rewind-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   没有返回值。  </p> </div> <div class="refsect1 seealso" id="refsect1-apcuiterator.rewind-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::next()} - Move pointer to next item</span></li>   <li><span class="methodname" style="color:#CC7832">{@link Iterator::next()} - 向前移动到下一个元素</span></li>  </ul> </div></div>
 * 
     * Rewinds back the iterator to the first element
     * @link https://php.net/manual/zh/apcuiterator.rewind.php
     */
    public function rewind() {}

    /**
 * <div id="apcuiterator.valid" class="refentry"> <div class="refnamediv">  <h1 class="refname">APCUIterator::valid</h1>  <p class="verinfo">(PECL apcu &gt;= 5.0.0)</p><p class="refpurpose"><span class="refname">APCUIterator::valid</span> — <span class="dc-title">Checks if current position is valid</span></p> </div> <div class="refsect1 description" id="refsect1-apcuiterator.valid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>APCUIterator::valid</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="simpara">   Checks if the current iterator position is valid.  </p> </div> <div class="refsect1 parameters" id="refsect1-apcuiterator.valid-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-apcuiterator.valid-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the current iterator position is valid, otherwise <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 seealso" id="refsect1-apcuiterator.valid-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::current()} - Get current item</span></li>   <li><span class="methodname" style="color:#CC7832">{@link Iterator::valid()} - 检查当前位置是否有效</span></li>  </ul> </div></div>
 * 
     * Checks if the current iterator position is valid
     * @link https://php.net/manual/zh/apcuiterator.valid.php
     * @return bool Returns TRUE if the current iterator position is valid, otherwise FALSE.
     */
    public function valid() {}

    /**
 * <div id="apcuiterator.current" class="refentry"> <div class="refnamediv">  <h1 class="refname">APCUIterator::current</h1>  <p class="verinfo">(PECL apcu &gt;= 5.0.0)</p><p class="refpurpose"><span class="refname">APCUIterator::current</span> — <span class="dc-title">Get current item</span></p> </div> <div class="refsect1 description" id="refsect1-apcuiterator.current-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>APCUIterator::current</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="simpara">   Gets the current item from the <span class="classname"><a href="https://php.net/manual/zh/class.apcuiterator.php" class="classname">APCUIterator</a></span> stack.  </p> </div> <div class="refsect1 parameters" id="refsect1-apcuiterator.current-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-apcuiterator.current-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns the current item on success, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if no   more items exist, or on failure.  </p> </div> <div class="refsect1 seealso" id="refsect1-apcuiterator.current-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::next()} - Move pointer to next item</span></li>   <li><span class="methodname" style="color:#CC7832">{@link Iterator::current()} - 返回当前元素</span></li>  </ul> </div></div>
 * 
     * Gets the current item from the APCUIterator stack
     * @link https://php.net/manual/zh/apcuiterator.current.php
     * @return mixed|false Returns the current item on success, or FALSE if no more items or exist, or on failure.
     */
    public function current() {}

    /**
 * <div id="apcuiterator.key" class="refentry"> <div class="refnamediv">  <h1 class="refname">APCUIterator::key</h1>  <p class="verinfo">(PECL apcu &gt;= 5.0.0)</p><p class="refpurpose"><span class="refname">APCUIterator::key</span> — <span class="dc-title">Get iterator key</span></p> </div> <div class="refsect1 description" id="refsect1-apcuiterator.key-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>APCUIterator::key</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="simpara">   Gets the current iterator key.  </p> </div> <div class="refsect1 parameters" id="refsect1-apcuiterator.key-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-apcuiterator.key-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns the key on success, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> upon failure.  </p> </div> <div class="refsect1 seealso" id="refsect1-apcuiterator.key-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::current()} - Get current item</span></li>   <li><span class="methodname" style="color:#CC7832">{@link Iterator::key()} - 返回当前元素的键</span></li>  </ul> </div></div>
 * 
     * Gets the current iterator key
     * @link https://php.net/manual/zh/apcuiterator.key.php
     * @return string|int|false Returns the key on success, or FALSE upon failure.
     */
    public function key() {}

    /**
 * <div id="apcuiterator.next" class="refentry"> <div class="refnamediv">  <h1 class="refname">APCUIterator::next</h1>  <p class="verinfo">(PECL apcu &gt;= 5.0.0)</p><p class="refpurpose"><span class="refname">APCUIterator::next</span> — <span class="dc-title">Move pointer to next item</span></p> </div> <div class="refsect1 description" id="refsect1-apcuiterator.next-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>APCUIterator::next</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="simpara">   Moves the iterator pointer to the next element.  </p> </div> <div class="refsect1 parameters" id="refsect1-apcuiterator.next-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-apcuiterator.next-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-apcuiterator.next-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::current()} - Get current item</span></li>   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::rewind()} - Rewinds iterator</span></li>   <li><span class="methodname" style="color:#CC7832">{@link Iterator::next()} - 向前移动到下一个元素</span></li>  </ul> </div></div>
 * 
     * Moves the iterator pointer to the next element
     * @link https://php.net/manual/zh/apcuiterator.next.php
     * @return bool Returns TRUE on success or FALSE on failure.
     */
    public function next() {}

    /**
 * <div id="apcuiterator.gettotalhits" class="refentry"> <div class="refnamediv">  <h1 class="refname">APCUIterator::getTotalHits</h1>  <p class="verinfo">(PECL apcu &gt;= 5.0.0)</p><p class="refpurpose"><span class="refname">APCUIterator::getTotalHits</span> — <span class="dc-title">Get total cache hits</span></p> </div> <div class="refsect1 description" id="refsect1-apcuiterator.gettotalhits-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>APCUIterator::getTotalHits</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="simpara">   Gets the total number of cache hits.  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-apcuiterator.gettotalhits-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-apcuiterator.gettotalhits-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   The number of hits on success, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.  </p> </div> <div class="refsect1 seealso" id="refsect1-apcuiterator.gettotalhits-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::getTotalCount()} - Get total count</span></li>   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::getTotalSize()} - Get total cache size</span></li>   <li><span class="function">{@link apcu_cache_info()} - 从 APCu 存储中获取缓存信息</span></li>  </ul> </div></div>
 * 
     * Gets the total number of cache hits
     * @link https://php.net/manual/zh/apcuiterator.gettotalhits.php
     * @return int|false The number of hits on success, or FALSE on failure.
     */
    public function getTotalHits() {}

    /**
 * <div id="apcuiterator.gettotalsize" class="refentry"> <div class="refnamediv">  <h1 class="refname">APCUIterator::getTotalSize</h1>  <p class="verinfo">(PECL apcu &gt;= 5.0.0)</p><p class="refpurpose"><span class="refname">APCUIterator::getTotalSize</span> — <span class="dc-title">Get total cache size</span></p> </div> <div class="refsect1 description" id="refsect1-apcuiterator.gettotalsize-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>APCUIterator::getTotalSize</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="simpara">   Gets the total cache size.  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-apcuiterator.gettotalsize-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-apcuiterator.gettotalsize-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   The total cache size.  </p> </div> <div class="refsect1 seealso" id="refsect1-apcuiterator.gettotalsize-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::getTotalCount()} - Get total count</span></li>   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::getTotalHits()} - Get total cache hits</span></li>   <li><span class="function"><strong style="color:#CC7832">apc_cache_info()</strong></span></li>  </ul> </div></div>
 * 
     * Gets the total cache size
     * @link https://php.net/manual/zh/apcuiterator.gettotalsize.php
     * @return int|false The total cache size.
     */
    public function getTotalSize() {}

    /**
 * <div id="apcuiterator.gettotalcount" class="refentry"> <div class="refnamediv">  <h1 class="refname">APCUIterator::getTotalCount</h1>  <p class="verinfo">(PECL apcu &gt;= 5.0.0)</p><p class="refpurpose"><span class="refname">APCUIterator::getTotalCount</span> — <span class="dc-title">Get total count</span></p> </div> <div class="refsect1 description" id="refsect1-apcuiterator.gettotalcount-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>APCUIterator::getTotalCount</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="simpara">   Get the total count.  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-apcuiterator.gettotalcount-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-apcuiterator.gettotalcount-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   The total count.  </p> </div> <div class="refsect1 seealso" id="refsect1-apcuiterator.gettotalcount-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::getTotalHits()} - Get total cache hits</span></li>   <li><span class="methodname" style="color:#CC7832">{@link APCUIterator::getTotalSize()} - Get total cache size</span></li>   <li><span class="function">{@link apcu_cache_info()} - 从 APCu 存储中获取缓存信息</span></li>  </ul> </div></div>
 * 
     * Get the total count
     * @link https://php.net/manual/zh/apcuiterator.gettotalcount.php
     * @return int|false The total count.
     */
    public function getTotalCount() {}
}
