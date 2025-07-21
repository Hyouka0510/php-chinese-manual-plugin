<?php

// Start of tokenizer v.0.1
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Pure;

/**
* <div id="function.token-get-all" class="refentry"> <div class="refnamediv">  <h1 class="refname">token_get_all</h1>  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">token_get_all</span> — <span class="dc-title">将提供的源码按 PHP 标记进行分割</span></p> </div> <div class="refsect1 description" id="refsect1-function.token-get-all-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>token_get_all</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$code</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$flags</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>token_get_all()</strong></span> 解析提供的 <span class="parameter" style="color:#3A95FF">code</span>    源码字符，然后使用 Zend 引擎的语法分析器获取源码中的 PHP 语言的解析器记号。  </p>  <p class="para">   解析器记号列表见<a href="https://php.net/manual/zh/tokens.php" class="xref">解析器记号（token）列表</a>，或者使用    <span class="function">{@link token_name()}</span> 翻译获取这个记号的字符串表示。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.token-get-all-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">code</span></dt>     <dd>      <p class="para">       需要解析的 PHP 源码.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">flags</span></dt>     <dd>      <p class="para">       有效 flag：       </p><ul class="itemizedlist">        <li class="listitem">         <span class="simpara">          <strong><span><a href="https://php.net/manual/zh/tokenizer.constants.php#constant.token-parse">TOKEN_PARSE</a></span></strong>——在指定上下文中识别关键词。         </span>        </li>       </ul>           </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.token-get-all-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   记号标识符数组。每个单独的记号标识符要么是单个字符（即 <span class="literal">;</span>、<span class="literal">.</span>、<span class="literal">&gt;</span>、<span class="literal">!</span>   等），要么是有三个元素的数组，其中元素 0 是记号索引，元素 1 是原始记号的字符串内容和元素 2 是行号。  </p> </div> <div class="refsect1 examples" id="refsect1-function.token-get-all-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4097">    <p><strong>示例 #1 <span class="function"><strong>token_get_all()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$tokens </span><span style="color: #007700">= </span><span style="color: #9876AA">token_get_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'&lt;?php echo; ?&gt;'</span><span style="color: #007700">);<br><br>foreach (</span><span style="color: #9876AA">$tokens </span><span style="color: #007700">as </span><span style="color: #9876AA">$token</span><span style="color: #007700">) {<br>    if (</span><span style="color: #9876AA">is_array</span><span style="color: #007700">(</span><span style="color: #9876AA">$token</span><span style="color: #007700">)) {<br>        echo </span><span style="color: #DD0000">"Line </span><span style="color: #007700">{</span><span style="color: #9876AA">$token</span><span style="color: #007700">[</span><span style="color: #9876AA">2</span><span style="color: #007700">]}</span><span style="color: #DD0000">: "</span><span style="color: #007700">, </span><span style="color: #9876AA">token_name</span><span style="color: #007700">(</span><span style="color: #9876AA">$token</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]), </span><span style="color: #DD0000">" ('</span><span style="color: #007700">{</span><span style="color: #9876AA">$token</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]}</span><span style="color: #DD0000">')"</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>    }<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Line 1: T_OPEN_TAG ('<?php &nbsp;')<br>Line 1: T_ECHO ('echo')<br>Line 1: T_WHITESPACE (' ')<br>Line 1: T_CLOSE_TAG ('?&gt;')</blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-4098">    <p><strong>示例 #2 <span class="function"><strong>token_get_all()</strong></span> 错误用法示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$tokens </span><span style="color: #007700">= </span><span style="color: #9876AA">token_get_all</span><span style="color: #007700">(</span><span style="color: #DD0000">'// comment '</span><span style="color: #007700">);<br><br>foreach (</span><span style="color: #9876AA">$tokens </span><span style="color: #007700">as </span><span style="color: #9876AA">$token</span><span style="color: #007700">) {<br>    if (</span><span style="color: #9876AA">is_array</span><span style="color: #007700">(</span><span style="color: #9876AA">$token</span><span style="color: #007700">)) {<br>        echo </span><span style="color: #DD0000">"Line </span><span style="color: #007700">{</span><span style="color: #9876AA">$token</span><span style="color: #007700">[</span><span style="color: #9876AA">2</span><span style="color: #007700">]}</span><span style="color: #DD0000">: "</span><span style="color: #007700">, </span><span style="color: #9876AA">token_name</span><span style="color: #007700">(</span><span style="color: #9876AA">$token</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]), </span><span style="color: #DD0000">" ('</span><span style="color: #007700">{</span><span style="color: #9876AA">$token</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">]}</span><span style="color: #DD0000">')"</span><span style="color: #007700">, </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>    }<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Line 1: T_INLINE_HTML ('// comment ')</blockquote></div>    </div>   </div>   请注意，在前面的示例中，字符串解析为 <strong><span><a href="https://php.net/manual/zh/tokens.php#constant.t-inline-html">T_INLINE_HTML</a></span></strong> 而不是预期的   <strong><span><a href="https://php.net/manual/zh/tokens.php#constant.t-comment">T_COMMENT</a></span></strong>。这是因为在提供的代码中没有使用开放标记。这相当于在普通文件中将注释放在 PHP 标记之外。    <p class="para">   </p><div class="example" id="example-4099">    <p><strong>示例 #3      <span class="function"><strong>token_get_all()</strong></span> 在类上使用关键词示例    </strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$source </span><span style="color: #007700">= &lt;&lt;&lt;'code'<br></span><span style="color: #DD0000">&lt;?php<br><br>class A<br>{<br>    const PUBLIC = 1;<br>}<br></span><span style="color: #007700">code;<br><br></span><span style="color: #9876AA">$tokens </span><span style="color: #007700">= </span><span style="color: #9876AA">token_get_all</span><span style="color: #007700">(</span><span style="color: #9876AA">$source</span><span style="color: #007700">, </span><span style="color: #9876AA">TOKEN_PARSE</span><span style="color: #007700">);<br><br>foreach (</span><span style="color: #9876AA">$tokens </span><span style="color: #007700">as </span><span style="color: #9876AA">$token</span><span style="color: #007700">) {<br>    if (</span><span style="color: #9876AA">is_array</span><span style="color: #007700">(</span><span style="color: #9876AA">$token</span><span style="color: #007700">)) {<br>        echo </span><span style="color: #9876AA">token_name</span><span style="color: #007700">(</span><span style="color: #9876AA">$token</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">]) , </span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br>    }<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">T_OPEN_TAG<br>T_WHITESPACE<br>T_CLASS<br>T_WHITESPACE<br>T_STRING<br>T_CONST<br>T_WHITESPACE<br>T_STRING<br>T_LNUMBER</blockquote></div>    </div>   </div>   如果没有 <strong><span><a href="https://php.net/manual/zh/tokenizer.constants.php#constant.token-parse">TOKEN_PARSE</a></span></strong> flag，倒数第二个记号（<strong><span><a href="https://php.net/manual/zh/tokens.php#constant.t-string">T_STRING</a></span></strong>）将是 <strong><span><a href="https://php.net/manual/zh/tokens.php#constant.t-public">T_PUBLIC</a></span></strong>。   </div> <div class="refsect1 seealso" id="refsect1-function.token-get-all-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link PhpToken::tokenize()} - Splits given source into PHP tokens, represented by PhpToken objects.</span></li>    <li><span class="function">{@link token_name()} - 获取提供的 PHP 解析器代号的符号名称</span></li>   </ul>   </div></div>
*
 * Split given source into PHP tokens
 * @link https://php.net/manual/zh/function.token-get-all.php
 * @param string $code <p>
 * The PHP source to parse.
 * </p>
 * @param int $flags
 * <p>
 * <p>
 * Valid flags:
 * </p><ul>
 * <li>
 *
 * <b>TOKEN_PARSE</b> - Recognises the ability to use
 * reserved words in specific contexts.
 * </li>
 * </ul>
 * </p>
 * @return array An array of token identifiers. Each individual token identifier is either
 * a single character (i.e.: ;, .,
 * &gt;, !, etc...),
 * or a three element array containing the token index in element 0, the string
 * content of the original token in element 1 and the line number in element 2.
 
#[Pure]
*/
function token_get_all(string $code, #[PhpStormStubsElementAvailable(from: '7.0')] int $flags = 0): array {}

/**
* <div id="function.token-name" class="refentry"> <div class="refnamediv">  <h1 class="refname">token_name</h1>  <p class="verinfo">(PHP 4 &gt;= 4.2.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">token_name</span> — <span class="dc-title">获取提供的 PHP 解析器代号的符号名称</span></p> </div> <div class="refsect1 description" id="refsect1-function.token-name-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>token_name</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$id</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>token_name()</strong></span> 获取 PHP <span class="parameter" style="color:#3A95FF">id</span> 的符号名称。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.token-name-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">id</span></dt>     <dd>      <p class="para">       解析器记号的值。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.token-name-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   提供的 <span class="parameter" style="color:#3A95FF">id</span> 的符号名。  </p> </div> <div class="refsect1 examples" id="refsect1-function.token-name-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4100">    <p><strong>示例 #1 <span class="function"><strong>token_name()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 260 是 T_EVAL 记号的记号值<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">token_name</span><span style="color: #007700">(</span><span style="color: #9876AA">260</span><span style="color: #007700">);        </span><span style="color: #FF8000">// -&gt; "T_EVAL"<br><br>// 记号常量映射到自己的名称<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">token_name</span><span style="color: #007700">(</span><span style="color: #9876AA">T_FUNCTION</span><span style="color: #007700">); </span><span style="color: #FF8000">// -&gt; "T_FUNCTION"<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.token-name-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><a href="https://php.net/manual/zh/tokens.php" class="link">解析器记号列表</a></li>   <li><span class="function">{@link PhpToken::getTokenName()} - Returns the name of the token.</span></li>  </ul> </div></div>
*
 * Get the symbolic name of a given PHP token
 * @link https://php.net/manual/zh/function.token-name.php
 * @param int $id <p>
 * The token value.
 * </p>
 * @return string The symbolic name of the given <i>token</i>.
 
#[Pure]
*/
function token_name(int $id): string {}

/**
* <span class="simpara">     Recognises the ability to use reserved words in specific contexts.    </span>
*/
define('TOKEN_PARSE', 1);
define('T_REQUIRE_ONCE', 263);
define('T_REQUIRE', 262);
define('T_EVAL', 323);
define('T_INCLUDE_ONCE', 261);
define('T_INCLUDE', 260);
define('T_LOGICAL_OR', 264);
define('T_LOGICAL_XOR', 265);
define('T_LOGICAL_AND', 266);
define('T_PRINT', 267);
define('T_YIELD', 268);
define('T_DOUBLE_ARROW', 269);
define('T_YIELD_FROM', 270);
define('T_POW_EQUAL', 282);
define('T_SR_EQUAL', 281);
define('T_SL_EQUAL', 280);
define('T_XOR_EQUAL', 279);
define('T_OR_EQUAL', 278);
define('T_AND_EQUAL', 277);
define('T_MOD_EQUAL', 276);
define('T_CONCAT_EQUAL', 275);
define('T_DIV_EQUAL', 274);
define('T_MUL_EQUAL', 273);
define('T_MINUS_EQUAL', 272);
define('T_PLUS_EQUAL', 271);
/**
 * @since 7.4
 */
define('T_COALESCE_EQUAL', 283);
define('T_COALESCE', 284);
define('T_BOOLEAN_OR', 285);
define('T_BOOLEAN_AND', 286);
define('T_SPACESHIP', 293);
define('T_IS_NOT_IDENTICAL', 292);
define('T_IS_IDENTICAL', 291);
define('T_IS_NOT_EQUAL', 290);
define('T_IS_EQUAL', 289);
define('T_IS_GREATER_OR_EQUAL', 295);
define('T_IS_SMALLER_OR_EQUAL', 294);
define('T_SR', 297);
define('T_SL', 296);
define('T_INSTANCEOF', 298);
define('T_UNSET_CAST', 305);
define('T_BOOL_CAST', 304);
define('T_OBJECT_CAST', 303);
define('T_ARRAY_CAST', 302);
define('T_STRING_CAST', 301);
define('T_DOUBLE_CAST', 300);
define('T_INT_CAST', 299);
define('T_DEC', 389);
define('T_INC', 388);
define('T_POW', 306);
define('T_CLONE', 307);
define('T_NEW', 324);
define('T_ELSEIF', 309);
define('T_ELSE', 310);
define('T_ENDIF', 327);
define('T_PUBLIC', 362);
define('T_PROTECTED', 361);
define('T_PRIVATE', 360);
define('T_FINAL', 359);
define('T_ABSTRACT', 358);
define('T_STATIC', 357);
define('T_LNUMBER', 311);
define('T_DNUMBER', 312);
define('T_STRING', 313);
define('T_VARIABLE', 317);
define('T_INLINE_HTML', 318);
define('T_ENCAPSED_AND_WHITESPACE', 319);
define('T_CONSTANT_ENCAPSED_STRING', 320);
define('T_STRING_VARNAME', 321);
define('T_NUM_STRING', 322);
define('T_EXIT', 325);
define('T_IF', 326);
define('T_ECHO', 328);
define('T_DO', 329);
define('T_WHILE', 330);
define('T_ENDWHILE', 331);
define('T_FOR', 332);
define('T_ENDFOR', 333);
define('T_FOREACH', 334);
define('T_ENDFOREACH', 335);
define('T_DECLARE', 336);
define('T_ENDDECLARE', 337);
define('T_AS', 338);
define('T_SWITCH', 339);
define('T_ENDSWITCH', 340);
define('T_CASE', 341);
define('T_DEFAULT', 342);
define('T_MATCH', 343);
define('T_BREAK', 344);
define('T_CONTINUE', 345);
define('T_GOTO', 346);
define('T_FUNCTION', 347);
define('T_CONST', 349);
define('T_RETURN', 350);
define('T_TRY', 351);
define('T_CATCH', 352);
define('T_FINALLY', 353);
define('T_THROW', 258);
define('T_USE', 354);
define('T_INSTEADOF', 355);
define('T_GLOBAL', 356);
define('T_VAR', 364);
define('T_UNSET', 365);
define('T_ISSET', 366);
define('T_EMPTY', 367);
define('T_HALT_COMPILER', 368);
define('T_CLASS', 369);
define('T_TRAIT', 370);
define('T_INTERFACE', 371);
/**
 * @since 8.1
 */
define('T_ENUM', 372);
define('T_EXTENDS', 373);
define('T_IMPLEMENTS', 374);
define('T_OBJECT_OPERATOR', 390);
define('T_LIST', 376);
define('T_ARRAY', 377);
define('T_CALLABLE', 378);
define('T_LINE', 379);
define('T_FILE', 380);
define('T_DIR', 381);
define('T_CLASS_C', 382);
define('T_TRAIT_C', 383);
define('T_METHOD_C', 384);
define('T_FUNC_C', 385);
define('T_NS_C', 386);
/**
 * @since 8.4
 */
define('T_PROPERTY_C', 350);
/**
 * @since 8.0
 */
define('T_ATTRIBUTE', 387);
define('T_COMMENT', 392);
define('T_DOC_COMMENT', 393);
define('T_OPEN_TAG', 394);
define('T_OPEN_TAG_WITH_ECHO', 395);
define('T_CLOSE_TAG', 396);
define('T_WHITESPACE', 397);
define('T_START_HEREDOC', 398);
define('T_END_HEREDOC', 399);
define('T_DOLLAR_OPEN_CURLY_BRACES', 400);
define('T_CURLY_OPEN', 401);
define('T_PAAMAYIM_NEKUDOTAYIM', 402);
define('T_NAMESPACE', 375);
define('T_NS_SEPARATOR', 403);
define('T_ELLIPSIS', 404);
define('T_DOUBLE_COLON', 402);
/**
 * @since 7.4
 */
define('T_FN', 348);
define('T_BAD_CHARACTER', 405);

/**
 * @since 8.0
 */
define('T_NAME_FULLY_QUALIFIED', 314);
/**
 * @since 8.0
 */
define('T_NAME_RELATIVE', 315);
/**
 * @since 8.0
 */
define('T_NAME_QUALIFIED', 316);
/**
 * @since 8.0
 */
define('T_NULLSAFE_OBJECT_OPERATOR', 391);

/**
 * @since 8.1
 */
define('T_AMPERSAND_FOLLOWED_BY_VAR_OR_VARARG', 288);

/**
 * @since 8.1
 */
define('T_AMPERSAND_NOT_FOLLOWED_BY_VAR_OR_VARARG', 287);

/**
 * @since 8.1
 */
define('T_READONLY', 363);

/**
 * @removed 7.0
 */
define('T_CHARACTER', 315);

/**
 * @since 8.4
 */
define('T_PRIVATE_SET', 327);

/**
 * @since 8.4
 */
define('T_PROTECTED_SET', 328);

/**
 * @since 8.4
 */
define('T_PUBLIC_SET', 329);
