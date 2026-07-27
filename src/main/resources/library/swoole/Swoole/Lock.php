<?php

declare(strict_types=1);

namespace Swoole;

/**
 * <div id="class.swoole-lock" class="reference"> <h1 class="title">The Swoole\Lock class</h1>  <div class="partintro"><p class="verinfo">(PECL swoole &gt;= 1.9.0)</p>  <div class="section" id="swoole-lock.intro">   <h2 class="title">简介</h2>   <p class="para">   </p>  </div>  <div class="section" id="swoole-lock.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Swoole\Lock</strong>     </span>     {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-lock.destruct.php" class="methodname" style="color:#CC7832">__destruct</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-lock.lock.php" class="methodname" style="color:#CC7832">lock</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-lock.lock-read.php" class="methodname" style="color:#CC7832">lock_read</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-lock.trylock.php" class="methodname" style="color:#CC7832">trylock</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-lock.trylock-read.php" class="methodname" style="color:#CC7832">trylock_read</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-lock.unlock.php" class="methodname" style="color:#CC7832">unlock</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Swoole\Lock::__construct} — Construct a memory lock.</li><li>{@link Swoole\Lock::__destruct} — Destroy a Swoole memory lock.</li><li>{@link Swoole\Lock::lock} — Try to acquire the lock. It will block if the lock is not available.</li><li>{@link Swoole\Lock::lock_read} — Lock a read-write lock for reading.</li><li>{@link Swoole\Lock::trylock} — Try to acquire the lock and return straight away even the lock is not available.</li><li>{@link Swoole\Lock::trylock_read} — Try to lock a read-write lock for reading and return straight away even the lock is not available.</li><li>{@link Swoole\Lock::unlock} — Release the lock.</li></ul></div>
 */
class Lock
{
    public const FILELOCK = 2;
    public const MUTEX = 3;
    public const SEM = 4;
    public const RWLOCK = 1;
    public const SPINLOCK = 5;
    public $errCode = 0;

/**
 * <div id="swoole-lock.construct" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Lock::__construct</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Lock::__construct</span> — <span class="dc-title">Construct a memory lock.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-lock.construct-description">  <h3 class="title">说明</h3>  <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Lock::__construct</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$type</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$file_lock_location</span><span class="initializer"> = ?</span></span>)</div>  <p class="simpara">    Swoole lock is used for data synchronization between multiple threads or processes.  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-lock.construct-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">type</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">file_lock_location</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> </div>
 */
    public function __construct(int $type = self::MUTEX, string $filename = '') {}

    /**
 * <div id="swoole-lock.lock" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Lock::lock</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Lock::lock</span> — <span class="dc-title">Try to acquire the lock. It will block if the lock is not available.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-lock.lock-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Lock::lock</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-lock.lock-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-lock.lock-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return bool
     */
    public function lock() {}

    /**
     * @return bool
     */
    public function lockwait(float $timeout = 1.0) {}

    /**
 * <div id="swoole-lock.trylock" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Lock::trylock</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Lock::trylock</span> — <span class="dc-title">Try to acquire the lock and return straight away even the lock is not available.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-lock.trylock-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Lock::trylock</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-lock.trylock-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-lock.trylock-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return bool
     */
    public function trylock() {}

    /**
 * <div id="swoole-lock.lock-read" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Lock::lock_read</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Lock::lock_read</span> — <span class="dc-title">Lock a read-write lock for reading.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-lock.lock-read-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Lock::lock_read</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">    Lock a read-write lock for reading.  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-lock.lock-read-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-lock.lock-read-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return bool
     */
    public function lock_read() {}

    /**
 * <div id="swoole-lock.trylock-read" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Lock::trylock_read</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Lock::trylock_read</span> — <span class="dc-title">Try to lock a read-write lock for reading and return straight away even the lock is not available.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-lock.trylock-read-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Lock::trylock_read</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-lock.trylock-read-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-lock.trylock-read-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return bool
     */
    public function trylock_read() {}

    /**
 * <div id="swoole-lock.unlock" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Lock::unlock</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Lock::unlock</span> — <span class="dc-title">Release the lock.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-lock.unlock-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Lock::unlock</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-lock.unlock-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-lock.unlock-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return bool
     */
    public function unlock() {}


    public function destroy() {}
}
