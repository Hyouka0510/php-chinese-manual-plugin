<?php

// Start of filter v.0.11.0
use JetBrains\PhpStorm\Pure;

/**
 * <div id="function.filter-input" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_input</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_input</span> — <span class="dc-title">通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></p> </div> <div class="refsect1 description" id="refsect1-function.filter-input-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_input</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$type</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$var_name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$filter</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></span></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">\$options</span><span class="initializer"> = 0</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div> </div> <div class="refsect1 parameters" id="refsect1-function.filter-input-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">type</span></dt>    <dd>     <span class="simpara">      <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.input-post">INPUT_<span class="replaceable">*</span></a></span></strong> 常量之一。     </span>     <div class="warning"><strong class="warning">警告</strong>      <p class="simpara">       在用户对超全局变量进行任何修改之前，正在过滤的超全局变量内容是 <span>SAPI</span>       提供的原始“原始”内容。要过滤修改后的超全局变量，请使用 <span class="function">{@link filter_var()}</span>。      </p>     </div>    </dd>          <dt><span class="parameter" style="color:#3A95FF">var_name</span></dt>    <dd>     <span class="simpara">      在相应 <span class="parameter" style="color:#3A95FF">type</span> 的超全局变量中要过滤的变量名称。     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">filter</span></dt>    <dd>     <span class="simpara">      要应用的过滤器。可以使用 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong> 常量作为验证过滤器，使用      <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong> 或 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></span></strong>      作为清理过滤器，也可以使用 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-callback">FILTER_CALLBACK</a></span></strong> 作为自定义过滤器。     </span>     <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:       <span class="simpara">       默认值为 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></span></strong>，是 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></span></strong>       的别名。这将导致默认情况下不进行过滤。      </span>     </p></blockquote>    </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <span class="simpara">      要么是选项的关联 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>，要么是过滤器 flag 常量      <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-flag-none">FILTER_FLAG_<span class="replaceable">*</span></a></span></strong> 的位掩码。     </span>     <span class="simpara">      如果 <span class="parameter" style="color:#3A95FF">filter</span> 接受选项（option），则可以使用数组的 <span class="literal">"flags"</span>      字段提供 flag。     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.filter-input-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   成功时返回过滤后的变量。如果变量未设置，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。失败时也返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，当使用   <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></span></strong> flag 时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.filter-input-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-5354">    <p><strong>示例 #1 <span class="function"><strong>filter_input()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$search_html </span><span style="color: #007700">= </span><span style="color: #9876AA">filter_input</span><span style="color: #007700">(</span><span style="color: #9876AA">INPUT_GET</span><span style="color: #007700">, </span><span style="color: #DD0000">'search'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_SANITIZE_SPECIAL_CHARS</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$search_url </span><span style="color: #007700">= </span><span style="color: #9876AA">filter_input</span><span style="color: #007700">(</span><span style="color: #9876AA">INPUT_GET</span><span style="color: #007700">, </span><span style="color: #DD0000">'search'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">"You have searched for </span><span style="color: #9876AA">\$search_html</span><span style="color: #DD0000">.\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #DD0000">"&lt;a href='?search=</span><span style="color: #9876AA">\$search_url</span><span style="color: #DD0000">'&gt;Search again.&lt;/a&gt;"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">You&nbsp;have&nbsp;searched&nbsp;for&nbsp;Me&nbsp;&amp;&nbsp;son.<br><a>Search&nbsp;again.</a></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.filter-input-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link filter_input_array()} - 获取一系列外部变量，并且可以通过过滤器处理它们</span></li>   <li><span class="function">{@link filter_var()} - 使用特定的过滤器过滤一个变量</span></li>   <li><span class="function">{@link filter_var_array()} - 获取多个变量并且过滤它们</span></li>   <li>    验证过滤器    <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong>   </li>   <li>    清理过滤器    <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong>   </li>  </ul> </div></div>
 * 
 * Gets a specific external variable by name and optionally filters it
 * @link https://php.net/manual/zh/function.filter-input.php
 * @param int $type <p>
 * One of <b>INPUT_GET</b>, <b>INPUT_POST</b>,
 * <b>INPUT_COOKIE</b>, <b>INPUT_SERVER</b>, or
 * <b>INPUT_ENV</b>.
 * </p>
 * @param string $var_name <p>
 * Name of a variable to get.
 * </p>
 * @param int $filter [optional] <p>
 * The ID of the filter to apply. The
 * manual page lists the available filters.
 * </p>
 * @param array|int $options <p>
 * Associative array of options or bitwise disjunction of flags. If filter
 * accepts options, flags can be provided in "flags" field of array.
 * </p>
 * @return mixed Value of the requested variable on success, <b>FALSE</b> if the filter fails,
 * or <b>NULL</b> if the <i>variable_name</i> variable is not set.
 * If the flag <b>FILTER_NULL_ON_FAILURE</b> is used, it
 * returns <b>FALSE</b> if the variable is not set and <b>NULL</b> if the filter fails.
 */
#[Pure]
function filter_input(int $type, string $var_name, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed {}

/**
 * <div id="function.filter-var" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_var</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_var</span> — <span class="dc-title">使用特定的过滤器过滤一个变量</span></p> </div> <div class="refsect1 description" id="refsect1-function.filter-var-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_var</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$filter</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">\$options</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="simpara">   使用 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong> 验证过滤器、<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong>   清理过滤器或自定义过滤器过滤变量。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.filter-var-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">value</span></dt>    <dd>     <span class="simpara">      要过滤的内容。     </span>     <div class="warning"><strong class="warning">警告</strong>      <p class="simpara">       标量值在过滤前，会先<a href="https://php.net/manual/zh/language.types.string.php#language.types.string.casting" class="link">转换成字符串</a>。      </p>     </div>    </dd>          <dt><span class="parameter" style="color:#3A95FF">filter</span></dt>    <dd>     <span class="simpara">      要应用的过滤器。可以使用 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong> 常量作为验证过滤器，使用      <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong> 或 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></span></strong>      作为清理过滤器，也可以使用 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-callback">FILTER_CALLBACK</a></span></strong> 作为自定义过滤器。     </span>     <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:       <span class="simpara">       默认值为 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></span></strong>，是 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></span></strong>       的别名。这将导致默认情况下不进行过滤。      </span>     </p></blockquote>    </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <span class="simpara">      要么是选项的关联 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>，要么是过滤器 flag 常量      <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-flag-none">FILTER_FLAG_<span class="replaceable">*</span></a></span></strong> 的位掩码。     </span>     <span class="simpara">      如果 <span class="parameter" style="color:#3A95FF">filter</span> 接受选项（option），则可以使用数组的 <span class="literal">"flags"</span>      字段提供 flag。     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.filter-var-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   成功时返回过滤后的数据。失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，除非使用 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></span></strong>   flag，在这种情况下会返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.filter-var-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-5356">   <p><strong>示例 #1 <span class="function"><strong>filter_var()</strong></span> 示例</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'bob@example.com'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_EMAIL</span><span style="color: #007700">));<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'https://example.com'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_URL</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_FLAG_PATH_REQUIRED</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">string(15)&nbsp;"bob@example.com"<br>bool(false)</blockquote></div>   </div>  </div>  <div class="example" id="example-5357">   <p><strong>示例 #2 过滤数组示例</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$emails </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">"bob@example.com"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"test@example.local"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"invalidemail"<br></span><span style="color: #007700">];<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #9876AA">\$emails</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_EMAIL</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_REQUIRE_ARRAY</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(3)&nbsp;{<br>&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;string(15)&nbsp;"bob@example.com"<br>&nbsp;&nbsp;[1]=&gt;<br>&nbsp;&nbsp;string(18)&nbsp;"test@example.local"<br>&nbsp;&nbsp;[2]=&gt;<br>&nbsp;&nbsp;bool(false)<br>}</blockquote></div>   </div>  </div>  <div class="example" id="example-5358">   <p><strong>示例 #3 向 <span class="parameter" style="color:#3A95FF">options</span> 传递数组的示例</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$options </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">'options' </span><span style="color: #007700">=&gt; [<br>        </span><span style="color: #DD0000">'min_range' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">10</span><span style="color: #007700">,<br>    ],<br>    </span><span style="color: #DD0000">'flags' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_FLAG_ALLOW_OCTAL</span><span style="color: #007700">,<br>];<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'0755'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">, </span><span style="color: #9876AA">\$options</span><span style="color: #007700">));<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #DD0000">'011'</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">, </span><span style="color: #9876AA">\$options</span><span style="color: #007700">));<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">int(493)<br>bool(false)</blockquote></div>   </div>  </div>  <div class="example" id="example-5359">   <p><strong>示例 #4 直接提供或者通过 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 提供 flag</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'string'</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #9876AA">\$str</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_BOOLEAN</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_NULL_ON_FAILURE</span><span style="color: #007700">));<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var</span><span style="color: #007700">(</span><span style="color: #9876AA">\$str</span><span style="color: #007700">, </span><span style="color: #9876AA">FILTER_VALIDATE_BOOLEAN</span><span style="color: #007700">, [</span><span style="color: #DD0000">'flags' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_NULL_ON_FAILURE</span><span style="color: #007700">]));<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">NULL<br>NULL</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.filter-var-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link filter_var_array()} - 获取多个变量并且过滤它们</span></li>   <li><span class="function">{@link filter_input()} - 通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></li>   <li><span class="function">{@link filter_input_array()} - 获取一系列外部变量，并且可以通过过滤器处理它们</span></li>   <li>    验证过滤器    <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong>   </li>   <li>    清理过滤器    <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong>   </li>  </ul> </div></div>
 * 
 * Filters a variable with a specified filter
 * @link https://php.net/manual/zh/function.filter-var.php
 * @param mixed $value <p>
 * Value to filter.
 * </p>
 * @param int $filter [optional] <p>
 * The ID of the filter to apply. The
 * manual page lists the available filters.
 * </p>
 * @param array|int $options <p>
 * Associative array of options or bitwise disjunction of flags. If filter
 * accepts options, flags can be provided in "flags" field of array. For
 * the "callback" filter, callable type should be passed. The
 * callback must accept one argument, the value to be filtered, and return
 * the value after filtering/sanitizing it.
 * </p>
 * <p>
 * <code>
 * // for filters that accept options, use this format
 * $options = array(
 * 'options' => array(
 * 'default' => 3, // value to return if the filter fails
 * // other options here
 * 'min_range' => 0
 * ),
 * 'flags' => FILTER_FLAG_ALLOW_OCTAL,
 * );
 * $var = filter_var('0755', FILTER_VALIDATE_INT, $options);
 * // for filter that only accept flags, you can pass them directly
 * $var = filter_var('oops', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
 * // for filter that only accept flags, you can also pass as an array
 * $var = filter_var('oops', FILTER_VALIDATE_BOOLEAN,
 * array('flags' => FILTER_NULL_ON_FAILURE));
 * // callback validate filter
 * function foo($value)
 * {
 * // Expected format: Surname, GivenNames
 * if (strpos($value, ", ") === false) return false;
 * list($surname, $givennames) = explode(", ", $value, 2);
 * $empty = (empty($surname) || empty($givennames));
 * $notstrings = (!is_string($surname) || !is_string($givennames));
 * if ($empty || $notstrings) {
 * return false;
 * } else {
 * return $value;
 * }
 * }
 * $var = filter_var('Doe, Jane Sue', FILTER_CALLBACK, array('options' => 'foo'));
 * </code>
 * </p>
 * @return mixed the filtered data, or <b>FALSE</b> if the filter fails.
 */
#[Pure]
function filter_var(mixed $value, int $filter = FILTER_DEFAULT, array|int $options = 0): mixed {}

/**
 * <div id="function.filter-input-array" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_input_array</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_input_array</span> — <span class="dc-title">获取一系列外部变量，并且可以通过过滤器处理它们</span></p> </div> <div class="refsect1 description" id="refsect1-function.filter-input-array-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_input_array</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">\$options</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$add_empty</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span></div>  <p class="para rdfs-comment">   这个函数当需要获取很多变量却不想重复调用<span class="function">{@link filter_input()}</span>时很有用。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.filter-input-array-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">type</span></dt>    <dd>     <span class="simpara">      <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.input-post">INPUT_<span class="replaceable">*</span></a></span></strong> 常量之一。     </span>     <div class="warning"><strong class="warning">警告</strong>      <p class="simpara">       在用户对超全局变量进行任何修改之前，正在过滤的超全局变量内容是 <span>SAPI</span>       提供的“原始”内容。要过滤修改后的超全局变量，请使用 <span class="function">{@link filter_var_array()}</span>。      </p>     </div>    </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <span class="simpara">      要么是选项的关联 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>，要么是应用于每个条目的过滤器，可以是使用 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong>      常量的验证过滤器，也可以是使用 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong> 常量的清理过滤器。     </span>     <span class="simpara">      选项数组是关联数组，其中 key 对应于数据 <span class="parameter" style="color:#3A95FF">array</span> 中的键，而关联的值要么是应用于该条目的过滤器，要么是描述如何以及应用哪个过滤器到该条目的关联数组。     </span>     <span class="simpara">      描述如何应用过滤器的关联数组必须包含 <span class="literal">'filter'</span>      key，其关联的值是要应用的过滤器，<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong>、<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong>、<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></span></strong>      或 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-callback">FILTER_CALLBACK</a></span></strong> 常量之一。还可以选择性地包含 <span class="literal">'flags'</span> key，用于指定适用于过滤器的      flag，以及 <span class="literal">'options'</span> key，用于指定适用于过滤器的任何选项。     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">add_empty</span></dt>    <dd>     <p class="para">      为缺失的 key 添加 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> 到返回值中。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.filter-input-array-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   成功时，返回 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>，包含所请求变量的值。  </p>  <p class="simpara">   失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。有一个失败的例外情况，就是 <span class="parameter" style="color:#3A95FF">type</span> 指定的输入数组没有填充，并且使用了   <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></span></strong> flag 时，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。  </p>  <p class="simpara">   如果 <span class="parameter" style="color:#3A95FF">add_empty</span> 为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，则输入数组中缺失的条目会填充到返回数组中，并且缺失的条目将设置为   <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。  </p>  <p class="simpara">   如果过滤失败，则返回 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 中的条目将为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，当使用了 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-null-on-failure">FILTER_NULL_ON_FAILURE</a></span></strong> flag 时为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>。  </p> </div> <div class="refsect1 notes" id="refsect1-function.filter-input-array-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    在 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.input-server">INPUT_SERVER</a></span></strong> 数组中并没有 <span class="literal">REQUEST_TIME</span> ，因为它是被稍后插入到 <var class="varname"><a href="https://php.net/manual/zh/reserved.variables.server.php" class="classname">\$_SERVER</a></var> 中的。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.filter-input-array-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link filter_input()} - 通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></li>   <li><span class="function">{@link filter_var()} - 使用特定的过滤器过滤一个变量</span></li>   <li><span class="function">{@link filter_var_array()} - 获取多个变量并且过滤它们</span></li>   <li>    验证过滤器    <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong>   </li>   <li>    清理过滤器    <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong>   </li>  </ul> </div></div>
 * 
 * Gets external variables and optionally filters them
 * @link https://php.net/manual/zh/function.filter-input-array.php
 * @param int $type <p>
 * One of <b>INPUT_GET</b>, <b>INPUT_POST</b>,
 * <b>INPUT_COOKIE</b>, <b>INPUT_SERVER</b>, or
 * <b>INPUT_ENV</b>.
 * </p>
 * @param array|int $options [optional] <p>
 * An array defining the arguments. A valid key is a string
 * containing a variable name and a valid value is either a filter type, or an array
 * optionally specifying the filter, flags and options. If the value is an
 * array, valid keys are filter which specifies the
 * filter type,
 * flags which specifies any flags that apply to the
 * filter, and options which specifies any options that
 * apply to the filter. See the example below for a better understanding.
 * </p>
 * <p>
 * This parameter can be also an integer holding a filter constant. Then all values in the
 * input array are filtered by this filter.
 * </p>
 * @param bool $add_empty [optional] <p>
 * Add missing keys as <b>NULL</b> to the return value.
 * </p>
 * @return array|false|null An array containing the values of the requested variables on success, or <b>FALSE</b>
 * on failure. An array value will be <b>FALSE</b> if the filter fails, or <b>NULL</b> if
 * the variable is not set. Or if the flag <b>FILTER_NULL_ON_FAILURE</b>
 * is used, it returns <b>FALSE</b> if the variable is not set and <b>NULL</b> if the filter
 * fails.
 */
#[Pure]
function filter_input_array(int $type, array|int $options = FILTER_DEFAULT, bool $add_empty = true): array|false|null {}

/**
 * <div id="function.filter-var-array" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_var_array</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_var_array</span> — <span class="dc-title">获取多个变量并且过滤它们</span></p> </div> <div class="refsect1 description" id="refsect1-function.filter-var-array-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_var_array</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$array</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">\$options</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-default">FILTER_DEFAULT</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$add_empty</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span></div>  <p class="simpara">   使用 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong> 验证过滤器、<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong>   清理过滤器或自定义过滤器来过滤关联 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 的值。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.filter-var-array-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">array</span></dt>    <dd>     <span class="simpara">      关联 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>，包含要过滤的数据。     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <span class="simpara">      要么是选项的关联 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>，要么是应用于每个条目的过滤器，可以是使用 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong>      常量的验证过滤器，也可以是使用 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong> 常量的清理过滤器。     </span>     <span class="simpara">      选项数组是关联数组，其中 key 对应于数据 <span class="parameter" style="color:#3A95FF">array</span> 中的键，而关联的值要么是应用于该条目的过滤器，要么是描述如何以及应用哪个过滤器到该条目的关联数组。     </span>     <span class="simpara">      描述如何应用过滤器的关联数组必须包含 <span class="literal">'filter'</span>      key，其关联的值是要应用的过滤器，<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong>、<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong>、<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></span></strong>      或 <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-callback">FILTER_CALLBACK</a></span></strong> 常量之一。还可以选择性地包含 <span class="literal">'flags'</span> key，用于指定适用于过滤器的      flag，以及 <span class="literal">'options'</span> key，用于指定适用于过滤器的任何选项。     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">add_empty</span></dt>    <dd>     <p class="para">      为缺失的 key 添加 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> 到返回值中。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.filter-var-array-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果成功则返回一个包含所请求变量的数组，或者当失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 。   一个数组的值如果过滤失败则为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> ，或者为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> 如果变量不存在的话。  </p> </div> <div class="refsect1 examples" id="refsect1-function.filter-var-array-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-5360">    <p><strong>示例 #1 一个 <span class="function"><strong>filter_var_array()</strong></span> 的例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>\$data </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">'product_id' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'libgd&lt;script&gt;'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'component'  </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'10'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'versions'   </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'2.0.33'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'testscalar' </span><span style="color: #007700">=&gt; [</span><span style="color: #DD0000">'2'</span><span style="color: #007700">, </span><span style="color: #DD0000">'23'</span><span style="color: #007700">, </span><span style="color: #DD0000">'10'</span><span style="color: #007700">, </span><span style="color: #DD0000">'12'</span><span style="color: #007700">],<br>    </span><span style="color: #DD0000">'testarray'  </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'2'</span><span style="color: #007700">,<br>];<br><br></span><span style="color: #9876AA">\$filters </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">'product_id'   </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'component'    </span><span style="color: #007700">=&gt; [<br>        </span><span style="color: #DD0000">'filter'   </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br>        </span><span style="color: #DD0000">'flags'    </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_FORCE_ARRAY</span><span style="color: #007700">,<br>        </span><span style="color: #DD0000">'options'  </span><span style="color: #007700">=&gt; [<br>            </span><span style="color: #DD0000">'min_range' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">1</span><span style="color: #007700">,<br>            </span><span style="color: #DD0000">'max_range' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">10</span><span style="color: #007700">,<br>        ],<br>    ],<br>    </span><span style="color: #DD0000">'versions'     </span><span style="color: #007700">=&gt; [<br>        </span><span style="color: #DD0000">'filter' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_SANITIZE_ENCODED<br>    </span><span style="color: #007700">],<br>    </span><span style="color: #DD0000">'testscalar'   </span><span style="color: #007700">=&gt; [<br>        </span><span style="color: #DD0000">'filter' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br>        </span><span style="color: #DD0000">'flags'  </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_REQUIRE_SCALAR</span><span style="color: #007700">,<br>    ],<br>    </span><span style="color: #DD0000">'testarray'    </span><span style="color: #007700">=&gt; [<br>        </span><span style="color: #DD0000">'filter' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br>        </span><span style="color: #DD0000">'flags'  </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_FORCE_ARRAY</span><span style="color: #007700">,<br>    ],<br>    </span><span style="color: #DD0000">'doesnotexist' </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">FILTER_VALIDATE_INT</span><span style="color: #007700">,<br>];<br><br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_var_array</span><span style="color: #007700">(</span><span style="color: #9876AA">\$data</span><span style="color: #007700">, </span><span style="color: #9876AA">\$filters</span><span style="color: #007700">));<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(6)&nbsp;{<br>&nbsp;&nbsp;["product_id"]=&gt;<br>&nbsp;&nbsp;string(17)&nbsp;"libgd%3Cscript%3E"<br>&nbsp;&nbsp;["component"]=&gt;<br>&nbsp;&nbsp;array(1)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;int(10)<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;["versions"]=&gt;<br>&nbsp;&nbsp;string(6)&nbsp;"2.0.33"<br>&nbsp;&nbsp;["testscalar"]=&gt;<br>&nbsp;&nbsp;bool(false)<br>&nbsp;&nbsp;["testarray"]=&gt;<br>&nbsp;&nbsp;array(1)&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;[0]=&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;int(2)<br>&nbsp;&nbsp;}<br>&nbsp;&nbsp;["doesnotexist"]=&gt;<br>&nbsp;&nbsp;NULL<br>}</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.filter-var-array-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link filter_input_array()} - 获取一系列外部变量，并且可以通过过滤器处理它们</span></li>   <li><span class="function">{@link filter_var()} - 使用特定的过滤器过滤一个变量</span></li>   <li><span class="function">{@link filter_input()} - 通过名称获取特定的外部变量，并且可以通过过滤器处理它</span></li>   <li>    验证过滤器    <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_<span class="replaceable">*</span></a></span></strong>   </li>   <li>    清理过滤器    <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_<span class="replaceable">*</span></a></span></strong>   </li>  </ul> </div></div>
 * 
 * Gets multiple variables and optionally filters them
 * @link https://php.net/manual/zh/function.filter-var-array.php
 * @param array $array <p>
 * An array with string keys containing the data to filter.
 * </p>
 * @param array|int $options [optional] <p>
 * An array defining the arguments. A valid key is a string
 * containing a variable name and a valid value is either a
 * filter type, or an
 * array optionally specifying the filter, flags and options.
 * If the value is an array, valid keys are filter
 * which specifies the filter type,
 * flags which specifies any flags that apply to the
 * filter, and options which specifies any options that
 * apply to the filter. See the example below for a better understanding.
 * </p>
 * <p>
 * This parameter can be also an integer holding a filter constant. Then all values in the
 * input array are filtered by this filter.
 * </p>
 * @param bool $add_empty [optional] <p>
 * Add missing keys as <b>NULL</b> to the return value.
 * </p>
 * @return array|false|null An array containing the values of the requested variables on success, or <b>FALSE</b>
 * on failure. An array value will be <b>FALSE</b> if the filter fails, or <b>NULL</b> if
 * the variable is not set.
 */
#[Pure]
function filter_var_array(array $array, array|int $options = FILTER_DEFAULT, bool $add_empty = true): array|false|null {}

/**
 * <div id="function.filter-list" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_list</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_list</span> — <span class="dc-title">返回所支持的过滤器列表</span></p> </div> <div class="refsect1 description" id="refsect1-function.filter-list-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_list</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div> </div> <div class="refsect1 parameters" id="refsect1-function.filter-list-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.filter-list-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回一个所支持的过滤器的名称的列表，如果没有这样子的过滤器的话则返回空数组。这个数组的索引不是过滤器id，   你可以通过 <span class="function">{@link filter_id()}</span> 去根据名称获取它们。  </p> </div> <div class="refsect1 examples" id="refsect1-function.filter-list-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-5355">    <p><strong>示例 #1 一个 <span class="function"><strong>filter_list()</strong></span> 的例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">filter_list</span><span style="color: #007700">());<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[0]&nbsp;=&gt;&nbsp;int<br>&nbsp;&nbsp;&nbsp;&nbsp;[1]&nbsp;=&gt;&nbsp;boolean<br>&nbsp;&nbsp;&nbsp;&nbsp;[2]&nbsp;=&gt;&nbsp;float<br>&nbsp;&nbsp;&nbsp;&nbsp;[3]&nbsp;=&gt;&nbsp;validate_regexp<br>&nbsp;&nbsp;&nbsp;&nbsp;[4]&nbsp;=&gt;&nbsp;validate_url<br>&nbsp;&nbsp;&nbsp;&nbsp;[5]&nbsp;=&gt;&nbsp;validate_email<br>&nbsp;&nbsp;&nbsp;&nbsp;[6]&nbsp;=&gt;&nbsp;validate_ip<br>&nbsp;&nbsp;&nbsp;&nbsp;[7]&nbsp;=&gt;&nbsp;string<br>&nbsp;&nbsp;&nbsp;&nbsp;[8]&nbsp;=&gt;&nbsp;stripped<br>&nbsp;&nbsp;&nbsp;&nbsp;[9]&nbsp;=&gt;&nbsp;encoded<br>&nbsp;&nbsp;&nbsp;&nbsp;[10]&nbsp;=&gt;&nbsp;special_chars<br>&nbsp;&nbsp;&nbsp;&nbsp;[11]&nbsp;=&gt;&nbsp;unsafe_raw<br>&nbsp;&nbsp;&nbsp;&nbsp;[12]&nbsp;=&gt;&nbsp;email<br>&nbsp;&nbsp;&nbsp;&nbsp;[13]&nbsp;=&gt;&nbsp;url<br>&nbsp;&nbsp;&nbsp;&nbsp;[14]&nbsp;=&gt;&nbsp;number_int<br>&nbsp;&nbsp;&nbsp;&nbsp;[15]&nbsp;=&gt;&nbsp;number_float<br>&nbsp;&nbsp;&nbsp;&nbsp;[16]&nbsp;=&gt;&nbsp;magic_quotes<br>&nbsp;&nbsp;&nbsp;&nbsp;[17]&nbsp;=&gt;&nbsp;callback<br>)</blockquote></div>    </div>   </div>   </div></div>
 * 
 * Returns a list of all supported filters
 * @link https://php.net/manual/zh/function.filter-list.php
 * @return array an array of names of all supported filters, empty array if there
 * are no such filters. Indexes of this array are not filter IDs, they can be
 * obtained with <b>filter_id</b> from a name instead.
 */
#[Pure]
function filter_list(): array {}

/**
 * <div id="function.filter-has-var" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_has_var</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_has_var</span> — <span class="dc-title">检测是否存在指定类型的变量</span></p> </div> <div class="refsect1 description" id="refsect1-function.filter-has-var-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_has_var</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$input_type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$var_name</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div> </div> <div class="refsect1 parameters" id="refsect1-function.filter-has-var-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">input_type</span></dt>     <dd>      <p class="para">       <strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.input-get">INPUT_GET</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.input-post">INPUT_POST</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.input-cookie">INPUT_COOKIE</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.input-server">INPUT_SERVER</a></span></strong>、<strong><span><a href="https://php.net/manual/zh/filter.constants.php#constant.input-env">INPUT_ENV</a></span></strong> 里的其中一个。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">var_name</span></dt>     <dd>      <p class="para">       要检查的变量名。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.filter-has-var-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Checks if variable of specified type exists
 * @link https://php.net/manual/zh/function.filter-has-var.php
 * @param int $input_type <p>
 * One of <b>INPUT_GET</b>, <b>INPUT_POST</b>,
 * <b>INPUT_COOKIE</b>, <b>INPUT_SERVER</b>, or
 * <b>INPUT_ENV</b>.
 * </p>
 * @param string $var_name <p>
 * Name of a variable to check.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
#[Pure]
function filter_has_var(int $input_type, string $var_name): bool {}

/**
 * <div id="function.filter-id" class="refentry"> <div class="refnamediv">  <h1 class="refname">filter_id</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">filter_id</span> — <span class="dc-title">返回与某个特定名称的过滤器相关联的id</span></p> </div> <div class="refsect1 description" id="refsect1-function.filter-id-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>filter_id</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div> </div> <div class="refsect1 parameters" id="refsect1-function.filter-id-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">name</span></dt>     <dd>      <p class="para">       待获取的过滤器名称。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.filter-id-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果获取成功则返回过滤器 id，如果过滤器不存在则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.filter-id-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link filter_list()} - 返回所支持的过滤器列表</span></li>   </ul>   </div></div>
 * 
 * Returns the filter ID belonging to a named filter
 * @link https://php.net/manual/zh/function.filter-id.php
 * @param string $name <p>
 * Name of a filter to get.
 * </p>
 * @return int|false ID of a filter on success or <b>FALSE</b> if filter doesn't exist.
 */
#[Pure]
function filter_id(string $name): int|false {}

/**
 * <span class="simpara">     <a href="https://php.net/manual/zh/reserved.variables.post.php" class="link">POST</a> 变量。    </span>
 * 
 * POST variables.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('INPUT_POST', 0);

/**
 * <span class="simpara">     <a href="https://php.net/manual/zh/reserved.variables.get.php" class="link">GET</a> 变量。    </span>
 * 
 * GET variables.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('INPUT_GET', 1);

/**
 * <span class="simpara">     <a href="https://php.net/manual/zh/reserved.variables.cookies.php" class="link">COOKIE</a> 变量。    </span>
 * 
 * COOKIE variables.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('INPUT_COOKIE', 2);

/**
 * <span class="simpara">     <a href="https://php.net/manual/zh/reserved.variables.environment.php" class="link">ENV</a> 变量。    </span>
 * 
 * ENV variables.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('INPUT_ENV', 4);

/**
 * <span class="simpara">     <a href="https://php.net/manual/zh/reserved.variables.server.php" class="link">SERVER</a> 变量。    </span>
 * 
 * SERVER variables.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('INPUT_SERVER', 5);

/**
 * <span class="simpara">     <a href="https://php.net/manual/zh/reserved.variables.session.php" class="link">SESSION</a> 变量。（自 PHP 8.0.0 起移除，之前未实现）    </span>
 * 
 * SESSION variables.
 * (not implemented yet)
 * @link https://php.net/manual/zh/filter.constants.php
 * @removed 8.0
 */
define('INPUT_SESSION', 6);

/**
 * <span class="simpara">     <a href="https://php.net/manual/zh/reserved.variables.request.php" class="link">REQUEST</a> 变量。（自 PHP 8.0.0 起移除，之前未实现）    </span>
 * 
 * REQUEST variables.
 * (not implemented yet)
 * @link https://php.net/manual/zh/filter.constants.php
 * @removed 8.0
 */
define('INPUT_REQUEST', 99);

/**
 * <span class="simpara">     没有 flag。    </span>
 * 
 * No flags.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_NONE', 0);

/**
 * <span class="simpara">     flag 要求过滤的输入是标量。    </span>
 * 
 * Flag used to require scalar as input
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_REQUIRE_SCALAR', 33554432);

/**
 * <span class="simpara">     flag 要求过滤的输入是 <span class="type"><a href="https://php.net/manual/zh/language.types.array.php" class="type array">array</a></span>。    </span>
 * 
 * Require an array as input.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_REQUIRE_ARRAY', 16777216);

/**
 * <span class="simpara">     此 flag 将标量输入封装为包含单个元素的 <span class="type"><a href="https://php.net/manual/zh/language.types.array.php" class="type array">array</a></span>，以供操作数组的过滤器使用。    </span>
 * 
 * Always returns an array.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FORCE_ARRAY', 67108864);

/**
 * <span class="simpara">     失败时使用 <strong><code><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></code></strong> 而不是 <strong><code><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></code></strong>。    </span>
 * 
 * Use NULL instead of FALSE on failure.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_NULL_ON_FAILURE', 134217728);

/**
 * <span class="simpara">     验证值是否为整数，成功时则转换为 <span class="type"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int">int</a></span> 类型。    </span>
 * 
 * ID of "int" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_VALIDATE_INT', 257);

/**
 * <span class="simpara">     别名 <strong><code><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-validate-bool">FILTER_VALIDATE_BOOL</a></code></strong>。该别名在 PHP 8.0.0 中引入其规范名称之前可用。    </span>
 * 
 * ID of "boolean" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_VALIDATE_BOOLEAN', 258);
/**
 * <span class="simpara">     对于 <code class="literal">"1"</code>、<code class="literal">"true"</code>、<code class="literal">"on"</code>     和 <code class="literal">"yes"</code> 返回 <strong><code><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></code></strong>。    </span>
 * 
 * ID of "boolean" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 * @link https://php.net/manual/zh/filter.filters.validate.php
 * @since 8.0 Using `FILTER_VALIDATE_BOOL` is preferred.
 */
define('FILTER_VALIDATE_BOOL', 258);

/**
 * <span class="simpara">     验证值是否为浮点数，成功时则转换为 <span class="type"><a href="https://php.net/manual/zh/language.types.float.php" class="type float">float</a></span> 类型。    </span>
 * 
 * ID of "float" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_VALIDATE_FLOAT', 259);

/**
 * <span class="simpara">     根据 <code class="literal">regexp</code> 选项提供的正则表达式验证值。    </span>
 * 
 * ID of "validate_regexp" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_VALIDATE_REGEXP', 272);

/**
 * <span class="simpara">     根据 <a href="https://datatracker.ietf.org/doc/html/rfc952" class="link external">»&nbsp;RFC 952</a>、<a href="https://datatracker.ietf.org/doc/html/rfc1034" class="link external">»&nbsp;RFC     1034</a>、<a href="https://datatracker.ietf.org/doc/html/rfc1035" class="link external">»&nbsp;RFC 1035</a>、<a href="https://datatracker.ietf.org/doc/html/rfc1034" class="link external">»&nbsp;RFC     1123</a>、<a href="https://datatracker.ietf.org/doc/html/rfc1034" class="link external">»&nbsp;RFC 2732</a> 和 <a href="https://datatracker.ietf.org/doc/html/rfc2181" class="link external">»&nbsp;RFC     2181</a> 验证域名是否有效。    </span>
 */
define('FILTER_VALIDATE_DOMAIN', 277);

/**
 * <span class="simpara">     根据 <a href="https://datatracker.ietf.org/doc/html/rfc2396" class="link external">»&nbsp;RFC 2396</a> 验证 <abbr title="Uniform Resource Locator">URL</abbr> 名称是否有效。    </span>
 * 
 * ID of "validate_url" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_VALIDATE_URL', 273);

/**
 * <span class="simpara">     验证值是否是“有效”的电子邮件地址。    </span>
 * 
 * ID of "validate_email" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_VALIDATE_EMAIL', 274);

/**
 * <span class="simpara">        过滤失败时返回的值。       </span>
 * 
 * ID of "validate_ip" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_VALIDATE_IP', 275);
/**
 * <span class="simpara">     验证该值是否是 MAC 地址。    </span>
 */
define('FILTER_VALIDATE_MAC', 276);

/**
 * <span class="simpara">     别名 <strong><code><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-unsafe-raw">FILTER_UNSAFE_RAW</a></code></strong>。    </span>
 * 
 * ID of default ("string") filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_DEFAULT', 516);

/**
 * <span class="simpara">     <span class="function">{@link addslashes()}</span> 应用于输入。自 PHP 7.3.0 起可用。    </span>
 * 
 * @since 7.3
 */
define('FILTER_SANITIZE_ADD_SLASHES', 523);

/**
 * <span class="simpara">     过滤器不执行任何操作。    </span>
 * 
 * ID of "unsafe_raw" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_UNSAFE_RAW', 516);

/**
 * <span class="simpara">     此过滤器会去除标签并对双引号和单引号进行 HTML 编码。    </span>
 * 
 * ID of "string" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 * @deprecated 8.1
 */
define('FILTER_SANITIZE_STRING', 513);

/**
 * <span class="simpara">     别名 <strong><code><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-string">FILTER_SANITIZE_STRING</a></code></strong>。    </span>
 * 
 * ID of "stripped" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 * @deprecated 8.1
 */
define('FILTER_SANITIZE_STRIPPED', 513);

/**
 * <span class="simpara">     此过滤器对字符串进行 URL 编码。    </span>
 * 
 * ID of "encoded" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_SANITIZE_ENCODED', 514);

/**
 * <span class="simpara">     如果与 <strong><code><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-flag-strip-low">FILTER_FLAG_STRIP_<span class="replaceable">*</span></a></code></strong> 过滤器清理     flag 一起使用，可以选择性地去除指定字符，并且可以使用 <strong><code><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-flag-encode-high">FILTER_FLAG_ENCODE_HIGH</a></code></strong>     对 ASCII 值大于 127 的字符进行编码。    </span>
 * 
 * ID of "special_chars" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_SANITIZE_SPECIAL_CHARS', 515);
/**
 * <span class="simpara">     此过滤器相当于调用 <span class="function">{@link htmlspecialchars()}</span> 并设置 <strong><code><a href="https://php.net/manual/zh/string.constants.php#constant.ent-quotes">ENT_QUOTES</a></code></strong>。    </span>
 */
define('FILTER_SANITIZE_FULL_SPECIAL_CHARS', 522);

/**
 * <span class="simpara">     通过移除除了拉丁字母（<code class="literal">[a-zA-Z]</code>）、数字（<code class="literal">[0-9]</code>）和特殊字符     <code class="literal">!#\$%&amp;'*+-=?^_`{|}~@.[]</code> 之外的所有字符来清理字符串。    </span>
 * 
 * ID of "email" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_SANITIZE_EMAIL', 517);

/**
 * <span class="simpara">     通过移除除了拉丁字母（<code class="literal">[a-zA-Z]</code>）、数字（<code class="literal">[0-9]</code>）和特殊字符     <code class="literal">\$-_.+!*'(),{}|\\^~[]`&lt;&gt;#%";/?:@&amp;=</code> 之外的所有字符来清理字符串。    </span>
 * 
 * ID of "url" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_SANITIZE_URL', 518);

/**
 * <span class="simpara">     通过移除除了数字（<code class="literal">[0-9]</code>）、加号（<code class="literal">+</code>）和减号（<code class="literal">-</code>）之外的所有字符来清理字符串。    </span>
 * 
 * ID of "number_int" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_SANITIZE_NUMBER_INT', 519);

/**
 * <span class="simpara">     通过移除除了数字（<code class="literal">[0-9]</code>）、加号（<code class="literal">+</code>）和减号（<code class="literal">-</code>）之外的所有字符来清理字符串。    </span>
 * 
 * ID of "number_float" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_SANITIZE_NUMBER_FLOAT', 520);

/**
 * <span class="simpara">     别名 <strong><code><a href="https://php.net/manual/zh/filter.constants.php#constant.filter-sanitize-add-slashes">FILTER_SANITIZE_ADD_SLASHES</a></code></strong>。    </span>
 * 
 * ID of "magic_quotes" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 * @deprecated 7.4
 * @removed 8.0
 */
define('FILTER_SANITIZE_MAGIC_QUOTES', 521);

/**
 * <span class="simpara">     此过滤器将过滤委托给用户定义的函数。<span class="type"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable">callable</a></span> 作为与 <code class="literal">'options'</code>     key 关联的值传递给 <code class="parameter">options</code> 参数。    </span>
 * 
 * ID of "callback" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_CALLBACK', 1024);

/**
 * <span class="simpara">                允许八进制整数（<code class="literal">0[0-7]+</code>）。       </span>
 * 
 * Allow octal notation (0[0-7]+) in "int" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_ALLOW_OCTAL', 1);

/**
 * <span class="simpara">        允许十六进制整数（<code class="literal">0x[0-9a-fA-F]+</code>）。       </span>
 * 
 * Allow hex notation (0x[0-9a-fA-F]+) in "int" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_ALLOW_HEX', 2);

/**
 * <span class="simpara">     除去 ASCII 值小于 32 的字符。    </span>
 * 
 * Strip characters with ASCII value less than 32.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_STRIP_LOW', 4);

/**
 * <span class="simpara">     除去 ASCII 值大于 127 的字符。    </span>
 * 
 * Strip characters with ASCII value greater than 127.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_STRIP_HIGH', 8);
/**
 * <span class="simpara">     除去反引号（<code class="literal">`</code>）字符。    </span>
 */
define('FILTER_FLAG_STRIP_BACKTICK', 512);

/**
 * <span class="simpara">     对 ASCII 值小于 32 的字符进行编码。    </span>
 * 
 * Encode characters with ASCII value less than 32.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_ENCODE_LOW', 16);

/**
 * <span class="simpara">     对 ASCII 值大于 127 的字符进行编码。    </span>
 * 
 * Encode characters with ASCII value greater than 127.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_ENCODE_HIGH', 32);

/**
 * <span class="simpara">     编码 <code class="literal">&amp;</code>。    </span>
 * 
 * Encode &.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_ENCODE_AMP', 64);

/**
 * <span class="simpara">     单双引号（<code class="literal">'</code> 和 <code class="literal">"</code>）将不会编码。    </span>
 * 
 * Don't encode ' and ".
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_NO_ENCODE_QUOTES', 128);

/**
 * <span class="simpara">          如果字符串清理是空字符串，则将值转换为 <strong><code><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></code></strong>    </span>
 * 
 * (No use for now.)
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_EMPTY_STRING_NULL', 256);

/**
 * <span class="simpara">        接受点（<code class="literal">.</code>）字符，通常表示为整数部分和小数部分之间的分隔符。       </span>
 * 
 * Allow fractional part in "number_float" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_ALLOW_FRACTION', 4096);

/**
 * <span class="simpara">        接受逗号（<code class="literal">,</code>）字符，通常代表千位分隔符。       </span>
 * 
 * Allow thousand separator (,) in "number_float" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_ALLOW_THOUSAND', 8192);

/**
 * <span class="simpara">        通过允许 <code class="literal">e</code> 和 <code class="literal">E</code> 字符来接受科学计数法中的数字。       </span>
 * 
 * Allow scientific notation (e, E) in
 * "number_float" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_ALLOW_SCIENTIFIC', 16384);

/**
 * <span class="simpara">        要求 <abbr title="Uniform Resource Locator">URL</abbr> 包含协议部分。       </span>
 * 
 * Require scheme in "validate_url" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 * @deprecated 7.3
 * @removed 8.0
 */
define('FILTER_FLAG_SCHEME_REQUIRED', 65536);

/**
 * <span class="simpara">        要求 <abbr title="Uniform Resource Locator">URL</abbr> 包含主机部分。       </span>
 * 
 * Require host in "validate_url" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 * @deprecated 7.3
 * @removed 8.0
 */
define('FILTER_FLAG_HOST_REQUIRED', 131072);

/**
 * <span class="simpara">        要求 <abbr title="Uniform Resource Locator">URL</abbr> 包含路径部分。       </span>
 * 
 * Require path in "validate_url" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_PATH_REQUIRED', 262144);

/**
 * <span class="simpara">        要求 <abbr title="Uniform Resource Locator">URL</abbr> 包含查询部分。       </span>
 * 
 * Require query in "validate_url" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_QUERY_REQUIRED', 524288);

/**
 * <span class="simpara">        允许 IPv4 地址。       </span>
 * 
 * Allow only IPv4 address in "validate_ip" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_IPV4', 1048576);

/**
 * <span class="simpara">        允许 IPv6 地址。       </span>
 * 
 * Allow only IPv6 address in "validate_ip" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_IPV6', 2097152);

/**
 * <span class="simpara">        拒绝保留地址。       </span>
 * 
 * Deny reserved addresses in "validate_ip" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_NO_RES_RANGE', 4194304);

/**
 * <span class="simpara">        拒绝私有地址。       </span>
 * 
 * Deny private addresses in "validate_ip" filter.
 * @link https://php.net/manual/zh/filter.constants.php
 */
define('FILTER_FLAG_NO_PRIV_RANGE', 8388608);

/**
 * <span class="simpara">        要求主机名以字母数字开头，并且仅包含字母数字或连字符。       </span>
 */
define('FILTER_FLAG_HOSTNAME', 1048576);
/**
 * <span class="simpara">        接受 local 部分中的 Unicode 字符。自 PHP 7.1.0 起可用。       </span>
 */
define('FILTER_FLAG_EMAIL_UNICODE', 1048576);

/**
 * <span class="simpara">        仅允许全局地址。这些可以在 <a href="https://datatracker.ietf.org/doc/html/rfc6890" class="link external">»&nbsp;RFC 6890</a>        中找到，其中 <code class="literal">Global</code> 属性是 <code class="literal">True</code>。自        PHP 8.2.0 起可用。       </span>
 * 
 * filters Global IPs per RFC 6890
 * @since 8.2
 */
define('FILTER_FLAG_GLOBAL_RANGE', 268435456);

// End of filter v.0.11.0
