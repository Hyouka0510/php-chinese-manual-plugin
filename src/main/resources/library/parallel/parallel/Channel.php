<?php

namespace parallel;

/**
 * <div id="class.parallel-channel" class="reference"> <h1 class="title">The parallel\Channel class</h1>  <div class="partintro"><p class="verinfo">(0.9.0)</p>  <div class="section">    <h2 class="title">Unbuffered Channels</h2>    <p class="simpara">     An unbuffered channel will block on calls to <span class="methodname" style="color:#CC7832">{@link parallel\Channel::send()}</span> until there is a receiver, and block on calls to     <span class="methodname" style="color:#CC7832">{@link parallel\Channel::recv()}</span> until there is a sender. This means an unbuffered channel is not only a way to share data among tasks     but also a simple method of synchronization.    </p>    <p class="simpara">     An unbuffered channel is the fastest way to share data among tasks, requiring the least copying.    </p>  </div>  <div class="section">    <h2 class="title">Buffered Channels</h2>    <p class="simpara">     A buffered channel will not block on calls to <span class="methodname" style="color:#CC7832">{@link parallel\Channel::send()}</span> until capacity is reached, calls to     <span class="methodname" style="color:#CC7832">{@link parallel\Channel::recv()}</span> will block until there is data in the buffer.    </p>  </div>  <div class="section">    <h2 class="title">Closures over Channels</h2>    <p class="simpara">     A powerful feature of parallel channels is that they allow the exchange of closures between tasks (and runtimes).    </p>    <p class="simpara">     When a closure is sent over a channel the closure is buffered, it doesn't change the buffering of the channel transmitting the closure,     but it does effect the static scope inside the closure: The same closure sent to different runtimes, or the same runtime,     will not share their static scope.    </p>    <p class="simpara">     This means that whenever a closure is executed that was transmitted by a channel, static state will be as it was when the closure was buffered.    </p>  </div>  <div class="section">   <h2 class="title">Anonymous Channels</h2>   <p class="simpara">    The anonymous channel constructor allows the programmer to avoid assigning names to every channel: parallel will generate a unique name for anonymous    channels.   </p>  </div>  <div class="section" id="parallel-channel.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">final</span>      <span class="modifier">class</span> <strong class="classname">parallel\Channel</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Anonymous Constructor </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-channel.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>()</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-channel.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$capacity</span></span>)</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Access </div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-channel.make.php" class="methodname" style="color:#CC7832">make</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>): <span class="type" style="color:#EAB766">Channel</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-channel.make.php" class="methodname" style="color:#CC7832">make</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$capacity</span></span>): <span class="type" style="color:#EAB766">Channel</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-channel.open.php" class="methodname" style="color:#CC7832">open</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>): <span class="type" style="color:#EAB766">Channel</span></div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Sharing </div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-channel.recv.php" class="methodname" style="color:#CC7832">recv</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-channel.send.php" class="methodname" style="color:#CC7832">send</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Closing </div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parallel-channel.close.php" class="methodname" style="color:#CC7832">close</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// Constant for Infinitely Buffered </div>    <div class="fieldsynopsis">     <span class="modifier">const</span>      <var class="fieldsynopsis_varname"><var class="varname">Infinite</var></var>;</div>   }</div>  </div> </div>      <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link parallel\Channel::__construct} — Channel Construction</li><li>{@link parallel\Channel::make} — Access</li><li>{@link parallel\Channel::open} — Access</li><li>{@link parallel\Channel::recv} — Sharing</li><li>{@link parallel\Channel::send} — Sharing</li><li>{@link parallel\Channel::close} — Closing</li></ul></div>
 * 
 * ### Unbuffered Channels
 * ---------------------------------------------------------------------------------------------------------------------
 * An unbuffered channel will block on calls to @see Channel::send() until there is a receiver, and block on calls
 * to @see Channel::recv() until there is a sender. This means an unbuffered channel is not only a way to share
 * data among tasks but also a simple method of synchronization.
 *
 *  An unbuffered channel is the fastest way to share data among tasks, requiring the least copying.
 *
 * ### Buffered Channels
 * ---------------------------------------------------------------------------------------------------------------------
 *  A buffered channel will not block on calls to @see Channel::send() until capacity is reached, calls to
 * @see Channel::recv() will block until there is data in the buffer.
 *
 * ### Closures over Channels
 * ---------------------------------------------------------------------------------------------------------------------
 * A powerful feature of parallel channels is that they allow the exchange of closures between tasks (and runtimes).
 *
 * When a closure is sent over a channel the closure is buffered, it doesn't change the buffering of the channel
 *     transmitting the closure, but it does effect the static scope inside the closure: The same closure sent to
 *     different runtimes, or the same runtime, will not share their static scope.
 *
 * This means that whenever a closure is executed that was transmitted by a channel, static state will be as it was
 *     when the closure was buffered.
 *
 * ### Anonymous Channels
 * ---------------------------------------------------------------------------------------------------------------------
 * The anonymous channel constructor allows the programmer to avoid assigning names to every channel: parallel will
 *     generate a unique name for anonymous channels.
 */
final class Channel
{
    /**
     * Constant for Infinitely Buffered
     */
    public const Infinite = -1;

    /* Anonymous Constructor */

    /**
 * <div id="parallel-channel.construct" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Channel::__construct</h1>  <p class="verinfo">(1.1.0)</p><p class="refpurpose"><span class="refname">parallel\Channel::__construct</span> — <span class="dc-title">Channel Construction</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-channel.construct-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Channel::__construct</strong></span>()</div>  <p class="simpara">   Shall make an anonymous unbuffered channel  </p>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Channel::__construct</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$capacity</span></span>)</div>  <p class="simpara">   Shall make an anonymous buffered channel with the given capacity  </p> </div> <div class="refsect1 parameters" id="refsect1-parallel-channel.construct-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">capacity</span></dt>    <dd>     <span class="simpara">      May be <span class="type" style="color:#EAB766">Channel::Infinite</span> or a positive integer     </span>    </dd>     </dl> </div></div>
 * 
     * Shall make an anonymous unbuffered channel
     * Shall make an anonymous buffered channel with the given capacity
     *
     * @param null|int $capacity May be Channel::Infinite or a positive integer
     */
    public function __construct(?int $capacity = null) {}

    /* Access */

    /**
 * <div id="parallel-channel.make" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Channel::make</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Channel::make</span> — <span class="dc-title">Access</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-channel.make-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Channel::make</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>): <span class="type" style="color:#EAB766">Channel</span></div>  <p class="simpara">   Shall make an unbuffered channel with the given name  </p>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Channel::make</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$capacity</span></span>): <span class="type" style="color:#EAB766">Channel</span></div>  <p class="simpara">   Shall make a buffered channel with the given name and capacity  </p> </div> <div class="refsect1 parameters" id="refsect1-parallel-channel.make-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">name</span></dt>    <dd>     <span class="simpara">      The name of the channel.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">capacity</span></dt>    <dd>     <span class="simpara">      May be <span class="type" style="color:#EAB766">Channel::Infinite</span> or a positive integer     </span>    </dd>     </dl> </div> <div class="refsect1 exceptions" id="refsect1-parallel-channel.make-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Channel\Error\Existence</span> if channel already exists.   </p>  </div> </div></div>
 * 
     * Shall make an unbuffered channel with the given name
     * Shall make a buffered channel with the given name and capacity
     *
     * @param string $name     The name of the channel.
     * @param null|int $capacity May be Channel::Infinite or a positive integer
     *
     * @return Channel
     *
     * @throws Channel\Error\Existence if channel already exists.
     */
    public static function make(string $name, ?int $capacity = null): Channel {}

    /**
 * <div id="parallel-channel.open" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Channel::open</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Channel::open</span> — <span class="dc-title">Access</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-channel.open-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Channel::open</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>): <span class="type" style="color:#EAB766">Channel</span></div>  <p class="simpara">   Shall open the channel with the given name  </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-channel.open-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Channel\Error\Existence</span> if channel does not exist.   </p>  </div> </div></div>
 * 
     * Shall open the channel with the given name
     *
     * @param string $name
     * @return Channel
     *
     * @throws Channel\Error\Existence if channel does not exist.
     */
    public static function open(string $name): Channel {}

    /* Sharing */

    /**
 * <div id="parallel-channel.send" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Channel::send</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Channel::send</span> — <span class="dc-title">Sharing</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-channel.send-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Channel::send</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="simpara">   Shall send the given value on this channel  </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-channel.send-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Channel\Error\Closed</span> if channel is closed.   </p>  </div>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Channel\Error\IllegalValue</span> if value is illegal.   </p>  </div> </div></div>
 * 
     * Shall send the given value on this channel
     * @param mixed $value
     *
     * @throws Channel\Error\Closed if channel is closed.
     * @throws Channel\Error\IllegalValue if value is illegal.
     */
    public function send($value): void {}

    /**
 * <div id="parallel-channel.recv" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Channel::recv</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Channel::recv</span> — <span class="dc-title">Sharing</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-channel.recv-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Channel::recv</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="simpara">   Shall recv a value from this channel  </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-channel.recv-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Channel\Error\Closed</span> if channel is closed.   </p>  </div> </div></div>
 * 
     * Shall recv a value from this channel
     * @return mixed
     *
     * @throws Channel\Error\Closed if channel is closed.
     */
    public function recv() {}

    /* Closing */

    /**
 * <div id="parallel-channel.close" class="refentry"> <div class="refnamediv">  <h1 class="refname">parallel\Channel::close</h1>  <p class="verinfo">(0.9.0)</p><p class="refpurpose"><span class="refname">parallel\Channel::close</span> — <span class="dc-title">Closing</span></p> </div> <div class="refsect1 description" id="refsect1-parallel-channel.close-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>parallel\Channel::close</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="simpara">   Shall close this channel  </p> </div> <div class="refsect1 exceptions" id="refsect1-parallel-channel.close-exceptions">  <h3 class="title">Exceptions</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="simpara">    Shall throw <span class="type" style="color:#EAB766">parallel\Channel\Error\Closed</span> if channel is closed.   </p>  </div> </div></div>
 * 
     * Shall close this channel
     * @throws Channel\Error\Closed if channel is closed.
     */
    public function close(): void {}

    /**
     * Returns name of channel
     * @return string
     */
    public function __toString(): string {}
}
