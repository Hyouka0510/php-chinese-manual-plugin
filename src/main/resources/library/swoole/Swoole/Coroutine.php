<?php

declare(strict_types=1);

namespace Swoole;

/**
 * <div id="class.swoole-coroutine" class="reference"> <h1 class="title">The Swoole\Coroutine class</h1>  <div class="partintro"><p class="verinfo">(PECL swoole &gt;= 2.0.0)</p>  <div class="section" id="swoole-coroutine.intro">   <h2 class="title">简介</h2>   <p class="para">   </p>  </div>  <div class="section" id="swoole-coroutine.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Swoole\Coroutine</strong>     </span>     {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-coroutine.call-user-func.php" class="methodname" style="color:#CC7832">call_user_func</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">\$callback</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">...\$args</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-coroutine.call-user-func-array.php" class="methodname" style="color:#CC7832">call_user_func_array</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">\$callback</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$param_array</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-coroutine.cli-wait.php" class="methodname" style="color:#CC7832">cli_wait</a></span>(): <span class="type" style="color:#EAB766">ReturnType</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-coroutine.create.php" class="methodname" style="color:#CC7832">create</a></span>(): <span class="type" style="color:#EAB766">ReturnType</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-coroutine.getuid.php" class="methodname" style="color:#CC7832">getuid</a></span>(): <span class="type" style="color:#EAB766">ReturnType</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-coroutine.resume.php" class="methodname" style="color:#CC7832">resume</a></span>(): <span class="type" style="color:#EAB766">ReturnType</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-coroutine.suspend.php" class="methodname" style="color:#CC7832">suspend</a></span>(): <span class="type" style="color:#EAB766">ReturnType</span></div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Swoole\Coroutine::call_user_func} — Call a callback given by the first parameter</li><li>{@link Swoole\Coroutine::call_user_func_array} — Call a callback with an array of parameters</li><li>{@link Swoole\Coroutine::cli_wait} — Description</li><li>{@link Swoole\Coroutine::create} — Description</li><li>{@link Swoole\Coroutine::getuid} — Description</li><li>{@link Swoole\Coroutine::resume} — Description</li><li>{@link Swoole\Coroutine::suspend} — Description</li></ul></div>
 */
class Coroutine
{
    /**
 * <div id="swoole-coroutine.create" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Coroutine::create</h1>  <p class="verinfo">(PECL swoole &gt;= 2.0.0)</p><p class="refpurpose"><span class="refname">Swoole\Coroutine::create</span> — <span class="dc-title">Description</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-coroutine.create-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Coroutine::create</strong></span>(): <span class="type" style="color:#EAB766">ReturnType</span></div>  <p class="para rdfs-comment">  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-swoole-coroutine.create-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-coroutine.create-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return mixed
     */
    public static function create(callable $func, ...$params) {}

    /**
     * @param mixed $callback
     * @return mixed
     */
    public static function defer($callback) {}

    /**
     * To set runtime configurations of coroutines.
     *
     * @return void
     */
    public static function set(array $options) {}

    /**
     * To get runtime configurations of coroutines.
     *
     * @return array|null
     */
    public static function getOptions() {}

    /**
     * @param mixed $cid
     * @return mixed
     */
    public static function exists($cid) {}

    /**
     * @return mixed
     */
    public static function yield() {}

    /**
     * @param mixed $cid
     * @return mixed
     */
    public static function cancel($cid) {}

    /**
     * Waits for a list of coroutines to finish.
     *
     * This method is similar to class \Swoole\Coroutine\WaitGroup and \Swoole\Coroutine\Barrier. They are different
     * implementations of the same functionality.
     *
     * @param array $cid_array An array of coroutines.
     * @param int $timeout
     * @return bool TRUE if succeeds; otherwise FALSE.
     * @see \Swoole\Coroutine\WaitGroup
     * @see \Swoole\Coroutine\Barrier
     * @since 4.8.0
     */
    public static function join($cid_array, $timeout = -1) {}

    /**
     * @return mixed
     */
    public static function isCanceled() {}

    /**
 * <div id="swoole-coroutine.suspend" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Coroutine::suspend</h1>  <p class="verinfo">(PECL swoole &gt;= 2.0.0)</p><p class="refpurpose"><span class="refname">Swoole\Coroutine::suspend</span> — <span class="dc-title">Description</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-coroutine.suspend-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Coroutine::suspend</strong></span>(): <span class="type" style="color:#EAB766">ReturnType</span></div>  <p class="para rdfs-comment">  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-swoole-coroutine.suspend-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-coroutine.suspend-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return mixed
     */
    public static function suspend() {}

    /**
 * <div id="swoole-coroutine.resume" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Coroutine::resume</h1>  <p class="verinfo">(PECL swoole &gt;= 2.0.0)</p><p class="refpurpose"><span class="refname">Swoole\Coroutine::resume</span> — <span class="dc-title">Description</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-coroutine.resume-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Coroutine::resume</strong></span>(): <span class="type" style="color:#EAB766">ReturnType</span></div>  <p class="para rdfs-comment">  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-swoole-coroutine.resume-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-coroutine.resume-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @param mixed $cid
     * @return mixed
     */
    public static function resume($cid) {}

    /**
     * @return mixed
     */
    public static function stats() {}

    /**
     * @return mixed
     */
    public static function getCid() {}

    /**
 * <div id="swoole-coroutine.getuid" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Coroutine::getuid</h1>  <p class="verinfo">(PECL swoole &gt;= 2.0.0)</p><p class="refpurpose"><span class="refname">Swoole\Coroutine::getuid</span> — <span class="dc-title">Description</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-coroutine.getuid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Coroutine::getuid</strong></span>(): <span class="type" style="color:#EAB766">ReturnType</span></div>  <p class="para rdfs-comment">  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-swoole-coroutine.getuid-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-coroutine.getuid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return mixed
     */
    public static function getuid() {}

    /**
     * @param mixed|null $cid
     * @return mixed
     */
    public static function getPcid($cid = null) {}

    /**
     * @param mixed|null $cid
     * @return mixed
     */
    public static function getContext($cid = null) {}

    /**
     * @param mixed|null $cid
     * @param mixed|null $options
     * @param mixed|null $limit
     * @return mixed
     */
    public static function getBackTrace($cid = null, $options = null, $limit = null) {}

    /**
     * @param mixed|null $cid
     * @param mixed|null $options
     * @param mixed|null $limit
     * @return mixed
     */
    public static function printBackTrace($cid = null, $options = null, $limit = null) {}

    /**
     * @param mixed|null $cid
     * @return mixed
     */
    public static function getElapsed($cid = null) {}

    /**
     * Get memory usage of a coroutine.
     *
     * @param int $cid If this parameter is not passed in, current coroutine ID will be used.
     * @return int|false Memory usage of the coroutine; FALSE if the specified coroutine doesn't exist.
     * @since 4.8.0
     */
    public static function getStackUsage(?int $cid = null) {}

    /**
     * @return mixed
     */
    public static function list() {}

    /**
     * @return mixed
     */
    public static function listCoroutines() {}

    /**
     * @return mixed
     */
    public static function enableScheduler() {}

    /**
     * @return mixed
     */
    public static function disableScheduler() {}

    /**
     * @param mixed $domain_name
     * @param mixed|null $family
     * @param mixed|null $timeout
     * @return mixed
     */
    public static function gethostbyname($domain_name, $family = null, $timeout = null) {}

    /**
     * @param mixed $domain_name
     * @param mixed|null $timeout
     * @param mixed|null $type
     * @return mixed
     */
    public static function dnsLookup($domain_name, $timeout = null, $type = null) {}

    /**
     * @param mixed $command
     * @param mixed|null $get_error_stream
     * @return mixed
     */
    public static function exec($command, $get_error_stream = null) {}

    /**
     * @param mixed $seconds
     * @return mixed
     */
    public static function sleep($seconds) {}

    /**
     * @param mixed $hostname
     * @param mixed|null $family
     * @param mixed|null $socktype
     * @param mixed|null $protocol
     * @param mixed|null $service
     * @param mixed|null $timeout
     * @return mixed
     */
    public static function getaddrinfo($hostname, $family = null, $socktype = null, $protocol = null, $service = null, $timeout = null) {}

    /**
     * @param mixed $path
     * @return mixed
     */
    public static function statvfs($path) {}

    /**
     * @param mixed $filename
     * @return mixed
     */
    public static function readFile($filename) {}

    /**
     * @param mixed $filename
     * @param mixed $data
     * @param mixed|null $flags
     * @return mixed
     */
    public static function writeFile($filename, $data, $flags = null) {}

    /**
     * @param mixed|null $timeout
     * @return mixed
     */
    public static function wait($timeout = null) {}

    /**
     * @param mixed $pid
     * @param mixed|null $timeout
     * @return mixed
     */
    public static function waitPid($pid, $timeout = null) {}

    /**
     * @param mixed $signo
     * @param mixed|null $timeout
     * @return mixed
     */
    public static function waitSignal($signo, $timeout = null) {}

    /**
     * @param mixed $fd
     * @param mixed|null $events
     * @param mixed|null $timeout
     * @return mixed
     */
    public static function waitEvent($fd, $events = null, $timeout = null) {}

    /**
     * @param mixed $handle
     * @param mixed|null $length
     * @return mixed
     */
    public static function fread($handle, $length = null) {}

    /**
     * @param mixed $handle
     * @return mixed
     */
    public static function fgets($handle) {}

    /**
     * @param mixed $handle
     * @param mixed $string
     * @param mixed|null $length
     * @return mixed
     */
    public static function fwrite($handle, $string, $length = null) {}
}
