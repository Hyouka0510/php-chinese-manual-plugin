<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
 * <div id="class.solrutils" class="reference"> <h1 class="title">The SolrUtils class</h1>  <div class="partintro"><p class="verinfo">(PECL solr &gt;= 0.9.2)</p>  <div class="section" id="solrutils.intro">   <h2 class="title">简介</h2>   <p class="para">    Contains utility methods for retrieving the current extension version and preparing query phrases.   </p>   <p class="para">Also contains method for escaping query strings and parsing XML responses.</p>  </div>  <div class="section" id="solrutils.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">abstract</span>      <span class="modifier">class</span> <strong class="classname">SolrUtils</strong>     </span>     {</div>        <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/solrutils.digestxmlresponse.php" class="methodname" style="color:#CC7832">digestXmlResponse</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$xmlresponse</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$parse_mode</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.solrobject.php" class="type SolrObject" style="color:#EAB766">SolrObject</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/solrutils.escapequerychars.php" class="methodname" style="color:#CC7832">escapeQueryChars</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$str</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/solrutils.getsolrversion.php" class="methodname" style="color:#CC7832">getSolrVersion</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/solrutils.queryphrase.php" class="methodname" style="color:#CC7832">queryPhrase</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$str</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>   }</div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SolrUtils::digestXmlResponse} — Parses an response XML string into a SolrObject</li><li>{@link SolrUtils::escapeQueryChars} — Escapes a lucene query string</li><li>{@link SolrUtils::getSolrVersion} — Returns the current version of the Solr extension</li><li>{@link SolrUtils::queryPhrase} — Prepares a phrase from an unescaped lucene string</li></ul></div>
 * 
 * (PECL solr &gt;= 0.9.2)<br/>
 * Class SolrUtils<br/>
 * Contains utility methods for retrieving the current extension version and preparing query phrases.
 * Also contains method for escaping query strings and parsing XML responses.
 * @link https://php.net/manual/zh/class.solrutils.php
 */
abstract class SolrUtils
{
    /**
 * <div id="solrutils.digestxmlresponse" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrUtils::digestXmlResponse</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrUtils::digestXmlResponse</span> — <span class="dc-title">Parses an response XML string into a SolrObject</span></p> </div> <div class="refsect1 description" id="refsect1-solrutils.digestxmlresponse-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>SolrUtils::digestXmlResponse</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$xmlresponse</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$parse_mode</span><span class="initializer"> = 0</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.solrobject.php" class="type SolrObject" style="color:#EAB766">SolrObject</a></span></div>  <p class="para rdfs-comment">   This method parses an response XML string from the Apache Solr server into a SolrObject. It throws a SolrException if there was an error.  </p> </div> <div class="refsect1 parameters" id="refsect1-solrutils.digestxmlresponse-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">xmlresponse</span></dt>     <dd>      <p class="para">       The XML response string from the Solr server.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">parse_mode</span></dt>     <dd>      <p class="para">       Use SolrResponse::PARSE_SOLR_OBJ or SolrResponse::PARSE_SOLR_DOC      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-solrutils.digestxmlresponse-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the SolrObject representing the XML response.  </p>    <p class="para">If the parse_mode parameter is set to SolrResponse::PARSE_SOLR_OBJ Solr documents will be parses as SolrObject instances.</p>   <p class="para">If it is set to SolrResponse::PARSE_SOLR_DOC, they will be parsed as SolrDocument instances.</p>   </div></div>
 * 
     * (PECL solr &gt;= 0.9.2)<br/>
     * Parses an response XML string into a SolrObject
     * @link https://php.net/manual/zh/solrutils.digestxmlresponse.php
     * @param string $xmlresponse <p>
     * The XML response string from the Solr server.
     * </p>
     * @param int $parse_mode [optional] <p>
     * Use SolrResponse::PARSE_SOLR_OBJ or SolrResponse::PARSE_SOLR_DOC
     * </p>
     * @return SolrObject <p>
     * Returns the SolrObject representing the XML response.
     * </p>
     * <p>
     * If the parse_mode parameter is set to SolrResponse::PARSE_SOLR_OBJ Solr documents will be parses as SolrObject instances.
     * </p>
     * <p>
     * If it is set to SolrResponse::PARSE_SOLR_DOC, they will be parsed as SolrDocument instances.
     * </p>
     * @throws SolrException
     */
    public static function digestXmlResponse($xmlresponse, $parse_mode = 0) {}

    /**
 * <div id="solrutils.escapequerychars" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrUtils::escapeQueryChars</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrUtils::escapeQueryChars</span> — <span class="dc-title">Escapes a lucene query string</span></p> </div> <div class="refsect1 description" id="refsect1-solrutils.escapequerychars-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>SolrUtils::escapeQueryChars</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$str</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Lucene supports escaping special characters that are part of the query syntax.  </p>  <p class="para">The current list special characters are:</p>  <p class="para"></p><div class="descriptioncode"><blockquote style="border:1px gray solid;">+&nbsp;-&nbsp;&amp;&amp;&nbsp;||&nbsp;!&nbsp;(&nbsp;)&nbsp;{&nbsp;}&nbsp;[&nbsp;]&nbsp;^&nbsp;"&nbsp;~&nbsp;*&nbsp;?&nbsp;:&nbsp;\&nbsp;/</blockquote></div>  <p class="para">These characters are part of the query syntax and must be escaped</p> </div> <div class="refsect1 parameters" id="refsect1-solrutils.escapequerychars-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">str</span></dt>     <dd>      <p class="para">       This is the query string to be escaped.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-solrutils.escapequerychars-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">  Returns the escaped string 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>.  </p> </div></div>
 * 
     * (PECL solr &gt;= 0.9.2)<br/>
     * Escapes a lucene query string
     * @link https://php.net/manual/zh/solrutils.escapequerychars.php
     * @param string $str <p>
     * This is the query string to be escaped.
     * </p>
     * @return string|false <p>
     * Returns the escaped string or <b>FALSE</b> on failure.
     * </p>
     */
    public static function escapeQueryChars($str) {}

    /**
 * <div id="solrutils.getsolrversion" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrUtils::getSolrVersion</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrUtils::getSolrVersion</span> — <span class="dc-title">Returns the current version of the Solr extension</span></p> </div> <div class="refsect1 description" id="refsect1-solrutils.getsolrversion-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>SolrUtils::getSolrVersion</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Returns the current Solr version.  </p> </div> <div class="refsect1 parameters" id="refsect1-solrutils.getsolrversion-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-solrutils.getsolrversion-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   The current version of the Apache Solr extension.  </p> </div></div>
 * 
     * (PECL solr &gt;= 0.9.2)<br/>
     * Returns the current version of the Solr extension
     * @link https://php.net/manual/zh/solrutils.getsolrversion.php
     * @return string <p>
     * The current version of the Apache Solr extension.
     * </p>
     */
    public static function getSolrVersion() {}

    /**
 * <div id="solrutils.queryphrase" class="refentry"> <div class="refnamediv">  <h1 class="refname">SolrUtils::queryPhrase</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.2)</p><p class="refpurpose"><span class="refname">SolrUtils::queryPhrase</span> — <span class="dc-title">Prepares a phrase from an unescaped lucene string</span></p> </div> <div class="refsect1 description" id="refsect1-solrutils.queryphrase-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="modifier">static</span> <span class="methodname" style="color:#CC7832"><strong>SolrUtils::queryPhrase</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$str</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Prepares a phrase from an unescaped lucene string.  </p> </div> <div class="refsect1 parameters" id="refsect1-solrutils.queryphrase-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">str</span></dt>     <dd>      <p class="para">       The lucene phrase.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-solrutils.queryphrase-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the phrase contained in double quotes.  </p> </div></div>
 * 
     * (PECL solr &gt;= 0.9.2)<br/>
     * Prepares a phrase from an unescaped lucene string
     * @link https://php.net/manual/zh/solrutils.queryphrase.php
     * @param string $str <p>
     * The lucene phrase.
     * </p>
     * @return string <p>
     * Returns the phrase contained in double quotes.
     * </p>
     */
    public static function queryPhrase($str) {}
}
