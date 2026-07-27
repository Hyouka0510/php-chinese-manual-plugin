<?php

declare(strict_types=1);

namespace Swoole\Http;

/**
 * <div id="class.swoole-http-response" class="reference"> <h1 class="title">The Swoole\Http\Response class</h1>  <div class="partintro"><p class="verinfo">(PECL swoole &gt;= 1.9.0)</p>  <div class="section" id="swoole-http-response.intro">   <h2 class="title">简介</h2>   <p class="para">   </p>  </div>  <div class="section" id="swoole-http-response.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Swoole\Http\Response</strong>     </span>     {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-response.cookie.php" class="methodname" style="color:#CC7832">cookie</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$value</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$expires</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$path</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$domain</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$secure</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$httponly</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-response.destruct.php" class="methodname" style="color:#CC7832">__destruct</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-response.end.php" class="methodname" style="color:#CC7832">end</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$content</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-response.gzip.php" class="methodname" style="color:#CC7832">gzip</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$compress_level</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766">ReturnType</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-response.header.php" class="methodname" style="color:#CC7832">header</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$ucwords</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-response.initheader.php" class="methodname" style="color:#CC7832">initHeader</a></span>(): <span class="type" style="color:#EAB766">ReturnType</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-response.rawcookie.php" class="methodname" style="color:#CC7832">rawcookie</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$value</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$expires</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$path</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$domain</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$secure</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$httponly</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766">ReturnType</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-response.sendfile.php" class="methodname" style="color:#CC7832">sendfile</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$offset</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766">ReturnType</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-response.status.php" class="methodname" style="color:#CC7832">status</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$http_code</span></span>): <span class="type" style="color:#EAB766">ReturnType</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-response.write.php" class="methodname" style="color:#CC7832">write</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$content</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Swoole\Http\Response::cookie} — Set the cookies of the HTTP response.</li><li>{@link Swoole\Http\Response::__destruct} — Destruct the HTTP response.</li><li>{@link Swoole\Http\Response::end} — Send data for the HTTP request and finish the response.</li><li>{@link Swoole\Http\Response::gzip} — Enable the gzip of response content.</li><li>{@link Swoole\Http\Response::header} — Set the HTTP response headers.</li><li>{@link Swoole\Http\Response::initHeader} — Init the HTTP response header.</li><li>{@link Swoole\Http\Response::rawcookie} — Set the raw cookies to the HTTP response.</li><li>{@link Swoole\Http\Response::sendfile} — Send file through the HTTP response.</li><li>{@link Swoole\Http\Response::status} — Set the status code of the HTTP response.</li><li>{@link Swoole\Http\Response::write} — Append HTTP body content to the HTTP response.</li></ul></div>
 */
class Response
{
    public $fd = 0;
    public $socket;
    public $header;
    public $cookie;
    public $trailer;

/**
 * <div id="swoole-http-response.destruct" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Http\Response::__destruct</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Http\Response::__destruct</span> — <span class="dc-title">Destruct the HTTP response.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-http-response.destruct-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Http\Response::__destruct</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-http-response.destruct-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-http-response.destruct-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 */
    public function __destruct() {}

    /**
 * <div id="swoole-http-response.initheader" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Http\Response::initHeader</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Http\Response::initHeader</span> — <span class="dc-title">Init the HTTP response header.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-http-response.initheader-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Http\Response::initHeader</strong></span>(): <span class="type" style="color:#EAB766">ReturnType</span></div>  <p class="para rdfs-comment">    Init the HTTP response header.  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-http-response.initheader-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-http-response.initheader-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return mixed
     */
    public function initHeader() {}

    /**
     * @return mixed
     */
    public function isWritable() {}

    /**
 * <div id="swoole-http-response.cookie" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Http\Response::cookie</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Http\Response::cookie</span> — <span class="dc-title">Set the cookies of the HTTP response.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-http-response.cookie-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Http\Response::cookie</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$value</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$expires</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$path</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$domain</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$secure</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$httponly</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-http-response.cookie-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">name</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">value</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">expires</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">path</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">domain</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">secure</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">httponly</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-http-response.cookie-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @param mixed $name
     * @param mixed|null $value
     * @param mixed|null $expires
     * @param mixed|null $path
     * @param mixed|null $domain
     * @param mixed|null $secure
     * @param mixed|null $httponly
     * @param mixed|null $samesite
     * @param mixed|null $priority
     * @return mixed
     */
    public function cookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null, $samesite = null, $priority = null) {}

    /**
     * @param mixed $name
     * @param mixed|null $value
     * @param mixed|null $expires
     * @param mixed|null $path
     * @param mixed|null $domain
     * @param mixed|null $secure
     * @param mixed|null $httponly
     * @param mixed|null $samesite
     * @param mixed|null $priority
     * @return mixed
     */
    public function setCookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null, $samesite = null, $priority = null) {}

    /**
 * <div id="swoole-http-response.rawcookie" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Http\Response::rawcookie</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Http\Response::rawcookie</span> — <span class="dc-title">Set the raw cookies to the HTTP response.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-http-response.rawcookie-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Http\Response::rawcookie</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$value</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$expires</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$path</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$domain</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$secure</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$httponly</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766">ReturnType</span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-http-response.rawcookie-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">name</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">value</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">expires</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">path</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">domain</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">secure</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">httponly</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-http-response.rawcookie-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @param mixed $name
     * @param mixed|null $value
     * @param mixed|null $expires
     * @param mixed|null $path
     * @param mixed|null $domain
     * @param mixed|null $secure
     * @param mixed|null $httponly
     * @param mixed|null $samesite
     * @param mixed|null $priority
     * @return mixed
     */
    public function rawcookie($name, $value = null, $expires = null, $path = null, $domain = null, $secure = null, $httponly = null, $samesite = null, $priority = null) {}

    /**
 * <div id="swoole-http-response.status" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Http\Response::status</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Http\Response::status</span> — <span class="dc-title">Set the status code of the HTTP response.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-http-response.status-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Http\Response::status</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$http_code</span></span>): <span class="type" style="color:#EAB766">ReturnType</span></div>  <p class="para rdfs-comment">    Set the status code of the HTTP response.  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-http-response.status-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">http_code</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-http-response.status-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @param mixed $http_code
     * @param mixed|null $reason
     * @return mixed
     */
    public function status($http_code, $reason = null) {}

    /**
     * @param mixed $http_code
     * @param mixed|null $reason
     * @return mixed
     */
    public function setStatusCode($http_code, $reason = null) {}

    /**
 * <div id="swoole-http-response.header" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Http\Response::header</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Http\Response::header</span> — <span class="dc-title">Set the HTTP response headers.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-http-response.header-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Http\Response::header</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$ucwords</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-http-response.header-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">value</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">ucwords</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-http-response.header-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $format
     * @return mixed
     */
    public function header($key, $value, $format = null) {}

    /**
     * @param mixed $key
     * @param mixed $value
     * @param mixed|null $format
     * @return mixed
     */
    public function setHeader($key, $value, $format = null) {}

    /**
     * @param mixed $key
     * @param mixed $value
     * @return mixed
     */
    public function trailer($key, $value) {}

    /**
     * @return mixed
     */
    public function ping() {}

    /**
     * @return mixed
     */
    public function goaway() {}

    /**
 * <div id="swoole-http-response.write" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Http\Response::write</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Http\Response::write</span> — <span class="dc-title">Append HTTP body content to the HTTP response.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-http-response.write-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Http\Response::write</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$content</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">    Append HTTP body content to the HTTP response.  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-http-response.write-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">content</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-http-response.write-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @param mixed $content
     * @return mixed
     */
    public function write($content) {}

    /**
 * <div id="swoole-http-response.end" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Http\Response::end</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Http\Response::end</span> — <span class="dc-title">Send data for the HTTP request and finish the response.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-http-response.end-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Http\Response::end</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$content</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-http-response.end-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">content</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-http-response.end-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @param mixed|null $content
     * @return mixed
     */
    public function end($content = null) {}

    /**
 * <div id="swoole-http-response.sendfile" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Http\Response::sendfile</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Http\Response::sendfile</span> — <span class="dc-title">Send file through the HTTP response.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-http-response.sendfile-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Http\Response::sendfile</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$offset</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766">ReturnType</span></div>  <p class="para rdfs-comment">    Send file through the HTTP response.  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-http-response.sendfile-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">offset</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-http-response.sendfile-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @param mixed $filename
     * @param mixed|null $offset
     * @param mixed|null $length
     * @return mixed
     */
    public function sendfile($filename, $offset = null, $length = null) {}

    /**
     * @param mixed $location
     * @param mixed|null $http_code
     * @return mixed
     */
    public function redirect($location, $http_code = null) {}

    /**
     * @return mixed
     */
    public function detach() {}

    /**
     * @param mixed $server
     * @param mixed|null $fd
     * @return mixed
     */
    public static function create($server, $fd = null) {}

    /**
     * @return mixed
     */
    public function upgrade() {}

    /**
     * @param mixed $data
     * @param mixed|null $opcode
     * @param mixed|null $flags
     * @return mixed
     */
    public function push($data, $opcode = null, $flags = null) {}

    /**
     * @return mixed
     */
    public function recv() {}

    /**
     * @return mixed
     */
    public function close() {}
}
