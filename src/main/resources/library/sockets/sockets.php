<?php

// Start of sockets v.
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;

/**
* <div id="function.socket-addrinfo-lookup" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_addrinfo_lookup</h1>  <p class="verinfo">(PHP 7 &gt;= 7.2.0, PHP 8)</p><p class="refpurpose"><span class="refname">socket_addrinfo_lookup</span> — <span class="dc-title">获取数组，包含有关给定主机名的 getaddrinfo 内容</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-addrinfo-lookup-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_addrinfo_lookup</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$host</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$service</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$hints</span><span class="initializer"> = []</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   查找可以连接到 <span class="parameter" style="color:#3A95FF">host</span> 的不同方式。返回的数组包含 <span class="classname"><a href="https://php.net/manual/zh/class.addressinfo.php" class="classname">AddressInfo</a></span>    实例列表，可以使用 <span class="function">{@link socket_addrinfo_bind()}</span> 绑定这些实例。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-addrinfo-lookup-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">host</span></dt>    <dd>     <p class="para">      搜索的主机名。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">service</span></dt>    <dd>     <p class="para">      要连接的服务。如果 service 是字符串数字，它指定为端口号。否则指定的是一个网络服务名称，会被操作系统映射到对应端口。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">hints</span></dt>    <dd>     <p class="para">      Hints 提供了选择返回地址的标准。可以指定为由 getaddrinfo 定义的 hints 结构。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-addrinfo-lookup-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回可以与 <span class="function"><strong>socket_addrinfo_()</strong><span class="replaceable">*</span></span> 函数集一起使用的 <span class="classname"><a href="https://php.net/manual/zh/class.addressinfo.php" class="classname">AddressInfo</a></span> 实例数组。失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 changelog" id="refsect1-function.socket-addrinfo-lookup-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       成功时，现在函数返回 <span class="classname"><a href="https://php.net/manual/zh/class.addressinfo.php" class="classname">AddressInfo</a></span> 实例数组。在此之前，返回的是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> 数组。      </td>     </tr>     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">service</span> 现在允许为 null。      </td>     </tr>    </tbody>     </table> </div>  <div class="refsect1 seealso" id="refsect1-function.socket-addrinfo-lookup-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_addrinfo_bind()} - 从给定的 addrinfo 创建并绑定一个套接字</span></li>    <li><span class="function">{@link socket_addrinfo_connect()} - 指定 addrinfo 创建并连接套接字</span></li>    <li><span class="function">{@link socket_addrinfo_explain()} - 获取有关 addrinfo 的信息</span></li>   </ul>   </div></div>
*
 * (PHP 7 &gt;= 7.2.0)<br/>
 * Get array with contents of getaddrinfo about the given hostname.
 * @link https://www.php.net/manual/en/function.socket-addrinfo-lookup.php
 * @param string $host <p>
 * Hostname to search.
 * </p>
 * @param string $service [optional] <p>
 * The service to connect to. If service is a name, it is translated to the corresponding port number.
 * </p>
 * @param array $hints <p>
 * Hints provide criteria for selecting addresses returned. You may specify the hints as defined by getadrinfo.
 * </p>
 * @return AddressInfo[]|false of AddrInfo resource handles that can be used with the other socket_addrinfo functions.
 * @since 7.2
 
*/
function socket_addrinfo_lookup(string $host, ?string $service, array $hints = []): array|false {}

/**
* <div id="function.socket-addrinfo-connect" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_addrinfo_connect</h1>  <p class="verinfo">(PHP 7 &gt;= 7.2.0, PHP 8)</p><p class="refpurpose"><span class="refname">socket_addrinfo_connect</span> — <span class="dc-title">指定 addrinfo 创建并连接套接字</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-addrinfo-connect-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_addrinfo_connect</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.addressinfo.php" class="type AddressInfo" style="color:#EAB766">AddressInfo</a></span> <span class="parameter" style="color:#3A95FF">$address</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   创建 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，并连接到 <span class="classname"><a href="https://php.net/manual/zh/class.addressinfo.php" class="classname">AddressInfo</a></span> 实例。此函数的返回值可以和其余套接字函数一起使用。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-addrinfo-connect-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">address</span></dt>    <dd>     <p class="para">      从 <span class="function">{@link socket_addrinfo_lookup()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.addressinfo.php" class="classname">AddressInfo</a></span> 实例。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-addrinfo-connect-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-addrinfo-connect-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       现在该函数成功时返回 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例；在此之前，返回值是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。      </td>     </tr>     <tr> <td>8.0.0</td> <td>  现在 <span class="parameter" style="color:#3A95FF">address</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.addressinfo.php" class="classname">AddressInfo</a></span> 实例，  之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-addrinfo-connect-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_addrinfo_bind()} - 从给定的 addrinfo 创建并绑定一个套接字</span></li>    <li><span class="function">{@link socket_addrinfo_explain()} - 获取有关 addrinfo 的信息</span></li>    <li><span class="function">{@link socket_addrinfo_lookup()} - 获取数组，包含有关给定主机名的 getaddrinfo 内容</span></li>   </ul>   </div></div>
*
 * Create a Socket resource, and connect it to the provided AddrInfo resource.<br/>
 * The return value of this function may be used with the rest of the socket functions.
 * @link https://www.php.net/manual/en/function.socket-addrinfo-connect.php
 * @param resource|AddressInfo $address <p>
 * Resource created from {@see socket_addrinfo_lookup()}
 * </p>
 * @return resource|Socket|null|false Socket resource on success or NULL on failure.
 * @since 7.2
 
*/
function socket_addrinfo_connect(AddressInfo $address): Socket|false {}

/**
* <div id="function.socket-addrinfo-bind" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_addrinfo_bind</h1>  <p class="verinfo">(PHP 7 &gt;= 7.2.0, PHP 8)</p><p class="refpurpose"><span class="refname">socket_addrinfo_bind</span> — <span class="dc-title">从给定的 addrinfo 创建并绑定一个套接字</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-addrinfo-bind-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_addrinfo_bind</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.addressinfo.php" class="type AddressInfo" style="color:#EAB766">AddressInfo</a></span> <span class="parameter" style="color:#3A95FF">$address</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   使用给定的 <span class="classname"><a href="https://php.net/manual/zh/class.addressinfo.php" class="classname">AddressInfo</a></span> 创建并绑定一个 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。此函数的返回值可以被   <span class="function">{@link socket_listen()}</span> 使用。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-addrinfo-bind-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">address</span></dt>    <dd>     <p class="para">      从 <span class="function">{@link socket_addrinfo_lookup()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.addressinfo.php" class="classname">AddressInfo</a></span> 实例。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-addrinfo-bind-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回一个 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-addrinfo-bind-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       成功时，该函数现在返回一个 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例；在此之前，返回值是一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。      </td>     </tr>     <tr> <td>8.0.0</td> <td>  现在 <span class="parameter" style="color:#3A95FF">address</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.addressinfo.php" class="classname">AddressInfo</a></span> 实例，  之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-addrinfo-bind-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_addrinfo_connect()} - 指定 addrinfo 创建并连接套接字</span></li>    <li><span class="function">{@link socket_addrinfo_explain()} - 获取有关 addrinfo 的信息</span></li>    <li><span class="function">{@link socket_addrinfo_lookup()} - 获取数组，包含有关给定主机名的 getaddrinfo 内容</span></li>    <li><span class="function">{@link socket_listen()} - 监听套接字的连接</span></li>   </ul>   </div> </div>
*
 * (PHP 7 &gt;= 7.2.0)<br/>
 * Create a Socket resource, and bind it to the provided AddrInfo resource.<br/>
 * The return value of this function may be used with {@see socket_listen()}.
 * @link https://www.php.net/manual/en/function.socket-addrinfo-bind.php
 * @param resource|AddressInfo $address <p>
 * Resource created from {@see socket_addrinfo_lookup()}
 * </p>
 * @return resource|Socket|null|false Socket resource on success or NULL on failure.
 * @since 7.2
 
*/
function socket_addrinfo_bind(AddressInfo $address): Socket|false {}

/**
 * (PHP 7 &gt;= 7.2.0)<br/>
 * Get information about addrinfo
 * @link https://www.php.net/manual/en/function.socket-addrinfo-explain.php
 * @param resource|AddressInfo $address <p>
 * Resource created from {@see socket_addrinfo_lookup()}
 * </p>
 * @return array containing the fields in the addrinfo structure.
 * @since 7.2
 */
#[ArrayShape([
    'ai_flags' => 'int',
    'ai_family' => 'int',
    'ai_socktype' => 'int',
    'ai_protocol' => 'int',
    'ai_canonname' => 'string',
    'ai_addr' => [
        'sin_port' => 'int',
        'sin_addr' => 'string',
        'sin6_port' => 'int',
        'sin6_addr' => 'string',
    ]
])]
/**
* <div id="function.socket-addrinfo-explain" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_addrinfo_explain</h1>  <p class="verinfo">(PHP 7 &gt;= 7.2.0, PHP 8)</p><p class="refpurpose"><span class="refname">socket_addrinfo_explain</span> — <span class="dc-title">获取有关 addrinfo 的信息</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-addrinfo-explain-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_addrinfo_explain</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.addressinfo.php" class="type AddressInfo" style="color:#EAB766">AddressInfo</a></span> <span class="parameter" style="color:#3A95FF">$address</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_addrinfo_explain()</strong></span> 显露底层的 <span class="literal">addrinfo</span> 结构体。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-addrinfo-explain-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">address</span></dt>    <dd>     <p class="para">      从 <span class="function">{@link socket_addrinfo_lookup()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.addressinfo.php" class="classname">AddressInfo</a></span> 实例。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-addrinfo-explain-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回包含 <span class="literal">addrinfo</span> 结构体字段的数组。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-addrinfo-explain-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  现在 <span class="parameter" style="color:#3A95FF">address</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.addressinfo.php" class="classname">AddressInfo</a></span> 实例，  之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-addrinfo-explain-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_addrinfo_bind()} - 从给定的 addrinfo 创建并绑定一个套接字</span></li>    <li><span class="function">{@link socket_addrinfo_connect()} - 指定 addrinfo 创建并连接套接字</span></li>    <li><span class="function">{@link socket_addrinfo_lookup()} - 获取数组，包含有关给定主机名的 getaddrinfo 内容</span></li>   </ul>   </div></div>
*/
function socket_addrinfo_explain(AddressInfo $address): array {}

/**
* <div id="function.socket-select" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_select</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_select</span> — <span class="dc-title">从给定套接字数组运行带指定超时时间的 select() 系统调用</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-select-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_select</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></span> <span class="parameter reference" style="color:#3A95FF">&amp;$read</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></span> <span class="parameter reference" style="color:#3A95FF">&amp;$write</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></span> <span class="parameter reference" style="color:#3A95FF">&amp;$except</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$seconds</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$microseconds</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_select()</strong></span> 接受套接字数组并等待其状态改变。如果拥有 BSD 套接字背景，会认识到这些套接字数组事实上被称为文件描述符集合。观察三个独立套接字数组。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-select-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">read</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">read</span> 数组中列出要检查是否可读的套接字（更准确地说，查看读取是否会阻塞-特别是套接字在 EOF 时也可以是就绪状态，此时 <span class="function">{@link socket_read()}</span>        将会返回长度为 0 的字符串。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">write</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">write</span> 数组中列出要检查的写入是否阻塞的套接字。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">except</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">except</span> 数组中列出要检查的是否异常的套接字。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">seconds</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">seconds</span> 和 <span class="parameter" style="color:#3A95FF">microseconds</span>        构成 <span class="literal">timeout</span> 参数。<span class="literal">timeout</span>        是 <span class="function"><strong>socket_select()</strong></span> 返回前的运行时间上限。<span class="parameter" style="color:#3A95FF">seconds</span>        可以是 0，使 <span class="function"><strong>socket_select()</strong></span> 立即返回。这在轮询时很有用。如果 <span class="parameter" style="color:#3A95FF">seconds</span>        是 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>（不会超时），<span class="function"><strong>socket_select()</strong></span> 会无限期阻塞。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">microseconds</span></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>    <div class="warning"><strong class="warning">警告</strong>   <p class="para">    函数退出时，数组中状态发生变更的套接字将会被修改。   </p>  </div>  <p class="para">   你不需要将每个数组都传递到 <span class="function"><strong>socket_select()</strong></span>    中。可以将它忽略或者使用空数组和 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> 代替。不要忘记这些数组是<em>引用</em>传递的，在 <span class="function"><strong>socket_select()</strong></span>    返回时会被修改。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    由于当前 Zend 引擎的限制，无法使用像 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> 这样的常数修饰符直接作为参数传递给期望获取引用参数的方法。而是使用临时变量或表达式：    </p><div class="example" id="example-4778">     <p><strong>示例 #1 <span class="function"><strong>socket_select()</strong></span> 使用 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> </strong></p>     <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$e </span><span style="color: #007700">= </span><span style="color: #9876AA">NULL</span><span style="color: #007700">;<br></span><span style="color: #9876AA">socket_select</span><span style="color: #007700">(</span><span style="color: #9876AA">$r</span><span style="color: #007700">, </span><span style="color: #9876AA">$w</span><span style="color: #007700">, </span><span style="color: #9876AA">$e</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>     </div>    </div>     </blockquote> </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-select-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时 <span class="function"><strong>socket_select()</strong></span>    返回数组中被修改的套接字个数，如果超时则可能返回 0。失败时时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。可以使用 <span class="function">{@link socket_last_error()}</span>    检索错误码。   </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    确保使用 <span class="literal">===</span> 运算符来检查错误。因为 <span class="function"><strong>socket_select()</strong></span>     可能返回 0，使用 <span class="literal">==</span> 将被计算为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>：    </p><div class="example" id="example-4779">     <p><strong>示例 #2 理解 <span class="function"><strong>socket_select()</strong></span> 的返回值</strong></p>     <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$e </span><span style="color: #007700">= </span><span style="color: #9876AA">NULL</span><span style="color: #007700">;<br>if (</span><span style="color: #9876AA">false </span><span style="color: #007700">=== </span><span style="color: #9876AA">socket_select</span><span style="color: #007700">(</span><span style="color: #9876AA">$r</span><span style="color: #007700">, </span><span style="color: #9876AA">$w</span><span style="color: #007700">, </span><span style="color: #9876AA">$e</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #DD0000">"socket_select() failed, reason: " </span><span style="color: #007700">.<br>        </span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>     </div>    </div>     </blockquote> </div> <div class="refsect1 examples" id="refsect1-function.socket-select-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4780">    <p><strong>示例 #3 <span class="function"><strong>socket_select()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// Prepare the read array <br></span><span style="color: #9876AA">$read   </span><span style="color: #007700">= array(</span><span style="color: #9876AA">$socket1</span><span style="color: #007700">, </span><span style="color: #9876AA">$socket2</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$write  </span><span style="color: #007700">= </span><span style="color: #9876AA">NULL</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$except </span><span style="color: #007700">= </span><span style="color: #9876AA">NULL</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$num_changed_sockets </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_select</span><span style="color: #007700">(</span><span style="color: #9876AA">$read</span><span style="color: #007700">, </span><span style="color: #9876AA">$write</span><span style="color: #007700">, </span><span style="color: #9876AA">$except</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">);<br><br>if (</span><span style="color: #9876AA">$num_changed_sockets </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    </span><span style="color: #FF8000">// Error handling <br></span><span style="color: #007700">} else if (</span><span style="color: #9876AA">$num_changed_sockets </span><span style="color: #007700">&gt; </span><span style="color: #9876AA">0</span><span style="color: #007700">) {<br>    </span><span style="color: #FF8000">// At least at one of the sockets something interesting happened <br></span><span style="color: #007700">}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.socket-select-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    请注意，处理某些实现的套接字时需要特别小心。一些基本规则：    </p><ul class="itemizedlist">     <li class="listitem">      <span class="simpara">       始终使用不带超时时间的 <span class="function"><strong>socket_select()</strong></span>，如果没有可用数据，程序不会做任何事。依赖超时的代码通常不可移植并且很难调试。      </span>     </li>     <li class="listitem">      <span class="simpara">       不打算在 <span class="function"><strong>socket_select()</strong></span> 调用后检查值的套接字不要添加到集合中。<span class="function"><strong>socket_select()</strong></span>        返回后，必须检查所有数组中的套接字。任何可写套接字需要处理写事件，任何可读套接字需要处理读事件。      </span>     </li>     <li class="listitem">      <span class="simpara">       在处理数组中返回套接字的读或写操作时，可能并不会读取或写入请求的所有数据。需要做好仅仅读取或写入单个字节的准备。      </span>     </li>     <li class="listitem">      <span class="simpara">       在大多数套接字实现中，仅在套接字收到带外数据时，<span class="parameter" style="color:#3A95FF">except</span> 中的套接字可以捕获异常。      </span>     </li>    </ul>     </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.socket-select-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_read()} - 从套接字中读取最大长度的数据</span></li>    <li><span class="function">{@link socket_write()} - 向套接字写数据</span></li>    <li><span class="function">{@link socket_last_error()} - 返回套接字上的最后一个错误</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Runs the select() system call on the given arrays of sockets with a specified timeout
 * @link https://php.net/manual/zh/function.socket-select.php
 * @param array|null &$read <p>
 * The sockets listed in the <i>read</i> array will be
 * watched to see if characters become available for reading (more
 * precisely, to see if a read will not block - in particular, a socket
 * resource is also ready on end-of-file, in which case a
 * <b>socket_read</b> will return a zero length string).
 * </p>
 * @param array|null &$write <p>
 * The sockets listed in the <i>write</i> array will be
 * watched to see if a write will not block.
 * </p>
 * @param array|null &$except <p>
 * The sockets listed in the <i>except</i> array will be
 * watched for exceptions.
 * </p>
 * @param int|null $seconds <p>
 * The <i>tv_sec</i> and <i>tv_usec</i>
 * together form the timeout parameter. The
 * timeout is an upper bound on the amount of time
 * elapsed before <b>socket_select</b> return.
 * <i>tv_sec</i> may be zero , causing
 * <b>socket_select</b> to return immediately. This is useful
 * for polling. If <i>tv_sec</i> is <b>NULL</b> (no timeout),
 * <b>socket_select</b> can block indefinitely.
 * </p>
 * @param int $microseconds [optional]
 * @return int|false On success <b>socket_select</b> returns the number of
 * socket resources contained in the modified arrays, which may be zero if
 * the timeout expires before anything interesting happens. On error <b>FALSE</b>
 * is returned. The error code can be retrieved with
 * <b>socket_last_error</b>.
 * </p>
 * <p>
 * Be sure to use the === operator when checking for an
 * error. Since the <b>socket_select</b> may return 0 the
 * comparison with == would evaluate to <b>TRUE</b>:
 * Understanding <b>socket_select</b>'s result
 * <code>
 * $e = NULL;
 * if (false === socket_select($r, $w, $e, 0)) {
 * echo "socket_select() failed, reason: " .
 * socket_strerror(socket_last_error()) . "\n";
 * }
 * </code>
 
*/
function socket_select(?array &$read, ?array &$write, ?array &$except, ?int $seconds, int $microseconds = 0): int|false {}

/**
* <div id="function.socket-create" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_create</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_create</span> — <span class="dc-title">创建一个套接字（通讯节点）</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-create-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_create</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$domain</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$protocol</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   创建并返回一个 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，也称作一个通讯节点。一个典型的网络连接由 2 个套接字构成，一个运行在客户端，另一个运行在服务器端。  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.socket-create-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">domain</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">domain</span> 参数指定哪个协议用在当前套接字上。      </p>      <table class="doctable table">       <caption><strong>可用的地址/协议</strong></caption>               <thead>         <tr>          <th>Domain</th>          <th>描述</th>         </tr>        </thead>        <tbody class="tbody">         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong></td>          <td>           IPv4 网络协议。TCP 和 UDP 都可使用此协议。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet6">AF_INET6</a></span></strong></td>          <td>           IPv6 网络协议。TCP 和 UDP 都可使用此协议。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-unix">AF_UNIX</a></span></strong></td>          <td>           本地通讯协议。具有高性能和低成本的 IPC（进程间通讯）。          </td>         </tr>        </tbody>             </table>     </dd>             <dt><span class="parameter" style="color:#3A95FF">type</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">type</span> 参数用于选择套接字使用的类型。      </p>      <table class="doctable table">       <caption><strong>可用的套接字类型</strong></caption>               <thead>         <tr>          <th>类型</th>          <th>描述</th>         </tr>        </thead>        <tbody class="tbody">         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sock-stream">SOCK_STREAM</a></span></strong></td>          <td>           提供一个顺序化的、可靠的、全双工的、基于连接的字节流。支持数据传送流量控制机制。TCP 协议即基于这种流式套接字。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sock-dgram">SOCK_DGRAM</a></span></strong></td>          <td>           提供数据报文的支持。(无连接，不可靠、固定最大长度).UDP协议即基于这种数据报文套接字。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sock-seqpacket">SOCK_SEQPACKET</a></span></strong></td>          <td>           提供一个顺序化的、可靠的、全双工的、面向连接的、固定最大长度的数据通信；数据端通过接收每一个数据段来读取整个数据包。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sock-raw">SOCK_RAW</a></span></strong></td>          <td>           提供读取原始的网络协议。这种特殊的套接字可用于手工构建任意类型的协议。一般使用这个套接字来实现 ICMP 请求（例如 ping）。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sock-rdm">SOCK_RDM</a></span></strong></td>          <td>           提供一个可靠的数据层，但不保证到达顺序。一般的操作系统都未实现此功能。          </td>         </tr>        </tbody>             </table>     </dd>             <dt><span class="parameter" style="color:#3A95FF">protocol</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">protocol</span> 参数，是设置指定 <span class="parameter" style="color:#3A95FF">domain</span>        套接字下的具体协议。这个值可以使用 <span class="function">{@link getprotobyname()}</span>       函数进行读取。如果所需的协议是 TCP 或 UDP，可以直接使用常量 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sol-tcp">SOL_TCP</a></span></strong> 和 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sol-udp">SOL_UDP</a></span></strong> 。      </p>      <table class="doctable table">       <caption><strong>常见协议</strong></caption>               <thead>         <tr>          <th>名称</th>          <th>描述</th>         </tr>        </thead>        <tbody class="tbody">         <tr>          <td>icmp</td>          <td>           互联网控制消息协议（Internet Control Message Protocol）主要用于网关和主机报告错误的数据通信。           例如 “ping” 命令（在目前大部分的操作系统中）就是使用 ICMP 协议实现的。          </td>         </tr>         <tr>          <td>udp</td>          <td>           用户数据包协议（User Datagram Protocol）是一个无连接的、不可靠的、具有固定最大长度的报文协议。由于这些特性，UDP 协议拥有最小的协议开销。          </td>         </tr>         <tr>          <td>tcp</td>          <td>           传输控制协议（Transmission Control Protocol）是一个可靠的、基于连接的、面向数据流的全双工协议。TCP           能够保障所有的数据包是按照其发送顺序而接收的。如果任意数据包在通讯时丢失，TCP           将自动重发数据包直到目标主机应答已接收。因为可靠性和性能的原因，TCP 在数据传输层使用 8bit 字节边界。因此，TCP 应用程序必须允许传送部分报文的可能。          </td>         </tr>        </tbody>             </table>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.socket-create-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>socket_create()</strong></span> 正确时返回一个 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，失败时返回   <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。要读取错误代码，可以调用 <span class="function">{@link socket_last_error()}</span>。这个错误代码可以通过 <span class="function">{@link socket_strerror()}</span> 读取文字的错误说明。  </p> </div> <div class="refsect1 errors" id="refsect1-function.socket-create-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   如果使用一个无效的 <span class="parameter" style="color:#3A95FF">domain</span> 或 <span class="parameter" style="color:#3A95FF">type</span>，<span class="function"><strong>socket_create()</strong></span>   会使用 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong> 和   <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sock-stream">SOCK_STREAM</a></span></strong> 替代无效参数，同时会发出 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong> 警告信息。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-create-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       创建成功时，该函数现在返回一个 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例；       在此之前，返回的是一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-create-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_accept()} - 接受套接字上的连接</span></li>    <li><span class="function">{@link socket_bind()} - 给套接字绑定名字</span></li>    <li><span class="function">{@link socket_connect()} - 开启一个套接字连接</span></li>    <li><span class="function">{@link socket_listen()} - 监听套接字的连接</span></li>    <li><span class="function">{@link socket_last_error()} - 返回套接字上的最后一个错误</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Create a socket (endpoint for communication)
 * @link https://php.net/manual/zh/function.socket-create.php
 * @param int $domain <p>
 * The <i>domain</i> parameter specifies the protocol
 * family to be used by the socket.
 * </p>
 * <table>
 * Available address/protocol families
 * <tr valign="top">
 * <td>Domain</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td><b>AF_INET</b></td>
 * <td>
 * IPv4 Internet based protocols. TCP and UDP are common protocols of
 * this protocol family.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>AF_INET6</b></td>
 * <td>
 * IPv6 Internet based protocols. TCP and UDP are common protocols of
 * this protocol family.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>AF_UNIX</b></td>
 * <td>
 * Local communication protocol family. High efficiency and low
 * overhead make it a great form of IPC (Interprocess Communication).
 * </td>
 * </tr>
 * </table>
 * @param int $type <p>
 * The <i>type</i> parameter selects the type of communication
 * to be used by the socket.
 * </p>
 * <table>
 * Available socket types
 * <tr valign="top">
 * <td>Type</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td><b>SOCK_STREAM</b></td>
 * <td>
 * Provides sequenced, reliable, full-duplex, connection-based byte streams.
 * An out-of-band data transmission mechanism may be supported.
 * The TCP protocol is based on this socket type.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SOCK_DGRAM</b></td>
 * <td>
 * Supports datagrams (connectionless, unreliable messages of a fixed maximum length).
 * The UDP protocol is based on this socket type.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SOCK_SEQPACKET</b></td>
 * <td>
 * Provides a sequenced, reliable, two-way connection-based data transmission path for
 * datagrams of fixed maximum length; a consumer is required to read an
 * entire packet with each read call.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SOCK_RAW</b></td>
 * <td>
 * Provides raw network protocol access. This special type of socket
 * can be used to manually construct any type of protocol. A common use
 * for this socket type is to perform ICMP requests (like ping).
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SOCK_RDM</b></td>
 * <td>
 * Provides a reliable datagram layer that does not guarantee ordering.
 * This is most likely not implemented on your operating system.
 * </td>
 * </tr>
 * </table>
 * @param int $protocol <p>
 * The <i>protocol</i> parameter sets the specific
 * protocol within the specified <i>domain</i> to be used
 * when communicating on the returned socket. The proper value can be
 * retrieved by name by using <b>getprotobyname</b>. If
 * the desired protocol is TCP, or UDP the corresponding constants
 * <b>SOL_TCP</b>, and <b>SOL_UDP</b>
 * can also be used.
 * </p>
 * <table>
 * Common protocols
 * <tr valign="top">
 * <td>Name</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>icmp</td>
 * <td>
 * The Internet Control Message Protocol is used primarily by gateways
 * and hosts to report errors in datagram communication. The "ping"
 * command (present in most modern operating systems) is an example
 * application of ICMP.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>udp</td>
 * <td>
 * The User Datagram Protocol is a connectionless, unreliable,
 * protocol with fixed record lengths. Due to these aspects, UDP
 * requires a minimum amount of protocol overhead.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>tcp</td>
 * <td>
 * The Transmission Control Protocol is a reliable, connection based,
 * stream oriented, full duplex protocol. TCP guarantees that all data packets
 * will be received in the order in which they were sent. If any packet is somehow
 * lost during communication, TCP will automatically retransmit the packet until
 * the destination host acknowledges that packet. For reliability and performance
 * reasons, the TCP implementation itself decides the appropriate octet boundaries
 * of the underlying datagram communication layer. Therefore, TCP applications must
 * allow for the possibility of partial record transmission.
 * </td>
 * </tr>
 * </table>
 * @return resource|Socket|false <b>socket_create</b> returns a socket resource on success,
 * or <b>FALSE</b> on error. The actual error code can be retrieved by calling
 * <b>socket_last_error</b>. This error code may be passed to
 * <b>socket_strerror</b> to get a textual explanation of the
 * error.
 
*/
function socket_create(int $domain, int $type, int $protocol): Socket|false {}

/**
* <div id="function.socket-export-stream" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_export_stream</h1>  <p class="verinfo">(PHP 7 &gt;= 7.0.7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_export_stream</span> — <span class="dc-title">Export a socket into a stream that encapsulates a socket</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-export-stream-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_export_stream</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-function.socket-export-stream-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-export-stream-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Return resource 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-export-stream-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div></div>
*
 * @param resource|Socket $socket
 * @return resource|Socket|false
 
*/
function socket_export_stream(Socket $socket) {}

/**
* <div id="function.socket-create-listen" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_create_listen</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_create_listen</span> — <span class="dc-title">在端口上打开一个套接字以接受连接</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-create-listen-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_create_listen</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$port</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$backlog</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.somaxconn">SOMAXCONN</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_create_listen()</strong></span> 创建一个 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong> 类型的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span>    实例，在<em>所有</em>本地接口上监听指定端口，等待新连接。  </p>  <p class="para">   此方法旨在简化创建新的套接字任务，仅监听且用于接受新连接。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-create-listen-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">port</span></dt>     <dd>      <p class="para">       监听所有接口的端口号      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">backlog</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">backlog</span> 参数定义了待处理的连接队列的最大长度。<strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.somaxconn">SOMAXCONN</a></span></strong>        可以作为 <span class="parameter" style="color:#3A95FF">backlog</span> 参数，详情见 <span class="function">{@link socket_listen()}</span>。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-create-listen-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>socket_create_listen()</strong></span> 成功时返回一个新的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span>    实例，错误时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。可以通过调用 <span class="function">{@link socket_last_error()}</span>    来检索实际的错误码。将错误码作为参数传递给 <span class="function">{@link socket_strerror()}</span> 以获得错误的文本解释。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-create-listen-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.4.0</td>      <td>       默认值现在是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.somaxconn">SOMAXCONN</a></span></strong>。       之前是 <span class="literal">128</span>。      </td>     </tr>     <tr>      <td>8.0.0</td>      <td>        成功时，该函数现在返回一个 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例；在此之前，返回值是一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 notes" id="refsect1-function.socket-create-listen-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    如果想创建只监听某个接口的套接字，需要使用 <span class="function">{@link socket_create()}</span>，<span class="function">{@link socket_bind()}</span>     和 <span class="function">{@link socket_listen()}</span>。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.socket-create-listen-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_create()} - 创建一个套接字（通讯节点）</span></li>    <li><span class="function">{@link socket_create_pair()} - 创建一对彼此连接的套接字，并用数组存储</span></li>    <li><span class="function">{@link socket_bind()} - 给套接字绑定名字</span></li>    <li><span class="function">{@link socket_listen()} - 监听套接字的连接</span></li>    <li><span class="function">{@link socket_last_error()} - 返回套接字上的最后一个错误</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Opens a socket on port to accept connections
 * @link https://php.net/manual/zh/function.socket-create-listen.php
 * @param int $port <p>
 * The port on which to listen on all interfaces.
 * </p>
 * @param int $backlog [optional] <p>
 * The <i>backlog</i> parameter defines the maximum length
 * the queue of pending connections may grow to.
 * <b>SOMAXCONN</b> may be passed as
 * <i>backlog</i> parameter, see
 * <b>socket_listen</b> for more information.
 * </p>
 * @return resource|Socket|false <b>socket_create_listen</b> returns a new socket resource
 * on success or <b>FALSE</b> on error. The error code can be retrieved with
 * <b>socket_last_error</b>. This code may be passed to
 * <b>socket_strerror</b> to get a textual explanation of the
 * error.
 
*/
function socket_create_listen(int $port, int $backlog = 128): Socket|false {}

/**
* <div id="function.socket-create-pair" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_create_pair</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_create_pair</span> — <span class="dc-title">创建一对彼此连接的套接字，并用数组存储</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-create-pair-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_create_pair</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$domain</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$type</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$protocol</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$pair</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_create_pair()</strong></span> 创建两个已连接的，彼此连接的套接字，并存储在 <span class="parameter" style="color:#3A95FF">pair</span>    中。此函数通常在 IPC（进程间通信）使用。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-create-pair-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">domain</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">domain</span> 参数指定套接字使用的协议族。完整列表参见 <span class="function">{@link socket_create()}</span>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">type</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">type</span> 参数选择套接字使用的通信类型。完整列表参见 <span class="function">{@link socket_create()}</span>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">protocol</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">domain</span> 参数指定套接字在 <span class="parameter" style="color:#3A95FF">domain</span>        协议族下通信时使用的具体协议。这个值可以通过 <span class="function">{@link getprotobyname()}</span>        获取。如果所需的协议是 TCP 或 UDP，可以直接使用相应的常量 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sol-tcp">SOL_TCP</a></span></strong> 和 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sol-udp">SOL_UDP</a></span></strong>。      </p>      <p class="para">       有关支持协议的完整列表，参见 <span class="function">{@link socket_create()}</span>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">pair</span></dt>     <dd>      <p class="para">       包含两个 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例的引用数组。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-create-pair-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-create-pair-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">pair</span> 现在是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例的引用数组；在这之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> 的引用数组。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.socket-create-pair-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4771">    <p><strong>示例 #1 <span class="function"><strong>socket_create_pair()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$sockets </span><span style="color: #007700">= array();<br><br></span><span style="color: #FF8000">// On Windows we need to use AF_INET <br></span><span style="color: #9876AA">$domain </span><span style="color: #007700">= (</span><span style="color: #9876AA">strtoupper</span><span style="color: #007700">(</span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">PHP_OS</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">3</span><span style="color: #007700">)) == </span><span style="color: #DD0000">'WIN' </span><span style="color: #007700">? </span><span style="color: #9876AA">AF_INET </span><span style="color: #007700">: </span><span style="color: #9876AA">AF_UNIX</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Setup socket pair <br></span><span style="color: #007700">if (</span><span style="color: #9876AA">socket_create_pair</span><span style="color: #007700">(</span><span style="color: #9876AA">$domain</span><span style="color: #007700">, </span><span style="color: #9876AA">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">$sockets</span><span style="color: #007700">) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"socket_create_pair failed. Reason: "</span><span style="color: #007700">.</span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">());<br>}<br></span><span style="color: #FF8000">// Send and Receive Data <br></span><span style="color: #007700">if (</span><span style="color: #9876AA">socket_write</span><span style="color: #007700">(</span><span style="color: #9876AA">$sockets</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">], </span><span style="color: #DD0000">"ABCdef123\n"</span><span style="color: #007700">, </span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #DD0000">"ABCdef123\n"</span><span style="color: #007700">)) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"socket_write() failed. Reason: "</span><span style="color: #007700">.</span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">(</span><span style="color: #9876AA">$sockets</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]));<br>}<br>if ((</span><span style="color: #9876AA">$data </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_read</span><span style="color: #007700">(</span><span style="color: #9876AA">$sockets</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">], </span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #DD0000">"ABCdef123\n"</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_BINARY_READ</span><span style="color: #007700">)) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"socket_read() failed. Reason: "</span><span style="color: #007700">.</span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">(</span><span style="color: #9876AA">$sockets</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]));<br>}<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$data</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Close sockets <br></span><span style="color: #9876AA">socket_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$sockets</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]);<br></span><span style="color: #9876AA">socket_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$sockets</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-4772">    <p><strong>示例 #2 <span class="function"><strong>socket_create_pair()</strong></span> IPC 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$ary </span><span style="color: #007700">= array();<br></span><span style="color: #9876AA">$strone </span><span style="color: #007700">= </span><span style="color: #DD0000">'Message From Parent.'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$strtwo </span><span style="color: #007700">= </span><span style="color: #DD0000">'Message From Child.'</span><span style="color: #007700">;<br><br>if (</span><span style="color: #9876AA">socket_create_pair</span><span style="color: #007700">(</span><span style="color: #9876AA">AF_UNIX</span><span style="color: #007700">, </span><span style="color: #9876AA">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">$ary</span><span style="color: #007700">) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"socket_create_pair() failed. Reason: "</span><span style="color: #007700">.</span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">());<br>}<br></span><span style="color: #9876AA">$pid </span><span style="color: #007700">= </span><span style="color: #9876AA">pcntl_fork</span><span style="color: #007700">();<br>if (</span><span style="color: #9876AA">$pid </span><span style="color: #007700">== -</span><span style="color: #9876AA">1</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">'Could not fork Process.'</span><span style="color: #007700">;<br>} elseif (</span><span style="color: #9876AA">$pid</span><span style="color: #007700">) {<br>    </span><span style="color: #FF8000">//parent<br>    </span><span style="color: #9876AA">socket_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$ary</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]);<br>    if (</span><span style="color: #9876AA">socket_write</span><span style="color: #007700">(</span><span style="color: #9876AA">$ary</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">], </span><span style="color: #9876AA">$strone</span><span style="color: #007700">, </span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #9876AA">$strone</span><span style="color: #007700">)) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>        echo </span><span style="color: #DD0000">"socket_write() failed. Reason: "</span><span style="color: #007700">.</span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">(</span><span style="color: #9876AA">$ary</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]));<br>    }<br>    if (</span><span style="color: #9876AA">socket_read</span><span style="color: #007700">(</span><span style="color: #9876AA">$ary</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">], </span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #9876AA">$strtwo</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_BINARY_READ</span><span style="color: #007700">) == </span><span style="color: #9876AA">$strtwo</span><span style="color: #007700">) {<br>        echo </span><span style="color: #DD0000">"Received </span><span style="color: #9876AA">$strtwo</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br>    }<br>    </span><span style="color: #9876AA">socket_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$ary</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]);<br>} else {<br>    </span><span style="color: #FF8000">//child<br>    </span><span style="color: #9876AA">socket_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$ary</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]);<br>    if (</span><span style="color: #9876AA">socket_write</span><span style="color: #007700">(</span><span style="color: #9876AA">$ary</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">], </span><span style="color: #9876AA">$strtwo</span><span style="color: #007700">, </span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #9876AA">$strtwo</span><span style="color: #007700">)) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>        echo </span><span style="color: #DD0000">"socket_write() failed. Reason: "</span><span style="color: #007700">.</span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">(</span><span style="color: #9876AA">$ary</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]));<br>    }<br>    if (</span><span style="color: #9876AA">socket_read</span><span style="color: #007700">(</span><span style="color: #9876AA">$ary</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">], </span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #9876AA">$strone</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_BINARY_READ</span><span style="color: #007700">) == </span><span style="color: #9876AA">$strone</span><span style="color: #007700">) {<br>        echo </span><span style="color: #DD0000">"Received </span><span style="color: #9876AA">$strone</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br>    }<br>    </span><span style="color: #9876AA">socket_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$ary</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]);<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.socket-create-pair-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_create()} - 创建一个套接字（通讯节点）</span></li>    <li><span class="function">{@link socket_create_listen()} - 在端口上打开一个套接字以接受连接</span></li>    <li><span class="function">{@link socket_bind()} - 给套接字绑定名字</span></li>    <li><span class="function">{@link socket_listen()} - 监听套接字的连接</span></li>    <li><span class="function">{@link socket_last_error()} - 返回套接字上的最后一个错误</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Creates a pair of indistinguishable sockets and stores them in an array
 * @link https://php.net/manual/zh/function.socket-create-pair.php
 * @param int $domain <p>
 * The <i>domain</i> parameter specifies the protocol
 * family to be used by the socket. See <b>socket_create</b>
 * for the full list.
 * </p>
 * @param int $type <p>
 * The <i>type</i> parameter selects the type of communication
 * to be used by the socket. See <b>socket_create</b> for the
 * full list.
 * </p>
 * @param int $protocol <p>
 * The <i>protocol</i> parameter sets the specific
 * protocol within the specified <i>domain</i> to be used
 * when communicating on the returned socket. The proper value can be retrieved by
 * name by using <b>getprotobyname</b>. If
 * the desired protocol is TCP, or UDP the corresponding constants
 * <b>SOL_TCP</b>, and <b>SOL_UDP</b>
 * can also be used.
 * </p>
 * <p>
 * See <b>socket_create</b> for the full list of supported
 * protocols.
 * </p>
 * @param array &$pair <p>
 * Reference to an array in which the two socket resources will be inserted.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function socket_create_pair(int $domain, int $type, int $protocol, &$pair): bool {}

/**
* <div id="function.socket-accept" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_accept</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_accept</span> — <span class="dc-title">接受套接字上的连接</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-accept-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_accept</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="parameter" style="color:#3A95FF">socket</span> 是从 <span class="function">{@link socket_create()}</span> 创建，使用    <span class="function">{@link socket_bind()}</span> 绑定，<span class="function">{@link socket_listen()}</span> 监听的一个套接字实例。此函数接受在    <span class="parameter" style="color:#3A95FF">socket</span> 上创建的连接。当连接被成功创建后，返回一个可用于通信的    <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。若有多个连接排队，返回队头第一个连接。若没有待处理的连接，那么    <span class="function"><strong>socket_accept()</strong></span> 默认阻塞，直到有一个连接出现。如果    <span class="parameter" style="color:#3A95FF">socket</span> 使用 <span class="function">{@link socket_set_blocking()}</span> 或    <span class="function">{@link socket_set_nonblock()}</span> 设置为非阻塞，那么    <span class="function"><strong>socket_accept()</strong></span> 将直接返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   <span class="function"><strong>socket_accept()</strong></span> 返回的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例不能用于接受新的连接。但    <span class="parameter" style="color:#3A95FF">socket</span> 依然保持打开状态，并且可以继续接受新的连接。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-accept-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       使用 <span class="function">{@link socket_create()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-accept-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回一个新的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，错误时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。可以通过调用    <span class="function">{@link socket_last_error()}</span> 来检索实际的错误代码。将错误代码作为参数传递给    <span class="function">{@link socket_strerror()}</span> 以获得错误的文本解释。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-accept-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       成功时，该函数现在返回一个 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例；在此之前，返回值是一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-accept-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_connect()} - 开启一个套接字连接</span></li>    <li><span class="function">{@link socket_listen()} - 监听套接字的连接</span></li>    <li><span class="function">{@link socket_create()} - 创建一个套接字（通讯节点）</span></li>    <li><span class="function">{@link socket_bind()} - 给套接字绑定名字</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Accepts a connection on a socket
 * @link https://php.net/manual/zh/function.socket-accept.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>.
 * </p>
 * @return resource|Socket|false a new socket resource on success, or <b>FALSE</b> on error. The actual
 * error code can be retrieved by calling
 * <b>socket_last_error</b>. This error code may be passed to
 * <b>socket_strerror</b> to get a textual explanation of the
 * error.
 
*/
function socket_accept(Socket $socket): Socket|false {}

/**
* <div id="function.socket-set-nonblock" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_set_nonblock</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_set_nonblock</span> — <span class="dc-title">设置套接字为非阻塞模式</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-set-nonblock-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_set_nonblock</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_set_nonblock()</strong></span> 为由 <span class="parameter" style="color:#3A95FF">socket</span>    参数指定的套接字设置 <strong><span><a href="https://php.net/manual/zh/dio.constants.php#constant.o-nonblock">O_NONBLOCK</a></span></strong> 标记。  </p>  <p class="para">   当一个操作（例如接收、发送、连接、接受连接……）在一个非阻塞套接字上执行时，脚本在接受到信号或操作处理完成前都不会暂停执行。如果操作会导致阻塞，被调用的函数将失败。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-set-nonblock-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       由 <span class="function">{@link socket_create()}</span> 或 <span class="function">{@link socket_accept()}</span>        创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-set-nonblock-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-set-nonblock-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.socket-set-nonblock-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4783">    <p><strong>示例 #1 <span class="function"><strong>socket_set_nonblock()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$socket </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_create_listen</span><span style="color: #007700">(</span><span style="color: #9876AA">1223</span><span style="color: #007700">);<br></span><span style="color: #9876AA">socket_set_nonblock</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">socket_accept</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     此示例在 1223 端口上创建了监听所有接口的套接字，并把此套接字设置为 <strong><span><a href="https://php.net/manual/zh/dio.constants.php#constant.o-nonblock">O_NONBLOCK</a></span></strong>      模式。除非此时恰好有待处理的连接，否则 <span class="function">{@link socket_accept()}</span> 将立即失败。    </p></div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.socket-set-nonblock-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_set_block()} - 设置套接字为阻塞模式</span></li>    <li><span class="function">{@link socket_set_option()} - 为套接字设置套接字选项</span></li>    <li><span class="function">{@link stream_set_blocking()} - 为资源流设置阻塞或者阻塞模式</span></li>   </ul>   </div></div>
*
 * Sets nonblocking mode for file descriptor fd
 * @link https://php.net/manual/zh/function.socket-set-nonblock.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>
 * or <b>socket_accept</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function socket_set_nonblock(Socket $socket): bool {}

/**
* <div id="function.socket-set-block" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_set_block</h1>  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_set_block</span> — <span class="dc-title">设置套接字为阻塞模式</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-set-block-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_set_block</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_set_block()</strong></span> 函数移除了由 <span class="parameter" style="color:#3A95FF">socket</span>    参数定义的 <strong><span><a href="https://php.net/manual/zh/dio.constants.php#constant.o-nonblock">O_NONBLOCK</a></span></strong> 标记。  </p>  <p class="para">   当一个操作（例如接收、发送、连接、接受连接……）在一个阻塞套接字上执行时，脚本在接受到信号或者可以执行此操作前将暂停执行。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-set-block-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       由 <span class="function">{@link socket_create()}</span> 或 <span class="function">{@link socket_accept()}</span>        创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-set-block-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-set-block-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.socket-set-block-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4782">    <p><strong>示例 #1 <span class="function"><strong>socket_set_block()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$socket </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_create_listen</span><span style="color: #007700">(</span><span style="color: #9876AA">1223</span><span style="color: #007700">);<br></span><span style="color: #9876AA">socket_set_block</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">socket_accept</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     此示例在 1223 端口上创建了监听所有接口的套接字，并把此套接字设置为 <strong><span>O_BLOCK</span></strong>      模式。<span class="function">{@link socket_accept()}</span> 将挂起，直到接受新的连接。    </p></div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.socket-set-block-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_set_nonblock()} - 设置套接字为非阻塞模式</span></li>    <li><span class="function">{@link socket_set_option()} - 为套接字设置套接字选项</span></li>   </ul>   </div></div>
*
 * Sets blocking mode on a socket resource
 * @link https://php.net/manual/zh/function.socket-set-block.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>
 * or <b>socket_accept</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function socket_set_block(Socket $socket): bool {}

/**
* <div id="function.socket-listen" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_listen</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_listen</span> — <span class="dc-title">监听套接字的连接</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-listen-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_listen</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$backlog</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function">{@link socket_create()}</span> 创建套接字 <span class="parameter" style="color:#3A95FF">socket</span>    并通过 <span class="function">{@link socket_bind()}</span> 绑定名称后，可以监听 <span class="parameter" style="color:#3A95FF">socket</span>    收到的连接。  </p>  <p class="para">   <span class="function"><strong>socket_listen()</strong></span> 仅适用于 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sock-stream">SOCK_STREAM</a></span></strong>    或 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sock-seqpacket">SOCK_SEQPACKET</a></span></strong> 类型的套接字。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-listen-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       由 <span class="function">{@link socket_create()}</span> 或 <span class="function">{@link socket_addrinfo_bind()}</span>        创建的套接字实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">backlog</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">backlog</span> 指定处理连接请求队列的最大值。如果一个连接请求到达时队列已满，客户端可能会收到 <span class="literal">ECONNREFUSED</span>        的错误提示。若底层协议支持重传，则忽略该请求，以便重试成功。。      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        </p><p class="para">        传递给 <span class="parameter" style="color:#3A95FF">backlog</span>         参数的最大值取决于底层平台。Linux 中，超过最大值将默认截取为 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.somaxconn">SOMAXCONN</a></span></strong>。win32 中，如果超过 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.somaxconn">SOMAXCONN</a></span></strong>         的值，负责套接字的底层服务将把 backlog 设置为最大的 <em>reasonable</em>         合理值，在此平台上，没有提供可以找到 backlog 实际值的标准描述。       </p>      </blockquote>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-listen-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。 可以通过 <span class="function">{@link socket_last_error()}</span>    来检索错误码。将错误码作为参数传递给 <span class="function">{@link socket_strerror()}</span> 以获得错误的文本解释。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-listen-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-listen-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_accept()} - 接受套接字上的连接</span></li>    <li><span class="function">{@link socket_bind()} - 给套接字绑定名字</span></li>    <li><span class="function">{@link socket_connect()} - 开启一个套接字连接</span></li>    <li><span class="function">{@link socket_create()} - 创建一个套接字（通讯节点）</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>    <li><span class="function">{@link socket_addrinfo_bind()} - 从给定的 addrinfo 创建并绑定一个套接字</span></li>   </ul>   </div></div>
*
 * Listens for a connection on a socket
 * @link https://php.net/manual/zh/function.socket-listen.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>.
 * </p>
 * @param int $backlog [optional] <p>
 * A maximum of <i>backlog</i> incoming connections will be
 * queued for processing. If a connection request arrives with the queue
 * full the client may receive an error with an indication of
 * ECONNREFUSED, or, if the underlying protocol supports
 * retransmission, the request may be ignored so that retries may succeed.
 * </p>
 * <p>
 * The maximum number passed to the <i>backlog</i>
 * parameter highly depends on the underlying platform. On Linux, it is
 * silently truncated to <b>SOMAXCONN</b>. On win32, if
 * passed <b>SOMAXCONN</b>, the underlying service provider
 * responsible for the socket will set the backlog to a maximum
 * reasonable value. There is no standard provision to
 * find out the actual backlog value on this platform.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. The error code can be retrieved with
 * <b>socket_last_error</b>. This code may be passed to
 * <b>socket_strerror</b> to get a textual explanation of the
 * error.
 
*/
function socket_listen(Socket $socket, int $backlog = 0): bool {}

/**
* <div id="function.socket-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_close</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_close</span> — <span class="dc-title">关闭 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-close-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_close</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_close()</strong></span> 会关闭由 <span class="parameter" style="color:#3A95FF">socket</span>   参数指定的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-close-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>       <p class="para">        由 <span class="function">{@link socket_create()}</span>        或者是 <span class="function">{@link socket_accept()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。       </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-close-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-close-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_bind()} - 给套接字绑定名字</span></li>    <li><span class="function">{@link socket_listen()} - 监听套接字的连接</span></li>    <li><span class="function">{@link socket_create()} - 创建一个套接字（通讯节点）</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Closes a socket resource
 * @link https://php.net/manual/zh/function.socket-close.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>
 * or <b>socket_accept</b>.
 * </p>
 * @return void No value is returned.
 
*/
function socket_close(Socket $socket): void {}

/**
* <div id="function.socket-write" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_write</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_write</span> — <span class="dc-title">向套接字写数据</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-write-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_write</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$data</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$length</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   函数 <span class="function"><strong>socket_write()</strong></span> 向 <span class="parameter" style="color:#3A95FF">socket</span>    写入 <span class="parameter" style="color:#3A95FF">data</span>。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-write-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       要写入到缓冲区的数据。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">length</span></dt>     <dd>      <p class="para">       可选参数 <span class="parameter" style="color:#3A95FF">length</span> 可以指定写入 socket        的字节长度。如果写入的字节长度大于 <span class="parameter" style="color:#3A95FF">data</span>       的长度，默认将被截取为 <span class="parameter" style="color:#3A95FF">data</span> 长度。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-write-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回成功写入 socket 的字节数 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。可以通过调用 <span class="function">{@link socket_last_error()}</span>    来检索实际的错误码。将错误码作为参数传递给 <span class="function">{@link socket_strerror()}</span> 以获得错误的文本解释。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    对于 <span class="function"><strong>socket_wirte()</strong></span> 来说返回 0 是完全有效的，这代表没有字节被写入。如果发生错误，务必使用 <span class="literal">===</span>     运算符来判断是否为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   </p>  </blockquote> </div> <div class="refsect1 changelog" id="refsect1-function.socket-write-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">length</span> 现在允许为 null。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 notes" id="refsect1-function.socket-write-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    <span class="function"><strong>socket_write()</strong></span> 不一定会写入 <span class="parameter" style="color:#3A95FF">data</span> 的所有字节。根据网络缓冲区等因素，即使    <span class="parameter" style="color:#3A95FF">data</span> 较长，也可能只写入部分数据，甚至是一个字节。必须使用循环来确保已完整传输剩余    <span class="parameter" style="color:#3A95FF">data</span>。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.socket-write-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_accept()} - 接受套接字上的连接</span></li>    <li><span class="function">{@link socket_bind()} - 给套接字绑定名字</span></li>    <li><span class="function">{@link socket_connect()} - 开启一个套接字连接</span></li>    <li><span class="function">{@link socket_listen()} - 监听套接字的连接</span></li>    <li><span class="function">{@link socket_read()} - 从套接字中读取最大长度的数据</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Write to a socket
 * @link https://php.net/manual/zh/function.socket-write.php
 * @param resource|Socket $socket
 * @param string $data <p>
 * The buffer to be written.
 * </p>
 * @param int|null $length <p>
 * The optional parameter <i>length</i> can specify an
 * alternate length of bytes written to the socket. If this length is
 * greater than the buffer length, it is silently truncated to the length
 * of the buffer.
 * </p>
 * @return int|false the number of bytes successfully written to the socket or <b>FALSE</b> on failure.
 * The error code can be retrieved with
 * <b>socket_last_error</b>. This code may be passed to
 * <b>socket_strerror</b> to get a textual explanation of the
 * error.
 * </p>
 * <p>
 * It is perfectly valid for <b>socket_write</b> to
 * return zero which means no bytes have been written. Be sure to use the
 * === operator to check for <b>FALSE</b> in case of an
 * error.
 
*/
function socket_write(Socket $socket, string $data, ?int $length = null): int|false {}

/**
* <div id="function.socket-read" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_read</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_read</span> — <span class="dc-title">从套接字中读取最大长度的数据</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-read-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_read</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$length</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$mode</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.php-binary-read">PHP_BINARY_READ</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_read()</strong></span> 函数是从 <span class="function">{@link socket_create()}</span>   或 <span class="function">{@link socket_accept()}</span> 函数所创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span>   实例 <span class="parameter" style="color:#3A95FF">socket</span> 中读取数据。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-read-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       使用 <span class="function">{@link socket_create()}</span>       或 <span class="function">{@link socket_accept()}</span>       函数创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">length</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">length</span> 参数指定了最大能够读取的字节数。否则您可以使用       <span class="literal">\r</span>、<span class="literal">\n</span>、<span class="literal">\0</span>       结束读取（根据 <span class="parameter" style="color:#3A95FF">mode</span> 参数设置，请参见下文）。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       可选参数 <span class="parameter" style="color:#3A95FF">mode</span> 是一个命名常量：       </p><ul class="itemizedlist">        <li class="listitem">         <span class="simpara">          <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.php-binary-read">PHP_BINARY_READ</a></span></strong> （默认）- 使用系统的          <span class="literal">recv()</span> 函数。二进制安全地读取数据。         </span>        </li>        <li class="listitem">         <span class="simpara">          <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.php-normal-read">PHP_NORMAL_READ</a></span></strong> - 读取到          <span class="literal">\n</span>、<span class="literal">\r</span> 时停止。         </span>        </li>       </ul>           </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-read-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>socket_read()</strong></span> 返回一个字符串，表示接收到的数据。如果发生了错误（包括远程主机关闭了连接），则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。错误码可使用   <span class="function">{@link socket_last_error()}</span> 获取。也可使用 <span class="function">{@link socket_strerror()}</span>   来获取错误码的文字描述。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    当套接字中没有更多数据可读取时，<span class="function"><strong>socket_read()</strong></span>    返回一个长度为 0 的空字符串（""）。   </p>  </blockquote> </div> <div class="refsect1 changelog" id="refsect1-function.socket-read-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-read-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_accept()} - 接受套接字上的连接</span></li>    <li><span class="function">{@link socket_bind()} - 给套接字绑定名字</span></li>    <li><span class="function">{@link socket_connect()} - 开启一个套接字连接</span></li>    <li><span class="function">{@link socket_listen()} - 监听套接字的连接</span></li>    <li><span class="function">{@link socket_last_error()} - 返回套接字上的最后一个错误</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>    <li><span class="function">{@link socket_write()} - 向套接字写数据</span></li>   </ul>   </div></div>
*
 * Reads a maximum of length bytes from a socket
 * @link https://php.net/manual/zh/function.socket-read.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>
 * or <b>socket_accept</b>.
 * </p>
 * @param int $length <p>
 * The maximum number of bytes read is specified by the
 * <i>length</i> parameter. Otherwise you can use
 * <b>&#92;r</b>, <b>&#92;n</b>,
 * or <b>&#92;0</b> to end reading (depending on the <i>type</i>
 * parameter, see below).
 * </p>
 * @param int $mode [optional] <p>
 * Optional <i>type</i> parameter is a named constant:
 * <b>PHP_BINARY_READ</b> (Default) - use the system
 * recv() function. Safe for reading binary data.
 * @return string|false <b>socket_read</b> returns the data as a string on success,
 * or <b>FALSE</b> on error (including if the remote host has closed the
 * connection). The error code can be retrieved with
 * <b>socket_last_error</b>. This code may be passed to
 * <b>socket_strerror</b> to get a textual representation of
 * the error.
 * </p>
 * <p>
 * <b>socket_read</b> returns a zero length string ("")
 * when there is no more data to read.</p>
 
*/
function socket_read(Socket $socket, int $length, int $mode = PHP_BINARY_READ): string|false {}

/**
* <div id="function.socket-getsockname" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_getsockname</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_getsockname</span> — <span class="dc-title">获取套接字本地端的名字，返回主机名和端口号或是 Unix 文件系统路径，具体取决于套接字类型</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-getsockname-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_getsockname</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$address</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$port</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    <span class="function"><strong>socket_getsockname()</strong></span> 不应该用于 <span class="function">{@link socket_connect()}</span>     创建的 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-unix">AF_UNIX</a></span></strong> 类型套接字。只有使用 <span class="function">{@link socket_accept()}</span>     创建的套接字或调用过 <span class="function">{@link socket_bind()}</span> 的服务端套接字会返回有意义的值。   </span>  </p></blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.socket-getsockname-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       由 <span class="function">{@link socket_create()}</span> 或 <span class="function">{@link socket_accept()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">address</span></dt>     <dd>      <p class="para">       如果给定套接字的类型是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong>        或 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet6">AF_INET6</a></span></strong>，<span class="function"><strong>socket_getsockname()</strong></span>        将在参数 <span class="parameter" style="color:#3A95FF">address</span> 上返回本地 <em>IP 地址</em>        （例如：<span class="literal">127.0.0.1</span> 或 <span class="literal">fe80::1</span>），如果存在端口号，也将关联到 <span class="parameter" style="color:#3A95FF">port</span> 参数。      </p>      <p class="para">       如果给定套接字的类型是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-unix">AF_UNIX</a></span></strong>，<span class="function"><strong>socket_getsockname()</strong></span>        将在 <span class="parameter" style="color:#3A95FF">address</span> 参数中返回 Unix 文件系统路径（例如：<span class="literal">/var/run/daemon.sock</span>）。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">port</span></dt>     <dd>      <p class="para">       如果提供此参数，它将保存关联的端口号。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-getsockname-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。 如果套接字类型不是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet6">AF_INET6</a></span></strong>    或 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-unix">AF_UNIX</a></span></strong> 中的任意一个，<span class="function"><strong>socket_getsockname()</strong></span>    也可能返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，在此情况下，套接字最后的错误码<em>不会</em>更新。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-getsockname-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-getsockname-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_getpeername()} - 获取套接字远端名字</span></li>    <li><span class="function">{@link socket_last_error()} - 返回套接字上的最后一个错误</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Queries the local side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
 * @link https://php.net/manual/zh/function.socket-getsockname.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>
 * or <b>socket_accept</b>.
 * </p>
 * @param string &$address <p>
 * If the given socket is of type <b>AF_INET</b>
 * or <b>AF_INET6</b>, <b>socket_getsockname</b>
 * will return the local IP address in appropriate notation (e.g.
 * 127.0.0.1 or fe80::1) in the
 * <i>address</i> parameter and, if the optional
 * <i>port</i> parameter is present, also the associated port.
 * </p>
 * <p>
 * If the given socket is of type <b>AF_UNIX</b>,
 * <b>socket_getsockname</b> will return the Unix filesystem
 * path (e.g. /var/run/daemon.sock) in the
 * <i>address</i> parameter.
 * </p>
 * @param int &$port [optional] <p>
 * If provided, this will hold the associated port.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. <b>socket_getsockname</b> may also return
 * <b>FALSE</b> if the socket type is not any of <b>AF_INET</b>,
 * <b>AF_INET6</b>, or <b>AF_UNIX</b>, in which
 * case the last socket error code is not updated.
 
*/
function socket_getsockname(Socket $socket, &$address, &$port = null): bool {}

/**
* <div id="function.socket-getpeername" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_getpeername</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_getpeername</span> — <span class="dc-title">获取套接字远端名字</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-getpeername-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_getpeername</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$address</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$port</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   获取套接字远端名字，返回主机名和端口号或是 Unix 文件系统路径，具体取决于套接字类型。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-getpeername-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       由 <span class="function">{@link socket_create()}</span> 或 <span class="function">{@link socket_accept()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">address</span></dt>     <dd>      <p class="para">       如果给定套接字的类型是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong>        或 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet6">AF_INET6</a></span></strong>，<span class="function"><strong>socket_getpeername()</strong></span>        将在参数 <span class="parameter" style="color:#3A95FF">address</span> 上返回对端（远端） <em>IP 地址</em>        （例如：<span class="literal">127.0.0.1</span> 或 <span class="literal">fe80::1</span>），如果存在端口号，也将关联到 <span class="parameter" style="color:#3A95FF">port</span> 参数。      </p>      <p class="para">       如果给定套接字的类型是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-unix">AF_UNIX</a></span></strong>，<span class="function"><strong>socket_getpeername()</strong></span>        将在 <span class="parameter" style="color:#3A95FF">address</span> 参数中返回 Unix 文件系统路径（例如：<span class="literal">/var/run/daemon.sock</span>）。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">port</span></dt>     <dd>      <p class="para">       如果提供此参数，它将保存 <span class="parameter" style="color:#3A95FF">address</span> 关联的端口号。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-getpeername-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。 如果套接字类型不是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet6">AF_INET6</a></span></strong>    或 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-unix">AF_UNIX</a></span></strong> 中的任意一个，<span class="function"><strong>socket_getpeername()</strong></span>    也可能返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，在此情况下，套接字最后的错误码<em>不会</em>更新。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-getpeername-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 notes" id="refsect1-function.socket-getpeername-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    <span class="function"><strong>socket_getpeername()</strong></span> 不应该用于 <span class="function">{@link socket_accept()}</span>     创建的 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-unix">AF_UNIX</a></span></strong> 类型套接字。只有使用 <span class="function">{@link socket_connect()}</span>     创建的套接字或调用过 <span class="function">{@link socket_bind()}</span> 的服务端套接字会返回有意义的值。   </p>  </blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    为了让 <span class="function"><strong>socket_getpeername()</strong></span> 返回有意义的值，套接字使用 “peer“ 的概念是有意义的（the socket it is applied upon must of course be one for which the concept of "peer" makes sense）。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.socket-getpeername-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_getsockname()} - 获取套接字本地端的名字，返回主机名和端口号或是 Unix 文件系统路径，具体取决于套接字类型</span></li>    <li><span class="function">{@link socket_last_error()} - 返回套接字上的最后一个错误</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Queries the remote side of the given socket which may either result in host/port or in a Unix filesystem path, dependent on its type
 * @link https://php.net/manual/zh/function.socket-getpeername.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>
 * or <b>socket_accept</b>.
 * </p>
 * @param string &$address <p>
 * If the given socket is of type <b>AF_INET</b> or
 * <b>AF_INET6</b>, <b>socket_getpeername</b>
 * will return the peers (remote) IP address in
 * appropriate notation (e.g. 127.0.0.1 or
 * fe80::1) in the <i>address</i>
 * parameter and, if the optional <i>port</i> parameter is
 * present, also the associated port.
 * </p>
 * <p>
 * If the given socket is of type <b>AF_UNIX</b>,
 * <b>socket_getpeername</b> will return the Unix filesystem
 * path (e.g. /var/run/daemon.sock) in the
 * <i>address</i> parameter.
 * </p>
 * @param int &$port [optional] <p>
 * If given, this will hold the port associated to
 * <i>address</i>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. <b>socket_getpeername</b> may also return
 * <b>FALSE</b> if the socket type is not any of <b>AF_INET</b>,
 * <b>AF_INET6</b>, or <b>AF_UNIX</b>, in which
 * case the last socket error code is not updated.
 
*/
function socket_getpeername(Socket $socket, &$address, &$port = null): bool {}

/**
* <div id="function.socket-connect" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_connect</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_connect</span> — <span class="dc-title">开启一个套接字连接</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-connect-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_connect</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$address</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$port</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   使用 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例 <span class="parameter" style="color:#3A95FF">socket</span> 发起到   <span class="parameter" style="color:#3A95FF">address</span> 的连接，该实例必须要求是用   <span class="function">{@link socket_create()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 有效的套接字资源实例。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-connect-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       由 <span class="function">{@link socket_create()}</span> 创建的       <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">address</span></dt>     <dd>      <p class="para">       如果参数 <span class="parameter" style="color:#3A95FF">socket</span> 是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong>，那么参数       <span class="parameter" style="color:#3A95FF">address</span> 则可以是一个点分四组表示法（例如 <span class="literal">127.0.0.1</span> ） 的 IPv4 地址；如果支持       IPv6 并且 <span class="parameter" style="color:#3A95FF">socket</span> 是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet6">AF_INET6</a></span></strong>，那么 <span class="parameter" style="color:#3A95FF">address</span>       也可以是有效的 IPv6 地址（例如 <span class="literal">::1</span>）；如果套接字类型为 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-unix">AF_UNIX</a></span></strong> ，那么       <span class="parameter" style="color:#3A95FF">address</span> 也可以是一个 Unix 套接字。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">port</span></dt>     <dd>      <p class="para">       参数 <span class="parameter" style="color:#3A95FF">port</span> 仅仅用于 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong> 和 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet6">AF_INET6</a></span></strong>       套接字连接的时候，并且是在此情况下是需要强制说明连接对应的远程服务器上的端口号。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-connect-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。 错误代码会传入   <span class="function">{@link socket_last_error()}</span> ，如果将此参数传入   <span class="function">{@link socket_strerror()}</span> 则可以得到错误的文字说明。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    如果套接字是非堵塞的，此函数将返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 并产生一个错误 <span class="literal">Operation now in progress</span>。   </p>  </blockquote> </div> <div class="refsect1 changelog" id="refsect1-function.socket-connect-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">port</span> 允许为空。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-connect-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_bind()} - 给套接字绑定名字</span></li>    <li><span class="function">{@link socket_listen()} - 监听套接字的连接</span></li>    <li><span class="function">{@link socket_create()} - 创建一个套接字（通讯节点）</span></li>    <li><span class="function">{@link socket_last_error()} - 返回套接字上的最后一个错误</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Initiates a connection on a socket
 * @link https://php.net/manual/zh/function.socket-connect.php
 * @param resource|Socket $socket
 * @param string $address <p>
 * The <i>address</i> parameter is either an IPv4 address
 * in dotted-quad notation (e.g. 127.0.0.1) if
 * <i>socket</i> is <b>AF_INET</b>, a valid
 * IPv6 address (e.g. ::1) if IPv6 support is enabled and
 * <i>socket</i> is <b>AF_INET6</b>
 * or the pathname of a Unix domain socket, if the socket family is
 * <b>AF_UNIX</b>.
 * </p>
 * @param int|null $port <p>
 * The <i>port</i> parameter is only used and is mandatory
 * when connecting to an <b>AF_INET</b> or an
 * <b>AF_INET6</b> socket, and designates
 * the port on the remote host to which a connection should be made.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. The error code can be retrieved with
 * <b>socket_last_error</b>. This code may be passed to
 * <b>socket_strerror</b> to get a textual explanation of the
 * error.
 * </p>
 * <p>
 * If the socket is non-blocking then this function returns <b>FALSE</b> with an
 * error Operation now in progress.
 
*/
function socket_connect(Socket $socket, string $address, ?int $port = null): bool {}

/**
* <div id="function.socket-strerror" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_strerror</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_strerror</span> — <span class="dc-title">返回描述套接字错误的字符串</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-strerror-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_strerror</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$error_code</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_strerror()</strong></span> 将 <span class="function">{@link socket_last_error()}</span>    返回的套接字错误码作为 <span class="parameter" style="color:#3A95FF">error_code</span> 参数，返回对应的文本解释。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    虽然 socket 扩展生成的错误信息使用的是英语，但此方法会根据当前语言环境（<strong><span><a href="https://php.net/manual/zh/string.constants.php#constant.lc-messages">LC_MESSAGES</a></span></strong>）    展示检索到的系统消息。   </p>  </blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.socket-strerror-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">error_code</span></dt>     <dd>      <p class="para">       可能从 <span class="function">{@link socket_last_error()}</span> 产生的套接字错误码。       </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-strerror-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回与 <span class="parameter" style="color:#3A95FF">error_code</span> 参数相关的错误信息。  </p> </div> <div class="refsect1 examples" id="refsect1-function.socket-strerror-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4785">    <p><strong>示例 #1 <span class="function"><strong>socket_strerror()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">if (</span><span style="color: #9876AA">false </span><span style="color: #007700">== (</span><span style="color: #9876AA">$socket </span><span style="color: #007700">= @</span><span style="color: #9876AA">socket_create</span><span style="color: #007700">(</span><span style="color: #9876AA">AF_INET</span><span style="color: #007700">, </span><span style="color: #9876AA">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_TCP</span><span style="color: #007700">))) {<br>   echo </span><span style="color: #DD0000">"socket_create() failed: reason: " </span><span style="color: #007700">. </span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br><br>if (</span><span style="color: #9876AA">false </span><span style="color: #007700">== (@</span><span style="color: #9876AA">socket_bind</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">, </span><span style="color: #DD0000">'127.0.0.1'</span><span style="color: #007700">, </span><span style="color: #9876AA">80</span><span style="color: #007700">))) {<br>   echo </span><span style="color: #DD0000">"socket_bind() failed: reason: " </span><span style="color: #007700">. </span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     以上示例的预期输出（假设脚本不是使用 root 权限运行）：    </p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">socket_bind() failed: reason: Permission denied</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.socket-strerror-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_accept()} - 接受套接字上的连接</span></li>    <li><span class="function">{@link socket_bind()} - 给套接字绑定名字</span></li>    <li><span class="function">{@link socket_connect()} - 开启一个套接字连接</span></li>    <li><span class="function">{@link socket_listen()} - 监听套接字的连接</span></li>    <li><span class="function">{@link socket_create()} - 创建一个套接字（通讯节点）</span></li>   </ul>   </div></div>
*
 * Return a string describing a socket error
 * @link https://php.net/manual/zh/function.socket-strerror.php
 * @param int $error_code <p>
 * A valid socket error number, likely produced by
 * <b>socket_last_error</b>.
 * </p>
 * @return string the error message associated with the <i>errno</i>
 * parameter.
 
*/
function socket_strerror(int $error_code): string {}

/**
* <div id="function.socket-bind" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_bind</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_bind</span> — <span class="dc-title">给套接字绑定名字</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-bind-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_bind</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$address</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$port</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   绑定 <span class="parameter" style="color:#3A95FF">address</span> 到 <span class="parameter" style="color:#3A95FF">socket</span>。   该操作必须是在使用 <span class="function">{@link socket_connect()}</span> 或者 <span class="function">{@link socket_listen()}</span>   建立一个连接之前。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-bind-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       用 <span class="function">{@link socket_create()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">address</span></dt>     <dd>      <p class="para">       如果套接字是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong> 族，那么       <span class="parameter" style="color:#3A95FF">address</span> 必须是一个四点分法的 IP 地址（例如 <span class="literal">127.0.0.1</span> ）。      </p>      <p class="para">       如果套接字是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-unix">AF_UNIX</a></span></strong> 族，那么 <span class="parameter" style="color:#3A95FF">address</span> 是 Unix 域套接字的路径（例如 <var class="filename">/tmp/my.sock</var> ）。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">port</span> （可选）</dt>     <dd>      <p class="para">       参数 <span class="parameter" style="color:#3A95FF">port</span> 仅仅用于 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong>       套接字连接的时候，并且指定连接中需要监听的端口号。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-bind-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   使用 <span class="function">{@link socket_last_error()}</span> 检索错误代码，如果将此代码传入 <span class="function">{@link socket_strerror()}</span>   则可以得到错误的文字说明。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-bind-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.socket-bind-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4770">    <p><strong>示例 #1 使用 <span class="function"><strong>socket_bind()</strong></span> 来设置源地址</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建新的套接字<br></span><span style="color: #9876AA">$sock </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_create</span><span style="color: #007700">(</span><span style="color: #9876AA">AF_INET</span><span style="color: #007700">, </span><span style="color: #9876AA">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_TCP</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 计算机拥有的 IP 地址示例列表<br></span><span style="color: #9876AA">$sourceips</span><span style="color: #007700">[</span><span style="color: #DD0000">'kevin'</span><span style="color: #007700">]    = </span><span style="color: #DD0000">'127.0.0.1'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$sourceips</span><span style="color: #007700">[</span><span style="color: #DD0000">'madcoder'</span><span style="color: #007700">] = </span><span style="color: #DD0000">'127.0.0.2'</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// 绑定源地址<br></span><span style="color: #9876AA">socket_bind</span><span style="color: #007700">(</span><span style="color: #9876AA">$sock</span><span style="color: #007700">, </span><span style="color: #9876AA">$sourceips</span><span style="color: #007700">[</span><span style="color: #DD0000">'madcoder'</span><span style="color: #007700">]);<br><br></span><span style="color: #FF8000">// 连接到目标地址<br></span><span style="color: #9876AA">socket_connect</span><span style="color: #007700">(</span><span style="color: #9876AA">$sock</span><span style="color: #007700">, </span><span style="color: #DD0000">'127.0.0.1'</span><span style="color: #007700">, </span><span style="color: #9876AA">80</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 写入<br></span><span style="color: #9876AA">$request </span><span style="color: #007700">= </span><span style="color: #DD0000">'GET / HTTP/1.1' </span><span style="color: #007700">. </span><span style="color: #DD0000">"\r\n" </span><span style="color: #007700">.<br>           </span><span style="color: #DD0000">'Host: example.com' </span><span style="color: #007700">. </span><span style="color: #DD0000">"\r\n\r\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">socket_write</span><span style="color: #007700">(</span><span style="color: #9876AA">$sock</span><span style="color: #007700">, </span><span style="color: #9876AA">$request</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 关闭<br></span><span style="color: #9876AA">socket_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$sock</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.socket-bind-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    该函数必须在 <span class="function">{@link socket_connect()}</span> 之前使用。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.socket-bind-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_connect()} - 开启一个套接字连接</span></li>    <li><span class="function">{@link socket_listen()} - 监听套接字的连接</span></li>    <li><span class="function">{@link socket_create()} - 创建一个套接字（通讯节点）</span></li>    <li><span class="function">{@link socket_last_error()} - 返回套接字上的最后一个错误</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Binds a name to a socket
 * @link https://php.net/manual/zh/function.socket-bind.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>.
 * </p>
 * @param string $address <p>
 * If the socket is of the <b>AF_INET</b> family, the
 * <i>address</i> is an IP in dotted-quad notation
 * (e.g. 127.0.0.1).
 * </p>
 * <p>
 * If the socket is of the <b>AF_UNIX</b> family, the
 * <i>address</i> is the path of a
 * Unix-domain socket (e.g. /tmp/my.sock).
 * </p>
 * @param int $port [optional] <p>
 * The <i>port</i> parameter is only used when
 * binding an <b>AF_INET</b> socket, and designates
 * the port on which to listen for connections.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * <p>
 * The error code can be retrieved with <b>socket_last_error</b>.
 * This code may be passed to <b>socket_strerror</b> to get a
 * textual explanation of the error.
 * </p>
 
*/
function socket_bind(Socket $socket, string $address, int $port = 0): bool {}

/**
* <div id="function.socket-recv" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_recv</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_recv</span> — <span class="dc-title">从已连接的 socket 接收数据</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-recv-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_recv</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter reference" style="color:#3A95FF">&amp;$data</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$length</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   函数 <span class="function"><strong>socket_recv()</strong></span> 从 <span class="parameter" style="color:#3A95FF">socket</span> 中接收长度为   <span class="parameter" style="color:#3A95FF">length</span> 字节的数据，并保存在 <span class="parameter" style="color:#3A95FF">data</span> 中。   <span class="function"><strong>socket_recv()</strong></span> 用于从已连接的 socket 中接收数据。除此之外，可以设定一个或多个 flags   来控制函数的具体行为。  </p>  <p class="para">   <span class="parameter" style="color:#3A95FF">data</span> 是传引用的，因此必须以变量的形式，指定到参数列表。从   <span class="parameter" style="color:#3A95FF">socket</span> 中接收到的数据将会保存在 <span class="parameter" style="color:#3A95FF">data</span> 中。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-recv-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       参数 <span class="parameter" style="color:#3A95FF">socket</span> 必须是一个由 <span class="function">{@link socket_create()}</span>       创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       从 socket 中获取的数据将被保存在由 <span class="parameter" style="color:#3A95FF">data</span> 指定的变量中。       如果有错误发生，如链接被重置，数据不可用等等，<span class="parameter" style="color:#3A95FF">data</span> 将被设为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">length</span></dt>     <dd>      <p class="para">       从远程主机接收长度最多为 <span class="parameter" style="color:#3A95FF">length</span> 字节的数据。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">flags</span> 的值可以为下列任意 flag 的组合。使用按位或运算符(<span class="literal">|</span>)来       组合不同的 flag。      </p>            <table class="doctable table">       <caption><strong>可用的 <span class="parameter" style="color:#3A95FF">flags</span> 值</strong></caption>               <thead>         <tr>          <th>Flag</th>          <th>描述</th>         </tr>        </thead>        <tbody class="tbody">         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-oob">MSG_OOB</a></span></strong></td>          <td>           处理超出边界的数据          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-peek">MSG_PEEK</a></span></strong></td>          <td>           从接收队列的起始位置接收数据，但不将他们从接收队列中移除。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-waitall">MSG_WAITALL</a></span></strong></td>          <td>           在接收到至少 <span class="parameter" style="color:#3A95FF">length</span> 字节的数据之前，造成一个阻塞，并暂停脚本运行（block）。但是，           如果接收到中断信号，或远程服务器断开连接，该函数将返回少于 <span class="parameter" style="color:#3A95FF">length</span> 字节的数据。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-dontwait">MSG_DONTWAIT</a></span></strong></td>          <td>           如果指定了该 flag，函数将不会造成阻塞，即使在全局设置中指定了阻塞设置。          </td>         </tr>        </tbody>             </table>     </dd>           </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-recv-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>socket_recv()</strong></span> 返回一个数字，表示接收到的字节数。如果发生了错误，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>   错误码可使用 <span class="function">{@link socket_last_error()}</span> 接收。也可使用函数 <span class="function">{@link socket_strerror()}</span>    来取得关于错误的文字描述。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-recv-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.socket-recv-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4776">    <p><strong>示例 #1 <span class="function"><strong>socket_recv()</strong></span> 示例</strong></p>    <div class="example-contents"><p>     该示例简单地使用 <span class="function"><strong>socket_recv()</strong></span> 重写了 <a href="https://php.net/manual/zh/sockets.examples.php" class="xref">示例</a> 中的     第一个示例。    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>error_reporting</span><span style="color: #007700">(</span><span style="color: #9876AA">E_ALL</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">"&lt;h2&gt;TCP/IP Connection&lt;/h2&gt;\n"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// 获取 WWW 服务的端口。 <br></span><span style="color: #9876AA">$service_port </span><span style="color: #007700">= </span><span style="color: #9876AA">getservbyname</span><span style="color: #007700">(</span><span style="color: #DD0000">'www'</span><span style="color: #007700">, </span><span style="color: #DD0000">'tcp'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 获取目标主机的 IP 地址。 <br></span><span style="color: #9876AA">$address </span><span style="color: #007700">= </span><span style="color: #9876AA">gethostbyname</span><span style="color: #007700">(</span><span style="color: #DD0000">'www.example.com'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 创建 TCP/IP 套接字。 <br></span><span style="color: #9876AA">$socket </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_create</span><span style="color: #007700">(</span><span style="color: #9876AA">AF_INET</span><span style="color: #007700">, </span><span style="color: #9876AA">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_TCP</span><span style="color: #007700">);<br>if (</span><span style="color: #9876AA">$socket </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"socket_create() failed: reason: " </span><span style="color: #007700">. </span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>} else {<br>    echo </span><span style="color: #DD0000">"OK.\n"</span><span style="color: #007700">;<br>}<br><br>echo </span><span style="color: #DD0000">"Attempting to connect to '</span><span style="color: #9876AA">$address</span><span style="color: #DD0000">' on port '</span><span style="color: #9876AA">$service_port</span><span style="color: #DD0000">'..."</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$result </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_connect</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">, </span><span style="color: #9876AA">$address</span><span style="color: #007700">, </span><span style="color: #9876AA">$service_port</span><span style="color: #007700">);<br>if (</span><span style="color: #9876AA">$result </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"socket_connect() failed.\nReason: (</span><span style="color: #9876AA">$result</span><span style="color: #DD0000">) " </span><span style="color: #007700">. </span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>} else {<br>    echo </span><span style="color: #DD0000">"OK.\n"</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #9876AA">$in </span><span style="color: #007700">= </span><span style="color: #DD0000">"HEAD / HTTP/1.1\r\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$in </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Host: www.example.com\r\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$in </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Connection: Close\r\n\r\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$out </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br><br>echo </span><span style="color: #DD0000">"Sending HTTP HEAD request..."</span><span style="color: #007700">;<br></span><span style="color: #9876AA">socket_write</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">, </span><span style="color: #9876AA">$in</span><span style="color: #007700">, </span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #9876AA">$in</span><span style="color: #007700">));<br>echo </span><span style="color: #DD0000">"OK.\n"</span><span style="color: #007700">;<br><br>echo </span><span style="color: #DD0000">"Reading response:\n\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$buf </span><span style="color: #007700">= </span><span style="color: #DD0000">'This is my buffer.'</span><span style="color: #007700">;<br>if (</span><span style="color: #9876AA">false </span><span style="color: #007700">!== (</span><span style="color: #9876AA">$bytes </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_recv</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">, </span><span style="color: #9876AA">$buf</span><span style="color: #007700">, </span><span style="color: #9876AA">2048</span><span style="color: #007700">, </span><span style="color: #9876AA">MSG_WAITALL</span><span style="color: #007700">))) {<br>    echo </span><span style="color: #DD0000">"Read </span><span style="color: #9876AA">$bytes</span><span style="color: #DD0000"> bytes from socket_recv(). Closing socket..."</span><span style="color: #007700">;<br>} else {<br>    echo </span><span style="color: #DD0000">"socket_recv() failed; reason: " </span><span style="color: #007700">. </span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">socket_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">$buf </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">"OK.\n\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"><h2>TCP/IP Connection</h2><br>OK.<br>Attempting to connect to '208.77.188.166' on port '80'...OK.<br>Sending HTTP HEAD request...OK.<br>Reading response:<br><br>Read 123 bytes from socket_recv(). Closing socket...HTTP/1.1 200 OK<br>Date: Mon, 14 Sep 2009 08:56:36 GMT<br>Server: Apache/2.2.3 (Red Hat)<br>Last-Modified: Tue, 15 Nov 2005 13:24:10 GMT<br>ETag: "b80f4-1b6-80bfd280"<br>Accept-Ranges: bytes<br>Content-Length: 438<br>Connection: close<br>Content-Type: text/html; charset=UTF-8<br><br>OK.</blockquote></div>    </div>   </div>   </div>                     </div>
*
 * Receives data from a connected socket
 * @link https://php.net/manual/zh/function.socket-recv.php
 * @param resource|Socket $socket <p>
 * The <i>socket</i> must be a socket resource previously
 * created by socket_create().
 * </p>
 * @param string &$data <p>
 * The data received will be fetched to the variable specified with
 * <i>buf</i>. If an error occurs, if the
 * connection is reset, or if no data is
 * available, <i>buf</i> will be set to <b>NULL</b>.
 * </p>
 * @param int $length <p>
 * Up to <i>len</i> bytes will be fetched from remote host.
 * </p>
 * @param int $flags <p>
 * The value of <i>flags</i> can be any combination of
 * the following flags, joined with the binary OR (|)
 * operator.
 * </p>
 * <table>
 * Possible values for <i>flags</i>
 * <tr valign="top">
 * <td>Flag</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_OOB</b></td>
 * <td>
 * Process out-of-band data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_PEEK</b></td>
 * <td>
 * Receive data from the beginning of the receive queue without
 * removing it from the queue.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_WAITALL</b></td>
 * <td>
 * Block until at least <i>len</i> are received.
 * However, if a signal is caught or the remote host disconnects, the
 * function may return less data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_DONTWAIT</b></td>
 * <td>
 * With this flag set, the function returns even if it would normally
 * have blocked.
 * </td>
 * </tr>
 * </table>
 * @return int|false <b>socket_recv</b> returns the number of bytes received,
 * or <b>FALSE</b> if there was an error. The actual error code can be retrieved by
 * calling <b>socket_last_error</b>. This error code may be
 * passed to <b>socket_strerror</b> to get a textual explanation
 * of the error.
 
*/
function socket_recv(Socket $socket, &$data, int $length, int $flags): int|false {}

/**
* <div id="function.socket-send" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_send</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_send</span> — <span class="dc-title">向已连接的套接字发送数据</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-send-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_send</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$data</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$length</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_send()</strong></span> 从 <span class="parameter" style="color:#3A95FF">data</span>    中发送 <span class="parameter" style="color:#3A95FF">length</span> 字节到套接字 <span class="parameter" style="color:#3A95FF">socket</span>  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-send-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       由 <span class="function">{@link socket_create()}</span> 或 <span class="function">{@link socket_accept()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       将要发送到远端主机的缓冲区数据。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">length</span></dt>     <dd>      <p class="para">       要从 <span class="parameter" style="color:#3A95FF">data</span> 发送到远端主机的字节数。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">flags</span> 的值可以是下列任意 flag 的组合。使用按位或运算符（<span class="literal">|</span>）来组合不同的 flag。       </p><table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">flags</span> 可用值</strong></caption>                 <tbody class="tbody">          <tr>           <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-oob">MSG_OOB</a></span></strong></td>           <td>            发送 OOB（带外）数据。           </td>          </tr>          <tr>           <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-eor">MSG_EOR</a></span></strong></td>           <td>            逻辑记录标记。发送的数据结束一个逻辑记录。           </td>          </tr>          <tr>           <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-eof">MSG_EOF</a></span></strong></td>           <td>            从发送方关闭套接字，并在指定数据末尾设置结束标识。发送数据后结束事务。           </td>          </tr>          <tr>           <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-dontroute">MSG_DONTROUTE</a></span></strong></td>           <td>            绕过路由，直接使用接口。            </td>          </tr>         </tbody>               </table>           </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-send-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>socket_send()</strong></span> 返回发送的字节数，发生错误时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-send-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-send-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_sendto()} - 向套接字发送消息，无论它是否已建立连接</span></li>   </ul>   </div></div>
*
 * Sends data to a connected socket
 * @link https://php.net/manual/zh/function.socket-send.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>
 * or <b>socket_accept</b>.
 * </p>
 * @param string $data <p>
 * A buffer containing the data that will be sent to the remote host.
 * </p>
 * @param int $length <p>
 * The number of bytes that will be sent to the remote host from
 * <i>buf</i>.
 * </p>
 * @param int $flags <p>
 * The value of <i>flags</i> can be any combination of
 * the following flags, joined with the binary OR (|)
 * operator.
 * <table>
 * Possible values for <i>flags</i>
 * <tr valign="top">
 * <td><b>MSG_OOB</b></td>
 * <td>
 * Send OOB (out-of-band) data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_EOR</b></td>
 * <td>
 * Indicate a record mark. The sent data completes the record.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_EOF</b></td>
 * <td>
 * Close the sender side of the socket and include an appropriate
 * notification of this at the end of the sent data. The sent data
 * completes the transaction.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_DONTROUTE</b></td>
 * <td>
 * Bypass routing, use direct interface.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return int|false <b>socket_send</b> returns the number of bytes sent, or <b>FALSE</b> on error.
 
*/
function socket_send(Socket $socket, string $data, int $length, int $flags): int|false {}

/**
* <div id="function.socket-sendmsg" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_sendmsg</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_sendmsg</span> — <span class="dc-title">Send a message</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-sendmsg-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_sendmsg</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$message</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-function.socket-sendmsg-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">message</span></dt>     <dd>      <p class="para">      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-sendmsg-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of bytes sent,  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-sendmsg-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-sendmsg-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_recvmsg()} - Read a message</span></li>    <li><span class="function">{@link socket_cmsg_space()} - Calculate message buffer size</span></li>   </ul>   </div></div>
*
 * (PHP 5 &gt;=5.5.0)<br/>
 * Send a message
 * @link https://secure.php.net/manual/en/function.socket-sendmsg.php
 * @param resource|Socket $socket
 * @param array $message
 * @param int $flags
 * @return int|false
 * @since 5.5
 
*/
function socket_sendmsg(
    Socket $socket,
    array $message,
    #[PhpStormStubsElementAvailable(from: '5.5', to: '7.4')] int $flags,
    #[PhpStormStubsElementAvailable(from: '8.0')] int $flags = 0
): int|false {}

/**
* <div id="function.socket-recvfrom" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_recvfrom</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_recvfrom</span> — <span class="dc-title">从套接字接收数据，无论它是否是面向连接的</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-recvfrom-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_recvfrom</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$data</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$length</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$address</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$port</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   函数 <span class="function"><strong>socket_recvfrom()</strong></span> 使用 <span class="parameter" style="color:#3A95FF">socket</span>    从 <span class="parameter" style="color:#3A95FF">address</span> 的 <span class="parameter" style="color:#3A95FF">port</span>    端口上接收 <span class="parameter" style="color:#3A95FF">length</span> 字节数据到 <span class="parameter" style="color:#3A95FF">data</span>    中（如果套接字不是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-unix">AF_UNIX</a></span></strong> 类型）。<span class="function"><strong>socket_recvfrom()</strong></span>    可用于从已连接或未连接的套接字上收集数据。另外，可以指定一个或多个标志来修改函数的行为。  </p>  <p class="para">   <span class="parameter" style="color:#3A95FF">address</span> 和 <span class="parameter" style="color:#3A95FF">port</span>    必须是引用传递。如果套接字不是面向连接的，<span class="parameter" style="color:#3A95FF">address</span>    将设置为远程主机的互联网协议地址或 UNIX 套接字路径。如果套接字是面向连接的，<span class="parameter" style="color:#3A95FF">address</span>    是 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。另外，在 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong> 或 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet6">AF_INET6</a></span></strong>    套接字未连接的情况下，<span class="parameter" style="color:#3A95FF">port</span> 将包含远程主机的端口号。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">此函数可安全用于二进制对象。</span></p></blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.socket-recvfrom-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">socket</span> 必须是先前由 socket_create() 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       收到的数据将提取到 <span class="parameter" style="color:#3A95FF">data</span> 指定的变量。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">length</span></dt>     <dd>      <p class="para">       最多可从远程主机获取的 <span class="parameter" style="color:#3A95FF">length</span> 字节数。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">flags</span> 的值可以是下列任意 flag 的组合。使用按位或运算符（<span class="literal">|</span>）来组合不同的 flag。      </p>            <table class="doctable table">       <caption><strong><span class="parameter" style="color:#3A95FF">flags</span> 可用值</strong></caption>               <thead>         <tr>          <th>Flag</th>          <th>描述</th>         </tr>        </thead>        <tbody class="tbody">         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-oob">MSG_OOB</a></span></strong></td>          <td>           处理带外数据。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-peek">MSG_PEEK</a></span></strong></td>          <td>           从接收队列的起始位置接收数据，但不将他们从接收队列中移除。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-waitall">MSG_WAITALL</a></span></strong></td>          <td>           在接受到至少 <span class="parameter" style="color:#3A95FF">length</span>            字节数据前阻塞。但是，如果接收到中断信号，或远程主机断开链接，函数可能返回不足 <span class="parameter" style="color:#3A95FF">length</span> 字节的数据。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-dontwait">MSG_DONTWAIT</a></span></strong></td>          <td>           如果指定了该 flag，即使原有套接字是阻塞的，此函数也不会阻塞。          </td>         </tr>        </tbody>             </table>     </dd>             <dt><span class="parameter" style="color:#3A95FF">address</span></dt>     <dd>      <p class="para">       如果套接字是 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-unix">AF_UNIX</a></span></strong> 类型，<span class="parameter" style="color:#3A95FF">address</span>        是文件路径。否则，对于未连接的套接字，<span class="parameter" style="color:#3A95FF">address</span>        是远程主机的 IP 地址，如果套接字是面向连接的，是 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">port</span></dt>     <dd>      <p class="para">       此参数只适用于 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet">AF_INET</a></span></strong> 和 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.af-inet6">AF_INET6</a></span></strong>        类型的套接字，并指定接收数据的远程端口。如果套接字是面向连接的，<span class="parameter" style="color:#3A95FF">port</span>        是 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。      </p>     </dd>           </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.socket-recvfrom-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>socket_recvfrom()</strong></span> 返回接收到的字节数，发生错误时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。可以通过调用 <span class="function">{@link socket_last_error()}</span>    来检索实际的错误代码。此错误码可以传递给 <span class="function">{@link socket_strerror()}</span> 获得错误的文本解释。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-recvfrom-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.socket-recvfrom-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4777">    <p><strong>示例 #1 <span class="function"><strong>socket_recvfrom()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$socket </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_create</span><span style="color: #007700">(</span><span style="color: #9876AA">AF_INET</span><span style="color: #007700">, </span><span style="color: #9876AA">SOCK_DGRAM</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_UDP</span><span style="color: #007700">);<br></span><span style="color: #9876AA">socket_bind</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">, </span><span style="color: #DD0000">'127.0.0.1'</span><span style="color: #007700">, </span><span style="color: #9876AA">1223</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$from </span><span style="color: #007700">= </span><span style="color: #DD0000">''</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$port </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br></span><span style="color: #9876AA">socket_recvfrom</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">, </span><span style="color: #9876AA">$buf</span><span style="color: #007700">, </span><span style="color: #9876AA">12</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">$from</span><span style="color: #007700">, </span><span style="color: #9876AA">$port</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">"Received </span><span style="color: #9876AA">$buf</span><span style="color: #DD0000"> from remote address </span><span style="color: #9876AA">$from</span><span style="color: #DD0000"> and remote port </span><span style="color: #9876AA">$port</span><span style="color: #DD0000">" </span><span style="color: #007700">. </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     此示例将在 127.0.0.1 的 1233 端口上初始化 UDP 套接字，并打印从远程主机收到的至少 12 个字符。    </p></div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.socket-recvfrom-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_recv()} - 从已连接的 socket 接收数据</span></li>    <li><span class="function">{@link socket_send()} - 向已连接的套接字发送数据</span></li>    <li><span class="function">{@link socket_sendto()} - 向套接字发送消息，无论它是否已建立连接</span></li>    <li><span class="function">{@link socket_create()} - 创建一个套接字（通讯节点）</span></li>   </ul>   </div></div>
*
 * Receives data from a socket whether or not it is connection-oriented
 * @link https://php.net/manual/zh/function.socket-recvfrom.php
 * @param resource|Socket $socket <p>
 * The <i>socket</i> must be a socket resource previously
 * created by socket_create().
 * </p>
 * @param string &$data <p>
 * The data received will be fetched to the variable specified with
 * <i>buf</i>.
 * </p>
 * @param int $length <p>
 * Up to <i>len</i> bytes will be fetched from remote host.
 * </p>
 * @param int $flags <p>
 * The value of <i>flags</i> can be any combination of
 * the following flags, joined with the binary OR (|)
 * operator.
 * </p>
 * <table>
 * Possible values for <i>flags</i>
 * <tr valign="top">
 * <td>Flag</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_OOB</b></td>
 * <td>
 * Process out-of-band data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_PEEK</b></td>
 * <td>
 * Receive data from the beginning of the receive queue without
 * removing it from the queue.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_WAITALL</b></td>
 * <td>
 * Block until at least <i>len</i> are received.
 * However, if a signal is caught or the remote host disconnects, the
 * function may return less data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_DONTWAIT</b></td>
 * <td>
 * With this flag set, the function returns even if it would normally
 * have blocked.
 * </td>
 * </tr>
 * </table>
 * @param string &$address <p>
 * If the socket is of the type <b>AF_UNIX</b> type,
 * <i>name</i> is the path to the file. Else, for
 * unconnected sockets, <i>name</i> is the IP address of,
 * the remote host, or <b>NULL</b> if the socket is connection-oriented.
 * </p>
 * @param int &$port [optional] <p>
 * This argument only applies to <b>AF_INET</b> and
 * <b>AF_INET6</b> sockets, and specifies the remote port
 * from which the data is received. If the socket is connection-oriented,
 * <i>port</i> will be <b>NULL</b>.
 * </p>
 * @return int|false <b>socket_recvfrom</b> returns the number of bytes received,
 * or <b>FALSE</b> if there was an error. The actual error code can be retrieved by
 * calling <b>socket_last_error</b>. This error code may be
 * passed to <b>socket_strerror</b> to get a textual explanation
 * of the error.
 
*/
function socket_recvfrom(Socket $socket, &$data, int $length, int $flags, &$address, &$port = null): int|false {}

/**
* <div id="function.socket-recvmsg" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_recvmsg</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_recvmsg</span> — <span class="dc-title">Read a message</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-recvmsg-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_recvmsg</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;$message</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-function.socket-recvmsg-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">message</span></dt>     <dd>      <p class="para">      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-recvmsg-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-recvmsg-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-recvmsg-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_sendmsg()} - Send a message</span></li>    <li><span class="function">{@link socket_cmsg_space()} - Calculate message buffer size</span></li>   </ul>   </div></div>
*
 * Read a message
 * @link https://secure.php.net/manual/en/function.socket-recvmsg.php
 * @param resource|Socket $socket
 * @param array &$message
 * @param int $flags
 * @return int|false
 * @since 5.5
 
*/
function socket_recvmsg(
    Socket $socket,
    array &$message,
    #[PhpStormStubsElementAvailable(from: '5.5', to: '7.4')] int $flags,
    #[PhpStormStubsElementAvailable(from: '8.0')] int $flags = 0
): int|false {}

/**
* <div id="function.socket-sendto" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_sendto</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_sendto</span> — <span class="dc-title">向套接字发送消息，无论它是否已建立连接</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-sendto-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_sendto</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$data</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$length</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$address</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$port</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   函数 <span class="function"><strong>socket_sendto()</strong></span> 通过套接字 <span class="parameter" style="color:#3A95FF">socket</span>    从参数 <span class="parameter" style="color:#3A95FF">data</span> 中发送 <span class="parameter" style="color:#3A95FF">length</span>    指定的字节数到 <span class="parameter" style="color:#3A95FF">address</span> 地址的 <span class="parameter" style="color:#3A95FF">port</span> 端口。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-sendto-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       由 <span class="function">{@link socket_create()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       要从 <span class="parameter" style="color:#3A95FF">data</span> 缓冲区发送的数据。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">length</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">data</span> 中要发送的 <span class="parameter" style="color:#3A95FF">length</span> 长度的字节数。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">flags</span> 的值可以是下列任意 flag 的组合。使用按位或运算符（<span class="literal">|</span>）来组合不同的 flag。       </p><table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">flags</span> 可用值</strong></caption>                 <tbody class="tbody">          <tr>           <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-oob">MSG_OOB</a></span></strong></td>           <td>            发送 OOB（带外）数据。           </td>          </tr>          <tr>           <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-eor">MSG_EOR</a></span></strong></td>           <td>            逻辑记录标记。发送的数据结束一个逻辑记录。           </td>          </tr>          <tr>           <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-eof">MSG_EOF</a></span></strong></td>           <td>            从发送方关闭套接字，并在指定数据末尾设置结束标识。发送数据后结束事务。           </td>          </tr>          <tr>           <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.msg-dontroute">MSG_DONTROUTE</a></span></strong></td>           <td>            绕过路由，直接使用接口。           </td>          </tr>         </tbody>               </table>           </dd>             <dt><span class="parameter" style="color:#3A95FF">address</span></dt>     <dd>      <p class="para">       远端 IP 地址。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">port</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">port</span> 是数据要被发送到的远端端口号。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-sendto-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>socket_sendto()</strong></span> 返回发送到远端地址的字节数。发生错误时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-sendto-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">port</span> 现在允许为 null。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.socket-sendto-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4781">    <p><strong>示例 #1 <span class="function"><strong>socket_sendto()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    $sock </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_create</span><span style="color: #007700">(</span><span style="color: #9876AA">AF_INET</span><span style="color: #007700">, </span><span style="color: #9876AA">SOCK_DGRAM</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_UDP</span><span style="color: #007700">);<br><br>    </span><span style="color: #9876AA">$msg </span><span style="color: #007700">= </span><span style="color: #DD0000">"Ping !"</span><span style="color: #007700">;<br>    </span><span style="color: #9876AA">$len </span><span style="color: #007700">= </span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #9876AA">$msg</span><span style="color: #007700">);<br><br>    </span><span style="color: #9876AA">socket_sendto</span><span style="color: #007700">(</span><span style="color: #9876AA">$sock</span><span style="color: #007700">, </span><span style="color: #9876AA">$msg</span><span style="color: #007700">, </span><span style="color: #9876AA">$len</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #DD0000">'127.0.0.1'</span><span style="color: #007700">, </span><span style="color: #9876AA">1223</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">socket_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$sock</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.socket-sendto-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_send()} - 向已连接的套接字发送数据</span></li>   </ul>   </div></div>
*
 * Sends a message to a socket, whether it is connected or not
 * @link https://php.net/manual/zh/function.socket-sendto.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created using <b>socket_create</b>.
 * </p>
 * @param string $data <p>
 * The sent data will be taken from buffer <i>buf</i>.
 * </p>
 * @param int $length <p>
 * <i>len</i> bytes from <i>buf</i> will be
 * sent.
 * </p>
 * @param int $flags <p>
 * The value of <i>flags</i> can be any combination of
 * the following flags, joined with the binary OR (|)
 * operator.
 * <table>
 * Possible values for <i>flags</i>
 * <tr valign="top">
 * <td><b>MSG_OOB</b></td>
 * <td>
 * Send OOB (out-of-band) data.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_EOR</b></td>
 * <td>
 * Indicate a record mark. The sent data completes the record.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_EOF</b></td>
 * <td>
 * Close the sender side of the socket and include an appropriate
 * notification of this at the end of the sent data. The sent data
 * completes the transaction.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MSG_DONTROUTE</b></td>
 * <td>
 * Bypass routing, use direct interface.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string $address <p>
 * IP address of the remote host.
 * </p>
 * @param int|null $port <p>
 * <i>port</i> is the remote port number at which the data
 * will be sent.
 * </p>
 * @return int|false <b>socket_sendto</b> returns the number of bytes sent to the
 * remote host, or <b>FALSE</b> if an error occurred.
 
*/
function socket_sendto(Socket $socket, string $data, int $length, int $flags, string $address, ?int $port = null): int|false {}

/**
* <div id="function.socket-get-option" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_get_option</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_get_option</span> — <span class="dc-title">获取套接字的套接字选项</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-get-option-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_get_option</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$level</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$option</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_get_option()</strong></span> 函数检索指定 <span class="parameter" style="color:#3A95FF">socket</span>    中由 <span class="parameter" style="color:#3A95FF">option</span> 参数指定的选项值。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-get-option-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       由 <span class="function">{@link socket_create()}</span> 或 <span class="function">{@link socket_accept()}</span>        创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">level</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">level</span> 参数定义选项所在的协议级别。例如，在 socket 级别检索选项，将使用 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sol-socket">SOL_SOCKET</a></span></strong>        作为 <span class="parameter" style="color:#3A95FF">level</span> 参数值。在其它级别，例如 TCP，可以使用该级别指定的协议号。协议号可以通过 <span class="function">{@link getprotobyname()}</span>        获取。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">option</span></dt>     <dd>      <table class="doctable table">       <caption><strong>套接字可用选项</strong></caption>               <thead>         <tr>          <th>选项</th>          <th>描述</th>          <th>类型</th>         </tr>        </thead>        <tbody class="tbody">         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-debug">SO_DEBUG</a></span></strong></td>          <td>           是否记录调试信息。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-broadcast">SO_BROADCAST</a></span></strong></td>          <td>           是否支持传输广播消息。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-reuseaddr">SO_REUSEADDR</a></span></strong></td>          <td>           是否可以复用本地地址。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-reuseport">SO_REUSEPORT</a></span></strong></td>          <td>           是否可以复用本地端口。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-keepalive">SO_KEEPALIVE</a></span></strong></td>          <td>           是否通过定期传输消息来为连接保活。如果连接的套接字对消息未响应，连接将断开，并且正在写入套接字的进程会收到 SIGPIPE 信号。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-linger">SO_LINGER</a></span></strong></td>          <td>           <p class="para">            <span class="parameter" style="color:#3A95FF">socket</span> 执行 <span class="function">{@link socket_close()}</span>             时是否滞留残留数据。默认情况下，当关闭 socket 时，将尝试发送所有还未发送的数据。在面向连接的套接字中，<span class="function">{@link socket_close()}</span>             会等待对端确认接收数据。           </p>           <p class="para">            如果 <var class="varname">l_onoff</var> 不为零，且 <var class="varname">l_linger</var>             为零，对于面向连接的套接字，将丢弃所有未发送的数据，并发送给对端一个 RST（reset）报文。           </p>           <p class="para">            另外，如果 <var class="varname">l_onoff</var> 不为零，且 <var class="varname">l_linger</var>             不为零，<span class="function">{@link socket_close()}</span> 将阻塞，直到数据被发送完或者超过 <var class="varname">l_linger</var>             指定的时间。如果 socket 设置为非阻塞，<span class="function">{@link socket_close()}</span> 将执行失败并返回错误。           </p>          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>。数组包含两个键：           <var class="varname">l_onoff</var> 和 <var class="varname">l_linger</var>。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-oobinline">SO_OOBINLINE</a></span></strong></td>          <td>           <span class="parameter" style="color:#3A95FF">socket</span> 是否保留带外数据在正常的数据输入队列中。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-sndbuf">SO_SNDBUF</a></span></strong></td>          <td>           发送缓冲区大小。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>                   </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-rcvbuf">SO_RCVBUF</a></span></strong></td>          <td>           接收缓冲区大小。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>                  </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-error">SO_ERROR</a></span></strong></td>          <td>           获取错误状态信息并复位。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> (不能被 <span class="function">{@link socket_set_option()}</span> 设置)          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-type">SO_TYPE</a></span></strong></td>          <td>           <span class="parameter" style="color:#3A95FF">socket</span> 类型（例如 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sock-stream">SOCK_STREAM</a></span></strong>）。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> (不能被 <span class="function">{@link socket_set_option()}</span> 设置）          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-dontroute">SO_DONTROUTE</a></span></strong></td>          <td>           发出的消息是否绕过标准路由机制。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-rcvlowat">SO_RCVLOWAT</a></span></strong></td>          <td>           <span class="parameter" style="color:#3A95FF">socket</span> 写入操作要处理的最小字节数。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-rcvtimeo">SO_RCVTIMEO</a></span></strong></td>          <td>           接收超时时间。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>。数组包含两个键：<var class="varname">sec</var>            是超时时间的秒部分，<var class="varname">usec</var> 是微秒部分。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-sndtimeo">SO_SNDTIMEO</a></span></strong></td>          <td>           指定输出功能阻塞的超时时长，因为流量控制会阻止数据发送。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>。数组包含两个键：<var class="varname">sec</var>            是超时时间的秒部分，<var class="varname">usec</var> 是微秒部分。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-sndlowat">SO_SNDLOWAT</a></span></strong></td>          <td>           <span class="parameter" style="color:#3A95FF">socket</span> 输出操作要处理的最小字节数。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.tcp-nodelay">TCP_NODELAY</a></span></strong></td>          <td>           是否禁用 TCP Nagle 算法。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.mcast-join-group">MCAST_JOIN_GROUP</a></span></strong></td>          <td>           加入多播组。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 包含 <span class="literal">"group"</span> 键，指定 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>            类型的 IPv4 或 IPv6 多播地址；另一个键 <span class="literal">"interface"</span>            指定（<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 类型）接口编号或是 <span class="literal">string</span>            类型的接口名称，比如 <span class="literal">"eth0"</span>。可以指定 <span class="literal">0</span>            来使用路由规则选择接口。（仅在 <span class="function">{@link socket_set_option()}</span> 中使用）          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.mcast-leave-group">MCAST_LEAVE_GROUP</a></span></strong></td>          <td>           离开多播组。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>。详情见 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.mcast-join-group">MCAST_JOIN_GROUP</a></span></strong>。（仅在 <span class="function">{@link socket_set_option()}</span> 中使用）          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.mcast-block-source">MCAST_BLOCK_SOURCE</a></span></strong></td>          <td>           在已加入的多播组上阻塞接收来自指定源的数据包。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 与 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.mcast-join-group">MCAST_JOIN_GROUP</a></span></strong>            有相同的键，额外增加 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>            类型的 <span class="literal">source</span> 键，指定要阻塞的 IPv4 或 IPv6 源地址。（仅在 <span class="function">{@link socket_set_option()}</span> 中使用）          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.mcast-unblock-source">MCAST_UNBLOCK_SOURCE</a></span></strong></td>          <td>           在已加入的多播组取消阻塞（继续接收）接收来自指定源的数据包。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 与 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.mcast-block-source">MCAST_BLOCK_SOURCE</a></span></strong> 格式相同。（仅在 <span class="function">{@link socket_set_option()}</span> 中使用）          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.mcast-join-source-group">MCAST_JOIN_SOURCE_GROUP</a></span></strong></td>          <td>           接收源地址与指定多播组匹配的数据包。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 与 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.mcast-block-source">MCAST_BLOCK_SOURCE</a></span></strong> 格式相同。（仅在 <span class="function">{@link socket_set_option()}</span> 中使用）          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.mcast-leave-source-group">MCAST_LEAVE_SOURCE_GROUP</a></span></strong></td>          <td>           停止接收源地址与指定多播组匹配的数据包。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 与 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.mcast-block-source">MCAST_BLOCK_SOURCE</a></span></strong> 格式相同。（仅在 <span class="function">{@link socket_set_option()}</span> 中使用）          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ip-multicast-if">IP_MULTICAST_IF</a></span></strong></td>          <td>           IPv4 多播数据包的输出接口。          </td>          <td>           使用 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 类型指定接口编号或使用 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>            类型指定接口名，例如 <span class="literal">eth0</span>。<span class="type" style="color:#EAB766">0</span>            表示选择接口时使用路由表。<span class="function">{@link socket_set_option()}</span>            函数返回接口索引。注意，不像 C API，此选项无需提供 IP 地址。这样就消除了 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ip-multicast-if">IP_MULTICAST_IF</a></span></strong>            和 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ipv6-multicast-if">IPV6_MULTICAST_IF</a></span></strong> 之间的接口差异。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ipv6-multicast-if">IPV6_MULTICAST_IF</a></span></strong></td>          <td>           IPv6 多播数据包的输出接口。          </td>          <td>           与 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ip-multicast-if">IP_MULTICAST_IF</a></span></strong> 相同。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ip-multicast-loop">IP_MULTICAST_LOOP</a></span></strong></td>          <td>           在已加入的多播组开启或禁用 IPv4 报文的组播环回策略。类 Unix 中作用于发送路径，Windows 中作用于接收路径。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>（<span class="literal">0</span> 或 <span class="literal">1</span>）。<span class="function"><strong>socket_get_option()</strong></span>           可以接受任何值，并按照常规 PHP 规则转换为布尔值。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ipv6-multicast-loop">IPV6_MULTICAST_LOOP</a></span></strong></td>          <td>           与 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ip-multicast-loop">IP_MULTICAST_LOOP</a></span></strong> 类似，但用于 IPv6。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>。详情见 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ip-multicast-loop">IP_MULTICAST_LOOP</a></span></strong>。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ip-multicast-ttl">IP_MULTICAST_TTL</a></span></strong></td>          <td>           传出 IPv4 多播数据包的生存时间。这个值需要在 0（数据不传出）到 255 之间。默认值是 1（仅到达本地网络）。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 0 到 255 之间。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ipv6-multicast-hops">IPV6_MULTICAST_HOPS</a></span></strong></td>          <td>           与 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.ip-multicast-ttl">IP_MULTICAST_TTL</a></span></strong> 类似，但用于 IPv6 数据包。-1 也可以被接受，表示使用默认路由。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> -1 到 255 之间。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-mark">SO_MARK</a></span></strong></td>          <td>           在套接字上设置标识符，用于过滤 Linux 中的数据包。           </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-acceptfilter">SO_ACCEPTFILTER</a></span></strong></td>          <td>           在（FreeBSD 或 NetBSD）监听套接字上添加接受过滤器。FreeBSD 中，需要预先加载接受过滤器内核模块（例如 accf_http）。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> 过滤器名称（最大长度 15）。          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-user-cookie">SO_USER_COOKIE</a></span></strong></td>          <td>           在套接字上设置标识符，用于过滤 FreeBSD 中的数据包。           </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-rtable">SO_RTABLE</a></span></strong></td>          <td>           在套接字上设置标识符，用于过滤 OpenBSD 中的数据包。           </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-donttrunc">SO_DONTTRUNC</a></span></strong></td>          <td>           保留未读数据。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-wantmore">SO_WANTMORE</a></span></strong></td>          <td>           当准备好更多数据时给出提示。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.tcp-defer-accept">TCP_DEFER_ACCEPT</a></span></strong></td>          <td>           在数据准备好之前不通知监听套接字。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-incoming-cpu">SO_INCOMING_CPU</a></span></strong></td>          <td>           获取或设置套接字的 CPU 亲和性。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-meminfo">SO_MEMINFO</a></span></strong></td>          <td>           获取套接字的内存信息。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-bpf-extensions">SO_BPF_EXTENSIONS</a></span></strong></td>          <td>           为套接字附加内核支持的 BPF 扩展。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-setfib">SO_SETFIB</a></span></strong></td>          <td>           为套接字设置路由表（FIB）。（仅 FreeBSD）          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sol-filter">SOL_FILTER</a></span></strong></td>          <td>           过滤套接字的属性。（仅 Solaris/Illumos）          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.tcp-keepcnt">TCP_KEEPCNT</a></span></strong></td>          <td>           设置 TCP 在断开连接前的最大保活探测次数。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.tcp-keepidle">TCP_KEEPIDLE</a></span></strong></td>          <td>           设置连接需要保持空闲的时间。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.tcp-keepintvl">TCP_KEEPINTVL</a></span></strong></td>          <td>           设置各个保活探针的间隔时间。          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.tcp-keepalive">TCP_KEEPALIVE</a></span></strong></td>          <td>           设置连接需要保持空闲的时间。（仅 macOS）          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>         <tr>          <td><strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.tcp-notsent-lowat">TCP_NOTSENT_LOWAT</a></span></strong></td>          <td>           设置套接字流数据队列中未发送数据的数量限制。（仅 Linux）          </td>          <td>           <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>          </td>         </tr>        </tbody>             </table>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-get-option-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回给定选项的值， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-get-option-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.socket-get-option-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4773">    <p><strong>示例 #1 <span class="function"><strong>socket_get_option()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$socket </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_create_listen</span><span style="color: #007700">(</span><span style="color: #9876AA">1223</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$linger </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'l_linger' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #DD0000">'l_onoff' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">1</span><span style="color: #007700">);<br></span><span style="color: #9876AA">socket_set_option</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_SOCKET</span><span style="color: #007700">, </span><span style="color: #9876AA">SO_LINGER</span><span style="color: #007700">, </span><span style="color: #9876AA">$linger</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_get_option</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_SOCKET</span><span style="color: #007700">, </span><span style="color: #9876AA">SO_REUSEADDR</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.socket-get-option-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_create_listen()} - 在端口上打开一个套接字以接受连接</span></li>    <li><span class="function">{@link socket_set_option()} - 为套接字设置套接字选项</span></li>   </ul>   </div></div>
*
 * Gets socket options for the socket
 * @link https://php.net/manual/zh/function.socket-get-option.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>
 * or <b>socket_accept</b>.
 * </p>
 * @param int $level <p>
 * The <i>level</i> parameter specifies the protocol
 * level at which the option resides. For example, to retrieve options at
 * the socket level, a <i>level</i> parameter of
 * <b>SOL_SOCKET</b> would be used. Other levels, such as
 * <b>TCP</b>, can be used by
 * specifying the protocol number of that level. Protocol numbers can be
 * found by using the <b>getprotobyname</b> function.
 * </p>
 * @param int $option <table>
 * Available Socket Options
 * <tr valign="top">
 * <td>Option</td>
 * <td>Description</td>
 * <td>Type</td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_DEBUG</b></td>
 * <td>
 * Reports whether debugging information is being recorded.
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_BROADCAST</b></td>
 * <td>
 * Reports whether transmission of broadcast messages is supported.
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_REUSEADDR</b></td>
 * <td>
 * Reports whether local addresses can be reused.
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_KEEPALIVE</b></td>
 * <td>
 * Reports whether connections are kept active with periodic transmission
 * of messages. If the connected socket fails to respond to these messages,
 * the connection is broken and processes writing to that socket are notified
 * with a SIGPIPE signal.
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_LINGER</b></td>
 * <td>
 * <p>
 * Reports whether the <i>socket</i> lingers on
 * <b>socket_close</b> if data is present. By default,
 * when the socket is closed, it attempts to send all unsent data.
 * In the case of a connection-oriented socket,
 * <b>socket_close</b> will wait for its peer to
 * acknowledge the data.
 * </p>
 * <p>
 * If l_onoff is non-zero and
 * l_linger is zero, all the
 * unsent data will be discarded and RST (reset) is sent to the
 * peer in the case of a connection-oriented socket.
 * </p>
 * <p>
 * On the other hand, if l_onoff is
 * non-zero and l_linger is non-zero,
 * <b>socket_close</b> will block until all the data
 * is sent or the time specified in l_linger
 * elapses. If the socket is non-blocking,
 * <b>socket_close</b> will fail and return an error.
 * </p>
 * </td>
 * <td>
 * array. The array will contain two keys:
 * l_onoff and
 * l_linger.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_OOBINLINE</b></td>
 * <td>
 * Reports whether the <i>socket</i> leaves out-of-band data inline.
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_SNDBUF</b></td>
 * <td>
 * Reports the size of the send buffer.
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_RCVBUF</b></td>
 * <td>
 * Reports the size of the receive buffer.
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_ERROR</b></td>
 * <td>
 * Reports information about error status and clears it.
 * </td>
 * <td>
 * int (cannot be set by <b>socket_set_option</b>)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_TYPE</b></td>
 * <td>
 * Reports the <i>socket</i> type (e.g.
 * <b>SOCK_STREAM</b>).
 * </td>
 * <td>
 * int (cannot be set by <b>socket_set_option</b>)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_DONTROUTE</b></td>
 * <td>
 * Reports whether outgoing messages bypass the standard routing facilities.
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_RCVLOWAT</b></td>
 * <td>
 * Reports the minimum number of bytes to process for <i>socket</i>
 * input operations.
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_RCVTIMEO</b></td>
 * <td>
 * Reports the timeout value for input operations.
 * </td>
 * <td>
 * array. The array will contain two keys:
 * sec which is the seconds part on the timeout
 * value and usec which is the microsecond part
 * of the timeout value.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_SNDTIMEO</b></td>
 * <td>
 * Reports the timeout value specifying the amount of time that an output
 * function blocks because flow control prevents data from being sent.
 * </td>
 * <td>
 * array. The array will contain two keys:
 * sec which is the seconds part on the timeout
 * value and usec which is the microsecond part
 * of the timeout value.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>SO_SNDLOWAT</b></td>
 * <td>
 * Reports the minimum number of bytes to process for <i>socket</i> output operations.
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>TCP_NODELAY</b></td>
 * <td>
 * Reports whether the Nagle TCP algorithm is disabled.
 * </td>
 * <td>
 * int
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_JOIN_GROUP</b></td>
 * <td>
 * Joins a multicast group. (added in PHP 5.4)
 * </td>
 * <td>
 * array with keys "group", specifying
 * a string with an IPv4 or IPv6 multicast address and
 * "interface", specifying either an interface
 * number (type int) or a string with
 * the interface name, like "eth0".
 * 0 can be specified to indicate the interface
 * should be selected using routing rules. (can only be used in
 * <b>socket_set_option</b>)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_LEAVE_GROUP</b></td>
 * <td>
 * Leaves a multicast group. (added in PHP 5.4)
 * </td>
 * <td>
 * array. See <b>MCAST_JOIN_GROUP</b> for
 * more information. (can only be used in
 * <b>socket_set_option</b>)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_BLOCK_SOURCE</b></td>
 * <td>
 * Blocks packets arriving from a specific source to a specific
 * multicast group, which must have been previously joined.
 * (added in PHP 5.4)
 * </td>
 * <td>
 * array with the same keys as
 * <b>MCAST_JOIN_GROUP</b>, plus one extra key,
 * source, which maps to a string
 * specifying an IPv4 or IPv6 address of the source to be blocked.
 * (can only be used in <b>socket_set_option</b>)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_UNBLOCK_SOURCE</b></td>
 * <td>
 * Unblocks (start receiving again) packets arriving from a specific
 * source address to a specific multicast group, which must have been
 * previously joined. (added in PHP 5.4)
 * </td>
 * <td>
 * array with the same format as
 * <b>MCAST_BLOCK_SOURCE</b>.
 * (can only be used in <b>socket_set_option</b>)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_JOIN_SOURCE_GROUP</b></td>
 * <td>
 * Receive packets destined to a specific multicast group whose source
 * address matches a specific value. (added in PHP 5.4)
 * </td>
 * <td>
 * array with the same format as
 * <b>MCAST_BLOCK_SOURCE</b>.
 * (can only be used in <b>socket_set_option</b>)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>MCAST_LEAVE_SOURCE_GROUP</b></td>
 * <td>
 * Stop receiving packets destined to a specific multicast group whose
 * soure address matches a specific value. (added in PHP 5.4)
 * </td>
 * <td>
 * array with the same format as
 * <b>MCAST_BLOCK_SOURCE</b>.
 * (can only be used in <b>socket_set_option</b>)
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IP_MULTICAST_IF</b></td>
 * <td>
 * The outgoing interface for IPv4 multicast packets.
 * (added in PHP 5.4)
 * </td>
 * <td>
 * Either int specifying the interface number or a
 * string with an interface name, like
 * eth0. The value 0 can be used to
 * indicate the routing table is to used in the interface selection.
 * The function <b>socket_get_option</b> returns an
 * interface index.
 * Note that, unlike the C API, this option does NOT take an IP
 * address. This eliminates the interface difference between
 * <b>IP_MULTICAST_IF</b> and
 * <b>IPV6_MULTICAST_IF</b>.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IPV6_MULTICAST_IF</b></td>
 * <td>
 * The outgoing interface for IPv6 multicast packets.
 * (added in PHP 5.4)
 * </td>
 * <td>
 * The same as <b>IP_MULTICAST_IF</b>.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IP_MULTICAST_LOOP</b></td>
 * <td>
 * The multicast loopback policy for IPv4 packets, which
 * determines whether multicast packets sent by this socket also reach
 * receivers in the same host that have joined the same multicast group
 * on the outgoing interface used by this socket. This is the case by
 * default.
 * (added in PHP 5.4)
 * </td>
 * <td>
 * int (either 0 or
 * 1). For <b>socket_set_option</b>
 * any value will be accepted and will be converted to a boolean
 * following the usual PHP rules.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IPV6_MULTICAST_LOOP</b></td>
 * <td>
 * Analogous to <b>IP_MULTICAST_LOOP</b>, but for IPv6.
 * (added in PHP 5.4)
 * </td>
 * <td>
 * int. See <b>IP_MULTICAST_LOOP</b>.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IP_MULTICAST_TTL</b></td>
 * <td>
 * The time-to-live of outgoing IPv4 multicast packets. This should be
 * a value between 0 (don't leave the interface) and 255. The default
 * value is 1 (only the local network is reached).
 * (added in PHP 5.4)
 * </td>
 * <td>
 * int between 0 and 255.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td><b>IPV6_MULTICAST_HOPS</b></td>
 * <td>
 * Analogous to <b>IP_MULTICAST_TTL</b>, but for IPv6
 * packets. The value -1 is also accepted, meaning the route default
 * should be used.
 * (added in PHP 5.4)
 * </td>
 * <td>
 * int between -1 and 255.
 * </td>
 * </tr>
 * </table>
 * @return array|int|false the value of the given option, or <b>FALSE</b> on errors.
 
*/
function socket_get_option(Socket $socket, int $level, int $option): array|int|false {}

/**
* <div id="function.socket-set-option" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_set_option</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_set_option</span> — <span class="dc-title">为套接字设置套接字选项</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-set-option-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_set_option</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$level</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$option</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$value</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">    <span class="function"><strong>socket_set_option()</strong></span> 函数在 <span class="parameter" style="color:#3A95FF">socket</span>    的指定协议 <span class="parameter" style="color:#3A95FF">level</span> 上设置由 <span class="parameter" style="color:#3A95FF">option</span>    参数指定的选项，<span class="parameter" style="color:#3A95FF">value</span> 为指定值。   </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-set-option-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       由 <span class="function">{@link socket_create()}</span> 或 <span class="function">{@link socket_accept()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">level</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">level</span> 参数定义选项所在的协议级别。例如，在 socket 级别设置选项，将使用 <strong><span><a href="https://php.net/manual/zh/sockets.constants.php#constant.sol-socket">SOL_SOCKET</a></span></strong>        作为 <span class="parameter" style="color:#3A95FF">level</span> 参数。在其它级别，例如 TCP，可以使用该级别定义的协议号来指定级别。协议号可以通过 <span class="function">{@link getprotobyname()}</span>        找到。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">option</span></dt>     <dd>      <p class="para">       套接字可用选项与 <span class="function">{@link socket_get_option()}</span> 函数的选项相同。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">value</span></dt>     <dd>      <p class="para">       选项值。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-set-option-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-set-option-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.socket-set-option-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4784">    <p><strong>示例 #1 <span class="function"><strong>socket_set_option()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$socket </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_create</span><span style="color: #007700">(</span><span style="color: #9876AA">AF_INET</span><span style="color: #007700">, </span><span style="color: #9876AA">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_TCP</span><span style="color: #007700">);<br><br>if (!</span><span style="color: #9876AA">is_resource</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #DD0000">'Unable to create socket: '</span><span style="color: #007700">. </span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>}<br><br>if (!</span><span style="color: #9876AA">socket_set_option</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_SOCKET</span><span style="color: #007700">, </span><span style="color: #9876AA">SO_REUSEADDR</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #DD0000">'Unable to set option on socket: '</span><span style="color: #007700">. </span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>}<br><br>if (!</span><span style="color: #9876AA">socket_bind</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">, </span><span style="color: #DD0000">'127.0.0.1'</span><span style="color: #007700">, </span><span style="color: #9876AA">1223</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #DD0000">'Unable to bind socket: '</span><span style="color: #007700">. </span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #9876AA">$rval </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_get_option</span><span style="color: #007700">(</span><span style="color: #9876AA">$socket</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_SOCKET</span><span style="color: #007700">, </span><span style="color: #9876AA">SO_REUSEADDR</span><span style="color: #007700">);<br><br>if (</span><span style="color: #9876AA">$rval </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">'Unable to get socket option: '</span><span style="color: #007700">. </span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">()) . </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>} else if (</span><span style="color: #9876AA">$rval </span><span style="color: #007700">!== </span><span style="color: #9876AA">0</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">'SO_REUSEADDR is set on socket !' </span><span style="color: #007700">. </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.socket-set-option-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_create()} - 创建一个套接字（通讯节点）</span></li>    <li><span class="function">{@link socket_bind()} - 给套接字绑定名字</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>    <li><span class="function">{@link socket_last_error()} - 返回套接字上的最后一个错误</span></li>    <li><span class="function">{@link socket_get_option()} - 获取套接字的套接字选项</span></li>   </ul>   </div></div>
*
 * Sets socket options for the socket
 * @link https://php.net/manual/zh/function.socket-set-option.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>
 * or <b>socket_accept</b>.
 * </p>
 * @param int $level <p>
 * The <i>level</i> parameter specifies the protocol
 * level at which the option resides. For example, to retrieve options at
 * the socket level, a <i>level</i> parameter of
 * <b>SOL_SOCKET</b> would be used. Other levels, such as
 * TCP, can be used by specifying the protocol number of that level.
 * Protocol numbers can be found by using the
 * <b>getprotobyname</b> function.
 * </p>
 * @param int $option <p>
 * The available socket options are the same as those for the
 * <b>socket_get_option</b> function.
 * </p>
 * @param mixed $value <p>
 * The option value.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function socket_set_option(Socket $socket, int $level, int $option, $value): bool {}

/**
* <div id="function.socket-shutdown" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_shutdown</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_shutdown</span> — <span class="dc-title">关闭套接字接收或发送，或两者都关闭</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-shutdown-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_shutdown</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$mode</span><span class="initializer"> = 2</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>socket_shutdown()</strong></span> 函数允许通过 <span class="parameter" style="color:#3A95FF">socket</span> 停止接收、发送或所有数据（默认）。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    关联的一个或多个缓冲区可能会清空，也可能不会。   </p>  </blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.socket-shutdown-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       从 <span class="function">{@link socket_create()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">mode</span> 的值可以是以下之一：       </p><table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">mode</span> 可用值</strong></caption>                 <tbody class="tbody">          <tr>           <td><span class="literal">0</span></td>           <td>            关闭套接字读           </td>          </tr>          <tr>           <td><span class="literal">1</span></td>           <td>            关闭套接字写           </td>          </tr>          <tr>           <td><span class="literal">2</span></td>           <td>            关闭套接字读和写           </td>          </tr>         </tbody>               </table>           </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-shutdown-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-shutdown-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div></div>
*
 * Shuts down a socket for receiving, sending, or both
 * @link https://php.net/manual/zh/function.socket-shutdown.php
 * @param resource|Socket $socket <p>
 * A valid socket resource created with <b>socket_create</b>.
 * </p>
 * @param int $mode [optional] <p>
 * The value of <i>how</i> can be one of the following:
 * <table>
 * possible values for <i>how</i>
 * <tr valign="top">
 * <td>0</td>
 * <td>
 * Shutdown socket reading
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>
 * Shutdown socket writing
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>
 * Shutdown socket reading and writing
 * </td>
 * </tr>
 * </table>
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function socket_shutdown(Socket $socket, int $mode = 2): bool {}

/**
* <div id="function.socket-last-error" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_last_error</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_last_error</span> — <span class="dc-title">返回套接字上的最后一个错误</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-last-error-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_last_error</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span></span> <span class="parameter" style="color:#3A95FF">$socket</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   如果将 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例传递给此函数，将会返回指定套接字发生的最后一个错误。如果   <span class="parameter" style="color:#3A95FF">socket</span> 为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>, 则返回最后一个失败的套接字函数的错误码。此函数对以下情况特别有帮助：   <span class="function">{@link socket_create()}</span> 失败时不会返回套接字，以及   <span class="function">{@link socket_select()}</span> 失败的原因与特定套接字没有直接联系。   错误码适合提供给 <span class="function">{@link socket_strerror()}</span>，将返回指定错误码的字符串描述。  </p>  <p class="para">   如果没有错误或者已经使用 <span class="function">{@link socket_clear_error()}</span> 清除了错误，则函数返回 <span class="literal">0</span>。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-last-error-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       通过 <span class="function">{@link socket_create()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-last-error-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   此函数返回套接字错误码。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-last-error-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">socket</span> 现在可为空（nullable）。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.socket-last-error-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4775">    <p><strong>示例 #1 <span class="function"><strong>socket_last_error()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$socket </span><span style="color: #007700">= @</span><span style="color: #9876AA">socket_create</span><span style="color: #007700">(</span><span style="color: #9876AA">AF_INET</span><span style="color: #007700">, </span><span style="color: #9876AA">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_TCP</span><span style="color: #007700">);<br><br>if (</span><span style="color: #9876AA">$socket </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    </span><span style="color: #9876AA">$errorcode </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_last_error</span><span style="color: #007700">();<br>    </span><span style="color: #9876AA">$errormsg </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">$errorcode</span><span style="color: #007700">);<br>    <br>    die(</span><span style="color: #DD0000">"Couldn't create socket: [</span><span style="color: #9876AA">$errorcode</span><span style="color: #DD0000">] </span><span style="color: #9876AA">$errormsg</span><span style="color: #DD0000">"</span><span style="color: #007700">);<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.socket-last-error-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    <span class="function"><strong>socket_last_error()</strong></span> 不会清除错误代码，如果需要可以使用    <span class="function">{@link socket_clear_error()}</span> 清除。   </p>  </blockquote> </div></div>
*
 * Returns the last error on the socket
 * @link https://php.net/manual/zh/function.socket-last-error.php
 * @param resource|Socket $socket [optional] <p>
 * A valid socket resource created with <b>socket_create</b>.
 * </p>
 * @return int This function returns a socket error code.
 
*/
function socket_last_error(?Socket $socket = null): int {}

/**
* <div id="function.socket-clear-error" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_clear_error</h1>  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_clear_error</span> — <span class="dc-title">清除套接字或者最后的错误代码上的错误</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-clear-error-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_clear_error</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span></span> <span class="parameter" style="color:#3A95FF">$socket</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   这个函数清除给定的套接字上的错误代码或是最后一个全局的套接字如果套接字没有指定的话。  </p>  <p class="para">   这个函数允许明确的重置错误代码值 不论是一个套接字或者最后全局错误代码的扩展，   这对在检测应用的一部分是否有错误发生是十分有用的。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-clear-error-parameters">   <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       用 <span class="function">{@link socket_create()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-clear-error-returnvalues"> <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-clear-error-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>     <tr>      <td>8.0.0</td>      <td>       参数 <span class="parameter" style="color:#3A95FF">socket</span> 可以为 null。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-clear-error-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_last_error()} - 返回套接字上的最后一个错误</span></li>    <li><span class="function">{@link socket_strerror()} - 返回描述套接字错误的字符串</span></li>   </ul>   </div></div>
*
 * Clears the error on the socket or the last error code
 * @link https://php.net/manual/zh/function.socket-clear-error.php
 * @param resource|Socket|null $socket [optional] <p>
 * A valid socket resource created with <b>socket_create</b>.
 * </p>
 * @return void No value is returned.
 
*/
function socket_clear_error(?Socket $socket = null): void {}

/**
* <div id="function.socket-import-stream" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_import_stream</h1>  <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_import_stream</span> — <span class="dc-title">导入 stream</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-import-stream-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_import_stream</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$stream</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   导入封装了 socket 的 stream 到 socket 扩展资源中。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-import-stream-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stream</span></dt>     <dd>      <p class="para">       要导入的 stream 资源。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-import-stream-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   发生错误时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-import-stream-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       成功时，该函数现在返回 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例；在此之前，返回 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.socket-import-stream-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4774">    <p><strong>示例 #1 <span class="function"><strong>socket_import_stream()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$stream </span><span style="color: #007700">= </span><span style="color: #9876AA">stream_socket_server</span><span style="color: #007700">(</span><span style="color: #DD0000">"udp://0.0.0.0:58380"</span><span style="color: #007700">, </span><span style="color: #9876AA">$errno</span><span style="color: #007700">, </span><span style="color: #9876AA">$errstr</span><span style="color: #007700">, </span><span style="color: #9876AA">STREAM_SERVER_BIND</span><span style="color: #007700">); <br></span><span style="color: #9876AA">$sock   </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_import_stream</span><span style="color: #007700">(</span><span style="color: #9876AA">$stream</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.socket-import-stream-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link stream_socket_server()} - 创建 Internet 或 Unix 域服务器套接字</span></li>   </ul>   </div></div>
*
 * Import a stream
 * @link https://php.net/manual/zh/function.socket-import-stream.php
 * @param resource|Socket $stream <p>
 * The stream resource to import.
 * </p>
 * @return resource|Socket|false|null <b>FALSE</b> or <b>NULL</b> on failure.
 * @since 5.4
 
*/
function socket_import_stream($stream): Socket|false {}

/**
* <div id="function.socket-cmsg-space" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_cmsg_space</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_cmsg_space</span> — <span class="dc-title">Calculate message buffer size</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-cmsg-space-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_cmsg_space</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$level</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$num</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span></div>  <p class="para rdfs-comment">   Calculates the size of the buffer that should be allocated for   receiving the ancillary data.  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-function.socket-cmsg-space-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">level</span></dt>     <dd>      <p class="para">      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">type</span></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-cmsg-space-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">  </p> </div> <div class="refsect1 seealso" id="refsect1-function.socket-cmsg-space-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_recvmsg()} - Read a message</span></li>    <li><span class="function">{@link socket_sendmsg()} - Send a message</span></li>   </ul>   </div></div>
*
 * Calculate message buffer size
 * @link https://php.net/manual/zh/function.socket-cmsg-space.php
 * @param int $level
 * @param int $type
 * @param int $num [optional]
 * @return int|null
 * @since 5.5
 
*/
function socket_cmsg_space(
    int $level,
    int $type,
    #[PhpStormStubsElementAvailable(from: '8.0')] int $num = 0
): ?int {}

/**
* <div id="function.socket-getopt" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_getopt</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_getopt</span> — <span class="dc-title">别名 <span class="function">{@link socket_get_option()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-getopt-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link socket_get_option()}</span>.  </p> </div> </div>
*
 * Alias of {@see socket_get_option}
 * @param Socket $socket
 * @param int $level
 * @param int $option
 
*/
function socket_getopt(Socket $socket, int $level, int $option): array|int|false {}

/**
* <div id="function.socket-setopt" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_setopt</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_setopt</span> — <span class="dc-title">别名 <span class="function">{@link socket_set_option()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-setopt-description">  <h3 class="title">说明</h3>  <p class="simpara">   此函数是该函数的别名：   <span class="function">{@link socket_set_option()}</span>.  </p> </div> </div>
*
 * Alias of {@see socket_set_option}
 * @param Socket $socket
 * @param int $level
 * @param int $option
 * @param $value
 * @return bool
 
*/
function socket_setopt(Socket $socket, int $level, int $option, $value): bool {}

/**
* <div id="function.socket-wsaprotocol-info-export" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_wsaprotocol_info_export</h1>  <p class="verinfo">(PHP 7 &gt;= 7.3.0, PHP 8)</p><p class="refpurpose"><span class="refname">socket_wsaprotocol_info_export</span> — <span class="dc-title">导出 WSAPROTOCOL_INFO 结构体</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-wsaprotocol-info-export-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_wsaprotocol_info_export</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$process_id</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   导出 <span class="literal">WSAPROTOCOL_INFO</span> 结构体到共享内存中，并返回 <span class="function">{@link socket_wsaprotocol_info_import()}</span>    使用的标识符。导出的 ID 仅对给定参数 <span class="parameter" style="color:#3A95FF">process_id</span> 指定的进程有效。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    此方法仅在 Windows 上可用。   </span>  </p></blockquote> </div>  <div class="refsect1 parameters" id="refsect1-function.socket-wsaprotocol-info-export-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>    <dd>     <p class="para">      <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">process_id</span></dt>    <dd>     <p class="para">      将要导入套接字的进程 ID。     </p>    </dd>     </dl> </div>  <div class="refsect1 returnvalues" id="refsect1-function.socket-wsaprotocol-info-export-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回用于导入的标识符， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-wsaprotocol-info-export-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>  <td>8.0.0</td>  <td>   现在 <span class="parameter" style="color:#3A95FF">socket</span> 是 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例，   之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。  </td> </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.socket-wsaprotocol-info-export-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link socket_wsaprotocol_info_import()} - 从另一个进程导入套接字</span></li>   <li><span class="function">{@link socket_wsaprotocol_info_release()} - 释放已导出的 WSAPROTOCOL_INFO 结构体</span></li>  </ul> </div> </div>
*
 * Exports the WSAPROTOCOL_INFO Structure
 *
 * @link https://www.php.net/manual/en/function.socket-wsaprotocol-info-export.php
 *
 * @param resource|Socket $socket
 * @param int $target_pid
 * @return string|false
 *
 * @since 7.3
 
*/
function socket_wsaprotocol_info_export($socket, $target_pid) {}

/**
* <div id="function.socket-wsaprotocol-info-import" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_wsaprotocol_info_import</h1>  <p class="verinfo">(PHP 7 &gt;= 7.3.0, PHP 8)</p><p class="refpurpose"><span class="refname">socket_wsaprotocol_info_import</span> — <span class="dc-title">从另一个进程导入套接字</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-wsaprotocol-info-import-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_wsaprotocol_info_import</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$info_id</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   导入之前从另一个进程导出的套接字。   </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    此方法仅在 Windows 上可用。   </span>  </p></blockquote> </div>  <div class="refsect1 parameters" id="refsect1-function.socket-wsaprotocol-info-import-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">info_id</span></dt>    <dd>     <p class="para">      调用 <span class="function">{@link socket_wsaprotocol_info_export()}</span> 返回的 ID。     </p>    </dd>     </dl> </div>  <div class="refsect1 returnvalues" id="refsect1-function.socket-wsaprotocol-info-import-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>  </p> </div> <div class="refsect1 changelog" id="refsect1-function.socket-wsaprotocol-info-import-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>        成功时，该函数现在返回一个 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例；在此之前，返回的是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。      </td>     </tr>    </tbody>     </table> </div>  <div class="refsect1 seealso" id="refsect1-function.socket-wsaprotocol-info-import-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link socket_wsaprotocol_info_export()} - 导出 WSAPROTOCOL_INFO 结构体</span></li>  </ul> </div> </div>
*
 * Imports a Socket from another Process
 *
 * @link https://www.php.net/manual/en/function.socket-wsaprotocol-info-import.php
 *
 * @param string $info_id
 * @return resource|Socket|false
 *
 * @since 7.3
 
*/
function socket_wsaprotocol_info_import($info_id) {}

/**
* <div id="function.socket-wsaprotocol-info-release" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_wsaprotocol_info_release</h1>  <p class="verinfo">(PHP 7 &gt;= 7.3.0, PHP 8)</p><p class="refpurpose"><span class="refname">socket_wsaprotocol_info_release</span> — <span class="dc-title">释放已导出的 WSAPROTOCOL_INFO 结构体</span></p> </div>  <div class="refsect1 description" id="refsect1-function.socket-wsaprotocol-info-release-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_wsaprotocol_info_release</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$info_id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   释放 <span class="parameter" style="color:#3A95FF">info_id</span> 对应的共享内存。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    此方法仅在 Windows 上可用。    </span>  </p></blockquote> </div>  <div class="refsect1 parameters" id="refsect1-function.socket-wsaprotocol-info-release-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">info_id</span></dt>    <dd>     <p class="para">      调用 <span class="function">{@link socket_wsaprotocol_info_export()}</span> 返回的 ID。     </p>    </dd>     </dl> </div>  <div class="refsect1 returnvalues" id="refsect1-function.socket-wsaprotocol-info-release-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.socket-wsaprotocol-info-release-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link socket_wsaprotocol_info_export()} - 导出 WSAPROTOCOL_INFO 结构体</span></li>  </ul> </div> </div>
*
 * Releases an exported WSAPROTOCOL_INFO Structure
 *
 * @link https://www.php.net/manual/en/function.socket-wsaprotocol-info-release.php
 *
 * @param string $info_id
 * @return bool
 *
 * @since 7.3
 
*/
function socket_wsaprotocol_info_release($info_id) {}

/**
* <div id="function.socket-atmark" class="refentry"> <div class="refnamediv">  <h1 class="refname">socket_atmark</h1>  <p class="verinfo">(PHP 8 &gt;= 8.3.0, PHP 8)</p><p class="refpurpose"><span class="refname">socket_atmark</span> — <span class="dc-title">确认 socket 是否处于带外数据标记</span></p> </div> <div class="refsect1 description" id="refsect1-function.socket-atmark-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>socket_atmark</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.socket.php" class="type Socket" style="color:#EAB766">Socket</a></span> <span class="parameter" style="color:#3A95FF">$socket</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   确认 <span class="parameter" style="color:#3A95FF">socket</span> 是否处于带外数据标记。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.socket-atmark-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">socket</span></dt>     <dd>      <p class="para">       使用 <span class="function">{@link socket_create()}</span> 创建的 <span class="classname"><a href="https://php.net/manual/zh/class.socket.php" class="classname">Socket</a></span> 实例。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.socket-atmark-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.socket-atmark-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4769">    <p><strong>示例 #1 使用 <span class="function"><strong>socket_atmark()</strong></span> 设置源地址</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建新 socket<br></span><span style="color: #9876AA">$sock </span><span style="color: #007700">= </span><span style="color: #9876AA">socket_create</span><span style="color: #007700">(</span><span style="color: #9876AA">AF_INET</span><span style="color: #007700">, </span><span style="color: #9876AA">SOCK_STREAM</span><span style="color: #007700">, </span><span style="color: #9876AA">SOL_TCP</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">socket_atmark</span><span style="color: #007700">(</span><span style="color: #9876AA">$sock</span><span style="color: #007700">));<br></span><span style="color: #FF8000">// 关闭<br></span><span style="color: #9876AA">socket_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$sock</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.socket-atmark-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link socket_connect()} - 开启一个套接字连接</span></li>    <li><span class="function">{@link socket_create()} - 创建一个套接字（通讯节点）</span></li>   </ul>   </div></div>
*
 * @since 8.3
 
*/
function socket_atmark(Socket $socket): bool {}

/**
* <span class="simpara">     Unix 域文件系统路径名的套接字地址族。    </span>
*/
define('AF_UNIX', 1);
/**
* <span class="simpara">     Internet 域的 IPv4 套接字地址族。    </span>
*/
define('AF_INET', 2);

/**
* <span class="simpara">     Internet 域的 IPv6 套接字地址族。仅在编译时启用 IPv6 支持时可用。    </span>
*
 * Only available if compiled with IPv6 support.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('AF_INET6', 10);
/**
* <span class="simpara">    </span>
*/
define('SOCK_STREAM', 1);
/**
* <span class="simpara">    </span>
*/
define('SOCK_DGRAM', 2);
/**
* <span class="simpara">    </span>
*/
define('SOCK_RAW', 3);
/**
* <span class="simpara">    </span>
*/
define('SOCK_SEQPACKET', 5);
/**
* <span class="simpara">    </span>
*/
define('SOCK_RDM', 4);
/**
* <span class="simpara">    </span>
*/
define('MSG_OOB', 1);
/**
* <span class="simpara">    </span>
*/
define('MSG_WAITALL', 256);
/**
* <span class="simpara">    </span>
*/
define('MSG_CTRUNC', 8);
/**
* <span class="simpara">    </span>
*/
define('MSG_TRUNC', 32);
/**
* <span class="simpara">    </span>
*/
define('MSG_PEEK', 2);
/**
* <span class="simpara">    </span>
*/
define('MSG_DONTROUTE', 4);

/**
* <span class="simpara">     在 Windows 平台上无效    </span>
*
 * Not available on Windows platforms.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('MSG_EOR', 128);

/**
* <span class="simpara">     在 Windows 平台上无效    </span>
*
 * Not available on Windows platforms.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('MSG_EOF', 512);
/**
* <span class="simpara">    </span>
*/
define('MSG_CONFIRM', 2048);
/**
* <span class="simpara">    </span>
*/
define('MSG_ERRQUEUE', 8192);
/**
* <span class="simpara">    </span>
*/
define('MSG_NOSIGNAL', 16384);
/**
* <span class="simpara">    </span>
*/
define('MSG_DONTWAIT', 64);
/**
* <span class="simpara">    </span>
*/
define('MSG_MORE', 32768);
/**
* <span class="simpara">    </span>
*/
define('MSG_WAITFORONE', 65536);
/**
* <span class="simpara">    </span>
*/
define('MSG_CMSG_CLOEXEC', 1073741824);
/**
* <span class="simpara">    </span>
*/
define('SO_DEBUG', 1);
/**
* <span class="simpara">    </span>
*/
define('SO_REUSEADDR', 2);

/**
* <span class="simpara">     该常量只在支持 <strong><code><a href="https://php.net/manual/zh/sockets.constants.php#constant.so-reuseport">SO_REUSEPORT</a></code></strong>     socket 选项的平台上可用：这包括 Linux、macOS 和 *BSD，但不包括 Windows。    </span>
*
 * This constant is only available in PHP 5.4.10 or later on platforms that
 * support the <b>SO_REUSEPORT</b> socket option: this
 * includes Mac OS X and FreeBSD, but does not include Linux or Windows.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SO_REUSEPORT', 15);
/**
* <span class="simpara">    </span>
*/
define('SO_KEEPALIVE', 9);
/**
* <span class="simpara">    </span>
*/
define('SO_DONTROUTE', 5);
/**
* <span class="simpara">    </span>
*/
define('SO_LINGER', 13);
/**
* <span class="simpara">    </span>
*/
define('SO_BROADCAST', 6);
/**
* <span class="simpara">    </span>
*/
define('SO_OOBINLINE', 10);
/**
* <span class="simpara">    </span>
*/
define('SO_SNDBUF', 7);
/**
* <span class="simpara">    </span>
*/
define('SO_RCVBUF', 8);
/**
* <span class="simpara">    </span>
*/
define('SO_SNDLOWAT', 19);
/**
* <span class="simpara">    </span>
*/
define('SO_RCVLOWAT', 18);
/**
* <span class="simpara">    </span>
*/
define('SO_SNDTIMEO', 21);
/**
* <span class="simpara">    </span>
*/
define('SO_RCVTIMEO', 20);
/**
* <span class="simpara">    </span>
*/
define('SO_TYPE', 3);
/**
* <span class="simpara">    </span>
*/
define('SO_ERROR', 4);
/**
* <span class="simpara">    </span>
*/
define('SO_BINDTODEVICE', 25);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*/
define('SO_ATTACH_REUSEPORT_CBPF', 51);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*/
define('SO_DETACH_FILTER', 27);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*/
define('SO_DETACH_BPF', 27);

/**
* <span class="simpara">    </span>
*/
define('SOL_SOCKET', 1);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用    </span>
*/
define('SOL_UDPLITE', 136);
/**
* <span class="simpara">    </span>
*/
define('SOMAXCONN', 128);
/**
* <span class="simpara">     自 PHP 8.1.0 起可用    </span>
*
 * @since 8.1
 
*/
define('SO_MARK', 36);
/**
* <span class="simpara">     用于禁用 Nagle TCP 算法。    </span>
*
 * Used to disable Nagle TCP algorithm.
 * Added in PHP 5.2.7.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('TCP_NODELAY', 1);
/**
* <span class="simpara">    </span>
*/
define('PHP_NORMAL_READ', 1);
/**
* <span class="simpara">    </span>
*/
define('PHP_BINARY_READ', 2);
/**
* <span class="simpara">    </span>
*
 * Joins a multicast group.
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('MCAST_JOIN_GROUP', 42);
/**
* <span class="simpara">    </span>
*
 * Leaves a multicast group.
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('MCAST_LEAVE_GROUP', 45);
/**
* <span class="simpara">    </span>
*
 * Blocks packets arriving from a specific source to a specific multicast group,
 * which must have been previously joined.
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('MCAST_BLOCK_SOURCE', 43);
/**
* <span class="simpara">    </span>
*
 * Unblocks (start receiving again) packets arriving from
 * a specific source address to a specific multicast group,
 * which must have been previously joined.
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('MCAST_UNBLOCK_SOURCE', 44);
/**
* <span class="simpara">    </span>
*
 * Receive packets destined to a specific multicast group
 * whose source address matches a specific value.
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('MCAST_JOIN_SOURCE_GROUP', 46);
/**
* <span class="simpara">    </span>
*
 * Stop receiving packets destined to a specific multicast group
 * whose soure address matches a specific value.
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('MCAST_LEAVE_SOURCE_GROUP', 47);
/**
* <span class="simpara">    </span>
*
 * The outgoing interface for IPv4 multicast packets.
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('IP_MULTICAST_IF', 32);
/**
* <span class="simpara">    </span>
*
 * The outgoing interface for IPv6 multicast packets.
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('IP_MULTICAST_TTL', 33);
/**
* <span class="simpara">    </span>
*
 * The multicast loopback policy for IPv4 packets,
 * which determines whether multicast packets sent by this socket
 * also reach receivers in the same host that have joined the same multicast group
 * on the outgoing interface used by this socket. This is the case by default.
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('IP_MULTICAST_LOOP', 34);
/**
* <span class="simpara">    </span>
*
 * Analogous to IP_MULTICAST_LOOP, but for IPv6.
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('IPV6_MULTICAST_IF', 17);
/**
* <span class="simpara">    </span>
*
 * The time-to-live of outgoing IPv4 multicast packets.
 * This should be a value between 0 (don't leave the interface) and 255.
 * The default value is 1 (only the local network is reached).
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('IPV6_MULTICAST_HOPS', 18);
/**
* <span class="simpara">    </span>
*
 * Analogous to IP_MULTICAST_TTL, but for IPv6 packets.
 * The value -1 is also accepted, meaning the route default should be used.
 * @since 5.4
 * @link https://php.net/manual/zh/function.socket-get-option.php
 
*/
define('IPV6_MULTICAST_LOOP', 19);
/**
* <span class="simpara">    </span>
*/
define('IPV6_V6ONLY', 26);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*/
define('IP_BIND_ADDRESS_NO_PORT', 24);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*/
define('IP_MTU_DISCOVER', 10);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*/
define('IP_PMTUDISC_DO', 2);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*/
define('IP_PMTUDISC_DONT', 0);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*/
define('IP_PMTUDISC_WANT', 1);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*/
define('IP_PMTUDISC_PROBE', 3);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*/
define('IP_PMTUDISC_INTERFACE', 4);
/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*/
define('IP_PMTUDISC_OMIT', 5);

/**
* <span class="simpara">     操作不允许。    </span>
*
 * Operation not permitted.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EPERM', 1);

/**
* <span class="simpara">     文件或目录不存在。    </span>
*
 * No such file or directory.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOENT', 2);

/**
* <span class="simpara">     中断系统调用。    </span>
*
 * Interrupted system call.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EINTR', 4);

/**
* <span class="simpara">     I/O 错误。    </span>
*
 * I/O error.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EIO', 5);

/**
* <span class="simpara">     未找到设备或地址。    </span>
*
 * No such device or address.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENXIO', 6);

/**
* <span class="simpara">     参数列表太长。    </span>
*
 * Arg list too long.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_E2BIG', 7);

/**
* <span class="simpara">     错误的文件描述符编号。    </span>
*
 * Bad file number.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EBADF', 9);

/**
* <span class="simpara">     请重试。    </span>
*
 * Try again.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EAGAIN', 11);

/**
* <span class="simpara">     内存不足。    </span>
*
 * Out of memory.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOMEM', 12);

/**
* <span class="simpara">     拒绝访问。    </span>
*
 * Permission denied.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EACCES', 13);

/**
* <span class="simpara">     错误的地址。    </span>
*
 * Bad address.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EFAULT', 14);

/**
* <span class="simpara">     需要块设备。    </span>
*
 * Block device required.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOTBLK', 15);

/**
* <span class="simpara">     设备或资源忙。    </span>
*
 * Device or resource busy.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EBUSY', 16);

/**
* <span class="simpara">     文件存在。    </span>
*
 * File exists.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EEXIST', 17);

/**
* <span class="simpara">     跨设备链路。    </span>
*
 * Cross-device link.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EXDEV', 18);

/**
* <span class="simpara">     设备不存在。    </span>
*
 * No such device.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENODEV', 19);

/**
* <span class="simpara">     非目录。    </span>
*
 * Not a directory.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOTDIR', 20);

/**
* <span class="simpara">     是目录。    </span>
*
 * Is a directory.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EISDIR', 21);

/**
* <span class="simpara">     无效的参数。    </span>
*
 * Invalid argument.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EINVAL', 22);

/**
* <span class="simpara">     文件表溢出。    </span>
*
 * File table overflow.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENFILE', 23);

/**
* <span class="simpara">     打开的文件太多。    </span>
*
 * Too many open files.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EMFILE', 24);

/**
* <span class="simpara">     在 ioctl 系统调用中指定了无效的 ioctl （I/O 控制）编号。    </span>
*
 * Not a typewriter.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOTTY', 25);

/**
* <span class="simpara">     设备上没有剩余空间。    </span>
*
 * No space left on device.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOSPC', 28);

/**
* <span class="simpara">     非法查找。    </span>
*
 * Illegal seek.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ESPIPE', 29);

/**
* <span class="simpara">     文件系统只读。    </span>
*
 * Read-only file system.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EROFS', 30);

/**
* <span class="simpara">     链路太多。    </span>
*
 * Too many links.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EMLINK', 31);

/**
* <span class="simpara">     管道断开（非正常关闭套接字）。    </span>
*
 * Broken pipe.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EPIPE', 32);

/**
* <span class="simpara">     文件名过长。    </span>
*
 * File name too long.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENAMETOOLONG', 36);

/**
* <span class="simpara">     无可用的记录锁。    </span>
*
 * No record locks available.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOLCK', 37);

/**
* <span class="simpara">     函数未实现。    </span>
*
 * Function not implemented.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOSYS', 38);

/**
* <span class="simpara">     目录不为空。    </span>
*
 * Directory not empty.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOTEMPTY', 39);

/**
* <span class="simpara">     遇到了太多的符号链接。    </span>
*
 * Too many symbolic links encountered.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ELOOP', 40);

/**
* <span class="simpara">     操作将阻塞。    </span>
*
 * Operation would block.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EWOULDBLOCK', 11);

/**
* <span class="simpara">     没有指定的消息类型。    </span>
*
 * No message of desired type.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOMSG', 42);

/**
* <span class="simpara">     标识符已删除。    </span>
*
 * Identifier removed.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EIDRM', 43);

/**
* <span class="simpara">     通道数超出范围。    </span>
*
 * Channel number out of range.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ECHRNG', 44);

/**
* <span class="simpara">     2 级未同步。    </span>
*
 * Level 2 not synchronized.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EL2NSYNC', 45);

/**
* <span class="simpara">     3 级停止。    </span>
*
 * Level 3 halted.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EL3HLT', 46);

/**
* <span class="simpara">     3 级重置。    </span>
*
 * Level 3 reset.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EL3RST', 47);

/**
* <span class="simpara">     链接数超出范围。    </span>
*
 * Link number out of range.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ELNRNG', 48);

/**
* <span class="simpara">     协议驱动没有安装（attached）。    </span>
*
 * Protocol driver not attached.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EUNATCH', 49);

/**
* <span class="simpara">     没有可用的 CSI 结构。    </span>
*
 * No CSI structure available.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOCSI', 50);

/**
* <span class="simpara">     2 级停止。    </span>
*
 * Level 2 halted.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EL2HLT', 51);

/**
* <span class="simpara">     无效的交换。    </span>
*
 * Invalid exchange.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EBADE', 52);

/**
* <span class="simpara">     无效的请求描述符。    </span>
*
 * Invalid request descriptor.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EBADR', 53);

/**
* <span class="simpara">     交换满了。    </span>
*
 * Exchange full.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EXFULL', 54);

/**
* <span class="simpara">     无阳极（anode）。    </span>
*
 * No anode.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOANO', 55);

/**
* <span class="simpara">     无效的请求代码。    </span>
*
 * Invalid request code.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EBADRQC', 56);

/**
* <span class="simpara">     无效的插槽。    </span>
*
 * Invalid slot.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EBADSLT', 57);

/**
* <span class="simpara">     设备不是流。    </span>
*
 * Device not a stream.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOSTR', 60);

/**
* <span class="simpara">     无可用的数据。    </span>
*
 * No data available.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENODATA', 61);

/**
* <span class="simpara">     计时器过期。    </span>
*
 * Timer expired.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ETIME', 62);

/**
* <span class="simpara">     流资源不够用。    </span>
*
 * Out of streams resources.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOSR', 63);

/**
* <span class="simpara">     机器不在网络上。    </span>
*
 * Machine is not on the network.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENONET', 64);

/**
* <span class="simpara">     对象是远程。    </span>
*
 * Object is remote.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EREMOTE', 66);

/**
* <span class="simpara">     链接已被切断。    </span>
*
 * Link has been severed.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOLINK', 67);

/**
* <span class="simpara">     通知错误。    </span>
*
 * Advertise error.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EADV', 68);

/**
* <span class="simpara">     Srmount 错误。    </span>
*
 * Srmount error.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ESRMNT', 69);

/**
* <span class="simpara">     发送时通信错误。    </span>
*
 * Communication error on send.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ECOMM', 70);

/**
* <span class="simpara">     协议错误。    </span>
*
 * Protocol error.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EPROTO', 71);

/**
* <span class="simpara">     多跳尝试。    </span>
*
 * Multihop attempted.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EMULTIHOP', 72);

/**
* <span class="simpara">     不是数据消息。    </span>
*
 * Not a data message.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EBADMSG', 74);

/**
* <span class="simpara">     名称在网络上不唯一。    </span>
*
 * Name not unique on network.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOTUNIQ', 76);

/**
* <span class="simpara">     文件描述符处于错误状态。    </span>
*
 * File descriptor in bad state.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EBADFD', 77);

/**
* <span class="simpara">     远程地址改变。    </span>
*
 * Remote address changed.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EREMCHG', 78);

/**
* <span class="simpara">     中断的系统调用应该被重新启动。    </span>
*
 * Interrupted system call should be restarted.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ERESTART', 85);

/**
* <span class="simpara">     流管道错误。    </span>
*
 * Streams pipe error.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ESTRPIPE', 86);

/**
* <span class="simpara">     太多用户。    </span>
*
 * Too many users.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EUSERS', 87);

/**
* <span class="simpara">     对非套接字进行套接字操作。    </span>
*
 * Socket operation on non-socket.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOTSOCK', 88);

/**
* <span class="simpara">     需要目标地址。    </span>
*
 * Destination address required.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EDESTADDRREQ', 89);

/**
* <span class="simpara">     消息太长。    </span>
*
 * Message too long.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EMSGSIZE', 90);

/**
* <span class="simpara">     socket 协议类型错误。    </span>
*
 * Protocol wrong type for socket.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EPROTOTYPE', 91);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_ENOPROTOOPT', 92);

/**
* <span class="simpara">     不支持的协议。    </span>
*
 * Protocol not supported.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EPROTONOSUPPORT', 93);

/**
* <span class="simpara">     不支持的 socket 类型。    </span>
*
 * Socket type not supported.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ESOCKTNOSUPPORT', 94);

/**
* <span class="simpara">     传输端点不支持的操作。    </span>
*
 * Operation not supported on transport endpoint.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EOPNOTSUPP', 95);

/**
* <span class="simpara">     不支持的协议族。    </span>
*
 * Protocol family not supported.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EPFNOSUPPORT', 96);

/**
* <span class="simpara">     协议不支持的地址族。    </span>
*
 * Address family not supported by protocol.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EAFNOSUPPORT', 97);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_EADDRINUSE', 98);

/**
* <span class="simpara">     不能分配请求的地址。    </span>
*
 * Cannot assign requested address.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EADDRNOTAVAIL', 99);

/**
* <span class="simpara">     网络中断。    </span>
*
 * Network is down.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENETDOWN', 100);

/**
* <span class="simpara">     网络不可达。    </span>
*
 * Network is unreachable.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENETUNREACH', 101);

/**
* <span class="simpara">     复位，网络掉线。    </span>
*
 * Network dropped connection because of reset.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENETRESET', 102);

/**
* <span class="simpara">     软件导致连接中止。    </span>
*
 * Software caused connection abort.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ECONNABORTED', 103);

/**
* <span class="simpara">     对方重置连接。    </span>
*
 * Connection reset by peer.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ECONNRESET', 104);

/**
* <span class="simpara">     无可用的缓存区空间。    </span>
*
 * No buffer space available.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOBUFS', 105);

/**
* <span class="simpara">     传输端点已经连接。    </span>
*
 * Transport endpoint is already connected.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EISCONN', 106);

/**
* <span class="simpara">     传输端点未连接。    </span>
*
 * Transport endpoint is not connected.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOTCONN', 107);

/**
* <span class="simpara">     传输端点关闭，无法发送。    </span>
*
 * Cannot send after transport endpoint shutdown.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ESHUTDOWN', 108);

/**
* <span class="simpara">     过多的引用：无法接合。    </span>
*
 * Too many references: cannot splice.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ETOOMANYREFS', 109);

/**
* <span class="simpara">     连接超时。    </span>
*
 * Connection timed out.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ETIMEDOUT', 110);

/**
* <span class="simpara">     连接被拒绝。    </span>
*
 * Connection refused.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ECONNREFUSED', 111);

/**
* <span class="simpara">     主机已关闭。    </span>
*
 * Host is down.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EHOSTDOWN', 112);

/**
* <span class="simpara">     没有路由到主机。    </span>
*
 * No route to host.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EHOSTUNREACH', 113);

/**
* <span class="simpara">     操作已在进行中。    </span>
*
 * Operation already in progress.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EALREADY', 114);

/**
* <span class="simpara">     操作正在进行中。    </span>
*
 * Operation now in progress.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EINPROGRESS', 115);

/**
* <span class="simpara">     是已命名类型的文件。    </span>
*
 * Is a named type file.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EISNAM', 120);

/**
* <span class="simpara">     远程 I/O 错误。    </span>
*
 * Remote I/O error.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EREMOTEIO', 121);

/**
* <span class="simpara">     超过配额。    </span>
*
 * Quota exceeded.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EDQUOT', 122);

/**
* <span class="simpara">     未找到媒介。    </span>
*
 * No medium found.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_ENOMEDIUM', 123);

/**
* <span class="simpara">     错误的媒介类型。    </span>
*
 * Wrong medium type.
 * @link https://php.net/manual/zh/sockets.constants.php
 
*/
define('SOCKET_EMEDIUMTYPE', 124);
/**
* <span class="simpara">    </span>
*/
define('IPPROTO_IP', 0);
/**
* <span class="simpara">    </span>
*/
define('IPPROTO_IPV6', 41);
/**
* <span class="simpara">    </span>
*/
define('SOL_TCP', 6);
/**
* <span class="simpara">    </span>
*/
define('SOL_UDP', 17);
/**
* <span class="simpara">    </span>
*/
define('IPV6_UNICAST_HOPS', 16);
/**
* <span class="simpara">    </span>
*/
define('IPV6_RECVPKTINFO', 49);
/**
* <span class="simpara">    </span>
*/
define('IPV6_PKTINFO', 50);
/**
* <span class="simpara">    </span>
*/
define('IPV6_RECVHOPLIMIT', 51);
/**
* <span class="simpara">    </span>
*/
define('IPV6_HOPLIMIT', 52);
/**
* <span class="simpara">    </span>
*/
define('IPV6_RECVTCLASS', 66);
/**
* <span class="simpara">    </span>
*/
define('IPV6_TCLASS', 67);
/**
* <span class="simpara">     发送或接收一组来自另一个进程打开的文件描述符。    </span>
*/
define('SCM_RIGHTS', 1);
/**
* <span class="simpara">    </span>
*/
define('SCM_CREDENTIALS', 2);
/**
* <span class="simpara">    </span>
*/
define('SO_PASSCRED', 16);

/**
* <span class="simpara">    </span>
*/
define('SOCKET_EPROCLIM', 10067);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_ESTALE', 10070);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_EDISCON', 10101);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_SYSNOTREADY', 10091);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_VERNOTSUPPORTED', 10092);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_NOTINITIALISED', 10093);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_HOST_NOT_FOUND', 11001);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_TRY_AGAIN', 11002);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_NO_RECOVERY', 11003);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_NO_DATA', 11004);
/**
* <span class="simpara">    </span>
*/
define('SOCKET_NO_ADDRESS', 11004);

/**
* <span class="simpara">    </span>
*/
define('AI_PASSIVE', 1);
/**
* <span class="simpara">    </span>
*/
define('AI_CANONNAME', 2);
/**
* <span class="simpara">    </span>
*/
define('AI_NUMERICHOST', 4);
/**
* <span class="simpara">    </span>
*/
define('AI_ADDRCONFIG', 32);
/**
* <span class="simpara">    </span>
*/
define('AI_NUMERICSERV', 1024);
/**
* <span class="simpara">    </span>
*/
define('AI_V4MAPPED', 8);
/**
* <span class="simpara">    </span>
*/
define('AI_ALL', 16);

/**
* <span class="simpara">     自 PHP 8.1.0 起可用    </span>
*
 * @since 8.1
 
*/
define('TCP_DEFER_ACCEPT', 9);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SO_INCOMING_CPU', 49);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SO_MEMINFO', 55);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SO_BPF_EXTENSIONS', 48);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_OFF', -4096);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_PROTOCOL', 0);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_PKTTYPE', 4);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_IFINDEX', 8);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_NLATTR', 12);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_NLATTR_NEST', 16);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_MARK', 20);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_QUEUE', 24);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_HATYPE', 28);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_RXHASH', 32);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_CPU', 36);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_ALU_XOR_X', 40);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_VLAN_TAG', 44);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_VLAN_TAG_PRESENT', 48);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_PAY_OFFSET', 52);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_RANDOM', 56);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_VLAN_TPID', 60);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('SKF_AD_MAX', 64);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('TCP_CONGESTION', 13);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('TCP_NOTSENT_LOWAT', 25);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('TCP_KEEPIDLE', 4);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('TCP_KEEPINTVL', 5);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * @since 8.2
 
*/
define('TCP_KEEPCNT', 6);

/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*
 * @since 8.3
 
*/
define('TCP_QUICKACK', 12);

/**
* <span class="simpara">     自 PHP 8.3.0 起可用（仅 Linux）    </span>
*
 * @since 8.3
 
*/
define('TCP_REPAIR', 19);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * Socket_set_option for the socket_send* functions.
 * It avoids copy b/w userland and kernel for both TCP and UDP protocols.
 * @since 8.2
 
*/
define('SO_ZEROCOPY', 60);

/**
* <span class="simpara">     自 PHP 8.2.0 起可用    </span>
*
 * Socket_set_option for the socket_send* functions.
 * It avoids copy b/w userland and kernel for both TCP and UDP protocols.
 * @since 8.2
 
*/
define('MSG_ZEROCOPY', 67108864);
/**
* <span class="simpara">     设置套接字为数据报拥塞控制协议。自 PHP 8.4.0 起可用。（仅 NetBSD）    </span>
*
 * @since 8.4
 
*/
define('SOCK_DCCP', 6);
/**
* <span class="simpara">     设置 TCP 在中止连接尝试之前应发送的 SYN 重新传输次数。自 PHP 8.4.0 起可用（仅 Linux）    </span>
*
 * @since 8.4
 
*/
define('TCP_SYNCNT', 7);

/**
* <span class="simpara">     设置套接字的执行时关闭（close-on-exec）状态 flag。自 PHP 8.4.0 起可用。    </span>
*
 * @since 8.4
 
*/
define('SOCK_CLOEXEC', 524288);

/**
* <span class="simpara">     设置套接字的非阻塞状态 flag。自 PHP 8.4.0 起可用。    </span>
*
 * @since 8.4
 
*/
define('SOCK_NONBLOCK', 2048);

/**
* <span class="simpara">     通过索引将套接字绑定到特定网络接口。自 PHP 8.4.0 起可用。    </span>
*
 * @since 8.4
 
*/
define('SO_BINDTOIFINDEX', 62);
/**
* <div id="class.socket" class="reference"> <h1 class="title">Socket 类</h1>  <div class="partintro"><p class="verinfo">(PHP 8)</p>    <div class="section" id="socket.intro">   <h2 class="title">简介</h2>   <p class="para">    从 PHP 8.0.0 开始替换 <span class="literal">Socket</span> 资源的完全不透明类。   </p>  </div>    <div class="section" id="socket.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">final</span>     <span class="modifier">class</span> <strong class="classname"><strong class="classname">Socket</strong></strong>     {</div>   }</div>  </div> </div> </div>
*
 * @since 8.0
 
*/
final class Socket
{
    /**
     * Cannot directly construct Socket, use socket_create() instead
     * @see socket_create()
     */
    private function __construct() {}
}

/**
* <div id="class.addressinfo" class="reference"> <h1 class="title">AddressInfo 类</h1>  <div class="partintro"><p class="verinfo">(PHP 8)</p>    <div class="section" id="addressinfo.intro">   <h2 class="title">简介</h2>   <p class="para">    从 PHP 8.0.0 开始替换 <span class="literal">AddressInfo</span> 资源的完全不透明类。   </p>  </div>    <div class="section" id="addressinfo.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">final</span>     <span class="modifier">class</span> <strong class="classname"><strong class="classname">AddressInfo</strong></strong>     {</div>   }</div>  </div> </div> </div>
*
 * @since 8.0
 
*/
final class AddressInfo
{
    /**
     * Cannot directly construct AddressInfo, use socket_addrinfo_lookup() instead
     * @see socket_addrinfo_lookup()
     */
    private function __construct() {}
}
