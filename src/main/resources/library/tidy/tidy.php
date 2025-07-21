<?php

// Start of tidy v.2.0
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable as PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Internal\TentativeType;

/**
* <div id="class.tidy" class="reference"> <h1 class="title">The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">tidy</a></span> class</h1>   <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p>   <div class="section" id="tidy.intro">   <h2 class="title">简介</h2>   <p class="para">    An HTML node in an HTML file, as detected by tidy.   </p>  </div>   <div class="section" id="tidy.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="classname">tidy</strong></strong>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://php.net/manual/zh/tidy.props.errorbuffer.php">$<var class="varname">errorBuffer</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://php.net/manual/zh/class.tidy.php#tidy.props.value">$<var class="varname">value</var></a></var><span class="initializer"> = null</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$filename</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$useIncludePath</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.body.php" class="methodname" style="color:#CC7832">body</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.cleanrepair.php" class="methodname" style="color:#CC7832">cleanRepair</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.diagnose.php" class="methodname" style="color:#CC7832">diagnose</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.getconfig.php" class="methodname" style="color:#CC7832">getConfig</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.gethtmlver.php" class="methodname" style="color:#CC7832">getHtmlVer</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.getopt.php" class="methodname" style="color:#CC7832">getOpt</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$option</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.getoptdoc.php" class="methodname" style="color:#CC7832">getOptDoc</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$option</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.getrelease.php" class="methodname" style="color:#CC7832">getRelease</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.getstatus.php" class="methodname" style="color:#CC7832">getStatus</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.head.php" class="methodname" style="color:#CC7832">head</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.php.php" class="methodname" style="color:#CC7832">html</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.isxhtml.php" class="methodname" style="color:#CC7832">isXhtml</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.isxml.php" class="methodname" style="color:#CC7832">isXml</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.parsefile.php" class="methodname" style="color:#CC7832">parseFile</a></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$filename</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$useIncludePath</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.parsestring.php" class="methodname" style="color:#CC7832">parseString</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$string</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.repairfile.php" class="methodname" style="color:#CC7832">repairFile</a></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$filename</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$useIncludePath</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.repairstring.php" class="methodname" style="color:#CC7832">repairString</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$string</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.root.php" class="methodname" style="color:#CC7832">root</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>   }</div>  </div>  <div class="section" id="tidy.props">   <h2 class="title">属性</h2>   <dl>         <dt id="tidy.props.value"><var class="varname">value</var></dt>     <dd>      <p class="para">The HTML representation of the node, including the surrounding tags.</p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link tidy::body} — Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree</li><li>{@link tidy::cleanRepair} — Execute configured cleanup and repair operations on parsed markup</li><li>{@link tidy::__construct} — Constructs a new tidy object</li><li>{@link tidy::diagnose} — Run configured diagnostics on parsed and repaired markup</li><li>{@link tidy::$errorBuffer} — Return warnings and errors which occurred parsing the specified document</li><li>{@link tidy::getConfig} — Get current Tidy configuration</li><li>{@link tidy::getHtmlVer} — Get the Detected HTML version for the specified document</li><li>{@link tidy::getOpt} — Returns the value of the specified configuration option for the tidy document</li><li>{@link tidy::getOptDoc} — Returns the documentation for the given option name</li><li>{@link tidy::getRelease} — Get release date (version) for Tidy library</li><li>{@link tidy::getStatus} — Get status of specified document</li><li>{@link tidy::head} — Returns a tidyNode object starting from the &lt;head&gt; tag of the tidy parse tree</li><li>{@link tidy::html} — Returns a tidyNode object starting from the &lt;html&gt; tag of the tidy parse tree</li><li>{@link tidy::isXhtml} — Indicates if the document is a XHTML document</li><li>{@link tidy::isXml} — Indicates if the document is a generic (non HTML/XHTML) XML document</li><li>{@link tidy::parseFile} — Parse markup in file or URI</li><li>{@link tidy::parseString} — Parse a document stored in a string</li><li>{@link tidy::repairFile} — Repair a file and return it as a string</li><li>{@link tidy::repairString} — Repair a string using an optionally provided configuration file</li><li>{@link tidy::root} — Returns a tidyNode object representing the root of the tidy parse tree</li></ul></div>
*
 * An HTML node in an HTML file, as detected by tidy.
 * @link https://php.net/manual/zh/class.tidy.php
 
*/
class tidy
{
    /**
     * @var string|null  The last warnings and errors from TidyLib
     */
    public ?string $errorBuffer;
    public ?string $value;

/**
* <div id="tidy.getopt" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::getOpt</h1>  <h1 class="refname">tidy_getopt</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy::getOpt</span> -- <span class="refname">tidy_getopt</span> — <span class="dc-title">Returns the value of the specified configuration option for the tidy document</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.getopt-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::getOpt</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$option</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_getopt</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$option</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></span></div>  <p class="para rdfs-comment">   Returns the value of the specified <span class="parameter" style="color:#3A95FF">option</span> for the   specified tidy <span class="parameter" style="color:#3A95FF">tidy</span>.    </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.getopt-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">option</span></dt>     <dd>      <p class="para">       You will find a list with each configuration option and their types       at: <a href="http://api.html-tidy.org/#quick-reference" class="link external">» http://api.html-tidy.org/#quick-reference</a>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.getopt-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the value of the specified <span class="parameter" style="color:#3A95FF">option</span>.   The return type depends on the type of the specified one.   </p> </div> <div class="refsect1 examples" id="refsect1-tidy.getopt-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4062">    <p><strong>示例 #1 <span class="function"><strong>tidy_getopt()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">=</span><span style="color: #DD0000">'&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN"&gt;<br>&lt;html&gt;&lt;head&gt;&lt;title&gt;Title&lt;/title&gt;&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;p&gt;&lt;img src="img.png"&gt;&lt;/p&gt;<br><br>&lt;/body&gt;&lt;/html&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$config </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'accessibility-check' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">3</span><span style="color: #007700">,<br>                </span><span style="color: #DD0000">'alt-text' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'some text'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= new </span><span style="color: #9876AA">tidy</span><span style="color: #007700">();<br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">parseString</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">, </span><span style="color: #9876AA">$config</span><span style="color: #007700">);<br><br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getOpt</span><span style="color: #007700">(</span><span style="color: #DD0000">'accessibility-check'</span><span style="color: #007700">)); </span><span style="color: #FF8000">//integer<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getOpt</span><span style="color: #007700">(</span><span style="color: #DD0000">'lower-literals'</span><span style="color: #007700">)); </span><span style="color: #FF8000">//boolean<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getOpt</span><span style="color: #007700">(</span><span style="color: #DD0000">'alt-text'</span><span style="color: #007700">)); </span><span style="color: #FF8000">//string<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">int(3)<br>bool(true)<br>string(9) "some text"</blockquote></div>    </div>   </div>   </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Returns the value of the specified configuration option for the tidy document
     * @link https://php.net/manual/zh/tidy.getopt.php
     * @param string $option <p>
     * You will find a list with each configuration option and their types
     * at: http://tidy.sourceforge.net/docs/quickref.html.
     * </p>
     * @return string|int|bool the value of the specified <i>option</i>.
     * The return type depends on the type of the specified one.
     
    #[TentativeType]
*/
    public function getOpt(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $option): string|int|bool {}

/**
* <div id="tidy.cleanrepair" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::cleanRepair</h1>  <h1 class="refname">tidy_clean_repair</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy::cleanRepair</span> -- <span class="refname">tidy_clean_repair</span> — <span class="dc-title">Execute configured cleanup and repair operations on parsed markup</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.cleanrepair-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::cleanRepair</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_clean_repair</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   This function cleans and repairs the given tidy   <span class="parameter" style="color:#3A95FF">tidy</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.cleanrepair-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.cleanrepair-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.cleanrepair-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4057">    <p><strong>示例 #1 <span class="function"><strong>tidy::cleanrepair()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;test&lt;/I&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">cleanRepair</span><span style="color: #007700">();<br><br>echo </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">nbsp;html PUBLIC "-//W3C//DTD HTML 3.2//EN"&gt;<br><br><head></head><br><title></title><br><br><body><br><p>test</p><br></body><br></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.cleanrepair-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy::repairFile()} - Repair a file and return it as a string</span></li>   <li><span class="function">{@link tidy::repairString()} - Repair a string using an optionally provided configuration file</span></li>  </ul> </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Execute configured cleanup and repair operations on parsed markup
     * @link https://php.net/manual/zh/tidy.cleanrepair.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     
    #[TentativeType]
*/
    public function cleanRepair(): bool {}

/**
* <div id="tidy.parsefile" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::parseFile</h1>  <h1 class="refname">tidy_parse_file</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy::parseFile</span> -- <span class="refname">tidy_parse_file</span> — <span class="dc-title">Parse markup in file or URI</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.parsefile-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::parseFile</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$filename</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$useIncludePath</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_parse_file</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$filename</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$useIncludePath</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Parses the given file.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.parsefile-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>     <dd>      <p class="para">       If the <span class="parameter" style="color:#3A95FF">filename</span> parameter is given, this function       will also read that file and initialize the object with the file,       acting like <span class="function"><strong>tidy_parse_file()</strong></span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">config</span></dt>     <dd>      <p class="para">       The config <span class="parameter" style="color:#3A95FF">config</span> can be passed either as an       array or as a string. If a string is passed, it is interpreted as the       name of the configuration file, otherwise, it is interpreted as the       options themselves.      </p>      <p class="para">       For an explanation about each option, see       <a href="http://api.html-tidy.org/#quick-reference" class="link external">» http://api.html-tidy.org/#quick-reference</a>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">encoding</span></dt>     <dd>      <p class="para">       The <span class="parameter" style="color:#3A95FF">encoding</span> parameter sets the encoding for       input/output documents. The possible values for encoding  are:        <span class="literal">ascii</span>, <span class="literal">latin0</span>, <span class="literal">latin1</span>,       <span class="literal">raw</span>, <span class="literal">utf8</span>, <span class="literal">iso2022</span>,       <span class="literal">mac</span>, <span class="literal">win1252</span>, <span class="literal">ibm858</span>,       <span class="literal">utf16</span>, <span class="literal">utf16le</span>, <span class="literal">utf16be</span>,       <span class="literal">big5</span>, and <span class="literal">shiftjis</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">useIncludePath</span></dt>     <dd>      <p class="para">       Search for the file in the <a href="https://php.net/manual/zh/ini.core.php#ini.include-path" class="link">include_path</a>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.parsefile-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="methodname" style="color:#CC7832"><strong>tidy::parseFile()</strong></span> returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> on success.   <span class="function"><strong>tidy_parse_file()</strong></span> returns a new <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">tidy</a></span>   instance on success.   Both, the method and the function return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.  </p> </div> <div class="refsect1 changelog" id="refsect1-tidy.parsefile-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">config</span> and <span class="parameter" style="color:#3A95FF">encoding</span> are nullable now.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-tidy.parsefile-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4067">    <p><strong>示例 #1 <span class="function"><strong>tidy::parseFile()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$tidy </span><span style="color: #007700">= new </span><span style="color: #9876AA">tidy</span><span style="color: #007700">();<br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">parseFile</span><span style="color: #007700">(</span><span style="color: #DD0000">'file.html'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">cleanRepair</span><span style="color: #007700">();<br><br>if(!empty(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">errorBuffer</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #DD0000">"The following errors or warnings occurred:\n"</span><span style="color: #007700">;<br>    echo </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">errorBuffer</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.parsefile-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy::parseString()} - Parse a document stored in a string</span></li>   <li><span class="function">{@link tidy::repairFile()} - Repair a file and return it as a string</span></li>   <li><span class="function">{@link tidy::repairString()} - Repair a string using an optionally provided configuration file</span></li>  </ul> </div> </div>
    *
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Parse markup in file or URI
     * @link https://php.net/manual/zh/tidy.parsefile.php
     * @param string $filename <p>
     * If the <i>filename</i> parameter is given, this function
     * will also read that file and initialize the object with the file,
     * acting like <b>tidy_parse_file</b>.
     * </p>
     * @param mixed $config [optional] <p>
     * The config <i>config</i> can be passed either as an
     * array or as a string. If a string is passed, it is interpreted as the
     * name of the configuration file, otherwise, it is interpreted as the
     * options themselves.
     * </p>
     * <p>
     * For an explanation about each option, see
     * http://tidy.sourceforge.net/docs/quickref.html.
     * </p>
     * @param string|null $encoding [optional] <p>
     * The <i>encoding</i> parameter sets the encoding for
     * input/output documents. The possible values for encoding are:
     * ascii, latin0, latin1,
     * raw, utf8, iso2022,
     * mac, win1252, ibm858,
     * utf16, utf16le, utf16be,
     * big5, and shiftjis.
     * </p>
     * @param bool $useIncludePath [optional] <p>
     * Search for the file in the include_path.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     
    #[TentativeType]
*/
    public function parseFile(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $filename,
        #[LanguageLevelTypeAware(['8.0' => 'array|string|null'], default: '')] $config = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $encoding = null,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $useIncludePath = false
    ): bool {}

/**
* <div id="tidy.parsestring" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::parseString</h1>  <h1 class="refname">tidy_parse_string</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy::parseString</span> -- <span class="refname">tidy_parse_string</span> — <span class="dc-title">Parse a document stored in a string</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.parsestring-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::parseString</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$string</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_parse_string</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$string</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Parses a document stored in a string.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.parsestring-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">string</span></dt>     <dd>      <p class="para">       The data to be parsed.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">config</span></dt>     <dd>      <p class="para">       The config <span class="parameter" style="color:#3A95FF">config</span> can be passed either as an       array or as a string. If a string is passed, it is interpreted as the       name of the configuration file, otherwise, it is interpreted as the       options themselves.      </p>      <p class="para">       For an explanation about each option, visit <a href="http://api.html-tidy.org/#quick-reference" class="link external">» http://api.html-tidy.org/#quick-reference</a>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">encoding</span></dt>     <dd>      <p class="para">       The <span class="parameter" style="color:#3A95FF">encoding</span> parameter sets the encoding for       input/output documents. The possible values for encoding  are:        <span class="literal">ascii</span>, <span class="literal">latin0</span>, <span class="literal">latin1</span>,       <span class="literal">raw</span>, <span class="literal">utf8</span>, <span class="literal">iso2022</span>,       <span class="literal">mac</span>, <span class="literal">win1252</span>, <span class="literal">ibm858</span>,       <span class="literal">utf16</span>, <span class="literal">utf16le</span>, <span class="literal">utf16be</span>,       <span class="literal">big5</span>, and <span class="literal">shiftjis</span>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.parsestring-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="methodname" style="color:#CC7832"><strong>tidy::parseString()</strong></span> returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> on success.   <span class="function"><strong>tidy_parse_string()</strong></span> returns a new <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">tidy</a></span>   instance on success.   Both, the method and the function return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on failure.  </p> </div> <div class="refsect1 changelog" id="refsect1-tidy.parsestring-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">config</span> and <span class="parameter" style="color:#3A95FF">encoding</span> are nullable now.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-tidy.parsestring-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4068">    <p><strong>示例 #1 <span class="function"><strong>tidy::parseString()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>ob_start</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;<br></span><br>&lt;html&gt;<br>  &lt;head&gt;<br>   &lt;title&gt;test&lt;/title&gt;<br>  &lt;/head&gt;<br>  &lt;body&gt;<br>   &lt;p&gt;error&lt;br&gt;another line&lt;/i&gt;<br>  &lt;/body&gt;<br>&lt;/html&gt;<br><br><span style="color: #9876AA">&lt;?php<br><br>$buffer </span><span style="color: #007700">= </span><span style="color: #9876AA">ob_get_clean</span><span style="color: #007700">();<br></span><span style="color: #9876AA">$config </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'indent' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">TRUE</span><span style="color: #007700">,<br>                </span><span style="color: #DD0000">'output-xhtml' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">TRUE</span><span style="color: #007700">,<br>                </span><span style="color: #DD0000">'wrap' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">200</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$buffer</span><span style="color: #007700">, </span><span style="color: #9876AA">$config</span><span style="color: #007700">, </span><span style="color: #DD0000">'UTF8'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">cleanRepair</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">nbsp;html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"<br>    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;<br><br>  <head></head><br>    <title><br>      test<br>    </title><br>  <br>  <body><br>    <p><br>      error<br><br>      another line<br>    </p><br>  </body><br></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.parsestring-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy::parseFile()} - Parse markup in file or URI</span></li>   <li><span class="function">{@link tidy::repairFile()} - Repair a file and return it as a string</span></li>   <li><span class="function">{@link tidy::repairString()} - Repair a string using an optionally provided configuration file</span></li>  </ul> </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Parse a document stored in a string
     * @link https://php.net/manual/zh/tidy.parsestring.php
     * @param string $string <p>
     * The data to be parsed.
     * </p>
     * @param mixed $config [optional] <p>
     * The config <i>config</i> can be passed either as an
     * array or as a string. If a string is passed, it is interpreted as the
     * name of the configuration file, otherwise, it is interpreted as the
     * options themselves.
     * </p>
     * <p>
     * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
     * </p>
     * @param string|null $encoding [optional] <p>
     * The <i>encoding</i> parameter sets the encoding for
     * input/output documents. The possible values for encoding are:
     * ascii, latin0, latin1,
     * raw, utf8, iso2022,
     * mac, win1252, ibm858,
     * utf16, utf16le, utf16be,
     * big5, and shiftjis.
     * </p>
     * @return bool a new <b>tidy</b> instance.
     
    #[TentativeType]
*/
    public function parseString(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $string,
        #[LanguageLevelTypeAware(['8.0' => 'array|string|null'], default: '')] $config = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $encoding = null
    ): bool {}

/**
* <div id="tidy.repairstring" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::repairString</h1>  <h1 class="refname">tidy_repair_string</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.7.0)</p><p class="refpurpose"><span class="refname">tidy::repairString</span> -- <span class="refname">tidy_repair_string</span> — <span class="dc-title">Repair a string using an optionally provided configuration file</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.repairstring-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>tidy::repairString</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$string</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_repair_string</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$string</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Repairs the given string.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.repairstring-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">string</span></dt>     <dd>      <p class="para">       The data to be repaired.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">config</span></dt>     <dd>      <p class="para">       The config <span class="parameter" style="color:#3A95FF">config</span> can be passed either as an       array or as a string. If a string is passed, it is interpreted as the       name of the configuration file, otherwise, it is interpreted as the       options themselves.      </p>      <p class="para">       Check <a href="http://api.html-tidy.org/#quick-reference" class="link external">» http://api.html-tidy.org/#quick-reference</a> for       an explanation about each option.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">encoding</span></dt>     <dd>      <p class="para">       The <span class="parameter" style="color:#3A95FF">encoding</span> parameter sets the encoding for       input/output documents. The possible values for encoding  are:        <span class="literal">ascii</span>, <span class="literal">latin0</span>, <span class="literal">latin1</span>,       <span class="literal">raw</span>, <span class="literal">utf8</span>, <span class="literal">iso2022</span>,       <span class="literal">mac</span>, <span class="literal">win1252</span>, <span class="literal">ibm858</span>,       <span class="literal">utf16</span>, <span class="literal">utf16le</span>, <span class="literal">utf16be</span>,       <span class="literal">big5</span>, and <span class="literal">shiftjis</span>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.repairstring-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the repaired string,  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 changelog" id="refsect1-tidy.repairstring-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="methodname" style="color:#CC7832"><strong>tidy::repairString()</strong></span> is a static method now.      </td>     </tr>     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">config</span> and <span class="parameter" style="color:#3A95FF">encoding</span> are nullable now.      </td>     </tr>     <tr>      <td>8.0.0</td>      <td>       This function no longer accepts the <span class="parameter" style="color:#3A95FF">useIncludePath</span> parameter.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-tidy.repairstring-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4070">    <p><strong>示例 #1 <span class="function"><strong>tidy::repairString()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>ob_start</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;<br></span><br>&lt;html&gt;<br>  &lt;head&gt;<br>    &lt;title&gt;test&lt;/title&gt;<br>  &lt;/head&gt;<br>  &lt;body&gt;<br>    &lt;p&gt;error&lt;/i&gt;<br>  &lt;/body&gt;<br>&lt;/html&gt;<br><br><span style="color: #9876AA">&lt;?php<br><br>$buffer </span><span style="color: #007700">= </span><span style="color: #9876AA">ob_get_clean</span><span style="color: #007700">();<br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= new </span><span style="color: #9876AA">tidy</span><span style="color: #007700">();<br></span><span style="color: #9876AA">$clean </span><span style="color: #007700">= </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">repairString</span><span style="color: #007700">(</span><span style="color: #9876AA">$buffer</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">$clean</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">nbsp;html PUBLIC "-//W3C//DTD HTML 3.2//EN"&gt;<br><br><head></head><br><title>test</title><br><br><body><br><p>error</p><br></body><br></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.repairstring-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy::parseFile()} - Parse markup in file or URI</span></li>   <li><span class="function">{@link tidy::parseString()} - Parse a document stored in a string</span></li>   <li><span class="function">{@link tidy::repairFile()} - Repair a file and return it as a string</span></li>  </ul> </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
     * Repair a string using an optionally provided configuration file
     * @link https://php.net/manual/zh/tidy.repairstring.php
     * @param string $string <p>
     * The data to be repaired.
     * </p>
     * @param array|string|null $config [optional] <p>
     * The config <i>config</i> can be passed either as an
     * array or as a string. If a string is passed, it is interpreted as the
     * name of the configuration file, otherwise, it is interpreted as the
     * options themselves.
     * </p>
     * <p>
     * Check http://tidy.sourceforge.net/docs/quickref.html for
     * an explanation about each option.
     * </p>
     * @param string|null $encoding [optional] <p>
     * The <i>encoding</i> parameter sets the encoding for
     * input/output documents. The possible values for encoding are:
     * ascii, latin0, latin1,
     * raw, utf8, iso2022,
     * mac, win1252, ibm858,
     * utf16, utf16le, utf16be,
     * big5, and shiftjis.
     * </p>
     * @return string|false the repaired string.
     
    #[TentativeType]
*/
    public static function repairString(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $string,
        #[LanguageLevelTypeAware(['8.0' => 'array|string|null'], default: '')] $config = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $encoding = null
    ): string|false {}

/**
* <div id="tidy.repairfile" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::repairFile</h1>  <h1 class="refname">tidy_repair_file</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.7.0)</p><p class="refpurpose"><span class="refname">tidy::repairFile</span> -- <span class="refname">tidy_repair_file</span> — <span class="dc-title">Repair a file and return it as a string</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.repairfile-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>tidy::repairFile</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$filename</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$useIncludePath</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_repair_file</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$filename</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$useIncludePath</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Repairs the given file and returns it as a string.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.repairfile-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>     <dd>      <p class="para">       The file to be repaired.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">config</span></dt>     <dd>      <p class="para">       The config <span class="parameter" style="color:#3A95FF">config</span> can be passed either as an       array or as a string. If a string is passed, it is interpreted as the       name of the configuration file, otherwise, it is interpreted as the       options themselves.      </p>      <p class="para">       Check http://tidy.sourceforge.net/docs/quickref.html for an       explanation about each option.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">encoding</span></dt>     <dd>      <p class="para">       The <span class="parameter" style="color:#3A95FF">encoding</span> parameter sets the encoding for       input/output documents. The possible values for encoding  are:        <span class="literal">ascii</span>, <span class="literal">latin0</span>, <span class="literal">latin1</span>,       <span class="literal">raw</span>, <span class="literal">utf8</span>, <span class="literal">iso2022</span>,       <span class="literal">mac</span>, <span class="literal">win1252</span>, <span class="literal">ibm858</span>,       <span class="literal">utf16</span>, <span class="literal">utf16le</span>, <span class="literal">utf16be</span>,       <span class="literal">big5</span>, and <span class="literal">shiftjis</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">useIncludePath</span></dt>     <dd>      <p class="para">       Search for the file in the <a href="https://php.net/manual/zh/ini.core.php#ini.include-path" class="link">include_path</a>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.repairfile-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the repaired contents as a string,  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 changelog" id="refsect1-tidy.repairfile-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="methodname" style="color:#CC7832"><strong>tidy::repairFile()</strong></span> is a static method now.      </td>     </tr>     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">config</span> and <span class="parameter" style="color:#3A95FF">encoding</span> are nullable now.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-tidy.repairfile-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4069">    <p><strong>示例 #1 <span class="function"><strong>tidy::repairFile()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$file </span><span style="color: #007700">= </span><span style="color: #DD0000">'file.html'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= new </span><span style="color: #9876AA">tidy</span><span style="color: #007700">();<br></span><span style="color: #9876AA">$repaired </span><span style="color: #007700">= </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">repairfile</span><span style="color: #007700">(</span><span style="color: #9876AA">$file</span><span style="color: #007700">);<br></span><span style="color: #9876AA">rename</span><span style="color: #007700">(</span><span style="color: #9876AA">$file</span><span style="color: #007700">, </span><span style="color: #9876AA">$file </span><span style="color: #007700">. </span><span style="color: #DD0000">'.bak'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">file_put_contents</span><span style="color: #007700">(</span><span style="color: #9876AA">$file</span><span style="color: #007700">, </span><span style="color: #9876AA">$repaired</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.repairfile-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy::parseFile()} - Parse markup in file or URI</span></li>   <li><span class="function">{@link tidy::parseString()} - Parse a document stored in a string</span></li>   <li><span class="function">{@link tidy::repairString()} - Repair a string using an optionally provided configuration file</span></li>  </ul> </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
     * Repair a file and return it as a string
     * @link https://php.net/manual/zh/tidy.repairfile.php
     * @param string $filename <p>
     * The file to be repaired.
     * </p>
     * @param array|string|null $config [optional] <p>
     * The config <i>config</i> can be passed either as an
     * array or as a string. If a string is passed, it is interpreted as the
     * name of the configuration file, otherwise, it is interpreted as the
     * options themselves.
     * </p>
     * <p>
     * Check http://tidy.sourceforge.net/docs/quickref.html for an
     * explanation about each option.
     * </p>
     * @param string|null $encoding [optional] <p>
     * The <i>encoding</i> parameter sets the encoding for
     * input/output documents. The possible values for encoding are:
     * ascii, latin0, latin1,
     * raw, utf8, iso2022,
     * mac, win1252, ibm858,
     * utf16, utf16le, utf16be,
     * big5, and shiftjis.
     * </p>
     * @param bool $useIncludePath [optional] <p>
     * Search for the file in the include_path.
     * </p>
     * @return string|false the repaired contents as a string.
     
    #[TentativeType]
*/
    public static function repairFile(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $filename,
        #[LanguageLevelTypeAware(['8.0' => 'array|string|null'], default: '')] $config = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $encoding = null,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $useIncludePath = false
    ): string|false {}

/**
* <div id="tidy.diagnose" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::diagnose</h1>  <h1 class="refname">tidy_diagnose</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy::diagnose</span> -- <span class="refname">tidy_diagnose</span> — <span class="dc-title">Run configured diagnostics on parsed and repaired markup</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.diagnose-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::diagnose</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_diagnose</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Runs diagnostic tests on the given tidy <span class="parameter" style="color:#3A95FF">tidy</span>,   adding some more information about the document in the error buffer.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.diagnose-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.diagnose-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.diagnose-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4059">    <p><strong>示例 #1 <span class="function"><strong>tidy::diagnose()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"<br>"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;<br><br>&lt;p&gt;paragraph&lt;/p&gt;<br></span><span style="color: #007700">HTML;<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">cleanRepair</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// note the difference between the two outputs<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">errorBuffer </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">diagnose</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">errorBuffer</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">line 4 column 1 - Warning: <p> isn't allowed in </p><head></head><p> elements<br>line 4 column 1 - Warning: inserting missing 'title' element<br>line 4 column 1 - Warning: </p><p> isn't allowed in </p><head></head><p> elements<br>line 4 column 1 - Warning: inserting missing 'title' element<br>Info: Doctype given is "-//W3C//DTD XHTML 1.0 Strict//EN"<br>Info: Document content looks like XHTML 1.0 Strict<br>2 warnings, 0 errors were found!</p></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.diagnose-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function"><strong>tidy::errorBuffer()</strong></span></li>  </ul> </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Run configured diagnostics on parsed and repaired markup
     * @link https://php.net/manual/zh/tidy.diagnose.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     
    #[TentativeType]
*/
    public function diagnose(): bool {}

/**
* <div id="tidy.getrelease" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::getRelease</h1>  <h1 class="refname">tidy_get_release</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy::getRelease</span> -- <span class="refname">tidy_get_release</span> — <span class="dc-title">Get release date (version) for Tidy library</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.getrelease-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::getRelease</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_release</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Gets the release date of the Tidy library.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.getrelease-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-tidy.getrelease-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a string with the release date of the Tidy library,   which may be <span class="code">'unknown'</span>.  </p> </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Get release date (version) for Tidy library
     * @link https://php.net/manual/zh/tidy.getrelease.php
     * @return string a string with the release date of the Tidy library.
     
    #[TentativeType]
*/
    public function getRelease(): string {}

/**
* <div id="tidy.getconfig" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::getConfig</h1>  <h1 class="refname">tidy_get_config</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.7.0)</p><p class="refpurpose"><span class="refname">tidy::getConfig</span> -- <span class="refname">tidy_get_config</span> — <span class="dc-title">Get current Tidy configuration</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.getconfig-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::getConfig</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_config</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Gets the list of the configuration options in use by the given tidy   <span class="parameter" style="color:#3A95FF">tidy</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.getconfig-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.getconfig-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array of configuration options.  </p>  <p class="para">   For an explanation about each option, visit <a href="http://api.html-tidy.org/#quick-reference" class="link external">» http://api.html-tidy.org/#quick-reference</a>.  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.getconfig-examples">  <h3 class="title">示例</h3>    <p class="para">   </p><div class="example" id="example-4061">    <p><strong>示例 #1 <span class="function"><strong>tidy::getConfig()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;test&lt;/p&gt;'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$config </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'indent' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">TRUE</span><span style="color: #007700">,<br>                </span><span style="color: #DD0000">'output-xhtml' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">TRUE</span><span style="color: #007700">,<br>                </span><span style="color: #DD0000">'wrap' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">200</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">, </span><span style="color: #9876AA">$config</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getConfig</span><span style="color: #007700">());<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>    [indent-spaces] =&gt; 2<br>    [wrap] =&gt; 200<br>    [tab-size] =&gt; 8<br>    [char-encoding] =&gt; 1<br>    [input-encoding] =&gt; 3<br>    [output-encoding] =&gt; 1<br>    [newline] =&gt; 1<br>    [doctype-mode] =&gt; 1<br>    [doctype] =&gt;<br>    [repeated-attributes] =&gt; 1<br>    [alt-text] =&gt;<br>    [slide-style] =&gt;<br>    [error-file] =&gt;<br>    [output-file] =&gt;<br>    [write-back] =&gt;<br>    [markup] =&gt; 1<br>    [show-warnings] =&gt; 1<br>    [quiet] =&gt;<br>    [indent] =&gt; 1<br>    [hide-endtags] =&gt;<br>    [input-xml] =&gt;<br>    [output-xml] =&gt; 1<br>    [output-xhtml] =&gt; 1<br>    [output-html] =&gt;<br>    [add-xml-decl] =&gt;<br>    [uppercase-tags] =&gt;<br>    [uppercase-attributes] =&gt;<br>    [bare] =&gt;<br>    [clean] =&gt;<br>    [logical-emphasis] =&gt;<br>    [drop-proprietary-attributes] =&gt;<br>    [drop-font-tags] =&gt;<br>    [drop-empty-paras] =&gt; 1<br>    [fix-bad-comments] =&gt; 1<br>    [break-before-br] =&gt;<br>    [split] =&gt;<br>    [numeric-entities] =&gt;<br>    [quote-marks] =&gt;<br>    [quote-nbsp] =&gt; 1<br>    [quote-ampersand] =&gt; 1<br>    [wrap-attributes] =&gt;<br>    [wrap-script-literals] =&gt;<br>    [wrap-sections] =&gt; 1<br>    [wrap-asp] =&gt; 1<br>    [wrap-jste] =&gt; 1<br>    [wrap-php] =&gt; 1<br>    [fix-backslash] =&gt; 1<br>    [indent-attributes] =&gt;<br>    [assume-xml-procins] =&gt;<br>    [add-xml-space] =&gt;<br>    [enclose-text] =&gt;<br>    [enclose-block-text] =&gt;<br>    [keep-time] =&gt;<br>    [word-2000] =&gt;<br>    [tidy-mark] =&gt;<br>    [gnu-emacs] =&gt;<br>    [gnu-emacs-file] =&gt;<br>    [literal-attributes] =&gt;<br>    [show-body-only] =&gt;<br>    [fix-uri] =&gt; 1<br>    [lower-literals] =&gt; 1<br>    [hide-comments] =&gt;<br>    [indent-cdata] =&gt;<br>    [force-output] =&gt; 1<br>    [show-errors] =&gt; 6<br>    [ascii-chars] =&gt; 1<br>    [join-classes] =&gt;<br>    [join-styles] =&gt; 1<br>    [escape-cdata] =&gt;<br>    [language] =&gt;<br>    [ncr] =&gt; 1<br>    [output-bom] =&gt; 2<br>    [replace-color] =&gt;<br>    [css-prefix] =&gt;<br>    [new-inline-tags] =&gt;<br>    [new-blocklevel-tags] =&gt;<br>    [new-empty-tags] =&gt;<br>    [new-pre-tags] =&gt;<br>    [accessibility-check] =&gt; 0<br>    [vertical-space] =&gt;<br>    [punctuation-wrap] =&gt;<br>    [merge-divs] =&gt; 1<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.getconfig-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function"><strong>tidy_reset_config()</strong></span></li>   <li><span class="function"><strong>tidy_save_config()</strong></span></li>  </ul> </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
     * Get current Tidy configuration
     * @link https://php.net/manual/zh/tidy.getconfig.php
     * @return array an array of configuration options.
     * </p>
     * <p>
     * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
     
    #[TentativeType]
*/
    public function getConfig(): array {}

/**
* <div id="tidy.getstatus" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::getStatus</h1>  <h1 class="refname">tidy_get_status</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy::getStatus</span> -- <span class="refname">tidy_get_status</span> — <span class="dc-title">Get status of specified document</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.getstatus-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::getStatus</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_status</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Returns the status for the specified tidy <span class="parameter" style="color:#3A95FF">tidy</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.getstatus-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.getstatus-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns 0 if no error/warning was raised, 1 for warnings or accessibility   errors, or 2 for errors.  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.getstatus-examples">  <h3 class="title">示例</h3>    <p class="para">   </p><div class="example" id="example-4064">    <p><strong>示例 #1 <span class="function"><strong>tidy::getStatus()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;paragraph&lt;/i&gt;'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= new </span><span style="color: #9876AA">tidy</span><span style="color: #007700">();<br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">parseString</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$tidy2 </span><span style="color: #007700">= new </span><span style="color: #9876AA">tidy</span><span style="color: #007700">();<br></span><span style="color: #9876AA">$html2 </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;bogus&gt;test&lt;/bogus&gt;'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$tidy2</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">parseString</span><span style="color: #007700">(</span><span style="color: #9876AA">$html2</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getStatus</span><span style="color: #007700">(); </span><span style="color: #FF8000">//1<br><br></span><span style="color: #007700">echo </span><span style="color: #9876AA">$tidy2</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getStatus</span><span style="color: #007700">(); </span><span style="color: #FF8000">//2<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Get status of specified document
     * @link https://php.net/manual/zh/tidy.getstatus.php
     * @return int 0 if no error/warning was raised, 1 for warnings or accessibility
     * errors, or 2 for errors.
     
    #[TentativeType]
*/
    public function getStatus(): int {}

/**
* <div id="tidy.gethtmlver" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::getHtmlVer</h1>  <h1 class="refname">tidy_get_html_ver</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy::getHtmlVer</span> -- <span class="refname">tidy_get_html_ver</span> — <span class="dc-title">Get the Detected HTML version for the specified document</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.gethtmlver-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::getHtmlVer</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_html_ver</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Returns the detected HTML version for the specified tidy   <span class="parameter" style="color:#3A95FF">tidy</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.gethtmlver-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.gethtmlver-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the detected HTML version.  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    This function is not yet implemented in the Tidylib itself, so it always    return <span class="literal">0</span>.   </p>  </div> </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Get the Detected HTML version for the specified document
     * @link https://php.net/manual/zh/tidy.gethtmlver.php
     * @return int the detected HTML version.
     * </p>
     * <p>
     * This function is not yet implemented in the Tidylib itself, so it always
     * return 0.
     
    #[TentativeType]
*/
    public function getHtmlVer(): int {}

/**
* <div id="tidy.getoptdoc" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::getOptDoc</h1>  <h1 class="refname">tidy_get_opt_doc</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">tidy::getOptDoc</span> -- <span class="refname">tidy_get_opt_doc</span> — <span class="dc-title">   Returns the documentation for the given option name  </span></p> </div> <div class="refsect1 description" id="refsect1-tidy.getoptdoc-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::getOptDoc</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$option</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_opt_doc</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$option</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>tidy_get_opt_doc()</strong></span> returns the documentation for the   given option name.  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    You need at least libtidy from 25 April, 2005 for this function be    available.   </p>  </blockquote> </div> <div class="refsect1 parameters" id="refsect1-tidy.getoptdoc-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">option</span></dt>     <dd>      <p class="para">       The option name      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.getoptdoc-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a string if the option exists and has documentation available, or   <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.getoptdoc-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4063">    <p><strong>示例 #1 Print all options along with their documentation and default value</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$tidy </span><span style="color: #007700">= new </span><span style="color: #9876AA">tidy</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$config </span><span style="color: #007700">= </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getConfig</span><span style="color: #007700">();<br><br></span><span style="color: #9876AA">ksort</span><span style="color: #007700">(</span><span style="color: #9876AA">$config</span><span style="color: #007700">);<br><br>foreach (</span><span style="color: #9876AA">$config </span><span style="color: #007700">as </span><span style="color: #9876AA">$opt </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">$val</span><span style="color: #007700">) {<br><br>    if (!</span><span style="color: #9876AA">$doc </span><span style="color: #007700">= </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getOptDoc</span><span style="color: #007700">(</span><span style="color: #9876AA">$opt</span><span style="color: #007700">))<br>        </span><span style="color: #9876AA">$doc </span><span style="color: #007700">= </span><span style="color: #DD0000">'no documentation available!'</span><span style="color: #007700">;<br><br>    </span><span style="color: #9876AA">$val </span><span style="color: #007700">= (</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getOpt</span><span style="color: #007700">(</span><span style="color: #9876AA">$opt</span><span style="color: #007700">) === </span><span style="color: #9876AA">true</span><span style="color: #007700">)  ? </span><span style="color: #DD0000">'true'  </span><span style="color: #007700">: </span><span style="color: #9876AA">$val</span><span style="color: #007700">;<br>    </span><span style="color: #9876AA">$val </span><span style="color: #007700">= (</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getOpt</span><span style="color: #007700">(</span><span style="color: #9876AA">$opt</span><span style="color: #007700">) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) ? </span><span style="color: #DD0000">'false' </span><span style="color: #007700">: </span><span style="color: #9876AA">$val</span><span style="color: #007700">;<br><br>    echo </span><span style="color: #DD0000">"&lt;p&gt;&lt;b&gt;</span><span style="color: #9876AA">$opt</span><span style="color: #DD0000">&lt;/b&gt; (default: '</span><span style="color: #9876AA">$val</span><span style="color: #DD0000">')&lt;br /&gt;"</span><span style="color: #007700">.<br>         </span><span style="color: #DD0000">"</span><span style="color: #9876AA">$doc</span><span style="color: #DD0000">&lt;/p&gt;&lt;hr /&gt;\n"</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.getoptdoc-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link tidy::getConfig()} - Get current Tidy configuration</span></li>    <li><span class="function">{@link tidy::getOpt()} - Returns the value of the specified configuration option for the tidy document</span></li>   </ul>   </div></div>
    *
     * Returns the documentation for the given option name
     * @link https://php.net/manual/zh/tidy.getoptdoc.php
     * @param string $option <p>
     * The option name
     * </p>
     * @return string|false a string if the option exists and has documentation available, or
     * <b>FALSE</b> otherwise.
     
    #[TentativeType]
*/
    public function getOptDoc(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $option): string|false {}

/**
* <div id="tidy.isxhtml" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::isXhtml</h1>  <h1 class="refname">tidy_is_xhtml</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy::isXhtml</span> -- <span class="refname">tidy_is_xhtml</span> — <span class="dc-title">Indicates if the document is a XHTML document</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.isxhtml-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::isXhtml</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_is_xhtml</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Tells if the document is a XHTML document.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.isxhtml-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.isxhtml-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   This function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the specified tidy   <span class="parameter" style="color:#3A95FF">tidy</span> is a XHTML document, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    This function is not yet implemented in the Tidylib itself, so it always    return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.   </p>  </div> </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Indicates if the document is a XHTML document
     * @link https://php.net/manual/zh/tidy.isxhtml.php
     * @return bool This function returns <b>TRUE</b> if the specified tidy
     * <i>object</i> is a XHTML document, or <b>FALSE</b> otherwise.
     * </p>
     * <p>
     * This function is not yet implemented in the Tidylib itself, so it always
     * return <b>FALSE</b>.
     
    #[TentativeType]
*/
    public function isXhtml(): bool {}

/**
* <div id="tidy.isxml" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::isXml</h1>  <h1 class="refname">tidy_is_xml</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy::isXml</span> -- <span class="refname">tidy_is_xml</span> — <span class="dc-title">Indicates if the document is a generic (non HTML/XHTML) XML document</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.isxml-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::isXml</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_is_xml</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Tells if the document is a generic (non HTML/XHTML) XML document.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.isxml-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.isxml-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   This function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the specified tidy   <span class="parameter" style="color:#3A95FF">tidy</span> is a generic XML document (non HTML/XHTML),   or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    This function is not yet implemented in the Tidylib itself, so it always    return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.   </p>  </div> </div></div>
    *
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Indicates if the document is a generic (non HTML/XHTML) XML document
     * @link https://php.net/manual/zh/tidy.isxml.php
     * @return bool This function returns <b>TRUE</b> if the specified tidy
     * <i>object</i> is a generic XML document (non HTML/XHTML),
     * or <b>FALSE</b> otherwise.
     * </p>
     * <p>
     * This function is not yet implemented in the Tidylib itself, so it always
     * return <b>FALSE</b>.
     
    #[TentativeType]
*/
    public function isXml(): bool {}

/**
* <div id="tidy.root" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::root</h1>  <h1 class="refname">tidy_get_root</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy 0.5.2-1.0.0)</p><p class="refpurpose"><span class="refname">tidy::root</span> -- <span class="refname">tidy_get_root</span> — <span class="dc-title">Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object representing the root of the tidy parse tree</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.root-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::root</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_root</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">   Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object representing the   root of the tidy parse tree.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.root-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.root-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object.  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.root-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4071">    <p><strong>示例 #1 <span class="function"><strong>tidy::root()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;html&gt;&lt;body&gt;<br><br>&lt;p&gt;paragraph&lt;/p&gt;<br>&lt;br/&gt;<br><br>&lt;/body&gt;&lt;/html&gt;<br></span><span style="color: #007700">HTML;<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">dump_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">root</span><span style="color: #007700">(), </span><span style="color: #9876AA">1</span><span style="color: #007700">);<br><br><br>function </span><span style="color: #9876AA">dump_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$node</span><span style="color: #007700">, </span><span style="color: #9876AA">$indent</span><span style="color: #007700">) {<br><br>    if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">hasChildren</span><span style="color: #007700">()) {<br>        foreach(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">child </span><span style="color: #007700">as </span><span style="color: #9876AA">$child</span><span style="color: #007700">) {<br>            echo </span><span style="color: #9876AA">str_repeat</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">, </span><span style="color: #9876AA">$indent</span><span style="color: #007700">*</span><span style="color: #9876AA">2</span><span style="color: #007700">) . (</span><span style="color: #9876AA">$child</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">name </span><span style="color: #007700">? </span><span style="color: #9876AA">$child</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">name </span><span style="color: #007700">: </span><span style="color: #DD0000">'"'</span><span style="color: #007700">.</span><span style="color: #9876AA">$child</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">.</span><span style="color: #DD0000">'"'</span><span style="color: #007700">). </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br>            </span><span style="color: #9876AA">dump_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$child</span><span style="color: #007700">, </span><span style="color: #9876AA">$indent</span><span style="color: #007700">+</span><span style="color: #9876AA">1</span><span style="color: #007700">);<br>        }<br>    }<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">..html<br>....head<br>......title<br>....body<br>......p<br>........"paragraph"<br>......br</blockquote></div>    </div>   </div>   </div></div>
    *
     * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
     * Returns a <b>tidyNode</b> object representing the root of the tidy parse tree
     * @link https://php.net/manual/zh/tidy.root.php
     * @return tidyNode|null the <b>tidyNode</b> object.
     
    #[TentativeType]
*/
    public function root(): ?tidyNode {}

/**
* <div id="tidy.head" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::head</h1>  <h1 class="refname">tidy_get_head</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy 0.5.2-1.0.0)</p><p class="refpurpose"><span class="refname">tidy::head</span> -- <span class="refname">tidy_get_head</span> — <span class="dc-title">Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from the &lt;head&gt; tag of the tidy parse tree</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.head-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::head</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_head</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">   Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from   the &lt;head&gt; tag of the tidy parse tree.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.head-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.head-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object.  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.head-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4065">    <p><strong>示例 #1 <span class="function"><strong>tidy::head()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'<br>&lt;html&gt;<br>  &lt;head&gt;<br>    &lt;title&gt;test&lt;/title&gt;<br>  &lt;/head&gt;<br>  &lt;body&gt;<br>    &lt;p&gt;paragraph&lt;/p&gt;<br>  &lt;/body&gt;<br>&lt;/html&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$head </span><span style="color: #007700">= </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">head</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">$head</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>     <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"><head></head><br><title>test</title><br></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.head-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy::body()} - Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree</span></li>   <li><span class="function">{@link tidy::html()} - Returns a tidyNode object starting from the &lt;html&gt; tag of the tidy parse tree</span></li>  </ul> </div></div>
    *
     * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
     * Returns a <b>tidyNode</b> object starting from the &lt;head&gt; tag of the tidy parse tree
     * @link https://php.net/manual/zh/tidy.head.php
     * @return tidyNode|null the <b>tidyNode</b> object.
     
    #[TentativeType]
*/
    public function head(): ?tidyNode {}

/**
* <div id="tidy.html" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::html</h1>  <h1 class="refname">tidy_get_html</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy 0.5.2-1.0.0)</p><p class="refpurpose"><span class="refname">tidy::html</span> -- <span class="refname">tidy_get_html</span> — <span class="dc-title">Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from the &lt;html&gt; tag of the tidy parse tree</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.html-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::html</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_html</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">   Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting   from the &lt;html&gt; tag of the tidy parse tree.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.html-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.html-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object.  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.html-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4066">    <p><strong>示例 #1 <span class="function"><strong>tidy::html()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'<br>&lt;html&gt;<br>  &lt;head&gt;<br>    &lt;title&gt;test&lt;/title&gt;<br>  &lt;/head&gt;<br>  &lt;body&gt;<br>    &lt;p&gt;paragraph&lt;/p&gt;<br>  &lt;/body&gt;<br>&lt;/html&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$html </span><span style="color: #007700">= </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">$html</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"><br><head></head><br><title>test</title><br><br><body><br><p>paragraph</p><br></body><br></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.html-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy::body()} - Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree</span></li>   <li><span class="function">{@link tidy::head()} - Returns a tidyNode object starting from the &lt;head&gt; tag of the tidy parse tree</span></li>  </ul> </div></div>
    *
     * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
     * Returns a <b>tidyNode</b> object starting from the &lt;html&gt; tag of the tidy parse tree
     * @link https://php.net/manual/zh/tidy.html.php
     * @return tidyNode|null the <b>tidyNode</b> object.
     
    #[TentativeType]
*/
    public function html(): ?tidyNode {}

/**
* <div id="tidy.body" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::body</h1>  <h1 class="refname">tidy_get_body</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy 0.5.2-1.0)</p><p class="refpurpose"><span class="refname">tidy::body</span> -- <span class="refname">tidy_get_body</span> — <span class="dc-title">Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from the &lt;body&gt; tag of the tidy parse tree</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.body-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::body</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_body</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">   Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from the    &lt;body&gt; tag of the tidy parse tree.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.body-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.body-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from the    &lt;body&gt; tag of the tidy parse tree.  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.body-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4056">    <p><strong>示例 #1 <span class="function"><strong>tidy::getBody()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'<br>&lt;html&gt;<br>  &lt;head&gt;<br>    &lt;title&gt;test&lt;/title&gt;<br>  &lt;/head&gt;<br>  &lt;body&gt;<br>    &lt;p&gt;paragraph&lt;/p&gt;<br>  &lt;/body&gt;<br>&lt;/html&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$body </span><span style="color: #007700">= </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">Body</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">$body</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"><body><br><p>paragraph</p><br></body></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.body-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy::head()} - Returns a tidyNode object starting from the &lt;head&gt; tag of the tidy parse tree</span></li>   <li><span class="function">{@link tidy::html()} - Returns a tidyNode object starting from the &lt;html&gt; tag of the tidy parse tree</span></li>  </ul> </div> </div>
    *
     * (PHP 5, PECL tidy 0.5.2-1.0)<br/>
     * Returns a <b>tidyNode</b> object starting from the &lt;body&gt; tag of the tidy parse tree
     * @link https://php.net/manual/zh/tidy.body.php
     * @return tidyNode|null a <b>tidyNode</b> object starting from the
     * &lt;body&gt; tag of the tidy parse tree.
     
    #[TentativeType]
*/
    public function body(): ?tidyNode {}

    /**
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Constructs a new <b>tidy</b> object
     * @link https://php.net/manual/en/tidy.construct.php
     * @param string $filename [optional] <p>
     * If the <i>filename</i> parameter is given, this function
     * will also read that file and initialize the object with the file,
     * acting like <b>tidy_parse_file</b>.
     * </p>
     * @param mixed $config [optional] <p>
     * The config <i>config</i> can be passed either as an
     * array or as a string. If a string is passed, it is interpreted as the
     * name of the configuration file, otherwise, it is interpreted as the
     * options themselves.
     * </p>
     * <p>
     * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
     * </p>
     * @param string|null $encoding [optional] <p>
     * The <i>encoding</i> parameter sets the encoding for
     * input/output documents. The possible values for encoding are:
     * ascii, latin0, latin1,
     * raw, utf8, iso2022,
     * mac, win1252, ibm858,
     * utf16, utf16le, utf16be,
     * big5, and shiftjis.
     * </p>
     * @param bool $useIncludePath [optional] <p>
     * Search for the file in the include_path.
     * </p>
     */
    public function __construct(
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $filename = null,
        #[LanguageLevelTypeAware(['8.0' => 'array|string|null'], default: '')] $config = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $encoding = null,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $useIncludePath = null
    ) {}
}

/**
* <div id="class.tidynode" class="reference"> <h1 class="title">The <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> class</h1>   <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>   <div class="section" id="tidynode.intro">   <h2 class="title">简介</h2>   <p class="para">    An HTML node in an HTML file, as detected by tidy.   </p>  </div>   <div class="section" id="tidynode.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">final</span>     <span class="modifier">class</span> <strong class="classname"><strong class="classname">tidyNode</strong></strong>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.tidynode.php#tidynode.props.value">$<var class="varname">value</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.tidynode.php#tidynode.props.name">$<var class="varname">name</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.tidynode.php#tidynode.props.type">$<var class="varname">type</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.tidynode.php#tidynode.props.line">$<var class="varname">line</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.tidynode.php#tidynode.props.column">$<var class="varname">column</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.tidynode.php#tidynode.props.proprietary">$<var class="varname">proprietary</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://php.net/manual/zh/class.tidynode.php#tidynode.props.id">$<var class="varname">id</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://php.net/manual/zh/class.tidynode.php#tidynode.props.attribute">$<var class="varname">attribute</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://php.net/manual/zh/class.tidynode.php#tidynode.props.child">$<var class="varname">child</var></a></var>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">private</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>()</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.getnextsibling.php" class="methodname" style="color:#CC7832">getNextSibling</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.getparent.php" class="methodname" style="color:#CC7832">getParent</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.getprevioussibling.php" class="methodname" style="color:#CC7832">getPreviousSibling</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.haschildren.php" class="methodname" style="color:#CC7832">hasChildren</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.hassiblings.php" class="methodname" style="color:#CC7832">hasSiblings</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.isasp.php" class="methodname" style="color:#CC7832">isAsp</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.iscomment.php" class="methodname" style="color:#CC7832">isComment</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.ishtml.php" class="methodname" style="color:#CC7832">isHtml</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.isjste.php" class="methodname" style="color:#CC7832">isJste</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.isphp.php" class="methodname" style="color:#CC7832">isPhp</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidynode.istext.php" class="methodname" style="color:#CC7832">isText</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>   }</div>  </div>  <div class="section" id="tidynode.props">   <h2 class="title">属性</h2>   <dl>         <dt id="tidynode.props.value"><var class="varname">value</var></dt>     <dd>      <p class="para">The HTML representation of the node, including the surrounding tags.</p>     </dd>             <dt id="tidynode.props.name"><var class="varname">name</var></dt>     <dd>      <p class="para">The name of the HTML node</p>     </dd>             <dt id="tidynode.props.type"><var class="varname">type</var></dt>     <dd>      <p class="para">The type of the node (one of the <a href="https://php.net/manual/zh/tidy.constants.php#tidy.constants.nodetype" class="link">nodetype constants</a>, e.g. <strong><span><a href="https://php.net/manual/zh/tidy.constants.php#constant.tidy-nodetype-php">TIDY_NODETYPE_PHP</a></span></strong>)</p>     </dd>             <dt id="tidynode.props.line"><var class="varname">line</var></dt>     <dd>      <p class="para">The line number at which the tags is located in the file</p>     </dd>             <dt id="tidynode.props.column"><var class="varname">column</var></dt>     <dd>      <p class="para">The column number at which the tags is located in the file</p>     </dd>             <dt id="tidynode.props.proprietary"><var class="varname">proprietary</var></dt>     <dd>      <p class="para">Indicates if the node is a proprietary tag</p>     </dd>             <dt id="tidynode.props.id"><var class="varname">id</var></dt>     <dd>      <p class="para">The ID of the node (one of the <a href="https://php.net/manual/zh/tidy.constants.php#tidy.constants.tag" class="link">tag constants</a>, e.g. <strong><span><a href="https://php.net/manual/zh/tidy.constants.php#constant.tidy-tag-frame">TIDY_TAG_FRAME</a></span></strong>)</p>     </dd>             <dt id="tidynode.props.attribute"><var class="varname">attribute</var></dt>     <dd>      <p class="para">       An array of string, representing       the attributes names (as keys) of the current node.      </p>     </dd>             <dt id="tidynode.props.child"><var class="varname">child</var></dt>     <dd>      <p class="para">       An array of <span class="classname"><strong class="classname">tidyNode</strong></span>, representing       the children of the current node.      </p>     </dd>       </dl> </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link tidyNode::__construct} — Private constructor to disallow direct instantiation</li><li>{@link tidyNode::getNextSibling} — Returns the next sibling node of the current node</li><li>{@link tidyNode::getParent} — Returns the parent node of the current node</li><li>{@link tidyNode::getPreviousSibling} — Returns the previous sibling node of the current node</li><li>{@link tidyNode::hasChildren} — Checks if a node has children</li><li>{@link tidyNode::hasSiblings} — Checks if a node has siblings</li><li>{@link tidyNode::isAsp} — Checks if this node is ASP</li><li>{@link tidyNode::isComment} — Checks if a node represents a comment</li><li>{@link tidyNode::isHtml} — Checks if a node is an element node</li><li>{@link tidyNode::isJste} — Checks if this node is JSTE</li><li>{@link tidyNode::isPhp} — Checks if a node is PHP</li><li>{@link tidyNode::isText} — Checks if a node represents text (no markup)</li></ul></div>
*
 * An HTML node in an HTML file, as detected by tidy.
 * @link https://php.net/manual/zh/class.tidynode.php
 
*/
final class tidyNode
{
    /**
     * <p style="margin-top:0;">The HTML representation of the node, including the surrounding tags.</p>
     * @var string
     */
    public readonly string $value;

    /**
     * <p style="margin-top:0;">The name of the HTML node</p>
     * @var string
     */
    public readonly string $name;

    /**
     * <p style="margin-top:0;">The type of the tag (one of the constants above, e.g. <b><code>TIDY_NODETYPE_PHP</code></b>)</p>
     * @var int
     */
    public readonly int $type;

    /**
     * <p style="margin-top:0;">The line number at which the tags is located in the file</p>
     * @var int
     */
    public readonly int $line;

    /**
     * <p style="margin-top:0;">The column number at which the tags is located in the file</p>
     * @var int
     */
    public readonly int $column;

    /**
     * <p style="margin-top:0;">Indicates if the node is a proprietary tag</p>
     * @var bool
     */
    public readonly bool $proprietary;

    /**
     * <p style="margin-top:0;">The ID of the tag (one of the constants above, e.g. <b><code>TIDY_TAG_FRAME</code></b>)</p>
     * @var int|null
     */
    public readonly ?int $id;

    /**
     * <p style="margin-top:0;">
     * An array of string, representing
     * the attributes names (as keys) of the current node.
     * </p>
     * @var array|null
     */
    public readonly ?array $attribute;

    /**
     * <p style="margin-top:0;">
     * An array of <b>tidyNode</b>, representing
     * the children of the current node.
     * </p>
     * @var array|null
     */
    public readonly ?array $child;

/**
* <div id="tidynode.haschildren" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidyNode::hasChildren</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">tidyNode::hasChildren</span> — <span class="dc-title">Checks if a node has children</span></p> </div> <div class="refsect1 description" id="refsect1-tidynode.haschildren-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidyNode::hasChildren</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Tells if the node has children.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidynode.haschildren-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div>  <div class="refsect1 returnvalues" id="refsect1-tidynode.haschildren-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the node has children, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 examples" id="refsect1-tidynode.haschildren-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4075">    <p><strong>示例 #1 <span class="function"><strong>tidyNode::hasChildren()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;html&gt;&lt;head&gt;<br>&lt;?php echo '&lt;title&gt;title&lt;/title&gt;'; ?&gt;<br>&lt;# <br>  // JSTE code <br>  alert('Hello World'); <br>#&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>  // PHP code<br>  echo 'hello world!';<br>?&gt;<br><br>&lt;%<br>  // ASP code <br>  response.write("Hello World!")<br>%&gt;<br><br>&lt;!-- Comments --&gt;<br>Hello World<br>&lt;/body&gt;&lt;/html&gt;<br>Outside HTML<br></span><span style="color: #007700">HTML;<br><br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$num </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// the head tag<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">child</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">hasChildren</span><span style="color: #007700">());<br><br></span><span style="color: #FF8000">// the php inside the head tag<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">child</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">child</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">hasChildren</span><span style="color: #007700">());<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">bool(true)<br>bool(false)</blockquote></div>    </div>   </div>   </div></div>
    *
     * Checks if a node has children
     * @link https://php.net/manual/zh/tidynode.haschildren.php
     * @return bool <b>TRUE</b> if the node has children, <b>FALSE</b> otherwise.
     * @since 5.0.1
     
*/
    public function hasChildren(): bool {}

/**
* <div id="tidynode.hassiblings" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidyNode::hasSiblings</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">tidyNode::hasSiblings</span> — <span class="dc-title">Checks if a node has siblings</span></p> </div> <div class="refsect1 description" id="refsect1-tidynode.hassiblings-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidyNode::hasSiblings</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Tells if the node has siblings.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidynode.hassiblings-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div>  <div class="refsect1 returnvalues" id="refsect1-tidynode.hassiblings-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the node has siblings, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 examples" id="refsect1-tidynode.hassiblings-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4076">    <p><strong>示例 #1 <span class="function"><strong>tidyNode::hasSiblings()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;html&gt;&lt;head&gt;<br>&lt;?php echo '&lt;title&gt;title&lt;/title&gt;'; ?&gt;<br>&lt;# <br>  // JSTE code <br>  alert('Hello World'); <br>#&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>  // PHP code<br>  echo 'hello world!';<br>?&gt;<br><br>&lt;%<br>  // ASP code <br>  response.write("Hello World!")<br>%&gt;<br><br>&lt;!-- Comments --&gt;<br>Hello World<br>&lt;/body&gt;&lt;/html&gt;<br>Outside HTML<br></span><span style="color: #007700">HTML;<br><br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$num </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// the html tag<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">hasSiblings</span><span style="color: #007700">());<br><br></span><span style="color: #FF8000">// the head tag<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">child</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">hasSiblings</span><span style="color: #007700">());<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">bool(false)<br>bool(true)</blockquote></div>    </div>   </div>   </div></div>
    *
     * Checks if a node has siblings
     * @link https://php.net/manual/zh/tidynode.hassiblings.php
     * @return bool <b>TRUE</b> if the node has siblings, <b>FALSE</b> otherwise.
     * @since 5.0.1
     
*/
    public function hasSiblings(): bool {}

/**
* <div id="tidynode.iscomment" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidyNode::isComment</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">tidyNode::isComment</span> — <span class="dc-title">Checks if a node represents a comment</span></p> </div> <div class="refsect1 description" id="refsect1-tidynode.iscomment-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidyNode::isComment</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Tells if the node is a comment.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidynode.iscomment-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div>  <div class="refsect1 returnvalues" id="refsect1-tidynode.iscomment-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the node is a comment, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 examples" id="refsect1-tidynode.iscomment-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4078">    <p><strong>示例 #1 Extract comments from a mixed HTML document</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;html&gt;&lt;head&gt;<br>&lt;?php echo '&lt;title&gt;title&lt;/title&gt;'; ?&gt;<br>&lt;# <br>  // JSTE code <br>  alert('Hello World'); <br>#&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>  // PHP code<br>  echo 'hello world!';<br>?&gt;<br><br>&lt;%<br>  // ASP code <br>  response.write("Hello World!")<br>%&gt;<br><br>&lt;!-- Comments --&gt;<br>Hello World<br>&lt;/body&gt;&lt;/html&gt;<br>Outside HTML<br></span><span style="color: #007700">HTML;<br><br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$num </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">());<br><br>function </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$node</span><span style="color: #007700">) {<br><br>    </span><span style="color: #FF8000">// check if the current node is of requested type<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">isComment</span><span style="color: #007700">()) {<br>        echo </span><span style="color: #DD0000">"\n\n# comment node #" </span><span style="color: #007700">. ++</span><span style="color: #9876AA">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">'num'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br>    }<br><br>    </span><span style="color: #FF8000">// check if the current node has childrens<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">hasChildren</span><span style="color: #007700">()) {<br>        foreach(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">child </span><span style="color: #007700">as </span><span style="color: #9876AA">$child</span><span style="color: #007700">) {<br>            </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$child</span><span style="color: #007700">);<br>        }<br>    }<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"># comment node #1<br><!--&nbsp;Comments&nbsp;--></blockquote></div>    </div>   </div>   </div></div>
    *
     * Checks if a node represents a comment
     * @link https://php.net/manual/zh/tidynode.iscomment.php
     * @return bool <b>TRUE</b> if the node is a comment, <b>FALSE</b> otherwise.
     * @since 5.0.1
     
*/
    public function isComment(): bool {}

/**
* <div id="tidynode.ishtml" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidyNode::isHtml</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">tidyNode::isHtml</span> — <span class="dc-title">Checks if a node is an element node</span></p> </div> <div class="refsect1 description" id="refsect1-tidynode.ishtml-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidyNode::isHtml</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Tells if the node is an element node, but not the root node of the document.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidynode.ishtml-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div>  <div class="refsect1 returnvalues" id="refsect1-tidynode.ishtml-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the node is an element node, but not the root node of the document, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 changelog" id="refsect1-tidynode.ishtml-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>7.3.24, 7.4.12</td>      <td>       This function has been fixed to have reasonable behavior. Previously,       almost any node was reported as being an HTML node.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-tidynode.ishtml-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4079">    <p><strong>示例 #1 Extract HTML code from a mixed HTML document</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;html&gt;&lt;head&gt;<br>&lt;?php echo '&lt;title&gt;title&lt;/title&gt;'; ?&gt;<br>&lt;# <br>  // JSTE code <br>  alert('Hello World'); <br>#&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>  // PHP code<br>  echo 'hello world!';<br>?&gt;<br><br>&lt;%<br>  // ASP code <br>  response.write("Hello World!")<br>%&gt;<br><br>&lt;!-- Comments --&gt;<br>Hello World<br>&lt;/body&gt;&lt;/html&gt;<br>Outside HTML<br></span><span style="color: #007700">HTML;<br><br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$num </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">());<br><br>function </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$node</span><span style="color: #007700">) {<br>    </span><span style="color: #FF8000">// check if the current node is of requested type<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">isHtml</span><span style="color: #007700">()) {<br>        echo </span><span style="color: #DD0000">"\n\n# html node #" </span><span style="color: #007700">. ++</span><span style="color: #9876AA">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">'num'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br>    }<br><br>    </span><span style="color: #FF8000">// check if the current node has childrens<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">hasChildren</span><span style="color: #007700">()) {<br>        foreach(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">child </span><span style="color: #007700">as </span><span style="color: #9876AA">$child</span><span style="color: #007700">) {<br>            </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$child</span><span style="color: #007700">);<br>        }<br>    }<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"># html node #1<br><br><head></head><br><?php &nbsp;echo&nbsp;'<title>title'; ?&gt;  // JSTE code <br>  alert('Hello World');<br>#&gt;<br><title></title><br><br><body><br><?php <br>  // PHP code<br>  echo 'hello world!';<br>?&gt;  // ASP code <br>  response.write("Hello World!")<br>%&gt;<!--&nbsp;Comments&nbsp;--><br>Hello WorldOutside HTML<br></body><br><br><br># html node #2<br><head></head><br><?php &nbsp;echo&nbsp;'<title>title'; ?&gt;  // JSTE code <br>  alert('Hello World');<br>#&gt;<br><title></title><br><br><br><br># html node #3<br><title></title><br><br><br># html node #4<br><body><br><?php <br>  // PHP code<br>  echo 'hello world!';<br>?&gt;  // ASP code <br>  response.write("Hello World!")<br>%&gt;<!--&nbsp;Comments&nbsp;--><br>Hello WorldOutside HTML<br></body></blockquote></div>    </div>   </div>   </div></div>
    *
     * Checks if a node is part of a HTML document
     * @link https://php.net/manual/zh/tidynode.ishtml.php
     * @return bool <b>TRUE</b> if the node is part of a HTML document, <b>FALSE</b> otherwise.
     * @since 5.0.1
     
*/
    public function isHtml(): bool {}

/**
* <div id="tidynode.istext" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidyNode::isText</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">tidyNode::isText</span> — <span class="dc-title">Checks if a node represents text (no markup)</span></p> </div> <div class="refsect1 description" id="refsect1-tidynode.istext-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidyNode::isText</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Tells if the node represents a text (without any markup).  </p> </div> <div class="refsect1 parameters" id="refsect1-tidynode.istext-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div>  <div class="refsect1 returnvalues" id="refsect1-tidynode.istext-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the node represent a text, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 examples" id="refsect1-tidynode.istext-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4082">    <p><strong>示例 #1 Extract text from a mixed HTML document</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;html&gt;&lt;head&gt;<br>&lt;?php echo '&lt;title&gt;title&lt;/title&gt;'; ?&gt;<br>&lt;# <br>  // JSTE code <br>  alert('Hello World'); <br>#&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>  // PHP code<br>  echo 'hello world!';<br>?&gt;<br><br>&lt;%<br>  // ASP code <br>  response.write("Hello World!")<br>%&gt;<br><br>&lt;!-- Comments --&gt;<br>Hello World<br>&lt;/body&gt;&lt;/html&gt;<br>Outside HTML<br></span><span style="color: #007700">HTML;<br><br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$num </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">());<br><br>function </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$node</span><span style="color: #007700">) {<br><br>    </span><span style="color: #FF8000">// check if the current node is of requested type<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">isText</span><span style="color: #007700">()) {<br>        echo </span><span style="color: #DD0000">"\n\n# text node #" </span><span style="color: #007700">. ++</span><span style="color: #9876AA">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">'num'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br>    }<br><br>    </span><span style="color: #FF8000">// check if the current node has childrens<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">hasChildren</span><span style="color: #007700">()) {<br>        foreach(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">child </span><span style="color: #007700">as </span><span style="color: #9876AA">$child</span><span style="color: #007700">) {<br>            </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$child</span><span style="color: #007700">);<br>        }<br>    }<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"># text node #1<br>Hello World<br><br># text node #2<br>Outside HTML</blockquote></div>    </div>   </div>   </div></div>
    *
     * Checks if a node represents text (no markup)
     * @link https://php.net/manual/zh/tidynode.istext.php
     * @return bool <b>TRUE</b> if the node represent a text, <b>FALSE</b> otherwise.
     * @since 5.0.1
     
*/
    public function isText(): bool {}

/**
* <div id="tidynode.isjste" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidyNode::isJste</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">tidyNode::isJste</span> — <span class="dc-title">Checks if this node is JSTE</span></p> </div> <div class="refsect1 description" id="refsect1-tidynode.isjste-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidyNode::isJste</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Tells if the node is JSTE.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidynode.isjste-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div>  <div class="refsect1 returnvalues" id="refsect1-tidynode.isjste-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the node is JSTE, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 examples" id="refsect1-tidynode.isjste-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4080">    <p><strong>示例 #1 Extract JSTE code from a mixed HTML document</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;html&gt;&lt;head&gt;<br>&lt;?php echo '&lt;title&gt;title&lt;/title&gt;'; ?&gt;<br>&lt;# <br>  // JSTE code <br>  alert('Hello World'); <br>#&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>  // PHP code<br>  echo 'hello world!';<br>?&gt;<br><br>&lt;%<br>  // ASP code <br>  response.write("Hello World!")<br>%&gt;<br><br>&lt;!-- Comments --&gt;<br>Hello World<br>&lt;/body&gt;&lt;/html&gt;<br>Outside HTML<br></span><span style="color: #007700">HTML;<br><br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$num </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">());<br><br>function </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$node</span><span style="color: #007700">) {<br><br>    </span><span style="color: #FF8000">// check if the current node is of requested type<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">isJste</span><span style="color: #007700">()) {<br>        echo </span><span style="color: #DD0000">"\n\n# jste node #" </span><span style="color: #007700">. ++</span><span style="color: #9876AA">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">'num'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br>    }<br><br>    </span><span style="color: #FF8000">// check if the current node has childrens<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">hasChildren</span><span style="color: #007700">()) {<br>        foreach(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">child </span><span style="color: #007700">as </span><span style="color: #9876AA">$child</span><span style="color: #007700">) {<br>            </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$child</span><span style="color: #007700">);<br>        }<br>    }<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"># jste node #1<br>  // JSTE code <br>  alert('Hello World'); <br>#&gt;</blockquote></div>    </div>   </div>   </div></div>
    *
     * Checks if this node is JSTE
     * @link https://php.net/manual/zh/tidynode.isjste.php
     * @return bool <b>TRUE</b> if the node is JSTE, <b>FALSE</b> otherwise.
     * @since 5.0.1
     
*/
    public function isJste(): bool {}

/**
* <div id="tidynode.isasp" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidyNode::isAsp</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">tidyNode::isAsp</span> — <span class="dc-title">Checks if this node is ASP</span></p> </div> <div class="refsect1 description" id="refsect1-tidynode.isasp-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidyNode::isAsp</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Tells whether the current node is ASP.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidynode.isasp-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div>  <div class="refsect1 returnvalues" id="refsect1-tidynode.isasp-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the node is ASP, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 examples" id="refsect1-tidynode.isasp-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4077">    <p><strong>示例 #1 Extract ASP code from a mixed HTML document</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;html&gt;&lt;head&gt;<br>&lt;?php echo '&lt;title&gt;title&lt;/title&gt;'; ?&gt;<br>&lt;# <br>  // JSTE code <br>  alert('Hello World'); <br>#&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>  // PHP code<br>  echo 'hello world!';<br>?&gt;<br><br>&lt;%<br>  // ASP code <br>  response.write("Hello World!")<br>%&gt;<br><br>&lt;!-- Comments --&gt;<br>Hello World<br>&lt;/body&gt;&lt;/html&gt;<br>Outside HTML<br></span><span style="color: #007700">HTML;<br><br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$num </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">());<br><br>function </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$node</span><span style="color: #007700">) {<br><br>    </span><span style="color: #FF8000">// check if the current node is of requested type<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">isAsp</span><span style="color: #007700">()) {<br>        echo </span><span style="color: #DD0000">"\n\n# asp node #" </span><span style="color: #007700">. ++</span><span style="color: #9876AA">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">'num'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br>    }<br><br>    </span><span style="color: #FF8000">// check if the current node has childrens<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">hasChildren</span><span style="color: #007700">()) {<br>        foreach(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">child </span><span style="color: #007700">as </span><span style="color: #9876AA">$child</span><span style="color: #007700">) {<br>            </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$child</span><span style="color: #007700">);<br>        }<br>    }<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"># asp node #1<br>  // ASP code <br>  response.write("Hello World!")<br>%&gt;</blockquote></div>    </div>   </div>   </div></div>
    *
     * Checks if this node is ASP
     * @link https://php.net/manual/zh/tidynode.isasp.php
     * @return bool <b>TRUE</b> if the node is ASP, <b>FALSE</b> otherwise.
     * @since 5.0.1
     
*/
    public function isAsp(): bool {}

/**
* <div id="tidynode.isphp" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidyNode::isPhp</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">tidyNode::isPhp</span> — <span class="dc-title">Checks if a node is PHP</span></p> </div> <div class="refsect1 description" id="refsect1-tidynode.isphp-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidyNode::isPhp</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Tells if the node is PHP.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidynode.isphp-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div>  <div class="refsect1 returnvalues" id="refsect1-tidynode.isphp-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the current node is PHP code, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 examples" id="refsect1-tidynode.isphp-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4081">    <p><strong>示例 #1 Extract PHP code from a mixed HTML document</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;html&gt;&lt;head&gt;<br>&lt;?php echo '&lt;title&gt;title&lt;/title&gt;'; ?&gt;<br>&lt;# <br>  // JSTE code <br>  alert('Hello World'); <br>#&gt;<br>&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;?php<br>  // PHP code<br>  echo 'hello world!';<br>?&gt;<br><br>&lt;%<br>  // ASP code <br>  response.write("Hello World!")<br>%&gt;<br><br>&lt;!-- Comments --&gt;<br>Hello World<br>&lt;/body&gt;&lt;/html&gt;<br>Outside HTML<br></span><span style="color: #007700">HTML;<br><br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$num </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">());<br><br>function </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$node</span><span style="color: #007700">) {<br><br>    </span><span style="color: #FF8000">// check if the current node is of requested type<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">isPhp</span><span style="color: #007700">()) {<br>        echo </span><span style="color: #DD0000">"\n\n# php node #" </span><span style="color: #007700">. ++</span><span style="color: #9876AA">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">'num'</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>        echo </span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br>    }<br><br>    </span><span style="color: #FF8000">// check if the current node has childrens<br>    </span><span style="color: #007700">if(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">hasChildren</span><span style="color: #007700">()) {<br>        foreach(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">child </span><span style="color: #007700">as </span><span style="color: #9876AA">$child</span><span style="color: #007700">) {<br>            </span><span style="color: #9876AA">get_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">$child</span><span style="color: #007700">);<br>        }<br>    }<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"># php node #1<br><?php &nbsp;echo&nbsp;'<title>title'; ?&gt;<br><br># php node #2<br><?php <br>  // PHP code<br>  echo 'hello world!';<br>?&gt;</blockquote></div>    </div>   </div>   </div></div>
    *
     * Checks if a node is PHP
     * @link https://php.net/manual/zh/tidynode.isphp.php
     * @return bool <b>TRUE</b> if the current node is PHP code, <b>FALSE</b> otherwise.
     * @since 5.0.1
     
*/
    public function isPhp(): bool {}

/**
* <div id="tidynode.getparent" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidyNode::getParent</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.2, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">tidyNode::getParent</span> — <span class="dc-title">Returns the parent node of the current node</span></p> </div> <div class="refsect1 description" id="refsect1-tidynode.getparent-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidyNode::getParent</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">   Returns the parent node of the current node.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidynode.getparent-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div>  <div class="refsect1 returnvalues" id="refsect1-tidynode.getparent-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span> if the node has a parent, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>   otherwise.  </p> </div> <div class="refsect1 examples" id="refsect1-tidynode.getparent-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4073">    <p><strong>示例 #1 <span class="function"><strong>tidyNode::getParent()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;html&gt;&lt;head&gt;<br>&lt;?php echo '&lt;title&gt;title&lt;/title&gt;'; ?&gt;<br>&lt;# <br>  // JSTE code <br>  alert('Hello World'); <br>#&gt;<br> &lt;/head&gt;<br> &lt;body&gt;<br> Hello World<br> &lt;/body&gt;<br>&lt;/html&gt;<br><br></span><span style="color: #007700">HTML;<br><br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$num </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$node </span><span style="color: #007700">= </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">child</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]-&gt;</span><span style="color: #9876AA">child</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">];<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getParent</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">name</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">string(4) "head"</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidynode.getparent-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidyNode::getPreviousSibling()} - Returns the previous sibling node of the current node</span></li>   <li><span class="function">{@link tidyNode::getNextSibling()} - Returns the next sibling node of the current node</span></li>  </ul> </div></div>
    *
     * Returns the parent node of the current node
     * @link https://php.net/manual/zh/tidynode.getparent.php
     * @return tidyNode|null a tidyNode if the node has a parent, or <b>NULL</b>
     * otherwise.
     * @since 5.2.2
     
*/
    public function getParent(): ?tidyNode {}

    private function __construct() {}
}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Returns the value of the specified configuration option for the tidy document
 * @link https://php.net/manual/en/tidy.getopt.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @param string $option <p>
 * You will find a list with each configuration option and their types
 * at: http://tidy.sourceforge.net/docs/quickref.html.
 * </p>
 * @return string|int|bool the value of the specified <i>option</i>.
 * The return type depends on the type of the specified one.
 */
function tidy_getopt(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy, string $option): string|int|bool {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Parse a document stored in a string
 * @link https://php.net/manual/en/tidy.parsestring.php
 * @param string $string <p>
 * The data to be parsed.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
 * </p>
 * @param string|null $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @return tidy|false a new <b>tidy</b> instance.
 */
function tidy_parse_string(string $string, array|string|null $config = null, null|string $encoding = null): tidy|false {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Parse markup in file or URI
 * @link https://php.net/manual/en/tidy.parsefile.php
 * @param string $filename <p>
 * If the <i>filename</i> parameter is given, this function
 * will also read that file and initialize the object with the file,
 * acting like <b>tidy_parse_file</b>.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * For an explanation about each option, see
 * http://tidy.sourceforge.net/docs/quickref.html.
 * </p>
 * @param string|null $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @param bool $useIncludePath [optional] <p>
 * Search for the file in the include_path.
 * </p>
 * @return tidy|false a new <b>tidy</b> instance.
 */
function tidy_parse_file(string $filename, array|string|null $config = null, null|string $encoding = null, bool $useIncludePath = false): tidy|false {}

/**
* <div id="function.tidy-get-output" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy_get_output</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_get_output</span> — <span class="dc-title">Return a string representing the parsed tidy markup</span></p> </div> <div class="refsect1 description" id="refsect1-function.tidy-get-output-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>tidy_get_output</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Gets a string with the repaired html.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.tidy-get-output-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.tidy-get-output-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the parsed tidy markup.  </p> </div> <div class="refsect1 examples" id="refsect1-function.tidy-get-output-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4087">    <p><strong>示例 #1 <span class="function"><strong>tidy_get_output()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;paragraph&lt;/i&gt;'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">cleanRepair</span><span style="color: #007700">();<br><br>echo </span><span style="color: #9876AA">tidy_get_output</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">nbsp;html PUBLIC "-//W3C//DTD HTML 3.2//EN"&gt;<br><br><head></head><br><title></title><br><br><body><br><p>paragraph</p><br></body><br></blockquote></div>    </div>   </div>   </div></div>
*
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Return a string representing the parsed tidy markup
 * @link https://php.net/manual/zh/function.tidy-get-output.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return string the parsed tidy markup.
 
*/
function tidy_get_output(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): string {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Return warnings and errors which occurred parsing the specified document
 * @link https://php.net/manual/en/tidy.props.errorbuffer.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return string|false the error buffer as a string.
 */
function tidy_get_error_buffer(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): string|false {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Execute configured cleanup and repair operations on parsed markup
 * @link https://php.net/manual/en/tidy.cleanrepair.php
 * @param tidy $tidy The Tidy object.
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function tidy_clean_repair(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): bool {}

/**
 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
 * Repair a string using an optionally provided configuration file
 * @link https://php.net/manual/en/tidy.repairstring.php
 * @param string $string <p>
 * The data to be repaired.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * Check http://tidy.sourceforge.net/docs/quickref.html for
 * an explanation about each option.
 * </p>
 * @param string|null $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @return string|false the repaired string.
 */
function tidy_repair_string(string $string, array|string|null $config = null, null|string $encoding = null): string|false {}

/**
 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
 * Repair a file and return it as a string
 * @link https://php.net/manual/en/tidy.repairfile.php
 * @param string $filename <p>
 * The file to be repaired.
 * </p>
 * @param mixed $config [optional] <p>
 * The config <i>config</i> can be passed either as an
 * array or as a string. If a string is passed, it is interpreted as the
 * name of the configuration file, otherwise, it is interpreted as the
 * options themselves.
 * </p>
 * <p>
 * Check http://tidy.sourceforge.net/docs/quickref.html for an
 * explanation about each option.
 * </p>
 * @param string|null $encoding [optional] <p>
 * The <i>encoding</i> parameter sets the encoding for
 * input/output documents. The possible values for encoding are:
 * ascii, latin0, latin1,
 * raw, utf8, iso2022,
 * mac, win1252, ibm858,
 * utf16, utf16le, utf16be,
 * big5, and shiftjis.
 * </p>
 * @param bool $useIncludePath [optional] <p>
 * Search for the file in the include_path.
 * </p>
 * @return string|false the repaired contents as a string.
 */
function tidy_repair_file(string $filename, array|string|null $config = null, null|string $encoding = null, bool $useIncludePath = false): string|false {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Run configured diagnostics on parsed and repaired markup
 * @link https://php.net/manual/en/tidy.diagnose.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function tidy_diagnose(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): bool {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Get release date (version) for Tidy library
 * @link https://php.net/manual/en/tidy.getrelease.php
 * @return string a string with the release date of the Tidy library.
 */
function tidy_get_release(): string {}

/**
 * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
 * Get current Tidy configuration
 * @link https://php.net/manual/en/tidy.getconfig.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return array an array of configuration options.
 * <p>
 * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
 * </p>
 */
function tidy_get_config(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): array {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Get status of specified document
 * @link https://php.net/manual/en/tidy.getstatus.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int 0 if no error/warning was raised, 1 for warnings or accessibility
 * errors, or 2 for errors.
 */
function tidy_get_status(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): int {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Get the Detected HTML version for the specified document
 * @link https://php.net/manual/en/tidy.gethtmlver.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int the detected HTML version.
 * <p>
 * This function is not yet implemented in the Tidylib itself, so it always
 * return 0.
 * </p>
 */
function tidy_get_html_ver(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): int {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Indicates if the document is a XHTML document
 * @link https://php.net/manual/en/tidy.isxhtml.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return bool This function returns <b>TRUE</b> if the specified tidy
 * <i>object</i> is a XHTML document, or <b>FALSE</b> otherwise.
 * </p>
 * <p>
 * This function is not yet implemented in the Tidylib itself, so it always
 * return <b>FALSE</b>.
 */
function tidy_is_xhtml(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): bool {}

/**
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Indicates if the document is a generic (non HTML/XHTML) XML document
 * @link https://php.net/manual/en/tidy.isxml.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return bool This function returns <b>TRUE</b> if the specified tidy
 * <i>object</i> is a generic XML document (non HTML/XHTML),
 * or <b>FALSE</b> otherwise.
 * </p>
 * <p>
 * This function is not yet implemented in the Tidylib itself, so it always
 * return <b>FALSE</b>.
 */
function tidy_is_xml(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): bool {}

/**
* <div id="function.tidy-error-count" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy_error_count</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_error_count</span> — <span class="dc-title">Returns the Number of Tidy errors encountered for specified document</span></p> </div> <div class="refsect1 description" id="refsect1-function.tidy-error-count-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>tidy_error_count</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Returns the number of Tidy errors encountered for the specified document.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.tidy-error-count-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.tidy-error-count-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of errors.  </p> </div> <div class="refsect1 examples" id="refsect1-function.tidy-error-count-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4086">    <p><strong>示例 #1 <span class="function"><strong>tidy_error_count()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;test&lt;/i&gt;<br>&lt;bogustag&gt;bogus&lt;/bogustag&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">tidy_error_count</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//1<br><br></span><span style="color: #007700">echo </span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">errorBuffer</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">1<br>line 1 column 1 - Warning: missing  declaration<br>line 1 column 8 - Warning: discarding unexpected <br>line 2 column 1 - Error: <bogustag> is not recognized!<br>line 2 column 1 - Warning: discarding unexpected <bogustag><br>line 2 column 16 - Warning: discarding unexpected </bogustag><br>line 1 column 1 - Warning: inserting missing 'title' element</bogustag></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.tidy-error-count-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy_access_count()} - Returns the Number of Tidy accessibility warnings encountered for specified document</span></li>   <li><span class="function">{@link tidy_warning_count()} - Returns the Number of Tidy warnings encountered for specified document</span></li>  </ul> </div></div>
*
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Returns the Number of Tidy errors encountered for specified document
 * @link https://php.net/manual/zh/function.tidy-error-count.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int the number of errors.
 
*/
function tidy_error_count(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): int {}

/**
* <div id="function.tidy-warning-count" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy_warning_count</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_warning_count</span> — <span class="dc-title">Returns the Number of Tidy warnings encountered for specified document</span></p> </div> <div class="refsect1 description" id="refsect1-function.tidy-warning-count-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>tidy_warning_count</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Returns the number of Tidy warnings encountered for the specified document.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.tidy-warning-count-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.tidy-warning-count-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of warnings.  </p> </div> <div class="refsect1 examples" id="refsect1-function.tidy-warning-count-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4088">    <p><strong>示例 #1 <span class="function"><strong>tidy_warning_count()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;test&lt;/i&gt;<br>&lt;bogustag&gt;bogus&lt;/bogustag&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">tidy_error_count</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//1<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">tidy_warning_count</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//5<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.tidy-warning-count-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link tidy_error_count()} - Returns the Number of Tidy errors encountered for specified document</span></li>    <li><span class="function">{@link tidy_access_count()} - Returns the Number of Tidy accessibility warnings encountered for specified document</span></li>   </ul>   </div></div>
*
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Returns the Number of Tidy warnings encountered for specified document
 * @link https://php.net/manual/zh/function.tidy-warning-count.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int the number of warnings.
 
*/
function tidy_warning_count(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): int {}

/**
* <div id="function.tidy-access-count" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy_access_count</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_access_count</span> — <span class="dc-title">Returns the Number of Tidy accessibility warnings encountered for specified document</span></p> </div> <div class="refsect1 description" id="refsect1-function.tidy-access-count-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>tidy_access_count</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>tidy_access_count()</strong></span> returns the number of   accessibility warnings found for the specified document.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.tidy-access-count-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.tidy-access-count-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of warnings.  </p> </div> <div class="refsect1 examples" id="refsect1-function.tidy-access-count-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4084">    <p><strong>示例 #1 <span class="function"><strong>tidy_access_count()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$html </span><span style="color: #007700">=</span><span style="color: #DD0000">'&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN"&gt;<br>&lt;html&gt;&lt;head&gt;&lt;title&gt;Title&lt;/title&gt;&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;p&gt;&lt;img src="img.png"&gt;&lt;/p&gt;<br><br>&lt;/body&gt;&lt;/html&gt;'</span><span style="color: #007700">;<br><br><br></span><span style="color: #FF8000">// select the accessibility check level: 1, 2 or 3<br></span><span style="color: #9876AA">$config </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'accessibility-check' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">3</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= new </span><span style="color: #9876AA">tidy</span><span style="color: #007700">();<br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">parseString</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">, </span><span style="color: #9876AA">$config</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">cleanRepair</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// Never forget to call this! <br></span><span style="color: #9876AA">$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">diagnose</span><span style="color: #007700">();<br><br>echo </span><span style="color: #9876AA">tidy_access_count</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">); </span><span style="color: #FF8000">//5<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.tidy-access-count-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    Due to the design of the TidyLib, you must call    <span class="function"><a href="https://php.net/manual/zh/tidy.diagnose.php" class="function">tidy_diagnose()</a></span> before    <span class="function"><strong>tidy_access_count()</strong></span> or it will return always    <span class="literal">0</span>. You must also need to enable the    <span class="literal">accessibility-check</span> option.   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.tidy-access-count-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link tidy_error_count()} - Returns the Number of Tidy errors encountered for specified document</span></li>    <li><span class="function">{@link tidy_warning_count()} - Returns the Number of Tidy warnings encountered for specified document</span></li>   </ul>   </div></div>
*
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Returns the Number of Tidy accessibility warnings encountered for specified document
 * @link https://php.net/manual/zh/function.tidy-access-count.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int the number of warnings.
 
*/
function tidy_access_count(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): int {}

/**
* <div id="function.tidy-config-count" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy_config_count</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_config_count</span> — <span class="dc-title">Returns the Number of Tidy configuration errors encountered for specified document</span></p> </div> <div class="refsect1 description" id="refsect1-function.tidy-config-count-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>tidy_config_count</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Returns the number of errors encountered in the configuration of the   specified tidy <span class="parameter" style="color:#3A95FF">tidy</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.tidy-config-count-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.tidy-config-count-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of errors.  </p> </div> <div class="refsect1 examples" id="refsect1-function.tidy-config-count-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4085">    <p><strong>示例 #1 <span class="function"><strong>tidy_config_count()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;test&lt;/I&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">$config </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'doctype' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'bogus'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$html</span><span style="color: #007700">, </span><span style="color: #9876AA">$config</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// This outputs 1, because 'bogus' isn't a valid doctype <br></span><span style="color: #007700">echo </span><span style="color: #9876AA">tidy_config_count</span><span style="color: #007700">(</span><span style="color: #9876AA">$tidy</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div></div>
*
 * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
 * Returns the Number of Tidy configuration errors encountered for specified document
 * @link https://php.net/manual/zh/function.tidy-config-count.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return int the number of errors.
 
*/
function tidy_config_count(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): int {}

/**
 * Returns the documentation for the given option name
 * @link https://php.net/manual/en/tidy.getoptdoc.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @param string $option <p>
 * The option name
 * </p>
 * @return string|false a string if the option exists and has documentation available, or
 * <b>FALSE</b> otherwise.
 */
function tidy_get_opt_doc(tidy $tidy, string $option): string|false {}

/**
 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
 * Returns a <b>tidyNode</b> object representing the root of the tidy parse tree
 * @link https://php.net/manual/en/tidy.root.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode|null the <b>tidyNode</b> object.
 */
function tidy_get_root(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): ?tidyNode {}

/**
 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
 * Returns a <b>tidyNode</b> object starting from the &lt;head&gt; tag of the tidy parse tree
 * @link https://php.net/manual/en/tidy.head.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode|null the <b>tidyNode</b> object.
 */
function tidy_get_head(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): ?tidyNode {}

/**
 * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
 * Returns a <b>tidyNode</b> object starting from the &lt;html&gt; tag of the tidy parse tree
 * @link https://php.net/manual/en/tidy.html.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode|null the <b>tidyNode</b> object.
 */
function tidy_get_html(#[PhpStormStubsElementAvailable(from: '8.0')] tidy $tidy): ?tidyNode {}

/**
 * (PHP 5, PECL tidy 0.5.2-1.0)<br/>
 * Returns a <b>tidyNode</b> object starting from the &lt;body&gt; tag of the tidy parse tree
 * @link https://php.net/manual/en/tidy.body.php
 * @param tidy $tidy <p>
 * The <b>Tidy</b> object.
 * </p>
 * @return tidyNode|null a <b>tidyNode</b> object starting from the
 * &lt;body&gt; tag of the tidy parse tree.
 */
function tidy_get_body(tidy $tidy): ?tidyNode {}

/**
* <div id="function.ob-tidyhandler" class="refentry"> <div class="refnamediv">  <h1 class="refname">ob_tidyhandler</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ob_tidyhandler</span> — <span class="dc-title">ob_start callback function to repair the buffer</span></p> </div> <div class="refsect1 description" id="refsect1-function.ob-tidyhandler-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ob_tidyhandler</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$input</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$mode</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Callback function for <span class="function">{@link ob_start()}</span> to repair the buffer.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ob-tidyhandler-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">input</span></dt>     <dd>      <p class="para">       The buffer.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       The buffer mode.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ob-tidyhandler-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the modified buffer.  </p> </div> <div class="refsect1 examples" id="refsect1-function.ob-tidyhandler-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4083">    <p><strong>示例 #1 <span class="function"><strong>ob_tidyhandler()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>ob_start</span><span style="color: #007700">(</span><span style="color: #DD0000">'ob_tidyhandler'</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">'&lt;p&gt;test&lt;/i&gt;'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">nbsp;html PUBLIC "-//W3C//DTD HTML 3.2//EN"&gt;<br><br><head></head><br><title></title><br><br><body><br><p>test</p><br></body><br></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.ob-tidyhandler-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ob_start()} - 打开输出控制缓冲</span></li>   </ul>   </div></div>
*
 * ob_start callback function to repair the buffer
 * @link https://php.net/manual/zh/function.ob-tidyhandler.php
 * @param string $input <p>
 * The buffer.
 * </p>
 * @param int $mode [optional] <p>
 * The buffer mode.
 * </p>
 * @return string the modified buffer.
 
*/
function ob_tidyhandler($input, $mode = null) {}

/**
* <span class="simpara">    </span>
*
 * description
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_TAG_UNKNOWN', 0);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_A', 1);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_ABBR', 2);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_ACRONYM', 3);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_ADDRESS', 4);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_ALIGN', 5);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_APPLET', 6);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_AREA', 7);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_B', 8);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_BASE', 9);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_BASEFONT', 10);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_BDO', 11);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_BGSOUND', 12);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_BIG', 13);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_BLINK', 14);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_BLOCKQUOTE', 15);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_BODY', 16);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_BR', 17);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_BUTTON', 18);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_CAPTION', 19);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_CENTER', 20);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_CITE', 21);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_CODE', 22);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_COL', 23);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_COLGROUP', 24);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_COMMENT', 25);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_DD', 26);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_DEL', 27);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_DFN', 28);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_DIR', 29);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_DIV', 30);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_DL', 31);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_DT', 32);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_EM', 33);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_EMBED', 34);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_FIELDSET', 35);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_FONT', 36);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_FORM', 37);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_FRAME', 38);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_FRAMESET', 39);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_H1', 40);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_H2', 41);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_H3', 42);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_H4', 43);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_H5', 44);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_H6', 45);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_HEAD', 46);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_HR', 47);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_HTML', 48);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_I', 49);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_IFRAME', 50);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_ILAYER', 51);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_IMG', 52);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_INPUT', 53);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_INS', 54);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_ISINDEX', 55);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_KBD', 56);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_KEYGEN', 57);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_LABEL', 58);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_LAYER', 59);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_LEGEND', 60);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_LI', 61);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_LINK', 62);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_LISTING', 63);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_MAP', 64);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_MARQUEE', 65);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_MENU', 66);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_META', 67);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_MULTICOL', 68);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_NOBR', 69);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_NOEMBED', 70);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_NOFRAMES', 71);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_NOLAYER', 72);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_NOSAVE', 73);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_NOSCRIPT', 74);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_OBJECT', 75);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_OL', 76);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_OPTGROUP', 77);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_OPTION', 78);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_P', 79);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_PARAM', 80);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_PLAINTEXT', 81);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_PRE', 82);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_Q', 83);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_RB', 84);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_RBC', 85);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_RP', 86);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_RT', 87);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_RTC', 88);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_RUBY', 89);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_S', 90);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_SAMP', 91);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_SCRIPT', 92);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_SELECT', 93);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_SERVER', 94);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_SERVLET', 95);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_SMALL', 96);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_SPACER', 97);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_SPAN', 98);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_STRIKE', 99);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_STRONG', 100);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_STYLE', 101);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_SUB', 102);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_SUP', 103);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_TABLE', 104);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_TBODY', 105);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_TD', 106);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_TEXTAREA', 107);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_TFOOT', 108);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_TH', 109);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_THEAD', 110);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_TITLE', 111);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_TR', 112);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_TT', 113);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_U', 114);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_UL', 115);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_VAR', 116);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_WBR', 117);
/**
* <span class="simpara">    </span>
*/
define('TIDY_TAG_XMP', 118);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_ARTICLE', 123);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_ASIDE', 124);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_AUDIO', 125);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_BDI', 126);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_CANVAS', 127);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_COMMAND', 128);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_DATALIST', 129);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_DETAILS', 130);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_DIALOG', 131);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_FIGCAPTION', 132);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_FIGURE', 133);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_FOOTER', 134);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_HEADER', 135);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_HGROUP', 136);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_MAIN', 137);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_MARK', 138);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_MENUITEM', 139);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_METER', 140);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_NAV', 141);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_OUTPUT', 142);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_PROGRESS', 143);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_SECTION', 144);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_SOURCE', 145);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_SUMMARY', 146);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_TEMPLATE', 147);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_TIME', 148);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_TRACK', 149);
/**
* <span class="simpara">     Added in libtidy 5.0.0. Available as of PHP 7.4.0.    </span>
*
 * @since 7.4
 
*/
define('TIDY_TAG_VIDEO', 150);

/**
* <span class="simpara">     root node    </span>
*
 * root node
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_ROOT', 0);

/**
* <span class="simpara">     doctype    </span>
*
 * doctype
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_DOCTYPE', 1);

/**
* <span class="simpara">     HTML comment    </span>
*
 * HTML comment
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_COMMENT', 2);

/**
* <span class="simpara">     Processing Instruction    </span>
*
 * Processing Instruction
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_PROCINS', 3);

/**
* <span class="simpara">     Text    </span>
*
 * Text
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_TEXT', 4);

/**
* <span class="simpara">     start tag    </span>
*
 * start tag
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_START', 5);

/**
* <span class="simpara">     end tag    </span>
*
 * end tag
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_END', 6);

/**
* <span class="simpara">     empty tag    </span>
*
 * empty tag
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_STARTEND', 7);

/**
* <span class="simpara">     CDATA    </span>
*
 * CDATA
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_CDATA', 8);

/**
* <span class="simpara">     XML section    </span>
*
 * XML section
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_SECTION', 9);

/**
* <span class="simpara">     ASP code    </span>
*
 * ASP code
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_ASP', 10);

/**
* <span class="simpara">     JSTE code    </span>
*
 * JSTE code
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_JSTE', 11);

/**
* <span class="simpara">     PHP code    </span>
*
 * PHP code
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_PHP', 12);

/**
* <span class="simpara">     XML declaration    </span>
*
 * XML declaration
 * @link https://php.net/manual/zh/tidy.constants.php
 
*/
define('TIDY_NODETYPE_XMLDECL', 13);

// End of tidy v.2.0
