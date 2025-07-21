<?php

// Start of libxml v.
use JetBrains\PhpStorm\Deprecated;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Pure;

/**
* <div id="class.libxmlerror" class="reference"> <h1 class="title">The LibXMLError class</h1>   <div class="partintro"><p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p>   <div class="section" id="libxmlerror.intro">   <h2 class="title">简介</h2>   <p class="para">    Contains various information about errors thrown by libxml. The error codes    are described within the official     <a href="https://gnome.pages.gitlab.gnome.org/libxml2/devhelp/libxml2-xmlerror.html" class="link external">» xmlError API documentation</a>.   </p>  </div>   <div class="section" id="libxmlerror.synopsis">   <h2 class="title">类摘要</h2>    <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">class</span> <strong class="classname"><strong class="classname">LibXMLError</strong></strong>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.level">$<var class="varname">level</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.code">$<var class="varname">code</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.column">$<var class="varname">column</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.message">$<var class="varname">message</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.file">$<var class="varname">file</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.libxmlerror.php#libxmlerror.props.line">$<var class="varname">line</var></a></var>;</div>   }</div>  </div>   <div class="section" id="libxmlerror.props">   <h2 class="title">属性</h2>   <dl>         <dt id="libxmlerror.props.level"><var class="varname">level</var></dt>     <dd>      <p class="para">       the severity of the error (one of the following constants:       <strong><span><a href="https://php.net/manual/zh/libxml.constants.php#constant.libxml-err-warning">LIBXML_ERR_WARNING</a></span></strong>,       <strong><span><a href="https://php.net/manual/zh/libxml.constants.php#constant.libxml-err-error">LIBXML_ERR_ERROR</a></span></strong> or       <strong><span><a href="https://php.net/manual/zh/libxml.constants.php#constant.libxml-err-fatal">LIBXML_ERR_FATAL</a></span></strong>)      </p>     </dd>             <dt id="libxmlerror.props.code"><var class="varname">code</var></dt>     <dd>      <p class="para">       The error's code.      </p>     </dd>             <dt id="libxmlerror.props.column"><var class="varname">column</var></dt>     <dd>      <p class="para">       The column where the error occurred.      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        </p><p class="para">        This property isn't entirely implemented in libxml and therefore        <span class="literal">0</span> is often returned.       </p>      </blockquote>     </dd>             <dt id="libxmlerror.props.message"><var class="varname">message</var></dt>     <dd>      <p class="para">       The error message, if any.      </p>     </dd>             <dt id="libxmlerror.props.file"><var class="varname">file</var></dt>     <dd>      <p class="para">The filename, or empty if the XML was loaded from a string.</p>     </dd>             <dt id="libxmlerror.props.line"><var class="varname">line</var></dt>     <dd>      <p class="para">       The line where the error occurred.      </p>     </dd>       </dl>  </div>  </div> </div>
*
 * Contains various information about errors thrown by libxml. The error codes
 * are described within the official
 * xmlError API documentation.
 * @link https://php.net/manual/zh/class.libxmlerror.php
 
*/
class LibXMLError
{
    /**
     * <p style="margin-top:0;">
     * the severity of the error (one of the following constants:
     * <b><code>LIBXML_ERR_WARNING</code></b>,
     * <b><code>LIBXML_ERR_ERROR</code></b> or
     * <b><code>LIBXML_ERR_FATAL</code></b>)
     * </p>
     * @var int
     */
    public int $level;

    /**
     * <p style="margin-top:0;">
     * The error's code.
     * </p>
     * @var int
     */
    public int $code;

    /**
     * <p style="margin-top:0;">
     * The column where the error occurred.
     * </p>
     * <p><b>Note</b>:
     * </p><p>
     * This property isn't entirely implemented in libxml and therefore
     * 0 is often returned.
     * </p>
     * @var int
     */
    public int $column;

    /**
     * <p style="margin-top:0;">
     * The error message, if any.
     * </p>
     * @var string
     */
    public string $message;

    /**
     * <p style="margin-top:0;">The filename, or empty if the XML was loaded from a string.</p>
     * @var string
     */
    public string $file;

    /**
     * <p style="margin-top:0;">
     * The line where the error occurred.
     * </p>
     * @var int
     */
    public int $line;
}

/**
* <div id="function.libxml-set-streams-context" class="refentry"> <div class="refnamediv">  <h1 class="refname">libxml_set_streams_context</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">libxml_set_streams_context</span> — <span class="dc-title">   Set the streams context for the next libxml document load or write  </span></p> </div> <div class="refsect1 description" id="refsect1-function.libxml-set-streams-context-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>libxml_set_streams_context</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">$context</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   Sets the streams context for the next libxml document load or write.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.libxml-set-streams-context-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">context</span></dt>      <dd>       <p class="para">        The stream context resource (created with        <span class="function">{@link stream_context_create()}</span>)       </p>      </dd>        </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.libxml-set-streams-context-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 errors" id="refsect1-function.libxml-set-streams-context-errors">  <h3 class="title">错误／异常</h3>  <p class="simpara">   Throws a <span class="classname"><a href="https://php.net/manual/zh/class.typeerror.php" class="classname">TypeError</a></span> when a non-stream resource is   passed to <span class="parameter" style="color:#3A95FF">context</span>.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.libxml-set-streams-context-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.4.0</td>      <td>       <span class="function"><strong>libxml_set_streams_context()</strong></span> now throws a       <span class="exceptionname"><a href="https://php.net/manual/zh/class.typeerror.php" class="exceptionname">TypeError</a></span> when a non-stream resource is passed       to <span class="parameter" style="color:#3A95FF">context</span>, instead of throwing later when the       context is used.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.libxml-set-streams-context-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-5831">    <p><strong>示例 #1 A <span class="function"><strong>libxml_set_streams_context()</strong></span> example</strong></p>    <div class="example-contents"><div class="annotation-non-interactive phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$opts </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">'http' </span><span style="color: #007700">=&gt; [<br>        </span><span style="color: #DD0000">'user_agent' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'PHP libxml agent'</span><span style="color: #007700">,<br>    ]<br>];<br><br></span><span style="color: #9876AA">$context </span><span style="color: #007700">= </span><span style="color: #9876AA">stream_context_create</span><span style="color: #007700">(</span><span style="color: #9876AA">$opts</span><span style="color: #007700">);<br></span><span style="color: #9876AA">libxml_set_streams_context</span><span style="color: #007700">(</span><span style="color: #9876AA">$context</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// request a file through HTTP<br></span><span style="color: #9876AA">$dom </span><span style="color: #007700">= new </span><span style="color: #9876AA">DOMDocument</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$doc </span><span style="color: #007700">= </span><span style="color: #9876AA">$dom</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'http://www.example.com/file.xml'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.libxml-set-streams-context-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link stream_context_create()} - 创建资源流上下文</span></li>   </ul>   </div></div>
*
 * Set the streams context for the next libxml document load or write
 * @link https://php.net/manual/zh/function.libxml-set-streams-context.php
 * @param resource $context <p>
 * The stream context resource (created with
 * <b>stream_context_create</b>)
 * </p>
 * @return void No value is returned.
 
*/
function libxml_set_streams_context($context): void {}

/**
* <div id="function.libxml-use-internal-errors" class="refentry"> <div class="refnamediv">  <h1 class="refname">libxml_use_internal_errors</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">libxml_use_internal_errors</span> — <span class="dc-title">   Disable libxml errors and allow user to fetch error information as needed  </span></p> </div> <div class="refsect1 description" id="refsect1-function.libxml-use-internal-errors-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>libxml_use_internal_errors</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></span> <span class="parameter" style="color:#3A95FF">$use_errors</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>libxml_use_internal_errors()</strong></span> allows you to disable   standard libxml errors and enable user error handling.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.libxml-use-internal-errors-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">use_errors</span></dt>      <dd>       <p class="para">        Enable (<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>) user error handling or disable (<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>) user error handling. Disabling will also clear any existing libxml errors.       </p>      </dd>        </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.libxml-use-internal-errors-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   This function returns the previous value of   <span class="parameter" style="color:#3A95FF">use_errors</span>.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.libxml-use-internal-errors-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">use_errors</span> is nullable now. Previously, its default       was <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.libxml-use-internal-errors-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-5832">    <p><strong>示例 #1 A <span class="function"><strong>libxml_use_internal_errors()</strong></span> example</strong></p>    <div class="example-contents"><p>     This example demonstrates the basic usage of libxml errors and the value     returned by this function.    </p></div>    <div class="example-contents"><div class="annotation-interactive phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// enable user error handling<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">libxml_use_internal_errors</span><span style="color: #007700">(</span><span style="color: #9876AA">true</span><span style="color: #007700">));<br><br></span><span style="color: #FF8000">// load the document<br></span><span style="color: #9876AA">$doc </span><span style="color: #007700">= new </span><span style="color: #9876AA">DOMDocument</span><span style="color: #007700">;<br><br>if (!</span><span style="color: #9876AA">$doc</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">load</span><span style="color: #007700">(</span><span style="color: #DD0000">'file.xml'</span><span style="color: #007700">)) {<br>    foreach (</span><span style="color: #9876AA">libxml_get_errors</span><span style="color: #007700">() as </span><span style="color: #9876AA">$error</span><span style="color: #007700">) {<br>        </span><span style="color: #FF8000">// handle errors here<br>    </span><span style="color: #007700">}<br><br>    </span><span style="color: #9876AA">libxml_clear_errors</span><span style="color: #007700">();<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="annotation-interactive examplescode"><blockquote style="border:1px gray solid;">bool(false)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.libxml-use-internal-errors-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link libxml_clear_errors()} - Clear libxml error buffer</span></li>    <li><span class="function">{@link libxml_get_errors()} - Retrieve array of errors</span></li>   </ul>   </div></div>
*
 * Disable libxml errors and allow user to fetch error information as needed
 * @link https://php.net/manual/zh/function.libxml-use-internal-errors.php
 * @param bool|null $use_errors <p>
 * Enable (<b>TRUE</b>) user error handling or disable (<b>FALSE</b>) user error handling. Disabling will also clear any existing libxml errors.
 * </p>
 * @return bool This function returns the previous value of
 * <i>use_errors</i>.
 
*/
function libxml_use_internal_errors(
    #[PhpStormStubsElementAvailable(from: '5.3', to: '7.4')] bool $use_errors = false,
    #[PhpStormStubsElementAvailable(from: '8.0')] ?bool $use_errors = null
): bool {}

/**
* <div id="function.libxml-get-last-error" class="refentry"> <div class="refnamediv">  <h1 class="refname">libxml_get_last_error</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">libxml_get_last_error</span> — <span class="dc-title">   Retrieve last error from libxml  </span></p> </div> <div class="refsect1 description" id="refsect1-function.libxml-get-last-error-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>libxml_get_last_error</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.libxmlerror.php" class="type LibXMLError" style="color:#EAB766">LibXMLError</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Retrieve last error from libxml.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.libxml-get-last-error-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.libxml-get-last-error-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.libxmlerror.php" class="type LibXMLError" style="color:#EAB766">LibXMLError</a></span> object if there is any error in the   buffer, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.libxml-get-last-error-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link libxml_get_errors()} - Retrieve array of errors</span></li>    <li><span class="function">{@link libxml_clear_errors()} - Clear libxml error buffer</span></li>   </ul>   </div></div>
*
 * Retrieve last error from libxml
 * @link https://php.net/manual/zh/function.libxml-get-last-error.php
 * @return LibXMLError|false a LibXMLError object if there is any error in the
 * buffer, <b>FALSE</b> otherwise.
 
#[Pure(true)]
*/
function libxml_get_last_error(): LibXMLError|false {}

/**
* <div id="function.libxml-clear-errors" class="refentry"> <div class="refnamediv">  <h1 class="refname">libxml_clear_errors</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">libxml_clear_errors</span> — <span class="dc-title">   Clear libxml error buffer  </span></p> </div> <div class="refsect1 description" id="refsect1-function.libxml-clear-errors-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>libxml_clear_errors</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>libxml_clear_errors()</strong></span> clears the libxml error buffer.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.libxml-clear-errors-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.libxml-clear-errors-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.libxml-clear-errors-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link libxml_get_errors()} - Retrieve array of errors</span></li>    <li><span class="function">{@link libxml_get_last_error()} - Retrieve last error from libxml</span></li>   </ul>   </div></div>
*
 * Clear libxml error buffer
 * @link https://php.net/manual/zh/function.libxml-clear-errors.php
 * @return void No value is returned.
 
*/
function libxml_clear_errors(): void {}

/**
* <div id="function.libxml-get-errors" class="refentry"> <div class="refnamediv">  <h1 class="refname">libxml_get_errors</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">libxml_get_errors</span> — <span class="dc-title">   Retrieve array of errors  </span></p> </div> <div class="refsect1 description" id="refsect1-function.libxml-get-errors-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>libxml_get_errors</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Retrieve array of errors.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.libxml-get-errors-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.libxml-get-errors-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array with <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.libxmlerror.php" class="type LibXMLError" style="color:#EAB766">LibXMLError</a></span> objects if there are any   errors in the buffer, or an empty array otherwise.  </p> </div> <div class="refsect1 examples" id="refsect1-function.libxml-get-errors-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-5829">    <p><strong>示例 #1 A <span class="function"><strong>libxml_get_errors()</strong></span> example</strong></p>    <div class="example-contents"><p>     This example demonstrates how to build a simple libxml error handler.    </p></div>    <div class="example-contents"><div class="annotation-interactive phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>libxml_use_internal_errors</span><span style="color: #007700">(</span><span style="color: #9876AA">true</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$xmlstr </span><span style="color: #007700">= &lt;&lt;&lt; XML<br></span><span style="color: #DD0000">&lt;?xml version='1.0' standalone='yes'?&gt;<br>&lt;movies&gt;<br> &lt;movie&gt;<br>  &lt;titles&gt;PHP: Behind the Parser&lt;/title&gt;<br> &lt;/movie&gt;<br>&lt;/movies&gt;<br></span><span style="color: #007700">XML;<br><br></span><span style="color: #9876AA">$doc </span><span style="color: #007700">= </span><span style="color: #9876AA">simplexml_load_string</span><span style="color: #007700">(</span><span style="color: #9876AA">$xmlstr</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$xml </span><span style="color: #007700">= </span><span style="color: #9876AA">explode</span><span style="color: #007700">(</span><span style="color: #DD0000">"\n"</span><span style="color: #007700">, </span><span style="color: #9876AA">$xmlstr</span><span style="color: #007700">);<br><br>if (</span><span style="color: #9876AA">$doc </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    </span><span style="color: #9876AA">$errors </span><span style="color: #007700">= </span><span style="color: #9876AA">libxml_get_errors</span><span style="color: #007700">();<br><br>    foreach (</span><span style="color: #9876AA">$errors </span><span style="color: #007700">as </span><span style="color: #9876AA">$error</span><span style="color: #007700">) {<br>        echo </span><span style="color: #9876AA">display_xml_error</span><span style="color: #007700">(</span><span style="color: #9876AA">$error</span><span style="color: #007700">, </span><span style="color: #9876AA">$xml</span><span style="color: #007700">);<br>    }<br><br>    </span><span style="color: #9876AA">libxml_clear_errors</span><span style="color: #007700">();<br>}<br><br><br>function </span><span style="color: #9876AA">display_xml_error</span><span style="color: #007700">(</span><span style="color: #9876AA">$error</span><span style="color: #007700">, </span><span style="color: #9876AA">$xml</span><span style="color: #007700">)<br>{<br>    </span><span style="color: #9876AA">$return  </span><span style="color: #007700">= </span><span style="color: #9876AA">$xml</span><span style="color: #007700">[</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">line </span><span style="color: #007700">- </span><span style="color: #9876AA">1</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>    </span><span style="color: #9876AA">$return </span><span style="color: #007700">.= </span><span style="color: #9876AA">str_repeat</span><span style="color: #007700">(</span><span style="color: #DD0000">'-'</span><span style="color: #007700">, </span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">column</span><span style="color: #007700">) . </span><span style="color: #DD0000">"^\n"</span><span style="color: #007700">;<br><br>    switch (</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">level</span><span style="color: #007700">) {<br>        case </span><span style="color: #9876AA">LIBXML_ERR_WARNING</span><span style="color: #007700">:<br>            </span><span style="color: #9876AA">$return </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Warning </span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">code</span><span style="color: #DD0000">: "</span><span style="color: #007700">;<br>            break;<br>         case </span><span style="color: #9876AA">LIBXML_ERR_ERROR</span><span style="color: #007700">:<br>            </span><span style="color: #9876AA">$return </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Error </span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">code</span><span style="color: #DD0000">: "</span><span style="color: #007700">;<br>            break;<br>        case </span><span style="color: #9876AA">LIBXML_ERR_FATAL</span><span style="color: #007700">:<br>            </span><span style="color: #9876AA">$return </span><span style="color: #007700">.= </span><span style="color: #DD0000">"Fatal Error </span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">code</span><span style="color: #DD0000">: "</span><span style="color: #007700">;<br>            break;<br>    }<br><br>    </span><span style="color: #9876AA">$return </span><span style="color: #007700">.= </span><span style="color: #9876AA">trim</span><span style="color: #007700">(</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">message</span><span style="color: #007700">) .<br>               </span><span style="color: #DD0000">"\n  Line: </span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">line</span><span style="color: #DD0000">" </span><span style="color: #007700">.<br>               </span><span style="color: #DD0000">"\n  Column: </span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">column</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br><br>    if (</span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">file</span><span style="color: #007700">) {<br>        </span><span style="color: #9876AA">$return </span><span style="color: #007700">.= </span><span style="color: #DD0000">"\n  File: </span><span style="color: #9876AA">$error</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">file</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br>    }<br><br>    return </span><span style="color: #DD0000">"</span><span style="color: #9876AA">$return</span><span style="color: #DD0000">\n\n--------------------------------------------\n\n"</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="annotation-interactive examplescode"><blockquote style="border:1px gray solid;"><titles>PHP: Behind the Parser<br>----------------------------------------------^<br>Fatal Error 76: Opening and ending tag mismatch: titles line 4 and title<br>  Line: 4<br>  Column: 46<br><br>--------------------------------------------</titles></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.libxml-get-errors-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link libxml_get_last_error()} - Retrieve last error from libxml</span></li>    <li><span class="function">{@link libxml_clear_errors()} - Clear libxml error buffer</span></li>   </ul>   </div></div>
*
 * Retrieve array of errors
 * @link https://php.net/manual/zh/function.libxml-get-errors.php
 * @return LibXMLError[] an array with LibXMLError objects if there are any
 * errors in the buffer, or an empty array otherwise.
 
#[Pure(true)]
*/
function libxml_get_errors(): array {}

/**
* <div id="function.libxml-disable-entity-loader" class="refentry"> <div class="refnamediv">  <h1 class="refname">libxml_disable_entity_loader</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.11, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">libxml_disable_entity_loader</span> — <span class="dc-title">Disable the ability to load external entities</span></p> </div> <div id="function.libxml-disable-entity-loader-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 8.0.0 起被<em>废弃</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.libxml-disable-entity-loader-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>libxml_disable_entity_loader</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$disable</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Disable/enable the ability to load external entities.   Note that disabling the loading of external entities may cause general issues   with loading XML documents.  </p>  <p class="para">   As of libxml 2.9.0 entity substitution   is disabled by default, so there is no need to disable the loading of external   entities,   unless there is the need to resolve internal entity references with <strong><span><a href="https://php.net/manual/zh/libxml.constants.php#constant.libxml-noent">LIBXML_NOENT</a></span></strong>,   <strong><span><a href="https://php.net/manual/zh/libxml.constants.php#constant.libxml-dtdvalid">LIBXML_DTDVALID</a></span></strong>, or <strong><span><a href="https://php.net/manual/zh/libxml.constants.php#constant.libxml-dtdload">LIBXML_DTDLOAD</a></span></strong>.   Generally, it is preferable to use <span class="function">{@link libxml_set_external_entity_loader()}</span>   to suppress loading of external entities.   The <strong><span><a href="https://php.net/manual/zh/libxml.constants.php#constant.libxml-no-xxe">LIBXML_NO_XXE</a></span></strong> constant can be used to prevent this as well (only available in Libxml &gt;= 2.13.0, as of PHP 8.4.0).  </p> </div> <div class="refsect1 parameters" id="refsect1-function.libxml-disable-entity-loader-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">disable</span></dt>     <dd>      <p class="para">       Disable (<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>) or enable (<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>) libxml extensions (such as       <a href="https://php.net/manual/zh/book.dom.php" class="xref">DOM</a>, <a href="https://php.net/manual/zh/book.xmlwriter.php" class="xref">XMLWriter</a>       and <a href="https://php.net/manual/zh/book.xmlreader.php" class="xref">XMLReader</a>) to load external entities.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.libxml-disable-entity-loader-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the previous value.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.libxml-disable-entity-loader-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       This function has been deprecated.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.libxml-disable-entity-loader-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link libxml_use_internal_errors()} - Disable libxml errors and allow user to fetch error information as needed</span></li>    <li><span class="function">{@link libxml_set_external_entity_loader()} - Changes the default external entity loader</span></li>    <li>The <strong><span><a href="https://php.net/manual/zh/libxml.constants.php#constant.libxml-noent">LIBXML_NOENT</a></span></strong> constant</li>    <li>The <strong><span><a href="https://php.net/manual/zh/libxml.constants.php#constant.libxml-dtdvalid">LIBXML_DTDVALID</a></span></strong> constant</li>    <li>The <strong><span><a href="https://php.net/manual/zh/libxml.constants.php#constant.libxml-no-xxe">LIBXML_NO_XXE</a></span></strong> constant</li>   </ul>   </div></div>
*
 * Disable the ability to load external entities
 * @link https://php.net/manual/zh/function.libxml-disable-entity-loader.php
 * @param bool $disable [optional] <p>
 * Disable (<b>TRUE</b>) or enable (<b>FALSE</b>) libxml extensions (such as
 * ,
 * and ) to load external entities.
 * </p>
 * @return bool the previous value.
 * @since 5.2.11
 
#[Deprecated(since: "8.0")]
*/
function libxml_disable_entity_loader(bool $disable = true): bool {}

/**
* <div id="function.libxml-set-external-entity-loader" class="refentry"> <div class="refnamediv">  <h1 class="refname">libxml_set_external_entity_loader</h1>  <p class="verinfo">(PHP 5 &gt;= 5.4.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">libxml_set_external_entity_loader</span> — <span class="dc-title">Changes the default external entity loader</span></p> </div> <div class="refsect1 description" id="refsect1-function.libxml-set-external-entity-loader-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>libxml_set_external_entity_loader</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span></span> <span class="parameter" style="color:#3A95FF">$resolver_function</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Changes the default external entity loader.   This can be used to suppress the expansion of arbitrary external entities to avoid XXE attacks,   even when <strong><span><a href="https://php.net/manual/zh/libxml.constants.php#constant.libxml-noent">LIBXML_NOENT</a></span></strong> has been set for the respective operation,   and is usually preferable over calling <span class="function">{@link libxml_disable_entity_loader()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.libxml-set-external-entity-loader-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">resolver_function</span></dt>    <dd>     <p class="para">      A <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> with the following signature:      </p><div class="methodsynopsis dc-description">       <span class="methodname" style="color:#CC7832"><span class="replaceable">resolver</span></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$public_id</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$system_id</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$context</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span></div>      <dl>               <dt><span class="parameter" style="color:#3A95FF">public_id</span></dt>        <dd>         <span class="simpara">          The public ID.         </span>        </dd>                      <dt><span class="parameter" style="color:#3A95FF">system_id</span></dt>        <dd>         <span class="simpara">          The system ID.         </span>        </dd>                      <dt><span class="parameter" style="color:#3A95FF">context</span></dt>        <dd>         <span class="simpara">          An array with the four elements <span class="literal">"directory"</span>, <span class="literal">"intSubName"</span>,          <span class="literal">"extSubURI"</span> and <span class="literal">"extSubSystem"</span>.         </span>        </dd>             </dl>      This callable should return a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>, a <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> from which a resource can be      opened. If <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> is returned, the entity reference resolution will fail.         </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.libxml-set-external-entity-loader-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.libxml-set-external-entity-loader-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-5830">    <p><strong>示例 #1 <span class="function"><strong>libxml_set_external_entity_loader()</strong></span> example</strong></p>    <div class="example-contents"><div class="annotation-interactive phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$xml </span><span style="color: #007700">= &lt;&lt;&lt;XML<br></span><span style="color: #DD0000">&lt;!DOCTYPE foo PUBLIC "-//FOO/BAR" "http://example.com/foobar"&gt;<br>&lt;foo&gt;bar&lt;/foo&gt;<br></span><span style="color: #007700">XML;<br><br></span><span style="color: #9876AA">$dtd </span><span style="color: #007700">= &lt;&lt;&lt;DTD<br></span><span style="color: #DD0000">&lt;!ELEMENT foo (#PCDATA)&gt;<br></span><span style="color: #007700">DTD;<br><br></span><span style="color: #9876AA">libxml_set_external_entity_loader</span><span style="color: #007700">(<br>    function (</span><span style="color: #9876AA">$public</span><span style="color: #007700">, </span><span style="color: #9876AA">$system</span><span style="color: #007700">, </span><span style="color: #9876AA">$context</span><span style="color: #007700">) use(</span><span style="color: #9876AA">$dtd</span><span style="color: #007700">) {<br>        </span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$public</span><span style="color: #007700">);<br>        </span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$system</span><span style="color: #007700">);<br>        </span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$context</span><span style="color: #007700">);<br>        </span><span style="color: #9876AA">$f </span><span style="color: #007700">= </span><span style="color: #9876AA">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">"php://temp"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r+"</span><span style="color: #007700">);<br>        </span><span style="color: #9876AA">fwrite</span><span style="color: #007700">(</span><span style="color: #9876AA">$f</span><span style="color: #007700">, </span><span style="color: #9876AA">$dtd</span><span style="color: #007700">);<br>        </span><span style="color: #9876AA">rewind</span><span style="color: #007700">(</span><span style="color: #9876AA">$f</span><span style="color: #007700">);<br>        return </span><span style="color: #9876AA">$f</span><span style="color: #007700">;<br>    }<br>);<br><br></span><span style="color: #9876AA">$dd </span><span style="color: #007700">= new </span><span style="color: #9876AA">DOMDocument</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$r  </span><span style="color: #007700">= </span><span style="color: #9876AA">$dd</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">loadXML</span><span style="color: #007700">(</span><span style="color: #9876AA">$xml</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$dd</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">validate</span><span style="color: #007700">());<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="annotation-interactive examplescode"><blockquote style="border:1px gray solid;">string(10) "-//FOO/BAR"<br>string(25) "http://example.com/foobar"<br>array(4) {<br>    ["directory"]    =&gt; NULL<br>    ["intSubName"]   =&gt; NULL<br>    ["extSubURI"]    =&gt; NULL<br>    ["extSubSystem"] =&gt; NULL<br>}<br>bool(true)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.libxml-set-external-entity-loader-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link libxml_disable_entity_loader()} - Disable the ability to load external entities</span></li>    <li><span class="function">{@link libxml_get_external_entity_loader()} - Get the current external entity loader</span></li>   </ul>   </div></div>
*
 * Changes the default external entity loader
 * @link https://php.net/manual/zh/function.libxml-set-external-entity-loader.php
 * @param callable|null $resolver_function <p>
 * A callable that takes three arguments. Two strings, a public id
 * and system id, and a context (an array with four keys) as the third argument.
 * This callback should return a resource, a string from which a resource can be
 * opened, or <b>NULL</b>.
 * </p>
 * @return bool
 * @since 5.4
 
*/
function libxml_set_external_entity_loader(?callable $resolver_function): bool {}

/**
* <div id="function.libxml-get-external-entity-loader" class="refentry"> <div class="refnamediv">  <h1 class="refname">libxml_get_external_entity_loader</h1>  <p class="verinfo">(PHP 8 &gt;= 8.2.0)</p><p class="refpurpose"><span class="refname">libxml_get_external_entity_loader</span> — <span class="dc-title">Get the current external entity loader</span></p> </div> <div class="refsect1 description" id="refsect1-function.libxml-get-external-entity-loader-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>libxml_get_external_entity_loader</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span></span></div>  <p class="para rdfs-comment">   Get external entity loader previously installed by   <span class="function">{@link libxml_set_external_entity_loader()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.libxml-get-external-entity-loader-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.libxml-get-external-entity-loader-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   The external entity loader previously installed by   <span class="function">{@link libxml_set_external_entity_loader()}</span>. If that function was   never called, or if it was called with <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> will be returned.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.libxml-get-external-entity-loader-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link libxml_set_external_entity_loader()} - Changes the default external entity loader</span></li>  </ul> </div></div>
*
 * Returns the currently installed external entity loader, i.e. the value which was passed to
 * libxml_set_external_entity_loader() or null if no loader was installed and the default entity loader will be used.
 * This allows libraries to save and restore the loader, controlling entity expansion without interfering with the rest
 * of the application.
 *
 * @return callable|null
 * @since 8.2
 
*/
function libxml_get_external_entity_loader(): ?callable {}

/**
* <span class="simpara">     libxml version like 20605 or 20617    </span>
*
 * libxml version like 20605 or 20617
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_VERSION', 20901);

/**
* <span class="simpara">     libxml version like 2.6.5 or 2.6.17    </span>
*
 * libxml version like 2.6.5 or 2.6.17
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_DOTTED_VERSION', "2.9.1");
/**
* <span class="simpara">     Version of libxml's core parser module.    </span>
*/
define('LIBXML_LOADED_VERSION', 20901);

/**
* <span class="simpara">     Substitute entities    </span>
*
 * Substitute entities
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_NOENT', 2);

/**
* <span class="simpara">     Load the external subset    </span>
*
 * Load the external subset
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_DTDLOAD', 4);

/**
* <span class="simpara">     Default DTD attributes    </span>
*
 * Default DTD attributes
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_DTDATTR', 8);

/**
* <span class="simpara">     Validate with the DTD    </span>
*
 * Validate with the DTD
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_DTDVALID', 16);

/**
* <span class="simpara">     Suppress error reports    </span>
*
 * Suppress error reports
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_NOERROR', 32);

/**
* <span class="simpara">     Suppress warning reports    </span>
*
 * Suppress warning reports
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_NOWARNING', 64);

/**
* <span class="simpara">     Remove blank nodes    </span>
*
 * Remove blank nodes
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_NOBLANKS', 256);

/**
* <span class="simpara">     Implement XInclude substitution    </span>
*
 * Implement XInclude substitution
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_XINCLUDE', 1024);

/**
* <span class="simpara">     Remove redundant namespace declarations    </span>
*
 * Remove redundant namespaces declarations
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_NSCLEAN', 8192);

/**
* <span class="simpara">     Merge CDATA as text nodes    </span>
*
 * Merge CDATA as text nodes
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_NOCDATA', 16384);

/**
* <span class="simpara">     Disable network access when loading documents    </span>
*
 * Disable network access when loading documents
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_NONET', 2048);

/**
* <span class="simpara">     Sets XML_PARSE_PEDANTIC flag, which enables pedantic error reporting.    </span>
*
 * Sets XML_PARSE_PEDANTIC flag, which enables pedentic error reporting.
 * @link https://php.net/manual/zh/libxml.constants.php
 * @since 5.4
 
*/
define('LIBXML_PEDANTIC', 128);

/**
* <span class="simpara">     Activate small nodes allocation optimization. This may speed up your     application without needing to change the code.    </span>
*
 * Activate small nodes allocation optimization. This may speed up your
 * application without needing to change the code.
 * <p>
 * Only available in Libxml &gt;= 2.6.21
 * </p>
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_COMPACT', 65536);

/**
* <span class="simpara">     Allows line numbers greater than 65535 to be reported correctly.    </span>
*
 * Allows line numbers greater than 65535 to be reported correctly.
 * <p>
 * Only available in Libxml &gt;= 2.9.0
 * </p>
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_BIGLINES', 65535);

/**
* <span class="simpara">     Drop the XML declaration when saving a document    </span>
*
 * Drop the XML declaration when saving a document
 * <p>
 * Only available in Libxml &gt;= 2.6.21
 * </p>
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_NOXMLDECL', 2);

/**
* <span class="simpara">     Sets XML_PARSE_HUGE flag, which relaxes any hardcoded limit from the parser. This affects     limits like maximum depth of a document or the entity recursion, as well as limits of the     size of text nodes.    </span>
*
 * Sets XML_PARSE_HUGE flag, which relaxes any hardcoded limit from the parser. This affects
 * limits like maximum depth of a document or the entity recursion, as well as limits of the
 * size of text nodes.
 * <p>
 * Only available in Libxml &gt;= 2.7.0 (as of PHP &gt;= 5.3.2 and PHP &gt;= 5.2.12)
 * </p>
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_PARSEHUGE', 524288);

/**
* <span class="simpara">     Expand empty tags (e.g. <code class="literal">&lt;br/&gt;</code> to     <code class="literal">&lt;br&gt;&lt;/br&gt;</code>)    </span>
*
 * Expand empty tags (e.g. &lt;br/&gt; to
 * &lt;br&gt;&lt;/br&gt;)
 * <p>
 * This option is currently just available in the
 * and
 * functions.
 * </p>
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_NOEMPTYTAG', 4);

/**
* <span class="simpara">     Create default/fixed value nodes during XSD schema validation    </span>
*
 * Create default/fixed value nodes during XSD schema validation
 * <p>
 * Only available in Libxml &gt;= 2.6.14 (as of PHP &gt;= 5.5.2)
 * </p>
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_SCHEMA_CREATE', 1);

/**
* <span class="simpara">     Sets HTML_PARSE_NOIMPLIED flag, which turns off the     automatic adding of implied html/body... elements.    </span>
*
 * Sets HTML_PARSE_NOIMPLIED flag, which turns off the
 * automatic adding of implied html/body... elements.
 * <p>
 * Only available in Libxml &gt;= 2.7.7 (as of PHP &gt;= 5.4.0)
 * </p>
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_HTML_NOIMPLIED', 8192);

/**
* <span class="simpara">     Sets HTML_PARSE_NODEFDTD flag, which prevents a default doctype     being added when one is not found.    </span>
*
 * Sets HTML_PARSE_NODEFDTD flag, which prevents a default doctype
 * being added when one is not found.
 * <p>
 * Only available in Libxml &gt;= 2.7.8 (as of PHP &gt;= 5.4.0)
 * </p>
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_HTML_NODEFDTD', 4);

/**
* <span class="simpara">     No errors    </span>
*
 * No errors
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_ERR_NONE', 0);

/**
* <span class="simpara">     A simple warning    </span>
*
 * A simple warning
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_ERR_WARNING', 1);

/**
* <span class="simpara">     A recoverable error    </span>
*
 * A recoverable error
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_ERR_ERROR', 2);

/**
* <span class="simpara">     A fatal error    </span>
*
 * A fatal error
 * @link https://php.net/manual/zh/libxml.constants.php
 
*/
define('LIBXML_ERR_FATAL', 3);
/**
* <span class="simpara">     Enables recovery mode when parsing a document.    </span>
*
 * @since 8.4
 
*/
define('LIBXML_RECOVER', 1);

const LIBXML_NO_XXE = 8388608;
// End of libxml v.
