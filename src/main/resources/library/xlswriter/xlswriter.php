<?php

/**
 * PECL xlswriter stubs for PhpStorm
 * https://pecl.php.net/package/xlswriter
 * https://www.php.net/manual/en/book.xlswriter.php
 */

namespace Vtiful\Kernel;

    /**
 * <div id="class.vtiful-kernel-excel" class="reference"> <h1 class="title">The Vtiful\Kernel\Excel class</h1>  <div class="partintro"><p class="verinfo">(PECL xlswriter &gt;= 1.2.1)</p>  <div class="section" id="vtiful-kernel-excel.intro">   <h2 class="title">简介</h2>   <p class="para">    Create xlsx files and set cells and output xlsx files   </p>  </div>  <div class="section" id="vtiful-kernel-excel.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Vtiful\Kernel\Excel</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$config</span></span>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.addSheet.php" class="methodname" style="color:#CC7832">addSheet</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$sheetName</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.autoFilter.php" class="methodname" style="color:#CC7832">autoFilter</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$scope</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.constMemory.php" class="methodname" style="color:#CC7832">constMemory</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$fileName</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$sheetName</span><span class="initializer"> = ?</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.data.php" class="methodname" style="color:#CC7832">data</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$data</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.filename.php" class="methodname" style="color:#CC7832">fileName</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$fileName</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$sheetName</span><span class="initializer"> = ?</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.getHandle.php" class="methodname" style="color:#CC7832">getHandle</a></span>()</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.header.php" class="methodname" style="color:#CC7832">header</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$headerData</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.insertFormula.php" class="methodname" style="color:#CC7832">insertFormula</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$row</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$column</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$formula</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.insertImage.php" class="methodname" style="color:#CC7832">insertImage</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$row</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$column</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$localImagePath</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.insertText.php" class="methodname" style="color:#CC7832">insertText</a></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$row</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$column</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$data</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$format</span><span class="initializer"> = ?</span></span><br>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.mergeCells.php" class="methodname" style="color:#CC7832">mergeCells</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$scope</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$data</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.output.php" class="methodname" style="color:#CC7832">output</a></span>()</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.setColumn.php" class="methodname" style="color:#CC7832">setColumn</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$range</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span> <span class="parameter" style="color:#3A95FF">\$width</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$format</span><span class="initializer"> = ?</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-excel.setRow.php" class="methodname" style="color:#CC7832">setRow</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$range</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span> <span class="parameter" style="color:#3A95FF">\$height</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$format</span><span class="initializer"> = ?</span></span>)</div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Vtiful\Kernel\Excel::addSheet} — Vtiful\Kernel\Excel addSheet</li><li>{@link Vtiful\Kernel\Excel::autoFilter} — Vtiful\Kernel\Excel autoFilter</li><li>{@link Vtiful\Kernel\Excel::constMemory} — Vtiful\Kernel\Excel constMemory</li><li>{@link Vtiful\Kernel\Excel::__construct} — Vtiful\Kernel\Excel constructor</li><li>{@link Vtiful\Kernel\Excel::data} — Vtiful\Kernel\Excel data</li><li>{@link Vtiful\Kernel\Excel::fileName} — Vtiful\Kernel\Excel fileName</li><li>{@link Vtiful\Kernel\Excel::getHandle} — Vtiful\Kernel\Excel getHandle</li><li>{@link Vtiful\Kernel\Excel::header} — Vtiful\Kernel\Excel header</li><li>{@link Vtiful\Kernel\Excel::insertFormula} — Vtiful\Kernel\Excel insertFormula</li><li>{@link Vtiful\Kernel\Excel::insertImage} — Vtiful\Kernel\Excel insertImage</li><li>{@link Vtiful\Kernel\Excel::insertText} — Vtiful\Kernel\Excel insertText</li><li>{@link Vtiful\Kernel\Excel::mergeCells} — Vtiful\Kernel\Excel mergeCells</li><li>{@link Vtiful\Kernel\Excel::output} — Vtiful\Kernel\Excel output</li><li>{@link Vtiful\Kernel\Excel::setColumn} — Vtiful\Kernel\Excel setColumn</li><li>{@link Vtiful\Kernel\Excel::setRow} — Vtiful\Kernel\Excel setRow</li></ul></div>
 * 
     * Class Excel
     * @link https://www.php.net/manual/en/class.vtiful-kernel-excel.php
     * @package Vtiful\Kernel
     */
    class Excel
    {
        public const TYPE_STRING = 0x01;
        public const TYPE_INT = 0x02;
        public const TYPE_DOUBLE = 0x04;
        public const TYPE_TIMESTAMP = 0x08;
        public const SKIP_NONE = 0x00;
        public const SKIP_EMPTY_ROW = 0x01;
        public const SKIP_EMPTY_CELLS = 0x02;
        public const GRIDLINES_HIDE_ALL = 0;
        public const GRIDLINES_SHOW_SCREEN = 1;
        public const GRIDLINES_SHOW_PRINT = 2;
        public const GRIDLINES_SHOW_ALL = 3;

        /**
 * <div id="vtiful-kernel-excel.construct" class="refentry"> <div class="refnamediv">  <h1 class="refname">Vtiful\Kernel\Excel::__construct</h1>  <p class="verinfo">(PECL xlswriter &gt;= 1.2.1)</p><p class="refpurpose"><span class="refname">Vtiful\Kernel\Excel::__construct</span> — <span class="dc-title">Vtiful\Kernel\Excel constructor</span></p> </div> <div class="refsect1 description" id="refsect1-vtiful-kernel-excel.construct-description">  <h3 class="title">说明</h3>  <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Vtiful\Kernel\Excel::__construct</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$config</span></span>)</div>  <p class="para rdfs-comment">    <span class="classname"><a href="https://php.net/manual/zh/class.vtiful-kernel-excel.php" class="classname">Vtiful\Kernel\Excel</a></span> constructor, create a class object.  </p> </div> <div class="refsect1 parameters" id="refsect1-vtiful-kernel-excel.construct-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">config</span></dt>    <dd>     <p class="para">      XLSX file export configuration     </p>    </dd>     </dl> </div> <div class="refsect1 examples" id="refsect1-vtiful-kernel-excel.construct-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$config </span><span style="color: #007700">= [<br>  </span><span style="color: #DD0000">'path' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'/home/viest'<br></span><span style="color: #007700">];<br><br></span><span style="color: #9876AA">\$excelObject </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Excel</span><span style="color: #007700">(</span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div></div>
 * 
         * Excel constructor.
         *
         * @param array $config
         */
        public function __construct(array $config) {}

        /**
 * <div id="vtiful-kernel-excel.filename" class="refentry"> <div class="refnamediv">  <h1 class="refname">Vtiful\Kernel\Excel::fileName</h1>  <p class="verinfo">(PECL xlswriter &gt;= 1.2.1)</p><p class="refpurpose"><span class="refname">Vtiful\Kernel\Excel::fileName</span> — <span class="dc-title">Vtiful\Kernel\Excel fileName</span></p> </div> <div class="refsect1 description" id="refsect1-vtiful-kernel-excel.filename-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Vtiful\Kernel\Excel::fileName</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$fileName</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$sheetName</span><span class="initializer"> = ?</span></span>)</div>  <p class="para rdfs-comment">    Create a brand new xlsx file and create a worksheet.  </p> </div> <div class="refsect1 parameters" id="refsect1-vtiful-kernel-excel.filename-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">fileName</span></dt>    <dd>     <p class="para">      XLSX file name     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">sheetName</span></dt>    <dd>     <p class="para">      Worksheet name     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-vtiful-kernel-excel.filename-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="classname"><a href="https://php.net/manual/zh/class.vtiful-kernel-excel.php" class="classname">Vtiful\Kernel\Excel</a></span> instance  </p> </div><div class="refsect1 examples" id="refsect1-vtiful-kernel-excel.filename-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$config </span><span style="color: #007700">= [<br>  </span><span style="color: #DD0000">'path' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'/home/viest'<br></span><span style="color: #007700">];<br><br></span><span style="color: #9876AA">\$fileObject </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Excel</span><span style="color: #007700">(</span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$file </span><span style="color: #007700">= </span><span style="color: #9876AA">\$fileObject</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">fileName</span><span style="color: #007700">(</span><span style="color: #DD0000">'tutorial.xlsx'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sheet'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div></div>
 * 
         * File Name
         *
         * @param string $fileName
         * @param string $sheetName
         *
         * @return Excel
         */
        public function fileName(string $fileName, string $sheetName = 'Sheet1'): self
        {
            return $this;
        }

        /**
         * Const memory model
         *
         * @param string $fileName
         * @param string $sheetName
         *
         * @return Excel
         */
        public function constMemory(string $fileName, string $sheetName = 'Sheet1'): self
        {
            return $this;
        }

        /**
         * Add a new worksheet to a workbook.
         *
         * The worksheet name must be a valid Excel worksheet name, i.e. it must be
         * less than 32 character and it cannot contain any of the characters:
         *
         *     / \ [ ] : * ?
         *
         * In addition, you cannot use the same, case insensitive, `$sheetName` for more
         * than one worksheet.
         *
         * @param string|null $sheetName
         *
         * @return Excel
         */
        public function addSheet(?string $sheetName): self
        {
            return $this;
        }

        /**
         * Checkout worksheet
         *
         * @param string $sheetName
         *
         * @return Excel
         */
        public function checkoutSheet(string $sheetName): self
        {
            return $this;
        }

        /**
 * <div id="vtiful-kernel-excel.header" class="refentry"> <div class="refnamediv">  <h1 class="refname">Vtiful\Kernel\Excel::header</h1>  <p class="verinfo">(PECL xlswriter &gt;= 1.2.1)</p><p class="refpurpose"><span class="refname">Vtiful\Kernel\Excel::header</span> — <span class="dc-title">Vtiful\Kernel\Excel header</span></p> </div> <div class="refsect1 description" id="refsect1-vtiful-kernel-excel.header-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Vtiful\Kernel\Excel::header</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$headerData</span></span>)</div>  <p class="para rdfs-comment">    Write a header in the worksheet.  </p> </div> <div class="refsect1 parameters" id="refsect1-vtiful-kernel-excel.header-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">headerData</span></dt>    <dd>     <p class="para">      worksheet header data     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-vtiful-kernel-excel.header-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="classname"><a href="https://php.net/manual/zh/class.vtiful-kernel-excel.php" class="classname">Vtiful\Kernel\Excel</a></span> instance  </p> </div><div class="refsect1 examples" id="refsect1-vtiful-kernel-excel.header-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$config </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">'path' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'./tests'<br></span><span style="color: #007700">];<br><br></span><span style="color: #9876AA">\$fileObject  </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Excel</span><span style="color: #007700">(</span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$file </span><span style="color: #007700">= </span><span style="color: #9876AA">\$fileObject</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">fileName</span><span style="color: #007700">(</span><span style="color: #DD0000">'tutorial.xlsx'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sheet_one'</span><span style="color: #007700">)<br>    -&gt;</span><span style="color: #9876AA">header</span><span style="color: #007700">([</span><span style="color: #DD0000">'name'</span><span style="color: #007700">, </span><span style="color: #DD0000">'age'</span><span style="color: #007700">]);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div></div>
 * 
         * Insert data on the first line of the worksheet
         *
         * @param array $header
         *
         * @return Excel
         */
        public function header(array $header): self
        {
            return $this;
        }

        /**
 * <div id="vtiful-kernel-excel.data" class="refentry"> <div class="refnamediv">  <h1 class="refname">Vtiful\Kernel\Excel::data</h1>  <p class="verinfo">(PECL xlswriter &gt;= 1.2.1)</p><p class="refpurpose"><span class="refname">Vtiful\Kernel\Excel::data</span> — <span class="dc-title">Vtiful\Kernel\Excel data</span></p> </div> <div class="refsect1 description" id="refsect1-vtiful-kernel-excel.data-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Vtiful\Kernel\Excel::data</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$data</span></span>)</div>  <p class="para rdfs-comment">    Write a data in the worksheet.  </p> </div> <div class="refsect1 parameters" id="refsect1-vtiful-kernel-excel.data-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">data</span></dt>    <dd>     <p class="para">      worksheet data     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-vtiful-kernel-excel.data-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="classname"><a href="https://php.net/manual/zh/class.vtiful-kernel-excel.php" class="classname">Vtiful\Kernel\Excel</a></span> instance  </p> </div><div class="refsect1 examples" id="refsect1-vtiful-kernel-excel.data-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$config </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">'path' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'./tests'<br></span><span style="color: #007700">];<br><br></span><span style="color: #9876AA">\$fileObject  </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Excel</span><span style="color: #007700">(</span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$file </span><span style="color: #007700">= </span><span style="color: #9876AA">\$fileObject</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">fileName</span><span style="color: #007700">(</span><span style="color: #DD0000">'tutorial.xlsx'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sheet_one'</span><span style="color: #007700">)<br>    -&gt;</span><span style="color: #9876AA">header</span><span style="color: #007700">([</span><span style="color: #DD0000">'name'</span><span style="color: #007700">, </span><span style="color: #DD0000">'age'</span><span style="color: #007700">])<br>    -&gt;</span><span style="color: #9876AA">data</span><span style="color: #007700">([<br>      [</span><span style="color: #DD0000">'viest'</span><span style="color: #007700">, </span><span style="color: #9876AA">23</span><span style="color: #007700">],<br>      [</span><span style="color: #DD0000">'wjx'</span><span style="color: #007700">, </span><span style="color: #9876AA">23</span><span style="color: #007700">],<br>    ]);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div></div>
 * 
         * Insert data on the worksheet
         *
         * @param array $data
         *
         * @return Excel
         */
        public function data(array $data): self
        {
            return $this;
        }

        /**
 * <div id="vtiful-kernel-excel.output" class="refentry"> <div class="refnamediv">  <h1 class="refname">Vtiful\Kernel\Excel::output</h1>  <p class="verinfo">(PECL xlswriter &gt;= 1.2.1)</p><p class="refpurpose"><span class="refname">Vtiful\Kernel\Excel::output</span> — <span class="dc-title">Vtiful\Kernel\Excel output</span></p> </div> <div class="refsect1 description" id="refsect1-vtiful-kernel-excel.output-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Vtiful\Kernel\Excel::output</strong></span>()</div>  <p class="para rdfs-comment">    Output xlsx file to disk.  </p> </div> <div class="refsect1 parameters" id="refsect1-vtiful-kernel-excel.output-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-vtiful-kernel-excel.output-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   XLSX file path;  </p> </div><div class="refsect1 examples" id="refsect1-vtiful-kernel-excel.output-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$config </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">'path' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'./tests'<br></span><span style="color: #007700">];<br><br></span><span style="color: #9876AA">\$fileObject  </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Excel</span><span style="color: #007700">(</span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$file </span><span style="color: #007700">= </span><span style="color: #9876AA">\$fileObject</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">fileName</span><span style="color: #007700">(</span><span style="color: #DD0000">'tutorial.xlsx'</span><span style="color: #007700">, </span><span style="color: #DD0000">'sheet_one'</span><span style="color: #007700">)<br>    -&gt;</span><span style="color: #9876AA">header</span><span style="color: #007700">([</span><span style="color: #DD0000">'name'</span><span style="color: #007700">, </span><span style="color: #DD0000">'age'</span><span style="color: #007700">])<br>    -&gt;</span><span style="color: #9876AA">data</span><span style="color: #007700">([<br>      [</span><span style="color: #DD0000">'viest'</span><span style="color: #007700">, </span><span style="color: #9876AA">23</span><span style="color: #007700">],<br>      [</span><span style="color: #DD0000">'wjx'</span><span style="color: #007700">, </span><span style="color: #9876AA">23</span><span style="color: #007700">],<br>    ]);<br>    <br></span><span style="color: #9876AA">\$path </span><span style="color: #007700">= </span><span style="color: #9876AA">\$file</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">output</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div></div>
 * 
         * Generate file
         *
         * @return string
         */
        public function output(): string
        {
            return 'FilePath';
        }

        /**
         * Get file resource
         *
         * @return resource
         */
        public function getHandle() {}

        /**
         * Auto filter on the worksheet
         *
         * @param string $range
         *
         * @return Excel
         */
        public function autoFilter(string $range): self
        {
            return $this;
        }

        /**
         * Insert data on the cell
         *
         * @param int $row
         * @param int $column
         * @param int|string|float $data
         * @param string|null $format
         * @param resource|null $formatHandle
         *
         * @return Excel
         */
        public function insertText(int $row, int $column, $data, ?string $format = null, $formatHandle = null): self
        {
            return $this;
        }

        /**
         * Insert date on the cell
         *
         * @param int $row
         * @param int $column
         * @param int $timestamp
         * @param string|null $format
         * @param resource|null $formatHandle
         *
         * @return Excel
         */
        public function insertDate(int $row, int $column, int $timestamp, ?string $format = null, $formatHandle = null): self
        {
            return $this;
        }

        /**
         * Insert chart on the cell
         *
         * @param int $row
         * @param int $column
         * @param resource $chartResource
         *
         * @return Excel
         */
        public function insertChart(int $row, int $column, $chartResource): self
        {
            return $this;
        }

        /**
         * Insert url on the cell
         *
         * @param int $row
         * @param int $column
         * @param string $url
         * @param resource|null $formatHandle
         *
         * @return Excel
         */
        public function insertUrl(int $row, int $column, string $url, $formatHandle = null): self
        {
            return $this;
        }

        /**
         * Insert image on the cell
         *
         * @param int $row
         * @param int $column
         * @param string $imagePath
         * @param float $width
         * @param float $height
         *
         * @return Excel
         */
        public function insertImage(int $row, int $column, string $imagePath, float $width = 1, float $height = 1): self
        {
            return $this;
        }

        /**
         * Insert Formula on the cell
         *
         * @param int $row
         * @param int $column
         * @param string $formula
         *
         * @return Excel
         */
        public function insertFormula(int $row, int $column, string $formula): self
        {
            return $this;
        }

        /**
         * Merge cells
         *
         * @param string $range
         * @param string $data
         *
         * @return Excel
         */
        public function MergeCells(string $range, string $data): self
        {
            return $this;
        }

        /**
         * Set column cells width or format
         *
         * @param string $range
         * @param float $cellWidth
         * @param resource|null $formatHandle
         *
         * @return Excel
         */
        public function setColumn(string $range, float $cellWidth, $formatHandle = null): self
        {
            return $this;
        }

        /**
         * Set row cells height or format
         *
         * @param string $range
         * @param float $cellHeight
         * @param resource|null $formatHandle
         *
         * @return Excel
         */
        public function setRow(string $range, float $cellHeight, $formatHandle = null): self
        {
            return $this;
        }

        /**
         * Open xlsx file
         *
         * @param string $fileName
         *
         * @return Excel
         */
        public function openFile(string $fileName): self
        {
            return $this;
        }

        /**
         * Open sheet
         *
         * default open first sheet
         *
         * @param string|null $sheetName
         * @param int         $skipFlag
         *
         * @return Excel
         */
        public function openSheet(?string $sheetName = null, int $skipFlag = 0x00): self
        {
            return $this;
        }

        /**
         * Set row cell data type
         *
         * @param array $types
         *
         * @return Excel
         */
        public function setType(array $types): self
        {
            return $this;
        }

        /**
         * Read values from the sheet
         *
         * @return array
         */
        public function getSheetData(): array
        {
            return [];
        }

        /**
         * Read values from the sheet
         *
         * @return array
         */
        public function nextRow(): array
        {
            return [];
        }

        /**
         * Next Cell In Callback
         *
         * @param callable $callback function(int $row, int $cell, string $data)
         * @param string|null $sheetName sheet name
         */
        public function nextCellCallback(callable $callback, ?string $sheetName = null): void {}

        /**
         * Freeze panes
         *
         * freezePanes(1, 0); // Freeze the first row.
         * freezePanes(0, 1); // Freeze the first column.
         * freezePanes(1, 1); // Freeze first row/column.
         *
         * @param int $row
         * @param int $column
         *
         * @return static
         */
        public function freezePanes(int $row, int $column): self
        {
            return $this;
        }

        /**
         * Gridline
         *
         * Display or hide screen and print gridlines using one of the values of
         *
         * \Vtiful\Kernel\Excel::GRIDLINES_HIDE_ALL
         * \Vtiful\Kernel\Excel::GRIDLINES_SHOW_ALL
         * \Vtiful\Kernel\Excel::GRIDLINES_SHOW_PRINT
         * \Vtiful\Kernel\Excel::GRIDLINES_SHOW_SCREEN
         *
         * Excel default is that the screen gridlines are on and the printed worksheet is off.
         *
         * @param int $option
         *
         * @return static
         */
        public function gridline(int $option): self
        {
            return $this;
        }

        /**
         * Worksheet zoom
         *
         * Set the worksheet zoom factor in the range 10 <= zoom <= 400:
         *
         * @param int $scale
         *
         * @return static
         */
        public function zoom(int $scale): self
        {
            return $this;
        }
    }

    /**
 * <div id="class.vtiful-kernel-format" class="reference"> <h1 class="title">The Vtiful\Kernel\Format class</h1>  <div class="partintro"><p class="verinfo">(PECL xlswriter &gt;= 1.2.1)</p>  <div class="section" id="vtiful-kernel-format.intro">   <h2 class="title">简介</h2>   <p class="para">    Create a cell format object   </p>  </div>  <div class="section" id="vtiful-kernel-format.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">Vtiful\Kernel\Format</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>    <div class="fieldsynopsis">     <span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-left"><var class="varname">FORMAT_ALIGN_LEFT</var></a></var><span class="initializer"> = 1</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-center"><var class="varname">FORMAT_ALIGN_CENTER</var></a></var><span class="initializer"> = 2</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-right"><var class="varname">FORMAT_ALIGN_RIGHT</var></a></var><span class="initializer"> = 3</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-fill"><var class="varname">FORMAT_ALIGN_FILL</var></a></var><span class="initializer"> = 4</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-justify"><var class="varname">FORMAT_ALIGN_JUSTIFY</var></a></var><span class="initializer"> = 5</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-center-across"><var class="varname">FORMAT_ALIGN_CENTER_ACROSS</var></a></var><span class="initializer"> = 6</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-distributed"><var class="varname">FORMAT_ALIGN_DISTRIBUTED</var></a></var><span class="initializer"> = 7</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-vertical-top"><var class="varname">FORMAT_ALIGN_VERTICAL_TOP</var></a></var><span class="initializer"> = 8</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-vertical-bottom"><var class="varname">FORMAT_ALIGN_VERTICAL_BOTTOM</var></a></var><span class="initializer"> = 9</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-vertical-center"><var class="varname">FORMAT_ALIGN_VERTICAL_CENTER</var></a></var><span class="initializer"> = 10</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-vertical-justify"><var class="varname">FORMAT_ALIGN_VERTICAL_JUSTIFY</var></a></var><span class="initializer"> = 11</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.format-align-vertical-distributed"><var class="varname">FORMAT_ALIGN_VERTICAL_DISTRIBUTED</var></a></var><span class="initializer"> = 12</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.underline-single"><var class="varname">UNDERLINE_SINGLE</var></a></var><span class="initializer"> = 1</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.underline-double"><var class="varname">UNDERLINE_DOUBLE</var></a></var><span class="initializer"> = 2</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.underline-single-accounting"><var class="varname">UNDERLINE_SINGLE_ACCOUNTING</var></a></var><span class="initializer"> = 3</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php#vtiful-kernel-format.constants.underline-double-accounting"><var class="varname">UNDERLINE_DOUBLE_ACCOUNTING</var></a></var><span class="initializer"> = 4</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-format.align.php" class="methodname" style="color:#CC7832">align</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$style</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-format.bold.php" class="methodname" style="color:#CC7832">bold</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-format.italic.php" class="methodname" style="color:#CC7832">italic</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>)</div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/vtiful-kernel-format.underline.php" class="methodname" style="color:#CC7832">underline</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$style</span></span>)</div>   }</div>  </div>  <div class="section" id="vtiful-kernel-format.constants">   <h2 class="title">预定义常量</h2>   <dl>         <dt id="vtiful-kernel-format.constants.format-align-left"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_LEFT}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.format-align-center"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_CENTER}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.format-align-right"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_RIGHT}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.format-align-fill"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_FILL}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.format-align-justify"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_JUSTIFY}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.format-align-center-across"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_CENTER_ACROSS}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.format-align-distributed"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_DISTRIBUTED}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.format-align-vertical-top"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_VERTICAL_TOP}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.format-align-vertical-bottom"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_VERTICAL_BOTTOM}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.format-align-vertical-center"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_VERTICAL_CENTER}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.format-align-vertical-justify"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_VERTICAL_JUSTIFY}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.format-align-vertical-distributed"><strong><span>{@link Vtiful\Kernel\Format::FORMAT_ALIGN_VERTICAL_DISTRIBUTED}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.underline-single"><strong><span>{@link Vtiful\Kernel\Format::UNDERLINE_SINGLE}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.underline-double"><strong><span>{@link Vtiful\Kernel\Format::UNDERLINE_DOUBLE}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.underline-single-accounting"><strong><span>{@link Vtiful\Kernel\Format::UNDERLINE_SINGLE_ACCOUNTING}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="vtiful-kernel-format.constants.underline-double-accounting"><strong><span>{@link Vtiful\Kernel\Format::UNDERLINE_DOUBLE_ACCOUNTING}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Vtiful\Kernel\Format::align} — Vtiful\Kernel\Format align</li><li>{@link Vtiful\Kernel\Format::bold} — Vtiful\Kernel\Format bold</li><li>{@link Vtiful\Kernel\Format::italic} — Vtiful\Kernel\Format italic</li><li>{@link Vtiful\Kernel\Format::underline} — Vtiful\Kernel\Format underline</li></ul></div>
 * 
     * Class Format
     *
     * @link https://www.php.net/manual/en/class.vtiful-kernel-format.php
     * @package Vtiful\Kernel
     */
    class Format
    {
        public const UNDERLINE_SINGLE = 0x00;
        public const UNDERLINE_DOUBLE = 0x00;
        public const UNDERLINE_SINGLE_ACCOUNTING = 0x00;
        public const UNDERLINE_DOUBLE_ACCOUNTING = 0x00;
        public const FORMAT_ALIGN_LEFT = 0x00;
        public const FORMAT_ALIGN_CENTER = 0x00;
        public const FORMAT_ALIGN_RIGHT = 0x00;
        public const FORMAT_ALIGN_FILL = 0x00;
        public const FORMAT_ALIGN_JUSTIFY = 0x00;
        public const FORMAT_ALIGN_CENTER_ACROSS = 0x00;
        public const FORMAT_ALIGN_DISTRIBUTED = 0x00;
        public const FORMAT_ALIGN_VERTICAL_TOP = 0x00;
        public const FORMAT_ALIGN_VERTICAL_BOTTOM = 0x00;
        public const FORMAT_ALIGN_VERTICAL_CENTER = 0x00;
        public const FORMAT_ALIGN_VERTICAL_JUSTIFY = 0x00;
        public const FORMAT_ALIGN_VERTICAL_DISTRIBUTED = 0x00;
        public const COLOR_BLACK = 0x00;
        public const COLOR_BLUE = 0x00;
        public const COLOR_BROWN = 0x00;
        public const COLOR_CYAN = 0x00;
        public const COLOR_GRAY = 0x00;
        public const COLOR_GREEN = 0x00;
        public const COLOR_LIME = 0x00;
        public const COLOR_MAGENTA = 0x00;
        public const COLOR_NAVY = 0x00;
        public const COLOR_ORANGE = 0x00;
        public const COLOR_PINK = 0x00;
        public const COLOR_PURPLE = 0x00;
        public const COLOR_RED = 0x00;
        public const COLOR_SILVER = 0x00;
        public const COLOR_WHITE = 0x00;
        public const COLOR_YELLOW = 0x00;
        public const PATTERN_NONE = 0x00;
        public const PATTERN_SOLID = 0x00;
        public const PATTERN_MEDIUM_GRAY = 0x00;
        public const PATTERN_DARK_GRAY = 0x00;
        public const PATTERN_LIGHT_GRAY = 0x00;
        public const PATTERN_DARK_HORIZONTAL = 0x00;
        public const PATTERN_DARK_VERTICAL = 0x00;
        public const PATTERN_DARK_DOWN = 0x00;
        public const PATTERN_DARK_UP = 0x00;
        public const PATTERN_DARK_GRID = 0x00;
        public const PATTERN_DARK_TRELLIS = 0x00;
        public const PATTERN_LIGHT_HORIZONTAL = 0x00;
        public const PATTERN_LIGHT_VERTICAL = 0x00;
        public const PATTERN_LIGHT_DOWN = 0x00;
        public const PATTERN_LIGHT_UP = 0x00;
        public const PATTERN_LIGHT_GRID = 0x00;
        public const PATTERN_LIGHT_TRELLIS = 0x00;
        public const PATTERN_GRAY_125 = 0x00;
        public const PATTERN_GRAY_0625 = 0x00;
        public const BORDER_THIN = 0x00;
        public const BORDER_MEDIUM = 0x00;
        public const BORDER_DASHED = 0x00;
        public const BORDER_DOTTED = 0x00;
        public const BORDER_THICK = 0x00;
        public const BORDER_DOUBLE = 0x00;
        public const BORDER_HAIR = 0x00;
        public const BORDER_MEDIUM_DASHED = 0x00;
        public const BORDER_DASH_DOT = 0x00;
        public const BORDER_MEDIUM_DASH_DOT = 0x00;
        public const BORDER_DASH_DOT_DOT = 0x00;
        public const BORDER_MEDIUM_DASH_DOT_DOT = 0x00;
        public const BORDER_SLANT_DASH_DOT = 0x00;

        /**
         * Format constructor.
         *
         * @param resource $fileHandle
         */
        public function __construct($fileHandle) {}

        /**
         * Wrap
         *
         * @return static
         */
        public function wrap(): self
        {
            return $this;
        }

        /**
 * <div id="vtiful-kernel-format.bold" class="refentry"> <div class="refnamediv">  <h1 class="refname">Vtiful\Kernel\Format::bold</h1>  <p class="verinfo">(PECL xlswriter &gt;= 1.2.1)</p><p class="refpurpose"><span class="refname">Vtiful\Kernel\Format::bold</span> — <span class="dc-title">Vtiful\Kernel\Format bold</span></p> </div> <div class="refsect1 description" id="refsect1-vtiful-kernel-format.bold-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Vtiful\Kernel\Format::bold</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>)</div>  <p class="para rdfs-comment">    <span class="classname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php" class="classname">Vtiful\Kernel\Format</a></span> bold format  </p> </div> <div class="refsect1 parameters" id="refsect1-vtiful-kernel-format.bold-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">handle</span></dt>    <dd>     <p class="para">      xlsx file handle     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-vtiful-kernel-format.bold-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">    Resource  </p> </div> <div class="refsect1 examples" id="refsect1-vtiful-kernel-format.bold-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 Bold style example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$config </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">'path' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'./tests'<br></span><span style="color: #007700">];<br><br></span><span style="color: #9876AA">\$excel </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Excel</span><span style="color: #007700">(</span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">fileName</span><span style="color: #007700">(</span><span style="color: #DD0000">'tutorial01.xlsx'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$format </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Format</span><span style="color: #007700">(</span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getHandle</span><span style="color: #007700">());<br></span><span style="color: #9876AA">\$boldStyle </span><span style="color: #007700">= </span><span style="color: #9876AA">\$format</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">bold</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">toResource</span><span style="color: #007700">();<br><br></span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">header</span><span style="color: #007700">([</span><span style="color: #DD0000">'name'</span><span style="color: #007700">, </span><span style="color: #DD0000">'age'</span><span style="color: #007700">])<br>    -&gt;</span><span style="color: #9876AA">data</span><span style="color: #007700">([[</span><span style="color: #DD0000">'viest'</span><span style="color: #007700">, </span><span style="color: #9876AA">21</span><span style="color: #007700">]])<br>    -&gt;</span><span style="color: #9876AA">setColumn</span><span style="color: #007700">(</span><span style="color: #DD0000">'A:A'</span><span style="color: #007700">, </span><span style="color: #9876AA">200</span><span style="color: #007700">, </span><span style="color: #9876AA">\$boldStyle</span><span style="color: #007700">)<br>    -&gt;</span><span style="color: #9876AA">output</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div></div>
 * 
         * Bold
         *
         * @return static
         */
        public function bold(): self
        {
            return $this;
        }

        /**
 * <div id="vtiful-kernel-format.italic" class="refentry"> <div class="refnamediv">  <h1 class="refname">Vtiful\Kernel\Format::italic</h1>  <p class="verinfo">(PECL xlswriter &gt;= 1.2.1)</p><p class="refpurpose"><span class="refname">Vtiful\Kernel\Format::italic</span> — <span class="dc-title">Vtiful\Kernel\Format italic</span></p> </div> <div class="refsect1 description" id="refsect1-vtiful-kernel-format.italic-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Vtiful\Kernel\Format::italic</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>)</div>  <p class="para rdfs-comment">    <span class="classname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php" class="classname">Vtiful\Kernel\Format</a></span> italic format  </p> </div> <div class="refsect1 parameters" id="refsect1-vtiful-kernel-format.italic-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">handle</span></dt>    <dd>     <p class="para">      xlsx file handle     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-vtiful-kernel-format.italic-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">    Resource  </p> </div> <div class="refsect1 examples" id="refsect1-vtiful-kernel-format.italic-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 Italic style example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$config </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">'path' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'./tests'<br></span><span style="color: #007700">];<br><br></span><span style="color: #9876AA">\$excel </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Excel</span><span style="color: #007700">(</span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">fileName</span><span style="color: #007700">(</span><span style="color: #DD0000">'tutorial01.xlsx'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$format </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Format</span><span style="color: #007700">(</span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getHandle</span><span style="color: #007700">());<br></span><span style="color: #9876AA">\$italicStyle </span><span style="color: #007700">= </span><span style="color: #9876AA">\$format</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">italic</span><span style="color: #007700">()-&gt;</span><span style="color: #9876AA">toResource</span><span style="color: #007700">();<br><br></span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">header</span><span style="color: #007700">([</span><span style="color: #DD0000">'name'</span><span style="color: #007700">, </span><span style="color: #DD0000">'age'</span><span style="color: #007700">])<br>    -&gt;</span><span style="color: #9876AA">data</span><span style="color: #007700">([[</span><span style="color: #DD0000">'viest'</span><span style="color: #007700">, </span><span style="color: #9876AA">21</span><span style="color: #007700">]])<br>    -&gt;</span><span style="color: #9876AA">setColumn</span><span style="color: #007700">(</span><span style="color: #DD0000">'A:A'</span><span style="color: #007700">, </span><span style="color: #9876AA">200</span><span style="color: #007700">, </span><span style="color: #9876AA">\$italicStyle</span><span style="color: #007700">)<br>    -&gt;</span><span style="color: #9876AA">output</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div></div>
 * 
         * Italic
         *
         * @return static
         */
        public function italic(): self
        {
            return $this;
        }

        /**
         * Cells border
         *
         * @param int $style const BORDER_***
         *
         * @return static
         */
        public function border(int $style): self
        {
            return $this;
        }

        /**
 * <div id="vtiful-kernel-format.align" class="refentry"> <div class="refnamediv">  <h1 class="refname">Vtiful\Kernel\Format::align</h1>  <p class="verinfo">(PECL xlswriter &gt;= 1.2.1)</p><p class="refpurpose"><span class="refname">Vtiful\Kernel\Format::align</span> — <span class="dc-title">Vtiful\Kernel\Format align</span></p> </div> <div class="refsect1 description" id="refsect1-vtiful-kernel-format.align-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Vtiful\Kernel\Format::align</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$style</span></span>)</div>  <p class="para rdfs-comment">    set cell align  </p> </div> <div class="refsect1 parameters" id="refsect1-vtiful-kernel-format.align-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">handle</span></dt>    <dd>     <p class="para">      xlsx file handle     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">style</span></dt>    <dd>     <p class="para">      <span class="classname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php" class="classname">Vtiful\Kernel\Format</a></span> constant     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-vtiful-kernel-format.align-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">    Resource  </p> </div> <div class="refsect1 examples" id="refsect1-vtiful-kernel-format.align-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 Align style example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$config </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">'path' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'./tests'<br></span><span style="color: #007700">];<br><br></span><span style="color: #9876AA">\$excel </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Excel</span><span style="color: #007700">(</span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">fileName</span><span style="color: #007700">(</span><span style="color: #DD0000">'tutorial01.xlsx'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$format </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Format</span><span style="color: #007700">(</span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getHandle</span><span style="color: #007700">());<br></span><span style="color: #9876AA">\$alignStyle </span><span style="color: #007700">= </span><span style="color: #9876AA">\$format</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">align</span><span style="color: #007700">(</span><span style="color: #9876AA">\Vtiful\Kernel\Format</span><span style="color: #007700">::</span><span style="color: #9876AA">FORMAT_ALIGN_LEFT</span><span style="color: #007700">)-&gt;</span><span style="color: #9876AA">toResource</span><span style="color: #007700">();<br><br></span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">header</span><span style="color: #007700">([</span><span style="color: #DD0000">'name'</span><span style="color: #007700">, </span><span style="color: #DD0000">'age'</span><span style="color: #007700">])<br>    -&gt;</span><span style="color: #9876AA">data</span><span style="color: #007700">([[</span><span style="color: #DD0000">'viest'</span><span style="color: #007700">, </span><span style="color: #9876AA">21</span><span style="color: #007700">]])<br>    -&gt;</span><span style="color: #9876AA">setColumn</span><span style="color: #007700">(</span><span style="color: #DD0000">'A:A'</span><span style="color: #007700">, </span><span style="color: #9876AA">200</span><span style="color: #007700">, </span><span style="color: #9876AA">\$alignStyle</span><span style="color: #007700">)<br>    -&gt;</span><span style="color: #9876AA">output</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div></div>
 * 
         * Align
         *
         * @param int ...$style const FORMAT_ALIGN_****
         *
         * @return static
         */
        public function align(...$style): self
        {
            return $this;
        }

        /**
         * Number format
         *
         * @param string $format
         *
         * #,##0
         *
         * @return static
         */
        public function number(string $format): self
        {
            return $this;
        }

        /**
         * Font color
         *
         * @param int $color const COLOR_****
         *
         * @return static
         */
        public function fontColor(int $color): self
        {
            return $this;
        }

        /**
         * Font
         *
         * @param string $fontName
         *
         * @return static
         */
        public function font(string $fontName): self
        {
            return $this;
        }

        /**
         * Font size
         *
         * @param float $size
         *
         * @return static
         */
        public function fontSize(float $size): self
        {
            return $this;
        }

        /**
         * String strikeout
         *
         * @return Format
         */
        public function strikeout(): self
        {
            return $this;
        }

        /**
 * <div id="vtiful-kernel-format.underline" class="refentry"> <div class="refnamediv">  <h1 class="refname">Vtiful\Kernel\Format::underline</h1>  <p class="verinfo">(PECL xlswriter &gt;= 1.2.1)</p><p class="refpurpose"><span class="refname">Vtiful\Kernel\Format::underline</span> — <span class="dc-title">Vtiful\Kernel\Format underline</span></p> </div> <div class="refsect1 description" id="refsect1-vtiful-kernel-format.underline-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Vtiful\Kernel\Format::underline</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$handle</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$style</span></span>)</div>  <p class="para rdfs-comment">    <span class="classname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php" class="classname">Vtiful\Kernel\Format</a></span> underline format  </p> </div> <div class="refsect1 parameters" id="refsect1-vtiful-kernel-format.underline-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">handle</span></dt>    <dd>     <p class="para">      xlsx file handle     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">style</span></dt>    <dd>     <p class="para">      <span class="classname"><a href="https://php.net/manual/zh/class.vtiful-kernel-format.php" class="classname">Vtiful\Kernel\Format</a></span> constant     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-vtiful-kernel-format.underline-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">    Resource  </p> </div> <div class="refsect1 examples" id="refsect1-vtiful-kernel-format.underline-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-1">   <p><strong>示例 #1 Underline style example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$config </span><span style="color: #007700">= [<br>    </span><span style="color: #DD0000">'path' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'./tests'<br></span><span style="color: #007700">];<br><br></span><span style="color: #9876AA">\$excel </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Excel</span><span style="color: #007700">(</span><span style="color: #9876AA">\$config</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">fileName</span><span style="color: #007700">(</span><span style="color: #DD0000">'tutorial01.xlsx'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$format </span><span style="color: #007700">= new </span><span style="color: #9876AA">\Vtiful\Kernel\Format</span><span style="color: #007700">(</span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getHandle</span><span style="color: #007700">());<br></span><span style="color: #9876AA">\$underlineStyle </span><span style="color: #007700">= </span><span style="color: #9876AA">\$format</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">underline</span><span style="color: #007700">(</span><span style="color: #9876AA">\Vtiful\Kernel\Format</span><span style="color: #007700">::</span><span style="color: #9876AA">UNDERLINE_SINGLE</span><span style="color: #007700">)-&gt;</span><span style="color: #9876AA">toResource</span><span style="color: #007700">();<br><br></span><span style="color: #9876AA">\$excel</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">header</span><span style="color: #007700">([</span><span style="color: #DD0000">'name'</span><span style="color: #007700">, </span><span style="color: #DD0000">'age'</span><span style="color: #007700">])<br>    -&gt;</span><span style="color: #9876AA">data</span><span style="color: #007700">([[</span><span style="color: #DD0000">'viest'</span><span style="color: #007700">, </span><span style="color: #9876AA">21</span><span style="color: #007700">]])<br>    -&gt;</span><span style="color: #9876AA">setColumn</span><span style="color: #007700">(</span><span style="color: #DD0000">'A:A'</span><span style="color: #007700">, </span><span style="color: #9876AA">200</span><span style="color: #007700">, </span><span style="color: #9876AA">\$underlineStyle</span><span style="color: #007700">)<br>    -&gt;</span><span style="color: #9876AA">output</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div></div>
 * 
         * Underline
         *
         * @param int $style const UNDERLINE_****
         *
         * @return static
         */
        public function underline(int $style): self
        {
            return $this;
        }

        /**
         * Cell background
         *
         * @param int $color const COLOR_****
         * @param int $pattern const PATTERN_****
         *
         * @return static
         */
        public function background(int $color, int $pattern = self::PATTERN_SOLID): self
        {
            return $this;
        }

        /**
         * Format to resource
         *
         * @return resource
         */
        public function toResource() {}
    }
