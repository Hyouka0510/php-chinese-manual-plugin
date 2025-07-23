<?php

// Start of posix v.
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Pure;

/**
 * <div id="function.posix-kill" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_kill</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_kill</span> — <span class="dc-title">Send a signal to a process</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-kill-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_kill</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$process_id</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$signal</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Send the signal <span class="parameter" style="color:#3A95FF">signal</span> to the process with   the process identifier <span class="parameter" style="color:#3A95FF">process_id</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-kill-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">process_id</span></dt>     <dd>      <p class="para">       The process identifier.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">signal</span></dt>     <dd>      <p class="para">       One of the <a href="https://php.net/manual/zh/pcntl.constants.php" class="link">PCNTL signals constants</a>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-kill-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.posix-kill-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>     The kill(2) manual page of the POSIX system, which contains additional     information about negative process identifiers, the special pid 0, the     special pid -1, and the signal number 0.    </li>   </ul>   </div></div>
 * 
 * Send a signal to a process
 * @link https://php.net/manual/zh/function.posix-kill.php
 * @param int $process_id <p>
 * The process identifier.
 * </p>
 * @param int $signal <p>
 * One of the PCNTL signals constants.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_kill(int $process_id, int $signal): bool {}

/**
 * <div id="function.posix-getpid" class="refentry">    <div class="refnamediv">        <h1 class="refname">posix_getpid</h1>        <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getpid</span> — <span class="dc-title">返回当前进程 id</span></p>    </div>    <div class="refsect1 description" id="refsect1-function.posix-getpid-description">        <h3 class="title">说明</h3>        <div class="methodsynopsis dc-description">            <span class="methodname" style="color:#CC7832"><strong>posix_getpid</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>        <p class="para rdfs-comment">            Return the process identifier of the current process.            返回当前进程的 id        </p>    </div>    <div class="refsect1 parameters" id="refsect1-function.posix-getpid-parameters">       <h3 class="title">参数</h3>       <p class="para">此函数没有参数。</p>    </div>    <div class="refsect1 returnvalues" id="refsect1-function.posix-getpid-returnvalues">        <h3 class="title">返回值</h3>        <p class="para">            返回进程 id 号，是整型（<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>）。        </p>    </div>    <div class="refsect1 examples" id="refsect1-function.posix-getpid-examples">        <h3 class="title">示例</h3>        <p class="para">            </p><div class="example" id="example-3558">                <p><strong>示例 #1 <span class="function"><strong>posix_getpid()</strong></span> 的使用例子</strong></p>                <div class="example-contents">                    <div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_getpid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//8805<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>                </div>            </div>            </div>    <div class="refsect1 seealso" id="refsect1-function.posix-getpid-seealso">        <h3 class="title">参见</h3>        <p class="para">            </p><ul class="simplelist">                <li><span class="function">{@link posix_kill()} - Send a signal to a process</span></li>                <li>POSIX man page GETPID(2)</li>            </ul>            </div></div>
 * 
 * Return the current process identifier
 * @link https://php.net/manual/zh/function.posix-getpid.php
 * @return int the identifier, as an integer.
 */
#[Pure]
function posix_getpid(): int {}

/**
 * <div id="function.posix-getppid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getppid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getppid</span> — <span class="dc-title">Return the parent process identifier</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getppid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getppid</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Return the process identifier of the parent process of the   current process.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getppid-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getppid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the identifier, as an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-getppid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3559">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_getppid()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_getppid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//8259<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div></div>
 * 
 * Return the parent process identifier
 * @link https://php.net/manual/zh/function.posix-getppid.php
 * @return int the identifier, as an integer.
 */
#[Pure]
function posix_getppid(): int {}

/**
 * <div id="function.posix-getuid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getuid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getuid</span> — <span class="dc-title">Return the real user ID of the current process</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getuid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getuid</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Return the numeric real user ID of the current process.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getuid-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getuid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the user id, as an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-getuid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3564">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_getuid()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_getuid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//10000<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-getuid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>     <span class="function">{@link posix_getpwuid()} - Return info about a user by user id</span></li>    <li>POSIX man page GETUID(2)</li>   </ul>   </div></div>
 * 
 * Return the real user ID of the current process
 * @link https://php.net/manual/zh/function.posix-getuid.php
 * @return int the user id, as an integer
 */
#[Pure]
function posix_getuid(): int {}

/**
 * <div id="function.posix-setuid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_setuid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_setuid</span> — <span class="dc-title">Set the UID of the current process</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-setuid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_setuid</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$user_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Set the real user ID of the current process. This is a privileged   function that needs appropriate privileges (usually root) on   the system to be able to perform this function.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-setuid-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">user_id</span></dt>     <dd>      <p class="para">       The user id.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-setuid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-setuid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3569">    <p><strong>示例 #1 <span class="function"><strong>posix_setuid()</strong></span> example</strong></p>    <div class="example-contents"><p>This example will show the current user id and then set     it to a different value.</p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_getuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10001<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_geteuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10001<br></span><span style="color: #9876AA">posix_setuid</span><span style="color: #007700">(</span><span style="color: #9876AA">10000</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">posix_getuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10000<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_geteuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10000<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-setuid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_setgid()} - Set the GID of the current process</span></li>    <li><span class="function">{@link posix_seteuid()} - Set the effective UID of the current process</span></li>    <li><span class="function">{@link posix_getuid()} - Return the real user ID of the current process</span></li>    <li><span class="function">{@link posix_geteuid()} - Return the effective user ID of the current process</span></li>   </ul>   </div></div>
 * 
 * Set the UID of the current process
 * @link https://php.net/manual/zh/function.posix-setuid.php
 * @param int $user_id <p>
 * The user id.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_setuid(int $user_id): bool {}

/**
 * <div id="function.posix-geteuid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_geteuid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_geteuid</span> — <span class="dc-title">Return the effective user ID of the current process</span></p> </div> <div class="refsect1 description" id="refsect1-function.posix-geteuid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_geteuid</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Return the numeric effective user ID of the current process. See   also <span class="function">{@link posix_getpwuid()}</span> for information on how   to convert this into a useable username.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-geteuid-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-geteuid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the user id, as an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-geteuid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3551">    <p><strong>示例 #1 <span class="function"><strong>posix_geteuid()</strong></span> example</strong></p>    <div class="example-contents"><p>This example will show the current user id then set the    effective user id to a separate id using    <span class="function">{@link posix_seteuid()}</span>, then show the difference between    the real id and the effective id.</p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_getuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10001<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_geteuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10001<br></span><span style="color: #9876AA">posix_seteuid</span><span style="color: #007700">(</span><span style="color: #9876AA">10000</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">posix_getuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10001<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_geteuid</span><span style="color: #007700">().</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//10000<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-geteuid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_getpwuid()} - Return info about a user by user id</span></li>    <li><span class="function">{@link posix_getuid()} - Return the real user ID of the current process</span></li>    <li><span class="function">{@link posix_setuid()} - Set the UID of the current process</span></li>    <li>POSIX man page GETEUID(2)</li>   </ul>   </div></div>
 * 
 * Return the effective user ID of the current process
 * @link https://php.net/manual/zh/function.posix-geteuid.php
 * @return int the user id, as an integer
 */
#[Pure]
function posix_geteuid(): int {}

/**
 * <div id="function.posix-seteuid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_seteuid</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_seteuid</span> — <span class="dc-title">Set the effective UID of the current process</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-seteuid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_seteuid</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$user_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Set the effective user ID of the current process. This is a privileged   function and needs appropriate privileges (usually root) on   the system to be able to perform this function.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-seteuid-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">user_id</span></dt>     <dd>      <p class="para">       The user id.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-seteuid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.posix-seteuid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_geteuid()} - Return the effective user ID of the current process</span></li>    <li><span class="function">{@link posix_setuid()} - Set the UID of the current process</span></li>    <li><span class="function">{@link posix_getuid()} - Return the real user ID of the current process</span></li>   </ul>   </div></div>
 * 
 * Set the effective UID of the current process
 * @link https://php.net/manual/zh/function.posix-seteuid.php
 * @param int $user_id <p>
 * The user id.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_seteuid(int $user_id): bool {}

/**
 * <div id="function.posix-setrlimit" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_setrlimit</h1>  <p class="verinfo">(PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_setrlimit</span> — <span class="dc-title">Set system resource limits</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-setrlimit-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_setrlimit</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$resource</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$soft_limit</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$hard_limit</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>posix_setrlimit()</strong></span> sets the soft and hard limits for a   given system resource.  </p>  <p class="para">  Each resource has an associated soft and hard limit.  The soft  limit is the value that the kernel enforces for the corresponding  resource.  The hard limit acts as a ceiling for the soft limit.  An unprivileged process may only set its soft limit to a value  from 0 to the hard limit, and irreversibly lower its hard limit.</p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-setrlimit-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">resource</span></dt>     <dd>      <p class="para">       The       <a href="https://php.net/manual/zh/posix.constants.setrlimit.php" class="link">resource limit constant</a>       corresponding to the limit that is being set.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">soft_limit</span></dt>     <dd>      <p class="para">       The soft limit, in whatever unit the resource limit requires, or       <strong><span><a href="https://php.net/manual/zh/posix.constants.setrlimit.php#constant.posix-rlimit-infinity">POSIX_RLIMIT_INFINITY</a></span></strong>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">hard_limit</span></dt>     <dd>      <p class="para">       The hard limit, in whatever unit the resource limit requires, or       <strong><span><a href="https://php.net/manual/zh/posix.constants.setrlimit.php#constant.posix-rlimit-infinity">POSIX_RLIMIT_INFINITY</a></span></strong>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-setrlimit-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.posix-setrlimit-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>man page SETRLIMIT(2)</li>    <li><span class="function">{@link posix_getrlimit()} - Return info about system resource limits</span></li>   </ul>   </div></div>
 * 
 * Set system resource limits
 * @link https://php.net/manual/zh/function.posix-setrlimit.php
 * @param int $resource <p>
 * The
 * {@link https://php.net/manual/zh/posix.constants.setrlimit.php resource limit constant}
 * corresponding to the limit that is being set.
 * </p>
 * @param int $soft_limit The soft limit, in whatever unit the resource limit requires, or POSIX_RLIMIT_INFINITY.
 * @param int $hard_limit The hard limit, in whatever unit the resource limit requires, or POSIX_RLIMIT_INFINITY.
 * @return bool Returns TRUE on success or FALSE on failure.
 * @since 7.0
 */
function posix_setrlimit(int $resource, int $soft_limit, int $hard_limit): bool {}

/**
 * <div id="function.posix-getgid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getgid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getgid</span> — <span class="dc-title">Return the real group ID of the current process</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getgid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getgid</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Return the numeric real group ID of the current process.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getgid-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getgid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the real group id, as an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-getgid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3552">    <p><strong>示例 #1 <span class="function"><strong>posix_getgid()</strong></span> example</strong></p>    <div class="example-contents"><p>     This example will print out the real group id, even once the effective     group id has been changed.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">'My real group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getgid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//20<br></span><span style="color: #9876AA">posix_setegid</span><span style="color: #007700">(</span><span style="color: #9876AA">40</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">'My real group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getgid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//20<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">'My effective group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getegid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//40<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-getgid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_getgrgid()} - Return info about a group by group id</span></li>    <li><span class="function">{@link posix_getegid()} - Return the effective group ID of the current process</span></li>    <li><span class="function">{@link posix_setgid()} - Set the GID of the current process</span></li>    <li>POSIX man page GETGID(2)</li>   </ul>   </div></div>
 * 
 * Return the real group ID of the current process
 * @link https://php.net/manual/zh/function.posix-getgid.php
 * @return int the real group id, as an integer.
 */
#[Pure]
function posix_getgid(): int {}

/**
 * <div id="function.posix-setgid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_setgid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_setgid</span> — <span class="dc-title">Set the GID of the current process</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-setgid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_setgid</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$group_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Set the real group ID of the current process. This is a   privileged function and needs appropriate privileges (usually   root) on the system to be able to perform this function. The   appropriate order of function calls is   <span class="function"><strong>posix_setgid()</strong></span> first,   <span class="function">{@link posix_setuid()}</span> last.  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    If the caller is a super user, this will also set the effective    group id.   </p>  </blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.posix-setgid-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">group_id</span></dt>     <dd>      <p class="para">       The group id.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-setgid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-setgid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3568">    <p><strong>示例 #1 <span class="function"><strong>posix_setgid()</strong></span> example</strong></p>    <div class="example-contents"><p>     This example will print out the effective group id, once it is changed.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">'My real group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getgid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//20<br></span><span style="color: #9876AA">posix_setgid</span><span style="color: #007700">(</span><span style="color: #9876AA">40</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">'My real group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getgid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//40<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">'My effective group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getegid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//40<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-setgid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_getgrgid()} - Return info about a group by group id</span></li>    <li><span class="function">{@link posix_getgid()} - Return the real group ID of the current process</span></li>   </ul>   </div></div>
 * 
 * Set the GID of the current process
 * @link https://php.net/manual/zh/function.posix-setgid.php
 * @param int $group_id <p>
 * The group id.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_setgid(int $group_id): bool {}

/**
 * <div id="function.posix-getegid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getegid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getegid</span> — <span class="dc-title">Return the effective group ID of the current process</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getegid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getegid</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Return the numeric effective group ID of the current process.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getegid-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getegid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> of the effective group ID.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-getegid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3550">    <p><strong>示例 #1 <span class="function"><strong>posix_getegid()</strong></span> example</strong></p>    <div class="example-contents"><p>     This example will print out the effective group id, once it is     changed with <span class="function">{@link posix_setegid()}</span>.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">'My real group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getgid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//20<br></span><span style="color: #9876AA">posix_setegid</span><span style="color: #007700">(</span><span style="color: #9876AA">40</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">'My real group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getgid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//20<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">'My effective group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getegid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//40<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.posix-getegid-notes">  <h3 class="title">注释</h3>  <p class="para">   <span class="function"><strong>posix_getegid()</strong></span> is different than    <span class="function">{@link posix_getgid()}</span> because effective group ID can be changed by   a calling process using <span class="function">{@link posix_setegid()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.posix-getegid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_getgrgid()} - Return info about a group by group id</span></li>    <li><span class="function">{@link posix_getgid()} - Return the real group ID of the current process</span></li>    <li><span class="function">{@link posix_setgid()} - Set the GID of the current process</span></li>   </ul>   </div></div>
 * 
 * Return the effective group ID of the current process
 * @link https://php.net/manual/zh/function.posix-getegid.php
 * @return int an integer of the effective group ID.
 */
#[Pure]
function posix_getegid(): int {}

/**
 * <div id="function.posix-setegid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_setegid</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_setegid</span> — <span class="dc-title">Set the effective GID of the current process</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-setegid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_setegid</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$group_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Set the effective group ID of the current process. This is a   privileged function and needs appropriate privileges (usually   root) on the system to be able to perform this function.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-setegid-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">group_id</span></dt>     <dd>      <p class="para">       The group id.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-setegid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-setegid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3567">    <p><strong>示例 #1 <span class="function"><strong>posix_setegid()</strong></span> example</strong></p>    <div class="example-contents"><p>     This example will print out the effective group id, once changed.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">'My real group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getgid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//20<br></span><span style="color: #9876AA">posix_setegid</span><span style="color: #007700">(</span><span style="color: #9876AA">40</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">'My real group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getgid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//20<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">'My effective group id is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getegid</span><span style="color: #007700">(); </span><span style="color: #FF8000">//40<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-setegid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>     <span class="function">{@link posix_getgrgid()} - Return info about a group by group id</span></li>    <li><span class="function">{@link posix_getgid()} - Return the real group ID of the current process</span></li>    <li><span class="function">{@link posix_setgid()} - Set the GID of the current process</span></li>   </ul>   </div></div>
 * 
 * Set the effective GID of the current process
 * @link https://php.net/manual/zh/function.posix-setegid.php
 * @param int $group_id <p>
 * The group id.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_setegid(int $group_id): bool {}

/**
 * <div id="function.posix-getgroups" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getgroups</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getgroups</span> — <span class="dc-title">Return the group set of the current process</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getgroups-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getgroups</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Gets the group set of the current process.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getgroups-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getgroups-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array of integers containing the numeric group ids of the group   set of the current process,  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-getgroups-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3555">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_getgroups()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$groups </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_getgroups</span><span style="color: #007700">();<br><br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$groups</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[0]&nbsp;=&gt;&nbsp;4<br>&nbsp;&nbsp;&nbsp;&nbsp;[1]&nbsp;=&gt;&nbsp;20<br>&nbsp;&nbsp;&nbsp;&nbsp;[2]&nbsp;=&gt;&nbsp;24<br>&nbsp;&nbsp;&nbsp;&nbsp;[3]&nbsp;=&gt;&nbsp;25<br>&nbsp;&nbsp;&nbsp;&nbsp;[4]&nbsp;=&gt;&nbsp;29<br>&nbsp;&nbsp;&nbsp;&nbsp;[5]&nbsp;=&gt;&nbsp;30<br>&nbsp;&nbsp;&nbsp;&nbsp;[6]&nbsp;=&gt;&nbsp;33<br>&nbsp;&nbsp;&nbsp;&nbsp;[7]&nbsp;=&gt;&nbsp;44<br>&nbsp;&nbsp;&nbsp;&nbsp;[8]&nbsp;=&gt;&nbsp;46<br>&nbsp;&nbsp;&nbsp;&nbsp;[9]&nbsp;=&gt;&nbsp;104<br>&nbsp;&nbsp;&nbsp;&nbsp;[10]&nbsp;=&gt;&nbsp;109<br>&nbsp;&nbsp;&nbsp;&nbsp;[11]&nbsp;=&gt;&nbsp;110<br>&nbsp;&nbsp;&nbsp;&nbsp;[12]&nbsp;=&gt;&nbsp;1000<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-getgroups-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_getgrgid()} - Return info about a group by group id</span></li>   </ul>   </div></div>
 * 
 * Return the group set of the current process
 * @link https://php.net/manual/zh/function.posix-getgroups.php
 * @return array|false an array of integers containing the numeric group ids of the group
 * set of the current process.
 */
#[Pure]
function posix_getgroups(): array|false {}

/**
 * <div id="function.posix-getlogin" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getlogin</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getlogin</span> — <span class="dc-title">Return login name</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getlogin-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getlogin</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Returns the login name of the user owning the current process.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getlogin-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getlogin-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the login name of the user, as a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>,  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-getlogin-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3556">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_getlogin()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_getlogin</span><span style="color: #007700">(); </span><span style="color: #FF8000">//apache<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-getlogin-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_getpwnam()} - Return info about a user by username</span></li>    <li>POSIX man page GETLOGIN(3)</li>   </ul>   </div></div>
 * 
 * Return login name
 * @link https://php.net/manual/zh/function.posix-getlogin.php
 * @return string|false the login name of the user, as a string.
 */
#[Pure]
function posix_getlogin(): string|false {}

/**
 * <div id="function.posix-getpgrp" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getpgrp</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getpgrp</span> — <span class="dc-title">Return the current process group identifier</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getpgrp-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getpgrp</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Return the process group identifier of the current process.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getpgrp-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getpgrp-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the identifier, as an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.posix-getpgrp-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>POSIX.1 and the getpgrp(2) manual page on the POSIX system for     more information on process groups.</li>   </ul>   </div></div>
 * 
 * Return the current process group identifier
 * @link https://php.net/manual/zh/function.posix-getpgrp.php
 * @return int the identifier, as an integer.
 */
#[Pure]
function posix_getpgrp(): int {}

/**
 * <div id="function.posix-setsid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_setsid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_setsid</span> — <span class="dc-title">Make the current process a session leader</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-setsid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_setsid</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Make the current process a session leader.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-setsid-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-setsid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the session id, or -1 on errors.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.posix-setsid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>     The POSIX.1 and the setsid(2) manual page on the POSIX system for more     information on process groups and job control.    </li>   </ul>   </div></div>
 * 
 * Make the current process a session leader
 * @link https://php.net/manual/zh/function.posix-setsid.php
 * @return int the session id, or -1 on errors.
 */
function posix_setsid(): int {}

/**
 * <div id="function.posix-setpgid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_setpgid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_setpgid</span> — <span class="dc-title">Set process group id for job control</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-setpgid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_setpgid</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$process_id</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$process_group_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Let the process <span class="parameter" style="color:#3A95FF">process_id</span> join the process group   <span class="parameter" style="color:#3A95FF">process_group_id</span>.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-setpgid-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">process_id</span></dt>     <dd>      <p class="para">       The process id.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">process_group_id</span></dt>     <dd>      <p class="para">       The process group id.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-setpgid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.posix-setpgid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>     See POSIX.1 and the setsid(2) manual page on the POSIX system for more     information on process groups and job control.    </li>   </ul>   </div></div>
 * 
 * Set process group id for job control
 * @link https://php.net/manual/zh/function.posix-setpgid.php
 * @param int $process_id <p>
 * The process id.
 * </p>
 * @param int $process_group_id <p>
 * The process group id.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_setpgid(int $process_id, int $process_group_id): bool {}

/**
 * <div id="function.posix-getpgid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getpgid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getpgid</span> — <span class="dc-title">Get process group id for job control</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getpgid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getpgid</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$process_id</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Returns the process group identifier of the process   <span class="parameter" style="color:#3A95FF">process_id</span> 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getpgid-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">process_id</span></dt>     <dd>      <p class="para">       The process id.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getpgid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the identifier, as an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-getpgid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3557">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_getpgid()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$pid </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_getppid</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">posix_getpgid</span><span style="color: #007700">(</span><span style="color: #9876AA">\$pid</span><span style="color: #007700">); </span><span style="color: #FF8000">//35<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.posix-getpgid-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    This is a not POSIX function, but is common on BSD and System V    systems. If the system does not support this function, then it    will not be included at compile time.  This may be checked with    <span class="function">{@link function_exists()}</span>.   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.posix-getpgid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_getppid()} - Return the parent process identifier</span></li>    <li>man page SETPGID(2)</li>   </ul>   </div></div>
 * 
 * Get process group id for job control
 * @link https://php.net/manual/zh/function.posix-getpgid.php
 * @param int $process_id <p>
 * The process id.
 * </p>
 * @return int|false the identifier, as an integer.
 */
#[Pure]
function posix_getpgid(int $process_id): int|false {}

/**
 * <div id="function.posix-getsid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getsid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getsid</span> — <span class="dc-title">Get the current sid of the process</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getsid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getsid</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$process_id</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Return the session id of the process <span class="parameter" style="color:#3A95FF">process_id</span>.   The session id of a process is the process group id of the session leader.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getsid-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">process_id</span></dt>     <dd>      <p class="para">       The process identifier. If set to 0, the current process is       assumed.  If an invalid <span class="parameter" style="color:#3A95FF">process_id</span> is       specified, then <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> is returned and an error is set which       can be checked with <span class="function">{@link posix_get_last_error()}</span>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getsid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the identifier, as an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>,  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-getsid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3563">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_getsid()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$pid </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_getpid</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">posix_getsid</span><span style="color: #007700">(</span><span style="color: #9876AA">\$pid</span><span style="color: #007700">); </span><span style="color: #FF8000">//8805<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-getsid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>     <span class="function">{@link posix_getpgid()} - Get process group id for job control</span>    </li>    <li>     <span class="function">{@link posix_setsid()} - Make the current process a session leader</span>    </li>    <li>POSIX man page GETSID(2)</li>   </ul>   </div></div>
 * 
 * Get the current sid of the process
 * @link https://php.net/manual/zh/function.posix-getsid.php
 * @param int $process_id <p>
 * The process identifier. If set to 0, the current process is
 * assumed. If an invalid <i>pid</i> is
 * specified, then <b>FALSE</b> is returned and an error is set which
 * can be checked with <b>posix_get_last_error</b>.
 * </p>
 * @return int|false the identifier, as an integer.
 */
#[Pure]
function posix_getsid(int $process_id): int|false {}

/**
 * Get system name
 * @link https://php.net/manual/en/function.posix-uname.php
 * @return array|false a hash of strings with information about the
 * system. The indices of the hash are
 * sysname - operating system name (e.g. Linux)
 * nodename - system name (e.g. valiant)
 * release - operating system release (e.g. 2.2.10)
 * version - operating system version (e.g. #4 Tue Jul 20
 * 17:01:36 MEST 1999)
 * machine - system architecture (e.g. i586)
 * domainname - DNS domainname (e.g. example.com)
 * </p>
 * <p>
 * domainname is a GNU extension and not part of POSIX.1, so this
 * field is only available on GNU systems or when using the GNU
 * libc.
 */
#[Pure]
#[ArrayShape([
        'sysname' => 'string',
        'nodename' => 'string',
        'release' => 'string',
        'version' => 'string',
        'machine' => 'string',
        'domainname' => 'string',
])]
/**
 * <div id="function.posix-uname" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_uname</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_uname</span> — <span class="dc-title">Get system name</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-uname-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_uname</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Gets information about the system.  </p>  <p class="para">   Posix requires that assumptions must not be made about the   format of the values, e.g. the assumption that a release may contain   three digits or anything else returned by this function.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-uname-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-uname-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a hash of strings with information about the   system. The indices of the hash are   </p><ul class="itemizedlist">    <li class="listitem"><span class="simpara">      sysname - operating system name (e.g. Linux)     </span></li>    <li class="listitem"><span class="simpara">      nodename - system name (e.g. valiant)     </span></li>    <li class="listitem"><span class="simpara">      release - operating system release (e.g. 2.2.10)     </span></li>    <li class="listitem"><span class="simpara">      version - operating system version (e.g. #4 Tue Jul 20      17:01:36 MEST 1999)     </span></li>    <li class="listitem"><span class="simpara">      machine - system architecture (e.g. i586)     </span></li>    <li class="listitem"><span class="simpara">      domainname - DNS domainname (e.g. example.com)     </span></li>   </ul>    <p class="para">   domainname is a GNU extension and not part of POSIX.1, so this   field is only available on GNU systems or when using the GNU   libc.  </p>  <p class="para">   The function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-uname-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3573">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_uname()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$uname</span><span style="color: #007700">=</span><span style="color: #9876AA">posix_uname</span><span style="color: #007700">();<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$uname</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[sysname]&nbsp;=&gt;&nbsp;Linux<br>&nbsp;&nbsp;&nbsp;&nbsp;[nodename]&nbsp;=&gt;&nbsp;funbox<br>&nbsp;&nbsp;&nbsp;&nbsp;[release]&nbsp;=&gt;&nbsp;2.6.20-15-server<br>&nbsp;&nbsp;&nbsp;&nbsp;[version]&nbsp;=&gt;&nbsp;#2&nbsp;SMP&nbsp;Sun&nbsp;Apr&nbsp;15&nbsp;07:41:34&nbsp;UTC&nbsp;2007<br>&nbsp;&nbsp;&nbsp;&nbsp;[machine]&nbsp;=&gt;&nbsp;i686<br>)</blockquote></div>    </div>   </div>   </div></div>
 */
function posix_uname(): array|false {}

/**
 * Get process times
 * @link https://php.net/manual/en/function.posix-times.php
 * @return array|false a hash of strings with information about the current
 * process CPU usage. The indices of the hash are:
 * ticks - the number of clock ticks that have elapsed since
 * reboot.
 * utime - user time used by the current process.
 * stime - system time used by the current process.
 * cutime - user time used by current process and children.
 * cstime - system time used by current process and children.
 */
#[Pure]
#[ArrayShape([
        'ticks' => 'int',
        'utime' => 'int',
        'stime' => 'int',
        'cutime' => 'int',
    'cstime' => 'int'
])]
/**
 * <div id="function.posix-times" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_times</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_times</span> — <span class="dc-title">Get process times</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-times-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_times</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Gets information about the current CPU usage.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-times-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-times-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a hash of strings with information about the current   process CPU usage. The indices of the hash are:   </p><ul class="itemizedlist">    <li class="listitem">     <span class="simpara">      ticks - the number of clock ticks that have elapsed since      reboot.     </span>    </li>    <li class="listitem">     <span class="simpara">      utime - user time used by the current process.     </span>    </li>    <li class="listitem">     <span class="simpara">      stime - system time used by the current process.     </span>    </li>    <li class="listitem">     <span class="simpara">      cutime - user time used by current process and children.     </span>    </li>    <li class="listitem">     <span class="simpara">      cstime - system time used by current process and children.     </span>    </li>   </ul>   The function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.   </div> <div class="refsect1 examples" id="refsect1-function.posix-times-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3572">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_times()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$times </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_times</span><span style="color: #007700">();<br><br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$times</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[ticks]&nbsp;=&gt;&nbsp;25814410<br>&nbsp;&nbsp;&nbsp;&nbsp;[utime]&nbsp;=&gt;&nbsp;1<br>&nbsp;&nbsp;&nbsp;&nbsp;[stime]&nbsp;=&gt;&nbsp;1<br>&nbsp;&nbsp;&nbsp;&nbsp;[cutime]&nbsp;=&gt;&nbsp;0<br>&nbsp;&nbsp;&nbsp;&nbsp;[cstime]&nbsp;=&gt;&nbsp;0<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.posix-times-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    This function isn't reliable to use, it may return negative values for    high times.   </p>  </div> </div></div>
 */
function posix_times(): array|false {}

/**
 * <div id="function.posix-ctermid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_ctermid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_ctermid</span> — <span class="dc-title">Get path name of controlling terminal</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-ctermid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_ctermid</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Generates a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> which is the pathname for the current    controlling terminal for the process.  On error this will set errno,    which can be checked using <span class="function">{@link posix_get_last_error()}</span>  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-ctermid-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-ctermid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Upon successful completion, returns <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> of the pathname to    the current controlling terminal.  Otherwise <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> is returned and errno   is set, which can be checked with <span class="function">{@link posix_get_last_error()}</span>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-ctermid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3545">    <p><strong>示例 #1 <span class="function"><strong>posix_ctermid()</strong></span> example</strong></p>    <div class="example-contents"><p>     This example will display the path to the current TTY.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"I am running from "</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_ctermid</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-ctermid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_ttyname()} - Determine terminal device name</span></li>    <li><span class="function">{@link posix_get_last_error()} - Retrieve the error number set by the last posix function that failed</span></li>   </ul>   </div></div>
 * 
 * Get path name of controlling terminal
 * @link https://php.net/manual/zh/function.posix-ctermid.php
 * @return string|false Upon successful completion, returns string of the pathname to
 * the current controlling terminal. Otherwise <b>FALSE</b> is returned and errno
 * is set, which can be checked with <b>posix_get_last_error</b>.
 */
#[Pure]
function posix_ctermid(): string|false {}

/**
 * <div id="function.posix-ttyname" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_ttyname</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_ttyname</span> — <span class="dc-title">Determine terminal device name</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-ttyname-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_ttyname</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">\$file_descriptor</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Returns a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> for the absolute path to the current   terminal device that is open on the file descriptor   <span class="parameter" style="color:#3A95FF">file_descriptor</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-ttyname-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>     <dt><span class="parameter" style="color:#3A95FF">file_descriptor</span></dt> <dd>  <p class="para">   The file descriptor, which is expected to be either a file   <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> or an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>. An <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>   will be assumed to be a file descriptor that can be passed directly to   the underlying system call.  </p> </dd>   </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-ttyname-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   On success, returns a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> of the absolute path of the   <span class="parameter" style="color:#3A95FF">file_descriptor</span>. On failure, returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>  </p> </div> <div class="refsect1 errors" id="refsect1-function.posix-ttyname-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   On invalid <span class="parameter" style="color:#3A95FF">file_descriptor</span> integer values   an <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong> is raised.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.posix-ttyname-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.3.0</td>      <td>       Type error <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong>s are now raised for integer       coercions following the usual PHP type coercion semantics.      </td>     </tr>     <tr>      <td>8.3.0</td>      <td>       On invalid <span class="parameter" style="color:#3A95FF">file_descriptor</span> integer values       an <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong> is now raised.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.posix-ttyname-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_isatty()} - Determine if a file descriptor is an interactive terminal</span></li>    <li><span class="function">{@link stream_isatty()} - Check if a stream is a TTY</span></li>   </ul>   </div></div>
 * 
 * Determine terminal device name
 * @link https://php.net/manual/zh/function.posix-ttyname.php
 * @param resource|int $file_descriptor <p>
 * The file descriptor.
 * </p>
 * @return string|false On success, returns a string of the absolute path of the
 * <i>fd</i>. On failure, returns <b>FALSE</b>
 */
#[Pure]
function posix_ttyname($file_descriptor): string|false {}

/**
 * <div id="function.posix-isatty" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_isatty</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_isatty</span> — <span class="dc-title">Determine if a file descriptor is an interactive terminal</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-isatty-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_isatty</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">\$file_descriptor</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>   <p class="para rdfs-comment">    Determines if the file descriptor <span class="parameter" style="color:#3A95FF">file_descriptor</span> refers to a valid    terminal type device.  </p> </div>     <div class="refsect1 parameters" id="refsect1-function.posix-isatty-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>     <dt><span class="parameter" style="color:#3A95FF">file_descriptor</span></dt> <dd>  <p class="para">   The file descriptor, which is expected to be either a file   <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> or an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>. An <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>   will be assumed to be a file descriptor that can be passed directly to   the underlying system call.  </p> </dd>   </dl>   </div>        <div class="refsect1 returnvalues" id="refsect1-function.posix-isatty-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if <span class="parameter" style="color:#3A95FF">file_descriptor</span> is an open descriptor connected   to a terminal and <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.posix-isatty-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.4.0</td>      <td>       Set errno (error number) to <strong><span>EBADF</span></strong> when the       file descriptor/stream passed is invalid.      </td>     </tr>     <tr>      <td>8.3.0</td>      <td>       Type error <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong>s are now raised for integer       coercions following the usual PHP type coercion semantics.      </td>     </tr>    </tbody>     </table> </div>        <div class="refsect1 seealso" id="refsect1-function.posix-isatty-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_ttyname()} - Determine terminal device name</span></li>    <li><span class="function">{@link stream_isatty()} - Check if a stream is a TTY</span></li>   </ul>   </div></div>
 * 
 * Determine if a file descriptor is an interactive terminal
 * @link https://php.net/manual/zh/function.posix-isatty.php
 * @param resource|int $file_descriptor <p>
 * The file descriptor, which is expected to be either a file resource or an integer.
 * An integer will be assumed to be a file descriptor that can be passed
 * directly to the underlying system call.<br />
 * In almost all cases, you will want to provide a file resource.
 * </p>
 * @return bool <b>TRUE</b> if <i>fd</i> is an open descriptor connected
 * to a terminal and <b>FALSE</b> otherwise.
 */
#[Pure]
function posix_isatty($file_descriptor): bool {}

/**
 * <div id="function.posix-getcwd" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getcwd</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getcwd</span> — <span class="dc-title">Pathname of current directory</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getcwd-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getcwd</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Gets the absolute pathname of the script's current working directory.   On error, it sets errno which can be checked using   <span class="function">{@link posix_get_last_error()}</span>  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getcwd-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getcwd-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> of the absolute pathname on success.     On error, returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> and sets errno which can be checked with   <span class="function">{@link posix_get_last_error()}</span>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-getcwd-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3549">    <p><strong>示例 #1 <span class="function"><strong>posix_getcwd()</strong></span> example</strong></p>    <div class="example-contents"><p>     This example will return the absolute path of the current working      directory of the script.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">'My current working directory is '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_getcwd</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 notes" id="refsect1-function.posix-getcwd-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    This function can fail on    </p><ul class="itemizedlist">     <li class="listitem">      <span class="simpara">Read or Search permission was denied</span>     </li>     <li class="listitem">      <span class="simpara">Pathname no longer exists</span>     </li>    </ul>      </blockquote> </div></div>
 * 
 * Pathname of current directory
 * @link https://php.net/manual/zh/function.posix-getcwd.php
 * @return string|false a string of the absolute pathname on success.
 * On error, returns <b>FALSE</b> and sets errno which can be checked with
 * <b>posix_get_last_error</b>.
 */
#[Pure(true)]
function posix_getcwd(): string|false {}

/**
 * <div id="function.posix-mkfifo" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_mkfifo</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_mkfifo</span> — <span class="dc-title">Create a fifo special file (a named pipe)</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-mkfifo-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_mkfifo</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$permissions</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>posix_mkfifo()</strong></span> creates a special   <span class="literal">FIFO</span> file which exists in the file system and acts as   a bidirectional communication endpoint for processes.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-mkfifo-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>     <dd>      <p class="para">       Path to the <span class="literal">FIFO</span> file.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">permissions</span></dt>     <dd>      <p class="para">       The second parameter <span class="parameter" style="color:#3A95FF">permissions</span> has to be given in       octal notation (e.g. 0644). The permission of the newly created       <span class="literal">FIFO</span> also depends on the setting of the current       <span class="function">{@link umask()}</span>. The permissions of the created file are       (mode &amp; ~umask).      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-mkfifo-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Create a fifo special file (a named pipe)
 * @link https://php.net/manual/zh/function.posix-mkfifo.php
 * @param string $filename <p>
 * Path to the FIFO file.
 * </p>
 * @param int $permissions <p>
 * The second parameter <i>mode</i> has to be given in
 * octal notation (e.g. 0644). The permission of the newly created
 * FIFO also depends on the setting of the current
 * <b>umask</b>. The permissions of the created file are
 * (mode & ~umask).
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_mkfifo(string $filename, int $permissions): bool {}

/**
 * <div id="function.posix-mknod" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_mknod</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_mknod</span> — <span class="dc-title">   Create a special or ordinary file (POSIX.1)  </span></p> </div> <div class="refsect1 description" id="refsect1-function.posix-mknod-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_mknod</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$flags</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$major</span><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$minor</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Creates a special or ordinary file.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-mknod-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>     <dd>      <p class="para">       The file to create      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       This parameter is constructed by a bitwise OR between file type (one of       the following constants: <strong><span><a href="https://php.net/manual/zh/posix.constants.mknod.php#constant.posix-s-ifreg">POSIX_S_IFREG</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.mknod.php#constant.posix-s-ifchr">POSIX_S_IFCHR</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.mknod.php#constant.posix-s-ifblk">POSIX_S_IFBLK</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.mknod.php#constant.posix-s-ififo">POSIX_S_IFIFO</a></span></strong> or       <strong><span><a href="https://php.net/manual/zh/posix.constants.mknod.php#constant.posix-s-ifsock">POSIX_S_IFSOCK</a></span></strong>) and permissions.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">major</span></dt>     <dd>      <p class="para">       The major device kernel identifier (required to pass when using       <strong><span>S_IFCHR</span></strong> or <strong><span>S_IFBLK</span></strong>).      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">minor</span></dt>     <dd>      <p class="para">       The minor device kernel identifier.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-mknod-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-mknod-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3565">    <p><strong>示例 #1 A <span class="function"><strong>posix_mknod()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$file </span><span style="color: #007700">= </span><span style="color: #DD0000">'/tmp/tmpfile'</span><span style="color: #007700">;  </span><span style="color: #FF8000">// file name<br></span><span style="color: #9876AA">\$type </span><span style="color: #007700">= </span><span style="color: #9876AA">POSIX_S_IFBLK</span><span style="color: #007700">;   </span><span style="color: #FF8000">// file type<br></span><span style="color: #9876AA">\$permissions </span><span style="color: #007700">= </span><span style="color: #9876AA">0777</span><span style="color: #007700">;     </span><span style="color: #FF8000">// octal<br></span><span style="color: #9876AA">\$major </span><span style="color: #007700">= </span><span style="color: #9876AA">1</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$minor </span><span style="color: #007700">= </span><span style="color: #9876AA">8</span><span style="color: #007700">;              </span><span style="color: #FF8000">// /dev/random<br><br></span><span style="color: #007700">if (!</span><span style="color: #9876AA">posix_mknod</span><span style="color: #007700">(</span><span style="color: #9876AA">\$file</span><span style="color: #007700">, </span><span style="color: #9876AA">\$type </span><span style="color: #007700">| </span><span style="color: #9876AA">\$permissions</span><span style="color: #007700">, </span><span style="color: #9876AA">\$major</span><span style="color: #007700">, </span><span style="color: #9876AA">\$minor</span><span style="color: #007700">)) {<br>    die(</span><span style="color: #DD0000">'Error ' </span><span style="color: #007700">. </span><span style="color: #9876AA">posix_get_last_error</span><span style="color: #007700">() . </span><span style="color: #DD0000">': ' </span><span style="color: #007700">. </span><span style="color: #9876AA">posix_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">posix_get_last_error</span><span style="color: #007700">()));<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-mknod-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_mkfifo()} - Create a fifo special file (a named pipe)</span></li>   </ul>   </div></div>
 * 
 * Create a special or ordinary file (POSIX.1)
 * @link https://php.net/manual/zh/function.posix-mknod.php
 * @param string $filename <p>
 * The file to create
 * </p>
 * @param int $flags <p>
 * This parameter is constructed by a bitwise OR between file type (one of
 * the following constants: <b>POSIX_S_IFREG</b>,
 * <b>POSIX_S_IFCHR</b>, <b>POSIX_S_IFBLK</b>,
 * <b>POSIX_S_IFIFO</b> or
 * <b>POSIX_S_IFSOCK</b>) and permissions.
 * </p>
 * @param int $major [optional] <p>
 * The major device kernel identifier (required to pass when using
 * <b>S_IFCHR</b> or <b>S_IFBLK</b>).
 * </p>
 * @param int $minor [optional] <p>
 * The minor device kernel identifier.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_mknod(string $filename, int $flags, int $major = 0, int $minor = 0): bool {}

/**
 * <div id="function.posix-access" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_access</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_access</span> — <span class="dc-title">   Determine accessibility of a file  </span></p> </div> <div class="refsect1 description" id="refsect1-function.posix-access-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_access</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$flags</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>posix_access()</strong></span> checks the user's permission of a file.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-access-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>      <dd>       <p class="para">        The name of the file to be tested.       </p>      </dd>              <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>      <dd>       <p class="para">        A mask consisting of one or more of <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-f-ok">POSIX_F_OK</a></span></strong>,        <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-r-ok">POSIX_R_OK</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-w-ok">POSIX_W_OK</a></span></strong> and        <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-x-ok">POSIX_X_OK</a></span></strong>.       </p>       <p class="para">        <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-r-ok">POSIX_R_OK</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-w-ok">POSIX_W_OK</a></span></strong> and        <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-x-ok">POSIX_X_OK</a></span></strong> request checking whether the file        exists and has read, write and execute permissions, respectively.        <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-f-ok">POSIX_F_OK</a></span></strong> just requests checking for the        existence of the file.       </p>      </dd>        </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-access-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-access-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3544">    <p><strong>示例 #1 <span class="function"><strong>posix_access()</strong></span> example</strong></p>    <div class="example-contents"><p>     This example will check if the \$file is readable and writable, otherwise     will print an error message.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$file </span><span style="color: #007700">= </span><span style="color: #DD0000">'some_file'</span><span style="color: #007700">;<br><br>if (</span><span style="color: #9876AA">posix_access</span><span style="color: #007700">(</span><span style="color: #9876AA">\$file</span><span style="color: #007700">, </span><span style="color: #9876AA">POSIX_R_OK </span><span style="color: #007700">| </span><span style="color: #9876AA">POSIX_W_OK</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #DD0000">'The file is readable and writable!'</span><span style="color: #007700">;<br><br>} else {<br>    </span><span style="color: #9876AA">\$error </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_get_last_error</span><span style="color: #007700">();<br><br>    echo </span><span style="color: #DD0000">"Error </span><span style="color: #9876AA">\$error</span><span style="color: #DD0000">: " </span><span style="color: #007700">. </span><span style="color: #9876AA">posix_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">\$error</span><span style="color: #007700">);<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-access-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_get_last_error()} - Retrieve the error number set by the last posix function that failed</span></li>    <li><span class="function">{@link posix_strerror()} - Retrieve the system error message associated with the given errno</span></li>   </ul>   </div></div>
 * 
 * Determine accessibility of a file
 * @link https://php.net/manual/zh/function.posix-access.php
 * @param string $filename <p>
 * The name of the file to be tested.
 * </p>
 * @param int $flags [optional] <p>
 * A mask consisting of one or more of <b>POSIX_F_OK</b>,
 * <b>POSIX_R_OK</b>, <b>POSIX_W_OK</b> and
 * <b>POSIX_X_OK</b>.
 * </p>
 * <p>
 * <b>POSIX_R_OK</b>, <b>POSIX_W_OK</b> and
 * <b>POSIX_X_OK</b> request checking whether the file
 * exists and has read, write and execute permissions, respectively.
 * <b>POSIX_F_OK</b> just requests checking for the
 * existence of the file.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function posix_access(string $filename, int $flags = POSIX_F_OK): bool {}

/**
 * <div id="function.posix-getgrnam" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getgrnam</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getgrnam</span> — <span class="dc-title">Return info about a group by name</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getgrnam-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getgrnam</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Gets information about a group provided its name.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getgrnam-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">name</span></dt>     <dd>      <p class="para">The name of the group</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getgrnam-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> on success,  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.   The array elements returned are:   </p><table class="doctable table">    <caption><strong>The group information array</strong></caption>         <thead>      <tr>       <th>Element</th>       <th>Description</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>name</td>       <td>        The name element contains the name of the group. This is        a short, usually less than 16 character "handle" of the        group, not the real, full name.  This should be the same as        the <span class="parameter" style="color:#3A95FF">name</span> parameter used when        calling the function, and hence redundant.       </td>      </tr>      <tr>       <td>passwd</td>       <td>        The passwd element contains the group's password in an        encrypted format. Often, for example on a system employing        "shadow" passwords, an asterisk is returned instead.       </td>      </tr>      <tr>       <td>gid</td>       <td>        Group ID of the group in numeric form.       </td>      </tr>      <tr>       <td>members</td>       <td>        This consists of an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of        <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>'s for all the members in the group.       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.posix-getgrnam-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3554">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_getgrnam()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$groupinfo </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_getgrnam</span><span style="color: #007700">(</span><span style="color: #DD0000">"toons"</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$groupinfo</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[name]&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;toons<br>&nbsp;&nbsp;&nbsp;&nbsp;[passwd]&nbsp;&nbsp;=&gt;&nbsp;x<br>&nbsp;&nbsp;&nbsp;&nbsp;[members]&nbsp;=&gt;&nbsp;Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0]&nbsp;=&gt;&nbsp;tom<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]&nbsp;=&gt;&nbsp;jerry<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br>&nbsp;&nbsp;&nbsp;&nbsp;[gid]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;42<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-getgrnam-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_getegid()} - Return the effective group ID of the current process</span></li>    <li><span class="function">{@link posix_getgrgid()} - Return info about a group by group id</span></li>    <li><span class="function">{@link filegroup()} - 取得文件的组</span></li>    <li><span class="function">{@link stat()} - 给出文件的信息</span></li>    <li>POSIX man page GETGRNAM(3)</li>   </ul>   </div></div>
 * 
 * Return info about a group by name
 * @link https://php.net/manual/zh/function.posix-getgrnam.php
 * @param string $name <p>The name of the group</p>
 * @return array|false The array elements returned are:
 * <table>
 * The group information array
 * <tr valign="top">
 * <td>Element</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * The name element contains the name of the group. This is
 * a short, usually less than 16 character "handle" of the
 * group, not the real, full name. This should be the same as
 * the <i>name</i> parameter used when
 * calling the function, and hence redundant.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * The passwd element contains the group's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * Group ID of the group in numeric form.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>members</td>
 * <td>
 * This consists of an array of
 * string's for all the members in the group.
 * </td>
 * </tr>
 * </table>
 */
#[Pure]
function posix_getgrnam(string $name): array|false {}

/**
 * <div id="function.posix-getgrgid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getgrgid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getgrgid</span> — <span class="dc-title">Return info about a group by group id</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getgrgid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getgrgid</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$group_id</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Gets information about a group provided its id.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getgrgid-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">group_id</span></dt>     <dd>      <p class="para">       The group id.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getgrgid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   The array elements returned are:   </p><table class="doctable table">    <caption><strong>The group information array</strong></caption>         <thead>      <tr>       <th>Element</th>       <th>Description</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>name</td>       <td>        The name element contains the name of the group. This is        a short, usually less than 16 character "handle" of the        group, not the real, full name.       </td>      </tr>      <tr>       <td>passwd</td>       <td>        The passwd element contains the group's password in an        encrypted format. Often, for example on a system employing        "shadow" passwords, an asterisk is returned instead.       </td>      </tr>      <tr>       <td>gid</td>       <td>        Group ID, should be the same as the        <span class="parameter" style="color:#3A95FF">group_id</span> parameter used when calling the        function, and hence redundant.       </td>      </tr>      <tr>       <td>members</td>       <td>        This consists of an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of        <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>'s for all the members in the group.       </td>      </tr>     </tbody>       </table>   The function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.   </div> <div class="refsect1 examples" id="refsect1-function.posix-getgrgid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3553">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_getgrgid()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$groupid   </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_getegid</span><span style="color: #007700">();<br></span><span style="color: #9876AA">\$groupinfo </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_getgrgid</span><span style="color: #007700">(</span><span style="color: #9876AA">\$groupid</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$groupinfo</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[name]&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;toons<br>&nbsp;&nbsp;&nbsp;&nbsp;[passwd]&nbsp;&nbsp;=&gt;&nbsp;x<br>&nbsp;&nbsp;&nbsp;&nbsp;[members]&nbsp;=&gt;&nbsp;Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0]&nbsp;=&gt;&nbsp;tom<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]&nbsp;=&gt;&nbsp;jerry<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br>&nbsp;&nbsp;&nbsp;&nbsp;[gid]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;42<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-getgrgid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_getegid()} - Return the effective group ID of the current process</span></li>    <li><span class="function">{@link posix_getgrnam()} - Return info about a group by name</span></li>    <li><span class="function">{@link filegroup()} - 取得文件的组</span></li>    <li><span class="function">{@link stat()} - 给出文件的信息</span></li>    <li>POSIX man page GETGRNAM(3)</li>   </ul>   </div></div>
 * 
 * Return info about a group by group id
 * @link https://php.net/manual/zh/function.posix-getgrgid.php
 * @param int $group_id <p>
 * The group id.
 * </p>
 * @return array|false The array elements returned are:
 * <table>
 * The group information array
 * <tr valign="top">
 * <td>Element</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * The name element contains the name of the group. This is
 * a short, usually less than 16 character "handle" of the
 * group, not the real, full name.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * The passwd element contains the group's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * Group ID, should be the same as the
 * <i>gid</i> parameter used when calling the
 * function, and hence redundant.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>members</td>
 * <td>
 * This consists of an array of
 * string's for all the members in the group.
 * </td>
 * </tr>
 * </table>
 */
#[Pure]
function posix_getgrgid(int $group_id): array|false {}

/**
 * Return info about a user by username
 * @link https://php.net/manual/en/function.posix-getpwnam.php
 * @param string $username <p>
 * An alphanumeric username.
 * </p>
 * @return array|false On success an array with the following elements is returned, else
 * <b>FALSE</b> is returned:
 * <table>
 * The user information array
 * <tr valign="top">
 * <td>Element</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * The name element contains the username of the user. This is
 * a short, usually less than 16 character "handle" of the
 * user, not the real, full name. This should be the same as
 * the <i>username</i> parameter used when
 * calling the function, and hence redundant.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * The passwd element contains the user's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>uid</td>
 * <td>
 * User ID of the user in numeric form.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * The group ID of the user. Use the function
 * <b>posix_getgrgid</b> to resolve the group
 * name and a list of its members.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gecos</td>
 * <td>
 * GECOS is an obsolete term that refers to the finger
 * information field on a Honeywell batch processing system.
 * The field, however, lives on, and its contents have been
 * formalized by POSIX. The field contains a comma separated
 * list containing the user's full name, office phone, office
 * number, and home phone number. On most systems, only the
 * user's full name is available.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>dir</td>
 * <td>
 * This element contains the absolute path to the home
 * directory of the user.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>shell</td>
 * <td>
 * The shell element contains the absolute path to the
 * executable of the user's default shell.
 * </td>
 * </tr>
 * </table>
 */
#[Pure]
#[ArrayShape([
        "name" => "string",
        "passwd" => "string",
        "uid" => "int",
        "gid" => "int",
        "gecos" => "string",
        "dir" => "string",
        "shell" => "string",
])]
/**
 * <div id="function.posix-getpwnam" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getpwnam</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getpwnam</span> — <span class="dc-title">Return info about a user by username</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getpwnam-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getpwnam</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$username</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Returns an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of information about the given user.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getpwnam-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">username</span></dt>     <dd>      <p class="para">       An alphanumeric username.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getpwnam-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   On success an array with the following elements is returned, else    <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> is returned:   </p><table class="doctable table">    <caption><strong>The user information array</strong></caption>         <thead>      <tr>       <th>Element</th>       <th>Description</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>name</td>       <td>        The name element contains the username of the user. This is        a short, usually less than 16 character "handle" of the        user, not the real, full name. This should be the same as        the <span class="parameter" style="color:#3A95FF">username</span> parameter used when        calling the function, and hence redundant.       </td>      </tr>      <tr>       <td>passwd</td>       <td>        The passwd element contains the user's password in an        encrypted format. Often, for example on a system employing        "shadow" passwords, an asterisk is returned instead.       </td>      </tr>      <tr>       <td>uid</td>       <td>        User ID of the user in numeric form.       </td>      </tr>      <tr>       <td>gid</td>       <td>        The group ID of the user. Use the function        <span class="function">{@link posix_getgrgid()}</span> to resolve the group        name and a list of its members.       </td>      </tr>      <tr>       <td>gecos</td>       <td>        GECOS is an obsolete term that refers to the finger        information field on a Honeywell batch processing system.        The field, however, lives on, and its contents have been        formalized by POSIX. The field contains a comma separated        list containing the user's full name, office phone, office        number, and home phone number. On most systems, only the        user's full name is available.       </td>      </tr>      <tr>       <td>dir</td>       <td>        This element contains the absolute path to the home        directory of the user.       </td>      </tr>      <tr>       <td>shell</td>       <td>        The shell element contains the absolute path to the        executable of the user's default shell.       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.posix-getpwnam-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3560">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_getpwnam()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$userinfo </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_getpwnam</span><span style="color: #007700">(</span><span style="color: #DD0000">"tom"</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$userinfo</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[name]&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;tom<br>&nbsp;&nbsp;&nbsp;&nbsp;[passwd]&nbsp;&nbsp;=&gt;&nbsp;x<br>&nbsp;&nbsp;&nbsp;&nbsp;[uid]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;10000<br>&nbsp;&nbsp;&nbsp;&nbsp;[gid]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;42<br>&nbsp;&nbsp;&nbsp;&nbsp;[gecos]&nbsp;&nbsp;&nbsp;=&gt;&nbsp;"tom,,,"<br>&nbsp;&nbsp;&nbsp;&nbsp;[dir]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;"/home/tom"<br>&nbsp;&nbsp;&nbsp;&nbsp;[shell]&nbsp;&nbsp;&nbsp;=&gt;&nbsp;"/bin/bash"<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-getpwnam-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_getpwuid()} - Return info about a user by user id</span></li>    <li>POSIX man page GETPWNAM(3)</li>   </ul>   </div></div>
 */
function posix_getpwnam(string $username): array|false {}

/**
 * Return info about a user by user id
 * @link https://php.net/manual/en/function.posix-getpwuid.php
 * @param int $user_id <p>
 * The user identifier.
 * </p>
 * @return array|false an associative array with the following elements:
 * <table>
 * The user information array
 * <tr valign="top">
 * <td>Element</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>name</td>
 * <td>
 * The name element contains the username of the user. This is
 * a short, usually less than 16 character "handle" of the
 * user, not the real, full name.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>passwd</td>
 * <td>
 * The passwd element contains the user's password in an
 * encrypted format. Often, for example on a system employing
 * "shadow" passwords, an asterisk is returned instead.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>uid</td>
 * <td>
 * User ID, should be the same as the
 * <i>uid</i> parameter used when calling the
 * function, and hence redundant.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gid</td>
 * <td>
 * The group ID of the user. Use the function
 * <b>posix_getgrgid</b> to resolve the group
 * name and a list of its members.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>gecos</td>
 * <td>
 * GECOS is an obsolete term that refers to the finger
 * information field on a Honeywell batch processing system.
 * The field, however, lives on, and its contents have been
 * formalized by POSIX. The field contains a comma separated
 * list containing the user's full name, office phone, office
 * number, and home phone number. On most systems, only the
 * user's full name is available.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>dir</td>
 * <td>
 * This element contains the absolute path to the
 * home directory of the user.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>shell</td>
 * <td>
 * The shell element contains the absolute path to the
 * executable of the user's default shell.
 * </td>
 * </tr>
 * </table>
 */
#[Pure]
#[ArrayShape([
        'name' => 'string',
        'passwd' => 'string',
        'uid' => 'int',
        'gid' => 'int',
        'gecos' => 'string',
        'dir' => 'string',
        'shell' => 'string',
])]
/**
 * <div id="function.posix-getpwuid" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getpwuid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getpwuid</span> — <span class="dc-title">Return info about a user by user id</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getpwuid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getpwuid</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$user_id</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Returns an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of information about the user    referenced by the given user ID.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getpwuid-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">user_id</span></dt>     <dd>      <p class="para">       The user identifier.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getpwuid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an associative array with the following elements:   </p><table class="doctable table">    <caption><strong>The user information array</strong></caption>         <thead>      <tr>       <th>Element</th>       <th>Description</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>name</td>       <td>        The name element contains the username of the user. This is        a short, usually less than 16 character "handle" of the        user, not the real, full name.       </td>      </tr>      <tr>       <td>passwd</td>       <td>        The passwd element contains the user's password in an        encrypted format. Often, for example on a system employing        "shadow" passwords, an asterisk is returned instead.       </td>      </tr>      <tr>       <td>uid</td>       <td>        User ID, should be the same as the        <span class="parameter" style="color:#3A95FF">user_id</span> parameter used when calling the        function, and hence redundant.       </td>      </tr>      <tr>       <td>gid</td>       <td>        The group ID of the user. Use the function        <span class="function">{@link posix_getgrgid()}</span> to resolve the group        name and a list of its members.       </td>      </tr>      <tr>       <td>gecos</td>       <td>        GECOS is an obsolete term that refers to the finger        information field on a Honeywell batch processing system.        The field, however, lives on, and its contents have been        formalized by POSIX. The field contains a comma separated        list containing the user's full name, office phone, office        number, and home phone number. On most systems, only the        user's full name is available.       </td>      </tr>      <tr>       <td>dir</td>       <td>        This element contains the absolute path to the        home directory of the user.       </td>      </tr>      <tr>       <td>shell</td>       <td>        The shell element contains the absolute path to the        executable of the user's default shell.       </td>      </tr>     </tbody>       </table>   The function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.   </div> <div class="refsect1 examples" id="refsect1-function.posix-getpwuid-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3561">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_getpwuid()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$userinfo </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_getpwuid</span><span style="color: #007700">(</span><span style="color: #9876AA">10000</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$userinfo</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[name]&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;tom<br>&nbsp;&nbsp;&nbsp;&nbsp;[passwd]&nbsp;&nbsp;=&gt;&nbsp;x<br>&nbsp;&nbsp;&nbsp;&nbsp;[uid]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;10000<br>&nbsp;&nbsp;&nbsp;&nbsp;[gid]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;42<br>&nbsp;&nbsp;&nbsp;&nbsp;[gecos]&nbsp;&nbsp;&nbsp;=&gt;&nbsp;"tom,,,"<br>&nbsp;&nbsp;&nbsp;&nbsp;[dir]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;=&gt;&nbsp;"/home/tom"<br>&nbsp;&nbsp;&nbsp;&nbsp;[shell]&nbsp;&nbsp;&nbsp;=&gt;&nbsp;"/bin/bash"<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-getpwuid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_getpwnam()} - Return info about a user by username</span></li>    <li>POSIX man page GETPWNAM(3)</li>   </ul>   </div></div>
 */
function posix_getpwuid(int $user_id): array|false {}

/**
 * <div id="function.posix-getrlimit" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_getrlimit</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_getrlimit</span> — <span class="dc-title">Return info about system resource limits</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-getrlimit-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_getrlimit</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">\$resource</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>posix_getrlimit()</strong></span> returns an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>   of information about the current resource's soft and hard limits.  </p>  <p class="para">  Each resource has an associated soft and hard limit.  The soft  limit is the value that the kernel enforces for the corresponding  resource.  The hard limit acts as a ceiling for the soft limit.  An unprivileged process may only set its soft limit to a value  from 0 to the hard limit, and irreversibly lower its hard limit.</p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-getrlimit-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">resource</span></dt>     <dd>      <p class="para">       If <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> all resource limits will be fetched.       Otherwise, the only limits of the resource type provided will be returned.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-getrlimit-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an associative <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of elements for each   limit that is defined. Each limit has a soft and a hard limit.   </p><table class="doctable table">    <caption><strong>List of possible limits returned</strong></caption>         <thead>      <tr>       <th>Limit name</th>       <th>Limit description</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>core</td>       <td>        The maximum size of the core file.  When 0, not core files are        created.  When core files are larger than this size, they will        be truncated at this size.       </td>      </tr>      <tr>       <td>totalmem</td>       <td>        The maximum size of the memory of the process, in bytes.       </td>      </tr>      <tr>       <td>virtualmem</td>       <td>        The maximum size of the virtual memory for the process, in bytes.       </td>      </tr>       <tr>       <td>data</td>       <td>        The maximum size of the data segment for the process, in bytes.       </td>      </tr>      <tr>       <td>stack</td>       <td>        The maximum size of the process stack, in bytes.       </td>      </tr>      <tr>       <td>rss</td>       <td>        The maximum number of virtual pages resident in RAM       </td>      </tr>      <tr>       <td>maxproc</td>       <td>        The maximum number of processes that can be created for the        real user ID of the calling process.       </td>      </tr>      <tr>       <td>memlock</td>       <td>        The maximum number of bytes of memory that may be locked into RAM.       </td>      </tr>      <tr>       <td>cpu</td>       <td>        The amount of time the process is allowed to use the CPU.       </td>      </tr>      <tr>       <td>filesize</td>       <td>        The maximum size of the data segment for the process, in bytes.       </td>      </tr>      <tr>       <td>openfiles</td>       <td>        One more than the maximum number of open file descriptors.       </td>      </tr>     </tbody>       </table>   The function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.   </div> <div class="refsect1 changelog" id="refsect1-function.posix-getrlimit-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.3.0</td>      <td>       The optional <span class="parameter" style="color:#3A95FF">resource</span> parameter has been added.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.posix-getrlimit-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3562">    <p><strong>示例 #1 Example use of <span class="function"><strong>posix_getrlimit()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$limits </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_getrlimit</span><span style="color: #007700">();<br><br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$limits</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[soft&nbsp;core]&nbsp;=&gt;&nbsp;0<br>&nbsp;&nbsp;&nbsp;&nbsp;[hard&nbsp;core]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[soft&nbsp;data]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[hard&nbsp;data]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[soft&nbsp;stack]&nbsp;=&gt;&nbsp;8388608<br>&nbsp;&nbsp;&nbsp;&nbsp;[hard&nbsp;stack]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[soft&nbsp;totalmem]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[hard&nbsp;totalmem]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[soft&nbsp;rss]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[hard&nbsp;rss]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[soft&nbsp;maxproc]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[hard&nbsp;maxproc]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[soft&nbsp;memlock]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[hard&nbsp;memlock]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[soft&nbsp;cpu]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[hard&nbsp;cpu]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[soft&nbsp;filesize]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[hard&nbsp;filesize]&nbsp;=&gt;&nbsp;unlimited<br>&nbsp;&nbsp;&nbsp;&nbsp;[soft&nbsp;openfiles]&nbsp;=&gt;&nbsp;1024<br>&nbsp;&nbsp;&nbsp;&nbsp;[hard&nbsp;openfiles]&nbsp;=&gt;&nbsp;1024<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-getrlimit-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>man page GETRLIMIT(2)</li>    <li><span class="function">{@link posix_setrlimit()} - Set system resource limits</span></li>   </ul>   </div></div>
 * 
 * Return info about system resource limits
 * @link https://php.net/manual/zh/function.posix-getrlimit.php
 * @return array|false an associative array of elements for each
 * limit that is defined. Each limit has a soft and a hard limit.
 * <table>
 * List of possible limits returned
 * <tr valign="top">
 * <td>Limit name</td>
 * <td>Limit description</td>
 * </tr>
 * <tr valign="top">
 * <td>core</td>
 * <td>
 * The maximum size of the core file. When 0, not core files are
 * created. When core files are larger than this size, they will
 * be truncated at this size.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>totalmem</td>
 * <td>
 * The maximum size of the memory of the process, in bytes.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>virtualmem</td>
 * <td>
 * The maximum size of the virtual memory for the process, in bytes.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>data</td>
 * <td>
 * The maximum size of the data segment for the process, in bytes.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>stack</td>
 * <td>
 * The maximum size of the process stack, in bytes.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>rss</td>
 * <td>
 * The maximum number of virtual pages resident in RAM
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>maxproc</td>
 * <td>
 * The maximum number of processes that can be created for the
 * real user ID of the calling process.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>memlock</td>
 * <td>
 * The maximum number of bytes of memory that may be locked into RAM.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>cpu</td>
 * <td>
 * The amount of time the process is allowed to use the CPU.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>filesize</td>
 * <td>
 * The maximum size of the data segment for the process, in bytes.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>openfiles</td>
 * <td>
 * One more than the maximum number of open file descriptors.
 * </td>
 * </tr>
 * </table>
 */
#[Pure]
function posix_getrlimit(#[PhpStormStubsElementAvailable(from: '8.3')] ?int $resource = null): array|false {}

/**
 * <div id="function.posix-get-last-error" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_get_last_error</h1>  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_get_last_error</span> — <span class="dc-title">Retrieve the error number set by the last posix function that failed</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-get-last-error-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_get_last_error</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Retrieve the error number set by the last posix function that failed.   The system error message associated with the errno may be checked with   <span class="function">{@link posix_strerror()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-get-last-error-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-get-last-error-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the errno (error number) set by the last posix function that   failed.  If no errors exist, 0 is returned.   </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-get-last-error-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3548">    <p><strong>示例 #1 <span class="function"><strong>posix_get_last_error()</strong></span> example</strong></p>    <div class="example-contents"><p>     This example attempt to kill a bogus process id, which will set the     last error.  We will then print out the last errno.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>posix_kill</span><span style="color: #007700">(</span><span style="color: #9876AA">999459</span><span style="color: #007700">,</span><span style="color: #9876AA">SIGKILL</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">'Your error returned was '</span><span style="color: #007700">.</span><span style="color: #9876AA">posix_get_last_error</span><span style="color: #007700">(); </span><span style="color: #FF8000">//Your error was ___<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-get-last-error-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_strerror()} - Retrieve the system error message associated with the given errno</span></li>   </ul>   </div></div>
 * 
 * Retrieve the error number set by the last posix function that failed
 * @link https://php.net/manual/zh/function.posix-get-last-error.php
 * @return int the errno (error number) set by the last posix function that
 * failed. If no errors exist, 0 is returned.
 */
#[Pure(true)]
function posix_get_last_error(): int {}

/**
 * <div id="function.posix-errno" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_errno</h1>  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_errno</span> — <span class="dc-title">别名 <span class="function">{@link posix_get_last_error()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.posix-errno-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link posix_get_last_error()}</span>.  </p> </div></div>
 * 
 * Alias of <b>posix_get_last_error</b>
 * @link https://php.net/manual/zh/function.posix-errno.php
 */
#[Pure(true)]
function posix_errno(): int {}

/**
 * <div id="function.posix-strerror" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_strerror</h1>  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_strerror</span> — <span class="dc-title">Retrieve the system error message associated with the given errno</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-strerror-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_strerror</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$error_code</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Returns the POSIX system error message associated with the given   <span class="parameter" style="color:#3A95FF">error_code</span>.  You may get the   <span class="parameter" style="color:#3A95FF">error_code</span> parameter by calling   <span class="function">{@link posix_get_last_error()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-strerror-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">error_code</span></dt>     <dd>      <p class="para">       A POSIX error number, returned by        <span class="function">{@link posix_get_last_error()}</span>. If set to 0, then the       string "Success" is returned.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-strerror-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the error message, as a string.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-strerror-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3570">    <p><strong>示例 #1 <span class="function"><strong>posix_strerror()</strong></span> example</strong></p>    <div class="example-contents"><p>This example will attempt to kill a process which does not    exist, then will print out the corresponding error message.</p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>posix_kill</span><span style="color: #007700">(</span><span style="color: #9876AA">50</span><span style="color: #007700">,</span><span style="color: #9876AA">SIGKILL</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">posix_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">posix_get_last_error</span><span style="color: #007700">()).</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">No&nbsp;such&nbsp;process</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-strerror-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_get_last_error()} - Retrieve the error number set by the last posix function that failed</span></li>   </ul>   </div></div>
 * 
 * Retrieve the system error message associated with the given errno
 * @link https://php.net/manual/zh/function.posix-strerror.php
 * @param int $error_code <p>
 * A POSIX error number, returned by
 * <b>posix_get_last_error</b>. If set to 0, then the
 * string "Success" is returned.
 * </p>
 * @return string the error message, as a string.
 */
#[Pure]
function posix_strerror(int $error_code): string {}

/**
 * <div id="function.posix-initgroups" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_initgroups</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">posix_initgroups</span> — <span class="dc-title">Calculate the group access list</span></p> </div>  <div class="refsect1 description" id="refsect1-function.posix-initgroups-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_initgroups</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$username</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$group_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Calculates the group access list for the user specified in name.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-initgroups-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">username</span></dt>     <dd>      <p class="para">       The user to calculate the list for.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">group_id</span></dt>     <dd>      <p class="para">       Typically the group number from the password file.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-initgroups-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.posix-initgroups-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>The Unix manual page for initgroups(3).</li>   </ul>   </div></div>
 * 
 * Calculate the group access list
 * @link https://php.net/manual/zh/function.posix-initgroups.php
 * @param string $username <p>
 * The user to calculate the list for.
 * </p>
 * @param int $group_id <p>
 * Typically the group number from the password file.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
#[Pure]
function posix_initgroups(string $username, int $group_id): bool {}

/**
 * <div id="function.posix-sysconf" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_sysconf</h1>  <p class="verinfo">(PHP 8 &gt;= 8.3.0)</p><p class="refpurpose"><span class="refname">posix_sysconf</span> — <span class="dc-title">Returns system runtime information</span></p> </div> <div class="refsect1 description" id="refsect1-function.posix-sysconf-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_sysconf</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$conf_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Returns system runtime information.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-sysconf-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">conf_id</span></dt>     <dd>      <p class="para">       Identifier of the variable with the following constants       <strong><span><a href="https://php.net/manual/zh/posix.constants.sysconf.php#constant.posix-sc-arg-max">POSIX_SC_ARG_MAX</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.sysconf.php#constant.posix-sc-pagesize">POSIX_SC_PAGESIZE</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.sysconf.php#constant.posix-sc-nprocessors-conf">POSIX_SC_NPROCESSORS_CONF</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.sysconf.php#constant.posix-sc-nprocessors-onln">POSIX_SC_NPROCESSORS_ONLN</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.sysconf.php#constant.posix-sc-child-max">POSIX_SC_CHILD_MAX</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.sysconf.php#constant.posix-sc-clk-tck">POSIX_SC_CLK_TCK</a></span></strong>      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-sysconf-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the numeric value related to <span class="parameter" style="color:#3A95FF">conf_id</span>  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-sysconf-examples">  <h3 class="title">示例</h3>  <div class="example" id="function.posix-sysconf.example.basic">   <p><strong>示例 #1 <span class="function"><strong>posix_sysconf()</strong></span> example</strong></p>   <div class="example-contents"><p>    Returns the number of active cpus.   </p></div>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_sysconf</span><span style="color: #007700">(</span><span style="color: #9876AA">POSIX_SC_NPROCESSORS_ONLN</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">2</blockquote></div>   </div>  </div> </div></div>
 * 
 * Returns system runtime information.
 * @since 8.3
 * @link  https://www.php.net/manual/en/function.posix-sysconf.php
 */
function posix_sysconf(int $conf_id): int {}

/**
 * <div id="function.posix-eaccess" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_eaccess</h1>  <p class="verinfo">(PHP 8 &gt;= 8.3.0)</p><p class="refpurpose"><span class="refname">posix_eaccess</span> — <span class="dc-title">   Determine accessibility of a file  </span></p> </div> <div class="refsect1 description" id="refsect1-function.posix-eaccess-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_eaccess</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$flags</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>posix_eaccess()</strong></span> checks the effective user's permission of a file  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-eaccess-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>     <dd>      <p class="para">       The name of a file to be tested.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">        A mask consisting of one or more of <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-f-ok">POSIX_F_OK</a></span></strong>,        <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-r-ok">POSIX_R_OK</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-w-ok">POSIX_W_OK</a></span></strong> and        <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-x-ok">POSIX_X_OK</a></span></strong>.       </p>       <p class="para">        <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-r-ok">POSIX_R_OK</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-w-ok">POSIX_W_OK</a></span></strong> and        <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-x-ok">POSIX_X_OK</a></span></strong> request checking whether the file        exists and has read, write and execute permissions, respectively.        <strong><span><a href="https://php.net/manual/zh/posix.constants.access.php#constant.posix-f-ok">POSIX_F_OK</a></span></strong> just requests checking for the        existence of the file.       </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-eaccess-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.posix-eaccess-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.3.0</td>      <td>       Checks the effective user/group for a file, differing       from <span class="function">{@link posix_access()}</span> which checks       from the real user/group.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.posix-eaccess-examples">  <h3 class="title">示例</h3>   <p class="para">   </p><div class="example" id="example-3546">    <p><strong>示例 #1 <span class="function"><strong>posix_eaccess()</strong></span> example</strong></p>    <div class="example-contents"><p>     This example will check if the \$file is readable and writable, otherwise     will print an error message.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$file </span><span style="color: #007700">= </span><span style="color: #DD0000">'some_file'</span><span style="color: #007700">;<br><br>if (</span><span style="color: #9876AA">posix_eaccess</span><span style="color: #007700">(</span><span style="color: #9876AA">\$file</span><span style="color: #007700">, </span><span style="color: #9876AA">POSIX_R_OK </span><span style="color: #007700">| </span><span style="color: #9876AA">POSIX_W_OK</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #DD0000">'The file is readable and writable!'</span><span style="color: #007700">;<br><br>} else {<br>    </span><span style="color: #9876AA">\$error </span><span style="color: #007700">= </span><span style="color: #9876AA">posix_get_last_error</span><span style="color: #007700">();<br><br>    echo </span><span style="color: #DD0000">"Error </span><span style="color: #9876AA">\$error</span><span style="color: #DD0000">: " </span><span style="color: #007700">. </span><span style="color: #9876AA">posix_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">\$error</span><span style="color: #007700">);<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>     </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.posix-eaccess-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link posix_get_last_error()} - Retrieve the error number set by the last posix function that failed</span></li>    <li><span class="function">{@link posix_strerror()} - Retrieve the system error message associated with the given errno</span></li>    <li><span class="function">{@link posix_access()} - Determine accessibility of a file</span></li>   </ul>   </div></div>
 * 
 * @since 8.3
 * @link  https://www.php.net/manual/en/function.posix-eaccess.php
 */
function posix_eaccess(string $filename, int $flags = 0): bool {}

/**
 * <div id="function.posix-fpathconf" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_fpathconf</h1>  <p class="verinfo">(PHP 8 &gt;= 8.3.0)</p><p class="refpurpose"><span class="refname">posix_fpathconf</span> — <span class="dc-title">Returns the value of a configurable limit</span></p> </div> <div class="refsect1 description" id="refsect1-function.posix-fpathconf-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_fpathconf</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">\$file_descriptor</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Returns the value of a configurable limit from <span class="parameter" style="color:#3A95FF">name</span>   for <span class="parameter" style="color:#3A95FF">file_descriptor</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-fpathconf-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>     <dt><span class="parameter" style="color:#3A95FF">file_descriptor</span></dt> <dd>  <p class="para">   The file descriptor, which is expected to be either a file   <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> or an <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>. An <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>   will be assumed to be a file descriptor that can be passed directly to   the underlying system call.  </p> </dd>         <dt><span class="parameter" style="color:#3A95FF">name</span></dt>     <dd>      <p class="para">       The name of the configurable limit, one of the following.       <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-link-max">POSIX_PC_LINK_MAX</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-max-canon">POSIX_PC_MAX_CANON</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-max-input">POSIX_PC_MAX_INPUT</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-name-max">POSIX_PC_NAME_MAX</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-path-max">POSIX_PC_PATH_MAX</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-pipe-buf">POSIX_PC_PIPE_BUF</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-chown-restricted">POSIX_PC_CHOWN_RESTRICTED</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-no-trunc">POSIX_PC_NO_TRUNC</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-alloc-size-min">POSIX_PC_ALLOC_SIZE_MIN</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-symlink-max">POSIX_PC_SYMLINK_MAX</a></span></strong>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-fpathconf-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the configurable limit or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 errors" id="refsect1-function.posix-fpathconf-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   Throws a <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>   when <span class="parameter" style="color:#3A95FF">resource</span> is invalid.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-fpathconf-examples">  <h3 class="title">示例</h3>  <div class="example" id="function.posix-fpathconf.example.basic">   <p><strong>示例 #1 <span class="function"><strong>posix_fpathconf()</strong></span> example</strong></p>   <div class="example-contents"><p>    This example will get the max path name's length in bytes    for the current dir.   </p></div>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$fd </span><span style="color: #007700">= </span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #9876AA">__DIR__</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">posix_fpathconf</span><span style="color: #007700">(</span><span style="color: #9876AA">\$fd</span><span style="color: #007700">, </span><span style="color: #9876AA">POSIX_PC_PATH_MAX</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">4096</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.posix-fpathconf-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link posix_pathconf()} - Returns the value of a configurable limit</span></li>  </ul> </div></div>
 * 
 * Returns the value of a configurable limit
 * @link  https://www.php.net/manual/en/function.posix-fpathconf.php
 * @since 8.3
 * @param resource|int $file_descriptor
 */
function posix_fpathconf($file_descriptor, int $name): int|false {}

/**
 * <div id="function.posix-pathconf" class="refentry"> <div class="refnamediv">  <h1 class="refname">posix_pathconf</h1>  <p class="verinfo">(PHP 8 &gt;= 8.3.0)</p><p class="refpurpose"><span class="refname">posix_pathconf</span> — <span class="dc-title">Returns the value of a configurable limit</span></p> </div> <div class="refsect1 description" id="refsect1-function.posix-pathconf-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>posix_pathconf</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>  <p class="para">   Returns the value of a configurable limit from <span class="parameter" style="color:#3A95FF">name</span> for a <span class="parameter" style="color:#3A95FF">path</span>  </p> </div> <div class="refsect1 parameters" id="refsect1-function.posix-pathconf-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">       The name of the file whose limit you want to get.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">name</span></dt>     <dd>      <p class="para">       The name of the configurable limit, one of the following.       <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-link-max">POSIX_PC_LINK_MAX</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-max-canon">POSIX_PC_MAX_CANON</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-max-input">POSIX_PC_MAX_INPUT</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-name-max">POSIX_PC_NAME_MAX</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-path-max">POSIX_PC_PATH_MAX</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-pipe-buf">POSIX_PC_PIPE_BUF</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-chown-restricted">POSIX_PC_CHOWN_RESTRICTED</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-no-trunc">POSIX_PC_NO_TRUNC</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-alloc-size-min">POSIX_PC_ALLOC_SIZE_MIN</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/posix.constants.pathconf.php#constant.posix-pc-symlink-max">POSIX_PC_SYMLINK_MAX</a></span></strong>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.posix-pathconf-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the configurable limit or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 errors" id="refsect1-function.posix-pathconf-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   Throws a <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>   when <span class="parameter" style="color:#3A95FF">path</span> is empty.  </p> </div> <div class="refsect1 examples" id="refsect1-function.posix-pathconf-examples">  <h3 class="title">示例</h3>  <div class="example" id="function.posix-pathconf.example.basic">   <p><strong>示例 #1 <span class="function"><strong>posix_pathconf()</strong></span> example</strong></p>   <div class="example-contents"><p>    This example will get the max path name's length in bytes    for the tmp dir.   </p></div>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">posix_pathconf</span><span style="color: #007700">(</span><span style="color: #9876AA">sys_get_temp_dir</span><span style="color: #007700">(), </span><span style="color: #9876AA">POSIX_PC_PATH_MAX</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">4096</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.posix-pathconf-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link posix_fpathconf()} - Returns the value of a configurable limit</span></li>  </ul> </div></div>
 * 
 * Returns the value of a configurable limit from name for a path
 * @since 8.3
 * @link  https://www.php.net/manual/en/function.posix-pathconf.php
 */
function posix_pathconf(string $path, int $name): int|false {}

/**
 * Check whether the file exists.
 * @link https://php.net/manual/en/posix.constants.php
 */
define('POSIX_F_OK', 0);

/**
 * Check whether the file exists and has execute permissions.
 * @link https://php.net/manual/en/posix.constants.php
 */
define('POSIX_X_OK', 1);

/**
 * Check whether the file exists and has write permissions.
 * @link https://php.net/manual/en/posix.constants.php
 */
define('POSIX_W_OK', 2);

/**
 * Check whether the file exists and has read permissions.
 * @link https://php.net/manual/en/posix.constants.php
 */
define('POSIX_R_OK', 4);

/**
 * Normal file
 * @link https://php.net/manual/en/posix.constants.php
 */
define('POSIX_S_IFREG', 32768);

/**
 * Character special file
 * @link https://php.net/manual/en/posix.constants.php
 */
define('POSIX_S_IFCHR', 8192);

/**
 * Block special file
 * @link https://php.net/manual/en/posix.constants.php
 */
define('POSIX_S_IFBLK', 24576);

/**
 * FIFO (named pipe) special file
 * @link https://php.net/manual/en/posix.constants.php
 */
define('POSIX_S_IFIFO', 4096);

/**
 * Socket
 * @link https://php.net/manual/en/posix.constants.php
 */
define('POSIX_S_IFSOCK', 49152);

/**
 * The maximum size of the process's address space in bytes. See also PHP's memory_limit configuration directive.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_AS', 5);
/**
 * The maximum size of a core file. If the limit is set to 0, no core file will be generated.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_CORE', 4);

/**
 * The maximum amount of CPU time that the process can use, in seconds.
 * When the soft limit is hit, a SIGXCPU signal will be sent, which can be caught with pcntl_signal().
 * Depending on the operating system, additional SIGXCPU signals may be sent each second until the hard limit is hit,
 * at which point an uncatchable SIGKILL signal is sent. See also set_time_limit().
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_CPU', 0);

/**
 * The maximum size of the process's data segment, in bytes.
 * It is extremely unlikely that this will have any effect on
 * the execution of PHP unless an extension is in use that calls brk() or sbrk().
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_DATA', 2);

/**
 * The maximum size of files that the process can create, in bytes.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_FSIZE', 1);

/**
 * The maximum number of locks that the process can create.
 * This is only supported on extremely old Linux kernels.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_LOCKS', 10);

/**
 * The maximum number of bytes that can be allocated for POSIX message queues.
 * PHP does not ship with support for POSIX message queues,
 * so this limit will not have any effect unless you are using an extension that implements that support.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_MSGQUEUE', 12);

/**
 * The maximum value to which the process can be <a href="https://php.net/manual/en/function.pcntl-setpriority.php"> reniced</a> to. The value that will be used will be 20 - limit, as resource limit values cannot be negative.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_NICE', 13);

/**
 * The maximum real time priority that can be set via the sched_setscheduler() and sched_setparam() system calls.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_RTPRIO', 14);

/**
 * The maximum amount of CPU time, in microseconds,
 * that the process can consume without making a blocking system call if it is using real time scheduling.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_RTTIME', 15);

/**
 * The maximum number of signals that can be queued for the real user ID of the process.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_SIGPENDING', 11);

/**
 * The maximum number of bytes that can be locked into memory.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_MEMLOCK', 6);

/**
 * A value one greater than the maximum file descriptor number that can be opened by this process.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_NOFILE', 8);

/**
 * The maximum number of processes (and/or threads, on some operating systems)
 * that can be created for the real user ID of the process.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_NPROC', 7);

/**
 * The maximum size of the process's resident set, in pages.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_RSS', 5);

/**
 * The maximum size of the process stack, in bytes.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_STACK', 3);

/**
 * Used to indicate an infinite value for a resource limit.
 * @link https://php.net/manual/en/posix.constants.setrlimit.php
 */
define('POSIX_RLIMIT_INFINITY', 9223372036854775807);


define('POSIX_SC_ARG_MAX', 0);

define('POSIX_SC_PAGESIZE', 30);

define('POSIX_SC_NPROCESSORS_CONF', 83);

define('POSIX_SC_NPROCESSORS_ONLN', 84);

define('POSIX_PC_LINK_MAX', 0);

define('POSIX_PC_MAX_CANON', 1);

define('POSIX_PC_MAX_INPUT', 2);

define('POSIX_PC_NAME_MAX', 3);

define('POSIX_PC_PATH_MAX', 4);

define('POSIX_PC_PIPE_BUF', 5);

define('POSIX_PC_CHOWN_RESTRICTED', 6);

define('POSIX_PC_NO_TRUNC', 7);

define('POSIX_PC_ALLOC_SIZE_MIN', 18);

define('POSIX_PC_SYMLINK_MAX', 19);
/**
 * @since 8.4
 */
define('POSIX_SC_CHILD_MAX', 1);
/**
 * @since 8.4
 */
define('POSIX_SC_CLK_TCK', 2);

// End of posix v.
