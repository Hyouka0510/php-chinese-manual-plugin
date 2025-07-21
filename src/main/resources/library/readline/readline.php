<?php

// Start of readline v.5.5.3-1ubuntu2.1
use JetBrains\PhpStorm\ArrayShape;

/**
* <div id="function.readline" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline</span> — <span class="dc-title">读取一行</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>readline</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$prompt</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   从用户端读取一行。必须使用 <span class="function">{@link readline_add_history()}</span> 将这一行添加到历史记录中。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">prompt</span></dt>     <dd>      <p class="para">       可以指定字符串来作为用户的提示信息。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   从用户端返回单个字符串。返回的行将会移除行尾换行符。   如果没有更多数据可读，则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.readline-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-759">    <p><strong>示例 #1 <span class="function"><strong>readline()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #FF8000">//get 3 commands from user<br></span><span style="color: #007700">for (</span><span style="color: #9876AA">$i</span><span style="color: #007700">=</span><span style="color: #9876AA">0</span><span style="color: #007700">; </span><span style="color: #9876AA">$i </span><span style="color: #007700">&lt; </span><span style="color: #9876AA">3</span><span style="color: #007700">; </span><span style="color: #9876AA">$i</span><span style="color: #007700">++) {<br>        </span><span style="color: #9876AA">$line </span><span style="color: #007700">= </span><span style="color: #9876AA">readline</span><span style="color: #007700">(</span><span style="color: #DD0000">"Command: "</span><span style="color: #007700">);<br>        </span><span style="color: #9876AA">readline_add_history</span><span style="color: #007700">(</span><span style="color: #9876AA">$line</span><span style="color: #007700">);<br>}<br><br></span><span style="color: #FF8000">//dump history<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">readline_list_history</span><span style="color: #007700">());<br><br></span><span style="color: #FF8000">//dump variables<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">readline_info</span><span style="color: #007700">());<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div></div>
*
 * Reads a line
 * @link https://php.net/manual/zh/function.readline.php
 * @param string|null $prompt [optional] <p>
 * You may specify a string with which to prompt the user.
 * </p>
 * @return string|false a single string from the user. The line returned has the ending newline removed.
 * If there is no more data to read, then FALSE is returned.
 
*/
function readline(?string $prompt): string|false {}

/**
 * Gets/sets various internal readline variables
 * @link https://php.net/manual/en/function.readline-info.php
 * @param string|null $var_name [optional] <p>
 * A variable name.
 * </p>
 * @param string $value [optional] <p>
 * If provided, this will be the new value of the setting.
 * </p>
 * @return mixed If called with no parameters, this function returns an array of
 * values for all the setting readline uses. The elements will
 * be indexed by the following values: done, end, erase_empty_line,
 * library_version, line_buffer, mark, pending_input, point, prompt,
 * readline_name, and terminal_name.
 * </p>
 * <p>
 * If called with one or two parameters, the old value is returned.
 */
#[ArrayShape([
    'line_buffer' => 'string',
    'point' => 'int',
    'end' => 'int',
    'mark' => 'int',
    'done' => 'int',
    'pending_input' => 'int',
    'prompt' => 'string',
    'terminal_name' => 'string',
    'completion_append_character' => 'string',
    'completion_suppress_append' => 'bool',
    'erase_empty_line' => 'int',
    'library_version' => 'string',
    'readline_name' => 'string',
    'attempted_completion_over' => 'int',
])]
/**
* <div id="function.readline-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_info</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_info</span> — <span class="dc-title">获取/设置各种 readline 内部变量</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>readline_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$var_name</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">null</a></span></span> <span class="parameter" style="color:#3A95FF">$value</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   获取/设置各种 readline 内部变量。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-info-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">var_name</span></dt>     <dd>      <p class="para">       变量名。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">value</span></dt>     <dd>      <p class="para">       如果提供，将是设置的新值。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果调用时没有参数，此函数将返回 readline 使用的所有设置的值组成的数组。元素将按照以下值进行索引   <span class="literal">done</span>、<span class="literal">end</span>、<span class="literal">erase_empty_line</span>、<span class="literal">library_version</span>、<span class="literal">line_buffer</span>、<span class="literal">mark</span>、<span class="literal">pending_input</span>、<span class="literal">point</span>、<span class="literal">prompt</span>、<span class="literal">readline_name</span>、和 <span class="literal">terminal_name</span>。   <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> 仅包含库用于编译 readline 扩展支持的元素。  </p>  <p class="para">   如果使用一个或两个参数调用，则返回原来的值。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.readline-info-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">var_name</span> 和 <span class="parameter" style="color:#3A95FF">value</span> 现在可为 null。      </td>     </tr>    </tbody>     </table> </div></div>
*/
function readline_info(?string $var_name, $value): mixed {}

/**
* <div id="function.readline-add-history" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_add_history</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_add_history</span> — <span class="dc-title">添加一行到历史</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-add-history-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>readline_add_history</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$prompt</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type true" style="color:#EAB766">true</a></span></div>  <p class="para rdfs-comment">   此函数添加一行到命令行历史。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-add-history-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">prompt</span></dt>     <dd>      <p class="para">       添加到历史中的行。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-add-history-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   总是返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>。  </p> </div></div>
*
 * Adds a line to the history
 * @link https://php.net/manual/zh/function.readline-add-history.php
 * @param string $prompt <p>
 * The line to be added in the history.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function readline_add_history(string $prompt): bool {}

/**
* <div id="function.readline-clear-history" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_clear_history</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_clear_history</span> — <span class="dc-title">清除历史</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-clear-history-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>readline_clear_history</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type true" style="color:#EAB766">true</a></span></div>  <p class="para rdfs-comment">   这个函数清除全部的命令行历史。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-clear-history-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-clear-history-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   总是返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>。  </p> </div></div>
*
 * Clears the history
 * @link https://php.net/manual/zh/function.readline-clear-history.php
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function readline_clear_history(): bool {}

/**
* <div id="function.readline-list-history" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_list_history</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_list_history</span> — <span class="dc-title">获取历史</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-list-history-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>readline_list_history</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   获取完整命令行历史。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-list-history-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-list-history-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回完整命令行历史的数组。元素的索引为整数，从零开始。  </p> </div></div>
*
 * Lists the history
 * @link https://php.net/manual/zh/function.readline-list-history.php
 * @return array an array of the entire command line history. The elements are
 * indexed by integers starting at zero.
 
*/
function readline_list_history(): array {}

/**
* <div id="function.readline-read-history" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_read_history</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_read_history</span> — <span class="dc-title">读取历史</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-read-history-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>readline_read_history</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$filename</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   这个函数从文件中读取命令历史。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-read-history-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>     <dd>      <p class="para">       包含命令行历史的文件路径。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-read-history-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.readline-read-history-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">filename</span> 现在可为 null。      </td>     </tr>    </tbody>     </table> </div></div>
*
 * Reads the history
 * @link https://php.net/manual/zh/function.readline-read-history.php
 * @param string|null $filename [optional] <p>
 * Path to the filename containing the command history.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function readline_read_history(?string $filename): bool {}

/**
* <div id="function.readline-write-history" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_write_history</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_write_history</span> — <span class="dc-title">写入历史记录</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-write-history-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>readline_write_history</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">$filename</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   这个函数将命令历史写入到文件。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-write-history-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>     <dd>      <p class="para">       保存文件的路径.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-write-history-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.readline-write-history-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       <span class="parameter" style="color:#3A95FF">filename</span> 现在可为 null。      </td>     </tr>    </tbody>     </table> </div></div>
*
 * Writes the history
 * @link https://php.net/manual/zh/function.readline-write-history.php
 * @param string|null $filename [optional] <p>
 * Path to the saved file.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function readline_write_history(?string $filename): bool {}

/**
* <div id="function.readline-completion-function" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_completion_function</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_completion_function</span> — <span class="dc-title">注册完成函数</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-completion-function-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>readline_completion_function</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">$callback</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   这个函数注册完成函数。这与在使用 Bash 时按下 Tab 键将获得的功能相同。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-completion-function-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">callback</span></dt>     <dd>      <p class="para">       必须提供现有的函数名，该函数接受部分命令行并返回可能的匹配项数组。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-completion-function-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
*
 * Registers a completion function
 * @link https://php.net/manual/zh/function.readline-completion-function.php
 * @param callable $callback <p>
 * You must supply the name of an existing function which accepts a
 * partial command line and returns an array of possible matches.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function readline_completion_function(callable $callback): bool {}

/**
* <div id="function.readline-callback-handler-install" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_callback_handler_install</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_callback_handler_install</span> — <span class="dc-title">初始化 readline 回调接口和终端，然后打印提示并立即返回</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-callback-handler-install-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>readline_callback_handler_install</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$prompt</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.callable.php" class="type callable" style="color:#EAB766">callable</a></span> <span class="parameter" style="color:#3A95FF">$callback</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type true" style="color:#EAB766">true</a></span></div>  <p class="para rdfs-comment">   设置 readline 回调接口然后打印 <span class="parameter" style="color:#3A95FF">prompt</span>   并立即返回。在不移除旧的回调接口的情况下再次调用此函数，将自动覆盖旧接口。  </p>  <p class="para">   与 <span class="function">{@link stream_select()}</span> 结合使用时，回调功能很有用，因为允许   IO 和用户输入交互，这与 <span class="function">{@link readline()}</span> 不同。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-callback-handler-install-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">prompt</span></dt>     <dd>      <p class="para">       提示信息。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">callback</span></dt>     <dd>      <p class="para">       <span class="parameter" style="color:#3A95FF">callback</span> 函数接受一个参数；返回用户输入。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-callback-handler-install-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   总是返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.readline-callback-handler-install-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-760">    <p><strong>示例 #1 Readline 回调接口示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">function </span><span style="color: #9876AA">rl_callback</span><span style="color: #007700">(</span><span style="color: #9876AA">$ret</span><span style="color: #007700">)<br>{<br>    global </span><span style="color: #9876AA">$c</span><span style="color: #007700">, </span><span style="color: #9876AA">$prompting</span><span style="color: #007700">;<br><br>    echo </span><span style="color: #DD0000">"You entered: </span><span style="color: #9876AA">$ret</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br>    </span><span style="color: #9876AA">$c</span><span style="color: #007700">++;<br><br>    if (</span><span style="color: #9876AA">$c </span><span style="color: #007700">&gt; </span><span style="color: #9876AA">10</span><span style="color: #007700">) {<br>        </span><span style="color: #9876AA">$prompting </span><span style="color: #007700">= </span><span style="color: #9876AA">false</span><span style="color: #007700">;<br>        </span><span style="color: #9876AA">readline_callback_handler_remove</span><span style="color: #007700">();<br>    } else {<br>        </span><span style="color: #9876AA">readline_callback_handler_install</span><span style="color: #007700">(</span><span style="color: #DD0000">"[</span><span style="color: #9876AA">$c</span><span style="color: #DD0000">] Enter something: "</span><span style="color: #007700">, </span><span style="color: #DD0000">'rl_callback'</span><span style="color: #007700">);<br>    }<br>}<br><br></span><span style="color: #9876AA">$c </span><span style="color: #007700">= </span><span style="color: #9876AA">1</span><span style="color: #007700">;<br></span><span style="color: #9876AA">$prompting </span><span style="color: #007700">= </span><span style="color: #9876AA">true</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">readline_callback_handler_install</span><span style="color: #007700">(</span><span style="color: #DD0000">"[</span><span style="color: #9876AA">$c</span><span style="color: #DD0000">] Enter something: "</span><span style="color: #007700">, </span><span style="color: #DD0000">'rl_callback'</span><span style="color: #007700">);<br><br>while (</span><span style="color: #9876AA">$prompting</span><span style="color: #007700">) {<br>    </span><span style="color: #9876AA">$w </span><span style="color: #007700">= </span><span style="color: #9876AA">NULL</span><span style="color: #007700">;<br>    </span><span style="color: #9876AA">$e </span><span style="color: #007700">= </span><span style="color: #9876AA">NULL</span><span style="color: #007700">;<br>    </span><span style="color: #9876AA">$n </span><span style="color: #007700">= </span><span style="color: #9876AA">stream_select</span><span style="color: #007700">(</span><span style="color: #9876AA">$r </span><span style="color: #007700">= array(</span><span style="color: #9876AA">STDIN</span><span style="color: #007700">), </span><span style="color: #9876AA">$w</span><span style="color: #007700">, </span><span style="color: #9876AA">$e</span><span style="color: #007700">, </span><span style="color: #9876AA">null</span><span style="color: #007700">);<br>    if (</span><span style="color: #9876AA">$n </span><span style="color: #007700">&amp;&amp; </span><span style="color: #9876AA">in_array</span><span style="color: #007700">(</span><span style="color: #9876AA">STDIN</span><span style="color: #007700">, </span><span style="color: #9876AA">$r</span><span style="color: #007700">)) {<br>        </span><span style="color: #FF8000">// read a character, will call the callback when a newline is entered<br>        </span><span style="color: #9876AA">readline_callback_read_char</span><span style="color: #007700">();<br>    }<br>}<br><br>echo </span><span style="color: #DD0000">"Prompting disabled. All done.\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.readline-callback-handler-install-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link readline_callback_handler_remove()} - 移除之前已安装的回调函数句柄并且恢复终端设置</span></li>    <li><span class="function">{@link readline_callback_read_char()} - 当一个行被接收时读取一个字符并且通知 readline 回调接口</span></li>    <li><span class="function">{@link stream_select()} - Runs the equivalent of the select() system call on the given   arrays of streams with a timeout specified by seconds and microseconds</span></li>   </ul>   </div></div>
*
 * Initializes the readline callback interface and terminal, prints the prompt and returns immediately
 * @link https://php.net/manual/zh/function.readline-callback-handler-install.php
 * @param string $prompt <p>
 * The prompt message.
 * </p>
 * @param callable $callback <p>
 * The <i>callback</i> function takes one parameter; the
 * user input returned.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 
*/
function readline_callback_handler_install(string $prompt, callable $callback): bool {}

/**
* <div id="function.readline-callback-read-char" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_callback_read_char</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_callback_read_char</span> — <span class="dc-title">当一个行被接收时读取一个字符并且通知 readline 回调接口</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-callback-read-char-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>readline_callback_read_char</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   读取用户输入中的一个字符。当一行被接收时，这个函数将通知使用   <span class="function">{@link readline_callback_handler_install()}</span> 安装的 readline 回调接口，并且   这一个行已经准备输入。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-callback-read-char-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-callback-read-char-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.readline-callback-read-char-examples">  <h3 class="title">示例</h3>  <p class="para">   有关如何使用 readline 回调接口的示例，参见 <span class="function">{@link readline_callback_handler_install()}</span>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.readline-callback-read-char-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link readline_callback_handler_install()} - 初始化 readline 回调接口和终端，然后打印提示并立即返回</span></li>    <li><span class="function">{@link readline_callback_handler_remove()} - 移除之前已安装的回调函数句柄并且恢复终端设置</span></li>   </ul>   </div></div>
*
 * Reads a character and informs the readline callback interface when a line is received
 * @link https://php.net/manual/zh/function.readline-callback-read-char.php
 * @return void No value is returned.
 
*/
function readline_callback_read_char(): void {}

/**
* <div id="function.readline-callback-handler-remove" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_callback_handler_remove</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_callback_handler_remove</span> — <span class="dc-title">移除之前已安装的回调函数句柄并且恢复终端设置</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-callback-handler-remove-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>readline_callback_handler_remove</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   移除之前已安装的回调句柄并且恢复终端设置。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-callback-handler-remove-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div>  <div class="refsect1 returnvalues" id="refsect1-function.readline-callback-handler-remove-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果移除了之前已安装的回调句柄，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> 或者如果没有找到的话返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.readline-callback-handler-remove-examples">  <h3 class="title">示例</h3>  <p class="para">   有关如何使用 readline 回调接口的示例，参见 <span class="function">{@link readline_callback_handler_install()}</span>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.readline-callback-handler-remove-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link readline_callback_handler_install()} - 初始化 readline 回调接口和终端，然后打印提示并立即返回</span></li>    <li><span class="function">{@link readline_callback_read_char()} - 当一个行被接收时读取一个字符并且通知 readline 回调接口</span></li>   </ul>   </div></div>
*
 * Removes a previously installed callback handler and restores terminal settings
 * @link https://php.net/manual/zh/function.readline-callback-handler-remove.php
 * @return bool <b>TRUE</b> if a previously installed callback handler was removed, or
 * <b>FALSE</b> if one could not be found.
 
*/
function readline_callback_handler_remove(): bool {}

/**
* <div id="function.readline-redisplay" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_redisplay</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_redisplay</span> — <span class="dc-title">重绘显示区</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-redisplay-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>readline_redisplay</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   readline 重绘用于重绘显示区。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-redisplay-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-redisplay-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div></div>
*
 * Redraws the display
 * @link https://php.net/manual/zh/function.readline-redisplay.php
 * @return void No value is returned.
 
*/
function readline_redisplay(): void {}

/**
* <div id="function.readline-on-new-line" class="refentry"> <div class="refnamediv">  <h1 class="refname">readline_on_new_line</h1>  <p class="verinfo">(PHP 5 &gt;= 5.1.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">readline_on_new_line</span> — <span class="dc-title">通知 readline 将光标移动到新行</span></p> </div>  <div class="refsect1 description" id="refsect1-function.readline-on-new-line-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>readline_on_new_line</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   告诉 readline 将光标移动到新行。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.readline-on-new-line-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.readline-on-new-line-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 notes" id="refsect1-function.readline-on-new-line-notes">  <h3 class="title">注释</h3>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    此函数仅在底层 readline 库支持时可用。不支持 Windows。   </p>  </blockquote> </div></div>
*
 * Inform readline that the cursor has moved to a new line
 * @link https://php.net/manual/zh/function.readline-on-new-line.php
 * @return void No value is returned.
 
*/
function readline_on_new_line(): void {}

/**
* <span class="simpara">     The library which is used for readline support; currently either     <code class="literal">readline</code> or <code class="literal">libedit</code>.    </span>
*/
define('READLINE_LIB', "readline");

// End of readline v.5.5.3-1ubuntu2.1
