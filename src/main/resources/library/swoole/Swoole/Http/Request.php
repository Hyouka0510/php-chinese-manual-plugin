<?php

declare(strict_types=1);

namespace Swoole\Http;

/**
 * <div id="class.swoole-http-request" class="reference"> <h1 class="title">The Swoole\Http\Request class</h1>  <div class="partintro"><p class="verinfo">(PECL swoole &gt;= 1.9.0)</p>  <div class="section" id="swoole-http-request.intro">   <h2 class="title">简介</h2>   <p class="para">   </p>  </div>  <div class="section" id="swoole-http-request.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Swoole\Http\Request</strong>     </span>     {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-request.destruct.php" class="methodname" style="color:#CC7832">__destruct</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-http-request.rawcontent.php" class="methodname" style="color:#CC7832">rawcontent</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Swoole\Http\Request::__destruct} — Destruct the HTTP request.</li><li>{@link Swoole\Http\Request::rawcontent} — Get the raw HTTP POST body.</li></ul></div>
 */
class Request
{
    public $fd = 0;
    public $streamId = 0;
    public $header;
    public $server;
    public $cookie;
    public $get;
    public $files;
    public $post;
    public $tmpfiles;

/**
 * <div id="swoole-http-request.destruct" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Http\Request::__destruct</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Http\Request::__destruct</span> — <span class="dc-title">Destruct the HTTP request.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-http-request.destruct-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Http\Request::__destruct</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-http-request.destruct-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-http-request.destruct-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 */
    public function __destruct() {}

    /**
     * Get the request content, kind of like function call fopen('php://input').
     *
     * This method has an alias of \Swoole\Http\Request::rawContent().
     *
     * @return string|false Return the request content back; return FALSE when error happens.
     * @see \Swoole\Http\Request::rawContent()
     * @since 4.5.0
     */
    public function getContent() {}

    /**
 * <div id="swoole-http-request.rawcontent" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Http\Request::rawcontent</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Http\Request::rawcontent</span> — <span class="dc-title">Get the raw HTTP POST body.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-http-request.rawcontent-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Http\Request::rawcontent</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">    This method is used for the POST data which isn't in the form of `application/x-www-form-urlencoded`.  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-swoole-http-request.rawcontent-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-http-request.rawcontent-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * Get the request content, kind of like function call fopen('php://input').
     *
     * Alias of method \Swoole\Http\Request::getContent().
     *
     * @return string|false Return the request content back; return FALSE when error happens.
     * @see \Swoole\Http\Request::getContent()
     */
    public function rawContent() {}

    /**
     * @return mixed
     */
    public function getData() {}

    /**
     * @param mixed|null $options
     * @return mixed
     */
    public static function create($options = null) {}

    /**
     * @param mixed $data
     * @return mixed
     */
    public function parse($data) {}

    /**
     * @return mixed
     */
    public function isCompleted() {}

    /**
     * @return mixed
     */
    public function getMethod() {}
}
