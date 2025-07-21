<?php

/**
* <div id="class.v8js" class="reference"> <h1 class="title">The <span class="classname"><a href="https://php.net/manual/zh/class.v8js.php" class="classname">V8Js</a></span> class</h1>  <div class="partintro"><p class="verinfo">(PECL v8js &gt;= 0.1.0)</p>  <div class="section" id="v8js.intro">   <h2 class="title">简介</h2>   <p class="para">    This is the core class for V8Js extension. Each instance created from    this class has own context in which all JavaScript is compiled and    executed.   </p>   <p class="para">    See <span class="function">{@link V8Js::__construct()}</span> for more information.   </p>  </div>  <div class="section" id="v8js.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">V8Js</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>    <div class="fieldsynopsis">     <span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.v8js.php#v8js.constants.v8-version"><var class="varname">V8_VERSION</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.v8js.php#v8js.constants.flag-none"><var class="varname">FLAG_NONE</var></a></var><span class="initializer"> = 1</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.v8js.php#v8js.constants.flag-force-array"><var class="varname">FLAG_FORCE_ARRAY</var></a></var><span class="initializer"> = 2</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/v8js.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$object_name</span><span class="initializer"> = "PHP"</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$variables</span><span class="initializer"> = array()</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$extensions</span><span class="initializer"> = array()</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$report_uncaught_exceptions</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span><br>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/v8js.executestring.php" class="methodname" style="color:#CC7832">executeString</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$script</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$identifier</span><span class="initializer"> = "V8Js::executeString()"</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = <strong><span>{@link V8Js::FLAG_NONE}</span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/v8js.getextensions.php" class="methodname" style="color:#CC7832">getExtensions</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/v8js.getpendingexception.php" class="methodname" style="color:#CC7832">getPendingException</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.v8jsexception.php" class="type V8JsException" style="color:#EAB766">V8JsException</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/v8js.registerextension.php" class="methodname" style="color:#CC7832">registerExtension</a></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$extension_name</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$script</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$dependencies</span><span class="initializer"> = array()</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$auto_enable</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>   }</div>  </div>  <div class="section" id="v8js.constants">   <h2 class="title">预定义常量</h2>   <dl>         <dt id="v8js.constants.v8-version"><strong><span>{@link V8Js::V8_VERSION}</span></strong></dt>     <dd>      <p class="para">The V8 Javascript Engine version.</p>     </dd>             <dt id="v8js.constants.flag-none"><strong><span>{@link V8Js::FLAG_NONE}</span></strong></dt>     <dd>      <p class="para">No flags.</p>     </dd>             <dt id="v8js.constants.flag-force-array"><strong><span>{@link V8Js::FLAG_FORCE_ARRAY}</span></strong></dt>     <dd>      <p class="para">Forces all JS objects to be associative arrays in PHP.</p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link V8Js::__construct} — Construct a new V8Js object</li><li>{@link V8Js::executeString} — Execute a string as Javascript code</li><li>{@link V8Js::getExtensions} — Return an array of registered extensions</li><li>{@link V8Js::getPendingException} — Return pending uncaught Javascript exception</li><li>{@link V8Js::registerExtension} — Register Javascript extensions for V8Js</li></ul></div>
*/
class V8Js
{
    /* Constants */

    public const V8_VERSION = '';
    public const FLAG_NONE = 1;
    public const FLAG_FORCE_ARRAY = 2;
    public const FLAG_PROPAGATE_PHP_EXCEPTIONS = 4;

    /* Methods */

    /**
     * Initializes and starts V8 engine and returns new V8Js object with it's own V8 context.
     * Snapshots are supported by V8 4.3.7 and higher.
     * @param string $object_name
     * @param array $variables
     * @param array $extensions
     * @param bool $report_uncaught_exceptions
     * @param string $snapshot_blob
     */
    public function __construct($object_name = "PHP", array $variables = [], array $extensions = [], $report_uncaught_exceptions = true, $snapshot_blob = null) {}

    /**
     * Provide a function or method to be used to load required modules. This can be any valid PHP callable.
     * The loader function will receive the normalised module path and should return Javascript code to be executed.
     * @param callable $loader
     */
    public function setModuleLoader(callable $loader) {}

    /**
     * Provide a function or method to be used to normalise module paths. This can be any valid PHP callable.
     * This can be used in combination with setModuleLoader to influence normalisation of the module path (which
     * is normally done by V8Js itself but can be overriden this way).
     * The normaliser function will receive the base path of the current module (if any; otherwise an empty string)
     * and the literate string provided to the require method and should return an array of two strings (the new
     * module base path as well as the normalised name).  Both are joined by a '/' and then passed on to the
     * module loader (unless the module was cached before).
     * @param callable $normaliser
     */
    public function setModuleNormaliser(callable $normaliser) {}

/**
* <div id="v8js.executestring" class="refentry"> <div class="refnamediv">  <h1 class="refname">V8Js::executeString</h1>  <p class="verinfo">(PECL v8js &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">V8Js::executeString</span> — <span class="dc-title">Execute a string as Javascript code</span></p> </div> <div class="refsect1 description" id="refsect1-v8js.executestring-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>V8Js::executeString</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$script</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$identifier</span><span class="initializer"> = "V8Js::executeString()"</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = <strong><span>{@link V8Js::FLAG_NONE}</span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Compiles and executes the string passed with <span class="parameter" style="color:#3A95FF">script</span> as Javascript code.  </p> </div> <div class="refsect1 parameters" id="refsect1-v8js.executestring-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">script</span></dt>    <dd>     <p class="para">      The code string to be executed.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">identifier</span></dt>    <dd>     <p class="para">      Identifier string for the executed code. Used for debugging.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>    <dd>     <p class="para">      Execution flags. This value must be one of the      <span class="literal">V8Js::FLAG_*</span> constants, defaulting to      <strong><span>{@link V8Js::FLAG_NONE}</span></strong>.      </p><ul class="itemizedlist">        <li class="listitem">         <p class="para">          <strong><span>{@link V8Js::FLAG_NONE}</span></strong>: no flags         </p>        </li>        <li class="listitem">         <p class="para">          <strong><span>{@link V8Js::FLAG_FORCE_ARRAY}</span></strong>: forces all Javascript          objects passed to PHP to be associative arrays         </p>        </li>      </ul>         </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-v8js.executestring-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the last variable instantiated in the Javascript code converted to matching PHP variable type.  </p> </div></div>
    *
     * Compiles and executes script in object's context with optional identifier string.
     * A time limit (milliseconds) and/or memory limit (bytes) can be provided to restrict execution. These options will throw a V8JsTimeLimitException or V8JsMemoryLimitException.
     * @param string $script
     * @param string $identifier
     * @param int $flags
     * @param int $time_limit in milliseconds
     * @param int $memory_limit in bytes
     * @return mixed
     
*/
    public function executeString($script, $identifier = '', $flags = V8Js::FLAG_NONE, $time_limit = 0, $memory_limit = 0) {}

    /**
     * Compiles a script in object's context with optional identifier string.
     * @param $script
     * @param string $identifier
     * @return resource
     */
    public function compileString($script, $identifier = '') {}

    /**
     * Executes a precompiled script in object's context.
     * A time limit (milliseconds) and/or memory limit (bytes) can be provided to restrict execution. These options will throw a V8JsTimeLimitException or V8JsMemoryLimitException.
     * @param resource $script
     * @param int $flags
     * @param int $time_limit
     * @param int $memory_limit
     */
    public function executeScript($script, $flags = V8Js::FLAG_NONE, $time_limit = 0, $memory_limit = 0) {}

    /**
     * Set the time limit (in milliseconds) for this V8Js object
     * works similar to the set_time_limit php
     * @param int $limit
     */
    public function setTimeLimit($limit) {}

    /**
     * Set the memory limit (in bytes) for this V8Js object
     * @param int $limit
     */
    public function setMemoryLimit($limit) {}

    /**
     * Set the average object size (in bytes) for this V8Js object.
     * V8's "amount of external memory" is adjusted by this value for every exported object.  V8 triggers a garbage collection once this totals to 192 MB.
     * @param int $average_object_size
     */
    public function setAverageObjectSize($average_object_size) {}

/**
* <div id="v8js.getpendingexception" class="refentry"> <div class="refnamediv">  <h1 class="refname">V8Js::getPendingException</h1>  <p class="verinfo">(PECL v8js &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">V8Js::getPendingException</span> — <span class="dc-title">Return pending uncaught Javascript exception</span></p> </div> <div class="refsect1 description" id="refsect1-v8js.getpendingexception-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>V8Js::getPendingException</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.v8jsexception.php" class="type V8JsException" style="color:#EAB766">V8JsException</a></span></div>  <p class="para rdfs-comment">   Returns any pending uncaught Javascript exception as <span class="classname"><a href="https://php.net/manual/zh/class.v8jsexception.php" class="classname">V8JsException</a></span>   left from earlier <span class="function">{@link V8Js::executeString()}</span> call(s).  </p> </div> <div class="refsect1 parameters" id="refsect1-v8js.getpendingexception-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-v8js.getpendingexception-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Either <span class="classname"><a href="https://php.net/manual/zh/class.v8jsexception.php" class="classname">V8JsException</a></span> or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>.  </p> </div></div>
    *
     * Returns uncaught pending exception or null if there is no pending exception.
     * @return V8JsScriptException|null
     
*/
    public function getPendingException() {}

    /**
     * Clears the uncaught pending exception
     */
    public function clearPendingException() {}

    /* Static methods */

/**
* <div id="v8js.registerextension" class="refentry"> <div class="refnamediv">  <h1 class="refname">V8Js::registerExtension</h1>  <p class="verinfo">(PECL v8js &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">V8Js::registerExtension</span> — <span class="dc-title">Register Javascript extensions for V8Js</span></p> </div> <div class="refsect1 description" id="refsect1-v8js.registerextension-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>V8Js::registerExtension</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$extension_name</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$script</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$dependencies</span><span class="initializer"> = array()</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$auto_enable</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Registers passed Javascript <span class="parameter" style="color:#3A95FF">script</span> as extension to   be used in <span class="classname"><a href="https://php.net/manual/zh/class.v8js.php" class="classname">V8Js</a></span> contexts.  </p> </div> <div class="refsect1 parameters" id="refsect1-v8js.registerextension-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">extension_name</span></dt>    <dd>     <p class="para">      Name of the extension to be registered.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">script</span></dt>    <dd>     <p class="para">      The Javascript code to be registered.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">dependencies</span></dt>    <dd>     <p class="para">      Array of extension names the extension to be registered depends on. Any such extension is      enabled automatically when this extension is loaded.      </p><blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        </p><p class="para">        All extensions, including the dependencies, must be registered before any <span class="classname"><a href="https://php.net/manual/zh/class.v8js.php" class="classname">V8Js</a></span>        are created which use them.       </p>      </blockquote>         </dd>          <dt><span class="parameter" style="color:#3A95FF">auto_enable</span></dt>    <dd>     <p class="para">      If set to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>, the extension will be enabled automatically in all <span class="classname"><a href="https://php.net/manual/zh/class.v8js.php" class="classname">V8Js</a></span> contexts.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-v8js.registerextension-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if extension was registered successfully, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div></div>
    *
     * Registers persistent context independent global Javascript extension.
     * NOTE! These extensions exist until PHP is shutdown and they need to be registered before V8 is initialized.
     * For best performance V8 is initialized only once per process thus this call has to be done before any V8Js objects are created!
     * @param string $extension_name
     * @param string $code
     * @param array $dependencies
     * @param bool $auto_enable
     * @return bool
     
*/
    public static function registerExtension($extension_name, $code, array $dependencies, $auto_enable = false) {}

/**
* <div id="v8js.getextensions" class="refentry"> <div class="refnamediv">  <h1 class="refname">V8Js::getExtensions</h1>  <p class="verinfo">(PECL v8js &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">V8Js::getExtensions</span> — <span class="dc-title">Return an array of registered extensions</span></p> </div> <div class="refsect1 description" id="refsect1-v8js.getextensions-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>V8Js::getExtensions</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   This function returns array of Javascript extensions registered using <span class="function">{@link V8Js::registerExtension()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-v8js.getextensions-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-v8js.getextensions-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array of registered extensions or an empty array if there are none.  </p> </div></div>
    *
     * Returns extensions successfully registered with V8Js::registerExtension().
     * @return string[]
     
*/
    public static function getExtensions() {}

    /**
     * Creates a custom V8 heap snapshot with the provided JavaScript source embedded.
     * Snapshots are supported by V8 4.3.7 and higher.  For older versions of V8 this
     * extension doesn't provide this method.
     * @param string $embed_source
     * @return string|false
     */
    public static function createSnapshot($embed_source) {}
}

final class V8JsScriptException extends Exception
{
    /**
     * @return string
     */
    final public function getJsFileName() {}

    /**
     * @return int
     */
    final public function getJsLineNumber() {}

    /**
     * @return int
     */
    final public function getJsStartColumn() {}

    /**
     * @return int
     */
    final public function getJsEndColumn() {}

    /**
     * @return string
     */
    final public function getJsSourceLine() {}

    /**
     * @return string
     */
    final public function getJsTrace() {}
}

final class V8JsTimeLimitException extends Exception {}

final class V8JsMemoryLimitException extends Exception {}
