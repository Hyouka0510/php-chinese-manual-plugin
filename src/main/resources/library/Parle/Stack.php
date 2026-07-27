<?php

namespace Parle;

use JetBrains\PhpStorm\Immutable;

/**
 * <div id="class.parle-stack" class="reference"> <h1 class="title">The Parle\Stack class</h1>  <div class="partintro"><p class="verinfo">(PECL parle &gt;= 0.7.0)</p>  <div class="section" id="parle-stack.intro">   <h2 class="title">简介</h2>   <p class="para">   <span class="classname"><strong class="classname">Parle\Stack</strong></span> is a LIFO stack. The elements are inserted and removed only from one end.   </p>  </div>  <div class="section" id="parle-stack.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Parle\Stack</strong>     </span>     {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.parle-stack.php#parle-stack.props.empty">\$<var class="varname">empty</var></a></var><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.parle-stack.php#parle-stack.props.size">\$<var class="varname">size</var></a></var><span class="initializer"> = 0</span>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.parle-stack.php#parle-stack.props.top">\$<var class="varname">top</var></a></var>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parle-stack.pop.php" class="methodname" style="color:#CC7832">pop</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/parle-stack.push.php" class="methodname" style="color:#CC7832">push</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$item</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>   }</div>  </div>  <div class="section" id="parle-stack.props">   <h2 class="title">属性</h2>   <dl>         <dt id="parle-stack.props.empty"><var class="varname">empty</var></dt>     <dd>      <p class="para">Whether the stack is empty, readonly.</p>     </dd>             <dt id="parle-stack.props.size"><var class="varname">size</var></dt>     <dd>      <p class="para">Stack size, readonly.</p>     </dd>             <dt id="parle-stack.props.top"><var class="varname">top</var></dt>     <dd>      <p class="para">Element on the top of the stack.</p>     </dd>       </dl>  </div> </div>  <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Parle\Stack::pop} — Pop an item from the stack</li><li>{@link Parle\Stack::push} — Push an item into the stack</li></ul></div>
 * 
 * @template TValue
 */
class Stack
{
    /* Properties */
    /**
     * @var bool Whether the stack is empty, readonly.
     */
    #[Immutable]
    public $empty = true;

    /**
     * @var int Stack size, readonly.
     */
    #[Immutable]
    public $size = 0;

    /**
     * @var TValue Element on the top of the stack.
     */
    public $top;

    /* Methods */
    /**
 * <div id="parle-stack.pop" class="refentry"> <div class="refnamediv">  <h1 class="refname">Parle\Stack::pop</h1>  <p class="verinfo">(PECL parle &gt;= 0.5.1)</p><p class="refpurpose"><span class="refname">Parle\Stack::pop</span> — <span class="dc-title">Pop an item from the stack</span></p> </div> <div class="refsect1 description" id="refsect1-parle-stack.pop-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Parle\Stack::pop</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-parle-stack.pop-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-parle-stack.pop-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。   </p> </div></div>
 * 
     * Pop an item from the stack
     *
     * @link https://php.net/manual/zh/parle-stack.pop.php
     * @return void
     */
    public function pop(): void {}

    /**
 * <div id="parle-stack.push" class="refentry"> <div class="refnamediv">  <h1 class="refname">Parle\Stack::push</h1>  <p class="verinfo">(PECL parle &gt;= 0.5.1)</p><p class="refpurpose"><span class="refname">Parle\Stack::push</span> — <span class="dc-title">Push an item into the stack</span></p> </div> <div class="refsect1 description" id="refsect1-parle-stack.push-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Parle\Stack::push</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$item</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-parle-stack.push-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">item</span></dt>    <dd>     <p class="para">      Variable to be pushed.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-parle-stack.push-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。    </p> </div></div>
 * 
     * Push an item into the stack
     *
     * @link https://php.net/manual/zh/parle-stack.push.php
     * @param TValue $item Variable to be pushed.
     * @return void
     */
    public function push($item) {}
}
