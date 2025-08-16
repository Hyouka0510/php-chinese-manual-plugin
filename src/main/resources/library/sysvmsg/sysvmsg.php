<?php

// Start of sysvmsg v.
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;

/**
 * <div id="function.msg-get-queue" class="refentry"> <div class="refnamediv">  <h1 class="refname">msg_get_queue</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">msg_get_queue</span> — <span class="dc-title">Create or attach to a message queue</span></p> </div>  <div class="refsect1 description" id="refsect1-function.msg-get-queue-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>msg_get_queue</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$permissions</span><span class="initializer"> = 0666</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="type SysvMessageQueue" style="color:#EAB766">SysvMessageQueue</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>msg_get_queue()</strong></span> returns an id that can be used to   access the System V message queue with the given   <span class="parameter" style="color:#3A95FF">key</span>. The first call creates the message queue with   the optional <span class="parameter" style="color:#3A95FF">permissions</span>.   A second call to <span class="function"><strong>msg_get_queue()</strong></span> for the same   <span class="parameter" style="color:#3A95FF">key</span> will return a different message queue   identifier, but both identifiers access the same underlying message   queue.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.msg-get-queue-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">key</span></dt>     <dd>      <p class="para">       Message queue numeric ID      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">permissions</span></dt>     <dd>      <p class="para">       Queue permissions. Default to 0666. If the message queue already       exists, the <span class="parameter" style="color:#3A95FF">permissions</span> will be ignored.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.msg-get-queue-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <span class="classname"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="classname">SysvMessageQueue</a></span> instance that can be used to access the System V message queue,    或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.msg-get-queue-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        On success, this function returns a <span class="classname"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="classname">SysvMessageQueue</a></span> instance now;        previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was returned.       </td>      </tr>     </tbody>       </table>   </div>  <div class="refsect1 seealso" id="refsect1-function.msg-get-queue-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link msg_remove_queue()} - Destroy a message queue</span></li>    <li><span class="function">{@link msg_receive()} - Receive a message from a message queue</span></li>    <li><span class="function">{@link msg_send()} - Send a message to a message queue</span></li>    <li><span class="function">{@link msg_stat_queue()} - Returns information from the message queue data structure</span></li>    <li><span class="function">{@link msg_set_queue()} - Set information in the message queue data structure</span></li>   </ul>   </div>  </div>
 * 
 * Create or attach to a message queue
 * @link https://php.net/manual/zh/function.msg-get-queue.php
 * @param int $key <p>
 * Message queue numeric ID
 * </p>
 * @param int $permissions [optional] <p>
 * Queue permissions. Default to 0666. If the message queue already
 * exists, the <i>perms</i> will be ignored.
 * </p>
 * @return resource|SysvMessageQueue|false a resource handle that can be used to access the System V message queue.
 */
#[LanguageLevelTypeAware(["8.0" => "SysvMessageQueue|false"], default: "resource|false")]
function msg_get_queue(int $key, int $permissions = 0666) {}

/**
 * <div id="function.msg-send" class="refentry"> <div class="refnamediv">  <h1 class="refname">msg_send</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">msg_send</span> — <span class="dc-title">Send a message to a message queue</span></p> </div>  <div class="refsect1 description" id="refsect1-function.msg-send-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>msg_send</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="type SysvMessageQueue" style="color:#EAB766">SysvMessageQueue</a></span> <span class="parameter" style="color:#3A95FF">\$queue</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$message_type</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></span> <span class="parameter" style="color:#3A95FF">\$message</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$serialize</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$blocking</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;\$error_code</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>msg_send()</strong></span> sends a <span class="parameter" style="color:#3A95FF">message</span> of type   <span class="parameter" style="color:#3A95FF">message_type</span> (which MUST be greater than 0) to   the message queue specified by <span class="parameter" style="color:#3A95FF">queue</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.msg-send-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">queue</span></dt>     <dd>      <p class="para">       The message queue.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">message_type</span></dt>     <dd>      <p class="para">       The type of the message (MUST be greater than 0)      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">message</span></dt>     <dd>      <p class="para">       The body of the message.      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        </p><p class="para">        If <span class="parameter" style="color:#3A95FF">serialize</span> set to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> is supplied,        MUST be of type: <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>, <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>, <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span>         or <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span>. In other case a warning will be issued.       </p>      </blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">serialize</span></dt>     <dd>      <p class="para">       The optional <span class="parameter" style="color:#3A95FF">serialize</span> controls how the       <span class="parameter" style="color:#3A95FF">message</span> is sent.  <span class="parameter" style="color:#3A95FF">serialize</span>       defaults to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> which means that the <span class="parameter" style="color:#3A95FF">message</span> is       serialized using the same mechanism as the session module before being       sent to the queue.  This allows complex arrays and objects to be sent to       other PHP scripts, or if you are using the WDDX serializer, to any WDDX       compatible client.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">blocking</span></dt>     <dd>      <p class="para">       If the message is too large to fit in the queue, your script will wait       until another process reads messages from the queue and frees enough       space for your message to be sent.       This is called blocking; you can prevent blocking by setting the       optional <span class="parameter" style="color:#3A95FF">blocking</span> parameter to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>, in which       case <span class="function"><strong>msg_send()</strong></span> will immediately return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if the       message is too big for the queue, and set the optional       <span class="parameter" style="color:#3A95FF">error_code</span> to <strong><span><a href="https://php.net/manual/zh/sem.constants.php#constant.msg-eagain">MSG_EAGAIN</a></span></strong>,       indicating that you should try to send your message again a little       later on.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">error_code</span></dt>     <dd>      <p class="para">       If the function fails, the optional errorcode will be set to the value of the system errno variable.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.msg-send-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   Upon successful completion the message queue data structure is updated as   follows: <span class="parameter" style="color:#3A95FF">msg_lspid</span> is set to the process-ID of the   calling process, <span class="parameter" style="color:#3A95FF">msg_qnum</span> is incremented by 1 and   <span class="parameter" style="color:#3A95FF">msg_stime</span> is set to the current time.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.msg-send-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        <span class="parameter" style="color:#3A95FF">queue</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="classname">SysvMessageQueue</a></span>        instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected.       </td>      </tr>     </tbody>       </table>   </div>  <div class="refsect1 seealso" id="refsect1-function.msg-send-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link msg_remove_queue()} - Destroy a message queue</span></li>    <li><span class="function">{@link msg_receive()} - Receive a message from a message queue</span></li>    <li><span class="function">{@link msg_stat_queue()} - Returns information from the message queue data structure</span></li>    <li><span class="function">{@link msg_set_queue()} - Set information in the message queue data structure</span></li>   </ul>   </div>  </div>
 * 
 * Send a message to a message queue
 * @link https://php.net/manual/zh/function.msg-send.php
 * @param SysvMessageQueue|resource $queue
 * @param int $message_type
 * @param mixed $message
 * @param bool $serialize [optional] <p>
 * The optional <i>serialize</i> controls how the
 * <i>message</i> is sent. <i>serialize</i>
 * defaults to <b>TRUE</b> which means that the <i>message</i> is
 * serialized using the same mechanism as the session module before being
 * sent to the queue. This allows complex arrays and objects to be sent to
 * other PHP scripts, or if you are using the WDDX serializer, to any WDDX
 * compatible client.
 * </p>
 * @param bool $blocking [optional] <p>
 * If the message is too large to fit in the queue, your script will wait
 * until another process reads messages from the queue and frees enough
 * space for your message to be sent.
 * This is called blocking; you can prevent blocking by setting the
 * optional <i>blocking</i> parameter to <b>FALSE</b>, in which
 * case <b>msg_send</b> will immediately return <b>FALSE</b> if the
 * message is too big for the queue, and set the optional
 * <i>errorcode</i> to <b>MSG_EAGAIN</b>,
 * indicating that you should try to send your message again a little
 * later on.
 * </p>
 * @param int &$error_code [optional]
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * <p>
 * Upon successful completion the message queue data structure is updated as
 * follows: <i>msg_lspid</i> is set to the process-ID of the
 * calling process, <i>msg_qnum</i> is incremented by 1 and
 * <i>msg_stime</i> is set to the current time.
 * </p>
 */
function msg_send(#[LanguageLevelTypeAware(["8.0" => "SysvMessageQueue"], default: "resource")] $queue, int $message_type, $message, bool $serialize = true, bool $blocking = true, &$error_code): bool {}

/**
 * <div id="function.msg-receive" class="refentry"> <div class="refnamediv">  <h1 class="refname">msg_receive</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">msg_receive</span> — <span class="dc-title">Receive a message from a message queue</span></p> </div>  <div class="refsect1 description" id="refsect1-function.msg-receive-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>msg_receive</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="type SysvMessageQueue" style="color:#EAB766">SysvMessageQueue</a></span> <span class="parameter" style="color:#3A95FF">\$queue</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$desired_message_type</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;\$received_message_type</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$max_message_size</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;\$message</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$unserialize</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$flags</span><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;\$error_code</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>msg_receive()</strong></span> will receive the first message from the   specified <span class="parameter" style="color:#3A95FF">queue</span> of the type specified by   <span class="parameter" style="color:#3A95FF">desired_message_type</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.msg-receive-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">queue</span></dt>     <dd>      <p class="para">       The message queue.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">desired_message_type</span></dt>     <dd>      <p class="para">       If <span class="parameter" style="color:#3A95FF">desired_message_type</span> is 0, the message from the front       of the queue is returned. If <span class="parameter" style="color:#3A95FF">desired_message_type</span> is       greater than 0, then the first message of that type is returned.       If <span class="parameter" style="color:#3A95FF">desired_message_type</span> is less than 0, the first       message on the queue with a type less than or equal to the       absolute value of <span class="parameter" style="color:#3A95FF">desired_message_type</span> will be read.       If no messages match the criteria, your script will wait until a suitable       message arrives on the queue.  You can prevent the script from blocking       by specifying <strong><span><a href="https://php.net/manual/zh/sem.constants.php#constant.msg-ipc-nowait">MSG_IPC_NOWAIT</a></span></strong> in the       <span class="parameter" style="color:#3A95FF">flags</span> parameter.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">received_message_type</span></dt>     <dd>      <p class="para">       The type of the message that was received will be stored in this       parameter.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">max_message_size</span></dt>     <dd>      <p class="para">       The maximum size of message to be accepted is specified by the       <span class="parameter" style="color:#3A95FF">max_message_size</span>; if the message in the queue is larger       than this size the function will fail (unless you set       <span class="parameter" style="color:#3A95FF">flags</span> as described below).      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">message</span></dt>     <dd>      <p class="para">       The received message will be stored in <span class="parameter" style="color:#3A95FF">message</span>,       unless there were errors receiving the message.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">unserialize</span></dt>     <dd>      <p class="para">       If set to       <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>, the message is treated as though it was serialized using the       same mechanism as the session module. The message will be unserialized       and then returned to your script. This allows you to easily receive       arrays or complex object structures from other PHP scripts, or if you       are using the WDDX serializer, from any WDDX compatible source.      </p>      <p class="para">       If <span class="parameter" style="color:#3A95FF">unserialize</span> is <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>, the message will be       returned as a binary-safe string.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       The optional <span class="parameter" style="color:#3A95FF">flags</span> allows you to pass flags to the       low-level msgrcv system call.  It defaults to 0, but you may specify one       or more of the following values (by adding or ORing them together).       </p><table class="doctable table">        <caption><strong>Flag values for msg_receive</strong></caption>                 <tbody class="tbody">          <tr>           <td><strong><span><a href="https://php.net/manual/zh/sem.constants.php#constant.msg-ipc-nowait">MSG_IPC_NOWAIT</a></span></strong></td>           <td>If there are no messages of the            <span class="parameter" style="color:#3A95FF">desired_message_type</span>, return immediately and do not            wait.  The function will fail and return an integer value            corresponding to <strong><span><a href="https://php.net/manual/zh/sem.constants.php#constant.msg-enomsg">MSG_ENOMSG</a></span></strong>.           </td>          </tr>          <tr>           <td><strong><span><a href="https://php.net/manual/zh/sem.constants.php#constant.msg-except">MSG_EXCEPT</a></span></strong></td>           <td>Using this flag in combination with a            <span class="parameter" style="color:#3A95FF">desired_message_type</span> greater than 0 will cause the            function to receive the first message that is not equal to            <span class="parameter" style="color:#3A95FF">desired_message_type</span>.</td>          </tr>          <tr>           <td><strong><span><a href="https://php.net/manual/zh/sem.constants.php#constant.msg-noerror">MSG_NOERROR</a></span></strong></td>           <td>            If the message is longer than <span class="parameter" style="color:#3A95FF">max_message_size</span>,            setting this flag will truncate the message to            <span class="parameter" style="color:#3A95FF">max_message_size</span> and will not signal an error.           </td>          </tr>         </tbody>               </table>           </dd>             <dt><span class="parameter" style="color:#3A95FF">error_code</span></dt>     <dd>      <p class="para">       If the function fails, the optional <span class="parameter" style="color:#3A95FF">error_code</span>       will be set to the value of the system errno variable.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.msg-receive-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   Upon successful completion the message queue data structure is updated as   follows: <span class="literal">msg_lrpid</span> is set to the process-ID of the   calling process, <span class="literal">msg_qnum</span> is decremented by 1 and   <span class="literal">msg_rtime</span> is set to the current time.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.msg-receive-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        <span class="parameter" style="color:#3A95FF">queue</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="classname">SysvMessageQueue</a></span>        instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected.       </td>      </tr>     </tbody>       </table>   </div>  <div class="refsect1 seealso" id="refsect1-function.msg-receive-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link msg_remove_queue()} - Destroy a message queue</span></li>    <li><span class="function">{@link msg_send()} - Send a message to a message queue</span></li>    <li><span class="function">{@link msg_stat_queue()} - Returns information from the message queue data structure</span></li>    <li><span class="function">{@link msg_set_queue()} - Set information in the message queue data structure</span></li>   </ul>   </div>  </div>
 * 
 * Receive a message from a message queue
 * @link https://php.net/manual/zh/function.msg-receive.php
 * @param SysvMessageQueue|resource $queue
 * @param int $desired_message_type <p>
 * If <i>desiredmsgtype</i> is 0, the message from the front
 * of the queue is returned. If <i>desiredmsgtype</i> is
 * greater than 0, then the first message of that type is returned.
 * If <i>desiredmsgtype</i> is less than 0, the first
 * message on the queue with the lowest type less than or equal to the
 * absolute value of <i>desiredmsgtype</i> will be read.
 * If no messages match the criteria, your script will wait until a suitable
 * message arrives on the queue. You can prevent the script from blocking
 * by specifying <b>MSG_IPC_NOWAIT</b> in the
 * <i>flags</i> parameter.
 * </p>
 * @param int &$received_message_type <p>
 * The type of the message that was received will be stored in this
 * parameter.
 * </p>
 * @param int $max_message_size <p>
 * The maximum size of message to be accepted is specified by the
 * <i>maxsize</i>; if the message in the queue is larger
 * than this size the function will fail (unless you set
 * <i>flags</i> as described below).
 * </p>
 * @param mixed &$message <p>
 * The received message will be stored in <i>message</i>,
 * unless there were errors receiving the message.
 * </p>
 * @param bool $unserialize [optional] <p>
 * If set to
 * <b>TRUE</b>, the message is treated as though it was serialized using the
 * same mechanism as the session module. The message will be unserialized
 * and then returned to your script. This allows you to easily receive
 * arrays or complex object structures from other PHP scripts, or if you
 * are using the WDDX serializer, from any WDDX compatible source.
 * </p>
 * <p>
 * If <i>unserialize</i> is <b>FALSE</b>, the message will be
 * returned as a binary-safe string.
 * </p>
 * @param int $flags [optional] <p>
 * The optional <i>flags</i> allows you to pass flags to the
 * low-level msgrcv system call. It defaults to 0, but you may specify one
 * or more of the following values (by adding or ORing them together).
 * <table>
 * Flag values for msg_receive
 * <tr valign="top">
 * <td><b>MSG_IPC_NOWAIT</b></td>
 * <td>If there are no messages of the
 * <i>desiredmsgtype</i>, return immediately and do not
 * wait. The function will fail and return an integer value
 * corresponding to <b>MSG_ENOMSG</b>.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_EXCEPT</b></td>
 * <td>Using this flag in combination with a
 * <i>desiredmsgtype</i> greater than 0 will cause the
 * function to receive the first message that is not equal to
 * <i>desiredmsgtype</i>.</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_NOERROR</b></td>
 * <td>
 * If the message is longer than <i>maxsize</i>,
 * setting this flag will truncate the message to
 * <i>maxsize</i> and will not signal an error.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param int $error_code [optional] <p>
 * If the function fails, the optional <i>errorcode</i>
 * will be set to the value of the system errno variable.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * <p>
 * Upon successful completion the message queue data structure is updated as
 * follows: msg_lrpid is set to the process-ID of the
 * calling process, msg_qnum is decremented by 1 and
 * msg_rtime is set to the current time.
 * </p>
 */
function msg_receive(#[LanguageLevelTypeAware(["8.0" => "SysvMessageQueue"], default: "resource")] $queue, int $desired_message_type, &$received_message_type, int $max_message_size, mixed & $message, bool $unserialize = true, int $flags = 0, &$error_code): bool {}

/**
 * <div id="function.msg-remove-queue" class="refentry"> <div class="refnamediv">  <h1 class="refname">msg_remove_queue</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">msg_remove_queue</span> — <span class="dc-title">Destroy a message queue</span></p> </div>  <div class="refsect1 description" id="refsect1-function.msg-remove-queue-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>msg_remove_queue</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="type SysvMessageQueue" style="color:#EAB766">SysvMessageQueue</a></span> <span class="parameter" style="color:#3A95FF">\$queue</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>msg_remove_queue()</strong></span> destroys the message queue specified   by the <span class="parameter" style="color:#3A95FF">queue</span>.  Only use this function when all   processes have finished working with the message queue and you need to   release the system resources held by it.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.msg-remove-queue-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">queue</span></dt>     <dd>      <p class="para">       The message queue.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.msg-remove-queue-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.msg-remove-queue-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        <span class="parameter" style="color:#3A95FF">queue</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="classname">SysvMessageQueue</a></span>        instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected.       </td>      </tr>     </tbody>       </table>   </div>  <div class="refsect1 seealso" id="refsect1-function.msg-remove-queue-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link msg_get_queue()} - Create or attach to a message queue</span></li>    <li><span class="function">{@link msg_receive()} - Receive a message from a message queue</span></li>    <li><span class="function">{@link msg_stat_queue()} - Returns information from the message queue data structure</span></li>    <li><span class="function">{@link msg_set_queue()} - Set information in the message queue data structure</span></li>   </ul>   </div>  </div>
 * 
 * Destroy a message queue
 * @link https://php.net/manual/zh/function.msg-remove-queue.php
 * @param SysvMessageQueue|resource $queue <p>
 * Message queue resource handle
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function msg_remove_queue(#[LanguageLevelTypeAware(["8.0" => "SysvMessageQueue"], default: "resource")] $queue): bool {}

/**
 * Returns information from the message queue data structure
 * @link https://php.net/manual/en/function.msg-stat-queue.php
 * @param SysvMessageQueue|resource $queue <p>
 * Message queue resource handle
 * </p>
 * @return array|false The return value is an array whose keys and values have the following
 * meanings:
 * <table>
 * Array structure for msg_stat_queue
 * <tr valign="top">
 * <td>msg_perm.uid</td>
 * <td>
 * The uid of the owner of the queue.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>msg_perm.gid</td>
 * <td>
 * The gid of the owner of the queue.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>msg_perm.mode</td>
 * <td>
 * The file access mode of the queue.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>msg_stime</td>
 * <td>
 * The time that the last message was sent to the queue.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>msg_rtime</td>
 * <td>
 * The time that the last message was received from the queue.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>msg_ctime</td>
 * <td>
 * The time that the queue was last changed.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>msg_qnum</td>
 * <td>
 * The number of messages waiting to be read from the queue.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>msg_qbytes</td>
 * <td>
 * The maximum number of bytes allowed in one message queue. On
 * Linux, this value may be read and modified via
 * /proc/sys/kernel/msgmnb.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>msg_lspid</td>
 * <td>
 * The pid of the process that sent the last message to the queue.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>msg_lrpid</td>
 * <td>
 * The pid of the process that received the last message from the queue.
 * </td>
 * </tr>
 * </table>
 */
#[ArrayShape([
    "msg_perm.uid" => "int",
    "msg_perm.gid" => "int",
    "msg_perm.mode" => "int",
    "msg_stime" => "int",
    "msg_rtime" => "int",
    "msg_ctime" => "int",
    "msg_qnum" => "int",
    "msg_qbytes" => "int",
    "msg_lspid" => "int",
    "msg_lrpid" => "int",
])]
/**
 * <div id="function.msg-stat-queue" class="refentry"> <div class="refnamediv">  <h1 class="refname">msg_stat_queue</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">msg_stat_queue</span> — <span class="dc-title">Returns information from the message queue data structure</span></p> </div>  <div class="refsect1 description" id="refsect1-function.msg-stat-queue-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>msg_stat_queue</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="type SysvMessageQueue" style="color:#EAB766">SysvMessageQueue</a></span> <span class="parameter" style="color:#3A95FF">\$queue</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>msg_stat_queue()</strong></span> returns the message queue meta data   for the message queue specified by the <span class="parameter" style="color:#3A95FF">queue</span>.   This is useful, for example, to determine which process sent the message   that was just received.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.msg-stat-queue-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">queue</span></dt>     <dd>      <p class="para">       The message queue.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.msg-stat-queue-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   On success, the return value is an array whose keys and values have the following   meanings:   </p><table class="doctable table">    <caption><strong>Array structure for msg_stat_queue</strong></caption>         <tbody class="tbody">      <tr>       <td><span class="literal">msg_perm.uid</span></td>       <td>        The uid of the owner of the queue.       </td>      </tr>      <tr>       <td><span class="literal">msg_perm.gid</span></td>       <td>        The gid of the owner of the queue.       </td>      </tr>      <tr>       <td><span class="literal">msg_perm.mode</span></td>       <td>        The file access mode of the queue.       </td>      </tr>      <tr>       <td><span class="literal">msg_stime</span></td>       <td>        The time that the last message was sent to the queue.       </td>      </tr>      <tr>       <td><span class="literal">msg_rtime</span></td>       <td>        The time that the last message was received from the queue.       </td>      </tr>      <tr>       <td><span class="literal">msg_ctime</span></td>       <td>        The time that the queue was last changed.       </td>      </tr>      <tr>       <td><span class="literal">msg_qnum</span></td>       <td>        The number of messages waiting to be read from the queue.       </td>      </tr>      <tr>       <td><span class="literal">msg_qbytes</span></td>       <td>        The maximum number of bytes allowed in one message queue. On        Linux, this value may be read and modified via        <var class="filename">/proc/sys/kernel/msgmnb</var>.       </td>      </tr>      <tr>       <td><span class="literal">msg_lspid</span></td>       <td>        The pid of the process that sent the last message to the queue.       </td>      </tr>      <tr>       <td><span class="literal">msg_lrpid</span></td>       <td>        The pid of the process that received the last message from the queue.       </td>      </tr>     </tbody>       </table>    <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.msg-stat-queue-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        <span class="parameter" style="color:#3A95FF">queue</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="classname">SysvMessageQueue</a></span>        instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected.       </td>      </tr>     </tbody>       </table>   </div>  <div class="refsect1 seealso" id="refsect1-function.msg-stat-queue-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link msg_remove_queue()} - Destroy a message queue</span></li>    <li><span class="function">{@link msg_receive()} - Receive a message from a message queue</span></li>    <li><span class="function">{@link msg_get_queue()} - Create or attach to a message queue</span></li>    <li><span class="function">{@link msg_set_queue()} - Set information in the message queue data structure</span></li>   </ul>   </div>  </div>
 */
function msg_stat_queue(#[LanguageLevelTypeAware(["8.0" => "SysvMessageQueue"], default: "resource")] $queue): array|false {}

/**
 * <div id="function.msg-set-queue" class="refentry"> <div class="refnamediv">  <h1 class="refname">msg_set_queue</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">msg_set_queue</span> — <span class="dc-title">Set information in the message queue data structure</span></p> </div>  <div class="refsect1 description" id="refsect1-function.msg-set-queue-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>msg_set_queue</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="type SysvMessageQueue" style="color:#EAB766">SysvMessageQueue</a></span> <span class="parameter" style="color:#3A95FF">\$queue</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$data</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>msg_set_queue()</strong></span> allows you to change the values of the   msg_perm.uid, msg_perm.gid, msg_perm.mode and msg_qbytes fields of the   underlying message queue data structure.  </p>  <p class="para">   Changing the data structure will require that PHP be running as the same   user that created the queue, owns the queue (as determined by the   existing msg_perm.xxx fields), or be running with root privileges.   root privileges are required to raise the msg_qbytes values above the   system defined limit.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.msg-set-queue-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">queue</span></dt>     <dd>      <p class="para">       The message queue.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       You specify the values you require by setting the value of the keys       that you require in the <span class="parameter" style="color:#3A95FF">data</span> array.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.msg-set-queue-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.msg-set-queue-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        <span class="parameter" style="color:#3A95FF">queue</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.sysvmessagequeue.php" class="classname">SysvMessageQueue</a></span>        instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected.       </td>      </tr>     </tbody>       </table>   </div>  <div class="refsect1 seealso" id="refsect1-function.msg-set-queue-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link msg_remove_queue()} - Destroy a message queue</span></li>    <li><span class="function">{@link msg_receive()} - Receive a message from a message queue</span></li>    <li><span class="function">{@link msg_stat_queue()} - Returns information from the message queue data structure</span></li>    <li><span class="function">{@link msg_get_queue()} - Create or attach to a message queue</span></li>   </ul>   </div>  </div>
 * 
 * Set information in the message queue data structure
 * @link https://php.net/manual/zh/function.msg-set-queue.php
 * @param SysvMessageQueue|resource $queue <p>
 * Message queue resource handle
 * </p>
 * @param array $data <p>
 * You specify the values you require by setting the value of the keys
 * that you require in the <i>data</i> array.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function msg_set_queue(#[LanguageLevelTypeAware(["8.0" => "SysvMessageQueue"], default: "resource")] $queue, array $data): bool {}

/**
 * <div id="function.msg-queue-exists" class="refentry"> <div class="refnamediv">  <h1 class="refname">msg_queue_exists</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">msg_queue_exists</span> — <span class="dc-title">Check whether a message queue exists</span></p> </div>  <div class="refsect1 description" id="refsect1-function.msg-queue-exists-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>msg_queue_exists</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Checks whether the message queue <span class="parameter" style="color:#3A95FF">key</span> exists.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.msg-queue-exists-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">key</span></dt>     <dd>      <p class="para">       Queue key.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.msg-queue-exists-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.msg-queue-exists-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link msg_remove_queue()} - Destroy a message queue</span></li>    <li><span class="function">{@link msg_receive()} - Receive a message from a message queue</span></li>    <li><span class="function">{@link msg_stat_queue()} - Returns information from the message queue data structure</span></li>   </ul>   </div>  </div>
 * 
 * Check whether a message queue exists
 * @link https://php.net/manual/zh/function.msg-queue-exists.php
 * @param int $key <p>
 * Queue key.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function msg_queue_exists(int $key): bool {}

/**
 * <span class="simpara">    </span>
 */
define('MSG_IPC_NOWAIT', 1);
/**
 * <span class="simpara">    </span>
 */
define('MSG_EAGAIN', 11);
/**
 * <span class="simpara">    </span>
 */
define('MSG_ENOMSG', 42);
/**
 * <span class="simpara">    </span>
 */
define('MSG_NOERROR', 2);
/**
 * <span class="simpara">    </span>
 */
define('MSG_EXCEPT', 4);

/**
 * @since 8.0
 */
final class SysvMessageQueue
{
    /**
     * Cannot directly construct SysvMessageQueue, use msg_get_queue() instead
     * @see msg_get_queue()
     */
    private function __construct() {}
}

// End of sysvmsg v.
