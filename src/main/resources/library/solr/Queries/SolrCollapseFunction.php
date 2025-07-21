<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
* <div id="class.solrcollapsefunction" class="reference"> <h1 class="title">The SolrCollapseFunction class</h1>  <div class="partintro"><p class="verinfo">(PECL solr &gt;= 2.2.0)</p>  <div class="section" id="solrcollapsefunction.intro">   <h2 class="title">简介</h2>   <p class="para">   </p>  </div>  <div class="section" id="solrcollapsefunction.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">SolrCollapseFunction</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>    <div class="fieldsynopsis">     <span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>      <var class="fieldsynopsis_varname">{@link NULLPOLICY_IGNORE}</var><span class="initializer"> = ignore</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>      <var class="fieldsynopsis_varname">{@link NULLPOLICY_EXPAND}</var><span class="initializer"> = expand</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>      <var class="fieldsynopsis_varname">{@link NULLPOLICY_COLLAPSE}</var><span class="initializer"> = collapse</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link __construct}</span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$field</span><span class="initializer"> = ?</span></span>)</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link getField}</span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link getHint}</span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link getMax}</span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link getMin}</span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link getNullPolicy}</span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link getSize}</span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link setField}</span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$fieldName</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link setHint}</span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$hint</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link setMax}</span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$max</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link setMin}</span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$min</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link setNullPolicy}</span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$nullPolicy</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link setSize}</span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$size</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link __toString}</span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>   }</div>  </div>  <div class="section" id="solrcollapsefunction.constants">   <h2 class="title">预定义常量</h2>   <dl>         <dt id="solrcollapsefunction.constants.nullpolicy-ignore"><strong><span>{@link SolrCollapseFunction::NULLPOLICY_IGNORE}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="solrcollapsefunction.constants.nullpolicy-expand"><strong><span>{@link SolrCollapseFunction::NULLPOLICY_EXPAND}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>             <dt id="solrcollapsefunction.constants.nullpolicy-collapse"><strong><span>{@link SolrCollapseFunction::NULLPOLICY_COLLAPSE}</span></strong></dt>     <dd>      <p class="para"></p>     </dd>       </dl>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SolrCollapseFunction::__construct} — Constructor</li><li>{@link SolrCollapseFunction::getField} — Returns the field that is being collapsed on</li><li>{@link SolrCollapseFunction::getHint} — Returns collapse hint</li><li>{@link SolrCollapseFunction::getMax} — Returns max parameter</li><li>{@link SolrCollapseFunction::getMin} — Returns min parameter</li><li>{@link SolrCollapseFunction::getNullPolicy} — Returns null policy</li><li>{@link SolrCollapseFunction::getSize} — Returns size parameter</li><li>{@link SolrCollapseFunction::setField} — Sets the field to collapse on</li><li>{@link SolrCollapseFunction::setHint} — Sets collapse hint</li><li>{@link SolrCollapseFunction::setMax} — Selects the group heads by the max value of a numeric field or function query</li><li>{@link SolrCollapseFunction::setMin} — Sets the initial size of the collapse data structures when collapsing on a numeric field only</li><li>{@link SolrCollapseFunction::setNullPolicy} — Sets the NULL Policy</li><li>{@link SolrCollapseFunction::setSize} — Sets the initial size of the collapse data structures when collapsing on a numeric field only</li><li>{@link SolrCollapseFunction::__toString} — Returns a string representing the constructed collapse function</li></ul></div>
*
 * (PECL solr &gt;= 2.2.0)<br/>
 * Class SolrCollapseFunction
 * @link https://php.net/manual/zh/class.solrcollapsefunction.php
 
*/
class SolrCollapseFunction
{
    /** @var string */
    public const NULLPOLICY_IGNORE = 'ignore';

    /** @var string */
    public const NULLPOLICY_EXPAND = 'expand';

    /** @var string */
    public const NULLPOLICY_COLLAPSE = 'collapse';

    /**
     * (PECL solr &gt;= 2.2.0)<br/>
     * SolrCollapseFunction constructor.
     * @link https://php.net/manual/en/solrcollapsefunction.construct.php
     * @param string $field [optional] <p>
     * The field name to collapse on.<br/>
     * In order to collapse a result. The field type must be a single valued String, Int or Float.
     * </p>
     */
    public function __construct($field) {}

/**
* <div id="solrcollapsefunction.getfield" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::getField</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::getField</span> — <span class="dc-title">Returns the field that is being collapsed on</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.getfield-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::getField</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">    Returns the field that is being collapsed on.  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.getfield-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.getfield-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div> <div class="refsect1 seealso" id="refsect1-solrcollapsefunction.getfield-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link SolrCollapseFunction::setField()} - Sets the field to collapse on</span></li>  </ul> </div></div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Returns the field that is being collapsed on.
     * @link https://php.net/manual/zh/solrcollapsefunction.getfield.php
     * @return string
     
*/
    public function getField() {}

/**
* <div id="solrcollapsefunction.gethint" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::getHint</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::getHint</span> — <span class="dc-title">Returns collapse hint</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.gethint-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::getHint</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">    Returns collapse hint  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.gethint-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.gethint-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div> <div class="refsect1 seealso" id="refsect1-solrcollapsefunction.gethint-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link SolrCollapseFunction::setHint()} - Sets collapse hint</span></li>  </ul> </div></div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Returns collapse hint
     * @link https://php.net/manual/zh/solrcollapsefunction.gethint.php
     * @return string
     
*/
    public function getHint() {}

/**
* <div id="solrcollapsefunction.getmax" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::getMax</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::getMax</span> — <span class="dc-title">Returns max parameter</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.getmax-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::getMax</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">    Returns max parameter  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.getmax-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.getmax-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div> <div class="refsect1 seealso" id="refsect1-solrcollapsefunction.getmax-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link SolrCollapseFunction::setMax()} - Selects the group heads by the max value of a numeric field or function query</span></li>  </ul> </div></div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Returns max parameter
     * @link https://php.net/manual/zh/solrcollapsefunction.getmax.php
     * @return string
     
*/
    public function getMax() {}

/**
* <div id="solrcollapsefunction.getmin" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::getMin</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::getMin</span> — <span class="dc-title">Returns min parameter</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.getmin-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::getMin</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">    Returns min parameter  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.getmin-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.getmin-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div> <div class="refsect1 seealso" id="refsect1-solrcollapsefunction.getmin-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link SolrCollapseFunction::setMin()} - Sets the initial size of the collapse data structures when collapsing on a numeric field only</span></li>  </ul> </div></div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Returns min parameter
     * @link https://php.net/manual/zh/solrcollapsefunction.getmin.php
     * @return string
     
*/
    public function getMin() {}

/**
* <div id="solrcollapsefunction.getnullpolicy" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::getNullPolicy</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::getNullPolicy</span> — <span class="dc-title">Returns null policy</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.getnullpolicy-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::getNullPolicy</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">    Returns null policy used or null  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.getnullpolicy-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.getnullpolicy-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div> <div class="refsect1 seealso" id="refsect1-solrcollapsefunction.getnullpolicy-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link SolrCollapseFunction::setNullPolicy()} - Sets the NULL Policy</span></li>  </ul> </div></div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Returns null policy
     * @link https://php.net/manual/zh/solrcollapsefunction.getnullpolicy.php
     * @return string
     
*/
    public function getNullPolicy() {}

/**
* <div id="solrcollapsefunction.getsize" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::getSize</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::getSize</span> — <span class="dc-title">Returns size parameter</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.getsize-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::getSize</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">    Gets the initial size of the collapse data structures when collapsing on a numeric field only  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.getsize-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.getsize-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div>  <div class="refsect1 seealso" id="refsect1-solrcollapsefunction.getsize-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link SolrCollapseFunction::setSize()} - Sets the initial size of the collapse data structures when collapsing on a numeric field only</span></li>  </ul> </div></div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Returns size parameter
     * @link https://php.net/manual/zh/solrcollapsefunction.getsize.php
     * @return int
     
*/
    public function getSize() {}

/**
* <div id="solrcollapsefunction.setfield" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::setField</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::setField</span> — <span class="dc-title">Sets the field to collapse on</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.setfield-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::setField</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$fieldName</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div>  <p class="para rdfs-comment">    The field name to collapse on.          In order to collapse a result. The field type must be a single valued String, Int or Float.  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.setfield-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">fieldName</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.setfield-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span>  </p> </div></div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Sets the field to collapse on
     * @link https://php.net/manual/zh/solrcollapsefunction.setfield.php
     * @param string $fieldName <p>
     * The field name to collapse on. In order to collapse a result. The field type must be a single valued String, Int
     * or Float.
     * </p>
     * @return SolrCollapseFunction
     
*/
    public function setField($fieldName) {}

/**
* <div id="solrcollapsefunction.sethint" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::setHint</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::setHint</span> — <span class="dc-title">Sets collapse hint</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.sethint-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::setHint</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$hint</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div>  <p class="para rdfs-comment">    Sets collapse hint  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.sethint-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">hint</span></dt>    <dd>     <p class="para">      Currently there is only one hint available "top_fc", which stands for top level FieldCache     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.sethint-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span>  </p> </div> <div class="refsect1 examples" id="refsect1-solrcollapsefunction.sethint-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-4958">   <p><strong>示例 #1 <span class="function"><strong>SolrCollapseFunction::setHint()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br></span><span style="color: #FF8000">// ... <br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例的输出类似于：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">...</blockquote></div>   </div>  </div> </div> </div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Sets collapse hint
     * @link https://php.net/manual/zh/solrcollapsefunction.sethint.php
     * @param string $hint <p>
     * Currently there is only one hint available "top_fc", which stands for top level FieldCache
     * </p>
     * @return SolrCollapseFunction
     
*/
    public function setHint($hint) {}

/**
* <div id="solrcollapsefunction.setmax" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::setMax</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::setMax</span> — <span class="dc-title">Selects the group heads by the max value of a numeric field or function query</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.setmax-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::setMax</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$max</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div>  <p class="para rdfs-comment">    Selects the group heads by the max value of a numeric field or function query.  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.setmax-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">max</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.setmax-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span>  </p> </div> <div class="refsect1 examples" id="refsect1-solrcollapsefunction.setmax-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-4959">   <p><strong>示例 #1 <span class="function"><strong>SolrCollapseFunction::setMax()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$func </span><span style="color: #007700">= new </span><span style="color: #9876AA">SolrCollapseFunction</span><span style="color: #007700">(</span><span style="color: #DD0000">'field_name'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$func</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">setMax</span><span style="color: #007700">(</span><span style="color: #DD0000">'sum(cscore(),field(some_field))'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$query </span><span style="color: #007700">= new </span><span style="color: #9876AA">SolrQuery</span><span style="color: #007700">(</span><span style="color: #DD0000">'*:*'</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">$query</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">collapse</span><span style="color: #007700">(</span><span style="color: #9876AA">$func</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>  </div> </div></div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Selects the group heads by the max value of a numeric field or function query.
     * @link https://php.net/manual/zh/solrcollapsefunction.setmax.php
     * @param string $max
     * @return SolrCollapseFunction
     
*/
    public function setMax($max) {}

/**
* <div id="solrcollapsefunction.setmin" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::setMin</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::setMin</span> — <span class="dc-title">Sets the initial size of the collapse data structures when collapsing on a numeric field only</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.setmin-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::setMin</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$min</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div>  <p class="para rdfs-comment">    Sets the initial size of the collapse data structures when collapsing on a numeric field only  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.setmin-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">min</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.setmin-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span>  </p> </div></div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Sets the initial size of the collapse data structures when collapsing on a numeric field only
     * @link https://php.net/manual/zh/solrcollapsefunction.setmin.php
     * @param string $min
     * @return SolrCollapseFunction
     
*/
    public function setMin($min) {}

/**
* <div id="solrcollapsefunction.setnullpolicy" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::setNullPolicy</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::setNullPolicy</span> — <span class="dc-title">Sets the NULL Policy</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.setnullpolicy-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::setNullPolicy</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">$nullPolicy</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div>  <p class="para rdfs-comment">    Sets the NULL Policy. One of the 3 policies defined as class constants shall be passed.    Accepts ignore, expand, or collapse policies.  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.setnullpolicy-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">nullPolicy</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.setnullpolicy-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span>  </p> </div></div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Sets the NULL Policy
     * @link https://php.net/manual/zh/solrcollapsefunction.setnullpolicy.php
     * @param string $nullPolicy
     * @return SolrCollapseFunction
     
*/
    public function setNullPolicy($nullPolicy) {}

/**
* <div id="solrcollapsefunction.setsize" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrCollapseFunction::setSize</h1>  <p class="verinfo">(PECL solr &gt;= 2.2.0)</p><p class="refpurpose"><span class="refname">SolrCollapseFunction::setSize</span> — <span class="dc-title">Sets the initial size of the collapse data structures when collapsing on a numeric field only</span></p> </div> <div class="refsect1 description" id="refsect1-solrcollapsefunction.setsize-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SolrCollapseFunction::setSize</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$size</span></span>): <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span></div>  <p class="para rdfs-comment">    Sets the initial size of the collapse data structures when collapsing on a numeric field only.  </p> </div> <div class="refsect1 parameters" id="refsect1-solrcollapsefunction.setsize-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">size</span></dt>    <dd>     <p class="para">           </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-solrcollapsefunction.setsize-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="type" style="color:#EAB766">{@link SolrCollapseFunction}</span>  </p> </div></div>
    *
     * (PECL solr &gt;= 2.2.0)<br/>
     * Sets the initial size of the collapse data structures when collapsing on a numeric field only.
     * @link https://php.net/manual/zh/solrcollapsefunction.setsize.php
     * @param int $size
     * @return SolrCollapseFunction
     
*/
    public function setSize($size) {}

    /**
     * (PECL solr &gt;= 2.2.0)<br/>
     * Returns a string representing the constructed collapse function
     * @link https://php.net/manual/en/solrcollapsefunction.tostring.php
     * @return string
     */
    public function __toString() {}
}
