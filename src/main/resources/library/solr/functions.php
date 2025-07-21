<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
* <div id="function.solr-get-version" class="refentry"> <div class="refnamediv">  <h1 class="refname">solr_get_version</h1>  <p class="verinfo">(PECL solr &gt;= 0.9.1)</p><p class="refpurpose"><span class="refname">solr_get_version</span> — <span class="dc-title">返回当前Solr扩展的版本</span></p> </div> <div class="refsect1 description" id="refsect1-function.solr-get-version-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>solr_get_version</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   函数已字符串形式返回扩展的当前版本。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.solr-get-version-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.solr-get-version-returnvalues">  <h3 class="title">返回值</h3>    <p class="para">   获取成功则返回版本号，否则返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 。  </p> </div> <div class="refsect1 errors" id="refsect1-function.solr-get-version-errors">  <h3 class="title">错误／异常</h3>  <p class="para">   此函数不抛出异常  </p> </div> <div class="refsect1 examples" id="refsect1-function.solr-get-version-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4891">    <p><strong>示例 #1 <span class="function"><strong>solr_get_version()</strong></span> 示例</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br>$solr_version </span><span style="color: #007700">= </span><span style="color: #9876AA">solr_get_version</span><span style="color: #007700">();<br><br>print </span><span style="color: #9876AA">$solr_version</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">0.9.6</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.solr-get-version-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link SolrUtils::getSolrVersion()} - Returns the current version of the Solr extension</span></li>   </ul>   </div></div>
*
 * (PECL solr &gt;= 0.9.1)<br/>
 * Returns the current version of the Apache Solr extension
 * @link https://php.net/manual/zh/function.solr-get-version.php
 * @return string|false <p>
 * It returns a string on success and <b>FALSE</b> on failure.
 * </p>
 
*/
function solr_get_version() {}
