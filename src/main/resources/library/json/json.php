<?php

// Start of json v.1.3.1
use JetBrains\PhpStorm\Internal\TentativeType;
use JetBrains\PhpStorm\Pure;

/**
 * Objects implementing JsonSerializable
 * can customize their JSON representation when encoded with
 * <b>json_encode</b>.
 * @link https://php.net/manual/en/class.jsonserializable.php
 * @since 5.4
 */
interface JsonSerializable
{
    /**
     * Specify data which should be serialized to JSON
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4
     */
    #[TentativeType]
    public function jsonSerialize(): mixed;
}


class JsonIncrementalParser
{
    public const JSON_PARSER_SUCCESS = 0;
    public const JSON_PARSER_CONTINUE = 1;

    /**
     * @param int $depth [optional]
     * @param int $options [optional]
     */
    #[Pure]
    public function __construct($depth, $options) {}

    #[Pure]
    public function getError() {}


    public function reset() {}

    /**
     * @param string $json
     */
    public function parse($json) {}

    /**
     * @param string $filename
     */
    public function parseFile($filename) {}

    /**
     * @param int $options [optional]
     */
    #[Pure]
    public function get($options) {}
}

/**
 * <div id="function.json-encode" class="refentry"> <div class="refnamediv">  <h1 class="refname">json_encode</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL json &gt;= 1.2.0)</p><p class="refpurpose"><span class="refname">json_encode</span> — <span class="dc-title">对变量进行 JSON 编码</span></p> </div> <div class="refsect1 description" id="refsect1-function.json-encode-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>json_encode</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$flags</span><span class="initializer"> = 0</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$depth</span><span class="initializer"> = 512</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   返回字符串，包含了 <span class="parameter" style="color:#3A95FF">value</span> 值 JSON 形式的表示。如果参数是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 或 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.object.php" class="type object" style="color:#EAB766">object</a></span>，则会递归序列化。  </p>  <p class="para">   如果要序列化的值是对象，则默认仅包含公开可见的属性，或者类可以实现 <span class="interfacename"><a href="https://php.net/manual/zh/class.jsonserializable.php" class="interfacename">JsonSerializable</a></span>   控制其值如何序列化为 <span>JSON</span>。  </p>  <p class="para">   编码受传入的 <span class="parameter" style="color:#3A95FF">flags</span> 参数影响，此外浮点值的编码依赖于 <a href="https://php.net/manual/zh/ini.core.php#ini.serialize-precision" class="link">serialize_precision</a>。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.json-encode-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">value</span></dt>     <dd>      <p class="para">       待编码的 <span class="parameter" style="color:#3A95FF">value</span> ，除了 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>       类型之外，可以为任何数据类型。      </p>      <p class="para">       所有字符串数据的编码必须是 UTF-8。      </p>       <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:   </p><p class="para">   PHP 实现了 JSON 的一个超集，参考   <a href="https://datatracker.ietf.org/doc/html/rfc7159" class="link external">»&nbsp;RFC 7159</a>.  </p> </blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       由以下常量组成的二进制掩码：       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-force-object">JSON_FORCE_OBJECT</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-hex-quot">JSON_HEX_QUOT</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-hex-tag">JSON_HEX_TAG</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-hex-amp">JSON_HEX_AMP</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-hex-apos">JSON_HEX_APOS</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-invalid-utf8-ignore">JSON_INVALID_UTF8_IGNORE</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-invalid-utf8-substitute">JSON_INVALID_UTF8_SUBSTITUTE</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-numeric-check">JSON_NUMERIC_CHECK</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-partial-output-on-error">JSON_PARTIAL_OUTPUT_ON_ERROR</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-preserve-zero-fraction">JSON_PRESERVE_ZERO_FRACTION</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-pretty-print">JSON_PRETTY_PRINT</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-unescaped-line-terminators">JSON_UNESCAPED_LINE_TERMINATORS</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-unescaped-slashes">JSON_UNESCAPED_SLASHES</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-unescaped-unicode">JSON_UNESCAPED_UNICODE</a></span></strong>、       <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></span></strong>。       关于 JSON 常量详情参考       <a href="https://php.net/manual/zh/json.constants.php" class="link">JSON 常量</a>页面。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">depth</span></dt>     <dd>      <p class="para">       设置最大深度。 必须大于0。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.json-encode-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功则返回 JSON 编码的 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.json-encode-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>7.3.0</td>       <td>        <span class="parameter" style="color:#3A95FF">flags</span> 参数新增        <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></span></strong>        常量。       </td>      </tr>      <tr>       <td>7.2.0</td>       <td>        <span class="parameter" style="color:#3A95FF">flags</span> 参数新增        <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-invalid-utf8-ignore">JSON_INVALID_UTF8_IGNORE</a></span></strong> 和        <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-invalid-utf8-substitute">JSON_INVALID_UTF8_SUBSTITUTE</a></span></strong>        常量。       </td>      </tr>      <tr>       <td>7.1.0</td>       <td>        <span class="parameter" style="color:#3A95FF">flags</span> 参数新增        <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-unescaped-line-terminators">JSON_UNESCAPED_LINE_TERMINATORS</a></span></strong>        常量。       </td>      </tr>      <tr>       <td>7.1.0</td>       <td>        对 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span> 值进行编码时，使用        <a href="https://php.net/manual/zh/ini.core.php#ini.serialize-precision" class="link">serialize_precision</a> 代替        <a href="https://php.net/manual/zh/ini.core.php#ini.precision" class="link">precision</a>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.json-encode-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3682">    <p><strong>示例 #1 <span class="function"><strong>json_encode()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$arr </span><span style="color: #007700">= array (</span><span style="color: #DD0000">'a'</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">1</span><span style="color: #007700">,</span><span style="color: #DD0000">'b'</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">2</span><span style="color: #007700">,</span><span style="color: #DD0000">'c'</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">3</span><span style="color: #007700">,</span><span style="color: #DD0000">'d'</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">4</span><span style="color: #007700">,</span><span style="color: #DD0000">'e'</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">5</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$arr</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">{"a":1,"b":2,"c":3,"d":4,"e":5}</blockquote></div>    </div>   </div>      <div class="example" id="example-3683">    <p><strong>示例 #2  <span class="function"><strong>json_encode()</strong></span> 函数中 flags 参数的用法</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$a </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'&lt;foo&gt;'</span><span style="color: #007700">,</span><span style="color: #DD0000">"'bar'"</span><span style="color: #007700">,</span><span style="color: #DD0000">'"baz"'</span><span style="color: #007700">,</span><span style="color: #DD0000">'&amp;blong&amp;'</span><span style="color: #007700">, </span><span style="color: #DD0000">"\xc3\xa9"</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">"Normal: "</span><span style="color: #007700">,  </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$a</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">"Tags: "</span><span style="color: #007700">,    </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$a</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_HEX_TAG</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">"Apos: "</span><span style="color: #007700">,    </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$a</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_HEX_APOS</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">"Quot: "</span><span style="color: #007700">,    </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$a</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_HEX_QUOT</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">"Amp: "</span><span style="color: #007700">,     </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$a</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_HEX_AMP</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">"Unicode: "</span><span style="color: #007700">, </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$a</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_UNESCAPED_UNICODE</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">"All: "</span><span style="color: #007700">,     </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$a</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_HEX_TAG </span><span style="color: #007700">| </span><span style="color: #9876AA">JSON_HEX_APOS </span><span style="color: #007700">| </span><span style="color: #9876AA">JSON_HEX_QUOT </span><span style="color: #007700">| </span><span style="color: #9876AA">JSON_HEX_AMP </span><span style="color: #007700">| </span><span style="color: #9876AA">JSON_UNESCAPED_UNICODE</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$b </span><span style="color: #007700">= array();<br><br>echo </span><span style="color: #DD0000">"Empty array output as array: "</span><span style="color: #007700">, </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$b</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">"Empty array output as object: "</span><span style="color: #007700">, </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$b</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_FORCE_OBJECT</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$c </span><span style="color: #007700">= array(array(</span><span style="color: #9876AA">1</span><span style="color: #007700">,</span><span style="color: #9876AA">2</span><span style="color: #007700">,</span><span style="color: #9876AA">3</span><span style="color: #007700">));<br><br>echo </span><span style="color: #DD0000">"Non-associative array output as array: "</span><span style="color: #007700">, </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$c</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">"Non-associative array output as object: "</span><span style="color: #007700">, </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$c</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_FORCE_OBJECT</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$d </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'foo' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">, </span><span style="color: #DD0000">'baz' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'long'</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">"Associative array always output as object: "</span><span style="color: #007700">, </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$d</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">"Associative array always output as object: "</span><span style="color: #007700">, </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$d</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_FORCE_OBJECT</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Normal:&nbsp;["<foo>","'bar'","\"baz\"","&amp;blong&amp;","\u00e9"]<br>Tags:&nbsp;["\u003Cfoo\u003E","'bar'","\"baz\"","&amp;blong&amp;","\u00e9"]<br>Apos:&nbsp;["<foo>","\u0027bar\u0027","\"baz\"","&amp;blong&amp;","\u00e9"]<br>Quot:&nbsp;["<foo>","'bar'","\u0022baz\u0022","&amp;blong&amp;","\u00e9"]<br>Amp:&nbsp;["<foo>","'bar'","\"baz\"","\u0026blong\u0026","\u00e9"]<br>Unicode:&nbsp;["<foo>","'bar'","\"baz\"","&amp;blong&amp;","Ã©"]<br>All:&nbsp;["\u003Cfoo\u003E","\u0027bar\u0027","\u0022baz\u0022","\u0026blong\u0026","Ã©"]<br><br>Empty&nbsp;array&nbsp;output&nbsp;as&nbsp;array:&nbsp;[]<br>Empty&nbsp;array&nbsp;output&nbsp;as&nbsp;object:&nbsp;{}<br><br>Non-associative&nbsp;array&nbsp;output&nbsp;as&nbsp;array:&nbsp;[[1,2,3]]<br>Non-associative&nbsp;array&nbsp;output&nbsp;as&nbsp;object:&nbsp;{"0":{"0":1,"1":2,"2":3}}<br><br>Associative&nbsp;array&nbsp;always&nbsp;output&nbsp;as&nbsp;object:&nbsp;{"foo":"bar","baz":"long"}<br>Associative&nbsp;array&nbsp;always&nbsp;output&nbsp;as&nbsp;object:&nbsp;{"foo":"bar","baz":"long"}</foo></foo></foo></foo></foo></blockquote></div>    </div>   </div>   <div class="example" id="example-3684">    <p><strong>示例 #3 选项 JSON_NUMERIC_CHECK 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Strings representing numbers automatically turned into numbers"</span><span style="color: #007700">.</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$numbers </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'+123123'</span><span style="color: #007700">, </span><span style="color: #DD0000">'-123123'</span><span style="color: #007700">, </span><span style="color: #DD0000">'1.2e3'</span><span style="color: #007700">, </span><span style="color: #DD0000">'0.00001'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(<br> </span><span style="color: #9876AA">\$numbers</span><span style="color: #007700">,<br> </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$numbers</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_NUMERIC_CHECK</span><span style="color: #007700">)<br>);<br>echo </span><span style="color: #DD0000">"Strings containing improperly formatted numbers"</span><span style="color: #007700">.</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$strings </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'+a33123456789'</span><span style="color: #007700">, </span><span style="color: #DD0000">'a123'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(<br> </span><span style="color: #9876AA">\$strings</span><span style="color: #007700">,<br> </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$strings</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_NUMERIC_CHECK</span><span style="color: #007700">)<br>);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Strings&nbsp;representing&nbsp;numbers&nbsp;automatically&nbsp;turned&nbsp;into&nbsp;numbers<br>array(4)&nbsp;{<br>&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;string(7)&nbsp;"+123123"<br>&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;string(7)&nbsp;"-123123"<br>&nbsp;&nbsp;[2]=&gt;<br>&nbsp;&nbsp;string(5)&nbsp;"1.2e3"<br>&nbsp;&nbsp;[3]=&gt;<br>&nbsp;&nbsp;string(7)&nbsp;"0.00001"<br>}<br>string(28)&nbsp;"[123123,-123123,1200,1.0e-5]"<br>Strings&nbsp;containing&nbsp;improperly&nbsp;formatted&nbsp;numbers<br>array(2)&nbsp;{<br>&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;string(13)&nbsp;"+a33123456789"<br>&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;string(4)&nbsp;"a123"<br>}<br>string(24)&nbsp;"["+a33123456789","a123"]"</blockquote></div>    </div>   </div>   <div class="example" id="example-3685">    <p><strong>示例 #4 连续与非连续数组示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"连续数组"</span><span style="color: #007700">.</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$sequential </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">, </span><span style="color: #DD0000">"bar"</span><span style="color: #007700">, </span><span style="color: #DD0000">"baz"</span><span style="color: #007700">, </span><span style="color: #DD0000">"blong"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(<br> </span><span style="color: #9876AA">\$sequential</span><span style="color: #007700">,<br> </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$sequential</span><span style="color: #007700">)<br>);<br><br>echo </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">.</span><span style="color: #DD0000">"非连续数组"</span><span style="color: #007700">.</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$nonsequential </span><span style="color: #007700">= array(</span><span style="color: #9876AA">1</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"foo"</span><span style="color: #007700">, </span><span style="color: #9876AA">2</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"bar"</span><span style="color: #007700">, </span><span style="color: #9876AA">3</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"baz"</span><span style="color: #007700">, </span><span style="color: #9876AA">4</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"blong"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(<br> </span><span style="color: #9876AA">\$nonsequential</span><span style="color: #007700">,<br> </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$nonsequential</span><span style="color: #007700">)<br>);<br><br>echo </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">.</span><span style="color: #DD0000">"删除一个连续数组值的方式产生的非连续数组"</span><span style="color: #007700">.</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>unset(</span><span style="color: #9876AA">\$sequential</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(<br> </span><span style="color: #9876AA">\$sequential</span><span style="color: #007700">,<br> </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$sequential</span><span style="color: #007700">)<br>);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">è¿ç»­æ°ç»<br>array(4)&nbsp;{<br>&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;string(3)&nbsp;"foo"<br>&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;string(3)&nbsp;"bar"<br>&nbsp;&nbsp;[2]=&gt;<br>&nbsp;&nbsp;string(3)&nbsp;"baz"<br>&nbsp;&nbsp;[3]=&gt;<br>&nbsp;&nbsp;string(5)&nbsp;"blong"<br>}<br>string(27)&nbsp;"["foo","bar","baz","blong"]"<br><br>éè¿ç»­æ°ç»<br>array(4)&nbsp;{<br>&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;string(3)&nbsp;"foo"<br>&nbsp;&nbsp;[2]=&gt;<br>&nbsp;&nbsp;string(3)&nbsp;"bar"<br>&nbsp;&nbsp;[3]=&gt;<br>&nbsp;&nbsp;string(3)&nbsp;"baz"<br>&nbsp;&nbsp;[4]=&gt;<br>&nbsp;&nbsp;string(5)&nbsp;"blong"<br>}<br>string(43)&nbsp;"{"1":"foo","2":"bar","3":"baz","4":"blong"}"<br><br>å&nbsp;é¤ä¸ä¸ªè¿ç»­æ°ç»å¼çæ¹å¼äº§ççéè¿ç»­æ°ç»<br>array(3)&nbsp;{<br>&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;string(3)&nbsp;"foo"<br>&nbsp;&nbsp;[2]=&gt;<br>&nbsp;&nbsp;string(3)&nbsp;"baz"<br>&nbsp;&nbsp;[3]=&gt;<br>&nbsp;&nbsp;string(5)&nbsp;"blong"<br>}<br>string(33)&nbsp;"{"0":"foo","2":"baz","3":"blong"}"</blockquote></div>    </div>   </div>   <div class="example" id="example-3686">    <p><strong>示例 #5 <strong><span>选项 JSON_PRESERVE_ZERO_FRACTION</span></strong> 的例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">12.0</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_PRESERVE_ZERO_FRACTION</span><span style="color: #007700">));<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">12.0</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">string(4)&nbsp;"12.0"<br>string(2)&nbsp;"12"</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.json-encode-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    如果执行失败，可以通过 <span class="function">{@link json_last_error()}</span> 函数来获取详细错误信息。   </p>  </blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    如果要编码的数组的键不是从0开始的数字，所有的键将会被当作字符串，并明确声明为 key-value 对。   </p>  </blockquote>    <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    参考 JSON 解析器，如果指定简单的 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>、<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type integer" style="color:#EAB766">integer</a></span>、<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span> 或    <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type boolean" style="color:#EAB766">boolean</a></span> 作为输入 <span class="parameter" style="color:#3A95FF">value</span>，<span class="function"><strong>json_encode()</strong></span>    将生成简单的值的 JSON（既不是对象又不是数组）。虽然大多数解码器会接受这些值作为有效的    JSON，但有些可能不会，因为在这一点上规范是模棱两可的。   </p>   <p class="para">    总而言之，应该测试下 JSON decoder 能否处理 <span class="function"><strong>json_encode()</strong></span> 生成的数据。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.json-encode-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="interfacename"><a href="https://php.net/manual/zh/class.jsonserializable.php" class="interfacename">JsonSerializable</a></span></li>    <li><span class="function">{@link json_decode()} - 对 JSON 格式的字符串进行解码</span></li>    <li><span class="function">{@link json_last_error()} - 返回最后发生的错误</span></li>    <li><span class="function">{@link json_last_error_msg()} - 返回最后一次调用 json_encode() 或 json_decode() 时产生的错误信息</span></li>    <li><span class="function">{@link serialize()} - 生成值的可存储表示</span></li>   </ul>   </div></div>
 * 
 * (PHP 5 &gt;= 5.2.0, PECL json &gt;= 1.2.0)<br/>
 * Returns the JSON representation of a value
 * @link https://php.net/manual/zh/function.json-encode.php
 * @param mixed $value <p>
 * The <i>value</i> being encoded. Can be any type except
 * a resource.
 * </p>
 * <p>
 * All string data must be UTF-8 encoded.
 * </p>
 * <p>PHP implements a superset of
 * JSON - it will also encode and decode scalar types and <b>NULL</b>. The JSON standard
 * only supports these values when they are nested inside an array or an object.
 * </p>
 * @param int $flags [optional] <p>
 * Bitmask consisting of <b>JSON_HEX_QUOT</b>,
 * <b>JSON_HEX_TAG</b>,
 * <b>JSON_HEX_AMP</b>,
 * <b>JSON_HEX_APOS</b>,
 * <b>JSON_NUMERIC_CHECK</b>,
 * <b>JSON_PRETTY_PRINT</b>,
 * <b>JSON_UNESCAPED_SLASHES</b>,
 * <b>JSON_FORCE_OBJECT</b>,
 * <b>JSON_UNESCAPED_UNICODE</b>.
 * <b>JSON_THROW_ON_ERROR</b> The behaviour of these
 * constants is described on
 * the JSON constants page.
 * </p>
 * @param int $depth [optional] <p>
 * Set the maximum depth. Must be greater than zero.
 * </p>
 * @return string|false a JSON encoded string on success or <b>FALSE</b> on failure.
 */
function json_encode(mixed $value, int $flags = 0, int $depth = 512): string|false {}

/**
 * <div id="function.json-decode" class="refentry"> <div class="refnamediv">  <h1 class="refname">json_decode</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL json &gt;= 1.2.0)</p><p class="refpurpose"><span class="refname">json_decode</span> — <span class="dc-title">对 JSON 格式的字符串进行解码</span></p> </div>  <div class="refsect1 description" id="refsect1-function.json-decode-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>json_decode</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$json</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></span> <span class="parameter" style="color:#3A95FF">\$associative</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$depth</span><span class="initializer"> = 512</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$flags</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   接受一个 JSON 编码的字符串并且把它转换为 PHP 值。  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.json-decode-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">json</span></dt>     <dd>      <p class="para">       待解码的 <span class="parameter" style="color:#3A95FF">json</span> <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> 格式的字符串。      </p>      <p class="para">       这个函数仅能处理 UTF-8 编码的数据。      </p>       <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:   </p><p class="para">   PHP 实现了 JSON 的一个超集，参考   <a href="https://datatracker.ietf.org/doc/html/rfc7159" class="link external">»&nbsp;RFC 7159</a>.  </p> </blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">associative</span></dt>     <dd>      <p class="para">       当为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> 时，JSON 对象将返回关联 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>；当为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 时，JSON 对象将返回       <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.object.php" class="type object" style="color:#EAB766">object</a></span>。当为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> 时，JSON 对象将返回关联 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 或 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.object.php" class="type object" style="color:#EAB766">object</a></span>，这取决于是否在       <span class="parameter" style="color:#3A95FF">flags</span> 中设置 <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-object-as-array">JSON_OBJECT_AS_ARRAY</a></span></strong>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">depth</span></dt>     <dd>      <p class="para">       需要解码的结构，其最大嵌套深度。该值必须大于 <span class="literal">0</span> 或者小于等于 <span class="literal">2147483647</span>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       由 <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-bigint-as-string">JSON_BIGINT_AS_STRING</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-invalid-utf8-ignore">JSON_INVALID_UTF8_IGNORE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-invalid-utf8-substitute">JSON_INVALID_UTF8_SUBSTITUTE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-object-as-array">JSON_OBJECT_AS_ARRAY</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></span></strong>       组成的掩码。这些常量的行为在 <a href="https://php.net/manual/zh/json.constants.php" class="link">JSON constants</a> 页面有进一步描述。      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.json-decode-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回在 <span class="parameter" style="color:#3A95FF">json</span> 中编码的数据作为合适的 PHP 类型。没有引号的值   <span class="literal">true</span>、<span class="literal">false</span> 和 <span class="literal">null</span>   会相应地返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 和 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。如果 <span class="parameter" style="color:#3A95FF">json</span>    无法被解码，或者编码数据深度超过了嵌套限制的话，将会返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。  </p> </div>  <div class="refsect1 errors" id="refsect1-function.json-decode-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   如果 <span class="parameter" style="color:#3A95FF">depth</span> 超出允许的范围，自 PHP 8.0.0 起将会抛出   <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>，在此之前的版本将会引发   <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong> 级别的错误。  </p> </div>  <div class="refsect1 changelog" id="refsect1-function.json-decode-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>7.3.0</td>       <td>        <span class="parameter" style="color:#3A95FF">flags</span> 新增 <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></span></strong>。       </td>      </tr>      <tr>       <td>7.2.0</td>       <td>        现在 <span class="parameter" style="color:#3A95FF">associative</span> 允许为 null。       </td>      </tr>      <tr>       <td>7.2.0</td>       <td>        <span class="parameter" style="color:#3A95FF">flags</span> 新增 <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-invalid-utf8-ignore">JSON_INVALID_UTF8_IGNORE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-invalid-utf8-substitute">JSON_INVALID_UTF8_SUBSTITUTE</a></span></strong>。       </td>      </tr>      <tr>       <td>7.1.0</td>       <td>        An empty JSON key ("") can be encoded to the empty object property        instead of using a key with value <span class="literal">_empty_</span>.       </td>      </tr>     </tbody>       </table>   </div>  <div class="refsect1 examples" id="refsect1-function.json-decode-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3677">    <p><strong>示例 #1 <span class="function"><strong>json_decode()</strong></span> 的例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$json </span><span style="color: #007700">= </span><span style="color: #DD0000">'{"a":1,"b":2,"c":3,"d":4,"e":5}'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">json_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$json</span><span style="color: #007700">));<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">json_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$json</span><span style="color: #007700">, </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">object(stdClass)#1&nbsp;(5)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;["a"]&nbsp;=&gt;&nbsp;int(1)<br>&nbsp;&nbsp;&nbsp;&nbsp;["b"]&nbsp;=&gt;&nbsp;int(2)<br>&nbsp;&nbsp;&nbsp;&nbsp;["c"]&nbsp;=&gt;&nbsp;int(3)<br>&nbsp;&nbsp;&nbsp;&nbsp;["d"]&nbsp;=&gt;&nbsp;int(4)<br>&nbsp;&nbsp;&nbsp;&nbsp;["e"]&nbsp;=&gt;&nbsp;int(5)<br>}<br><br>array(5)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;["a"]&nbsp;=&gt;&nbsp;int(1)<br>&nbsp;&nbsp;&nbsp;&nbsp;["b"]&nbsp;=&gt;&nbsp;int(2)<br>&nbsp;&nbsp;&nbsp;&nbsp;["c"]&nbsp;=&gt;&nbsp;int(3)<br>&nbsp;&nbsp;&nbsp;&nbsp;["d"]&nbsp;=&gt;&nbsp;int(4)<br>&nbsp;&nbsp;&nbsp;&nbsp;["e"]&nbsp;=&gt;&nbsp;int(5)<br>}</blockquote></div>    </div>   </div>   <div class="example" id="example-3678">    <p><strong>示例 #2 Accessing invalid object properties</strong></p>    <div class="example-contents"><p>     Accessing elements within an object that contain characters not     permitted under PHP's naming convention (e.g. the hyphen) can be     accomplished by encapsulating the element name within braces and the apostrophe.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$json </span><span style="color: #007700">= </span><span style="color: #DD0000">'{"foo-bar": 12345}'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$obj </span><span style="color: #007700">= </span><span style="color: #9876AA">json_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$json</span><span style="color: #007700">);<br>print </span><span style="color: #9876AA">\$obj</span><span style="color: #007700">-&gt;{</span><span style="color: #DD0000">'foo-bar'</span><span style="color: #007700">}; </span><span style="color: #FF8000">// 12345<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   <div class="example" id="example-3679">    <p><strong>示例 #3 common mistakes using <span class="function"><strong>json_decode()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// the following strings are valid JavaScript but not valid JSON<br><br>// the name and value must be enclosed in double quotes<br>// single quotes are not valid <br></span><span style="color: #9876AA">\$bad_json </span><span style="color: #007700">= </span><span style="color: #DD0000">"{ 'bar': 'baz' }"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">json_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$bad_json</span><span style="color: #007700">); </span><span style="color: #FF8000">// null<br><br>// the name must be enclosed in double quotes<br></span><span style="color: #9876AA">\$bad_json </span><span style="color: #007700">= </span><span style="color: #DD0000">'{ bar: "baz" }'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">json_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$bad_json</span><span style="color: #007700">); </span><span style="color: #FF8000">// null<br><br>// trailing commas are not allowed<br></span><span style="color: #9876AA">\$bad_json </span><span style="color: #007700">= </span><span style="color: #DD0000">'{ bar: "baz", }'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">json_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$bad_json</span><span style="color: #007700">); </span><span style="color: #FF8000">// null<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   <div class="example" id="example-3680">    <p><strong>示例 #4 <span class="parameter" style="color:#3A95FF">depth</span> errors</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// Encode some data with a maximum depth  of 4 (array -&gt; array -&gt; array -&gt; string)<br></span><span style="color: #9876AA">\$json </span><span style="color: #007700">= </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(<br>    array(<br>        </span><span style="color: #9876AA">1 </span><span style="color: #007700">=&gt; array(<br>            </span><span style="color: #DD0000">'English' </span><span style="color: #007700">=&gt; array(<br>                </span><span style="color: #DD0000">'One'</span><span style="color: #007700">,<br>                </span><span style="color: #DD0000">'January'<br>            </span><span style="color: #007700">),<br>            </span><span style="color: #DD0000">'French' </span><span style="color: #007700">=&gt; array(<br>                </span><span style="color: #DD0000">'Une'</span><span style="color: #007700">,<br>                </span><span style="color: #DD0000">'Janvier'<br>            </span><span style="color: #007700">)<br>        )<br>    )<br>);<br><br></span><span style="color: #FF8000">// Show the errors for different depths.<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">json_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$json</span><span style="color: #007700">, </span><span style="color: #9876AA">true</span><span style="color: #007700">, </span><span style="color: #9876AA">4</span><span style="color: #007700">));<br>echo </span><span style="color: #DD0000">'Last error: '</span><span style="color: #007700">, </span><span style="color: #9876AA">json_last_error_msg</span><span style="color: #007700">(), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">json_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$json</span><span style="color: #007700">, </span><span style="color: #9876AA">true</span><span style="color: #007700">, </span><span style="color: #9876AA">3</span><span style="color: #007700">));<br>echo </span><span style="color: #DD0000">'Last error: '</span><span style="color: #007700">, </span><span style="color: #9876AA">json_last_error_msg</span><span style="color: #007700">(), </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(1)&nbsp;{<br>&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;array(2)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;["English"]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;array(2)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string(3)&nbsp;"One"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string(7)&nbsp;"January"<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;&nbsp;&nbsp;["French"]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;array(2)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string(3)&nbsp;"Une"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string(7)&nbsp;"Janvier"<br>&nbsp;&nbsp;&nbsp;&nbsp;}<br>&nbsp;&nbsp;}<br>}<br>Last&nbsp;error:&nbsp;No&nbsp;error<br><br>NULL<br>Last&nbsp;error:&nbsp;Maximum&nbsp;stack&nbsp;depth&nbsp;exceeded</blockquote></div>    </div>   </div>   <div class="example" id="example-3681">    <p><strong>示例 #5 <span class="function"><strong>json_decode()</strong></span> of large integers</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$json </span><span style="color: #007700">= </span><span style="color: #DD0000">'{"number": 12345678901234567890}'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">json_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$json</span><span style="color: #007700">));<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">json_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$json</span><span style="color: #007700">, </span><span style="color: #9876AA">false</span><span style="color: #007700">, </span><span style="color: #9876AA">512</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_BIGINT_AS_STRING</span><span style="color: #007700">));<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">object(stdClass)#1&nbsp;(1)&nbsp;{<br>&nbsp;&nbsp;["number"]=&gt;<br>&nbsp;&nbsp;float(1.2345678901235E+19)<br>}<br>object(stdClass)#1&nbsp;(1)&nbsp;{<br>&nbsp;&nbsp;["number"]=&gt;<br>&nbsp;&nbsp;string(20)&nbsp;"12345678901234567890"<br>}</blockquote></div>    </div>   </div>   </div>  <div class="refsect1 notes" id="refsect1-function.json-decode-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    The JSON spec is not JavaScript, but a subset of JavaScript.   </p>  </blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    In the event of a failure to decode, <span class="function">{@link json_last_error()}</span>    can be used to determine the exact nature of the error.   </p>  </blockquote> </div>  <div class="refsect1 seealso" id="refsect1-function.json-decode-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link json_encode()} - 对变量进行 JSON 编码</span></li>    <li><span class="function">{@link json_last_error()} - 返回最后发生的错误</span></li>    <li><span class="function">{@link json_last_error_msg()} - 返回最后一次调用 json_encode() 或 json_decode() 时产生的错误信息</span></li>   </ul>   </div></div>
 * 
 * (PHP 5 &gt;= 5.2.0, PECL json &gt;= 1.2.0)<br/>
 * Decodes a JSON string
 * @link https://php.net/manual/zh/function.json-decode.php
 * @param string $json <p>
 * The <i>json</i> string being decoded.
 * </p>
 * <p>
 * This function only works with UTF-8 encoded strings.
 * </p>
 * <p>PHP implements a superset of
 * JSON - it will also encode and decode scalar types and <b>NULL</b>. The JSON standard
 * only supports these values when they are nested inside an array or an object.
 * </p>
 * @param bool|null $associative <p>
 * When <b>TRUE</b>, returned objects will be converted into
 * associative arrays.
 * </p>
 * @param int $depth [optional] <p>
 * User specified recursion depth.
 * </p>
 * @param int $flags [optional] <p>
 * Bitmask of JSON decode options:<br/>
 * {@see JSON_BIGINT_AS_STRING} decodes large integers as their original string value.<br/>
 * {@see JSON_INVALID_UTF8_IGNORE} ignores invalid UTF-8 characters,<br/>
 * {@see JSON_INVALID_UTF8_SUBSTITUTE} converts invalid UTF-8 characters to \0xfffd,<br/>
 * {@see JSON_OBJECT_AS_ARRAY} decodes JSON objects as PHP array, since 7.2.0 used by default if $assoc parameter is true,<br/>
 * {@see JSON_THROW_ON_ERROR} when passed this flag, the error behaviour of these functions is changed. The global error state is left untouched, and if an error occurs that would otherwise set it, these functions instead throw a JsonException<br/>
 * </p>
 * @return mixed the value encoded in <i>json</i> in appropriate
 * PHP type. Values true, false and
 * null (case-insensitive) are returned as <b>TRUE</b>, <b>FALSE</b>
 * and <b>NULL</b> respectively. <b>NULL</b> is returned if the
 * <i>json</i> cannot be decoded or if the encoded
 * data is deeper than the recursion limit.
 */
function json_decode(string $json, ?bool $associative = null, int $depth = 512, int $flags = 0): mixed {}

/**
 * <div id="function.json-last-error" class="refentry"> <div class="refnamediv">  <h1 class="refname">json_last_error</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">json_last_error</span> — <span class="dc-title">返回最后发生的错误</span></p> </div> <div class="refsect1 description" id="refsect1-function.json-last-error-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>json_last_error</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   没有指定 <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></span></strong>时，返回上一次 JSON 编码解码时发生的最后一个错误（如果有）。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.json-last-error-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.json-last-error-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回一个整型（integer），这个值会是以下的常量之一：  </p>  <table class="doctable table">   <caption><strong>JSON 错误码</strong></caption>       <thead>     <tr>      <th>常量</th>      <th>含义</th>      <th>可用性</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td><strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-error-none">JSON_ERROR_NONE</a></span></strong></td>      <td>没有错误发生</td>      <td class="empty">&nbsp;</td>     </tr>     <tr>      <td><strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-error-depth">JSON_ERROR_DEPTH</a></span></strong></td>      <td>到达了最大堆栈深度</td>      <td class="empty">&nbsp;</td>     </tr>     <tr>      <td><strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-error-state-mismatch">JSON_ERROR_STATE_MISMATCH</a></span></strong></td>      <td>无效或异常的 JSON</td>      <td class="empty">&nbsp;</td>     </tr>     <tr>      <td><strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-error-ctrl-char">JSON_ERROR_CTRL_CHAR</a></span></strong></td>      <td>控制字符错误，可能是编码不对</td>      <td class="empty">&nbsp;</td>     </tr>     <tr>      <td><strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-error-syntax">JSON_ERROR_SYNTAX</a></span></strong></td>      <td>语法错误</td>      <td class="empty">&nbsp;</td>     </tr>     <tr>      <td><strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-error-utf8">JSON_ERROR_UTF8</a></span></strong></td>      <td>异常的 UTF-8 字符，也许是因为不正确的编码。</td>      <td class="empty">&nbsp;</td>     </tr>     <tr>      <td><strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-error-recursion">JSON_ERROR_RECURSION</a></span></strong></td>      <td>One or more recursive references in the value to be encoded</td>      <td class="empty">&nbsp;</td>     </tr>     <tr>      <td><strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-error-inf-or-nan">JSON_ERROR_INF_OR_NAN</a></span></strong></td>      <td>       One or more       <a href="https://php.net/manual/zh/language.types.float.php#language.types.float.nan" class="link"><strong><span><a href="https://php.net/manual/zh/math.constants.php#constant.nan">NAN</a></span></strong></a>       or {@link INF}       values in the value to be encoded      </td>      <td class="empty">&nbsp;</td>     </tr>     <tr>      <td><strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-error-unsupported-type">JSON_ERROR_UNSUPPORTED_TYPE</a></span></strong></td>      <td>指定的类型，值无法编码。</td>      <td class="empty">&nbsp;</td>     </tr>     <tr>      <td><strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-error-invalid-property-name">JSON_ERROR_INVALID_PROPERTY_NAME</a></span></strong></td>      <td>指定的属性名无法编码。</td>      <td class="empty">&nbsp;</td>     </tr>     <tr>      <td><strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-error-utf16">JSON_ERROR_UTF16</a></span></strong></td>      <td>畸形的 UTF-16 字符，可能因为字符编码不正确。</td>      <td class="empty">&nbsp;</td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.json-last-error-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3687">    <p><strong>示例 #1 <span class="function"><strong>json_last_error()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 一个有效的 json 字符串<br></span><span style="color: #9876AA">\$json</span><span style="color: #007700">[] = </span><span style="color: #DD0000">'{"Organization": "PHP Documentation Team"}'</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// 一个无效的 json 字符串会导致一个语法错误，在这个例子里我们使用 ' 代替了 " 作为引号<br></span><span style="color: #9876AA">\$json</span><span style="color: #007700">[] = </span><span style="color: #DD0000">"{'Organization': 'PHP Documentation Team'}"</span><span style="color: #007700">;<br><br><br>foreach (</span><span style="color: #9876AA">\$json </span><span style="color: #007700">as </span><span style="color: #9876AA">\$string</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">'Decoding: ' </span><span style="color: #007700">. </span><span style="color: #9876AA">\$string</span><span style="color: #007700">;<br>    </span><span style="color: #9876AA">json_decode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$string</span><span style="color: #007700">);<br><br>    switch (</span><span style="color: #9876AA">json_last_error</span><span style="color: #007700">()) {<br>        case </span><span style="color: #9876AA">JSON_ERROR_NONE</span><span style="color: #007700">:<br>            echo </span><span style="color: #DD0000">' - No errors'</span><span style="color: #007700">;<br>        break;<br>        case </span><span style="color: #9876AA">JSON_ERROR_DEPTH</span><span style="color: #007700">:<br>            echo </span><span style="color: #DD0000">' - Maximum stack depth exceeded'</span><span style="color: #007700">;<br>        break;<br>        case </span><span style="color: #9876AA">JSON_ERROR_STATE_MISMATCH</span><span style="color: #007700">:<br>            echo </span><span style="color: #DD0000">' - Underflow or the modes mismatch'</span><span style="color: #007700">;<br>        break;<br>        case </span><span style="color: #9876AA">JSON_ERROR_CTRL_CHAR</span><span style="color: #007700">:<br>            echo </span><span style="color: #DD0000">' - Unexpected control character found'</span><span style="color: #007700">;<br>        break;<br>        case </span><span style="color: #9876AA">JSON_ERROR_SYNTAX</span><span style="color: #007700">:<br>            echo </span><span style="color: #DD0000">' - Syntax error, malformed JSON'</span><span style="color: #007700">;<br>        break;<br>        case </span><span style="color: #9876AA">JSON_ERROR_UTF8</span><span style="color: #007700">:<br>            echo </span><span style="color: #DD0000">' - Malformed UTF-8 characters, possibly incorrectly encoded'</span><span style="color: #007700">;<br>        break;<br>        default:<br>            echo </span><span style="color: #DD0000">' - Unknown error'</span><span style="color: #007700">;<br>        break;<br>    }<br><br>    echo </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Decoding:&nbsp;{"Organization":&nbsp;"PHP&nbsp;Documentation&nbsp;Team"}&nbsp;-&nbsp;No&nbsp;errors<br>Decoding:&nbsp;{'Organization':&nbsp;'PHP&nbsp;Documentation&nbsp;Team'}&nbsp;-&nbsp;Syntax&nbsp;error,&nbsp;malformed&nbsp;JSON</blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-3688">    <p><strong>示例 #2 <span class="function">{@link json_encode()}</span> 的 <span class="function"><strong>json_last_error()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 无效的 UTF8 序列<br></span><span style="color: #9876AA">\$text </span><span style="color: #007700">= </span><span style="color: #DD0000">"\xB1\x31"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$json  </span><span style="color: #007700">= </span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #9876AA">\$text</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$error </span><span style="color: #007700">= </span><span style="color: #9876AA">json_last_error</span><span style="color: #007700">();<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">\$json</span><span style="color: #007700">, </span><span style="color: #9876AA">\$error </span><span style="color: #007700">=== </span><span style="color: #9876AA">JSON_ERROR_UTF8</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">string(4)&nbsp;"null"<br>bool(true)</blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-3689">    <p><strong>示例 #3 <span class="function"><strong>json_last_error()</strong></span> 和 <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></span></strong></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 导致 JSON_ERROR_UTF8 的无效 UTF8 序列<br></span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\xB1\x31"</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 以下不会导致 JSON 错误<br></span><span style="color: #9876AA">json_encode</span><span style="color: #007700">(</span><span style="color: #DD0000">'okay'</span><span style="color: #007700">, </span><span style="color: #9876AA">JSON_THROW_ON_ERROR</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 前者的 json_encode() 不会改变全局错误状态<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">json_last_error</span><span style="color: #007700">() === </span><span style="color: #9876AA">JSON_ERROR_UTF8</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">bool(true)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.json-last-error-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link json_last_error_msg()} - 返回最后一次调用 json_encode() 或 json_decode() 时产生的错误信息</span></li>    <li><span class="function">{@link json_decode()} - 对 JSON 格式的字符串进行解码</span></li>    <li><span class="function">{@link json_encode()} - 对变量进行 JSON 编码</span></li>   </ul>   </div></div>
 * 
 * Returns the last error occurred
 * @link https://php.net/manual/zh/function.json-last-error.php
 * @return int an integer, the value can be one of the following
 * constants:
 * <table class='doctable table'>
 * <thead>
 * <tr>
 * <th>Constant</th>
 * <th>Meaning</th>
 * <th>Availability</th>
 * </tr>
 *
 * </thead>
 *
 * <tbody class='tbody'>
 * <tr>
 * <td><strong><code>JSON_ERROR_NONE</code></strong></td>
 * <td>No error has occurred</td>
 * <td class='empty'>&nbsp;</td>
 * </tr>
 *
 * <tr>
 * <td><strong><code>JSON_ERROR_DEPTH</code></strong></td>
 * <td>The maximum stack depth has been exceeded</td>
 * <td class='empty'>&nbsp;</td>
 * </tr>
 *
 * <tr>
 * <td><strong><code>JSON_ERROR_STATE_MISMATCH</code></strong></td>
 * <td>Invalid or malformed JSON</td>
 * <td class='empty'>&nbsp;</td>
 * </tr>
 *
 * <tr>
 * <td><strong><code>JSON_ERROR_CTRL_CHAR</code></strong></td>
 * <td>Control character error, possibly incorrectly encoded</td>
 * <td class='empty'>&nbsp;</td>
 * </tr>
 *
 * <tr>
 * <td><strong><code>JSON_ERROR_SYNTAX</code></strong></td>
 * <td>Syntax error</td>
 * <td class='empty'>&nbsp;</td>
 * </tr>
 *
 * <tr>
 * <td><strong><code>JSON_ERROR_UTF8</code></strong></td>
 * <td>Malformed UTF-8 characters, possibly incorrectly encoded</td>
 * <td>PHP 5.3.3</td>
 * </tr>
 *
 * <tr>
 * <td><strong><code>JSON_ERROR_RECURSION</code></strong></td>
 * <td>One or more recursive references in the value to be encoded</td>
 * <td>PHP 5.5.0</td>
 * </tr>
 *
 * <tr>
 * <td><strong><code>JSON_ERROR_INF_OR_NAN</code></strong></td>
 * <td>
 * One or more
 * <a href='language.types.float.php#language.types.float.nan' class='link'><strong><code>NAN</code></strong></a>
 * or <a href='function.is-infinite.php' class='link'><strong><code>INF</code></strong></a>
 * values in the value to be encoded
 * </td>
 * <td>PHP 5.5.0</td>
 * </tr>
 *
 * <tr>
 * <td><strong><code>JSON_ERROR_UNSUPPORTED_TYPE</code></strong></td>
 * <td>A value of a type that cannot be encoded was given</td>
 * <td>PHP 5.5.0</td>
 * </tr>
 *
 * <tr>
 * <td><strong><code>JSON_ERROR_INVALID_PROPERTY_NAME</code></strong></td>
 * <td>A property name that cannot be encoded was given</td>
 * <td>PHP 7.0.0</td>
 * </tr>
 *
 * <tr>
 * <td><strong><code>JSON_ERROR_UTF16</code></strong></td>
 * <td>Malformed UTF-16 characters, possibly incorrectly encoded</td>
 * <td>PHP 7.0.0</td>
 * </tr>
 *
 * </tbody>
 *
 * </table>
 */
#[Pure(true)]
function json_last_error(): int {}

/**
 * <div id="function.json-last-error-msg" class="refentry"> <div class="refnamediv">  <h1 class="refname">json_last_error_msg</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">json_last_error_msg</span> — <span class="dc-title">返回最后一次调用 json_encode() 或 json_decode() 时产生的错误信息</span></p> </div> <div class="refsect1 description" id="refsect1-function.json-last-error-msg-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>json_last_error_msg</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   当没有设置 <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></span></strong> 参数时，返回最后一次调用 <span class="function">{@link json_encode()}</span> 或 <span class="function">{@link json_decode()}</span>   产生的错误信息。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.json-last-error-msg-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.json-last-error-msg-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功则返回错误信息，如果没有错误产生则返回 <span class="literal">"No error"</span> 。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.json-last-error-msg-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link json_last_error()} - 返回最后发生的错误</span></li>   </ul>   </div></div>
 * 
 * Returns the error string of the last json_encode() or json_decode() call, which did not specify <b>JSON_THROW_ON_ERROR</b>.
 * @link https://php.net/manual/zh/function.json-last-error-msg.php
 * @return string Returns the error message on success, "No error" if no error has occurred.
 * @since 5.5
 */
#[Pure(true)]
function json_last_error_msg(): string {}

/**
 * <div id="function.json-validate" class="refentry"> <div class="refnamediv">  <h1 class="refname">json_validate</h1>  <p class="verinfo">(PHP 8 &gt;= 8.3.0)</p><p class="refpurpose"><span class="refname">json_validate</span> — <span class="dc-title">检查一个字符串是否包含有效的JSON</span></p> </div> <div class="refsect1 description" id="refsect1-function.json-validate-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>json_validate</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$json</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$depth</span><span class="initializer"> = 512</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$flags</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   返回给定的 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> 是否是语法上有效的 JSON。   如果 <span class="function"><strong>json_validate()</strong></span> 返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，<span class="function">{@link json_decode()}</span> 在使用相同的 <span class="parameter" style="color:#3A95FF">depth</span>   和 <span class="parameter" style="color:#3A95FF">flags</span> 时，将成功解码给定的字符串。  </p>  <p class="para">   如果 <span class="function"><strong>json_validate()</strong></span> 返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，原因可以使用 <span class="function">{@link json_last_error()}</span>   和 <span class="function">{@link json_last_error_msg()}</span> 获取。  </p>  <p class="para">   如果解码后的 JSON 内容未被使用，<span class="function"><strong>json_validate()</strong></span> 相比于   <span class="function">{@link json_decode()}</span> 使用了较少的内存，因为它不需要构建包含有效载荷的数组或对象结构。  </p>  <div class="caution"><strong class="caution">警告</strong>   <p class="para">    在 <span class="function">{@link json_decode()}</span> 之前调用 <span class="function"><strong>json_validate()</strong></span> 将不必要地解析字符串两次，    因为 <span class="function">{@link json_decode()}</span> 在解码过程中隐式地执行验证。   </p>   <p class="para">    <span class="function"><strong>json_validate()</strong></span> 只有在解码后的 JSON 内容不会立即使用，但需要知道字符串是否包含有效的 JSON 时才有用。   </p>  </div> </div> <div class="refsect1 parameters" id="refsect1-function.json-validate-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">json</span></dt>     <dd>      <p class="para">       需要验证的字符串。      </p>      <p class="para">       该函数仅适用于 UTF-8 编码字符串。      </p>       <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:   </p><p class="para">   PHP 实现了 JSON 的一个超集，参考   <a href="https://datatracker.ietf.org/doc/html/rfc7159" class="link external">»&nbsp;RFC 7159</a>.  </p> </blockquote>     </dd>             <dt><span class="parameter" style="color:#3A95FF">depth</span></dt>     <dd>      <p class="para">       解码结构的最大嵌套深度。       该值必须大于 <span class="literal">0</span>、       且小于或等于 <span class="literal">2147483647</span>。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       当前只接受 <strong><span><a href="https://php.net/manual/zh/json.constants.php#constant.json-invalid-utf8-ignore">JSON_INVALID_UTF8_IGNORE</a></span></strong>。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.json-validate-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果给定字符串是语法有效的 JSON，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，否则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 errors" id="refsect1-function.json-validate-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   如果 <span class="parameter" style="color:#3A95FF">depth</span> 超出允许的范围，将抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。  </p>  <p class="para">   如果 <span class="parameter" style="color:#3A95FF">flags</span> 不是一个有效的 flag，将抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.json-validate-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3690">    <p><strong>示例 #1 <span class="function"><strong>json_validate()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">json_validate</span><span style="color: #007700">(</span><span style="color: #DD0000">'{ "test": { "foo": "bar" } }'</span><span style="color: #007700">));<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">json_validate</span><span style="color: #007700">(</span><span style="color: #DD0000">'{ "": "": "" } }'</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">bool(true)<br>bool(false)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.json-validate-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link json_decode()} - 对 JSON 格式的字符串进行解码</span></li>    <li><span class="function">{@link json_last_error()} - 返回最后发生的错误</span></li>    <li><span class="function">{@link json_last_error_msg()} - 返回最后一次调用 json_encode() 或 json_decode() 时产生的错误信息</span></li>   </ul>   </div></div>
 * 
 * @since 8.3
 */
function json_validate(string $json, int $depth = 512, int $flags = 0): bool {}

/**
 * <span class="simpara">     所有的 &lt; 和 &gt; 转换成 \u003C 和 \u003E。    </span>
 * 
 * All &lt; and &gt; are converted to \u003C and \u003E.
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_HEX_TAG', 1);

/**
 * <span class="simpara">     所有的 &amp; 转换成 \u0026。    </span>
 * 
 * All &s are converted to \u0026.
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_HEX_AMP', 2);

/**
 * <span class="simpara">     所有的 ' 转换成 \u0027。    </span>
 * 
 * All ' are converted to \u0027.
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_HEX_APOS', 4);

/**
 * <span class="simpara">     所有的 " 转换成 \u0022。    </span>
 * 
 * All " are converted to \u0022.
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_HEX_QUOT', 8);

/**
 * <span class="simpara">     使一个非关联数组输出一个类（Object）而非数组。     在数组为空而接受者需要一个类（Object）的时候尤其有用。    </span>
 * 
 * Outputs an object rather than an array when a non-associative array is
 * used. Especially useful when the recipient of the output is expecting
 * an object and the array is empty.
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_FORCE_OBJECT', 16);

/**
 * <span class="simpara">     将所有数字字符串编码成数字（numbers）。    </span>
 * 
 * Encodes numeric strings as numbers.
 * @since 5.3.3
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_NUMERIC_CHECK', 32);

/**
 * <span class="simpara">     不要编码 <code class="literal">/</code>。    </span>
 * 
 * Don't escape /.
 * @since 5.4
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_UNESCAPED_SLASHES', 64);

/**
 * <span class="simpara">     用空白字符格式化返回的数据。    </span>
 * 
 * Use whitespace in returned data to format it.
 * @since 5.4
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_PRETTY_PRINT', 128);

/**
 * <span class="simpara">     以字面编码多字节 Unicode 字符（默认是编码成 \uXXXX）。    </span>
 * 
 * Encode multibyte Unicode characters literally (default is to escape as \uXXXX).
 * @since 5.4
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_UNESCAPED_UNICODE', 256);
/**
 * <span class="simpara">     用不可编码的值来代替失败。    </span>
 */
define('JSON_PARTIAL_OUTPUT_ON_ERROR', 512);

/**
 * <span class="simpara">     出现了下溢（underflow）或者模式不匹配。    </span>
 * 
 * Occurs with underflow or with the modes mismatch.
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_ERROR_STATE_MISMATCH', 2);

/**
 * <span class="simpara">     控制字符错误，可能是编码不对。    </span>
 * 
 * Control character error, possibly incorrectly encoded.
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_ERROR_CTRL_CHAR', 3);

/**
 * <span class="simpara">     异常的 UTF-8 字符，也许是因为不正确的编码。    </span>
 * 
 * Malformed UTF-8 characters, possibly incorrectly encoded. This
 * constant is available as of PHP 5.3.3.
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_ERROR_UTF8', 5);

/**
 * <span class="simpara">      传递给 <span class="function">{@link json_encode()}</span> 函数的对象或数组包含了递归引用，导致无法被编码。如果打开了      <strong><code><a href="https://php.net/manual/zh/json.constants.php#constant.json-partial-output-on-error">JSON_PARTIAL_OUTPUT_ON_ERROR</a></code></strong> 选项，则牵涉到递归引用的数据会转换成      <strong><code><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></code></strong> 后返回。    </span>
 * 
 * <p>
 * The object or array passed to <b>json_encode</b> include
 * recursive references and cannot be encoded.
 * If the <b>JSON_PARTIAL_OUTPUT_ON_ERROR</b> option was
 * given, <b>NULL</b> will be encoded in the place of the recursive reference.
 * </p>
 * <p>
 * This constant is available as of PHP 5.5.0.
 * </p>
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_ERROR_RECURSION', 6);

/**
 * <span class="simpara">     传递给 <span class="function">{@link json_encode()}</span> 函数的参数中包含了     <a href="https://php.net/manual/zh/language.types.float.php#language.types.float.nan" class="link"><strong><code><a href="https://php.net/manual/zh/math.constants.php#constant.nan">NAN</a></code></strong></a>     或 {@link INF}，导致编码出错。如果打开了     <strong><code><a href="https://php.net/manual/zh/json.constants.php#constant.json-partial-output-on-error">JSON_PARTIAL_OUTPUT_ON_ERROR</a></code></strong> 选项，则牵涉到对应不可编码的数字，会转换成数字     <code class="literal">0</code> 后返回。    </span>
 * 
 * <p>
 * The value passed to <b>json_encode</b> includes either
 * <b>NAN</b>
 * or <b>INF</b>.
 * If the <b>JSON_PARTIAL_OUTPUT_ON_ERROR</b> option was
 * given, 0 will be encoded in the place of these
 * special numbers.
 * </p>
 * <p>
 * This constant is available as of PHP 5.5.0.
 * </p>
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_ERROR_INF_OR_NAN', 7);

/**
 * <span class="simpara">      传递了不支持的数据类型给 <span class="function">{@link json_encode()}</span> 函数，比如 <span class="type"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource">resource</a></span>。如果打开了      <strong><code><a href="https://php.net/manual/zh/json.constants.php#constant.json-partial-output-on-error">JSON_PARTIAL_OUTPUT_ON_ERROR</a></code></strong> 选项，则对于不支持的数据类型，会转换成      <strong><code><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></code></strong> 后返回。    </span>
 * 
 * <p>
 * A value of an unsupported type was given to
 * <b>json_encode</b>, such as a resource.
 * If the <b>JSON_PARTIAL_OUTPUT_ON_ERROR</b> option was
 * given, <b>NULL</b> will be encoded in the place of the unsupported value.
 * </p>
 * <p>
 * This constant is available as of PHP 5.5.0.
 * </p>
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_ERROR_UNSUPPORTED_TYPE', 8);

/**
 * <span class="simpara">     没有错误发生。    </span>
 * 
 * No error has occurred.
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_ERROR_NONE', 0);

/**
 * <span class="simpara">     到达了最大堆栈深度。    </span>
 * 
 * The maximum stack depth has been exceeded.
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_ERROR_DEPTH', 1);

/**
 * <span class="simpara">     语法错误。    </span>
 * 
 * Syntax error.
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_ERROR_SYNTAX', 4);

/**
 * <span class="simpara">     将 JSON 对象作为数组解码。当调用 <span class="function">{@link json_decode()}</span> 且第二个参数为     <strong><code><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></code></strong> 时此选项会自动添加。    </span>
 * 
 * Decodes JSON objects as PHP array.
 * @since 5.4
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_OBJECT_AS_ARRAY', 1);

define('JSON_PARSER_NOTSTRICT', 4);

/**
 * <span class="simpara">     将大数字编码成原始字符原来的值。    </span>
 * 
 * Decodes large integers as their original string value.
 * @since 5.4
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_BIGINT_AS_STRING', 2);

/**
 * <span class="simpara">     确保 <span class="type"><a href="https://php.net/manual/zh/language.types.float.php" class="type float">float</a></span> 值始终编码为为 float 值。    </span>
 * 
 * Ensures that float values are always encoded as a float value.
 * @since 5.6.6
 * @link https://php.net/manual/zh/json.constants.php
 */
define('JSON_PRESERVE_ZERO_FRACTION', 1024);

/**
 * <span class="simpara">     The line terminators are kept unescaped when     <strong><code><a href="https://php.net/manual/zh/json.constants.php#constant.json-unescaped-unicode">JSON_UNESCAPED_UNICODE</a></code></strong> is supplied. It uses the same     behaviour as it was before PHP 7.1 without this constant.     Available since PHP 7.1.0.    </span>
 * 
 * The line terminators are kept unescaped when JSON_UNESCAPED_UNICODE is supplied.
 * It uses the same behaviour as it was before PHP 7.1 without this constant. Available since PHP 7.1.0.
 * @link https://php.net/manual/zh/json.constants.php
 * @since 7.1
 */
define('JSON_UNESCAPED_LINE_TERMINATORS', 2048);

/**
 * <span class="simpara">     忽略无效的 UTF-8 字符。自 PHP 7.2.0 起生效。    </span>
 * 
 * Ignore invalid UTF-8 characters.
 * @since 7.2
 */
define('JSON_INVALID_UTF8_IGNORE', 1048576);

/**
 * <span class="simpara">     将无效 UTF-8 字符转换为 \0xfffd（Unicode 字符“虚缺号”）。自 PHP 7.2.0 起生效。    </span>
 * 
 * Convert invalid UTF-8 characters to \0xfffd (Unicode Character 'REPLACEMENT CHARACTER').
 * @since 7.2
 */
define('JSON_INVALID_UTF8_SUBSTITUTE', 2097152);

/**
 * <span class="simpara">     A key starting with \u0000 character was in the string passed to     <span class="function">{@link json_decode()}</span> when decoding a JSON object into a PHP     object.    </span>
 * 
 * A key starting with \u0000 character was in the string passed to json_decode() when decoding a JSON object into a PHP object.
 * Available since PHP 7.0.0.
 * @link https://php.net/manual/zh/json.constants.php
 * @since 7.0
 */
define('JSON_ERROR_INVALID_PROPERTY_NAME', 9);

/**
 * <span class="simpara">     Single unpaired UTF-16 surrogate in unicode escape contained in the     JSON string passed to <span class="function">{@link json_encode()}</span>.    </span>
 * 
 * Single unpaired UTF-16 surrogate in unicode escape contained in the JSON string passed to json_encode().
 * Available since PHP 7.0.0.
 * @link https://php.net/manual/zh/json.constants.php
 * @since 7.0
 */
define('JSON_ERROR_UTF16', 10);

/**
 * <span class="simpara">     如果发生错误则会抛出 <span class="classname"><a href="https://php.net/manual/zh/class.jsonexception.php" class="classname">JsonException</a></span>，而不是通过 <span class="function">{@link json_last_error()}</span>     和 <span class="function">{@link json_last_error_msg()}</span> 检索设置到全局的错误状态。<strong><code><a href="https://php.net/manual/zh/json.constants.php#constant.json-partial-output-on-error">JSON_PARTIAL_OUTPUT_ON_ERROR</a></code></strong>     优先于 <strong><code><a href="https://php.net/manual/zh/json.constants.php#constant.json-throw-on-error">JSON_THROW_ON_ERROR</a></code></strong>。自 PHP 7.3.0 起生效。    </span>
 * 
 * Throws JsonException if an error occurs instead of setting the global error state
 * that is retrieved with json_last_error() and json_last_error_msg().
 *
 * {@see JSON_PARTIAL_OUTPUT_ON_ERROR} takes precedence over JSON_THROW_ON_ERROR.
 * @since 7.3
 */
define('JSON_THROW_ON_ERROR', 4194304);

/**
 * <span class="simpara">     传递给 <span class="function">{@link json_encode()}</span> 的值包含了无法序列化的非支持的枚举。     自 PHP 8.1.0 起生效。    </span>
 * 
 * @since 8.1
 */
define('JSON_ERROR_NON_BACKED_ENUM', 11);

/**
 * Class JsonException
 *
 * <p>A new flag has been added, JSON_THROW_ON_ERROR, which can be used with
 * json_decode() or json_encode() and causes these functions to throw a
 * JsonException upon an error, instead of setting the global error state that
 * is retrieved with json_last_error(). JSON_PARTIAL_OUTPUT_ON_ERROR takes
 * precedence over <b>JSON_THROW_ON_ERROR</b>.
 * </p>
 *
 * @since 7.3
 * @link https://wiki.php.net/rfc/json_throw_on_error
 */
class JsonException extends Exception {}

// End of json v.1.3.1
