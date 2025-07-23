<?php

/**
 * <div id="function.lzf-compress" class="refentry"> <div class="refnamediv">  <h1 class="refname">lzf_compress</h1>  <p class="verinfo">(PECL lzf &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">lzf_compress</span> — <span class="dc-title">   LZF compression  </span></p> </div> <div class="refsect1 description" id="refsect1-function.lzf-compress-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>lzf_compress</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$data</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>lzf_compress()</strong></span> compresses the given   <span class="parameter" style="color:#3A95FF">data</span> string using LZF encoding.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.lzf-compress-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       The string to compress.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.lzf-compress-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the compressed data or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if an error occurred.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.lzf-compress-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link lzf_decompress()} - LZF decompression</span></li>   </ul>   </div></div>
 * 
 * Compresses the given data string using LZF encoding.
 *
 * @link https://www.php.net/manual/en/function.lzf-compress.php
 *
 * @param string $data Data to be compressed
 *
 * @return false|string Returns the compressed data or FALSE if an error occurred.
 *
 * @since 0.1.0
 */
function lzf_compress($data) {}

/**
 * <div id="function.lzf-decompress" class="refentry"> <div class="refnamediv">  <h1 class="refname">lzf_decompress</h1>  <p class="verinfo">(PECL lzf &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">lzf_decompress</span> — <span class="dc-title">   LZF decompression  </span></p> </div> <div class="refsect1 description" id="refsect1-function.lzf-decompress-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>lzf_decompress</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$data</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   <span class="function">{@link lzf_compress()}</span> decompresses the given   <span class="parameter" style="color:#3A95FF">data</span> string containing lzf encoded data.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.lzf-decompress-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">data</span></dt>     <dd>      <p class="para">       The compressed string.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.lzf-decompress-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the decompressed data or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if an error occurred.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.lzf-decompress-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link lzf_compress()} - LZF compression</span></li>   </ul>   </div></div>
 * 
 * Decompresses the given data string containing lzf encoded data.
 *
 * @link https://www.php.net/manual/en/function.lzf-decompress.php
 *
 * @param string $data The compressed string.
 *
 * @return false|string Returns the decompressed data or FALSE if an error occurred.
 *
 * @since 0.1.0
 */
function lzf_decompress($data) {}

/**
 * <div id="function.lzf-optimized-for" class="refentry"> <div class="refnamediv">  <h1 class="refname">lzf_optimized_for</h1>  <p class="verinfo">(PECL lzf &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">lzf_optimized_for</span> — <span class="dc-title">   Determines what LZF extension was optimized for  </span></p> </div> <div class="refsect1 description" id="refsect1-function.lzf-optimized-for-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>lzf_optimized_for</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   Determines what was LZF extension optimized for during compilation.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.lzf-optimized-for-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.lzf-optimized-for-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns 1 if LZF was optimized for speed, 0 for compression.  </p> </div></div>
 * 
 * Determines what was LZF extension optimized for during compilation.
 *
 * @link https://www.php.net/manual/en/function.lzf-optimized-for.php
 *
 * @return int Returns 1 if LZF was optimized for speed, 0 for compression.
 *
 * @since 1.0.0
 */
function lzf_optimized_for() {}
