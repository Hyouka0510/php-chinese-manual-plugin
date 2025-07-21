<?php

namespace JetBrains\PhpStorm;

use Attribute;

/**
* <div id="class.deprecated" class="reference"> <h1 class="title">The Deprecated attribute</h1>  <div class="partintro"><p class="verinfo">(PHP 8 &gt;= 8.4.0)</p>  <div class="section" id="deprecated.intro">   <h2 class="title">简介</h2>   <p class="simpara">    This attribute is used to mark functionality as deprecated.    Using deprecated functionality will cause an <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-user-deprecated">E_USER_DEPRECATED</a></span></strong> error to be emitted.   </p>  </div>  <div class="section" id="deprecated.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">final</span>     <span class="modifier">class</span> <strong class="classname"><strong class="classname">Deprecated</strong></strong>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://php.net/manual/zh/class.deprecated.php#deprecated.props.message">$<var class="varname">message</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://php.net/manual/zh/class.deprecated.php#deprecated.props.since">$<var class="varname">since</var></a></var>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/deprecated.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$message</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$since</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>)</div>   }</div>  </div>  <div class="section" id="deprecated.props">   <h2 class="title">属性</h2>   <dl>         <dt id="deprecated.props.message"><var class="varname">message</var></dt>     <dd>      <p class="para">       An optional message explaining the reason for the deprecation and possible replacement functionality.       Will be included in the emitted deprecation message.      </p>     </dd>             <dt id="deprecated.props.since"><var class="varname">since</var></dt>     <dd>       <p class="para">        An optional string indicating since when the functionality is deprecated.        The contents are not validated by PHP and may contain a version number,        a date or any other value that is considered appropriate.        Will be included in the emitted deprecation message.       </p>       <p class="para">        Functionality that is part of PHP will use Major.Minor as the <var class="varname">since</var> value,        for example <span class="literal">'8.4'</span>.       </p>     </dd>       </dl>  </div>  <div class="section">   <h2 class="title">示例</h2>   <div class="informalexample">    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #007700">#[</span><span style="color: #9876AA">\Deprecated</span><span style="color: #007700">(</span><span style="color: #9876AA">message</span><span style="color: #007700">: </span><span style="color: #DD0000">"use safe_replacement() instead"</span><span style="color: #007700">, </span><span style="color: #9876AA">since</span><span style="color: #007700">: </span><span style="color: #DD0000">"1.5"</span><span style="color: #007700">)]<br>function </span><span style="color: #9876AA">unsafe_function</span><span style="color: #007700">()<br>{<br>   echo </span><span style="color: #DD0000">"This is unsafe"</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #9876AA">unsafe_function</span><span style="color: #007700">();<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <p class="para">上述示例在 PHP 8.4 中的输出类似于：</p>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="cdata"><blockquote style="border:1px gray solid;"><br>Deprecated: Function unsafe_function() is deprecated since 1.5, use safe_replacement() instead in example.php on line 9<br>This is unsafe<br></blockquote></div>    </div>   </div>  </div>  <div class="section" id="deprecated.seealso">   <h2 class="title">参见</h2>   <ul class="simplelist">    <li><a href="https://php.net/manual/zh/language.attributes.php" class="link">Attributes overview</a></li>    <li><span class="methodname" style="color:#CC7832">{@link ReflectionFunctionAbstract::isDeprecated()}</span></li>    <li><span class="methodname" style="color:#CC7832">{@link ReflectionClassConstant::isDeprecated()}</span></li>    <li><strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-user-deprecated">E_USER_DEPRECATED</a></span></strong></li>   </ul>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Deprecated::__construct} — Construct a new Deprecated attribute instance</li></ul></div>
#[Attribute(Attribute::TARGET_FUNCTION|Attribute::TARGET_METHOD|Attribute::TARGET_CLASS|Attribute::TARGET_CLASS_CONSTANT|Attribute::TARGET_PROPERTY|Attribute::TARGET_PARAMETER)]
*/
class Deprecated
{
    public const PHP_VERSIONS = [
        "5.3",
        "5.4",
        "5.5",
        "5.6",
        "7.0",
        "7.1",
        "7.2",
        "7.3",
        "7.4",
        "8.0",
        "8.1",
        "8.2",
        "8.3",
        "8.4"
    ];

    /**
     * Mark element as deprecated
     *
     * @param string $reason Reason for deprecation. It will be displayed by PhpStorm via the Deprecated inspection instead of the  default message
     * @param string $replacement Applicable only to function/method calls: IDE will suggest replacing a deprecated function call with the provided code template.
     * The following variables are available in this template:
     * <ul>
     * <li>%parametersList%: parameters of the function call. For example, for the "f(1,2)" call, %parametersList% will be "1,2"</li>
     * <li>%parameter0%,%parameter1%,%parameter2%,...: parameters of the function call. For example, for the "f(1,2)" call, %parameter1% will be "2"</li>
     * <li>%name%: For "\x\f(1,2)", %name% will be "\x\f", for "$this->ff()", %name% will be "ff"</li>
     * <li>%class%: If the attribute is provided for method "m", then for "$this->f()->m()", %class% will be "$this->f()"</li>
     * </ul>
     * The following example shows how to wrap a function call in another call and swap arguments:<br />
     * "#[Deprecated(replaceWith: "wrappedCall(%name%(%parameter1%, %parameter0%))")] f($a, $b){}<br />
     * f(1,2) will be replaced with wrappedCall(f(2,1))
     * @param string $since Element is deprecated starting with the provided PHP language level, applicable only for PhpStorm stubs entries
     */
    public function __construct(
        $reason = "",
        $replacement = "",
        #[ExpectedValues(self::PHP_VERSIONS)] $since = "5.6"
    ) {}
}
