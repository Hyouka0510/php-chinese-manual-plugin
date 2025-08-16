<?php

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Internal\TentativeType;
use JetBrains\PhpStorm\Pure;


class CURLFile
{
    #[LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $name;

    #[LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $mime;

    #[LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $postname;

    /**
     * Create a CURLFile object
     * @link https://secure.php.net/manual/en/curlfile.construct.php
     * @param string $filename <p>Path to the file which will be uploaded.</p>
     * @param string $mime_type [optional] <p>Mimetype of the file.</p>
     * @param string $posted_filename [optional] <p>Name of the file.</p>
     * @since 5.5
     */
    public function __construct(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $filename,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $mime_type = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $posted_filename = null
    ) {}

    /**
     * Get file name
     * @link https://secure.php.net/manual/en/curlfile.getfilename.php
     * @return string Returns file name.
     * @since 5.5
     */
    #[Pure]
    #[TentativeType]
    public function getFilename(): string {}

    /**
     * Get MIME type
     * @link https://secure.php.net/manual/en/curlfile.getmimetype.php
     * @return string Returns MIME type.
     * @since 5.5
     */
    #[Pure]
    #[TentativeType]
    public function getMimeType(): string {}

    /**
     * Get file name for POST
     * @link https://secure.php.net/manual/en/curlfile.getpostfilename.php
     * @return string Returns file name for POST.
     * @since 5.5
     */
    #[Pure]
    #[TentativeType]
    public function getPostFilename(): string {}

    /**
     * Set MIME type
     * @link https://secure.php.net/manual/en/curlfile.setmimetype.php
     * @param string $mime_type
     * @since 5.5
     */
    #[TentativeType]
    public function setMimeType(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $mime_type): void {}

    /**
     * Set file name for POST
     * https://secure.php.net/manual/en/curlfile.setpostfilename.php
     * @param string $posted_filename
     * @since 5.5
     */
    #[TentativeType]
    public function setPostFilename(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $posted_filename): void {}

    /**
     * @link https://secure.php.net/manual/en/curlfile.wakeup.php
     * Unserialization handler
     * @since 5.5
     */
    public function __wakeup() {}
}

/**
 * <div id="function.curl-init" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_init</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_init</span> — <span class="dc-title">初始化 cURL 会话</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-init-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_init</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$url</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   初始化新会话，返回 cURL 句柄。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-init-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">url</span></dt>     <dd>      <p class="para">       如果提供了该参数，<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-url">CURLOPT_URL</a></span></strong> 选项将会被设置成这个值。也可以使用 <span class="function">{@link curl_setopt()}</span> 函数手动设置这个值。      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        </p><p class="para">        如果设置了 <a href="https://php.net/manual/zh/ini.core.php#ini.open-basedir" class="link">open_basedir</a>，<span class="literal">file</span> 协议会被 cURL 禁用。       </p>      </blockquote>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-init-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 cURL 句柄，错误时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-init-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       此函数成功时现在返回 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span> 实例；之前返回 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。      </td>     </tr>     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">url</span> 现在可为 null。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-init-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4468">    <p><strong>示例 #1      初始化新 cURL 会话并获取网页    </strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// 初始化新 cURL 会话<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// 设置 URL 和相应的选项<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_URL</span><span style="color: #007700">, </span><span style="color: #DD0000">"http://www.example.com/"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_HEADER</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 抓取 URL 并把它传递给浏览器<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.curl-init-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_multi_init()} - 返回新 cURL 批处理句柄</span></li>   </ul>   </div></div>
 * 
 * Initialize a cURL session
 * @link https://php.net/manual/zh/function.curl-init.php
 * @param string|null $url [optional] <p>
 * If provided, the CURLOPT_URL option will be set
 * to its value. You can manually set this using the
 * curl_setopt function.
 * </p>
 * @return resource|false|CurlHandle a cURL handle on success, false on errors.
 */
#[LanguageLevelTypeAware(['8.0' => 'CurlHandle|false'], default: 'resource|false')]
function curl_init(?string $url) {}

/**
 * <div id="function.curl-copy-handle" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_copy_handle</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_copy_handle</span> — <span class="dc-title">复制 cURL 句柄及其所有选项</span></p> </div>  <div class="refsect1 description" id="refsect1-function.curl-copy-handle-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_copy_handle</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   复制 cURL 句柄并保持相同选项。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-copy-handle-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>   </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-copy-handle-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回新 cURL 句柄， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-copy-handle-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>     <tr>      <td>8.0.0</td>      <td>       现在成功时，此函数返回 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span> 实例，之前返回 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-copy-handle-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4461">    <p><strong>示例 #1 复制 cURL 句柄</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建新 cURL 资源<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// 设置 URL 和其它相应的选项<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_URL</span><span style="color: #007700">, </span><span style="color: #DD0000">'http://www.example.com/'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_HEADER</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 复制句柄<br></span><span style="color: #9876AA">\$ch2 </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_copy_handle</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 抓取 URL（http://www.example.com/）并把它传递给浏览器<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch2</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 关闭 cURL 资源，并且释放系统资源<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch2</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div></div>
 * 
 * Copy a cURL handle along with all of its preferences
 * @link https://php.net/manual/zh/function.curl-copy-handle.php
 * @param CurlHandle|resource $handle
 * @return CurlHandle|resource|false a new cURL handle.
 */
#[Pure]
#[LanguageLevelTypeAware(['8.0' => 'CurlHandle|false'], default: 'resource|false')]
function curl_copy_handle(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle) {}

/**
 * <div id="function.curl-version" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_version</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_version</span> — <span class="dc-title">获取 cURL 版本信息</span></p> </div>  <div class="refsect1 description" id="refsect1-function.curl-version-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_version</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   返回关于 cURL 版本的信息。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-version-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-version-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回关联数组，包含如下元素：   </p><table class="doctable informaltable">         <thead>      <tr>       <th>键</th>       <th>值描述</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>version_number</td>       <td>cURL 24 位版本号</td>      </tr>      <tr>       <td>version</td>       <td>cURL 版本号，字符串形式</td>      </tr>      <tr>       <td>ssl_version_number</td>       <td>OpenSSL 24 位版本号</td>      </tr>      <tr>       <td>ssl_version</td>       <td>OpenSSL 版本号，字符串形式</td>      </tr>      <tr>       <td>libz_version</td>       <td>zlib 版本号，字符串形式</td>      </tr>      <tr>       <td>host</td>       <td>关于编译cURL主机的信息</td>      </tr>      <tr>       <td>age</td>       <td class="empty">&nbsp;</td>      </tr>      <tr>       <td>features</td>       <td>一个 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-version-altsvc">CURL_VERSION_<span class="replaceable">*</span></a></span></strong> 常量的位掩码</td>      </tr>      <tr>       <td>protocols</td>       <td>数组，包含 cURL 支持的协议名称</td>      </tr>      <tr>       <td>feature_list</td>       <td>        所有已知 cURL 功能的关联数组，以及它们是否支持（<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>）或不支持（<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>）       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 changelog" id="refsect1-function.curl-version-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.4.0</td>      <td>       新增 <span class="literal">features_list</span>。      </td>     </tr>     <tr>      <td>8.0.0</td>      <td>       移除可选的 <span class="parameter" style="color:#3A95FF">age</span> 参数。      </td>     </tr>     <tr>      <td>7.4.0</td>      <td>       弃用可选的 <span class="parameter" style="color:#3A95FF">age</span> 参数，如果传递值，则忽略。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-version-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4480">    <p><strong>示例 #1 <span class="function"><strong>curl_version()</strong></span> 示例</strong></p>    <div class="example-contents"><p>     这个示例将会检查当前 cURL 版本使用 <span class="function"><strong>curl_version()</strong></span> 返回的“features”位掩码中哪些特性是可用的。    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 获取cURL版本数组<br></span><span style="color: #9876AA">\$version </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_version</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// 在cURL编译版本中使用位域来检查某些特性<br></span><span style="color: #9876AA">\$bitfields </span><span style="color: #007700">= Array(<br>            </span><span style="color: #DD0000">'CURL_VERSION_IPV6'</span><span style="color: #007700">, <br>            </span><span style="color: #DD0000">'CURL_VERSION_KERBEROS4'</span><span style="color: #007700">, <br>            </span><span style="color: #DD0000">'CURL_VERSION_SSL'</span><span style="color: #007700">, <br>            </span><span style="color: #DD0000">'CURL_VERSION_LIBZ'<br>            </span><span style="color: #007700">);<br><br><br>foreach(</span><span style="color: #9876AA">\$bitfields </span><span style="color: #007700">as </span><span style="color: #9876AA">\$feature</span><span style="color: #007700">)<br>{<br>    echo </span><span style="color: #9876AA">\$feature </span><span style="color: #007700">. (</span><span style="color: #9876AA">\$version</span><span style="color: #007700">[</span><span style="color: #DD0000">'features'</span><span style="color: #007700">] &amp; </span><span style="color: #9876AA">constant</span><span style="color: #007700">(</span><span style="color: #9876AA">\$feature</span><span style="color: #007700">) ? </span><span style="color: #DD0000">' matches' </span><span style="color: #007700">: </span><span style="color: #DD0000">' does not match'</span><span style="color: #007700">);<br>    echo </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div></div>
 * 
 * Gets cURL version information
 * @link https://php.net/manual/zh/function.curl-version.php
 * @param int $age [optional] Removed since version PHP 8.0.
 * @return array|false an associative array with the following elements:
 * <tr valign="top">
 * <td>Indice</td>
 * <td>Value description</td>
 * </tr>
 * <tr valign="top">
 * <td>version_number</td>
 * <td>cURL 24 bit version number</td>
 * </tr>
 * <tr valign="top">
 * <td>version</td>
 * <td>cURL version number, as a string</td>
 * </tr>
 * <tr valign="top">
 * <td>ssl_version_number</td>
 * <td>OpenSSL 24 bit version number</td>
 * </tr>
 * <tr valign="top">
 * <td>ssl_version</td>
 * <td>OpenSSL version number, as a string</td>
 * </tr>
 * <tr valign="top">
 * <td>libz_version</td>
 * <td>zlib version number, as a string</td>
 * </tr>
 * <tr valign="top">
 * <td>host</td>
 * <td>Information about the host where cURL was built</td>
 * </tr>
 * <tr valign="top">
 * <td>age</td>
 * <td></td>
 * </tr>
 * <tr valign="top">
 * <td>features</td>
 * <td>A bitmask of the CURL_VERSION_XXX constants</td>
 * </tr>
 * <tr valign="top">
 * <td>protocols</td>
 * <td>An array of protocols names supported by cURL</td>
 * </tr>
 */
#[ArrayShape(["version_number" => "string", "version" => "string", "ssl_version_number" => "int", "ssl_version" => "string", "libz_version" => "string", "host" => "string", "age" => "int", "features" => "int", "protocols" => "array"])]
#[Pure]
function curl_version(#[PhpStormStubsElementAvailable(from: '5.3', to: '7.4')] $age = null): array|false {}

/**
 * <div id="function.curl-setopt" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_setopt</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_setopt</span> — <span class="dc-title">设置 cURL 传输选项</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-setopt-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_setopt</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$option</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   为 cURL 会话句柄设置选项。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-setopt-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>         <dt><span class="parameter" style="color:#3A95FF">option</span></dt>     <dd>      <p class="para">       需要设置的 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-abstract-unix-socket">CURLOPT_<span class="replaceable">*</span></a></span></strong> 选项。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">value</span></dt>     <dd>      <p class="para">       将设置在 <span class="parameter" style="color:#3A95FF">option</span> 选项上的值。有关每个常量期望的值类型的详情，请参阅       <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-abstract-unix-socket">CURLOPT_<span class="replaceable">*</span></a></span></strong> 常量的描述。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-setopt-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-setopt-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.4.0</td>       <td>        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-dns-use-global-cache">CURLOPT_DNS_USE_GLOBAL_CACHE</a></span></strong>         不再有任何效果，并且在线程安全 PHP 上启用不再触发警告。       </td>      </tr>      <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>      <tr>       <td>7.3.15、7.4.3</td>       <td>        引入 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-http09-allowed">CURLOPT_HTTP09_ALLOWED</a></span></strong>。       </td>      </tr>      <tr>       <td>7.3.0</td>       <td>        引入 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-abstract-unix-socket">CURLOPT_ABSTRACT_UNIX_SOCKET</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-keep-sending-on-error">CURLOPT_KEEP_SENDING_ON_ERROR</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-pre-proxy">CURLOPT_PRE_PROXY</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-cainfo">CURLOPT_PROXY_CAINFO</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-capath">CURLOPT_PROXY_CAPATH</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-crlfile">CURLOPT_PROXY_CRLFILE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-keypasswd">CURLOPT_PROXY_KEYPASSWD</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-pinnedpublickey">CURLOPT_PROXY_PINNEDPUBLICKEY</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-sslcert">CURLOPT_PROXY_SSLCERT</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-sslcerttype">CURLOPT_PROXY_SSLCERTTYPE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-ssl-cipher-list">CURLOPT_PROXY_SSL_CIPHER_LIST</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-sslkey">CURLOPT_PROXY_SSLKEY</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-sslkeytype">CURLOPT_PROXY_SSLKEYTYPE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-ssl-options">CURLOPT_PROXY_SSL_OPTIONS</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-ssl-verifyhost">CURLOPT_PROXY_SSL_VERIFYHOST</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-ssl-verifypeer">CURLOPT_PROXY_SSL_VERIFYPEER</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-sslversion">CURLOPT_PROXY_SSLVERSION</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-tlsauth-password">CURLOPT_PROXY_TLSAUTH_PASSWORD</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-tlsauth-type">CURLOPT_PROXY_TLSAUTH_TYPE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-tlsauth-username">CURLOPT_PROXY_TLSAUTH_USERNAME</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-socks5-auth">CURLOPT_SOCKS5_AUTH</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-suppress-connect-headers">CURLOPT_SUPPRESS_CONNECT_HEADERS</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-disallow-username-in-url">CURLOPT_DISALLOW_USERNAME_IN_URL</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-dns-shuffle-addresses">CURLOPT_DNS_SHUFFLE_ADDRESSES</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-happy-eyeballs-timeout-ms">CURLOPT_HAPPY_EYEBALLS_TIMEOUT_MS</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-haproxyprotocol">CURLOPT_HAPROXYPROTOCOL</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-tls13-ciphers">CURLOPT_PROXY_TLS13_CIPHERS</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-ssh-compression">CURLOPT_SSH_COMPRESSION</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-timevalue-large">CURLOPT_TIMEVALUE_LARGE</a></span></strong>        和 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-tls13-ciphers">CURLOPT_TLS13_CIPHERS</a></span></strong>。       </td>      </tr>      <tr>       <td>7.0.7</td>       <td>        引入 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-http-version-2">CURL_HTTP_VERSION_2</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-http-version-2-prior-knowledge">CURL_HTTP_VERSION_2_PRIOR_KNOWLEDGE</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-http-version-2tls">CURL_HTTP_VERSION_2TLS</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-redir-post-301">CURL_REDIR_POST_301</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-redir-post-302">CURL_REDIR_POST_302</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-redir-post-303">CURL_REDIR_POST_303</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-redir-post-all">CURL_REDIR_POST_ALL</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-version-kerberos5">CURL_VERSION_KERBEROS5</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-version-psl">CURL_VERSION_PSL</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-version-unix-sockets">CURL_VERSION_UNIX_SOCKETS</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlauth-negotiate">CURLAUTH_NEGOTIATE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlauth-ntlm-wb">CURLAUTH_NTLM_WB</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlftp-create-dir">CURLFTP_CREATE_DIR</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlftp-create-dir-none">CURLFTP_CREATE_DIR_NONE</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlftp-create-dir-retry">CURLFTP_CREATE_DIR_RETRY</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlheader-separate">CURLHEADER_SEPARATE</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlheader-unified">CURLHEADER_UNIFIED</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-chunk-length-penalty-size">CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-content-length-penalty-size">CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-max-host-connections">CURLMOPT_MAX_HOST_CONNECTIONS</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-max-pipeline-length">CURLMOPT_MAX_PIPELINE_LENGTH</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-max-total-connections">CURLMOPT_MAX_TOTAL_CONNECTIONS</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-connect-to">CURLOPT_CONNECT_TO</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-default-protocol">CURLOPT_DEFAULT_PROTOCOL</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-dns-interface">CURLOPT_DNS_INTERFACE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-dns-local-ip4">CURLOPT_DNS_LOCAL_IP4</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-dns-local-ip6">CURLOPT_DNS_LOCAL_IP6</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-expect-100-timeout-ms">CURLOPT_EXPECT_100_TIMEOUT_MS</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-headeropt">CURLOPT_HEADEROPT</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-login-options">CURLOPT_LOGIN_OPTIONS</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-path-as-is">CURLOPT_PATH_AS_IS</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-pinnedpublickey">CURLOPT_PINNEDPUBLICKEY</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-pipewait">CURLOPT_PIPEWAIT</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxy-service-name">CURLOPT_PROXY_SERVICE_NAME</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-proxyheader">CURLOPT_PROXYHEADER</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-sasl-ir">CURLOPT_SASL_IR</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-service-name">CURLOPT_SERVICE_NAME</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-ssl-enable-alpn">CURLOPT_SSL_ENABLE_ALPN</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-ssl-enable-npn">CURLOPT_SSL_ENABLE_NPN</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-ssl-falsestart">CURLOPT_SSL_FALSESTART</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-ssl-verifystatus">CURLOPT_SSL_VERIFYSTATUS</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-stream-weight">CURLOPT_STREAM_WEIGHT</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-tcp-fastopen">CURLOPT_TCP_FASTOPEN</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-tftp-no-options">CURLOPT_TFTP_NO_OPTIONS</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-unix-socket-path">CURLOPT_UNIX_SOCKET_PATH</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-xoauth2-bearer">CURLOPT_XOAUTH2_BEARER</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlproto-smb">CURLPROTO_SMB</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlproto-smbs">CURLPROTO_SMBS</a></span></strong>、        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlproxy-http-1-0">CURLPROXY_HTTP_1_0</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlssh-auth-agent">CURLSSH_AUTH_AGENT</a></span></strong> 和        <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlsslopt-no-revoke">CURLSSLOPT_NO_REVOKE</a></span></strong>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.curl-setopt-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4471">    <p><strong>示例 #1 初始化一个新的cURL会话并获取一个网页</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建一个新cURL资源<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// 设置URL和相应的选项<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_URL</span><span style="color: #007700">, </span><span style="color: #DD0000">"http://www.example.com/"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_HEADER</span><span style="color: #007700">, </span><span style="color: #9876AA">false</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 抓取URL并把它传递给浏览器<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">//关闭cURL资源，并且释放系统资源<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.curl-setopt-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    传递一个数组到<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-postfields">CURLOPT_POSTFIELDS</a></span></strong>，cURL会把数据编码成    <em>multipart/form-data</em>，而然传递一个URL-encoded字符串时，数据会被编码成    <em>application/x-www-form-urlencoded</em>。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.curl-setopt-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_setopt_array()} - 为 cURL 传输会话批量设置选项</span></li>    <li><span class="classname"><a href="https://php.net/manual/zh/class.curlfile.php" class="classname">CURLFile</a></span></li>    <li><span class="classname"><a href="https://php.net/manual/zh/class.curlstringfile.php" class="classname">CURLStringFile</a></span></li>   </ul>   </div></div>
 * 
 * Set an option for a cURL transfer
 * @link https://php.net/manual/zh/function.curl-setopt.php
 * @param CurlHandle|resource $handle
 * @param int $option <p>
 * The CURLOPT_XXX option to set.
 * </p>
 * @param mixed|callable $value <p>
 * The value to be set on option.
 * </p>
 * <p>
 * value should be a bool for the
 * following values of the option parameter:</p>
 * <table class="doctable informaltable">
 *
 * <thead>
 * <tr>
 * <th>Option</th>
 * <th>Set <em>value</em> to</th>
 * <th>Notes</th>
 * </tr>
 * </thead>
 *
 * <tbody class="tbody">
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_AUTOREFERER</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to automatically set the <em>Referer:</em> field in
 * requests where it follows a <em>Location:</em> redirect.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_BINARYTRANSFER</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to return the raw output when
 * <b>CURLOPT_RETURNTRANSFER</b> is used.
 * </td>
 * <td style="vertical-align: top;">
 * From PHP 5.1.3, this option has no effect: the raw output will
 * always be returned when
 * <b>CURLOPT_RETURNTRANSFER</b> is used.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_COOKIESESSION</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to mark this as a new cookie "session". It will force libcurl
 * to ignore all cookies it is about to load that are "session cookies"
 * from the previous session. By default, libcurl always stores and
 * loads all cookies, independent if they are session cookies or not.
 * Session cookies are cookies without expiry date and they are meant
 * to be alive and existing for this "session" only.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_CERTINFO</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to output SSL certification information to <em>STDERR</em>
 * on secure transfers.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.19.1.
 * Available since PHP 5.3.2.
 * Requires <b>CURLOPT_VERBOSE</b> to be on to have an effect.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_CONNECT_ONLY</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> tells the library to perform all the required proxy authentication
 * and connection setup, but no data transfer. This option is implemented for
 * HTTP, SMTP and POP3.
 * </td>
 * <td style="vertical-align: top;">
 * Added in 7.15.2.
 * Available since PHP 5.5.0.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_CRLF</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to convert Unix newlines to CRLF newlines
 * on transfers.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_DNS_USE_GLOBAL_CACHE</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to use a global DNS cache. This option is
 * not thread-safe and is enabled by default.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FAILONERROR</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to fail verbosely if the HTTP code returned
 * is greater than or equal to 400. The default behavior is to return
 * the page normally, ignoring the code.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FILETIME</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to attempt to retrieve the modification
 * date of the remote document. This value can be retrieved using
 * the <b>CURLINFO_FILETIME</b> option with
 * <span class="function">{@see curl_getinfo()}</span>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FOLLOWLOCATION</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to follow any
 * <em>"Location: "</em> header that the server sends as
 * part of the HTTP header (note this is recursive, PHP will follow as
 * many <em>"Location: "</em> headers that it is sent,
 * unless <b>CURLOPT_MAXREDIRS</b> is set).
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FORBID_REUSE</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to force the connection to explicitly
 * close when it has finished processing, and not be pooled for reuse.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FRESH_CONNECT</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to force the use of a new connection
 * instead of a cached one.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FTP_USE_EPRT</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to use EPRT (and LPRT) when doing active
 * FTP downloads. Use <b>FALSE</b> to disable EPRT and LPRT and use PORT
 * only.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FTP_USE_EPSV</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to first try an EPSV command for FTP
 * transfers before reverting back to PASV. Set to <b>FALSE</b>
 * to disable EPSV.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FTP_CREATE_MISSING_DIRS</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to create missing directories when an FTP operation
 * encounters a path that currently doesn't exist.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FTPAPPEND</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to append to the remote file instead of
 * overwriting it.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_TCP_NODELAY</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to disable TCP's Nagle algorithm, which tries to minimize
 * the number of small packets on the network.
 * </td>
 * <td style="vertical-align: top;">
 * Available since PHP 5.2.1 for versions compiled with libcurl 7.11.2 or
 * greater.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FTPASCII</b></td>
 * <td style="vertical-align: top;">
 * An alias of
 * <b>CURLOPT_TRANSFERTEXT</b>. Use that instead.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FTPLISTONLY</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to only list the names of an FTP
 * directory.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_HEADER</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to include the header in the output.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>CURLINFO_HEADER_OUT</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to track the handle's request string.
 * </td>
 * <td style="vertical-align: top;">
 * Available since PHP 5.1.3. The <b>CURLINFO_</b>
 * prefix is intentional.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_HTTPGET</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to reset the HTTP request method to GET.
 * Since GET is the default, this is only necessary if the request
 * method has been changed.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_HTTPPROXYTUNNEL</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to tunnel through a given HTTP proxy.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_MUTE</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to be completely silent with regards to
 * the cURL functions.
 * </td>
 * <td style="vertical-align: top;">
 * Removed in cURL 7.15.5 (You can use CURLOPT_RETURNTRANSFER instead)
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_NETRC</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to scan the <var class="filename">~/.netrc</var>
 * file to find a username and password for the remote site that
 * a connection is being established with.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_NOBODY</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to exclude the body from the output.
 * Request method is then set to HEAD. Changing this to <b>FALSE</b> does
 * not change it to GET.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_NOPROGRESS</b></td>
 * <td style="vertical-align: top;"><p>
 * <b>TRUE</b> to disable the progress meter for cURL transfers.
 * </p><blockquote class="note"><p><strong class="note">Note</strong>:
 * </p><p>
 * PHP automatically sets this option to <b>TRUE</b>, this should only be
 * changed for debugging purposes.
 * </p>
 * </blockquote>
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_NOSIGNAL</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to ignore any cURL function that causes a
 * signal to be sent to the PHP process. This is turned on by default
 * in multi-threaded SAPIs so timeout options can still be used.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.10.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_POST</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to do a regular HTTP POST. This POST is the
 * normal <em>application/x-www-form-urlencoded</em> kind,
 * most commonly used by HTML forms.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PUT</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to HTTP PUT a file. The file to PUT must
 * be set with <b>CURLOPT_INFILE</b> and
 * <b>CURLOPT_INFILESIZE</b>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_RETURNTRANSFER</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to return the transfer as a string of the
 * return value of <span class="function">{@see curl_exec()}</span> instead of outputting
 * it out directly.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SAFE_UPLOAD</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to disable support for the <em>@</em> prefix for
 * uploading files in <b>CURLOPT_POSTFIELDS</b>, which
 * means that values starting with <em>@</em> can be safely
 * passed as fields. {@see CURLFile} may be used for
 * uploads instead.
 * </td>
 * <td style="vertical-align: top;">
 * Added in PHP 5.5.0 with <b>FALSE</b> as the default value. PHP 5.6.0
 * changes the default value to <b>TRUE</b>.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSL_VERIFYPEER</b></td>
 * <td style="vertical-align: top;">
 * <b>FALSE</b> to stop cURL from verifying the peer's
 * certificate. Alternate certificates to verify against can be
 * specified with the <b>CURLOPT_CAINFO</b> option
 * or a certificate directory can be specified with the
 * <b>CURLOPT_CAPATH</b> option.
 * </td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> by default as of cURL 7.10. Default bundle installed as of
 * cURL 7.10.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_TRANSFERTEXT</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to use ASCII mode for FTP transfers.
 * For LDAP, it retrieves data in plain text instead of HTML. On
 * Windows systems, it will not set <em>STDOUT</em> to binary
 * mode.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_UNRESTRICTED_AUTH</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to keep sending the username and password
 * when following locations (using
 * <b>CURLOPT_FOLLOWLOCATION</b>), even when the
 * hostname has changed.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_UPLOAD</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to prepare for an upload.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_VERBOSE</b></td>
 * <td style="vertical-align: top;">
 * <b>TRUE</b> to output verbose information. Writes
 * output to <em>STDERR</em>, or the file specified using
 * <b>CURLOPT_STDERR</B>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 *
 * value should be an integer for the following values of the option parameter:
 * <table>
 *
 * <thead>
 * <tr>
 * <th>Option</th>
 * <th>Set <em>value</em> to</th>
 * <th>Notes</th>
 * </tr>
 * </thead>
 *
 * <tbody class="tbody">
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_BUFFERSIZE</b></td>
 * <td style="vertical-align: top;">
 * The size of the buffer to use for each read. There is no guarantee
 * this request will be fulfilled, however.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.10.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_CLOSEPOLICY</b></td>
 * <td style="vertical-align: top;">
 * One of the <b>CURLCLOSEPOLICY_*</b> values.
 * <blockquote class="note"><p><b>Note</b>:
 * </p><p>
 * This option is deprecated, as it was never implemented in cURL and
 * never had any effect.
 * </p>
 * </blockquote>
 * </td>
 * <td style="vertical-align: top;">
 * Removed in PHP 5.6.0.
 * </td>
 * </tr>
 *
 * <tr>
 * <td><b>CURLOPT_CONNECTTIMEOUT</b></td>
 * <td style="vertical-align: top;">
 * The number of seconds to wait while trying to connect. Use 0 to
 * wait indefinitely.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_CONNECTTIMEOUT_MS</b></td>
 * <td style="vertical-align: top;">
 * The number of milliseconds to wait while trying to connect. Use 0 to
 * wait indefinitely.
 *
 * If libcurl is built to use the standard system name resolver, that
 * portion of the connect will still use full-second resolution for
 * timeouts with a minimum timeout allowed of one second.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.16.2. Available since PHP 5.2.3.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_DNS_CACHE_TIMEOUT</b></td>
 * <td style="vertical-align: top;">
 * The number of seconds to keep DNS entries in memory. This
 * option is set to 120 (2 minutes) by default.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FTPSSLAUTH</b></td>
 * <td style="vertical-align: top;">
 * The FTP authentication method (when is activated):
 * <em>CURLFTPAUTH_SSL</em> (try SSL first),
 * <em>CURLFTPAUTH_TLS</em> (try TLS first), or
 * <em>CURLFTPAUTH_DEFAULT</em> (let cURL decide).
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.12.2.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_HTTP_VERSION</b></td>
 * <td style="vertical-align: top;">
 * <code class="parameter">CURL_HTTP_VERSION_NONE</code> (default, lets CURL
 * decide which version to use),
 * <code class="parameter">CURL_HTTP_VERSION_1_0</code> (forces HTTP/1.0),
 * or <code class="parameter">CURL_HTTP_VERSION_1_1</code> (forces HTTP/1.1).
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_HTTPAUTH</b></td>
 * <td style="vertical-align: top;">
 * <p>
 * The HTTP authentication method(s) to use. The options are:
 * <code class="parameter">CURLAUTH_BASIC</code>,
 * <code class="parameter">CURLAUTH_DIGEST</code>,
 * <code class="parameter">CURLAUTH_GSSNEGOTIATE</code>,
 * <code class="parameter">CURLAUTH_NTLM</code>,
 * <code class="parameter">CURLAUTH_ANY</code>, and
 * <code class="parameter">CURLAUTH_ANYSAFE</code>.
 * </p>
 * <p>
 * The bitwise <em>|</em> (or) operator can be used to combine
 * more than one method. If this is done, cURL will poll the server to see
 * what methods it supports and pick the best one.
 * </p>
 * <p>
 * <code class="parameter">CURLAUTH_ANY</code> is an alias for
 * <em>CURLAUTH_BASIC | CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</em>.
 * </p>
 * <p>
 * <code class="parameter">CURLAUTH_ANYSAFE</code> is an alias for
 * <em>CURLAUTH_DIGEST | CURLAUTH_GSSNEGOTIATE | CURLAUTH_NTLM</em>.
 * </p>
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_INFILESIZE</b></td>
 * <td style="vertical-align: top;">
 * The expected size, in bytes, of the file when uploading a file to
 * a remote site. Note that using this option will not stop libcurl
 * from sending more data, as exactly what is sent depends on
 * <b>CURLOPT_READFUNCTION</b>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_LOW_SPEED_LIMIT</b></td>
 * <td style="vertical-align: top;">
 * The transfer speed, in bytes per second, that the transfer should be
 * below during the count of <b>CURLOPT_LOW_SPEED_TIME</b>
 * seconds before PHP considers the transfer too slow and aborts.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_LOW_SPEED_TIME</b></td>
 * <td style="vertical-align: top;">
 * The number of seconds the transfer speed should be below
 * <b>CURLOPT_LOW_SPEED_LIMIT</b> before PHP considers
 * the transfer too slow and aborts.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_MAXCONNECTS</b></td>
 * <td style="vertical-align: top;">
 * The maximum amount of persistent connections that are allowed.
 * When the limit is reached,
 * <b>CURLOPT_CLOSEPOLICY</b> is used to determine
 * which connection to close.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_MAXREDIRS</b></td>
 * <td style="vertical-align: top;">
 * The maximum amount of HTTP redirections to follow. Use this option
 * alongside <b>CURLOPT_FOLLOWLOCATION</b>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PORT</b></td>
 * <td style="vertical-align: top;">
 * An alternative port number to connect to.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_POSTREDIR</b></td>
 * <td style="vertical-align: top;">
 * A bitmask of 1 (301 Moved Permanently), 2 (302 Found)
 * vand 4 (303 See Other) if the HTTP POST method should be maintained
 * when <b>CURLOPT_FOLLOWLOCATION</b> is set and a
 * specific type of redirect occurs.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.19.1. Available since PHP 5.3.2.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PROTOCOLS</b></td>
 * <td style="vertical-align: top;">
 * <p>
 * Bitmask of <b>CURLPROTO_*</b> values. If used, this bitmask
 * limits what protocols libcurl may use in the transfer. This allows you to have
 * a libcurl built to support a wide range of protocols but still limit specific
 * transfers to only be allowed to use a subset of them. By default libcurl will
 * accept all protocols it supports.
 * See also <b>CURLOPT_REDIR_PROTOCOLS</b>.
 * </p>
 * <p>
 * Valid protocol options are:
 * <code class="parameter">CURLPROTO_HTTP</code>,
 * <code class="parameter">CURLPROTO_HTTPS</code>,
 * <code class="parameter">CURLPROTO_FTP</code>,
 * <code class="parameter">CURLPROTO_FTPS</code>,
 * <code class="parameter">CURLPROTO_SCP</code>,
 * <code class="parameter">CURLPROTO_SFTP</code>,
 * <code class="parameter">CURLPROTO_TELNET</code>,
 * <code class="parameter">CURLPROTO_LDAP</code>,
 * <code class="parameter">CURLPROTO_LDAPS</code>,
 * <code class="parameter">CURLPROTO_DICT</code>,
 * <code class="parameter">CURLPROTO_FILE</code>,
 * <code class="parameter">CURLPROTO_TFTP</code>,
 * <code class="parameter">CURLPROTO_ALL</code>
 * </p>
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.19.4.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PROXYAUTH</b></td>
 * <td style="vertical-align: top;">
 * The HTTP authentication method(s) to use for the proxy connection.
 * Use the same bitmasks as described in
 * <b>CURLOPT_HTTPAUTH</b>. For proxy authentication,
 * only <code class="parameter">CURLAUTH_BASIC</code> and
 * <code class="parameter">CURLAUTH_NTLM</code> are currently supported.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.10.7.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PROXYPORT</b></td>
 * <td style="vertical-align: top;">
 * The port number of the proxy to connect to. This port number can
 * also be set in <b>CURLOPT_PROXY</b>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PROXYTYPE</b></td>
 * <td style="vertical-align: top;">
 * Either <b>CURLPROXY_HTTP</b> (default),
 * <b>CURLPROXY_SOCKS4</b>,
 * <b>CURLPROXY_SOCKS5</b>,
 * <b>CURLPROXY_SOCKS4A</b> or
 * <b>CURLPROXY_SOCKS5_HOSTNAME</b>.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.10.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_REDIR_PROTOCOLS</b></td>
 * <td style="vertical-align: top;">
 * Bitmask of <b>CURLPROTO_*</b> values. If used, this bitmask
 * limits what protocols libcurl may use in a transfer that it follows to in
 * a redirect when <b>CURLOPT_FOLLOWLOCATION</b> is enabled.
 * This allows you to limit specific transfers to only be allowed to use a subset
 * of protocols in redirections. By default libcurl will allow all protocols
 * except for FILE and SCP. This is a difference compared to pre-7.19.4 versions
 * which unconditionally would follow to all protocols supported.
 * See also <b>CURLOPT_PROTOCOLS</b> for protocol constant values.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.19.4.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_RESUME_FROM</b></td>
 * <td style="vertical-align: top;">
 * The offset, in bytes, to resume a transfer from.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSL_VERIFYHOST</b></td>
 * <td style="vertical-align: top;">
 * 1 to check the existence of a common name in the
 * SSL peer certificate. 2 to check the existence of
 * a common name and also verify that it matches the hostname
 * provided. In production environments the value of this option
 * should be kept at 2 (default value).
 * </td>
 * <td style="vertical-align: top;">
 * Support for value 1 removed in cURL 7.28.1
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLVERSION</b></td>
 * <td style="vertical-align: top;">
 * One of <b>CURL_SSLVERSION_DEFAULT</b> (0),
 * <b>CURL_SSLVERSION_TLSv1</b> (1),
 * <b>CURL_SSLVERSION_SSLv2</b> (2),
 * <b>CURL_SSLVERSION_SSLv3</b> (3),
 * <b>CURL_SSLVERSION_TLSv1_0</b> (4),
 * <b>CURL_SSLVERSION_TLSv1_1</b> (5) or
 * <b>CURL_SSLVERSION_TLSv1_2</b> (6).
 * <blockquote class="note"><p><strong class="note">Note</strong>:
 * </p><p class="para">
 * Your best bet is to not set this and let it use the default.
 * Setting it to 2 or 3 is very dangerous given the known
 * vulnerabilities in SSLv2 and SSLv3.
 * </p>
 * </blockquote>
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_TIMECONDITION</b></td>
 * <td style="vertical-align: top;">
 * How <b>CURLOPT_TIMEVALUE</b> is treated.
 * Use <b>CURL_TIMECOND_IFMODSINCE</b> to return the
 * page only if it has been modified since the time specified in
 * <b>CURLOPT_TIMEVALUE</b>. If it hasn't been modified,
 * a <em>"304 Not Modified"</em> header will be returned
 * assuming <b>CURLOPT_HEADER</code></strong> is <strong><code>TRUE</b>.
 * Use <code class="parameter">CURL_TIMECOND_IFUNMODSINCE</code> for the reverse
 * effect. <code class="parameter">CURL_TIMECOND_IFMODSINCE</code> is the
 * default.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_TIMEOUT</b></td>
 * <td style="vertical-align: top;">
 * The maximum number of seconds to allow cURL functions to execute.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_TIMEOUT_MS</b></td>
 * <td style="vertical-align: top;">
 * The maximum number of milliseconds to allow cURL functions to
 * execute.
 *
 * If libcurl is built to use the standard system name resolver, that
 * portion of the connect will still use full-second resolution for
 * timeouts with a minimum timeout allowed of one second.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.16.2. Available since PHP 5.2.3.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_TIMEVALUE</b></td>
 * <td style="vertical-align: top;">
 * The time in seconds since January 1st, 1970. The time will be used
 * by <b>CURLOPT_TIMECONDITION</b>. By default,
 * <code class="parameter">CURL_TIMECOND_IFMODSINCE</code> is used.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_MAX_RECV_SPEED_LARGE</b></td>
 * <td style="vertical-align: top;">
 * If a download exceeds this speed (counted in bytes per second) on
 * cumulative average during the transfer, the transfer will pause to
 * keep the average rate less than or equal to the parameter value.
 * Defaults to unlimited speed.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.15.5. Available since PHP 5.4.0.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_MAX_SEND_SPEED_LARGE</b></td>
 * <td style="vertical-align: top;">
 * If an upload exceeds this speed (counted in bytes per second) on
 * cumulative average during the transfer, the transfer will pause to
 * keep the average rate less than or equal to the parameter value.
 * Defaults to unlimited speed.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.15.5. Available since PHP 5.4.0.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSH_AUTH_TYPES</b></td>
 * <td style="vertical-align: top;">
 * A bitmask consisting of one or more of
 * <b>CURLSSH_AUTH_PUBLICKEY</b>,
 * <b>CURLSSH_AUTH_PASSWORD</b>,
 * <b>CURLSSH_AUTH_HOST</b>,
 * <b>CURLSSH_AUTH_KEYBOARD</b>. Set to
 * <b>CURLSSH_AUTH_ANY</b> to let libcurl pick one.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.16.1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_IPRESOLVE</b></td>
 * <td style="vertical-align: top;">
 * Allows an application to select what kind of IP addresses to use when
 * resolving host names. This is only interesting when using host names that
 * resolve addresses using more than one version of IP, possible values are
 * <b>CURL_IPRESOLVE_WHATEVER</b>,
 * <b>CURL_IPRESOLVE_V4</b>,
 * <b>CURL_IPRESOLVE_V6</b>, by default
 * <b>CURL_IPRESOLVE_WHATEVER</b>.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.10.8.
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 *
 * value should be a string for the following values of the option parameter:
 * <table class="doctable informaltable">
 *
 * <thead>
 * <tr>
 * <th>Option</th>
 * <th>Set <code class="parameter">value</code> to</th>
 * <th>Notes</th>
 * </tr>
 * </thead>
 *
 * <tbody class="tbody">
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_CAINFO</b></td>
 * <td style="vertical-align: top;">
 * The name of a file holding one or more certificates to verify the
 * peer with. This only makes sense when used in combination with
 * <b>CURLOPT_SSL_VERIFYPEER</b>.
 * </td>
 * <td style="vertical-align: top;">
 * Might require an absolute path.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_CAPATH</b></td>
 * <td style="vertical-align: top;">
 * A directory that holds multiple CA certificates. Use this option
 * alongside <b>CURLOPT_SSL_VERIFYPEER</b>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_COOKIE</b></td>
 * <td style="vertical-align: top;">
 * The contents of the <em>"Cookie: "</em> header to be
 * used in the HTTP request.
 * Note that multiple cookies are separated with a semicolon followed
 * by a space (e.g., "<em>fruit=apple; colour=red</em>")
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_COOKIEFILE</b></td>
 * <td style="vertical-align: top;">
 * The name of the file containing the cookie data. The cookie file can
 * be in Netscape format, or just plain HTTP-style headers dumped into
 * a file.
 * If the name is an empty string, no cookies are loaded, but cookie
 * handling is still enabled.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_COOKIEJAR</b></td>
 * <td style="vertical-align: top;">
 * The name of a file to save all internal cookies to when the handle is closed,
 * e.g. after a call to curl_close.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_CUSTOMREQUEST</b></td>
 * <td style="vertical-align: top;"><p class="para">
 * A custom request method to use instead of
 * <em>"GET"</em> or <em>"HEAD"</em> when doing
 * a HTTP request. This is useful for doing
 * <em>"DELETE"</em> or other, more obscure HTTP requests.
 * Valid values are things like <em>"GET"</em>,
 * <em>"POST"</em>, <em>"CONNECT"</em> and so on;
 * i.e. Do not enter a whole HTTP request line here. For instance,
 * entering <em>"GET /index.html HTTP/1.0\r\n\r\n"</em>
 * would be incorrect.
 * </p><blockquote class="note"><p><strong class="note">Note</strong>:
 * </p><p class="para">
 * Don't do this without making sure the server supports the custom
 * request method first.
 * </p>
 * </blockquote>
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_EGDSOCKET</b></td>
 * <td style="vertical-align: top;">
 * Like <b>CURLOPT_RANDOM_FILE</b>, except a filename
 * to an Entropy Gathering Daemon socket.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_ENCODING</b></td>
 * <td style="vertical-align: top;">
 * The contents of the <em>"Accept-Encoding: "</em> header.
 * This enables decoding of the response. Supported encodings are
 * <em>"identity"</em>, <em>"deflate"</em>, and
 * <em>"gzip"</em>. If an empty string, <em>""</em>,
 * is set, a header containing all supported encoding types is sent.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.10.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FTPPORT</b></td>
 * <td style="vertical-align: top;">
 * The value which will be used to get the IP address to use
 * for the FTP "PORT" instruction. The "PORT" instruction tells
 * the remote server to connect to our specified IP address.  The
 * string may be a plain IP address, a hostname, a network
 * interface name (under Unix), or just a plain '-' to use the
 * systems default IP address.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_INTERFACE</b></td>
 * <td style="vertical-align: top;">
 * The name of the outgoing network interface to use. This can be an
 * interface name, an IP address or a host name.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_KEYPASSWD</b></td>
 * <td style="vertical-align: top;">
 * The password required to use the <b>CURLOPT_SSLKEY</b>
 * or <b>CURLOPT_SSH_PRIVATE_KEYFILE</b> private key.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.16.1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_KRB4LEVEL</b></td>
 * <td style="vertical-align: top;">
 * The KRB4 (Kerberos 4) security level. Any of the following values
 * (in order from least to most powerful) are valid:
 * <em>"clear"</em>,
 * <em>"safe"</em>,
 * <em>"confidential"</em>,
 * <em>"private".</em>.
 * If the string does not match one of these,
 * <em>"private"</em> is used. Setting this option to <b>NULL</b>
 * will disable KRB4 security. Currently KRB4 security only works
 * with FTP transactions.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_POSTFIELDS</b></td>
 * <td style="vertical-align: top;">
 * <span class="simpara">
 * The full data to post in a HTTP "POST" operation.
 * To post a file, prepend a filename with <em>@</em> and
 * use the full path. The filetype can be explicitly specified by
 * following the filename with the type in the format
 * '<em>;type=mimetype</em>'. This parameter can either be
 * passed as a urlencoded string like '<em>para1=val1&amp;para2=val2&amp;...</em>'
 * or as an array with the field name as key and field data as value.
 * If <code class="parameter">value</code> is an array, the
 * <em>Content-Type</em> header will be set to
 * <em>multipart/form-data</em>.
 * </span>
 * <span class="simpara">
 * As of PHP 5.2.0, <code class="parameter">value</code> must be an array if
 * files are passed to this option with the <em>@</em> prefix.
 * </span>
 * <span class="simpara">
 * As of PHP 5.5.0, the <em>@</em> prefix is deprecated and
 * files can be sent using <a href="class.curlfile.php" class="classname">CURLFile</a>. The
 * <em>@</em> prefix can be disabled for safe passing of
 * values beginning with <em>@</em> by setting the
 * <b>CURLOPT_SAFE_UPLOAD</code></strong> option to <strong><code>TRUE</b>.
 * </span>
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PROXY</b></td>
 * <td style="vertical-align: top;">
 * The HTTP proxy to tunnel requests through.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PROXYUSERPWD</b></td>
 * <td style="vertical-align: top;">
 * A username and password formatted as
 * <em>"[username]:[password]"</em> to use for the
 * connection to the proxy.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_RANDOM_FILE</b></td>
 * <td style="vertical-align: top;">
 * A filename to be used to seed the random number generator for SSL.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_RANGE</b></td>
 * <td style="vertical-align: top;">
 * Range(s) of data to retrieve in the format
 * <em>"X-Y"</em> where X or Y are optional. HTTP transfers
 * also support several intervals, separated with commas in the format
 * <em>"X-Y,N-M"</em>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_REFERER</b></td>
 * <td style="vertical-align: top;">
 * The contents of the <em>"Referer: "</em> header to be used
 * in a HTTP request.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSH_HOST_PUBLIC_KEY_MD5</b></td>
 * <td style="vertical-align: top;">
 * A string containing 32 hexadecimal digits. The string should be the
 * MD5 checksum of the remote host's public key, and libcurl will reject
 * the connection to the host unless the md5sums match.
 * This option is only for SCP and SFTP transfers.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.17.1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSH_PUBLIC_KEYFILE</b></td>
 * <td style="vertical-align: top;">
 * The file name for your public key. If not used, libcurl defaults to
 * $HOME/.ssh/id_dsa.pub if the HOME environment variable is set,
 * and just "id_dsa.pub" in the current directory if HOME is not set.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.16.1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSH_PRIVATE_KEYFILE</b></td>
 * <td style="vertical-align: top;">
 * The file name for your private key. If not used, libcurl defaults to
 * $HOME/.ssh/id_dsa if the HOME environment variable is set,
 * and just "id_dsa" in the current directory if HOME is not set.
 * If the file is password-protected, set the password with
 * <b>CURLOPT_KEYPASSWD</b>.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.16.1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSL_CIPHER_LIST</b></td>
 * <td style="vertical-align: top;">
 * A list of ciphers to use for SSL. For example,
 * <em>RC4-SHA</em> and <em>TLSv1</em> are valid
 * cipher lists.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLCERT</b></td>
 * <td style="vertical-align: top;">
 * The name of a file containing a PEM formatted certificate.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLCERTPASSWD</b></td>
 * <td style="vertical-align: top;">
 * The password required to use the
 * <b>CURLOPT_SSLCERT</b> certificate.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLCERTTYPE</b></td>
 * <td style="vertical-align: top;">
 * The format of the certificate. Supported formats are
 * <em>"PEM"</em> (default), <em>"DER"</em>,
 * and <em>"ENG"</em>.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.9.3.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLENGINE</b></td>
 * <td style="vertical-align: top;">
 * The identifier for the crypto engine of the private SSL key
 * specified in <b>CURLOPT_SSLKEY</b>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLENGINE_DEFAULT</b></td>
 * <td style="vertical-align: top;">
 * The identifier for the crypto engine used for asymmetric crypto
 * operations.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLKEY</b></td>
 * <td style="vertical-align: top;">
 * The name of a file containing a private SSL key.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLKEYPASSWD</b></td>
 * <td style="vertical-align: top;"><p class="para">
 * The secret password needed to use the private SSL key specified in
 * <b>CURLOPT_SSLKEY</b>.
 * </p><blockquote class="note"><p><strong class="note">Note</strong>:
 * </p><p class="para">
 * Since this option contains a sensitive password, remember to keep
 * the PHP script it is contained within safe.
 * </p>
 * </blockquote>
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLKEYTYPE</b></td>
 * <td style="vertical-align: top;">
 * The key type of the private SSL key specified in
 * <b>CURLOPT_SSLKEY</b>. Supported key types are
 * <em>"PEM"</em> (default), <em>"DER"</em>,
 * and <em>"ENG"</em>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_URL</b></td>
 * <td style="vertical-align: top;">
 * The URL to fetch. This can also be set when initializing a
 * session with {@see curl_init()}</span>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_USERAGENT</b></td>
 * <td style="vertical-align: top;">
 * The contents of the <em>"User-Agent: "</em> header to be
 * used in a HTTP request.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_USERPWD</b></td>
 * <td style="vertical-align: top;">
 * A username and password formatted as
 * <em>"[username]:[password]"</em> to use for the
 * connection.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 * <table class="doctable informaltable">
 *
 * <thead>
 * <tr>
 * <th>Option</th>
 * <th>Set <code class="parameter">value</code> to</th>
 * <th>Notes</th>
 * </tr>
 * </thead>
 *
 * <tbody class="tbody">
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_CAINFO</b></td>
 * <td style="vertical-align: top;">
 * The name of a file holding one or more certificates to verify the
 * peer with. This only makes sense when used in combination with
 * <b>CURLOPT_SSL_VERIFYPEER</b>.
 * </td>
 * <td style="vertical-align: top;">
 * Might require an absolute path.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_CAPATH</b></td>
 * <td style="vertical-align: top;">
 * A directory that holds multiple CA certificates. Use this option
 * alongside <b>CURLOPT_SSL_VERIFYPEER</b>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_COOKIE</b></td>
 * <td style="vertical-align: top;">
 * The contents of the <em>"Cookie: "</em> header to be
 * used in the HTTP request.
 * Note that multiple cookies are separated with a semicolon followed
 * by a space (e.g., "<em>fruit=apple; colour=red</em>")
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_COOKIEFILE</b></td>
 * <td style="vertical-align: top;">
 * The name of the file containing the cookie data. The cookie file can
 * be in Netscape format, or just plain HTTP-style headers dumped into
 * a file.
 * If the name is an empty string, no cookies are loaded, but cookie
 * handling is still enabled.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_COOKIEJAR</b></td>
 * <td style="vertical-align: top;">
 * The name of a file to save all internal cookies to when the handle is closed,
 * e.g. after a call to curl_close.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_CUSTOMREQUEST</b></td>
 * <td style="vertical-align: top;"><p class="para">
 * A custom request method to use instead of
 * <em>"GET"</em> or <em>"HEAD"</em> when doing
 * a HTTP request. This is useful for doing
 * <em>"DELETE"</em> or other, more obscure HTTP requests.
 * Valid values are things like <em>"GET"</em>,
 * <em>"POST"</em>, <em>"CONNECT"</em> and so on;
 * i.e. Do not enter a whole HTTP request line here. For instance,
 * entering <em>"GET /index.html HTTP/1.0\r\n\r\n"</em>
 * would be incorrect.
 * </p><blockquote class="note"><p><strong class="note">Note</strong>:
 * </p><p class="para">
 * Don't do this without making sure the server supports the custom
 * request method first.
 * </p>
 * </blockquote>
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_EGDSOCKET</b></td>
 * <td style="vertical-align: top;">
 * Like <b>CURLOPT_RANDOM_FILE</b>, except a filename
 * to an Entropy Gathering Daemon socket.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_ENCODING</b></td>
 * <td style="vertical-align: top;">
 * The contents of the <em>"Accept-Encoding: "</em> header.
 * This enables decoding of the response. Supported encodings are
 * <em>"identity"</em>, <em>"deflate"</em>, and
 * <em>"gzip"</em>. If an empty string, <em>""</em>,
 * is set, a header containing all supported encoding types is sent.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.10.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FTPPORT</b></td>
 * <td style="vertical-align: top;">
 * The value which will be used to get the IP address to use
 * for the FTP "PORT" instruction. The "PORT" instruction tells
 * the remote server to connect to our specified IP address.  The
 * string may be a plain IP address, a hostname, a network
 * interface name (under Unix), or just a plain '-' to use the
 * systems default IP address.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_INTERFACE</b></td>
 * <td style="vertical-align: top;">
 * The name of the outgoing network interface to use. This can be an
 * interface name, an IP address or a host name.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_KEYPASSWD</b></td>
 * <td style="vertical-align: top;">
 * The password required to use the <b>CURLOPT_SSLKEY</b>
 * or <b>CURLOPT_SSH_PRIVATE_KEYFILE</b> private key.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.16.1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_KRB4LEVEL</b></td>
 * <td style="vertical-align: top;">
 * The KRB4 (Kerberos 4) security level. Any of the following values
 * (in order from least to most powerful) are valid:
 * <em>"clear"</em>,
 * <em>"safe"</em>,
 * <em>"confidential"</em>,
 * <em>"private".</em>.
 * If the string does not match one of these,
 * <em>"private"</em> is used. Setting this option to <b>NULL</b>
 * will disable KRB4 security. Currently KRB4 security only works
 * with FTP transactions.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_POSTFIELDS</b></td>
 * <td style="vertical-align: top;">
 * <span class="simpara">
 * The full data to post in a HTTP "POST" operation.
 * To post a file, prepend a filename with <em>@</em> and
 * use the full path. The filetype can be explicitly specified by
 * following the filename with the type in the format
 * '<em>;type=mimetype</em>'. This parameter can either be
 * passed as a urlencoded string like '<em>para1=val1&amp;para2=val2&amp;...</em>'
 * or as an array with the field name as key and field data as value.
 * If <code class="parameter">value</code> is an array, the
 * <em>Content-Type</em> header will be set to
 * <em>multipart/form-data</em>.
 * </span>
 * <span class="simpara">
 * As of PHP 5.2.0, <code class="parameter">value</code> must be an array if
 * files are passed to this option with the <em>@</em> prefix.
 * </span>
 * <span class="simpara">
 * As of PHP 5.5.0, the <em>@</em> prefix is deprecated and
 * files can be sent using <a href="class.curlfile.php" class="classname">CURLFile</a>. The
 * <em>@</em> prefix can be disabled for safe passing of
 * values beginning with <em>@</em> by setting the
 * <b>CURLOPT_SAFE_UPLOAD</code></strong> option to <strong><code>TRUE</b>.
 * </span>
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PROXY</b></td>
 * <td style="vertical-align: top;">
 * The HTTP proxy to tunnel requests through.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PROXYUSERPWD</b></td>
 * <td style="vertical-align: top;">
 * A username and password formatted as
 * <em>"[username]:[password]"</em> to use for the
 * connection to the proxy.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_RANDOM_FILE</b></td>
 * <td style="vertical-align: top;">
 * A filename to be used to seed the random number generator for SSL.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_RANGE</b></td>
 * <td style="vertical-align: top;">
 * Range(s) of data to retrieve in the format
 * <em>"X-Y"</em> where X or Y are optional. HTTP transfers
 * also support several intervals, separated with commas in the format
 * <em>"X-Y,N-M"</em>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_REFERER</b></td>
 * <td style="vertical-align: top;">
 * The contents of the <em>"Referer: "</em> header to be used
 * in a HTTP request.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSH_HOST_PUBLIC_KEY_MD5</b></td>
 * <td style="vertical-align: top;">
 * A string containing 32 hexadecimal digits. The string should be the
 * MD5 checksum of the remote host's public key, and libcurl will reject
 * the connection to the host unless the md5sums match.
 * This option is only for SCP and SFTP transfers.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.17.1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSH_PUBLIC_KEYFILE</b></td>
 * <td style="vertical-align: top;">
 * The file name for your public key. If not used, libcurl defaults to
 * $HOME/.ssh/id_dsa.pub if the HOME environment variable is set,
 * and just "id_dsa.pub" in the current directory if HOME is not set.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.16.1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSH_PRIVATE_KEYFILE</b></td>
 * <td style="vertical-align: top;">
 * The file name for your private key. If not used, libcurl defaults to
 * $HOME/.ssh/id_dsa if the HOME environment variable is set,
 * and just "id_dsa" in the current directory if HOME is not set.
 * If the file is password-protected, set the password with
 * <b>CURLOPT_KEYPASSWD</b>.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.16.1.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSL_CIPHER_LIST</b></td>
 * <td style="vertical-align: top;">
 * A list of ciphers to use for SSL. For example,
 * <em>RC4-SHA</em> and <em>TLSv1</em> are valid
 * cipher lists.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLCERT</b></td>
 * <td style="vertical-align: top;">
 * The name of a file containing a PEM formatted certificate.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLCERTPASSWD</b></td>
 * <td style="vertical-align: top;">
 * The password required to use the
 * <b>CURLOPT_SSLCERT</b> certificate.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLCERTTYPE</b></td>
 * <td style="vertical-align: top;">
 * The format of the certificate. Supported formats are
 * <em>"PEM"</em> (default), <em>"DER"</em>,
 * and <em>"ENG"</em>.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.9.3.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLENGINE</b></td>
 * <td style="vertical-align: top;">
 * The identifier for the crypto engine of the private SSL key
 * specified in <b>CURLOPT_SSLKEY</b>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLENGINE_DEFAULT</b></td>
 * <td style="vertical-align: top;">
 * The identifier for the crypto engine used for asymmetric crypto
 * operations.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLKEY</b></td>
 * <td style="vertical-align: top;">
 * The name of a file containing a private SSL key.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLKEYPASSWD</b></td>
 * <td style="vertical-align: top;"><p class="para">
 * The secret password needed to use the private SSL key specified in
 * <b>CURLOPT_SSLKEY</b>.
 * </p><blockquote class="note"><p><strong class="note">Note</strong>:
 * </p><p class="para">
 * Since this option contains a sensitive password, remember to keep
 * the PHP script it is contained within safe.
 * </p>
 * </blockquote>
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SSLKEYTYPE</b></td>
 * <td style="vertical-align: top;">
 * The key type of the private SSL key specified in
 * <b>CURLOPT_SSLKEY</b>. Supported key types are
 * <em>"PEM"</em> (default), <em>"DER"</em>,
 * and <em>"ENG"</em>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_URL</b></td>
 * <td style="vertical-align: top;">
 * The URL to fetch. This can also be set when initializing a
 * session with <span class="function"><a href="function.curl-init.php" class="function">curl_init()</a></span>.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_USERAGENT</b></td>
 * <td style="vertical-align: top;">
 * The contents of the <em>"User-Agent: "</em> header to be
 * used in a HTTP request.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_USERPWD</b></td>
 * <td style="vertical-align: top;">
 * A username and password formatted as
 * <em>"[username]:[password]"</em> to use for the
 * connection.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 * </tbody>
 *
 * </table>
 * <p>
 * value should be an array for the following values of the option parameter:</p>
 * <table class="doctable informaltable">
 *
 * <thead>
 * <tr>
 * <th>Option</th>
 * <th>Set <code class="parameter">value</code> to</th>
 * <th>Notes</th>
 * </tr>
 * </thead>
 *
 * <tbody class="tbody">
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_HTTP200ALIASES</b></td>
 * <td style="vertical-align: top;">
 * An array of HTTP 200 responses that will be treated as valid
 * responses and not as errors.
 * </td>
 * <td style="vertical-align: top;">
 * Added in cURL 7.10.3.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_HTTPHEADER</b></td>
 * <td style="vertical-align: top;">
 * An array of HTTP header fields to set, in the format
 * <code class="code">
 * array('Content-type: text/plain', 'Content-length: 100')
 * </code>
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_POSTQUOTE</b></td>
 * <td style="vertical-align: top;">
 * An array of FTP commands to execute on the server after the FTP
 * request has been performed.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_QUOTE</b></td>
 * <td style="vertical-align: top;">
 * An array of FTP commands to execute on the server prior to the FTP
 * request.
 * </td>
 * <td style="vertical-align: top;">
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 * value should be a stream resource (using {@see fopen()}, for example) for the following values of the option parameter:
 * <table class="doctable informaltable">
 *
 * <thead>
 * <tr>
 * <th>Option</th>
 * <th>Set <code class="parameter">value</code> to</th>
 * </tr>
 * </thead>
 *
 * <tbody class="tbody">
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_FILE</b></td>
 * <td style="vertical-align: top;">
 * The file that the transfer should be written to. The default
 * is <em>STDOUT</em> (the browser window).
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_INFILE</b></td>
 * <td style="vertical-align: top;">
 * The file that the transfer should be read from when uploading.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_STDERR</b></td>
 * <td style="vertical-align: top;">
 * An alternative location to output errors to instead of
 * <em>STDERR</em>.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_WRITEHEADER</b></td>
 * <td style="vertical-align: top;">
 * The file that the header part of the transfer is written to.
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 *  value should be the name of a valid function or a Closure for the following values of the option parameter:
 * <table class="doctable informaltable">
 *
 * <thead>
 * <tr>
 * <th>Option</th>
 * <th>Set <code class="parameter">value</code> to</th>
 * </tr>
 * </thead>
 *
 * <tbody class="tbody">
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_HEADERFUNCTION</b></td>
 * <td style="vertical-align: top;">
 * A callback accepting two parameters.
 * The first is the cURL resource, the second is a
 * string with the header data to be written. The header data must
 * be written by this callback. Return the number of
 * bytes written.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PASSWDFUNCTION</b></td>
 * <td style="vertical-align: top;">
 * A callback accepting three parameters.
 * The first is the cURL resource, the second is a
 * string containing a password prompt, and the third is the maximum
 * password length. Return the string containing the password.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_PROGRESSFUNCTION</b></td>
 * <td style="vertical-align: top;">
 * <p>
 * A callback accepting five parameters.
 * The first is the cURL resource, the second is the total number of
 * bytes expected to be downloaded in this transfer, the third is
 * the number of bytes downloaded so far, the fourth is the total
 * number of bytes expected to be uploaded in this transfer, and the
 * fifth is the number of bytes uploaded so far.
 * </p>
 * <blockquote class="note"><p><strong class="note">Note</strong>:
 * </p><p class="para">
 * The callback is only called when the <b>CURLOPT_NOPROGRESS</b>
 * option is set to <b>FALSE</b>.
 * </p>
 * </blockquote>
 * <p>
 * Return a non-zero value to abort the transfer. In which case, the
 * transfer will set a <b>CURLE_ABORTED_BY_CALLBACK</b>
 * error.
 * </p>
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_READFUNCTION</b></td>
 * <td style="vertical-align: top;">
 * A callback accepting three parameters.
 * The first is the cURL resource, the second is a
 * stream resource provided to cURL through the option
 * <b>CURLOPT_INFILE</b>, and the third is the maximum
 * amount of data to be read. The callback must return a string
 * with a length equal or smaller than the amount of data requested,
 * typically by reading it from the passed stream resource. It should
 * return an empty string to signal <em>EOF</em>.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_WRITEFUNCTION</b></td>
 * <td style="vertical-align: top;">
 * A callback accepting two parameters.
 * The first is the cURL resource, and the second is a
 * string with the data to be written. The data must be saved by
 * this callback. It must return the exact number of bytes written
 * or the transfer will be aborted with an error.
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 * Other values:
 * <table class="doctable informaltable">
 *
 * <thead>
 * <tr>
 * <th>Option</th>
 * <th>Set <code class="parameter">value</code> to</th>
 * </tr>
 * </thead>
 *
 * <tbody class="tbody">
 * <tr>
 * <td style="vertical-align: top;"><b>CURLOPT_SHARE</b></td>
 * <td style="vertical-align: top;">
 * A result of <span class="function">{@see curl_share_init()}</span>. Makes the cURL
 * handle to use the data from the shared handle.
 * </td>
 * </tr>
 * </tbody>
 *
 * </table>
 * @return bool true on success or false on failure.
 */
function curl_setopt(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle, int $option, mixed $value): bool {}

/**
 * <div id="function.curl-setopt-array" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_setopt_array</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.3, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_setopt_array</span> — <span class="dc-title">为 cURL 传输会话批量设置选项</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-setopt-array-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_setopt_array</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   为 cURL 传输会话批量设置选项。这个函数对于需要设置大量的 cURL 选项是非常有用的，不需要重复地调用 <span class="function">{@link curl_setopt()}</span>。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-setopt-array-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>         <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">       一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 用来确定将被设置的选项及其值。数组的键值必须是有效的 <span class="function">{@link curl_setopt()}</span> 常量或者是它们对等的整数值。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-setopt-array-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果全部的选项都被成功设置，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>。如果选项不能被成功设置，马上返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，忽略其后的任何在 <span class="parameter" style="color:#3A95FF">options</span> 数组中的选项。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-setopt-array-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-setopt-array-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4472">    <p><strong>示例 #1      初始化新的 cURL 会话并抓取 web 页面    </strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建新 cURL 资源<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// 设置 URL 和相应的选项<br></span><span style="color: #9876AA">\$options </span><span style="color: #007700">= array(</span><span style="color: #9876AA">CURLOPT_URL </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'http://www.example.com/'</span><span style="color: #007700">,<br>                 </span><span style="color: #9876AA">CURLOPT_HEADER </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">false<br>                </span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">curl_setopt_array</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">\$options</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 抓取 URL 并把它传递给浏览器<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 关闭 cURL 资源，并且释放系统资源<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.curl-setopt-array-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    就 <span class="function">{@link curl_setopt()}</span> 来说，传递数组到 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-post">CURLOPT_POST</a></span></strong> 将会把数据以    <em>multipart/form-data</em> 的方式编码，然而传递 URL-encoded 字符串将会以    <em>application/x-www-form-urlencoded</em> 的方式对数据进行编码。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.curl-setopt-array-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_setopt()} - 设置 cURL 传输选项</span></li>   </ul>   </div></div>
 * 
 * Set multiple options for a cURL transfer
 * @link https://php.net/manual/zh/function.curl-setopt-array.php
 * @param CurlHandle|resource $handle
 * @param array $options <p>
 * An array specifying which options to set and their values.
 * The keys should be valid curl_setopt constants or
 * their integer equivalents.
 * </p>
 * @return bool true if all options were successfully set. If an option could
 * not be successfully set, false is immediately returned, ignoring any
 * future options in the options array.
 * @since 5.1.3
 */
function curl_setopt_array(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle, array $options): bool {}

/**
 * <div id="function.curl-share-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_share_close</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_share_close</span> — <span class="dc-title">关闭 cURL 共享句柄</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-share-close-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_share_close</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlsharehandle.php" class="type CurlShareHandle" style="color:#EAB766">CurlShareHandle</a></span> <span class="parameter" style="color:#3A95FF">\$share_handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:  </p><p class="para">  此函数无效。在 PHP 8.0.0 之前，用于关闭资源。 </p></blockquote>  <p class="para">   关闭 cURL 共享句柄并且释放所有的资源。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-share-close-parameters">  <h3 class="title">参数</h3>  <dl>   <dt><span class="parameter" style="color:#3A95FF">share_handle</span></dt><dd><p class="para">A cURL share handle returned by<span class="function">{@link curl_share_init()}</span>.</p></dd>  </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-share-close-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div>  <div class="refsect1 changelog" id="refsect1-function.curl-share-close-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">share_handle</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.curlsharehandle.php" class="classname">CurlShareHandle</a></span>  instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected. </td></tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-share-close-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4473">    <p><strong>示例 #1 <span class="function">{@link curl_share_setopt()}</span> 示例</strong></p>    <div class="example-contents"><p>     以下示例将会创建 cURL 共享句柄，并且往其中添加两个 cURL 句柄，最后共享这两个 cURL 句柄的 cookie 数据运行。    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// Create cURL share handle and set it to share cookie data<br></span><span style="color: #9876AA">\$sh </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_share_init</span><span style="color: #007700">();<br></span><span style="color: #9876AA">curl_share_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$sh</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLSHOPT_SHARE</span><span style="color: #007700">, </span><span style="color: #9876AA">CURL_LOCK_DATA_COOKIE</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Initialize the first cURL handle and assign the share handle to it<br></span><span style="color: #9876AA">\$ch1 </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://example.com/"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch1</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_SHARE</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sh</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Execute the first cURL handle<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch1</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Initialize the second cURL handle and assign the share handle to it<br></span><span style="color: #9876AA">\$ch2 </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://php.net/"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch2</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_SHARE</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sh</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Execute the second cURL handle<br>//  all cookies from \$ch1 handle are shared with \$ch2 handle<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch2</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Close the cURL share handle<br></span><span style="color: #9876AA">curl_share_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$sh</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Close the cURL handles<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch1</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch2</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.curl-share-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_share_init()} - 初始化 cURL 共享句柄</span></li>   </ul>   </div></div>
 * 
 * (PHP 5 &gt;=5.5.0)<br/>
 * Close a cURL share handle
 * @link https://secure.php.net/manual/en/function.curl-share-close.php
 * @param CurlShareHandle|resource $share_handle <p>
 * A cURL share handle returned by  {@link https://secure.php.net/manual/en/function.curl-share-init.php curl_share_init()}
 * </p>
 * @return void
 * @since 5.5
 */
function curl_share_close(#[LanguageLevelTypeAware(['8.0' => 'CurlShareHandle'], default: 'resource')] $share_handle): void {}

/**
 * <div id="function.curl-share-init" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_share_init</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_share_init</span> — <span class="dc-title">初始化 cURL 共享句柄</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-share-init-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_share_init</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlsharehandle.php" class="type CurlShareHandle" style="color:#EAB766">CurlShareHandle</a></span></div>  <p class="para rdfs-comment">   允许在 cURL 句柄之间共享数据。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-share-init-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-share-init-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回 cURL 共享句柄。  </p> </div>  <div class="refsect1 changelog" id="refsect1-function.curl-share-init-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       此函数现在返回 <span class="classname"><a href="https://php.net/manual/zh/class.curlsharehandle.php" class="classname">CurlShareHandle</a></span> 实例，之前返回 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-share-init-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4474">    <p><strong>示例 #1 <span class="function"><strong>curl_share_init()</strong></span> 示例</strong></p>    <div class="example-contents"><p>     以下示例将会创建 cURL 共享句柄，并且往其中添加两个 cURL 句柄，最后用共享的 cookie 数据运行它们。    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建 cURL 共享句柄，并设置共享 cookie 数据<br></span><span style="color: #9876AA">\$sh </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_share_init</span><span style="color: #007700">();<br></span><span style="color: #9876AA">curl_share_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$sh</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLSHOPT_SHARE</span><span style="color: #007700">, </span><span style="color: #9876AA">CURL_LOCK_DATA_COOKIE</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 初始化第一个 cURL 句柄，并将它设置到共享句柄<br></span><span style="color: #9876AA">\$ch1 </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://example.com/"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch1</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_SHARE</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sh</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 执行第一个 cURL 句柄<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch1</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 初始化第二个 cURL 句柄，并将它设置到共享句柄<br></span><span style="color: #9876AA">\$ch2 </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://php.net/"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch2</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_SHARE</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sh</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 执行第二个 cURL 句柄<br>//  all cookies from \$ch1 handle are shared with \$ch2 handle<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch2</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 关闭 cURL 共享句柄<br></span><span style="color: #9876AA">curl_share_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$sh</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 关闭 cURL 共享句柄<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch1</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch2</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.curl-share-init-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_share_setopt()} - 为 cURL 共享句柄设置选项</span></li>    <li><span class="function">{@link curl_share_close()} - 关闭 cURL 共享句柄</span></li>    <li><span class="function">{@link curl_share_init_persistent()} - Initialize a persistent cURL share handle</span></li>   </ul>   </div></div>
 * 
 * (PHP 5 &gt;=5.5.0)<br/>
 * Initialize a cURL share handle
 * @link https://secure.php.net/manual/en/function.curl-share-init.php
 * @return resource|CurlShareHandle Returns resource of type "cURL Share Handle".
 * @since 5.5
 */
#[LanguageLevelTypeAware(['8.0' => 'CurlShareHandle'], default: 'resource')]
function curl_share_init() {}

/**
 * <div id="function.curl-share-setopt" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_share_setopt</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_share_setopt</span> — <span class="dc-title">为 cURL 共享句柄设置选项</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-share-setopt-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_share_setopt</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlsharehandle.php" class="type CurlShareHandle" style="color:#EAB766">CurlShareHandle</a></span> <span class="parameter" style="color:#3A95FF">\$share_handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$option</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   为指定的 cURL 共享句柄设置选项。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-share-setopt-parameters">  <h3 class="title">参数</h3>  <dl>   <dt><span class="parameter" style="color:#3A95FF">share_handle</span></dt><dd><p class="para">A cURL share handle returned by<span class="function">{@link curl_share_init()}</span>.</p></dd>       <dt><span class="parameter" style="color:#3A95FF">option</span></dt>    <dd>     <p class="para">      <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlshopt-none">CURLSHOPT_<span class="replaceable">*</span></a></span></strong> 常量之一。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">value</span></dt>    <dd>     <p class="para">      <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curl-lock-data-connect">CURL_LOCK_DATA_<span class="replaceable">*</span></a></span></strong> 常量之一。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-share-setopt-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-share-setopt-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">share_handle</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.curlsharehandle.php" class="classname">CurlShareHandle</a></span>  instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected. </td></tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-share-setopt-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4476">    <p><strong>示例 #1 <span class="function"><strong>curl_share_setopt()</strong></span> 示例</strong></p>    <div class="example-contents"><p>     以下示例将会创建 cURL 共享句柄，并且往其中添加两个 cURL 句柄，最后共享这两个 cURL 句柄的 cookie 数据运行。    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// Create cURL share handle and set it to share cookie data<br></span><span style="color: #9876AA">\$sh </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_share_init</span><span style="color: #007700">();<br></span><span style="color: #9876AA">curl_share_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$sh</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLSHOPT_SHARE</span><span style="color: #007700">, </span><span style="color: #9876AA">CURL_LOCK_DATA_COOKIE</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Initialize the first cURL handle and assign the share handle to it<br></span><span style="color: #9876AA">\$ch1 </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://example.com/"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch1</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_SHARE</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sh</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Execute the first cURL handle<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch1</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Initialize the second cURL handle and assign the share handle to it<br></span><span style="color: #9876AA">\$ch2 </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">"http://php.net/"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch2</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_SHARE</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sh</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Execute the second cURL handle<br>//  all cookies from \$ch1 handle are shared with \$ch2 handle<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch2</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Close the cURL share handle<br></span><span style="color: #9876AA">curl_share_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$sh</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Close the cURL handles<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch1</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch2</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div></div>
 * 
 * (PHP 5 &gt;=5.5.0)<br/>
 * Set an option for a cURL share handle.
 * @link https://secure.php.net/manual/en/function.curl-share-setopt.php
 * @param CurlShareHandle|resource $share_handle <p>
 * A cURL share handle returned by  {@link https://secure.php.net/manual/en/function.curl-share-init.php curl_share_init()}.
 * </p>
 * @param int $option <table>
 *
 * <thead>
 * <tr>
 * <th>Option</th>
 * <th>Description</th>
 * </tr>
 * </thead>
 *
 * <tbody>
 * <tr>
 * <td style="vertical-align: top;"><b>CURLSHOPT_SHARE</b></td>
 * <td style="vertical-align: top;">
 * Specifies a type of data that should be shared.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLSHOPT_UNSHARE</b></td>
 * <td style="vertical-align: top;">
 * Specifies a type of data that will be no longer shared.
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 * @param string $value <p><table>
 *
 * <thead>
 * <tr>
 * <th>Value</th>
 * <th>Description</th>
 * </tr>
 * </thead>
 *
 * <tbody class="tbody">
 * <tr>
 * <td style="vertical-align: top;"><b>CURL_LOCK_DATA_COOKIE</b></td>
 * <td style="vertical-align: top;">
 * Shares cookie data.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURL_LOCK_DATA_DNS</b></td>
 * <td style="vertical-align: top;">
 * Shares DNS cache. Note that when you use cURL multi handles,
 * all handles added to the same multi handle will share DNS cache
 * by default.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURL_LOCK_DATA_SSL_SESSION</b></td>
 * <td style="vertical-align: top;">
 * Shares SSL session IDs, reducing the time spent on the SSL
 * handshake when reconnecting to the same server. Note that SSL
 * session IDs are reused within the same handle by default.
 * </td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 * </p>
 * @return bool
 * Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @since 5.5
 */
function curl_share_setopt(#[LanguageLevelTypeAware(['8.0' => 'CurlShareHandle'], default: 'resource')] $share_handle, int $option, mixed $value): bool {}

/**
 * <div id="function.curl-strerror" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_strerror</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_strerror</span> — <span class="dc-title">返回错误代码的字符串描述</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-strerror-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_strerror</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$error_code</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span></div>  <p class="para rdfs-comment">   返回指定错误代码的文本错误信息描述。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-strerror-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">error_code</span></dt>    <dd>     <p class="para">      <a href="http://curl.haxx.se/libcurl/c/libcurl-errors.html" class="link external">»&nbsp;cURL 错误代码</a>中的常量之一。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-strerror-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回错误信息描述，无效的错误代码返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.curl-strerror-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4477">    <p><strong>示例 #1 <span class="function">{@link curl_errno()}</span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 以错拼的 URL 协议创建 curl 句柄<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">"htp://example.com/"</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 发送请求<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 检测错误，显示错误信息<br></span><span style="color: #007700">if(</span><span style="color: #9876AA">\$errno </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_errno</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">)) {<br>    </span><span style="color: #9876AA">\$error_message </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">\$errno</span><span style="color: #007700">);<br>    echo </span><span style="color: #DD0000">"cURL error (</span><span style="color: #007700">{</span><span style="color: #9876AA">\$errno</span><span style="color: #007700">}</span><span style="color: #DD0000">):\n </span><span style="color: #007700">{</span><span style="color: #9876AA">\$error_message</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #FF8000">// 关闭句柄<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">cURL&nbsp;error&nbsp;(1):<br>&nbsp;Unsupported&nbsp;protocol</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.curl-strerror-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_errno()} - 返回最后一次的错误代码</span></li>    <li><span class="function">{@link curl_error()} - 返回当前会话最后一次错误的字符串</span></li>    <li><a href="http://curl.haxx.se/libcurl/c/libcurl-errors.html" class="link external">»&nbsp;Curl 错误代码</a></li>   </ul>   </div></div>
 * 
 * (PHP 5 &gt;=5.5.0)<br/>
 * Return string describing the given error code
 * @link https://secure.php.net/manual/en/function.curl-strerror.php
 * @param int $error_code <p>
 * One of the {@link https://curl.haxx.se/libcurl/c/libcurl-errors.html &nbsp;cURL error codes} constants.
 * </p>
 * @return string|null Returns error description or <b>NULL</b> for invalid error code.
 * @since 5.5
 */
#[Pure]
function curl_strerror(int $error_code): ?string {}

/**
 * <div id="function.curl-unescape" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_unescape</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_unescape</span> — <span class="dc-title">解码指定 URL 编码的字符串</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-unescape-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_unescape</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$string</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   该函数解码指定 URL 编码的字符串。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-unescape-parameters">  <h3 class="title">参数</h3>  <dl>   <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>       <dt><span class="parameter" style="color:#3A95FF">string</span></dt>    <dd>     <p class="para">      需要解码的 URL 编码字符串。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-unescape-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回解码后的字符串 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-unescape-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-unescape-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4478">    <p><strong>示例 #1 <span class="function">{@link curl_escape()}</span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建 curl 句柄<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://example.com/redirect.php'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 发送 HTTP 请求并且遵循重定向<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_FOLLOWLOCATION</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 获取最后的有效 URL<br></span><span style="color: #9876AA">\$effective_url </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_getinfo</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLINFO_EFFECTIVE_URL</span><span style="color: #007700">);<br></span><span style="color: #FF8000">// 结果： "http://example.com/show_location.php?loc=M%C3%BCnchen"<br><br>// 解码这个 URL<br></span><span style="color: #9876AA">\$effective_url_decoded </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_unescape</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">\$effective_url</span><span style="color: #007700">);<br></span><span style="color: #FF8000">// "http://example.com/show_location.php?loc=München"<br><br>// 关闭句柄<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.curl-unescape-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    <span class="function"><strong>curl_unescape()</strong></span> 不会将加号 (+) 解码成空格。而 <span class="function">{@link urldecode()}</span> 会。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.curl-unescape-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_escape()} - 使用 URL 编码给定的字符串</span></li>    <li><span class="function">{@link urlencode()} - 编码 URL 字符串</span></li>    <li><span class="function">{@link urldecode()} - 解码已编码的 URL 字符串</span></li>    <li><span class="function">{@link rawurlencode()} - 按照 RFC 3986 对 URL 进行编码</span></li>    <li><span class="function">{@link rawurldecode()} - 对已编码的 URL 字符串进行解码</span></li>   </ul>   </div></div>
 * 
 * (PHP 5 &gt;=5.5.0)<br/>
 * Decodes the given URL encoded string
 * @link https://secure.php.net/manual/en/function.curl-unescape.php
 * @param CurlHandle|resource $handle <p>A cURL handle returned by
 * {@link https://secure.php.net/manual/en/function.curl-init.php curl_init()}.</p>
 * @param string $string <p>
 * The URL encoded string to be decoded.
 * </p>
 * @return string|false Returns decoded string or FALSE on failure.
 * @since 5.5
 */
#[Pure]
function curl_unescape(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle, string $string): string|false {}

/**
 * <div id="function.curl-exec" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_exec</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_exec</span> — <span class="dc-title">执行 cURL 会话</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-exec-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_exec</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></span></div>  <p class="para rdfs-comment">   执行指定 cURL 会话。  </p>  <p class="para">   这个函数应该在初始化 cURL 会话并且设置所有选项后调用。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-exec-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>   </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-exec-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时，函数会将结果直接冲刷到 <span class="literal">stdout</span> 并返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。然而，如果{@link 设置}了 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-returntransfer">CURLOPT_RETURNTRANSFER</a></span></strong>   选项，将会在成功时返回结果，失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数可能返回布尔值<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，但也可能返回等同于 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 的非布尔值。请阅读 <a href="https://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用<a href="https://php.net/manual/zh/language.operators.comparison.php" class="link">===运算符</a>来测试此函数的返回值。</p></div>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    注意：指示错误的响应状态码（例如 <span class="literal">404    Not found</span>）不会视为失败。这种情况可以使用 <span class="function">{@link curl_getinfo()}</span> 来检查。   </p>  </blockquote> </div>    <div class="refsect1 changelog" id="refsect1-function.curl-exec-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-exec-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4465">    <p><strong>示例 #1 获取网页</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建新的 cURL 资源<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// 设置 URL 和相应的选项<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_URL</span><span style="color: #007700">, </span><span style="color: #DD0000">"http://www.example.com/"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_HEADER</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 抓取 URL 并把它传递给浏览器<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 关闭 cURL 资源，并且释放系统资源<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.curl-exec-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_multi_exec()} - 运行当前 cURL 句柄的子连接</span></li>   </ul>   </div></div>
 * 
 * Perform a cURL session
 * @link https://php.net/manual/zh/function.curl-exec.php
 * @param CurlHandle|resource $handle
 * @return string|bool true on success or false on failure. However, if the CURLOPT_RETURNTRANSFER
 * option is set, it will return the result on success, false on failure.
 */
function curl_exec(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle): string|bool {}

/**
 * <div id="function.curl-getinfo" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_getinfo</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_getinfo</span> — <span class="dc-title">获取一个cURL连接资源句柄的信息</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-getinfo-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_getinfo</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">\$option</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   获取最后一次传输的相关信息。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-getinfo-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>         <dt><span class="parameter" style="color:#3A95FF">option</span></dt>     <dd>      <p class="para">       <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-text">CURLINFO_<span class="replaceable">*</span></a></span></strong> 常量之一。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-getinfo-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果指定 <span class="parameter" style="color:#3A95FF">option</span>，将返回它的值。否则将返回包含下列元素的关联数组（分别对应 <span class="parameter" style="color:#3A95FF">option</span>），失败时为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>：   </p><ul class="itemizedlist">    <li class="listitem">     <span class="simpara">      "url"     </span>    </li>    <li class="listitem">     <span class="simpara">      "content_type"     </span>    </li>    <li class="listitem">     <span class="simpara">      "http_code"     </span>    </li>    <li class="listitem">     <span class="simpara">      "header_size"     </span>    </li>    <li class="listitem">     <span class="simpara">      "request_size"     </span>    </li>    <li class="listitem">     <span class="simpara">      "filetime"     </span>    </li>    <li class="listitem">     <span class="simpara">      "ssl_verify_result"     </span>    </li>    <li class="listitem">     <span class="simpara">      "redirect_count"     </span>    </li>    <li class="listitem">     <span class="simpara">      "total_time"     </span>    </li>    <li class="listitem">     <span class="simpara">      "namelookup_time"     </span>    </li>    <li class="listitem">     <span class="simpara">      "connect_time"     </span>    </li>    <li class="listitem">     <span class="simpara">      "pretransfer_time"     </span>    </li>    <li class="listitem">     <span class="simpara">      "size_upload"     </span>    </li>    <li class="listitem">     <span class="simpara">      "size_download"     </span>    </li>    <li class="listitem">     <span class="simpara">      "speed_download"     </span>    </li>    <li class="listitem">     <span class="simpara">      "speed_upload"     </span>    </li>    <li class="listitem">     <span class="simpara">      "download_content_length"     </span>    </li>    <li class="listitem">     <span class="simpara">      "upload_content_length"     </span>    </li>    <li class="listitem">     <span class="simpara">      "starttransfer_time"     </span>    </li>    <li class="listitem">     <span class="simpara">      "redirect_time"     </span>    </li>    <li class="listitem">     <span class="simpara">      "certinfo"     </span>    </li>    <li class="listitem">     <span class="simpara">      "primary_ip"     </span>    </li>    <li class="listitem">     <span class="simpara">      "primary_port"     </span>    </li>    <li class="listitem">     <span class="simpara">      "local_ip"     </span>    </li>    <li class="listitem">     <span class="simpara">      "local_port"     </span>    </li>    <li class="listitem">     <span class="simpara">      "redirect_url"     </span>    </li>    <li class="listitem">     <span class="simpara">      "request_header"（只有在之前调用 <span class="function">{@link curl_setopt()}</span> 设置 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-header-out">CURLINFO_HEADER_OUT</a></span></strong> 后才会设置）     </span>    </li>    <li class="listitem">     <span class="simpara">      "posttransfer_time_us"（自 PHP 8.4.0 和 cURL 8.10.0 起可用）     </span>    </li>   </ul>   注意，私有数据不包含在关联数组中，必须使用 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-private">CURLINFO_PRIVATE</a></span></strong> 选项单独检索。   </div> <div class="refsect1 changelog" id="refsect1-function.curl-getinfo-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.4.0</td>       <td>        引入 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-posttransfer-time-t">CURLINFO_POSTTRANSFER_TIME_T</a></span></strong> 常量和 <span class="literal">posttransfer_time_us</span>（Curl 8.10.0 或更高版本）。       </td>      </tr>      <tr>       <td>8.3.0</td>       <td>        引入 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-cainfo">CURLINFO_CAINFO</a></span></strong> 和 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-capath">CURLINFO_CAPATH</a></span></strong>。       </td>      </tr>      <tr>       <td>8.2.0</td>       <td>        引入 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-proxy-error">CURLINFO_PROXY_ERROR</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-referer">CURLINFO_REFERER</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-retry-after">CURLINFO_RETRY_AFTER</a></span></strong>。       </td>      </tr>      <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>      <tr>       <td>8.0.0</td>       <td>        <span class="parameter" style="color:#3A95FF">option</span> 现在可为 null；之前默认值是 <span class="literal">0</span>。       </td>      </tr>      <tr>       <td>7.3.0</td>       <td>        引入 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-content-length-download-t">CURLINFO_CONTENT_LENGTH_DOWNLOAD_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-content-length-upload-t">CURLINFO_CONTENT_LENGTH_UPLOAD_T</a></span></strong>、 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-http-version">CURLINFO_HTTP_VERSION</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-protocol">CURLINFO_PROTOCOL</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-proxy-ssl-verifyresult">CURLINFO_PROXY_SSL_VERIFYRESULT</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-scheme">CURLINFO_SCHEME</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-size-download-t">CURLINFO_SIZE_DOWNLOAD_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-size-upload-t">CURLINFO_SIZE_UPLOAD_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-speed-download-t">CURLINFO_SPEED_DOWNLOAD_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-speed-upload-t">CURLINFO_SPEED_UPLOAD_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-appconnect-time-t">CURLINFO_APPCONNECT_TIME_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-connect-time-t">CURLINFO_CONNECT_TIME_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-filetime-t">CURLINFO_FILETIME_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-namelookup-time-t">CURLINFO_NAMELOOKUP_TIME_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-pretransfer-time-t">CURLINFO_PRETRANSFER_TIME_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-redirect-time-t">CURLINFO_REDIRECT_TIME_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-starttransfer-time-t">CURLINFO_STARTTRANSFER_TIME_T</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlinfo-total-time-t">CURLINFO_TOTAL_TIME_T</a></span></strong>。       </td>      </tr>     </tbody>       </table>   </div>  <div class="refsect1 examples" id="refsect1-function.curl-getinfo-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4466">    <p><strong>示例 #1 <span class="function"><strong>curl_getinfo()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建 cURL 句柄<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 执行<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 检查是否有错误发生<br></span><span style="color: #007700">if (!</span><span style="color: #9876AA">curl_errno</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">)) {<br>  </span><span style="color: #9876AA">\$info </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_getinfo</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br>  echo </span><span style="color: #DD0000">'Took '</span><span style="color: #007700">, </span><span style="color: #9876AA">\$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'total_time'</span><span style="color: #007700">], </span><span style="color: #DD0000">' seconds to send a request to '</span><span style="color: #007700">, </span><span style="color: #9876AA">\$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'url'</span><span style="color: #007700">], </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #FF8000">// 关闭句柄<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-4467">    <p><strong>示例 #2 使用 <span class="parameter" style="color:#3A95FF">option</span> 参数的 <span class="function"><strong>curl_getinfo()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建 cURL 句柄<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 执行<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 检测 HTTP 状态码<br></span><span style="color: #007700">if (!</span><span style="color: #9876AA">curl_errno</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">)) {<br>  switch (</span><span style="color: #9876AA">\$http_code </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_getinfo</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLINFO_HTTP_CODE</span><span style="color: #007700">)) {<br>    case </span><span style="color: #9876AA">200</span><span style="color: #007700">:  </span><span style="color: #FF8000"># OK<br>      </span><span style="color: #007700">break;<br>    default:<br>      echo </span><span style="color: #DD0000">'Unexpected HTTP code: '</span><span style="color: #007700">, </span><span style="color: #9876AA">\$http_code</span><span style="color: #007700">, </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>  }<br>}<br><br></span><span style="color: #FF8000">// 关闭句柄<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.curl-getinfo-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    如果重新使用句柄，则保留此函数收集的信息。这意味着除非此函数在内部覆盖统计信息，否则将返回以前的信息。   </p>  </blockquote> </div></div>
 * 
 * Get information regarding a specific transfer
 * @link https://php.net/manual/zh/function.curl-getinfo.php
 * @param CurlHandle|resource $handle
 * @param int|null $option [optional] <p>
 * This may be one of the following constants:
 * <ul>
 *   <li>
 *     <strong><code class="code">CURLINFO_EFFECTIVE_URL</code></strong> - Last effective URL
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HTTP_CODE</code></strong> - The last response code. As of cURL 7.10.8, this is a legacy alias of
 *     <strong><code class="code">CURLINFO_RESPONSE_CODE</code>
 *     </strong>
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_FILETIME</code></strong> - Remote time of the retrieved document, with the
 *     <strong><code class="code">CURLOPT_FILETIME</code>
 *     </strong> enabled; if -1 is returned the time of the document is unknown
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_TOTAL_TIME</code></strong> - Total transaction time in seconds for last transfer
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_NAMELOOKUP_TIME</code></strong> - Time in seconds until name resolving was complete
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONNECT_TIME</code></strong> - Time in seconds it took to establish the connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PRETRANSFER_TIME</code></strong> - Time in seconds from start until just before file transfer begins
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_STARTTRANSFER_TIME</code></strong> - Time in seconds until the first byte is about to be transferred
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_REDIRECT_COUNT</code></strong> - Number of redirects, with the
 *     <strong><code class="code">CURLOPT_FOLLOWLOCATION</code>
 *     </strong> option enabled
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_REDIRECT_TIME</code></strong> - Time in seconds of all redirection steps before final transaction was started, with the
 *     <strong><code class="code">CURLOPT_FOLLOWLOCATION</code>
 *     </strong> option enabled
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_REDIRECT_URL</code></strong> - With the
 *     <strong><code class="code">CURLOPT_FOLLOWLOCATION</code>
 *     </strong> option disabled: redirect URL found in the last transaction, that should be requested manually next. With the
 *     <strong><code class="code">CURLOPT_FOLLOWLOCATION</code>
 *     </strong> option enabled: this is empty. The redirect URL in this case is available in
 *     <strong><code class="code">CURLINFO_EFFECTIVE_URL</code>
 *     </strong>
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PRIMARY_IP</code></strong> - IP address of the most recent connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PRIMARY_PORT</code></strong> - Destination port of the most recent connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_LOCAL_IP</code></strong> - Local (source) IP address of the most recent connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_LOCAL_PORT</code></strong> - Local (source) port of the most recent connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SIZE_UPLOAD</code></strong> - Total number of bytes uploaded
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SIZE_DOWNLOAD</code></strong> - Total number of bytes downloaded
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SPEED_DOWNLOAD</code></strong> - Average download speed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SPEED_UPLOAD</code></strong> - Average upload speed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HEADER_SIZE</code></strong> - Total size of all headers received
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HEADER_OUT</code></strong> - The request string sent. For this to work, add the
 *     <strong><code class="code">CURLINFO_HEADER_OUT</code>
 *     </strong> option to the handle by calling curl_setopt()
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_REQUEST_SIZE</code></strong> - Total size of issued requests, currently only for HTTP requests
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SSL_VERIFYRESULT</code></strong> - Result of SSL certification verification requested by setting
 *     <strong><code class="code">CURLOPT_SSL_VERIFYPEER</code>
 *     </strong>
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONTENT_LENGTH_DOWNLOAD</code></strong> - Content length of download, read from
 *     <code class="code">Content-Length:</code> field
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONTENT_LENGTH_UPLOAD</code></strong> - Specified size of upload
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONTENT_TYPE</code>
 *     </strong> -
 *     <code class="code">Content-Type:</code> of the requested document. NULL indicates server did not send valid
 *     <code class="code">Content-Type:</code> header
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PRIVATE</code></strong> - Private data associated with this cURL handle, previously set with the
 *     <strong><code class="code">CURLOPT_PRIVATE</code>
 *     </strong> option of curl_setopt()
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_RESPONSE_CODE</code></strong> - The last response code
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HTTP_CONNECTCODE</code></strong> - The CONNECT response code
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HTTPAUTH_AVAIL</code></strong> - Bitmask indicating the authentication method(s) available according to the previous response
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PROXYAUTH_AVAIL</code></strong> - Bitmask indicating the proxy authentication method(s) available according to the previous response
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_OS_ERRNO</code></strong> - Errno from a connect failure. The number is OS and system specific.
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_NUM_CONNECTS</code></strong> - Number of connections curl had to create to achieve the previous transfer
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SSL_ENGINES</code></strong> - OpenSSL crypto-engines supported
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_COOKIELIST</code></strong> - All known cookies
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_FTP_ENTRY_PATH</code></strong> - Entry path in FTP server
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_APPCONNECT_TIME</code></strong> - Time in seconds it took from the start until the SSL/SSH connect/handshake to the remote host was completed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CERTINFO</code></strong> - TLS certificate chain
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONDITION_UNMET</code></strong> - Info on unmet time conditional
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_RTSP_CLIENT_CSEQ</code></strong> - Next RTSP client CSeq
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_RTSP_CSEQ_RECV</code></strong> - Recently received CSeq
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_RTSP_SERVER_CSEQ</code></strong> - Next RTSP server CSeq
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_RTSP_SESSION_ID</code></strong> - RTSP session ID
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONTENT_LENGTH_DOWNLOAD_T</code></strong> - The content-length of the download. This is the value read from the
 *     <code class="code">Content-Type:</code> field. -1 if the size isn't known
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONTENT_LENGTH_UPLOAD_T</code></strong> - The specified size of the upload. -1 if the size isn't known
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_HTTP_VERSION</code></strong> - The version used in the last HTTP connection. The return value will be one of the defined
 *     <strong><code class="code">CURL_HTTP_VERSION_*</code>
 *     </strong> constants or 0 if the version can't be determined
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PROTOCOL</code></strong> - The protocol used in the last HTTP connection. The returned value will be exactly one of the
 *     <strong><code class="code">CURLPROTO_*</code>
 *     </strong> values
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PROXY_SSL_VERIFYRESULT</code></strong> - The result of the certificate verification that was requested (using the
 *     <strong><code class="code">CURLOPT_PROXY_SSL_VERIFYPEER</code>
 *     </strong> option). Only used for HTTPS proxies
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SCHEME</code></strong> - The URL scheme used for the most recent connection
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SIZE_DOWNLOAD_T</code></strong> - Total number of bytes that were downloaded. The number is only for the latest transfer and will be reset again for each new transfer
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SIZE_UPLOAD_T</code></strong> - Total number of bytes that were uploaded
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SPEED_DOWNLOAD_T</code></strong> - The average download speed in bytes/second that curl measured for the complete download
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_SPEED_UPLOAD_T</code></strong> - The average upload speed in bytes/second that curl measured for the complete upload
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_APPCONNECT_TIME_T</code></strong> - Time, in microseconds, it took from the start until the SSL/SSH connect/handshake to the remote host was completed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_CONNECT_TIME_T</code></strong> - Total time taken, in microseconds, from the start until the connection to the remote host (or proxy) was completed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_FILETIME_T</code></strong> - Remote time of the retrieved document (as Unix timestamp), an alternative to
 *     <strong><code class="code">CURLINFO_FILETIME</code>
 *     </strong> to allow systems with 32 bit long variables to extract dates outside of the 32bit timestamp range
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_NAMELOOKUP_TIME_T</code></strong> - Time in microseconds from the start until the name resolving was completed
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_PRETRANSFER_TIME_T</code></strong> - Time taken from the start until the file transfer is just about to begin, in microseconds
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_REDIRECT_TIME_T</code></strong> - Total time, in microseconds, it took for all redirection steps include name lookup, connect, pretransfer and transfer before final transaction was started
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_STARTTRANSFER_TIME_T</code></strong> - Time, in microseconds, it took from the start until the first byte is received
 *   </li>
 *   <li>
 *     <strong><code class="code">CURLINFO_TOTAL_TIME_T</code></strong> - Total time in microseconds for the previous transfer, including name resolving, TCP connect etc.
 * </ul>
 *
 * @return mixed If <em><code class="parameter">$option</code></em> is given, returns its value as a string.
 * Otherwise, returns an associative array with the following elements
 * (which correspond to <em><code class="parameter">$option</code></em>), or false on failure:
 * <ul>
 *   <li>url</li>
 *   <li>content_type</li>
 *   <li>http_code</li>
 *   <li>header_size</li>
 *   <li>request_size</li>
 *   <li>filetime</li>
 *   <li>ssl_verify_result</li>
 *   <li>redirect_count</li>
 *   <li>total_time</li>
 *   <li>namelookup_time</li>
 *   <li>connect_time</li>
 *   <li>pretransfer_time</li>
 *   <li>size_upload</li>
 *   <li>size_download</li>
 *   <li>speed_download</li>
 *   <li>speed_upload</li>
 *   <li>download_content_length</li>
 *   <li>upload_content_length</li>
 *   <li>starttransfer_time</li>
 *   <li>redirect_time</li>
 *   <li>certinfo</li>
 *   <li>primary_ip</li>
 *   <li>primary_port</li>
 *   <li>local_ip</li>
 *   <li>local_port</li>
 *   <li>redirect_url</li>
 *   <li>request_header (This is only set if the
 *     <strong><code>CURLINFO_HEADER_OUT</code>
 *     </strong> is set by a previous call to curl_setopt()
 *   </li>
 * </ul>
 */
#[Pure(true)]
function curl_getinfo(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle, ?int $option): mixed {}

/**
 * <div id="function.curl-error" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_error</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.3, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_error</span> — <span class="dc-title">返回当前会话最后一次错误的字符串</span></p> </div>  <div class="refsect1 description" id="refsect1-function.curl-error-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_error</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   返回最近一次 cURL 操作的文本错误详情。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-error-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>   </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-error-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回错误信息，或者如果没有任何错误发生就返回 <span class="literal">''</span> (空字符串)。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-error-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-error-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4463">    <p><strong>示例 #1 <span class="function"><strong>curl_error()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建 cURL 句柄，指向一个不存在的位置<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://404.php.net/'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_RETURNTRANSFER</span><span style="color: #007700">, </span><span style="color: #9876AA">true</span><span style="color: #007700">);<br><br>if(</span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">) === </span><span style="color: #9876AA">false</span><span style="color: #007700">)<br>{<br>    echo </span><span style="color: #DD0000">'Curl error: ' </span><span style="color: #007700">. </span><span style="color: #9876AA">curl_error</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br>}<br>else<br>{<br>    echo </span><span style="color: #DD0000">'操作完成没有任何错误'</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #FF8000">// 关闭句柄<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.curl-error-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_errno()} - 返回最后一次的错误代码</span></li>    <li><a href="http://curl.haxx.se/libcurl/c/libcurl-errors.html" class="link external">»&nbsp;Curl 错误代码</a></li>   </ul>   </div></div>
 * 
 * Return a string containing the last error for the current session
 * @link https://php.net/manual/zh/function.curl-error.php
 * @param CurlHandle|resource $handle
 * @return string the error message or '' (the empty string) if no
 * error occurred.
 */
#[Pure(true)]
function curl_error(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle): string {}

/**
 * <div id="function.curl-errno" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_errno</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.3, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_errno</span> — <span class="dc-title">返回最后一次的错误代码</span></p> </div>  <div class="refsect1 description" id="refsect1-function.curl-errno-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_errno</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   返回最后一次 cURL 操作的错误代码。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-errno-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>   </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-errno-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回错误代码或在没有错误发生时返回 <span class="literal">0</span> (零)。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-errno-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-errno-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4462">    <p><strong>示例 #1 <span class="function"><strong>curl_errno()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建 cURL 句柄，指向不存在的位置<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://404.php.net/'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 执行<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_RETURNTRANSFER</span><span style="color: #007700">, </span><span style="color: #9876AA">true</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 检查是否有错误发生<br></span><span style="color: #007700">if(</span><span style="color: #9876AA">curl_errno</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">))<br>{<br>    echo </span><span style="color: #DD0000">'Curl error: ' </span><span style="color: #007700">. </span><span style="color: #9876AA">curl_error</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br>}<br><br></span><span style="color: #FF8000">// 关闭句柄<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.curl-errno-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_error()} - 返回当前会话最后一次错误的字符串</span></li>    <li><a href="http://curl.haxx.se/libcurl/c/libcurl-errors.html" class="link external">»&nbsp;Curl 错误代码</a></li>   </ul>   </div></div>
 * 
 * Return the last error number
 * @link https://php.net/manual/zh/function.curl-errno.php
 * @param CurlHandle|resource $handle
 * @return int the error number or 0 (zero) if no error
 * occurred.
 */
#[Pure(true)]
function curl_errno(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle): int {}

/**
 * <div id="function.curl-escape" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_escape</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_escape</span> — <span class="dc-title">使用 URL 编码给定的字符串</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-escape-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_escape</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$string</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   该函数使用 URL 根据 <a href="https://datatracker.ietf.org/doc/html/rfc3986" class="link external">»&nbsp;RFC 3986</a> 编码给定的字符串。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-escape-parameters">  <h3 class="title">参数</h3>  <dl>   <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>       <dt><span class="parameter" style="color:#3A95FF">string</span></dt>    <dd>     <p class="para">      需要编码的字符串。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-escape-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回编码后的字符串 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-escape-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-escape-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4464">    <p><strong>示例 #1 <span class="function"><strong>curl_escape()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建 curl 句柄<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// 把编码后的字符串当做 GET 参数<br></span><span style="color: #9876AA">\$location </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_escape</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #DD0000">'Hofbräuhaus / München'</span><span style="color: #007700">);<br></span><span style="color: #FF8000">// 结果： Hofbr%C3%A4uhaus%20%2F%20M%C3%BCnchen<br><br>// 用编码好的字符串组装 URL<br></span><span style="color: #9876AA">\$url </span><span style="color: #007700">= </span><span style="color: #DD0000">"http://example.com/add_location.php?location=</span><span style="color: #007700">{</span><span style="color: #9876AA">\$location</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br></span><span style="color: #FF8000">// 结果：http://example.com/add_location.php?location=Hofbr%C3%A4uhaus%20%2F%20M%C3%BCnchen<br><br>// 发送 HTTP 请求并关闭句柄<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_URL</span><span style="color: #007700">, </span><span style="color: #9876AA">\$url</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_RETURNTRANSFER</span><span style="color: #007700">, </span><span style="color: #9876AA">true</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.curl-escape-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_unescape()} - 解码指定 URL 编码的字符串</span></li>    <li><span class="function">{@link urlencode()} - 编码 URL 字符串</span></li>    <li><span class="function">{@link rawurlencode()} - 按照 RFC 3986 对 URL 进行编码</span></li>    <li><a href="https://datatracker.ietf.org/doc/html/rfc3986" class="link external">»&nbsp;RFC 3986</a></li>   </ul>   </div></div>
 * 
 * URL encodes the given string
 * @link https://secure.php.net/manual/en/function.curl-escape.php
 * @param CurlHandle|resource $handle <p>
 * A cURL handle returned by
 * {@link https://secure.php.net/manual/en/function.curl-init.php curl_init()}.</p>
 * @param string $string <p>
 * The string to be encoded.</p>
 * @return string|false Returns escaped string or FALSE on failure.
 * @since 5.5
 */
#[Pure]
function curl_escape(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle, string $string): string|false {}

/**
 * (PHP 5 >= 5.5.0) <br/>
 * Create a CURLFile object
 * @link https://secure.php.net/manual/en/curlfile.construct.php
 * @param string $filename <p> Path to the file which will be uploaded.</p>
 * @param string|null $mime_type <p>Mimetype of the file.</p>
 * @param string|null $posted_filename <p>Name of the file.</p>
 * @return CURLFile
 * Returns a {@link https://secure.php.net/manual/en/class.curlfile.php CURLFile} object.
 * @since 5.5
 */
#[Pure]
function curl_file_create(string $filename, ?string $mime_type = null, ?string $posted_filename = null): CURLFile {}

/**
 * <div id="function.curl-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_close</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_close</span> — <span class="dc-title">关闭 cURL 会话</span></p> </div>  <div class="refsect1 description" id="refsect1-function.curl-close-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_close</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:  </p><p class="para">  此函数无效。在 PHP 8.0.0 之前，用于关闭资源。 </p></blockquote>  <p class="para">   关闭 cURL 会话并且释放所有资源。也会删除 cURL 句柄 <span class="parameter" style="color:#3A95FF">handle</span>。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-close-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>   </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-close-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-close-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-close-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4460">    <p><strong>示例 #1 初始化新 cURL 会话并获取网页</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建新 cURL 资源<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// 设置 URL 和相应的选项<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_URL</span><span style="color: #007700">, </span><span style="color: #DD0000">"http://www.example.com/"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_HEADER</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 抓取 URL 并把它传递给浏览器<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 关闭 cURL 资源，并且释放系统资源<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.curl-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_init()} - 初始化 cURL 会话</span></li>    <li><span class="function">{@link curl_multi_close()} - 从多句柄中移除所有 cURL 句柄</span></li>   </ul>   </div></div>
 * 
 * Close a cURL session
 * @link https://php.net/manual/zh/function.curl-close.php
 * @param CurlHandle|resource $handle
 * @return void
 */
function curl_close(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle): void {}

/**
 * <div id="function.curl-multi-init" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_multi_init</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_init</span> — <span class="dc-title">返回新 cURL 批处理句柄</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-multi-init-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_multi_init</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="type CurlMultiHandle" style="color:#EAB766">CurlMultiHandle</a></span></div>  <p class="para rdfs-comment">   允许异步处理多个 cURL 句柄。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-multi-init-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-init-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回 cURL 批处理句柄。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-multi-init-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       成功时，此函数返回 <span class="classname"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span> 实例；之前返回 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.curl-multi-init-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_init()} - 初始化 cURL 会话</span></li>    <li><span class="function">{@link curl_multi_close()} - 从多句柄中移除所有 cURL 句柄</span></li>   </ul>   </div></div>
 * 
 * Returns a new cURL multi handle
 * @link https://php.net/manual/zh/function.curl-multi-init.php
 * @return resource|CurlMultiHandle a cURL multi handle resource or object depends on the php version
 */
#[LanguageLevelTypeAware(['8.0' => 'CurlMultiHandle'], default: 'resource')]
function curl_multi_init(): CurlMultiHandle {}

/**
 * <div id="function.curl-multi-add-handle" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_multi_add_handle</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_add_handle</span> — <span class="dc-title">添加普通 cURL 句柄到 cURL 多句柄</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-multi-add-handle-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_multi_add_handle</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="type CurlMultiHandle" style="color:#EAB766">CurlMultiHandle</a></span> <span class="parameter" style="color:#3A95FF">\$multi_handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   增加 <span class="parameter" style="color:#3A95FF">handle</span> 句柄到多句柄 <span class="parameter" style="color:#3A95FF">multi_handle</span>  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-multi-add-handle-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">multi_handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_multi_init()}</span> 返回的 cURL 多个句柄。</p></dd>    <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>   </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-add-handle-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 0，失败时返回 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlm-added-already">CURLM_<span class="replaceable">*</span></a></span></strong> 之一的错误码。  </p> </div>  <div class="refsect1 changelog" id="refsect1-function.curl-multi-add-handle-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">multi_handle</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span>  instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected. </td></tr>     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.curl-multi-add-handle-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_multi_remove_handle()} - 从一组 cURL 句柄中移除一个句柄</span></li>    <li><span class="function">{@link curl_multi_init()} - 返回新 cURL 批处理句柄</span></li>    <li><span class="function">{@link curl_init()} - 初始化 cURL 会话</span></li>   </ul>   </div></div>
 * 
 * Add a normal cURL handle to a cURL multi handle
 * @link https://php.net/manual/zh/function.curl-multi-add-handle.php
 * @param CurlMultiHandle|resource $multi_handle
 * @param CurlHandle|resource $handle
 * @return int 0 on success, or one of the CURLM_XXX errors
 * code.
 */
function curl_multi_add_handle(#[LanguageLevelTypeAware(['8.0' => 'CurlMultiHandle'], default: 'resource')] $multi_handle, #[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle): int {}

/**
 * <div id="function.curl-multi-remove-handle" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_multi_remove_handle</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_remove_handle</span> — <span class="dc-title">从一组 cURL 句柄中移除一个句柄</span></p> </div>  <div class="refsect1 description" id="refsect1-function.curl-multi-remove-handle-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_multi_remove_handle</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="type CurlMultiHandle" style="color:#EAB766">CurlMultiHandle</a></span> <span class="parameter" style="color:#3A95FF">\$multi_handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   从给定的 <span class="parameter" style="color:#3A95FF">multi_handle</span> 中移除给定的 <span class="parameter" style="color:#3A95FF">handle</span>。   当 <span class="parameter" style="color:#3A95FF">handle</span> 被移除后，再次调用 <span class="function">{@link curl_exec()}</span> 是完全合法的。   移除正在使用的 <span class="parameter" style="color:#3A95FF">handle</span> 会有效地停止涉及该句柄的传输。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-multi-remove-handle-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">multi_handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_multi_init()}</span> 返回的 cURL 多个句柄。</p></dd>    <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>   </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-remove-handle-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 0，失败时返回 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlm-added-already">CURLM_<span class="replaceable">*</span></a></span></strong> 错误代码中的一个。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-multi-remove-handle-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">multi_handle</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span>  instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected. </td></tr>     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.curl-multi-remove-handle-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_init()} - 初始化 cURL 会话</span></li>    <li><span class="function">{@link curl_multi_init()} - 返回新 cURL 批处理句柄</span></li>    <li><span class="function">{@link curl_multi_add_handle()} - 添加普通 cURL 句柄到 cURL 多句柄</span></li>   </ul>   </div></div>
 * 
 * Remove a multi handle from a set of cURL handles
 * @link https://php.net/manual/zh/function.curl-multi-remove-handle.php
 * @param CurlMultiHandle|resource $multi_handle
 * @param CurlHandle|resource $handle
 * @return int|false On success, returns one of the CURLM_XXX error codes, false on failure.
 */
#[LanguageLevelTypeAware(['8.0' => 'int'], default: 'int|false')]
function curl_multi_remove_handle(#[LanguageLevelTypeAware(['8.0' => 'CurlMultiHandle'], default: 'resource')] $multi_handle, #[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle) {}

/**
 * <div id="function.curl-multi-select" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_multi_select</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_select</span> — <span class="dc-title">等待，直到任何 cURL 多句柄连接可以进行读取或写入</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-multi-select-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_multi_select</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$mh</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = 1.0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">    堵塞脚本执行，直到附加到 cURL 多句柄的 cURL 句柄能够在下次调用    <span class="function">{@link curl_multi_exec()}</span> 时取得进展或者直到超时（以先到者为准）。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-multi-select-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">multi_handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_multi_init()}</span> 返回的 cURL 多个句柄。</p></dd>         <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>     <dd>      <p class="para">       以秒为单位，等待活跃 cURL 多句柄连接的响应时间。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-select-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回描述符集合中活跃描述符的数量。如果没有任何活动的描述符，则为   <span class="literal">0</span>。失败时，此函数将在 <span class="literal">select()</span>   失败时返回 <span class="literal">-1</span>（来自底层 select 系统调用）。  </p> </div> <div class="refsect1 errors" id="refsect1-function.curl-multi-select-errors">  <h3 class="title">错误／异常</h3>  <p class="simpara">   如果 <span class="parameter" style="color:#3A95FF">timeout</span> 小于 <span class="literal">0</span>   或者大于 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></span></strong>，则抛出 <span class="exceptionname"><a href="https://php.net/manual/zh/class.valueerror.php" class="exceptionname">ValueError</a></span>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-multi-select-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.4.0</td>      <td>       如果 <span class="parameter" style="color:#3A95FF">timeout</span> 小于 <span class="literal">0</span>       或者大于 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.php-int-max">PHP_INT_MAX</a></span></strong>，现在抛出 <span class="exceptionname"><a href="https://php.net/manual/zh/class.valueerror.php" class="exceptionname">ValueError</a></span>。      </td>     </tr>     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">multi_handle</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span>  instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected. </td></tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.curl-multi-select-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_multi_init()} - 返回新 cURL 批处理句柄</span></li>   </ul>   </div></div>
 * 
 * Wait for activity on any curl_multi connection
 * @link https://php.net/manual/zh/function.curl-multi-select.php
 * @param CurlMultiHandle|resource $multi_handle
 * @param float $timeout [optional] <p>
 * Time, in seconds, to wait for a response.
 * </p>
 * @return int On success, returns the number of descriptors contained in,
 * the descriptor sets. On failure, this function will return -1 on a select failure or timeout (from the underlying select system call).
 */
function curl_multi_select(#[LanguageLevelTypeAware(['8.0' => 'CurlMultiHandle'], default: 'resource')] $multi_handle, float $timeout = 1.0): int {}

/**
 * <div id="function.curl-multi-setopt" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_multi_setopt</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_setopt</span> — <span class="dc-title">设置 cURL 并行选项</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-multi-setopt-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_multi_setopt</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="type CurlMultiHandle" style="color:#EAB766">CurlMultiHandle</a></span> <span class="parameter" style="color:#3A95FF">\$multi_handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$option</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   为给定的 cURL 并行句柄设置选项。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-multi-setopt-parameters">  <h3 class="title">参数</h3>  <dl>   <dt><span class="parameter" style="color:#3A95FF">multi_handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_multi_init()}</span> 返回的 cURL 多个句柄。</p></dd>       <dt><span class="parameter" style="color:#3A95FF">option</span></dt>    <dd>     <p class="para">      常量 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-chunk-length-penalty-size">CURLMOPT_<span class="replaceable">*</span></a></span></strong> 之一。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">value</span></dt>    <dd>      <p class="para">       要设置给 <span class="parameter" style="color:#3A95FF">option</span> 的值。有关每个常量期望的值类型的详细信息，请参阅       <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-chunk-length-penalty-size">CURLMOPT_<span class="replaceable">*</span></a></span></strong> 常量的描述。             </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-setopt-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-multi-setopt-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.2.0</td>       <td>        引入 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-max-concurrent-streams">CURLMOPT_MAX_CONCURRENT_STREAMS</a></span></strong>。       </td>      </tr>      <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">multi_handle</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span>  instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected. </td></tr>      <tr>       <td>7.1.0</td>       <td>        引入 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-pushfunction">CURLMOPT_PUSHFUNCTION</a></span></strong>。       </td>      </tr>      <tr>       <td>7.0.7</td>       <td>        引入 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-chunk-length-penalty-size">CURLMOPT_CHUNK_LENGTH_PENALTY_SIZE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-content-length-penalty-size">CURLMOPT_CONTENT_LENGTH_PENALTY_SIZE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-max-host-connections">CURLMOPT_MAX_HOST_CONNECTIONS</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-max-pipeline-length">CURLMOPT_MAX_PIPELINE_LENGTH</a></span></strong>        和 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmopt-max-total-connections">CURLMOPT_MAX_TOTAL_CONNECTIONS</a></span></strong>。       </td>      </tr>     </tbody>       </table>   </div></div>
 * 
 * (PHP 5 &gt;=5.5.0)<br/>
 * Set an option for the cURL multi handle
 * @link https://secure.php.net/manual/en/function.curl-multi-setopt.php
 * @param CurlMultiHandle|resource $multi_handle
 * @param int $option <p>
 * One of the <b>CURLMOPT_*</b> constants.
 * </p>
 * @param mixed $value <p>
 * The value to be set on <em>option</em>.
 * </p>
 * <p>
 * <em>value</em> should be an {@link https://php.net/manual/zh/language.types.integer.php int} for the
 * following values of the <em>option</em> parameter:
 * </p><table>
 *
 * <thead>
 * <tr>
 * <th>Option</th>
 * <th>Set <em><code class="parameter">value</code></em> to</th>
 * </tr>
 * </thead>
 *
 * <tbody>
 * <tr>
 * <td><b>CURLMOPT_PIPELINING</b></td>
 * <td style="vertical-align: top;">
 * Pass 1 to enable or 0 to disable. Enabling pipelining on a multi
 * handle will make it attempt to perform HTTP Pipelining as far as
 * possible for transfers using this handle. This means that if you add
 * a second request that can use an already existing connection, the
 * second request will be "piped" on the same connection rather than
 * being executed in parallel.
 * </td>
 * </tr>
 *
 * <tr>
 * <td style="vertical-align: top;"><b>CURLMOPT_MAXCONNECTS</b></td>
 * <td style="vertical-align: top;">
 * Pass a number that will be used as the maximum amount of
 * simultaneously open connections that libcurl may cache. Default is
 * 10. When the cache is full, curl closes the oldest one in the cache
 * to prevent the number of open connections from increasing.
 * </td>
 * </tr>
 * </tbody>
 * </table>
 * @return bool Returns TRUE on success or FALSE on failure.
 * @since 5.5
 */
function curl_multi_setopt(#[LanguageLevelTypeAware(['8.0' => 'CurlMultiHandle'], default: 'resource')] $multi_handle, int $option, mixed $value): bool {}

/**
 * <div id="function.curl-multi-strerror" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_multi_strerror</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_strerror</span> — <span class="dc-title">返回字符串描述的错误代码</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-multi-strerror-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_multi_strerror</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$error_code</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span></div>  <p class="para rdfs-comment">   返回一个用以描述所给 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlm-added-already">CURLM_<span class="replaceable">*</span></a></span></strong> 错误代码所对应的错误信息。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-multi-strerror-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">error_code</span></dt>    <dd>     <p class="para">      <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlm-added-already">CURLM_<span class="replaceable">*</span></a></span></strong> 常量之一。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-strerror-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回可用错误代码所对应的错误信息，否则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> 。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.curl-multi-strerror-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_strerror()} - 返回错误代码的字符串描述</span></li>    <li><a href="http://curl.haxx.se/libcurl/c/libcurl-errors.html" class="link external">»&nbsp;cURL error codes</a></li>   </ul>   </div></div>
 * 
 * (PHP 5 &gt;=5.5.0)<br/>
 * Return string describing error code
 * @link https://secure.php.net/manual/en/function.curl-multi-strerror.php
 * @param int $error_code <p>
 * One of the {@link https://curl.haxx.se/libcurl/c/libcurl-errors.html CURLM error codes} constants.
 * </p>
 * @return string|null Returns error string for valid error code, NULL otherwise.
 * @since 5.5
 */
function curl_multi_strerror(int $error_code): ?string {}

/**
 * <div id="function.curl-pause" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_pause</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_pause</span> — <span class="dc-title">暂停和取消暂停连接</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-pause-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_pause</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$flags</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   暂停或取消暂停 cURL 会话。   一个会话可以在传输过程中、在读、写或两个方向的传输过程中暂停，通过从使用 <span class="function">{@link curl_setopt()}</span>   注册的回调函数中调用此函数来实现。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-pause-parameters">  <h3 class="title">参数</h3>  <dl>   <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>       <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>    <dd>     <p class="para">      <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlpause-all">CURLPAUSE_<span class="replaceable">*</span></a></span></strong> 常量之一。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-pause-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回一个错误代码 (如果没有错误则返回 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curle-ok">CURLE_OK</a></span></strong> 常量)。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-pause-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div></div>
 * 
 * (PHP 5 &gt;=5.5.0)<br/>
 * Pause and unpause a connection
 * @link https://secure.php.net/manual/en/function.curl-pause.php
 * @param CurlHandle|resource $handle
 * <p>A cURL handle returned by {@link https://secure.php.net/manual/en/function.curl-init.php curl_init()}.</p>
 * @param int $flags <p>One of <b>CURLPAUSE_*</b> constants.</p>
 * @return int Returns an error code (<b>CURLE_OK</b> for no error).
 * @since 5.5
 */
function curl_pause(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle, int $flags): int {}

/**
 * <div id="function.curl-reset" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_reset</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_reset</span> — <span class="dc-title">重置一个 libcurl 会话句柄的所有的选项</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-reset-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_reset</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   该函数将给定的 cURL 句柄所有选项重新设置为默认值。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-reset-parameters">  <h3 class="title">参数</h3>  <dl>   <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>  </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-reset-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-reset-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-reset-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4470">    <p><strong>示例 #1 <span class="function"><strong>curl_reset()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 创建 url 句柄<br></span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// 设置 CURLOPT_USERAGENT 选项<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_USERAGENT</span><span style="color: #007700">, </span><span style="color: #DD0000">"My test user-agent"</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 重置所有的预先设置的选项<br></span><span style="color: #9876AA">curl_reset</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 发送 HTTP 请求<br></span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_URL</span><span style="color: #007700">, </span><span style="color: #DD0000">'http://example.com/'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">curl_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">); </span><span style="color: #FF8000">// 预先设置的 user-agent 不会被发送，它已经被 curl_reset 重置掉了<br><br>// 关闭句柄<br></span><span style="color: #9876AA">curl_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.curl-reset-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    <span class="function"><strong>curl_reset()</strong></span> 还重置作为 <span class="function">{@link curl_init()}</span> 参数指定的 URL。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.curl-reset-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_setopt()} - 设置 cURL 传输选项</span></li>   </ul>   </div></div>
 * 
 * (PHP 5 &gt;=5.5.0)<br/>
 * Reset all options of a libcurl session handle
 * @link https://secure.php.net/manual/en/function.curl-reset.php
 * @param CurlHandle|resource $handle <p>A cURL handle returned by
 * {@link https://secure.php.net/manual/en/function.curl-init.php curl_init()}.</p>
 * @return void
 * @since 5.5
 */
function curl_reset(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle): void {}

/**
 * <div id="function.curl-multi-exec" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_multi_exec</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_exec</span> — <span class="dc-title">运行当前 cURL 句柄的子连接</span></p> </div>  <div class="refsect1 description" id="refsect1-function.curl-multi-exec-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_multi_exec</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="type CurlMultiHandle" style="color:#EAB766">CurlMultiHandle</a></span> <span class="parameter" style="color:#3A95FF">\$multi_handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;\$still_running</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   处理在栈中的每一个句柄。无论该句柄需要读取或写入数据都可调用此方法。  </p>  </div>  <div class="refsect1 parameters" id="refsect1-function.curl-multi-exec-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">multi_handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_multi_init()}</span> 返回的 cURL 多个句柄。</p></dd>         <dt><span class="parameter" style="color:#3A95FF">still_running</span></dt>     <dd>      <p class="para">       一个用来判断操作是否仍在执行的标识的引用。      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-exec-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   定义于 cURL <a href="https://php.net/manual/zh/curl.constants.php" class="link">预定义常量</a>中的 cURL 代码。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    该函数仅返回关于整个批处理栈相关的错误。即使返回    <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlm-ok">CURLM_OK</a></span></strong> 时单个传输仍可能有问题。   </p>  </blockquote> </div>  <div class="refsect1 changelog" id="refsect1-function.curl-multi-exec-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">multi_handle</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span>  instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected. </td></tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.curl-multi-exec-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4469">    <p><strong>示例 #1 <span class="function"><strong>curl_multi_exec()</strong></span> 示例</strong></p>    <div class="example-contents"><p>     此示例将为 URL 列表创建 cURL 句柄，把它们加到批处理句柄，然后并行处理它们。    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$urls </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">"https://www.php.net/"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"https://www.example.com/"</span><span style="color: #007700">,<br>];<br><br></span><span style="color: #9876AA">\$mh </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_multi_init</span><span style="color: #007700">();<br></span><span style="color: #9876AA">\$map </span><span style="color: #007700">= new </span><span style="color: #9876AA">WeakMap</span><span style="color: #007700">();<br><br>foreach (</span><span style="color: #9876AA">\$urls </span><span style="color: #007700">as </span><span style="color: #9876AA">\$url</span><span style="color: #007700">) {<br>    </span><span style="color: #9876AA">\$ch </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_init</span><span style="color: #007700">(</span><span style="color: #9876AA">\$url</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">curl_setopt</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLOPT_RETURNTRANSFER</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">curl_multi_add_handle</span><span style="color: #007700">(</span><span style="color: #9876AA">\$mh</span><span style="color: #007700">, </span><span style="color: #9876AA">\$ch</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">\$map</span><span style="color: #007700">[</span><span style="color: #9876AA">\$ch</span><span style="color: #007700">] = </span><span style="color: #9876AA">\$url</span><span style="color: #007700">;<br>}<br><br>do {<br>    </span><span style="color: #9876AA">\$status </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_multi_exec</span><span style="color: #007700">(</span><span style="color: #9876AA">\$mh</span><span style="color: #007700">, </span><span style="color: #9876AA">\$unfinishedHandles</span><span style="color: #007700">);<br>    if (</span><span style="color: #9876AA">\$status </span><span style="color: #007700">!== </span><span style="color: #9876AA">CURLM_OK</span><span style="color: #007700">) {<br>        throw new </span><span style="color: #9876AA">\Exception</span><span style="color: #007700">(</span><span style="color: #9876AA">curl_multi_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">curl_multi_errno</span><span style="color: #007700">(</span><span style="color: #9876AA">\$mh</span><span style="color: #007700">)));<br>    }<br><br>    while ((</span><span style="color: #9876AA">\$info </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_multi_info_read</span><span style="color: #007700">(</span><span style="color: #9876AA">\$mh</span><span style="color: #007700">)) !== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>        if (</span><span style="color: #9876AA">\$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'msg'</span><span style="color: #007700">] === </span><span style="color: #9876AA">CURLMSG_DONE</span><span style="color: #007700">) {<br>            </span><span style="color: #9876AA">\$handle </span><span style="color: #007700">= </span><span style="color: #9876AA">\$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'handle'</span><span style="color: #007700">];<br>            </span><span style="color: #9876AA">curl_multi_remove_handle</span><span style="color: #007700">(</span><span style="color: #9876AA">\$mh</span><span style="color: #007700">, </span><span style="color: #9876AA">\$handle</span><span style="color: #007700">);<br>            </span><span style="color: #9876AA">\$url </span><span style="color: #007700">= </span><span style="color: #9876AA">\$map</span><span style="color: #007700">[</span><span style="color: #9876AA">\$handle</span><span style="color: #007700">];<br><br>            if (</span><span style="color: #9876AA">\$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'result'</span><span style="color: #007700">] === </span><span style="color: #9876AA">CURLE_OK</span><span style="color: #007700">) {<br>                </span><span style="color: #9876AA">\$statusCode </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_getinfo</span><span style="color: #007700">(</span><span style="color: #9876AA">\$handle</span><span style="color: #007700">, </span><span style="color: #9876AA">CURLINFO_HTTP_CODE</span><span style="color: #007700">);<br><br>                echo </span><span style="color: #DD0000">"Request to </span><span style="color: #007700">{</span><span style="color: #9876AA">\$url</span><span style="color: #007700">}</span><span style="color: #DD0000"> finished with HTTP status </span><span style="color: #007700">{</span><span style="color: #9876AA">\$statusCode</span><span style="color: #007700">}</span><span style="color: #DD0000">:"</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>                echo </span><span style="color: #9876AA">curl_multi_getcontent</span><span style="color: #007700">(</span><span style="color: #9876AA">\$handle</span><span style="color: #007700">);<br>                echo </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>            } else {<br>                echo </span><span style="color: #DD0000">"Request to </span><span style="color: #007700">{</span><span style="color: #9876AA">\$url</span><span style="color: #007700">}</span><span style="color: #DD0000"> failed with error: "</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>                echo </span><span style="color: #9876AA">curl_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">\$info</span><span style="color: #007700">[</span><span style="color: #DD0000">'result'</span><span style="color: #007700">]);<br>                echo </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>            }<br>        }<br>    }<br><br>    if (</span><span style="color: #9876AA">\$unfinishedHandles</span><span style="color: #007700">) {<br>        if ((</span><span style="color: #9876AA">\$updatedHandles </span><span style="color: #007700">= </span><span style="color: #9876AA">curl_multi_select</span><span style="color: #007700">(</span><span style="color: #9876AA">\$mh</span><span style="color: #007700">)) === -</span><span style="color: #9876AA">1</span><span style="color: #007700">) {<br>            throw new </span><span style="color: #9876AA">\Exception</span><span style="color: #007700">(</span><span style="color: #9876AA">curl_multi_strerror</span><span style="color: #007700">(</span><span style="color: #9876AA">curl_multi_errno</span><span style="color: #007700">(</span><span style="color: #9876AA">\$mh</span><span style="color: #007700">)));<br>        }<br>    }<br>} while (</span><span style="color: #9876AA">\$unfinishedHandles</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">curl_multi_close</span><span style="color: #007700">(</span><span style="color: #9876AA">\$mh</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.curl-multi-exec-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_multi_init()} - 返回新 cURL 批处理句柄</span></li>    <li><span class="function">{@link curl_multi_select()} - 等待，直到任何 cURL 多句柄连接可以进行读取或写入</span></li>    <li><span class="function">{@link curl_exec()} - 执行 cURL 会话</span></li>   </ul>   </div> </div>
 * 
 * Run the sub-connections of the current cURL handle
 * @link https://php.net/manual/zh/function.curl-multi-exec.php
 * @param CurlMultiHandle|resource $multi_handle
 * @param int &$still_running <p>
 * A reference to a flag to tell whether the operations are still running.
 * </p>
 * @return int A cURL code defined in the cURL Predefined Constants.
 * <p>
 * This only returns errors regarding the whole multi stack. There might still have
 * occurred problems on individual transfers even when this function returns
 * CURLM_OK.
 * </p>
 */
function curl_multi_exec(
    #[LanguageLevelTypeAware(['8.0' => 'CurlMultiHandle'], default: 'resource')] $multi_handle,
    #[PhpStormStubsElementAvailable(from: '5.3', to: '7.4')] &$still_running = 0,
    #[PhpStormStubsElementAvailable(from: '8.0')] &$still_running
): int {}

/**
 * <div id="function.curl-multi-getcontent" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_multi_getcontent</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_getcontent</span> — <span class="dc-title">如果设置了 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-returntransfer">CURLOPT_RETURNTRANSFER</a></span></strong>，则返回 cURL 句柄的内容</span></p> </div>  <div class="refsect1 description" id="refsect1-function.curl-multi-getcontent-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_multi_getcontent</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlhandle.php" class="type CurlHandle" style="color:#EAB766">CurlHandle</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span></div>  <p class="para rdfs-comment">   如果 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-returntransfer">CURLOPT_RETURNTRANSFER</a></span></strong> 是为指定句柄设置的选项，则此函数将会以字符串的形式返回 cURL 句柄的内容。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-multi-getcontent-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_init()}</span> 返回的 cURL 句柄。</p></dd>   </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-getcontent-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果设置了 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlopt-returntransfer">CURLOPT_RETURNTRANSFER</a></span></strong>，则返回 cURL 句柄的内容，不设置的话返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-multi-getcontent-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">handle</span> 现在接受 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>  实例；之前接受 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>。 </td></tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.curl-multi-getcontent-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_multi_init()} - 返回新 cURL 批处理句柄</span></li>   </ul>   </div> </div>
 * 
 * Return the content of a cURL handle if <constant>CURLOPT_RETURNTRANSFER</constant> is set
 * @link https://php.net/manual/zh/function.curl-multi-getcontent.php
 * @param CurlHandle|resource $handle
 * @return null|string Return the content of a cURL handle if CURLOPT_RETURNTRANSFER is set.
 */
#[Pure]
function curl_multi_getcontent(#[LanguageLevelTypeAware(['8.0' => 'CurlHandle'], default: 'resource')] $handle): ?string {}

/**
 * <div id="function.curl-multi-info-read" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_multi_info_read</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_info_read</span> — <span class="dc-title">获取当前传输的有关信息</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-multi-info-read-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_multi_info_read</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="type CurlMultiHandle" style="color:#EAB766">CurlMultiHandle</a></span> <span class="parameter" style="color:#3A95FF">\$multi_handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;\$queued_messages</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   查询多句柄是否有来自个别传输的消息或信息，消息可能包含诸如来自传输的错误代码或者仅是传输已完成之类的信息。  </p>  <p class="para">   重复调用此函数，每次都会返回新结果，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 作为此时没有更多信息可以获取的信号。通过   <span class="parameter" style="color:#3A95FF">queued_messages</span> 返回的整数包含当前函数调用后剩余的消息数量。  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    返回的资源指向的数据将无法在调用 <span class="function">{@link curl_multi_remove_handle()}</span> 后继续存在。   </p>  </div> </div> <div class="refsect1 parameters" id="refsect1-function.curl-multi-info-read-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">multi_handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_multi_init()}</span> 返回的 cURL 多个句柄。</p></dd>         <dt><span class="parameter" style="color:#3A95FF">queued_messages</span></dt>     <dd>      <p class="para">       仍在队列中的消息数量。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-info-read-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回信息的关联数组，失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   </p><table class="doctable table">    <caption><strong>返回数组的内容</strong></caption>         <thead>      <tr>       <th>Key:</th>       <th>Value:</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td><span class="literal">msg</span></td>       <td><strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curlmsg-done">CURLMSG_DONE</a></span></strong> 常量。其他返回值当前不可用。</td>      </tr>      <tr>       <td><span class="literal">result</span></td>       <td><strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curle-aborted-by-callback">CURLE_<span class="replaceable">*</span></a></span></strong> 常量之一。如果一切都好，将会返回 <strong><span><a href="https://php.net/manual/zh/curl.constants.php#constant.curle-ok">CURLE_OK</a></span></strong>。</td>      </tr>      <tr>       <td><span class="literal">handle</span></td>       <td>cURL 资源类型表明它有关的句柄。</td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 changelog" id="refsect1-function.curl-multi-info-read-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">multi_handle</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span>  instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected. </td></tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.curl-multi-info-read-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_multi_init()} - 返回新 cURL 批处理句柄</span></li>   </ul>   </div></div>
 * 
 * Get information about the current transfers
 * @link https://php.net/manual/zh/function.curl-multi-info-read.php
 * @param CurlMultiHandle|resource $multi_handle
 * @param int &$queued_messages [optional] <p>
 * Number of messages that are still in the queue
 * </p>
 * @return array|false On success, returns an associative array for the message, false on failure.
 */
#[Pure]
#[ArrayShape(["msg" => "int", "result" => "int", "handle" => "resource"])]
function curl_multi_info_read(#[LanguageLevelTypeAware(['8.0' => 'CurlMultiHandle'], default: 'resource')] $multi_handle, &$queued_messages): array|false {}

/**
 * <div id="function.curl-multi-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_multi_close</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_close</span> — <span class="dc-title">从多句柄中移除所有 cURL 句柄</span></p> </div>  <div class="refsect1 description" id="refsect1-function.curl-multi-close-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_multi_close</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="type CurlMultiHandle" style="color:#EAB766">CurlMultiHandle</a></span> <span class="parameter" style="color:#3A95FF">\$multi_handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   移除所有附加到 <span class="classname"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span> 的 <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span>，就像为每个   <span class="classname"><a href="https://php.net/manual/zh/class.curlhandle.php" class="classname">CurlHandle</a></span> 调用了 <span class="function">{@link curl_multi_remove_handle()}</span> 一样。  </p>  <p class="para">   PHP 8.0.0 之前，此函数还会关闭 cURL 多句柄资源，使其无法使用。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-multi-close-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>    <dt><span class="parameter" style="color:#3A95FF">multi_handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_multi_init()}</span> 返回的 cURL 多个句柄。</p></dd>   </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-close-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-multi-close-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">multi_handle</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span>  instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected. </td></tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.curl-multi-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link curl_multi_init()} - 返回新 cURL 批处理句柄</span></li>    <li><span class="function">{@link curl_close()} - 关闭 cURL 会话</span></li>   </ul>   </div></div>
 * 
 * Close a set of cURL handles
 * @link https://php.net/manual/zh/function.curl-multi-close.php
 * @param CurlMultiHandle|resource $multi_handle
 * @return void
 */
function curl_multi_close(#[LanguageLevelTypeAware(['8.0' => 'CurlMultiHandle'], default: 'resource')] $multi_handle): void {}

/**
 * <div id="function.curl-multi-errno" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_multi_errno</h1>  <p class="verinfo">(PHP 7 &gt;= 7.1.0, PHP 8)</p><p class="refpurpose"><span class="refname">curl_multi_errno</span> — <span class="dc-title">返回上一次 curl 批处理的错误码</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-multi-errno-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_multi_errno</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="type CurlMultiHandle" style="color:#EAB766">CurlMultiHandle</a></span> <span class="parameter" style="color:#3A95FF">\$multi_handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   返回整型数字，为上次 curl 批处理错误码。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-multi-errno-parameters">  <h3 class="title">参数</h3>  <dl>    <dt><span class="parameter" style="color:#3A95FF">multi_handle</span></dt><dd><p class="para">由 <span class="function">{@link curl_multi_init()}</span> 返回的 cURL 多个句柄。</p></dd>  </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-multi-errno-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回整型数字，包含上次 curl 批处理的错误码。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-multi-errno-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       失败时此函数不再返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。      </td>     </tr>     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">multi_handle</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.curlmultihandle.php" class="classname">CurlMultiHandle</a></span>  instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected. </td></tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.curl-multi-errno-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link curl_errno()} - 返回最后一次的错误代码</span></li>  </ul> </div></div>
 * 
 * Return the last multi curl error number
 * @param CurlMultiHandle|resource $multi_handle
 * @return int
 * @since 7.1
 */
#[Pure(true)]
function curl_multi_errno(#[LanguageLevelTypeAware(['8.0' => 'CurlMultiHandle'], default: 'resource')] $multi_handle): int {}

/**
 * <div id="function.curl-share-errno" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_share_errno</h1>  <p class="verinfo">(PHP 7 &gt;= 7.1.0, PHP 8)</p><p class="refpurpose"><span class="refname">curl_share_errno</span> — <span class="dc-title">返回共享 curl 句柄的最后一次错误编号</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-share-errno-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_share_errno</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.curlsharehandle.php" class="type CurlShareHandle" style="color:#EAB766">CurlShareHandle</a></span> <span class="parameter" style="color:#3A95FF">\$share_handle</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   返回整数，表示共享 curl 句柄的最后一次错误编号。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-share-errno-parameters">  <h3 class="title">参数</h3>  <dl>   <dt><span class="parameter" style="color:#3A95FF">share_handle</span></dt><dd><p class="para">A cURL share handle returned by<span class="function">{@link curl_share_init()}</span>.</p></dd>  </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-share-errno-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回整数，表示共享 curl 句柄的最后一次错误编号。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.curl-share-errno-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       失败时函数不再返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。      </td>     </tr>     <tr> <td>8.0.0</td> <td>  <span class="parameter" style="color:#3A95FF">share_handle</span> expects a <span class="classname"><a href="https://php.net/manual/zh/class.curlsharehandle.php" class="classname">CurlShareHandle</a></span>  instance now; previously, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> was expected. </td></tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.curl-share-errno-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link curl_errno()} - 返回最后一次的错误代码</span></li>  </ul> </div></div>
 * 
 * Return the last share curl error number
 * @param CurlMultiHandle|resource $share_handle
 * @return int
 * @since 7.1
 */
#[Pure(true)]
function curl_share_errno(#[LanguageLevelTypeAware(['8.0' => 'CurlShareHandle'], default: 'resource')] $share_handle): int {}

/**
 * <div id="function.curl-share-strerror" class="refentry"> <div class="refnamediv">  <h1 class="refname">curl_share_strerror</h1>  <p class="verinfo">(PHP 7 &gt;= 7.1.0, PHP 8)</p><p class="refpurpose"><span class="refname">curl_share_strerror</span> — <span class="dc-title">返回错误编号对应的错误消息</span></p> </div> <div class="refsect1 description" id="refsect1-function.curl-share-strerror-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>curl_share_strerror</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$error_code</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span></div>  <p class="para rdfs-comment">   返回错误编号对应的错误消息。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.curl-share-strerror-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">error_code</span></dt>    <dd>     <p class="para">      某个 <a href="http://curl.haxx.se/libcurl/c/libcurl-errors.html" class="link external">»&nbsp;cURL 错误代码</a>常量。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.curl-share-strerror-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回错误描述。错误代码无效则为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.curl-share-strerror-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link curl_share_errno()} - 返回共享 curl 句柄的最后一次错误编号</span></li>   <li><span class="function">{@link curl_strerror()} - 返回错误代码的字符串描述</span></li>  </ul> </div></div>
 * 
 * Return string describing the given error code
 * @param int $error_code
 * @return string|null
 * @since 7.1
 */
#[Pure]
function curl_share_strerror(int $error_code): ?string {}

/**
 * @since 8.2
 */
function curl_upkeep(CurlHandle $handle): bool {}
/**
 * @since 8.0
 */
final class CurlHandle
{
    /**
     * Cannot directly construct CurlHandle, use curl_init() instead
     * @see curl_init()
     */
    private function __construct() {}
}

/**
 * @since 8.0
 */
final class CurlMultiHandle
{
    /**
     * Cannot directly construct CurlMultiHandle, use curl_multi_init() instead
     * @see curl_multi_init()
     */
    private function __construct() {}
}

/**
 * @since 8.0
 */
final class CurlShareHandle
{
    /**
     * Cannot directly construct CurlShareHandle, use curl_share_init() instead
     * @see  curl_share_init()
     */
    private function __construct() {}
}
