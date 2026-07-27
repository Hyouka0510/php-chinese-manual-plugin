<?php

declare(strict_types=1);

namespace Swoole;

/**
 * <div id="class.swoole-table" class="reference"> <h1 class="title">The Swoole\Table class</h1>  <div class="partintro"><p class="verinfo">(PECL swoole &gt;= 1.9.0)</p>  <div class="section" id="swoole-table.intro">   <h2 class="title">简介</h2>   <p class="para">   </p>  </div>  <div class="section" id="swoole-table.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Swoole\Table</strong>     </span>     <span class="oointerface"><span class="modifier">implements</span>        <a href="https://php.net/manual/zh/class.iterator.php" class="interfacename">Iterator</a></span><span class="oointerface">,  <a href="https://php.net/manual/zh/class.countable.php" class="interfacename">Countable</a></span> {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>    <div class="fieldsynopsis">     <span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.swoole-table.php#swoole-table.constants.type-int"><var class="varname">TYPE_INT</var></a></var><span class="initializer"> = 1</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.swoole-table.php#swoole-table.constants.type-string"><var class="varname">TYPE_STRING</var></a></var><span class="initializer"> = 7</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.swoole-table.php#swoole-table.constants.type-float"><var class="varname">TYPE_FLOAT</var></a></var><span class="initializer"> = 6</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.column.php" class="methodname" style="color:#CC7832">column</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$size</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.count.php" class="methodname" style="color:#CC7832">count</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.create.php" class="methodname" style="color:#CC7832">create</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.current.php" class="methodname" style="color:#CC7832">current</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.decr.php" class="methodname" style="color:#CC7832">decr</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$column</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$decrby</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.del.php" class="methodname" style="color:#CC7832">del</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.destroy.php" class="methodname" style="color:#CC7832">destroy</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.exist.php" class="methodname" style="color:#CC7832">exist</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.get.php" class="methodname" style="color:#CC7832">get</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$field</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.incr.php" class="methodname" style="color:#CC7832">incr</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$column</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$incrby</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.key.php" class="methodname" style="color:#CC7832">key</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.next.php" class="methodname" style="color:#CC7832">next</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.rewind.php" class="methodname" style="color:#CC7832">rewind</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.set.php" class="methodname" style="color:#CC7832">set</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/swoole-table.valid.php" class="methodname" style="color:#CC7832">valid</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>   }</div>  </div>  <div class="section" id="swoole-table.constants">   <h2 class="title">预定义常量</h2>   <dl>         <dt id="swoole-table.constants.type-int"><strong><span>{@link Swoole\Table::TYPE_INT}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="swoole-table.constants.type-string"><strong><span>{@link Swoole\Table::TYPE_STRING}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="swoole-table.constants.type-float"><strong><span>{@link Swoole\Table::TYPE_FLOAT}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Swoole\Table::column} — Set the data type and size of the columns.</li><li>{@link Swoole\Table::__construct} — Construct a Swoole memory table with fixed size.</li><li>{@link Swoole\Table::count} — Count the rows in the table, or count all the elements in the table if \$mode = 1.</li><li>{@link Swoole\Table::create} — Create the swoole memory table.</li><li>{@link Swoole\Table::current} — Get the current row.</li><li>{@link Swoole\Table::decr} — Decrement the value in the Swoole table by \$key and \$column</li><li>{@link Swoole\Table::del} — Delete a row in the Swoole table by \$key</li><li>{@link Swoole\Table::destroy} — Destroy the Swoole table.</li><li>{@link Swoole\Table::exist} — Check if a row is existed by \$row_key.</li><li>{@link Swoole\Table::get} — Get the value in the Swoole table by \$key and \$field.</li><li>{@link Swoole\Table::incr} — Increment the value by \$key and \$column</li><li>{@link Swoole\Table::key} — Get the key of current row.</li><li>{@link Swoole\Table::next} — Advance the iterator to the next row</li><li>{@link Swoole\Table::rewind} — Rewind the iterator.</li><li>{@link Swoole\Table::set} — Update a row of the table by \$key.</li><li>{@link Swoole\Table::valid} — Check if the current row is valid.</li></ul></div>
 */
class Table implements \Iterator, \ArrayAccess, \Countable
{
    public const TYPE_INT = 1;
    public const TYPE_STRING = 3;
    public const TYPE_FLOAT = 2;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $memorySize;

/**
 * <div id="swoole-table.construct" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::__construct</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::__construct</span> — <span class="dc-title">Construct a Swoole memory table with fixed size.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.construct-description">  <h3 class="title">说明</h3>  <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::__construct</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$table_size</span></span>)</div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.construct-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">table_size</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> </div>
 */
    public function __construct(int $table_size, float $conflict_proportion = 0.2) {}

    /**
 * <div id="swoole-table.column" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::column</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::column</span> — <span class="dc-title">Set the data type and size of the columns.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.column-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::column</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$name</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$type</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$size</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.column-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">name</span></dt>    <dd>     <p class="para">      Specify the name of the field.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">type</span></dt>    <dd>     <p class="para">      Specify the field type.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">size</span></dt>    <dd>     <p class="para">      Specify the maximum length of the string field.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.column-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return bool
     */
    public function column(string $name, int $type, int $size = 0) {}

    /**
 * <div id="swoole-table.create" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::create</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::create</span> — <span class="dc-title">Create the swoole memory table.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.create-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::create</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.create-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.create-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return bool
     */
    public function create() {}

    /**
 * <div id="swoole-table.destroy" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::destroy</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::destroy</span> — <span class="dc-title">Destroy the Swoole table.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.destroy-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::destroy</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.destroy-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.destroy-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return bool returns TRUE all the time
     */
    public function destroy() {}

    /**
 * <div id="swoole-table.set" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::set</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::set</span> — <span class="dc-title">Update a row of the table by \$key.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.set-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::set</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.set-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <p class="para">      Key of the data.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">value</span></dt>    <dd>     <p class="para">      Value of the data.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.set-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return bool
     */
    public function set(string $key, array $value) {}

    /**
     * @return array|false Return an array of stats information; Return FALSE when error happens.
     * @since 4.8.0
     */
    public function stats() {}

    /**
 * <div id="swoole-table.get" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::get</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::get</span> — <span class="dc-title">Get the value in the Swoole table by \$key and \$field.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.get-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::get</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$field</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.get-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <p class="para">           </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">field</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.get-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return mixed
     */
    public function get(string $key, ?string $field = null) {}

    /**
 * <div id="swoole-table.del" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::del</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::del</span> — <span class="dc-title">Delete a row in the Swoole table by \$key</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.del-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::del</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.del-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.del-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * This method has an alias of \Swoole\Table::delete().
     *
     * @return bool
     * @see \Swoole\Table::delete()
     */
    public function del(string $key) {}

    /**
     * Alias of method \Swoole\Table::del().
     *
     * @return bool
     * @see \Swoole\Table::del()
     */
    public function delete(string $key) {}

    /**
     * This method has an alias of \Swoole\Table::exist().
     *
     * @return bool
     * @see \Swoole\Table::exist()
     */
    public function exists(string $key) {}

    /**
 * <div id="swoole-table.exist" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::exist</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::exist</span> — <span class="dc-title">Check if a row is existed by \$row_key.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.exist-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::exist</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.exist-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.exist-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * Alias of method \Swoole\Table::exists().
     *
     * @return bool
     * @see \Swoole\Table::exists()
     */
    public function exist(string $key) {}

    /**
 * <div id="swoole-table.incr" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::incr</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::incr</span> — <span class="dc-title">Increment the value by \$key and \$column</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.incr-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::incr</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$column</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$incrby</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.incr-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <p class="para">      Key for the data.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">column</span></dt>    <dd>     <p class="para">      Specify the column name.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">incrby</span></dt>    <dd>     <p class="para">      Increment value.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.incr-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @param mixed $incrby
     * @return int
     */
    public function incr(string $key, string $column, $incrby = 1) {}

    /**
 * <div id="swoole-table.decr" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::decr</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::decr</span> — <span class="dc-title">Decrement the value in the Swoole table by \$key and \$column</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.decr-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::decr</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$key</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$column</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$decrby</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.decr-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">key</span></dt>    <dd>     <p class="para">      Key of the data.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">column</span></dt>    <dd>     <p class="para">      Specify the column name.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">decrby</span></dt>    <dd>     <p class="para">      Decrement value.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.decr-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @param mixed $decrby
     * @return int
     */
    public function decr(string $key, string $column, $decrby = 1) {}

    /**
     * @return int
     */
    public function getSize() {}

    /**
     * @return int
     */
    public function getMemorySize() {}

    /**
 * <div id="swoole-table.current" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::current</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::current</span> — <span class="dc-title">Get the current row.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.current-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::current</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.current-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.current-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return mixed
     * @see \Iterator::current()
     * @see https://www.php.net/manual/en/iterator.current.php
     * {@inheritDoc}
     */
    public function current() {}

    /**
 * <div id="swoole-table.key" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::key</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::key</span> — <span class="dc-title">Get the key of current row.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.key-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::key</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.key-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.key-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return mixed
     * @see \Iterator::key()
     * @see https://www.php.net/manual/en/iterator.key.php
     * {@inheritDoc}
     */
    public function key() {}

    /**
 * <div id="swoole-table.next" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::next</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::next</span> — <span class="dc-title">Advance the iterator to the next row</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.next-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::next</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.next-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.next-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return void
     * @see \Iterator::next()
     * @see https://www.php.net/manual/en/iterator.next.php
     * {@inheritDoc}
     */
    public function next() {}

    /**
 * <div id="swoole-table.rewind" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::rewind</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::rewind</span> — <span class="dc-title">Rewind the iterator.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.rewind-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::rewind</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.rewind-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.rewind-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return void
     * @see \Iterator::rewind()
     * @see https://www.php.net/manual/en/iterator.rewind.php
     * {@inheritDoc}
     */
    public function rewind() {}

    /**
 * <div id="swoole-table.valid" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::valid</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::valid</span> — <span class="dc-title">Check if the current row is valid.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.valid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::valid</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.valid-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.valid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return bool
     * @see \Iterator::valid()
     * @see https://www.php.net/manual/en/iterator.valid.php
     * {@inheritDoc}
     */
    public function valid() {}

    /**
     * Whether or not an offset exists.
     *
     * @param mixed $offset an offset to check for
     * @return bool returns true on success or false on failure
     * @see \ArrayAccess::offsetExists()
     * @see https://www.php.net/manual/en/arrayaccess.offsetexists.php
     * {@inheritDoc}
     */
    public function offsetExists($offset) {}

    /**
     * Returns the value at specified offset.
     *
     * @param mixed $offset the offset to retrieve
     * @return mixed can return all value types
     * @see \ArrayAccess::offsetGet()
     * @see https://www.php.net/manual/en/arrayaccess.offsetget.php
     * {@inheritDoc}
     */
    public function offsetGet($offset) {}

    /**
     * Assigns a value to the specified offset.
     *
     * @param mixed $offset the offset to assign the value to
     * @param mixed $value the value to set
     * @return void
     * @see \ArrayAccess::offsetSet()
     * @see https://www.php.net/manual/en/arrayaccess.offsetset.php
     * {@inheritDoc}
     */
    public function offsetSet($offset, $value) {}

    /**
     * Unsets an offset.
     *
     * @param mixed $offset the offset to unset
     * @return void
     * @see \ArrayAccess::offsetUnset()
     * @see https://www.php.net/manual/en/arrayaccess.offsetunset.php
     * {@inheritDoc}
     */
    public function offsetUnset($offset) {}

    /**
 * <div id="swoole-table.count" class="refentry"> <div class="refnamediv">  <h1 class="refname">Swoole\Table::count</h1>  <p class="verinfo">(PECL swoole &gt;= 1.9.0)</p><p class="refpurpose"><span class="refname">Swoole\Table::count</span> — <span class="dc-title">Count the rows in the table, or count all the elements in the table if \$mode = 1.</span></p> </div> <div class="refsect1 description" id="refsect1-swoole-table.count-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Swoole\Table::count</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">  </p> </div> <div class="refsect1 parameters" id="refsect1-swoole-table.count-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-swoole-table.count-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div></div>
 * 
     * @return int
     * @see \Countable::count()
     * @see https://www.php.net/manual/en/countable.count.php
     * {@inheritDoc}
     */
    public function count() {}
}
