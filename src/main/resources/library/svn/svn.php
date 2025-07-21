<?php

// Start of svn v.1.0.1

class Svn
{
    public const NON_RECURSIVE = 1;
    public const DISCOVER_CHANGED_PATHS = 2;
    public const OMIT_MESSAGES = 4;
    public const STOP_ON_COPY = 8;
    public const ALL = 16;
    public const SHOW_UPDATES = 32;
    public const NO_IGNORE = 64;
    public const IGNORE_EXTERNALS = 128;
    public const INITIAL = 1;
    public const HEAD = -1;
    public const BASE = -2;
    public const COMMITTED = -3;
    public const PREV = -4;
    public const UNSPECIFIED = -5;

    public static function checkout() {}

    public static function cat() {}

    public static function ls() {}

    public static function log() {}

    public static function auth_set_parameter() {}

    public static function auth_get_parameter() {}

    public static function client_version() {}

    public static function config_ensure() {}

    public static function diff() {}

    public static function cleanup() {}

    public static function revert() {}

    public static function resolved() {}

    public static function commit() {}

    public static function lock() {}

    public static function unlock() {}

    public static function add() {}

    public static function status() {}

    public static function update() {}

    public static function update2() {}

    public static function import() {}

    public static function info() {}

    public static function export() {}

    public static function copy() {}

    public static function switch() {}

    public static function blame() {}

    public static function delete() {}

    public static function mkdir() {}

    public static function move() {}

    public static function proplist() {}

    public static function propget() {}

    public static function propset() {}

    public static function prop_delete() {}

    public static function revprop_get() {}

    public static function revprop_set() {}

    public static function revprop_delete() {}

    public static function repos_create() {}

    public static function repos_recover() {}

    public static function repos_hotcopy() {}

    public static function repos_open() {}

    public static function repos_fs() {}

    public static function repos_fs_begin_txn_for_commit() {}

    public static function repos_fs_commit_txn() {}
}

class SvnWc
{
    public const NONE = 1;
    public const UNVERSIONED = 2;
    public const NORMAL = 3;
    public const ADDED = 4;
    public const MISSING = 5;
    public const DELETED = 6;
    public const REPLACED = 7;
    public const MODIFIED = 8;
    public const MERGED = 9;
    public const CONFLICTED = 10;
    public const IGNORED = 11;
    public const OBSTRUCTED = 12;
    public const EXTERNAL = 13;
    public const INCOMPLETE = 14;
}

class SvnWcSchedule
{
    public const NORMAL = 0;
    public const ADD = 1;
    public const DELETE = 2;
    public const REPLACE = 3;
}

class SvnNode
{
    public const NONE = 0;
    public const FILE = 1;
    public const DIR = 2;
    public const UNKNOWN = 3;
}

/**
* <div id="function.svn-checkout" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_checkout</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_checkout</span> — <span class="dc-title">Checks out a working copy from the repository</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-checkout-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_checkout</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$repos</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$targetpath</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$revision</span><span class="initializer"> = ?</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Checks out a working copy from the repository at <span class="parameter" style="color:#3A95FF">repos</span>   to <span class="parameter" style="color:#3A95FF">targetpath</span> at revision <span class="parameter" style="color:#3A95FF">revision</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-checkout-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">repos</span></dt>     <dd>      <p class="para">       String URL path to directory in repository to check out.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">targetpath</span></dt>     <dd>      <p class="para">       String local path to directory to check out in to      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">相对路径将会以PHP执行文件所在目录作为当前工作目录进行解析。如果希望依据脚本所在目录解析, 使用<span class="function">{@link realpath()}</span> 或 dirname(__FILE__)。</span></p></blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">revision</span></dt>     <dd>      <p class="para">       Integer revision number of repository to check out. Default is       HEAD, the most recent revision.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       Any combination of <strong><span>SVN_NON_RECURSIVE</span></strong> and       <strong><span>SVN_IGNORE_EXTERNALS</span></strong>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-checkout-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>   <div class="refsect1 examples" id="refsect1-function.svn-checkout-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4841">    <p><strong>示例 #1 Basic example</strong></p>    <div class="example-contents"><p>     This example demonstrates how to check out a directory from     a repository to a directory named calc:    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>svn_checkout</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/svnroot/calc/trunk'</span><span style="color: #007700">, </span><span style="color: #9876AA">dirname</span><span style="color: #007700">(</span><span style="color: #9876AA">__FILE__</span><span style="color: #007700">) . </span><span style="color: #DD0000">'/calc'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     The <span class="literal">dirname(__FILE__)</span> call is necessary in order     to convert the calc relative path into an absolute one. If calc     exists, you can also use <span class="function">{@link realpath()}</span> to retrieve     an absolute path.    </p></div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-checkout-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> <div class="refsect1 seealso" id="refsect1-function.svn-checkout-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link svn_add()} - 在工作目录列入新增项</span></li>    <li><span class="function">{@link svn_commit()} - 将修改的本地文件副本发送至版本库</span></li>    <li><span class="function">{@link svn_status()} - Returns the status of working copy files and directories</span></li>    <li><span class="function">{@link svn_update()} - Update working copy</span></li>    <li><a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.checkout.html" class="link external">» SVN documentation on svn checkout</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Checks out a working copy from the repository
 * @link https://php.net/manual/zh/function.svn-checkout.php
 * @param string $repos <p>
 * String URL path to directory in repository to check out.
 * </p>
 * @param string $targetpath <p>
 * String local path to directory to check out in to
 * </p>
 * Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script&#x00027;s working directory, use <b>realpath</b> or dirname(__FILE__).
 * @param int $revision [optional] <p>
 * Integer revision number of repository to check out. Default is
 * HEAD, the most recent revision.
 * </p>
 * @param int $flags [optional] <p>
 * Any combination of <b>SVN_NON_RECURSIVE</b> and
 * <b>SVN_IGNORE_EXTERNALS</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function svn_checkout($repos, $targetpath, $revision = SVN_REVISION_HEAD, $flags = 0) {}

/**
* <div id="function.svn-cat" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_cat</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_cat</span> — <span class="dc-title">Returns the contents of a file in a repository</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-cat-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_cat</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$repos_url</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$revision_no</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Returns the contents of the URL <span class="parameter" style="color:#3A95FF">repos_url</span> to   a file in the repository, optionally at revision number   <span class="parameter" style="color:#3A95FF">revision_no</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-cat-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">repos_url</span></dt>     <dd>      <p class="para">       String URL path to item in a repository.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">revision_no</span></dt>     <dd>      <p class="para">       Integer revision number of item to retrieve, default is the HEAD       revision.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-cat-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the string contents of the item from the repository on   success, and <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.  </p> </div>   <div class="refsect1 examples" id="refsect1-function.svn-cat-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4840">    <p><strong>示例 #1 Basic example</strong></p>    <div class="example-contents"><p>     This example retrieves the contents of a file at revision 28:    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$contents </span><span style="color: #007700">= </span><span style="color: #9876AA">svn_cat</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/svnroot/calc/gui.c'</span><span style="color: #007700">, </span><span style="color: #9876AA">28</span><span style="color: #007700">)<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-cat-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> <div class="refsect1 seealso" id="refsect1-function.svn-cat-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function"><strong>svn_list()</strong></span></li>    <li><a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.cat.html" class="link external">» SVN documentation on svn cat</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Returns the contents of a file in a repository
 * @link https://php.net/manual/zh/function.svn-cat.php
 * @param string $repos_url <p>
 * String URL path to item in a repository.
 * </p>
 * @param int $revision_no [optional] <p>
 * Integer revision number of item to retrieve, default is the HEAD
 * revision.
 * </p>
 * @return string the string contents of the item from the repository on
 * success, and <b>FALSE</b> on failure.
 
*/
function svn_cat($repos_url, $revision_no = SVN_REVISION_HEAD) {}

/**
* <div id="function.svn-ls" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_ls</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_ls</span> — <span class="dc-title">Returns list of directory contents in repository URL, optionally at revision number</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-ls-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_ls</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$repos_url</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$revision_no</span><span class="initializer"> = SVN_REVISION_HEAD</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$recurse</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$peg</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   This function queries the repository URL and returns a list of   files and directories, optionally from a specific revision. This   is equivalent to <strong class="userinput"><span>svn list $repos_url[@$revision_no]</span></strong>  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    This function does not work with working copies. <span class="parameter" style="color:#3A95FF">repos_url</span>    <em>must</em> be a repository URL.   </p>  </blockquote>   </div> <div class="refsect1 parameters" id="refsect1-function.svn-ls-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">url</span></dt>     <dd>      <p class="para">       URL of the repository, eg. <strong class="userinput"><span>http://www.example.com/svnroot</span></strong>.       To access a local Subversion repository via filesystem, use the       file URI scheme, eg. <strong class="userinput"><span>file:///home/user/svn-repos</span></strong>      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">revision</span></dt>     <dd>      <p class="para">       Integer revision number to retrieve listing of. When omitted,       the HEAD revision is used.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">recurse</span></dt>     <dd>      <p class="para">       Enables recursion.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-ls-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   On success, this function returns an array file listing in the format   of:   </p><div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="returnvaluescode"><blockquote style="border:1px gray solid;">[0] =&gt; Array<br>    (<br>        [created_rev] =&gt; integer revision number of last edit<br>        [last_author] =&gt; string author name of last edit<br>        [size] =&gt; integer byte file size of file<br>        [time] =&gt; string date of last edit in form 'M d H:i'<br>                  or 'M d Y', depending on how old the file is<br>        [time_t] =&gt; integer unix timestamp of last edit<br>        [name] =&gt; name of file/directory<br>        [type] =&gt; type, can be 'file' or 'dir'<br>    )<br>[1] =&gt; ...</blockquote></div>    </div>   </div>  <div class="refsect1 examples" id="refsect1-function.svn-ls-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4851">    <p><strong>示例 #1 <span class="function"><strong>svn_ls()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">svn_ls</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/svnroot/'</span><span style="color: #007700">) );<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>    [0] =&gt; Array<br>        (<br>            [created_rev] =&gt; 20<br>            [last_author] =&gt; Joe<br>            [size] =&gt; 0<br>            [time] =&gt; Apr 02 09:28<br>            [time_t] =&gt; 1175520529<br>            [name] =&gt; tags<br>            [type] =&gt; dir<br>        )<br>    [1] =&gt; Array<br>        (<br>            [created_rev] =&gt; 23<br>            [last_author] =&gt; Bob<br>            [size] =&gt; 0<br>            [time] =&gt; Apr 02 15:15<br>            [time_t] =&gt; 1175541322<br>            [name] =&gt; trunk<br>            [type] =&gt; dir<br>        )<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-ls-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>  <div class="refsect1 seealso" id="refsect1-function.svn-ls-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>     <a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.list.html" class="link external">» SVN documentation on svn list</a>    </li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Returns list of directory contents in repository URL, optionally at revision number
 * @link https://php.net/manual/zh/function.svn-ls.php
 * @param string $repos_url
 * @param int $revision_no [optional]
 * @param bool $recurse [optional] <p>
 * Enables recursion.
 * </p>
 * @param bool $peg [optional]
 * @return array On success, this function returns an array file listing in the format
 * of:
 * <pre>
 * [0] => Array
 * (
 * [created_rev] => integer revision number of last edit
 * [last_author] => string author name of last edit
 * [size] => integer byte file size of file
 * [time] => string date of last edit in form 'M d H:i'
 * or 'M d Y', depending on how old the file is
 * [time_t] => integer unix timestamp of last edit
 * [name] => name of file/directory
 * [type] => type, can be 'file' or 'dir'
 * )
 * [1] => ...
 * </pre>
 
*/
function svn_ls($repos_url, $revision_no = SVN_REVISION_HEAD, $recurse = false, $peg = false) {}

/**
* <div id="function.svn-log" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_log</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_log</span> — <span class="dc-title">Returns the commit log messages of a repository URL</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-log-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_log</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$repos_url</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$start_revision</span><span class="initializer"> = ?</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$end_revision</span><span class="initializer"> = ?</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$limit</span><span class="initializer"> = 0</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = SVN_DISCOVER_CHANGED_PATHS | SVN_STOP_ON_COPY</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>svn_log()</strong></span> returns the complete history of the item at the repository URL   <span class="parameter" style="color:#3A95FF">repos_url</span>, or the history of a specific revision   if <span class="parameter" style="color:#3A95FF">start_revision</span> is set. This function is equivalent   to <strong class="userinput"><span>svn log --verbose -r $start_revision $repos_url</span></strong>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-log-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">repos_url</span></dt>     <dd>      <p class="para">       Repository URL of the item to retrieve log history from.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">start_revision</span></dt>     <dd>      <p class="para">       Revision number of the first log to retrieve. Use       <strong><span><a href="https://php.net/manual/zh/svn.constants.php#constant.svn-revision-head">SVN_REVISION_HEAD</a></span></strong> to retrieve the log from       the most recent revision.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">end_revision</span></dt>     <dd>      <p class="para">       Revision number of the last log to retrieve. Defaults to       <span class="parameter" style="color:#3A95FF">start_revision</span> if specified or to       <strong><span>SVN_REVISION_INITIAL</span></strong> otherwise.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">limit</span></dt>     <dd>      <p class="para">       Number of logs to retrieve.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       Any combination of <strong><span>SVN_OMIT_MESSAGES</span></strong>,       <strong><span>SVN_DISCOVER_CHANGED_PATHS</span></strong> and       <strong><span>SVN_STOP_ON_COPY</span></strong>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-log-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   On success, this function returns an array file listing in the format   of:   </p><div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="returnvaluescode"><blockquote style="border:1px gray solid;">[0] =&gt; Array, ordered most recent (highest) revision first<br>(<br>    [rev] =&gt; integer revision number<br>    [author] =&gt; string author name<br>    [msg] =&gt; string log message<br>    [date] =&gt; string date formatted per ISO 8601, i.e. date('c')<br>    [paths] =&gt; Array, describing changed files<br>        (<br>            [0] =&gt; Array<br>                (<br>                    [action] =&gt; string letter signifying change<br>                    [path] =&gt;  absolute repository path of changed file<br>                )<br>            [1] =&gt; ...<br>        )<br>)<br>[1] =&gt; ...</blockquote></div>    </div>    <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    The output will always be a numerically indexed array of arrays,    even when there are none or only one log message(s).   </p>  </blockquote>  <p class="para">   The value of <var class="varname">action</var> is a subset of the   <a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.status.html" class="link external">» status output   in the first column</a>, where possible values are:  </p>  <table class="doctable table">   <caption><strong>Actions</strong></caption>        <thead>      <tr>       <th>Letter</th>       <th>Description</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>M</td>       <td>Item/props was modified</td>      </tr>      <tr>       <td>A</td>       <td>Item was added</td>      </tr>      <tr>       <td>D</td>       <td>Item was deleted</td>      </tr>      <tr>       <td>R</td>       <td>Item was replaced</td>      </tr>     </tbody>      </table>  <p class="para">   If no changes were made to the item, an empty array is returned.  </p> </div>   <div class="refsect1 examples" id="refsect1-function.svn-log-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4850">    <p><strong>示例 #1 <span class="function"><strong>svn_log()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">svn_log</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/'</span><span style="color: #007700">, </span><span style="color: #9876AA">23</span><span style="color: #007700">) );<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>    [0] =&gt; Array<br>    (<br>        [rev] =&gt; 23<br>        [author] =&gt; 'joe'<br>        [msg] =&gt; 'Add cheese and salami to our sandwich.'<br>        [date] =&gt; '2007-04-06T16:00:27-04:00'<br>        [paths] =&gt; Array<br>            (<br>                [0] =&gt; Array<br>                    (<br>                        [action] =&gt; 'M'<br>                        [path] =&gt;  '/sandwich.txt'<br>                    )<br>            )<br>    )<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-log-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> <div class="refsect1 seealso" id="refsect1-function.svn-log-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>     <a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.log.html" class="link external">»       SVN documentation on svn log     </a>    </li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Returns the commit log messages of a repository URL
 * @link https://php.net/manual/zh/function.svn-log.php
 * @param string $repos_url <p>
 * Repository URL of the item to retrieve log history from.
 * </p>
 * @param int $start_revision [optional] <p>
 * Revision number of the first log to retrieve. Use
 * <b>SVN_REVISION_HEAD</b> to retrieve the log from
 * the most recent revision.
 * </p>
 * @param int $end_revision [optional] <p>
 * Revision number of the last log to retrieve. Defaults to
 * <i>start_revision</i> if specified or to
 * <b>SVN_REVISION_INITIAL</b> otherwise.
 * </p>
 * @param int $limit [optional] <p>
 * Number of logs to retrieve.
 * </p>
 * @param int $flags [optional] <p>
 * Any combination of <b>SVN_OMIT_MESSAGES</b>,
 * <b>SVN_DISCOVER_CHANGED_PATHS</b> and
 * <b>SVN_STOP_ON_COPY</b>.
 * </p>
 * @return array On success, this function returns an array file listing in the format
 * of:
 * <pre>
 * [0] => Array, ordered most recent (highest) revision first
 * (
 * [rev] => integer revision number
 * [author] => string author name
 * [msg] => string log message
 * [date] => string date formatted per ISO 8601, i.e. date('c')
 * [paths] => Array, describing changed files
 * (
 * [0] => Array
 * (
 * [action] => string letter signifying change
 * [path] => absolute repository path of changed file
 * )
 * [1] => ...
 * )
 * )
 * [1] => ...
 * </pre>
 * </p>
 * <p>
 * The output will always be a numerically indexed array of arrays,
 * even when there are none or only one log message(s).
 * </p>
 * <p>
 * The value of action is a subset of the
 * status output
 * in the first column, where possible values are:
 * </p>
 * <table>
 * Actions
 * <tr valign="top">
 * <td>Letter</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>M</td>
 * <td>Item/props was modified</td>
 * </tr>
 * <tr valign="top">
 * <td>A</td>
 * <td>Item was added</td>
 * </tr>
 * <tr valign="top">
 * <td>D</td>
 * <td>Item was deleted</td>
 * </tr>
 * <tr valign="top">
 * <td>R</td>
 * <td>Item was replaced</td>
 * </tr>
 * </table>
 * <p>
 * If no changes were made to the item, an empty array is returned.
 
*/
function svn_log($repos_url, $start_revision = null, $end_revision = null, $limit = 0, $flags = SVN_DISCOVER_CHANGED_PATHS|SVN_STOP_ON_COPY) {}

/**
* <div id="function.svn-auth-set-parameter" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_auth_set_parameter</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_auth_set_parameter</span> — <span class="dc-title">Sets an authentication parameter</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-auth-set-parameter-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_auth_set_parameter</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$value</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   Sets authentication parameter at <span class="parameter" style="color:#3A95FF">key</span> to <span class="parameter" style="color:#3A95FF">value</span>.   For a list of valid keys and their meanings, consult the   <a href="https://php.net/manual/zh/svn.constants.php#svn.constants.auth" class="link">authentication constants list</a>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-auth-set-parameter-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">key</span></dt>     <dd>      <p class="para">       String key name. Use the <a href="https://php.net/manual/zh/svn.constants.php#svn.constants.auth" class="link">authentication constants</a>       defined by this extension to specify a key.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">value</span></dt>     <dd>      <p class="para">       String value to set to parameter at key. Format of value varies       with the parameter.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-auth-set-parameter-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div>   <div class="refsect1 examples" id="refsect1-function.svn-auth-set-parameter-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4838">    <p><strong>示例 #1 Default authentication example</strong></p>    <div class="example-contents"><p>     This example configures SVN so that the default username to use     is 'Bob' and the default password is 'abc123':    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>svn_auth_set_parameter</span><span style="color: #007700">(</span><span style="color: #9876AA">SVN_AUTH_PARAM_DEFAULT_USERNAME</span><span style="color: #007700">, </span><span style="color: #DD0000">'Bob'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">svn_auth_set_parameter</span><span style="color: #007700">(</span><span style="color: #9876AA">SVN_AUTH_PARAM_DEFAULT_PASSWORD</span><span style="color: #007700">, </span><span style="color: #DD0000">'abc123'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-auth-set-parameter-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> <div class="refsect1 seealso" id="refsect1-function.svn-auth-set-parameter-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link svn_auth_get_parameter()} - Retrieves authentication parameter</span></li>    <li><a href="https://php.net/manual/zh/svn.constants.php#svn.constants.auth" class="link">Authentication constants</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Sets an authentication parameter
 * @link https://php.net/manual/zh/function.svn-auth-set-parameter.php
 * @param string $key <p>
 * String key name. Use the authentication constants
 * defined by this extension to specify a key.
 * </p>
 * @param string $value <p>
 * String value to set to parameter at key. Format of value varies
 * with the parameter.
 * </p>
 * @return void No value is returned.
 
*/
function svn_auth_set_parameter($key, $value) {}

/**
* <div id="function.svn-auth-get-parameter" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_auth_get_parameter</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_auth_get_parameter</span> — <span class="dc-title">Retrieves authentication parameter</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-auth-get-parameter-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_auth_get_parameter</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$key</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Retrieves authentication parameter at <span class="parameter" style="color:#3A95FF">key</span>.   For a list of valid keys and their meanings, consult the   <a href="https://php.net/manual/zh/svn.constants.php#svn.constants.auth" class="link">authentication constants list</a>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-auth-get-parameter-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">key</span></dt>     <dd>      <p class="para">       String key name. Use the <a href="https://php.net/manual/zh/svn.constants.php#svn.constants.auth" class="link">authentication constants</a>       defined by this extension to specify a key.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-auth-get-parameter-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the string value of the parameter at <span class="parameter" style="color:#3A95FF">key</span>;   returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> if parameter does not exist.  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-auth-get-parameter-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    <div class="refsect1 seealso" id="refsect1-function.svn-auth-get-parameter-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link svn_auth_set_parameter()} - Sets an authentication parameter</span></li>    <li><a href="https://php.net/manual/zh/svn.constants.php#svn.constants.auth" class="link">Authentication constants</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Retrieves authentication parameter
 * @link https://php.net/manual/zh/function.svn-auth-get-parameter.php
 * @param string $key <p>
 * String key name. Use the authentication constants
 * defined by this extension to specify a key.
 * </p>
 * @return string|null the string value of the parameter at <i>key</i>;
 * returns <b>NULL</b> if parameter does not exist.
 
*/
function svn_auth_get_parameter($key) {}

/**
* <div id="function.svn-client-version" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_client_version</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_client_version</span> — <span class="dc-title">Returns the version of the SVN client libraries</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-client-version-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_client_version</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Returns the version of the SVN client libraries  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-client-version-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-client-version-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   String version number, usually in form of x.y.z.  </p> </div>   <div class="refsect1 examples" id="refsect1-function.svn-client-version-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4843">    <p><strong>示例 #1 Basic example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">svn_client_version</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">1.3.1</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-client-version-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Returns the version of the SVN client libraries
 * @link https://php.net/manual/zh/function.svn-client-version.php
 * @return string String version number, usually in form of x.y.z.
 
*/
function svn_client_version() {}

function svn_config_ensure() {}

/**
* <div id="function.svn-diff" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_diff</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_diff</span> — <span class="dc-title">Recursively diffs two paths</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-diff-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_diff</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path1</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$rev1</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path2</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$rev2</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Recursively diffs two paths, <span class="parameter" style="color:#3A95FF">path1</span> and   <span class="parameter" style="color:#3A95FF">path2</span>.  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    This is not a general-purpose diff utility. Only local files    that are versioned may be diffed: other files will fail.   </p>  </blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.svn-diff-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">path1</span></dt>     <dd>      <p class="para">       First path to diff. This can be a URL to a file/directory in an SVN       repository or a local file/directory path.      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">相对路径将会以PHP执行文件所在目录作为当前工作目录进行解析。如果希望依据脚本所在目录解析, 使用<span class="function">{@link realpath()}</span> 或 dirname(__FILE__)。</span></p></blockquote>      <div class="warning"><strong class="warning">警告</strong>       <p class="simpara">        If a local file path has only backslashes and no forward slashes,        this extension will fail to find the path. Always        replace all backslashes with forward slashes when using this        function.       </p>      </div>     </dd>             <dt><span class="parameter" style="color:#3A95FF">rev1</span></dt>     <dd>      <p class="para">       First path's revision number. Use <strong><span><a href="https://php.net/manual/zh/svn.constants.php#constant.svn-revision-head">SVN_REVISION_HEAD</a></span></strong>       to specify the most recent revision.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">path2</span></dt>     <dd>      <p class="para">       Second path to diff. See <span class="parameter" style="color:#3A95FF">path1</span> for description.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">rev2</span></dt>     <dd>      <p class="para">       Second path's revision number. See <span class="parameter" style="color:#3A95FF">rev1</span>       for description.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-diff-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array-list consisting of two streams: the first is the diff output   and the second contains error stream output. The streams can be   read using <span class="function">{@link fread()}</span>. Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> on   error.  </p>  <p class="para">   The diff output will, by default, be in the form of Subversion's   custom unified diff format, but an   <a href="http://svnbook.red-bean.com/en/1.2/svn.advanced.externaldifftools.html" class="link external">» external   diff engine</a> may be   used depending on Subversion's configuration.  </p> </div>   <div class="refsect1 examples" id="refsect1-function.svn-diff-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4845">    <p><strong>示例 #1 Basic example</strong></p>    <div class="example-contents"><p>     This example demonstrates the basic usage of this function, and     the retrieval of contents from the stream:    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">list(</span><span style="color: #9876AA">$diff</span><span style="color: #007700">, </span><span style="color: #9876AA">$errors</span><span style="color: #007700">) = </span><span style="color: #9876AA">svn_diff</span><span style="color: #007700">(<br>    </span><span style="color: #DD0000">'http://www.example.com/svnroot/trunk/foo'</span><span style="color: #007700">, </span><span style="color: #9876AA">SVN_REVISION_HEAD</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'http://www.example.com/svnroot/branches/dev/foo'</span><span style="color: #007700">, </span><span style="color: #9876AA">SVN_REVISION_HEAD<br></span><span style="color: #007700">);<br>if (!</span><span style="color: #9876AA">$diff</span><span style="color: #007700">) exit;<br></span><span style="color: #9876AA">$contents </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br>while (!</span><span style="color: #9876AA">feof</span><span style="color: #007700">(</span><span style="color: #9876AA">$diff</span><span style="color: #007700">)) {<br>  </span><span style="color: #9876AA">$contents </span><span style="color: #007700">.= </span><span style="color: #9876AA">fread</span><span style="color: #007700">(</span><span style="color: #9876AA">$diff</span><span style="color: #007700">, </span><span style="color: #9876AA">8192</span><span style="color: #007700">);<br>}<br></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$diff</span><span style="color: #007700">);<br></span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">$errors</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$contents</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Index: http://www.example.com/svnroot/trunk/foo<br>===================================================================<br>--- http://www.example.com/svnroot/trunk/foo        (.../foo) (revision 23)<br>+++ http://www.example.com/svnroot/branches/dev/foo (.../foo) (revision 27)<br> // further diff output</blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-4846">    <p><strong>示例 #2 Diffing two revisions of a repository path</strong></p>    <div class="example-contents"><p>     This example implements a wrapper function that allows a user     to easily diff two revisions of the same item using an external     repository path (the default syntax is somewhat verbose):    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">function </span><span style="color: #9876AA">svn_diff_same_item</span><span style="color: #007700">(</span><span style="color: #9876AA">$path</span><span style="color: #007700">, </span><span style="color: #9876AA">$rev1</span><span style="color: #007700">, </span><span style="color: #9876AA">$rev2</span><span style="color: #007700">) {<br>    return </span><span style="color: #9876AA">svn_diff</span><span style="color: #007700">(</span><span style="color: #9876AA">$path</span><span style="color: #007700">, </span><span style="color: #9876AA">$rev1</span><span style="color: #007700">, </span><span style="color: #9876AA">$path</span><span style="color: #007700">, </span><span style="color: #9876AA">$rev2</span><span style="color: #007700">);<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-4847">    <p><strong>示例 #3 Portably diffing two local files</strong></p>    <div class="example-contents"><p>     This example implements a wrapper function that portably     diffs two local files, compensating for the <span class="function">{@link realpath()}</span>     fix and the backslashes bug:    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">function </span><span style="color: #9876AA">svn_diff_local</span><span style="color: #007700">(</span><span style="color: #9876AA">$path1</span><span style="color: #007700">, </span><span style="color: #9876AA">$rev1</span><span style="color: #007700">, </span><span style="color: #9876AA">$path2</span><span style="color: #007700">, </span><span style="color: #9876AA">$rev2</span><span style="color: #007700">) {<br>    </span><span style="color: #9876AA">$path1 </span><span style="color: #007700">= </span><span style="color: #9876AA">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/'</span><span style="color: #007700">, </span><span style="color: #9876AA">realpath</span><span style="color: #007700">(</span><span style="color: #9876AA">$path1</span><span style="color: #007700">));<br>    </span><span style="color: #9876AA">$path2 </span><span style="color: #007700">= </span><span style="color: #9876AA">str_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'\\'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/'</span><span style="color: #007700">, </span><span style="color: #9876AA">realpath</span><span style="color: #007700">(</span><span style="color: #9876AA">$path2</span><span style="color: #007700">));<br>    return </span><span style="color: #9876AA">svn_diff</span><span style="color: #007700">(</span><span style="color: #9876AA">$path1</span><span style="color: #007700">, </span><span style="color: #9876AA">$rev1</span><span style="color: #007700">, </span><span style="color: #9876AA">$path2</span><span style="color: #007700">, </span><span style="color: #9876AA">$rev2</span><span style="color: #007700">);<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-diff-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>  <div class="refsect1 seealso" id="refsect1-function.svn-diff-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.diff.html" class="link external">» SVN documentation on svn diff</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Recursively diffs two paths
 * @link https://php.net/manual/zh/function.svn-diff.php
 * @param string $path1 <p>
 * First path to diff. This can be a URL to a file/directory in an SVN
 * repository or a local file/directory path.
 * </p>
 * Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script&#x00027;s working directory, use <b>realpath</b> or dirname(__FILE__).
 * If a local file path has only backslashes and no forward slashes,
 * this extension will fail to find the path. Always
 * replace all backslashes with forward slashes when using this
 * function.
 * @param int $rev1 <p>
 * First path's revision number. Use <b>SVN_REVISION_HEAD</b>
 * to specify the most recent revision.
 * </p>
 * @param string $path2 <p>
 * Second path to diff. See <i>path1</i> for description.
 * </p>
 * @param int $rev2 <p>
 * Second path's revision number. See <i>rev1</i>
 * for description.
 * </p>
 * @return array an array-list consisting of two streams: the first is the diff output
 * and the second contains error stream output. The streams can be
 * read using <b>fread</b>. Returns <b>FALSE</b> or <b>NULL</b> on
 * error.
 * </p>
 * <p>
 * The diff output will, by default, be in the form of Subversion's
 * custom unified diff format, but an
 * external
 * diff engine may be
 * used depending on Subversion's configuration.
 
*/
function svn_diff($path1, $rev1, $path2, $rev2) {}

/**
* <div id="function.svn-cleanup" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_cleanup</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_cleanup</span> — <span class="dc-title">Recursively cleanup a working copy directory, finishing incomplete operations and removing locks</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-cleanup-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_cleanup</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$workingdir</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Recursively cleanup working copy directory <span class="parameter" style="color:#3A95FF">workingdir</span>,   finishing any incomplete operations and removing working copy locks. Use   when a working copy is in limbo and needs to be usable again.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-cleanup-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">workingdir</span></dt>     <dd>      <p class="para">       String path to local working directory to cleanup      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">相对路径将会以PHP执行文件所在目录作为当前工作目录进行解析。如果希望依据脚本所在目录解析, 使用<span class="function">{@link realpath()}</span> 或 dirname(__FILE__)。</span></p></blockquote>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-cleanup-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>   <div class="refsect1 examples" id="refsect1-function.svn-cleanup-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4842">    <p><strong>示例 #1 Basic example</strong></p>    <div class="example-contents"><p>     This example demonstrates clean up of a working copy in a     directory named help-me:    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>svn_cleanup</span><span style="color: #007700">(</span><span style="color: #9876AA">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'help-me'</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     The <span class="function">{@link realpath()}</span> call is necessary due to     SVN's quirky handling of relative paths.    </p></div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-cleanup-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> <div class="refsect1 seealso" id="refsect1-function.svn-cleanup-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function"><strong>update()</strong></span></li>    <li><a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.cleanup.html" class="link external">» SVN documentation on svn cleanup</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Recursively cleanup a working copy directory, finishing incomplete operations and removing locks
 * @link https://php.net/manual/zh/function.svn-cleanup.php
 * @param string $workingdir <p>
 * String path to local working directory to cleanup
 * </p>
 * Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script&#x00027;s working directory, use <b>realpath</b> or dirname(__FILE__).
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function svn_cleanup($workingdir) {}

/**
* <div id="function.svn-revert" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_revert</h1>  <p class="verinfo">(PECL svn &gt;= 0.3.0)</p><p class="refpurpose"><span class="refname">svn_revert</span> — <span class="dc-title">Revert changes to the working copy</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-revert-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_revert</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$recursive</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Revert any local changes to the path in a working copy.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-revert-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">       The path to the working repository.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">recursive</span></dt>     <dd>      <p class="para">       Optionally make recursive changes.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-revert-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.svn-revert-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link svn_delete()} - Delete items from a working copy or repository</span></li>    <li><span class="function">{@link svn_export()} - Export the contents of a SVN directory</span></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.3.0)<br/>
 * Revert changes to the working copy
 * @link https://php.net/manual/zh/function.svn-revert.php
 * @param string $path <p>
 * The path to the working repository.
 * </p>
 * @param bool $recursive [optional] <p>
 * Optionally make recursive changes.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function svn_revert($path, $recursive = false) {}

function svn_resolved() {}

/**
* <div id="function.svn-commit" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_commit</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_commit</span> — <span class="dc-title">将修改的本地文件副本发送至版本库</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-commit-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_commit</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$log</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$targets</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$recursive</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   提交本地文件副本的改变使用参数 <span class="parameter" style="color:#3A95FF">targets</span> ，使用 <span class="parameter" style="color:#3A95FF">log</span> 参数作为提交日志，<span class="parameter" style="color:#3A95FF">targets</span> 参数默认使用递归，<span class="parameter" style="color:#3A95FF">recursive</span> 参数设置为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 将不使用递归。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    此方法没有指定任何认证参数，用户名和密码必须使用 <span class="function">{@link svn_auth_set_parameter()}</span>   </span>  </p></blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.svn-commit-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">log</span></dt>     <dd>      <p class="para">       长文本的提交日志      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">targets</span></dt>     <dd>      <p class="para">       本地文件路径数组      </p>      <div class="warning"><strong class="warning">警告</strong>       <p class="simpara">        此参数必须是一个数组，一个单一字符串是不被接收的。       </p>      </div>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">相对路径将会以PHP执行文件所在目录作为当前工作目录进行解析。如果希望依据脚本所在目录解析, 使用<span class="function">{@link realpath()}</span> 或 dirname(__FILE__)。</span></p></blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">recursive</span></dt>     <dd>      <p class="para">       布尔类型，是否禁用 <span class="parameter" style="color:#3A95FF">targets</span> 递归。默认值为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>       </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-commit-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回数组信息如下:  </p>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="returnvaluescode"><blockquote style="border:1px gray solid;">array(<br>    0 =&gt; æäº¤çæ¬å·<br>    1 =&gt; ISO 8601 æ ¼å¼çæäº¤æ¶é´<br>    2 =&gt; æäº¤è<br>)</blockquote></div>    </div>  <p class="para">   失败返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>  </p> </div>   <div class="refsect1 examples" id="refsect1-function.svn-commit-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4844">    <p><strong>示例 #1 基本示例</strong></p>    <div class="example-contents"><p>     这个例子是将一个计算程序目录提交到一个版本库，使用用户名为 Bob 以及密码为 abc123 (提倡可以使用强密码)    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>svn_auth_set_parameter</span><span style="color: #007700">(</span><span style="color: #9876AA">SVN_AUTH_PARAM_DEFAULT_USERNAME</span><span style="color: #007700">, </span><span style="color: #DD0000">'Bob'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">svn_auth_set_parameter</span><span style="color: #007700">(</span><span style="color: #9876AA">SVN_AUTH_PARAM_DEFAULT_PASSWORD</span><span style="color: #007700">, </span><span style="color: #DD0000">'abc123'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">svn_commit</span><span style="color: #007700">(</span><span style="color: #DD0000">'Log message of Bob\'s commit'</span><span style="color: #007700">, array(</span><span style="color: #9876AA">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'calculator'</span><span style="color: #007700">))));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(<br>  0 =&gt; 1415,<br>  1 =&gt; '2007-05-26T01:44:28.453125Z',<br>  2 =&gt; 'Bob'<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-commit-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> <div class="refsect1 seealso" id="refsect1-function.svn-commit-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link svn_auth_set_parameter()} - Sets an authentication parameter</span></li>    <li><a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.commit.html" class="link external">» 参见 svn 官方文档</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Sends changes from the local working copy to the repository
 * @link https://php.net/manual/zh/function.svn-commit.php
 * @param string $log <p>
 * String log text to commit
 * </p>
 * @param array $targets <p>
 * Array of local paths of files to be committed
 * </p>
 * This parameter must be an array, a string for a single
 * target is not acceptable.
 * Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script&#x00027;s working directory, use <b>realpath</b> or dirname(__FILE__).
 * @param bool $recursive [optional] <p>
 * Boolean flag to disable recursive committing of
 * directories in the <i>targets</i> array.
 * Default is <b>TRUE</b>.
 * </p>
 * @return array array in form of:
 * <pre>
 * array(
 * 0 => integer revision number of commit
 * 1 => string ISO 8601 date and time of commit
 * 2 => name of committer
 * )
 * </pre>
 * <p>
 * Returns <b>FALSE</b> on failure.
 * </p>
 
*/
function svn_commit($log, array $targets, $recursive = true) {}

function svn_lock() {}

function svn_unlock() {}

/**
* <div id="function.svn-add" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_add</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_add</span> — <span class="dc-title">在工作目录列入新增项</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-add-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_add</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$recursive</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$force</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   添加文件, 目录或者链接在 <span class="parameter" style="color:#3A95FF">path</span>   到工作目录。将在下一次执行 <span class="function">{@link svn_commit()}</span>   时把工作副本添加到项目中。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-add-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">       添加项的路径。      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">相对路径将会以PHP执行文件所在目录作为当前工作目录进行解析。如果希望依据脚本所在目录解析, 使用<span class="function">{@link realpath()}</span> 或 dirname(__FILE__)。</span></p></blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">recursive</span></dt>     <dd>      <p class="para">       如果添加项为目录是否递归目录下所有文件。 默认为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">force</span></dt>     <dd>      <p class="para">       如果为 true，Subversion 将递归到已版本化的目录，以添加可能隐藏在这些目录中的未版本化文件。默认为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-add-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>   <div class="refsect1 examples" id="refsect1-function.svn-add-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4837">    <p><strong>示例 #1 <span class="function"><strong>svn_add()</strong></span> 例子</strong></p>    <div class="example-contents"><p>     在工作目录使用命令 <strong class="userinput"><span>svn status</span></strong>     返回值:    </p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">$ svn status<br>?      foobar.txt</blockquote></div>    </div>    <div class="example-contents"><p>...代码:</p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>svn_add</span><span style="color: #007700">(</span><span style="color: #DD0000">'foobar.txt'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     ...计划 <var class="filename">foobar.txt</var> 文件添加到版本库。    </p></div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-add-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> <div class="refsect1 seealso" id="refsect1-function.svn-add-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.add.html" class="link external">» 关于 svn add 的 SVN 文档</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Schedules the addition of an item in a working directory
 * @link https://php.net/manual/zh/function.svn-add.php
 * @param string $path <p>
 * Path of item to add.
 * </p>
 * Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script&#x00027;s working directory, use <b>realpath</b> or dirname(__FILE__).
 * @param bool $recursive [optional] <p>
 * If item is directory, whether or not to recursively add
 * all of its contents. Default is <b>TRUE</b>
 * </p>
 * @param bool $force [optional] <p>
 * If true, Subversion will recurse into already versioned directories
 * in order to add unversioned files that may be hiding in those
 * directories. Default is <b>FALSE</b>
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function svn_add($path, $recursive = true, $force = false) {}

/**
* <div id="function.svn-status" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_status</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_status</span> — <span class="dc-title">Returns the status of working copy files and directories</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-status-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_status</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Returns the status of working copy files and directories, giving modifications,   additions, deletions and other changes to items in the working copy.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-status-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">       Local path to file or directory to retrieve status of.      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">相对路径将会以PHP执行文件所在目录作为当前工作目录进行解析。如果希望依据脚本所在目录解析, 使用<span class="function">{@link realpath()}</span> 或 dirname(__FILE__)。</span></p></blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       Any combination of <strong><span>Svn::NON_RECURSIVE</span></strong>,       <strong><span>Svn::ALL</span></strong> (regardless of modification status),       <strong><span>Svn::SHOW_UPDATES</span></strong> (entries will be added for items       that are out-of-date), <strong><span>Svn::NO_IGNORE</span></strong> (disregard       <span class="literal">svn:ignore</span> properties when scanning for new files)       and <strong><span>Svn::IGNORE_EXTERNALS</span></strong>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-status-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a numerically indexed array of associative arrays detailing   the status of items in the repository:  </p>  <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="returnvaluescode"><blockquote style="border:1px gray solid;">Array (<br>    [0] =&gt; Array (<br>        // information on item<br>    )<br>    [1] =&gt; ...<br>)</blockquote></div>  </div>  <p class="para">   The information on the item is an associative array that can contain   the following keys:  </p>  <dl>       <dt><var class="varname">path</var></dt>     <dd>      <span class="simpara">       String path to file/directory of this entry on local filesystem.      </span>     </dd>          <dt><var class="varname">text_status</var></dt>     <dd>      <span class="simpara">       Status of item's text. 参见 <a href="https://php.net/manual/zh/svn.constants.php#svn.constants.status" class="link">状态常量列表</a> 获得可能的值.      </span>     </dd>          <dt><var class="varname">repos_text_status</var></dt>     <dd>      <span class="simpara">       Status of item's text in repository. Only accurate if       <span class="parameter" style="color:#3A95FF">update</span> was set to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>.       参见 <a href="https://php.net/manual/zh/svn.constants.php#svn.constants.status" class="link">状态常量列表</a> 获得可能的值.      </span>     </dd>          <dt><var class="varname">prop_status</var></dt>     <dd>      <span class="simpara">       Status of item's properties. 参见 <a href="https://php.net/manual/zh/svn.constants.php#svn.constants.status" class="link">状态常量列表</a> 获得可能的值.      </span>     </dd>          <dt><var class="varname">repos_prop_status</var></dt>     <dd>      <span class="simpara">       Status of item's property in repository. Only accurate if       <span class="parameter" style="color:#3A95FF">update</span> was set to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>. 参见 <a href="https://php.net/manual/zh/svn.constants.php#svn.constants.status" class="link">状态常量列表</a> 获得可能的值.      </span>     </dd>          <dt><var class="varname">locked</var></dt>     <dd>      <span class="simpara">       Whether or not the item is locked. (Only set if <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>.)      </span>     </dd>          <dt><var class="varname">copied</var></dt>     <dd>      <span class="simpara">       Whether or not the item was copied (scheduled for addition with       history). (Only set if <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>.)      </span>     </dd>          <dt><var class="varname">switched</var></dt>     <dd>      <span class="simpara">       Whether or not the item was switched using the switch command.       (Only set if <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>)      </span>     </dd>     </dl>  <p class="para">   These keys are only set if the item is versioned:  </p>  <dl>       <dt><var class="varname">name</var></dt>     <dd>      <span class="simpara">       Base name of item in repository.      </span>     </dd>          <dt><var class="varname">url</var></dt>     <dd>      <span class="simpara">       URL of item in repository.      </span>     </dd>          <dt><var class="varname">repos</var></dt>     <dd>      <span class="simpara">       Base URL of repository.      </span>     </dd>          <dt><var class="varname">revision</var></dt>     <dd>      <span class="simpara">       Integer revision of item in working copy.      </span>     </dd>          <dt><var class="varname">kind</var></dt>     <dd>      <span class="simpara">       Type of item, i.e. file or directory. 参见 <a href="https://php.net/manual/zh/svn.constants.php#svn.constants.type" class="link">类型常量列表</a> 获取可能的值.      </span>     </dd>          <dt><var class="varname">schedule</var></dt>     <dd>      <span class="simpara">       Scheduled action for item, i.e. addition or deletion. Constants       for these magic numbers are not available, they can       be emulated by using:      </span>       <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">if (!</span><span style="color: #9876AA">defined</span><span style="color: #007700">(</span><span style="color: #DD0000">'svn_wc_schedule_normal'</span><span style="color: #007700">)) {<br>    </span><span style="color: #9876AA">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'svn_wc_schedule_normal'</span><span style="color: #007700">,  </span><span style="color: #9876AA">0</span><span style="color: #007700">); </span><span style="color: #FF8000">// nothing special<br>    </span><span style="color: #9876AA">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'svn_wc_schedule_add'</span><span style="color: #007700">,     </span><span style="color: #9876AA">1</span><span style="color: #007700">); </span><span style="color: #FF8000">// item will be added<br>    </span><span style="color: #9876AA">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'svn_wc_schedule_delete'</span><span style="color: #007700">,  </span><span style="color: #9876AA">2</span><span style="color: #007700">); </span><span style="color: #FF8000">// item will be deleted<br>    </span><span style="color: #9876AA">define</span><span style="color: #007700">(</span><span style="color: #DD0000">'svn_wc_schedule_replace'</span><span style="color: #007700">, </span><span style="color: #9876AA">3</span><span style="color: #007700">); </span><span style="color: #FF8000">// item will be added and deleted<br></span><span style="color: #007700">}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>      </div>     </dd>          <dt><var class="varname">deleted</var></dt>     <dd>      <span class="simpara">       Whether or not the item was deleted, but parent revision lags       behind. (Only set if <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>.)      </span>     </dd>          <dt><var class="varname">absent</var></dt>     <dd>      <span class="simpara">       Whether or not the item is absent, that is, Subversion knows that       there should be something there but there isn't. (Only set if       <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>.)      </span>     </dd>          <dt><var class="varname">incomplete</var></dt>     <dd>      <span class="simpara">       Whether or not the entries file for a directory is incomplete.       (Only set if <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>.)      </span>     </dd>          <dt><var class="varname">cmt_date</var></dt>     <dd>      <span class="simpara">       Integer Unix timestamp of last commit date. (Unaffected by <span class="parameter" style="color:#3A95FF">update</span>.)      </span>     </dd>          <dt><var class="varname">cmt_rev</var></dt>     <dd>      <span class="simpara">       Integer revision of last commit. (Unaffected by <span class="parameter" style="color:#3A95FF">update</span>.)      </span>     </dd>          <dt><var class="varname">cmt_author</var></dt>     <dd>      <span class="simpara">       String author of last commit. (Unaffected by <span class="parameter" style="color:#3A95FF">update</span>.)      </span>     </dd>          <dt><var class="varname">prop_time</var></dt>     <dd>      <span class="simpara">       Integer Unix timestamp of last up-to-date time for properties      </span>     </dd>          <dt><var class="varname">text_time</var></dt>     <dd>      <span class="simpara">       Integer Unix timestamp of last up-to-date time for text      </span>     </dd>        </dl> </div>   <div class="refsect1 examples" id="refsect1-function.svn-status-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4852">    <p><strong>示例 #1 Basic example</strong></p>    <div class="example-contents"><p>     This example demonstrates a basic, theoretical usage of this function.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">svn_status</span><span style="color: #007700">(</span><span style="color: #9876AA">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'wc'</span><span style="color: #007700">)));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array (<br>    [0] =&gt; Array (<br>        [path] =&gt; /home/bob/wc/sandwich.txt<br>        [text_status] =&gt; 8 // item was modified<br>        [repos_text_status] =&gt; 1 // no information available, use update<br>        [prop_status] =&gt; 3 // no changes<br>        [repos_prop_status] =&gt; 1 // no information available, use update<br>        [name] =&gt; sandwich.txt<br>        [url] =&gt; http://www.example.com/svnroot/deli/trunk/sandwich.txt<br>        [repos] =&gt; http://www.example.com/svnroot/<br>        [revision] =&gt; 123<br>        [kind] =&gt; 1 // file<br>        [schedule] =&gt; 0 // no special actions scheduled<br>        [cmt_date] =&gt; 1165543135<br>        [cmt_rev] =&gt; 120<br>        [cmt_author] =&gt; Alice<br>        [prop_time] =&gt; 1180201728<br>        [text_time] =&gt; 1180201729<br>    )<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-status-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> <div class="refsect1 seealso" id="refsect1-function.svn-status-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link svn_update()} - Update working copy</span></li>    <li><span class="function">{@link svn_log()} - Returns the commit log messages of a repository URL</span></li>    <li><a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.status.html" class="link external">» SVN documentation for svn status</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Returns the status of working copy files and directories
 * @link https://php.net/manual/zh/function.svn-status.php
 * @param string $path <p>
 * Local path to file or directory to retrieve status of.
 * </p>
 * Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script&#x00027;s working directory, use <b>realpath</b> or dirname(__FILE__).
 * @param int $flags [optional] <p>
 * Any combination of <b>SVN_NON_RECURSIVE</b>,
 * <b>SVN_ALL</b> (regardless of modification status),
 * <b>SVN_SHOW_UPDATES</b> (entries will be added for items
 * that are out-of-date), <b>SVN_NO_IGNORE</b> (disregard
 * svn:ignore properties when scanning for new files)
 * and <b>SVN_IGNORE_EXTERNALS</b>.
 * </p>
 * @return array a numerically indexed array of associative arrays detailing
 * the status of items in the repository:
 * </p>
 * <pre>
 * Array (
 * [0] => Array (
 * // information on item
 * )
 * [1] => ...
 * )
 * </pre>
 * <p>
 * The information on the item is an associative array that can contain
 * the following keys:
 * </p>
 * path
 * String path to file/directory of this entry on local filesystem.
 * text_status
 * Status of item's text. Refer to status constants for possible values.
 * repos_text_status
 * Status of item's text in repository. Only accurate if
 * <i>update</i> was set to <b>TRUE</b>.
 * Refer to status constants for possible values.
 * prop_status
 * Status of item's properties. Refer to status constants for possible values.
 * repos_prop_status
 * Status of item's property in repository. Only accurate if
 * <i>update</i> was set to <b>TRUE</b>. Refer to status constants for possible values.
 * locked
 * Whether or not the item is locked. (Only set if <b>TRUE</b>.)
 * copied
 * Whether or not the item was copied (scheduled for addition with
 * history). (Only set if <b>TRUE</b>.)
 * switched
 * Whether or not the item was switched using the switch command.
 * (Only set if <b>TRUE</b>)
 * <p>
 * These keys are only set if the item is versioned:
 * </p>
 * name
 * Base name of item in repository.
 * url
 * URL of item in repository.
 * repos
 * Base URL of repository.
 * revision
 * Integer revision of item in working copy.
 * kind
 * Type of item, i.e. file or directory. Refer to type constants for possible values.
 * schedule
 * Scheduled action for item, i.e. addition or deletion. Constants
 * for these magic numbers are not available, they can
 * be emulated by using:
 * <code>
 * if (!defined('svn_wc_schedule_normal')) {
 * define('svn_wc_schedule_normal', 0); // nothing special
 * define('svn_wc_schedule_add', 1); // item will be added
 * define('svn_wc_schedule_delete', 2); // item will be deleted
 * define('svn_wc_schedule_replace', 3); // item will be added and deleted
 * }
 * </code>
 * deleted
 * Whether or not the item was deleted, but parent revision lags
 * behind. (Only set if <b>TRUE</b>.)
 * absent
 * Whether or not the item is absent, that is, Subversion knows that
 * there should be something there but there isn't. (Only set if
 * <b>TRUE</b>.)
 * incomplete
 * Whether or not the entries file for a directory is incomplete.
 * (Only set if <b>TRUE</b>.)
 * cmt_date
 * Integer Unix timestamp of last commit date. (Unaffected by <i>update</i>.)
 * cmt_rev
 * Integer revision of last commit. (Unaffected by <i>update</i>.)
 * cmt_author
 * String author of last commit. (Unaffected by <i>update
 
*/
function svn_status($path, $flags = 0) {}

/**
* <div id="function.svn-update" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_update</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_update</span> — <span class="dc-title">Update working copy</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-update-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_update</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$revno</span><span class="initializer"> = SVN_REVISION_HEAD</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$recurse</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Update working copy at <span class="parameter" style="color:#3A95FF">path</span> to revision   <span class="parameter" style="color:#3A95FF">revno</span>. If <span class="parameter" style="color:#3A95FF">recurse</span> is true,   directories will be recursively updated.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-update-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">       Path to local working copy.      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">相对路径将会以PHP执行文件所在目录作为当前工作目录进行解析。如果希望依据脚本所在目录解析, 使用<span class="function">{@link realpath()}</span> 或 dirname(__FILE__)。</span></p></blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">revno</span></dt>     <dd>      <p class="para">       Revision number to update to, default is <strong><span><a href="https://php.net/manual/zh/svn.constants.php#constant.svn-revision-head">SVN_REVISION_HEAD</a></span></strong>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">recurse</span></dt>     <dd>      <p class="para">       Whether or not to recursively update directories.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-update-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns new revision number on success, returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.  </p> </div>   <div class="refsect1 examples" id="refsect1-function.svn-update-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4853">    <p><strong>示例 #1 Basic example</strong></p>    <div class="example-contents"><p>     This example demonstrates basic usage of this function:    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">svn_update</span><span style="color: #007700">(</span><span style="color: #9876AA">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'working-copy'</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">234</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-update-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> <div class="refsect1 seealso" id="refsect1-function.svn-update-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link svn_checkout()} - Checks out a working copy from the repository</span></li>    <li><span class="function">{@link svn_commit()} - 将修改的本地文件副本发送至版本库</span></li>    <li><a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.update.html" class="link external">» SVN documentation for svn update</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Update working copy
 * @link https://php.net/manual/zh/function.svn-update.php
 * @param string $path <p>
 * Path to local working copy.
 * </p>
 * Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script&#x00027;s working directory, use <b>realpath</b> or dirname(__FILE__).
 * @param int $revno [optional] <p>
 * Revision number to update to, default is <b>SVN_REVISION_HEAD</b>.
 * </p>
 * @param bool $recurse [optional] <p>
 * Whether or not to recursively update directories.
 * </p>
 * @return int|false new revision number on success, returns <b>FALSE</b> on failure.
 
*/
function svn_update($path, $revno = SVN_REVISION_HEAD, $recurse = true) {}

/**
* <div id="function.svn-import" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_import</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_import</span> — <span class="dc-title">Imports an unversioned path into a repository</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-import-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_import</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$url</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$nonrecursive</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Commits unversioned <span class="parameter" style="color:#3A95FF">path</span> into repository at   <span class="parameter" style="color:#3A95FF">url</span>. If <span class="parameter" style="color:#3A95FF">path</span> is a   directory and <span class="parameter" style="color:#3A95FF">nonrecursive</span> is <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>,    the directory will be imported recursively.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-import-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">       Path of file or directory to import.      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">相对路径将会以PHP执行文件所在目录作为当前工作目录进行解析。如果希望依据脚本所在目录解析, 使用<span class="function">{@link realpath()}</span> 或 dirname(__FILE__)。</span></p></blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">url</span></dt>     <dd>      <p class="para">       Repository URL to import into.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">nonrecursive</span></dt>     <dd>      <p class="para">       Whether or not to refrain from recursively processing directories.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-import-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>   <div class="refsect1 examples" id="refsect1-function.svn-import-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4849">    <p><strong>示例 #1 Basic example</strong></p>    <div class="example-contents"><p>     This example demonstrates a basic use-case of this function. To import     a directory named new-files into the repository at     http://www.example.com/svnroot/incoming/abc, use:    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>svn_import</span><span style="color: #007700">(</span><span style="color: #9876AA">realpath</span><span style="color: #007700">(</span><span style="color: #DD0000">'new-files'</span><span style="color: #007700">), </span><span style="color: #DD0000">'http://www.example.com/svnroot/incoming/abc'</span><span style="color: #007700">, </span><span style="color: #9876AA">false</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.svn-import-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> <div class="refsect1 seealso" id="refsect1-function.svn-import-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link svn_add()} - 在工作目录列入新增项</span></li>    <li><a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.import.html" class="link external">» SVN documentation for svn import</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Imports an unversioned path into a repository
 * @link https://php.net/manual/zh/function.svn-import.php
 * @param string $path <p>
 * Path of file or directory to import.
 * </p>
 * Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script&#x00027;s working directory, use <b>realpath</b> or dirname(__FILE__).
 * @param string $url <p>
 * Repository URL to import into.
 * </p>
 * @param bool $nonrecursive <p>
 * Whether or not to refrain from recursively processing directories.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function svn_import($path, $url, $nonrecursive) {}

function svn_info() {}

/**
* <div id="function.svn-export" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_export</h1>  <p class="verinfo">(PECL svn &gt;= 0.3.0)</p><p class="refpurpose"><span class="refname">svn_export</span> — <span class="dc-title">Export the contents of a SVN directory</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-export-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_export</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$frompath</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$topath</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$working_copy</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$revision_no</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Export the contents of either a working copy or repository into a   'clean' directory.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-export-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">frompath</span></dt>     <dd>      <p class="para">       The path to the current repository.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">topath</span></dt>     <dd>      <p class="para">       The path to the new repository.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">working_copy</span></dt>     <dd>      <p class="para">       If <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>, it will export uncommitted files from the working copy.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-export-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.svn-export-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4848">    <p><strong>示例 #1 <span class="function"><strong>svn_export()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$working_dir     </span><span style="color: #007700">= </span><span style="color: #DD0000">'../'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$new_working_dir </span><span style="color: #007700">= </span><span style="color: #DD0000">'/home/user/devel/foo/trunk'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">svn_export</span><span style="color: #007700">(</span><span style="color: #9876AA">$working_dir</span><span style="color: #007700">, </span><span style="color: #9876AA">$new_working_dir</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.svn-export-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link svn_import()} - Imports an unversioned path into a repository</span></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.3.0)<br/>
 * Export the contents of a SVN directory
 * @link https://php.net/manual/zh/function.svn-export.php
 * @param string $frompath <p>
 * The path to the current repository.
 * </p>
 * @param string $topath <p>
 * The path to the new repository.
 * </p>
 * @param bool $working_copy [optional] <p>
 * If <b>TRUE</b>, it will export uncommitted files from the working copy.
 * </p>
 * @param int $revision_no [optional]
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function svn_export($frompath, $topath, $working_copy = true, $revision_no = -1) {}

function svn_copy() {}

function svn_switch() {}

/**
* <div id="function.svn-blame" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_blame</h1>  <p class="verinfo">(PECL svn &gt;= 0.3.0)</p><p class="refpurpose"><span class="refname">svn_blame</span> — <span class="dc-title">Get the SVN blame for a file</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-blame-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_blame</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$repository_url</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$revision_no</span><span class="initializer"> = SVN_REVISION_HEAD</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Get the SVN blame of a file from a repository URL.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-blame-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">repository_url</span></dt>     <dd>      <p class="para">       The repository URL.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">revision_no</span></dt>     <dd>      <p class="para">       The revision number.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-blame-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   An <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of SVN blame information separated by line   which includes the revision number, line number, line of code,   author, and date.  </p> </div> <div class="refsect1 examples" id="refsect1-function.svn-blame-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4839">    <p><strong>示例 #1 <span class="function"><strong>svn_blame()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$svnurl </span><span style="color: #007700">= </span><span style="color: #DD0000">'http://svn.example.org/svnroot/foo/trunk/index.php'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">svn_blame</span><span style="color: #007700">(</span><span style="color: #9876AA">$svnurl</span><span style="color: #007700">) );<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>    [0] = Array<br>          (<br>           [rev] = 1<br>           [line_no] = 1<br>           [line] = Hello World<br>           [author] = joesmith<br>           [date] = 2007-07-02T05:51:26.628396Z<br>          )<br>    [1] = Array<br>          ...</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.svn-blame-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link svn_diff()} - Recursively diffs two paths</span></li>    <li><span class="function"><strong>svn_logs()</strong></span></li>    <li><span class="function">{@link svn_status()} - Returns the status of working copy files and directories</span></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.3.0)<br/>
 * Get the SVN blame for a file
 * @link https://php.net/manual/zh/function.svn-blame.php
 * @param string $repository_url <p>
 * The repository URL.
 * </p>
 * @param int $revision_no [optional] <p>
 * The revision number.
 * </p>
 * @return array An array of SVN blame information separated by line
 * which includes the revision number, line number, line of code,
 * author, and date.
 
*/
function svn_blame($repository_url, $revision_no = SVN_REVISION_HEAD) {}

/**
* <div id="function.svn-delete" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_delete</h1>  <p class="verinfo">(PECL svn &gt;= 0.4.0)</p><p class="refpurpose"><span class="refname">svn_delete</span> — <span class="dc-title">Delete items from a working copy or repository</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-delete-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_delete</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$force</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Deletes the file, directory or symbolic link at <span class="parameter" style="color:#3A95FF">path</span>   from the working directory. The item will be deleted from the repository   the next time you call <span class="function">{@link svn_commit()}</span> on the working   copy.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-delete-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">       Path of item to delete.      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">相对路径将会以PHP执行文件所在目录作为当前工作目录进行解析。如果希望依据脚本所在目录解析, 使用<span class="function">{@link realpath()}</span> 或 dirname(__FILE__)。</span></p></blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">force</span></dt>     <dd>      <p class="para">       If <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>, the file will be deleted even if it has local modifications.       Otherwise, local modifications will result in a failure. Default is       <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-delete-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-delete-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div> <div class="refsect1 seealso" id="refsect1-function.svn-delete-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><a href="http://svnbook.red-bean.com/en/1.2/svn.ref.svn.c.delete.html" class="link external">» SVN documentation on svn    delete</a></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.4.0)<br/>
 * Delete items from a working copy or repository.
 * @link https://php.net/manual/zh/function.svn-delete.php
 * @param string $path <p>
 * Path of item to delete.
 * </p>
 * Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script&#x00027;s working directory, use <b>realpath</b> or dirname(__FILE__).
 * @param bool $force [optional] <p>
 * If <b>TRUE</b>, the file will be deleted even if it has local modifications.
 * Otherwise, local modifications will result in a failure. Default is
 * <b>FALSE</b>
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function svn_delete($path, $force = false) {}

/**
* <div id="function.svn-mkdir" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_mkdir</h1>  <p class="verinfo">(PECL svn &gt;= 0.4.0)</p><p class="refpurpose"><span class="refname">svn_mkdir</span> — <span class="dc-title">Creates a directory in a working copy or repository</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-mkdir-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_mkdir</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$log_message</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Creates a directory in a working copy or repository.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-mkdir-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">       The path to the working copy or repository.      </p>     </dd>       </dl>    </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-mkdir-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.svn-mkdir-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link svn_add()} - 在工作目录列入新增项</span></li>    <li><span class="function"><strong>svn_copy()</strong></span></li>   </ul>   </div></div>
*
 * (PECL svn &gt;= 0.4.0)<br/>
 * Creates a directory in a working copy or repository
 * @link https://php.net/manual/zh/function.svn-mkdir.php
 * @param string $path <p>
 * The path to the working copy or repository.
 * </p>
 * @param string $log_message [optional]
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function svn_mkdir($path, $log_message = null) {}

/**
 * @link https://php.net/manual/en/ref.svn.php
 * @param string $src_path
 * @param string $dst_path
 * @param bool $force [optional]
 * @return mixed
 */
function svn_move($src_path, $dst_path, $force = false) {}

/**
 * @link https://php.net/manual/en/ref.svn.php
 * @param string $path
 * @param bool $recurse [optional]
 * @param int $revision [optional]
 * @return mixed
 */
function svn_proplist($path, $recurse = false, $revision) {}

/**
 * @param string $path
 * @param string $property_name
 * @param bool $recurse [optional]
 * @param int $revision [optional]
 * @return mixed
 */
function svn_propget($path, $property_name, $recurse = false, $revision) {}

/**
* <div id="function.svn-repos-create" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_repos_create</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_repos_create</span> — <span class="dc-title">Create a new subversion repository at path</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-repos-create-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_repos_create</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$fsconfig</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Create a new subversion repository at path  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-repos-create-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Create a new subversion repository at path
 * @link https://php.net/manual/zh/function.svn-repos-create.php
 * @param string $path <p>
 * Its description
 * </p>
 * @param null|array $config [optional] <p>
 * Its description
 * </p>
 * @param null|array $fsconfig [optional] <p>
 * Its description
 * </p>
 * @return resource What the function returns, first on success, then on failure.
 
*/
function svn_repos_create($path, ?array $config = null, ?array $fsconfig = null) {}

/**
* <div id="function.svn-repos-recover" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_repos_recover</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_repos_recover</span> — <span class="dc-title">Run recovery procedures on the repository located at path</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-repos-recover-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_repos_recover</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Run recovery procedures on the repository located at path.  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-repos-recover-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Run recovery procedures on the repository located at path.
 * @link https://php.net/manual/zh/function.svn-repos-recover.php
 * @param string $path <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_repos_recover($path) {}

/**
* <div id="function.svn-repos-hotcopy" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_repos_hotcopy</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_repos_hotcopy</span> — <span class="dc-title">Make a hot-copy of the repos at repospath; copy it to destpath</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-repos-hotcopy-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_repos_hotcopy</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$repospath</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$destpath</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$cleanlogs</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Make a hot-copy of the repos at repospath; copy it to destpath  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-repos-hotcopy-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Make a hot-copy of the repos at repospath; copy it to destpath
 * @link https://php.net/manual/zh/function.svn-repos-hotcopy.php
 * @param string $repospath <p>
 * Its description
 * </p>
 * @param string $destpath <p>
 * Its description
 * </p>
 * @param bool $cleanlogs <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_repos_hotcopy($repospath, $destpath, $cleanlogs) {}

/**
* <div id="function.svn-repos-open" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_repos_open</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_repos_open</span> — <span class="dc-title">Open a shared lock on a repository</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-repos-open-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_repos_open</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Open a shared lock on a repository.  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-repos-open-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Open a shared lock on a repository.
 * @link https://php.net/manual/zh/function.svn-repos-open.php
 * @param string $path <p>
 * Its description
 * </p>
 * @return resource What the function returns, first on success, then on failure.
 
*/
function svn_repos_open($path) {}

/**
* <div id="function.svn-repos-fs" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_repos_fs</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_repos_fs</span> — <span class="dc-title">Gets a handle on the filesystem for a repository</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-repos-fs-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_repos_fs</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$repos</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Gets a handle on the filesystem for a repository  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-repos-fs-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Gets a handle on the filesystem for a repository
 * @link https://php.net/manual/zh/function.svn-repos-fs.php
 * @param resource $repos <p>
 * Its description
 * </p>
 * @return resource What the function returns, first on success, then on failure.
 
*/
function svn_repos_fs($repos) {}

/**
* <div id="function.svn-repos-fs-begin-txn-for-commit" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_repos_fs_begin_txn_for_commit</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_repos_fs_begin_txn_for_commit</span> — <span class="dc-title">Create a new transaction</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-repos-fs-begin-txn-for-commit-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_repos_fs_begin_txn_for_commit</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$repos</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$rev</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$author</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$log_msg</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Create a new transaction  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-repos-fs-begin-txn-for-commit-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Create a new transaction
 * @link https://php.net/manual/zh/function.svn-repos-fs-begin-txn-for-commit.php
 * @param resource $repos <p>
 * Its description
 * </p>
 * @param int $rev <p>
 * Its description
 * </p>
 * @param string $author <p>
 * Its description
 * </p>
 * @param string $log_msg <p>
 * Its description
 * </p>
 * @return resource What the function returns, first on success, then on failure.
 
*/
function svn_repos_fs_begin_txn_for_commit($repos, $rev, $author, $log_msg) {}

/**
* <div id="function.svn-repos-fs-commit-txn" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_repos_fs_commit_txn</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_repos_fs_commit_txn</span> — <span class="dc-title">Commits a transaction and returns the new revision</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-repos-fs-commit-txn-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_repos_fs_commit_txn</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$txn</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Commits a transaction and returns the new revision  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-repos-fs-commit-txn-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Commits a transaction and returns the new revision
 * @link https://php.net/manual/zh/function.svn-repos-fs-commit-txn.php
 * @param resource $txn <p>
 * Its description
 * </p>
 * @return int What the function returns, first on success, then on failure.
 
*/
function svn_repos_fs_commit_txn($txn) {}

/**
* <div id="function.svn-fs-revision-root" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_revision_root</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_fs_revision_root</span> — <span class="dc-title">Get a handle on a specific version of the repository root</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-revision-root-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_revision_root</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$fs</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$revnum</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Get a handle on a specific version of the repository root  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-revision-root-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Get a handle on a specific version of the repository root
 * @link https://php.net/manual/zh/function.svn-fs-revision-root.php
 * @param resource $fs <p>
 * Its description
 * </p>
 * @param int $revnum <p>
 * Its description
 * </p>
 * @return resource What the function returns, first on success, then on failure.
 
*/
function svn_fs_revision_root($fs, $revnum) {}

/**
* <div id="function.svn-fs-check-path" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_check_path</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_fs_check_path</span> — <span class="dc-title">Determines what kind of item lives at path in a given repository fsroot</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-check-path-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_check_path</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$fsroot</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Determines what kind of item lives at path in a given repository fsroot  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-check-path-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Determines what kind of item lives at path in a given repository fsroot
 * @link https://php.net/manual/zh/function.svn-fs-check-path.php
 * @param resource $fsroot <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @return int What the function returns, first on success, then on failure.
 
*/
function svn_fs_check_path($fsroot, $path) {}

/**
* <div id="function.svn-fs-revision-prop" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_revision_prop</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_fs_revision_prop</span> — <span class="dc-title">Fetches the value of a named property</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-revision-prop-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_revision_prop</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$fs</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$revnum</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$propname</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Fetches the value of a named property  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-revision-prop-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Fetches the value of a named property
 * @link https://php.net/manual/zh/function.svn-fs-revision-prop.php
 * @param resource $fs <p>
 * Its description
 * </p>
 * @param int $revnum <p>
 * Its description
 * </p>
 * @param string $propname <p>
 * Its description
 * </p>
 * @return string What the function returns, first on success, then on failure.
 
*/
function svn_fs_revision_prop($fs, $revnum, $propname) {}

/**
* <div id="function.svn-fs-dir-entries" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_dir_entries</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_fs_dir_entries</span> — <span class="dc-title">Enumerates the directory entries under path; returns a hash of dir names to file type</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-dir-entries-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_dir_entries</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$fsroot</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Enumerates the directory entries under path; returns a hash of dir names to file type  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-dir-entries-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Enumerates the directory entries under path; returns a hash of dir names to file type
 * @link https://php.net/manual/zh/function.svn-fs-dir-entries.php
 * @param resource $fsroot <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @return array What the function returns, first on success, then on failure.
 
*/
function svn_fs_dir_entries($fsroot, $path) {}

/**
* <div id="function.svn-fs-node-created-rev" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_node_created_rev</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_fs_node_created_rev</span> — <span class="dc-title">Returns the revision in which path under fsroot was created</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-node-created-rev-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_node_created_rev</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$fsroot</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Returns the revision in which path under fsroot was created  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-node-created-rev-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Returns the revision in which path under fsroot was created
 * @link https://php.net/manual/zh/function.svn-fs-node-created-rev.php
 * @param resource $fsroot <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @return int What the function returns, first on success, then on failure.
 
*/
function svn_fs_node_created_rev($fsroot, $path) {}

/**
* <div id="function.svn-fs-youngest-rev" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_youngest_rev</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_fs_youngest_rev</span> — <span class="dc-title">Returns the number of the youngest revision in the filesystem</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-youngest-rev-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_youngest_rev</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$fs</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Returns the number of the youngest revision in the filesystem  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-youngest-rev-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Returns the number of the youngest revision in the filesystem
 * @link https://php.net/manual/zh/function.svn-fs-youngest-rev.php
 * @param resource $fs <p>
 * Its description
 * </p>
 * @return int What the function returns, first on success, then on failure.
 
*/
function svn_fs_youngest_rev($fs) {}

/**
* <div id="function.svn-fs-file-contents" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_file_contents</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_fs_file_contents</span> — <span class="dc-title">Returns a stream to access the contents of a file from a given version of the fs</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-file-contents-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_file_contents</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$fsroot</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Returns a stream to access the contents of a file from a given version of the fs  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-file-contents-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Returns a stream to access the contents of a file from a given version of the fs
 * @link https://php.net/manual/zh/function.svn-fs-file-contents.php
 * @param resource $fsroot <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @return resource What the function returns, first on success, then on failure.
 
*/
function svn_fs_file_contents($fsroot, $path) {}

/**
* <div id="function.svn-fs-file-length" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_file_length</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_fs_file_length</span> — <span class="dc-title">Returns the length of a file from a given version of the fs</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-file-length-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_file_length</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$fsroot</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Returns the length of a file from a given version of the fs  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-file-length-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Returns the length of a file from a given version of the fs
 * @link https://php.net/manual/zh/function.svn-fs-file-length.php
 * @param resource $fsroot <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @return int What the function returns, first on success, then on failure.
 
*/
function svn_fs_file_length($fsroot, $path) {}

/**
* <div id="function.svn-fs-txn-root" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_txn_root</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_txn_root</span> — <span class="dc-title">Creates and returns a transaction root</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-txn-root-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_txn_root</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$txn</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Creates and returns a transaction root  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-txn-root-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Creates and returns a transaction root
 * @link https://php.net/manual/zh/function.svn-fs-txn-root.php
 * @param resource $txn <p>
 * Its description
 * </p>
 * @return resource What the function returns, first on success, then on failure.
 
*/
function svn_fs_txn_root($txn) {}

/**
* <div id="function.svn-fs-make-file" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_make_file</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_make_file</span> — <span class="dc-title">Creates a new empty file</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-make-file-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_make_file</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$root</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Creates a new empty file.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-fs-make-file-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">root</span></dt>     <dd>      <p class="para">             </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">             </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-fs-make-file-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-make-file-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Creates a new empty file, returns true if all is ok, false otherwise
 * @link https://php.net/manual/zh/function.svn-fs-make-file.php
 * @param resource $root <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_fs_make_file($root, $path) {}

/**
* <div id="function.svn-fs-make-dir" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_make_dir</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_make_dir</span> — <span class="dc-title">Creates a new empty directory</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-make-dir-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_make_dir</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$root</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Creates a new empty directory.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-fs-make-dir-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">root</span></dt>     <dd>      <p class="para">             </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">             </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-fs-make-dir-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-make-dir-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Creates a new empty directory, returns true if all is ok, false otherwise
 * @link https://php.net/manual/zh/function.svn-fs-make-dir.php
 * @param resource $root <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_fs_make_dir($root, $path) {}

/**
* <div id="function.svn-fs-apply-text" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_apply_text</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_apply_text</span> — <span class="dc-title">Creates and returns a stream that will be used to replace</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-apply-text-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_apply_text</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$root</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Creates and returns a stream that will be used to replace  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-apply-text-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Creates and returns a stream that will be used to replace
 * @link https://php.net/manual/zh/function.svn-fs-apply-text.php
 * @param resource $root <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @return resource What the function returns, first on success, then on failure.
 
*/
function svn_fs_apply_text($root, $path) {}

/**
* <div id="function.svn-fs-copy" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_copy</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_copy</span> — <span class="dc-title">Copies a file or a directory</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-copy-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_copy</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$from_root</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$from_path</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$to_root</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$to_path</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Copies a file or a directory.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-fs-copy-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">from_root</span></dt>     <dd>      <p class="para">             </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">from_path</span></dt>     <dd>      <p class="para">             </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">to_root</span></dt>     <dd>      <p class="para">             </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">to_path</span></dt>     <dd>      <p class="para">             </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-fs-copy-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-copy-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Copies a file or a directory, returns true if all is ok, false otherwise
 * @link https://php.net/manual/zh/function.svn-fs-copy.php
 * @param resource $from_root <p>
 * Its description
 * </p>
 * @param string $from_path <p>
 * Its description
 * </p>
 * @param resource $to_root <p>
 * Its description
 * </p>
 * @param string $to_path <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_fs_copy($from_root, $from_path, $to_root, $to_path) {}

/**
* <div id="function.svn-fs-delete" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_delete</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_delete</span> — <span class="dc-title">Deletes a file or a directory</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-delete-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_delete</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$root</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Deletes a file or a directory.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-fs-delete-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">root</span></dt>     <dd>      <p class="para">             </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">             </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-fs-delete-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-delete-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Deletes a file or a directory, return true if all is ok, false otherwise
 * @link https://php.net/manual/zh/function.svn-fs-delete.php
 * @param resource $root <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_fs_delete($root, $path) {}

/**
* <div id="function.svn-fs-begin-txn2" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_begin_txn2</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_begin_txn2</span> — <span class="dc-title">Create a new transaction</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-begin-txn2-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_begin_txn2</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$repos</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$rev</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Create a new transaction  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-begin-txn2-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Create a new transaction
 * @link https://php.net/manual/zh/function.svn-fs-begin-txn2.php
 * @param resource $repos <p>
 * Its description
 * </p>
 * @param int $rev <p>
 * Its description
 * </p>
 * @return resource What the function returns, first on success, then on failure.
 
*/
function svn_fs_begin_txn2($repos, $rev) {}

/**
* <div id="function.svn-fs-is-dir" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_is_dir</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_is_dir</span> — <span class="dc-title">Determines if a path points to a directory</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-is-dir-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_is_dir</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$root</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Determines if the given path points to a directory.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-fs-is-dir-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">root</span></dt>     <dd>      <p class="para">             </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">             </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-fs-is-dir-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the path points to a directory, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-is-dir-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Return true if the path points to a directory, false otherwise
 * @link https://php.net/manual/zh/function.svn-fs-is-dir.php
 * @param resource $root <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_fs_is_dir($root, $path) {}

/**
* <div id="function.svn-fs-is-file" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_is_file</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_is_file</span> — <span class="dc-title">Determines if a path points to a file</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-is-file-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_is_file</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$root</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Determines if the given path points to a file.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-fs-is-file-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">root</span></dt>     <dd>      <p class="para">             </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">             </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-fs-is-file-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the path points to a file, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-is-file-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Return true if the path points to a file, false otherwise
 * @link https://php.net/manual/zh/function.svn-fs-is-file.php
 * @param resource $root <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_fs_is_file($root, $path) {}

/**
* <div id="function.svn-fs-node-prop" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_node_prop</h1>  <p class="verinfo">(PECL svn &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">svn_fs_node_prop</span> — <span class="dc-title">Returns the value of a property for a node</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-node-prop-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_node_prop</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$fsroot</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$propname</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Returns the value of a property for a node  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-node-prop-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.1.0)<br/>
 * Returns the value of a property for a node
 * @link https://php.net/manual/zh/function.svn-fs-node-prop.php
 * @param resource $fsroot <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @param string $propname <p>
 * Its description
 * </p>
 * @return string What the function returns, first on success, then on failure.
 
*/
function svn_fs_node_prop($fsroot, $path, $propname) {}

/**
* <div id="function.svn-fs-change-node-prop" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_change_node_prop</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_change_node_prop</span> — <span class="dc-title">Return true if everything is ok, false otherwise</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-change-node-prop-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_change_node_prop</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$root</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$name</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$value</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Return true if everything is ok, false otherwise  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-change-node-prop-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Return true if everything is ok, false otherwise
 * @link https://php.net/manual/zh/function.svn-fs-change-node-prop.php
 * @param resource $root <p>
 * Its description
 * </p>
 * @param string $path <p>
 * Its description
 * </p>
 * @param string $name <p>
 * Its description
 * </p>
 * @param string $value <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_fs_change_node_prop($root, $path, $name, $value) {}

/**
* <div id="function.svn-fs-contents-changed" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_contents_changed</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_contents_changed</span> — <span class="dc-title">Return true if content is different, false otherwise</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-contents-changed-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_contents_changed</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$root1</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path1</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$root2</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path2</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Return true if content is different, false otherwise  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-contents-changed-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Return true if content is different, false otherwise
 * @link https://php.net/manual/zh/function.svn-fs-contents-changed.php
 * @param resource $root1 <p>
 * Its description
 * </p>
 * @param string $path1 <p>
 * Its description
 * </p>
 * @param resource $root2 <p>
 * Its description
 * </p>
 * @param string $path2 <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_fs_contents_changed($root1, $path1, $root2, $path2) {}

/**
* <div id="function.svn-fs-props-changed" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_props_changed</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_props_changed</span> — <span class="dc-title">Return true if props are different, false otherwise</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-props-changed-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_props_changed</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$root1</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path1</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$root2</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path2</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Return true if props are different, false otherwise  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-props-changed-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Return true if props are different, false otherwise
 * @link https://php.net/manual/zh/function.svn-fs-props-changed.php
 * @param resource $root1 <p>
 * Its description
 * </p>
 * @param string $path1 <p>
 * Its description
 * </p>
 * @param resource $root2 <p>
 * Its description
 * </p>
 * @param string $path2 <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_fs_props_changed($root1, $path1, $root2, $path2) {}

/**
* <div id="function.svn-fs-abort-txn" class="refentry"> <div class="refnamediv">  <h1 class="refname">svn_fs_abort_txn</h1>  <p class="verinfo">(PECL svn &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">svn_fs_abort_txn</span> — <span class="dc-title">Aborts a transaction</span></p> </div> <div class="refsect1 description" id="refsect1-function.svn-fs-abort-txn-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>svn_fs_abort_txn</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$txn</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Aborts a transaction.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.svn-fs-abort-txn-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">txn</span></dt>     <dd>      <p class="para">             </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.svn-fs-abort-txn-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 notes" id="refsect1-function.svn-fs-abort-txn-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数是<em>实验性</em>的。此函数的表象，包括名称及其相关文档都可能在未来的PHP 发布版本中未通知就被修改。使用本函数风险自担。</p></div> </div>    </div>
*
 * (PECL svn &gt;= 0.2.0)<br/>
 * Abort a transaction, returns true if everything is okay, false otherwise
 * @link https://php.net/manual/zh/function.svn-fs-abort-txn.php
 * @param resource $txn <p>
 * Its description
 * </p>
 * @return bool What the function returns, first on success, then on failure.
 
*/
function svn_fs_abort_txn($txn) {}

/**
* <span class="simpara">     Property for default username to use when performing basic authentication    </span>
*
 * Property for default username to use when performing basic authentication
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_AUTH_PARAM_DEFAULT_USERNAME', "svn:auth:username");

/**
* <span class="simpara">     Property for default password to use when performing basic authentication    </span>
*
 * Property for default password to use when performing basic authentication
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_AUTH_PARAM_DEFAULT_PASSWORD', "svn:auth:password");
/**
* <span class="simpara"></span>
*/
define('SVN_AUTH_PARAM_NON_INTERACTIVE', "svn:auth:non-interactive");
/**
* <span class="simpara"></span>
*/
define('SVN_AUTH_PARAM_DONT_STORE_PASSWORDS', "svn:auth:dont-store-passwords");
/**
* <span class="simpara"></span>
*/
define('SVN_AUTH_PARAM_NO_AUTH_CACHE', "svn:auth:no-auth-cache");
/**
* <span class="simpara"></span>
*/
define('SVN_AUTH_PARAM_SSL_SERVER_FAILURES', "svn:auth:ssl:failures");
/**
* <span class="simpara"></span>
*/
define('SVN_AUTH_PARAM_SSL_SERVER_CERT_INFO', "svn:auth:ssl:cert-info");
/**
* <span class="simpara"></span>
*/
define('SVN_AUTH_PARAM_CONFIG', "svn:auth:config-category-servers");
/**
* <span class="simpara"></span>
*/
define('SVN_AUTH_PARAM_SERVER_GROUP', "svn:auth:server-group");
/**
* <span class="simpara"></span>
*/
define('SVN_AUTH_PARAM_CONFIG_DIR', "svn:auth:config-dir");

/**
* <span class="simpara">      Custom property for ignoring SSL cert verification errors    </span>
*
 * Custom property for ignoring SSL cert verification errors
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('PHP_SVN_AUTH_PARAM_IGNORE_SSL_VERIFY_ERRORS', "php:svn:auth:ignore-ssl-verify-errors");

/**
* <span class="simpara">     Configuration key that determines filesystem type    </span>
*
 * Configuration key that determines filesystem type
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_FS_CONFIG_FS_TYPE', "fs-type");

/**
* <span class="simpara">     Filesystem is Berkeley-DB implementation    </span>
*
 * Filesystem is Berkeley-DB implementation
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_FS_TYPE_BDB', "bdb");

/**
* <span class="simpara">     Filesystem is native-filesystem implementation    </span>
*
 * Filesystem is native-filesystem implementation
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_FS_TYPE_FSFS', "fsfs");

/**
* <span class="simpara">     svn:date    </span>
*
 * svn:date
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_PROP_REVISION_DATE', "svn:date");

/**
* <span class="simpara">     svn:original-date    </span>
*
 * svn:original-date
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_PROP_REVISION_ORIG_DATE', "svn:original-date");

/**
* <span class="simpara">     svn:author    </span>
*
 * svn:author
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_PROP_REVISION_AUTHOR', "svn:author");

/**
* <span class="simpara">     svn:log    </span>
*
 * svn:log
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_PROP_REVISION_LOG', "svn:log");
define('SVN_REVISION_INITIAL', 1);

/**
* <span class="simpara">     Magic number (-1) specifying the HEAD revision    </span>
*
 * Magic number (-1) specifying the HEAD revision
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_REVISION_HEAD', -1);
define('SVN_REVISION_BASE', -2);
define('SVN_REVISION_COMMITTED', -3);
define('SVN_REVISION_PREV', -4);
define('SVN_REVISION_UNSPECIFIED', -5);
define('SVN_NON_RECURSIVE', 1);
define('SVN_DISCOVER_CHANGED_PATHS', 2);
define('SVN_OMIT_MESSAGES', 4);
define('SVN_STOP_ON_COPY', 8);
define('SVN_ALL', 16);
define('SVN_SHOW_UPDATES', 32);
define('SVN_NO_IGNORE', 64);

/**
* <span class="simpara">     Status does not exist    </span>
*
 * Status does not exist
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_NONE', 1);

/**
* <span class="simpara">     Item is not versioned in working copy    </span>
*
 * Item is not versioned in working copy
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_UNVERSIONED', 2);

/**
* <span class="simpara">     Item exists, nothing else is happening    </span>
*
 * Item exists, nothing else is happening
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_NORMAL', 3);

/**
* <span class="simpara">     Item is scheduled for addition    </span>
*
 * Item is scheduled for addition
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_ADDED', 4);

/**
* <span class="simpara">     Item is versioned but missing from the working copy    </span>
*
 * Item is versioned but missing from the working copy
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_MISSING', 5);

/**
* <span class="simpara">     Item is scheduled for deletion    </span>
*
 * Item is scheduled for deletion
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_DELETED', 6);

/**
* <span class="simpara">     Item was deleted and then re-added    </span>
*
 * Item was deleted and then re-added
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_REPLACED', 7);

/**
* <span class="simpara">     Item (text or properties) was modified    </span>
*
 * Item (text or properties) was modified
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_MODIFIED', 8);

/**
* <span class="simpara">     Item's local modifications were merged with repository modifications    </span>
*
 * Item's local modifications were merged with repository modifications
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_MERGED', 9);

/**
* <span class="simpara">     Item's local modifications conflicted with repository modifications    </span>
*
 * Item's local modifications conflicted with repository modifications
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_CONFLICTED', 10);

/**
* <span class="simpara">     Item is unversioned but configured to be ignored    </span>
*
 * Item is unversioned but configured to be ignored
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_IGNORED', 11);

/**
* <span class="simpara">     Unversioned item is in the way of a versioned resource    </span>
*
 * Unversioned item is in the way of a versioned resource
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_OBSTRUCTED', 12);

/**
* <span class="simpara">     Unversioned path that is populated using svn:externals    </span>
*
 * Unversioned path that is populated using svn:externals
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_EXTERNAL', 13);

/**
* <span class="simpara">     Directory does not contain complete entries list    </span>
*
 * Directory does not contain complete entries list
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_WC_STATUS_INCOMPLETE', 14);

/**
* <span class="simpara">     Absent    </span>
*
 * Absent
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_NODE_NONE', 0);

/**
* <span class="simpara">     File    </span>
*
 * File
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_NODE_FILE', 1);

/**
* <span class="simpara">     Directory    </span>
*
 * Directory
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_NODE_DIR', 2);

/**
* <span class="simpara">     Something Subversion cannot identify    </span>
*
 * Something Subversion cannot identify
 * @link https://php.net/manual/zh/svn.constants.php
 
*/
define('SVN_NODE_UNKNOWN', 3);
define('SVN_WC_SCHEDULE_NORMAL', 0);
define('SVN_WC_SCHEDULE_ADD', 1);
define('SVN_WC_SCHEDULE_DELETE', 2);
define('SVN_WC_SCHEDULE_REPLACE', 3);
