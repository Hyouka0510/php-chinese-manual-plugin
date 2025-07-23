<?php
/**
 * Stubs for PECL/rrd extension
 * Description taken from official documenation
 * @link     https://php.net/manual/en/book.rrd.php
 * @author   Olegs Capligins <shader@dautkom.lv>
 */

// start of PECL/rrd v1.0

/**
 * <div id="function.rrd-error" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_error</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_error</span> — <span class="dc-title">获取最新的错误信息</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-error-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrd_error</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   获取 rrd 全局最新的错误信息。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-error-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-error-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   最新的错误信息。  </p> </div></div>
 * 
 * Gets latest error message
 * @link https://php.net/manual/zh/function.rrd-error.php
 * @return string Latest error message.
 * @since PECL rrd >= 0.9.0
 */
function rrd_error() {}

/**
 * <div id="function.rrd-create" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_create</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_create</span> — <span class="dc-title">创建 rrd 数据库文件</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-create-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrd_create</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   创建 rrd 数据库文件。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-create-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>    <dd>     <p class="para">      新创建的 rrd 文件名。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <p class="para">      rrd 创建选项 - 字符串列表。全部列表项请参阅创建 rrd 的手册页。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-create-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Creates rrd database file
 * @link https://php.net/manual/zh/function.rrd-create.php
 * @param string $filename <p>
 * Filename for newly created rrd file.
 * </p>
 * @param array $options <p>
 * Options for rrd create - list of strings. See man page of rrd create for whole list of options.
 * </p>
 * @return bool TRUE on success or FALSE on failure.
 * @since PECL rrd >= 0.9.0
 */
function rrd_create($filename, $options) {}

/**
 * <div id="function.rrd-fetch" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_fetch</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_fetch</span> — <span class="dc-title">获取图表数据数组</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-fetch-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>rrd_fetch</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   从 RRD 数据库文件获取图表输出的数据数组。此函数与 <span class="function">{@link rrd_graph()}</span>    结果相同，但仅返回数据数组，不会生成图像文件。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-fetch-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>    <dd>     <p class="para">      RRD 数据库文件名。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <p class="para">      数据间隔规范的数组选项。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-fetch-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回检索到的相关图形信息数据。  </p> </div></div>
 * 
 * Gets data for graph output from RRD database file as array. This function has same result as rrd_graph(), but fetched data are returned as array, no image file is created.
 * @link https://php.net/manual/zh/function.rrd-fetch.php
 * @param string $file <p>
 * RRD database file name.
 * </p>
 * @param array $options <p>
 * Array of options for resolution specification.
 * </p>
 * @return array Array with information about retrieved graph data.
 * @since PECL rrd >= 0.9.0
 */
function rrd_fetch($file, $options) {}

/**
 * <div id="function.rrd-first" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_first</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_first</span> — <span class="dc-title">从 rrd 文件中获取第一个样本的时间戳</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-first-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrd_first</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$file</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$raaindex</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   从 RRD 文件中指定的 RRA 返回第一个数据样本。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-first-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">file</span></dt>    <dd>     <p class="para">      RRD 数据库文件名。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">raaindex</span></dt>    <dd>     <p class="para">      要检索的 RRA 索引。默认值为 0。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-first-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Unix 时间戳整数， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Gets the timestamp of the first sample from from the specified RRA of the RRD file.
 * @link https://php.net/manual/zh/function.rrd-first.php
 * @param string $file <p>
 * RRD database file name.
 * </p>
 * @param int $raaindex <p>
 * The index number of the RRA that is to be examined. Default value is 0.
 * </p>
 * @return int|false Integer as unix timestamp, FALSE if some error occurs.
 * @since PECL rrd >= 0.9.0
 */
function rrd_first($file, $raaindex = 0) {}

/**
 * <div id="function.rrd-graph" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_graph</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_graph</span> — <span class="dc-title">从数据创建图像</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-graph-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrd_graph</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   从 RRD 文件的详细数据创建图像。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-graph-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>    <dd>     <p class="para">      输出的图表文件名。根据输出的格式，文件通常是 <span class="literal">.png</span>、<span class="literal">.svg</span>       或 <span class="literal">.eps</span> 格式。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <p class="para">      生成图像的选项。请参阅 rrd graph 手册以获取所有可用选项。允许使用所有选项（数据定义、变量定义等）。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-graph-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回包含生成图像信息的数组， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Creates image from a data.
 * @link https://php.net/manual/zh/function.rrd-graph.php
 * @param string $file <p>
 * The filename to output the graph to. This will generally end in either .png, .svg or .eps, depending on the format you want to output.
 * </p>
 * @param array $options <p>
 * Options for generating image. See man page of rrd graph for all possible options. All options (data definitions, variable definitions, etc.) are allowed.
 * </p>
 * @return array|false If image is created successfully an array with information about generated image is returned, FALSE when error occurs.
 * @since PECL rrd >= 0.9.0
 */
function rrd_graph($file, $options) {}

/**
 * <div id="function.rrd-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_info</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_info</span> — <span class="dc-title">获取 rrd 文件有关信息</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrd_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   返回有关 RRD 数据库文件的特定信息。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-info-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">file</span></dt>    <dd>     <p class="para">      RRD 数据库文件名。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   有关请求的 RRD 文件的信息数组， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Returns information about particular RRD database file.
 * @link https://php.net/manual/zh/function.rrd-info.php
 * @param string $file <p>
 * RRD database file name.
 * </p>
 * @return array|false Array with information about requsted RRD file, FALSE when error occurs.
 * @since PECL rrd >= 0.9.0
 */
function rrd_info($file) {}

/**
 * <div id="function.rrd-last" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_last</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_last</span> — <span class="dc-title">获取最后一个样本的 Unix 时间戳</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-last-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrd_last</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   返回 RRD 数据库最近更新的 UNIX 时间戳。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-last-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>    <dd>     <p class="para">      RRD 数据库文件名。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-last-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   RRD 数据库中最新的整数 Unix 时间戳。  </p> </div></div>
 * 
 * Returns the UNIX timestamp of the most recent update of the RRD database.
 * @link https://php.net/manual/zh/function.rrd-last.php
 * @param string $file <p>
 * RRD database file name.
 * </p>
 * @return int Integer as unix timestamp of the most recent data from the RRD database.
 * @since PECL rrd >= 0.9.0
 */
function rrd_last($file) {}

/**
 * <div id="function.rrd-lastupdate" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_lastupdate</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_lastupdate</span> — <span class="dc-title">获取有关上次更新数据的信息</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-lastupdate-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrd_lastupdate</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   从最近更新的 RRD 数据库文件中获取每个日期存储的 UNIX 时间戳和值的数组。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-lastupdate-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">file</span></dt>    <dd>     <p class="para">      RRD 数据库文件名。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-lastupdate-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   最后更新的信息数组， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Gets array of the UNIX timestamp and the values stored for each date in the most recent update of the RRD database file.
 * @link https://php.net/manual/zh/function.rrd-lastupdate.php
 * @param string $file <p>
 * RRD database file name.
 * </p>
 * @return array|false Array of information about last update, FALSE when error occurs.
 * @since PECL rrd >= 0.9.0
 */
function rrd_lastupdate($file) {}

/**
 * <div id="function.rrd-restore" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_restore</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_restore</span> — <span class="dc-title">从 XML 转储中恢复 RRD 文件</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-restore-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrd_restore</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$xml_file</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$rrd_file</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">    从 XML 存储中恢复 RRD 文件。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-restore-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">xml_file</span></dt>    <dd>     <p class="para">      带有原始 RRD 数据库文件转储的 XML 文件名。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">rrd_file</span></dt>    <dd>     <p class="para">      要恢复的 RRD 数据库文件名称。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <p class="para">      恢复的选项数组。详情见 rrd restore 手册页。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-restore-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Restores the RRD file from the XML dump.
 * @link https://php.net/manual/zh/function.rrd-restore.php
 * @param string $xml_file <p>
 * XML filename with the dump of the original RRD database file.
 * </p>
 * @param string $rrd_file <p>
 * Restored RRD database file name.
 * </p>
 * @param array $options <p>
 * Array of options for restoring. See man page for rrd restore.
 * </p>
 * @return bool Returns TRUE on success, FALSE otherwise.
 * @since PECL rrd >= 0.9.0
 */
function rrd_restore($xml_file, $rrd_file, $options = []) {}

/**
 * <div id="function.rrd-tune" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_tune</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_tune</span> — <span class="dc-title">调整 RRD 数据库文件头选项</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-tune-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrd_tune</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   更改 RRD 数据库头文件中的一些选项，例如：重命名数据源等。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-tune-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>    <dd>     <p class="para">      RRD 数据库文件名。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <p class="para">      要修改的 RRD 数据库文件属性选项。请参阅 rrd tune 手册页获取详细信息。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-tune-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Change some options in the RRD dabase header file. E.g. renames the source for the data etc.
 * @link https://php.net/manual/zh/function.rrd-tune.php
 * @param string $file <p>
 * RRD database file name.
 * </p>
 * @param array $options <p>
 * Options with RRD database file properties which will be changed. See rrd tune man page for details.
 * </p>
 * @return bool Returns TRUE on success, FALSE otherwise.
 * @since PECL rrd >= 0.9.0
 */
function rrd_tune($file, $options) {}

/**
 * <div id="function.rrd-update" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_update</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_update</span> — <span class="dc-title">更新 RRD 数据库</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-update-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrd_update</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   更新 RRD 数据库文件。输入数据根据 RRD 数据库文件属性进行时间对齐。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-update-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>    <dd>     <p class="para">      RRD 数据库文件名。要更新的数据库。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <p class="para">      更新 RRD 数据库的可选项。是一个字符串列表。查看 rrd update 的 man 页面以获取完整的选项列表。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-update-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Updates the RRD database file. The input data is time interpolated according to the properties of the RRD database file.
 * @link https://php.net/manual/zh/function.rrd-update.php
 * @param string $file <p>
 * RRD database file name. This database will be updated.
 * </p>
 * @param array $options <p>
 * Options for updating the RRD database. This is list of strings. See man page of rrd update for whole list of options.
 * </p>
 * @return bool Updates the RRD database file. The input data is time interpolated according to the properties of the RRD database file.
 * @since PECL rrd >= 0.9.0
 */
function rrd_update($file, $options) {}

/**
 * <div id="function.rrd-version" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_version</h1>  <p class="verinfo">(PECL rrd &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">rrd_version</span> — <span class="dc-title">获取底层 rrdtool 库的相关信息</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-version-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrd_version</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   返回底层 rrdtool 的相关信息。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-version-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-version-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   rrdtool 版本的字符串版本号。例如：“1.4.3”。  </p> </div></div>
 * 
 * Returns information about underlying rrdtool library.
 * @link https://php.net/manual/zh/function.rrd-version.php
 * @return string String with rrdtool version number e.g. "1.4.3".
 * @since PECL rrd >= 1.0.0
 */
function rrd_version() {}

/**
 * <div id="function.rrd-xport" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrd_xport</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">rrd_xport</span> — <span class="dc-title">导出 RRD 数据库的相关信息</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrd-xport-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>rrd_xport</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   导出 RRD 数据库文件的相关信息。这些数据可以通过用户空间的 PHP 脚本转换为 XML 文件，然后再恢复为 RRD 数据库文件。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrd-xport-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <p class="para">      导出的数组选项，可以通过 rrd xport 手册查看。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrd-xport-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   有关 RRD 数据库文件信息的数组， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
 * Exports the information about RRD database file. This data can be converted to XML file via user space PHP script and then restored back as RRD database file.
 * @link https://php.net/manual/zh/function.rrd-xport.php
 * @param array $options <p>
 * Array of options for the export, see rrd xport man page.
 * </p>
 * @return array|false Array with information about RRD database file, FALSE when error occurs.
 * @since PECL rrd >= 0.9.0
 */
function rrd_xport($options) {}

/**
 * Close any outstanding connection to rrd caching daemon <p>
 * This function is automatically called when the whole PHP process is terminated. It depends on used SAPI. For example, it's called automatically at the end of command line script.</p><p>
 * It's up user whether he wants to call this function at the end of every request or otherwise.</p>
 * @link https://php.net/manual/en/function.rrdc-disconnect.php
 * @return void
 * @since PECL rrd >= 1.1.2
 */
function rrd_disconnect() {}

/**
 * <div id="function.rrdc-disconnect" class="refentry"> <div class="refnamediv">  <h1 class="refname">rrdc_disconnect</h1>  <p class="verinfo">(PECL rrd &gt;= 1.1.2)</p><p class="refpurpose"><span class="refname">rrdc_disconnect</span> — <span class="dc-title">关闭所有未完成的 rrd 缓存守护进程连接</span></p> </div> <div class="refsect1 description" id="refsect1-function.rrdc-disconnect-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rrdc_disconnect</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   关闭所有未完成的 rrd 缓存守护进程的连接。  </p>  <p class="para">   此函数会在 PHP 进程终止时自动调用。调用时机取决于使用的 SAPI。例如，会在命令行脚本结束时自动调用。  </p>  <p class="para">   用户可以自己决定是否在每次请求结束时调用此函数。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rrdc-disconnect-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.rrdc-disconnect-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">  没有返回值。  </p> </div></div>
 * 
 * Close any outstanding connection to rrd caching daemon.
 * This function is automatically called when the whole PHP process is terminated. It depends on used SAPI.
 * For example, it's called automatically at the end of command line script.
 * It's up user whether he wants to call this function at the end of every request or otherwise.
 */
function rrdc_disconnect() {}

/**
 * <div id="class.rrdcreator" class="reference"> <h1 class="title">The RRDCreator class</h1>  <div class="partintro"><p class="verinfo">(PECL rrd &gt;= 0.9.0)</p>  <div class="section" id="rrdcreator.intro">   <h2 class="title">简介</h2>   <p class="para">    Class for creation of RRD database file.   </p>  </div>  <div class="section" id="rrdcreator.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">RRDCreator</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/rrdcreator.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$startTime</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$step</span><span class="initializer"> = 0</span></span>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/rrdcreator.addarchive.php" class="methodname" style="color:#CC7832">addArchive</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$description</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/rrdcreator.adddatasource.php" class="methodname" style="color:#CC7832">addDataSource</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$description</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/rrdcreator.save.php" class="methodname" style="color:#CC7832">save</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link RRDCreator::addArchive} — Adds RRA - archive of data values for each data source</li><li>{@link RRDCreator::addDataSource} — Adds data source definition for RRD database</li><li>{@link RRDCreator::__construct} — Creates new RRDCreator instance</li><li>{@link RRDCreator::save} — Saves the RRD database to a file</li></ul></div>
 * 
 * Class for creation of RRD database file.
 * @link https://php.net/manual/zh/class.rrdcreator.php
 * @since PECL rrd >= 0.9.0
 */
class RRDCreator
{
    /**
 * <div id="rrdcreator.addarchive" class="refentry"> <div class="refnamediv">  <h1 class="refname">RRDCreator::addArchive</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">RRDCreator::addArchive</span> — <span class="dc-title">Adds RRA - archive of data values for each data source</span></p> </div> <div class="refsect1 description" id="refsect1-rrdcreator.addarchive-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>RRDCreator::addArchive</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$description</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   Adds RRA definition by description of archive. Archive consists  of a   number of data values or statistics for each of the defined data-sources (DS).   Data sources are defined by method <span class="methodname" style="color:#CC7832">{@link RRDCreator::addDataSource()}</span>.   You need call this method for each requested archive.  </p> </div> <div class="refsect1 parameters" id="refsect1-rrdcreator.addarchive-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">description</span></dt>    <dd>     <p class="para">      Definition of archive - RRA. This has same format as RRA definition in      rrd create command. See man page of rrd create for more details.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-rrdcreator.addarchive-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div></div>
 * 
     * Adds RRA - archive of data values for each data source. <p>
     * Archive consists of a number of data values or statistics for each of the defined data-sources (DS). Data sources are defined by method RRDCreator::addDataSource(). You need call this method for each requested archive.
     * </p>
     * @link https://php.net/manual/zh/rrdcreator.addarchive.php
     * @see RRDCreator::addDataSource()
     * @param string $description <p>
     * Class for creation of RRD database file.
     * </p>
     * @return void
     * @since PECL rrd >= 0.9.0
     */
    public function addArchive($description) {}

    /**
 * <div id="rrdcreator.adddatasource" class="refentry"> <div class="refnamediv">  <h1 class="refname">RRDCreator::addDataSource</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">RRDCreator::addDataSource</span> — <span class="dc-title">Adds data source definition for RRD database</span></p> </div> <div class="refsect1 description" id="refsect1-rrdcreator.adddatasource-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>RRDCreator::addDataSource</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$description</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   RRD can accept input from several data sources (DS), e.g incoming and outgoing   traffic. This method adds data source by description. You need call   this method for each data source.  </p> </div> <div class="refsect1 parameters" id="refsect1-rrdcreator.adddatasource-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">description</span></dt>    <dd>     <p class="para">      Definition of data source - DS. This has same format as DS definition in      rrd create command. See man page of rrd create for more details.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-rrdcreator.adddatasource-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div></div>
 * 
     * Adds data source definition for RRD database.<p>
     * RRD can accept input from several data sources (DS), e.g incoming and outgoing traffic. This method adds data source by description. You need call this method for each data source.
     * </p>
     * @link https://php.net/manual/zh/rrdcreator.adddatasource.php
     * @param string $description <p>
     * Definition of data source - DS. This has same format as DS definition in rrd create command. See man page of rrd create for more details.
     * </p>
     * @return void
     * @since PECL rrd >= 0.9.0
     */
    public function addDataSource($description) {}

    /**
     * Creates new RRDCreator instance.
     * @link https://php.net/manual/en/rrdcreator.construct.php
     * @param string $path <p>
     * Path for newly created RRD database file.
     * </p>
     * @param string $startTime <p>
     * Time for the first value in RRD database. Parameter supports all formats which are supported by rrd create call.
     * </p>
     * @param int $step <p>
     * Base interval in seconds with which data will be fed into the RRD database.
     * </p>
     * @since PECL rrd >= 0.9.0
     */
    public function __construct($path, $startTime = '', $step = 0) {}

    /**
 * <div id="rrdcreator.save" class="refentry"> <div class="refnamediv">  <h1 class="refname">RRDCreator::save</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">RRDCreator::save</span> — <span class="dc-title">Saves the RRD database to a file</span></p> </div> <div class="refsect1 description" id="refsect1-rrdcreator.save-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>RRDCreator::save</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Saves the RRD database into file, which name is defined by <span class="methodname" style="color:#CC7832">{@link RRDCreator::__construct()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-rrdcreator.save-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-rrdcreator.save-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div></div>
 * 
     * Saves the RRD database into file, which name is defined by RRDCreator::__construct()
     * @link https://php.net/manual/zh/rrdcreator.save.php
     * @see RRDCreator::__construct()
     * @return bool TRUE on success or FALSE on failure.
     * @since PECL rrd >= 0.9.0
     */
    public function save() {}
}

/**
 * <div id="class.rrdgraph" class="reference"> <h1 class="title">The RRDGraph class</h1>  <div class="partintro"><p class="verinfo">(PECL rrd &gt;= 0.9.0)</p>  <div class="section" id="rrdgraph.intro">   <h2 class="title">简介</h2>   <p class="para">    Class for exporting data from RRD database to image file.   </p>  </div>  <div class="section" id="rrdgraph.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">RRDGraph</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/rrdgraph.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$path</span></span>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/rrdgraph.save.php" class="methodname" style="color:#CC7832">save</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/rrdgraph.saveverbose.php" class="methodname" style="color:#CC7832">saveVerbose</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/rrdgraph.setoptions.php" class="methodname" style="color:#CC7832">setOptions</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link RRDGraph::__construct} — Creates new RRDGraph instance</li><li>{@link RRDGraph::save} — Saves the result of query into image</li><li>{@link RRDGraph::saveVerbose} — Saves the RRD database query into image and returns the verbose   information about generated graph</li><li>{@link RRDGraph::setOptions} — Sets the options for rrd graph export</li></ul></div>
 * 
 * Class for exporting data from RRD database to image file.
 * @link https://php.net/manual/zh/class.rrdgraph.php
 * @since PECL rrd >= 0.9.0
 */
class RRDGraph
{
    /**
     * Creates new RRDGraph instance. This instance is responsible for rendering the result of RRD database query into image.
     * @link https://php.net/manual/en/rrdgraph.construct.php
     * @param string $path <p>
     * Full path for the newly created image.
     * </p>
     * @since PECL rrd >= 0.9.0
     */
    public function __construct($path) {}

    /**
 * <div id="rrdgraph.save" class="refentry"> <div class="refnamediv">  <h1 class="refname">RRDGraph::save</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">RRDGraph::save</span> — <span class="dc-title">Saves the result of query into image</span></p> </div> <div class="refsect1 description" id="refsect1-rrdgraph.save-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>RRDGraph::save</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Saves the result of RRD database query into image defined by   <span class="methodname" style="color:#CC7832">{@link RRDGraph::__construct()}</span>.  </p> </div> <div class="refsect1 parameters" id="refsect1-rrdgraph.save-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-rrdgraph.save-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns array with information about generated image, 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div></div>
 * 
     * Saves the result of RRD database query into image defined by RRDGraph::__construct().
     * @link https://php.net/manual/zh/rrdgraph.save.php
     * @return array|false Array with information about generated image is returned, FALSE if error occurs.
     * @since PECL rrd >= 0.9.0
     */
    public function save() {}

    /**
 * <div id="rrdgraph.saveverbose" class="refentry"> <div class="refnamediv">  <h1 class="refname">RRDGraph::saveVerbose</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">RRDGraph::saveVerbose</span> — <span class="dc-title">Saves the RRD database query into image and returns the verbose   information about generated graph  </span></p> </div> <div class="refsect1 description" id="refsect1-rrdgraph.saveverbose-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>RRDGraph::saveVerbose</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Saves the RRD database query into image file defined by method <span class="methodname" style="color:#CC7832">{@link RRDGraph::__construct()}</span>   and returns the verbose information about generated graph, if "-" is used as image   filename, image data are also returned in result array.  </p> </div> <div class="refsect1 parameters" id="refsect1-rrdgraph.saveverbose-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-rrdgraph.saveverbose-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns array with detailed information about generated image, 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div></div>
 * 
     * Saves the RRD database query into image and returns the verbose information about generated graph. <p>
     * If "-" is used as image filename, image data are also returned in result array.
     * </p>
     * @link https://php.net/manual/zh/rrdgraph.saveverbose.php
     * @return array|false Array with detailed information about generated image is returned, optionally with image data, FALSE if error occurs.
     * @since PECL rrd >= 0.9.0
     */
    public function saveVerbose() {}

    /**
 * <div id="rrdgraph.setoptions" class="refentry"> <div class="refnamediv">  <h1 class="refname">RRDGraph::setOptions</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">RRDGraph::setOptions</span> — <span class="dc-title">Sets the options for rrd graph export</span></p> </div> <div class="refsect1 description" id="refsect1-rrdgraph.setoptions-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>RRDGraph::setOptions</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-rrdgraph.setoptions-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">options</span></dt>    <dd>     <p class="para">      List of options for the image generation from the RRD database file. It can      be list of strings or list of strings with keys for better readability. Read      the rrd graph man pages for list of available options.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-rrdgraph.setoptions-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。    </p> </div>  <div class="refsect1 examples" id="refsect1-rrdgraph.setoptions-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4722">    <p><strong>示例 #1 <span class="methodname" style="color:#CC7832"><strong>RRDGraph::setOptions()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$graphObj</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">setOptions</span><span style="color: #007700">(array(<br>    </span><span style="color: #DD0000">"--start" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"920804400"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"--end" </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">920808000</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"--vertical-label" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"m/s"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"DEF:myspeed=</span><span style="color: #9876AA">\$rrdFile</span><span style="color: #DD0000">:speed:AVERAGE"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"CDEF:realspeed=myspeed,1000,*"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"LINE2:realspeed#FF0000"<br></span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   <div class="example" id="example-4723">    <p><strong>示例 #2 Set multiple color options</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$graphObj</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">setOptions</span><span style="color: #007700">(array(<br>    </span><span style="color: #DD0000">"--start" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"920804400"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"--end" </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">920808000</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"--vertical-label" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"m/s"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"--color=BACK#00000000"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"--color=GRID#00000000"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"--color=MGRID#00000000"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"DEF:myspeed=</span><span style="color: #9876AA">\$rrdFile</span><span style="color: #DD0000">:speed:AVERAGE"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"CDEF:realspeed=myspeed,1000,*"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"LINE2:realspeed#FF0000"<br></span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     Don't use key value syntax for same rrd option. It looks more readable, but     it doesn't work.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$graphObj</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">setOptions</span><span style="color: #007700">(array(<br>    </span><span style="color: #DD0000">"--color" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"BACK#00000000"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"--color" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"GRID#00000000"</span><span style="color: #007700">,<br>    </span><span style="color: #DD0000">"--color" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"MGRID#00000000"<br></span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>     In nature of php it's same as    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$graphObj</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">setOptions</span><span style="color: #007700">(array(<br>    </span><span style="color: #DD0000">"--color" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"MGRID#00000000"<br></span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div></div>
 * 
     * Sets the options for rrd graph export
     * @link https://php.net/manual/zh/rrdgraph.setoptions.php
     * @param array $options <p>
     * List of options for the image generation from the RRD database file. It can be list of strings or list of strings with keys for better readability. Read the rrd graph man pages for list of available options.
     * </p>
     * @return void
     * @since PECL rrd >= 0.9.0
     */
    public function setOptions($options) {}
}

/**
 * <div id="class.rrdupdater" class="reference"> <h1 class="title">The RRDUpdater class</h1>  <div class="partintro"><p class="verinfo">(PECL rrd &gt;= 0.9.0)</p>  <div class="section" id="rrdupdater.intro">   <h2 class="title">简介</h2>   <p class="para">    Class for updating RDD database file.   </p>  </div>  <div class="section" id="rrdupdater.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">RRDUpdater</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/rrdupdater.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$path</span></span>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/rrdupdater.update.php" class="methodname" style="color:#CC7832">update</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$values</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$time</span>     <span class="initializer"> = time()</span>    </span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link RRDUpdater::__construct} — Creates new RRDUpdater instance</li><li>{@link RRDUpdater::update} — Update the RRD database file</li></ul></div>
 * 
 * Class for updating RDD database file.
 * @link https://php.net/manual/zh/class.rrdupdater.php
 * @since PECL rrd >= 0.9.0
 */
class RRDUpdater
{
    /**
     * Creates new RRDUpdater instance. This instance is responsible for updating the RRD database file.
     * RRDUpdater constructor.
     * @link https://php.net/manual/en/rrdupdater.construct.php
     * @param string $path <p>
     * Filesystem path for RRD database file, which will be updated.
     * </p>
     * @since PECL rrd >= 0.9.0
     */
    public function __construct($path) {}

    /**
 * <div id="rrdupdater.update" class="refentry"> <div class="refnamediv">  <h1 class="refname">RRDUpdater::update</h1>  <p class="verinfo">(PECL rrd &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">RRDUpdater::update</span> — <span class="dc-title">Update the RRD database file</span></p> </div> <div class="refsect1 description" id="refsect1-rrdupdater.update-description">  <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>RRDUpdater::update</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$values</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$time</span>     <span class="initializer"> = time()</span>    </span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Updates the RRD file defined via <span class="methodname" style="color:#CC7832">{@link RRDUpdater::__construct()}</span>.   The file is updated with a specific values.  </p> </div> <div class="refsect1 parameters" id="refsect1-rrdupdater.update-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">values</span></dt>     <dd>      <p class="para">       Data for update. Key is data source name.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">time</span></dt>     <dd>      <p class="para">       Time value for updating the RRD with a particular data. Default value       is current time.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-rrdupdater.update-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 errors" id="refsect1-rrdupdater.update-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   Throws a <span class="classname"><a href="https://php.net/manual/zh/class.exception.php" class="classname">Exception</a></span> on error.  </p> </div> <div class="refsect1 examples" id="refsect1-rrdupdater.update-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4724">    <p><strong>示例 #1 <span class="methodname" style="color:#CC7832"><strong>RRDUpdater::update()</strong></span> examples</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$updator </span><span style="color: #007700">= new </span><span style="color: #9876AA">RRDUpdater</span><span style="color: #007700">(</span><span style="color: #DD0000">"speed.rrd"</span><span style="color: #007700">);<br></span><span style="color: #FF8000">//updates the data source "speed" with value "12411"<br>//for time defined by timestamp "920807700"<br></span><span style="color: #9876AA">\$updator</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">update</span><span style="color: #007700">(array(</span><span style="color: #DD0000">"speed" </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">"12411"</span><span style="color: #007700">), </span><span style="color: #DD0000">"920807700"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div></div>
 * 
     * Update the RRD file defined via RRDUpdater::__construct(). The file is updated with a specific values.
     * @link https://php.net/manual/zh/rrdupdater.update.php
     * @param array $values <p>
     * Data for update. Key is data source name.
     * </p>
     * @param string $time <p>
     * Time value for updating the RRD with a particulat data. Default value is current time.
     * </p>
     * @return bool TRUE on success or FALSE on failure.
     * @throws \Exception on error
     * @since PECL rrd >= 0.9.0
     */
    public function update($values, $time = '') {}
}

// end of PECL/rrd v1.0
