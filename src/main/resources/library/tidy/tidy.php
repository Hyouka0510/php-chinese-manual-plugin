<?php

// Start of tidy v.2.0
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable as PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Internal\TentativeType;

/**
 * <div id="class.tidy" class="reference"> <h1 class="title">The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">tidy</a></span> class</h1>   <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p>   <div class="section" id="tidy.intro">   <h2 class="title">简介</h2>   <p class="para">    An HTML node in an HTML file, as detected by tidy.   </p>  </div>   <div class="section" id="tidy.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="classname">tidy</strong></strong>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://php.net/manual/zh/tidy.props.errorbuffer.php">\$<var class="varname">errorBuffer</var></a></var><span class="initializer"> = null</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766">?</span><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span><span class="type" style="color:#EAB766"></span></span>      <var class="varname"><a href="https://php.net/manual/zh/class.tidy.php#tidy.props.value">\$<var class="varname">value</var></a></var><span class="initializer"> = null</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$filename</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">\$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$useIncludePath</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.body.php" class="methodname" style="color:#CC7832">body</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.cleanrepair.php" class="methodname" style="color:#CC7832">cleanRepair</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.diagnose.php" class="methodname" style="color:#CC7832">diagnose</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.getconfig.php" class="methodname" style="color:#CC7832">getConfig</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.gethtmlver.php" class="methodname" style="color:#CC7832">getHtmlVer</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.getopt.php" class="methodname" style="color:#CC7832">getOpt</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$option</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.getoptdoc.php" class="methodname" style="color:#CC7832">getOptDoc</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$option</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.getrelease.php" class="methodname" style="color:#CC7832">getRelease</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.getstatus.php" class="methodname" style="color:#CC7832">getStatus</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.head.php" class="methodname" style="color:#CC7832">head</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.php.php" class="methodname" style="color:#CC7832">html</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.isxhtml.php" class="methodname" style="color:#CC7832">isXhtml</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.isxml.php" class="methodname" style="color:#CC7832">isXml</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.parsefile.php" class="methodname" style="color:#CC7832">parseFile</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">\$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$useIncludePath</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.parsestring.php" class="methodname" style="color:#CC7832">parseString</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$string</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">\$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.repairfile.php" class="methodname" style="color:#CC7832">repairFile</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">\$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$useIncludePath</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.repairstring.php" class="methodname" style="color:#CC7832">repairString</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$string</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">\$config</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$encoding</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/tidy.root.php" class="methodname" style="color:#CC7832">root</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>   }</div>  </div>  <div class="section" id="tidy.props">   <h2 class="title">属性</h2>   <dl>         <dt id="tidy.props.value"><var class="varname">value</var></dt>     <dd>      <p class="para">The HTML representation of the node, including the surrounding tags.</p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link tidy::body} — Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree</li><li>{@link tidy::cleanRepair} — Execute configured cleanup and repair operations on parsed markup</li><li>{@link tidy::__construct} — Constructs a new tidy object</li><li>{@link tidy::diagnose} — Run configured diagnostics on parsed and repaired markup</li><li>{@link tidy::\$errorBuffer} — Return warnings and errors which occurred parsing the specified document</li><li>{@link tidy::getConfig} — Get current Tidy configuration</li><li>{@link tidy::getHtmlVer} — Get the Detected HTML version for the specified document</li><li>{@link tidy::getOpt} — Returns the value of the specified configuration option for the tidy document</li><li>{@link tidy::getOptDoc} — Returns the documentation for the given option name</li><li>{@link tidy::getRelease} — Get release date (version) for Tidy library</li><li>{@link tidy::getStatus} — Get status of specified document</li><li>{@link tidy::head} — Returns a tidyNode object starting from the &lt;head&gt; tag of the tidy parse tree</li><li>{@link tidy::html} — Returns a tidyNode object starting from the &lt;html&gt; tag of the tidy parse tree</li><li>{@link tidy::isXhtml} — Indicates if the document is a XHTML document</li><li>{@link tidy::isXml} — Indicates if the document is a generic (non HTML/XHTML) XML document</li><li>{@link tidy::parseFile} — Parse markup in file or URI</li><li>{@link tidy::parseString} — Parse a document stored in a string</li><li>{@link tidy::repairFile} — Repair a file and return it as a string</li><li>{@link tidy::repairString} — Repair a string using an optionally provided configuration file</li><li>{@link tidy::root} — Returns a tidyNode object representing the root of the tidy parse tree</li></ul></div>
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
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Returns the value of the specified configuration option for the tidy document
     * @link https://php.net/manual/en/tidy.getopt.php
     * @param string $option <p>
     * You will find a list with each configuration option and their types
     * at: http://tidy.sourceforge.net/docs/quickref.html.
     * </p>
     * @return string|int|bool the value of the specified <i>option</i>.
     * The return type depends on the type of the specified one.
     */
    #[TentativeType]
    public function getOpt(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $option): string|int|bool {}

    /**
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Execute configured cleanup and repair operations on parsed markup
     * @link https://php.net/manual/en/tidy.cleanrepair.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function cleanRepair(): bool {}

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
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function parseFile(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $filename,
        #[LanguageLevelTypeAware(['8.0' => 'array|string|null'], default: '')] $config = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $encoding = null,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $useIncludePath = false
    ): bool {}

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
     * @return bool a new <b>tidy</b> instance.
     */
    #[TentativeType]
    public function parseString(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $string,
        #[LanguageLevelTypeAware(['8.0' => 'array|string|null'], default: '')] $config = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $encoding = null
    ): bool {}

    /**
     * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
     * Repair a string using an optionally provided configuration file
     * @link https://php.net/manual/en/tidy.repairstring.php
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
     */
    #[TentativeType]
    public static function repairString(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $string,
        #[LanguageLevelTypeAware(['8.0' => 'array|string|null'], default: '')] $config = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $encoding = null
    ): string|false {}

    /**
     * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
     * Repair a file and return it as a string
     * @link https://php.net/manual/en/tidy.repairfile.php
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
     */
    #[TentativeType]
    public static function repairFile(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $filename,
        #[LanguageLevelTypeAware(['8.0' => 'array|string|null'], default: '')] $config = null,
        #[LanguageLevelTypeAware(['8.0' => 'string|null'], default: '')] $encoding = null,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $useIncludePath = false
    ): string|false {}

    /**
 * <div id="tidy.diagnose" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::diagnose</h1>  <h1 class="refname">tidy_diagnose</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy::diagnose</span> -- <span class="refname">tidy_diagnose</span> — <span class="dc-title">Run configured diagnostics on parsed and repaired markup</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.diagnose-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::diagnose</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_diagnose</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">\$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Runs diagnostic tests on the given tidy <span class="parameter" style="color:#3A95FF">tidy</span>,   adding some more information about the document in the error buffer.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.diagnose-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.diagnose-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.diagnose-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4059">    <p><strong>示例 #1 <span class="function"><strong>tidy::diagnose()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"<br>"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;<br><br>&lt;p&gt;paragraph&lt;/p&gt;<br></span><span style="color: #007700">HTML;<br><br></span><span style="color: #9876AA">\$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">\$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">cleanRepair</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// note the difference between the two outputs<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">errorBuffer </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">diagnose</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">errorBuffer</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">line&nbsp;4&nbsp;column&nbsp;1&nbsp;-&nbsp;Warning:&nbsp;<p>&nbsp;isn't&nbsp;allowed&nbsp;in&nbsp;</p><head></head><p>&nbsp;elements<br>line&nbsp;4&nbsp;column&nbsp;1&nbsp;-&nbsp;Warning:&nbsp;inserting&nbsp;missing&nbsp;'title'&nbsp;element<br>line&nbsp;4&nbsp;column&nbsp;1&nbsp;-&nbsp;Warning:&nbsp;</p><p>&nbsp;isn't&nbsp;allowed&nbsp;in&nbsp;</p><head></head><p>&nbsp;elements<br>line&nbsp;4&nbsp;column&nbsp;1&nbsp;-&nbsp;Warning:&nbsp;inserting&nbsp;missing&nbsp;'title'&nbsp;element<br>Info:&nbsp;Doctype&nbsp;given&nbsp;is&nbsp;"-//W3C//DTD&nbsp;XHTML&nbsp;1.0&nbsp;Strict//EN"<br>Info:&nbsp;Document&nbsp;content&nbsp;looks&nbsp;like&nbsp;XHTML&nbsp;1.0&nbsp;Strict<br>2&nbsp;warnings,&nbsp;0&nbsp;errors&nbsp;were&nbsp;found!</p></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.diagnose-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function"><strong>tidy::errorBuffer()</strong></span></li>  </ul> </div></div>
 * 
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Run configured diagnostics on parsed and repaired markup
     * @link https://php.net/manual/zh/tidy.diagnose.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function diagnose(): bool {}

    /**
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Get release date (version) for Tidy library
     * @link https://php.net/manual/en/tidy.getrelease.php
     * @return string a string with the release date of the Tidy library.
     */
    #[TentativeType]
    public function getRelease(): string {}

    /**
     * (PHP 5, PECL tidy &gt;= 0.7.0)<br/>
     * Get current Tidy configuration
     * @link https://php.net/manual/en/tidy.getconfig.php
     * @return array an array of configuration options.
     * </p>
     * <p>
     * For an explanation about each option, visit http://tidy.sourceforge.net/docs/quickref.html.
     */
    #[TentativeType]
    public function getConfig(): array {}

    /**
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Get status of specified document
     * @link https://php.net/manual/en/tidy.getstatus.php
     * @return int 0 if no error/warning was raised, 1 for warnings or accessibility
     * errors, or 2 for errors.
     */
    #[TentativeType]
    public function getStatus(): int {}

    /**
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Get the Detected HTML version for the specified document
     * @link https://php.net/manual/en/tidy.gethtmlver.php
     * @return int the detected HTML version.
     * </p>
     * <p>
     * This function is not yet implemented in the Tidylib itself, so it always
     * return 0.
     */
    #[TentativeType]
    public function getHtmlVer(): int {}

    /**
     * Returns the documentation for the given option name
     * @link https://php.net/manual/en/tidy.getoptdoc.php
     * @param string $option <p>
     * The option name
     * </p>
     * @return string|false a string if the option exists and has documentation available, or
     * <b>FALSE</b> otherwise.
     */
    #[TentativeType]
    public function getOptDoc(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $option): string|false {}

    /**
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Indicates if the document is a XHTML document
     * @link https://php.net/manual/en/tidy.isxhtml.php
     * @return bool This function returns <b>TRUE</b> if the specified tidy
     * <i>object</i> is a XHTML document, or <b>FALSE</b> otherwise.
     * </p>
     * <p>
     * This function is not yet implemented in the Tidylib itself, so it always
     * return <b>FALSE</b>.
     */
    #[TentativeType]
    public function isXhtml(): bool {}

    /**
     * (PHP 5, PECL tidy &gt;= 0.5.2)<br/>
     * Indicates if the document is a generic (non HTML/XHTML) XML document
     * @link https://php.net/manual/en/tidy.isxml.php
     * @return bool This function returns <b>TRUE</b> if the specified tidy
     * <i>object</i> is a generic XML document (non HTML/XHTML),
     * or <b>FALSE</b> otherwise.
     * </p>
     * <p>
     * This function is not yet implemented in the Tidylib itself, so it always
     * return <b>FALSE</b>.
     */
    #[TentativeType]
    public function isXml(): bool {}

    /**
 * <div id="tidy.root" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::root</h1>  <h1 class="refname">tidy_get_root</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy 0.5.2-1.0.0)</p><p class="refpurpose"><span class="refname">tidy::root</span> -- <span class="refname">tidy_get_root</span> — <span class="dc-title">Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object representing the root of the tidy parse tree</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.root-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::root</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_root</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">\$tidy</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">   Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object representing the   root of the tidy parse tree.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.root-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.root-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object.  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.root-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4071">    <p><strong>示例 #1 <span class="function"><strong>tidy::root()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$html </span><span style="color: #007700">= &lt;&lt;&lt; HTML<br></span><span style="color: #DD0000">&lt;html&gt;&lt;body&gt;<br><br>&lt;p&gt;paragraph&lt;/p&gt;<br>&lt;br/&gt;<br><br>&lt;/body&gt;&lt;/html&gt;<br></span><span style="color: #007700">HTML;<br><br></span><span style="color: #9876AA">\$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">\$html</span><span style="color: #007700">);<br></span><span style="color: #9876AA">dump_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">root</span><span style="color: #007700">(), </span><span style="color: #9876AA">1</span><span style="color: #007700">);<br><br><br>function </span><span style="color: #9876AA">dump_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">\$node</span><span style="color: #007700">, </span><span style="color: #9876AA">\$indent</span><span style="color: #007700">) {<br><br>    if(</span><span style="color: #9876AA">\$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">hasChildren</span><span style="color: #007700">()) {<br>        foreach(</span><span style="color: #9876AA">\$node</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">child </span><span style="color: #007700">as </span><span style="color: #9876AA">\$child</span><span style="color: #007700">) {<br>            echo </span><span style="color: #9876AA">str_repeat</span><span style="color: #007700">(</span><span style="color: #DD0000">'.'</span><span style="color: #007700">, </span><span style="color: #9876AA">\$indent</span><span style="color: #007700">*</span><span style="color: #9876AA">2</span><span style="color: #007700">) . (</span><span style="color: #9876AA">\$child</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">name </span><span style="color: #007700">? </span><span style="color: #9876AA">\$child</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">name </span><span style="color: #007700">: </span><span style="color: #DD0000">'"'</span><span style="color: #007700">.</span><span style="color: #9876AA">\$child</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">.</span><span style="color: #DD0000">'"'</span><span style="color: #007700">). </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br>            </span><span style="color: #9876AA">dump_nodes</span><span style="color: #007700">(</span><span style="color: #9876AA">\$child</span><span style="color: #007700">, </span><span style="color: #9876AA">\$indent</span><span style="color: #007700">+</span><span style="color: #9876AA">1</span><span style="color: #007700">);<br>        }<br>    }<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">..html<br>....head<br>......title<br>....body<br>......p<br>........"paragraph"<br>......br</blockquote></div>    </div>   </div>   </div></div>
 * 
     * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
     * Returns a <b>tidyNode</b> object representing the root of the tidy parse tree
     * @link https://php.net/manual/zh/tidy.root.php
     * @return tidyNode|null the <b>tidyNode</b> object.
     */
    #[TentativeType]
    public function root(): ?tidyNode {}

    /**
 * <div id="tidy.head" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::head</h1>  <h1 class="refname">tidy_get_head</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy 0.5.2-1.0.0)</p><p class="refpurpose"><span class="refname">tidy::head</span> -- <span class="refname">tidy_get_head</span> — <span class="dc-title">Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from the &lt;head&gt; tag of the tidy parse tree</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.head-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::head</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_head</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">\$tidy</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">   Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from   the &lt;head&gt; tag of the tidy parse tree.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.head-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.head-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object.  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.head-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4065">    <p><strong>示例 #1 <span class="function"><strong>tidy::head()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'<br>&lt;html&gt;<br>  &lt;head&gt;<br>    &lt;title&gt;test&lt;/title&gt;<br>  &lt;/head&gt;<br>  &lt;body&gt;<br>    &lt;p&gt;paragraph&lt;/p&gt;<br>  &lt;/body&gt;<br>&lt;/html&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">\$html</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$head </span><span style="color: #007700">= </span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">head</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">\$head</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>     <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"><head></head><br><title>test</title><br></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.head-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy::body()} - Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree</span></li>   <li><span class="function">{@link tidy::html()} - Returns a tidyNode object starting from the &lt;html&gt; tag of the tidy parse tree</span></li>  </ul> </div></div>
 * 
     * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
     * Returns a <b>tidyNode</b> object starting from the &lt;head&gt; tag of the tidy parse tree
     * @link https://php.net/manual/zh/tidy.head.php
     * @return tidyNode|null the <b>tidyNode</b> object.
     */
    #[TentativeType]
    public function head(): ?tidyNode {}

    /**
 * <div id="tidy.html" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::html</h1>  <h1 class="refname">tidy_get_html</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy 0.5.2-1.0.0)</p><p class="refpurpose"><span class="refname">tidy::html</span> -- <span class="refname">tidy_get_html</span> — <span class="dc-title">Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from the &lt;html&gt; tag of the tidy parse tree</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.html-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::html</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_html</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">\$tidy</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">   Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting   from the &lt;html&gt; tag of the tidy parse tree.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.html-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.html-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object.  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.html-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4066">    <p><strong>示例 #1 <span class="function"><strong>tidy::html()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'<br>&lt;html&gt;<br>  &lt;head&gt;<br>    &lt;title&gt;test&lt;/title&gt;<br>  &lt;/head&gt;<br>  &lt;body&gt;<br>    &lt;p&gt;paragraph&lt;/p&gt;<br>  &lt;/body&gt;<br>&lt;/html&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">\$html</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$html </span><span style="color: #007700">= </span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">html</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">\$html</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"><br><head></head><br><title>test</title><br><br><body><br><p>paragraph</p><br></body><br></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.html-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy::body()} - Returns a tidyNode object starting from the &lt;body&gt; tag of the tidy parse tree</span></li>   <li><span class="function">{@link tidy::head()} - Returns a tidyNode object starting from the &lt;head&gt; tag of the tidy parse tree</span></li>  </ul> </div></div>
 * 
     * (PHP 5, PECL tidy 0.5.2-1.0.0)<br/>
     * Returns a <b>tidyNode</b> object starting from the &lt;html&gt; tag of the tidy parse tree
     * @link https://php.net/manual/zh/tidy.html.php
     * @return tidyNode|null the <b>tidyNode</b> object.
     */
    #[TentativeType]
    public function html(): ?tidyNode {}

    /**
 * <div id="tidy.body" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy::body</h1>  <h1 class="refname">tidy_get_body</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy 0.5.2-1.0)</p><p class="refpurpose"><span class="refname">tidy::body</span> -- <span class="refname">tidy_get_body</span> — <span class="dc-title">Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from the &lt;body&gt; tag of the tidy parse tree</span></p> </div> <div class="refsect1 description" id="refsect1-tidy.body-description">  <h3 class="title">说明</h3>  <p class="para">面向对象风格</p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>tidy::body</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">过程化风格</p>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>tidy_get_body</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">\$tidy</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidynode.php" class="type tidyNode" style="color:#EAB766">tidyNode</a></span></span></div>  <p class="para rdfs-comment">   Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from the    &lt;body&gt; tag of the tidy parse tree.  </p> </div> <div class="refsect1 parameters" id="refsect1-tidy.body-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-tidy.body-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a <span class="classname"><a href="https://php.net/manual/zh/class.tidynode.php" class="classname">tidyNode</a></span> object starting from the    &lt;body&gt; tag of the tidy parse tree.  </p> </div> <div class="refsect1 examples" id="refsect1-tidy.body-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4056">    <p><strong>示例 #1 <span class="function"><strong>tidy::getBody()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'<br>&lt;html&gt;<br>  &lt;head&gt;<br>    &lt;title&gt;test&lt;/title&gt;<br>  &lt;/head&gt;<br>  &lt;body&gt;<br>    &lt;p&gt;paragraph&lt;/p&gt;<br>  &lt;/body&gt;<br>&lt;/html&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">\$html</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$body </span><span style="color: #007700">= </span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">Body</span><span style="color: #007700">();<br>echo </span><span style="color: #9876AA">\$body</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"><body><br><p>paragraph</p><br></body></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-tidy.body-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy::head()} - Returns a tidyNode object starting from the &lt;head&gt; tag of the tidy parse tree</span></li>   <li><span class="function">{@link tidy::html()} - Returns a tidyNode object starting from the &lt;html&gt; tag of the tidy parse tree</span></li>  </ul> </div> </div>
 * 
     * (PHP 5, PECL tidy 0.5.2-1.0)<br/>
     * Returns a <b>tidyNode</b> object starting from the &lt;body&gt; tag of the tidy parse tree
     * @link https://php.net/manual/zh/tidy.body.php
     * @return tidyNode|null a <b>tidyNode</b> object starting from the
     * &lt;body&gt; tag of the tidy parse tree.
     */
    #[TentativeType]
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
 * An HTML node in an HTML file, as detected by tidy.
 * @link https://php.net/manual/en/class.tidynode.php
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
     * Checks if a node has children
     * @link https://php.net/manual/en/tidynode.haschildren.php
     * @return bool <b>TRUE</b> if the node has children, <b>FALSE</b> otherwise.
     * @since 5.0.1
     */
    public function hasChildren(): bool {}

    /**
     * Checks if a node has siblings
     * @link https://php.net/manual/en/tidynode.hassiblings.php
     * @return bool <b>TRUE</b> if the node has siblings, <b>FALSE</b> otherwise.
     * @since 5.0.1
     */
    public function hasSiblings(): bool {}

    /**
     * Checks if a node represents a comment
     * @link https://php.net/manual/en/tidynode.iscomment.php
     * @return bool <b>TRUE</b> if the node is a comment, <b>FALSE</b> otherwise.
     * @since 5.0.1
     */
    public function isComment(): bool {}

    /**
     * Checks if a node is part of a HTML document
     * @link https://php.net/manual/en/tidynode.ishtml.php
     * @return bool <b>TRUE</b> if the node is part of a HTML document, <b>FALSE</b> otherwise.
     * @since 5.0.1
     */
    public function isHtml(): bool {}

    /**
     * Checks if a node represents text (no markup)
     * @link https://php.net/manual/en/tidynode.istext.php
     * @return bool <b>TRUE</b> if the node represent a text, <b>FALSE</b> otherwise.
     * @since 5.0.1
     */
    public function isText(): bool {}

    /**
     * Checks if this node is JSTE
     * @link https://php.net/manual/en/tidynode.isjste.php
     * @return bool <b>TRUE</b> if the node is JSTE, <b>FALSE</b> otherwise.
     * @since 5.0.1
     */
    public function isJste(): bool {}

    /**
     * Checks if this node is ASP
     * @link https://php.net/manual/en/tidynode.isasp.php
     * @return bool <b>TRUE</b> if the node is ASP, <b>FALSE</b> otherwise.
     * @since 5.0.1
     */
    public function isAsp(): bool {}

    /**
     * Checks if a node is PHP
     * @link https://php.net/manual/en/tidynode.isphp.php
     * @return bool <b>TRUE</b> if the current node is PHP code, <b>FALSE</b> otherwise.
     * @since 5.0.1
     */
    public function isPhp(): bool {}

    /**
     * Returns the parent node of the current node
     * @link https://php.net/manual/en/tidynode.getparent.php
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
 * <div id="function.tidy-get-output" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy_get_output</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_get_output</span> — <span class="dc-title">Return a string representing the parsed tidy markup</span></p> </div> <div class="refsect1 description" id="refsect1-function.tidy-get-output-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>tidy_get_output</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">\$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Gets a string with the repaired html.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.tidy-get-output-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.tidy-get-output-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the parsed tidy markup.  </p> </div> <div class="refsect1 examples" id="refsect1-function.tidy-get-output-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4087">    <p><strong>示例 #1 <span class="function"><strong>tidy_get_output()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;paragraph&lt;/i&gt;'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">\$html</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">cleanRepair</span><span style="color: #007700">();<br><br>echo </span><span style="color: #9876AA">tidy_get_output</span><span style="color: #007700">(</span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"><br><br><head></head><br><title></title><br><br><body><br><p>paragraph</p><br></body><br></blockquote></div>    </div>   </div>   </div></div>
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
 * <div id="function.tidy-error-count" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy_error_count</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_error_count</span> — <span class="dc-title">Returns the Number of Tidy errors encountered for specified document</span></p> </div> <div class="refsect1 description" id="refsect1-function.tidy-error-count-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>tidy_error_count</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">\$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Returns the number of Tidy errors encountered for the specified document.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.tidy-error-count-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.tidy-error-count-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of errors.  </p> </div> <div class="refsect1 examples" id="refsect1-function.tidy-error-count-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4086">    <p><strong>示例 #1 <span class="function"><strong>tidy_error_count()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;test&lt;/i&gt;<br>&lt;bogustag&gt;bogus&lt;/bogustag&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">\$html</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">tidy_error_count</span><span style="color: #007700">(</span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//1<br><br></span><span style="color: #007700">echo </span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">errorBuffer</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">1<br>line&nbsp;1&nbsp;column&nbsp;1&nbsp;-&nbsp;Warning:&nbsp;missing&nbsp;&nbsp;declaration<br>line&nbsp;1&nbsp;column&nbsp;8&nbsp;-&nbsp;Warning:&nbsp;discarding&nbsp;unexpected&nbsp;<br>line&nbsp;2&nbsp;column&nbsp;1&nbsp;-&nbsp;Error:&nbsp;<bogustag>&nbsp;is&nbsp;not&nbsp;recognized!<br>line&nbsp;2&nbsp;column&nbsp;1&nbsp;-&nbsp;Warning:&nbsp;discarding&nbsp;unexpected&nbsp;<bogustag><br>line&nbsp;2&nbsp;column&nbsp;16&nbsp;-&nbsp;Warning:&nbsp;discarding&nbsp;unexpected&nbsp;</bogustag><br>line&nbsp;1&nbsp;column&nbsp;1&nbsp;-&nbsp;Warning:&nbsp;inserting&nbsp;missing&nbsp;'title'&nbsp;element</bogustag></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.tidy-error-count-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link tidy_access_count()} - Returns the Number of Tidy accessibility warnings encountered for specified document</span></li>   <li><span class="function">{@link tidy_warning_count()} - Returns the Number of Tidy warnings encountered for specified document</span></li>  </ul> </div></div>
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
 * <div id="function.tidy-warning-count" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy_warning_count</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_warning_count</span> — <span class="dc-title">Returns the Number of Tidy warnings encountered for specified document</span></p> </div> <div class="refsect1 description" id="refsect1-function.tidy-warning-count-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>tidy_warning_count</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">\$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Returns the number of Tidy warnings encountered for the specified document.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.tidy-warning-count-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.tidy-warning-count-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of warnings.  </p> </div> <div class="refsect1 examples" id="refsect1-function.tidy-warning-count-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4088">    <p><strong>示例 #1 <span class="function"><strong>tidy_warning_count()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;test&lt;/i&gt;<br>&lt;bogustag&gt;bogus&lt;/bogustag&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">\$html</span><span style="color: #007700">);<br><br>echo </span><span style="color: #9876AA">tidy_error_count</span><span style="color: #007700">(</span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//1<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">tidy_warning_count</span><span style="color: #007700">(</span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">//5<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.tidy-warning-count-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link tidy_error_count()} - Returns the Number of Tidy errors encountered for specified document</span></li>    <li><span class="function">{@link tidy_access_count()} - Returns the Number of Tidy accessibility warnings encountered for specified document</span></li>   </ul>   </div></div>
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
 * <div id="function.tidy-access-count" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy_access_count</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_access_count</span> — <span class="dc-title">Returns the Number of Tidy accessibility warnings encountered for specified document</span></p> </div> <div class="refsect1 description" id="refsect1-function.tidy-access-count-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>tidy_access_count</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">\$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>tidy_access_count()</strong></span> returns the number of   accessibility warnings found for the specified document.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.tidy-access-count-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.tidy-access-count-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of warnings.  </p> </div> <div class="refsect1 examples" id="refsect1-function.tidy-access-count-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4084">    <p><strong>示例 #1 <span class="function"><strong>tidy_access_count()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$html </span><span style="color: #007700">=</span><span style="color: #DD0000">'&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN"&gt;<br>&lt;html&gt;&lt;head&gt;&lt;title&gt;Title&lt;/title&gt;&lt;/head&gt;<br>&lt;body&gt;<br><br>&lt;p&gt;&lt;img src="img.png"&gt;&lt;/p&gt;<br><br>&lt;/body&gt;&lt;/html&gt;'</span><span style="color: #007700">;<br><br><br></span><span style="color: #FF8000">// select the accessibility check level: 1, 2 or 3<br></span><span style="color: #9876AA">\$config </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'accessibility-check' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">3</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$tidy </span><span style="color: #007700">= new </span><span style="color: #9876AA">tidy</span><span style="color: #007700">();<br></span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">parseString</span><span style="color: #007700">(</span><span style="color: #9876AA">\$html</span><span style="color: #007700">, </span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">cleanRepair</span><span style="color: #007700">();<br><br></span><span style="color: #FF8000">// Never forget to call this! <br></span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">diagnose</span><span style="color: #007700">();<br><br>echo </span><span style="color: #9876AA">tidy_access_count</span><span style="color: #007700">(</span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">); </span><span style="color: #FF8000">//5<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.tidy-access-count-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    Due to the design of the TidyLib, you must call    <span class="function"><a href="https://php.net/manual/zh/tidy.diagnose.php" class="function">tidy_diagnose()</a></span> before    <span class="function"><strong>tidy_access_count()</strong></span> or it will return always    <span class="literal">0</span>. You must also need to enable the    <span class="literal">accessibility-check</span> option.   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.tidy-access-count-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link tidy_error_count()} - Returns the Number of Tidy errors encountered for specified document</span></li>    <li><span class="function">{@link tidy_warning_count()} - Returns the Number of Tidy warnings encountered for specified document</span></li>   </ul>   </div></div>
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
 * <div id="function.tidy-config-count" class="refentry"> <div class="refnamediv">  <h1 class="refname">tidy_config_count</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8, PECL tidy &gt;= 0.5.2)</p><p class="refpurpose"><span class="refname">tidy_config_count</span> — <span class="dc-title">Returns the Number of Tidy configuration errors encountered for specified document</span></p> </div> <div class="refsect1 description" id="refsect1-function.tidy-config-count-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>tidy_config_count</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.tidy.php" class="type tidy" style="color:#EAB766">tidy</a></span> <span class="parameter" style="color:#3A95FF">\$tidy</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Returns the number of errors encountered in the configuration of the   specified tidy <span class="parameter" style="color:#3A95FF">tidy</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.tidy-config-count-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">tidy</span></dt>     <dd>      <p class="para">       The <span class="classname"><a href="https://php.net/manual/zh/class.tidy.php" class="classname">Tidy</a></span> 对象。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.tidy-config-count-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of errors.  </p> </div> <div class="refsect1 examples" id="refsect1-function.tidy-config-count-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4085">    <p><strong>示例 #1 <span class="function"><strong>tidy_config_count()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$html </span><span style="color: #007700">= </span><span style="color: #DD0000">'&lt;p&gt;test&lt;/I&gt;'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$config </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'doctype' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'bogus'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$tidy </span><span style="color: #007700">= </span><span style="color: #9876AA">tidy_parse_string</span><span style="color: #007700">(</span><span style="color: #9876AA">\$html</span><span style="color: #007700">, </span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// This outputs 1, because 'bogus' isn't a valid doctype <br></span><span style="color: #007700">echo </span><span style="color: #9876AA">tidy_config_count</span><span style="color: #007700">(</span><span style="color: #9876AA">\$tidy</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div></div>
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
 * <div id="function.ob-tidyhandler" class="refentry"> <div class="refnamediv">  <h1 class="refname">ob_tidyhandler</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">ob_tidyhandler</span> — <span class="dc-title">ob_start callback function to repair the buffer</span></p> </div> <div class="refsect1 description" id="refsect1-function.ob-tidyhandler-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>ob_tidyhandler</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$input</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$mode</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Callback function for <span class="function">{@link ob_start()}</span> to repair the buffer.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.ob-tidyhandler-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">input</span></dt>     <dd>      <p class="para">       The buffer.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       The buffer mode.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.ob-tidyhandler-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the modified buffer.  </p> </div> <div class="refsect1 examples" id="refsect1-function.ob-tidyhandler-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4083">    <p><strong>示例 #1 <span class="function"><strong>ob_tidyhandler()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>ob_start</span><span style="color: #007700">(</span><span style="color: #DD0000">'ob_tidyhandler'</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">'&lt;p&gt;test&lt;/i&gt;'</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;"><br><br><head></head><br><title></title><br><br><body><br><p>test</p><br></body><br></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.ob-tidyhandler-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link ob_start()} - 打开输出控制缓冲</span></li>   </ul>   </div></div>
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
