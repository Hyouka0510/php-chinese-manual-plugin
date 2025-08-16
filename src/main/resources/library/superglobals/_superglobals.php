<?php
/**
 * @xglobal $GLOBALS array
 * Contains a reference to every variable which is currently available within the global scope of the script.
 *   The keys of this array are the names of the global variables.
 *   $GLOBALS has existed since PHP 3.
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$GLOBALS = [];

/**
 * @xglobal $_COOKIE array
 * Variables provided to the script via HTTP cookies. Analogous to the old $HTTP_COOKIE_VARS array
 * (which is still available, but deprecated).
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$_COOKIE = [];

/**
 * @xglobal $_ENV array
 * @xglobal $HTTP_ENV_VARS array
 *
 * Variables provided to the script via the environment.
 * Analogous to the old $HTTP_ENV_VARS array (which is still available, but deprecated).
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$_ENV = [];
/**
 * @deprecated 4.1
 * @removed 5.4
 */
$HTTP_ENV_VARS = [];

/**
 * @xglobal $_FILES array
 * @xglobal $HTTP_POST_FILES array
 *
 * Variables provided to the script via HTTP post file uploads. Analogous to the old $HTTP_POST_FILES array
 * (which is still available, but deprecated).
 * See POST method uploads for more information.
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$_FILES = [];
/**
 * @deprecated 4.1
 * @removed 5.4
 */
$HTTP_POST_FILES = [];

/**
 * @xglobal $_GET array
 * @xglobal $HTTP_GET_VARS array
 *
 * Variables provided to the script via URL query string.
 *  Analogous to the old $HTTP_GET_VARS array (which is still available, but deprecated).
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$_GET = [];
/**
 * @deprecated 4.1
 * @removed 5.4
 */
$HTTP_GET_VARS = [];

/**
 * @xglobal $_POST array
 * @xglobal $HTTP_POST_VARS array
 *
 * Variables provided to the script via HTTP POST. Analogous to the old $HTTP_POST_VARS array
 * (which is still available, but deprecated).
 * @link https://secure.php.net/manual/en/language.variables.predefined.php
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$_POST = [];
/**
 * @deprecated 4.1
 * @removed 5.4
 */
$HTTP_POST_VARS = [];

/**
 *  @xglobal $_REQUEST array
 * Variables provided to the script via the GET, POST, and COOKIE input mechanisms,
 * and which therefore cannot be trusted.
 * The presence and order of variable inclusion in this array is defined according to the
 * PHP variables_order configuration directive.
 * This array has no direct analogue in versions of PHP prior to 4.1.0.
 * See also import_request_variables().
 * <p>
 * Caution
 *  <p>Since PHP 4.3.0, FILE information from $_FILES does not exist in $_REQUEST.
 * <p>
 * Note: When running on the command line , this will not include the argv and argc entries; these are present in the $_SERVER array.
 *
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$_REQUEST = [];

/**
 * @xglobal $_SERVER array
 * @xglobal $HTTP_SERVER_VARS array
 *
 * Variables set by the web server or otherwise directly related to the execution environment of the current script.
 * Analogous to the old $HTTP_SERVER_VARS array (which is still available, but deprecated).
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$_SERVER = [];
/**
 * @deprecated 4.1
 * @removed 5.4
 */
$HTTP_SERVER_VARS = [];


$_SERVER['PHP_SELF'] = '';

$_SERVER['argv'] = '';

$_SERVER['argc'] = '';

$_SERVER['GATEWAY_INTERFACE'] = 'CGI/1.1';

$_SERVER['SERVER_ADDR'] = '127.0.0.1';

$_SERVER['SERVER_NAME'] = 'localhost';

$_SERVER['SERVER_SOFTWARE'] = '';

$_SERVER['SERVER_PROTOCOL'] = 'HTTP/1.0';

$_SERVER['REQUEST_METHOD'] = 'GET';

$_SERVER['REQUEST_TIME'] = 946713600;

$_SERVER['REQUEST_TIME_FLOAT'] = 946713600.123456;

$_SERVER['QUERY_STRING'] = '';

$_SERVER['DOCUMENT_ROOT'] = '';

$_SERVER['HTTP_ACCEPT'] = '';

$_SERVER['HTTP_ACCEPT_CHARSET'] = 'iso-8859-1,*,utf-8';

$_SERVER['HTTP_ACCEPT_ENCODING'] = 'gzip';

$_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'en';

$_SERVER['HTTP_CONNECTION'] = 'Keep-Alive';

$_SERVER['HTTP_HOST'] = '';

$_SERVER['HTTP_REFERER'] = '';

$_SERVER['HTTP_USER_AGENT'] = 'Mozilla/4.5 [en] (X11; U; Linux 2.2.9 i586).';

$_SERVER['HTTPS'] = '';

$_SERVER['REMOTE_ADDR'] = '';

$_SERVER['REMOTE_HOST'] = '';

$_SERVER['REMOTE_PORT'] = '';

$_SERVER['REMOTE_USER'] = '';

$_SERVER['REDIRECT_REMOTE_USER'] = '';

$_SERVER['SCRIPT_FILENAME'] = '';

$_SERVER['SERVER_ADMIN'] = '';

$_SERVER['SERVER_PORT'] = '80';

$_SERVER['SERVER_SIGNATURE'] = '';

$_SERVER['PATH_TRANSLATED'] = '';

$_SERVER['SCRIPT_NAME'] = '';

$_SERVER['REQUEST_URI'] = '/index.html';

$_SERVER['PHP_AUTH_DIGEST'] = '';

$_SERVER['PHP_AUTH_USER'] = '';

$_SERVER['PHP_AUTH_PW'] = '';

$_SERVER['AUTH_TYPE'] = '';

$_SERVER['PATH_INFO'] = '';

$_SERVER['ORIG_PATH_INFO'] = '';

/**
 *  @xglobal $_SESSION array
 *  @xglobal $HTTP_SESSION_VARS array
 *
 * Variables which are currently registered to a script's session.
 * Analogous to the old $HTTP_SESSION_VARS array (which is still available, but deprecated).
 * See the Session handling functions section for more information.
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$_SESSION = [];
/**
 * @deprecated 4.1
 * @removed 5.4
 */
$HTTP_SESSION_VARS = [];

/**
 * <div id="reserved.variables.argc" class="refentry"> <div class="refnamediv">  <h1 class="refname">\$argc</h1>  <p class="refpurpose"><span class="refname">\$argc</span> — <span class="dc-title">传递给脚本的参数数目</span></p> </div>  <div class="refsect1 description" id="refsect1-reserved.variables.argc-description">  <h3 class="title">说明</h3>  <p class="para">   包含当运行于<a href="https://php.net/manual/zh/features.commandline.php" class="link">命令行</a>下时传递给当前脚本的参数的数目。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    脚本的文件名总是作为参数传递给当前脚本，因此 <var class="varname">\$argc</var> 的最小值为 <span class="literal">1</span>。   </span>  </p></blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    这个变量仅在 <a href="https://php.net/manual/zh/ini.core.php#ini.register-argc-argv" class="link">register_argc_argv</a> 打开时可用。   </span>  </p></blockquote> </div>  <div class="refsect1 examples" id="refsect1-reserved.variables.argc-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="variable.argc.basic">    <p><strong>示例 #1 <var class="varname">\$argc</var> 范例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$argc</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     当使用这个命令执行: php script.php arg1 arg2 arg3    </p></div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">int(4)</blockquote></div>    </div>   </div>   </div>  <div class="refsect1 notes" id="refsect1-reserved.variables.argc-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    也可以在 <var class="varname"><a href="https://php.net/manual/zh/reserved.variables.server.php" class="classname">\$_SERVER['argc']</a></var> 中获取。   </p>  </blockquote> </div><div class="refsect1 seealso" id="refsect1-reserved.variables.argc-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link getopt()} - 从命令行参数列表中获取选项</span></li>    <li><a href="https://php.net/manual/zh/reserved.variables.argv.php" class="link"><var class="varname"><a href="https://php.net/manual/zh/reserved.variables.argv.php" class="classname">\$argv</a></var></a></li>   </ul>   </div></div>
 * 
 * @xglobal $argc int
 * @type int<1, max>
 *
 * The number of arguments passed to script
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$argc = 0;

/**
 * <div id="reserved.variables.argv" class="refentry"> <div class="refnamediv">  <h1 class="refname">\$argv</h1>  <p class="refpurpose"><span class="refname">\$argv</span> — <span class="dc-title">传递给脚本的参数数组</span></p> </div>  <div class="refsect1 description" id="refsect1-reserved.variables.argv-description">  <h3 class="title">说明</h3>  <p class="para">   包含当运行于<a href="https://php.net/manual/zh/features.commandline.php" class="link">命令行</a>下时传递给当前脚本的参数的数组。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    第一个参数总是当前脚本的文件名，因此 <var class="varname">\$argv[0]</var> 就是脚本文件名。   </span>  </p></blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    这个变量仅在 <a href="https://php.net/manual/zh/ini.core.php#ini.register-argc-argv" class="link">register_argc_argv</a> 打开时可用。   </span>  </p></blockquote>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    要测试脚本是否从命令行运行，应使用 <span class="function">{@link php_sapi_name()}</span>，而不是检查是否设置了    <var class="varname">\$argv</var> 或 <var class="varname"><a href="https://php.net/manual/zh/reserved.variables.server.php" class="classname">\$_SERVER['argv']</a></var>。   </p>  </div> </div>  <div class="refsect1 examples" id="refsect1-reserved.variables.argv-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="variable.argv.basic">    <p><strong>示例 #1 <var class="varname">\$argv</var> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$argv</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     当使用这个命令执行：php script.php arg1 arg2 arg3    </p></div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(4)&nbsp;{<br>&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;string(10)&nbsp;"script.php"<br>&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;string(4)&nbsp;"arg1"<br>&nbsp;&nbsp;[2]=&gt;<br>&nbsp;&nbsp;string(4)&nbsp;"arg2"<br>&nbsp;&nbsp;[3]=&gt;<br>&nbsp;&nbsp;string(4)&nbsp;"arg3"<br>}</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-reserved.variables.argv-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    也可以在 <var class="varname"><a href="https://php.net/manual/zh/reserved.variables.server.php" class="classname">\$_SERVER['argv']</a></var> 中获取。   </p>  </blockquote> </div>  <div class="refsect1 seealso" id="refsect1-reserved.variables.argv-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link getopt()} - 从命令行参数列表中获取选项</span></li>    <li><a href="https://php.net/manual/zh/reserved.variables.argc.php" class="link"><var class="varname"><a href="https://php.net/manual/zh/reserved.variables.argc.php" class="classname">\$argc</a></var></a></li>   </ul>   </div></div>
 * 
 *  @xglobal $argv array
 *
 * Array of arguments passed to script
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$argv = [1 + 1 => "a" . "b"];

/**
 * @xglobal $HTTP_RAW_POST_DATA string
 *
 * Raw POST data
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 *
 * @deprecated 5.6 Deprecated as of PHP 5.6.0. Use the php://input stream instead.
 * @removed 7.0
 */
$HTTP_RAW_POST_DATA = '';

/**
 * <div id="reserved.variables.httpresponseheader" class="refentry"> <div class="refnamediv">  <h1 class="refname">\$http_response_header</h1>  <p class="refpurpose"><span class="refname">\$http_response_header</span> — <span class="dc-title">HTTP 响应头</span></p> </div> <div class="refsect1 description" id="refsect1-reserved.variables.httpresponseheader-description">  <h3 class="title">说明</h3>  <p class="para">   <var class="varname">\$http_response_header</var> <span class="type" style="color:#EAB766">数组</span>与 <span class="function">{@link get_headers()}</span> 函数类似。当使用<a href="https://php.net/manual/zh/wrappers.http.php" class="link">HTTP 包装器</a>时，<var class="varname">\$http_response_header</var> 将会被 HTTP 响应头信息填充。<var class="varname">\$http_response_header</var> 将被创建于<a href="https://php.net/manual/zh/language.variables.scope.php" class="link">局部作用域</a>中。  </p> </div>  <div class="refsect1 examples" id="refsect1-reserved.variables.httpresponseheader-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="variable.httpresponseheader.basic">    <p><strong>示例 #1 <var class="varname">\$http_response_header</var> 范例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">function </span><span style="color: #9876AA">get_contents</span><span style="color: #007700">() {<br>  </span><span style="color: #9876AA">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://example.com"</span><span style="color: #007700">);<br>  </span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$http_response_header</span><span style="color: #007700">); </span><span style="color: #FF8000">// 变量在本地作用域中填充<br></span><span style="color: #007700">}<br></span><span style="color: #9876AA">get_contents</span><span style="color: #007700">();<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$http_response_header</span><span style="color: #007700">); </span><span style="color: #FF8000">// 调用 get_contents() 不会在函数作用域之外填充变量<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(9)&nbsp;{<br>&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;string(15)&nbsp;"HTTP/1.1&nbsp;200&nbsp;OK"<br>&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;string(35)&nbsp;"Date:&nbsp;Sat,&nbsp;12&nbsp;Apr&nbsp;2008&nbsp;17:30:38&nbsp;GMT"<br>&nbsp;&nbsp;[2]=&gt;<br>&nbsp;&nbsp;string(29)&nbsp;"Server:&nbsp;Apache/2.2.3&nbsp;(CentOS)"<br>&nbsp;&nbsp;[3]=&gt;<br>&nbsp;&nbsp;string(44)&nbsp;"Last-Modified:&nbsp;Tue,&nbsp;15&nbsp;Nov&nbsp;2005&nbsp;13:24:10&nbsp;GMT"<br>&nbsp;&nbsp;[4]=&gt;<br>&nbsp;&nbsp;string(27)&nbsp;"ETag:&nbsp;"280100-1b6-80bfd280""<br>&nbsp;&nbsp;[5]=&gt;<br>&nbsp;&nbsp;string(20)&nbsp;"Accept-Ranges:&nbsp;bytes"<br>&nbsp;&nbsp;[6]=&gt;<br>&nbsp;&nbsp;string(19)&nbsp;"Content-Length:&nbsp;438"<br>&nbsp;&nbsp;[7]=&gt;<br>&nbsp;&nbsp;string(17)&nbsp;"Connection:&nbsp;close"<br>&nbsp;&nbsp;[8]=&gt;<br>&nbsp;&nbsp;string(38)&nbsp;"Content-Type:&nbsp;text/html;&nbsp;charset=UTF-8"<br>}<br><br>Warning:&nbsp;Undefined&nbsp;variable&nbsp;\$http_response_header<br>NULL</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-reserved.variables.httpresponseheader-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link http_get_last_response_headers()} - Retrieve last HTTP response headers</span></li>   <li><span class="function">{@link http_clear_last_response_headers()} - Clears the stored HTTP response headers</span></li>  </ul> </div></div>
 * 
 * @xglobal $http_response_header array
 *
 * HTTP response headers
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 */
$http_response_header = [];

/**
 * <div id="reserved.variables.phperrormsg" class="refentry"> <div class="refnamediv">  <h1 class="refname">\$php_errormsg</h1>  <p class="refpurpose"><span class="refname">\$php_errormsg</span> — <span class="dc-title">前一个错误信息</span></p> </div> <div id="reserved.variables.phperrormsg-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara"> 本特性自 PHP 7.2.0 起<em>废弃</em>，并且自 PHP 8.0.0 起被<em>移除</em>。强烈建议不要使用本特性。</p></div>  <p class="simpara">   用 <span class="function">{@link error_get_last()}</span> 函数代替。   </p> </div>  <div class="refsect1 description" id="refsect1-reserved.variables.phperrormsg-description">  <h3 class="title">说明</h3>  <p class="para">   <var class="varname">\$php_errormsg</var> 变量包含由 PHP 生成的最新错误信息。这个变量只在错误发生的作用域内可用，并且要求 <a href="https://php.net/manual/zh/errorfunc.configuration.php#ini.track-errors" class="link">track_errors</a> 配置项是开启的（默认是关闭的）。  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    如果用户定义了错误处理句柄（<span class="function">{@link set_error_handler()}</span>）并且返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 的时候，<var class="varname">\$php_errormsg</var> 就会被设置。   </p>  </div> </div> <div class="refsect1 changelog" id="refsect1-reserved.variables.phperrormsg-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        可使 <var class="varname">\$php_errormsg</var> 可用的         <a href="https://php.net/manual/zh/errorfunc.configuration.php#ini.track-errors" class="link">track_errors</a> 指令已被删除。       </td>      </tr>      <tr>       <td>7.2.0</td>       <td>        可使 <var class="varname">\$php_errormsg</var> 可用的         <a href="https://php.net/manual/zh/errorfunc.configuration.php#ini.track-errors" class="link">track_errors</a> 指令已被弃用。       </td>      </tr>     </tbody>       </table>   </div>  <div class="refsect1 examples" id="refsect1-reserved.variables.phperrormsg-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="variable.phperrormsg.basic">    <p><strong>示例 #1 <var class="varname">\$php_errormsg</var> 范例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">@</span><span style="color: #9876AA">strpos</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">\$php_errormsg</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Wrong&nbsp;parameter&nbsp;count&nbsp;for&nbsp;strpos()</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-reserved.variables.phperrormsg-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link error_get_last()} - 获取最后发生的错误</span></li>   </ul>   </div> </div>
 * 
 * @xglobal $php_errormsg string
 *  The previous error message
 *
 * <p><a href="https://secure.php.net/manual/en/reserved.variables.php">
 * https://secure.php.net/manual/en/reserved.variables.php</a>
 * @deprecated 7.2
 */
$php_errormsg = '';
