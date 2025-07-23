<?php

// Start of interbase v.

/**
 * <div id="function.ibase-connect" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_connect</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_connect</span> — <span class="dc-title">Open a connection to a database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-connect-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_connect</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$database</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$username</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$password</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$charset</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$buffers</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$dialect</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$role</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$sync</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <p class="para rdfs-comment">   Establishes a connection to an Firebird/InterBase server.  </p>  <p class="para">   In case a second call is made to <span class="function"><strong>ibase_connect()</strong></span> with   the same arguments, no new link will be established, but instead, the link   identifier of the already opened link will be returned. The link to the   server will be closed as soon as the execution of the script ends, unless   it's closed earlier by explicitly calling <span class="function">{@link ibase_close()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-connect-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">database</span></dt>     <dd>      <p class="para">       The <span class="parameter" style="color:#3A95FF">database</span> argument has to be a valid path to       database file on the server it resides on. If the server is not local,       it must be prefixed with either 'hostname:' (TCP/IP), 'hostname/port:'       (TCP/IP with interbase server on custom TCP port), '//hostname/'       (NetBEUI), depending on the connection       protocol used.         </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">username</span></dt>     <dd>      <p class="para">       The user name. Can be set with the       <span class="literal">ibase.default_user</span> <var class="filename">php.ini</var> directive.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">password</span></dt>     <dd>      <p class="para">       The password for <span class="parameter" style="color:#3A95FF">username</span>. Can be set with the       <span class="literal">ibase.default_password</span> <var class="filename">php.ini</var> directive.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">charset</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">charset</span> is the default character set for a       database.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">buffers</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">buffers</span> is the number of database buffers to       allocate for the server-side cache. If 0 or omitted, server chooses       its own default.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">dialect</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">dialect</span> selects the default SQL dialect for any       statement executed within a connection, and it defaults to the highest       one supported by client libraries.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">role</span></dt>     <dd>      <p class="para">       Functional only with InterBase 5 and up.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">sync</span></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-connect-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an Firebird/InterBase link identifier on success, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.  </p> </div> <div class="refsect1 errors" id="refsect1-function.ibase-connect-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   If you get some error like "arithmetic exception, numeric overflow, or   string truncation. Cannot transliterate character between character sets"   (this occurs when you try use some character with accents) when using this   and after <span class="function">{@link ibase_query()}</span> you must set the character set   (i.e. ISO8859_1 or your current character set).  </p> </div> <div class="refsect1 examples" id="refsect1-function.ibase-connect-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1299">    <p><strong>示例 #1 <span class="function"><strong>ibase_connect()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$host </span><span style="color: #007700">= </span><span style="color: #DD0000">'localhost:/path/to/your.gdb'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$dbh </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_connect</span><span style="color: #007700">(</span><span style="color: #9876AA">\$host</span><span style="color: #007700">, </span><span style="color: #9876AA">\$username</span><span style="color: #007700">, </span><span style="color: #9876AA">\$password</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT * FROM tblname'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$sth </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_query</span><span style="color: #007700">(</span><span style="color: #9876AA">\$dbh</span><span style="color: #007700">, </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">);<br>while (</span><span style="color: #9876AA">\$row </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_fetch_object</span><span style="color: #007700">(</span><span style="color: #9876AA">\$sth</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #9876AA">\$row</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">email</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">ibase_free_result</span><span style="color: #007700">(</span><span style="color: #9876AA">\$sth</span><span style="color: #007700">);<br></span><span style="color: #9876AA">ibase_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$dbh</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.ibase-connect-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_pconnect()} - Open a persistent connection to an InterBase database</span></li>    <li><span class="function">{@link ibase_close()} - Close a connection to an InterBase database</span></li>   </ul>   </div></div>
 * 
 * Open a connection to an InterBase database
 * @link https://php.net/manual/zh/function.ibase-connect.php
 * @param string $database [optional] <p>
 * The database argument has to be a valid path to
 * database file on the server it resides on. If the server is not local,
 * it must be prefixed with either 'hostname:' (TCP/IP), '//hostname/'
 * (NetBEUI) or 'hostname@' (IPX/SPX), depending on the connection
 * protocol used.
 * </p>
 * @param string $username [optional] <p>
 * The user name. Can be set with the
 * ibase.default_user &php.ini; directive.
 * </p>
 * @param string $password [optional] <p>
 * The password for username. Can be set with the
 * ibase.default_password &php.ini; directive.
 * </p>
 * @param string $charset [optional] <p>
 * charset is the default character set for a
 * database.
 * </p>
 * @param int $buffers [optional] <p>
 * buffers is the number of database buffers to
 * allocate for the server-side cache. If 0 or omitted, server chooses
 * its own default.
 * </p>
 * @param int $dialect [optional] <p>
 * dialect selects the default SQL dialect for any
 * statement executed within a connection, and it defaults to the highest
 * one supported by client libraries. Functional only with InterBase 6
 * and up.
 * </p>
 * @param string $role [optional] <p>
 * Functional only with InterBase 5 and up.
 * </p>
 * @param int $sync [optional] <p>
 * </p>
 * @return resource|false an InterBase link identifier on success, or false on error.
 */
function ibase_connect($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null, $sync = null) {}

/**
 * <div id="function.ibase-pconnect" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_pconnect</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_pconnect</span> — <span class="dc-title">Open a persistent connection to an InterBase database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-pconnect-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_pconnect</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$database</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$username</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$password</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$charset</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$buffers</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$dialect</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$role</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$sync</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <p class="para rdfs-comment">   Opens a persistent connection to an InterBase database.  </p>  <p class="para">   <span class="function"><strong>ibase_pconnect()</strong></span> acts very much like   <span class="function">{@link ibase_connect()}</span> with two major differences.  </p>  <p class="para">   First, when connecting, the function will first try to find a (persistent)   link that's already opened with the same parameters. If one is found, an   identifier for it will be returned instead of opening a new connection.  </p>  <p class="para">   Second, the connection to the InterBase server will not be closed when the   execution of the script ends. Instead, the link will remain open for   future use (<span class="function">{@link ibase_close()}</span> will not close links   established by <span class="function"><strong>ibase_pconnect()</strong></span>). This type of link is   therefore called 'persistent'.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-pconnect-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">database</span></dt>     <dd>      <p class="para">       The <span class="parameter" style="color:#3A95FF">database</span> argument has to be a valid path to       database file on the server it resides on. If the server is not local,       it must be prefixed with either 'hostname:' (TCP/IP), '//hostname/'       (NetBEUI) or 'hostname@' (IPX/SPX), depending on the connection       protocol used.         </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">username</span></dt>     <dd>      <p class="para">       The user name. Can be set with the       <span class="literal">ibase.default_user</span> <var class="filename">php.ini</var> directive.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">password</span></dt>     <dd>      <p class="para">       The password for <span class="parameter" style="color:#3A95FF">username</span>. Can be set with the       <span class="literal">ibase.default_password</span> <var class="filename">php.ini</var> directive.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">charset</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">charset</span> is the default character set for a       database.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">buffers</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">buffers</span> is the number of database buffers to       allocate for the server-side cache. If 0 or omitted, server chooses       its own default.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">dialect</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">dialect</span> selects the default SQL dialect for any       statement executed within a connection, and it defaults to the highest       one supported by client libraries. Functional only with InterBase 6       and up.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">role</span></dt>     <dd>      <p class="para">       Functional only with InterBase 5 and up.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">sync</span></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-pconnect-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an InterBase link identifier on success, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-pconnect-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_close()} - Close a connection to an InterBase database</span></li>    <li><span class="function">{@link ibase_connect()} - Open a connection to a database</span></li>   </ul>   </div></div>
 * 
 * Open a persistent connection to an InterBase database
 * @link https://php.net/manual/zh/function.ibase-pconnect.php
 * @param string $database [optional] <p>
 * The database argument has to be a valid path to
 * database file on the server it resides on. If the server is not local,
 * it must be prefixed with either 'hostname:' (TCP/IP), '//hostname/'
 * (NetBEUI) or 'hostname@' (IPX/SPX), depending on the connection
 * protocol used.
 * </p>
 * @param string $username [optional] <p>
 * The user name. Can be set with the
 * ibase.default_user &php.ini; directive.
 * </p>
 * @param string $password [optional] <p>
 * The password for username. Can be set with the
 * ibase.default_password &php.ini; directive.
 * </p>
 * @param string $charset [optional] <p>
 * charset is the default character set for a
 * database.
 * </p>
 * @param int $buffers [optional] <p>
 * buffers is the number of database buffers to
 * allocate for the server-side cache. If 0 or omitted, server chooses
 * its own default.
 * </p>
 * @param int $dialect [optional] <p>
 * dialect selects the default SQL dialect for any
 * statement executed within a connection, and it defaults to the highest
 * one supported by client libraries. Functional only with InterBase 6
 * and up.
 * </p>
 * @param string $role [optional] <p>
 * Functional only with InterBase 5 and up.
 * </p>
 * @param int $sync [optional] <p>
 * </p>
 * @return resource|false an InterBase link identifier on success, or false on error.
 */
function ibase_pconnect($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null, $sync = null) {}

/**
 * <div id="function.ibase-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_close</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_close</span> — <span class="dc-title">Close a connection to an InterBase database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-close-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_close</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$connection_id</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Closes the link to an InterBase database that's associated with   a connection id returned from <span class="function">{@link ibase_connect()}</span>.   Default transaction on link is committed, other transactions are   rolled back.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-close-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">connection_id</span></dt>     <dd>      <p class="para">       An InterBase link identifier returned from       <span class="function">{@link ibase_connect()}</span>. If omitted, the last opened link       is assumed.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-close-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_connect()} - Open a connection to a database</span></li>    <li><span class="function">{@link ibase_pconnect()} - Open a persistent connection to an InterBase database</span></li>   </ul>   </div></div>
 * 
 * Close a connection to an InterBase database
 * @link https://php.net/manual/zh/function.ibase-close.php
 * @param resource $connection_id [optional] <p>
 * An InterBase link identifier returned from
 * ibase_connect. If omitted, the last opened link
 * is assumed.
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_close($connection_id = null) {}

/**
 * <div id="function.ibase-drop-db" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_drop_db</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_drop_db</span> — <span class="dc-title">Drops a database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-drop-db-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_drop_db</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$connection</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   This functions drops a database that was opened by either <span class="function">{@link ibase_connect()}</span>   or <span class="function">{@link ibase_pconnect()}</span>. The database is closed and deleted from the server.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-drop-db-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">connection</span></dt>     <dd>      <p class="para">       An InterBase link identifier. If omitted, the last opened link is       assumed.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-drop-db-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-drop-db-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_connect()} - Open a connection to a database</span></li>    <li><span class="function">{@link ibase_pconnect()} - Open a persistent connection to an InterBase database</span></li>   </ul>   </div></div>
 * 
 * Drops a database
 * @link https://php.net/manual/zh/function.ibase-drop-db.php
 * @param resource $connection [optional] <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_drop_db($connection = null) {}

/**
 * <div id="function.ibase-query" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_query</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_query</span> — <span class="dc-title">Execute a query on an InterBase database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-query-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_query</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$query</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$bind_args</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <p class="simpara">   Performs a query on an InterBase database.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-query-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">link_identifier</span></dt>     <dd>      <p class="para">       An InterBase link identifier. If omitted, the last opened link is       assumed.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">query</span></dt>     <dd>      <p class="para">       An InterBase query.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">bind_args</span></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-query-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   If the query raises an error, returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>. If it is successful and   there is a (possibly empty) result set (such as with a SELECT query),   returns a result identifier. If the query was successful and there were   no results, returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>.  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    In PHP 5.0.0 and up, this function will return the number of rows    affected by the query for INSERT, UPDATE and DELETE statements. In order    to retain backward compatibility, it will return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> for these    statements if the query succeeded without affecting any rows.   </p>  </blockquote> </div> <div class="refsect1 errors" id="refsect1-function.ibase-query-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   If you get some error like "arithmetic exception, numeric overflow, or   string truncation. Cannot transliterate character between character sets"   (this occurs when you try use some character with accents) when using this   and after <span class="function"><strong>ibase_query()</strong></span> you must set the character set   (i.e. ISO8859_1 or your current character set).  </p> </div> <div class="refsect1 examples" id="refsect1-function.ibase-query-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1305">    <p><strong>示例 #1 <span class="function"><strong>ibase_query()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$host </span><span style="color: #007700">= </span><span style="color: #DD0000">'localhost:/path/to/your.gdb'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$dbh </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_connect</span><span style="color: #007700">(</span><span style="color: #9876AA">\$host</span><span style="color: #007700">, </span><span style="color: #9876AA">\$username</span><span style="color: #007700">, </span><span style="color: #9876AA">\$password</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT * FROM tblname'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$sth </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_query</span><span style="color: #007700">(</span><span style="color: #9876AA">\$dbh</span><span style="color: #007700">, </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">) or die(</span><span style="color: #9876AA">ibase_errmsg</span><span style="color: #007700">());<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.ibase-query-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_errmsg()} - Return error messages</span></li>    <li><span class="function">{@link ibase_fetch_row()} - Fetch a row from an InterBase database</span></li>    <li><span class="function">{@link ibase_fetch_object()} - Get an object from a InterBase database</span></li>    <li><span class="function">{@link ibase_free_result()} - Free a result set</span></li>   </ul>   </div></div>
 * 
 * Execute a query on an InterBase database
 * @link https://php.net/manual/zh/function.ibase-query.php
 * @param resource $link_identifier [optional] <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @param string $query <p>
 * An InterBase query.
 * </p>
 * @param int $bind_args [optional] <p>
 * </p>
 * @return resource|bool If the query raises an error, returns false. If it is successful and
 * there is a (possibly empty) result set (such as with a SELECT query),
 * returns a result identifier. If the query was successful and there were
 * no results, returns true.
 * </p>
 * <p>
 * In PHP 5.0.0 and up, this function will return the number of rows
 * affected by the query for INSERT, UPDATE and DELETE statements. In order
 * to retain backward compatibility, it will return true for these
 * statements if the query succeeded without affecting any rows.
 */
function ibase_query($link_identifier = null, $query, $bind_args = null) {}

/**
 * <div id="function.ibase-fetch-row" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_fetch_row</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_fetch_row</span> — <span class="dc-title">Fetch a row from an InterBase database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-fetch-row-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_fetch_row</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$result_identifier</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$fetch_flag</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>ibase_fetch_row()</strong></span> fetches one row of data from the   given result set.  </p>  <p class="para">   Subsequent calls to <span class="function"><strong>ibase_fetch_row()</strong></span>   return the next row in the result set, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if there are no   more rows.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-fetch-row-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">result_identifier</span></dt>     <dd>      <p class="para">       An InterBase result identifier.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">fetch_flag</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">fetch_flag</span> is a combination of the constants       <strong><span>IBASE_TEXT</span></strong> and <strong><span>IBASE_UNIXTIME</span></strong>       ORed together. Passing <strong><span>IBASE_TEXT</span></strong> will cause this       function to return BLOB contents instead of BLOB ids. Passing       <strong><span>IBASE_UNIXTIME</span></strong> will cause this function to return       date/time values as Unix timestamps instead of as formatted strings.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-fetch-row-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array that corresponds to the fetched row, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if there   are no more rows. Each result column is stored in an array offset,   starting at offset 0.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-fetch-row-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_fetch_assoc()} - Fetch a result row from a query as an associative array</span></li>    <li><span class="function">{@link ibase_fetch_object()} - Get an object from a InterBase database</span></li>   </ul>   </div></div>
 * 
 * Fetch a row from an InterBase database
 * @link https://php.net/manual/zh/function.ibase-fetch-row.php
 * @param resource $result_identifier <p>
 * An InterBase result identifier.
 * </p>
 * @param int $fetch_flag [optional] <p>
 * fetch_flag is a combination of the constants
 * IBASE_TEXT and IBASE_UNIXTIME
 * ORed together. Passing IBASE_TEXT will cause this
 * function to return BLOB contents instead of BLOB ids. Passing
 * IBASE_UNIXTIME will cause this function to return
 * date/time values as Unix timestamps instead of as formatted strings.
 * </p>
 * @return array|false an array that corresponds to the fetched row, or false if there
 * are no more rows. Each result column is stored in an array offset,
 * starting at offset 0.
 */
function ibase_fetch_row($result_identifier, $fetch_flag = null) {}

/**
 * <div id="function.ibase-fetch-assoc" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_fetch_assoc</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_fetch_assoc</span> — <span class="dc-title">Fetch a result row from a query as an associative array</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-fetch-assoc-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_fetch_assoc</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$result</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$fetch_flag</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Fetch a result row from a query as an associative array.  </p>  <p class="para">   <span class="function"><strong>ibase_fetch_assoc()</strong></span> fetches one row of data from the   <span class="parameter" style="color:#3A95FF">result</span>.  If two or more columns of the result   have the same field names, the last column will take precedence. To   access the other column(s) of the same name, you either need to access   the result with numeric indices by using   <span class="function">{@link ibase_fetch_row()}</span> or use alias names in your query.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-fetch-assoc-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">result</span></dt>     <dd>      <p class="para">       The result handle.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">fetch_flag</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">fetch_flag</span> is a combination of the constants       <strong><span>IBASE_TEXT</span></strong> and <strong><span>IBASE_UNIXTIME</span></strong>       ORed together. Passing <strong><span>IBASE_TEXT</span></strong> will cause this       function to return BLOB contents instead of BLOB ids. Passing       <strong><span>IBASE_UNIXTIME</span></strong> will cause this function to return       date/time values as Unix timestamps instead of as formatted strings.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-fetch-assoc-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an associative array that corresponds to the fetched row.   Subsequent calls will return the next row in the result set, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if   there are no more rows.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-fetch-assoc-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_fetch_row()} - Fetch a row from an InterBase database</span></li>    <li><span class="function">{@link ibase_fetch_object()} - Get an object from a InterBase database</span></li>   </ul>   </div></div>
 * 
 * Fetch a result row from a query as an associative array
 * @link https://php.net/manual/zh/function.ibase-fetch-assoc.php
 * @param resource $result <p>
 * The result handle.
 * </p>
 * @param int $fetch_flag [optional] <p>
 * fetch_flag is a combination of the constants
 * IBASE_TEXT and IBASE_UNIXTIME
 * ORed together. Passing IBASE_TEXT will cause this
 * function to return BLOB contents instead of BLOB ids. Passing
 * IBASE_UNIXTIME will cause this function to return
 * date/time values as Unix timestamps instead of as formatted strings.
 * </p>
 * @return array|false an associative array that corresponds to the fetched row.
 * Subsequent calls will return the next row in the result set, or false if
 * there are no more rows.
 */
function ibase_fetch_assoc($result, $fetch_flag = null) {}

/**
 * <div id="function.ibase-fetch-object" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_fetch_object</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_fetch_object</span> — <span class="dc-title">Get an object from a InterBase database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-fetch-object-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_fetch_object</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$result_id</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$fetch_flag</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.object.php" class="type object" style="color:#EAB766">object</a></span></div>  <p class="para rdfs-comment">   Fetches a row as a pseudo-object from a given result identifier.  </p>  <p class="para">   Subsequent calls to <span class="function"><strong>ibase_fetch_object()</strong></span>   return the next row in the result set.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-fetch-object-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">result_id</span></dt>     <dd>      <p class="para">       An InterBase result identifier obtained either by       <span class="function">{@link ibase_query()}</span> or <span class="function">{@link ibase_execute()}</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">fetch_flag</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">fetch_flag</span> is a combination of the constants       <strong><span>IBASE_TEXT</span></strong> and <strong><span>IBASE_UNIXTIME</span></strong>       ORed together. Passing <strong><span>IBASE_TEXT</span></strong> will cause this       function to return BLOB contents instead of BLOB ids. Passing       <strong><span>IBASE_UNIXTIME</span></strong> will cause this function to return       date/time values as Unix timestamps instead of as formatted strings.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-fetch-object-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an object with the next row information, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if there are   no more rows.  </p> </div> <div class="refsect1 examples" id="refsect1-function.ibase-fetch-object-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1301">    <p><strong>示例 #1 <span class="function"><strong>ibase_fetch_object()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$dbh </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_connect</span><span style="color: #007700">(</span><span style="color: #9876AA">\$host</span><span style="color: #007700">, </span><span style="color: #9876AA">\$username</span><span style="color: #007700">, </span><span style="color: #9876AA">\$password</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #DD0000">'SELECT * FROM tblname'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$sth </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_query</span><span style="color: #007700">(</span><span style="color: #9876AA">\$dbh</span><span style="color: #007700">, </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">);<br>while (</span><span style="color: #9876AA">\$row </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_fetch_object</span><span style="color: #007700">(</span><span style="color: #9876AA">\$sth</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #9876AA">\$row</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">email </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">ibase_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$dbh</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>      </div> <div class="refsect1 seealso" id="refsect1-function.ibase-fetch-object-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_fetch_row()} - Fetch a row from an InterBase database</span></li>    <li><span class="function">{@link ibase_fetch_assoc()} - Fetch a result row from a query as an associative array</span></li>   </ul>   </div></div>
 * 
 * Get an object from a InterBase database
 * @link https://php.net/manual/zh/function.ibase-fetch-object.php
 * @param resource $result_id <p>
 * An InterBase result identifier obtained either by
 * ibase_query or ibase_execute.
 * </p>
 * @param int $fetch_flag [optional] <p>
 * fetch_flag is a combination of the constants
 * IBASE_TEXT and IBASE_UNIXTIME
 * ORed together. Passing IBASE_TEXT will cause this
 * function to return BLOB contents instead of BLOB ids. Passing
 * IBASE_UNIXTIME will cause this function to return
 * date/time values as Unix timestamps instead of as formatted strings.
 * </p>
 * @return object|false an object with the next row information, or false if there are
 * no more rows.
 */
function ibase_fetch_object($result_id, $fetch_flag = null) {}

/**
 * <div id="function.ibase-free-result" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_free_result</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_free_result</span> — <span class="dc-title">Free a result set</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-free-result-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_free_result</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$result_identifier</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Frees a result set.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-free-result-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">result_identifier</span></dt>     <dd>      <p class="para">       A result set created by <span class="function">{@link ibase_query()}</span> or       <span class="function">{@link ibase_execute()}</span>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-free-result-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Free a result set
 * @link https://php.net/manual/zh/function.ibase-free-result.php
 * @param resource $result_identifier <p>
 * A result set created by ibase_query or
 * ibase_execute.
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_free_result($result_identifier) {}

/**
 * <div id="function.ibase-name-result" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_name_result</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_name_result</span> — <span class="dc-title">Assigns a name to a result set</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-name-result-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_name_result</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$result</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   This function assigns a name to a result set. This name can be used later in   UPDATE|DELETE ... WHERE CURRENT OF <span class="parameter" style="color:#3A95FF">name</span> statements.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-name-result-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">result</span></dt>     <dd>      <p class="para">       An InterBase result set.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">name</span></dt>     <dd>      <p class="para">       The name to be assigned.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-name-result-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.ibase-name-result-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1303">    <p><strong>示例 #1 <span class="function"><strong>ibase_name_result()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$result </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT field1,field2 FROM table FOR UPDATE"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">ibase_name_result</span><span style="color: #007700">(</span><span style="color: #9876AA">\$result</span><span style="color: #007700">, </span><span style="color: #DD0000">"my_cursor"</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$updateqry </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_prepare</span><span style="color: #007700">(</span><span style="color: #DD0000">"UPDATE table SET field2 = ? WHERE CURRENT OF my_cursor"</span><span style="color: #007700">);<br><br>for (</span><span style="color: #9876AA">\$i </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">; </span><span style="color: #9876AA">ibase_fetch_row</span><span style="color: #007700">(</span><span style="color: #9876AA">\$result</span><span style="color: #007700">); ++</span><span style="color: #9876AA">\$i</span><span style="color: #007700">) {<br>    </span><span style="color: #9876AA">ibase_execute</span><span style="color: #007700">(</span><span style="color: #9876AA">\$updateqry</span><span style="color: #007700">, </span><span style="color: #9876AA">\$i</span><span style="color: #007700">);<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.ibase-name-result-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_prepare()} - Prepare a query for later binding of parameter placeholders and execution</span></li>    <li><span class="function">{@link ibase_execute()} - Execute a previously prepared query</span></li>   </ul>   </div></div>
 * 
 * Assigns a name to a result set
 * @link https://php.net/manual/zh/function.ibase-name-result.php
 * @param resource $result <p>
 * An InterBase result set.
 * </p>
 * @param string $name <p>
 * The name to be assigned.
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_name_result($result, $name) {}

/**
 * <div id="function.ibase-prepare" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_prepare</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_prepare</span> — <span class="dc-title">Prepare a query for later binding of parameter placeholders and execution</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-prepare-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_prepare</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$query</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>ibase_prepare</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$query</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>ibase_prepare</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$trans</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$query</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <p class="simpara">   Prepare a query for later binding of parameter placeholders and execution   (via <span class="function">{@link ibase_execute()}</span>).  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-prepare-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">query</span></dt>     <dd>      <p class="para">       An InterBase query.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">link_identifier</span></dt>     <dd>      <p class="para">       An InterBase link identifier returned from       <span class="function">{@link ibase_connect()}</span>. If omitted, the last opened link       is assumed.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">trans</span></dt>     <dd>      <p class="para">       An InterBase transaction handle the query should be associated with.       If omitted, the default transaction of the connection is assumed.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-prepare-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a prepared query handle, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.  </p> </div></div>
 * 
 * Prepare a query for later binding of parameter placeholders and execution
 * @link https://php.net/manual/zh/function.ibase-prepare.php
 * @param string $query <p>
 * An InterBase query.
 * </p>
 * @return resource|false a prepared query handle, or false on error.
 */
function ibase_prepare($query) {}

/**
 * <div id="function.ibase-execute" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_execute</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_execute</span> — <span class="dc-title">Execute a previously prepared query</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-execute-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_execute</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$query</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">...\$values</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <p class="para rdfs-comment">   Execute a query prepared by <span class="function">{@link ibase_prepare()}</span>.   </p>  <p class="para">   This is a lot more effective than using <span class="function">{@link ibase_query()}</span>   if you are repeating a same kind of query several times with only   some parameters changing.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-execute-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">query</span></dt>     <dd>      <p class="para">       An InterBase query prepared by <span class="function">{@link ibase_prepare()}</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">values</span></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-execute-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   If the query raises an error, returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>. If it is successful and   there is a (possibly empty) result set (such as with a SELECT query),   returns a result identifier. If the query was successful and there were   no results, returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>.  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    This function returns the number of rows affected by    the query (if &gt; 0 and applicable to the statement type). A query that    succeeded, but did not affect any rows (e.g. an UPDATE of a non-existent    record) will return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>.   </p>  </blockquote> </div> <div class="refsect1 examples" id="refsect1-function.ibase-execute-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1300">    <p><strong>示例 #1 <span class="function"><strong>ibase_execute()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$dbh </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_connect</span><span style="color: #007700">(</span><span style="color: #9876AA">\$host</span><span style="color: #007700">, </span><span style="color: #9876AA">\$username</span><span style="color: #007700">, </span><span style="color: #9876AA">\$password</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$updates </span><span style="color: #007700">= array(<br>    </span><span style="color: #9876AA">1 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Eric'</span><span style="color: #007700">,<br>    </span><span style="color: #9876AA">5 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Filip'</span><span style="color: #007700">,<br>    </span><span style="color: #9876AA">7 </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Larry'<br></span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$query </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_prepare</span><span style="color: #007700">(</span><span style="color: #9876AA">\$dbh</span><span style="color: #007700">, </span><span style="color: #DD0000">"UPDATE FOO SET BAR = ? WHERE BAZ = ?"</span><span style="color: #007700">);<br><br>foreach (</span><span style="color: #9876AA">\$updates </span><span style="color: #007700">as </span><span style="color: #9876AA">\$baz </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">\$bar</span><span style="color: #007700">) {<br>    </span><span style="color: #9876AA">ibase_execute</span><span style="color: #007700">(</span><span style="color: #9876AA">\$query</span><span style="color: #007700">, </span><span style="color: #9876AA">\$bar</span><span style="color: #007700">, </span><span style="color: #9876AA">\$baz</span><span style="color: #007700">);<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.ibase-execute-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_query()} - Execute a query on an InterBase database</span></li>   </ul>   </div></div>
 * 
 * Execute a previously prepared query
 * @link https://php.net/manual/zh/function.ibase-execute.php
 * @param resource $query <p>
 * An InterBase query prepared by ibase_prepare.
 * </p>
 * @param mixed ...$bind_arg [optional] <p>
 * </p>
 * @return resource|bool If the query raises an error, returns false. If it is successful and
 * there is a (possibly empty) result set (such as with a SELECT query),
 * returns a result identifier. If the query was successful and there were
 * no results, returns true.
 * </p>
 * <p>
 * In PHP 5.0.0 and up, this function returns the number of rows affected by
 * the query (if > 0 and applicable to the statement type). A query that
 * succeeded, but did not affect any rows (e.g. an UPDATE of a non-existent
 * record) will return true.
 */
function ibase_execute($query, ...$bind_arg) {}

/**
 * <div id="function.ibase-free-query" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_free_query</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_free_query</span> — <span class="dc-title">Free memory allocated by a prepared query</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-free-query-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_free_query</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$query</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Frees a prepared query.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-free-query-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">query</span></dt>     <dd>      <p class="para">       A query prepared with <span class="function">{@link ibase_prepare()}</span>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-free-query-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Free memory allocated by a prepared query
 * @link https://php.net/manual/zh/function.ibase-free-query.php
 * @param resource $query <p>
 * A query prepared with ibase_prepare.
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_free_query($query) {}

/**
 * <div id="function.ibase-gen-id" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_gen_id</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_gen_id</span> — <span class="dc-title">Increments the named generator and returns its new value</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-gen-id-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_gen_id</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$generator</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$increment</span><span class="initializer"> = 1</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-gen-id-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns new generator value as integer, or as string if the value is too big.  </p> </div></div>
 * 
 * Increments the named generator and returns its new value
 * @link https://php.net/manual/zh/function.ibase-gen-id.php
 * @param string $generator
 * @param int $increment [optional]
 * @param resource $link_identifier [optional]
 * @return mixed new generator value as integer, or as string if the value is too big.
 */
function ibase_gen_id($generator, $increment = null, $link_identifier = null) {}

/**
 * <div id="function.ibase-num-fields" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_num_fields</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_num_fields</span> — <span class="dc-title">Get the number of fields in a result set</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-num-fields-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_num_fields</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$result_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Get the number of fields in a result set.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-num-fields-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">result_id</span></dt>     <dd>      <p class="para">       An InterBase result identifier.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-num-fields-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of fields as an integer.  </p> </div> <div class="refsect1 examples" id="refsect1-function.ibase-num-fields-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1304">    <p><strong>示例 #1 <span class="function"><strong>ibase_num_fields()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$rs </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT * FROM tablename"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$coln </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_num_fields</span><span style="color: #007700">(</span><span style="color: #9876AA">\$rs</span><span style="color: #007700">);<br>for (</span><span style="color: #9876AA">\$i </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">; </span><span style="color: #9876AA">\$i </span><span style="color: #007700">&lt; </span><span style="color: #9876AA">\$coln</span><span style="color: #007700">; </span><span style="color: #9876AA">\$i</span><span style="color: #007700">++) {<br>    </span><span style="color: #9876AA">\$col_info </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_field_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$rs</span><span style="color: #007700">, </span><span style="color: #9876AA">\$i</span><span style="color: #007700">);<br>    echo </span><span style="color: #DD0000">"name: " </span><span style="color: #007700">. </span><span style="color: #9876AA">\$col_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>    echo </span><span style="color: #DD0000">"alias: " </span><span style="color: #007700">. </span><span style="color: #9876AA">\$col_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'alias'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>    echo </span><span style="color: #DD0000">"relation: " </span><span style="color: #007700">. </span><span style="color: #9876AA">\$col_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'relation'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>    echo </span><span style="color: #DD0000">"length: " </span><span style="color: #007700">. </span><span style="color: #9876AA">\$col_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'length'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>    echo </span><span style="color: #DD0000">"type: " </span><span style="color: #007700">. </span><span style="color: #9876AA">\$col_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>      </div> <div class="refsect1 seealso" id="refsect1-function.ibase-num-fields-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_field_info()} - Get information about a field</span></li>   </ul>   </div></div>
 * 
 * Get the number of fields in a result set
 * @link https://php.net/manual/zh/function.ibase-num-fields.php
 * @param resource $result_id <p>
 * An InterBase result identifier.
 * </p>
 * @return int the number of fields as an integer.
 */
function ibase_num_fields($result_id) {}

/**
 * <div id="function.ibase-num-params" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_num_params</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_num_params</span> — <span class="dc-title">Return the number of parameters in a prepared query</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-num-params-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_num_params</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$query</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   This function returns the number of parameters in the prepared query specified   by <span class="parameter" style="color:#3A95FF">query</span>. This is the number of binding arguments that   must be present when calling <span class="function">{@link ibase_execute()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-num-params-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">query</span></dt>     <dd>      <p class="para">       The prepared query handle.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-num-params-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of parameters as an integer.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-num-params-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_prepare()} - Prepare a query for later binding of parameter placeholders and execution</span></li>    <li><span class="function">{@link ibase_param_info()} - Return information about a parameter in a prepared query</span></li>   </ul>   </div></div>
 * 
 * Return the number of parameters in a prepared query
 * @link https://php.net/manual/zh/function.ibase-num-params.php
 * @param resource $query <p>
 * The prepared query handle.
 * </p>
 * @return int the number of parameters as an integer.
 */
function ibase_num_params($query) {}

/**
 * <div id="function.ibase-affected-rows" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_affected_rows</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_affected_rows</span> — <span class="dc-title">Return the number of rows that were affected by the previous query</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-affected-rows-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_affected_rows</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   This function returns the number of rows that were affected by the   previous query (INSERT, UPDATE or DELETE) that was executed from within   the specified transaction context.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-affected-rows-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">link_identifier</span></dt>     <dd>      <p class="para">       A transaction context. If <span class="parameter" style="color:#3A95FF">link_identifier</span> is a       connection resource, its default transaction is used.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-affected-rows-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of rows as an integer.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-affected-rows-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_query()} - Execute a query on an InterBase database</span></li>    <li><span class="function">{@link ibase_execute()} - Execute a previously prepared query</span></li>   </ul>   </div></div>
 * 
 * Return the number of rows that were affected by the previous query
 * @link https://php.net/manual/zh/function.ibase-affected-rows.php
 * @param resource $link_identifier [optional] <p>
 * A transaction context. If link_identifier is a
 * connection resource, its default transaction is used.
 * </p>
 * @return int the number of rows as an integer.
 */
function ibase_affected_rows($link_identifier = null) {}

/**
 * <div id="function.ibase-field-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_field_info</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_field_info</span> — <span class="dc-title">Get information about a field</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-field-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_field_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$result</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$field_number</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Returns an array with information about a field after a select   query has been run.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-field-info-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">result</span></dt>     <dd>      <p class="para">       An InterBase result identifier.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">field_number</span></dt>     <dd>      <p class="para">       Field offset.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-field-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array with the following keys: <span class="literal">name</span>,   <span class="literal">alias</span>, <span class="literal">relation</span>,   <span class="literal">length</span> and <span class="literal">type</span>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.ibase-field-info-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1302">    <p><strong>示例 #1 <span class="function"><strong>ibase_field_info()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$rs </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT * FROM tablename"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$coln </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_num_fields</span><span style="color: #007700">(</span><span style="color: #9876AA">\$rs</span><span style="color: #007700">);<br>for (</span><span style="color: #9876AA">\$i </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">; </span><span style="color: #9876AA">\$i </span><span style="color: #007700">&lt; </span><span style="color: #9876AA">\$coln</span><span style="color: #007700">; </span><span style="color: #9876AA">\$i</span><span style="color: #007700">++) {<br>    </span><span style="color: #9876AA">\$col_info </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_field_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$rs</span><span style="color: #007700">, </span><span style="color: #9876AA">\$i</span><span style="color: #007700">);<br>    echo </span><span style="color: #DD0000">"name: "</span><span style="color: #007700">. </span><span style="color: #9876AA">\$col_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'name'</span><span style="color: #007700">]. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>    echo </span><span style="color: #DD0000">"alias: "</span><span style="color: #007700">. </span><span style="color: #9876AA">\$col_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'alias'</span><span style="color: #007700">]. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>    echo </span><span style="color: #DD0000">"relation: "</span><span style="color: #007700">. </span><span style="color: #9876AA">\$col_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'relation'</span><span style="color: #007700">]. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>    echo </span><span style="color: #DD0000">"length: "</span><span style="color: #007700">. </span><span style="color: #9876AA">\$col_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'length'</span><span style="color: #007700">]. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>    echo </span><span style="color: #DD0000">"type: "</span><span style="color: #007700">. </span><span style="color: #9876AA">\$col_info</span><span style="color: #007700">[</span><span style="color: #DD0000">'type'</span><span style="color: #007700">]. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.ibase-field-info-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_num_fields()} - Get the number of fields in a result set</span></li>   </ul>   </div></div>
 * 
 * Get information about a field
 * @link https://php.net/manual/zh/function.ibase-field-info.php
 * @param resource $result <p>
 * An InterBase result identifier.
 * </p>
 * @param int $field_number <p>
 * Field offset.
 * </p>
 * @return array an array with the following keys: name,
 * alias, relation,
 * length and type.
 */
function ibase_field_info($result, $field_number) {}

/**
 * <div id="function.ibase-param-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_param_info</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_param_info</span> — <span class="dc-title">Return information about a parameter in a prepared query</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-param-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_param_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$query</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$param_number</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Returns an array with information about a parameter after a   query has been prepared.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-param-info-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">query</span></dt>     <dd>      <p class="para">       An InterBase prepared query handle.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">param_number</span></dt>     <dd>      <p class="para">       Parameter offset.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-param-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array with the following keys: <span class="literal">name</span>,   <span class="literal">alias</span>, <span class="literal">relation</span>,   <span class="literal">length</span> and <span class="literal">type</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-param-info-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_field_info()} - Get information about a field</span></li>    <li><span class="function">{@link ibase_num_params()} - Return the number of parameters in a prepared query</span></li>   </ul>   </div></div>
 * 
 * Return information about a parameter in a prepared query
 * @link https://php.net/manual/zh/function.ibase-param-info.php
 * @param resource $query <p>
 * An InterBase prepared query handle.
 * </p>
 * @param int $param_number <p>
 * Parameter offset.
 * </p>
 * @return array an array with the following keys: name,
 * alias, relation,
 * length and type.
 */
function ibase_param_info($query, $param_number) {}

/**
 * <div id="function.ibase-trans" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_trans</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_trans</span> — <span class="dc-title">Begin a transaction</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-trans-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_trans</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$trans_args</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>ibase_trans</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$trans_args</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <p class="para rdfs-comment">   Begins a transaction.  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    The first call to <span class="function"><strong>ibase_trans()</strong></span> will not return the default transaction    of a connection. All transactions started by <span class="function"><strong>ibase_trans()</strong></span>    will be rolled back at the end of the script if they were not committed or    rolled back by either <span class="function">{@link ibase_commit()}</span> or    <span class="function">{@link ibase_rollback()}</span>.   </p>  </blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    This function will accept multiple <span class="parameter" style="color:#3A95FF">trans_args</span>    and <span class="parameter" style="color:#3A95FF">link_identifier</span> arguments. This allows transactions    over multiple database connections, which are committed using a 2-phase commit    algorithm. This means you can rely on the updates to either succeed in every    database, or fail in every database. It does NOT mean you can use tables from    different databases in the same query!   </p>   <p class="para">    If you use transactions over multiple databases, you will have to specify both    the <span class="parameter" style="color:#3A95FF">link_id</span> and <span class="parameter" style="color:#3A95FF">transaction_id</span>    in calls to <span class="function">{@link ibase_query()}</span> and <span class="function">{@link ibase_prepare()}</span>.   </p>  </blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-trans-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">trans_args</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">trans_args</span> can be a combination of       <strong><span>IBASE_READ</span></strong>,       <strong><span>IBASE_WRITE</span></strong>,       <strong><span>IBASE_COMMITTED</span></strong>,        <strong><span>IBASE_CONSISTENCY</span></strong>,       <strong><span>IBASE_CONCURRENCY</span></strong>,        <strong><span>IBASE_REC_VERSION</span></strong>,        <strong><span>IBASE_REC_NO_VERSION</span></strong>,       <strong><span>IBASE_WAIT</span></strong> and        <strong><span>IBASE_NOWAIT</span></strong>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">link_identifier</span></dt>     <dd>      <p class="para">       An InterBase link identifier. If omitted, the last opened link is       assumed.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-trans-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a transaction handle, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.  </p> </div></div>
 * 
 * Begin a transaction
 * @link https://php.net/manual/zh/function.ibase-trans.php
 * @param int $trans_args [optional] <p>
 * trans_args can be a combination of
 * IBASE_READ,
 * IBASE_WRITE,
 * IBASE_COMMITTED,
 * IBASE_CONSISTENCY,
 * IBASE_CONCURRENCY,
 * IBASE_REC_VERSION,
 * IBASE_REC_NO_VERSION,
 * IBASE_WAIT and
 * IBASE_NOWAIT.
 * </p>
 * @param resource $link_identifier [optional] <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @return resource|false a transaction handle, or false on error.
 */
function ibase_trans($trans_args = null, $link_identifier = null) {}

/**
 * <div id="function.ibase-commit" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_commit</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_commit</span> — <span class="dc-title">Commit a transaction</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-commit-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_commit</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_or_trans_identifier</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Commits a transaction.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-commit-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">link_or_trans_identifier</span></dt>     <dd>      <p class="para">       If called without an argument, this function commits the default       transaction of the default link. If the argument is a connection       identifier, the default transaction of the corresponding connection       will be committed. If the argument is a transaction identifier, the       corresponding transaction will be committed.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-commit-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Commit a transaction
 * @link https://php.net/manual/zh/function.ibase-commit.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * If called without an argument, this function commits the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be committed. If the argument is a transaction identifier, the
 * corresponding transaction will be committed.
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_commit($link_or_trans_identifier = null) {}

/**
 * <div id="function.ibase-rollback" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_rollback</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_rollback</span> — <span class="dc-title">Roll back a transaction</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-rollback-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_rollback</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_or_trans_identifier</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Rolls back a transaction.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-rollback-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">link_or_trans_identifier</span></dt>     <dd>      <p class="para">       If called without an argument, this function rolls back the default       transaction of the default link. If the argument is a connection       identifier, the default transaction of the corresponding connection       will be rolled back. If the argument is a transaction identifier, the       corresponding transaction will be rolled back.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-rollback-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Roll back a transaction
 * @link https://php.net/manual/zh/function.ibase-rollback.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * If called without an argument, this function rolls back the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be rolled back. If the argument is a transaction identifier, the
 * corresponding transaction will be rolled back.
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_rollback($link_or_trans_identifier = null) {}

/**
 * <div id="function.ibase-commit-ret" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_commit_ret</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_commit_ret</span> — <span class="dc-title">Commit a transaction without closing it</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-commit-ret-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_commit_ret</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_or_trans_identifier</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Commits a transaction without closing it.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-commit-ret-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">link_or_trans_identifier</span></dt>     <dd>      <p class="para">       If called without an argument, this function commits the default       transaction of the default link. If the argument is a connection       identifier, the default transaction of the corresponding connection       will be committed. If the argument is a transaction identifier, the       corresponding transaction will be committed. The transaction context       will be retained, so statements executed from within this transaction       will not be invalidated.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-commit-ret-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Commit a transaction without closing it
 * @link https://php.net/manual/zh/function.ibase-commit-ret.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * If called without an argument, this function commits the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be committed. If the argument is a transaction identifier, the
 * corresponding transaction will be committed. The transaction context
 * will be retained, so statements executed from within this transaction
 * will not be invalidated.
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_commit_ret($link_or_trans_identifier = null) {}

/**
 * <div id="function.ibase-rollback-ret" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_rollback_ret</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_rollback_ret</span> — <span class="dc-title">Roll back a transaction without closing it</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-rollback-ret-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_rollback_ret</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_or_trans_identifier</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Rolls back a transaction without closing it.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-rollback-ret-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">link_or_trans_identifier</span></dt>     <dd>      <p class="para">       If called without an argument, this function rolls back the default       transaction of the default link. If the argument is a connection       identifier, the default transaction of the corresponding connection       will be rolled back. If the argument is a transaction identifier, the       corresponding transaction will be rolled back. The transaction context       will be retained, so statements executed from within this transaction       will not be invalidated.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-rollback-ret-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Roll back a transaction without closing it
 * @link https://php.net/manual/zh/function.ibase-rollback-ret.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * If called without an argument, this function rolls back the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be rolled back. If the argument is a transaction identifier, the
 * corresponding transaction will be rolled back. The transaction context
 * will be retained, so statements executed from within this transaction
 * will not be invalidated.
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_rollback_ret($link_or_trans_identifier = null) {}

/**
 * <div id="function.ibase-blob-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_blob_info</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_blob_info</span> — <span class="dc-title">Return blob length and other useful info</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-blob-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_blob_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$blob_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>ibase_blob_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$blob_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Returns the BLOB length and other useful information.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-blob-info-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">link_identifier</span></dt>     <dd>      <p class="para">       An InterBase link identifier. If omitted, the last opened link is       assumed.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">blob_id</span></dt>     <dd>      <p class="para">       A BLOB id.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-blob-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array containing information about a BLOB. The information returned   consists of the length of the BLOB, the number of segments it contains, the size   of the largest segment, and whether it is a stream BLOB or a segmented BLOB.  </p> </div></div>
 * 
 * Return blob length and other useful info
 * @link https://php.net/manual/zh/function.ibase-blob-info.php
 * @param resource $link_identifier <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @param string $blob_id <p>
 * A BLOB id.
 * </p>
 * @return array an array containing information about a BLOB. The information returned
 * consists of the length of the BLOB, the number of segments it contains, the size
 * of the largest segment, and whether it is a stream BLOB or a segmented BLOB.
 */
function ibase_blob_info($link_identifier, $blob_id) {}

/**
 * <div id="function.ibase-blob-create" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_blob_create</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_blob_create</span> — <span class="dc-title">Create a new blob for adding data</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-blob-create-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_blob_create</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>ibase_blob_create()</strong></span> creates a new BLOB for filling with   data.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-blob-create-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">link_identifier</span></dt>     <dd>      <p class="para">       An InterBase link identifier. If omitted, the last opened link is       assumed.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-blob-create-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a BLOB handle for later use with   <span class="function">{@link ibase_blob_add()}</span> 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-blob-create-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_blob_add()} - Add data into a newly created blob</span></li>    <li><span class="function">{@link ibase_blob_cancel()} - Cancel creating blob</span></li>    <li><span class="function">{@link ibase_blob_close()} - Close blob</span></li>    <li><span class="function">{@link ibase_blob_import()} - Create blob, copy file in it, and close it</span></li>   </ul>   </div></div>
 * 
 * Create a new blob for adding data
 * @link https://php.net/manual/zh/function.ibase-blob-create.php
 * @param resource $link_identifier [optional] <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @return resource|false a BLOB handle for later use with
 * ibase_blob_add or false on failure.
 */
function ibase_blob_create($link_identifier = null) {}

/**
 * <div id="function.ibase-blob-add" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_blob_add</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_blob_add</span> — <span class="dc-title">Add data into a newly created blob</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-blob-add-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_blob_add</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$blob_handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$data</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>ibase_blob_add()</strong></span> adds data into a blob created with   <span class="function">{@link ibase_blob_create()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-blob-add-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">blob_handle</span></dt>     <dd>      <p class="para">       A blob handle opened with <span class="function">{@link ibase_blob_create()}</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       The data to be added.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-blob-add-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-blob-add-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_blob_cancel()} - Cancel creating blob</span></li>    <li><span class="function">{@link ibase_blob_close()} - Close blob</span></li>    <li><span class="function">{@link ibase_blob_create()} - Create a new blob for adding data</span></li>    <li><span class="function">{@link ibase_blob_import()} - Create blob, copy file in it, and close it</span></li>   </ul>   </div></div>
 * 
 * Add data into a newly created blob
 * @link https://php.net/manual/zh/function.ibase-blob-add.php
 * @param resource $blob_handle <p>
 * A blob handle opened with ibase_blob_create.
 * </p>
 * @param string $data <p>
 * The data to be added.
 * </p>
 * @return void
 */
function ibase_blob_add($blob_handle, $data) {}

/**
 * <div id="function.ibase-blob-cancel" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_blob_cancel</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_blob_cancel</span> — <span class="dc-title">Cancel creating blob</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-blob-cancel-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_blob_cancel</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$blob_handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   This function will discard a BLOB if it has not yet been closed by   <span class="function">{@link ibase_blob_close()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-blob-cancel-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">blob_handle</span></dt>     <dd>      <p class="para">       A BLOB handle opened with <span class="function">{@link ibase_blob_create()}</span>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-blob-cancel-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-blob-cancel-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_blob_close()} - Close blob</span></li>    <li><span class="function">{@link ibase_blob_create()} - Create a new blob for adding data</span></li>    <li><span class="function">{@link ibase_blob_import()} - Create blob, copy file in it, and close it</span></li>   </ul>   </div></div>
 * 
 * Cancel creating blob
 * @link https://php.net/manual/zh/function.ibase-blob-cancel.php
 * @param resource $blob_handle <p>
 * A BLOB handle opened with ibase_blob_create.
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_blob_cancel($blob_handle) {}

/**
 * <div id="function.ibase-blob-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_blob_close</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_blob_close</span> — <span class="dc-title">Close blob</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-blob-close-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_blob_close</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$blob_handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   This function closes a BLOB that has either been opened for reading by   <span class="function">{@link ibase_blob_open()}</span> or has been opened for writing by   <span class="function">{@link ibase_blob_create()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-blob-close-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">blob_handle</span></dt>     <dd>      <p class="para">       A BLOB handle opened with <span class="function">{@link ibase_blob_create()}</span> or       <span class="function">{@link ibase_blob_open()}</span>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-blob-close-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   If the BLOB was being read, this function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> on success, if   the BLOB was being written to, this function returns a string containing   the BLOB id that has been assigned to it by the database. On failure, this   function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-blob-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_blob_cancel()} - Cancel creating blob</span></li>    <li><span class="function">{@link ibase_blob_open()} - Open blob for retrieving data parts</span></li>   </ul>   </div></div>
 * 
 * Close blob
 * @link https://php.net/manual/zh/function.ibase-blob-close.php
 * @param resource $blob_handle <p>
 * A BLOB handle opened with ibase_blob_create or
 * ibase_blob_open.
 * </p>
 * @return mixed If the BLOB was being read, this function returns true on success, if
 * the BLOB was being written to, this function returns a string containing
 * the BLOB id that has been assigned to it by the database. On failure, this
 * function returns false.
 */
function ibase_blob_close($blob_handle) {}

/**
 * <div id="function.ibase-blob-open" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_blob_open</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_blob_open</span> — <span class="dc-title">Open blob for retrieving data parts</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-blob-open-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_blob_open</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$blob_id</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>ibase_blob_open</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$blob_id</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Opens an existing BLOB for reading.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-blob-open-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">link_identifier</span></dt>     <dd>      <p class="para">       An InterBase link identifier. If omitted, the last opened link is       assumed.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">blob_id</span></dt>     <dd>      <p class="para">       A BLOB id.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-blob-open-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a BLOB handle for later use with    <span class="function">{@link ibase_blob_get()}</span> 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-blob-open-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_blob_close()} - Close blob</span></li>    <li><span class="function">{@link ibase_blob_echo()} - Output blob contents to browser</span></li>    <li><span class="function">{@link ibase_blob_get()} - Get len bytes data from open blob</span></li>   </ul>   </div></div>
 * 
 * Open blob for retrieving data parts
 * @link https://php.net/manual/zh/function.ibase-blob-open.php
 * @param resource $link_identifier <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @param string $blob_id <p>
 * A BLOB id.
 * </p>
 * @return resource|false a BLOB handle for later use with
 * ibase_blob_get or false on failure.
 */
function ibase_blob_open($link_identifier, $blob_id) {}

/**
 * <div id="function.ibase-blob-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_blob_get</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_blob_get</span> — <span class="dc-title">Get len bytes data from open blob</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-blob-get-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_blob_get</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$blob_handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$len</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   This function returns at most <span class="parameter" style="color:#3A95FF">len</span> bytes from a BLOB   that has been opened for reading by <span class="function">{@link ibase_blob_open()}</span>.  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    It is not possible to read from a BLOB that has been opened for writing    by <span class="function">{@link ibase_blob_create()}</span>.   </p>  </blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-blob-get-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">blob_handle</span></dt>     <dd>      <p class="para">       A BLOB handle opened with <span class="function">{@link ibase_blob_open()}</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">len</span></dt>     <dd>      <p class="para">       Size of returned data.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-blob-get-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns at most <span class="parameter" style="color:#3A95FF">len</span> bytes from the BLOB, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>   on failure.  </p> </div> <div class="refsect1 examples" id="refsect1-function.ibase-blob-get-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1297">    <p><strong>示例 #1 <span class="function"><strong>ibase_blob_get()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$result    </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_query</span><span style="color: #007700">(</span><span style="color: #DD0000">"SELECT blob_value FROM table"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$data      </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_fetch_object</span><span style="color: #007700">(</span><span style="color: #9876AA">\$result</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$blob_data </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_blob_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$data</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">BLOB_VALUE</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$blob_hndl </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_blob_open</span><span style="color: #007700">(</span><span style="color: #9876AA">\$data</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">BLOB_VALUE</span><span style="color: #007700">);<br>echo         </span><span style="color: #9876AA">ibase_blob_get</span><span style="color: #007700">(</span><span style="color: #9876AA">\$blob_hndl</span><span style="color: #007700">, </span><span style="color: #9876AA">\$blob_data</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   Whilst this example doesn't do much more than a   'ibase_blob_echo(\$data-&gt;BLOB_VALUE)' would do, it does show you how to get   information into a \$variable to manipulate as you please.    </div> <div class="refsect1 seealso" id="refsect1-function.ibase-blob-get-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_blob_open()} - Open blob for retrieving data parts</span></li>    <li><span class="function">{@link ibase_blob_close()} - Close blob</span></li>    <li><span class="function">{@link ibase_blob_echo()} - Output blob contents to browser</span></li>   </ul>   </div></div>
 * 
 * Get len bytes data from open blob
 * @link https://php.net/manual/zh/function.ibase-blob-get.php
 * @param resource $blob_handle <p>
 * A BLOB handle opened with ibase_blob_open.
 * </p>
 * @param int $len <p>
 * Size of returned data.
 * </p>
 * @return string|false at most len bytes from the BLOB, or false
 * on failure.
 */
function ibase_blob_get($blob_handle, $len) {}

/**
 * <div id="function.ibase-blob-echo" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_blob_echo</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_blob_echo</span> — <span class="dc-title">Output blob contents to browser</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-blob-echo-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_blob_echo</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$blob_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>ibase_blob_echo</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$blob_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   This function opens a BLOB for reading and sends its contents directly to   standard output (the browser, in most cases).  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-blob-echo-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">link_identifier</span></dt>     <dd>      <p class="para">       An InterBase link identifier. If omitted, the last opened link is       assumed.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">blob_id</span></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-blob-echo-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-blob-echo-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_blob_open()} - Open blob for retrieving data parts</span></li>    <li><span class="function">{@link ibase_blob_close()} - Close blob</span></li>    <li><span class="function">{@link ibase_blob_get()} - Get len bytes data from open blob</span></li>   </ul>   </div></div>
 * 
 * Output blob contents to browser
 * @link https://php.net/manual/zh/function.ibase-blob-echo.php
 * @param string $blob_id <p>
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_blob_echo($blob_id) {}

/**
 * <div id="function.ibase-blob-import" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_blob_import</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_blob_import</span> — <span class="dc-title">Create blob, copy file in it, and close it</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-blob-import-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_blob_import</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$link_identifier</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$file_handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>ibase_blob_import</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$file_handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   This function creates a BLOB, reads an entire file into it, closes it and   returns the assigned BLOB id.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-blob-import-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">link_identifier</span></dt>     <dd>      <p class="para">       An InterBase link identifier. If omitted, the last opened link is       assumed.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">file_handle</span></dt>     <dd>      <p class="para">       The file handle is a handle returned by <span class="function">{@link fopen()}</span>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-blob-import-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the BLOB id on success, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.  </p> </div> <div class="refsect1 examples" id="refsect1-function.ibase-blob-import-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1298">    <p><strong>示例 #1 <span class="function"><strong>ibase_blob_import()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$dbh </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_connect</span><span style="color: #007700">(</span><span style="color: #9876AA">\$host</span><span style="color: #007700">, </span><span style="color: #9876AA">\$username</span><span style="color: #007700">, </span><span style="color: #9876AA">\$password</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$filename </span><span style="color: #007700">= </span><span style="color: #DD0000">'/tmp/bar'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$fd </span><span style="color: #007700">= </span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #9876AA">\$filename</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">);<br>if (</span><span style="color: #9876AA">\$fd</span><span style="color: #007700">) {<br><br>    </span><span style="color: #9876AA">\$blob </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_blob_import</span><span style="color: #007700">(</span><span style="color: #9876AA">\$dbh</span><span style="color: #007700">, </span><span style="color: #9876AA">\$fd</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">fclose</span><span style="color: #007700">(</span><span style="color: #9876AA">\$fd</span><span style="color: #007700">);<br><br>    if (!</span><span style="color: #9876AA">is_string</span><span style="color: #007700">(</span><span style="color: #9876AA">\$blob</span><span style="color: #007700">)) {<br>        </span><span style="color: #FF8000">// import failed<br>    </span><span style="color: #007700">} else {<br>        </span><span style="color: #9876AA">\$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO foo (name, data) VALUES ('</span><span style="color: #9876AA">\$filename</span><span style="color: #DD0000">', ?)"</span><span style="color: #007700">;<br>        </span><span style="color: #9876AA">\$prepared </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_prepare</span><span style="color: #007700">(</span><span style="color: #9876AA">\$dbh</span><span style="color: #007700">, </span><span style="color: #9876AA">\$query</span><span style="color: #007700">);<br>        if (!</span><span style="color: #9876AA">ibase_execute</span><span style="color: #007700">(</span><span style="color: #9876AA">\$prepared</span><span style="color: #007700">, </span><span style="color: #9876AA">\$blob</span><span style="color: #007700">)) {<br>            </span><span style="color: #FF8000">// record insertion failed<br>        </span><span style="color: #007700">}<br>    }<br>} else {<br>    </span><span style="color: #FF8000">// unable to open the data file<br></span><span style="color: #007700">}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.ibase-blob-import-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_blob_add()} - Add data into a newly created blob</span></li>    <li><span class="function">{@link ibase_blob_cancel()} - Cancel creating blob</span></li>    <li><span class="function">{@link ibase_blob_close()} - Close blob</span></li>    <li><span class="function">{@link ibase_blob_create()} - Create a new blob for adding data</span></li>   </ul>   </div></div>
 * 
 * Create blob, copy file in it, and close it
 * @link https://php.net/manual/zh/function.ibase-blob-import.php
 * @param resource $link_identifier <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @param resource $file_handle <p>
 * The file handle is a handle returned by fopen.
 * </p>
 * @return string|false the BLOB id on success, or false on error.
 */
function ibase_blob_import($link_identifier, $file_handle) {}

/**
 * <div id="function.ibase-errmsg" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_errmsg</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_errmsg</span> — <span class="dc-title">Return error messages</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-errmsg-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_errmsg</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="simpara">   Returns the error message that resulted from the most recent InterBase function   call.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-errmsg-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-errmsg-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the error message as a string, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if no error occurred.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-errmsg-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_errcode()} - Return an error code</span></li>   </ul>   </div></div>
 * 
 * Return error messages
 * @link https://php.net/manual/zh/function.ibase-errmsg.php
 * @return string|false the error message as a string, or false if no error occurred.
 */
function ibase_errmsg() {}

/**
 * <div id="function.ibase-errcode" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_errcode</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_errcode</span> — <span class="dc-title">Return an error code</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-errcode-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_errcode</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Returns the error code that resulted from the most recent InterBase function   call.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-errcode-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-errcode-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the error code as an integer, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if no error occurred.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-errcode-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_errmsg()} - Return error messages</span></li>   </ul>   </div></div>
 * 
 * Return an error code
 * @link https://php.net/manual/zh/function.ibase-errcode.php
 * @return int|false the error code as an integer, or false if no error occurred.
 */
function ibase_errcode() {}

/**
 * <div id="function.ibase-add-user" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_add_user</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_add_user</span> — <span class="dc-title">Add a user to a security database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-add-user-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_add_user</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$service_handle</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$user_name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$password</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$first_name</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$middle_name</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$last_name</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div> </div>  <div class="refsect1 parameters" id="refsect1-function.ibase-add-user-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">service_handle</span></dt>     <dd>      <p class="para">       The handle on the database server service.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">user_name</span></dt>     <dd>      <p class="para">       The login name of the new database user.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">password</span></dt>     <dd>      <p class="para">      The password of the new user.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">first_name</span></dt>     <dd>      <p class="para">       The first name of the new database user.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">middle_name</span></dt>     <dd>      <p class="para">       The middle name of the new database user.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">last_name</span></dt>     <dd>      <p class="para">       The last name of the new database user.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-add-user-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-add-user-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_modify_user()} - Modify a user to a security database</span></li>    <li><span class="function">{@link ibase_delete_user()} - Delete a user from a security database</span></li>   </ul>   </div></div>
 * 
 * Add a user to a security database (only for IB6 or later)
 * @link https://php.net/manual/zh/function.ibase-add-user.php
 * @param resource $service_handle
 * @param string $user_name
 * @param string $password
 * @param string $first_name [optional]
 * @param string $middle_name [optional]
 * @param string $last_name [optional]
 * @return bool true on success or false on failure.
 */
function ibase_add_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null) {}

/**
 * <div id="function.ibase-modify-user" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_modify_user</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_modify_user</span> — <span class="dc-title">Modify a user to a security database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-modify-user-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_modify_user</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$service_handle</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$user_name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$password</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$first_name</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$middle_name</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$last_name</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-modify-user-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">service_handle</span></dt>     <dd>      <p class="para">       The handle on the database server service.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">user_name</span></dt>     <dd>      <p class="para">       The login name of the database user to modify.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">password</span></dt>     <dd>      <p class="para">       The user's new password.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">first_name</span></dt>     <dd>      <p class="para">       The user's new first name.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">middle_name</span></dt>     <dd>      <p class="para">       The user's new middle name.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">last_name</span></dt>     <dd>      <p class="para">       The user's new last name.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.ibase-modify-user-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-modify-user-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_add_user()} - Add a user to a security database</span></li>    <li><span class="function">{@link ibase_delete_user()} - Delete a user from a security database</span></li>   </ul>   </div></div>
 * 
 * Modify a user to a security database (only for IB6 or later)
 * @link https://php.net/manual/zh/function.ibase-modify-user.php
 * @param resource $service_handle
 * @param string $user_name
 * @param string $password
 * @param string $first_name [optional]
 * @param string $middle_name [optional]
 * @param string $last_name [optional]
 * @return bool true on success or false on failure.
 */
function ibase_modify_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null) {}

/**
 * <div id="function.ibase-delete-user" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_delete_user</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_delete_user</span> — <span class="dc-title">Delete a user from a security database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-delete-user-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_delete_user</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$service_handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$user_name</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-delete-user-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">service_handle</span></dt>     <dd>      <p class="para">       The handle on the database server service.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">user_name</span></dt>     <dd>      <p class="para">       The login name of the user you want to delete from the database.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.ibase-delete-user-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-delete-user-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_add_user()} - Add a user to a security database</span></li>    <li><span class="function">{@link ibase_modify_user()} - Modify a user to a security database</span></li>   </ul>   </div></div>
 * 
 * Delete a user from a security database (only for IB6 or later)
 * @link https://php.net/manual/zh/function.ibase-delete-user.php
 * @param resource $service_handle
 * @param string $user_name
 * @return bool true on success or false on failure.
 */
function ibase_delete_user($service_handle, $user_name) {}

/**
 * <div id="function.ibase-service-attach" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_service_attach</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_service_attach</span> — <span class="dc-title">Connect to the service manager</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-service-attach-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_service_attach</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$host</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$dba_username</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$dba_password</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div> </div>  <div class="refsect1 parameters" id="refsect1-function.ibase-service-attach-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">host</span></dt>     <dd>      <p class="para">       The name or ip address of the database host. You can define the port by adding        '/' and port number. If no port is specified, port 3050 will be used.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">dba_username</span></dt>     <dd>      <p class="para">       The name of any valid user.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">dba_password</span></dt>     <dd>      <p class="para">       The user's password.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-service-attach-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a Interbase / Firebird link identifier on success 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.ibase-service-attach-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1309">    <p><strong>示例 #1 <span class="function"><strong>ibase_service_attach()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    </span><span style="color: #FF8000">// Attach to the remote Firebird server by ip address<br>    </span><span style="color: #007700">if ((</span><span style="color: #9876AA">\$service </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_service_attach</span><span style="color: #007700">(</span><span style="color: #DD0000">'10.1.1.199'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sysdba'</span><span style="color: #007700">, </span><span style="color: #DD0000">'masterkey'</span><span style="color: #007700">)) != </span><span style="color: #9876AA">FALSE</span><span style="color: #007700">) {<br>        <br>        </span><span style="color: #FF8000">// Successfully attached. <br>        // Fetch server version (something like 'LI-V3.0.4.33054 Firebird 3.0')<br>        </span><span style="color: #9876AA">\$server_version  </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_SERVER_VERSION</span><span style="color: #007700">);<br><br>        </span><span style="color: #FF8000">// Fetch server implementation (something like 'Firebird/Linux/AMD/Intel/x64')<br>        </span><span style="color: #9876AA">\$server_implementation </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_IMPLEMENTATION</span><span style="color: #007700">);<br><br>        </span><span style="color: #FF8000">// Detach from server (disconnect)<br>        </span><span style="color: #9876AA">ibase_service_detach</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">);<br><br>        </span><span style="color: #FF8000">// Output the info<br>        </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Server version: " </span><span style="color: #007700">. </span><span style="color: #9876AA">\$server_version </span><span style="color: #007700">. </span><span style="color: #DD0000">"&lt;br/&gt;"</span><span style="color: #007700">;<br>        echo </span><span style="color: #DD0000">"Server implementation: " </span><span style="color: #007700">. </span><span style="color: #9876AA">\$server_implementation</span><span style="color: #007700">;<br>    }<br>    else {<br>        </span><span style="color: #FF8000">// Output message on error<br>        </span><span style="color: #9876AA">\$conn_error </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_errmsg</span><span style="color: #007700">();<br>        die(</span><span style="color: #9876AA">\$conn_error</span><span style="color: #007700">);<br>    }<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>      <p class="para">   </p><div class="example" id="example-1310">    <p><strong>示例 #2 <span class="function"><strong>ibase_service_attach()</strong></span> example using <span class="literal">hostname/port</span> syntax</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    </span><span style="color: #FF8000">// Attach to the remote Firebird server by name. Use Port 3050.<br>    </span><span style="color: #007700">if ((</span><span style="color: #9876AA">\$service </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_service_attach</span><span style="color: #007700">(</span><span style="color: #DD0000">'FB-SRV-01.contoso.local/3050'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sysdba'</span><span style="color: #007700">, </span><span style="color: #DD0000">'masterkey'</span><span style="color: #007700">)) != </span><span style="color: #9876AA">FALSE</span><span style="color: #007700">) {<br>        <br>        </span><span style="color: #FF8000">// Successfully attached. <br>        // Fetch server version (something like 'LI-V3.0.4.33054 Firebird 3.0')<br>        </span><span style="color: #9876AA">\$server_version  </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_SERVER_VERSION</span><span style="color: #007700">);<br><br>        </span><span style="color: #FF8000">// Fetch server implementation (something like 'Firebird/Linux/AMD/Intel/x64')<br>        </span><span style="color: #9876AA">\$server_implementation </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_IMPLEMENTATION</span><span style="color: #007700">);<br><br>        </span><span style="color: #FF8000">// Detach from server (disconnect)<br>        </span><span style="color: #9876AA">ibase_service_detach</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">);<br><br>        </span><span style="color: #FF8000">// Output the info<br>        </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Server version: " </span><span style="color: #007700">. </span><span style="color: #9876AA">\$server_version </span><span style="color: #007700">. </span><span style="color: #DD0000">"&lt;br/&gt;"</span><span style="color: #007700">;<br>        echo </span><span style="color: #DD0000">"Server implementation: " </span><span style="color: #007700">. </span><span style="color: #9876AA">\$server_implementation</span><span style="color: #007700">;<br>    }<br>    else {<br>        </span><span style="color: #FF8000">// Output message on error<br>        </span><span style="color: #9876AA">\$conn_error </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_errmsg</span><span style="color: #007700">();<br>        die(</span><span style="color: #9876AA">\$conn_error</span><span style="color: #007700">);<br>    }<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.ibase-service-attach-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_service_detach()} - Disconnect from the service manager</span></li>   </ul>   </div></div>
 * 
 * Connect to the service manager
 * @link https://php.net/manual/zh/function.ibase-service-attach.php
 * @param string $host
 * @param string $dba_username
 * @param string $dba_password
 * @return resource|false
 */
function ibase_service_attach($host, $dba_username, $dba_password) {}

/**
 * <div id="function.ibase-service-detach" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_service_detach</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_service_detach</span> — <span class="dc-title">Disconnect from the service manager</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-service-detach-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_service_detach</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$service_handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div> </div>  <div class="refsect1 parameters" id="refsect1-function.ibase-service-detach-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">service_handle</span></dt>     <dd>      <p class="para">       A previously created connection to the database server.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-service-detach-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.ibase-service-detach-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1311">    <p><strong>示例 #1 <span class="function"><strong>ibase_service_detach()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    </span><span style="color: #FF8000">// Attach to the remote Firebird server by ip address<br>    </span><span style="color: #007700">if ((</span><span style="color: #9876AA">\$service </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_service_attach</span><span style="color: #007700">(</span><span style="color: #DD0000">'10.1.1.199'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sysdba'</span><span style="color: #007700">, </span><span style="color: #DD0000">'masterkey'</span><span style="color: #007700">)) != </span><span style="color: #9876AA">FALSE</span><span style="color: #007700">) {<br>        <br>        </span><span style="color: #FF8000">// Successfully attached. <br>        // Fetch server version (something like 'LI-V3.0.4.33054 Firebird 3.0')<br>        </span><span style="color: #9876AA">\$server_version  </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_SERVER_VERSION</span><span style="color: #007700">);<br><br>        </span><span style="color: #FF8000">// Fetch server implementation (something like 'Firebird/Linux/AMD/Intel/x64')<br>        </span><span style="color: #9876AA">\$server_implementation </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_IMPLEMENTATION</span><span style="color: #007700">);<br><br>        </span><span style="color: #FF8000">// Detach from server (disconnect)<br>        </span><span style="color: #007700">if(</span><span style="color: #9876AA">ibase_service_detach</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">) == </span><span style="color: #9876AA">FALSE</span><span style="color: #007700">) {<br>            echo </span><span style="color: #DD0000">"Error on service detach."</span><span style="color: #007700">;<br>        }<br>        else {<br>            echo </span><span style="color: #DD0000">"Successfully detached from service."</span><span style="color: #007700">;<br>        }<br><br>    }<br>    else {<br>        </span><span style="color: #FF8000">// Output message on error<br>        </span><span style="color: #9876AA">\$conn_error </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_errmsg</span><span style="color: #007700">();<br>        die(</span><span style="color: #9876AA">\$conn_error</span><span style="color: #007700">);<br>    }<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div></div>
 * 
 * Disconnect from the service manager
 * @link https://php.net/manual/zh/function.ibase-service-detach.php
 * @param resource $service_handle
 * @return bool true on success or false on failure.
 */
function ibase_service_detach($service_handle) {}

/**
 * <div id="function.ibase-backup" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_backup</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_backup</span> — <span class="dc-title">Initiates a backup task in the service manager and returns immediately</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-backup-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_backup</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$service_handle</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$source_db</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$dest_file</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$options</span><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$verbose</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   This function passes the arguments to the (remote) database server. There it starts a new backup process. Therefore you   won't get any responses.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.ibase-backup-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">service_handle</span></dt>     <dd>      <p class="para">       A previously opened connection to the database server.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">source_db</span></dt>     <dd>      <p class="para">       The absolute file path to the database on the database server. You can also use a database alias.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">dest_file</span></dt>     <dd>      <p class="para">       The path to the backup file on the database server.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">       Additional options to pass to the database server for backup.       The <span class="parameter" style="color:#3A95FF">options</span> parameter can be a combination        of the following constants:       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-bkp-ignore-checksums">IBASE_BKP_IGNORE_CHECKSUMS</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-bkp-ignore-limbo">IBASE_BKP_IGNORE_LIMBO</a></span></strong>,        <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-bkp-metadata-only">IBASE_BKP_METADATA_ONLY</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-bkp-no-garbage-collect">IBASE_BKP_NO_GARBAGE_COLLECT</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-bkp-old-descriptions">IBASE_BKP_OLD_DESCRIPTIONS</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-bkp-non-transportable">IBASE_BKP_NON_TRANSPORTABLE</a></span></strong> or       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-bkp-convert">IBASE_BKP_CONVERT</a></span></strong>.       Read the section about <a href="https://php.net/manual/zh/ibase.constants.php" class="xref">预定义常量</a> for further information.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">verbose</span></dt>     <dd>      <p class="para">       Since the backup process is done on the database server, you don't have any chance       to get its output. This argument is useless.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-backup-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   Since the backup process is done on the (remote) server, this function just passes the arguments to it.   While the arguments are legal, you won't get <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.ibase-backup-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1295">    <p><strong>示例 #1 <span class="function"><strong>ibase_backup()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// Attach to database server by ip address and port<br></span><span style="color: #9876AA">\$service </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_service_attach </span><span style="color: #007700">(</span><span style="color: #DD0000">'10.1.11.200/3050'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sysdba'</span><span style="color: #007700">, </span><span style="color: #DD0000">'masterkey'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Start the backup process on database server<br>// Backup employee database using full path to /srv/backup/employees.fbk<br>// Don't use any special arguments<br></span><span style="color: #9876AA">ibase_backup</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #DD0000">'/srv/firebird/employees.fdb'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/srv/backup/employees.fbk'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Free the attached connection<br></span><span style="color: #9876AA">ibase_service_detach </span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>      <p class="para">   </p><div class="example" id="example-1296">    <p><strong>示例 #2 <span class="function"><strong>ibase_backup()</strong></span> example with arguments</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// Attach to database server by name and default port<br></span><span style="color: #9876AA">\$service </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_service_attach </span><span style="color: #007700">(</span><span style="color: #DD0000">'fb-server.contoso.local'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sysdba'</span><span style="color: #007700">, </span><span style="color: #DD0000">'masterkey'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Start the backup process on database server<br>// Backup employee database using alias to /srv/backup/employees.fbk.<br>// Backup only the metadata. Don't create a transportable backup.<br></span><span style="color: #9876AA">ibase_backup</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #DD0000">'employees.fdb'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/srv/backup/employees.fbk'</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_BKP_METADATA_ONLY </span><span style="color: #007700">| </span><span style="color: #9876AA">IBASE_BKP_NON_TRANSPORTABLE</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Free the attached connection<br></span><span style="color: #9876AA">ibase_service_detach </span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.ibase-backup-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_restore()} - Initiates a restore task in the service manager and returns immediately</span></li>   </ul>   </div> </div>
 * 
 * Initiates a backup task in the service manager and returns immediately
 * @link https://php.net/manual/zh/function.ibase-backup.php
 * @param resource $service_handle
 * @param string $source_db
 * @param string $dest_file
 * @param int $options [optional]
 * @param bool $verbose [optional]
 * @return mixed
 */
function ibase_backup($service_handle, $source_db, $dest_file, $options = null, $verbose = null) {}

/**
 * <div id="function.ibase-restore" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_restore</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_restore</span> — <span class="dc-title">Initiates a restore task in the service manager and returns immediately</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-restore-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_restore</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$service_handle</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$source_file</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$dest_db</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$options</span><span class="initializer"> = 0</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$verbose</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>   <p class="para rdfs-comment">   This function passes the arguments to the (remote) database server. There it starts a new restore process. Therefore you   won't get any responses.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.ibase-restore-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">service_handle</span></dt>     <dd>      <p class="para">       A previously opened connection to the database server.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">source_file</span></dt>     <dd>      <p class="para">       The absolute path on the server where the backup file is located.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">dest_db</span></dt>     <dd>      <p class="para">       The path to create the new database on the server. You can also use database alias.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">       Additional options to pass to the database server for restore.       The <span class="parameter" style="color:#3A95FF">options</span> parameter can be a combination        of the following constants:       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-res-deactivate-idx">IBASE_RES_DEACTIVATE_IDX</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-res-no-shadow">IBASE_RES_NO_SHADOW</a></span></strong>,        <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-res-no-validity">IBASE_RES_NO_VALIDITY</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-res-one-at-a-time">IBASE_RES_ONE_AT_A_TIME</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-res-replace">IBASE_RES_REPLACE</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-res-create">IBASE_RES_CREATE</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-res-use-all-space">IBASE_RES_USE_ALL_SPACE</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-prp-page-buffers">IBASE_PRP_PAGE_BUFFERS</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-prp-sweep-interval">IBASE_PRP_SWEEP_INTERVAL</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/ibase.constants.php#constant.ibase-res-create">IBASE_RES_CREATE</a></span></strong>.       Read the section about <a href="https://php.net/manual/zh/ibase.constants.php" class="xref">预定义常量</a> for further information.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">verbose</span></dt>     <dd>      <p class="para">       Since the restore process is done on the database server, you don't have any chance       to get its output. This argument is useless.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-restore-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   Since the restore process is done on the (remote) server, this function just passes the arguments to it.   While the arguments are legal, you won't get <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.ibase-restore-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1306">    <p><strong>示例 #1 <span class="function"><strong>ibase_restore()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// Attach to database server by ip address and port<br></span><span style="color: #9876AA">\$service </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_service_attach </span><span style="color: #007700">(</span><span style="color: #DD0000">'10.1.11.200/3050'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sysdba'</span><span style="color: #007700">, </span><span style="color: #DD0000">'masterkey'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Start the restore process on database server<br>// Restore employee backup to the new emps.fdb database<br>// Don't use any special arguments<br></span><span style="color: #9876AA">ibase_restore</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #DD0000">'/srv/backup/employees.fbk'</span><span style="color: #007700">, </span><span style="color: #DD0000">'/srv/firebird/emps.fdb'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Free the attached connection<br></span><span style="color: #9876AA">ibase_service_detach </span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>      <p class="para">   </p><div class="example" id="example-1307">    <p><strong>示例 #2 <span class="function"><strong>ibase_restore()</strong></span> example with arguments</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// Attach to database server by name and default port<br></span><span style="color: #9876AA">\$service </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_service_attach </span><span style="color: #007700">(</span><span style="color: #DD0000">'fb-server.contoso.local'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sysdba'</span><span style="color: #007700">, </span><span style="color: #DD0000">'masterkey'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Start the restore process on database server<br>// Restore to employee database using alias.<br>// Restore without indixes. Replace existing database.<br></span><span style="color: #9876AA">ibase_restore</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #DD0000">'/srv/backup/employees.fbk'</span><span style="color: #007700">, </span><span style="color: #DD0000">'employees.fdb'</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_RES_DEACTIVATE_IDX </span><span style="color: #007700">| </span><span style="color: #9876AA">IBASE_RES_REPLACE</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Free the attached connection<br></span><span style="color: #9876AA">ibase_service_detach </span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>   <div class="refsect1 seealso" id="refsect1-function.ibase-restore-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_backup()} - Initiates a backup task in the service manager and returns immediately</span></li>   </ul>   </div></div>
 * 
 * Initiates a restore task in the service manager and returns immediately
 * @link https://php.net/manual/zh/function.ibase-restore.php
 * @param resource $service_handle
 * @param string $source_file
 * @param string $dest_db
 * @param int $options [optional]
 * @param bool $verbose [optional]
 * @return mixed
 */
function ibase_restore($service_handle, $source_file, $dest_db, $options = null, $verbose = null) {}

/**
 * <div id="function.ibase-maintain-db" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_maintain_db</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_maintain_db</span> — <span class="dc-title">Execute a maintenance command on the database server</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-maintain-db-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_maintain_db</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$service_handle</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$db</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$action</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$argument</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-maintain-db-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Execute a maintenance command on the database server
 * @link https://php.net/manual/zh/function.ibase-maintain-db.php
 * @param resource $service_handle
 * @param string $db
 * @param int $action
 * @param int $argument [optional]
 * @return bool true on success or false on failure.
 */
function ibase_maintain_db($service_handle, $db, $action, $argument = null) {}

/**
 * <div id="function.ibase-db-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_db_info</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_db_info</span> — <span class="dc-title">Request statistics about a database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-db-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_db_info</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$service_handle</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$db</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$action</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$argument</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div></div>
 * 
 * Request statistics about a database
 * @link https://php.net/manual/zh/function.ibase-db-info.php
 * @param resource $service_handle
 * @param string $db
 * @param int $action
 * @param int $argument [optional]
 * @return string
 */
function ibase_db_info($service_handle, $db, $action, $argument = null) {}

/**
 * <div id="function.ibase-server-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_server_info</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_server_info</span> — <span class="dc-title">Request information about a database server</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-server-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_server_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$service_handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$action</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div> </div>  <div class="refsect1 parameters" id="refsect1-function.ibase-server-info-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">service_handle</span></dt>     <dd>      <p class="para">       A previously created connection to the database server.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">action</span></dt>     <dd>      <p class="para">       A valid constant.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-server-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns mixed types depending on context.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.ibase-server-info-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1308">    <p><strong>示例 #1 <span class="function">{@link ibase_service_attach()}</span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    </span><span style="color: #FF8000">// Attach to the remote Firebird server<br>    </span><span style="color: #007700">if ((</span><span style="color: #9876AA">\$service </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_service_attach</span><span style="color: #007700">(</span><span style="color: #DD0000">'10.1.1.254/3050'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sysdba'</span><span style="color: #007700">, </span><span style="color: #DD0000">'masterkey'</span><span style="color: #007700">)) != </span><span style="color: #9876AA">FALSE</span><span style="color: #007700">) {<br><br>        </span><span style="color: #FF8000">// Successfully attached.<br><br>        // Output the info<br>        </span><span style="color: #007700">echo </span><span style="color: #DD0000">"Server version: " </span><span style="color: #007700">. </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_SERVER_VERSION</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #DD0000">"Server implementation: " </span><span style="color: #007700">. </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_IMPLEMENTATION</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #DD0000">"Server users: " </span><span style="color: #007700">. </span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_GET_USERS</span><span style="color: #007700">), </span><span style="color: #9876AA">true</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #DD0000">"Server directory: " </span><span style="color: #007700">. </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_GET_ENV</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #DD0000">"Server lock path: " </span><span style="color: #007700">. </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_GET_ENV_LOCK</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #DD0000">"Server lib path: " </span><span style="color: #007700">. </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_GET_ENV_MSG</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #DD0000">"Path of user db: " </span><span style="color: #007700">. </span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_USER_DBPATH</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #DD0000">"Established connections: " </span><span style="color: #007700">. </span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">ibase_server_info</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">, </span><span style="color: #9876AA">IBASE_SVC_SVR_DB_INFO</span><span style="color: #007700">),</span><span style="color: #9876AA">true</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br>        </span><span style="color: #FF8000">// Detach from server (disconnect)<br>        </span><span style="color: #9876AA">ibase_service_detach</span><span style="color: #007700">(</span><span style="color: #9876AA">\$service</span><span style="color: #007700">);<br><br>    }<br>    else {<br>        </span><span style="color: #FF8000">// Output message on error<br>        </span><span style="color: #9876AA">\$conn_error </span><span style="color: #007700">= </span><span style="color: #9876AA">ibase_errmsg</span><span style="color: #007700">();<br>        die(</span><span style="color: #9876AA">\$conn_error</span><span style="color: #007700">);<br>    }<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Server&nbsp;version:&nbsp;LI-V3.0.4.33054&nbsp;Firebird&nbsp;3.0<br>Server&nbsp;implementation:&nbsp;Firebird/Linux/AMD/Intel/x64<br>Server&nbsp;users:&nbsp;Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[0]&nbsp;=&gt;&nbsp;Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[user_name]&nbsp;=&gt;&nbsp;SYSDBA<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[first_name]&nbsp;=&gt;&nbsp;Sql<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[middle_name]&nbsp;=&gt;&nbsp;Server<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[last_name]&nbsp;=&gt;&nbsp;Administrator<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[user_id]&nbsp;=&gt;&nbsp;0<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[group_id]&nbsp;=&gt;&nbsp;0<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br><br>)<br><br>Server&nbsp;directory:&nbsp;/etc/firebird/<br>Server&nbsp;lock&nbsp;path:&nbsp;/tmp/firebird/<br>Server&nbsp;lib&nbsp;path:&nbsp;/usr/lib64/firebird/lib/<br>Path&nbsp;of&nbsp;user&nbsp;db:&nbsp;/var/lib/firebird/secdb/security3.fdb<br>Established&nbsp;connections:&nbsp;Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[attachments]&nbsp;=&gt;&nbsp;3<br>&nbsp;&nbsp;&nbsp;&nbsp;[databases]&nbsp;=&gt;&nbsp;2<br>&nbsp;&nbsp;&nbsp;&nbsp;[0]&nbsp;=&gt;&nbsp;/srv/firebird/poss.fdb<br>&nbsp;&nbsp;&nbsp;&nbsp;[1]&nbsp;=&gt;&nbsp;/srv/firebird/employees.fdb<br>)</blockquote></div>    </div>   </div>   </div></div>
 * 
 * Request information about a database server
 * @link https://php.net/manual/zh/function.ibase-server-info.php
 * @param resource $service_handle
 * @param int $action
 * @return string
 */
function ibase_server_info($service_handle, $action) {}

/**
 * <div id="function.ibase-wait-event" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_wait_event</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_wait_event</span> — <span class="dc-title">Wait for an event to be posted by the database</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-wait-event-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_wait_event</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$event_name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">...\$event_names</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>ibase_wait_event</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$connection</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$event_name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">...\$event_names</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   This function suspends execution of the script until one of the specified events   is posted by the database. The name of the event that was posted is returned. This   function accepts up to 15 event arguments.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-wait-event-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">event_name</span></dt>     <dd>      <p class="para">       The event name.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">event_names</span></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-wait-event-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the name of the event that was posted.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-wait-event-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_set_event_handler()} - Register a callback function to be called when events are posted</span></li>    <li><span class="function">{@link ibase_free_event_handler()} - Cancels a registered event handler</span></li>   </ul>   </div></div>
 * 
 * Wait for an event to be posted by the database
 * @link https://php.net/manual/zh/function.ibase-wait-event.php
 * @param string $event_name1 <p>
 * The event name.
 * </p>
 * @param string $event_name2 [optional] <p>
 * </p>
 * @param string ...$_ [optional]
 * @return string the name of the event that was posted.
 */
function ibase_wait_event($event_name1, $event_name2 = null, ...$_) {}

/**
 * <div id="function.ibase-set-event-handler" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_set_event_handler</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_set_event_handler</span> — <span class="dc-title">Register a callback function to be called when events are posted</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-set-event-handler-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_set_event_handler</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">\$event_handler</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$event_name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">...\$even_names</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>ibase_set_event_handler</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$connection</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">\$event_handler</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$event_name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">...\$event_names</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <p class="para rdfs-comment">   This function registers a PHP user function as event handler for the   specified events.   </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-set-event-handler-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">event_handler</span></dt>     <dd>      <p class="para">       The callback is called with the event name and the link resource as       arguments whenever one of the specified events is posted by the       database.      </p>      <p class="para">       The callback must return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if the event handler should be       canceled. Any other return value is ignored. This function accepts up       to 15 event arguments.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">event_name</span></dt>     <dd>      <p class="para">       An event name.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">event_names</span></dt>     <dd>      <p class="para">       At most 15 events allowed.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-set-event-handler-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   The return value is an event resource. This resource can be used to free   the event handler using <span class="function">{@link ibase_free_event_handler()}</span>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.ibase-set-event-handler-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-1312">    <p><strong>示例 #1 <span class="function"><strong>ibase_set_event_handler()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #007700">function </span><span style="color: #9876AA">event_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">\$event_name</span><span style="color: #007700">, </span><span style="color: #9876AA">\$link</span><span style="color: #007700">)<br>{<br>    if (</span><span style="color: #9876AA">\$event_name </span><span style="color: #007700">== </span><span style="color: #DD0000">"NEW ORDER"</span><span style="color: #007700">) {<br>        </span><span style="color: #FF8000">// process new order<br>        </span><span style="color: #9876AA">ibase_query</span><span style="color: #007700">(</span><span style="color: #9876AA">\$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"UPDATE orders SET status='handled'"</span><span style="color: #007700">);<br>    } else if (</span><span style="color: #9876AA">\$event_name </span><span style="color: #007700">== </span><span style="color: #DD0000">"DB_SHUTDOWN"</span><span style="color: #007700">) {<br>        </span><span style="color: #FF8000">// free event handler<br>        </span><span style="color: #007700">return </span><span style="color: #9876AA">false</span><span style="color: #007700">;<br>    }<br>}<br><br></span><span style="color: #9876AA">ibase_set_event_handler</span><span style="color: #007700">(</span><span style="color: #9876AA">\$link</span><span style="color: #007700">, </span><span style="color: #DD0000">"event_handler"</span><span style="color: #007700">, </span><span style="color: #DD0000">"NEW_ORDER"</span><span style="color: #007700">, </span><span style="color: #DD0000">"DB_SHUTDOWN"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.ibase-set-event-handler-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_free_event_handler()} - Cancels a registered event handler</span></li>    <li><span class="function">{@link ibase_wait_event()} - Wait for an event to be posted by the database</span></li>   </ul>   </div></div>
 * 
 * Register a callback function to be called when events are posted
 * @link https://php.net/manual/zh/function.ibase-set-event-handler.php
 * @param callable $event_handler <p>
 * The callback is called with the event name and the link resource as
 * arguments whenever one of the specified events is posted by the
 * database.
 * </p>
 * <p>
 * The callback must return false if the event handler should be
 * canceled. Any other return value is ignored. This function accepts up
 * to 15 event arguments.
 * </p>
 * @param string $event_name1 <p>
 * An event name.
 * </p>
 * @param string $event_name2 [optional] <p>
 * At most 15 events allowed.
 * </p>
 * @param string ...$_ [optional]
 * @return resource The return value is an event resource. This resource can be used to free
 * the event handler using ibase_free_event_handler.
 */
function ibase_set_event_handler($event_handler, $event_name1, $event_name2 = null, ...$_) {}

/**
 * <div id="function.ibase-free-event-handler" class="refentry"> <div class="refnamediv">  <h1 class="refname">ibase_free_event_handler</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">ibase_free_event_handler</span> — <span class="dc-title">Cancels a registered event handler</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ibase-free-event-handler-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ibase_free_event_handler</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$event</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   This function causes the registered event handler specified by   <span class="parameter" style="color:#3A95FF">event</span> to be cancelled. The callback function will   no longer be called for the events it was registered to handle.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ibase-free-event-handler-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">event</span></dt>     <dd>      <p class="para">       An event resource, created by       <span class="function">{@link ibase_set_event_handler()}</span>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ibase-free-event-handler-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.ibase-free-event-handler-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ibase_set_event_handler()} - Register a callback function to be called when events are posted</span></li>   </ul>   </div></div>
 * 
 * Cancels a registered event handler
 * @link https://php.net/manual/zh/function.ibase-free-event-handler.php
 * @param resource $event <p>
 * An event resource, created by
 * ibase_set_event_handler.
 * </p>
 * @return bool true on success or false on failure.
 */
function ibase_free_event_handler($event) {}

/**
 * <div id="function.fbird-connect" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_connect</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_connect</span> — <span class="dc-title">别名 <span class="function">{@link ibase_connect()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-connect-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_connect()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-connect-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_pconnect()} - 别名 ibase_pconnect</span></li>    <li><span class="function">{@link fbird_close()} - 别名 ibase_close</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_connect
 * Open a connection to an InterBase database
 * @link https://php.net/manual/zh/function.fbird-connect.php
 * @param string $database [optional] <p>
 * The database argument has to be a valid path to
 * database file on the server it resides on. If the server is not local,
 * it must be prefixed with either 'hostname:' (TCP/IP), '//hostname/'
 * (NetBEUI) or 'hostname@' (IPX/SPX), depending on the connection
 * protocol used.
 * </p>
 * @param string $username [optional] <p>
 * The user name. Can be set with the
 * fbird.default_user &php.ini; directive.
 * </p>
 * @param string $password [optional] <p>
 * The password for username. Can be set with the
 * fbird.default_password &php.ini; directive.
 * </p>
 * @param string $charset [optional] <p>
 * charset is the default character set for a
 * database.
 * </p>
 * @param int $buffers [optional] <p>
 * buffers is the number of database buffers to
 * allocate for the server-side cache. If 0 or omitted, server chooses
 * its own default.
 * </p>
 * @param int $dialect [optional] <p>
 * dialect selects the default SQL dialect for any
 * statement executed within a connection, and it defaults to the highest
 * one supported by client libraries. Functional only with InterBase 6
 * and up.
 * </p>
 * @param string $role [optional] <p>
 * Functional only with InterBase 5 and up.
 * </p>
 * @param int $sync [optional] <p>
 * </p>
 * @return resource|false an InterBase link identifier on success, or false on error.
 */
function fbird_connect($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null, $sync = null) {}

/**
 * <div id="function.fbird-pconnect" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_pconnect</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_pconnect</span> — <span class="dc-title">别名 <span class="function">{@link ibase_pconnect()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-pconnect-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_pconnect()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-pconnect-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_close()} - 别名 ibase_close</span></li>    <li><span class="function">{@link fbird_connect()} - 别名 ibase_connect</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_pconnect
 * Open a persistent connection to an InterBase database
 * @link https://php.net/manual/zh/function.fbird-pconnect.php
 * @param string $database [optional] <p>
 * The database argument has to be a valid path to
 * database file on the server it resides on. If the server is not local,
 * it must be prefixed with either 'hostname:' (TCP/IP), '//hostname/'
 * (NetBEUI) or 'hostname@' (IPX/SPX), depending on the connection
 * protocol used.
 * </p>
 * @param string $username [optional] <p>
 * The user name. Can be set with the
 * fbird.default_user &php.ini; directive.
 * </p>
 * @param string $password [optional] <p>
 * The password for username. Can be set with the
 * fbird.default_password &php.ini; directive.
 * </p>
 * @param string $charset [optional] <p>
 * charset is the default character set for a
 * database.
 * </p>
 * @param int $buffers [optional] <p>
 * buffers is the number of database buffers to
 * allocate for the server-side cache. If 0 or omitted, server chooses
 * its own default.
 * </p>
 * @param int $dialect [optional] <p>
 * dialect selects the default SQL dialect for any
 * statement executed within a connection, and it defaults to the highest
 * one supported by client libraries. Functional only with InterBase 6
 * and up.
 * </p>
 * @param string $role [optional] <p>
 * Functional only with InterBase 5 and up.
 * </p>
 * @param int $sync [optional] <p>
 * </p>
 * @return resource|false an InterBase link identifier on success, or false on error.
 */
function fbird_pconnect($database = null, $username = null, $password = null, $charset = null, $buffers = null, $dialect = null, $role = null, $sync = null) {}

/**
 * <div id="function.fbird-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_close</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_close</span> — <span class="dc-title">别名 <span class="function">{@link ibase_close()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-close-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_close()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_connect()} - 别名 ibase_connect</span></li>    <li><span class="function">{@link fbird_pconnect()} - 别名 ibase_pconnect</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_close
 * Close a connection to an InterBase database
 * @link https://php.net/manual/zh/function.fbird-close.php
 * @param resource $connection_id [optional] <p>
 * An InterBase link identifier returned from
 * fbird_connect. If omitted, the last opened link
 * is assumed.
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_close($connection_id = null) {}

/**
 * <div id="function.fbird-drop-db" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_drop_db</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_drop_db</span> — <span class="dc-title">别名 <span class="function">{@link ibase_drop_db()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-drop-db-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_drop_db()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-drop-db-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_connect()} - 别名 ibase_connect</span></li>    <li><span class="function">{@link fbird_pconnect()} - 别名 ibase_pconnect</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_drop_db
 * Drops a database
 * @link https://php.net/manual/zh/function.fbird-drop-db.php
 * @param resource $connection [optional] <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_drop_db($connection = null) {}

/**
 * <div id="function.fbird-query" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_query</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_query</span> — <span class="dc-title">别名 <span class="function">{@link ibase_query()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-query-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_query()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-query-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_errmsg()} - 别名 ibase_errmsg</span></li>    <li><span class="function">{@link fbird_fetch_row()} - 别名 ibase_fetch_row</span></li>    <li><span class="function">{@link fbird_fetch_object()} - 别名 ibase_fetch_object</span></li>    <li><span class="function">{@link fbird_free_result()} - 别名 ibase_free_result</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_query
 * Execute a query on an InterBase database
 * @link https://php.net/manual/zh/function.fbird-query.php
 * @param resource $link_identifier [optional] <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @param string $query <p>
 * An InterBase query.
 * </p>
 * @param int $bind_args [optional] <p>
 * </p>
 * @return resource|bool If the query raises an error, returns false. If it is successful and
 * there is a (possibly empty) result set (such as with a SELECT query),
 * returns a result identifier. If the query was successful and there were
 * no results, returns true.
 * </p>
 * <p>
 * In PHP 5.0.0 and up, this function will return the number of rows
 * affected by the query for INSERT, UPDATE and DELETE statements. In order
 * to retain backward compatibility, it will return true for these
 * statements if the query succeeded without affecting any rows.
 */
function fbird_query($link_identifier = null, $query, $bind_args = null) {}

/**
 * <div id="function.fbird-fetch-row" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_fetch_row</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_fetch_row</span> — <span class="dc-title">别名 <span class="function">{@link ibase_fetch_row()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-fetch-row-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_fetch_row()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-fetch-row-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_fetch_assoc()} - 别名 ibase_fetch_assoc</span></li>    <li><span class="function">{@link fbird_fetch_object()} - 别名 ibase_fetch_object</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_fetch_row
 * Fetch a row from an InterBase database
 * @link https://php.net/manual/zh/function.fbird-fetch-row.php
 * @param resource $result_identifier <p>
 * An InterBase result identifier.
 * </p>
 * @param int $fetch_flag [optional] <p>
 * fetch_flag is a combination of the constants
 * IBASE_TEXT and IBASE_UNIXTIME
 * ORed together. Passing IBASE_TEXT will cause this
 * function to return BLOB contents instead of BLOB ids. Passing
 * IBASE_UNIXTIME will cause this function to return
 * date/time values as Unix timestamps instead of as formatted strings.
 * </p>
 * @return array|false an array that corresponds to the fetched row, or false if there
 * are no more rows. Each result column is stored in an array offset,
 * starting at offset 0.
 */
function fbird_fetch_row($result_identifier, $fetch_flag = null) {}

/**
 * <div id="function.fbird-fetch-assoc" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_fetch_assoc</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_fetch_assoc</span> — <span class="dc-title">别名 <span class="function">{@link ibase_fetch_assoc()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-fetch-assoc-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_fetch_assoc()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-fetch-assoc-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_fetch_row()} - 别名 ibase_fetch_row</span></li>    <li><span class="function">{@link fbird_fetch_object()} - 别名 ibase_fetch_object</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_fetch_assoc
 * Fetch a result row from a query as an associative array
 * @link https://php.net/manual/zh/function.fbird-fetch-assoc.php
 * @param resource $result <p>
 * The result handle.
 * </p>
 * @param int $fetch_flag [optional] <p>
 * fetch_flag is a combination of the constants
 * IBASE_TEXT and IBASE_UNIXTIME
 * ORed together. Passing IBASE_TEXT will cause this
 * function to return BLOB contents instead of BLOB ids. Passing
 * IBASE_UNIXTIME will cause this function to return
 * date/time values as Unix timestamps instead of as formatted strings.
 * </p>
 * @return array|false an associative array that corresponds to the fetched row.
 * Subsequent calls will return the next row in the result set, or false if
 * there are no more rows.
 */
function fbird_fetch_assoc($result, $fetch_flag = null) {}

/**
 * <div id="function.fbird-fetch-object" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_fetch_object</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_fetch_object</span> — <span class="dc-title">别名 <span class="function">{@link ibase_fetch_object()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-fetch-object-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_fetch_object()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-fetch-object-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_fetch_row()} - 别名 ibase_fetch_row</span></li>    <li><span class="function">{@link fbird_fetch_assoc()} - 别名 ibase_fetch_assoc</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_fetch_object
 * Get an object from a InterBase database
 * @link https://php.net/manual/zh/function.fbird-fetch-object.php
 * @param resource $result_id <p>
 * An InterBase result identifier obtained either by
 * fbird_query or fbird_execute.
 * </p>
 * @param int $fetch_flag [optional] <p>
 * fetch_flag is a combination of the constants
 * IBASE_TEXT and IBASE_UNIXTIME
 * ORed together. Passing IBASE_TEXT will cause this
 * function to return BLOB contents instead of BLOB ids. Passing
 * IBASE_UNIXTIME will cause this function to return
 * date/time values as Unix timestamps instead of as formatted strings.
 * </p>
 * @return object|false an object with the next row information, or false if there are
 * no more rows.
 */
function fbird_fetch_object($result_id, $fetch_flag = null) {}

/**
 * <div id="function.fbird-free-result" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_free_result</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_free_result</span> — <span class="dc-title">别名 <span class="function">{@link ibase_free_result()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-free-result-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_free_result()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_free_result
 * Free a result set
 * @link https://php.net/manual/zh/function.fbird-free-result.php
 * @param resource $result_identifier <p>
 * A result set created by fbird_query or
 * fbird_execute.
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_free_result($result_identifier) {}

/**
 * <div id="function.fbird-name-result" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_name_result</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_name_result</span> — <span class="dc-title">别名 <span class="function">{@link ibase_name_result()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-name-result-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_name_result()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-name-result-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_prepare()} - 别名 ibase_prepare</span></li>    <li><span class="function">{@link fbird_execute()} - 别名 ibase_execute</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_name_result
 * Assigns a name to a result set
 * @link https://php.net/manual/zh/function.fbird-name-result.php
 * @param resource $result <p>
 * An InterBase result set.
 * </p>
 * @param string $name <p>
 * The name to be assigned.
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_name_result($result, $name) {}

/**
 * <div id="function.fbird-prepare" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_prepare</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_prepare</span> — <span class="dc-title">别名 <span class="function">{@link ibase_prepare()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-prepare-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_prepare()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_prepare
 * Prepare a query for later binding of parameter placeholders and execution
 * @link https://php.net/manual/zh/function.fbird-prepare.php
 * @param string $query <p>
 * An InterBase query.
 * </p>
 * @return resource|false a prepared query handle, or false on error.
 */
function fbird_prepare($query) {}

/**
 * <div id="function.fbird-execute" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_execute</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_execute</span> — <span class="dc-title">别名 <span class="function">{@link ibase_execute()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-execute-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_execute()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-execute-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_query()} - 别名 ibase_query</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_execute
 * Execute a previously prepared query
 * @link https://php.net/manual/zh/function.fbird-execute.php
 * @param resource $query <p>
 * An InterBase query prepared by fbird_prepare.
 * </p>
 * @param mixed ...$bind_arg [optional]
 * @return resource|bool <p>If the query raises an error, returns false. If it is successful and
 * there is a (possibly empty) result set (such as with a SELECT query),
 * returns a result identifier. If the query was successful and there were
 * no results, returns true.
 * </p>
 * <p>
 * In PHP 5.0.0 and up, this function returns the number of rows affected by
 * the query (if > 0 and applicable to the statement type). A query that
 * succeeded, but did not affect any rows (e.g. an UPDATE of a non-existent
 * record) will return true.</p>
 */
function fbird_execute($query, ...$bind_arg) {}

/**
 * <div id="function.fbird-free-query" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_free_query</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_free_query</span> — <span class="dc-title">别名 <span class="function">{@link ibase_free_query()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-free-query-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_free_query()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_free_query
 * Free memory allocated by a prepared query
 * @link https://php.net/manual/zh/function.fbird-free-query.php
 * @param resource $query <p>
 * A query prepared with fbird_prepare.
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_free_query($query) {}

/**
 * <div id="function.fbird-gen-id" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_gen_id</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_gen_id</span> — <span class="dc-title">别名 <span class="function">{@link ibase_gen_id()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-gen-id-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_gen_id()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_gen_id
 * Increments the named generator and returns its new value
 * @link https://php.net/manual/zh/function.fbird-gen-id.php
 * @param string $generator
 * @param int $increment [optional]
 * @param resource $link_identifier [optional]
 * @return mixed new generator value as integer, or as string if the value is too big.
 */
function fbird_gen_id($generator, $increment = null, $link_identifier = null) {}

/**
 * <div id="function.fbird-num-fields" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_num_fields</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_num_fields</span> — <span class="dc-title">别名 <span class="function">{@link ibase_num_fields()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-num-fields-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_num_fields()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-num-fields-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_field_info()} - 别名 ibase_field_info</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_num_fields
 * Get the number of fields in a result set
 * @link https://php.net/manual/zh/function.fbird-num-fields.php
 * @param resource $result_id <p>
 * An InterBase result identifier.
 * </p>
 * @return int the number of fields as an integer.
 */
function fbird_num_fields($result_id) {}

/**
 * <div id="function.fbird-num-params" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_num_params</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_num_params</span> — <span class="dc-title">别名 <span class="function">{@link ibase_num_params()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-num-params-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_num_params()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-num-params-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_prepare()} - 别名 ibase_prepare</span></li>    <li><span class="function">{@link fbird_param_info()} - 别名 ibase_param_info</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_num_params
 * Return the number of parameters in a prepared query
 * @link https://php.net/manual/zh/function.fbird-num-params.php
 * @param resource $query <p>
 * The prepared query handle.
 * </p>
 * @return int the number of parameters as an integer.
 */
function fbird_num_params($query) {}

/**
 * <div id="function.fbird-affected-rows" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_affected_rows</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_affected_rows</span> — <span class="dc-title">别名 <span class="function">{@link ibase_affected_rows()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-affected-rows-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_affected_rows()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-affected-rows-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_query()} - 别名 ibase_query</span></li>    <li><span class="function">{@link fbird_execute()} - 别名 ibase_execute</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_affected_rows
 * Return the number of rows that were affected by the previous query
 * @link https://php.net/manual/zh/function.fbird-affected-rows.php
 * @param resource $link_identifier [optional] <p>
 * A transaction context. If link_identifier is a
 * connection resource, its default transaction is used.
 * </p>
 * @return int the number of rows as an integer.
 */
function fbird_affected_rows($link_identifier = null) {}

/**
 * <div id="function.fbird-field-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_field_info</h1> <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_field_info</span> — <span class="dc-title">别名 <span class="function">{@link ibase_field_info()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-field-info-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_field_info()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-field-info-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_num_fields()} - 别名 ibase_num_fields</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_field_info
 * Get information about a field
 * @link https://php.net/manual/zh/function.fbird-field-info.php
 * @param resource $result <p>
 * An InterBase result identifier.
 * </p>
 * @param int $field_number <p>
 * Field offset.
 * </p>
 * @return array an array with the following keys: name,
 * alias, relation,
 * length and type.
 */
function fbird_field_info($result, $field_number) {}

/**
 * <div id="function.fbird-param-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_param_info</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_param_info</span> — <span class="dc-title">别名 <span class="function">{@link ibase_param_info()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-param-info-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_param_info()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-param-info-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_field_info()} - 别名 ibase_field_info</span></li>    <li><span class="function">{@link fbird_num_params()} - 别名 ibase_num_params</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_param_info
 * Return information about a parameter in a prepared query
 * @link https://php.net/manual/zh/function.fbird-param-info.php
 * @param resource $query <p>
 * An InterBase prepared query handle.
 * </p>
 * @param int $param_number <p>
 * Parameter offset.
 * </p>
 * @return array an array with the following keys: name,
 * alias, relation,
 * length and type.
 */
function fbird_param_info($query, $param_number) {}

/**
 * <div id="function.fbird-trans" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_trans</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_trans</span> — <span class="dc-title">别名 <span class="function">{@link ibase_trans()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-trans-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_trans()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_trans
 * Begin a transaction
 * @link https://php.net/manual/zh/function.fbird-trans.php
 * @param int $trans_args [optional] <p>
 * trans_args can be a combination of
 * IBASE_READ,
 * IBASE_WRITE,
 * IBASE_COMMITTED,
 * IBASE_CONSISTENCY,
 * IBASE_CONCURRENCY,
 * IBASE_REC_VERSION,
 * IBASE_REC_NO_VERSION,
 * IBASE_WAIT and
 * IBASE_NOWAIT.
 * </p>
 * @param resource $link_identifier [optional] <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @return resource|false a transaction handle, or false on error.
 */
function fbird_trans($trans_args = null, $link_identifier = null) {}

/**
 * <div id="function.fbird-commit" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_commit</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_commit</span> — <span class="dc-title">别名 <span class="function">{@link ibase_commit()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-commit-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_commit()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_commit
 * Commit a transaction
 * @link https://php.net/manual/zh/function.fbird-commit.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * If called without an argument, this function commits the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be committed. If the argument is a transaction identifier, the
 * corresponding transaction will be committed.
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_commit($link_or_trans_identifier = null) {}

/**
 * <div id="function.fbird-rollback" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_rollback</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_rollback</span> — <span class="dc-title">别名 <span class="function">{@link ibase_rollback()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-rollback-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_rollback()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_rollback
 * Roll back a transaction
 * @link https://php.net/manual/zh/function.fbird-rollback.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * If called without an argument, this function rolls back the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be rolled back. If the argument is a transaction identifier, the
 * corresponding transaction will be rolled back.
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_rollback($link_or_trans_identifier = null) {}

/**
 * <div id="function.fbird-commit-ret" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_commit_ret</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_commit_ret</span> — <span class="dc-title">别名 <span class="function">{@link ibase_commit_ret()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-commit-ret-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_commit_ret()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_commit_ret
 * Commit a transaction without closing it
 * @link https://php.net/manual/zh/function.fbird-commit-ret.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * If called without an argument, this function commits the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be committed. If the argument is a transaction identifier, the
 * corresponding transaction will be committed. The transaction context
 * will be retained, so statements executed from within this transaction
 * will not be invalidated.
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_commit_ret($link_or_trans_identifier = null) {}

/**
 * <div id="function.fbird-rollback-ret" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_rollback_ret</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_rollback_ret</span> — <span class="dc-title">别名 <span class="function">{@link ibase_rollback_ret()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-rollback-ret-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_rollback_ret()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_rollback_ret
 * Roll back a transaction without closing it
 * @link https://php.net/manual/zh/function.fbird-rollback-ret.php
 * @param resource $link_or_trans_identifier [optional] <p>
 * If called without an argument, this function rolls back the default
 * transaction of the default link. If the argument is a connection
 * identifier, the default transaction of the corresponding connection
 * will be rolled back. If the argument is a transaction identifier, the
 * corresponding transaction will be rolled back. The transaction context
 * will be retained, so statements executed from within this transaction
 * will not be invalidated.
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_rollback_ret($link_or_trans_identifier = null) {}

/**
 * <div id="function.fbird-blob-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_blob_info</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_blob_info</span> — <span class="dc-title">别名 <span class="function">{@link ibase_blob_info()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-blob-info-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_blob_info()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_blob_info
 * Return blob length and other useful info
 * @link https://php.net/manual/zh/function.fbird-blob-info.php
 * @param resource $link_identifier <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @param string $blob_id <p>
 * A BLOB id.
 * </p>
 * @return array an array containing information about a BLOB. The information returned
 * consists of the length of the BLOB, the number of segments it contains, the size
 * of the largest segment, and whether it is a stream BLOB or a segmented BLOB.
 */
function fbird_blob_info($link_identifier, $blob_id) {}

/**
 * <div id="function.fbird-blob-create" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_blob_create</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_blob_create</span> — <span class="dc-title">别名 <span class="function">{@link ibase_blob_create()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-blob-create-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_blob_create()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-blob-create-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_blob_add()} - 别名 ibase_blob_add</span></li>    <li><span class="function">{@link fbird_blob_cancel()} - Cancel creating blob</span></li>    <li><span class="function">{@link fbird_blob_close()} - 别名 ibase_blob_close</span></li>    <li><span class="function">{@link fbird_blob_import()} - 别名 ibase_blob_import</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_blob_create
 * Create a new blob for adding data
 * @link https://php.net/manual/zh/function.fbird-blob-create.php
 * @param resource $link_identifier [optional] <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @return resource|false a BLOB handle for later use with
 * fbird_blob_add or false on failure.
 */
function fbird_blob_create($link_identifier = null) {}

/**
 * <div id="function.fbird-blob-add" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_blob_add</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_blob_add</span> — <span class="dc-title">别名 <span class="function">{@link ibase_blob_add()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-blob-add-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_blob_add()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-blob-add-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_blob_cancel()} - Cancel creating blob</span></li>    <li><span class="function">{@link fbird_blob_close()} - 别名 ibase_blob_close</span></li>    <li><span class="function">{@link fbird_blob_create()} - 别名 ibase_blob_create</span></li>    <li><span class="function">{@link fbird_blob_import()} - 别名 ibase_blob_import</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_blob_add
 * Add data into a newly created blob
 * @link https://php.net/manual/zh/function.fbird-blob-add.php
 * @param resource $blob_handle <p>
 * A blob handle opened with fbird_blob_create.
 * </p>
 * @param string $data <p>
 * The data to be added.
 * </p>
 * @return void
 */
function fbird_blob_add($blob_handle, $data) {}

/**
 * <div id="function.fbird-blob-cancel" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_blob_cancel</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_blob_cancel</span> — <span class="dc-title">Cancel creating blob</span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-blob-cancel-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>fbird_blob_cancel</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$blob_handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   This function will discard a BLOB if it has not yet been closed by   <span class="function">{@link fbird_blob_close()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.fbird-blob-cancel-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">blob_handle</span></dt>     <dd>      <p class="para">       A BLOB handle opened with <span class="function">{@link fbird_blob_create()}</span>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.fbird-blob-cancel-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-blob-cancel-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_blob_close()} - 别名 ibase_blob_close</span></li>    <li><span class="function">{@link fbird_blob_create()} - 别名 ibase_blob_create</span></li>    <li><span class="function">{@link fbird_blob_import()} - 别名 ibase_blob_import</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_blob_cancel
 * Cancel creating blob
 * @link https://php.net/manual/zh/function.fbird-blob-cancel.php
 * @param resource $blob_handle <p>
 * A BLOB handle opened with fbird_blob_create.
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_blob_cancel($blob_handle) {}

/**
 * <div id="function.fbird-blob-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_blob_close</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_blob_close</span> — <span class="dc-title">别名 <span class="function">{@link ibase_blob_close()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-blob-close-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_blob_close()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-blob-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_blob_create()} - 别名 ibase_blob_create</span></li>    <li><span class="function">{@link fbird_blob_cancel()} - Cancel creating blob</span></li>    <li><span class="function">{@link fbird_blob_open()} - 别名 ibase_blob_open</span></li>    <li><span class="function">{@link fbird_blob_import()} - 别名 ibase_blob_import</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_blob_close
 * Close blob
 * @link https://php.net/manual/zh/function.fbird-blob-close.php
 * @param resource $blob_handle <p>
 * A BLOB handle opened with fbird_blob_create or
 * fbird_blob_open.
 * </p>
 * @return mixed If the BLOB was being read, this function returns true on success, if
 * the BLOB was being written to, this function returns a string containing
 * the BLOB id that has been assigned to it by the database. On failure, this
 * function returns false.
 */
function fbird_blob_close($blob_handle) {}

/**
 * <div id="function.fbird-blob-open" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_blob_open</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_blob_open</span> — <span class="dc-title">别名 <span class="function">{@link ibase_blob_open()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-blob-open-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_blob_open()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-blob-open-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_blob_close()} - 别名 ibase_blob_close</span></li>    <li><span class="function">{@link fbird_blob_echo()} - 别名 ibase_blob_echo</span></li>    <li><span class="function">{@link fbird_blob_get()} - 别名 ibase_blob_get</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_blob_open
 * Open blob for retrieving data parts
 * @link https://php.net/manual/zh/function.fbird-blob-open.php
 * @param resource $link_identifier <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @param string $blob_id <p>
 * A BLOB id.
 * </p>
 * @return resource|false a BLOB handle for later use with
 * fbird_blob_get or false on failure.
 */
function fbird_blob_open($link_identifier, $blob_id) {}

/**
 * <div id="function.fbird-blob-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_blob_get</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_blob_get</span> — <span class="dc-title">别名 <span class="function">{@link ibase_blob_get()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-blob-get-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_blob_get()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-blob-get-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_blob_open()} - 别名 ibase_blob_open</span></li>    <li><span class="function">{@link fbird_blob_close()} - 别名 ibase_blob_close</span></li>    <li><span class="function">{@link fbird_blob_echo()} - 别名 ibase_blob_echo</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_blob_get
 * Get len bytes data from open blob
 * @link https://php.net/manual/zh/function.fbird-blob-get.php
 * @param resource $blob_handle <p>
 * A BLOB handle opened with fbird_blob_open.
 * </p>
 * @param int $len <p>
 * Size of returned data.
 * </p>
 * @return string|false at most len bytes from the BLOB, or false
 * on failure.
 */
function fbird_blob_get($blob_handle, $len) {}

/**
 * <div id="function.fbird-blob-echo" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_blob_echo</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_blob_echo</span> — <span class="dc-title">别名 <span class="function">{@link ibase_blob_echo()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-blob-echo-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_blob_echo()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-blob-echo-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_blob_open()} - 别名 ibase_blob_open</span></li>    <li><span class="function">{@link fbird_blob_close()} - 别名 ibase_blob_close</span></li>    <li><span class="function">{@link fbird_blob_get()} - 别名 ibase_blob_get</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_blob_echo
 * Output blob contents to browser
 * @link https://php.net/manual/zh/function.fbird-blob-echo.php
 * @param string $blob_id <p>
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_blob_echo($blob_id) {}

/**
 * <div id="function.fbird-blob-import" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_blob_import</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_blob_import</span> — <span class="dc-title">别名 <span class="function">{@link ibase_blob_import()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-blob-import-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_blob_import()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-blob-import-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_blob_add()} - 别名 ibase_blob_add</span></li>    <li><span class="function">{@link fbird_blob_cancel()} - Cancel creating blob</span></li>    <li><span class="function">{@link fbird_blob_close()} - 别名 ibase_blob_close</span></li>    <li><span class="function">{@link fbird_blob_create()} - 别名 ibase_blob_create</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_blob_import
 * Create blob, copy file in it, and close it
 * @link https://php.net/manual/zh/function.fbird-blob-import.php
 * @param resource $link_identifier <p>
 * An InterBase link identifier. If omitted, the last opened link is
 * assumed.
 * </p>
 * @param resource $file_handle <p>
 * The file handle is a handle returned by fopen.
 * </p>
 * @return string|false the BLOB id on success, or false on error.
 */
function fbird_blob_import($link_identifier, $file_handle) {}

/**
 * <div id="function.fbird-errmsg" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_errmsg</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_errmsg</span> — <span class="dc-title">别名 <span class="function">{@link ibase_errmsg()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-errmsg-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_errmsg()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-errmsg-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_errcode()} - 别名 ibase_errcode</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_errmsg
 * Return error messages
 * @link https://php.net/manual/zh/function.fbird-errmsg.php
 * @return string|false the error message as a string, or false if no error occurred.
 */
function fbird_errmsg() {}

/**
 * <div id="function.fbird-errcode" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_errcode</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_errcode</span> — <span class="dc-title">别名 <span class="function">{@link ibase_errcode()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-errcode-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_errcode()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-errcode-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_errmsg()} - 别名 ibase_errmsg</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_errcode
 * Return an error code
 * @link https://php.net/manual/zh/function.fbird-errcode.php
 * @return int|false the error code as an integer, or false if no error occurred.
 */
function fbird_errcode() {}

/**
 * <div id="function.fbird-add-user" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_add_user</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_add_user</span> — <span class="dc-title">别名 <span class="function">{@link ibase_add_user()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-add-user-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_add_user()}</span>.  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.fbird-add-user-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_modify_user()} - 别名 ibase_modify_user</span></li>    <li><span class="function">{@link fbird_delete_user()} - 别名 ibase_delete_user</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_add_user
 * Add a user to a security database (only for IB6 or later)
 * @link https://php.net/manual/zh/function.fbird-add-user.php
 * @param resource $service_handle
 * @param string $user_name
 * @param string $password
 * @param string $first_name [optional]
 * @param string $middle_name [optional]
 * @param string $last_name [optional]
 * @return bool true on success or false on failure.
 */
function fbird_add_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null) {}

/**
 * <div id="function.fbird-modify-user" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_modify_user</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_modify_user</span> — <span class="dc-title">别名 <span class="function">{@link ibase_modify_user()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-modify-user-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_modify_user()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-modify-user-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_add_user()} - 别名 ibase_add_user</span></li>    <li><span class="function">{@link fbird_delete_user()} - 别名 ibase_delete_user</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_modify_user
 * Modify a user to a security database (only for IB6 or later)
 * @link https://php.net/manual/zh/function.fbird-modify-user.php
 * @param resource $service_handle
 * @param string $user_name
 * @param string $password
 * @param string $first_name [optional]
 * @param string $middle_name [optional]
 * @param string $last_name [optional]
 * @return bool true on success or false on failure.
 */
function fbird_modify_user($service_handle, $user_name, $password, $first_name = null, $middle_name = null, $last_name = null) {}

/**
 * <div id="function.fbird-delete-user" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_delete_user</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_delete_user</span> — <span class="dc-title">别名 <span class="function">{@link ibase_delete_user()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-delete-user-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_delete_user()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-delete-user-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_add_user()} - 别名 ibase_add_user</span></li>    <li><span class="function">{@link fbird_modify_user()} - 别名 ibase_modify_user</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_delete_user
 * Delete a user from a security database (only for IB6 or later)
 * @link https://php.net/manual/zh/function.fbird-delete-user.php
 * @param resource $service_handle
 * @param string $user_name
 * @return bool true on success or false on failure.
 */
function fbird_delete_user($service_handle, $user_name) {}

/**
 * <div id="function.fbird-service-attach" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_service_attach</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_service_attach</span> — <span class="dc-title">别名 <span class="function">{@link ibase_service_attach()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-service-attach-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_service_attach()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_service_attach
 * Connect to the service manager
 * @link https://php.net/manual/zh/function.fbird-service-attach.php
 * @param string $host
 * @param string $dba_username
 * @param string $dba_password
 * @return resource|false
 */
function fbird_service_attach($host, $dba_username, $dba_password) {}

/**
 * <div id="function.fbird-service-detach" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_service_detach</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_service_detach</span> — <span class="dc-title">别名 <span class="function">{@link ibase_service_detach()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-service-detach-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_service_detach()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_service_detach
 * Disconnect from the service manager
 * @link https://php.net/manual/zh/function.fbird-service-detach.php
 * @param resource $service_handle
 * @return bool true on success or false on failure.
 */
function fbird_service_detach($service_handle) {}

/**
 * <div id="function.fbird-backup" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_backup</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_backup</span> — <span class="dc-title">别名 <span class="function">{@link ibase_backup()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-backup-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_backup()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_backup
 * Initiates a backup task in the service manager and returns immediately
 * @link https://php.net/manual/zh/function.fbird-backup.php
 * @param resource $service_handle
 * @param string $source_db
 * @param string $dest_file
 * @param int $options [optional]
 * @param bool $verbose [optional]
 * @return mixed
 */
function fbird_backup($service_handle, $source_db, $dest_file, $options = null, $verbose = null) {}

/**
 * <div id="function.fbird-restore" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_restore</h1> <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_restore</span> — <span class="dc-title">别名 <span class="function">{@link ibase_restore()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-restore-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_restore()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_restore
 * Initiates a restore task in the service manager and returns immediately
 * @link https://php.net/manual/zh/function.fbird-restore.php
 * @param resource $service_handle
 * @param string $source_file
 * @param string $dest_db
 * @param int $options [optional]
 * @param bool $verbose [optional]
 * @return mixed
 */
function fbird_restore($service_handle, $source_file, $dest_db, $options = null, $verbose = null) {}

/**
 * <div id="function.fbird-maintain-db" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_maintain_db</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_maintain_db</span> — <span class="dc-title">别名 <span class="function">{@link ibase_maintain_db()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-maintain-db-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_maintain_db()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_maintain_db
 * Execute a maintenance command on the database server
 * @link https://php.net/manual/zh/function.fbird-maintain-db.php
 * @param resource $service_handle
 * @param string $db
 * @param int $action
 * @param int $argument [optional]
 * @return bool true on success or false on failure.
 */
function fbird_maintain_db($service_handle, $db, $action, $argument = null) {}

/**
 * <div id="function.fbird-db-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_db_info</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_db_info</span> — <span class="dc-title">别名 <span class="function">{@link ibase_db_info()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-db-info-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_db_info()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_db_info
 * Request statistics about a database
 * @link https://php.net/manual/zh/function.fbird-db-info.php
 * @param resource $service_handle
 * @param string $db
 * @param int $action
 * @param int $argument [optional]
 * @return string
 */
function fbird_db_info($service_handle, $db, $action, $argument = null) {}

/**
 * <div id="function.fbird-server-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_server_info</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_server_info</span> — <span class="dc-title">别名 <span class="function">{@link ibase_server_info()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-server-info-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_server_info()}</span>.  </p> </div></div>
 * 
 * This is an alias of ibase_server_info
 * Request information about a database server
 * @link https://php.net/manual/zh/function.fbird-server-info.php
 * @param resource $service_handle
 * @param int $action
 * @return string
 */
function fbird_server_info($service_handle, $action) {}

/**
 * <div id="function.fbird-wait-event" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_wait_event</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_wait_event</span> — <span class="dc-title">别名 <span class="function">{@link ibase_wait_event()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-wait-event-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_wait_event()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-wait-event-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_set_event_handler()} - 别名 ibase_set_event_handler</span></li>    <li><span class="function">{@link fbird_free_event_handler()} - 别名 ibase_free_event_handler</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_wait_event
 * Wait for an event to be posted by the database
 * @link https://php.net/manual/zh/function.fbird-wait-event.php
 * @param string $event_name1 <p>
 * The event name.
 * </p>
 * @param string $event_name2 [optional] <p>
 * </p>
 * @param string ...$_ [optional]
 * @return string the name of the event that was posted.
 */
function fbird_wait_event($event_name1, $event_name2 = null, ...$_) {}

/**
 * <div id="function.fbird-set-event-handler" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_set_event_handler</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_set_event_handler</span> — <span class="dc-title">别名 <span class="function">{@link ibase_set_event_handler()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-set-event-handler-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_set_event_handler()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-set-event-handler-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_free_event_handler()} - 别名 ibase_free_event_handler</span></li>    <li><span class="function">{@link fbird_wait_event()} - 别名 ibase_wait_event</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_set_event_handler
 * Register a callback function to be called when events are posted
 * @link https://php.net/manual/zh/function.fbird-set-event-handler.php
 * @param callable $event_handler <p>
 * The callback is called with the event name and the link resource as
 * arguments whenever one of the specified events is posted by the
 * database.
 * </p>
 * <p>
 * The callback must return false if the event handler should be
 * canceled. Any other return value is ignored. This function accepts up
 * to 15 event arguments.
 * </p>
 * @param string $event_name1 <p>
 * An event name.
 * </p>
 * @param string $event_name2 [optional] <p>
 * At most 15 events allowed.
 * </p>
 * @param string ...$_ [optional]
 * @return resource The return value is an event resource. This resource can be used to free
 * the event handler using fbird_free_event_handler.
 */
function fbird_set_event_handler($event_handler, $event_name1, $event_name2 = null, ...$_) {}

/**
 * <div id="function.fbird-free-event-handler" class="refentry"> <div class="refnamediv">  <h1 class="refname">fbird_free_event_handler</h1>  <p class="verinfo">(PHP 5, PHP 7 &lt; 7.4.0)</p><p class="refpurpose"><span class="refname">fbird_free_event_handler</span> — <span class="dc-title">别名 <span class="function">{@link ibase_free_event_handler()}</span></span></p> </div>  <div class="refsect1 description" id="refsect1-function.fbird-free-event-handler-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link ibase_free_event_handler()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.fbird-free-event-handler-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link fbird_set_event_handler()} - 别名 ibase_set_event_handler</span></li>   </ul>   </div></div>
 * 
 * This is an alias of ibase_free_event_handler
 * Cancels a registered event handler
 * @link https://php.net/manual/zh/function.fbird-free-event-handler.php
 * @param resource $event <p>
 * An event resource, created by
 * fbird_set_event_handler.
 * </p>
 * @return bool true on success or false on failure.
 */
function fbird_free_event_handler($event) {}

/**
 * The default transaction settings are to be used.
 * This default is determined by the client library, which defines it as IBASE_WRITE|IBASE_CONCURRENCY|IBASE_WAIT in most cases.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_DEFAULT', 0);
/**
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_CREATE', 0);
/**
 * Causes BLOB contents to be fetched inline, instead of being fetched as BLOB identifiers.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_TEXT', 1);
/**
 * Also available as IBASE_TEXT for backward compatibility.
 * Causes BLOB contents to be fetched inline, instead of being fetched as BLOB identifiers.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_FETCH_BLOBS', 1);
/**
 * Causes arrays to be fetched inline. Otherwise, array identifiers are returned.
 * Array identifiers can only be used as arguments to INSERT operations, as no functions to handle array identifiers are currently available.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_FETCH_ARRAYS', 2);
/**
 * Causes date and time fields not to be returned as strings, but as UNIX timestamps (the number of seconds since the epoch, which is 1-Jan-1970 0:00 UTC).
 * Might be problematic if used with dates before 1970 on some systems.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_UNIXTIME', 4);
/**
 * Starts a read-write transaction.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_WRITE', 1);
/**
 * Starts a read-only transaction.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_READ', 2);
/**
 * Starts a transaction with the isolation level set to 'read committed'.
 * This flag should be combined with either <b>IBASE_REC_VERSION</b> or <b>IBASE_REC_NO_VERSION</b>.
 * This isolation level allows access to changes that were committed after the transaction was started.
 * If <b>IBASE_REC_NO_VERSION</b> was specified, only the latest version of a row can be read.
 * If <b>IBASE_REC_VERSION</b> was specified, a row can even be read when a modification to it is pending in a concurrent transaction.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_COMMITTED', 8);
/**
 * Starts a transaction with the isolation level set to 'consistency',
 * which means the transaction cannot read from tables that are being modified by other concurrent transactions.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_CONSISTENCY', 16);
/**
 * Starts a transaction with the isolation level set to 'concurrency' (or 'snapshot'),
 * which means the transaction has access to all tables,
 * but cannot see changes that were committed by other transactions after the transaction was started.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_CONCURRENCY', 4);
/**
 * Row can even be read when a modification to it is pending in a concurrent transaction.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_REC_VERSION', 64);
/**
 * Only the latest version of a row can be read
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_REC_NO_VERSION', 32);
/**
 * Indicated that a transaction should fail immediately when a conflict occurs.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_NOWAIT', 256);
/**
 * Indicated that a transaction should wait and retry when a conflict occurs.
 * @link https://www.php.net/manual/en/ibase.constants.php
 */
define('IBASE_WAIT', 128);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_backup()}</span>      </span>
 */
define('IBASE_BKP_IGNORE_CHECKSUMS', 1);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_backup()}</span>      </span>
 */
define('IBASE_BKP_IGNORE_LIMBO', 2);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_backup()}</span>      </span>
 */
define('IBASE_BKP_METADATA_ONLY', 4);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_backup()}</span>      </span>
 */
define('IBASE_BKP_NO_GARBAGE_COLLECT', 8);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_backup()}</span>      </span>
 */
define('IBASE_BKP_OLD_DESCRIPTIONS', 16);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_backup()}</span>      </span>
 */
define('IBASE_BKP_NON_TRANSPORTABLE', 32);

/**
 * <span class="simpara">      Options to <span class="function">{@link ibase_backup()}</span>      </span>
 * 
 * Options to ibase_backup
 * @link https://php.net/manual/zh/ibase.constants.php
 */
define('IBASE_BKP_CONVERT', 64);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_restore()}</span>      </span>
 */
define('IBASE_RES_DEACTIVATE_IDX', 256);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_restore()}</span>      </span>
 */
define('IBASE_RES_NO_SHADOW', 512);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_restore()}</span>      </span>
 */
define('IBASE_RES_NO_VALIDITY', 1024);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_restore()}</span>      </span>
 */
define('IBASE_RES_ONE_AT_A_TIME', 2048);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_RES_REPLACE', 4096);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_restore()}</span>      </span>
 */
define('IBASE_RES_CREATE', 8192);

/**
 * <span class="simpara">      Options to <span class="function">{@link ibase_restore()}</span>      </span>
 * 
 * Options to ibase_restore
 * @link https://php.net/manual/zh/ibase.constants.php
 */
define('IBASE_RES_USE_ALL_SPACE', 16384);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_PAGE_BUFFERS', 5);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_SWEEP_INTERVAL', 6);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_SHUTDOWN_DB', 7);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_DENY_NEW_TRANSACTIONS', 10);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_DENY_NEW_ATTACHMENTS', 9);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_RESERVE_SPACE', 11);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_RES_USE_FULL', 35);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_RES', 36);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_WRITE_MODE', 12);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_WM_ASYNC', 37);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_WM_SYNC', 38);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_ACCESS_MODE', 13);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_AM_READONLY', 39);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_AM_READWRITE', 40);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_SET_SQL_DIALECT', 14);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_ACTIVATE', 256);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_PRP_DB_ONLINE', 512);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_RPR_CHECK_DB', 16);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_RPR_IGNORE_CHECKSUM', 32);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_RPR_KILL_SHADOWS', 64);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_RPR_MEND_DB', 4);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_RPR_VALIDATE_DB', 1);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_RPR_FULL', 128);

/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_maintain_db()}</span>      </span>
 * 
 * Options to ibase_maintain_db
 * @link https://php.net/manual/zh/ibase.constants.php
 */
define('IBASE_RPR_SWEEP_DB', 2);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_STS_DATA_PAGES', 1);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_STS_DB_LOG', 2);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_STS_HDR_PAGES', 4);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_STS_IDX_PAGES', 8);

/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_db_info()}</span>      </span>
 * 
 * Options to ibase_db_info
 * @link https://php.net/manual/zh/ibase.constants.php
 */
define('IBASE_STS_SYS_RELATIONS', 16);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_server_info()}</span>      </span>
 */
define('IBASE_SVC_SERVER_VERSION', 55);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_server_info()}</span>      </span>
 */
define('IBASE_SVC_IMPLEMENTATION', 56);
/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_server_info()}</span>      </span>
 */
define('IBASE_SVC_GET_ENV', 59);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_SVC_GET_ENV_LOCK', 60);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_SVC_GET_ENV_MSG', 61);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_SVC_USER_DBPATH', 58);
/**
 * <span class="simpara">      </span>
 */
define('IBASE_SVC_SVR_DB_INFO', 50);

/**
 * <span class="simpara">       Options to <span class="function">{@link ibase_server_info()}</span>      </span>
 * 
 * Options to ibase_server_info
 * @link https://php.net/manual/zh/ibase.constants.php
 */
define('IBASE_SVC_GET_USERS', 68);

// End of interbase v.
