<?php

namespace parallel;

use Countable;
use parallel\Events\Event;
use parallel\Events\Input;
use Traversable;

/**
 * <div id="class.parallel-events" class="reference"> <h1 class="title">The parallel\Events class</h1>  <div class="partintro"><p class="verinfo">(0.9.0)</p>  <div class="section">    <h2 class="title">The Event Loop</h2>    <p class="simpara">     The Event loop monitors the state of sets of futures and or channels (targets) in order to perform read (<span class="methodname" style="color:#CC7832">{@link parallel\Future::value()}</span>, <span class="methodname" style="color:#CC7832">{@link parallel\Channel::recv()}</span>) and write (<span class="methodname" style="color:#CC7832">{@link parallel\Channel::send()}</span>) operations as the targets become available and the operations may be performed without blocking the event loop.    </p>  </div>  <div class="section" id="parallel-events.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">final</span>      <span class="modifier">class</span> <strong class="classname">parallel\Events</strong>     </span>     <span class="oointerface"><span class="modifier">implements</span>        <a href="https://php.net/manual/zh/class.countable.php" class="interfacename">Countable</a></span><span class="oointerface">,  <a href="https://php.net/manual/zh/class.traversable.php" class="interfacename">Traversable</a></span> {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Input </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-events.setinput.php" class="methodname" style="color:#CC7832">setInput</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766">Input</span> <span class="parameter" style="color:#3A95FF">\$input</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Targets </div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-events.addchannel.php" class="methodname" style="color:#CC7832">addChannel</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.parallel-channel.php" class="type parallel\Channel" style="color:#EAB766">parallel\Channel</a></span> <span class="parameter" style="color:#3A95FF">\$channel</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-events.addfuture.php" class="methodname" style="color:#CC7832">addFuture</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.parallel-future.php" class="type parallel\Future" style="color:#EAB766">parallel\Future</a></span> <span class="parameter" style="color:#3A95FF">\$future</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-events.remove.php" class="methodname" style="color:#CC7832">remove</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$target</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Behaviour </div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-events.setblocking.php" class="methodname" style="color:#CC7832">setBlocking</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$blocking</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-events.settimeout.php" class="methodname" style="color:#CC7832">setTimeout</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Polling </div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-events.poll.php" class="methodname" style="color:#CC7832">poll</a></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.parallel-events-event.php" class="type parallel\Events\Event" style="color:#EAB766">parallel\Events\Event</a></span></span></div>   }</div>  </div> </div>              <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link parallel\Events::setBlocking} — Behaviour</li><li>{@link parallel\Events::setTimeout} — Behaviour</li><li>{@link parallel\Events::setInput} — Input</li><li>{@link parallel\Events::addChannel} — Targets</li><li>{@link parallel\Events::addFuture} — Targets</li><li>{@link parallel\Events::remove} — Targets</li><li>{@link parallel\Events::poll} — Polling</li></ul></div>
 * 
 * ### The Event Loop
 * ---------------------------------------------------------------------------------------------------------------------
 * The Event loop monitors the state of sets of futures and or channels (targets) in order to perform read
 * (Future::value(), Channel::recv()) and write (Channel::send()) operations as the targets become available and the
 * operations may be performed without blocking the event loop.
 */
final class Events implements Countable, Traversable
{
    /* Input */

    /**
 * <div id="parallel-events.setinput" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Events::setInput</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Events::setInput</span> — <span class="dc-title">Input</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-events.setinput-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Events::setInput</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766">Input</span> <span class="parameter" style="color:#3A95FF">\$input</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="simpara">    Shall set <span class="parameter" style="color:#3A95FF">input</span> for this event loop  </p> </div></div>
 * 
     * Shall set input for this event loop
     * @param Events\Input $input
     */
    public function setInput(Input $input): void {}

    /* Targets */

    /**
 * <div id="parallel-events.addchannel" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Events::addChannel</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Events::addChannel</span> — <span class="dc-title">Targets</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-events.addchannel-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Events::addChannel</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.parallel-channel.php" class="type parallel\Channel" style="color:#EAB766">parallel\Channel</a></span> <span class="parameter" style="color:#3A95FF">\$channel</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="simpara">    Shall watch for events on the given <span class="parameter" style="color:#3A95FF">channel</span>  </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-events.addchannel-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Events\Error\Existence</span> if channel was already added.   </p>  </div> </div></div>
 * 
     * Shall watch for events on the given channel
     * @param Channel $channel
     *
     * @throws Events\Error\Existence if channel was already added.
     */
    public function addChannel(Channel $channel): void {}

    /**
 * <div id="parallel-events.addfuture" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Events::addFuture</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Events::addFuture</span> — <span class="dc-title">Targets</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-events.addfuture-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Events::addFuture</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.parallel-future.php" class="type parallel\Future" style="color:#EAB766">parallel\Future</a></span> <span class="parameter" style="color:#3A95FF">\$future</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="simpara">    Shall watch for events on the given <span class="parameter" style="color:#3A95FF">future</span>  </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-events.addfuture-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Events\Error\Existence</span> if target with the given name was already added.   </p>  </div> </div></div>
 * 
     * Shall watch for events on the given future
     *
     * @param string $name
     * @param Future $future
     *
     * @throws Events\Error\Existence if target with the given name was already added.
     */
    public function addFuture(string $name, Future $future): void {}

    /**
 * <div id="parallel-events.remove" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Events::remove</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Events::remove</span> — <span class="dc-title">Targets</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-events.remove-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Events::remove</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$target</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="simpara">    Shall remove the given <span class="parameter" style="color:#3A95FF">target</span>  </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-events.remove-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Events\Error\Existence</span> if target with the given name was not found.   </p>  </div> </div></div>
 * 
     * Shall remove the given target
     * @param string $target
     *
     * @throws Events\Error\Existence if target with the given name was not found.
     */
    public function remove(string $target): void {}

    /* Behaviour */

    /**
 * <div id="parallel-events.setblocking" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Events::setBlocking</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Events::setBlocking</span> — <span class="dc-title">Behaviour</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-events.setblocking-description">  <h3 class="title">说明</h3>  <p class="simpara">   By default when events are polled for, blocking will occur (at the PHP level) until the first event can be returned: Setting blocking mode to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> will cause   poll to return control if the first target polled is not ready.  </p>  <p class="simpara">   This differs from setting a timeout of 0 with <span class="methodname" style="color:#CC7832">{@link parallel\Events::setTimeout()}</span>, since a timeout of 0, while allowed, will cause an exception   to be raised, which may be extremely slow or wasteful if what is really desired is non-blocking behaviour.  </p>  <p class="simpara">   A non-blocking loop effects the return value of <span class="methodname" style="color:#CC7832">{@link parallel\Events::poll()}</span>, such that it may be <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> before all events have been processed.  </p>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Events::setBlocking</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$blocking</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="simpara">    Shall set blocking mode  </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-events.setblocking-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Events\Error</span> if loop has timeout set.   </p>  </div> </div></div>
 * 
     * Shall set blocking mode
     *
     * By default when events are polled for, blocking will occur (at the PHP level) until the first event can be
     * returned: Setting blocking mode to false will cause poll to return control if the first target polled is not
     * ready.
     *
     * This differs from setting a timeout of 0 with @see Events::setTimeout(), since a timeout of 0, while
     * allowed, will cause an exception to be raised, which may be extremely slow or wasteful if what is really desired
     * is non-blocking behaviour.
     *
     * A non-blocking loop effects the return value of @see Events::poll(), such that it may be null before all events
     * have been processed.
     *
     * @param bool $blocking
     *
     * @throws Events\Error if loop has timeout set.
     */
    public function setBlocking(bool $blocking): void {}

    /* Behaviour */

    /**
 * <div id="parallel-events.settimeout" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Events::setTimeout</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Events::setTimeout</span> — <span class="dc-title">Behaviour</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-events.settimeout-description">  <h3 class="title">说明</h3>  <p class="simpara">   By default when events are polled for, blocking will occur (at the PHP level) until the first event can be returned: Setting the timeout causes an exception to be   thrown when the timeout is reached.  </p>  <p class="simpara">   This differs from setting blocking mode to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> with <span class="methodname" style="color:#CC7832">{@link parallel\Events::setBlocking()}</span>, which will not cause an exception to be thrown.  </p>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Events::setTimeout</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="simpara">    Shall set the timeout in microseconds  </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-events.settimeout-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Events\Error</span> if loop is non-blocking.   </p>  </div> </div></div>
 * 
     * Shall set the timeout in microseconds
     *
     * By default when events are polled for, blocking will occur (at the PHP level) until the first event can be
     * returned: Setting the timeout causes an exception to be thrown when the timeout is reached.
     *
     * This differs from setting blocking mode to false with @see Events::setBlocking(), which will not cause an
     * exception to be thrown.
     *
     * @throws Events\Error if loop is non-blocking.
     *
     * @param int $timeout
     */
    public function setTimeout(int $timeout): void {}

    /* Polling */

    /**
 * <div id="parallel-events.poll" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Events::poll</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Events::poll</span> — <span class="dc-title">Polling</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-events.poll-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Events::poll</strong></span>(): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.parallel-events-event.php" class="type parallel\Events\Event" style="color:#EAB766">parallel\Events\Event</a></span></span></div>  <p class="simpara">    Shall poll for the next event  </p> </div> <div class="refsect1 returnvalues" id="refsect1-parallel-events.poll-returnvalues">  <h3 class="title">返回值</h3>   <p class="simpara">    Should there be no targets remaining, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> shall be returned   </p>   <p class="simpara">    Should this be a non-blocking loop, and blocking would occur, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> shall be returned   </p>   <p class="simpara">    Otherwise, the <span class="classname"><a href="https://php.net/manual/zh/class.parallel-events-event.php" class="classname">parallel\Events\Event</a></span> returned describes the event.   </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-events.poll-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Events\Error\Timeout</span> if timeout is used and reached.   </p>  </div> </div></div>
 * 
     * Shall poll for the next event
     *
     * Should there be no targets remaining, null shall be returned
     * Should this be a non-blocking loop, and blocking would occur, null shall be returned
     * Otherwise, the Event returned describes the event.
     *
     * @return Event|null
     *
     * @throws Events\Error\Timeout if timeout is used and reached.
     */
    public function poll(): ?Event {}

    /**
     * @return int
     */
    public function count(): int {}
}
