<?php

declare(strict_types=1);

namespace Swoole;

/**
 * <div id="class.swoole-runtime" class="reference"> <h1 class="title">The Swoole\Runtime class</h1>  <div class="partintro"><p class="verinfo">(No version information available, might only be in Git)</p>    <div class="section" id="swoole-runtime.intro">   <h2 class="title">简介</h2>   <p class="para">    Swoole\Runtime provides coroutine support for various PHP functions through hook mechanism,    allowing synchronous code to work asynchronously in coroutine environment.   </p>  </div>    <div class="section" id="swoole-runtime.synopsis">   <h2 class="title">类摘要</h2>      <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>        <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Swoole\Runtime</strong>     </span>     {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-runtime.enable-coroutine.php" class="methodname" style="color:#CC7832">enableCoroutine</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$flags</span><span class="initializer"> = SWOOLE_HOOK_ALL</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-runtime.get-hook-flags.php" class="methodname" style="color:#CC7832">getHookFlags</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-runtime.set-hook-flags.php" class="methodname" style="color:#CC7832">setHookFlags</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$flags</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>   }</div>     </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Swoole\Runtime::enableCoroutine} — Enable coroutine for specified functions</li><li>{@link Swoole\Runtime::getHookFlags} — Get current hook flags</li><li>{@link Swoole\Runtime::setHookFlags} — Set hook flags for coroutine</li></ul></div>
 */
class Runtime
{
    /**
     * To enable/disable runtime hooks in coroutines.
     *
     * For backward-compatible reason, there are four different ways to call this method:
     *   #1. Swoole\Runtime::enableCoroutine();             // Enable runtime hooks represented by constant SWOOLE_HOOK_ALL.
     *   #2. Swoole\Runtime::enableCoroutine($flags);       // Enable specified runtime hooks.
     *   #3. Swoole\Runtime::enableCoroutine(true, $flags); // Enable specified runtime hooks.
     *   #4. Swoole\Runtime::enableCoroutine(false);        // Disable runtime hooks.
     * Following statements are of the same (when used to disable runtime hooks):
     *   Swoole\Runtime::enableCoroutine(0);       // #2
     *   Swoole\Runtime::enableCoroutine(true, 0); // #3
     *   Swoole\Runtime::enableCoroutine(false);   // #4
     *
     * @param int|bool $enable
     * @return bool TRUE on success, or FALSE on failure.
     */
    public static function enableCoroutine($enable = true, int $flags = SWOOLE_HOOK_ALL) {}

    /**
     * @return int
     */
    public static function getHookFlags() {}

    /**
     * @return bool true on success or false on failure
     */
    public static function setHookFlags(int $flags) {}
}
