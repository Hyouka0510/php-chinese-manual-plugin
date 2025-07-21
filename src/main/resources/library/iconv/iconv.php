<?php

// Start of iconv v.
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

/**
* <div id="function.iconv" class="refentry"> <div class="refnamediv">  <h1 class="refname">iconv</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.5, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv</span> — <span class="dc-title">将字符串从一个字符编码转换到另一个字符编码</span></p> </div>  <div class="refsect1 description" id="refsect1-function.iconv-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>iconv</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$from_encoding</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$to_encoding</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$string</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   将 <span class="parameter" style="color:#3A95FF">string</span> 从 <span class="parameter" style="color:#3A95FF">from_encoding</span> 转换到 <span class="parameter" style="color:#3A95FF">to_encoding</span>。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.iconv-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">from_encoding</span></dt>     <dd>      <p class="para">       用于解释 <span class="parameter" style="color:#3A95FF">string</span> 的当前编码。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">to_encoding</span></dt>     <dd>      <p class="para">       所需的结果编码。      </p>      <p class="para">       如果字符串 <span class="literal">//TRANSLIT</span> 追加到 <span class="parameter" style="color:#3A95FF">to_encoding</span> ，然后将启用转写（transliteration）功能。这意味着当字符不能被目标字符集所表示时，它可以通过一个或多个形似的字符来近似表达。       如果追加字符串 <span class="literal">//IGNORE</span>，不能以目标字符集表达的字符将被默默丢弃。否则，会导致 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-notice">E_NOTICE</a></span></strong> 并返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。      </p>      <div class="caution"><strong class="caution">警告</strong>       <p class="para">        <span class="literal">//TRANSLIT</span> 运行细节高度依赖于系统的  iconv() 实现（参见 <strong><span><a href="https://php.net/manual/zh/iconv.constants.php#constant.iconv-impl">ICONV_IMPL</a></span></strong>）。        据悉，某些系统上的实现会直接忽略 <span class="literal">//TRANSLIT</span>，所以转换也有可能失败，<span class="parameter" style="color:#3A95FF">to_encoding</span> 会是不合格的。       </p>      </div>     </dd>             <dt><span class="parameter" style="color:#3A95FF">string</span></dt>     <dd>      <p class="para">       要转换的 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.iconv-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回转换后的字符串， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.iconv-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2440">    <p><strong>示例 #1 <span class="function"><strong>iconv()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$text </span><span style="color: #007700">= </span><span style="color: #DD0000">"This is the Euro symbol '€'."</span><span style="color: #007700">;<br><br>echo </span><span style="color: #DD0000">'Original : '</span><span style="color: #007700">, </span><span style="color: #9876AA">$text</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">'TRANSLIT : '</span><span style="color: #007700">, </span><span style="color: #9876AA">iconv</span><span style="color: #007700">(</span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">, </span><span style="color: #DD0000">"ISO-8859-1//TRANSLIT"</span><span style="color: #007700">, </span><span style="color: #9876AA">$text</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">'IGNORE   : '</span><span style="color: #007700">, </span><span style="color: #9876AA">iconv</span><span style="color: #007700">(</span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">, </span><span style="color: #DD0000">"ISO-8859-1//IGNORE"</span><span style="color: #007700">, </span><span style="color: #9876AA">$text</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">'Plain    : '</span><span style="color: #007700">, </span><span style="color: #9876AA">iconv</span><span style="color: #007700">(</span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">, </span><span style="color: #DD0000">"ISO-8859-1"</span><span style="color: #007700">, </span><span style="color: #9876AA">$text</span><span style="color: #007700">), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Original : This is the Euro symbol 'â¬'.<br>TRANSLIT : This is the Euro symbol 'EUR'.<br>IGNORE   : This is the Euro symbol ''.<br>Plain    :<br>Notice: iconv(): Detected an illegal character in input string in .\iconv-example.php on line 7</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.iconv-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    可用的字符编码和选项取决于已安装的 iconv 实现。如果当前系统不支持 <span class="parameter" style="color:#3A95FF">from_encoding</span> 或 <span class="parameter" style="color:#3A95FF">to_encoding</span> 的参数，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.iconv-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mb_convert_encoding()} - 转换字符串，从一个字符编码到另一个字符编码</span></li>    <li><span class="methodname" style="color:#CC7832">{@link UConverter::transcode()} - Convert a string from one character encoding to another</span></li>   </ul>   </div></div>
*
 * Convert string to requested character encoding
 * @link https://php.net/manual/zh/function.iconv.php
 * @param string $from_encoding <p>
 * The input charset.
 * </p>
 * @param string $to_encoding <p>
 * The output charset.
 * </p>
 * <p>
 * If you append the string //TRANSLIT to
 * <i>out_charset</i> transliteration is activated. This
 * means that when a character can't be represented in the target charset,
 * it can be approximated through one or several similarly looking
 * characters. If you append the string //IGNORE,
 * characters that cannot be represented in the target charset are silently
 * discarded. Otherwise, <i>str</i> is cut from the first
 * illegal character and an <b>E_NOTICE</b> is generated.
 * </p>
 * @param string $string <p>
 * The string to be converted.
 * </p>
 * @return string|false the converted string or <b>FALSE</b> on failure.
 
#[Pure]
*/
function iconv(string $from_encoding, string $to_encoding, string $string): string|false {}

/**
* <div id="function.ob-iconv-handler" class="refentry"> <div class="refnamediv">  <h1 class="refname">ob_iconv_handler</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.5, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ob_iconv_handler</span> — <span class="dc-title">以输出缓冲处理程序转换字符编码</span></p> </div>  <div class="refsect1 description" id="refsect1-function.ob-iconv-handler-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ob_iconv_handler</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$contents</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$status</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   将字符编码从 <span class="parameter" style="color:#3A95FF">internal_encoding</span> 转换到 <span class="parameter" style="color:#3A95FF">output_encoding</span>。  </p>  <p class="para">   <span class="parameter" style="color:#3A95FF">internal_encoding</span> 和 <span class="parameter" style="color:#3A95FF">output_encoding</span> 应当在 <var class="filename">php.ini</var> 文件或 <span class="function">{@link iconv_set_encoding()}</span> 中定义。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ob-iconv-handler-parameters">  <h3 class="title">参数</h3>  <p class="para">   关于处理程序参数的信息，参见 <span class="function">{@link ob_start()}</span>。  </p> </div> <div class="refsect1 returnvalues" id="refsect1-function.ob-iconv-handler-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   关于处理程序返回值的信息，参见 <span class="function">{@link ob_start()}</span>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.ob-iconv-handler-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2446">    <p><strong>示例 #1 <span class="function"><strong>ob_iconv_handler()</strong></span> 例子：</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>iconv_set_encoding</span><span style="color: #007700">(</span><span style="color: #DD0000">"internal_encoding"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">iconv_set_encoding</span><span style="color: #007700">(</span><span style="color: #DD0000">"output_encoding"</span><span style="color: #007700">, </span><span style="color: #DD0000">"ISO-8859-1"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">ob_start</span><span style="color: #007700">(</span><span style="color: #DD0000">"ob_iconv_handler"</span><span style="color: #007700">); </span><span style="color: #FF8000">// 开始输出缓冲<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.ob-iconv-handler-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link iconv_get_encoding()} - 获取 iconv 扩展的内部配置变量</span></li>    <li><span class="function">{@link iconv_set_encoding()} - 为字符编码转换设定当前设置</span></li>    <li><a href="https://php.net/manual/zh/ref.outcontrol.php" class="link">输出控制函数</a></li>   </ul>   </div></div>
*
 * Convert character encoding as output buffer handler
 * @link https://php.net/manual/zh/function.ob-iconv-handler.php
 * @param string $contents
 * @param int $status
 * @return string See <b>ob_start</b> for information about this handler
 * return values.
 
#[Pure]
*/
function ob_iconv_handler(string $contents, int $status): string {}

/**
* <div id="function.iconv-get-encoding" class="refentry"> <div class="refnamediv">  <h1 class="refname">iconv_get_encoding</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.5, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_get_encoding</span> — <span class="dc-title">获取 iconv 扩展的内部配置变量</span></p> </div>  <div class="refsect1 description" id="refsect1-function.iconv-get-encoding-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>iconv_get_encoding</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$type</span><span class="initializer"> = "all"</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   获取 iconv 扩展的内部配置变量。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.iconv-get-encoding-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">type</span></dt>     <dd>      <p class="para">       选项 <span class="parameter" style="color:#3A95FF">type</span> 的值可以是：       </p><ul class="simplelist">        <li>all</li>        <li>input_encoding</li>        <li>output_encoding</li>        <li>internal_encoding</li>       </ul>           </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.iconv-get-encoding-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回当前内部配置变量的值， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   如果省略了 <span class="parameter" style="color:#3A95FF">type</span>，或者设置为 "all"，<span class="function"><strong>iconv_get_encoding()</strong></span> 返回包含所有这些变量的数组。  </p> </div> <div class="refsect1 examples" id="refsect1-function.iconv-get-encoding-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2441">    <p><strong>示例 #1 <span class="function"><strong>iconv_get_encoding()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000">&lt;pre&gt;<br><span style="color: #9876AA">&lt;?php<br>iconv_set_encoding</span><span style="color: #007700">(</span><span style="color: #DD0000">"internal_encoding"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">iconv_set_encoding</span><span style="color: #007700">(</span><span style="color: #DD0000">"output_encoding"</span><span style="color: #007700">, </span><span style="color: #DD0000">"ISO-8859-1"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">iconv_get_encoding</span><span style="color: #007700">(</span><span style="color: #DD0000">'all'</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;<br></span>&lt;/pre&gt;</span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>    [input_encoding] =&gt; ISO-8859-1<br>    [output_encoding] =&gt; ISO-8859-1<br>    [internal_encoding] =&gt; UTF-8<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.iconv-get-encoding-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link iconv_set_encoding()} - 为字符编码转换设定当前设置</span></li>    <li><span class="function">{@link ob_iconv_handler()} - 以输出缓冲处理程序转换字符编码</span></li>   </ul>   </div></div>
*
 * Retrieve internal configuration variables of iconv extension
 * @link https://php.net/manual/zh/function.iconv-get-encoding.php
 * @param string $type [optional] <p>
 * The value of the optional <i>type</i> can be:
 * all
 * input_encoding
 * output_encoding
 * internal_encoding
 * </p>
 * @return string|string[]|false the current value of the internal configuration variable if
 * successful or <b>FALSE</b> on failure.
 * <p>
 * If <i>type</i> is omitted or set to "all",
 * <b>iconv_get_encoding</b> returns an array that
 * stores all these variables.
 * </p>
 
#[Pure]
#[ArrayShape(["input_encoding" => "string", "output_encoding" => "string", "internal_encoding" => "string"])]
*/
function iconv_get_encoding(string $type = "all"): array|string|false {}

/**
* <div id="function.iconv-set-encoding" class="refentry"> <div class="refnamediv">  <h1 class="refname">iconv_set_encoding</h1>  <p class="verinfo">(PHP 4 &gt;= 4.0.5, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_set_encoding</span> — <span class="dc-title">为字符编码转换设定当前设置</span></p> </div>  <div class="refsect1 description" id="refsect1-function.iconv-set-encoding-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>iconv_set_encoding</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$encoding</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   将 <span class="parameter" style="color:#3A95FF">type</span> 设置的值从内部配置变量更改为 <span class="parameter" style="color:#3A95FF">encoding</span>。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.iconv-set-encoding-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">type</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">type</span> 的值可以是以下其中任意一个：       </p><ul class="simplelist">        <li>input_encoding</li>        <li>output_encoding</li>        <li>internal_encoding</li>       </ul>           </dd>             <dt><span class="parameter" style="color:#3A95FF">encoding</span></dt>     <dd>      <p class="para">       字符集。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.iconv-set-encoding-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.iconv-set-encoding-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2445">    <p><strong>示例 #1 <span class="function"><strong>iconv_set_encoding()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>iconv_set_encoding</span><span style="color: #007700">(</span><span style="color: #DD0000">"internal_encoding"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">iconv_set_encoding</span><span style="color: #007700">(</span><span style="color: #DD0000">"output_encoding"</span><span style="color: #007700">, </span><span style="color: #DD0000">"ISO-8859-1"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.iconv-set-encoding-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link iconv_get_encoding()} - 获取 iconv 扩展的内部配置变量</span></li>    <li><span class="function">{@link ob_iconv_handler()} - 以输出缓冲处理程序转换字符编码</span></li>   </ul>   </div></div>
*
 * Set current setting for character encoding conversion
 * @link https://php.net/manual/zh/function.iconv-set-encoding.php
 * @param string $type <p>
 * The value of <i>type</i> can be any one of these:
 * input_encoding
 * output_encoding
 * internal_encoding
 * </p>
 * @param string $encoding <p>
 * The character set.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function iconv_set_encoding(string $type, string $encoding): bool {}

/**
* <div id="function.iconv-strlen" class="refentry"> <div class="refnamediv">  <h1 class="refname">iconv_strlen</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_strlen</span> — <span class="dc-title">返回字符串的字符数统计</span></p> </div>  <div class="refsect1 description" id="refsect1-function.iconv-strlen-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>iconv_strlen</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$string</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   和 <span class="function">{@link strlen()}</span> 不同的是，<span class="function"><strong>iconv_strlen()</strong></span> 统计了给定的字节序列 <span class="parameter" style="color:#3A95FF">string</span> 中出现字符数的统计，基于指定的字符集，其产生的结果不一定和字符字节数相等。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.iconv-strlen-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">string</span></dt>     <dd>      <p class="para">       该字符串。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">encoding</span></dt>     <dd>      <p class="para">       如果 <span class="parameter" style="color:#3A95FF">encoding</span> 参数省略或为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，假设 <span class="parameter" style="color:#3A95FF">string</span> 的编码为 <a href="https://php.net/manual/zh/iconv.configuration.php" class="link">iconv.internal_encoding</a>。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.iconv-strlen-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回 <span class="parameter" style="color:#3A95FF">str</span> 字符数的统计，是整型。如果编码期间出现错误，为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.iconv-strlen-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">encoding</span> 现在可为 null。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.iconv-strlen-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link grapheme_strlen()} - Get string length in grapheme units</span></li>    <li><span class="function">{@link mb_strlen()} - 获取字符串的长度</span></li>    <li><span class="function">{@link strlen()} - 获取字符串长度</span></li>   </ul>   </div></div>
*
 * Returns the character count of string
 * @link https://php.net/manual/zh/function.iconv-strlen.php
 * @param string $string <p>
 * The string.
 * </p>
 * @param string|null $encoding <p>
 * If <i>charset</i> parameter is omitted,
 * <i>str</i> is assumed to be encoded in
 * iconv.internal_encoding.
 * </p>
 * @return int|false the character count of <i>str</i>, as an integer. False on error.
 
#[Pure]
*/
function iconv_strlen(string $string, ?string $encoding = null): int|false {}

/**
* <div id="function.iconv-substr" class="refentry"> <div class="refnamediv">  <h1 class="refname">iconv_substr</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_substr</span> — <span class="dc-title">截取字符串的部分</span></p> </div>  <div class="refsect1 description" id="refsect1-function.iconv-substr-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>iconv_substr</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$string</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$offset</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$length</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   根据 <span class="parameter" style="color:#3A95FF">offset</span> 和 <span class="parameter" style="color:#3A95FF">length</span> 参数指定 <span class="parameter" style="color:#3A95FF">string</span> 截取的部分。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.iconv-substr-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">string</span></dt>     <dd>      <p class="para">       原始字符串。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">offset</span></dt>     <dd>      <p class="para">       如果 <span class="parameter" style="color:#3A95FF">offset</span> 是非负数，<span class="function"><strong>iconv_substr()</strong></span> 从 <span class="parameter" style="color:#3A95FF">string</span> 开头第 <span class="parameter" style="color:#3A95FF">offset</span> 个字符开始截出部分，从 0 开始计数。      </p>      <p class="para">       如果 <span class="parameter" style="color:#3A95FF">offset</span> 是负数，<span class="function"><strong>iconv_substr()</strong></span> 从  <span class="parameter" style="color:#3A95FF">string</span> 末尾向前 <span class="parameter" style="color:#3A95FF">offset</span> 个字符开始截取。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">length</span></dt>     <dd>      <p class="para">       如果指定了 <span class="parameter" style="color:#3A95FF">length</span> 并且是正数，返回的值从 <span class="parameter" style="color:#3A95FF">offset</span> 截取部分，最多包含 <span class="parameter" style="color:#3A95FF">length</span> 个字符（取决于 <span class="parameter" style="color:#3A95FF">string</span> 的长度）。      </p>      <p class="para">       如果传入了负数的 <span class="parameter" style="color:#3A95FF">length</span>，       <span class="function"><strong>iconv_substr()</strong></span> 将从第 <span class="parameter" style="color:#3A95FF">offset</span> 个字符到离末尾 <span class="parameter" style="color:#3A95FF">length</span> 个字符截出 <span class="parameter" style="color:#3A95FF">string</span> 的部分。       如果 <span class="parameter" style="color:#3A95FF">offset</span> 也是负数，则开始位置计算规则的解释见以上。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">encoding</span></dt>     <dd>      <p class="para">       如果省略了参数 <span class="parameter" style="color:#3A95FF">encoding</span>，<span class="parameter" style="color:#3A95FF">string</span> 的编码被认定为 <a href="https://php.net/manual/zh/iconv.configuration.php" class="link">iconv.internal_encoding</a>。      </p>      <p class="para">       注意，<span class="parameter" style="color:#3A95FF">offset</span> 和 <span class="parameter" style="color:#3A95FF">length</span> 参数总是被认为字符表现的偏移，基于 <span class="parameter" style="color:#3A95FF">encoding</span> 检测到的字符集进行统计计算，而相对应的 <span class="function">{@link substr()}</span> 则是基于字节的位移来计算。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.iconv-substr-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回 <span class="parameter" style="color:#3A95FF">offset</span> 和 <span class="parameter" style="color:#3A95FF">length</span> 参数指定的 <span class="parameter" style="color:#3A95FF">string</span> 的部分。  </p>  <p class="para">   如果 <span class="parameter" style="color:#3A95FF">string</span> 比 <span class="parameter" style="color:#3A95FF">offset</span> 字符数更短，将会返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   如果 <span class="parameter" style="color:#3A95FF">string</span> 是 <span class="parameter" style="color:#3A95FF">offset</span> 个字符的长度，将返回空字符串。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.iconv-substr-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">length</span> 和 <span class="parameter" style="color:#3A95FF">encoding</span> 现在可为 null。      </td>     </tr>      <tr>       <td>7.0.11</td>       <td>        如果 <span class="parameter" style="color:#3A95FF">string</span> 等于 <span class="parameter" style="color:#3A95FF">offset</span> 个字符，将返回空字符串。之前的版本里，这种情况会返回  <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.iconv-substr-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link substr()} - 返回字符串的子串</span></li>    <li><span class="function">{@link mb_substr()} - 获取部分字符串</span></li>    <li><span class="function">{@link mb_strcut()} - 获取字符的一部分</span></li>   </ul>   </div></div>
*
 * Cut out part of a string
 * @link https://php.net/manual/zh/function.iconv-substr.php
 * @param string $string <p>
 * The original string.
 * </p>
 * @param int $offset <p>
 * If <i>offset</i> is non-negative,
 * <b>iconv_substr</b> cuts the portion out of
 * <i>str</i> beginning at <i>offset</i>'th
 * character, counting from zero.
 * </p>
 * <p>
 * If <i>offset</i> is negative,
 * <b>iconv_substr</b> cuts out the portion beginning
 * at the position, <i>offset</i> characters
 * away from the end of <i>str</i>.
 * </p>
 * @param int|null $length [optional] <p>
 * If <i>length</i> is given and is positive, the return
 * value will contain at most <i>length</i> characters
 * of the portion that begins at <i>offset</i>
 * (depending on the length of <i>string</i>).
 * </p>
 * <p>
 * If negative <i>length</i> is passed,
 * <b>iconv_substr</b> cuts the portion out of
 * <i>str</i> from the <i>offset</i>'th
 * character up to the character that is
 * <i>length</i> characters away from the end of the string.
 * In case <i>offset</i> is also negative, the start position
 * is calculated beforehand according to the rule explained above.
 * </p>
 * @param string|null $encoding <p>
 * If <i>charset</i> parameter is omitted,
 * <i>string</i> are assumed to be encoded in
 * iconv.internal_encoding.
 * </p>
 * <p>
 * Note that <i>offset</i> and <i>length</i>
 * parameters are always deemed to represent offsets that are
 * calculated on the basis of the character set determined by
 * <i>charset</i>, whilst the counterpart
 * <b>substr</b> always takes these for byte offsets.
 * </p>
 * @return string|false the portion of <i>str</i> specified by the
 * <i>offset</i> and <i>length</i> parameters.
 * <p>
 * If <i>str</i> is shorter than <i>offset</i>
 * characters long, <b>FALSE</b> will be returned.
 * </p>
 
#[Pure]
*/
function iconv_substr(string $string, int $offset, ?int $length, ?string $encoding = null): string|false {}

/**
* <div id="function.iconv-strpos" class="refentry"> <div class="refnamediv">  <h1 class="refname">iconv_strpos</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_strpos</span> — <span class="dc-title">Finds position of first occurrence of a needle within a haystack</span></p> </div>  <div class="refsect1 description" id="refsect1-function.iconv-strpos-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>iconv_strpos</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$haystack</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$needle</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$offset</span><span class="initializer"> = 0</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Finds position of first occurrence of a <span class="parameter" style="color:#3A95FF">needle</span>   within a <span class="parameter" style="color:#3A95FF">haystack</span>.  </p>  <p class="para">   In contrast to <span class="function">{@link strpos()}</span>, the return value of   <span class="function"><strong>iconv_strpos()</strong></span> is the number of characters that   appear before the needle, rather than the offset in bytes to the   position where the needle has been found. The characters are counted   on the basis of the specified character set <span class="parameter" style="color:#3A95FF">encoding</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.iconv-strpos-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">haystack</span></dt>     <dd>      <p class="para">       The entire string.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">needle</span></dt>     <dd>      <p class="para">       The searched substring.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">offset</span></dt>     <dd>      <p class="para">       The optional <span class="parameter" style="color:#3A95FF">offset</span> parameter specifies       the position from which the search should be performed.       If the offset is negative, it is counted from the end of the string.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">encoding</span></dt>     <dd>      <p class="para">       If <span class="parameter" style="color:#3A95FF">encoding</span> parameter is omitted or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>,       <span class="parameter" style="color:#3A95FF">string</span> are assumed to be encoded in       <a href="https://php.net/manual/zh/iconv.configuration.php" class="link">iconv.internal_encoding</a>.      </p>     </dd>       </dl>    <p class="para">   If <span class="parameter" style="color:#3A95FF">haystack</span> or <span class="parameter" style="color:#3A95FF">needle</span> is   not a string, it is converted to a string and applied as the ordinal   value of a character.  </p> </div> <div class="refsect1 returnvalues" id="refsect1-function.iconv-strpos-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the numeric position of the first occurrence of   <span class="parameter" style="color:#3A95FF">needle</span> in <span class="parameter" style="color:#3A95FF">haystack</span>.  </p>  <p class="para">   If <span class="parameter" style="color:#3A95FF">needle</span> is not found,   <span class="function"><strong>iconv_strpos()</strong></span> will return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数可能返回布尔值<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，但也可能返回等同于 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 的非布尔值。请阅读 <a href="https://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用<a href="https://php.net/manual/zh/language.operators.comparison.php" class="link">===运算符</a>来测试此函数的返回值。</p></div> </div> <div class="refsect1 changelog" id="refsect1-function.iconv-strpos-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">encoding</span> is nullable now.      </td>     </tr>     <tr>      <td>7.1.0</td>      <td>       Support for negative <span class="parameter" style="color:#3A95FF">offset</span>s has been added.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.iconv-strpos-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link strpos()} - 查找字符串首次出现的位置</span></li>    <li><span class="function">{@link iconv_strrpos()} - Finds the last occurrence of a needle within a haystack</span></li>    <li><span class="function">{@link mb_strpos()} - 查找字符串在另一个字符串中首次出现的位置</span></li>   </ul>   </div></div>
*
 * Finds position of first occurrence of a needle within a haystack
 * @link https://php.net/manual/zh/function.iconv-strpos.php
 * @param string $haystack <p>
 * The entire string.
 * </p>
 * @param string $needle <p>
 * The searched substring.
 * </p>
 * @param int $offset [optional] <p>
 * The optional <i>offset</i> parameter specifies
 * the position from which the search should be performed.
 * </p>
 * @param string|null $encoding <p>
 * If <i>charset</i> parameter is omitted,
 * <i>string</i> are assumed to be encoded in
 * iconv.internal_encoding.
 * </p>
 * @return int<0,max>|false the numeric position of the first occurrence of
 * <i>needle</i> in <i>haystack</i>.
 * <p>
 * If <i>needle</i> is not found,
 * <b>iconv_strpos</b> will return <b>FALSE</b>.
 * </p>
 
#[Pure]
*/
function iconv_strpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = null): int|false {}

/**
* <div id="function.iconv-strrpos" class="refentry"> <div class="refnamediv">  <h1 class="refname">iconv_strrpos</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_strrpos</span> — <span class="dc-title">Finds the last occurrence of a needle within a haystack</span></p> </div>  <div class="refsect1 description" id="refsect1-function.iconv-strrpos-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>iconv_strrpos</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$haystack</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$needle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Finds the last occurrence of a <span class="parameter" style="color:#3A95FF">needle</span>   within a <span class="parameter" style="color:#3A95FF">haystack</span>.  </p>  <p class="para">   In contrast to <span class="function">{@link strrpos()}</span>, the return value of   <span class="function"><strong>iconv_strrpos()</strong></span> is the number of characters that   appear before the needle, rather than the offset in bytes to the   position where the needle has been found. The characters are counted   on the basis of the specified character set <span class="parameter" style="color:#3A95FF">encoding</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.iconv-strrpos-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">haystack</span></dt>     <dd>      <p class="para">       The entire string.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">needle</span></dt>     <dd>      <p class="para">       The searched substring.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">encoding</span></dt>     <dd>      <p class="para">       If <span class="parameter" style="color:#3A95FF">encoding</span> parameter is omitted or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>,       <span class="parameter" style="color:#3A95FF">string</span> are assumed to be encoded in       <a href="https://php.net/manual/zh/iconv.configuration.php" class="link">iconv.internal_encoding</a>.      </p>     </dd>       </dl>    <p class="para">   If <span class="parameter" style="color:#3A95FF">haystack</span> or <span class="parameter" style="color:#3A95FF">needle</span> is   not a string, it is converted to a string and applied as the ordinal   value of a character.  </p> </div> <div class="refsect1 returnvalues" id="refsect1-function.iconv-strrpos-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the numeric position of the last occurrence of   <span class="parameter" style="color:#3A95FF">needle</span> in <span class="parameter" style="color:#3A95FF">haystack</span>.  </p>  <p class="para">   If <span class="parameter" style="color:#3A95FF">needle</span> is not found,   <span class="function"><strong>iconv_strrpos()</strong></span> will return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数可能返回布尔值<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，但也可能返回等同于 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 的非布尔值。请阅读 <a href="https://php.net/manual/zh/language.types.boolean.php" class="link">布尔类型</a>章节以获取更多信息。应使用<a href="https://php.net/manual/zh/language.operators.comparison.php" class="link">===运算符</a>来测试此函数的返回值。</p></div> </div> <div class="refsect1 changelog" id="refsect1-function.iconv-strrpos-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">encoding</span> is nullable now.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.iconv-strrpos-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link strrpos()} - 计算指定字符串在目标字符串中最后一次出现的位置</span></li>    <li><span class="function">{@link iconv_strpos()} - Finds position of first occurrence of a needle within a haystack</span></li>    <li><span class="function">{@link mb_strrpos()} - 查找字符串在一个字符串中最后出现的位置</span></li>   </ul>   </div></div>
*
 * Finds the last occurrence of a needle within a haystack
 * @link https://php.net/manual/zh/function.iconv-strrpos.php
 * @param string $haystack <p>
 * The entire string.
 * </p>
 * @param string $needle <p>
 * The searched substring.
 * </p>
 * @param string|null $encoding <p>
 * If <i>charset</i> parameter is omitted,
 * <i>string</i> are assumed to be encoded in
 * iconv.internal_encoding.
 * </p>
 * @return int|false the numeric position of the last occurrence of
 * <i>needle</i> in <i>haystack</i>.
 * <p>
 * If <i>needle</i> is not found,
 * <b>iconv_strrpos</b> will return <b>FALSE</b>.
 * </p>
 
#[Pure]
*/
function iconv_strrpos(string $haystack, string $needle, ?string $encoding = null): int|false {}

/**
* <div id="function.iconv-mime-encode" class="refentry"> <div class="refnamediv">  <h1 class="refname">iconv_mime_encode</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_mime_encode</span> — <span class="dc-title">Composes a <span class="literal">MIME</span> header field</span></p> </div>  <div class="refsect1 description" id="refsect1-function.iconv-mime-encode-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>iconv_mime_encode</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$field_name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$field_value</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$options</span><span class="initializer"> = []</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Composes and returns a string that represents a valid <span class="literal">MIME</span>   header field, which looks like the following:   </p><div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="descriptioncode"><blockquote style="border:1px gray solid;">Subject: =?ISO-8859-1?Q?Pr=FCfung_f=FCr?= Entwerfen von einer MIME kopfzeile</blockquote></div>   </div>   In the above example, "Subject" is the field name and the portion that   begins with "=?ISO-8859-1?..." is the field value.   </div> <div class="refsect1 parameters" id="refsect1-function.iconv-mime-encode-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">field_name</span></dt>     <dd>      <p class="para">       The field name.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">field_value</span></dt>     <dd>      <p class="para">       The field value.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">       You can control the behaviour of <span class="function"><strong>iconv_mime_encode()</strong></span>       by specifying an associative array that contains configuration items       to the optional third parameter <span class="parameter" style="color:#3A95FF">options</span>.       The items supported by <span class="function"><strong>iconv_mime_encode()</strong></span> are       listed below. Note that item names are treated case-sensitive.       </p><table class="doctable table">        <caption><strong>Configuration items supported by <span class="function"><strong>iconv_mime_encode()</strong></span></strong></caption>                 <thead>          <tr>           <th>Item</th>           <th>Type</th>           <th>Description</th>           <th>Default value</th>           <th>Example</th>          </tr>         </thead>         <tbody class="tbody">          <tr>           <td>scheme</td>           <td><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></td>           <td>            Specifies the method to encode a field value by. The value of            this item may be either "B" or "Q", where "B" stands for            <span class="literal">base64</span> encoding scheme and "Q" stands for            <span class="literal">quoted-printable</span> encoding scheme.           </td>           <td>B</td>           <td>B</td>          </tr>          <tr>           <td>input-charset</td>           <td><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></td>           <td>            Specifies the character set in which the first parameter            <span class="parameter" style="color:#3A95FF">field_name</span> and the second parameter            <span class="parameter" style="color:#3A95FF">field_value</span> are presented. If not given,            <span class="function"><strong>iconv_mime_encode()</strong></span> assumes those parameters            are presented to it in the            <a href="https://php.net/manual/zh/iconv.configuration.php" class="link">iconv.internal_encoding</a>            ini setting.           </td>           <td>            <a href="https://php.net/manual/zh/iconv.configuration.php" class="link">iconv.internal_encoding</a>           </td>           <td>ISO-8859-1</td>          </tr>          <tr>           <td>output-charset</td>           <td><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></td>           <td>            Specifies the character set to use to compose the            <span class="literal">MIME</span> header.           </td>           <td>            <a href="https://php.net/manual/zh/iconv.configuration.php" class="link">iconv.internal_encoding</a>           </td>           <td>UTF-8</td>          </tr>          <tr>           <td>line-length</td>           <td><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></td>           <td>            Specifies the maximum length of the header lines. The resulting            header is "folded" to a set of multiple lines in case            the resulting header field would be longer than the value of this            parameter, according to            <a href="https://datatracker.ietf.org/doc/html/rfc2822" class="link external">» RFC2822 - Internet Message Format</a>.            If not given, the length will be limited to 76 characters.           </td>           <td>76</td>           <td>996</td>          </tr>          <tr>           <td>line-break-chars</td>           <td><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></td>           <td>            Specifies the sequence of characters to append to each line            as an end-of-line sign when "folding" is performed on a long header            field. If not given, this defaults to "\r\n"            (<span class="literal">CR</span> <span class="literal">LF</span>). Note that            this parameter is always treated as an ASCII string regardless            of the value of <span class="literal">input-charset</span>.           </td>           <td>\r\n</td>           <td>\n</td>          </tr>         </tbody>               </table>           </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.iconv-mime-encode-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an encoded <span class="literal">MIME</span> field on success,   or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if an error occurs during the encoding.  </p> </div> <div class="refsect1 examples" id="refsect1-function.iconv-mime-encode-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2444">    <p><strong>示例 #1 <span class="function"><strong>iconv_mime_encode()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$preferences </span><span style="color: #007700">= array(<br>    </span><span style="color: #DD0000">"input-charset" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"ISO-8859-1"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"output-charset" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"UTF-8"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"line-length" </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">76</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"line-break-chars" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"\n"<br></span><span style="color: #007700">);<br></span><span style="color: #9876AA">$preferences</span><span style="color: #007700">[</span><span style="color: #DD0000">"scheme"</span><span style="color: #007700">] = </span><span style="color: #DD0000">"Q"</span><span style="color: #007700">;<br></span><span style="color: #FF8000">// This yields "Subject: =?UTF-8?Q?Pr=C3=BCfung=20Pr=C3=BCfung?="<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">iconv_mime_encode</span><span style="color: #007700">(</span><span style="color: #DD0000">"Subject"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Prüfung Prüfung"</span><span style="color: #007700">, </span><span style="color: #9876AA">$preferences</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$preferences</span><span style="color: #007700">[</span><span style="color: #DD0000">"scheme"</span><span style="color: #007700">] = </span><span style="color: #DD0000">"B"</span><span style="color: #007700">;<br></span><span style="color: #FF8000">// This yields "Subject: =?UTF-8?B?UHLDvGZ1bmcgUHLDvGZ1bmc=?="<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">iconv_mime_encode</span><span style="color: #007700">(</span><span style="color: #DD0000">"Subject"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Prüfung Prüfung"</span><span style="color: #007700">, </span><span style="color: #9876AA">$preferences</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.iconv-mime-encode-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link imap_binary()} - Convert an 8bit string to a base64 string</span></li>    <li><span class="function">{@link mb_encode_mimeheader()} - 为 MIME 头编码字符串</span></li>    <li><span class="function">{@link imap_8bit()} - Convert an 8bit string to a quoted-printable string</span></li>    <li><span class="function">{@link quoted_printable_encode()} - 将 8-bit 字符串转换成 quoted-printable 字符串</span></li>   </ul>   </div></div>
*
 * Composes a MIME header field
 * @link https://php.net/manual/zh/function.iconv-mime-encode.php
 * @param string $field_name <p>
 * The field name.
 * </p>
 * @param string $field_value <p>
 * The field value.
 * </p>
 * @param array $options <p>
 * You can control the behaviour of <b>iconv_mime_encode</b>
 * by specifying an associative array that contains configuration items
 * to the optional third parameter <i>preferences</i>.
 * The items supported by <b>iconv_mime_encode</b> are
 * listed below. Note that item names are treated case-sensitive.
 * <table>
 * Configuration items supported by <b>iconv_mime_encode</b>
 * <tr valign="top">
 * <td>Item</td>
 * <td>Type</td>
 * <td>Description</td>
 * <td>Default value</td>
 * <td>Example</td>
 * </tr>
 * <tr valign="top">
 * <td>scheme</td>
 * <td>string</td>
 * <td>
 * Specifies the method to encode a field value by. The value of
 * this item may be either "B" or "Q", where "B" stands for
 * base64 encoding scheme and "Q" stands for
 * quoted-printable encoding scheme.
 * </td>
 * <td>B</td>
 * <td>B</td>
 * </tr>
 * <tr valign="top">
 * <td>input-charset</td>
 * <td>string</td>
 * <td>
 * Specifies the character set in which the first parameter
 * <i>field_name</i> and the second parameter
 * <i>field_value</i> are presented. If not given,
 * <b>iconv_mime_encode</b> assumes those parameters
 * are presented to it in the
 * iconv.internal_encoding
 * ini setting.
 * </td>
 * <td>
 * iconv.internal_encoding
 * </td>
 * <td>ISO-8859-1</td>
 * </tr>
 * <tr valign="top">
 * <td>output-charset</td>
 * <td>string</td>
 * <td>
 * Specifies the character set to use to compose the
 * MIME header.
 * </td>
 * <td>
 * iconv.internal_encoding
 * </td>
 * <td>UTF-8</td>
 * </tr>
 * <tr valign="top">
 * <td>line-length</td>
 * <td>integer</td>
 * <td>
 * Specifies the maximum length of the header lines. The resulting
 * header is "folded" to a set of multiple lines in case
 * the resulting header field would be longer than the value of this
 * parameter, according to
 * RFC2822 - Internet Message Format.
 * If not given, the length will be limited to 76 characters.
 * </td>
 * <td>76</td>
 * <td>996</td>
 * </tr>
 * <tr valign="top">
 * <td>line-break-chars</td>
 * <td>string</td>
 * <td>
 * Specifies the sequence of characters to append to each line
 * as an end-of-line sign when "folding" is performed on a long header
 * field. If not given, this defaults to "\r\n"
 * (CR LF). Note that
 * this parameter is always treated as an ASCII string regardless
 * of the value of input-charset.
 * </td>
 * <td>\r\n</td>
 * <td>\n</td>
 * </tr>
 * </table>
 * </p>
 * @return string|false an encoded MIME field on success,
 * or <b>FALSE</b> if an error occurs during the encoding.
 
#[Pure]
*/
function iconv_mime_encode(string $field_name, string $field_value, array $options = []): string|false {}

/**
* <div id="function.iconv-mime-decode" class="refentry"> <div class="refnamediv">  <h1 class="refname">iconv_mime_decode</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_mime_decode</span> — <span class="dc-title">解码一个<span class="literal">MIME</span>头字段</span></p> </div>  <div class="refsect1 description" id="refsect1-function.iconv-mime-decode-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>iconv_mime_decode</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$string</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$mode</span><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   解码一个<span class="literal">MIME</span>头字段.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.iconv-mime-decode-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">string</span></dt>     <dd>      <p class="para">       编码头,是一个字符串.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">模式</span>决定了当<span class="function"><strong>iconv_mime_decode()</strong></span>遇到一个不规则的       <span class="literal">MIME</span>头字段时,对这个事件作出的行为.你可以指定以下位掩码的任意组合.       </p><table class="doctable table">        <caption><strong>可以在<span class="function"><strong>iconv_mime_decode()</strong></span>中使用的位掩码</strong></caption>                 <thead>          <tr>           <th>值</th>           <th>常量</th>           <th>描述</th>          </tr>         </thead>         <tbody class="tbody">          <tr>           <td>1</td>           <td>ICONV_MIME_DECODE_STRICT</td>           <td>            如果使用该位掩码,传入的头字段将会完全一致的按照<a href="https://datatracker.ietf.org/doc/html/rfc2047" class="link external">» RFC2047</a>的标准定义被解码.            这个选项默认是禁用的,因为有很多零散的邮件用户代理商不遵守标准规范并且不生成正确的<span class="literal">MIME</span>头.           </td>          </tr>          <tr>           <td>2</td>           <td>ICONV_MIME_DECODE_CONTINUE_ON_ERROR</td>           <td>            如果使用该位掩码,<span class="function">{@link iconv_mime_decode_headers()}</span>            将会试图忽略任何错误语法,并继续处理传入的头字段.           </td>          </tr>         </tbody>               </table>           </dd>             <dt><span class="parameter" style="color:#3A95FF">encoding</span></dt>     <dd>      <p class="para">       可选的 <span class="parameter" style="color:#3A95FF">encoding</span> 参数,用指定的字符集表示结果。如果省略或为       <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，<a href="https://php.net/manual/zh/iconv.configuration.php" class="link">iconv.internal_encoding</a>       将会被默认使用。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.iconv-mime-decode-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果解码成功,返回一个被解码的<span class="literal">MIME</span>字段,   如果在解码过程中出现一个错误,将返回<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> .  </p> </div> <div class="refsect1 changelog" id="refsect1-function.iconv-mime-decode-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">encoding</span> 现在可为 null。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.iconv-mime-decode-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2442">    <p><strong>示例 #1 <span class="function"><strong>iconv_mime_decode()</strong></span>实例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">//返回结果: "Subject: Prüfung Prüfung"<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">iconv_mime_decode</span><span style="color: #007700">(</span><span style="color: #DD0000">"Subject: =?UTF-8?B?UHLDvGZ1bmcgUHLDvGZ1bmc=?="</span><span style="color: #007700">,<br>                       </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #DD0000">"ISO-8859-1"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.iconv-mime-decode-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link iconv_mime_decode_headers()} - 一次性解码多个 MIME 头字段</span></li>    <li><span class="function">{@link mb_decode_mimeheader()} - 解码 MIME 头字段中的字符串</span></li>    <li><span class="function">{@link imap_mime_header_decode()} - Decode MIME header elements</span></li>    <li><span class="function">{@link imap_base64()} - Decode BASE64 encoded text</span></li>    <li><span class="function">{@link imap_qprint()} - Convert a quoted-printable string to an 8 bit string</span></li>   </ul>   </div></div>
*
 * Decodes a MIME header field
 * @link https://php.net/manual/zh/function.iconv-mime-decode.php
 * @param string $string <p>
 * The encoded header, as a string.
 * </p>
 * @param int $mode [optional] <p>
 * <i>mode</i> determines the behaviour in the event
 * <b>iconv_mime_decode</b> encounters a malformed
 * MIME header field. You can specify any combination
 * of the following bitmasks.
 * <table>
 * Bitmasks acceptable to <b>iconv_mime_decode</b>
 * <tr valign="top">
 * <td>Value</td>
 * <td>Constant</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>ICONV_MIME_DECODE_STRICT</td>
 * <td>
 * If set, the given header is decoded in full conformance with the
 * standards defined in RFC2047.
 * This option is disabled by default because there are a lot of
 * broken mail user agents that don't follow the specification and don't
 * produce correct MIME headers.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>ICONV_MIME_DECODE_CONTINUE_ON_ERROR</td>
 * <td>
 * If set, <b>iconv_mime_decode_headers</b>
 * attempts to ignore any grammatical errors and continue to process
 * a given header.
 * </td>
 * </tr>
 * </table>
 * </p>
 * @param string|null $encoding <p>
 * The optional <i>charset</i> parameter specifies the
 * character set to represent the result by. If omitted,
 * iconv.internal_encoding
 * will be used.
 * </p>
 * @return string|false a decoded MIME field on success,
 * or <b>FALSE</b> if an error occurs during the decoding.
 
#[Pure]
*/
function iconv_mime_decode(string $string, int $mode = 0, ?string $encoding = null): string|false {}

/**
* <div id="function.iconv-mime-decode-headers" class="refentry"> <div class="refnamediv">  <h1 class="refname">iconv_mime_decode_headers</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">iconv_mime_decode_headers</span> — <span class="dc-title">一次性解码多个 <span class="literal">MIME</span> 头字段</span></p> </div>  <div class="refsect1 description" id="refsect1-function.iconv-mime-decode-headers-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>iconv_mime_decode_headers</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$headers</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$mode</span><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   一次性解码多个 <span class="literal">MIME</span> 头字段。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.iconv-mime-decode-headers-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">headers</span></dt>     <dd>      <p class="para">       编码过的头，是一个字符串。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">mode</span> 决定了 <span class="function"><strong>iconv_mime_decode_headers()</strong></span> 遇到畸形 <span class="literal">MIME</span> 头字段时的行为。       你可以指定为以下位掩码的任意组合。       </p><table class="doctable table">        <caption><strong><span class="function"><strong>iconv_mime_decode_headers()</strong></span> 接受的位掩码</strong></caption>                 <thead>          <tr>           <th>值</th>           <th>常量</th>           <th>描述</th>          </tr>         </thead>         <tbody class="tbody">          <tr>           <td>1</td>           <td>ICONV_MIME_DECODE_STRICT</td>           <td>            如果设置了，给定的头将会以 <a href="https://datatracker.ietf.org/doc/html/rfc2047" class="link external">» RFC2047</a> 定义的标准完全一致。            这个选项默认禁用，因为大量有问题的邮件用户代理不遵循标准并产生不正确的 <span class="literal">MIME</span> 头。           </td>          </tr>          <tr>           <td>2</td>           <td>ICONV_MIME_DECODE_CONTINUE_ON_ERROR</td>           <td>            如果设置了，<span class="function"><strong>iconv_mime_decode_headers()</strong></span> 尝试忽略任何语法错误并继续处理指定的头。           </td>          </tr>         </tbody>               </table>           </dd>             <dt><span class="parameter" style="color:#3A95FF">encoding</span></dt>     <dd>      <p class="para">       可选参数 <span class="parameter" style="color:#3A95FF">encoding</span> 指定了字符集结果的表现。       如果省略或为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，将使用       <a href="https://php.net/manual/zh/iconv.configuration.php" class="link">iconv.internal_encoding</a>。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.iconv-mime-decode-headers-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <span class="parameter" style="color:#3A95FF">headers</span> 指定的 <span class="literal">MIME</span> 头的整套关联数组，解码时出现错误则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   返回元素的每个键代表独立字段名，相应的元素代表一个字段值。如果有多个同一名称的字段，<span class="function"><strong>iconv_mime_decode_headers()</strong></span>   自动将他们按出现顺序结合成数字索引的数组。请注意，标头名称不<em>区分大小写</em>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.iconv-mime-decode-headers-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">encoding</span> 现在可为 null。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.iconv-mime-decode-headers-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2443">    <p><strong>示例 #1 <span class="function"><strong>iconv_mime_decode_headers()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$headers_string </span><span style="color: #007700">= &lt;&lt;&lt;EOF<br></span><span style="color: #DD0000">Subject: =?UTF-8?B?UHLDvGZ1bmcgUHLDvGZ1bmc=?=<br>To: example@example.com<br>Date: Thu, 1 Jan 1970 00:00:00 +0000<br>Message-Id: &lt;example@example.com&gt;<br>Received: from localhost (localhost [127.0.0.1]) by localhost<br>    with SMTP id example for &lt;example@example.com&gt;;<br>    Thu, 1 Jan 1970 00:00:00 +0000 (UTC)<br>    (envelope-from example-return-0000-example=example.com@example.com)<br>Received: (qmail 0 invoked by uid 65534); 1 Thu 2003 00:00:00 +0000<br><br></span><span style="color: #007700">EOF;<br><br></span><span style="color: #9876AA">$headers </span><span style="color: #007700">=  </span><span style="color: #9876AA">iconv_mime_decode_headers</span><span style="color: #007700">(</span><span style="color: #9876AA">$headers_string</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #DD0000">"ISO-8859-1"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$headers</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>     </div>     <div class="example-contents"><p>以上示例会输出：</p></div>     <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>    [Subject] =&gt; PrÃ¼fung PrÃ¼fung<br>    [To] =&gt; example@example.com<br>    [Date] =&gt; Thu, 1 Jan 1970 00:00:00 +0000<br>    [Message-Id] =&gt; <example><br>    [Received] =&gt; Array<br>        (<br>            [0] =&gt; from localhost (localhost [127.0.0.1]) by localhost with SMTP id example for <example>; Thu, 1 Jan 1970 00:00:00 +0000 (UTC) (envelope-from example-return-0000-example=example.com@example.com)<br>            [1] =&gt; (qmail 0 invoked by uid 65534); 1 Thu 2003 00:00:00 +0000<br>        )<br><br>)</example></example></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.iconv-mime-decode-headers-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link iconv_mime_decode()} - 解码一个MIME头字段</span></li>    <li><span class="function">{@link mb_decode_mimeheader()} - 解码 MIME 头字段中的字符串</span></li>    <li><span class="function">{@link imap_mime_header_decode()} - Decode MIME header elements</span></li>    <li><span class="function">{@link imap_base64()} - Decode BASE64 encoded text</span></li>    <li><span class="function">{@link imap_qprint()} - Convert a quoted-printable string to an 8 bit string</span></li>   </ul>   </div></div>
*
 * Decodes multiple MIME header fields at once
 * @link https://php.net/manual/zh/function.iconv-mime-decode-headers.php
 * @param string $headers <p>
 * The encoded headers, as a string.
 * </p>
 * @param int $mode [optional] <p>
 * <i>mode</i> determines the behaviour in the event
 * <b>iconv_mime_decode_headers</b> encounters a malformed
 * MIME header field. You can specify any combination
 * of the following bitmasks.
 * <br>
 * Bitmasks acceptable to <b>iconv_mime_decode_headers</b></p>
 * <table>
 * <tr valign="top">
 * <td>Value</td>
 * <td>Constant</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>1</td>
 * <td>ICONV_MIME_DECODE_STRICT</td>
 * <td>
 * If set, the given header is decoded in full conformance with the
 * standards defined in RFC2047.
 * This option is disabled by default because there are a lot of
 * broken mail user agents that don't follow the specification and don't
 * produce correct MIME headers.
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>2</td>
 * <td>ICONV_MIME_DECODE_CONTINUE_ON_ERROR</td>
 * <td>
 * If set, <b>iconv_mime_decode_headers</b>
 * attempts to ignore any grammatical errors and continue to process
 * a given header.
 * </td>
 * </tr>
 * </table>
 * @param string|null $encoding <p>
 * The optional <i>charset</i> parameter specifies the
 * character set to represent the result by. If omitted,
 * iconv.internal_encoding
 * will be used.
 * </p>
 * @return array|false an associative array that holds a whole set of
 * MIME header fields specified by
 * <i>encoded_headers</i> on success, or <b>FALSE</b>
 * if an error occurs during the decoding.
 * <p>
 * Each key of the return value represents an individual
 * field name and the corresponding element represents a field value.
 * If more than one field of the same name are present,
 * <b>iconv_mime_decode_headers</b> automatically incorporates
 * them into a numerically indexed array in the order of occurrence.
 * </p>
 
#[Pure]
*/
function iconv_mime_decode_headers(string $headers, int $mode = 0, ?string $encoding = null): array|false {}

/**
 * string
 * @link https://php.net/manual/en/iconv.constants.php
 */
define('ICONV_IMPL', "libiconv");

/**
 * string
 * @link https://php.net/manual/en/iconv.constants.php
 */
define('ICONV_VERSION', 2.17);

/**
 * integer
 * @link https://php.net/manual/en/iconv.constants.php
 */
define('ICONV_MIME_DECODE_STRICT', 1);

/**
 * integer
 * @link https://php.net/manual/en/iconv.constants.php
 */
define('ICONV_MIME_DECODE_CONTINUE_ON_ERROR', 2);

// End of iconv v.
