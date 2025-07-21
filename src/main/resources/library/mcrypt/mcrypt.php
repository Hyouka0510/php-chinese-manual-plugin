<?php

// Start of mcrypt v.
use JetBrains\PhpStorm\Deprecated;

/**
 * Encrypt/decrypt data in ECB mode
 * @link https://php.net/manual/en/function.mcrypt-ecb.php
 * @param string|int $cipher
 * @param string $key
 * @param string $data
 * @param int $mode
 * @return string
 * @removed 7.0
 */
#[Deprecated(since: "5.5")]
function mcrypt_ecb($cipher, $key, $data, $mode) {}

/**
 * Encrypt/decrypt data in CBC mode
 * @link https://php.net/manual/en/function.mcrypt-cbc.php
 * @param int|string $cipher
 * @param string $key
 * @param string $data
 * @param int $mode
 * @param string $iv [optional]
 * @return string
 * @removed 7.0
 */
#[Deprecated(since: "5.5")]
function mcrypt_cbc($cipher, $key, $data, $mode, $iv = null) {}

/**
 * Encrypt/decrypt data in CFB mode
 * @link https://php.net/manual/en/function.mcrypt-cfb.php
 * @param int|string $cipher
 * @param string $key
 * @param string $data
 * @param int $mode
 * @param string $iv [optional]
 * @return string
 * @removed 7.0
 */
#[Deprecated(since: '5.5')]
function mcrypt_cfb($cipher, $key, $data, $mode, $iv = null) {}

/**
 * Encrypt/decrypt data in OFB mode
 * @link https://php.net/manual/en/function.mcrypt-ofb.php
 * @param int|string $cipher
 * @param string $key
 * @param string $data
 * @param int $mode
 * @param string $iv [optional]
 * @return string
 * @removed 7.0
 */
#[Deprecated(since: '5.5')]
function mcrypt_ofb($cipher, $key, $data, $mode, $iv = null) {}

/**
* <div id="function.mcrypt-get-key-size" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_get_key_size</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_get_key_size</span> — <span class="dc-title">获取指定加密算法的密钥大小</span></p> </div> <div id="function.mcrypt-get-key-size-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-get-key-size-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_get_key_size</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$cipher</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>mcrypt_get_key_size</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$cipher</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$mode</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   第一个原型是针对 libmcrypt 2.2.x 的，   第二个原型是针对 libmcrypt 2.4.x 或 2.5.x 的。  </p>  <p class="para">   <span class="function"><strong>mcrypt_get_key_size()</strong></span> 用来获取   由 <span class="parameter" style="color:#3A95FF">cipher</span>    所指定的算法和模式所需的密钥长度。  </p>  <p class="para">   <span class="function">{@link mcrypt_enc_get_key_size()}</span> 更加有用，   因为它使用由 <span class="function">{@link mcrypt_module_open()}</span> 返回的资源。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-get-key-size-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">cipher</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_ciphername</span></strong> 常量中的一个，或者是字符串值的算法名称。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_MODE_modename</span></strong> 常量中的一个，或以下字符串中的一个："ecb"，"cbc"，"cfb"，"ofb"，"nofb" 和 "stream"。</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-get-key-size-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回算法所支持的最大密钥大小，以字节为单位。    或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-get-key-size-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-974">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_get_key_size()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    </span><span style="color: #007700">echo </span><span style="color: #9876AA">mcrypt_get_key_size</span><span style="color: #007700">(</span><span style="color: #DD0000">'tripledes'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ecb'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     在 libmcrypt 2.4.x 或 2.5.x 版本中，     如果使用本函数。    </p></div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">24</blockquote></div>    </div>   </div>      </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-get-key-size-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mcrypt_get_block_size()} - 获得加密算法的分组大小</span></li>    <li><span class="function">{@link mcrypt_enc_get_key_size()} - 返回打开的模式所能支持的最长密钥</span></li>    <li><span class="function">{@link mcrypt_encrypt()} - 使用给定参数加密明文</span></li>   </ul>   </div></div>
*
 * Get the key size of the specified cipher
 * @link https://php.net/manual/zh/function.mcrypt-get-key-size.php
 * @param int|string $cipher
 * @param string $module
 * @return int
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_get_key_size($cipher, $module) {}

/**
* <div id="function.mcrypt-get-block-size" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_get_block_size</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_get_block_size</span> — <span class="dc-title">获得加密算法的分组大小</span></p> </div> <div id="function.mcrypt-get-block-size-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-get-block-size-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_get_block_size</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$cipher</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>mcrypt_get_block_size</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$cipher</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$mode</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   第一个原型针对 libmcrypt 2.2.x，   第二个原型针对 libmcrypt 2.4.x 或 2.5.x。  </p>  <p class="para">   <span class="function"><strong>mcrypt_get_block_size()</strong></span> 用来获取   <span class="parameter" style="color:#3A95FF">cipher</span> （其中包括了加密模式）   加密算法分组大小。  </p>  <p class="para">   <span class="function">{@link mcrypt_enc_get_block_size()}</span> 函数更加有用，   因为它可以使用 <span class="function">{@link mcrypt_module_open()}</span>   函数所返回的资源。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-get-block-size-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">cipher</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_ciphername</span></strong> 常量中的一个，或者是字符串值的算法名称。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_MODE_modename</span></strong> 常量中的一个，或以下字符串中的一个："ecb"，"cbc"，"cfb"，"ofb"，"nofb" 和 "stream"。</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-get-block-size-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回以字节为单位的此算法的分组数据大小。 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-get-block-size-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-971">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_get_block_size()</strong></span> 示例</strong></p>    <div class="example-contents"><p>     在 libmcrypt 2.4.x 和 2.5.x 下     如何使用本函数。    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #007700">echo </span><span style="color: #9876AA">mcrypt_get_block_size</span><span style="color: #007700">(</span><span style="color: #DD0000">'tripledes'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ecb'</span><span style="color: #007700">); </span><span style="color: #FF8000">// 8<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-get-block-size-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mcrypt_get_key_size()} - 获取指定加密算法的密钥大小</span></li>    <li><span class="function">{@link mcrypt_enc_get_block_size()} - 返回打开的算法的分组大小</span></li>    <li><span class="function">{@link mcrypt_encrypt()} - 使用给定参数加密明文</span></li>   </ul>   </div></div>
*
 * Get the block size of the specified cipher
 * @link https://php.net/manual/zh/function.mcrypt-get-block-size.php
 * @param string|int $cipher <p>
 * One of the MCRYPT_ciphername constants or the name
 * of the algorithm as string.
 * </p>
 * @param string $module <p>
 * One of the <b>MCRYPT_MODE_modename</b> constants, or one of the following strings: "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".</p>
 * @return int Gets the block size, as an integer.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_get_block_size($cipher, $module) {}

/**
* <div id="function.mcrypt-get-cipher-name" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_get_cipher_name</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_get_cipher_name</span> — <span class="dc-title">获取加密算法名称</span></p> </div> <div id="function.mcrypt-get-cipher-name-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-get-cipher-name-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_get_cipher_name</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$cipher</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>mcrypt_get_cipher_name</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$cipher</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>mcrypt_get_cipher_name()</strong></span>    用来获取加密算法名称。  </p>  <p class="para">   libmcrypt 2.2.x 中，<span class="function"><strong>mcrypt_get_cipher_name()</strong></span>   接受整数表达的加密算法，   libmcrypt 2.4.x 及更高版本中，它接受字符串表达的加密算法名称，   返回的都是字符串表达的名称，如果算法不存在则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-get-cipher-name-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">cipher</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_ciphername</span></strong> 常量中的一个，或者是字符串值的算法名称。</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-get-cipher-name-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   本函数返回加密算法名称，   如果算法不存在返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-get-cipher-name-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-972">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_get_cipher_name()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>   $cipher </span><span style="color: #007700">= </span><span style="color: #9876AA">MCRYPT_TripleDES</span><span style="color: #007700">;<br><br>   echo </span><span style="color: #9876AA">mcrypt_get_cipher_name</span><span style="color: #007700">(</span><span style="color: #9876AA">$cipher</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">3DES</blockquote></div>    </div>   </div>   </div></div>
*
 * Get the name of the specified cipher
 * @link https://php.net/manual/zh/function.mcrypt-get-cipher-name.php
 * @param int|string $cipher <p>
 * One of the MCRYPT_ciphername constants or the name
 * of the algorithm as string.
 * </p>
 * @return string|false This function returns the name of the cipher or false, if the cipher does
 * not exist.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_get_cipher_name($cipher) {}

/**
* <div id="function.mcrypt-create-iv" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_create_iv</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_create_iv</span> — <span class="dc-title">从随机源创建初始向量</span></p> </div> <div id="function.mcrypt-create-iv-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong>   <p class="para">  此函数自 PHP 7.1.0 起<em>弃用</em>，并在 PHP 7.2.0 中<em>移除</em>。</p><p class="para"> 此函数可以使用如下替代：</p>   <ul class="simplelist">    <li><span class="function">{@link random_bytes()}</span></li>   </ul>  </div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-create-iv-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_create_iv</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$size</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$source</span><span class="initializer"> = MCRYPT_DEV_URANDOM</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   从随机源创建初始向量。  </p>  <p class="para">   初始向量只是为了给加密算法提供一个可用的种子，   所以它不需要安全保护，   你甚至可以随同密文一起发布初始向量也不会对安全性带来影响。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-create-iv-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">size</span></dt>     <dd>      <p class="para">       初始向量大小。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">source</span></dt>     <dd>      <p class="para">       初始向量数据来源。可选值有：       <strong><span><a href="https://php.net/manual/zh/mcrypt.constants.php#constant.mcrypt-rand">MCRYPT_RAND</a></span></strong> （系统随机数生成器）,       <strong><span><a href="https://php.net/manual/zh/mcrypt.constants.php#constant.mcrypt-dev-random">MCRYPT_DEV_RANDOM</a></span></strong> （从       <var class="filename">/dev/random</var> 文件读取数据） 和       <strong><span><a href="https://php.net/manual/zh/mcrypt.constants.php#constant.mcrypt-dev-urandom">MCRYPT_DEV_URANDOM</a></span></strong> （从       <var class="filename">/dev/urandom</var> 文件读取数据）。       在 Windows 平台，PHP 5.3.0 之前的版本中，仅支持 <strong><span><a href="https://php.net/manual/zh/mcrypt.constants.php#constant.mcrypt-rand">MCRYPT_RAND</a></span></strong>。      </p>      <p class="para">       请注意，在 PHP 5.6.0 之前的版本中，       此参数的默认值为 <strong><span><a href="https://php.net/manual/zh/mcrypt.constants.php#constant.mcrypt-dev-random">MCRYPT_DEV_RANDOM</a></span></strong>。      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        <span class="simpara">        需要注意的是，如果没有更多可用的用来产生随机数据的信息，那么        <strong><span><a href="https://php.net/manual/zh/mcrypt.constants.php#constant.mcrypt-dev-random">MCRYPT_DEV_RANDOM</a></span></strong> 可能进入阻塞状态。       </span>      </p></blockquote>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-create-iv-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回初始向量。如果发生错误，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-create-iv-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-966">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_create_iv()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    $size </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #9876AA">MCRYPT_CAST_256</span><span style="color: #007700">, </span><span style="color: #9876AA">MCRYPT_MODE_CFB</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">$iv </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #9876AA">$size</span><span style="color: #007700">, </span><span style="color: #9876AA">MCRYPT_DEV_RANDOM</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-create-iv-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><a href="http://www.ciphersbyritter.com/GLOSSARY.HTM#IV" class="link external">» http://www.ciphersbyritter.com/GLOSSARY.HTM#IV</a></li>    <li><a href="http://www.quadibloc.com/crypto/co0409.htm" class="link external">» http://www.quadibloc.com/crypto/co0409.htm</a></li>    <li>Applied Cryptography by Schneier (ISBN 0-471-11709-9) 9.3 节。</li>    <li><span class="function">{@link random_bytes()} - Get cryptographically secure random bytes</span></li>   </ul>   </div></div>
*
 * Creates an initialization vector (IV) from a random source
 * @link https://php.net/manual/zh/function.mcrypt-create-iv.php
 * @param int $size <p>
 * Determines the size of the IV, parameter source
 * (defaults to random value) specifies the source of the IV.
 * </p>
 * @param int $source [optional] <p>
 * The source can be MCRYPT_RAND (system random
 * number generator), MCRYPT_DEV_RANDOM (read
 * data from /dev/random) and
 * MCRYPT_DEV_URANDOM (read data from
 * /dev/urandom). MCRYPT_RAND
 * is the only one supported on Windows because Windows (of course)
 * doesn't have /dev/random or
 * /dev/urandom.
 * </p>
 * <p>
 * When using MCRYPT_RAND, remember to call
 * srand before
 * mcrypt_create_iv to initialize the random
 * number generator; it is not seeded automatically like
 * rand is.
 * </p>
 * @return string|false the initialization vector, or false on error.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_create_iv($size, $source = MCRYPT_DEV_URANDOM) {}

/**
* <div id="function.mcrypt-list-algorithms" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_list_algorithms</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_list_algorithms</span> — <span class="dc-title">获取支持的加密算法</span></p> </div> <div id="function.mcrypt-list-algorithms-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-list-algorithms-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_list_algorithms</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$lib_dir</span><span class="initializer"> = ini_get("mcrypt.algorithms_dir")</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   获取 <span class="parameter" style="color:#3A95FF">lib_dir</span> 中   包含的受支持的算法。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-list-algorithms-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">lib_dir</span></dt>     <dd>      <p class="para">       指定算法所在的位置。       如果未指定，将使用 <var class="filename">php.ini</var>       中的 <span class="literal">mcrypt.algorithms_dir</span> 指示所指定的位置。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-list-algorithms-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   以数组方式返回所有受支持的算法。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.mcrypt-list-algorithms-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-975">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_list_algorithms()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$algorithms </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_list_algorithms</span><span style="color: #007700">();<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$algorithms</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>    [0] =&gt; cast-128<br>    [1] =&gt; gost<br>    [2] =&gt; rijndael-128<br>    [3] =&gt; twofish<br>    [4] =&gt; arcfour<br>    [5] =&gt; cast-256<br>    [6] =&gt; loki97<br>    [7] =&gt; rijndael-192<br>    [8] =&gt; saferplus<br>    [9] =&gt; wake<br>    [10] =&gt; blowfish-compat<br>    [11] =&gt; des<br>    [12] =&gt; rijndael-256<br>    [13] =&gt; serpent<br>    [14] =&gt; xtea<br>    [15] =&gt; blowfish<br>    [16] =&gt; enigma<br>    [17] =&gt; rc2<br>    [18] =&gt; tripledes<br>)</blockquote></div>    </div>   </div>   </div></div>
*
 * Gets an array of all supported ciphers
 * @link https://php.net/manual/zh/function.mcrypt-list-algorithms.php
 * @param string $lib_dir [optional] <p>
 * Specifies the directory where all algorithms are located. If not
 * specifies, the value of the mcrypt.algorithms_dir (php.ini) directive
 * is used.
 * </p>
 * @return array an array with all the supported algorithms.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_list_algorithms($lib_dir = null) {}

/**
* <div id="function.mcrypt-list-modes" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_list_modes</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_list_modes</span> — <span class="dc-title">获取所支持的模式</span></p> </div> <div id="function.mcrypt-list-modes-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-list-modes-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_list_modes</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$lib_dir</span><span class="initializer"> = ini_get("mcrypt.modes_dir")</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   获取 <span class="parameter" style="color:#3A95FF">lib_dir</span> 中   包含的受支持的模式。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-list-modes-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">lib_dir</span></dt>     <dd>      <p class="para">       指定模式所在的位置。       如果未指定，将使用 <var class="filename">php.ini</var>       中的 <span class="literal">mcrypt.modes_dir</span> 指示所指定的位置。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-list-modes-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   以数组形式返回受支持的模式。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-list-modes-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-976">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_list_modes()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    $modes </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_list_modes</span><span style="color: #007700">();<br><br>    foreach (</span><span style="color: #9876AA">$modes </span><span style="color: #007700">as </span><span style="color: #9876AA">$mode</span><span style="color: #007700">) {<br>        echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">$mode</span><span style="color: #DD0000"> &lt;br /&gt;\n"</span><span style="color: #007700">;<br>    }<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     本示例列出在默认目录中     所有受支持的模式。     如果在 <var class="filename">php.ini</var> 中未指定 <span class="literal">mcrypt.modes_dir</span>，     则使用默认的 mcrypt 库     安装目录（<var class="filename">/usr/local/lib/libmcrypt</var>）。    </p></div>   </div>   </div></div>
*
 * Gets an array of all supported modes
 * @link https://php.net/manual/zh/function.mcrypt-list-modes.php
 * @param string $lib_dir [optional] <p>
 * Specifies the directory where all modes are located. If not
 * specifies, the value of the mcrypt.modes_dir
 * (php.ini) directive is used.
 * </p>
 * @return array an array with all the supported modes.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_list_modes($lib_dir = null) {}

/**
* <div id="function.mcrypt-get-iv-size" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_get_iv_size</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_get_iv_size</span> — <span class="dc-title">返回指定算法/模式组合的初始向量大小</span></p> </div> <div id="function.mcrypt-get-iv-size-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-get-iv-size-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_get_iv_size</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$cipher</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$mode</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   获取由 <span class="parameter" style="color:#3A95FF">cipher</span>/<span class="parameter" style="color:#3A95FF">mode</span>   参数指定的初始向量大小。  </p>  <p class="para">   <span class="function">{@link mcrypt_enc_get_iv_size()}</span> 更加有用，   因为它使用由 <span class="function">{@link mcrypt_module_open()}</span>    返回的资源作为参数。  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.mcrypt-get-iv-size-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">cipher</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_ciphername</span></strong> 常量中的一个，或者是字符串值的算法名称。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_MODE_modename</span></strong> 常量中的一个，或以下字符串中的一个："ecb"，"cbc"，"cfb"，"ofb"，"nofb" 和 "stream"。</p>      <p class="para">       由于 ECB 模式不使用初始向量，所以会忽略它。       在加密和解密的过程中，       你需要使用相同的初始向量（想象成：开始点）。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-get-iv-size-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回初始向量的大小，以字节为单位。   如果发生错误，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   如果指定的算法/模式不需要初始向量，返回 0。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-get-iv-size-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-973">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_get_iv_size()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    </span><span style="color: #007700">echo </span><span style="color: #9876AA">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #9876AA">MCRYPT_CAST_256</span><span style="color: #007700">, </span><span style="color: #9876AA">MCRYPT_MODE_CFB</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br>    echo </span><span style="color: #9876AA">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #DD0000">'des'</span><span style="color: #007700">, </span><span style="color: #DD0000">'ecb'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-get-iv-size-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mcrypt_get_block_size()} - 获得加密算法的分组大小</span></li>    <li><span class="function">{@link mcrypt_enc_get_iv_size()} - 返回打开的算法的初始向量大小</span></li>    <li><span class="function">{@link mcrypt_create_iv()} - 从随机源创建初始向量</span></li>   </ul>   </div></div>
*
 * Returns the size of the IV belonging to a specific cipher/mode combination
 * @link https://php.net/manual/zh/function.mcrypt-get-iv-size.php
 * @param string $cipher <p>
 * One of the MCRYPT_ciphername constants of the name
 * of the algorithm as string.
 * </p>
 * @param string $module <p>
 * mode is one of the MCRYPT_MODE_modename constants
 * or one of "ecb", "cbc", "cfb", "ofb", "nofb" or "stream". The IV is
 * ignored in ECB mode as this mode does not require it. You will need to
 * have the same IV (think: starting point) both at encryption and
 * decryption stages, otherwise your encryption will fail.
 * </p>
 * @return int|false the size of the Initialisation Vector (IV) in bytes. On error the
 * function returns false. If the IV is ignored in the specified cipher/mode
 * combination zero is returned.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_get_iv_size($cipher, $module) {}

/**
* <div id="function.mcrypt-encrypt" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_encrypt</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_encrypt</span> — <span class="dc-title">使用给定参数加密明文</span></p> </div>  <div id="function.mcrypt-encrypt-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div>  <div class="refsect1 description" id="refsect1-function.mcrypt-encrypt-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_encrypt</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$cipher</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$key</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$data</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$mode</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$iv</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   加密数据并返回密文。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-encrypt-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">cipher</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_ciphername</span></strong> 常量中的一个，或者是字符串值的算法名称。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">key</span></dt>     <dd>      <p class="para">       加密密钥。       如果密钥长度不是该算法所能够支持的有效长度，则函数将会发出警告并返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       使用给定的 <span class="parameter" style="color:#3A95FF">cipher</span> 和 <span class="parameter" style="color:#3A95FF">mode</span>       加密的数据。       如果数据长度不是 n*分组大小，则在其后使用 '<span class="literal">\0</span>' 补齐。      </p>      <p class="para">       返回的密文长度可能比 <span class="parameter" style="color:#3A95FF">data</span>        更大。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_MODE_modename</span></strong> 常量中的一个，或以下字符串中的一个："ecb"，"cbc"，"cfb"，"ofb"，"nofb" 和 "stream"。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">iv</span></dt>     <dd>      <p class="para">Used for the initialization in CBC, CFB, OFB modes, and in some algorithms in STREAM mode. If the provided IV size is not supported by the chaining mode or no IV was provided, but the chaining mode requires one, the function will emit a warning and return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-encrypt-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   以字符串方式返回密文， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-encrypt-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-970">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_encrypt()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    </span><span style="color: #FF8000"># --- 加密 ---<br><br>    # 密钥应该是随机的二进制数据，<br>    # 开始使用 scrypt, bcrypt 或 PBKDF2 将一个字符串转换成一个密钥<br>    # 密钥是 16 进制字符串格式<br>    </span><span style="color: #9876AA">$key </span><span style="color: #007700">= </span><span style="color: #9876AA">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">'H*'</span><span style="color: #007700">, </span><span style="color: #DD0000">"bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3"</span><span style="color: #007700">);<br>    <br>    </span><span style="color: #FF8000"># 显示 AES-128, 192, 256 对应的密钥长度：<br>    #16，24，32 字节。<br>    </span><span style="color: #9876AA">$key_size </span><span style="color: #007700">=  </span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #9876AA">$key</span><span style="color: #007700">);<br>    echo </span><span style="color: #DD0000">"Key size: " </span><span style="color: #007700">. </span><span style="color: #9876AA">$key_size </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>    <br>    </span><span style="color: #9876AA">$plaintext </span><span style="color: #007700">= </span><span style="color: #DD0000">"This string was AES-256 / CBC / ZeroBytePadding encrypted."</span><span style="color: #007700">;<br><br>    </span><span style="color: #FF8000"># 为 CBC 模式创建随机的初始向量<br>    </span><span style="color: #9876AA">$iv_size </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_get_iv_size</span><span style="color: #007700">(</span><span style="color: #9876AA">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">, </span><span style="color: #9876AA">MCRYPT_MODE_CBC</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">$iv </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #9876AA">$iv_size</span><span style="color: #007700">, </span><span style="color: #9876AA">MCRYPT_RAND</span><span style="color: #007700">);<br>    <br><br>    </span><span style="color: #FF8000"># 创建和 AES 兼容的密文（Rijndael 分组大小 = 128）<br>    # 仅适用于编码后的输入不是以 00h 结尾的<br>    # （因为默认是使用 0 来补齐数据）<br>    </span><span style="color: #9876AA">$ciphertext </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_encrypt</span><span style="color: #007700">(</span><span style="color: #9876AA">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">, </span><span style="color: #9876AA">$key</span><span style="color: #007700">,<br>                                 </span><span style="color: #9876AA">$plaintext</span><span style="color: #007700">, </span><span style="color: #9876AA">MCRYPT_MODE_CBC</span><span style="color: #007700">, </span><span style="color: #9876AA">$iv</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000"># 将初始向量附加在密文之后，以供解密时使用<br>    </span><span style="color: #9876AA">$ciphertext </span><span style="color: #007700">= </span><span style="color: #9876AA">$iv </span><span style="color: #007700">. </span><span style="color: #9876AA">$ciphertext</span><span style="color: #007700">;<br>    <br>    </span><span style="color: #FF8000"># 对密文进行 base64 编码<br>    </span><span style="color: #9876AA">$ciphertext_base64 </span><span style="color: #007700">= </span><span style="color: #9876AA">base64_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">$ciphertext</span><span style="color: #007700">);<br><br>    echo  </span><span style="color: #9876AA">$ciphertext_base64 </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br>    </span><span style="color: #FF8000"># === 警告 ===<br><br>    # 密文并未进行完整性和可信度保护，<br>    # 所以可能遭受 Padding Oracle 攻击。<br>    <br>    # --- 解密 ---<br>    <br>    </span><span style="color: #9876AA">$ciphertext_dec </span><span style="color: #007700">= </span><span style="color: #9876AA">base64_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">$ciphertext_base64</span><span style="color: #007700">);<br>    <br>    </span><span style="color: #FF8000"># 初始向量大小，可以通过 mcrypt_get_iv_size() 来获得<br>    </span><span style="color: #9876AA">$iv_dec </span><span style="color: #007700">= </span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">$ciphertext_dec</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">$iv_size</span><span style="color: #007700">);<br>    <br>    </span><span style="color: #FF8000"># 获取除初始向量外的密文<br>    </span><span style="color: #9876AA">$ciphertext_dec </span><span style="color: #007700">= </span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">$ciphertext_dec</span><span style="color: #007700">, </span><span style="color: #9876AA">$iv_size</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000"># 可能需要从明文末尾移除 0<br>    </span><span style="color: #9876AA">$plaintext_dec </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_decrypt</span><span style="color: #007700">(</span><span style="color: #9876AA">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">, </span><span style="color: #9876AA">$key</span><span style="color: #007700">,<br>                                    </span><span style="color: #9876AA">$ciphertext_dec</span><span style="color: #007700">, </span><span style="color: #9876AA">MCRYPT_MODE_CBC</span><span style="color: #007700">, </span><span style="color: #9876AA">$iv_dec</span><span style="color: #007700">);<br>    <br>    echo  </span><span style="color: #9876AA">$plaintext_dec </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Key size: 32<br>ENJW8mS2KaJoNB5E5CoSAAu0xARgsR1bdzFWpEn+poYw45q+73az5kYi4j+0haevext1dGrcW8Qi59txfCBV8BBj3bzRP3dFCp3CPQSJ8eU=<br>This string was AES-256 / CBC / ZeroBytePadding encrypted.</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-encrypt-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mcrypt_decrypt()} - 使用给定参数解密密文</span></li>    <li><span class="function">{@link mcrypt_module_open()} - 打开算法和模式对应的模块</span></li>   </ul>   </div></div>
*
 * Encrypts plaintext with given parameters
 * @link https://php.net/manual/zh/function.mcrypt-encrypt.php
 * @param string $cipher <p>
 * One of the MCRYPT_ciphername
 * constants of the name of the algorithm as string.
 * </p>
 * @param string $key <p>
 * The key with which the data will be encrypted. If it's smaller that
 * the required keysize, it is padded with '\0'. It is
 * better not to use ASCII strings for keys.
 * </p>
 * <p>
 * It is recommended to use the mhash functions to create a key from a
 * string.
 * </p>
 * @param string $data <p>
 * The data that will be encrypted with the given cipher and mode. If the
 * size of the data is not n * blocksize, the data will be padded with
 * '\0'.
 * </p>
 * <p>
 * The returned crypttext can be larger that the size of the data that is
 * given by data.
 * </p>
 * @param string $mode <p>
 * One of the MCRYPT_MODE_modename
 * constants of one of "ecb", "cbc", "cfb", "ofb", "nofb" or
 * "stream".
 * </p>
 * @param string $iv [optional] <p>
 * Used for the initialisation in CBC, CFB, OFB modes, and in some
 * algorithms in STREAM mode. If you do not supply an IV, while it is
 * needed for an algorithm, the function issues a warning and uses an
 * IV with all bytes set to '\0'.
 * </p>
 * @return string the encrypted data, as a string.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_encrypt($cipher, $key, $data, $mode, $iv = null) {}

/**
* <div id="function.mcrypt-decrypt" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_decrypt</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_decrypt</span> — <span class="dc-title">使用给定参数解密密文</span></p> </div> <div id="function.mcrypt-decrypt-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-decrypt-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_decrypt</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$cipher</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$key</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$data</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$mode</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$iv</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   解密 <span class="parameter" style="color:#3A95FF">data</span> 并返回明文。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-decrypt-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">cipher</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_ciphername</span></strong> 常量中的一个，或者是字符串值的算法名称。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">key</span></dt>     <dd>      <p class="para">       数据加密密钥。       如果密钥长度不是加解密算法能够支持的有效长度，       那么会产生警告并且返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       要使用给定的 <span class="parameter" style="color:#3A95FF">cipher</span> 和       <span class="parameter" style="color:#3A95FF">mode</span> 解密的数据。       如果数据大小不是 n * 分组大小，则在其后追加 '<span class="literal">\0</span>' 来补齐。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_MODE_modename</span></strong> 常量中的一个，或以下字符串中的一个："ecb"，"cbc"，"cfb"，"ofb"，"nofb" 和 "stream"。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">iv</span></dt>     <dd>      <p class="para">Used for the initialization in CBC, CFB, OFB modes, and in some algorithms in STREAM mode. If the provided IV size is not supported by the chaining mode or no IV was provided, but the chaining mode requires one, the function will emit a warning and return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-decrypt-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   以字符串格式返回解密后的数据，  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-decrypt-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mcrypt_encrypt()} - 使用给定参数加密明文</span></li>   </ul>   </div></div>
*
 * Decrypts crypttext with given parameters
 * @link https://php.net/manual/zh/function.mcrypt-decrypt.php
 * @param string $cipher <p>
 * cipher is one of the MCRYPT_ciphername constants
 * of the name of the algorithm as string.
 * </p>
 * @param string $key <p>
 * key is the key with which the data is encrypted.
 * If it's smaller that the required keysize, it is padded with
 * '\0'.
 * </p>
 * @param string $data <p>
 * data is the data that will be decrypted with
 * the given cipher and mode. If the size of the data is not n * blocksize,
 * the data will be padded with '\0'.
 * </p>
 * @param string $mode <p>
 * mode is one of the MCRYPT_MODE_modename
 * constants of one of "ecb", "cbc", "cfb", "ofb", "nofb" or "stream".
 * </p>
 * @param string $iv [optional] <p>
 * The iv parameter is used for the initialisation
 * in CBC, CFB, OFB modes, and in some algorithms in STREAM mode. If you
 * do not supply an IV, while it is needed for an algorithm, the function
 * issues a warning and uses an IV with all bytes set to
 * '\0'.
 * </p>
 * @return string the decrypted data as a string.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_decrypt($cipher, $key, $data, $mode, $iv = null) {}

/**
* <div id="function.mcrypt-module-open" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_module_open</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_module_open</span> — <span class="dc-title">打开算法和模式对应的模块</span></p> </div> <div id="function.mcrypt-module-open-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-module-open-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_module_open</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$algorithm</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$algorithm_directory</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$mode</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$mode_directory</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <p class="para rdfs-comment">   本函数打开指定算法和模式对应的模块。   算法名称可以是字符串，例如 <span class="literal">"twofish"</span>，   也可以是 <strong><span>MCRYPT_ciphername</span></strong> 常量。   调用 <span class="function">{@link mcrypt_module_close()}</span> 函数可以关闭模块。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-module-open-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">algorithm</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_ciphername</span></strong> 常量中的一个，或者是字符串值的算法名称。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">algorithm_directory</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">algorithm_directory</span> 参数指示加密模块的位置。       如果你提供此参数，则使用你指定的值。       如果将此参数设置为空字符串（<span class="literal">""</span>），将使用       <var class="filename">php.ini</var> 中的 <span class="literal">mcrypt.algorithms_dir</span> 。       如果不指定此参数，则使用 libmcrypt 的编译路径       （通常是 <var class="filename">/usr/local/lib/libmcrypt</var>）。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_MODE_modename</span></strong> 常量中的一个，或以下字符串中的一个："ecb"，"cbc"，"cfb"，"ofb"，"nofb" 和 "stream"。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode_directory</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">algorithm_directory</span> 参数指示加密模式的位置。       如果你提供此参数，则使用你指定的值。       如果将此参数设置为空字符串（<span class="literal">""</span>），将使用       <var class="filename">php.ini</var> 中的 <span class="literal">mcrypt.modes_dir</span> 。       如果不指定此参数，则使用 libmcrypt 的编译路径       （通常是 <var class="filename">/usr/local/lib/libmcrypt</var>）。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-module-open-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功则返回加密描述符，如果发生错误则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-module-open-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-977">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_module_open()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    $td </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_module_open</span><span style="color: #007700">(</span><span style="color: #9876AA">MCRYPT_DES</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>        </span><span style="color: #9876AA">MCRYPT_MODE_ECB</span><span style="color: #007700">, </span><span style="color: #DD0000">'/usr/lib/mcrypt-modes'</span><span style="color: #007700">);<br><br>    </span><span style="color: #9876AA">$td </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_module_open</span><span style="color: #007700">(</span><span style="color: #DD0000">'rijndael-256'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">'ofb'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   示例中的第一行从默认目录打开 <span class="literal">DES</span> 加密算法，   从 <var class="filename">/usr/lib/mcrypt-modes</var> 目录打开   <span class="literal">ECB</span> 模式。   第二个示例中，使用字符串形式表示算法和模式，   这种形式仅适用于 libmcrypt 2.4.x 或 2.5.x 版本。  </p>  <p class="para">   </p><div class="example" id="example-978">    <p><strong>示例 #2 在加密中使用 <span class="function"><strong>mcrypt_module_open()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    </span><span style="color: #FF8000">// 打开加密算法和模式 <br>    </span><span style="color: #9876AA">$td </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_module_open</span><span style="color: #007700">(</span><span style="color: #DD0000">'rijndael-256'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">'ofb'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000">// 创建初始向量，并且检测密钥长度。 <br>     * Windows 平台请使用 MCRYPT_RAND。 <br>    </span><span style="color: #9876AA">$iv </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #9876AA">mcrypt_enc_get_iv_size</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">), </span><span style="color: #9876AA">MCRYPT_DEV_RANDOM</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">$ks </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_enc_get_key_size</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000">// 创建密钥 (此处仅为示例：MD5 不是一个好的哈希算法) <br>    </span><span style="color: #9876AA">$key </span><span style="color: #007700">= </span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">hash</span><span style="color: #007700">(</span><span style="color: #DD0000">'md5'</span><span style="color: #007700">, </span><span style="color: #DD0000">'very secret key'</span><span style="color: #007700">), </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">$ks</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000">// 初始化加密 <br>    </span><span style="color: #9876AA">mcrypt_generic_init</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">, </span><span style="color: #9876AA">$key</span><span style="color: #007700">, </span><span style="color: #9876AA">$iv</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000">// 加密数据 <br>    </span><span style="color: #9876AA">$encrypted </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_generic</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">, </span><span style="color: #DD0000">'This is very important data'</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000">// 结束加密，执行清理工作 <br>    </span><span style="color: #9876AA">mcrypt_generic_deinit</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000">// 初始化解密模块 <br>    </span><span style="color: #9876AA">mcrypt_generic_init</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">, </span><span style="color: #9876AA">$key</span><span style="color: #007700">, </span><span style="color: #9876AA">$iv</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000">// 解密数据 <br>    </span><span style="color: #9876AA">$decrypted </span><span style="color: #007700">= </span><span style="color: #9876AA">mdecrypt_generic</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">, </span><span style="color: #9876AA">$encrypted</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000">// 结束解密，执行清理工作，并且关闭模块 <br>    </span><span style="color: #9876AA">mcrypt_generic_deinit</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">mcrypt_module_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000">// 显示文本 <br>    </span><span style="color: #007700">echo </span><span style="color: #9876AA">trim</span><span style="color: #007700">(</span><span style="color: #9876AA">$decrypted</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-module-open-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mcrypt_module_close()} - 关闭加密模块</span></li>    <li><span class="function">{@link mcrypt_generic()} - 加密数据</span></li>    <li><span class="function">{@link mdecrypt_generic()} - 解密数据</span></li>    <li><span class="function">{@link mcrypt_generic_init()} - 初始化加密所需的缓冲区</span></li>    <li><span class="function">{@link mcrypt_generic_deinit()} - 对加密模块进行清理工作</span></li>   </ul>   </div></div>
*
 * Opens the module of the algorithm and the mode to be used
 * @link https://php.net/manual/zh/function.mcrypt-module-open.php
 * @param string $cipher <p>
 * The algorithm to be used.
 * </p>
 * @param string $cipher_directory <p>
 * The algorithm_directory and
 * mode_directory are used to locate the encryption
 * modules. When you supply a directory name, it is used. When you set one
 * of these to the empty string (""), the value set by
 * the mcrypt.algorithms_dir or
 * mcrypt.modes_dir ini-directive is used. When
 * these are not set, the default directories that are used are the ones
 * that were compiled in into libmcrypt (usually
 * /usr/local/lib/libmcrypt).
 * </p>
 * @param string $mode <p>
 * The mode to be used.
 * </p>
 * @param string $mode_directory <p>
 * </p>
 * @return resource|false Normally it returns an encryption descriptor, or false on error.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_module_open($cipher, $cipher_directory, $mode, $mode_directory) {}

/**
* <div id="function.mcrypt-generic-init" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_generic_init</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_generic_init</span> — <span class="dc-title">初始化加密所需的缓冲区</span></p> </div> <div id="function.mcrypt-generic-init-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-generic-init-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_generic_init</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$iv</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   在每次调用   <span class="function">{@link mcrypt_generic()}</span> 或   <span class="function">{@link mdecrypt_generic()}</span> 函数之前必须调用本函数。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-generic-init-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">key</span></dt>     <dd>      <p class="para">       调用 <span class="function">{@link mcrypt_enc_get_key_size()}</span>       函数获得的密钥最大长度。       小于最大长度的数值都被视为非法参数。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">iv</span></dt>     <dd>      <p class="para">       通常情况下，向量大小等于算法的分组大小，       但是你应该通过 <span class="function">{@link mcrypt_enc_get_iv_size()}</span> 函数       来获得这个值。在 ECB 模式下，初始向量会被忽略，       在 CFB，CBC，STREAM，nOFB 和 OFB 模式下，必须提供初始向量。       初始向量要求是随机的，并且是唯一的（不需要是安全的）。       加密和解密必须使用相同的初始向量。       如果你不想使用初始向量，请将其设置为全 0 值，但是不建议你这么做。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-generic-init-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果发生错误，将会返回负数：   -3 表示密钥长度有误，-4 表示内存分配失败，   其他值表示未知错误，   同时会显示对应的警告信息。   如果传入参数不正确，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-generic-init-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mcrypt_module_open()} - 打开算法和模式对应的模块</span></li>   </ul>   </div></div>
*
 * This function initializes all buffers needed for encryption
 * @link https://php.net/manual/zh/function.mcrypt-generic-init.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @param string $key <p>
 * The maximum length of the key should be the one obtained by calling
 * mcrypt_enc_get_key_size and every value smaller
 * than this is legal.
 * </p>
 * @param string $iv <p>
 * The IV should normally have the size of the algorithms block size, but
 * you must obtain the size by calling
 * mcrypt_enc_get_iv_size. IV is ignored in ECB. IV
 * MUST exist in CFB, CBC, STREAM, nOFB and OFB modes. It needs to be
 * random and unique (but not secret). The same IV must be used for
 * encryption/decryption. If you do not want to use it you should set it
 * to zeros, but this is not recommended.
 * </p>
 * @return int|false The function returns a negative value on error, -3 when the key length
 * was incorrect, -4 when there was a memory allocation problem and any
 * other return value is an unknown error. If an error occurs a warning will
 * be displayed accordingly. false is returned if incorrect parameters
 * were passed.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_generic_init($td, $key, $iv) {}

/**
* <div id="function.mcrypt-generic" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_generic</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_generic</span> — <span class="dc-title">加密数据</span></p> </div> <div id="function.mcrypt-generic-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-generic-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_generic</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$data</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">    本函数用来加密数据。    传入数据长度必须是 n * 分组大小，否则需要后补 "<span class="literal">\0</span>"。    本函数返回加密后的数据。    注意，根据数据补齐不同，    返回的数据可能比输入的数据长度有所增加。  </p>  <p class="para">    如果你需要把加密后的数据保存到数据库，    请确保保存 mcrypt_generic 返回的完整的字符串，    否则将无法正确解密。    如果原始数据有 10 个字符，分组大小为 8     （使用 <span class="function">{@link mcrypt_enc_get_block_size()}</span> 获取分组大小），    则数据库中至少需要 16 个字符来保存数据。    请注意 <span class="function">{@link mdecrypt_generic()}</span> 函数返回的数据也会是 16 个字符。    使用 rtrim($str, "\0") 移除字符串末尾的 0 。  </p>  <p class="para">    如果你在例如 MySQL 这样的数据库中存储数据，    请注意 varchar 类型的字段会在插入数据时自动移除字符串末尾的“空格”。    由于加密后的数据可能是以空格（ASCII 32）结尾，    这种特性会导致数据损坏。    请使用 tinyblob/tinytext（或 larger）字段来存储加密数据。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-generic-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>      <p class="para">        在调用本函数之前，        请使用 <span class="function">{@link mcrypt_generic_init()}</span> 函数初始化加密句柄。        在加密完成之后，        需要调用 <span class="function">{@link mcrypt_generic_deinit()}</span> 函数进行必要的清理工作。        请参见 <span class="function">{@link mcrypt_module_open()}</span> 。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       要加密的数据。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-generic-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回加密后的数据。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-generic-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mdecrypt_generic()} - 解密数据</span></li>    <li><span class="function">{@link mcrypt_generic_init()} - 初始化加密所需的缓冲区</span></li>    <li><span class="function">{@link mcrypt_generic_deinit()} - 对加密模块进行清理工作</span></li>   </ul>   </div></div>
*
 * This function encrypts data
 * @link https://php.net/manual/zh/function.mcrypt-generic.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * <p>
 * The encryption handle should always be initialized with
 * mcrypt_generic_init with a key and an IV before
 * calling this function. Where the encryption is done, you should free the
 * encryption buffers by calling mcrypt_generic_deinit.
 * See mcrypt_module_open for an example.
 * </p>
 * @param string $data <p>
 * The data to encrypt.
 * </p>
 * @return string the encrypted data.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_generic($td, $data) {}

/**
* <div id="function.mdecrypt-generic" class="refentry"> <div class="refnamediv">  <h1 class="refname">mdecrypt_generic</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mdecrypt_generic</span> — <span class="dc-title">解密数据</span></p> </div> <div id="function.mdecrypt-generic-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mdecrypt-generic-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mdecrypt_generic</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$data</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   解密数据。   请注意，由于存在数据补齐的情况，   返回字符串的长度可能和明文的长度不相等。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mdecrypt-generic-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       由       <span class="function">{@link mcrypt_module_open()}</span> 函数创建的加密描述符。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       密文。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mdecrypt-generic-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns decrypted string.  </p> </div> <div class="refsect1 examples" id="refsect1-function.mdecrypt-generic-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-980">    <p><strong>示例 #1 <span class="function"><strong>mdecrypt_generic()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    </span><span style="color: #FF8000">// 数据 <br>    </span><span style="color: #9876AA">$key </span><span style="color: #007700">= </span><span style="color: #DD0000">'this is a very long key, even too long for the cipher'</span><span style="color: #007700">;<br>    </span><span style="color: #9876AA">$plain_text </span><span style="color: #007700">= </span><span style="color: #DD0000">'very important data'</span><span style="color: #007700">;<br><br>    </span><span style="color: #FF8000">// 打开加密模块，并且创建初始向量 <br>    </span><span style="color: #9876AA">$td </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_module_open</span><span style="color: #007700">(</span><span style="color: #DD0000">'des'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">'ecb'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">$key </span><span style="color: #007700">= </span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">$key</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">mcrypt_enc_get_key_size</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">));<br>    </span><span style="color: #9876AA">$iv_size </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_enc_get_iv_size</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">$iv </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_create_iv</span><span style="color: #007700">(</span><span style="color: #9876AA">$iv_size</span><span style="color: #007700">, </span><span style="color: #9876AA">MCRYPT_RAND</span><span style="color: #007700">);<br><br>    </span><span style="color: #FF8000">// 初始化加密句柄 <br>    </span><span style="color: #007700">if (</span><span style="color: #9876AA">mcrypt_generic_init</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">, </span><span style="color: #9876AA">$key</span><span style="color: #007700">, </span><span style="color: #9876AA">$iv</span><span style="color: #007700">) != -</span><span style="color: #9876AA">1</span><span style="color: #007700">) {<br><br>        </span><span style="color: #FF8000">// 加密数据 <br>        </span><span style="color: #9876AA">$c_t </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_generic</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">, </span><span style="color: #9876AA">$plain_text</span><span style="color: #007700">);<br>        </span><span style="color: #9876AA">mcrypt_generic_deinit</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">);<br><br>        </span><span style="color: #FF8000">// 为解密重新初始化缓冲区 <br>        </span><span style="color: #9876AA">mcrypt_generic_init</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">, </span><span style="color: #9876AA">$key</span><span style="color: #007700">, </span><span style="color: #9876AA">$iv</span><span style="color: #007700">);<br>        </span><span style="color: #9876AA">$p_t </span><span style="color: #007700">= </span><span style="color: #9876AA">mdecrypt_generic</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">, </span><span style="color: #9876AA">$c_t</span><span style="color: #007700">);<br><br>        </span><span style="color: #FF8000">// 执行清理工作 <br>        </span><span style="color: #9876AA">mcrypt_generic_deinit</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">);<br>        </span><span style="color: #9876AA">mcrypt_module_close</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">);<br>    }<br><br>    if (</span><span style="color: #9876AA">strncmp</span><span style="color: #007700">(</span><span style="color: #9876AA">$p_t</span><span style="color: #007700">, </span><span style="color: #9876AA">$plain_text</span><span style="color: #007700">, </span><span style="color: #9876AA">strlen</span><span style="color: #007700">(</span><span style="color: #9876AA">$plain_text</span><span style="color: #007700">)) == </span><span style="color: #9876AA">0</span><span style="color: #007700">) {<br>        echo </span><span style="color: #DD0000">"ok\n"</span><span style="color: #007700">;<br>    } else {<br>        echo </span><span style="color: #DD0000">"error\n"</span><span style="color: #007700">;<br>    }<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   上例中演示了如何检测   解密后的数据是否和原始明文长度一致。   需要着重提醒的是，在对数据进行机密之前，   必须使用 <span class="function">{@link mcrypt_generic_init()}</span>    函数来重新初始化缓冲区。     </p>  <p class="para">   调用本函数之前，   必须使用密钥和初始向量来调用 <span class="function">{@link mcrypt_generic_init()}</span> 函数   对解密句柄进行初始化。   加解密工作完成之后，需要调用 <span class="function">{@link mcrypt_generic_deinit()}</span> 来释放加解密缓冲区。   示例请参见 <span class="function">{@link mcrypt_module_open()}</span>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.mdecrypt-generic-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mcrypt_generic()} - 加密数据</span></li>    <li><span class="function">{@link mcrypt_generic_init()} - 初始化加密所需的缓冲区</span></li>    <li><span class="function">{@link mcrypt_generic_deinit()} - 对加密模块进行清理工作</span></li>   </ul>   </div></div>
*
 * Decrypts data
 * @link https://php.net/manual/zh/function.mdecrypt-generic.php
 * @param resource $td <p>
 * An encryption descriptor returned by
 * mcrypt_module_open
 * </p>
 * @param string $data <p>
 * Encrypted data.
 * </p>
 * @return string
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mdecrypt_generic($td, $data) {}

/**
 * This function terminates encryption
 * @link https://php.net/manual/en/function.mcrypt-generic-end.php
 * @param resource $td
 * @return bool
 * @removed 7.0
 */
#[Deprecated(since: '5.3')]
function mcrypt_generic_end($td) {}

/**
* <div id="function.mcrypt-generic-deinit" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_generic_deinit</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.7, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_generic_deinit</span> — <span class="dc-title">对加密模块进行清理工作</span></p> </div> <div id="function.mcrypt-generic-deinit-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-generic-deinit-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_generic_deinit</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   本函数终止由加密描述符（<span class="parameter" style="color:#3A95FF">td</span>）指定的加密模块，   它会清理缓冲区，但是并不关闭模块。   要想关闭加密模块，   你需要自行调用 <span class="function">{@link mcrypt_module_close()}</span> 函数。   （但是 PHP 会在脚本末尾为你关闭已打开的加密模块）  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-generic-deinit-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-generic-deinit-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-generic-deinit-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mcrypt_module_open()} - 打开算法和模式对应的模块</span></li>    <li><span class="function">{@link mcrypt_generic_init()} - 初始化加密所需的缓冲区</span></li>   </ul>   </div></div>
*
 * This function deinitializes an encryption module
 * @link https://php.net/manual/zh/function.mcrypt-generic-deinit.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return bool true on success or false on failure.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_generic_deinit($td) {}

/**
* <div id="function.mcrypt-enc-self-test" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_enc_self_test</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_enc_self_test</span> — <span class="dc-title">在打开的模块上进行自检</span></p> </div> <div id="function.mcrypt-enc-self-test-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-enc-self-test-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_enc_self_test</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   在 <span class="parameter" style="color:#3A95FF">td</span> 指定的算法   上进行自检操作。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-enc-self-test-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-enc-self-test-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   自检成功返回 <span class="literal">0</span>，失败则返回一个小于零的<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>。  </p> </div></div>
*
 * Runs a self test on the opened module
 * @link https://php.net/manual/zh/function.mcrypt-enc-self-test.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return int Returns 0 on success and a negative integer on failure
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_enc_self_test($td) {}

/**
* <div id="function.mcrypt-enc-is-block-algorithm-mode" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_enc_is_block_algorithm_mode</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_enc_is_block_algorithm_mode</span> — <span class="dc-title">检测打开的模式是否支持分组加密</span></p> </div> <div id="function.mcrypt-enc-is-block-algorithm-mode-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-enc-is-block-algorithm-mode-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_enc_is_block_algorithm_mode</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   打开的模式的算法是否支持分组加密   （例如： 如果是流模式，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>， cbc，cfb，ofb 模式则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>）。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-enc-is-block-algorithm-mode-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-enc-is-block-algorithm-mode-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果算法支持分组模式，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，   反之返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
*
 * Checks whether the encryption of the opened mode works on blocks
 * @link https://php.net/manual/zh/function.mcrypt-enc-is-block-algorithm-mode.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return bool true if the mode is for use with block algorithms, otherwise it
 * returns false.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_enc_is_block_algorithm_mode($td) {}

/**
* <div id="function.mcrypt-enc-is-block-algorithm" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_enc_is_block_algorithm</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_enc_is_block_algorithm</span> — <span class="dc-title">检测打开模式的算法是否为分组算法</span></p> </div> <div id="function.mcrypt-enc-is-block-algorithm-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-enc-is-block-algorithm-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_enc_is_block_algorithm</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   打开模式的算法是否为分组算法。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-enc-is-block-algorithm-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-enc-is-block-algorithm-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果是分组算法，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，   如果是流模式，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
*
 * Checks whether the algorithm of the opened mode is a block algorithm
 * @link https://php.net/manual/zh/function.mcrypt-enc-is-block-algorithm.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return bool true if the algorithm is a block algorithm or false if it is
 * a stream one.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_enc_is_block_algorithm($td) {}

/**
* <div id="function.mcrypt-enc-is-block-mode" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_enc_is_block_mode</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_enc_is_block_mode</span> — <span class="dc-title">检测打开的模式是否以分组方式输出</span></p> </div> <div id="function.mcrypt-enc-is-block-mode-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-enc-is-block-mode-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_enc_is_block_mode</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   打开的模式是否以分组方式输出   （例如，对于 cbc 和 ecb 模式而言返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，对于 cfb 和流模式而言，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>）。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-enc-is-block-mode-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-enc-is-block-mode-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果模式以字节分组（字节块）方式输出，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，   如果是以字节方式输出，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
*
 * Checks whether the opened mode outputs blocks
 * @link https://php.net/manual/zh/function.mcrypt-enc-is-block-mode.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return bool true if the mode outputs blocks of bytes or false if it outputs bytes.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_enc_is_block_mode($td) {}

/**
* <div id="function.mcrypt-enc-get-block-size" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_enc_get_block_size</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_enc_get_block_size</span> — <span class="dc-title">返回打开的算法的分组大小</span></p> </div> <div id="function.mcrypt-enc-get-block-size-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-enc-get-block-size-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_enc_get_block_size</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   获取打开的算法的分组大小。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-enc-get-block-size-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-enc-get-block-size-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回指定算法的分组大小，以字节为单位。  </p> </div></div>
*
 * Returns the blocksize of the opened algorithm
 * @link https://php.net/manual/zh/function.mcrypt-enc-get-block-size.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return int the block size of the specified algorithm in bytes.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_enc_get_block_size($td) {}

/**
* <div id="function.mcrypt-enc-get-key-size" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_enc_get_key_size</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_enc_get_key_size</span> — <span class="dc-title">返回打开的模式所能支持的最长密钥</span></p> </div> <div id="function.mcrypt-enc-get-key-size-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-enc-get-key-size-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_enc_get_key_size</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   返回打开的模式所能支持的最长密钥，以字节为单位。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-enc-get-key-size-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-enc-get-key-size-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回打开的模式所能支持的最长密钥，以字节为单位。  </p> </div></div>
*
 * Returns the maximum supported keysize of the opened mode
 * @link https://php.net/manual/zh/function.mcrypt-enc-get-key-size.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return int the maximum supported key size of the algorithm in bytes.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_enc_get_key_size($td) {}

/**
* <div id="function.mcrypt-enc-get-supported-key-sizes" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_enc_get_supported_key_sizes</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_enc_get_supported_key_sizes</span> — <span class="dc-title">以数组方式返回打开的算法所支持的密钥长度</span></p> </div>  <div id="function.mcrypt-enc-get-supported-key-sizes-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div>  <div class="refsect1 description" id="refsect1-function.mcrypt-enc-get-supported-key-sizes-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_enc_get_supported_key_sizes</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   获取打开的算法所支持的密钥长度。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-enc-get-supported-key-sizes-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-enc-get-supported-key-sizes-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回由加密描述符指定的算法所能够支持的密钥长度。   如果该算法支持从 1 到   <span class="function">{@link mcrypt_enc_get_key_size()}</span>   之间任意长度的密钥，则返回空数组。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-enc-get-supported-key-sizes-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-969">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_enc_get_supported_key_sizes()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>    $td </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_module_open</span><span style="color: #007700">(</span><span style="color: #DD0000">'rijndael-256'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">'ecb'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br>    </span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">mcrypt_enc_get_supported_key_sizes</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(3) {<br>  [0]=&gt;<br>  int(16)<br>  [1]=&gt;<br>  int(24)<br>  [2]=&gt;<br>  int(32)<br>}</blockquote></div>    </div>   </div>   </div></div>
*
 * Returns an array with the supported keysizes of the opened algorithm
 * @link https://php.net/manual/zh/function.mcrypt-enc-get-supported-key-sizes.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return array an array with the key sizes supported by the algorithm
 * specified by the encryption descriptor. If it returns an empty
 * array then all key sizes between 1 and
 * mcrypt_enc_get_key_size are supported by the
 * algorithm.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_enc_get_supported_key_sizes($td) {}

/**
* <div id="function.mcrypt-enc-get-iv-size" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_enc_get_iv_size</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_enc_get_iv_size</span> — <span class="dc-title">返回打开的算法的初始向量大小</span></p> </div> <div id="function.mcrypt-enc-get-iv-size-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-enc-get-iv-size-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_enc_get_iv_size</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   本函数返回由加密描述符指定的算法所使用的初始向量大小，   以字节为单位。   在 cbc，cfb 和 ofb 模式以及某些流模式算法中会用到初始向量。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-enc-get-iv-size-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">        加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-enc-get-iv-size-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回初始向量大小。如果算法忽略初始向量，则返回 0。  </p> </div></div>
*
 * Returns the size of the IV of the opened algorithm
 * @link https://php.net/manual/zh/function.mcrypt-enc-get-iv-size.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return int the size of the IV, or 0 if the IV is ignored in the algorithm.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_enc_get_iv_size($td) {}

/**
* <div id="function.mcrypt-enc-get-algorithms-name" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_enc_get_algorithms_name</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_enc_get_algorithms_name</span> — <span class="dc-title">返回打开的算法名称</span></p> </div>  <div id="function.mcrypt-enc-get-algorithms-name-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div>  <div class="refsect1 description" id="refsect1-function.mcrypt-enc-get-algorithms-name-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_enc_get_algorithms_name</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">    本函数返回算法名称。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-enc-get-algorithms-name-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-enc-get-algorithms-name-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   以字符串格式返回打开的加密算法名称。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-enc-get-algorithms-name-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-967">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_enc_get_algorithms_name()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$td </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_module_open</span><span style="color: #007700">(</span><span style="color: #9876AA">MCRYPT_CAST_256</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #9876AA">MCRYPT_MODE_CFB</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">mcrypt_enc_get_algorithms_name</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">). </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$td </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_module_open</span><span style="color: #007700">(</span><span style="color: #DD0000">'cast-256'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #9876AA">MCRYPT_MODE_CFB</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">mcrypt_enc_get_algorithms_name</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">). </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">CAST-256<br>CAST-256</blockquote></div>    </div>   </div>   </div></div>
*
 * Returns the name of the opened algorithm
 * @link https://php.net/manual/zh/function.mcrypt-enc-get-algorithms-name.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return string the name of the opened algorithm as a string.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_enc_get_algorithms_name($td) {}

/**
* <div id="function.mcrypt-enc-get-modes-name" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_enc_get_modes_name</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_enc_get_modes_name</span> — <span class="dc-title">返回打开的模式的名称</span></p> </div> <div id="function.mcrypt-enc-get-modes-name-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-enc-get-modes-name-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_enc_get_modes_name</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   返回模式名称。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-enc-get-modes-name-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-enc-get-modes-name-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   以字符串格式返回模式名称。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-enc-get-modes-name-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-968">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_enc_get_modes_name()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$td </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_module_open </span><span style="color: #007700">(</span><span style="color: #9876AA">MCRYPT_CAST_256</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #9876AA">MCRYPT_MODE_CFB</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">mcrypt_enc_get_modes_name</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">). </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$td </span><span style="color: #007700">= </span><span style="color: #9876AA">mcrypt_module_open </span><span style="color: #007700">(</span><span style="color: #DD0000">'cast-256'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">, </span><span style="color: #DD0000">'ecb'</span><span style="color: #007700">, </span><span style="color: #DD0000">''</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">mcrypt_enc_get_modes_name</span><span style="color: #007700">(</span><span style="color: #9876AA">$td</span><span style="color: #007700">). </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">CFB<br>ECB</blockquote></div>    </div>   </div>   </div></div>
*
 * Returns the name of the opened mode
 * @link https://php.net/manual/zh/function.mcrypt-enc-get-modes-name.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return string the name as a string.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_enc_get_modes_name($td) {}

/**
* <div id="function.mcrypt-module-self-test" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_module_self_test</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_module_self_test</span> — <span class="dc-title">在指定模块上执行自检</span></p> </div> <div id="function.mcrypt-module-self-test-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-module-self-test-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_module_self_test</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$algorithm</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$lib_dir</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   在指定模块上执行自检。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-module-self-test-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">algorithm</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_ciphername</span></strong> 常量中的一个，或者是字符串值的算法名称。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">lib_dir</span></dt>     <dd>      <p class="para">       可选参数 <span class="parameter" style="color:#3A95FF">lib_dir</span>，       表示包含加密算法模块的路径。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-module-self-test-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   自检成功返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，   自检失败返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.mcrypt-module-self-test-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-979">    <p><strong>示例 #1 <span class="function"><strong>mcrypt_module_self_test()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">mcrypt_module_self_test</span><span style="color: #007700">(</span><span style="color: #9876AA">MCRYPT_RIJNDAEL_128</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">mcrypt_module_self_test</span><span style="color: #007700">(</span><span style="color: #9876AA">MCRYPT_BOGUS_CYPHER</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">bool(true)<br>bool(false)</blockquote></div>    </div>   </div>   </div></div>
*
 * This function runs a self test on the specified module
 * @link https://php.net/manual/zh/function.mcrypt-module-self-test.php
 * @param string $algorithm <p>
 * One of the <b>MCRYPT_ciphername</b> constants, or the name of the algorithm as string.
 * </p>
 * @param string $lib_dir [optional] <p>
 * The optional lib_dir parameter can contain the
 * location of where the algorithm module is on the system.
 * </p>
 * @return bool The function returns true if the self test succeeds, or false when if
 * fails.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_module_self_test($algorithm, $lib_dir = null) {}

/**
* <div id="function.mcrypt-module-is-block-algorithm-mode" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_module_is_block_algorithm_mode</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_module_is_block_algorithm_mode</span> — <span class="dc-title">返回指定模块是否是分组加密模式</span></p> </div> <div id="function.mcrypt-module-is-block-algorithm-mode-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-module-is-block-algorithm-mode-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_module_is_block_algorithm_mode</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$mode</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$lib_dir</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   对于分组加密模式，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，   反之返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   （例如，对于 STREAM 模式返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，对于 cbc，cfb，ofb 返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>）  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-module-is-block-algorithm-mode-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       模式。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">lib_dir</span></dt>     <dd>      <p class="para">       可选参数，       表示在操作系统上包含算法模块的路径。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-module-is-block-algorithm-mode-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   对于分组加密模式，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，   反之返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   （例如，对于 STREAM 模式返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，对于 cbc，cfb，ofb 返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>）  </p> </div></div>
*
 * Returns if the specified module is a block algorithm or not
 * @link https://php.net/manual/zh/function.mcrypt-module-is-block-algorithm-mode.php
 * @param string $mode <p>
 * The mode to check.
 * </p>
 * @param string $lib_dir [optional] <p>
 * The optional lib_dir parameter can contain the
 * location of where the algorithm module is on the system.
 * </p>
 * @return bool This function returns true if the mode is for use with block
 * algorithms, otherwise it returns false. (e.g. false for stream, and
 * true for cbc, cfb, ofb).
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_module_is_block_algorithm_mode($mode, $lib_dir = null) {}

/**
* <div id="function.mcrypt-module-is-block-algorithm" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_module_is_block_algorithm</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_module_is_block_algorithm</span> — <span class="dc-title">检测指定算法是否为分组加密算法</span></p> </div> <div id="function.mcrypt-module-is-block-algorithm-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-module-is-block-algorithm-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_module_is_block_algorithm</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$algorithm</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$lib_dir</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   如果指定算法是分组加密算法，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，   反之返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-module-is-block-algorithm-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">algorithm</span></dt>     <dd>      <p class="para">       要检测的算法。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">lib_dir</span></dt>     <dd>      <p class="para">       可选参数 <span class="parameter" style="color:#3A95FF">lib_dir</span>，       表示在操作系统上包含算法模块的路径。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-module-is-block-algorithm-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果指定算法是分组加密算法，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，   反之返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
*
 * This function checks whether the specified algorithm is a block algorithm
 * @link https://php.net/manual/zh/function.mcrypt-module-is-block-algorithm.php
 * @param string $algorithm <p>
 * The algorithm to check.
 * </p>
 * @param string $lib_dir [optional] <p>
 * The optional lib_dir parameter can contain the
 * location of where the algorithm module is on the system.
 * </p>
 * @return bool This function returns true if the specified algorithm is a block
 * algorithm, or false is it is a stream algorithm.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_module_is_block_algorithm($algorithm, $lib_dir = null) {}

/**
* <div id="function.mcrypt-module-is-block-mode" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_module_is_block_mode</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_module_is_block_mode</span> — <span class="dc-title">检测指定模式是否以分组方式输出</span></p> </div> <div id="function.mcrypt-module-is-block-mode-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-module-is-block-mode-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_module_is_block_mode</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$mode</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$lib_dir</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   如果模式是以字节块（分组）方式输出，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，   如果只是以字节方式输出，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   （例如，对于 cbc 和 ecb 模式，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，对于 cfb 和 stream 模式，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>）  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-module-is-block-mode-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para"><strong><span>MCRYPT_MODE_modename</span></strong> 常量中的一个，或以下字符串中的一个："ecb"，"cbc"，"cfb"，"ofb"，"nofb" 和 "stream"。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">lib_dir</span></dt>     <dd>      <p class="para">       可选参数 <span class="parameter" style="color:#3A95FF">lib_dir</span> ，       表示在操作系统上包含模式模块的路径。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-module-is-block-mode-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果模式是以字节块（分组）方式输出，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，   如果只是以字节方式输出，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   （例如，对于 cbc 和 ecb 模式，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，对于 cfb 和 stream 模式，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>）  </p> </div></div>
*
 * Returns if the specified mode outputs blocks or not
 * @link https://php.net/manual/zh/function.mcrypt-module-is-block-mode.php
 * @param string $mode <p>
 * The mode to check.
 * </p>
 * @param string $lib_dir [optional] <p>
 * The optional lib_dir parameter can contain the
 * location of where the algorithm module is on the system.
 * </p>
 * @return bool This function returns true if the mode outputs blocks of bytes or
 * false if it outputs just bytes. (e.g. true for cbc and ecb, and
 * false for cfb and stream).
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_module_is_block_mode($mode, $lib_dir = null) {}

/**
* <div id="function.mcrypt-module-get-algo-block-size" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_module_get_algo_block_size</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_module_get_algo_block_size</span> — <span class="dc-title">返回指定算法的分组大小</span></p> </div> <div id="function.mcrypt-module-get-algo-block-size-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-module-get-algo-block-size-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_module_get_algo_block_size</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$algorithm</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$lib_dir</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   返回指定算法的分组大小。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-module-get-algo-block-size-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">algorithm</span></dt>     <dd>      <p class="para">       算法名称。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">lib_dir</span></dt>     <dd>      <p class="para">       可选参数 <span class="parameter" style="color:#3A95FF">lib_dir</span> ，       表示在操作系统上包含模式模块的路径。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-module-get-algo-block-size-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回指定算法的分组大小，以字节为单位。  </p> </div></div>
*
 * Returns the blocksize of the specified algorithm
 * @link https://php.net/manual/zh/function.mcrypt-module-get-algo-block-size.php
 * @param string $algorithm <p>
 * The algorithm name.
 * </p>
 * @param string $lib_dir [optional] <p>
 * This optional parameter can contain the location where the mode module
 * is on the system.
 * </p>
 * @return int the block size of the algorithm specified in bytes.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_module_get_algo_block_size($algorithm, $lib_dir = null) {}

/**
* <div id="function.mcrypt-module-get-algo-key-size" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_module_get_algo_key_size</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_module_get_algo_key_size</span> — <span class="dc-title">获取打开模式所支持的最大密钥大小</span></p> </div> <div id="function.mcrypt-module-get-algo-key-size-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-module-get-algo-key-size-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_module_get_algo_key_size</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$algorithm</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$lib_dir</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   获取打开模式所支持的最大密钥大小。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-module-get-algo-key-size-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">algorithm</span></dt>     <dd>      <p class="para">       算法名称。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">lib_dir</span></dt>     <dd>      <p class="para">       可选参数，       表示在操作系统上包含模式模块的路径。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-module-get-algo-key-size-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   本函数返回算法所支持的最大密钥大小，   以字节为单位。  </p> </div></div>
*
 * Returns the maximum supported keysize of the opened mode
 * @link https://php.net/manual/zh/function.mcrypt-module-get-algo-key-size.php
 * @param string $algorithm <p>
 * The algorithm name.
 * </p>
 * @param string $lib_dir [optional] <p>
 * This optional parameter can contain the location where the mode module
 * is on the system.
 * </p>
 * @return int This function returns the maximum supported key size of the
 * algorithm specified in bytes.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_module_get_algo_key_size($algorithm, $lib_dir = null) {}

/**
* <div id="function.mcrypt-module-get-supported-key-sizes" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_module_get_supported_key_sizes</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_module_get_supported_key_sizes</span> — <span class="dc-title">以数组形式返回打开的算法所支持的密钥大小</span></p> </div> <div id="function.mcrypt-module-get-supported-key-sizes-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-module-get-supported-key-sizes-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_module_get_supported_key_sizes</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$algorithm</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$lib_dir</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   以数组形式返回指定算法所支持的密钥大小。   如果从 1 到 <span class="function">{@link mcrypt_module_get_algo_key_size()}</span>    的密钥大小都支持，则返回空数组。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-module-get-supported-key-sizes-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">algorithm</span></dt>     <dd>      <p class="para">       算法名称。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">lib_dir</span></dt>     <dd>      <p class="para">       可选参数，       表示在操作系统上包含算法模块的路径。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-module-get-supported-key-sizes-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   以数组形式返回指定算法所支持的密钥大小。   如果从 1 到 <span class="function">{@link mcrypt_module_get_algo_key_size()}</span>    的密钥大小都支持，则返回空数组。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-module-get-supported-key-sizes-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mcrypt_enc_get_supported_key_sizes()} - 以数组方式返回打开的算法所支持的密钥长度</span></li>   </ul>   </div></div>
*
 * Returns an array with the supported keysizes of the opened algorithm
 * @link https://php.net/manual/zh/function.mcrypt-module-get-supported-key-sizes.php
 * @param string $algorithm <p>
 * The algorithm to used.
 * </p>
 * @param string $lib_dir [optional] <p>
 * The optional lib_dir parameter can contain the
 * location of where the algorithm module is on the system.
 * </p>
 * @return array an array with the key sizes supported by the specified algorithm.
 * If it returns an empty array then all key sizes between 1 and
 * mcrypt_module_get_algo_key_size are supported by the
 * algorithm.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_module_get_supported_key_sizes($algorithm, $lib_dir = null) {}

/**
* <div id="function.mcrypt-module-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">mcrypt_module_close</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.2, PHP 5, PHP 7 &lt; 7.2.0, PECL mcrypt &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">mcrypt_module_close</span> — <span class="dc-title">关闭加密模块</span></p> </div> <div id="function.mcrypt-module-close-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.1.0 起<em>废弃</em>并将自PHP 7.2.0 起<em>移除</em>。强烈建议不要使用本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.mcrypt-module-close-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mcrypt_module_close</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$td</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   关闭加密模块。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mcrypt-module-close-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">td</span></dt>     <dd>      <p class="para">       加密描述符。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mcrypt-module-close-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.mcrypt-module-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mcrypt_module_open()} - 打开算法和模式对应的模块</span></li>   </ul>   </div></div>
*
 * Closes the mcrypt module
 * @link https://php.net/manual/zh/function.mcrypt-module-close.php
 * @param resource $td <p>
 * The encryption descriptor.
 * </p>
 * @return bool true on success or false on failure.
 * @removed 7.2
 
#[Deprecated(since: '7.1')]
*/
function mcrypt_module_close($td) {}

/**
* <span class="simpara">           </span>
*
 * @deprecated 7.1
 * @removed 7.2
 
*/
define('MCRYPT_ENCRYPT', 0);
/**
* <span class="simpara">           </span>
*
 * @deprecated 7.1
 * @removed 7.2
 
*/
define('MCRYPT_DECRYPT', 1);
/**
* <span class="simpara">           </span>
*
 * @deprecated 7.1
 * @removed 7.2
 
*/
define('MCRYPT_DEV_RANDOM', 0);
/**
* <span class="simpara">           </span>
*
 * @deprecated 7.1
 * @removed 7.2
 
*/
define('MCRYPT_DEV_URANDOM', 1);
/**
* <span class="simpara">           </span>
*
 * @deprecated 7.1
 * @removed 7.2
 
*/
define('MCRYPT_RAND', 2);
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_3DES', "tripledes");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_ARCFOUR_IV', "arcfour-iv");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_ARCFOUR', "arcfour");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_BLOWFISH', "blowfish");
define('MCRYPT_BLOWFISH_COMPAT', "blowfish-compat");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_CAST_128', "cast-128");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_CAST_256', "cast-256");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_CRYPT', "crypt");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_DES', "des");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_DES_COMPAT', "des-compat");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_ENIGNA', "crypt");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_GOST', "gost");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_LOKI97', "loki97");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_PANAMA', "panama");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_RC2', "rc2");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_RC4', "rc4");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_RIJNDAEL_128', "rijndael-128");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_RIJNDAEL_192', "rijndael-192");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_RIJNDAEL_256', "rijndael-256");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_SAFER64', "safer-sk64");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_SAFER128', "safer-sk128");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_SAFERPLUS', "saferplus");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_SERPENT', "serpent");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_SERPENT_128', "serpent-128");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_SERPENT_192', "serpent-192");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_SERPENT_256', "serpent-256");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_THREEWAY', "threeway");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_TRIPLEDES', "tripledes");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_TWOFISH', "twofish");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_WAKE', "wake");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_XTEA', "xtea");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_IDEA', "idea");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_MARS', "mars");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_RC6', "rc6");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_RC6_128', "rc6-128");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_RC6_192', "rc6-192");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_RC6_256', "rc6-256");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_SKIPJACK', "skipjack");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_MODE_CBC', "cbc");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_MODE_CFB', "cfb");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_MODE_ECB', "ecb");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_MODE_NOFB', "nofb");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_MODE_OFB', "ofb");
/**
 * @deprecated 7.1
 * @removed 7.2
 */
define('MCRYPT_MODE_STREAM', "stream");

// End of mcrypt v.
