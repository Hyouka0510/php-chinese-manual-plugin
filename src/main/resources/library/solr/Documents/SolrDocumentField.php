<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
 * <div id="class.solrdocumentfield" class="reference"> <h1 class="title">The SolrDocumentField class</h1>  <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>  <div class="section" id="solrdocumentfield.intro">   <h2 class="title">简介</h2>   <p class="para">    This represents a field in a Solr document. All its properties are read-only.   </p>  </div>  <div class="section" id="solrdocumentfield.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">final</span>      <span class="modifier">class</span> <strong class="classname">SolrDocumentField</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.solrdocumentfield.php#solrdocumentfield.props.name">\$<var class="varname">name</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.solrdocumentfield.php#solrdocumentfield.props.boost">\$<var class="varname">boost</var></a></var>;</div>    <div class="fieldsynopsis"><span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.solrdocumentfield.php#solrdocumentfield.props.values">\$<var class="varname">values</var></a></var>;</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/solrdocumentfield.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>()</div>    <div class="destructorsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/solrdocumentfield.destruct.php" class="methodname" style="color:#CC7832">__destruct</a></span>()</div>   }</div>  </div>    <div class="section" id="solrdocumentfield.props">   <h2 class="title">属性</h2>   <dl>         <dt id="solrdocumentfield.props.name"><var class="varname">name</var></dt>     <dd>      <p class="para">The name of the field.</p>     </dd>             <dt id="solrdocumentfield.props.boost"><var class="varname">boost</var></dt>     <dd>      <p class="para">The boost value for the field</p>     </dd>             <dt id="solrdocumentfield.props.values"><var class="varname">values</var></dt>     <dd>      <p class="para">An array of values for this field</p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SolrDocumentField::__construct} — Constructor</li><li>{@link SolrDocumentField::__destruct} — Destructor</li></ul></div>
 * 
 * (PECL solr &gt;= 0.9.2)<br/>
 * Class SolrDocumentField<br/>
 * This class represents a field in a Solr document. All its properties are read-only.
 * @link https://php.net/manual/zh/class.solrdocumentfield.php
 */
final class SolrDocumentField
{
    /** @var string [readonly] The name of the field. */
    public $name;

    /** @var string [readonly] The boost value for the field */
    public $boost;

    /** @var string [readonly] An array of values for this field */
    public $values;

    /**
 * <div id="solrdocumentfield.construct" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrDocumentField::__construct</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrDocumentField::__construct</span> — <span class="dc-title">Constructor</span></p> </div> <div class="refsect1 description" id="refsect1-solrdocumentfield.construct-description">  <h3 class="title">说明</h3>  <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>SolrDocumentField::__construct</strong></span>()</div>  <p class="para rdfs-comment">   Constructor.  </p> </div> <div class="refsect1 parameters" id="refsect1-solrdocumentfield.construct-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-solrdocumentfield.construct-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   None.  </p> </div></div>
 * 
     * (PECL solr &gt;= 0.9.2)<br/>
     * SolrDocument constructor.
     * @link https://php.net/manual/zh/solrdocumentfield.construct.php
     */
    public function __construct() {}

    /**
 * <div id="solrdocumentfield.destruct" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrDocumentField::__destruct</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrDocumentField::__destruct</span> — <span class="dc-title">Destructor</span></p> </div> <div class="refsect1 description" id="refsect1-solrdocumentfield.destruct-description">  <h3 class="title">说明</h3>  <div class="destructorsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>SolrDocumentField::__destruct</strong></span>()</div>  <p class="para rdfs-comment">   Destructor.  </p>   </div> <div class="refsect1 parameters" id="refsect1-solrdocumentfield.destruct-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-solrdocumentfield.destruct-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   None.  </p> </div></div>
 * 
     * (PECL solr &gt;= 0.9.2)<br/>
     * Destructor
     * @link https://php.net/manual/zh/solrdocumentfield.destruct.php
     */
    public function __destruct() {}
}
