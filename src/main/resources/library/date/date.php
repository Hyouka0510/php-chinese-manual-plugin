<?php

// Start of date v.5.3.2-0.dotdeb.1
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Deprecated;
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
use JetBrains\PhpStorm\Pure;

/**
* <div id="function.strtotime" class="refentry"> <div class="refnamediv">  <h1 class="refname">strtotime</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strtotime</span> — <span class="dc-title">将任何英文文本日期时间描述解析为 Unix 时间戳</span></p> </div> <div class="refsect1 description" id="refsect1-function.strtotime-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>strtotime</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$datetime</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$baseTimestamp</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="simpara">   本函数期望接受包含英文日期格式的字符串并尝试将其解析为   Unix 时间戳（自 January 1 1970 00:00:00 UTC 起的秒数），其值跟   <span class="parameter" style="color:#3A95FF">baseTimestamp</span> 参数给出的时间相关，如果没有提供   <span class="parameter" style="color:#3A95FF">baseTimestamp</span> 参数则为当前时间。在<a href="https://php.net/manual/zh/datetime.formats.php" class="link">日期和时间格式</a>中定义了日期字符串解析，并且有几个微秒的注意事项，强烈建议查看完整详细信息。  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    本函数返回的 Unix 时间戳不包含时区信息，为了实现对日期/时间信息进行计算，推荐使用功能更强大的    <span class="classname"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span>。   </p>  </div>  <p class="para">   本函数的每个参数都使用默认时区，除非在该参数指定了时区。注意不要在每个参数中使用不同的时区，除非是故意的。参考   <span class="function">{@link date_default_timezone_get()}</span> 获取定义默认时区的各种方法。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.strtotime-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">datetime</span></dt>     <dd>      <p class="para">日期/时间字符串。正确格式的说明详见 <a href="https://php.net/manual/zh/datetime.formats.php" class="link">日期与时间格式</a>。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">baseTimestamp</span></dt>     <dd>      <p class="para">       时间戳，用作计算相对日期的基础。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.strtotime-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功则返回时间戳，否则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 errors" id="refsect1-function.strtotime-errors">  <h3 class="title">错误／异常</h3>      <p class="para">在每次调用日期/时间函数时，如果时区无效则会引发 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-notice">E_NOTICE</a></span></strong> 错误。参见<span class="function">{@link date_default_timezone_set()}</span>。</p>  </div> <div class="refsect1 changelog" id="refsect1-function.strtotime-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        现在 <span class="parameter" style="color:#3A95FF">baseTimestamp</span> 允许为 null。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.strtotime-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2283">    <p><strong>示例 #1 <span class="function"><strong>strtotime()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"now"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"10 September 2000"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"+1 day"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"+1 week"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"+1 week 2 days 4 hours 2 seconds"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"next Thursday"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"last Monday"</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2284">    <p><strong>示例 #2 失败检查</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$str </span><span style="color: #007700">= </span><span style="color: #DD0000">'Not Good'</span><span style="color: #007700">;<br><br>if ((</span><span style="color: #9876AA">$timestamp </span><span style="color: #007700">= </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #9876AA">$str</span><span style="color: #007700">)) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"The string (</span><span style="color: #9876AA">$str</span><span style="color: #DD0000">) is bogus"</span><span style="color: #007700">;<br>} else {<br>    echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">$str</span><span style="color: #DD0000"> == " </span><span style="color: #007700">. </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'l dS \o\f F Y h:i:s A'</span><span style="color: #007700">, </span><span style="color: #9876AA">$timestamp</span><span style="color: #007700">);<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.strtotime-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    在这种情况下，“相对”日期还意味着，如果未提供日期/时间的特定组成部分，则将从 <span class="parameter" style="color:#3A95FF">baseTimestamp</span>    逐字获取。也就是说如果在 2022 年 5 月 31 日运行 <span class="code">strtotime('February')</span>，将被解释为    <span class="literal">31 February 2022</span>，它将溢出到 <span class="literal">3 March</span> 的时间戳。（在闰年，应该是    <span class="literal">2 March</span>。）使用 <span class="code">strtotime('1 February')</span> 或者    <span class="code">strtotime('first day of February')</span> 可以避免这个问题。   </p>  </blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    如果指定的年份位数是两位数字，则其值 0-69 表示 2000-2069，70-99 表示 1970-1999。参阅下面的注释了解    32 位系统上可能的差异（结束日期可能是 2038-01-19 03:14:07）。   </p>  </blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    时间戳的有效范围通常从 Fri, 13 Dec 1901 20:45:54 UTC    到 Tue, 19 Jan 2038 03:14:07 UTC（这些日期对应 32    位有符号整数的最小值和最大值）。   </p>   <p class="para">    在 64 位的 PHP 版本中，时间戳的有效范围实际上是无限的，因为    64 位在任一方向上都可以代表大约 2930 亿年。   </p>  </blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    不建议使用此函数对日期进行数学运算。推荐使用    <span class="methodname" style="color:#CC7832">{@link DateTime::add()}</span> 和    <span class="methodname" style="color:#CC7832">{@link DateTime::sub()}</span> 函数。   </p>  </blockquote> </div> <div class="refsect1 seealso" id="refsect1-function.strtotime-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="classname"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span></li>    <li><span class="methodname" style="color:#CC7832">{@link DateTimeImmutable::createFromFormat()} - Parses a time string according to a specified format</span></li>    <li><a href="https://php.net/manual/zh/datetime.formats.php" class="link">日期和时间格式</a></li>    <li><span class="function">{@link checkdate()} - 验证一个格里高里日期</span></li>    <li><span class="function">{@link strptime()} - 解析由 strftime 生成的日期／时间</span></li>   </ul>   </div></div>
*
 * Parse about any English textual datetime description into a Unix timestamp
 * @link https://php.net/manual/zh/function.strtotime.php
 * @param string $datetime <p>
 * The string to parse. Before PHP 5.0.0, microseconds weren't allowed in
 * the time, since PHP 5.0.0 they are allowed but ignored.
 * </p>
 * @param int|null $baseTimestamp [optional] <p>
 * Default value: null
 * The timestamp which is used as a base for the calculation of relative
 * dates.
 * </p>
 * @return int|false a timestamp on success, false otherwise. Previous to PHP 5.1.0,
 * this function would return -1 on failure.
 
#[Pure(true)]
*/
function strtotime(string $datetime, ?int $baseTimestamp): int|false {}

/**
* <div id="function.date" class="refentry"> <div class="refnamediv">  <h1 class="refname">date</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date</span> — <span class="dc-title">格式化 Unix 时间戳</span></p> </div> <div class="refsect1 description" id="refsect1-function.date-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>date</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$format</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$timestamp</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   使用指定整数 <span class="parameter" style="color:#3A95FF">timestamp</span>（Unix 时间戳），或者使用当前时间（如果没有指定时间戳），返回相应的指定格式的格式化字符串。换句话说，<span class="parameter" style="color:#3A95FF">timestamp</span>   是可选的，默认值是 <span class="function">{@link time()}</span>。  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    Unix 时间戳不处理时区。使用 <span class="classname"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span> 及其    <span class="methodname" style="color:#CC7832">{@link DateTimeInterface::format()}</span> 格式化方法来格式化携带时区的日期/时间信息。   </p>  </div> </div> <div class="refsect1 parameters" id="refsect1-function.date-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">format</span></dt>    <dd>     <p class="para">      <span class="methodname" style="color:#CC7832">{@link DateTimeInterface::format()}</span> 接受的格式。     </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        <span class="simpara">        <span class="function"><strong>date()</strong></span> 将始终生成 <span class="literal">000000</span> 作为微秒，因为它采用 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>        参数，而如果 <span class="classname"><a href="https://php.net/manual/zh/class.datetimeinterface.php" class="classname">DateTimeInterface</a></span> 类型的对象是用微秒创建的，        则 <span class="methodname" style="color:#CC7832">{@link DateTimeInterface::format()}</span> 支持微秒。       </span>      </p></blockquote>    </dd>      <dt><span class="parameter" style="color:#3A95FF">timestamp</span></dt><dd><p class="para">可选的 <span class="parameter" style="color:#3A95FF">timestamp</span> 参数是一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 的 Unix时间戳，如未指定或是 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，参数值默认为当前本地时间。也就是说，其值默认为<span class="function">{@link time()}</span> 的返回值。</p></dd>  </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.date-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回格式化后的日期字符串。  </p> </div> <div class="refsect1 errors" id="refsect1-function.date-errors">  <h3 class="title">错误／异常</h3>   <p class="para">在每次调用日期/时间函数时，如果时区无效则会引发 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-notice">E_NOTICE</a></span></strong> 错误。参见<span class="function">{@link date_default_timezone_set()}</span>。</p> </div> <div class="refsect1 changelog" id="refsect1-function.date-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        现在 <span class="parameter" style="color:#3A95FF">timestamp</span> 允许为 null。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.date-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2242">    <p><strong>示例 #1 <span class="function"><strong>date()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 设置要使用的默认时区。<br></span><span style="color: #9876AA">date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'UTC'</span><span style="color: #007700">);<br><br><br></span><span style="color: #FF8000">// 打印类似：Monday<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"l"</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 打印类似：Monday 8th of August 2005 03:12:46 PM<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'l jS \of F Y h:i:s A'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 打印：July 1, 2000 is on a Saturday<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"July 1, 2000 is on a " </span><span style="color: #007700">. </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"l"</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">7</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">2000</span><span style="color: #007700">));<br><br></span><span style="color: #FF8000">// 使用格式化参数中的常量 <br>// 打印类似：Wed, 25 Sep 2013 15:28:57 -0700<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #9876AA">DATE_RFC2822</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 打印类似：2000-07-01T00:00:00+00:00<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #9876AA">DATE_ATOM</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">7</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">2000</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   可以对格式化字符串中的解析字符，在其前面添加反斜线来防止解析。如果带有反斜线的字符已经是特殊字符，需要对反斜线进行再次转义。   </p><div class="example" id="example-2243">    <p><strong>示例 #2 <span class="function"><strong>date()</strong></span> 中的转义字符</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 打印类似： Wednesday the 15th<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'l \t\h\e jS'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   可以一起使用 <span class="function"><strong>date()</strong></span> 和 <span class="function">{@link mktime()}</span>    来查找过去或未来的日期时间。   </p><div class="example" id="example-2244">    <p><strong>示例 #3 <span class="function"><strong>date()</strong></span> 和 <span class="function">{@link mktime()}</span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$tomorrow  </span><span style="color: #007700">= </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">)  , </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">)+</span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">));<br></span><span style="color: #9876AA">$lastmonth </span><span style="color: #007700">= </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">)-</span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">),   </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">));<br></span><span style="color: #9876AA">$nextyear  </span><span style="color: #007700">= </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m"</span><span style="color: #007700">),   </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"d"</span><span style="color: #007700">),   </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y"</span><span style="color: #007700">)+</span><span style="color: #9876AA">1</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:     </p><p class="para">     由于存在夏令时时间，所以此方案相对于直接在时间戳上加/减秒数要更加可靠。    </p>   </blockquote>    <p class="para">   <span class="function"><strong>date()</strong></span>    格式化的一些示例。请注意，即使是对于当前来说并不具有特殊含义的字符，也要像对待具有特殊含义的字符那样进行转义，以避免产生非预期的值，因为可能在将来的   PHP 版本中，这些字符会被赋予特殊的含义。进行转义的时候，请确保使用单引号，以避免 \n 这样的字符被解释为换行符号。   </p><div class="example" id="example-2245">    <p><strong>示例 #4 <span class="function"><strong>date()</strong></span> 格式化</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 假设今天是 2001 年 3 月 10 日下午 5 点 16 分 18 秒，<br>// 并且位于山区标准时间（MST）时区<br><br></span><span style="color: #9876AA">$today </span><span style="color: #007700">= </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"F j, Y, g:i a"</span><span style="color: #007700">);                 </span><span style="color: #FF8000">// March 10, 2001, 5:16 pm<br></span><span style="color: #9876AA">$today </span><span style="color: #007700">= </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"m.d.y"</span><span style="color: #007700">);                         </span><span style="color: #FF8000">// 03.10.01<br></span><span style="color: #9876AA">$today </span><span style="color: #007700">= </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"j, n, Y"</span><span style="color: #007700">);                       </span><span style="color: #FF8000">// 10, 3, 2001<br></span><span style="color: #9876AA">$today </span><span style="color: #007700">= </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Ymd"</span><span style="color: #007700">);                           </span><span style="color: #FF8000">// 20010310<br></span><span style="color: #9876AA">$today </span><span style="color: #007700">= </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'h-i-s, j-m-y, it is w Day'</span><span style="color: #007700">);     </span><span style="color: #FF8000">// 05-16-18, 10-03-01, 1631 1618 6 Satpm01<br></span><span style="color: #9876AA">$today </span><span style="color: #007700">= </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'\i\t \i\s \t\h\e jS \d\a\y.'</span><span style="color: #007700">);   </span><span style="color: #FF8000">// it is the 10th day.<br></span><span style="color: #9876AA">$today </span><span style="color: #007700">= </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"D M j G:i:s T Y"</span><span style="color: #007700">);               </span><span style="color: #FF8000">// Sat Mar 10 17:16:18 MST 2001<br></span><span style="color: #9876AA">$today </span><span style="color: #007700">= </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'H:m:s \m \i\s\ \m\o\n\t\h'</span><span style="color: #007700">);     </span><span style="color: #FF8000">// 17:03:18 m is month<br></span><span style="color: #9876AA">$today </span><span style="color: #007700">= </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"H:i:s"</span><span style="color: #007700">);                         </span><span style="color: #FF8000">// 17:16:18<br></span><span style="color: #9876AA">$today </span><span style="color: #007700">= </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"Y-m-d H:i:s"</span><span style="color: #007700">);                   </span><span style="color: #FF8000">// 2001-03-10 17:16:18（MySQL DATETIME 格式）<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   如果需要将日期时间格式化为其他语言，使用   <span class="methodname" style="color:#CC7832">{@link IntlDateFormatter::format()}</span>   而不是 <span class="function"><strong>date()</strong></span>。  </p> </div> <div class="refsect1 notes" id="refsect1-function.date-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    使用 <span class="function">{@link strtotime()}</span>    将字符串表示的日期转换为时间戳。另外，一些数据库产品也提供了将日期格式转换为时间戳的函数（例如     MySQL 中的 <a href="http://dev.mysql.com/doc/mysql/en/date-and-time-functions.html" class="link external">» UNIX_TIMESTAMP</a> 函数）。   </p>  </blockquote>  <div class="tip"><strong class="tip">小技巧</strong>   <p class="para">    请求的开始时间可以从变量 <var class="varname"><a href="https://php.net/manual/zh/reserved.variables.server.php" class="classname">$_SERVER['REQUEST_TIME']</a></var> 中获取。   </p>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.date-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="methodname" style="color:#CC7832">{@link DateTimeImmutable::__construct()} - Returns new DateTimeImmutable object</span></li>    <li><span class="methodname" style="color:#CC7832">{@link DateTimeInterface::format()} - 按照指定格式返回格式化后的日期</span></li>    <li><span class="function">{@link gmdate()} - 格式化 GMT/UTC 日期／时间</span></li>    <li><span class="function">{@link idate()} - 将本地日期/时间格式化为整数</span></li>    <li><span class="function">{@link getdate()} - 获取日期/时间信息</span></li>    <li><span class="function">{@link getlastmod()} - 获取页面最后修改的时间</span></li>    <li><span class="function">{@link mktime()} - 取得一个日期的 Unix 时间戳</span></li>    <li><span class="methodname" style="color:#CC7832">{@link IntlDateFormatter::format()} - Format the date/time value as a string</span></li>    <li><span class="function">{@link time()} - 返回当前的 Unix 时间戳</span></li>    <li><a href="https://php.net/manual/zh/class.datetimeinterface.php#datetimeinterface.constants.types" class="link">预定义 DateTime 常量</a></li>   </ul>   </div></div>
*
 * Format a local time/date
 * @link https://php.net/manual/zh/function.date.php
 * @param string $format <p>
 * The format of the outputted date string. See the formatting
 * options below. There are also several
 * predefined date constants
 * that may be used instead, so for example DATE_RSS
 * contains the format string 'D, d M Y H:i:s'.
 * </p>
 * <p>
 * <br>
 * The following characters are recognized in the
 * format parameter string:
 * <br><br>
 * <table>
 * <tr valign="top" colspan="3" bgcolor="silver">
 * <th>format character</th>
 * <th>Description</th>
 * <th>Example returned values</th>
 * </tr>
 * <tr valign="top">
 * <td><b>Day</b></td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>d</td>
 * <td>Day of the month, 2 digits with leading zeros</td>
 * <td>01 to 31</td>
 * </tr>
 * <tr valign="top">
 * <td>D</td>
 * <td>A textual representation of a day, three letters</td>
 * <td>Mon through Sun</td>
 * </tr>
 * <tr valign="top">
 * <td>j</td>
 * <td>Day of the month without leading zeros</td>
 * <td>1 to 31</td>
 * </tr>
 * <tr valign="top">
 * <td>l (lowercase 'L')</td>
 * <td>A full textual representation of the day of the week</td>
 * <td>Sunday through Saturday</td>
 * </tr>
 * <tr valign="top">
 * <td>N</td>
 * <td>ISO-8601 numeric representation of the day of the week (added in
 * PHP 5.1.0)</td>
 * <td>1 (for Monday) through 7 (for Sunday)</td>
 * </tr>
 * <tr valign="top">
 * <td>S</td>
 * <td>English ordinal suffix for the day of the month, 2 characters</td>
 * <td>
 * st, nd, rd or
 * th. Works well with j
 * </td>
 * </tr>
 * <tr valign="top">
 * <td>w</td>
 * <td>Numeric representation of the day of the week</td>
 * <td>0 (for Sunday) through 6 (for Saturday)</td>
 * </tr>
 * <tr valign="top">
 * <td>z</td>
 * <td>The day of the year (starting from 0)</td>
 * <td>0 through 365</td>
 * </tr>
 * <tr valign="top">
 * <td><b>Week</b></td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>W</td>
 * <td>ISO-8601 week number of year, weeks starting on Monday (added in PHP 4.1.0)</td>
 * <td>Example: 42 (the 42nd week in the year)</td>
 * </tr>
 * <tr valign="top">
 * <td><b>Month</b></td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>F</td>
 * <td>A full textual representation of a month, such as January or March</td>
 * <td>January through December</td>
 * </tr>
 * <tr valign="top">
 * <td>m</td>
 * <td>Numeric representation of a month, with leading zeros</td>
 * <td>01 through 12</td>
 * </tr>
 * <tr valign="top">
 * <td>M</td>
 * <td>A short textual representation of a month, three letters</td>
 * <td>Jan through Dec</td>
 * </tr>
 * <tr valign="top">
 * <td>n</td>
 * <td>Numeric representation of a month, without leading zeros</td>
 * <td>1 through 12</td>
 * </tr>
 * <tr valign="top">
 * <td>t</td>
 * <td>Number of days in the given month</td>
 * <td>28 through 31</td>
 * </tr>
 * <tr valign="top">
 * <td><b>Year</b></td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>L</td>
 * <td>Whether it's a leap year</td>
 * <td>1 if it is a leap year, 0 otherwise.</td>
 * </tr>
 * <tr valign="top">
 * <td>o</td>
 * <td>ISO-8601 year number. This has the same value as
 * Y, except that if the ISO week number
 * (W) belongs to the previous or next year, that year
 * is used instead. (added in PHP 5.1.0)</td>
 * <td>Examples: 1999 or 2003</td>
 * </tr>
 * <tr valign="top">
 * <td>Y</td>
 * <td>A full numeric representation of a year, 4 digits</td>
 * <td>Examples: 1999 or 2003</td>
 * </tr>
 * <tr valign="top">
 * <td>y</td>
 * <td>A two digit representation of a year</td>
 * <td>Examples: 99 or 03</td>
 * </tr>
 * <tr valign="top">
 * <td><b>Time</b></td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>a</td>
 * <td>Lowercase Ante meridiem and Post meridiem</td>
 * <td>am or pm</td>
 * </tr>
 * <tr valign="top">
 * <td>A</td>
 * <td>Uppercase Ante meridiem and Post meridiem</td>
 * <td>AM or PM</td>
 * </tr>
 * <tr valign="top">
 * <td>B</td>
 * <td>Swatch Internet time</td>
 * <td>000 through 999</td>
 * </tr>
 * <tr valign="top">
 * <td>g</td>
 * <td>12-hour format of an hour without leading zeros</td>
 * <td>1 through 12</td>
 * </tr>
 * <tr valign="top">
 * <td>G</td>
 * <td>24-hour format of an hour without leading zeros</td>
 * <td>0 through 23</td>
 * </tr>
 * <tr valign="top">
 * <td>h</td>
 * <td>12-hour format of an hour with leading zeros</td>
 * <td>01 through 12</td>
 * </tr>
 * <tr valign="top">
 * <td>H</td>
 * <td>24-hour format of an hour with leading zeros</td>
 * <td>00 through 23</td>
 * </tr>
 * <tr valign="top">
 * <td>i</td>
 * <td>Minutes with leading zeros</td>
 * <td>00 to 59</td>
 * </tr>
 * <tr valign="top">
 * <td>s</td>
 * <td>Seconds, with leading zeros</td>
 * <td>00 through 59</td>
 * </tr>
 * <tr valign="top">
 * <td>u</td>
 * <td>Microseconds (added in PHP 5.2.2)</td>
 * <td>Example: 654321</td>
 * </tr>
 * <tr valign="top">
 * <td><b>Timezone</b></td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>e</td>
 * <td>Timezone identifier (added in PHP 5.1.0)</td>
 * <td>Examples: UTC, GMT, Atlantic/Azores</td>
 * </tr>
 * <tr valign="top">
 * <td>I (capital i)</td>
 * <td>Whether or not the date is in daylight saving time</td>
 * <td>1 if Daylight Saving Time, 0 otherwise.</td>
 * </tr>
 * <tr valign="top">
 * <td>O</td>
 * <td>Difference to Greenwich time (GMT) in hours</td>
 * <td>Example: +0200</td>
 * </tr>
 * <tr valign="top">
 * <td>P</td>
 * <td>Difference to Greenwich time (GMT) with colon between hours and minutes (added in PHP 5.1.3)</td>
 * <td>Example: +02:00</td>
 * </tr>
 * <tr valign="top">
 * <td>T</td>
 * <td>Timezone abbreviation</td>
 * <td>Examples: EST, MDT ...</td>
 * </tr>
 * <tr valign="top">
 * <td>Z</td>
 * <td>Timezone offset in seconds. The offset for timezones west of UTC is always
 * negative, and for those east of UTC is always positive.</td>
 * <td>-43200 through 50400</td>
 * </tr>
 * <tr valign="top">
 * <td><b>Full Date/Time</b></td>
 * <td>---</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>c</td>
 * <td>ISO 8601 date (added in PHP 5)</td>
 * <td>2004-02-12T15:19:21+00:00</td>
 * </tr>
 * <tr valign="top">
 * <td>r</td>
 * <td>RFC 2822 formatted date</td>
 * <td>Example: Thu, 21 Dec 2000 16:01:07 +0200</td>
 * </tr>
 * <tr valign="top">
 * <td>U</td>
 * <td>Seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)</td>
 * <td>See also time</td>
 * </tr>
 * </table>
 * </p>
 * <p>
 * Unrecognized characters in the format string will be printed
 * as-is. The Z format will always return
 * 0 when using gmdate.
 * </p>
 * <p>
 * Since this function only accepts integer timestamps the
 * u format character is only useful when using the
 * date_format function with user based timestamps
 * created with date_create.
 * </p>
 * @param int|null $timestamp [optional] Default value: time(). The optional timestamp parameter is an integer Unix timestamp
 * that defaults to the current local time if a timestamp is not given.
 * @return string|false a formatted date string. If a non-numeric value is used for
 * timestamp, false is returned and an
 * E_WARNING level error is emitted.
 
#[Pure(true)]
#[LanguageLevelTypeAware(["8.0" => "string"], default: "string|false")]
*/
function date(string $format, ?int $timestamp) {}

/**
* <div id="function.idate" class="refentry"> <div class="refnamediv">  <h1 class="refname">idate</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">idate</span> — <span class="dc-title">将本地日期/时间格式化为整数</span></p> </div> <div class="refsect1 description" id="refsect1-function.idate-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>idate</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$format</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$timestamp</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   使用明确的 int 类型 <span class="parameter" style="color:#3A95FF">timestamp</span>   或者当前本地时间（如果没有明确时间戳），根据明确的格式化字符串返回格式化后的数字。换句话说，<span class="parameter" style="color:#3A95FF">timestamp</span>   是可选的，默认值是 <span class="function">{@link time()}</span> 的值。  </p>  <p class="para">   跟 <span class="function">{@link date()}</span> 不同，<span class="function"><strong>idate()</strong></span>   只接受一个字符作为 <span class="parameter" style="color:#3A95FF">format</span> 的参数。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.idate-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">format</span></dt>     <dd>      <p class="para">       </p><table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">format</span> 参数字符串仅识别以下字符</strong></caption>                 <thead>          <tr>           <th><span class="parameter" style="color:#3A95FF">format</span> 字符</th>           <th>说明</th>          </tr>         </thead>         <tbody class="tbody">          <tr>           <td><span class="literal">B</span></td>           <td>Swatch Beat/互联网时间</td>          </tr>          <tr>           <td><span class="literal">d</span></td>           <td>月份中的第几天</td>          </tr>          <tr>           <td><span class="literal">h</span></td>           <td>小时（12 小时制）</td>          </tr>          <tr>           <td><span class="literal">H</span></td>           <td>小时（24 小时制）</td>          </tr>          <tr>           <td><span class="literal">i</span></td>           <td>分钟</td>          </tr>          <tr>           <td><span class="literal">I</span>（大写 i）</td>           <td>如果启用夏令时则返回 <span class="literal">1</span>，否则返回 <span class="literal">0</span></td>          </tr>          <tr>           <td><span class="literal">L</span>（大写 l）</td>           <td>如果是闰年则返回 <span class="literal">1</span>，否则返回 <span class="literal">0</span></td>          </tr>          <tr>           <td><span class="literal">m</span></td>           <td>月份的数字</td>          </tr>          <tr>           <td><span class="literal">N</span></td>           <td>ISO-8601 格式的周几（<span class="literal">1</span> 表示周一到 <span class="literal">7</span> 表示周日）</td>          </tr>          <tr>           <td><span class="literal">o</span></td>           <td>ISO-8601 格式的年份（4位）</td>          </tr>          <tr>           <td><span class="literal">s</span></td>           <td>秒数</td>          </tr>          <tr>           <td><span class="literal">t</span></td>           <td>本月的总天数</td>          </tr>          <tr>           <td><span class="literal">U</span></td>           <td>自 Unix 纪元（January 1 1970 00:00:00 GMT）起的秒数——这和 <span class="function">{@link time()}</span> 相同</td>          </tr>          <tr>           <td><span class="literal">w</span></td>           <td>周几（<span class="literal">0</span> 是周日）</td>          </tr>          <tr>           <td><span class="literal">W</span></td>           <td>ISO-8601 格式的年份中第几个星期，每星期从星期一开始</td>          </tr>          <tr>           <td><span class="literal">y</span></td>           <td>年份（1 或 2 位数字——见下面说明）</td>          </tr>          <tr>           <td><span class="literal">Y</span></td>           <td>年份（4 位数字）</td>          </tr>          <tr>           <td><span class="literal">z</span></td>           <td>年份中的第几天</td>          </tr>          <tr>           <td><span class="literal">Z</span></td>           <td>以秒为单位的时差</td>          </tr>         </tbody>               </table>           </dd>            <dt><span class="parameter" style="color:#3A95FF">timestamp</span></dt><dd><p class="para">可选的 <span class="parameter" style="color:#3A95FF">timestamp</span> 参数是一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 的 Unix时间戳，如未指定或是 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，参数值默认为当前本地时间。也就是说，其值默认为<span class="function">{@link time()}</span> 的返回值。</p></dd>         </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.idate-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   由于 <span class="function"><strong>idate()</strong></span> 始终返回不以“0”开头的   <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>，因此 <span class="function"><strong>idate()</strong></span>   返回的数字可能位数要比期望的小。查看以下示例。  </p> </div> <div class="refsect1 errors" id="refsect1-function.idate-errors">  <h3 class="title">错误／异常</h3>      <p class="para">在每次调用日期/时间函数时，如果时区无效则会引发 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-notice">E_NOTICE</a></span></strong> 错误。参见<span class="function">{@link date_default_timezone_set()}</span>。</p>  </div> <div class="refsect1 changelog" id="refsect1-function.idate-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.2.0</td>       <td>        添加 <span class="literal">N</span>（ISO-8601 格式的周几）和        <span class="literal">o</span>（ISO-8601 格式的年份）格式字符。       </td>      </tr>      <tr>       <td>8.0.0</td>       <td>        现在 <span class="parameter" style="color:#3A95FF">timestamp</span> 允许为 null。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.idate-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2271">    <p><strong>示例 #1 <span class="function"><strong>idate()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$timestamp </span><span style="color: #007700">= </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">'1st January 2004'</span><span style="color: #007700">); </span><span style="color: #FF8000">//1072915200<br><br>// 下面以两位数字格式打印年份，但是因为<br>// 以“0”打头，因此只会打印“4”<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">idate</span><span style="color: #007700">(</span><span style="color: #DD0000">'y'</span><span style="color: #007700">, </span><span style="color: #9876AA">$timestamp</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.idate-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="methodname" style="color:#CC7832">{@link DateTimeInterface::format()} - 按照指定格式返回格式化后的日期</span></li>    <li><span class="function">{@link date()} - 格式化 Unix 时间戳</span></li>    <li><span class="function">{@link getdate()} - 获取日期/时间信息</span></li>    <li><span class="function">{@link time()} - 返回当前的 Unix 时间戳</span></li>   </ul>   </div></div>
*
 * Format a local time/date as integer
 * @link https://php.net/manual/zh/function.idate.php
 * @param string $format <p>
 * <table>
 * The following characters are recognized in the
 * format parameter string
 * <tr valign="top">
 * <td>format character</td>
 * <td>Description</td>
 * </tr>
 * <tr valign="top">
 * <td>B</td>
 * <td>Swatch Beat/Internet Time</td>
 * </tr>
 * <tr valign="top">
 * <td>d</td>
 * <td>Day of the month</td>
 * </tr>
 * <tr valign="top">
 * <td>h</td>
 * <td>Hour (12 hour format)</td>
 * </tr>
 * <tr valign="top">
 * <td>H</td>
 * <td>Hour (24 hour format)</td>
 * </tr>
 * <tr valign="top">
 * <td>i</td>
 * <td>Minutes</td>
 * </tr>
 * <tr valign="top">
 * <td>I (uppercase i)</td>
 * <td>returns 1 if DST is activated,
 * 0 otherwise</td>
 * </tr>
 * <tr valign="top">
 * <td>L (uppercase l)</td>
 * <td>returns 1 for leap year,
 * 0 otherwise</td>
 * </tr>
 * <tr valign="top">
 * <td>m</td>
 * <td>Month number</td>
 * </tr>
 * <tr valign="top">
 * <td>s</td>
 * <td>Seconds</td>
 * </tr>
 * <tr valign="top">
 * <td>t</td>
 * <td>Days in current month</td>
 * </tr>
 * <tr valign="top">
 * <td>U</td>
 * <td>Seconds since the Unix Epoch - January 1 1970 00:00:00 UTC -
 * this is the same as time</td>
 * </tr>
 * <tr valign="top">
 * <td>w</td>
 * <td>Day of the week (0 on Sunday)</td>
 * </tr>
 * <tr valign="top">
 * <td>W</td>
 * <td>ISO-8601 week number of year, weeks starting on
 * Monday</td>
 * </tr>
 * <tr valign="top">
 * <td>y</td>
 * <td>Year (1 or 2 digits - check note below)</td>
 * </tr>
 * <tr valign="top">
 * <td>Y</td>
 * <td>Year (4 digits)</td>
 * </tr>
 * <tr valign="top">
 * <td>z</td>
 * <td>Day of the year</td>
 * </tr>
 * <tr valign="top">
 * <td>Z</td>
 * <td>Timezone offset in seconds</td>
 * </tr>
 * </table>
 * </p>
 * @param int|null $timestamp [optional] Default value: time(). The optional timestamp parameter is an integer Unix timestamp
 * that defaults to the current local time if a timestamp is not given.
 * @return int|false an integer.
 * <p>
 * As idate always returns an integer and
 * as they can't start with a "0", idate may return
 * fewer digits than you would expect. See the example below.
 * </p>
 
#[Pure(true)]
*/
function idate(string $format, ?int $timestamp): int|false {}

/**
* <div id="function.gmdate" class="refentry"> <div class="refnamediv">  <h1 class="refname">gmdate</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gmdate</span> — <span class="dc-title">格式化 GMT/UTC 日期／时间</span></p> </div> <div class="refsect1 description" id="refsect1-function.gmdate-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>gmdate</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$format</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$timestamp</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   同 <span class="function">{@link date()}</span> 函数一样，只是返回的时间是格林威治标准时（GMT）。  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.gmdate-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">format</span></dt>     <dd>      <p class="para">       输出日期 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> 的格式。参阅 <span class="function">{@link date()}</span> 函数格式化选项。      </p>     </dd>            <dt><span class="parameter" style="color:#3A95FF">timestamp</span></dt><dd><p class="para">可选的 <span class="parameter" style="color:#3A95FF">timestamp</span> 参数是一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 的 Unix时间戳，如未指定或是 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，参数值默认为当前本地时间。也就是说，其值默认为<span class="function">{@link time()}</span> 的返回值。</p></dd>      </dl>   </div>    <div class="refsect1 returnvalues" id="refsect1-function.gmdate-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回格式化的日期字符串。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.gmdate-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        现在 <span class="parameter" style="color:#3A95FF">timestamp</span> 允许为 null。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.gmdate-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2268">    <p><strong>示例 #1 <span class="function"><strong>gmdate()</strong></span> 示例</strong></p>    <div class="example-contents"><p>     在芬兰（GMT +0200）运行时，下面的第一行打印“Jan 01     1998 00:00:00”，第二行打印“Dec 31 1997 22:00:00”。    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"M d Y H:i:s"</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">1998</span><span style="color: #007700">));<br>echo </span><span style="color: #9876AA">gmdate</span><span style="color: #007700">(</span><span style="color: #DD0000">"M d Y H:i:s"</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">1998</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.gmdate-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="methodname" style="color:#CC7832">{@link DateTimeImmutable::__construct()} - Returns new DateTimeImmutable object</span></li>    <li><span class="methodname" style="color:#CC7832">{@link DateTimeInterface::format()} - 按照指定格式返回格式化后的日期</span></li>    <li><span class="function">{@link date()} - 格式化 Unix 时间戳</span></li>    <li><span class="function">{@link mktime()} - 取得一个日期的 Unix 时间戳</span></li>    <li><span class="function">{@link gmmktime()} - 取得 GMT 日期的 UNIX 时间戳</span></li>    <li><span class="methodname" style="color:#CC7832">{@link IntlDateFormatter::format()} - Format the date/time value as a string</span></li>   </ul>   </div></div>
*
 * Format a GMT/UTC date/time
 * @link https://php.net/manual/zh/function.gmdate.php
 * @param string $format <p>
 * The format of the outputted date string. See the formatting
 * options for the date function.
 * </p>
 * @param int|null $timestamp [optional] Default value: time(). The optional timestamp parameter is an integer Unix timestamp
 * that defaults to the current local time if a timestamp is not given.
 * @return string|false a formatted date string. If a non-numeric value is used for
 * timestamp, false is returned and an
 * E_WARNING level error is emitted.
 
#[Pure(true)]
#[LanguageLevelTypeAware(["8.0" => "string"], default: "string|false")]
*/
function gmdate(string $format, ?int $timestamp) {}

/**
* <div id="function.mktime" class="refentry"> <div class="refnamediv">  <h1 class="refname">mktime</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mktime</span> — <span class="dc-title">取得一个日期的 Unix 时间戳</span></p> </div> <div class="refsect1 description" id="refsect1-function.mktime-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mktime</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$hour</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$minute</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$second</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$month</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$day</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$year</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   根据给出的参数返回 Unix 时间戳。时间戳是一个长整数，包含了从   Unix 纪元（January 1 1970 00:00:00 GMT）到给定时间的秒数。  </p>  <p class="para">   任何可选或为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> 的参数都将根据本地日期和时间设置为当前值。  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    请注意，参数的顺序是很奇怪：<span class="parameter" style="color:#3A95FF">month</span>、<span class="parameter" style="color:#3A95FF">day</span>、<span class="parameter" style="color:#3A95FF">year</span>，而不是更合理的    <span class="parameter" style="color:#3A95FF">year</span>、<span class="parameter" style="color:#3A95FF">month</span>、<span class="parameter" style="color:#3A95FF">day</span> 顺序。   </p>  </div>  <p class="simpara">   不带参数调用 <span class="function"><strong>mktime()</strong></span> 已经不受支持，会导致 <span class="classname"><a href="https://php.net/manual/zh/class.argumentcounterror.php" class="classname">ArgumentCountError</a></span>。   <span class="function">{@link time()}</span> 可以用来获取当前时间戳。  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.mktime-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">hour</span></dt>     <dd>      <p class="para">       相对于一天开始的小时数，由 <span class="parameter" style="color:#3A95FF">month</span>、<span class="parameter" style="color:#3A95FF">day</span> 和       <span class="parameter" style="color:#3A95FF">year</span> 确定。负值是指当天零点前的小时。值大于 23 是指接下来几天的适当小时。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">minute</span></dt>     <dd>      <p class="para">       相对于 <span class="parameter" style="color:#3A95FF">hour</span> 开始的分钟数。负值指的是上个小时的分钟。大于 59       的值将指向接下来几个小时的适当分钟。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">second</span></dt>     <dd>      <p class="para">       相对于 <span class="parameter" style="color:#3A95FF">minute</span> 开始的秒数。负值是指前一分钟的秒数。大于 59       的值是指接下来几分钟的适当秒。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">month</span></dt>     <dd>      <p class="para">       相对于去年年底的月份数。值 1 到 12 是指相关年份的正常日历月份。小于 1       的值（包括负值）按相反的顺序指向去年的月份，因此 0 是 12 月，-1 是 11       月，以此类推。值大于 12 是指接下来几年的适当月份。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">day</span></dt>     <dd>      <p class="para">       相对于上个月月底的天数。值 1 到 28、29、30 或 31（取决于月份）是指相关月份的正常天数。小于       1 的值（包括负值）是指上个月的天数，因此 0 是上个月的最后一天，-1        是倒数第二天，以此类推。大于相关月份天数的值是指接下来几个月的适当某一天。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">year</span></dt>     <dd>      <p class="para">       年份数，可以是两位或四位数字，0-69 对应于 2000-2069，70-100       对应于 1970-2000。在如今系统中普遍把 time_t 作为一个 32       位有符号整数的情况下，<span class="parameter" style="color:#3A95FF">year</span>       的合法范围是 1901 到 2038 之间。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mktime-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function"><strong>mktime()</strong></span> 根据给出的参数返回 Unix 时间戳，如果时间戳不适合 PHP 整数则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.mktime-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        <span class="parameter" style="color:#3A95FF">hour</span> 不再可选。如果需要 Unix 时间戳，可以使用 <span class="function">{@link time()}</span>。       </td>      </tr>      <tr>       <td>8.0.0</td>       <td>        现在 <span class="parameter" style="color:#3A95FF">minute</span>、<span class="parameter" style="color:#3A95FF">second</span>、<span class="parameter" style="color:#3A95FF">month</span>、<span class="parameter" style="color:#3A95FF">day</span>        和 <span class="parameter" style="color:#3A95FF">year</span> 允许为 null。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.mktime-examples">  <h3 class="title">示例</h3>    <p class="para">   </p><div class="example" id="example-2275"><p><strong>示例 #1 基本例子 </strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 设置使用的默认时区。<br></span><span style="color: #9876AA">date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'UTC'</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// 打印：July 1, 2000 is on a Saturday<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"July 1, 2000 is on a " </span><span style="color: #007700">. </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"l"</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">7</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">2000</span><span style="color: #007700">));<br><br></span><span style="color: #FF8000">// 打印类似的东西：2006-04-05T01:02:03+00:00<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'c'</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">2</span><span style="color: #007700">, </span><span style="color: #9876AA">3</span><span style="color: #007700">, </span><span style="color: #9876AA">4</span><span style="color: #007700">, </span><span style="color: #9876AA">5</span><span style="color: #007700">, </span><span style="color: #9876AA">2006</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2276">    <p><strong>示例 #2 <span class="function"><strong>mktime()</strong></span> 例子</strong></p>    <div class="example-contents"><p>     <span class="function"><strong>mktime()</strong></span>     在做日期计算和验证方面很有用，它会自动计算超出范围的输入的正确值。例如下面例子中每一行都会产生字符串     "Jan-01-1998"。    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"M-d-Y"</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">12</span><span style="color: #007700">, </span><span style="color: #9876AA">32</span><span style="color: #007700">, </span><span style="color: #9876AA">1997</span><span style="color: #007700">));<br>echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"M-d-Y"</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">13</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">1997</span><span style="color: #007700">));<br>echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"M-d-Y"</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">1998</span><span style="color: #007700">));<br>echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"M-d-Y"</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">98</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2277">    <p><strong>示例 #3 下个月的最后一天</strong></p>    <div class="example-contents"><p>     任何给定月份的最后一天都可以被表示为下个月的第 "0"     天，而不是 -1 天。下面两个例子都会产生字符串     "The last day in Feb 2000 is: 29"。    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$lastday </span><span style="color: #007700">= </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">3</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">2000</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">'Last day in Feb 2000 is: '</span><span style="color: #007700">, </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'d'</span><span style="color: #007700">, </span><span style="color: #9876AA">$lastday</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$lastday </span><span style="color: #007700">= </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">4</span><span style="color: #007700">, -</span><span style="color: #9876AA">31</span><span style="color: #007700">, </span><span style="color: #9876AA">2000</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">'Last day in Feb 2000 is: '</span><span style="color: #007700">, </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'d'</span><span style="color: #007700">, </span><span style="color: #9876AA">$lastday</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.mktime-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="classname"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span> 类</li>    <li><span class="function">{@link checkdate()} - 验证一个格里高里日期</span></li>    <li><span class="function">{@link gmmktime()} - 取得 GMT 日期的 UNIX 时间戳</span></li>    <li><span class="function">{@link date()} - 格式化 Unix 时间戳</span></li>     <li><span class="function">{@link time()} - 返回当前的 Unix 时间戳</span></li>   </ul>   </div></div>
*
 * Get Unix timestamp for a date
 * @link https://php.net/manual/zh/function.mktime.php
 * @param int $hour <p>
 * The number of the hour.
 * </p>
 * @param int|null $minute <p>
 * The number of the minute.
 * </p>
 * @param int|null $second <p>
 * The number of seconds past the minute.
 * </p>
 * @param int|null $month <p>
 * The number of the month.
 * </p>
 * @param int|null $day <p>
 * The number of the day.
 * </p>
 * @param int|null $year [optional] <p>
 * The number of the year, may be a two or four digit value,
 * with values between 0-69 mapping to 2000-2069 and 70-100 to
 * 1970-2000. On systems where time_t is a 32bit signed integer, as
 * most common today, the valid range for year
 * is somewhere between 1901 and 2038. However, before PHP 5.1.0 this
 * range was limited from 1970 to 2038 on some systems (e.g. Windows).
 * </p>
 * @param int $is_dst [optional] <p>
 * This parameter can be set to 1 if the time is during daylight savings time (DST),
 * 0 if it is not, or -1 (the default) if it is unknown whether the time is within
 * daylight savings time or not. If it's unknown, PHP tries to figure it out itself.
 * This can cause unexpected (but not incorrect) results.
 * Some times are invalid if DST is enabled on the system PHP is running on or
 * is_dst is set to 1. If DST is enabled in e.g. 2:00, all times
 * between 2:00 and 3:00 are invalid and mktime returns an undefined
 * (usually negative) value.
 * Some systems (e.g. Solaris 8) enable DST at midnight so time 0:30 of the day when DST
 * is enabled is evaluated as 23:30 of the previous day.
 * </p>
 * <p>
 * As of PHP 5.1.0, this parameter became deprecated. As a result, the
 * new timezone handling features should be used instead.
 * </p>
 * <p>
 * This parameter has been removed in PHP 7.0.0.
 * </p>
 * @return int|false mktime returns the Unix timestamp of the arguments
 * given.
 * If the arguments are invalid, the function returns false (before PHP 5.1
 * it returned -1).
 
#[Pure(true)]
*/
function mktime(
    #[PhpStormStubsElementAvailable(from: '5.3', to: '7.4')] int $hour = null,
    #[PhpStormStubsElementAvailable(from: '8.0')] int $hour,
    ?int $minute = null,
    ?int $second = null,
    ?int $month = null,
    ?int $day = null,
    ?int $year = null,
    #[Deprecated('Use the new timezone handling functions instead', since: '5.3')] #[PhpStormStubsElementAvailable(from: '5.5', to: '5.6')] int $is_dst = -1
): int|false {}

/**
* <div id="function.gmmktime" class="refentry"> <div class="refnamediv">  <h1 class="refname">gmmktime</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gmmktime</span> — <span class="dc-title">取得 GMT 日期的 UNIX 时间戳</span></p> </div> <div class="refsect1 description" id="refsect1-function.gmmktime-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>gmmktime</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$hour</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$minute</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$second</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$month</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$day</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$year</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   和 <span class="function">{@link mktime()}</span> 相同，但传递的参数是 GMT 日期。   <span class="function"><strong>gmmktime()</strong></span> internally uses <span class="function">{@link mktime()}</span>   so only times valid in derived local time can be used.  </p>  <p class="para">   和 <span class="function">{@link mktime()}</span>   一样，可选参数可以从右到左的顺序省略，省略的参数会被设为当前对应的 GMT 值。  </p>  <p class="simpara">   不再支持不带参数调用 <span class="function"><strong>gmmktime()</strong></span>，并会导致 <span class="classname"><a href="https://php.net/manual/zh/class.argumentcounterror.php" class="classname">ArgumentCountError</a></span>。   <span class="function">{@link time()}</span> 可用于获取当前时间戳。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.gmmktime-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">hour</span></dt>     <dd>      <p class="para">       相对于一天开始的小时数，由 <span class="parameter" style="color:#3A95FF">month</span>、<span class="parameter" style="color:#3A95FF">day</span> 和       <span class="parameter" style="color:#3A95FF">year</span> 确定。负值是指当天零点前的小时。值大于 23 是指接下来几天的适当小时。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">minute</span></dt>     <dd>      <p class="para">       相对于 <span class="parameter" style="color:#3A95FF">hour</span> 开始的分钟数。负值指的是上个小时的分钟。大于 59       的值将指向接下来几个小时的适当分钟。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">second</span></dt>     <dd>      <p class="para">       相对于 <span class="parameter" style="color:#3A95FF">minute</span> 开始的秒数。负值是指前一分钟的秒数。大于 59       的值是指接下来几分钟的适当秒。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">month</span></dt>     <dd>      <p class="para">       相对于去年年底的月份数。值 1 到 12 是指相关年份的正常日历月份。小于 1       的值（包括负值）按相反的顺序指向去年的月份，因此 0 是 12 月，-1 是 11       月，以此类推。值大于 12 是指接下来几年的适当月份。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">day</span></dt>     <dd>      <p class="para">       相对于上个月月底的天数。值 1 到 28、29、30 或 31（取决于月份）是指相关月份的正常天数。小于       1 的值（包括负值）是指上个月的天数，因此 0 是上个月的最后一天，-1        是倒数第二天，以此类推。大于相关月份天数的值是指接下来几个月的适当某一天。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">year</span></dt>     <dd>      <p class="para">       年份      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.gmmktime-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> Unix 时间戳，如果时间戳不适合 PHP 整数则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.gmmktime-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        <span class="parameter" style="color:#3A95FF">hour</span> 不再可选。如果需要获取 Unix 时间戳，可以使用 <span class="function">{@link time()}</span>。       </td>      </tr>      <tr>       <td>8.0.0</td>       <td>        现在 <span class="parameter" style="color:#3A95FF">minute</span>、<span class="parameter" style="color:#3A95FF">second</span>、<span class="parameter" style="color:#3A95FF">month</span>、<span class="parameter" style="color:#3A95FF">day</span>        和 <span class="parameter" style="color:#3A95FF">year</span> 可以为 null。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.gmmktime-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2269">    <p><strong>示例 #1 <span class="function"><strong>gmmktime()</strong></span> 基础示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">// 打印： July 1, 2000 is on a Saturday<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"July 1, 2000 is on a " </span><span style="color: #007700">. </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"l"</span><span style="color: #007700">, </span><span style="color: #9876AA">gmmktime</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">7</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #9876AA">2000</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.gmmktime-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="classname"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span> 类</li>    <li><span class="function">{@link mktime()} - 取得一个日期的 Unix 时间戳</span></li>    <li><span class="function">{@link date()} - 格式化 Unix 时间戳</span></li>    <li><span class="function">{@link time()} - 返回当前的 Unix 时间戳</span></li>   </ul>   </div></div>
*
 * Get Unix timestamp for a GMT date
 * @link https://php.net/manual/zh/function.gmmktime.php
 * @param int $hour <p>
 * The hour
 * </p>
 * @param int $minute <p>
 * The minute
 * </p>
 * @param int $second <p>
 * The second
 * </p>
 * @param int $month <p>
 * The month
 * </p>
 * @param int $day <p>
 * The day
 * </p>
 * @param int $year <p>
 * The year
 * </p>
 * @param int $is_dst <p>
 * Parameters always represent a GMT date so is_dst
 * doesn't influence the result.
 * </p>
 * @return int|false a integer Unix timestamp.
 
#[Pure(true)]
*/
function gmmktime(
    #[PhpStormStubsElementAvailable(from: '5.3', to: '7.4')] int $hour = null,
    #[PhpStormStubsElementAvailable(from: '8.0')] int $hour,
    ?int $minute = null,
    ?int $second = null,
    ?int $month = null,
    ?int $day = null,
    ?int $year = null,
    #[PhpStormStubsElementAvailable(from: '5.5', to: '5.6')] $is_dst = null
): int|false {}

/**
* <div id="function.checkdate" class="refentry"> <div class="refnamediv">  <h1 class="refname">checkdate</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">checkdate</span> — <span class="dc-title">验证一个格里高里日期</span></p> </div> <div class="refsect1 description" id="refsect1-function.checkdate-description">  <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="methodname" style="color:#CC7832"><strong>checkdate</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$month</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$day</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$year</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>    <p class="para rdfs-comment">    检查由参数构成的日期的合法性。如果每个参数都正确定义了则会被认为是有效的。  </p>   </div>   <div class="refsect1 parameters" id="refsect1-function.checkdate-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">month</span></dt>     <dd>      <p class="para">       month 的值是从 1 到 12。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">day</span></dt>     <dd>      <p class="para">          <span class="parameter" style="color:#3A95FF">Day</span> 的值在给定的 <span class="parameter" style="color:#3A95FF">month</span>                所应该具有的天数范围之内，闰年已经考虑进去了。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">year</span></dt>     <dd>      <p class="para">       year 的值是从 1 到 32767。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.checkdate-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果给出的日期有效则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>，否则返回   <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.checkdate-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2241">    <p><strong>示例 #1 <span class="function"><strong>checkdate()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">checkdate</span><span style="color: #007700">(</span><span style="color: #9876AA">12</span><span style="color: #007700">, </span><span style="color: #9876AA">31</span><span style="color: #007700">, </span><span style="color: #9876AA">2000</span><span style="color: #007700">));<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">checkdate</span><span style="color: #007700">(</span><span style="color: #9876AA">2</span><span style="color: #007700">, </span><span style="color: #9876AA">29</span><span style="color: #007700">, </span><span style="color: #9876AA">2001</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">bool(true)<br>bool(false)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.checkdate-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mktime()} - 取得一个日期的 Unix 时间戳</span></li>    <li><span class="function">{@link strtotime()} - 将任何英文文本日期时间描述解析为 Unix 时间戳</span></li>   </ul>   </div></div>
*
 * Validate a Gregorian date
 * @link https://php.net/manual/zh/function.checkdate.php
 * @param int $month <p>
 * The month is between 1 and 12 inclusive.
 * </p>
 * @param int $day <p>
 * The day is within the allowed number of days for the given
 * month. Leap years
 * are taken into consideration.
 * </p>
 * @param int $year <p>
 * The year is between 1 and 32767 inclusive.
 * </p>
 * @return bool true if the date given is valid; otherwise returns false.
 
#[Pure]
*/
function checkdate(int $month, int $day, int $year): bool {}

/**
* <div id="function.strftime" class="refentry"> <div class="refnamediv">  <h1 class="refname">strftime</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">strftime</span> — <span class="dc-title">根据区域设置格式化本地时间/日期</span></p> </div> <div id="function.strftime-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara"> 该函数自 PHP 8.1起<em>弃用</em>。强烈建议不要依赖此函数。</p></div><p class="para"> 此函数可以使用如下替代：</p>  <ul class="simplelist">   <li><span class="function">{@link date()}</span></li>   <li><span class="methodname" style="color:#CC7832">{@link IntlDateFormatter::format()}</span></li>  </ul> </div> <div class="refsect1 description" id="refsect1-function.strftime-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>strftime</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$format</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$timestamp</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   返回用给定的格式字串对给出的 <span class="parameter" style="color:#3A95FF">timestamp</span>   进行格式输出后的字符串。如果没有给出时间戳则用当前的本地时间。月份和星期几以及其它和语言有关的字符串写法和用   <span class="function">{@link setlocale()}</span> 设定的当前的区域有关。  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    可能不是所有的转换标记都被 C 库文件支持，这种情况下 PHP    的 <span class="function"><strong>strftime()</strong></span>    也不支持。此外，不是所有的平台都支持负的时间戳，因此日期的范围可能限定在不早于    Unix 纪元。这意味着例如    %e, %T，%R 和 %D（可能更多）以及早于    <span class="literal">Jan 1, 1970</span> 的时间在 Windows，一些 Linux    发行版本，以及其它几个操作系统中无效。对于 Windows    系统，所支持的转换标记可在    <a href="http://msdn.microsoft.com/en-us/library/fe06s4ak.aspx" class="link external">» <abbr title="Microsoft Developer Network">MSDN</abbr> 网站</a>找到。    Instead use the    <span class="methodname" style="color:#CC7832">{@link IntlDateFormatter::format()}</span> method.   </p>  </div> </div>  <div class="refsect1 parameters" id="refsect1-function.strftime-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">format</span></dt>     <dd>      <p class="para">       </p><table class="doctable table">        <caption><strong>         <span class="parameter" style="color:#3A95FF">format</span> 里能够识别的格式字串有以下标记：</strong></caption>                 <thead>          <tr>           <th><span class="parameter" style="color:#3A95FF">格式</span></th>           <th>描述</th>           <th>返回值示例</th>          </tr>         </thead>         <tbody class="tbody">          <tr>           <td style="text-align: center;"><em>日</em></td>           <td>---</td>           <td>---</td>          </tr>          <tr>           <td><span class="literal">%a</span></td>           <td>当前区域星期几的简写</td>           <td><span class="literal">Sun</span> 到 <span class="literal">Sat</span></td>          </tr>          <tr>           <td><span class="literal">%A</span></td>           <td>当前区域星期几的全称</td>           <td><span class="literal">Sunday</span> 到 <span class="literal">Saturday</span></td>          </tr>          <tr>           <td><span class="literal">%d</span></td>           <td>月份中的第几天，十进制数字（范围从 01 到 31）</td>           <td><span class="literal">01</span> 到 <span class="literal">31</span></td>          </tr>          <tr>           <td><span class="literal">%e</span></td>           <td>            月份中的第几天，十进制数字，一位的数字前会加上一个空格（范围从 ' 1' 到 '31'）            在 Windows 上尚未按描述实现。更多信息见下方。           </td>           <td><span class="literal"> 1</span> 到 <span class="literal">31</span></td>          </tr>          <tr>           <td><span class="literal">%j</span></td>           <td>年份中的第几天，带前导零的三位十进制数（范围从  001 到 366）</td>           <td><span class="literal">001</span> 到 <span class="literal">366</span></td>          </tr>          <tr>           <td><span class="literal">%u</span></td>           <td>符合 ISO-8601 星期几的十进制数表达 [1,7]，1 表示星期一</td>           <td><span class="literal">1</span> (星期一) 到 <span class="literal">7</span> (星期日)</td>          </tr>          <tr>           <td><span class="literal">%w</span></td>           <td>星期中的第几天，星期天为 0</td>           <td><span class="literal">0</span> (星期天) 到 <span class="literal">6</span> (星期六)</td>          </tr>          <tr>           <td style="text-align: center;"><em>周</em></td>           <td>---</td>           <td>---</td>          </tr>          <tr>           <td><span class="literal">%U</span></td>           <td>本年的第几周，从第一周的第一个星期天作为第一天开始</td>           <td><span class="literal">13</span> (for the 13th full week of the year)</td>          </tr>          <tr>           <td><span class="literal">%V</span></td>           <td>            %V - 本年第几周的 ISO-8601:1988 格式，范围从 01 到 53，第            1 周是本年第一个至少还有 4 天的星期，星期一作为每周的第一天。（用            %G 或者 %g 作为指定时间戳相应周数的年份组成。）           </td>           <td><span class="literal">01</span> 到 <span class="literal">53</span> (where 53            accounts for an overlapping week)</td>          </tr>          <tr>           <td><span class="literal">%W</span></td>           <td>本年的第几周数，从第一周的第一个星期一作为第一天开始</td>           <td><span class="literal">46</span> (for the 46th week of the year beginning            with a Monday)</td>          </tr>          <tr>           <td style="text-align: center;"><em>月</em></td>           <td>---</td>           <td>---</td>          </tr>          <tr>           <td><span class="literal">%b</span></td>           <td>当前区域月份的简写</td>           <td><span class="literal">Jan</span> 到 <span class="literal">Dec</span></td>          </tr>          <tr>           <td><span class="literal">%B</span></td>           <td>当前区域月份的全称</td>           <td><span class="literal">January</span> 到 <span class="literal">December</span></td>          </tr>          <tr>           <td><span class="literal">%h</span></td>           <td>当前区域月份的简写（%b 的别名）</td>           <td><span class="literal">Jan</span> 到 <span class="literal">Dec</span></td>          </tr>          <tr>           <td><span class="literal">%m</span></td>           <td>两位数的月份</td>           <td><span class="literal">01</span> (是一月份) 到 <span class="literal">12</span> (是十二月份)</td>          </tr>          <tr>           <td style="text-align: center;"><em>年</em></td>           <td>---</td>           <td>---</td>          </tr>          <tr>           <td><span class="literal">%C</span></td>           <td>两位数显示世纪（年份除以 100，截成整数）</td>           <td><span class="literal">19</span> 是 20 世纪</td>          </tr>          <tr>           <td><span class="literal">%g</span></td>           <td>            2 位数的年份，符合 ISO-8601:1988 星期数（参见            %V）。和 %V 的格式和值一样，只除了如果 ISO 星期数属于前一年或者后一年，则使用那一年。           </td>           <td>比如：2009年1月6日那一周是 <span class="literal">09</span>。</td>          </tr>          <tr>           <td><span class="literal">%G</span></td>           <td>%g 的完整四位数版本</td>           <td>比如：2009年1月3日那一周是  <span class="literal">2008</span>.</td>          </tr>          <tr>           <td><span class="literal">%y</span></td>           <td>两位数显示年份</td>           <td>比如： <span class="literal">09</span> 是 2009，<span class="literal">79</span> 是 1979</td>          </tr>          <tr>           <td><span class="literal">%Y</span></td>           <td>四位数显示年份</td>           <td>比如： <span class="literal">2038</span></td>          </tr>          <tr>           <td style="text-align: center;"><em>时间</em></td>           <td>---</td>           <td>---</td>          </tr>          <tr>           <td><span class="literal">%H</span></td>           <td>以 24 小时格式显示两位小时数</td>           <td><span class="literal">00</span> 到 <span class="literal">23</span></td>          </tr>          <tr>           <td><span class="literal">%k</span></td>           <td>Hour in 24-hour format, with a space preceding single digits</td>           <td><span class="literal"> 0</span> through <span class="literal">23</span></td>          </tr>          <tr>           <td><span class="literal">%I</span></td>           <td>以 12 小时格式显示两位小时数</td>           <td><span class="literal">01</span> 到 <span class="literal">12</span></td>          </tr>          <tr>           <td><span class="literal">%l（'L' 的小写）</span></td>           <td>以 12 小时格式显示小时数，单个数字前含空格</td>           <td><span class="literal"> 1</span> 到 <span class="literal">12</span></td>          </tr>          <tr>           <td><span class="literal">%M</span></td>           <td>两位的分钟数</td>           <td><span class="literal">00</span> 到 <span class="literal">59</span></td>          </tr>          <tr>           <td><span class="literal">%p</span></td>           <td>指定时间的大写 “AM” 或 “PM”</td>           <td>比如： 00:31 是 <span class="literal">AM</span> ，22:23            是<span class="literal">PM</span>。The exact result depends on the           Operating System, and they can also return lower-case variants, or           variants with dots (such as <span class="literal">a.m.</span>).</td>          </tr>          <tr>           <td><span class="literal">%P</span></td>           <td>指定时间的小写 “am” 或 “pm”</td>           <td>比如：00:31 是 <span class="literal">am</span> ，22:23            是<span class="literal">pm</span>。Not supported by all Operating           Systems.</td>          </tr>          <tr>           <td><span class="literal">%r</span></td>           <td>和 "%I:%M:%S %p" 一样</td>           <td>比如： 21:34:17 是 <span class="literal">09:34:17 PM</span></td>          </tr>          <tr>           <td><span class="literal">%R</span></td>           <td>和 "%H:%M" 一样</td>           <td>比如： 12:35 AM 是 <span class="literal">00:35</span>，4:44 PM 是 <span class="literal">16:44</span></td>          </tr>          <tr>           <td><span class="literal">%S</span></td>           <td>两位数字表示秒</td>           <td><span class="literal">00</span> 到 <span class="literal">59</span></td>          </tr>          <tr>           <td><span class="literal">%T</span></td>           <td>和 "%H:%M:%S" 一样</td>           <td>比如： 09:34:17 PM 是 <span class="literal">21:34:17</span></td>          </tr>          <tr>           <td><span class="literal">%X</span></td>           <td>当前区域首选的时间表示法，不包括日期</td>           <td>例如： <span class="literal">03:59:16</span> 或 <span class="literal">15:59:16</span></td>          </tr>          <tr>           <td><span class="literal">%z</span></td>           <td>The time zone offset. Not implemented as described on           Windows. See below for more information.</td>           <td>Example: <span class="literal">-0500</span> for US Eastern Time</td>          </tr>          <tr>           <td><span class="literal">%Z</span></td>           <td>The time zone abbreviation. Not implemented as described on           Windows. See below for more information.</td>           <td>Example: <span class="literal">EST</span> for Eastern Time</td>          </tr>          <tr>           <td style="text-align: center;"><em>时间和日期戳</em></td>           <td>---</td>           <td>---</td>          </tr>          <tr>           <td><span class="literal">%c</span></td>           <td>当前区域设置首选的日期时间表达</td>           <td>比如： 2009 年 2 月 5 日上午 12:45:10 是 <span class="literal">Tue Feb  5 00:45:10 2009</span></td>          </tr>          <tr>           <td><span class="literal">%D</span></td>           <td>和 "%m/%d/%y" 一样</td>           <td>比如： 2009 年 2 月 5 日是 <span class="literal">02/05/09</span></td>          </tr>          <tr>           <td><span class="literal">%F</span></td>           <td>Same as "%Y-%m-%d" (commonly used in database datestamps)</td>           <td>比如：2009 年 2 月 5 日是 <span class="literal">2009-02-05</span></td>          </tr>          <tr>           <td><span class="literal">%s</span></td>           <td>Unix纪元的时间戳（和 <span class="function">{@link time()}</span> 函数一样）</td>           <td>比如： 1979 年 9 月 10 日上午 8 点 40 分 00 秒是 <span class="literal">305815200</span></td>          </tr>          <tr>           <td><span class="literal">%x</span></td>           <td>当前区域首选的时间表示法，不包括时间</td>           <td>比如： 2009 年 2 月 5 日是 <span class="literal">02/05/09</span></td>          </tr>          <tr>           <td style="text-align: center;"><em>其他</em></td>           <td>---</td>           <td>---</td>          </tr>          <tr>           <td><span class="literal">%n</span></td>           <td>换行符("\n")</td>           <td>---</td>          </tr>          <tr>           <td><span class="literal">%t</span></td>           <td>Tab 字符("\t")</td>           <td>---</td>          </tr>          <tr>           <td><span class="literal">%%</span></td>           <td>文字上的百分字符("%")</td>           <td>---</td>          </tr>         </tbody>               </table>            <div class="warning"><strong class="warning">警告</strong>       <p class="simpara">        尽管 ISO 9889:1999（当前的 C 标准）明确指出一周从星期一开始，但是        Sun Solaris 的一周似乎从星期天开始并作为 1。所以 %u 的结果也许不会和手册里描述得一样。       </p>      </div>      <div class="warning"><strong class="warning">警告</strong>       <p class="para">        <em>仅针对 Windows：</em>       </p>       <p class="para">        这个函数里 <span class="literal">%e</span>         修饰符修饰符还不能支持 Windows。为了得到这个值可以用        <span class="literal">%#d</span> 修饰符来代替。下例说明了如何写一个跨平台支持的函数。       </p>       <p class="para">        The <span class="literal">%z</span> and <span class="literal">%Z</span> modifiers both        return the time zone name instead of the offset or abbreviation.       </p>      </div>      <div class="warning"><strong class="warning">警告</strong>       <p class="simpara">        <em>仅针对 macOS 和 musl：</em>这个函数里 <span class="literal">%P</span> 修饰符还不能支持 macOS。       </p>      </div>     </dd>            <dt><span class="parameter" style="color:#3A95FF">timestamp</span></dt><dd><p class="para">可选的 <span class="parameter" style="color:#3A95FF">timestamp</span> 参数是一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 的 Unix时间戳，如未指定或是 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，参数值默认为当前本地时间。也就是说，其值默认为<span class="function">{@link time()}</span> 的返回值。</p></dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.strftime-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   根据指定的 <span class="parameter" style="color:#3A95FF">timestamp</span> 或未给出 timestamp 是使用当前本地时间，   返回 <span class="parameter" style="color:#3A95FF">format</span> 格式化的字符。   月份、星期名和其他与语言相关的字符串遵守 <span class="function">{@link setlocale()}</span> 设置的当前区域设置。   The function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if <span class="parameter" style="color:#3A95FF">format</span> is empty, contains unsupported   conversion specifiers, or if the length of the returned string would be greater than   <span class="literal">4095</span>.  </p> </div>  <div class="refsect1 errors" id="refsect1-function.strftime-errors">  <h3 class="title">错误／异常</h3>  <p class="para">在每次调用日期/时间函数时，如果时区无效则会引发 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-notice">E_NOTICE</a></span></strong> 错误。参见<span class="function">{@link date_default_timezone_set()}</span>。</p>  <p class="para">   由于输出依赖于 C 库，所以一些转换标记并不被支持。   在 Windows 上，使用未知的转换标记将导致   5 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong> 信息，并返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。      在其他的操作系统上，你可能不能得到任何 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong> 信息，   并且可能输出未经转换的转换标记。  </p> </div>  <div class="refsect1 changelog" id="refsect1-function.strftime-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        <span class="parameter" style="color:#3A95FF">timestamp</span> is nullable now.       </td>      </tr>     </tbody>       </table>   </div>  <div class="refsect1 examples" id="refsect1-function.strftime-examples">  <h3 class="title">示例</h3>  <p class="para">   如果你的系统里安装了各自的语言环境则下例能够正常运行。   </p><div class="example" id="example-2278">    <p><strong>示例 #1 <span class="function"><strong>strftime()</strong></span> 区域的例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>setlocale</span><span style="color: #007700">(</span><span style="color: #9876AA">LC_TIME</span><span style="color: #007700">, </span><span style="color: #DD0000">"C"</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%A"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">setlocale</span><span style="color: #007700">(</span><span style="color: #9876AA">LC_TIME</span><span style="color: #007700">, </span><span style="color: #DD0000">"fi_FI"</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">" in Finnish is %A,"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">setlocale</span><span style="color: #007700">(</span><span style="color: #9876AA">LC_TIME</span><span style="color: #007700">, </span><span style="color: #DD0000">"fr_FR"</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">" in French %A and"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">setlocale</span><span style="color: #007700">(</span><span style="color: #9876AA">LC_TIME</span><span style="color: #007700">, </span><span style="color: #DD0000">"de_DE"</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">" in German %A.\n"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2279">    <p><strong>示例 #2 ISO 8601:1988 week number example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">//     December 2002 / January 2003<br>ISOWk  M   Tu  W   Thu F   Sa  Su<br>----- ----------------------------<br>51     16  17  18  19  20  21  22<br>52     23  24  25  26  27  28  29<br>1      30  31   1   2   3   4   5<br>2       6   7   8   9  10  11  12<br>3      13  14  15  16  17  18  19   <br><br>// 输出： 12/28/2002 - %V,%G,%Y = 52,2002,2002<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"12/28/2002 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">, </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"12/28/2002"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// 输出： 12/30/2002 - %V,%G,%Y = 1,2003,2002<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"12/30/2002 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">, </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"12/30/2002"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// 输出： 1/3/2003 - %V,%G,%Y = 1,2003,2003<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"1/3/2003 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"1/3/2003"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// 输出： 1/10/2003 - %V,%G,%Y = 2,2003,2003<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"1/10/2003 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"1/10/2003"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br><br><br></span><span style="color: #FF8000">//     December 2004 / January 2005<br>ISOWk  M   Tu  W   Thu F   Sa  Su<br>----- ----------------------------<br>51     13  14  15  16  17  18  19<br>52     20  21  22  23  24  25  26<br>53     27  28  29  30  31   1   2<br>1       3   4   5   6   7   8   9<br>2      10  11  12  13  14  15  16   <br><br>// 输出： 12/23/2004 - %V,%G,%Y = 52,2004,2004<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"12/23/2004 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"12/23/2004"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// 输出： 12/31/2004 - %V,%G,%Y = 53,2004,2004<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"12/31/2004 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"12/31/2004"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// 输出： 1/2/2005 - %V,%G,%Y = 53,2004,2005<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"1/2/2005 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"1/2/2005"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// 输出： 1/3/2005 - %V,%G,%Y = 1,2005,2005<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"1/3/2005 - %V,%G,%Y = " </span><span style="color: #007700">. </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%V,%G,%Y"</span><span style="color: #007700">,</span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"1/3/2005"</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2280">    <p><strong>示例 #3 <span class="literal">%e</span> 修改器跨平台兼容的例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// Jan 1: results in: '%e%1%' (%%, e, %%, %e, %%)<br></span><span style="color: #9876AA">$format </span><span style="color: #007700">= </span><span style="color: #DD0000">'%%e%%%e%%'</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// Check for Windows to find and replace the %e <br>// modifier correctly<br></span><span style="color: #007700">if (</span><span style="color: #9876AA">strtoupper</span><span style="color: #007700">(</span><span style="color: #9876AA">substr</span><span style="color: #007700">(</span><span style="color: #9876AA">PHP_OS</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">3</span><span style="color: #007700">)) == </span><span style="color: #DD0000">'WIN'</span><span style="color: #007700">) {<br>    </span><span style="color: #9876AA">$format </span><span style="color: #007700">= </span><span style="color: #9876AA">preg_replace</span><span style="color: #007700">(</span><span style="color: #DD0000">'#(?&lt;!%)((?:%%)*)%e#'</span><span style="color: #007700">, </span><span style="color: #DD0000">'&lt;/refsect1&gt;%#d'</span><span style="color: #007700">, </span><span style="color: #9876AA">$format</span><span style="color: #007700">);<br>}<br><br>echo </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #9876AA">$format</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2281">    <p><strong>示例 #4 显示所有已知和未知的格式</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// Describe the formats<br></span><span style="color: #9876AA">$strftimeFormats </span><span style="color: #007700">= array(<br>    </span><span style="color: #DD0000">'A' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'A full textual representation of the day'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'B' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Full month name, based on the locale'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'C' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the century (year divided by 100, truncated to an integer)'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'D' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Same as "%m/%d/%y"'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'E' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'F' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Same as "%Y-%m-%d"'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'G' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'The full four-digit version of %g'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'H' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the hour in 24-hour format'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'I' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the hour in 12-hour format'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'J' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'K' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'L' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'M' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the minute'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'N' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'O' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'P' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'lower-case "am" or "pm" based on the given time'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'Q' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'R' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Same as "%H:%M"'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'S' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the second'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'T' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Same as "%H:%M:%S"'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'U' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Week number of the given year, starting with the first Sunday as the first week'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'V' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'W' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'A numeric representation of the week of the year, starting with the first Monday as the first week'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'X' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Preferred time representation based on locale, without the date'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'Y' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Four digit representation for the year'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'Z' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'The time zone offset/abbreviation option NOT given by %z (depends on operating system)'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'a' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'An abbreviated textual representation of the day'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'b' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Abbreviated month name, based on the locale'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'c' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Preferred date and time stamp based on local'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'d' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two-digit day of the month (with leading zeros)'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'e' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Day of the month, with a space preceding single digits'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'f' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'g' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the year going by ISO-8601:1988 standards (see %V)'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'h' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Abbreviated month name, based on the locale (an alias of %b)'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'i' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'j' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Day of the year, 3 digits with leading zeros'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'k' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Hour in 24-hour format, with a space preceding single digits'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'l' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Hour in 12-hour format, with a space preceding single digits'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'m' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the month'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'n' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'A newline character ("\n")'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'o' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'p' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'UPPER-CASE "AM" or "PM" based on the given time'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'q' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'r' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Same as "%I:%M:%S %p"'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'s' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Unix Epoch Time timestamp'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'t' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'A Tab character ("\t")'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'u' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'ISO-8601 numeric representation of the day of the week'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'v' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">''</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'w' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Numeric representation of the day of the week'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'x' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Preferred date representation based on locale, without the time'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'y' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Two digit representation of the year'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'z' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'Either the time zone offset from UTC or the abbreviation (depends on operating system)'</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">'%' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'A literal percentage character ("%")'</span><span style="color: #007700">,<br>);<br><br></span><span style="color: #FF8000">// Results<br></span><span style="color: #9876AA">$strftimeValues </span><span style="color: #007700">= array();<br><br></span><span style="color: #FF8000">// Evaluate the formats whilst suppressing any errors<br></span><span style="color: #007700">foreach (</span><span style="color: #9876AA">$strftimeFormats </span><span style="color: #007700">as </span><span style="color: #9876AA">$format </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">$description</span><span style="color: #007700">) {<br>    if (</span><span style="color: #9876AA">false </span><span style="color: #007700">!== (</span><span style="color: #9876AA">$value </span><span style="color: #007700">= @</span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%</span><span style="color: #007700">{</span><span style="color: #9876AA">$format</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">))) {<br>        </span><span style="color: #9876AA">$strftimeValues</span><span style="color: #007700">[</span><span style="color: #9876AA">$format</span><span style="color: #007700">] = </span><span style="color: #9876AA">$value</span><span style="color: #007700">;<br>    }<br>}<br><br></span><span style="color: #FF8000">// Find the longest value<br></span><span style="color: #9876AA">$maxValueLength </span><span style="color: #007700">= </span><span style="color: #9876AA">2 </span><span style="color: #007700">+ </span><span style="color: #9876AA">max</span><span style="color: #007700">(</span><span style="color: #9876AA">array_map</span><span style="color: #007700">(</span><span style="color: #DD0000">'strlen'</span><span style="color: #007700">, </span><span style="color: #9876AA">$strftimeValues</span><span style="color: #007700">));<br><br></span><span style="color: #FF8000">// Report known formats<br></span><span style="color: #007700">foreach (</span><span style="color: #9876AA">$strftimeValues </span><span style="color: #007700">as </span><span style="color: #9876AA">$format </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">$value</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"Known format   : '</span><span style="color: #007700">{</span><span style="color: #9876AA">$format</span><span style="color: #007700">}</span><span style="color: #DD0000">' = "</span><span style="color: #007700">, </span><span style="color: #9876AA">str_pad</span><span style="color: #007700">(</span><span style="color: #DD0000">"'</span><span style="color: #007700">{</span><span style="color: #9876AA">$value</span><span style="color: #007700">}</span><span style="color: #DD0000">'"</span><span style="color: #007700">, </span><span style="color: #9876AA">$maxValueLength</span><span style="color: #007700">), </span><span style="color: #DD0000">" ( </span><span style="color: #007700">{</span><span style="color: #9876AA">$strftimeFormats</span><span style="color: #007700">[</span><span style="color: #9876AA">$format</span><span style="color: #007700">]}</span><span style="color: #DD0000"> )\n"</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #FF8000">// Report unknown formats<br></span><span style="color: #007700">foreach (</span><span style="color: #9876AA">array_diff_key</span><span style="color: #007700">(</span><span style="color: #9876AA">$strftimeFormats</span><span style="color: #007700">, </span><span style="color: #9876AA">$strftimeValues</span><span style="color: #007700">) as </span><span style="color: #9876AA">$format </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">$description</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"Unknown format : '</span><span style="color: #007700">{</span><span style="color: #9876AA">$format</span><span style="color: #007700">}</span><span style="color: #DD0000">'   "</span><span style="color: #007700">, </span><span style="color: #9876AA">str_pad</span><span style="color: #007700">(</span><span style="color: #DD0000">' '</span><span style="color: #007700">, </span><span style="color: #9876AA">$maxValueLength</span><span style="color: #007700">), (</span><span style="color: #9876AA">$description </span><span style="color: #007700">? </span><span style="color: #DD0000">" ( </span><span style="color: #007700">{</span><span style="color: #9876AA">$description</span><span style="color: #007700">}</span><span style="color: #DD0000"> )" </span><span style="color: #007700">: </span><span style="color: #DD0000">''</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Known format   : 'A' = 'Friday'            ( A full textual representation of the day )<br>Known format   : 'B' = 'December'          ( Full month name, based on the locale )<br>Known format   : 'H' = '11'                ( Two digit representation of the hour in 24-hour format )<br>Known format   : 'I' = '11'                ( Two digit representation of the hour in 12-hour format )<br>Known format   : 'M' = '24'                ( Two digit representation of the minute )<br>Known format   : 'S' = '44'                ( Two digit representation of the second )<br>Known format   : 'U' = '48'                ( Week number of the given year, starting with the first Sunday as the first week )<br>Known format   : 'W' = '48'                ( A numeric representation of the week of the year, starting with the first Monday as the first week )<br>Known format   : 'X' = '11:24:44'          ( Preferred time representation based on locale, without the date )<br>Known format   : 'Y' = '2010'              ( Four digit representation for the year )<br>Known format   : 'Z' = 'GMT Standard Time' ( The time zone offset/abbreviation option NOT given by %z (depends on operating system) )<br>Known format   : 'a' = 'Fri'               ( An abbreviated textual representation of the day )<br>Known format   : 'b' = 'Dec'               ( Abbreviated month name, based on the locale )<br>Known format   : 'c' = '12/03/10 11:24:44' ( Preferred date and time stamp based on local )<br>Known format   : 'd' = '03'                ( Two-digit day of the month (with leading zeros) )<br>Known format   : 'j' = '337'               ( Day of the year, 3 digits with leading zeros )<br>Known format   : 'm' = '12'                ( Two digit representation of the month )<br>Known format   : 'p' = 'AM'                ( UPPER-CASE "AM" or "PM" based on the given time )<br>Known format   : 'w' = '5'                 ( Numeric representation of the day of the week )<br>Known format   : 'x' = '12/03/10'          ( Preferred date representation based on locale, without the time )<br>Known format   : 'y' = '10'                ( Two digit representation of the year )<br>Known format   : 'z' = 'GMT Standard Time' ( Either the time zone offset from UTC or the abbreviation (depends on operating system) )<br>Known format   : '%' = '%'                 ( A literal percentage character ("%") )<br>Unknown format : 'C'                       ( Two digit representation of the century (year divided by 100, truncated to an integer) )<br>Unknown format : 'D'                       ( Same as "%m/%d/%y" )<br>Unknown format : 'E'<br>Unknown format : 'F'                       ( Same as "%Y-%m-%d" )<br>Unknown format : 'G'                       ( The full four-digit version of %g )<br>Unknown format : 'J'<br>Unknown format : 'K'<br>Unknown format : 'L'<br>Unknown format : 'N'<br>Unknown format : 'O'<br>Unknown format : 'P'                       ( lower-case "am" or "pm" based on the given time )<br>Unknown format : 'Q'<br>Unknown format : 'R'                       ( Same as "%H:%M" )<br>Unknown format : 'T'                       ( Same as "%H:%M:%S" )<br>Unknown format : 'V'                       ( ISO-8601:1988 week number of the given year, starting with the first week of the year with at least 4 weekdays, with Monday being the start of the week )<br>Unknown format : 'e'                       ( Day of the month, with a space preceding single digits )<br>Unknown format : 'f'<br>Unknown format : 'g'                       ( Two digit representation of the year going by ISO-8601:1988 standards (see %V) )<br>Unknown format : 'h'                       ( Abbreviated month name, based on the locale (an alias of %b) )<br>Unknown format : 'i'<br>Unknown format : 'k'                       ( Hour in 24-hour format, with a space preceding single digits )<br>Unknown format : 'l'                       ( Hour in 12-hour format, with a space preceding single digits )<br>Unknown format : 'n'                       ( A newline character ("\n") )<br>Unknown format : 'o'<br>Unknown format : 'q'<br>Unknown format : 'r'                       ( Same as "%I:%M:%S %p" )<br>Unknown format : 's'                       ( Unix Epoch Time timestamp )<br>Unknown format : 't'                       ( A Tab character ("\t") )<br>Unknown format : 'u'                       ( ISO-8601 numeric representation of the day of the week )<br>Unknown format : 'v'</blockquote></div>    </div>   </div>   </div>  <div class="refsect1 notes" id="refsect1-function.strftime-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    %G 和 %V，如果数字编号系统未能充分理解，基于 ISO 8601:1988    的星期数可能得出未预期的结果。见上面的 %V 和以下的例子。   </span>  </p></blockquote> </div>  <div class="refsect1 seealso" id="refsect1-function.strftime-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="methodname" style="color:#CC7832">{@link IntlDateFormatter::format()} - Format the date/time value as a string</span></li>    <li><span class="methodname" style="color:#CC7832">{@link DateTimeInterface::format()} - 按照指定格式返回格式化后的日期</span></li>    <li><a href="http://strftime.net/" class="link external">» Online strftime() format design tool</a></li>    <li><span class="function">{@link setlocale()} - 设置区域信息</span></li>    <li><span class="function">{@link mktime()} - 取得一个日期的 Unix 时间戳</span></li>    <li><span class="function">{@link strptime()} - 解析由 strftime 生成的日期／时间</span></li>    <li><span class="function">{@link gmstrftime()} - 根据区域设置格式化 GMT/UTC 时间/日期</span></li>    <li><a href="http://www.opengroup.org/onlinepubs/007908799/xsh/strftime.html" class="link external">» Open Group specification of <span class="function"><strong>strftime()</strong></span></a></li>   </ul>   </div></div>
*
 * Format a local time/date according to locale settings
 * The following characters are recognized in the
 * format parameter string
 * <table>
 * <tr valign="top" colspan="3" bgcolor="silver">
 * <th>format</th>
 * <th>Description</th>
 * <th>Example returned values</th>
 * <th>
 * Day</th>
 * </tr>
 * <tr valign="top">
 * <td>%a</td>
 * <td>An abbreviated textual representation of the day</td>
 * <td>Sun through Sat</td>
 * </tr>
 * <tr valign="top">
 * <td>%A</td>
 * <td>A full textual representation of the day</td>
 * <td>Sunday through Saturday</td>
 * </tr>
 * <tr valign="top">
 * <td>%d</td>
 * <td>Two-digit day of the month (with leading zeros)</td>
 * <td>01 to 31</td>
 * </tr>
 * <tr valign="top">
 * <td>%e</td>
 * <td>Day of the month, with a space preceding single digits</td>
 * <td> 1 to 31</td>
 * </tr>
 * <tr valign="top">
 * <td>%j</td>
 * <td>Day of the year, 3 digits with leading zeros</td>
 * <td>001 to 366</td>
 * </tr>
 * <tr valign="top">
 * <td>%u</td>
 * <td>ISO-8601 numeric representation of the day of the week</td>
 * <td>1 (for Monday) though 7 (for Sunday)</td>
 * </tr>
 * <tr valign="top">
 * <td>%w</td>
 * <td>Numeric representation of the day of the week</td>
 * <td>0 (for Sunday) through 6 (for Saturday)</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Week</th>
 * </tr>
 * <tr valign="top">
 * <td>%U</td>
 * <td>Week number of the given year, starting with the first
 * Sunday as the first week</td>
 * <td>13 (for the 13th full week of the year)</td>
 * </tr>
 * <tr valign="top">
 * <td>%V</td>
 * <td>ISO-8601:1988 week number of the given year, starting with
 * the first week of the year with at least 4 weekdays, with Monday
 * being the start of the week</td>
 * <td>01 through 53 (where 53
 * accounts for an overlapping week)</td>
 * </tr>
 * <tr valign="top">
 * <td>%W</td>
 * <td>A numeric representation of the week of the year, starting
 * with the first Monday as the first week</td>
 * <td>46 (for the 46th week of the year beginning
 * with a Monday)</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Month</th>
 * </tr>
 * <tr valign="top">
 * <td>%b</td>
 * <td>Abbreviated month name, based on the locale</td>
 * <td>Jan through Dec</td>
 * </tr>
 * <tr valign="top">
 * <td>%B</td>
 * <td>Full month name, based on the locale</td>
 * <td>January through December</td>
 * </tr>
 * <tr valign="top">
 * <td>%h</td>
 * <td>Abbreviated month name, based on the locale (an alias of %b)</td>
 * <td>Jan through Dec</td>
 * </tr>
 * <tr valign="top">
 * <td>%m</td>
 * <td>Two digit representation of the month</td>
 * <td>01 (for January) through 12 (for December)</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Year</th>
 * </tr>
 * <tr valign="top">
 * <td>%C</td>
 * <td>Two digit representation of the century (year divided by 100, truncated to an integer)</td>
 * <td>19 for the 20th Century</td>
 * </tr>
 * <tr valign="top">
 * <td>%g</td>
 * <td>Two digit representation of the year going by ISO-8601:1988 standards (see %V)</td>
 * <td>Example: 09 for the week of January 6, 2009</td>
 * </tr>
 * <tr valign="top">
 * <td>%G</td>
 * <td>The full four-digit version of %g</td>
 * <td>Example: 2008 for the week of January 3, 2009</td>
 * </tr>
 * <tr valign="top">
 * <td>%y</td>
 * <td>Two digit representation of the year</td>
 * <td>Example: 09 for 2009, 79 for 1979</td>
 * </tr>
 * <tr valign="top">
 * <td>%Y</td>
 * <td>Four digit representation for the year</td>
 * <td>Example: 2038</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Time</th>
 * </tr>
 * <tr valign="top">
 * <td>%H</td>
 * <td>Two digit representation of the hour in 24-hour format</td>
 * <td>00 through 23</td>
 * </tr>
 * <tr valign="top">
 * <td>%I</td>
 * <td>Two digit representation of the hour in 12-hour format</td>
 * <td>01 through 12</td>
 * </tr>
 * <tr valign="top">
 * <td>%l (lower-case 'L')</td>
 * <td>Hour in 12-hour format, with a space preceding single digits</td>
 * <td> 1 through 12</td>
 * </tr>
 * <tr valign="top">
 * <td>%M</td>
 * <td>Two digit representation of the minute</td>
 * <td>00 through 59</td>
 * </tr>
 * <tr valign="top">
 * <td>%p</td>
 * <td>UPPER-CASE 'AM' or 'PM' based on the given time</td>
 * <td>Example: AM for 00:31, PM for 22:23</td>
 * </tr>
 * <tr valign="top">
 * <td>%P</td>
 * <td>lower-case 'am' or 'pm' based on the given time</td>
 * <td>Example: am for 00:31, pm for 22:23</td>
 * </tr>
 * <tr valign="top">
 * <td>%r</td>
 * <td>Same as "%I:%M:%S %p"</td>
 * <td>Example: 09:34:17 PM for 21:34:17</td>
 * </tr>
 * <tr valign="top">
 * <td>%R</td>
 * <td>Same as "%H:%M"</td>
 * <td>Example: 00:35 for 12:35 AM, 16:44 for 4:44 PM</td>
 * </tr>
 * <tr valign="top">
 * <td>%S</td>
 * <td>Two digit representation of the second</td>
 * <td>00 through 59</td>
 * </tr>
 * <tr valign="top">
 * <td>%T</td>
 * <td>Same as "%H:%M:%S"</td>
 * <td>Example: 21:34:17 for 09:34:17 PM</td>
 * </tr>
 * <tr valign="top">
 * <td>%X</td>
 * <td>Preferred time representation based on locale, without the date</td>
 * <td>Example: 03:59:16 or 15:59:16</td>
 * </tr>
 * <tr valign="top">
 * <td>%z</td>
 * <td>Either the time zone offset from UTC or the abbreviation (depends
 * on operating system)</td>
 * <td>Example: -0500 or EST for Eastern Time</td>
 * </tr>
 * <tr valign="top">
 * <td>%Z</td>
 * <td>The time zone offset/abbreviation option NOT given by %z (depends
 * on operating system)</td>
 * <td>Example: -0500 or EST for Eastern Time</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Time and Date Stamps</th>
 * </tr>
 * <tr valign="top">
 * <td>%c</td>
 * <td>Preferred date and time stamp based on local</td>
 * <td>Example: Tue Feb 5 00:45:10 2009 for
 * February 4, 2009 at 12:45:10 AM</td>
 * </tr>
 * <tr valign="top">
 * <td>%D</td>
 * <td>Same as "%m/%d/%y"</td>
 * <td>Example: 02/05/09 for February 5, 2009</td>
 * </tr>
 * <tr valign="top">
 * <td>%F</td>
 * <td>Same as "%Y-%m-%d" (commonly used in database datestamps)</td>
 * <td>Example: 2009-02-05 for February 5, 2009</td>
 * </tr>
 * <tr valign="top">
 * <td>%s</td>
 * <td>Unix Epoch Time timestamp (same as the time
 * function)</td>
 * <td>Example: 305815200 for September 10, 1979 08:40:00 AM</td>
 * </tr>
 * <tr valign="top">
 * <td>%x</td>
 * <td>Preferred date representation based on locale, without the time</td>
 * <td>Example: 02/05/09 for February 5, 2009</td>
 * </tr>
 * <tr valign="top">
 * <th colspan="3" bgcolor="silver">Miscellaneous</th>
 * </tr>
 * <tr valign="top">
 * <td>%n</td>
 * <td>A newline character ("\n")</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%t</td>
 * <td>A Tab character ("\t")</td>
 * <td>---</td>
 * </tr>
 * <tr valign="top">
 * <td>%%</td>
 * <td>A literal percentage character ("%")</td>
 * <td>---</td>
 * </tr>
 * </table>
 * <p>
 * Maximum length of this parameter is 1023 characters.
 * </p>
 * Contrary to ISO-9899:1999, Sun Solaris starts with Sunday as 1.
 * As a result, %u may not function as described in this manual.
 * @link https://php.net/manual/zh/function.strftime.php
 * @param string $format
 * @param int|null $timestamp [optional] defaults to the value of time()
 * Unix timestamp that defaults to the current local time if a timestamp is not given..
 * @return string|false a string formatted according format
 * using the given timestamp or the current
 * local time if no timestamp is given. Month and weekday names and
 * other language-dependent strings respect the current locale set
 * with setlocale.
 
#[Deprecated(since: '8.1')]
*/
function strftime(string $format, ?int $timestamp): string|false {}

/**
* <div id="function.gmstrftime" class="refentry"> <div class="refnamediv">  <h1 class="refname">gmstrftime</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">gmstrftime</span> — <span class="dc-title">根据区域设置格式化 GMT/UTC 时间/日期</span></p> </div> <div id="function.gmstrftime-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara"> 该函数自 PHP 8.1起<em>弃用</em>。强烈建议不要依赖此函数。</p></div><p class="para"> 此函数可以使用如下替代：</p>  <ul class="simplelist">   <li><span class="function">{@link gmdate()}</span></li>   <li><span class="methodname" style="color:#CC7832">{@link IntlDateFormatter::format()}</span></li>  </ul> </div> <div class="refsect1 description" id="refsect1-function.gmstrftime-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>gmstrftime</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$format</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$timestamp</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   行为和 <span class="function">{@link strftime()}</span> 相同，只是返回的时间是格林威治标准时（GMT）。例如，在东部标准时（EST，GMT   -0500）运行时，下面第一行显示“Dec 31 1998 20:00:00”，而第二行显示“Jan 01 1999   01:00:00”。  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    此函数依赖于操作系统区域设置信息，这些信息可能彼此不一致，或者根本不能用。而是使用    <span class="methodname" style="color:#CC7832">{@link IntlDateFormatter::format()}</span> 方法。   </p>  </div> </div> <div class="refsect1 parameters" id="refsect1-function.gmstrftime-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">format</span></dt>     <dd>      <p class="para">       See description in <span class="function">{@link strftime()}</span>.      </p>     </dd>        <dt><span class="parameter" style="color:#3A95FF">timestamp</span></dt><dd><p class="para">可选的 <span class="parameter" style="color:#3A95FF">timestamp</span> 参数是一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 的 Unix时间戳，如未指定或是 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，参数值默认为当前本地时间。也就是说，其值默认为<span class="function">{@link time()}</span> 的返回值。</p></dd>   </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.gmstrftime-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a string formatted according to the given format string   using the given <span class="parameter" style="color:#3A95FF">timestamp</span> or the current   local time if no timestamp is given.  Month and weekday names and   other language dependent strings respect the current locale set   with <span class="function">{@link setlocale()}</span>.   On failure, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> is returned.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.gmstrftime-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        现在 <span class="parameter" style="color:#3A95FF">timestamp</span> 允许为 null。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.gmstrftime-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2270">    <p><strong>示例 #1 <span class="function"><strong>gmstrftime()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>setlocale</span><span style="color: #007700">(</span><span style="color: #9876AA">LC_TIME</span><span style="color: #007700">, </span><span style="color: #DD0000">'en_US'</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">strftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%b %d %Y %H:%M:%S"</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">20</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">12</span><span style="color: #007700">, </span><span style="color: #9876AA">31</span><span style="color: #007700">, </span><span style="color: #9876AA">98</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">gmstrftime</span><span style="color: #007700">(</span><span style="color: #DD0000">"%b %d %Y %H:%M:%S"</span><span style="color: #007700">, </span><span style="color: #9876AA">mktime</span><span style="color: #007700">(</span><span style="color: #9876AA">20</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">, </span><span style="color: #9876AA">12</span><span style="color: #007700">, </span><span style="color: #9876AA">31</span><span style="color: #007700">, </span><span style="color: #9876AA">98</span><span style="color: #007700">)) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.gmstrftime-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="methodname" style="color:#CC7832">{@link IntlDateFormatter::format()} - Format the date/time value as a string</span></li>    <li><span class="methodname" style="color:#CC7832">{@link DateTimeInterface::format()} - 按照指定格式返回格式化后的日期</span></li>    <li><span class="function">{@link strftime()} - 根据区域设置格式化本地时间/日期</span></li>   </ul>   </div></div>
*
 * Format a GMT/UTC time/date according to locale settings
 * @link https://php.net/manual/zh/function.gmstrftime.php
 * @param string $format <p>
 * See description in strftime.
 * </p>
 * @param int|null $timestamp [optional]
 * @return string|false a string formatted according to the given format string
 * using the given timestamp or the current
 * local time if no timestamp is given. Month and weekday names and
 * other language dependent strings respect the current locale set
 * with setlocale.
 * @deprecated 8.1
 
#[Deprecated(since: '8.1')]
*/
function gmstrftime(string $format, ?int $timestamp): string|false {}

/**
* <div id="function.time" class="refentry"> <div class="refnamediv">  <h1 class="refname">time</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">time</span> — <span class="dc-title">返回当前的 Unix 时间戳</span></p> </div> <div class="refsect1 description" id="refsect1-function.time-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>time</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   返回自从 Unix 纪元（格林威治时间 1970 年 1 月 1 日 00:00:00）到当前时间的秒数。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    Unix 时间戳不包含任何有关本地时区的信息。建议使用    <span class="classname"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span> 类来处理日期和时间信息，    以避免 Unix 时间戳带来的陷阱。   </p>  </blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.time-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.time-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回当前时间戳。  </p> </div> <div class="refsect1 examples" id="refsect1-function.time-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2285">    <p><strong>示例 #1 <span class="function"><strong>time()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">'Now: '</span><span style="color: #007700">. </span><span style="color: #9876AA">time</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Now: 1660338149</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.time-notes">  <h3 class="title">注释</h3>  <div class="tip"><strong class="tip">小技巧</strong>   <p class="para">    在 <var class="varname"><a href="https://php.net/manual/zh/reserved.variables.server.php" class="classname">$_SERVER['REQUEST_TIME']</a></var>    中保存了发起该请求时刻的时间戳。   </p>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.time-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">   <li><span class="classname"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span></li>    <li><span class="function">{@link date()} - 格式化 Unix 时间戳</span></li>    <li><span class="function">{@link microtime()} - 返回当前 Unix 时间戳和微秒数</span></li>   </ul>   </div></div>
*
 * Return current Unix timestamp
 * @link https://php.net/manual/zh/function.time.php
 * @return int <p>Returns the current time measured in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).</p>
 
*/
function time(): int {}

/**
 * Get the local time
 * @link https://php.net/manual/en/function.localtime.php
 * @param int|null $timestamp [optional]
 * @param bool $associative [optional] <p>
 * If set to false or not supplied then the array is returned as a regular,
 * numerically indexed array. If the argument is set to true then
 * localtime returns an associative array containing
 * all the different elements of the structure returned by the C
 * function call to localtime. The names of the different keys of
 * the associative array are as follows:
 * </p>
 * "tm_sec" - seconds
 * @return array
 */
#[Pure(true)]
#[ArrayShape([
    'tm_sec' => 'int',
    'tm_min' => 'int',
    'tm_hour' => 'int',
    'tm_mday' => 'int',
    'tm_mon' => 'int',
    'tm_year' => 'int',
    'tm_wday' => 'int',
    'tm_yday' => 'int',
    'tm_isdst' => 'int',
])]
/**
* <div id="function.localtime" class="refentry"> <div class="refnamediv">  <h1 class="refname">localtime</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">localtime</span> — <span class="dc-title">取得本地时间</span></p> </div> <div class="refsect1 description" id="refsect1-function.localtime-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>localtime</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$timestamp</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">$associative</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>localtime()</strong></span> 函数返回和 C 函数调用返回的结构相同数组。  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.localtime-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>        <dt><span class="parameter" style="color:#3A95FF">timestamp</span></dt><dd><p class="para">可选的 <span class="parameter" style="color:#3A95FF">timestamp</span> 参数是一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 的 Unix时间戳，如未指定或是 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，参数值默认为当前本地时间。也就是说，其值默认为<span class="function">{@link time()}</span> 的返回值。</p></dd>            <dt><span class="parameter" style="color:#3A95FF">associative</span></dt>     <dd>      <p class="para">       确定函数应该返回常规的数字索引数组还是关联数组。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.localtime-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果 <span class="parameter" style="color:#3A95FF">associative</span> 设为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 或未提供则返回的是普通的数字索引数组。如果   <span class="parameter" style="color:#3A95FF">associative</span> 设为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> 则 <span class="function"><strong>localtime()</strong></span>   返回关联数组，其中包含所有从 C 函数调用 localtime 结构元素。关联数组中键如下：  </p>  <p class="para">   </p><ul class="itemizedlist">    <li class="listitem">     <span class="simpara">      "tm_sec" - 秒数，<span class="literal">0</span> 到 <span class="literal">59</span>     </span>    </li>    <li class="listitem">     <span class="simpara">      "tm_min" - 分钟数，<span class="literal">0</span> 到 <span class="literal">59</span>     </span>    </li>    <li class="listitem">     <span class="simpara">      "tm_hour" - 小时，<span class="literal">0</span> 到 <span class="literal">23</span>     </span>    </li>    <li class="listitem">     <span class="simpara">      "tm_mday" - 月份中的第几日，<span class="literal">1</span> 到 <span class="literal">31</span>     </span>    </li>    <li class="listitem">     <span class="simpara">      "tm_mon" - 年份中的第几个月，<span class="literal">0</span> (Jan) 到 <span class="literal">11</span> (Dec)     </span>    </li>    <li class="listitem">     <span class="simpara">      "tm_year" - 年份，从 1900 开始     </span>    </li>    <li class="listitem">     <span class="simpara">      "tm_wday" - 星期中的第几天，<span class="literal">0</span> (Sun) 到 <span class="literal">6</span> (Sat)     </span>    </li>    <li class="listitem">     <span class="simpara">      "tm_yday" - 一年中的第几天，<span class="literal">0</span> 到 <span class="literal">365</span>     </span>    </li>    <li class="listitem">     <span class="simpara">      "tm_isdst" - 夏令时当前是否生效？     </span>     <span class="simpara">      如果是生效的是正数， <span class="literal">0</span> 代表未生效，负数代表未知。     </span>    </li>   </ul>   </div>    <div class="refsect1 errors" id="refsect1-function.localtime-errors">  <h3 class="title">错误／异常</h3>      <p class="para">在每次调用日期/时间函数时，如果时区无效则会引发 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-notice">E_NOTICE</a></span></strong> 错误。参见<span class="function">{@link date_default_timezone_set()}</span>。</p>  </div>    <div class="refsect1 changelog" id="refsect1-function.localtime-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        现在 <span class="parameter" style="color:#3A95FF">timestamp</span> 可为 null。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.localtime-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2272">    <p><strong>示例 #1 <span class="function"><strong>localtime()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$localtime </span><span style="color: #007700">= </span><span style="color: #9876AA">localtime</span><span style="color: #007700">();<br></span><span style="color: #9876AA">$localtime_assoc </span><span style="color: #007700">= </span><span style="color: #9876AA">localtime</span><span style="color: #007700">(</span><span style="color: #9876AA">time</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">);<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$localtime</span><span style="color: #007700">);<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$localtime_assoc</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>    [0] =&gt; 24<br>    [1] =&gt; 3<br>    [2] =&gt; 19<br>    [3] =&gt; 3<br>    [4] =&gt; 3<br>    [5] =&gt; 105<br>    [6] =&gt; 0<br>    [7] =&gt; 92<br>    [8] =&gt; 1<br>)<br><br>Array<br>(<br>    [tm_sec] =&gt; 24<br>    [tm_min] =&gt; 3<br>    [tm_hour] =&gt; 19<br>    [tm_mday] =&gt; 3<br>    [tm_mon] =&gt; 3<br>    [tm_year] =&gt; 105<br>    [tm_wday] =&gt; 0<br>    [tm_yday] =&gt; 92<br>    [tm_isdst] =&gt; 1<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.localtime-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link getdate()} - 获取日期/时间信息</span></li>   </ul>   </div></div>
*/
function localtime(?int $timestamp, bool $associative = false): array {}

/**
 * Get date/time information
 * @link https://php.net/manual/en/function.getdate.php
 * @param int|null $timestamp [optional]
 * @return array an associative array of information related to
 * the timestamp. Elements from the returned
 * associative array are as follows:
 * </p>
 * <p>
 * <table>
 * Key elements of the returned associative array
 * <tr valign="top">
 * <td>Key</td>
 * <td>Description</td>
 * <td>Example returned values</td>
 * </tr>
 * <tr valign="top">
 * <td>"seconds"</td>
 * <td>Numeric representation of seconds</td>
 * <td>0 to 59</td>
 * </tr>
 * <tr valign="top">
 * <td>"minutes"</td>
 * <td>Numeric representation of minutes</td>
 * <td>0 to 59</td>
 * </tr>
 * <tr valign="top">
 * <td>"hours"</td>
 * <td>Numeric representation of hours</td>
 * <td>0 to 23</td>
 * </tr>
 * <tr valign="top">
 * <td>"mday"</td>
 * <td>Numeric representation of the day of the month</td>
 * <td>1 to 31</td>
 * </tr>
 * <tr valign="top">
 * <td>"wday"</td>
 * <td>Numeric representation of the day of the week</td>
 * <td>0 (for Sunday) through 6 (for Saturday)</td>
 * </tr>
 * <tr valign="top">
 * <td>"mon"</td>
 * <td>Numeric representation of a month</td>
 * <td>1 through 12</td>
 * </tr>
 * <tr valign="top">
 * <td>"year"</td>
 * <td>A full numeric representation of a year, 4 digits</td>
 * <td>Examples: 1999 or 2003</td>
 * </tr>
 * <tr valign="top">
 * <td>"yday"</td>
 * <td>Numeric representation of the day of the year</td>
 * <td>0 through 365</td>
 * </tr>
 * <tr valign="top">
 * <td>"weekday"</td>
 * <td>A full textual representation of the day of the week</td>
 * <td>Sunday through Saturday</td>
 * </tr>
 * <tr valign="top">
 * <td>"month"</td>
 * <td>A full textual representation of a month, such as January or March</td>
 * <td>January through December</td>
 * </tr>
 * <tr valign="top">
 * <td>0</td>
 * <td>
 * Seconds since the Unix Epoch, similar to the values returned by
 * time and used by date.
 * </td>
 * <td>
 * System Dependent, typically -2147483648 through
 * 2147483647.
 * </td>
 * </tr>
 * </table>
 */
#[Pure(true)]
#[ArrayShape([
    'seconds' => 'int',
    'minutes' => 'int',
    'hours' => 'int',
    'mday' => 'int',
    'wday' => 'int',
    'mon' => 'int',
    'year' => 'int',
    'yday' => 'int',
    'weekday' => 'int',
    'month' => 'string',
    0 => 'int',
])]
/**
* <div id="function.getdate" class="refentry"> <div class="refnamediv">  <h1 class="refname">getdate</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">getdate</span> — <span class="dc-title">获取日期/时间信息</span></p> </div> <div class="refsect1 description" id="refsect1-function.getdate-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>getdate</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">$timestamp</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   返回关联 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>，包含 <span class="parameter" style="color:#3A95FF">timestamp</span>   或者当前本地时间（如果省略 <span class="parameter" style="color:#3A95FF">timestamp</span> 或为   <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>）的日期信息。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.getdate-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>        <dt><span class="parameter" style="color:#3A95FF">timestamp</span></dt><dd><p class="para">可选的 <span class="parameter" style="color:#3A95FF">timestamp</span> 参数是一个 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 的 Unix时间戳，如未指定或是 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，参数值默认为当前本地时间。也就是说，其值默认为<span class="function">{@link time()}</span> 的返回值。</p></dd>      </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.getdate-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回关联 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>，包含 <span class="parameter" style="color:#3A95FF">timestamp</span>   相关信息。返回的关联数组中的元素如下：  </p>  <p class="para">   </p><table class="doctable table">    <caption><strong>返回的关联数组中的键元素</strong></caption>         <thead>      <tr>       <th>键名</th>       <th>说明</th>       <th>返回值例子</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td><span class="literal">"seconds"</span></td>       <td>秒的数字表示</td>       <td><span class="literal">0</span> 到 <span class="literal">59</span></td>      </tr>      <tr>       <td><span class="literal">"minutes"</span></td>       <td>分钟的数字表示</td>       <td><span class="literal">0</span> 到 <span class="literal">59</span></td>      </tr>      <tr>       <td><span class="literal">"hours"</span></td>       <td>小时的数字表示</td>       <td><span class="literal">0</span> 到 <span class="literal">23</span></td>      </tr>      <tr>       <td><span class="literal">"mday"</span></td>       <td>月份中第几天的数字表示</td>       <td><span class="literal">1</span> 到 <span class="literal">31</span></td>      </tr>      <tr>       <td><span class="literal">"wday"</span></td>       <td>星期几的数字表示</td>       <td><span class="literal">0</span>（周日）到 <span class="literal">6</span>（周六）</td>      </tr>      <tr>       <td><span class="literal">"mon"</span></td>       <td>月份的数字表示</td>       <td><span class="literal">1</span> 到 <span class="literal">12</span></td>      </tr>      <tr>       <td><span class="literal">"year"</span></td>       <td>4 位数字表示的完整年份</td>       <td>比如： <span class="literal">1999</span> 或 <span class="literal">2003</span></td>      </tr>      <tr>       <td><span class="literal">"yday"</span></td>       <td>一年中第几天的数字表示</td>       <td><span class="literal">0</span> 到 <span class="literal">365</span></td>      </tr>      <tr>       <td><span class="literal">"weekday"</span></td>       <td>星期几的完整文本表示</td>       <td><span class="literal">Sunday</span> 到 <span class="literal">Saturday</span></td>      </tr>      <tr>       <td><span class="literal">"month"</span></td>       <td>月份的完整文本表示，比如 January 或 March</td>       <td><span class="literal">January</span> 到 <span class="literal">December</span></td>      </tr>      <tr>       <td><span class="literal">0</span></td>       <td>        自从 Unix 纪元开始至今的秒数，和 <span class="function">{@link time()}</span>        的返回值以及用于 <span class="function">{@link date()}</span> 的值类似。       </td>       <td>        系统相关，通常从 <span class="literal">-2147483648</span> 到        <span class="literal">2147483647</span>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 changelog" id="refsect1-function.getdate-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        现在 <span class="parameter" style="color:#3A95FF">timestamp</span> 允许为 null。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.getdate-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2266">    <p><strong>示例 #1 <span class="function"><strong>getdate()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$today </span><span style="color: #007700">= </span><span style="color: #9876AA">getdate</span><span style="color: #007700">();<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$today</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>    [seconds] =&gt; 40<br>    [minutes] =&gt; 58<br>    [hours]   =&gt; 21<br>    [mday]    =&gt; 17<br>    [wday]    =&gt; 2<br>    [mon]     =&gt; 6<br>    [year]    =&gt; 2003<br>    [yday]    =&gt; 167<br>    [weekday] =&gt; Tuesday<br>    [month]   =&gt; June<br>    [0]       =&gt; 1055901520<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.getdate-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link date()} - 格式化 Unix 时间戳</span></li>    <li><span class="function">{@link idate()} - 将本地日期/时间格式化为整数</span></li>    <li><span class="function">{@link localtime()} - 取得本地时间</span></li>    <li><span class="function">{@link time()} - 返回当前的 Unix 时间戳</span></li>    <li><span class="function">{@link setlocale()} - 设置区域信息</span></li>   </ul>   </div></div>
*/
function getdate(?int $timestamp): array {}

/**
* <div id="function.date-create" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_create</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_create</span> — <span class="dc-title">create a new <span class="classname"><a href="https://php.net/manual/zh/class.datetime.php" class="classname">DateTime</a></span> object</span></p> </div> <div class="refsect1 description" id="refsect1-function.date-create-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>date_create</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$datetime</span><span class="initializer"> = "now"</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.datetimezone.php" class="type DateTimeZone" style="color:#EAB766">DateTimeZone</a></span></span> <span class="parameter" style="color:#3A95FF">$timezone</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.datetime.php" class="type DateTime" style="color:#EAB766">DateTime</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   This is the procedural version of   <span class="methodname" style="color:#CC7832">{@link DateTime::__construct()}</span>.  </p>  <p class="para">   Unlike the <span class="classname"><a href="https://php.net/manual/zh/class.datetime.php" class="classname">DateTime</a></span> constructor, it will return   <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> instead of an exception if the passed in   <span class="parameter" style="color:#3A95FF">datetime</span> string is invalid.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.date-create-parameters">  <h3 class="title">参数</h3>  <p class="para">   See {@link DateTimeImmutable::__construct}.  </p> </div> <div class="refsect1 returnvalues" id="refsect1-function.date-create-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a new DateTime instance  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>  </p> </div> <div class="refsect1 seealso" id="refsect1-function.date-create-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link DateTimeImmutable::__construct()} - Returns new DateTimeImmutable object</span></li>   <li><span class="methodname" style="color:#CC7832">{@link DateTimeImmutable::createFromFormat()} - Parses a time string according to a specified format</span></li>   <li><span class="methodname" style="color:#CC7832">{@link DateTime::__construct()} - 返回新的 DateTime 对象</span></li>  </ul> </div></div>
*
 * Returns new DateTime object
 * @link https://php.net/manual/zh/function.date-create.php
 * @param string $datetime [optional] <p>
 * String in a format accepted by strtotime.
 * </p>
 * @param DateTimeZone|null $timezone [optional] <p>
 * Time zone of the time.
 * </p>
 * @return DateTime|false DateTime object on success or false on failure.
 
#[Pure(true)]
*/
function date_create(string $datetime = 'now', ?DateTimeZone $timezone): DateTime|false {}

/**
* <div id="function.date-create-immutable" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_create_immutable</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_create_immutable</span> — <span class="dc-title">create a new <span class="classname"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span> object</span></p> </div> <div class="refsect1 description" id="refsect1-function.date-create-immutable-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>date_create_immutable</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$datetime</span><span class="initializer"> = "now"</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.datetimezone.php" class="type DateTimeZone" style="color:#EAB766">DateTimeZone</a></span></span> <span class="parameter" style="color:#3A95FF">$timezone</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="type DateTimeImmutable" style="color:#EAB766">DateTimeImmutable</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   This is the procedural version of   <span class="methodname" style="color:#CC7832">{@link DateTimeImmutable::__construct()}</span>.  </p>  <p class="para">   Unlike the <span class="classname"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span> constructor, it will return   <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> instead of an exception if the passed in   <span class="parameter" style="color:#3A95FF">datetime</span> string is invalid.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.date-create-immutable-parameters">  <h3 class="title">参数</h3>  <p class="para">   See {@link DateTimeImmutable::__construct}.  </p> </div> <div class="refsect1 returnvalues" id="refsect1-function.date-create-immutable-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a new DateTimeImmutable instance  或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>  </p> </div> <div class="refsect1 seealso" id="refsect1-function.date-create-immutable-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link DateTimeImmutable::createFromFormat()} - Parses a time string according to a specified format</span></li>  </ul> </div></div>
*
 * (PHP 5.5)<br/>
 * Alias:
 * {@see DateTimeImmutable::__construct}
 * Returns new DateTimeImmutable object
 * @link https://php.net/manual/zh/function.date-create-immutable.php
 * @see DateTimeImmutable::__construct()
 * @param string $datetime [optional] <p>
 * String in a format accepted by strtotime.
 * </p>
 * @param DateTimeZone|null $timezone [optional] <p>
 * Time zone of the time.
 * </p>
 * @return DateTimeImmutable|false DateTime object on success or false on failure.
 
#[Pure(true)]
*/
function date_create_immutable(string $datetime = 'now', ?DateTimeZone $timezone): DateTimeImmutable|false {}

/**
* <div id="function.date-create-immutable-from-format" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_create_immutable_from_format</h1>  <p class="verinfo">(PHP 5 &gt;= 5.5.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_create_immutable_from_format</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTimeImmutable::createFromFormat()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-create-immutable-from-format-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTimeImmutable::createFromFormat()}</span>  </p> </div></div>
*
 * Returns new DateTimeImmutable object formatted according to the specified format
 * @link https://php.net/manual/zh/function.date-create-immutable-from-format.php
 * @param string $format
 * @param string $datetime
 * @param DateTimeZone|null $timezone [optional]
 * @return DateTimeImmutable|false
 
#[Pure(true)]
*/
function date_create_immutable_from_format(string $format, string $datetime, ?DateTimeZone $timezone): DateTimeImmutable|false {}

/**
* <div id="function.date-create-from-format" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_create_from_format</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_create_from_format</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::createFromFormat()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-create-from-format-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::createFromFormat()}</span>  </p> </div></div>
*
 * Alias:
 * {@see DateTime::createFromFormat}
 * @link https://php.net/manual/zh/function.date-create-from-format.php
 * @param string $format Format accepted by  <a href="https://secure.php.net/manual/en/function.date.php">date()</a>.
 * <p>If format does not contain the character ! then portions of the generated time which are not specified in format will be set to the current system time.</p>
 * <p>If format contains the character !, then portions of the generated time not provided in format, as well as values to the left-hand side of the !, will be set to corresponding values from the Unix epoch.</p>
 * <p>The Unix epoch is 1970-01-01 00:00:00 UTC.</p>
 * @param string $datetime String representing the time.
 * @param DateTimeZone|null $timezone [optional] A DateTimeZone object representing the desired time zone.
 * @return DateTime|false <p> Returns a new
 * {@see DateTime} instance or <b>FALSE</b> on failure.</p>
 
#[Pure(true)]
*/
function date_create_from_format(string $format, string $datetime, ?DateTimeZone $timezone): DateTime|false {}

/**
 * Returns associative array with detailed info about given date
 * @link https://php.net/manual/en/function.date-parse.php
 * @param string $datetime <p>
 * Date in format accepted by strtotime.
 * </p>
 * @return array|false array with information about the parsed date
 * on success or false on failure.
 */
#[Pure(true)]
#[LanguageLevelTypeAware(["8.0" => "array"], default: "array|false")]
#[ArrayShape([
    "year" => "int",
    "month" => "int",
    "day" => "int",
    "hour" => "int",
    "minute" => "int",
    "second" => "int",
    "fraction" => "double",
    "is_localtime" => "bool",
    "zone_type" => "int",
    "zone" => "int",
    "is_dst" => "bool",
    "tz_abbr" => "string",
    "tz_id" => "string",
    "relative" => "array",
    "warning_count" => "int",
    "warnings" => "array",
    "error_count" => "int",
    "errors" => "array"
])]
/**
* <div id="function.date-parse" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_parse</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_parse</span> — <span class="dc-title">返回指定日期/时间的详细信息的关联数组</span></p> </div> <div class="refsect1 description" id="refsect1-function.date-parse-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>date_parse</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$datetime</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>date_parse()</strong></span> 根据与 <span class="function">{@link strtotime()}</span>   和 <span class="function">{@link DateTimeImmutable::__construct()}</span> 相同的规则解析指定   <span class="parameter" style="color:#3A95FF">datetime</span> 字符串。它不返回 Unix 时间戳（使用   <span class="function">{@link strtotime()}</span>）或者 <span class="classname"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span>   对象（使用 <span class="function">{@link DateTimeImmutable::__construct()}</span>），而是返回包含在指定   <span class="parameter" style="color:#3A95FF">datetime</span> 字符串中检测到相关信息的关联数组。  </p>  <p class="para">   如果找不到某组元素的信息，那么这些数组元素将会设置为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 或缺失。如果需要从相同的   <span class="parameter" style="color:#3A95FF">datetime</span> 字符串构建时间戳或者 <span class="classname"><a href="https://php.net/manual/zh/class.datetimeimmutable.php" class="classname">DateTimeImmutable</a></span>   对象，需要将更多字段设置为非 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 值。查看以下示例以了解情况。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.date-parse-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">datetime</span></dt>     <dd>      <p class="para">       <span class="function">{@link DateTimeImmutable::__construct()}</span> 接受的日期/时间格式。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.date-parse-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>，包含解析日期/时间的信息。  </p>  <p class="para">   返回的数组存在以下键    <span class="literal">year</span>、<span class="literal">month</span>、<span class="literal">day</span>、<span class="literal">hour</span>、<span class="literal">minute</span>、<span class="literal">second</span>、<span class="literal">fraction</span>   和 <span class="literal">is_localtime</span>。  </p>  <p class="para">   如果存在 <span class="literal">is_localtime</span>，则 <span class="literal">zone_type</span> 表示时区类型。类型   <span class="literal">1</span>（UTC 时差），添加 <span class="literal">zone</span>、<span class="literal">is_dst</span>；类型   <span class="literal">2</span>（时区缩写），添加 <span class="literal">tz_abbr</span>、<span class="literal">is_dst</span>；类型   <span class="literal">3</span>（时区标识符），添加 <span class="literal">tz_abbr</span>、<span class="literal">tz_id</span>。  </p>  <p class="para">   如果 <span class="parameter" style="color:#3A95FF">datetime</span> 字符串存在类似 <span class="literal">+3 days</span>   这样的相对时间元素，则返回的数组则包含键为 <span class="literal">relative</span> 的嵌套数组。然后此数组将包含如下键   <span class="literal">year</span>、<span class="literal">month</span>、<span class="literal">day</span>、<span class="literal">hour</span>、<span class="literal">minute</span>、<span class="literal">second</span>，如果必要还会包含   <span class="literal">weekday</span> 和 <span class="literal">weekdays</span>，具体取决于传入的字符串。  </p>  <p class="para">   数组包含 <span class="literal">warning_count</span> 和 <span class="literal">warnings</span>   字段。第一个表示发现了多少警告。元素 <span class="literal">warnings</span> 的键表示指定   <span class="parameter" style="color:#3A95FF">datetime</span> 发生警告的位置，值为字符串，描述警告本身。  </p>  <p class="para">   数组也包含 <span class="literal">error_count</span> 和 <span class="literal">errors</span>   字段。第一个表示发现了多少错误。元素 <span class="literal">errors</span> 的键表示指定   <span class="parameter" style="color:#3A95FF">datetime</span> 发生错误的位置，值为字符串，描述错误本身。  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    如果同一个位置存在多个警告/错误，那么 <span class="literal">warnings</span> 和 <span class="literal">errors</span>    数组中元素的数量可能会少于 <span class="literal">warning_count</span> 或者 <span class="literal">error_count</span>。   </p>  </div> </div> <div class="refsect1 errors" id="refsect1-function.date-parse-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   date/time 的格式有错误时，返回数组的 'errors' 键将包含错误信息。  </p> </div>  <div class="refsect1 changelog" id="refsect1-function.date-parse-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>7.2.0</td>      <td>       返回数组的 <span class="literal">zone</span>        键现在代表秒，而不是分钟。并且正负符号已反转，例如：之前是       <span class="literal">-120</span> 现在是 <span class="literal">7200</span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.date-parse-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2249">    <p><strong>示例 #1 具有全面的 <span class="parameter" style="color:#3A95FF">datetime</span> 字符串的 <span class="function"><strong>date_parse()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">date_parse</span><span style="color: #007700">(</span><span style="color: #DD0000">"2006-12-12 10:00:00.5"</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(12) {<br>  ["year"]=&gt;<br>  int(2006)<br>  ["month"]=&gt;<br>  int(12)<br>  ["day"]=&gt;<br>  int(12)<br>  ["hour"]=&gt;<br>  int(10)<br>  ["minute"]=&gt;<br>  int(0)<br>  ["second"]=&gt;<br>  int(0)<br>  ["fraction"]=&gt;<br>  float(0.5)<br>  ["warning_count"]=&gt;<br>  int(0)<br>  ["warnings"]=&gt;<br>  array(0) {<br>  }<br>  ["error_count"]=&gt;<br>  int(0)<br>  ["errors"]=&gt;<br>  array(0) {<br>  }<br>  ["is_localtime"]=&gt;<br>  bool(false)<br>}</blockquote></div>    </div>   </div>    <p class="para">   如果在指定 <span class="parameter" style="color:#3A95FF">datetime</span>   字符串中出现时区元素，那才会展示。在这种情况下，总会存在   <span class="literal">zone_type</span> 和更多元素，具体取决于其值。   </p><div class="example" id="example-2250">    <p><strong>示例 #2 带时区缩写信息的 <span class="function"><strong>date_parse()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">date_parse</span><span style="color: #007700">(</span><span style="color: #DD0000">"June 2nd, 2022, 10:28:17 BST"</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(16) {<br>  ["year"]=&gt;<br>  int(2022)<br>  ["month"]=&gt;<br>  int(6)<br>  ["day"]=&gt;<br>  int(2)<br>  ["hour"]=&gt;<br>  int(10)<br>  ["minute"]=&gt;<br>  int(28)<br>  ["second"]=&gt;<br>  int(17)<br>  ["fraction"]=&gt;<br>  float(0)<br>  ["warning_count"]=&gt;<br>  int(0)<br>  ["warnings"]=&gt;<br>  array(0) {<br>  }<br>  ["error_count"]=&gt;<br>  int(0)<br>  ["errors"]=&gt;<br>  array(0) {<br>  }<br>  ["is_localtime"]=&gt;<br>  bool(true)<br>  ["zone_type"]=&gt;<br>  int(2)<br>  ["zone"]=&gt;<br>  int(0)<br>  ["is_dst"]=&gt;<br>  bool(true)<br>  ["tz_abbr"]=&gt;<br>  string(3) "BST"<br>}</blockquote></div>    </div>   </div>   <div class="example" id="example-2251">    <p><strong>示例 #3 带时区标识符信息的 <span class="function"><strong>date_parse()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">date_parse</span><span style="color: #007700">(</span><span style="color: #DD0000">"June 2nd, 2022, 10:28:17 Europe/London"</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(14) {<br>  ["year"]=&gt;<br>  int(2022)<br>  ["month"]=&gt;<br>  int(6)<br>  ["day"]=&gt;<br>  int(2)<br>  ["hour"]=&gt;<br>  int(10)<br>  ["minute"]=&gt;<br>  int(28)<br>  ["second"]=&gt;<br>  int(17)<br>  ["fraction"]=&gt;<br>  float(0)<br>  ["warning_count"]=&gt;<br>  int(0)<br>  ["warnings"]=&gt;<br>  array(0) {<br>  }<br>  ["error_count"]=&gt;<br>  int(0)<br>  ["errors"]=&gt;<br>  array(0) {<br>  }<br>  ["is_localtime"]=&gt;<br>  bool(true)<br>  ["zone_type"]=&gt;<br>  int(3)<br>  ["tz_id"]=&gt;<br>  string(13) "Europe/London"<br>}</blockquote></div>    </div>   </div>    <p class="para">   如果解析的 <span class="parameter" style="color:#3A95FF">datetime</span> 字符串越小，那么可用的信息就越少。再本示例中，所有时间部分都返回为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   </p><div class="example" id="example-2252">    <p><strong>示例 #4 带最小字符串的 <span class="function"><strong>date_parse()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">date_parse</span><span style="color: #007700">(</span><span style="color: #DD0000">"June 2nd, 2022"</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(12) {<br>  ["year"]=&gt;<br>  int(2022)<br>  ["month"]=&gt;<br>  int(6)<br>  ["day"]=&gt;<br>  int(2)<br>  ["hour"]=&gt;<br>  bool(false)<br>  ["minute"]=&gt;<br>  bool(false)<br>  ["second"]=&gt;<br>  bool(false)<br>  ["fraction"]=&gt;<br>  bool(false)<br>  ["warning_count"]=&gt;<br>  int(0)<br>  ["warnings"]=&gt;<br>  array(0) {<br>  }<br>  ["error_count"]=&gt;<br>  int(0)<br>  ["errors"]=&gt;<br>  array(0) {<br>  }<br>  ["is_localtime"]=&gt;<br>  bool(false)<br>}</blockquote></div>    </div>   </div>    <p class="para">   <a href="https://php.net/manual/zh/datetime.formats.php#datetime.formats.relative" class="link">相对格式</a>不会影响从绝对格式格式化的值，但会被解析为“relative”元素。   </p><div class="example" id="example-2253">    <p><strong>示例 #5 带相对格式的 <span class="function"><strong>date_parse()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">date_parse</span><span style="color: #007700">(</span><span style="color: #DD0000">"2006-12-12 10:00:00.5 +1 week +1 hour"</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(13) {<br>  ["year"]=&gt;<br>  int(2006)<br>  ["month"]=&gt;<br>  int(12)<br>  ["day"]=&gt;<br>  int(12)<br>  ["hour"]=&gt;<br>  int(10)<br>  ["minute"]=&gt;<br>  int(0)<br>  ["second"]=&gt;<br>  int(0)<br>  ["fraction"]=&gt;<br>  float(0.5)<br>  ["warning_count"]=&gt;<br>  int(0)<br>  ["warnings"]=&gt;<br>  array(0) {<br>  }<br>  ["error_count"]=&gt;<br>  int(0)<br>  ["errors"]=&gt;<br>  array(0) {<br>  }<br>  ["is_localtime"]=&gt;<br>  bool(false)<br>  ["relative"]=&gt;<br>  array(6) {<br>    ["year"]=&gt;<br>    int(0)<br>    ["month"]=&gt;<br>    int(0)<br>    ["day"]=&gt;<br>    int(7)<br>    ["hour"]=&gt;<br>    int(1)<br>    ["minute"]=&gt;<br>    int(0)<br>    ["second"]=&gt;<br>    int(0)<br>  }<br>}</blockquote></div>    </div>   </div>    <p class="para">   在某些时候，比如 <span class="literal">Thursday</span> 将会设置字符串的时间部分设置为   <span class="literal">0</span>。如果 <span class="literal">Thursday</span> 传递给   <span class="function">{@link DateTimeImmutable::__construct()}</span> 也会导致小时，分钟，秒和小数部分设置为   <span class="literal">0</span>。下面的示例中，year 元素将设置为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   </p><div class="example" id="example-2254">    <p><strong>示例 #6 <span class="function"><strong>date_parse()</strong></span> with side-effects</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">date_parse</span><span style="color: #007700">(</span><span style="color: #DD0000">"Thursday, June 2nd"</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">array(13) {<br>  ["year"]=&gt;<br>  bool(false)<br>  ["month"]=&gt;<br>  int(6)<br>  ["day"]=&gt;<br>  int(2)<br>  ["hour"]=&gt;<br>  int(0)<br>  ["minute"]=&gt;<br>  int(0)<br>  ["second"]=&gt;<br>  int(0)<br>  ["fraction"]=&gt;<br>  float(0)<br>  ["warning_count"]=&gt;<br>  int(0)<br>  ["warnings"]=&gt;<br>  array(0) {<br>  }<br>  ["error_count"]=&gt;<br>  int(0)<br>  ["errors"]=&gt;<br>  array(0) {<br>  }<br>  ["is_localtime"]=&gt;<br>  bool(false)<br>  ["relative"]=&gt;<br>  array(7) {<br>    ["year"]=&gt;<br>    int(0)<br>    ["month"]=&gt;<br>    int(0)<br>    ["day"]=&gt;<br>    int(0)<br>    ["hour"]=&gt;<br>    int(0)<br>    ["minute"]=&gt;<br>    int(0)<br>    ["second"]=&gt;<br>    int(0)<br>    ["weekday"]=&gt;<br>    int(4)<br>  }<br>}</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.date-parse-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link date_parse_from_format()} - Get info about given date formatted according to the specified format</span>，以解析具有特定格式的<span class="parameter" style="color:#3A95FF">datetime</span></li>    <li><span class="function">{@link checkdate()} - 验证一个格里高里日期</span>，以便于公历日期验证</li>    <li><span class="function">{@link getdate()} - 获取日期/时间信息</span></li>   </ul>   </div></div>
*/
function date_parse(string $datetime): false|array {}

/**
 * Get info about given date formatted according to the specified format
 * @link https://php.net/manual/en/function.date-parse-from-format.php
 * @param string $format <p>
 * Format accepted by date with some extras.
 * </p>
 * @param string $datetime <p>
 * String representing the date.
 * </p>
 * @return array associative array with detailed info about given date.
 */
#[Pure(true)]
#[ArrayShape([
    'year' => 'int',
    'month' => 'int',
    'day' => 'int',
    'hour' => 'int',
    'minute' => 'int',
    'second' => 'int',
    'fraction' => 'double',
    'is_localtime' => 'bool',
    'zone_type' => 'int',
    'zone' => 'int',
    'is_dst' => 'bool',
    'tz_abbr' => 'string',
    'tz_id' => 'string',
    'relative' => 'array',
    'warning_count' => 'int',
    'warnings' => 'array',
    'error_count' => 'int',
    'errors' => 'array'
])]
/**
* <div id="function.date-parse-from-format" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_parse_from_format</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_parse_from_format</span> — <span class="dc-title">Get info about given date formatted according to the specified format</span></p> </div> <div class="refsect1 description" id="refsect1-function.date-parse-from-format-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>date_parse_from_format</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$format</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$datetime</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Returns associative array with detailed info about given date/time.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.date-parse-from-format-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">format</span></dt>     <dd>      <p class="para">       Documentation on how the <span class="parameter" style="color:#3A95FF">format</span> is used, please       refer to the documentation of       <span class="function">{@link DateTimeImmutable::createFromFormat()}</span>. The same       rules apply.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">datetime</span></dt>     <dd>      <p class="para">       String representing the date/time.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.date-parse-from-format-returnvalues">  <h3 class="title">返回值</h3>    <p class="para">   Returns associative array with detailed info about given date/time.  </p>  <p class="para">   The returned array has keys for <span class="literal">year</span>,   <span class="literal">month</span>, <span class="literal">day</span>, <span class="literal">hour</span>,   <span class="literal">minute</span>, <span class="literal">second</span>,   <span class="literal">fraction</span>, and <span class="literal">is_localtime</span>.  </p>  <p class="para">   If <span class="literal">is_localtime</span> is present then   <span class="literal">zone_type</span> indicates the type of timezone. For type   <span class="literal">1</span> (UTC offset) the <span class="literal">zone</span>,   <span class="literal">is_dst</span> fields are added; for type <span class="literal">2</span>   (abbreviation) the fields <span class="literal">tz_abbr</span>,   <span class="literal">is_dst</span> are added; and for type <span class="literal">3</span>   (timezone identifier) the <span class="literal">tz_abbr</span>,   <span class="literal">tz_id</span> are added.  </p>  <p class="para">   The array includes <span class="literal">warning_count</span> and   <span class="literal">warnings</span> fields. The first one indicate how many   warnings there were.   The keys of elements <span class="literal">warnings</span> array indicate the   position in the given <span class="parameter" style="color:#3A95FF">datetime</span> where the warning   occurred, with the string value describing the warning itself. An example   below shows such a warning.  </p>  <p class="para">   The array also contains <span class="literal">error_count</span> and   <span class="literal">errors</span> fields. The first one indicate how many errors   were found.   The keys of elements <span class="literal">errors</span> array indicate the   position in the given <span class="parameter" style="color:#3A95FF">datetime</span> where the error   occurred, with the string value describing the error itself. An example   below shows such an error.  </p>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    The number of array elements in the <span class="literal">warnings</span> and    <span class="literal">errors</span> arrays might be less than    <span class="literal">warning_count</span> or <span class="literal">error_count</span> if they    occurred at the same position.   </p>  </div> </div> <div class="refsect1 errors" id="refsect1-function.date-parse-from-format-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   This functions throws <span class="exceptionname"><a href="https://php.net/manual/zh/class.valueerror.php" class="exceptionname">ValueError</a></span> when the   <span class="parameter" style="color:#3A95FF">datetime</span> contains NULL-bytes.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.date-parse-from-format-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.21, 8.1.8, 8.2.0</td>      <td>       Now throws <span class="exceptionname"><a href="https://php.net/manual/zh/class.valueerror.php" class="exceptionname">ValueError</a></span> when NULL-bytes       are passed into <span class="parameter" style="color:#3A95FF">datetime</span>, which previously was silently       ignored.      </td>     </tr>     <tr>      <td>7.2.0</td>      <td>       The <span class="literal">zone</span> element of the returned array represents       seconds instead of minutes now, and its sign is inverted. For instance       <span class="literal">-120</span> is now <span class="literal">7200</span>.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.date-parse-from-format-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2255">    <p><strong>示例 #1 <span class="function"><strong>date_parse_from_format()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$date </span><span style="color: #007700">= </span><span style="color: #DD0000">"6.1.2009 13:00+01:00"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">date_parse_from_format</span><span style="color: #007700">(</span><span style="color: #DD0000">"j.n.Y H:iP"</span><span style="color: #007700">, </span><span style="color: #9876AA">$date</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>    [year] =&gt; 2009<br>    [month] =&gt; 1<br>    [day] =&gt; 6<br>    [hour] =&gt; 13<br>    [minute] =&gt; 0<br>    [second] =&gt; 0<br>    [fraction] =&gt;<br>    [warning_count] =&gt; 0<br>    [warnings] =&gt; Array<br>        (<br>        )<br><br>    [error_count] =&gt; 0<br>    [errors] =&gt; Array<br>        (<br>        )<br><br>    [is_localtime] =&gt; 1<br>    [zone_type] =&gt; 1<br>    [zone] =&gt; 3600<br>    [is_dst] =&gt;<br>)</blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2256">    <p><strong>示例 #2 <span class="function"><strong>date_parse_from_format()</strong></span> with warnings example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$date </span><span style="color: #007700">= </span><span style="color: #DD0000">"26 August 2022 22:30 pm"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$parsed </span><span style="color: #007700">= </span><span style="color: #9876AA">date_parse_from_format</span><span style="color: #007700">(</span><span style="color: #DD0000">"j F Y G:i a"</span><span style="color: #007700">, </span><span style="color: #9876AA">$date</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">"Warnings count: "</span><span style="color: #007700">, </span><span style="color: #9876AA">$parsed</span><span style="color: #007700">[</span><span style="color: #DD0000">'warning_count'</span><span style="color: #007700">], </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>foreach (</span><span style="color: #9876AA">$parsed</span><span style="color: #007700">[</span><span style="color: #DD0000">'warnings'</span><span style="color: #007700">] as </span><span style="color: #9876AA">$position </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">$message</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"\tOn position </span><span style="color: #007700">{</span><span style="color: #9876AA">$position</span><span style="color: #007700">}</span><span style="color: #DD0000">: </span><span style="color: #007700">{</span><span style="color: #9876AA">$message</span><span style="color: #007700">}</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Warnings count: 1<br>	On position 23: The parsed time was invalid</blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2257">    <p><strong>示例 #3 <span class="function"><strong>date_parse_from_format()</strong></span> with errors example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$date </span><span style="color: #007700">= </span><span style="color: #DD0000">"26 August 2022 CEST"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$parsed </span><span style="color: #007700">= </span><span style="color: #9876AA">date_parse_from_format</span><span style="color: #007700">(</span><span style="color: #DD0000">"j F Y H:i"</span><span style="color: #007700">, </span><span style="color: #9876AA">$date</span><span style="color: #007700">);<br><br>echo </span><span style="color: #DD0000">"Errors count: "</span><span style="color: #007700">, </span><span style="color: #9876AA">$parsed</span><span style="color: #007700">[</span><span style="color: #DD0000">'error_count'</span><span style="color: #007700">], </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>foreach (</span><span style="color: #9876AA">$parsed</span><span style="color: #007700">[</span><span style="color: #DD0000">'errors'</span><span style="color: #007700">] as </span><span style="color: #9876AA">$position </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">$message</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"\tOn position </span><span style="color: #007700">{</span><span style="color: #9876AA">$position</span><span style="color: #007700">}</span><span style="color: #DD0000">: </span><span style="color: #007700">{</span><span style="color: #9876AA">$message</span><span style="color: #007700">}</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Errors count: 3<br>	On position 15: A two digit hour could not be found<br>	On position 19: Data missing</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.date-parse-from-format-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link DateTimeImmutable::createFromFormat()} - Parses a time string according to a specified format</span></li>    <li><span class="function">{@link checkdate()} - 验证一个格里高里日期</span></li>   </ul>   </div></div>
*/
function date_parse_from_format(string $format, string $datetime): array {}

/**
* <div id="function.date-get-last-errors" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_get_last_errors</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_get_last_errors</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTimeImmutable::getLastErrors()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-get-last-errors-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTimeImmutable::getLastErrors()}</span>  </p> </div></div>
*
 * Returns the warnings and errors
 * Alias:
 * {@see DateTime::getLastErrors}
 * @link https://php.net/manual/zh/function.date-get-last-errors.php
 * @return array|false <p>Returns array containing info about warnings and errors.</p>
 
#[ArrayShape(["warning_count" => "int", "warnings" => "string[]", "error_count" => "int", "errors" => "string[]"])]
#[Pure(true)]
*/
function date_get_last_errors(): array|false {}

/**
* <div id="function.date-format" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_format</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_format</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::format()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-format-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::format()}</span>  </p> </div></div>
*
 * Alias:
 * {@see DateTime::format}
 * @link https://php.net/manual/zh/function.date-format.php
 * @param DateTimeInterface $object
 * @param string $format
 * @return string|false formatted date string on success or <b>FALSE</b> on failure.
 
#[Pure(true)]
#[LanguageLevelTypeAware(["8.0" => "string"], default: "string|false")]
*/
function date_format(DateTimeInterface $object, string $format) {}

/**
* <div id="function.date-modify" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_modify</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_modify</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::modify()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-modify-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::modify()}</span>  </p> </div></div>
*
 * Alter the timestamp of a DateTime object by incrementing or decrementing
 * in a format accepted by strtotime().
 * Alias:
 * {@see DateTime::modify}
 * @link https://php.net/manual/zh/function.date-modify.php
 * @param DateTime $object A DateTime object returned by date_create(). The function modifies this object.
 * @param string $modifier A date/time string. Valid formats are explained in {@link https://secure.php.net/manual/en/datetime.formats.php Date and Time Formats}.
 * @return DateTime|false Returns the DateTime object for method chaining or <b>FALSE</b> on failure.
 
*/
function date_modify(DateTime $object, string $modifier): DateTime|false {}

/**
* <div id="function.date-add" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_add</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_add</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::add()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-add-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::add()}</span>  </p> </div></div>
*
 * Alias:
 * {@see DateTime::add}
 * @link https://php.net/manual/zh/function.date-add.php
 * @param DateTime $object <p>Procedural style only: A
 * {@see DateTime} object returned by
 * {@see date_create()}. The function modifies this object.</p>
 * @param DateInterval $interval <p>A
 * {@see DateInterval} object</p>
 * @return DateTime|false <p>Returns the
 * {@see DateTime} object for method chaining or <b>FALSE</b> on failure.</p>
 
#[LanguageLevelTypeAware(["8.0" => "DateTime"], default: "DateTime|false")]
*/
function date_add(DateTime $object, DateInterval $interval) {}

/**
* <div id="function.date-sub" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_sub</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_sub</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::sub()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-sub-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::sub()}</span>  </p> </div> <div class="refsect1 seealso" id="refsect1-function.date-sub-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link DateTimeImmutable::sub()} - Subtracts an amount of days, months, years, hours, minutes and seconds</span></li>    <li><span class="function">{@link DateTime::sub()} - 对 DateTime 对象减去一定量的日、月、年、小时、分钟和秒。</span></li>   </ul>   </div></div>
*
 * Subtracts an amount of days, months, years, hours, minutes and seconds from a datetime object
 * Alias:
 * {@see DateTime::sub}
 * @link https://php.net/manual/zh/function.date-sub.php
 * @param DateTime $object Procedural style only: A
 * {@see DateTime} object returned by
 * {@see date_create()}. The function modifies this object.
 * @param DateInterval $interval <p>A
 * {@see DateInterval} object</p>
 * @return DateTime|false <p>Returns the
 * {@see DateTime} object for method chaining or <b>FALSE</b> on failure.</p>
 
#[LanguageLevelTypeAware(["8.0" => "DateTime"], default: "DateTime|false")]
*/
function date_sub(DateTime $object, DateInterval $interval) {}

/**
* <div id="function.date-timezone-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_timezone_get</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_timezone_get</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::getTimezone()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-timezone-get-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::getTimezone()}</span>  </p> </div></div>
*
 * Alias:
 * {@see DateTime::getTimezone}
 * @link https://php.net/manual/zh/function.date-timezone-get.php
 * @param DateTimeInterface $object <p>Procedural style only: A
 * {@see DateTime} object
 * returned by
 * {@see date_create()}</p>
 * @return DateTimeZone|false
 * <p>
 * Returns a
 * {@see DateTimeZone} object on success
 * or <b>FALSE</b> on failure.
 * </p>
 
#[Pure(true)]
*/
function date_timezone_get(DateTimeInterface $object): DateTimeZone|false {}

/**
* <div id="function.date-timezone-set" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_timezone_set</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_timezone_set</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::setTimezone()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-timezone-set-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::setTimezone()}</span>  </p> </div></div>
*
 * Sets the time zone for the datetime object
 * Alias:
 * {@see DateTime::setTimezone}
 * @link https://php.net/manual/zh/function.date-timezone-set.php
 * @param DateTime|DateTimeInterface $object <p>A
 * {@see DateTime} object returned by
 * {@see date_create()}. The function modifies this object.</p>
 * @param DateTimeZone $timezone <p>A
 * {@see DateTimeZone} object representing the desired time zone.</p>
 * @return DateTime|false <p>Returns the
 * {@see DateTime} object for method chaining or <b>FALSE</b> on failure.</p>
 
#[LanguageLevelTypeAware(["8.0" => "DateTime"], default: "DateTime|false")]
*/
function date_timezone_set(#[LanguageLevelTypeAware(["8.0" => "DateTime"], default: "DateTimeInterface")] $object, DateTimeZone $timezone) {}

/**
* <div id="function.date-offset-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_offset_get</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_offset_get</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::getOffset()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-offset-get-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::getOffset()}</span>  </p> </div></div>
*
 * Alias:
 * {@see DateTime::getOffset}
 * @link https://php.net/manual/zh/function.date-offset-get.php
 * @param DateTimeInterface $object <p>Procedural style only: A {@see DateTime} object
 * returned by {@see date_create()}</p>
 * @return int|false <p>Returns the timezone offset in seconds from UTC on success or <b>FALSE</b> on failure.</p>
 
#[Pure(true)]
#[LanguageLevelTypeAware(["8.0" => "int"], default: "int|false")]
*/
function date_offset_get(DateTimeInterface $object) {}

/**
* <div id="function.date-diff" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_diff</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_diff</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::diff()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-diff-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::diff()}</span>  </p> </div></div>
*
 * Returns the difference between two datetime objects
 * Alias:
 * {@see DateTime::diff}
 * @link https://php.net/manual/zh/function.date-diff.php
 * @param DateTimeInterface $baseObject
 * @param DateTimeInterface $targetObject The date to compare to
 * @param bool $absolute [optional] Whether to return absolute difference.
 * @return DateInterval|false The DateInterval object representing the difference between the two dates or FALSE on failure.
 
#[Pure(true)]
#[LanguageLevelTypeAware(["8.0" => "DateInterval"], default: "DateInterval|false")]
*/
function date_diff(DateTimeInterface $baseObject, DateTimeInterface $targetObject, bool $absolute = false) {}

/**
* <div id="function.date-time-set" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_time_set</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_time_set</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::setTime()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-time-set-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::setTime()}</span>  </p> </div></div>
*
 * Alias:
 * {@see DateTime::setTime}
 * @link https://php.net/manual/zh/function.date-time-set.php
 * @param DateTime $object
 * @param int $hour
 * @param int $minute
 * @param int $second [optional]
 * @param int $microsecond [optional]
 * @return DateTime <p>Returns the
 * {@see DateTime} object for method chaining or <b>FALSE</b> on failure.</p>
 
*/
function date_time_set(
    DateTime $object,
    int $hour,
    int $minute,
    int $second = 0,
    #[PhpStormStubsElementAvailable(from: '7.1')] int $microsecond = 0
): DateTime {}

/**
* <div id="function.date-date-set" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_date_set</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_date_set</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::setDate()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-date-set-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::setDate()}</span>  </p> </div></div>
*
 * Alias:
 * {@see DateTime::setDate}
 * @link https://php.net/manual/zh/function.date-date-set.php
 * @param DateTime $object <p>Procedural style only: A {@see DateTime} object
 * returned by {@see date_create()}.
 * The function modifies this object.</p>
 * @param int $year <p>Year of the date.</p>
 * @param int $month <p>Month of the date.</p>
 * @param int $day <p>Day of the date.</p>
 * @return DateTime|false
 * <p>
 * Returns the
 * {@see DateTime} object for method chaining or <b>FALSE</b> on failure.
 * </p>
 
#[LanguageLevelTypeAware(["8.0" => "DateTime"], default: "DateTime|false")]
*/
function date_date_set(DateTime $object, int $year, int $month, int $day): DateTime|false {}

/**
* <div id="function.date-isodate-set" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_isodate_set</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_isodate_set</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::setISODate()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-isodate-set-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::setISODate()}</span>  </p> </div></div>
*
 * Alias:
 * {@see DateTime::setISODate}
 * @link https://php.net/manual/zh/function.date-isodate-set.php
 * @param DateTime $object
 * @param int $year <p>Year of the date</p>
 * @param int $week <p>Week of the date.</p>
 * @param int $dayOfWeek [optional] <p>Offset from the first day of the week.</p>
 * @return DateTime|false <p>
 * Returns the {@see DateTime} object for method chaining or <strong><code>FALSE</code></strong> on failure.
 * </p>
 
#[LanguageLevelTypeAware(["8.0" => "DateTime"], default: "DateTime|false")]
*/
function date_isodate_set(DateTime $object, int $year, int $week, int $dayOfWeek = 1) {}

/**
* <div id="function.date-timestamp-set" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_timestamp_set</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_timestamp_set</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::setTimestamp()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-timestamp-set-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::setTimestamp()}</span>  </p> </div></div>
*
 * Sets the date and time based on an unix timestamp
 * Alias:
 * {@see DateTime::setTimestamp}
 * @link https://php.net/manual/zh/function.date-timestamp-set.php
 * @param DateTime $object <p>Procedural style only: A
 * {@see DateTime} object returned by
 * {@see date_create()}. The function modifies this object.</p>
 * @param int $timestamp <p>Unix timestamp representing the date.</p>
 * @return DateTime|false
 * {@see DateTime} object for call chaining or <b>FALSE</b> on failure
 
#[LanguageLevelTypeAware(["8.0" => "DateTime"], default: "DateTime|false")]
*/
function date_timestamp_set(DateTime $object, int $timestamp): DateTime|false {}

/**
* <div id="function.date-timestamp-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_timestamp_get</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_timestamp_get</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTime::getTimestamp()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-timestamp-get-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTime::getTimestamp()}</span>  </p> </div></div>
*
 * Gets the unix timestamp
 * Alias:
 * {@see DateTime::getTimestamp}
 * @link https://php.net/manual/zh/function.date-timestamp-get.php
 * @param DateTimeInterface $object
 * @return int <p>Returns the Unix timestamp representing the date.</p>
 
#[Pure(true)]
*/
function date_timestamp_get(DateTimeInterface $object): int {}

/**
* <div id="function.timezone-open" class="refentry"> <div class="refnamediv">  <h1 class="refname">timezone_open</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">timezone_open</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTimeZone::__construct()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.timezone-open-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTimeZone::__construct()}</span>  </p> </div></div>
*
 * Returns new DateTimeZone object
 * @link https://php.net/manual/zh/function.timezone-open.php
 * @param string $timezone <p>
 * Time zone identifier as full name (e.g. Europe/Prague) or abbreviation
 * (e.g. CET).
 * </p>
 * @return DateTimeZone|false DateTimeZone object on success or false on failure.
 
#[Pure(true)]
*/
function timezone_open(string $timezone): DateTimeZone|false {}

/**
* <div id="function.timezone-name-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">timezone_name_get</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">timezone_name_get</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTimeZone::getName()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.timezone-name-get-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTimeZone::getName()}</span>  </p> </div></div>
*
 * Alias:
 * {@see DateTimeZone::getName}
 * @link https://php.net/manual/zh/function.timezone-name-get.php
 * @param DateTimeZone $object <p>The
 * {@see DateTimeZone} for which to get a name.</p>
 * @return string One of the timezone names in the list of timezones.
 
#[Pure]
*/
function timezone_name_get(DateTimeZone $object): string {}

/**
* <div id="function.timezone-name-from-abbr" class="refentry"> <div class="refnamediv">  <h1 class="refname">timezone_name_from_abbr</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.3, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">timezone_name_from_abbr</span> — <span class="dc-title">Returns a timezone name by guessing from abbreviation and UTC offset</span></p> </div> <div class="refsect1 description" id="refsect1-function.timezone-name-from-abbr-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>timezone_name_from_abbr</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$abbr</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$utcOffset</span><span class="initializer"> = -1</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$isDST</span><span class="initializer"> = -1</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div> </div> <div class="refsect1 parameters" id="refsect1-function.timezone-name-from-abbr-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">abbr</span></dt>     <dd>      <p class="para">       Time zone abbreviation.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">utcOffset</span></dt>     <dd>      <p class="para">       Offset from GMT in seconds. Defaults to -1 which means that first found       time zone corresponding to <span class="parameter" style="color:#3A95FF">abbr</span> is returned.       Otherwise exact offset is searched and only if not found then the first       time zone with any offset is returned.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">isDST</span></dt>     <dd>      <p class="para">       Daylight saving time indicator. Defaults to -1, which means that       whether the time zone has daylight saving or not is not taken into       consideration when searching. If this is set to 1, then the       <span class="parameter" style="color:#3A95FF">utcOffset</span> is assumed to be an offset with       daylight saving in effect; if 0, then <span class="parameter" style="color:#3A95FF">utcOffset</span>       is assumed to be an offset without daylight saving in effect. If       <span class="parameter" style="color:#3A95FF">abbr</span> doesn't exist then the time zone is       searched solely by the <span class="parameter" style="color:#3A95FF">utcOffset</span> and       <span class="parameter" style="color:#3A95FF">isDST</span>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.timezone-name-from-abbr-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns time zone name on success 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div> <div class="refsect1 examples" id="refsect1-function.timezone-name-from-abbr-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2286">    <p><strong>示例 #1 A <span class="function"><strong>timezone_name_from_abbr()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">timezone_name_from_abbr</span><span style="color: #007700">(</span><span style="color: #DD0000">"CET"</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">timezone_name_from_abbr</span><span style="color: #007700">(</span><span style="color: #DD0000">""</span><span style="color: #007700">, </span><span style="color: #9876AA">3600</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Europe/Berlin<br>Europe/Paris</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.timezone-name-from-abbr-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link timezone_abbreviations_list()} - 别名 DateTimeZone::listAbbreviations</span></li>   </ul>   </div></div>
*
 * Returns the timezone name from abbreviation
 * @link https://php.net/manual/zh/function.timezone-name-from-abbr.php
 * @param string $abbr <p>
 * Time zone abbreviation.
 * </p>
 * @param int $utcOffset [optional] <p>
 * Offset from GMT in seconds. Defaults to -1 which means that first found
 * time zone corresponding to abbr is returned.
 * Otherwise exact offset is searched and only if not found then the first
 * time zone with any offset is returned.
 * </p>
 * @param int $isDST [optional] <p>
 * Daylight saving time indicator. If abbr doesn't
 * exist then the time zone is searched solely by
 * offset and isdst.
 * </p>
 * @return string|false time zone name on success or false on failure.
 * @since 5.1.3
 
#[Pure(true)]
*/
function timezone_name_from_abbr(string $abbr, int $utcOffset = -1, int $isDST = -1): string|false {}

/**
* <div id="function.timezone-offset-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">timezone_offset_get</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">timezone_offset_get</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTimeZone::getOffset()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.timezone-offset-get-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTimeZone::getOffset()}</span>  </p> </div></div>
*
 * Alias:
 * {@link DateTimeZone::getOffset}
 * @link https://php.net/manual/zh/function.timezone-offset-get.php
 * @param DateTimeZone $object <p>Procedural style only: A
 * {@see DateTimeZone} object
 * returned by
 * {@see timezone_open()}</p>
 * @param DateTimeInterface $datetime <p>DateTime that contains the date/time to compute the offset from.</p>
 * @return int|false <p>Returns time zone offset in seconds on success or <b>FALSE</b> on failure.</p>
 
#[Pure(true)]
#[LanguageLevelTypeAware(["8.0" => "int"], default: "int|false")]
*/
function timezone_offset_get(DateTimeZone $object, DateTimeInterface $datetime) {}

/**
* <div id="function.timezone-transitions-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">timezone_transitions_get</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">timezone_transitions_get</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTimeZone::getTransitions()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.timezone-transitions-get-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTimeZone::getTransitions()}</span>  </p> </div></div>
*
 * Returns all transitions for the timezone
 * Alias:
 * {@see DateTimeZone::getTransitions}
 * @link https://php.net/manual/zh/function.timezone-transitions-get.php
 * @param DateTimeZone $object <p>Procedural style only: A
 * {@see DateTimeZone} object returned by
 * {@see timezone_open()}</p>
 * @param int $timestampBegin [optional] <p>Begin timestamp</p>
 * @param int $timestampEnd [optional] <p>End timestamp</p>
 * @return array|false <p>Returns numerically indexed array containing associative array with all transitions on success or FALSE on failure.</p>
 
#[Pure(true)]
*/
function timezone_transitions_get(DateTimeZone $object, int $timestampBegin = PHP_INT_MIN, int $timestampEnd = PHP_INT_MAX): array|false {}

/**
 * Alias:
 * {@see DateTimeZone::getLocation}
 * @link https://php.net/manual/en/function.timezone-location-get.php
 * @param DateTimeZone $object <p>Procedural style only: A {@see DateTimeZone} object returned by {@see timezone_open()}</p>
 * @return array|false <p>Array containing location information about timezone.</p>
 */
#[Pure(true)]
#[ArrayShape([
    'country_code' => 'string',
    'latitude' => 'double',
    'longitude' => 'double',
    'comments' => 'string',
])]
/**
* <div id="function.timezone-location-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">timezone_location_get</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">timezone_location_get</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTimeZone::getLocation()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.timezone-location-get-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTimeZone::getLocation()}</span>  </p> </div></div>
*/
function timezone_location_get(DateTimeZone $object): array|false {}

/**
* <div id="function.timezone-identifiers-list" class="refentry"> <div class="refnamediv">  <h1 class="refname">timezone_identifiers_list</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">timezone_identifiers_list</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTimeZone::listIdentifiers()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.timezone-identifiers-list-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTimeZone::listIdentifiers()}</span>  </p> </div></div>
*
 * Returns a numerically indexed array containing all defined timezone identifiers
 * Alias:
 * {@see DateTimeZone::listIdentifiers()}
 * @link https://php.net/manual/zh/function.timezone-identifiers-list.php
 * @param int $timezoneGroup [optional] One of DateTimeZone class constants.
 * @param string|null $countryCode [optional] A two-letter ISO 3166-1 compatible country code.
 * Note: This option is only used when $timezoneGroup is set to DateTimeZone::PER_COUNTRY.
 * @return array|false Returns array on success or FALSE on failure.
 
#[Pure(true)]
#[LanguageLevelTypeAware(["8.0" => "array"], default: "array|false")]
*/
function timezone_identifiers_list(int $timezoneGroup = DateTimeZone::ALL, ?string $countryCode) {}

/**
* <div id="function.timezone-abbreviations-list" class="refentry"> <div class="refnamediv">  <h1 class="refname">timezone_abbreviations_list</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">timezone_abbreviations_list</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateTimeZone::listAbbreviations()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.timezone-abbreviations-list-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateTimeZone::listAbbreviations()}</span>  </p> </div></div>
*
 * Returns associative array containing dst, offset and the timezone name
 * Alias:
 * {@see DateTimeZone::listAbbreviations}
 * @link https://php.net/manual/zh/function.timezone-abbreviations-list.php
 * @return array<string, list<array{dst: bool, offset: int, timezone_id: string|null}>>|false Array on success or <b>FALSE</b> on failure.
 
#[Pure]
#[LanguageLevelTypeAware(["8.0" => "array"], default: "array|false")]
*/
function timezone_abbreviations_list() {}

/**
* <div id="function.timezone-version-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">timezone_version_get</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">timezone_version_get</span> — <span class="dc-title">   获取 timezonedb 版本  </span></p> </div> <div class="refsect1 description" id="refsect1-function.timezone-version-get-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>timezone_version_get</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   返回当前 timezonedb 版本。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.timezone-version-get-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.timezone-version-get-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回格式为 <span class="literal">YYYY.increment</span> 的 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>，比如 <span class="literal">2022.2</span>。  </p>  <p class="para">   如果时区数据库版本比较旧（比如不显示今年），然后可以通过升级 PHP 版本或者安装 <a href="https://pecl.php.net/package/timezonedb" class="link external">» timezonedb</a> PECL 包来更新时区信息。  </p>  <p class="para">   一些系统发行版对 PHP 的日期/时间支持打了补丁，以便使用另一个来源的时区信息。在这种情况下，此函数将会返回   <span class="literal">0.system</span>。在这种情况下也建议安装 <a href="https://pecl.php.net/package/timezonedb" class="link external">» timezonedb</a> 包。  </p> </div> <div class="refsect1 examples" id="refsect1-function.timezone-version-get-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2287">    <p><strong>示例 #1 获取 timezonedb 版本</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">timezone_version_get</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">2022.2</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.timezone-version-get-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><a href="https://php.net/manual/zh/timezones.php" class="link">时区支持列表</a></li>   </ul>   </div></div>
*
 * Gets the version of the timezonedb
 * @link https://php.net/manual/zh/function.timezone-version-get.php
 * @return string a string.
 
#[Pure]
*/
function timezone_version_get(): string {}

/**
* <div id="function.date-interval-create-from-date-string" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_interval_create_from_date_string</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_interval_create_from_date_string</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateInterval::createFromDateString()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-interval-create-from-date-string-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateInterval::createFromDateString()}</span>  </p> </div></div>
*
 * Alias:
 * {@see DateInterval::createFromDateString}
 * @link https://php.net/manual/zh/function.date-interval-create-from-date-string.php
 * @param string $datetime <p>A date with relative parts. Specifically, the relative formats supported by the parser used for
 * {@see strtotime()} and
 * {@see DateTime} will be used to construct the
 * {@see DateInterval}.</p>
 * @return DateInterval|false
 * <p>Returns a new DateInterval instance.</p>
 
#[Pure(true)]
*/
function date_interval_create_from_date_string(string $datetime): DateInterval|false {}

/**
* <div id="function.date-interval-format" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_interval_format</h1>  <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_interval_format</span> — <span class="dc-title">别名 <span class="methodname" style="color:#CC7832">{@link DateInterval::format()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.date-interval-format-description">  <h3 class="title">说明</h3>  <p class="para">   此函数是该函数的别名： <span class="methodname" style="color:#CC7832">{@link DateInterval::format()}</span>  </p> </div></div>
*
 * Alias:
 * {@see DateInterval::format}
 * @link https://php.net/manual/zh/function.date-interval-format.php
 * @param DateInterval $object
 * @param string $format
 * @return string
 
#[Pure(true)]
*/
function date_interval_format(DateInterval $object, string $format): string {}

/**
* <div id="function.date-default-timezone-set" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_default_timezone_set</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_default_timezone_set</span> — <span class="dc-title">   设置脚本中所有日期/时间函数使用的默认时区  </span></p> </div> <div class="refsect1 description" id="refsect1-function.date-default-timezone-set-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>date_default_timezone_set</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$timezoneId</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>date_default_timezone_set()</strong></span> 设置所有日期/时间函数使用的默认时区  </p>  <p class="para">   除了在脚本中使用此函数设置默认时区，还可以使用 INI 设置 <a href="https://php.net/manual/zh/datetime.configuration.php#ini.date.timezone" class="link">date.timezone</a>   设置默认时区。  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.date-default-timezone-set-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">timezoneId</span></dt>     <dd>      <p class="para">       时区标识符，像 <span class="literal">UTC</span>、<span class="literal">Africa/Lagos</span>、<span class="literal">Asia/Hong_Kong</span>       或 <span class="literal">Europe/Lisbon</span>。有效的标识符列表见<a href="https://php.net/manual/zh/timezones.php" class="xref">所支持的时区列表</a>。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.date-default-timezone-set-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果 <span class="parameter" style="color:#3A95FF">timezoneId</span> 无效，此函数返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>，否则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.date-default-timezone-set-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2248">    <p><strong>示例 #1 获取默认时区</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'America/Los_Angeles'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$script_tz </span><span style="color: #007700">= </span><span style="color: #9876AA">date_default_timezone_get</span><span style="color: #007700">();<br><br>if (</span><span style="color: #9876AA">strcmp</span><span style="color: #007700">(</span><span style="color: #9876AA">$script_tz</span><span style="color: #007700">, </span><span style="color: #9876AA">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'date.timezone'</span><span style="color: #007700">))){<br>    echo </span><span style="color: #DD0000">'Script timezone differs from ini-set timezone.'</span><span style="color: #007700">;<br>} else {<br>    echo </span><span style="color: #DD0000">'Script timezone and ini-set timezone match.'</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.date-default-timezone-set-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link date_default_timezone_get()} - 取得脚本中所有日期/时间函数所使用的默认时区</span></li>    <li><a href="https://php.net/manual/zh/timezones.php" class="xref">所支持的时区列表</a></li>   </ul>   </div></div>
*
 * Sets the default timezone used by all date/time functions in a script
 * @link https://php.net/manual/zh/function.date-default-timezone-set.php
 * @param string $timezoneId <p>
 * The timezone identifier, like UTC or
 * Europe/Lisbon. The list of valid identifiers is
 * available in the .
 * </p>
 * @return bool This function returns false if the
 * timezone_identifier isn't valid, or true
 * otherwise.
 
*/
function date_default_timezone_set(string $timezoneId): bool {}

/**
* <div id="function.date-default-timezone-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_default_timezone_get</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_default_timezone_get</span> — <span class="dc-title">   取得脚本中所有日期/时间函数所使用的默认时区  </span></p> </div> <div class="refsect1 description" id="refsect1-function.date-default-timezone-get-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>date_default_timezone_get</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   本函数按照如下顺序返回默认时区：   </p><ul class="itemizedlist">    <li class="listitem">     <p class="para">      读取使用 <span class="function">{@link date_default_timezone_set()}</span> 函数设置的时区（如果设置了的话）     </p>    </li>    <li class="listitem">     <p class="para">      读取 <a href="https://php.net/manual/zh/datetime.configuration.php#ini.date.timezone" class="link">date.timezone</a> ini 选项的值（如果设置了的话）     </p>    </li>   </ul>    <p class="para">   如果以上选择都不成功，<span class="methodname" style="color:#CC7832"><strong>date_default_timezone_get()</strong></span>   会则返回默认时区 <span class="literal">UTC</span> 。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.date-default-timezone-get-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.date-default-timezone-get-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.date-default-timezone-get-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2246">    <p><strong>示例 #1 获取默认时区</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'Europe/London'</span><span style="color: #007700">);<br><br>if (</span><span style="color: #9876AA">date_default_timezone_get</span><span style="color: #007700">()) {<br>    echo </span><span style="color: #DD0000">'date_default_timezone_set: ' </span><span style="color: #007700">. </span><span style="color: #9876AA">date_default_timezone_get</span><span style="color: #007700">() . </span><span style="color: #DD0000">'&lt;br /&gt;'</span><span style="color: #007700">;<br>}<br><br>if (</span><span style="color: #9876AA">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'date.timezone'</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #DD0000">'date.timezone: ' </span><span style="color: #007700">. </span><span style="color: #9876AA">ini_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'date.timezone'</span><span style="color: #007700">);<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">date_default_timezone_set: Europe/London<br>date.timezone: Europe/London</blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2247">    <p><strong>示例 #2 获取时区缩写</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>date_default_timezone_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'America/Los_Angeles'</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">date_default_timezone_get</span><span style="color: #007700">() . </span><span style="color: #DD0000">' =&gt; ' </span><span style="color: #007700">. </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'e'</span><span style="color: #007700">) . </span><span style="color: #DD0000">' =&gt; ' </span><span style="color: #007700">. </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">'T'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">America/Los_Angeles =&gt; America/Los_Angeles =&gt; PST</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.date-default-timezone-get-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link date_default_timezone_set()} - 设置脚本中所有日期/时间函数使用的默认时区</span></li>    <li><a href="https://php.net/manual/zh/timezones.php" class="xref">所支持的时区列表</a></li>   </ul>   </div></div>
*
 * Gets the default timezone used by all date/time functions in a script
 * @link https://php.net/manual/zh/function.date-default-timezone-get.php
 * @return string a string.
 
#[Pure]
*/
function date_default_timezone_get(): string {}

/**
* <div id="function.date-sunrise" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_sunrise</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_sunrise</span> — <span class="dc-title">返回给定的日期与地点的日出时间</span></p> </div> <div id="function.date-sunrise-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    该函数自 PHP 8.1.0 起<em>弃用</em>。强烈建议不要依赖此函数。请改用 <span class="function">{@link date_sun_info()}</span>。   </p>  </div> </div> <div class="refsect1 description" id="refsect1-function.date-sunrise-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>date_sunrise</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$timestamp</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$returnFormat</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/datetime.constants.php#constant.sunfuncs-ret-string">SUNFUNCS_RET_STRING</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></span> <span class="parameter" style="color:#3A95FF">$latitude</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></span> <span class="parameter" style="color:#3A95FF">$longitude</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></span> <span class="parameter" style="color:#3A95FF">$zenith</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></span> <span class="parameter" style="color:#3A95FF">$utcOffset</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>date_sunrise()</strong></span> 返回给定的日期（以   <span class="parameter" style="color:#3A95FF">timestamp</span> 指定）与地点的日出时间。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.date-sunrise-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">timestamp</span></dt>     <dd>      <p class="para">              取 <span class="parameter" style="color:#3A95FF">timestamp</span>所在日期的日出时间。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">returnFormat</span></dt>     <dd>      <p class="para">       </p><table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">returnFormat</span> 常量</strong></caption>                 <thead>          <tr>           <th>常量</th>           <th>说明</th>           <th>取值举例</th>          </tr>         </thead>         <tbody class="tbody">          <tr>           <td>SUNFUNCS_RET_STRING</td>           <td>以 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> 格式返回结果</td>           <td>16:46</td>          </tr>          <tr>           <td>SUNFUNCS_RET_DOUBLE</td>           <td>以 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span> 格式返回结果</td>           <td>16.78243132</td>          </tr>          <tr>           <td>SUNFUNCS_RET_TIMESTAMP</td>           <td>以 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 格式（时间戳）返回结果</td>           <td>1095034606</td>          </tr>         </tbody>               </table>           </dd>             <dt><span class="parameter" style="color:#3A95FF">latitude</span></dt>     <dd>      <p class="para">       默认是指北纬。因此如果要指定南纬，必须传递一个负值。       参见 <a href="https://php.net/manual/zh/datetime.configuration.php#ini.date.default-latitude" class="link">date.default_latitude</a>      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">longitude</span></dt>     <dd>      <p class="para">       默认是指东经。因此如果要指定西经，必须传递一个负值。       参见 <a href="https://php.net/manual/zh/datetime.configuration.php#ini.date.default-longitude" class="link">date.default_longitude</a>      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">zenith</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">zenith</span> is the angle between the center of the sun       and a line perpendicular to earth's surface. It defaults to       <a href="https://php.net/manual/zh/datetime.configuration.php#ini.date.sunrise-zenith" class="link">date.sunrise_zenith</a>       </p><table class="doctable table">        <caption><strong>Common <span class="parameter" style="color:#3A95FF">zenith</span> angles</strong></caption>                 <thead>          <tr>           <th>Angle</th>           <th>Description</th>          </tr>         </thead>         <tbody class="tbody">          <tr>           <td>90°50'</td>           <td>Sunrise: the point where the sun becomes visible.</td>          </tr>          <tr>           <td>96°</td>           <td>Civil twilight: conventionally used to signify the start of dawn.</td>          </tr>          <tr>           <td>102°</td>           <td>Nautical twilight: the point at which the horizon starts being visible at sea.</td>          </tr>          <tr>           <td>108°</td>           <td>Astronomical twilight: the point at which the sun starts being the source of any illumination.</td>          </tr>         </tbody>               </table>           </dd>             <dt><span class="parameter" style="color:#3A95FF">utcOffset</span></dt>     <dd>      <p class="para">       单位是小时。       The <span class="parameter" style="color:#3A95FF">utcOffset</span> is ignored, if       <span class="parameter" style="color:#3A95FF">returnFormat</span> is       <strong><span><a href="https://php.net/manual/zh/datetime.constants.php#constant.sunfuncs-ret-timestamp">SUNFUNCS_RET_TIMESTAMP</a></span></strong>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.date-sunrise-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   按指定格式 <span class="parameter" style="color:#3A95FF">returnFormat</span> 返回的日出时间， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   One potential reason for failure is that the   sun does not rise at all, which happens inside the polar circles for part of   the year.  </p> </div> <div class="refsect1 errors" id="refsect1-function.date-sunrise-errors">  <h3 class="title">错误／异常</h3>      <p class="para">在每次调用日期/时间函数时，如果时区无效则会引发 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-notice">E_NOTICE</a></span></strong> 错误。参见<span class="function">{@link date_default_timezone_set()}</span>。</p>  </div> <div class="refsect1 changelog" id="refsect1-function.date-sunrise-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.1.0</td>       <td>        此函数已弃用，请改用 <span class="function">{@link date_sun_info()}</span>。       </td>      </tr>      <tr>       <td>8.0.0</td>       <td>        <span class="parameter" style="color:#3A95FF">latitude</span>, <span class="parameter" style="color:#3A95FF">longitude</span>,        <span class="parameter" style="color:#3A95FF">zenith</span> and <span class="parameter" style="color:#3A95FF">utcOffset</span> are nullable now.       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.date-sunrise-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2262">    <p><strong>示例 #1 <span class="function"><strong>date_sunrise()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// 计算葡萄牙里斯本的日出时间<br>Latitude:  北纬 38.4 度<br>Longitude: 西经 9 度<br>Zenith ~= 90<br>offset: +1 GMT<br><br><br></span><span style="color: #007700">echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"D M d Y"</span><span style="color: #007700">). </span><span style="color: #DD0000">', sunrise time : ' </span><span style="color: #007700">.</span><span style="color: #9876AA">date_sunrise</span><span style="color: #007700">(</span><span style="color: #9876AA">time</span><span style="color: #007700">(), </span><span style="color: #9876AA">SUNFUNCS_RET_STRING</span><span style="color: #007700">, </span><span style="color: #9876AA">38.4</span><span style="color: #007700">, -</span><span style="color: #9876AA">9</span><span style="color: #007700">, </span><span style="color: #9876AA">90</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Mon Dec 20 2004, sunrise time : 08:54</blockquote></div>    </div>   </div>   <div class="example" id="example-2263">    <p><strong>示例 #2 No sunrise</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$solstice </span><span style="color: #007700">= </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">'2017-12-21'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">date_sunrise</span><span style="color: #007700">(</span><span style="color: #9876AA">$solstice</span><span style="color: #007700">, </span><span style="color: #9876AA">SUNFUNCS_RET_STRING</span><span style="color: #007700">, </span><span style="color: #9876AA">69.245833</span><span style="color: #007700">, -</span><span style="color: #9876AA">53.537222</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">bool(false)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.date-sunrise-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link date_sun_info()} - Returns an array with information about sunset/sunrise and twilight begin/end</span></li>   </ul>   </div></div>
*
 * Returns time of sunrise for a given day and location
 * @link https://php.net/manual/zh/function.date-sunrise.php
 * @param int $timestamp <p>
 * The timestamp of the day from which the sunrise
 * time is taken.
 * </p>
 * @param int $returnFormat [optional] <p>
 * <table>
 * format constants
 * <tr valign="top">
 * <td>constant</td>
 * <td>description</td>
 * <td>example</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_STRING</td>
 * <td>returns the result as string</td>
 * <td>16:46</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_DOUBLE</td>
 * <td>returns the result as float</td>
 * <td>16.78243132</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_TIMESTAMP</td>
 * <td>returns the result as integer (timestamp)</td>
 * <td>1095034606</td>
 * </tr>
 * </table>
 * </p>
 * @param float|null $latitude [optional] <p>
 * Defaults to North, pass in a negative value for South.
 * See also: date.default_latitude
 * </p>
 * @param float|null $longitude [optional] <p>
 * Defaults to East, pass in a negative value for West.
 * See also: date.default_longitude
 * </p>
 * @param float|null $zenith [optional] <p>
 * Default: date.sunrise_zenith
 * </p>
 * @param float|null $utcOffset [optional]
 * @return string|int|float|false the sunrise time in a specified format on
 * success or false on failure.
 * @deprecated 8.1
 * Use {@link date_sun_info} instead
 
#[Pure(true)]
#[Deprecated(reason: 'in 8.1.  Use date_sun_info instead', since: '8.1')]
*/
function date_sunrise(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, ?float $latitude, ?float $longitude, ?float $zenith, ?float $utcOffset): string|int|float|false {}

/**
* <div id="function.date-sunset" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_sunset</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_sunset</span> — <span class="dc-title">   返回给定的日期与地点的日落时间  </span></p> </div> <div id="function.date-sunset-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    该函数自 PHP 8.1.0 起<em>弃用</em>。强烈建议不要依赖此函数。请改用 <span class="function">{@link date_sun_info()}</span>。   </p>  </div> </div> <div class="refsect1 description" id="refsect1-function.date-sunset-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>date_sunset</strong></span>(<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$timestamp</span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$returnFormat</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/datetime.constants.php#constant.sunfuncs-ret-string">SUNFUNCS_RET_STRING</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></span> <span class="parameter" style="color:#3A95FF">$latitude</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></span> <span class="parameter" style="color:#3A95FF">$longitude</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></span> <span class="parameter" style="color:#3A95FF">$zenith</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>,<br>    <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></span> <span class="parameter" style="color:#3A95FF">$utcOffset</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>   <p class="para rdfs-comment">   <span class="function"><strong>date_sunset()</strong></span> 返回给定的日期（以   <span class="parameter" style="color:#3A95FF">timestamp</span> 指定）与地点的日落时间。  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.date-sunset-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">timestamp</span></dt>     <dd>      <p class="para">       返回给定的日期（以       <span class="parameter" style="color:#3A95FF">timestamp</span> 指定）的日落时间。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">returnFormat</span></dt>     <dd>      <p class="para">       </p><table class="doctable table">        <caption><strong><span class="parameter" style="color:#3A95FF">returnFormat</span> 常量</strong></caption>                 <thead>          <tr>           <th>常量</th>           <th>说明</th>           <th>取值举例</th>          </tr>         </thead>         <tbody class="tbody">          <tr>           <td>SUNFUNCS_RET_STRING</td>           <td>以 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> 格式返回结果</td>           <td>16:46</td>          </tr>          <tr>           <td>SUNFUNCS_RET_DOUBLE</td>           <td>以 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span> 格式返回结果</td>           <td>16.78243132</td>          </tr>          <tr>           <td>SUNFUNCS_RET_TIMESTAMP</td>           <td>以 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> 格式（时间戳）返回结果</td>           <td>1095034606</td>          </tr>         </tbody>               </table>           </dd>             <dt><span class="parameter" style="color:#3A95FF">latitude</span></dt>     <dd>      <p class="para">       默认是指北纬。因此如果要指定南纬，必须传递一个负值。参见：<a href="https://php.net/manual/zh/datetime.configuration.php#ini.date.default-latitude" class="link">date.default_latitude</a>      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">longitude</span></dt>     <dd>      <p class="para">       默认是指东经。因此如果要指定西经，必须传递一个负值。参见：<a href="https://php.net/manual/zh/datetime.configuration.php#ini.date.default-longitude" class="link">date.default_longitude</a>      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">zenith</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">zenith</span> is the angle between the center of the sun       and a line perpendicular to earth's surface. It defaults to       <a href="https://php.net/manual/zh/datetime.configuration.php#ini.date.sunrise-zenith" class="link">date.sunrise_zenith</a>       </p><table class="doctable table">        <caption><strong>Common <span class="parameter" style="color:#3A95FF">zenith</span> angles</strong></caption>                 <thead>          <tr>           <th>Angle</th>           <th>Description</th>          </tr>         </thead>         <tbody class="tbody">          <tr>           <td>90°50'</td>           <td>Sunrise: the point where the sun becomes visible.</td>          </tr>          <tr>           <td>96°</td>           <td>Civil twilight: conventionally used to signify the start of dawn.</td>          </tr>          <tr>           <td>102°</td>           <td>Nautical twilight: the point at which the horizon starts being visible at sea.</td>          </tr>          <tr>           <td>108°</td>           <td>Astronomical twilight: the point at which the sun starts being the source of any illumination.</td>          </tr>         </tbody>               </table>           </dd>             <dt><span class="parameter" style="color:#3A95FF">utcOffset</span></dt>     <dd>      <p class="para">       单位是小时。       The <span class="parameter" style="color:#3A95FF">utcOffset</span> is ignored, if       <span class="parameter" style="color:#3A95FF">returnFormat</span> is       <strong><span><a href="https://php.net/manual/zh/datetime.constants.php#constant.sunfuncs-ret-timestamp">SUNFUNCS_RET_TIMESTAMP</a></span></strong>.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.date-sunset-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   用指定的格式 <span class="parameter" style="color:#3A95FF">returnFormat</span> 返回日落时间， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   One potential reason for failure is that the   sun does not rise at all, which happens inside the polar circles for part of   the year.  </p> </div> <div class="refsect1 errors" id="refsect1-function.date-sunset-errors">  <h3 class="title">错误／异常</h3>      <p class="para">在每次调用日期/时间函数时，如果时区无效则会引发 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-notice">E_NOTICE</a></span></strong> 错误。参见<span class="function">{@link date_default_timezone_set()}</span>。</p>  </div>  <div class="refsect1 changelog" id="refsect1-function.date-sunset-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.1.0</td>       <td>        此函数已弃用，请改用 <span class="function">{@link date_sun_info()}</span>。       </td>      </tr>      <tr>       <td>8.0.0</td>       <td>        <span class="parameter" style="color:#3A95FF">latitude</span>, <span class="parameter" style="color:#3A95FF">longitude</span>,        <span class="parameter" style="color:#3A95FF">zenith</span> and <span class="parameter" style="color:#3A95FF">utcOffset</span> are nullable now.       </td>      </tr>     </tbody>       </table>   </div>  <div class="refsect1 examples" id="refsect1-function.date-sunset-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2264">    <p><strong>示例 #1 <span class="function"><strong>date_sunset()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// calculate the sunset time for Lisbon, Portugal<br>Latitude: 38.4 North<br>Longitude: 9 West<br>Zenith ~= 90<br>offset: +1 GMT<br><br><br></span><span style="color: #007700">echo </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"D M d Y"</span><span style="color: #007700">). </span><span style="color: #DD0000">', sunset time : ' </span><span style="color: #007700">.</span><span style="color: #9876AA">date_sunset</span><span style="color: #007700">(</span><span style="color: #9876AA">time</span><span style="color: #007700">(), </span><span style="color: #9876AA">SUNFUNCS_RET_STRING</span><span style="color: #007700">, </span><span style="color: #9876AA">38.4</span><span style="color: #007700">, -</span><span style="color: #9876AA">9</span><span style="color: #007700">, </span><span style="color: #9876AA">90</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Mon Dec 20 2004, sunset time : 18:13</blockquote></div>    </div>   </div>   <div class="example" id="example-2265">    <p><strong>示例 #2 No sunrise</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$solstice </span><span style="color: #007700">= </span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">'2017-12-21'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">date_sunrise</span><span style="color: #007700">(</span><span style="color: #9876AA">$solstice</span><span style="color: #007700">, </span><span style="color: #9876AA">SUNFUNCS_RET_STRING</span><span style="color: #007700">, </span><span style="color: #9876AA">69.245833</span><span style="color: #007700">, -</span><span style="color: #9876AA">53.537222</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">bool(false)</blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.date-sunset-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link date_sun_info()} - Returns an array with information about sunset/sunrise and twilight begin/end</span></li>   </ul>   </div></div>
*
 * Returns time of sunset for a given day and location
 * @link https://php.net/manual/zh/function.date-sunset.php
 * @param int $timestamp <p>
 * The timestamp of the day from which the sunset
 * time is taken.
 * </p>
 * @param int $returnFormat [optional] <p>
 * <table>
 * format constants
 * <tr valign="top">
 * <td>constant</td>
 * <td>description</td>
 * <td>example</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_STRING</td>
 * <td>returns the result as string</td>
 * <td>16:46</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_DOUBLE</td>
 * <td>returns the result as float</td>
 * <td>16.78243132</td>
 * </tr>
 * <tr valign="top">
 * <td>SUNFUNCS_RET_TIMESTAMP</td>
 * <td>returns the result as integer (timestamp)</td>
 * <td>1095034606</td>
 * </tr>
 * </table>
 * </p>
 * @param float|null $latitude [optional] <p>
 * Defaults to North, pass in a negative value for South.
 * See also: date.default_latitude
 * </p>
 * @param float|null $longitude [optional] <p>
 * Defaults to East, pass in a negative value for West.
 * See also: date.default_longitude
 * </p>
 * @param float|null $zenith [optional] <p>
 * Default: date.sunset_zenith
 * </p>
 * @param float|null $utcOffset [optional]
 * @return string|int|float|false the sunset time in a specified format on
 * success or false on failure.
 
#[Pure(true)]
#[Deprecated(reason: 'in 8.1.  Use date_sun_info instead', since: '8.1')]
*/
function date_sunset(int $timestamp, int $returnFormat = SUNFUNCS_RET_STRING, ?float $latitude, ?float $longitude, ?float $zenith, ?float $utcOffset): string|int|float|false {}
/**
 * Returns an array with information about sunset/sunrise and twilight begin/end
 * @link https://php.net/manual/en/function.date-sun-info.php
 * @param int $timestamp <p>
 * Timestamp.
 * </p>
 * @param float $latitude <p>
 * Latitude in degrees.
 * </p>
 * @param float $longitude <p>
 * Longitude in degrees.
 * </p>
 * @return array{
 *              sunrise: int|bool,
 *              sunset: int|bool,
 *              transit: int|bool,
 *              civil_twilight_begin: int|bool,
 *              civil_twilight_end: int|bool,
 *              nautical_twilight_begin: int|bool,
 *              nautical_twilight_end: int|bool,
 *              astronomical_twilight_begin: int|bool,
 *              astronomical_twilight_end: int|bool,
 *         }|false Returns array on success or <strong><code>false</code></strong> on failure. The structure of the array is detailed in the following list:
 * <table>
 * <tr><td>sunrise</td><td>The timestamp of the sunrise (zenith angle = 90°35&#039;).</td></tr>
 * <tr><td>sunset</td><td>The timestamp of the sunset (zenith angle = 90°35&#039;).</td></tr>
 * <tr><td>transit</td><td>The timestamp when the sun is at its zenith, i.e. has reached its topmost point.</td></tr>
 * <tr><td>civil_twilight_begin</td><td>The start of the civil dawn (zenith angle = 96°). It ends at <code>sunrise</code>.</td></tr>
 * <tr><td>civil_twilight_end</td><td>The end of the civil dusk (zenith angle = 96°). It starts at <code>sunset</code>.</td></tr>
 * <tr><td>nautical_twilight_begin</td><td>The start of the nautical dawn (zenith angle = 102°). It ends at <code>civil_twilight_begin</code>.</td></tr>
 * <tr><td>nautical_twilight_end</td><td>The end of the nautical dusk (zenith angle = 102°). It starts at <code>civil_twilight_end</code>.</td></tr>
 * <tr><td>astronomical_twilight_begin</td><td>The start of the astronomical dawn (zenith angle = 108°). It ends at <code>nautical_twilight_begin</code>.</td></tr>
 * <tr><td>astronomical_twilight_end</td><td>The end of the astronomical dusk (zenith angle = 108°). It starts at <code>nautical_twilight_end</code>.</td></tr>
 * </table>
 * <br>
 * The values of the array elements are either UNIX timestamps, <strong><code>false</code></strong> if the
 * sun is below the respective zenith for the whole day, or <strong><code>true</code></strong> if the sun is
 * above the respective zenith for the whole day.
 * @since 5.1.2
 */
#[Pure(true)]
#[LanguageLevelTypeAware(["8.0" => "array"], default: "array|false")]
#[ArrayShape([
    "sunrise" => "int",
    "sunset" => "int",
    "transit" => "int",
    "civil_twilight_begin" => "int",
    "civil_twilight_end" => "int",
    "nautical_twilight_begin" => "int",
    "nautical_twilight_end" => "int",
    "astronomical_twilight_begin" => "int",
    "astronomical_twilight_end" => "int"
])]
/**
* <div id="function.date-sun-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">date_sun_info</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.2, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">date_sun_info</span> — <span class="dc-title">Returns an array with information about sunset/sunrise and twilight begin/end</span></p> </div> <div class="refsect1 description" id="refsect1-function.date-sun-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>date_sun_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$timestamp</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span> <span class="parameter" style="color:#3A95FF">$latitude</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span> <span class="parameter" style="color:#3A95FF">$longitude</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div> </div> <div class="refsect1 parameters" id="refsect1-function.date-sun-info-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">timestamp</span></dt>     <dd>      <p class="para">       Unix timestamp.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">latitude</span></dt>     <dd>      <p class="para">       Latitude in degrees.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">longitude</span></dt>     <dd>      <p class="para">       Longitude in degrees.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.date-sun-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array whose structure is detailed in the following list:  </p>  <p class="para">   </p><dl>         <dt><span class="literal">sunrise</span></dt>     <dd>      <span class="simpara">       The timestamp of the sunrise (zenith angle = 90°35').      </span>     </dd>              <dt><span class="literal">sunset</span></dt>     <dd>      <span class="simpara">       The timestamp of the sunset (zenith angle = 90°35').      </span>     </dd>              <dt><span class="literal">transit</span></dt>     <dd>      <span class="simpara">       The timestamp when the sun is at its zenith, i.e. has reached its topmost       point.      </span>     </dd>              <dt><span class="literal">civil_twilight_begin</span></dt>     <dd>      <span class="simpara">       The start of the civil dawn (zenith angle = 96°). It ends at       <span class="literal">sunrise</span>.      </span>     </dd>              <dt><span class="literal">civil_twilight_end</span></dt>     <dd>      <span class="simpara">       The end of the civil dusk (zenith angle = 96°). It starts at       <span class="literal">sunset</span>.      </span>     </dd>              <dt><span class="literal">nautical_twilight_begin</span></dt>     <dd>      <span class="simpara">       The start of the nautical dawn (zenith angle = 102°). It ends at       <span class="literal">civil_twilight_begin</span>.      </span>     </dd>              <dt><span class="literal">nautical_twilight_end</span></dt>     <dd>      <span class="simpara">       The end of the nautical dusk (zenith angle = 102°). It starts at       <span class="literal">civil_twilight_end</span>.      </span>     </dd>              <dt><span class="literal">astronomical_twilight_begin</span></dt>     <dd>      <span class="simpara">       The start of the astronomical dawn (zenith angle = 108°). It ends at       <span class="literal">nautical_twilight_begin</span>.      </span>     </dd>              <dt><span class="literal">astronomical_twilight_end</span></dt>     <dd>      <span class="simpara">       The end of the astronomical dusk (zenith angle = 108°). It starts at       <span class="literal">nautical_twilight_end</span>.      </span>     </dd>        </dl>    <p class="para">    The values of the array elements are either UNIX timestamps, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if the   sun is below the respective zenith for the whole day, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the sun is   above the respective zenith for the whole day.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.date-sun-info-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>7.2.0</td>       <td>        The calculation was fixed with regards to local midnight instead of        local noon, which changes the results slightly.       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.date-sun-info-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2258">    <p><strong>示例 #1 A <span class="function"><strong>date_sun_info()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$sun_info </span><span style="color: #007700">= </span><span style="color: #9876AA">date_sun_info</span><span style="color: #007700">(</span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"2006-12-12"</span><span style="color: #007700">), </span><span style="color: #9876AA">31.7667</span><span style="color: #007700">, </span><span style="color: #9876AA">35.2333</span><span style="color: #007700">);<br>foreach (</span><span style="color: #9876AA">$sun_info </span><span style="color: #007700">as </span><span style="color: #9876AA">$key </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">$val</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">$key</span><span style="color: #DD0000">: " </span><span style="color: #007700">. </span><span style="color: #9876AA">date</span><span style="color: #007700">(</span><span style="color: #DD0000">"H:i:s"</span><span style="color: #007700">, </span><span style="color: #9876AA">$val</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">sunrise: 05:52:11<br>sunset: 15:41:21<br>transit: 10:46:46<br>civil_twilight_begin: 05:24:08<br>civil_twilight_end: 16:09:24<br>nautical_twilight_begin: 04:52:25<br>nautical_twilight_end: 16:41:06<br>astronomical_twilight_begin: 04:21:32<br>astronomical_twilight_end: 17:12:00</blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2259">    <p><strong>示例 #2 Polar night, with some processing</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$tz </span><span style="color: #007700">= new </span><span style="color: #9876AA">\DateTimeZone</span><span style="color: #007700">(</span><span style="color: #DD0000">'America/Anchorage'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$si </span><span style="color: #007700">= </span><span style="color: #9876AA">date_sun_info</span><span style="color: #007700">(</span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"2022-12-21"</span><span style="color: #007700">), </span><span style="color: #9876AA">70.21</span><span style="color: #007700">, -</span><span style="color: #9876AA">148.51</span><span style="color: #007700">);<br>foreach (</span><span style="color: #9876AA">$si </span><span style="color: #007700">as </span><span style="color: #9876AA">$key </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">$value</span><span style="color: #007700">) {<br>    echo<br>        match (</span><span style="color: #9876AA">$value</span><span style="color: #007700">) {<br>            </span><span style="color: #9876AA">true </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'always'</span><span style="color: #007700">,<br>            </span><span style="color: #9876AA">false </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'never'</span><span style="color: #007700">,<br>            default =&gt; </span><span style="color: #9876AA">date_create</span><span style="color: #007700">(</span><span style="color: #DD0000">"@</span><span style="color: #007700">{</span><span style="color: #9876AA">$value</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">)-&gt;</span><span style="color: #9876AA">setTimeZone</span><span style="color: #007700">(</span><span style="color: #9876AA">$tz</span><span style="color: #007700">)-&gt;</span><span style="color: #9876AA">format</span><span style="color: #007700">( </span><span style="color: #DD0000">'H:i:s T' </span><span style="color: #007700">),<br>        },<br>        </span><span style="color: #DD0000">": </span><span style="color: #007700">{</span><span style="color: #9876AA">$key</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">,<br>        </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">never: sunrise<br>never: sunset<br>12:52:18 AKST: transit<br>10:53:19 AKST: civil_twilight_begin<br>14:51:17 AKST: civil_twilight_end<br>09:01:47 AKST: nautical_twilight_begin<br>16:42:48 AKST: nautical_twilight_end<br>07:40:47 AKST: astronomical_twilight_begin<br>18:03:49 AKST: astronomical_twilight_end</blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2260">    <p><strong>示例 #3 Midnight sun (Tromsø, Norway)</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$si </span><span style="color: #007700">= </span><span style="color: #9876AA">date_sun_info</span><span style="color: #007700">(</span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">"2022-06-26"</span><span style="color: #007700">), </span><span style="color: #9876AA">69.68</span><span style="color: #007700">, </span><span style="color: #9876AA">18.94</span><span style="color: #007700">);<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">$si</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>    [sunrise] =&gt; 1<br>    [sunset] =&gt; 1<br>    [transit] =&gt; 1656240426<br>    [civil_twilight_begin] =&gt; 1<br>    [civil_twilight_end] =&gt; 1<br>    [nautical_twilight_begin] =&gt; 1<br>    [nautical_twilight_end] =&gt; 1<br>    [astronomical_twilight_begin] =&gt; 1<br>    [astronomical_twilight_end] =&gt; 1<br>)</blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2261">    <p><strong>示例 #4 Calculating length of day (Kyiv)</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>$si </span><span style="color: #007700">= </span><span style="color: #9876AA">date_sun_info</span><span style="color: #007700">(</span><span style="color: #9876AA">strtotime</span><span style="color: #007700">(</span><span style="color: #DD0000">'2022-08-26'</span><span style="color: #007700">), </span><span style="color: #9876AA">50.45</span><span style="color: #007700">, </span><span style="color: #9876AA">30.52</span><span style="color: #007700">);<br></span><span style="color: #9876AA">$diff </span><span style="color: #007700">= </span><span style="color: #9876AA">$si</span><span style="color: #007700">[</span><span style="color: #DD0000">'sunset'</span><span style="color: #007700">] - </span><span style="color: #9876AA">$si</span><span style="color: #007700">[</span><span style="color: #DD0000">'sunrise'</span><span style="color: #007700">];<br>echo </span><span style="color: #DD0000">"Length of day: "</span><span style="color: #007700">,<br>    </span><span style="color: #9876AA">floor</span><span style="color: #007700">(</span><span style="color: #9876AA">$diff </span><span style="color: #007700">/ </span><span style="color: #9876AA">3600</span><span style="color: #007700">), </span><span style="color: #DD0000">"h "</span><span style="color: #007700">,<br>    </span><span style="color: #9876AA">floor</span><span style="color: #007700">((</span><span style="color: #9876AA">$diff </span><span style="color: #007700">% </span><span style="color: #9876AA">3600</span><span style="color: #007700">) / </span><span style="color: #9876AA">60</span><span style="color: #007700">), </span><span style="color: #DD0000">"s\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例会输出：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Length of day: 13h 56s</blockquote></div>    </div>   </div>   </div></div>
*/
function date_sun_info(int $timestamp, float $latitude, float $longitude): array|false {}

// End of date v.5.3.2-0.dotdeb.1
