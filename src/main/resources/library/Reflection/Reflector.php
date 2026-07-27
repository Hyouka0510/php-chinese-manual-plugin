<?php

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;

/**
 * <div id="class.reflector" class="reference"> <h1 class="title">Reflector 接口</h1>  <div class="partintro"><p class="verinfo">(PHP 5, PHP 7, PHP 8)</p>  <div class="section" id="reflector.intro">   <h2 class="title">简介</h2>   <p class="para">    <span class="classname"><strong class="classname">Reflector</strong></span> 是一个接口，被所有可导出的反射类所实现（implement）。   </p>  </div>  <div class="section" id="reflector.synopsis">   <h2 class="title">接口摘要</h2>   <div class="classsynopsis"><div class="classsynopsisinfo">         <span class="modifier">interface</span> <strong class="interfacename"><strong class="interfacename">Reflector</strong></strong>    <span class="modifier">extends</span>      <a href="https://php.net/manual/zh/class.stringable.php" class="interfacename">Stringable</a> {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832">{@link Stringable::__toString}</span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>   }</div>  </div>  <div class="section">   <h2 class="title">更新日志</h2>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        已移除 <span class="methodname" style="color:#CC7832">{@link Reflector::export()}</span>。       </td>      </tr>      <tr>       <td>8.0.0</td>       <td>        现在 <span class="classname"><strong class="classname">Reflector</strong></span> 实现（implement）了        <span class="interfacename"><a href="https://php.net/manual/zh/class.stringable.php" class="interfacename">Stringable</a></span>。继承了        <span class="methodname" style="color:#CC7832">{@link Stringable::__toString()}</span>，从而取代        <span class="methodname" style="color:#CC7832"><strong>Reflector::__toString()</strong></span>。       </td>      </tr>     </tbody>       </table>  </div>  <div class="section">   <h2 class="title">参见</h2>   <p class="para">    </p><ul class="simplelist">     <li><span class="methodname" style="color:#CC7832">{@link Reflector::export()}</span></li>    </ul>     </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link Reflector::export} — Exports</li></ul></div>
 * 
 * <b>Reflector</b> is an interface implemented by all
 * exportable Reflection classes.
 *
 * @link https://php.net/manual/zh/class.reflector.php
 */
interface Reflector extends Stringable
{
    /**
 * <div id="reflector.export" class="refentry"> <div class="refnamediv">  <h1 class="refname">Reflector::export</h1>  <p class="verinfo">(PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">Reflector::export</span> — <span class="dc-title">Exports</span></p> </div> <div id="reflector.export-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 7.4.0起<em>弃用</em>，自 PHP 8.0.0 起<em>移除</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-reflector.export-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="modifier">static</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>Reflector::export</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   输出。  </p>  <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div> </div> <div class="refsect1 parameters" id="refsect1-reflector.export-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-reflector.export-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">     </p> </div> <div class="refsect1 changelog" id="refsect1-reflector.export-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.0.0</td>      <td>       此函数已移除。      </td>     </tr>     <tr>      <td>7.4.0</td>      <td>       此函数已废弃。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-reflector.export-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="methodname" style="color:#CC7832"><strong>Reflection::__toString()</strong></span></li>   </ul>   </div></div>
 * 
     * Exports a class.
     *
     * @link https://php.net/manual/zh/reflector.export.php
     * @return string|null
     * @removed 7.4
     */
    public static function export();

    /**
     * Returns the string representation of any Reflection object.
     *
     * Please note that since PHP 8.0 this method is absent in this interface
     * and inherits from the {@see Stringable} parent.
     *
     * @return string
     */
    #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')]
    public function __toString();
}
