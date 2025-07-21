<?php

// Start of pcntl v.
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Pure;

/**
* <div id="function.pcntl-fork" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_fork</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_fork</span> — <span class="dc-title">在当前进程当前位置产生分叉（fork）</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-fork-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_fork</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">  <span class="function"><strong>pcntl_fork()</strong></span> 函数创建子进程，这个子进程仅 PID（进程号）  和 PPID（父进程号）与其父进程不同。有关分叉在系统上工作的具体细节，请参阅系统的 fork(2) 手册页。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-fork-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-fork-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">  成功时，在父进程执行线程内返回产生的子进程的 PID，在子进程执行线程内返回 0。失败时，在  父进程上下文返回 -1，不会创建子进程，并且会引发 PHP 错误。  </p> </div> <div class="refsect1 examples" id="refsect1-function.pcntl-fork-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3535">    <p><strong>示例 #1 <span class="function"><strong>pcntl_fork()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$pid </span><span style="color: #007700">= </span><span style="color: #9876AA">pcntl_fork</span><span style="color: #007700">();<br>if (</span><span style="color: #9876AA">$pid </span><span style="color: #007700">== -</span><span style="color: #9876AA">1</span><span style="color: #007700">) {<br>     die(</span><span style="color: #DD0000">'could not fork'</span><span style="color: #007700">);<br>} else if (</span><span style="color: #9876AA">$pid</span><span style="color: #007700">) {<br>     </span><span style="color: #FF8000">// 父进程<br>     </span><span style="color: #9876AA">pcntl_wait</span><span style="color: #007700">(</span><span style="color: #9876AA">$status</span><span style="color: #007700">); </span><span style="color: #FF8000">// 防止僵尸子进程<br></span><span style="color: #007700">} else {<br>     </span><span style="color: #FF8000">// 子进程<br></span><span style="color: #007700">}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-fork-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_rfork()} - Manipulates process resources</span></li>    <li><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>    <li><span class="function">{@link cli_set_process_title()} - Sets the process title</span></li>   </ul>   </div></div>
*
 * Forks the currently running process
 * @link https://php.net/manual/zh/function.pcntl-fork.php
 * @return int On success, the PID of the child process is returned in the
 * parent's thread of execution, and a 0 is returned in the child's
 * thread of execution. On failure, a -1 will be returned in the
 * parent's context, no child process will be created, and a PHP
 * error is raised.
 
*/
function pcntl_fork(): int {}

/**
* <div id="function.pcntl-waitpid" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_waitpid</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_waitpid</span> — <span class="dc-title">等待或返回 fork 的子进程状态</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-waitpid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_waitpid</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$process_id</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$status</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = 0</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$resource_usage</span><span class="initializer"> = []</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">  挂起当前进程的执行直到参数 <span class="parameter" style="color:#3A95FF">process_id</span> 指定的进程号的进程退出，  或接收到一个信号要求中断当前进程或调用一个信号处理函数。  </p>  <p class="para">  如果 <span class="parameter" style="color:#3A95FF">process_id</span> 指定的子进程在此函数调用时已经退出（俗称僵尸进程），此函数  将立刻返回。关于 waitpid 更详细的规范请参见系统的 waitpid（2）手册。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-waitpid-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">process_id</span></dt>     <dd>      <p class="para">       参数 <span class="parameter" style="color:#3A95FF">process_id</span> 的值可以是以下之一：       </p><table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">process_id</span> 可选值</strong></caption>                 <tbody class="tbody">          <tr>           <td><span class="literal">&lt; -1</span></td>           <td>           等待任意进程组 ID 等于参数 <span class="parameter" style="color:#3A95FF">process_id</span> 给定值的绝对值的进程。           </td>          </tr>          <tr>           <td><span class="literal">-1</span></td>           <td>           等待任意子进程；与 <span class="function">{@link pcntl_wait()}</span> 函数行为一致。           </td>          </tr>          <tr>           <td><span class="literal">0</span></td>           <td>           等待任意与调用进程组 ID 相同的子进程。           </td>          </tr>          <tr>           <td><span class="literal">&gt; 0</span></td>           <td>            等待进程号等于参数 <span class="parameter" style="color:#3A95FF">process_id</span> 值的子进程。           </td>          </tr>         </tbody>               </table>            <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        </p><p class="para">       指定 <span class="literal">-1</span> 作为 <span class="parameter" style="color:#3A95FF">process_id</span> 的值等同于 <span class="function">{@link pcntl_wait()}</span>       提供（负的 <span class="parameter" style="color:#3A95FF">flags</span>）。       </p>      </blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">       <span class="function"><strong>pcntl_waitpid()</strong></span> 将会存储状态信息到 <span class="parameter" style="color:#3A95FF">status</span>       参数上，这个通过 <span class="parameter" style="color:#3A95FF">status</span> 参数返回的状态信息可以用以下函数       <span class="function">{@link pcntl_wifexited()}</span>、       <span class="function">{@link pcntl_wifstopped()}</span>、       <span class="function">{@link pcntl_wifsignaled()}</span>、       <span class="function">{@link pcntl_wexitstatus()}</span>、       <span class="function">{@link pcntl_wtermsig()}</span> 以及       <span class="function">{@link pcntl_wstopsig()}</span> 获取其具体的值。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">flags</span> 的值可以是以下两个常量中 0 个或多个 <span class="literal">OR</span> 运算的结果：       </p><table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">flags</span> 可用的值</strong></caption>                 <tbody class="tbody">          <tr>           <td><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wnohang">WNOHANG</a></span></strong></td>           <td>            如果没有子进程退出立刻返回。           </td>          </tr>          <tr>           <td><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wuntraced">WUNTRACED</a></span></strong></td>           <td>            子进程已经退出并且其状态未报告时返回。           </td>          </tr>         </tbody>               </table>           </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-waitpid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>pcntl_waitpid()</strong></span> 返回退出的子进程进程号，发生错误时返回 -1，如果使用   <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wnohang">WNOHANG</a></span></strong> 并且没有可用子进程时返回 0。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-waitpid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_fork()} - 在当前进程当前位置产生分叉（fork）</span></li>    <li><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>    <li><span class="function">{@link pcntl_wifexited()} - 检查状态代码是否代表一个正常的退出</span></li>    <li><span class="function">{@link pcntl_wifstopped()} - 检查子进程当前是否已经停止</span></li>    <li><span class="function">{@link pcntl_wifsignaled()} - 检查子进程状态码是否代表由于某个信号而中断</span></li>    <li><span class="function">{@link pcntl_wexitstatus()} - 返回一个中断的子进程的返回代码</span></li>    <li><span class="function">{@link pcntl_wtermsig()} - 返回导致子进程中断的信号</span></li>    <li><span class="function">{@link pcntl_wstopsig()} - 返回导致子进程停止的信号</span></li>   </ul>   </div></div>
*
 * Waits on or returns the status of a forked child
 * @link https://php.net/manual/zh/function.pcntl-waitpid.php
 * @param int $process_id <p>
 * The value of <i>pid</i> can be one of the following:
 * <table>
 * possible values for <i>pid</i>
 * <tr valign="top">
 * <td>&lt; -1</td>
 * <td>
 * wait for any child process whose process group ID is equal to
 * the absolute value of <i>pid</i>.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>-1</td>
 * <td>
 * wait for any child process; this is the same behaviour that
 * the wait function exhibits.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td>
 * wait for any child process whose process group ID is equal to
 * that of the calling process.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>&gt; 0</td>
 * <td>
 * wait for the child whose process ID is equal to the value of
 * <i>pid</i>.
 * </td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * Specifying -1 as the <i>pid</i> is
 * equivalent to the functionality <b>pcntl_wait</b> provides
 * (minus <i>options</i>).
 * </p>
 * @param int &$status <p>
 * <b>pcntl_waitpid</b> will store status information
 * in the <i>status</i> parameter which can be
 * evaluated using the following functions:
 * <b>pcntl_wifexited</b>,
 * <b>pcntl_wifstopped</b>,
 * <b>pcntl_wifsignaled</b>,
 * <b>pcntl_wexitstatus</b>,
 * <b>pcntl_wtermsig</b> and
 * <b>pcntl_wstopsig</b>.
 * </p>
 * @param int $flags [optional] <p>
 * The value of <i>options</i> is the value of zero
 * or more of the following two global constants
 * OR'ed together:
 * <table>
 * possible values for <i>options</i>
 * <tr valign="top">
 * <td>WNOHANG</td>
 * <td>
 * return immediately if no child has exited.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>WUNTRACED</td>
 * <td>
 * return for children which are stopped, and whose status has
 * not been reported.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param array &$resource_usage
 * @return int <b>pcntl_waitpid</b> returns the process ID of the
 * child which exited, -1 on error or zero if <b>WNOHANG</b> was used and no
 * child was available
 
*/
function pcntl_waitpid(
    int $process_id,
    &$status,
    int $flags = 0,
    #[PhpStormStubsElementAvailable(from: '7.0')] &$resource_usage = []
): int {}

/**
* <div id="function.pcntl-wait" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wait</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wait</span> — <span class="dc-title">等待或返回 fork 的子进程状态</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-wait-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wait</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$status</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$resource_usage</span><span class="initializer"> = []</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   wait 函数挂起当前进程的执行直到一个子进程退出或接收到一个信号要求中断当前进程或调用一个信号处理函数。如果一个子进程在调用此函数时已经退出（俗称僵尸进程），此函数立刻返回。子进程使用的所有系统资源将被释放。关于 wait 在您系统上工作的详细规范请查看您系统的 wait（2）手册。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    这个函数等同于以 <span class="literal">-1</span> 作为参数 <span class="parameter" style="color:#3A95FF">process_id</span>    的值并且没有 <span class="parameter" style="color:#3A95FF">flags</span> 参数来调用 <span class="function">{@link pcntl_waitpid()}</span>    函数。   </p>  </blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-wait-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">       <span class="function"><strong>pcntl_wait()</strong></span> 将会存储状态信息到 <span class="parameter" style="color:#3A95FF">status</span>       参数上，这个通过 <span class="parameter" style="color:#3A95FF">status</span> 参数返回的状态信息可以用以下函数       <span class="function">{@link pcntl_wifexited()}</span>、       <span class="function">{@link pcntl_wifstopped()}</span>、       <span class="function">{@link pcntl_wifsignaled()}</span>、       <span class="function">{@link pcntl_wexitstatus()}</span>、       <span class="function">{@link pcntl_wtermsig()}</span> 以及       <span class="function">{@link pcntl_wstopsig()}</span> 获取其具体的值。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">      如果操作系统（多数 BSD 类系统）允许使用 wait3，可以提供可选的 <span class="parameter" style="color:#3A95FF">flags</span>      参数。如果这个参数没有提供，wait 将会被用作系统调用。如果 wait3 不可用，提供参数      <span class="parameter" style="color:#3A95FF">flags</span> 不会有任何效果。<span class="parameter" style="color:#3A95FF">flags</span> 的值可以是以下两个常量中      0 个或多个 <span class="literal">OR</span> 运算的结果：       </p><table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">flags</span> 可用值</strong></caption>                 <tbody class="tbody">          <tr>           <td><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wnohang">WNOHANG</a></span></strong></td>           <td>            如果没有子进程退出立刻返回。           </td>          </tr>          <tr>           <td><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wuntraced">WUNTRACED</a></span></strong></td>           <td>           子进程已经退出并且其状态未报告时返回。           </td>          </tr>         </tbody>               </table>           </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wait-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>pcntl_wait()</strong></span> 返回退出的子进程进程号，发生错误时返回 -1，如果提供了 WNOHANG 作为 option（wait3 可用的系统）并且没有可用子进程时返回 0。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-wait-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_fork()} - 在当前进程当前位置产生分叉（fork）</span></li>    <li><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>    <li><span class="function">{@link pcntl_wifexited()} - 检查状态代码是否代表一个正常的退出</span></li>    <li><span class="function">{@link pcntl_wifstopped()} - 检查子进程当前是否已经停止</span></li>    <li><span class="function">{@link pcntl_wifsignaled()} - 检查子进程状态码是否代表由于某个信号而中断</span></li>    <li><span class="function">{@link pcntl_wexitstatus()} - 返回一个中断的子进程的返回代码</span></li>    <li><span class="function">{@link pcntl_wtermsig()} - 返回导致子进程中断的信号</span></li>    <li><span class="function">{@link pcntl_wstopsig()} - 返回导致子进程停止的信号</span></li>    <li><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>   </ul>   </div></div>
*
 * Waits on or returns the status of a forked child
 * @link https://php.net/manual/zh/function.pcntl-wait.php
 * @param int &$status <p>
 * <b>pcntl_wait</b> will store status information
 * in the <i>status</i> parameter which can be
 * evaluated using the following functions:
 * <b>pcntl_wifexited</b>,
 * <b>pcntl_wifstopped</b>,
 * <b>pcntl_wifsignaled</b>,
 * <b>pcntl_wexitstatus</b>,
 * <b>pcntl_wtermsig</b> and
 * <b>pcntl_wstopsig</b>.
 * </p>
 * @param int $flags [optional] <p>
 * If wait3 is available on your system (mostly BSD-style systems), you can
 * provide the optional <i>flags</i> parameter. If this
 * parameter is not provided, wait will be used for the system call. If
 * wait3 is not available, providing a value for <i>flags
 * </i> will have no effect. The value of <i>flags
 * </i> is the value of zero or more of the following two constants
 * OR'ed together:
 * <table>
 * Possible values for <i>flags</i>
 * <tr valign="top">
 * <td>WNOHANG</td>
 * <td>
 * Return immediately if no child has exited.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>WUNTRACED</td>
 * <td>
 * Return for children which are stopped, and whose status has
 * not been reported.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param array &$resource_usage
 * @return int <b>pcntl_wait</b> returns the process ID of the
 * child which exited, -1 on error or zero if WNOHANG was provided as an
 * option (on wait3-available systems) and no child was available.
 
*/
function pcntl_wait(
    &$status,
    int $flags = 0,
    #[PhpStormStubsElementAvailable(from: '7.0')] &$resource_usage
= []
): int {}

/**
* <div id="function.pcntl-signal" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_signal</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_signal</span> — <span class="dc-title">安装信号处理程序</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-signal-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_signal</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$signal</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$handler</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$restart_syscalls</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>pcntl_signal()</strong></span> 函数为 <span class="parameter" style="color:#3A95FF">signal</span> 指定的信号安装新的信号处理程序或替换当前信号处理程序。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-signal-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">signal</span></dt>     <dd>      <p class="para">       信号编号。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">handler</span></dt>     <dd>      <p class="para">       信号处理程序。要么是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span>，将调用它来处理信号，要么是全局常量 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sig-ign">SIG_IGN</a></span></strong> 或       <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sig-dfl">SIG_DFL</a></span></strong>，将分别用于忽略信号或恢复默认信号处理程序。      </p>      <p class="para">       如果指定为 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span>，必须实现以下签名：      </p>      <p class="para">       </p><div class="methodsynopsis dc-description">        <span class="methodname" style="color:#CC7832"><span class="replaceable">handler</span></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$signo</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">$siginfo</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>       <dl>                 <dt><span class="parameter" style="color:#3A95FF">signal</span></dt>         <dd>          <span class="simpara">           正在处理的信号。          </span>         </dd>                         <dt><span class="parameter" style="color:#3A95FF">siginfo</span></dt>         <dd>          <span class="simpara">           如果操作系统支持 siginfo_t 结构体，这将是依赖于信号的信号信息数组。          </span>         </dd>               </dl>            <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        </p><p class="para">        请注意，当处理程序设置为对象方法时，该对象的引用计数会增加，这会使其持续存在，直到将处理程序更改为其他内容或脚本结束为止。       </p>      </blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">restart_syscalls</span></dt>     <dd>      <p class="para">      指定当信号到达时系统调用重启是否可用。（译注：经查资料，此参数意为系统调用被信号打断时，系统调用是否从      开始处重新开始，但根据 http://bugs.php.net/bug.php?id=52121，此参数存在bug无效。）      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-signal-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.pcntl-signal-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>7.1.0</td>       <td>        从 PHP 7.1.0 开始，处理程序 callback 指定为第二个参数，其中包含特定信号的 siginfo。仅当操作系统具有        siginfo_t 结构体时才提供此数据。如果操作系统未实现 siginfo_t，则提供 NULL。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.pcntl-signal-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3538">    <p><strong>示例 #1 <span class="function"><strong>pcntl_signal()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>pcntl_async_signals</span><span style="color: #007700">(</span><span style="color: #9876AA">true</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 信号处理函数<br></span><span style="color: #007700">function </span><span style="color: #9876AA">sig_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">$signo</span><span style="color: #007700">)<br>{<br><br>     switch (</span><span style="color: #9876AA">$signo</span><span style="color: #007700">) {<br>         case </span><span style="color: #9876AA">SIGTERM</span><span style="color: #007700">:<br>             </span><span style="color: #FF8000">// 处理终止任务<br>             </span><span style="color: #007700">exit;<br>             break;<br>         case </span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">:<br>             </span><span style="color: #FF8000">// 处理重启任务<br>             </span><span style="color: #007700">break;<br>         case </span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">:<br>             echo </span><span style="color: #DD0000">"Caught SIGUSR1...\n"</span><span style="color: #007700">;<br>             break;<br>         default:<br>             </span><span style="color: #FF8000">// 处理所有其它信号<br>     </span><span style="color: #007700">}<br><br>}<br><br>echo </span><span style="color: #DD0000">"Installing signal handler...\n"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// 安装信号处理程序<br></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGTERM</span><span style="color: #007700">, </span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">,  </span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">, </span><span style="color: #DD0000">"sig_handler"</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 或使用对象<br>// pcntl_signal(SIGUSR1, array($obj, "do_something");<br><br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Generating signal SIGUSR1 to self...\n"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// 向当前进程 ID 发送 SIGUSR1 信号<br>// posix_* 函数需要 posix 扩展<br></span><span style="color: #9876AA">posix_kill</span><span style="color: #007700">(</span><span style="color: #9876AA">posix_getpid</span><span style="color: #007700">(), </span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">"Done\n"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.pcntl-signal-notes">  <h3 class="title">注释</h3>  <p class="para">   <span class="function"><strong>pcntl_signal()</strong></span> 不堆叠信号处理程序，而是替换。  </p>  <div class="refsect2 unknown-26" id="refsect2-function.pcntl-signal-unknown-26">   <h4 class="title">调度方式</h4>   <p class="para">    调度信号处理程序的方法有多种：    </p><ul class="simplelist">     <li>启用 <span class="function">{@link pcntl_async_signals()}</span> 异步调度。这是推荐方法</li>     <li>设置 <a href="https://php.net/manual/zh/control-structures.declare.php#control-structures.declare.ticks" class="link">tick</a> 频率</li>     <li>使用 <span class="function">{@link pcntl_signal_dispatch()}</span> 手动调度</li>    </ul>      <p class="para">    当信号以异步方式或使用基于 tick 的执行调度时，阻塞函数（如 <span class="function">{@link sleep()}</span>）可能会被中断。   </p>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-signal-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><a href="https://en.wikipedia.org/wiki/Signal_(IPC)" class="link external">» Signal (IPC)</a> on Wikipedia</li>    <li><span class="function">{@link pcntl_async_signals()} - Enable/disable asynchronous signal handling or return the old setting</span></li>    <li><span class="function">{@link pcntl_fork()} - 在当前进程当前位置产生分叉（fork）</span></li>    <li><span class="function">{@link pcntl_signal_dispatch()} - 调用等待信号的处理程序</span></li>    <li><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>   </ul>   </div></div>
*
 * Installs a signal handler
 * @link https://php.net/manual/zh/function.pcntl-signal.php
 * @param int $signal <p>
 * The signal number.
 * </p>
 * @param callable|int $handler <p>
 * The signal handler. This may be either a callable, which
 * will be invoked to handle the signal, or either of the two global
 * constants <b>SIG_IGN</b> or <b>SIG_DFL</b>,
 * which will ignore the signal or restore the default signal handler
 * respectively.
 * </p>
 * <p>
 * If a callable is given, it must implement the following
 * signature:
 * </p>
 * <p>
 * void<b>handler</b>
 * <b>int<i>signo</i></b>
 * <i>signo</i>
 * The signal being handled.</p>
 * @param bool $restart_syscalls [optional] <p>
 * Specifies whether system call restarting should be used when this
 * signal arrives.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function pcntl_signal(int $signal, $handler, bool $restart_syscalls = true): bool {}

/**
* <div id="function.pcntl-signal-dispatch" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_signal_dispatch</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_signal_dispatch</span> — <span class="dc-title">调用等待信号的处理程序</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-signal-dispatch-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_signal_dispatch</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>pcntl_signal_dispatch()</strong></span> 函数调用每个等待信号通过 <span class="function">{@link pcntl_signal()}</span>   安装的处理程序。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-signal-dispatch-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-signal-dispatch-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.pcntl-signal-dispatch-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3539">    <p><strong>示例 #1 <span class="function"><strong>pcntl_signal_dispatch()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"安装信号处理程序...\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">,  function(</span><span style="color: #9876AA">$signo</span><span style="color: #007700">) {<br>     echo </span><span style="color: #DD0000">"信号处理程序被调用\n"</span><span style="color: #007700">;<br>});<br><br>echo </span><span style="color: #DD0000">"为自己生成SIGHUP信号...\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">posix_kill</span><span style="color: #007700">(</span><span style="color: #9876AA">posix_getpid</span><span style="color: #007700">(), </span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">"分发...\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">pcntl_signal_dispatch</span><span style="color: #007700">();<br><br>echo </span><span style="color: #DD0000">"完成\n"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">å®è£ä¿¡å·å¤çç¨åº...<br>ä¸ºèªå·±çæSIGHUPä¿¡å·...<br>åå...<br>ä¿¡å·å¤çç¨åºè¢«è°ç¨<br>å®æ</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-signal-dispatch-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>    <li><span class="function">{@link pcntl_sigprocmask()} - 设置或检索阻塞信号</span></li>    <li><span class="function">{@link pcntl_sigwaitinfo()} - 等待信号</span></li>    <li><span class="function">{@link pcntl_sigtimedwait()} - 带超时机制的信号等待</span></li>   </ul>   </div></div>
*
 * Calls signal handlers for pending signals
 * @link https://php.net/manual/zh/function.pcntl-signal-dispatch.php
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function pcntl_signal_dispatch(): bool {}

/**
* <div id="function.pcntl-wifexited" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wifexited</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wifexited</span> — <span class="dc-title">检查状态代码是否代表一个正常的退出</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-wifexited-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wifexited</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   检查子进程状态代码是否代表正常退出。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-wifexited-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wifexited-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   当子进程状态代码代表正常退出时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，其他情况返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-wifexited-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li><span class="function">{@link pcntl_wexitstatus()} - 返回一个中断的子进程的返回代码</span></li>   </ul>   </div></div>
*
 * Checks if status code represents a normal exit
 * @link https://php.net/manual/zh/function.pcntl-wifexited.php
 * @param int $status <p>The <i>status</i>
 * parameter is the status parameter supplied to a successful
 * call to <b>pcntl_waitpid</b>.</p>
 * @return bool <b>TRUE</b> if the child status code represents a normal exit, <b>FALSE</b>
 * otherwise.
 
#[Pure]
*/
function pcntl_wifexited(int $status): bool {}

/**
* <div id="function.pcntl-wifstopped" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wifstopped</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wifstopped</span> — <span class="dc-title">检查子进程当前是否已经停止</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-wifstopped-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wifstopped</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   仅查子进程当前是否停止；此函数只有作用于使用了 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wuntraced">WUNTRACED</a></span></strong> 作为   option 的 <span class="function">{@link pcntl_waitpid()}</span> 函数调用产生的 status 时才有效。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-wifstopped-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wifstopped-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果子进程当前是停止的返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，其他情况返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-wifstopped-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>   </ul>   </div></div>
*
 * Checks whether the child process is currently stopped
 * @link https://php.net/manual/zh/function.pcntl-wifstopped.php
 * @param int $status <p>The <i>status</i>
 * parameter is the status parameter supplied to a successful
 * call to <b>pcntl_waitpid</b>.</p>
 * @return bool <b>TRUE</b> if the child process which caused the return is
 * currently stopped, <b>FALSE</b> otherwise.
 
#[Pure]
*/
function pcntl_wifstopped(int $status): bool {}

/**
* <div id="function.pcntl-wifsignaled" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wifsignaled</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wifsignaled</span> — <span class="dc-title">检查子进程状态码是否代表由于某个信号而中断</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-wifsignaled-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wifsignaled</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   检查子进程是否是由于某个未捕获的信号退出的。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-wifsignaled-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wifsignaled-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果子进程是由于某个未捕获的信号退出的返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，其他情况返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-wifsignaled-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>   </ul>   </div></div>
*
 * Checks whether the status code represents a termination due to a signal
 * @link https://php.net/manual/zh/function.pcntl-wifsignaled.php
 * @param int $status <p>The <i>status</i>
 * parameter is the status parameter supplied to a successful
 * call to <b>pcntl_waitpid</b>.</p>
 * @return bool <b>TRUE</b> if the child process exited because of a signal which was
 * not caught, <b>FALSE</b> otherwise.
 
#[Pure]
*/
function pcntl_wifsignaled(int $status): bool {}

/**
* <div id="function.pcntl-wexitstatus" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wexitstatus</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wexitstatus</span> — <span class="dc-title">返回一个中断的子进程的返回代码</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-wexitstatus-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wexitstatus</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   返回一个中断的子进程的返回代码。这个函数仅在函数 <span class="function">{@link pcntl_wifexited()}</span> 返回   <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> 时有效。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-wexitstatus-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wexitstatus-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回子进程返回代码。如果操作系统不支持该功能，将返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-wexitstatus-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li><span class="function">{@link pcntl_wifexited()} - 检查状态代码是否代表一个正常的退出</span></li>   </ul>   </div></div>
*
 * Returns the return code of a terminated child
 * @link https://php.net/manual/zh/function.pcntl-wexitstatus.php
 * @param int $status <p>The <i>status</i>
 * parameter is the status parameter supplied to a successful
 * call to <b>pcntl_waitpid</b>.</p>
 * @return int|false the return code, as an integer.
 
#[Pure]
*/
function pcntl_wexitstatus(int $status): int|false {}

/**
 * @param int $status
 * @return bool
 */
#[Pure]
function pcntl_wifcontinued(int $status): bool {}

/**
* <div id="function.pcntl-wtermsig" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wtermsig</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wtermsig</span> — <span class="dc-title">返回导致子进程中断的信号</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-wtermsig-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wtermsig</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   返回导致子进程中断的信号编号。这个函数仅在 <span class="function">{@link pcntl_wifsignaled()}</span> 返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> 时有效。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-wtermsig-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wtermsig-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回信号编号。如果操作系统不支持该功能，将返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-wtermsig-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>    <li><span class="function">{@link pcntl_wifsignaled()} - 检查子进程状态码是否代表由于某个信号而中断</span></li>   </ul>   </div></div>
*
 * Returns the signal which caused the child to terminate
 * @link https://php.net/manual/zh/function.pcntl-wtermsig.php
 * @param int $status <p>The <i>status</i>
 * parameter is the status parameter supplied to a successful
 * call to <b>pcntl_waitpid</b>.</p>
 * @return int|false the signal number, as an integer.
 
#[Pure]
*/
function pcntl_wtermsig(int $status): int|false {}

/**
* <div id="function.pcntl-wstopsig" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_wstopsig</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_wstopsig</span> — <span class="dc-title">返回导致子进程停止的信号</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-wstopsig-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_wstopsig</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   返回导致子进程停止的信号编号。这个函数仅在 <span class="function">{@link pcntl_wifstopped()}</span> 返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> 时有效。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-wstopsig-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">status</span></dt>     <dd>      <p class="para">参数<span class="parameter" style="color:#3A95FF">status</span> 是提供给成功调用 <span class="function">{@link pcntl_waitpid()}</span>时的状态参数。</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-wstopsig-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回信号编号。如果操作系统不支持该功能，将返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-wstopsig-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li><span class="function">{@link pcntl_wifstopped()} - 检查子进程当前是否已经停止</span></li>   </ul>   </div></div>
*
 * Returns the signal which caused the child to stop
 * @link https://php.net/manual/zh/function.pcntl-wstopsig.php
 * @param int $status <p>The <i>status</i>
 * parameter is the status parameter supplied to a successful
 * call to <b>pcntl_waitpid</b>.</p>
 * @return int|false the signal number.
 
#[Pure]
*/
function pcntl_wstopsig(int $status): int|false {}

/**
* <div id="function.pcntl-exec" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_exec</h1>  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_exec</span> — <span class="dc-title">在当前进程空间执行指定程序</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-exec-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_exec</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$args</span><span class="initializer"> = []</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$env_vars</span><span class="initializer"> = []</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   以给定参数执行程序。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-exec-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">path</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">path</span> 必须时可执行二进制文件路径或一个在文件第一行指定了       一个可执行文件路径标头的脚本（比如文件第一行是 #!/usr/local/bin/perl 的 perl 脚本）。       更多的信息请查看您系统的 execve（2）手册。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">args</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">args</span> 是一个要传递给程序的参数的字符串数组。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">env_vars</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">env_vars</span> 是一个要传递给程序作为环境变量的字符串数组。这个数组是       key =&gt; value 格式的，key 代表要传递的环境变量的名称，value 代表该环境变量值。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-exec-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
*
 * Executes specified program in current process space
 * @link https://php.net/manual/zh/function.pcntl-exec.php
 * @param string $path <p>
 * <i>path</i> must be the path to a binary executable or a
 * script with a valid path pointing to an executable in the shebang (
 * #!/usr/local/bin/perl for example) as the first line. See your system's
 * man execve(2) page for additional information.
 * </p>
 * @param array $args <p>
 * <i>args</i> is an array of argument strings passed to the
 * program.
 * </p>
 * @param array $env_vars <p>
 * <i>envs</i> is an array of strings which are passed as
 * environment to the program. The array is in the format of name => value,
 * the key being the name of the environmental variable and the value being
 * the value of that variable.
 * </p>
 * @return bool <b>FALSE</b> on error and does not return on success.
 
*/
function pcntl_exec(string $path, array $args = [], array $env_vars = []): bool {}

/**
* <div id="function.pcntl-alarm" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_alarm</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_alarm</span> — <span class="dc-title">为进程设置 alarm 闹钟信号</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-alarm-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_alarm</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$seconds</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   创建计时器，在指定的秒数后向进程发送 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sigalrm">SIGALRM</a></span></strong> 信号。每次对   <span class="function"><strong>pcntl_alarm()</strong></span> 的调用都会取消之前设置的 alarm 信号。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-alarm-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">seconds</span></dt>     <dd>      <p class="para">       等待的秒数。如果 <span class="parameter" style="color:#3A95FF">seconds</span> 设置为 0,将不会创建 alarm 信号。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-alarm-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">  返回上次 alarm 调度（离 alarm 信号发送）剩余的秒数，或者之前没有 alarm 调度（译注：或者之前调度已完成）  时返回 <span class="literal">0</span>。  </p> </div></div>
*
 * Set an alarm clock for delivery of a signal
 * @link https://php.net/manual/zh/function.pcntl-alarm.php
 * @param int $seconds <p>
 * The number of seconds to wait. If <i>seconds</i> is
 * zero, no new alarm is created.
 * </p>
 * @return int the time in seconds that any previously scheduled alarm had
 * remaining before it was to be delivered, or 0 if there
 * was no previously scheduled alarm.
 
*/
function pcntl_alarm(int $seconds): int {}

/**
* <div id="function.pcntl-get-last-error" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_get_last_error</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.4, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_get_last_error</span> — <span class="dc-title">Retrieve the error number set by the last pcntl function which failed</span></p> </div> <div class="refsect1 description" id="refsect1-function.pcntl-get-last-error-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_get_last_error</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Retrieve the error number (<span class="literal">errno</span>) set by the last   pcntl function that failed. The system error message associated with   the error number may be checked with <span class="function">{@link pcntl_strerror()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-get-last-error-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-get-last-error-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the error number (<span class="literal">errno</span>) set by the last   pcntl function that failed.  If there was no error, 0 is returned.  </p> </div> <div class="refsect1 examples" id="refsect1-function.pcntl-get-last-error-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-3536">   <p><strong>示例 #1 <span class="function"><strong>pcntl_get_last_error()</strong></span> example</strong></p>   <div class="example-contents"><p>    This example will attempt to wait on child processes    in a situation where no child process exists,    then will print out the corresponding error message.   </p></div>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$pid </span><span style="color: #007700">= </span><span style="color: #9876AA">pcntl_wait</span><span style="color: #007700">(</span><span style="color: #9876AA">$status</span><span style="color: #007700">);<br>if (</span><span style="color: #9876AA">$pid </span><span style="color: #007700">=== -</span><span style="color: #9876AA">1</span><span style="color: #007700">) {<br>    </span><span style="color: #9876AA">$errno </span><span style="color: #007700">= </span><span style="color: #9876AA">pcntl_get_last_error</span><span style="color: #007700">();<br>    </span><span style="color: #9876AA">$message </span><span style="color: #007700">= </span><span style="color: #9876AA">pcntl_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">$errno</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">STDERR</span><span style="color: #007700">, </span><span style="color: #DD0000">'pcntl_wait failed with errno ' </span><span style="color: #007700">. </span><span style="color: #9876AA">$errno<br>           </span><span style="color: #007700">. </span><span style="color: #DD0000">': ' </span><span style="color: #007700">. </span><span style="color: #9876AA">$message </span><span style="color: #007700">. </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">);<br>}</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例的输出类似于：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">pcntl_wait failed with errno 10: No child processes</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-get-last-error-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link pcntl_strerror()} - Retrieve the system error message associated with the given errno</span></li>  </ul> </div></div>
*
 * Retrieve the error number set by the last pcntl function which failed
 * @link https://php.net/manual/zh/function.pcntl-get-last-error.php
 * @return int error code.
 * @since 5.3.4
 
#[Pure(true)]
*/
function pcntl_get_last_error(): int {}

/**
* <div id="function.pcntl-errno" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_errno</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.4, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_errno</span> — <span class="dc-title">别名 <span class="function">{@link pcntl_get_last_error()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.pcntl-errno-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link pcntl_get_last_error()}</span>  </p> </div></div>
*
 * Alias of <b>pcntl_get_last_error</b>
 * @link https://php.net/manual/zh/function.pcntl-errno.php
 * @return int error code.
 * @since 5.3.4
 
#[Pure(true)]
*/
function pcntl_errno(): int {}

/**
* <div id="function.pcntl-strerror" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_strerror</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.4, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_strerror</span> — <span class="dc-title">Retrieve the system error message associated with the given errno</span></p> </div> <div class="refsect1 description" id="refsect1-function.pcntl-strerror-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_strerror</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$error_code</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Returns the system error message associated with the given <span class="parameter" style="color:#3A95FF">error_code</span>   (<span class="literal">errno</span>) of the last pcntl function that failed.   The <span class="parameter" style="color:#3A95FF">error_code</span> parameter may be obtained by calling   <span class="function">{@link pcntl_get_last_error()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-strerror-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">error_code</span></dt>    <dd>     <p class="para">      An error number (<span class="literal">errno</span>),      returned by <span class="function">{@link pcntl_get_last_error()}</span>.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-strerror-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the error message, as a string.  </p> </div> <div class="refsect1 examples" id="refsect1-function.pcntl-strerror-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-3543">   <p><strong>示例 #1 <span class="function"><strong>pcntl_strerror()</strong></span> example</strong></p>   <div class="example-contents"><p>    This example will attempt to wait on child processes    in a situation where no child process exists,    then will print out the corresponding error message.   </p></div>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$pid </span><span style="color: #007700">= </span><span style="color: #9876AA">pcntl_wait</span><span style="color: #007700">(</span><span style="color: #9876AA">$status</span><span style="color: #007700">);<br>if (</span><span style="color: #9876AA">$pid </span><span style="color: #007700">=== -</span><span style="color: #9876AA">1</span><span style="color: #007700">) {<br>    </span><span style="color: #9876AA">$errno </span><span style="color: #007700">= </span><span style="color: #9876AA">pcntl_get_last_error</span><span style="color: #007700">();<br>    </span><span style="color: #9876AA">$message </span><span style="color: #007700">= </span><span style="color: #9876AA">pcntl_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">$errno</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">STDERR</span><span style="color: #007700">, </span><span style="color: #DD0000">'pcntl_wait failed with errno ' </span><span style="color: #007700">. </span><span style="color: #9876AA">$errno<br>           </span><span style="color: #007700">. </span><span style="color: #DD0000">': ' </span><span style="color: #007700">. </span><span style="color: #9876AA">$message </span><span style="color: #007700">. </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">);<br>}</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例的输出类似于：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">pcntl_wait failed with errno 10: No child processes</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-strerror-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link pcntl_get_last_error()} - Retrieve the error number set by the last pcntl function which failed</span></li>  </ul> </div></div>
*
 * Retrieve the system error message associated with the given errno
 * @link https://php.net/manual/zh/function.pcntl-strerror.php
 * @param int $error_code <p>
 * </p>
 * @return string|false error description on success or <b>FALSE</b> on failure.
 * @since 5.3.4
 
#[Pure]
#[LanguageLevelTypeAware(["8.0" => "string"], default: "string|false")]
*/
function pcntl_strerror(int $error_code): false|string {}

/**
* <div id="function.pcntl-getpriority" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_getpriority</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_getpriority</span> — <span class="dc-title">获取任意进程的优先级</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-getpriority-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_getpriority</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$process_id</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$mode</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.prio-process">PRIO_PROCESS</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>pcntl_getpriority()</strong></span> 获取进程号为   <span class="parameter" style="color:#3A95FF">process_id</span> 的进程的优先级。由于不同的系统类型以及内核版本下   优先级可能不同，因此请参考系统的 getpriority（2）手册以获取详细的规范。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-getpriority-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">process_id</span></dt>     <dd>      <p class="para">       如果为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，默认使用当前进程的进程号。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.prio-pgrp">PRIO_PGRP</a></span></strong>（译注：获取进程组优先级）、<strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.prio-user">PRIO_USER</a></span></strong>（译注：获取用户进程优先级）、<strong><span>PRIO_PROCESS（译注：默认值;获取进程优先级）</span></strong>、<strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.prio-darwin-bg">PRIO_DARWIN_BG</a></span></strong>       或 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.prio-darwin-thread">PRIO_DARWIN_THREAD</a></span></strong> 之一。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-getpriority-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>pcntl_getpriority()</strong></span> 返回进程的优先级或在错误时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。值越小代表优先级越高。  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数可能返回布尔值<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，但也可能返回等同于 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 的非布尔值。请阅读 <a href="https://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用<a href="https://php.net/manual/zh/language.operators.comparison.php" class="link">===运算符</a>来测试此函数的返回值。</p></div> </div> <div class="refsect1 changelog" id="refsect1-function.pcntl-getpriority-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">process_id</span> 现在可以为 null。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-getpriority-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_setpriority()} - 修改任意进程的优先级</span></li>   </ul>   </div></div>
*
 * Get the priority of any process
 * @link https://php.net/manual/zh/function.pcntl-getpriority.php
 * @param int|null $process_id [optional] <p>
 * If not specified, the pid of the current process  (getmypid()) is used.
 * </p>
 * @param int $mode [optional] <p>
 * One of <b>PRIO_PGRP</b>, <b>PRIO_USER</b>
 * or <b>PRIO_PROCESS</b>.
 * </p>
 * @return int|false <b>pcntl_getpriority</b> returns the priority of the process
 * or <b>FALSE</b> on error. A lower numerical value causes more favorable
 * scheduling.
 
#[Pure]
*/
function pcntl_getpriority(?int $process_id, int $mode = PRIO_PROCESS): int|false {}

/**
* <div id="function.pcntl-setpriority" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_setpriority</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_setpriority</span> — <span class="dc-title">修改任意进程的优先级</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-setpriority-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_setpriority</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$priority</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$process_id</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$mode</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.prio-process">PRIO_PROCESS</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>pcntl_setpriority()</strong></span> 设置进程号为   <span class="parameter" style="color:#3A95FF">process_id</span> 的进程的优先级。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-setpriority-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">priority</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">priority</span> 通常时 -20 至 20 这个范围内的值。默认优先级是 0,值越小代表       优先级越高。由于不同的系统类型以及内核版本下优先级可能不同，因此请参考系统的 setpriority（2）       手册以获取详细的规范。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">process_id</span></dt>     <dd>      <p class="para">       如果为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，默认是当前进程的进程号。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.prio-pgrp">PRIO_PGRP</a></span></strong>（译注：获取进程组优先级）、<strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.prio-user">PRIO_USER</a></span></strong>（译注：获取用户进程优先级）或 <strong><span>PRIO_PROCESS（译注：默认值;获取进程优先级）</span></strong>、<strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.prio-darwin-bg">PRIO_DARWIN_BG</a></span></strong>       或 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.prio-darwin-thread">PRIO_DARWIN_THREAD</a></span></strong> 之一。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-setpriority-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.pcntl-setpriority-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">process_id</span> 可以为 null。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-setpriority-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_getpriority()} - 获取任意进程的优先级</span></li>    <li><span class="function"><strong>pcntl_setpriority()</strong></span></li>   </ul>   </div></div>
*
 * Change the priority of any process
 * @link https://php.net/manual/zh/function.pcntl-setpriority.php
 * @param int $priority <p>
 * <i>priority</i> is generally a value in the range
 * -20 to 20. The default priority
 * is 0 while a lower numerical value causes more
 * favorable scheduling. Because priority levels can differ between
 * system types and kernel versions, please see your system's setpriority(2)
 * man page for specific details.
 * </p>
 * @param int|null $process_id [optional] <p>
 * If not specified, the pid of the current process (getmypid()) is used.
 * </p>
 * @param int $mode [optional] <p>
 * One of <b>PRIO_PGRP</b>, <b>PRIO_USER</b>
 * or <b>PRIO_PROCESS</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function pcntl_setpriority(int $priority, ?int $process_id, int $mode = PRIO_PROCESS): bool {}

/**
* <div id="function.pcntl-sigprocmask" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_sigprocmask</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_sigprocmask</span> — <span class="dc-title">设置或检索阻塞信号</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-sigprocmask-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_sigprocmask</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$mode</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$signals</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$old_signals</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>pcntl_sigprocmask()</strong></span> 函数用来增加，删除或设置阻塞信号，具体行为依赖于参数 <span class="parameter" style="color:#3A95FF">mode</span>。   </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-sigprocmask-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       设置 <span class="function"><strong>pcntl_sigprocmask()</strong></span> 函数的行为。可选值:        </p><ul class="simplelist">        <li><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sig-block">SIG_BLOCK</a></span></strong>: 把信号加入到当前阻塞信号中。</li>        <li><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sig-unblock">SIG_UNBLOCK</a></span></strong>: 从当前阻塞信号中移出信号。</li>        <li><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sig-setmask">SIG_SETMASK</a></span></strong>: 用给定的信号列表替换当前阻塞信号列表。</li>       </ul>           </dd>             <dt><span class="parameter" style="color:#3A95FF">signals</span></dt>     <dd>      <p class="para">       信号列表。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">old_signals</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">old_signals</span> 参数设置为数组，包含先前阻塞的信号列表。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-sigprocmask-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.pcntl-sigprocmask-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">signal</span> 为空，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。      </td>     </tr>     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">signal</span> 的值不是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.typeerror.php" class="classname">TypeError</a></span>。      </td>     </tr>     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">signal</span> 的值无效，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。      </td>     </tr>     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">mode</span> 的值不是 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sig-block">SIG_BLOCK</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sig-unblock">SIG_UNBLOCK</a></span></strong>       或 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sig-setmask">SIG_SETMASK</a></span></strong>，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.pcntl-sigprocmask-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3541">    <p><strong>示例 #1 <span class="function"><strong>pcntl_sigprocmask()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>pcntl_sigprocmask</span><span style="color: #007700">(</span><span style="color: #9876AA">SIG_BLOCK</span><span style="color: #007700">, array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">));<br></span><span style="color: #9876AA">$oldset </span><span style="color: #007700">= array();<br></span><span style="color: #9876AA">pcntl_sigprocmask</span><span style="color: #007700">(</span><span style="color: #9876AA">SIG_UNBLOCK</span><span style="color: #007700">, array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">), </span><span style="color: #9876AA">$oldset</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-sigprocmask-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_sigwaitinfo()} - 等待信号</span></li>    <li><span class="function">{@link pcntl_sigtimedwait()} - 带超时机制的信号等待</span></li>   </ul>   </div></div>
*
 * Sets and retrieves blocked signals
 * @link https://php.net/manual/zh/function.pcntl-sigprocmask.php
 * @param int $mode <p>
 * Sets the behavior of <b>pcntl_sigprocmask</b>. Possible
 * values:
 * <b>SIG_BLOCK</b>: Add the signals to the
 * currently blocked signals.
 * <b>SIG_UNBLOCK</b>: Remove the signals from the
 * currently blocked signals.
 * <b>SIG_SETMASK</b>: Replace the currently
 * blocked signals by the given list of signals.
 * </p>
 * @param array $signals <p>
 * List of signals.
 * </p>
 * @param array &$old_signals [optional] <p>
 * The <i>old_signals</i> parameter is set to an array
 * containing the list of the previously blocked signals.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function pcntl_sigprocmask(int $mode, array $signals, &$old_signals): bool {}

/**
* <div id="function.pcntl-sigwaitinfo" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_sigwaitinfo</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_sigwaitinfo</span> — <span class="dc-title">等待信号</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-sigwaitinfo-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_sigwaitinfo</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$signals</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$info</span><span class="initializer"> = []</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>pcntl_sigwaitinfo()</strong></span> 函数暂停调用脚本的执行直到接收到 <span class="parameter" style="color:#3A95FF">signals</span>   参数中列出的某个信号。只要其中的一个信号已经在等待状态（比如：通过 <span class="function">{@link pcntl_sigprocmask()}</span>   函数阻塞），<span class="function"><strong>pcntl_sigwaitinfo()</strong></span> 就回立刻返回。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-sigwaitinfo-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">signals</span></dt>     <dd>      <p class="para">       要等待的信号数组。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">info</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">info</span> 参数设置为数组，包含信号信息。      </p>      <p class="para">       以下元素会为所有信号设置：       </p><ul class="simplelist">        <li>signo：信号编号</li>        <li>errno：错误编号</li>        <li>code：信号代码</li>       </ul>            <p class="para">       下面元素可能会为 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sigchld">SIGCHLD</a></span></strong> 信号设置：       </p><ul class="simplelist">        <li>status：退出的值或信号</li>        <li>utime：用户消耗的时间</li>        <li>stime：系统（内核）消耗的时间</li>        <li>pid：发送进程ID</li>        <li>uid：发送进程的实际用户ID</li>       </ul>            <p class="para">       信号 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sigill">SIGILL</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sigfpe">SIGFPE</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sigsegv">SIGSEGV</a></span></strong> 和       <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sigbus">SIGBUS</a></span></strong> 可能会被设置的元素:       </p><ul class="simplelist">        <li>addr：发生故障的内存位置</li>       </ul>            <p class="para">       可能会为 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sigpoll">SIGPOLL</a></span></strong>       信号设置的元素：       </p><ul class="simplelist">        <li>band：Band event</li>        <li>fd：文件描述符</li>       </ul>           </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-sigwaitinfo-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回信号编号， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.pcntl-sigwaitinfo-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">signal</span> 为空，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。      </td>     </tr>     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">signal</span> 的值不是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.typeerror.php" class="classname">TypeError</a></span>。      </td>     </tr>     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">signal</span> 的值无效，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.pcntl-sigwaitinfo-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3542">    <p><strong>示例 #1 <span class="function"><strong>pcntl_sigwaitinfo()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Blocking SIGHUP signal\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">pcntl_sigprocmask</span><span style="color: #007700">(</span><span style="color: #9876AA">SIG_BLOCK</span><span style="color: #007700">, array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">));<br><br>echo </span><span style="color: #DD0000">"Sending SIGHUP to self\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">posix_kill</span><span style="color: #007700">(</span><span style="color: #9876AA">posix_getpid</span><span style="color: #007700">(), </span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">"Waiting for signals\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$info </span><span style="color: #007700">= array();<br></span><span style="color: #9876AA">pcntl_sigwaitinfo</span><span style="color: #007700">(array(</span><span style="color: #9876AA">SIGHUP</span><span style="color: #007700">), </span><span style="color: #9876AA">$info</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-sigwaitinfo-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_sigprocmask()} - 设置或检索阻塞信号</span></li>    <li><span class="function">{@link pcntl_sigtimedwait()} - 带超时机制的信号等待</span></li>   </ul>   </div></div>
*
 * Waits for signals
 * @link https://php.net/manual/zh/function.pcntl-sigwaitinfo.php
 * @param array $signals <p>
 * Array of signals to wait for.
 * </p>
 * @param array &$info <p>
 * The <i>info</i> parameter is set to an array containing
 * informations about the signal.
 * </p>
 * <p>
 * The following elements are set for all signals:
 * signo: Signal number
 * errno: An error number
 * code: Signal code
 * </p>
 * <p>
 * The following elements may be set for the <b>SIGCHLD</b> signal:
 * status: Exit value or signal
 * utime: User time consumed
 * stime: System time consumed
 * pid: Sending process ID
 * uid: Real user ID of sending process
 * </p>
 * <p>
 * The following elements may be set for the <b>SIGILL</b>,
 * <b>SIGFPE</b>, <b>SIGSEGV</b> and
 * <b>SIGBUS</b> signals:
 * addr: Memory location which caused fault
 * </p>
 * <p>
 * The following element may be set for the <b>SIGPOLL</b>
 * signal:
 * band: Band event
 * fd: File descriptor number
 * </p>
 * @return int|false On success, <b>pcntl_sigwaitinfo</b> returns a signal number.
 
*/
function pcntl_sigwaitinfo(array $signals, &$info = []): int|false {}

/**
* <div id="function.pcntl-sigtimedwait" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_sigtimedwait</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_sigtimedwait</span> — <span class="dc-title">带超时机制的信号等待</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-sigtimedwait-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_sigtimedwait</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$signals</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$info</span><span class="initializer"> = []</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$seconds</span><span class="initializer"> = 0</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$nanoseconds</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>pcntl_sigtimedwait()</strong></span> 函数实际上与 <span class="function">{@link pcntl_sigwaitinfo()}</span>   的行为一致，不同在于它多了两个增强参数 <span class="parameter" style="color:#3A95FF">seconds</span> 和   <span class="parameter" style="color:#3A95FF">nanoseconds</span>，这使得脚本等待的事件有了一个时间的上限。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-sigtimedwait-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">signals</span></dt>     <dd>      <p class="para">       要等待的信号列表数组。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">info</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">info</span> 设置为数组，包含信号的信息。参见       <span class="function">{@link pcntl_sigwaitinfo()}</span>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">seconds</span></dt>     <dd>      <p class="para">       超时秒数。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">nanoseconds</span></dt>     <dd>      <p class="para">       超时纳秒数。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-sigtimedwait-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时 <span class="function"><strong>pcntl_sigtimedwait()</strong></span> 返回信号编号， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.pcntl-sigtimedwait-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">signal</span> 为空，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。      </td>     </tr>     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">signal</span> 的值不是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.typeerror.php" class="classname">TypeError</a></span>。      </td>     </tr>     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">signal</span> 的值无效，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。      </td>     </tr>     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">seconds</span> 的值小于 <span class="literal">0</span>，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。      </td>     </tr>     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">nanoseconds</span> 的值小于 <span class="literal">0</span>，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。      </td>     </tr>     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">seconds</span> 和 <span class="parameter" style="color:#3A95FF">nanoseconds</span> 的值都是       <span class="literal">0</span>，则抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-sigtimedwait-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_sigprocmask()} - 设置或检索阻塞信号</span></li>    <li><span class="function">{@link pcntl_sigwaitinfo()} - 等待信号</span></li>   </ul>   </div></div>
*
 * Waits for signals, with a timeout
 * @link https://php.net/manual/zh/function.pcntl-sigtimedwait.php
 * @param array $signals <p>
 * Array of signals to wait for.
 * </p>
 * @param array &$info <p>
 * The <i>siginfo</i> is set to an array containing
 * informations about the signal. See
 * <b>pcntl_sigwaitinfo</b>.
 * </p>
 * @param int $seconds [optional] <p>
 * Timeout in seconds.
 * </p>
 * @param int $nanoseconds [optional] <p>
 * Timeout in nanoseconds.
 * </p>
 * @return int|false On success, <b>pcntl_sigtimedwait</b> returns a signal number.
 
*/
function pcntl_sigtimedwait(array $signals, &$info = [], int $seconds = 0, int $nanoseconds = 0): int|false {}

/**
* <div id="function.pcntl-async-signals" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_async_signals</h1>  <p class="verinfo">(PHP 7 &gt;= 7.1.0, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_async_signals</span> — <span class="dc-title">Enable/disable asynchronous signal handling or return the old setting</span></p> </div> <div class="refsect1 description" id="refsect1-function.pcntl-async-signals-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_async_signals</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></span> <span class="parameter" style="color:#3A95FF">$enable</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   If the <span class="parameter" style="color:#3A95FF">enable</span> parameter is <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>,   <span class="function"><strong>pcntl_async_signals()</strong></span> returns whether asynchronous signal   handling is enabled. Otherwise, asynchronous signal handling is enabled or   disabled.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-async-signals-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">enable</span></dt>    <dd>     <p class="para">      Whether asynchronous signal handling should be enabled.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-async-signals-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   When used as getter (<span class="parameter" style="color:#3A95FF">enable</span> parameter is <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>) it returns   whether asynchronous signal handling is enabled. When used as setter (<span class="parameter" style="color:#3A95FF">enable</span>   parameter is not <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>), it returns whether asynchronous signal   handling was enabled <em>before</em> the function call.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.pcntl-async-signals-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">enable</span> is nullable now.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-async-signals-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><a href="https://php.net/manual/zh/control-structures.declare.php" class="link">declare</a></li>  </ul> </div></div>
*
 * Enable/disable asynchronous signal handling or return the old setting.<br>
 * If the <b>enable</b> parameter is omitted, it returns whether asynchronous
 * signal handling is enabled.
 * @link https://www.php.net/manual/en/function.pcntl-async-signals.php
 *
 * @param bool|null $enable <p>
 * Whether asynchronous signal handling should be enabled.
 * </p>
 *
 * @return bool
 * @since 7.1
 
*/
function pcntl_async_signals(
    #[PhpStormStubsElementAvailable(from: '5.3', to: '7.4')] ?bool $enable,
    #[PhpStormStubsElementAvailable(from: '8.0')] ?bool $enable = null
): bool {}

/**
* <div id="function.pcntl-signal-get-handler" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_signal_get_handler</h1>  <p class="verinfo">(PHP 7 &gt;= 7.1.0, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_signal_get_handler</span> — <span class="dc-title">Get the current handler for specified signal</span></p> </div> <div class="refsect1 description" id="refsect1-function.pcntl-signal-get-handler-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_signal_get_handler</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$signal</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span></div>  <p class="para rdfs-comment">   The <span class="function"><strong>pcntl_signal_get_handler()</strong></span> function will get the current handler for the specified <span class="parameter" style="color:#3A95FF">signal</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-signal-get-handler-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">signal</span></dt>    <dd>     <p class="para">      The signal number.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-signal-get-handler-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   This function may return an integer value that refers to <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sig-dfl">SIG_DFL</a></span></strong> or <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.sig-ign">SIG_IGN</a></span></strong>.   If a custom handler has been set, that <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> is returned.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.pcntl-signal-get-handler-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>7.1.0</td>      <td>       <span class="function"><strong>pcntl_signal_get_handler()</strong></span> has been added.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.pcntl-signal-get-handler-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3540">    <p><strong>示例 #1 <span class="function"><strong>pcntl_signal_get_handler()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// Outputs: int(0)<br><br></span><span style="color: #007700">function </span><span style="color: #9876AA">pcntl_test</span><span style="color: #007700">(</span><span style="color: #9876AA">$signo</span><span style="color: #007700">) {}<br></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">, </span><span style="color: #DD0000">'pcntl_test'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// Outputs: string(10) "pcntl_test"<br><br></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">, </span><span style="color: #9876AA">SIG_DFL</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// Outputs: int(0)<br><br></span><span style="color: #9876AA">pcntl_signal</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">, </span><span style="color: #9876AA">SIG_IGN</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">pcntl_signal_get_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">SIGUSR1</span><span style="color: #007700">)); </span><span style="color: #FF8000">// Outputs: int(1)<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-signal-get-handler-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>  </ul> </div></div>
*
 * Get the current handler for specified signal.
 * @link https://www.php.net/manual/en/function.pcntl-signal-get-handler.php
 *
 * @param int $signal <p>
 * The signal number.
 * </p>
 *
 * @return bool|resource
 * @since 7.1
 
*/
function pcntl_signal_get_handler(int $signal) {}

/**
* <div id="function.pcntl-unshare" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_unshare</h1>  <p class="verinfo">(PHP 7 &gt;= 7.4.0, PHP 8)</p><p class="refpurpose"><span class="refname">pcntl_unshare</span> — <span class="dc-title">Dissociates parts of the process execution context</span></p> </div>  <div class="refsect1 description" id="refsect1-function.pcntl-unshare-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_unshare</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>pcntl_unshare()</strong></span> allows a process to disassociate parts of its execution context that are   currently being shared with other processes.   The main use of <span class="function"><strong>pcntl_unshare()</strong></span> is to allow a process to control   its shared execution context without creating a new process.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-unshare-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       The <span class="parameter" style="color:#3A95FF">flags</span> parameter is a bitmask that specifies which parts of the execution context should be unshared.       This parameter is specified by ORing together zero or more of the <span class="literal">CLONE_*</span> constants:       </p><ul class="simplelist">        <li><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.clone-newns">CLONE_NEWNS</a></span></strong></li>        <li><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.clone-newipc">CLONE_NEWIPC</a></span></strong></li>        <li><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.clone-newuts">CLONE_NEWUTS</a></span></strong></li>        <li><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.clone-newnet">CLONE_NEWNET</a></span></strong></li>        <li><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.clone-newpid">CLONE_NEWPID</a></span></strong></li>        <li><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.clone-newuser">CLONE_NEWUSER</a></span></strong></li>        <li><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.clone-newcgroup">CLONE_NEWCGROUP</a></span></strong></li>       </ul>           </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-unshare-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <span class="literal">0</span> on success, <span class="literal">-1</span> otherwise.   On failure it sets an error code, that can be retrieved with <span class="function">{@link pcntl_get_last_error()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-unshare-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><a href="https://php.net/manual/zh/pcntl.constants.php#pcntl.constants.clone" class="link">PCNTL Constants</a></li>    <li><span class="function">{@link pcntl_get_last_error()} - Retrieve the error number set by the last pcntl function which failed</span></li>   </ul>   </div></div>
*
 * @param int $flags
 * @return bool
 * @since 7.4
 
*/
function pcntl_unshare(int $flags): bool {}
/**
* <div id="function.pcntl-waitid" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_waitid</h1>  <p class="verinfo">(PHP 8 &gt;= 8.4.0)</p><p class="refpurpose"><span class="refname">pcntl_waitid</span> — <span class="dc-title">等待子进程改变状态</span></p> </div> <div class="refsect1 description" id="refsect1-function.pcntl-waitid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_waitid</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$idtype</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.p-all">P_ALL</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$id</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$info</span><span class="initializer"> = []</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wexited">WEXITED</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   获取与终止、停止和/或继续事件有关的状态信息，这些事件发生在调用者的一个子进程中。  </p>  <p class="para">   除非传递了 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wnohang">WNOHANG</a></span></strong> 标志，否则调用进程将被阻塞，直到发生错误，   或者满足以下所有条件的状态信息变得可用：   </p><ul class="itemizedlist">    <li class="listitem">     <span class="simpara">      由 <span class="parameter" style="color:#3A95FF">idtype</span> 和 <span class="parameter" style="color:#3A95FF">id</span> 参数指定的一组子进程中的一个子进程的状态信息。     </span>    </li>    <li class="listitem">     <span class="simpara">      状态信息的状态更改与在 <span class="parameter" style="color:#3A95FF">flags</span> 参数中设置的状态更改标志之一匹配。     </span>    </li>   </ul>    <p class="para">   如果在调用 <span class="function"><strong>pcntl_waitid()</strong></span> 之前有匹配的状态信息可用，则返回将是立即的。   如果有两个或两个以上的子进程的匹配状态信息可用，则其状态报告的顺序是未指定的。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    本文档涵盖了 POSIX 规范中 <span class="literal">waitid</span> 函数的说明，以及在 Linux、NetBSD 和 FreeBSD 上的实现中的一些额外参数。    请查看您系统的 <span class="literal">waitid(2)</span> man 手册，以获取有关 <span class="literal">waitid</span> 在您系统上的工作方式的具体细节。   </p>  </blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-waitid-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">idtype</span></dt>    <dt><span class="parameter" style="color:#3A95FF">id</span></dt>    <dd>     <span class="simpara">      <span class="parameter" style="color:#3A95FF">idtype</span> 和 <span class="parameter" style="color:#3A95FF">id</span> 参数用于指定要等待的子进程。     </span>     <table class="doctable table">      <caption><strong>POSIX 标准 <span class="parameter" style="color:#3A95FF">idtype</span> 和 <span class="parameter" style="color:#3A95FF">id</span> 参数</strong></caption>             <tbody class="tbody">        <tr>         <td>如果 <span class="parameter" style="color:#3A95FF">idtype</span> 是 <span class="literal">P_ALL</span></td>         <td>          等待任何子进程，<span class="parameter" style="color:#3A95FF">id</span> 被忽略。         </td>        </tr>        <tr>         <td>如果 <span class="parameter" style="color:#3A95FF">idtype</span> 是 <span class="literal">P_PID</span></td>         <td>          等待进程 ID 等于 <span class="parameter" style="color:#3A95FF">id</span> 的子进程。         </td>        </tr>        <tr>         <td>如果 <span class="parameter" style="color:#3A95FF">idtype</span> 是 <span class="literal">P_PGID</span></td>         <td>          等待进程组 ID 等于 <span class="parameter" style="color:#3A95FF">id</span> 的任何子进程。         </td>        </tr>       </tbody>           </table>     <table class="doctable table">      <caption><strong>Linux 特定 <span class="parameter" style="color:#3A95FF">idtype</span> 和 <span class="parameter" style="color:#3A95FF">id</span> 参数</strong></caption>             <tbody class="tbody">        <tr>         <td>如果 <span class="parameter" style="color:#3A95FF">idtype</span> 是 <span class="literal">P_PIDFD</span>（自 Linux 5.4 起）</td>         <td>          等待由 <span class="parameter" style="color:#3A95FF">id</span> 中指定的 PID 文件描述符引用的子进程。          （有关 PID 文件描述符的详细信息，请参见 Linux <span class="literal">pidfd_open(2)</span> man 手册）         </td>        </tr>       </tbody>           </table>     <table class="doctable table">      <caption><strong>NetBSD 和 FreeBSD 特定 <span class="parameter" style="color:#3A95FF">idtype</span> 和 <span class="parameter" style="color:#3A95FF">id</span> 参数</strong></caption>             <tbody class="tbody">        <tr>         <td>          如果 <span class="parameter" style="color:#3A95FF">idtype</span> 是 <span class="literal">P_UID</span>         </td>         <td>          等待有效用户 ID 等于 <span class="parameter" style="color:#3A95FF">id</span> 的进程。         </td>        </tr>        <tr>         <td>          如果 <span class="parameter" style="color:#3A95FF">idtype</span> 是 <span class="literal">P_GID</span>         </td>         <td>          等待有效组 ID 等于 <span class="parameter" style="color:#3A95FF">id</span> 的进程。         </td>        </tr>        <tr>         <td>          如果 <span class="parameter" style="color:#3A95FF">idtype</span> 是 <span class="literal">P_SID</span>         </td>         <td>          等待会话 ID 等于 <span class="parameter" style="color:#3A95FF">id</span> 的进程。          如果子进程启动了自己的会话，其会话 ID 将与其进程 ID 相同。          否则，子进程的会话 ID 将与调用者的会话 ID 匹配。         </td>        </tr>       </tbody>           </table>     <table class="doctable table">      <caption><strong>FreeBSD 特定 <span class="parameter" style="color:#3A95FF">idtype</span> 和 <span class="parameter" style="color:#3A95FF">id</span> 参数</strong></caption>             <tbody class="tbody">        <tr>         <td>          如果 <span class="parameter" style="color:#3A95FF">idtype</span> 是 <span class="literal">P_JAILID</span>         </td>         <td>          等待在其 jail 标识符等于 <span class="parameter" style="color:#3A95FF">id</span> 的 jail 中的进程。         </td>        </tr>       </tbody>           </table>    </dd>          <dt><span class="parameter" style="color:#3A95FF">info</span></dt>    <dd>     <p class="para">      <span class="parameter" style="color:#3A95FF">info</span> 参数设置为一个包含有关信号的信息的数组。     </p>     <p class="para">      <span class="parameter" style="color:#3A95FF">info</span> 数组可能包含以下键：      </p><ul class="simplelist">       <li><span class="literal">signo</span>：信号量</li>       <li><span class="literal">errno</span>：系统错误号</li>       <li><span class="literal">code</span>：信号代码</li>       <li><span class="literal">status</span>：退出值或信号</li>       <li><span class="literal">pid</span>：发送进程 ID</li>       <li><span class="literal">uid</span>：发送进程的真实用户 ID</li>       <li><span class="literal">utime</span>：用户消耗的时间</li>       <li><span class="literal">stime</span>：系统消耗的时间</li>      </ul>         </dd>          <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>    <dd>     <p class="para">      <span class="parameter" style="color:#3A95FF">flags</span> 的值是零个或多个以下常量的值，这些常量通过 OR 运算在一起：      </p><table class="doctable table">       <caption><strong><span class="parameter" style="color:#3A95FF">flags</span> 的可能值</strong></caption>               <tbody class="tbody">         <tr>          <td><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wcontinued">WCONTINUED</a></span></strong></td>          <td>           为任何继续自作业控制停止的子进程返回状态。           控制停止后，要么没有报告过其状态，要么只有通过设置了 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wnowait">WNOWAIT</a></span></strong>           标志的 <span class="function"><strong>pcntl_waitid()</strong></span> 调用报告过其状态。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wexited">WEXITED</a></span></strong></td>          <td>           返回已退出的子进程的状态。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wnohang">WNOHANG</a></span></strong></td>          <td>           如果没有可用的状态，则不挂起；立即返回。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wnowait">WNOWAIT</a></span></strong></td>          <td>           保持状态返回在 <span class="parameter" style="color:#3A95FF">info</span> 中的进程处于可等待状态。           这不会影响进程的状态；在此调用完成后，可以再次等待该进程。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wstopped">WSTOPPED</a></span></strong></td>          <td>           返回已停止的子进程的状态。           控制停止后，要么没有报告过其状态，要么只有通过设置了 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wnowait">WNOWAIT</a></span></strong>           标志的 <span class="function"><strong>pcntl_waitid()</strong></span> 调用报告过其状态。          </td>         </tr>        </tbody>             </table>         </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-waitid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>pcntl_waitid()</strong></span> 如果指定了 <strong><span><a href="https://php.net/manual/zh/pcntl.constants.php#constant.wnohang">WNOHANG</a></span></strong> 并且状态对于由   <span class="parameter" style="color:#3A95FF">idtype</span> 和 <span class="parameter" style="color:#3A95FF">id</span> 指定的任何进程都不可用，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>。  </p>  <p class="para">   如果由于其一个子进程的状态更改而返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，则 <span class="function"><strong>pcntl_waitid()</strong></span> 返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>。  </p>  <p class="para">   否则，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，并且可以使用 <span class="function">{@link pcntl_get_last_error()}</span> 来获取 <span class="literal">errno</span> 错误号。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    一旦获得了一个 <span class="literal">errno</span> 错误号，可以使用 <span class="function">{@link pcntl_strerror()}</span> 来获取与之关联的文本消息。   </p>  </blockquote> </div>  <div class="refsect1 errors" id="refsect1-function.pcntl-waitid-errors">  <h3 class="title">错误／异常</h3>  <table class="doctable table">   <caption><strong>错误号 (<span class="literal">errno</span>) 值</strong></caption>       <tbody class="tbody">     <tr>      <td><strong><span>ECHILD</span></strong></td>      <td>       调用进程没有未等待的子进程。      </td>     </tr>     <tr>      <td><strong><span>EINTR</span></strong></td>      <td>       <span class="function"><strong>pcntl_waitid()</strong></span> 被一个信号中断。      </td>     </tr>     <tr>      <td><strong><span>EINVAL</span></strong></td>      <td>       为 <span class="parameter" style="color:#3A95FF">flags</span> 指定了一个无效值，       或者 <span class="parameter" style="color:#3A95FF">idtype</span> 和 <span class="parameter" style="color:#3A95FF">id</span> 指定了一组无效的进程。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-waitid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link pcntl_waitpid()} - 等待或返回 fork 的子进程状态</span></li>    <li><span class="function">{@link pcntl_wait()} - 等待或返回 fork 的子进程状态</span></li>    <li><span class="function">{@link pcntl_fork()} - 在当前进程当前位置产生分叉（fork）</span></li>    <li><span class="function">{@link pcntl_signal()} - 安装信号处理程序</span></li>    <li><span class="function">{@link pcntl_wifexited()} - 检查状态代码是否代表一个正常的退出</span></li>    <li><span class="function">{@link pcntl_wifstopped()} - 检查子进程当前是否已经停止</span></li>    <li><span class="function">{@link pcntl_wifsignaled()} - 检查子进程状态码是否代表由于某个信号而中断</span></li>    <li><span class="function">{@link pcntl_wexitstatus()} - 返回一个中断的子进程的返回代码</span></li>    <li><span class="function">{@link pcntl_wtermsig()} - 返回导致子进程中断的信号</span></li>    <li><span class="function">{@link pcntl_wstopsig()} - 返回导致子进程停止的信号</span></li>   </ul>   </div></div>
*
 * @since 8.4
 
*/
function pcntl_waitid(int $idtype = P_ALL, ?int $id = null, &$info = [], int $flags = WEXITED): bool {}
/**
* <div id="function.pcntl-getcpuaffinity" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_getcpuaffinity</h1>  <p class="verinfo">(PHP 8 &gt;= 8.4.0)</p><p class="refpurpose"><span class="refname">pcntl_getcpuaffinity</span> — <span class="dc-title">Get the cpu affinity of a process</span></p> </div> <div class="refsect1 description" id="refsect1-function.pcntl-getcpuaffinity-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_getcpuaffinity</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$pid</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></span></div>  <p class="simpara">   Retrieve the cpu affinity of the <span class="parameter" style="color:#3A95FF">pid</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-getcpuaffinity-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">pid</span></dt>    <dd>     <span class="simpara">      If <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>, the current process ID is used.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-getcpuaffinity-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns the cpu affinity mask of the process,  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数可能返回布尔值<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，但也可能返回等同于 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 的非布尔值。请阅读 <a href="https://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用<a href="https://php.net/manual/zh/language.operators.comparison.php" class="link">===运算符</a>来测试此函数的返回值。</p></div> </div> <div class="refsect1 errors" id="refsect1-function.pcntl-getcpuaffinity-errors">  <h3 class="title">错误／异常</h3>  <p class="simpara">   A <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span> is thrown when   <span class="parameter" style="color:#3A95FF">pid</span> is an invalid process id   or the cpu mask had failed to be created.  </p>  <p class="simpara">   If <span class="parameter" style="color:#3A95FF">pid</span> is a process for which the current   user has no allowed permission, a <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong>   is emitted.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-getcpuaffinity-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link pcntl_setcpuaffinity()} - Set the cpu affinity of a process</span></li>  </ul> </div></div>
*
 * @since 8.4
 
*/
function pcntl_getcpuaffinity(?int $process_id = null): array|false {}
/**
* <div id="function.pcntl-setcpuaffinity" class="refentry"> <div class="refnamediv">  <h1 class="refname">pcntl_setcpuaffinity</h1>  <p class="verinfo">(PHP 8 &gt;= 8.4.0)</p><p class="refpurpose"><span class="refname">pcntl_setcpuaffinity</span> — <span class="dc-title">Set the cpu affinity of a process</span></p> </div> <div class="refsect1 description" id="refsect1-function.pcntl-setcpuaffinity-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>pcntl_setcpuaffinity</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$pid</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$hmask</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="simpara">   Sets the cpu affinity for the <span class="parameter" style="color:#3A95FF">pid</span> with the cpu affinity mask given by   <span class="parameter" style="color:#3A95FF">hmask</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.pcntl-setcpuaffinity-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">pid</span></dt>    <dd>     <span class="simpara">      If <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>, the current process ID is used.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">hmask</span></dt>    <dd>     <span class="simpara">      The cpu affinity mask comprised of one or more cpu id for binding the process to.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.pcntl-setcpuaffinity-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数可能返回布尔值<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，但也可能返回等同于 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 的非布尔值。请阅读 <a href="https://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用<a href="https://php.net/manual/zh/language.operators.comparison.php" class="link">===运算符</a>来测试此函数的返回值。</p></div> </div> <div class="refsect1 errors" id="refsect1-function.pcntl-setcpuaffinity-errors">  <h3 class="title">错误／异常</h3>  <p class="simpara">   A <span class="classname"><a href="https://php.net/manual/zh/class.typeerror.php" class="classname">TypeError</a></span> is thrown if one   of the cpu id from the <span class="parameter" style="color:#3A95FF">hmask</span> is invalid.   A <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span> is thrown if   <span class="parameter" style="color:#3A95FF">pid</span> is an invalid process id   or the cpu mask had failed to be created.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.pcntl-setcpuaffinity-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link pcntl_getcpuaffinity()} - Get the cpu affinity of a process</span></li>  </ul> </div></div>
*
 * @since 8.4
 
*/
function pcntl_setcpuaffinity(?int $process_id = null, array $cpu_ids = []): bool {}
/**
 * @since 8.4
 */
function pcntl_getcpu(): int {}

/**
* <span class="simpara">    </span>
*/
define('WNOHANG', 1);
/**
* <span class="simpara">    </span>
*/
define('WUNTRACED', 2);
/**
* <span class="simpara">    </span>
*/
define('WCONTINUED', 8);
/**
* <span class="simpara">    </span>
*/
define('SIG_IGN', 1);
/**
* <span class="simpara">    </span>
*/
define('SIG_DFL', 0);
/**
* <span class="simpara">    </span>
*/
define('SIG_ERR', -1);
/**
* <span class="simpara">    </span>
*/
define('SIGHUP', 1);
/**
* <span class="simpara">    </span>
*/
define('SIGINT', 2);
/**
* <span class="simpara">    </span>
*/
define('SIGQUIT', 3);
/**
* <span class="simpara">    </span>
*/
define('SIGILL', 4);
/**
* <span class="simpara">    </span>
*/
define('SIGTRAP', 5);
/**
* <span class="simpara">    </span>
*/
define('SIGABRT', 6);
/**
* <span class="simpara">    </span>
*/
define('SIGIOT', 6);
/**
* <span class="simpara">    </span>
*/
define('SIGBUS', 7);
/**
* <span class="simpara">    </span>
*/
define('SIGFPE', 8);
/**
* <span class="simpara">    </span>
*/
define('SIGKILL', 9);
/**
* <span class="simpara">    </span>
*/
define('SIGUSR1', 10);
/**
* <span class="simpara">    </span>
*/
define('SIGSEGV', 11);
/**
* <span class="simpara">    </span>
*/
define('SIGUSR2', 12);
/**
* <span class="simpara">    </span>
*/
define('SIGPIPE', 13);
/**
* <span class="simpara">    </span>
*/
define('SIGALRM', 14);
/**
* <span class="simpara">    </span>
*/
define('SIGTERM', 15);
/**
* <span class="simpara">    </span>
*/
define('SIGSTKFLT', 16);
/**
* <span class="simpara">    </span>
*/
define('SIGCLD', 17);
/**
* <span class="simpara">    </span>
*/
define('SIGCHLD', 17);
/**
* <span class="simpara">    </span>
*/
define('SIGCONT', 18);
/**
* <span class="simpara">    </span>
*/
define('SIGSTOP', 19);
/**
* <span class="simpara">    </span>
*/
define('SIGTSTP', 20);
/**
* <span class="simpara">    </span>
*/
define('SIGTTIN', 21);
/**
* <span class="simpara">    </span>
*/
define('SIGTTOU', 22);
/**
* <span class="simpara">    </span>
*/
define('SIGURG', 23);
/**
* <span class="simpara">    </span>
*/
define('SIGXCPU', 24);
/**
* <span class="simpara">    </span>
*/
define('SIGXFSZ', 25);
/**
* <span class="simpara">    </span>
*/
define('SIGVTALRM', 26);
/**
* <span class="simpara">    </span>
*/
define('SIGPROF', 27);
/**
* <span class="simpara">    </span>
*/
define('SIGWINCH', 28);
/**
* <span class="simpara">    </span>
*/
define('SIGPOLL', 29);
/**
* <span class="simpara">    </span>
*/
define('SIGIO', 29);
/**
* <span class="simpara">    </span>
*/
define('SIGPWR', 30);
/**
* <span class="simpara">    </span>
*/
define('SIGSYS', 31);
/**
* <span class="simpara">    </span>
*/
define('SIGBABY', 31);
/**
* <span class="simpara">    </span>
*/
define('PRIO_PGRP', 1);
/**
* <span class="simpara">    </span>
*/
define('PRIO_USER', 2);
/**
* <span class="simpara">    </span>
*/
define('PRIO_PROCESS', 0);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SIG_BLOCK', 0);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SIG_UNBLOCK', 1);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SIG_SETMASK', 2);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SIGRTMIN', 35);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SIGRTMAX', 64);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SI_USER', 0);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SI_KERNEL', 128);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SI_QUEUE', -1);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SI_TIMER', -2);
/**
* <span class="simpara">    </span>
*/
define('SI_MESGQ', -3);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SI_ASYNCIO', -4);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SI_SIGIO', -5);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SI_TKILL', -6);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('CLD_EXITED', 1);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('CLD_KILLED', 2);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('CLD_DUMPED', 3);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('CLD_TRAPPED', 4);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('CLD_STOPPED', 5);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('CLD_CONTINUED', 6);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('TRAP_BRKPT', 1);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('TRAP_TRACE', 2);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('POLL_IN', 1);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('POLL_OUT', 2);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('POLL_MSG', 3);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('POLL_ERR', 4);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('POLL_PRI', 5);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('POLL_HUP', 6);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('ILL_ILLOPC', 1);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('ILL_ILLOPN', 2);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('ILL_ILLADR', 3);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('ILL_ILLTRP', 4);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('ILL_PRVOPC', 5);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('ILL_PRVREG', 6);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('ILL_COPROC', 7);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('ILL_BADSTK', 8);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('FPE_INTDIV', 1);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('FPE_INTOVF', 2);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('FPE_FLTDIV', 3);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('FPE_FLTOVF', 4);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('FPE_FLTUND', 5);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('FPE_FLTRES', 6);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('FPE_FLTINV', 7);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('FPE_FLTSUB', 8);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SEGV_MAPERR', 1);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('SEGV_ACCERR', 2);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('BUS_ADRALN', 1);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('BUS_ADRERR', 2);

/**
* <span class="simpara">    </span>
*
 * @link https://php.net/manual/zh/pcntl.constants.php
 
*/
define('BUS_OBJERR', 3);
define('PCNTL_EINTR', 4);
define('PCNTL_ECHILD', 10);
define('PCNTL_EINVAL', 22);
define('PCNTL_EAGAIN', 11);
define('PCNTL_ESRCH', 3);
define('PCNTL_EACCES', 13);
define('PCNTL_EPERM', 1);
define('PCNTL_ENOMEM', 12);
define('PCNTL_E2BIG', 7);
define('PCNTL_EFAULT', 14);
define('PCNTL_EIO', 5);
define('PCNTL_EISDIR', 21);
define('PCNTL_ELIBBAD', 80);
define('PCNTL_ELOOP', 40);
define('PCNTL_EMFILE', 24);
define('PCNTL_ENAMETOOLONG', 36);
define('PCNTL_ENFILE', 23);
define('PCNTL_ENOENT', 2);
define('PCNTL_ENOEXEC', 8);
define('PCNTL_ENOTDIR', 20);
define('PCNTL_ETXTBSY', 26);

/**
 * @since 7.4
 */
define('PCNTL_ENOSPC', 28);

/**
 * @since 7.4
 */
define('PCNTL_EUSERS', 87);

/**
* <span class="simpara">     从 PHP 7.4.0 起可用    </span>
*
 * @since 7.4
 
*/
define('CLONE_NEWNS', 131072);

/**
* <span class="simpara">     从 PHP 7.4.0 起可用    </span>
*
 * @since 7.4
 
*/
define('CLONE_NEWIPC', 134217728);

/**
* <span class="simpara">     从 PHP 7.4.0 起可用    </span>
*
 * @since 7.4
 
*/
define('CLONE_NEWUTS', 67108864);

/**
* <span class="simpara">     从 PHP 7.4.0 起可用    </span>
*
 * @since 7.4
 
*/
define('CLONE_NEWNET', 1073741824);

/**
* <span class="simpara">     从 PHP 7.4.0 起可用    </span>
*
 * @since 7.4
 
*/
define('CLONE_NEWPID', 536870912);

/**
* <span class="simpara">     从 PHP 7.4.0 起可用    </span>
*
 * @since 7.4
 
*/
define('CLONE_NEWUSER', 268435456);

/**
* <span class="simpara">     从 PHP 7.4.0 起可用    </span>
*
 * @since 7.4
 
*/
define('CLONE_NEWCGROUP', 33554432);
/**
* <span class="simpara">     选择任何子进程。    </span>
*
 * @since 8.4
 
*/
define('P_ALL', 0);
/**
* <span class="simpara">    </span>
*
 * @since 8.4
 
*/
define('WEXITED', 4);
/**
* <span class="simpara">    </span>
*
 * @since 8.4
 
*/
define('WSTOPPED', 2);
/**
* <span class="simpara">    </span>
*
 * @since 8.4
 
*/
define('WNOWAIT', 16777216);
/**
* <span class="simpara">     按进程 ID 选择。    </span>
*
 * @since 8.4
 
*/
define('P_PID', 1);
/**
* <span class="simpara">     按进程组 ID 选择。    </span>
*
 * @since 8.4
 
*/
define('P_PGID', 2);
/**
* <span class="simpara">     按 PID 文件描述符选择。     仅适用于 Linux（自 Linux 5.4 起）。    </span>
*
 * @since 8.4
 
*/
define('P_PIDFD', 3);
// End of pcntl v.
