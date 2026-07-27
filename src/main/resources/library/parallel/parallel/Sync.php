<?php

namespace parallel;

/**
 * <div id="class.parallel-sync" class="reference"> <h1 class="title">The parallel\Sync class</h1>  <div class="partintro"><p class="verinfo">(1.1.0)</p>  <div class="section">    <h2 class="title">Low Level Synchronization</h2>    <p class="simpara">     The <span class="classname"><strong class="classname">parallel\Sync</strong></span> class provides access to low level synchronization primitives, mutex, condition variables, and allows the implementation of semaphores.    </p>    <p class="simpara">     Synchronization for most applications is much better implemented using channels, however, in some cases authors of low level code may find it useful to be able to access     these lower level mechanisms.    </p>  </div>  <div class="section" id="parallel-sync.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">final</span>      <span class="modifier">class</span> <strong class="classname">parallel\Sync</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Constructor </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-sync.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>()</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-sync.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">scalar</span> <span class="parameter" style="color:#3A95FF">\$value</span></span>)</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Access </div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-sync.get.php" class="methodname" style="color:#CC7832">get</a></span>(): <span class="type" style="color:#EAB766">scalar</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-sync.set.php" class="methodname" style="color:#CC7832">set</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">scalar</span> <span class="parameter" style="color:#3A95FF">\$value</span></span>)</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Synchronization </div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-sync.wait.php" class="methodname" style="color:#CC7832">wait</a></span>()</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-sync.notify.php" class="methodname" style="color:#CC7832">notify</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$all</span><span class="initializer"> = ?</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-sync.invoke.php" class="methodname" style="color:#CC7832">__invoke</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">\$critical</span></span>)</div>   }</div>  </div> </div>            <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link parallel\Sync::__construct} — Construction</li><li>{@link parallel\Sync::get} — Access</li><li>{@link parallel\Sync::set} — Access</li><li>{@link parallel\Sync::wait} — Synchronization</li><li>{@link parallel\Sync::notify} — Synchronization</li><li>{@link parallel\Sync::__invoke} — Synchronization</li></ul></div>
 * 
 * The Sync class provides access to low level synchronization primitives, mutex, condition variables, and allows the
 * implementation of semaphores.
 *
 * Synchronization for most applications is much better implemented using channels, however, in some cases authors of
 * low level code may find it useful to be able to access these lower level mechanisms.
 */
final class Sync
{
    /* Constructor */

    /**
 * <div id="parallel-sync.construct" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Sync::__construct</h1>  <p class="verinfo">(1.1.0)</p><p class="refpurpose"><span class="refname">parallel\Sync::__construct</span> — <span class="dc-title">Construction</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-sync.construct-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Sync::__construct</strong></span>()</div>  <p class="simpara">   Shall construct a new synchronization object with no value  </p>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Sync::__construct</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">scalar</span> <span class="parameter" style="color:#3A95FF">\$value</span></span>)</div>  <p class="simpara">   Shall construct a new synchronization object containing the given scalar value  </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-sync.construct-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Sync\Error\IllegalValue</span> if <span class="parameter" style="color:#3A95FF">value</span> is non-scalar.   </p>  </div> </div></div>
 * 
     * Shall construct a new synchronization object with no value
     * Shall construct a new synchronization object containing the given scalar value
     *
     * @param string|int|float|bool $value
     *
     * @throws Sync\Error\IllegalValue if value is non-scalar.
     */
    public function __construct($value = null) {}

    /* Access */

    /**
 * <div id="parallel-sync.get" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Sync::get</h1>  <p class="verinfo">(1.1.0)</p><p class="refpurpose"><span class="refname">parallel\Sync::get</span> — <span class="dc-title">Access</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-sync.get-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Sync::get</strong></span>(): <span class="type" style="color:#EAB766">scalar</span></div>  <p class="simpara">   Shall atomically return the synchronization objects value  </p> </div></div>
 * 
     * Shall atomically return the synchronization objects value
     * @return string|int|float|bool
     */
    public function get() {}

    /**
 * <div id="parallel-sync.set" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Sync::set</h1>  <p class="verinfo">(1.1.0)</p><p class="refpurpose"><span class="refname">parallel\Sync::set</span> — <span class="dc-title">Access</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-sync.set-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Sync::set</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">scalar</span> <span class="parameter" style="color:#3A95FF">\$value</span></span>)</div>  <p class="simpara">   Shall atomically set the value of the synchronization object  </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-sync.set-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Sync\Error\IllegalValue</span> if <span class="parameter" style="color:#3A95FF">value</span> is non-scalar.   </p>  </div> </div></div>
 * 
     * Shall atomically set the value of the synchronization object
     * @param string|int|float|bool $value
     *
     * @throws Sync\Error\IllegalValue if value is non-scalar.
     */
    public function set($value) {}

    /* Synchronization */

    /**
 * <div id="parallel-sync.wait" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Sync::wait</h1>  <p class="verinfo">(1.1.0)</p><p class="refpurpose"><span class="refname">parallel\Sync::wait</span> — <span class="dc-title">Synchronization</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-sync.wait-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Sync::wait</strong></span>()</div>  <p class="simpara">   Shall wait for notification on this synchronization object  </p> </div></div>
 * 
     * Shall wait for notification on this synchronization object
     * @return bool
     */
    public function wait(): bool {}

    /**
 * <div id="parallel-sync.notify" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Sync::notify</h1>  <p class="verinfo">(1.1.0)</p><p class="refpurpose"><span class="refname">parallel\Sync::notify</span> — <span class="dc-title">Synchronization</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-sync.notify-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Sync::notify</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$all</span><span class="initializer"> = ?</span></span>)</div>  <p class="simpara">   Shall notify one (by default) or all threads waiting on the synchronization object  </p> </div></div>
 * 
     * Shall notify one (by default) or all threads waiting on the synchronization object
     * @param bool $all
     *
     * @return bool
     */
    public function notify(?bool $all = null): bool {}

    /**
 * <div id="parallel-sync.invoke" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Sync::__invoke</h1>  <p class="verinfo">(1.1.0)</p><p class="refpurpose"><span class="refname">parallel\Sync::__invoke</span> — <span class="dc-title">Synchronization</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-sync.invoke-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Sync::__invoke</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">\$critical</span></span>)</div>  <p class="simpara">   Shall exclusively enter into the critical code  </p> </div></div>
 * 
     * Shall exclusively enter into the critical code
     * @param callable $block
     */
    public function __invoke(callable $block) {}
}
