<?php

namespace Parle;

/**
 * <div id="class.parle-token" class="reference"> <h1 class="title">The Parle\Token class</h1>  <div class="partintro"><p class="verinfo">(PECL parle &gt;= 0.5.2)</p>  <div class="section" id="parle-token.intro">   <h2 class="title">简介</h2>   <p class="para">    This class represents a token. Lexer returns instances of this class.   </p>  </div>  <div class="section" id="parle-token.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Parle\Token</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>    <div class="fieldsynopsis">     <span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.parle-token.php#parle-token.constants.eoi"><var class="varname">EOI</var></a></var><span class="initializer"> = 0</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.parle-token.php#parle-token.constants.unknown"><var class="varname">UNKNOWN</var></a></var><span class="initializer"> = -1</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.parle-token.php#parle-token.constants.skip"><var class="varname">SKIP</var></a></var><span class="initializer"> = -2</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.parle-token.php#parle-token.props.id">\$<var class="varname">id</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.parle-token.php#parle-token.props.value">\$<var class="varname">value</var></a></var>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>           }</div>  </div>  <div class="section" id="parle-token.props">   <h2 class="title">属性</h2>   <dl>         <dt id="parle-token.props.id"><var class="varname">id</var></dt>     <dd>      <p class="para">Token id.</p>     </dd>             <dt id="parle-token.props.value"><var class="varname">value</var></dt>     <dd>      <p class="para">Token value.</p>     </dd>       </dl>  </div>  <div class="section" id="parle-token.constants">   <h2 class="title">预定义常量</h2>   <dl>         <dt id="parle-token.constants.eoi"><strong><span>{@link Parle\Token::EOI}</span></strong></dt>     <dd>      <p class="para">End of input token id.</p>     </dd>             <dt id="parle-token.constants.unknown"><strong><span>{@link Parle\Token::UNKNOWN}</span></strong></dt>     <dd>      <p class="para">Unknown token id.</p>     </dd>             <dt id="parle-token.constants.skip"><strong><span>{@link Parle\Token::SKIP}</span></strong></dt>     <dd>      <p class="para">Skip token id.</p>     </dd>       </dl>  </div> </div> </div>
 */
class Token
{
    /* Constants */
    /** @var int End of input token id. */
    public const EOI = 0;

    /** @var int Unknown token id. */
    public const UNKNOWN = -1;

    /** @var int Skip token id. */
    public const SKIP = -2;

    /* Properties */
    /** @var int Token id. */
    public $id;

    /** @var string Token value. */
    public $value;
}
