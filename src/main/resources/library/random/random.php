<?php

namespace {
    use JetBrains\PhpStorm\Deprecated as Deprecated;
    use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
    use JetBrains\PhpStorm\Internal\PhpStormStubsElementAvailable;
    use JetBrains\PhpStorm\Pure;

    /**
 * <div id="function.lcg-value" class="refentry"> <div class="refnamediv">  <h1 class="refname">lcg_value</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">lcg_value</span> — <span class="dc-title">组合线性同余发生器</span></p> </div> <div id="function.lcg-value-refsynopsisdiv">  <div class="warning"><strong class="warning">警告</strong><p class="simpara">此函数自 PHP 8.4.0起<em>弃用</em>。强烈建议不要应用此函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.lcg-value-description">  <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>    <span class="methodname" style="color:#CC7832"><strong>lcg_value</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>lcg_value()</strong></span> 返回范围为   (0, 1) 的一个伪随机数。本函数组合了周期为   2^31 - 85 和 2^31 - 249 的两个同余发生器。本函数的周期等于这两个素数的乘积。  </p>  <div class="caution"><strong class="caution">警告</strong> <p class="para">  本函数并不会生成安全加密的值，并且<em>不可</em>用于加密或者要求返回值不可猜测的目的。 </p> <p class="para">  如果需要加密安全随机，则可以将 <span class="classname"><a href="https://php.net/manual/zh/class.random-engine-secure.php" class="classname">Random\Engine\Secure</a></span> 引擎用于  <span class="classname"><a href="https://php.net/manual/zh/class.random-randomizer.php" class="classname">Random\Randomizer</a></span>。对于简单的用例，<span class="function">{@link random_int()}</span>  和 <span class="function">{@link random_bytes()}</span> 函数提供了操作系统的 <span>CSPRNG</span> 支持的方便且安全的 <span>API</span>。 </p></div>  <div class="caution"><strong class="caution">警告</strong>   <p class="para">    Scaling the return value to a different interval using multiplication    or addition (a so-called affine transformation) might result in a bias    in the resulting value as floats are not equally dense across the number    line. As not all values can be exactly represented by a float, the    result of the affine transformation might also result in values outside    of the requested interval.   </p>   <p class="para">    使用 <span class="methodname" style="color:#CC7832">{@link Random\Randomizer::getFloat()}</span> 在任意间隔内生成随机浮点数。使用    <span class="methodname" style="color:#CC7832">{@link Random\Randomizer::getInt()}</span> 在任意间隔内生成随机整数。   </p>  </div> </div> <div class="refsect1 parameters" id="refsect1-function.lcg-value-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.lcg-value-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   介于 0.0 和 1.0（含）之间的伪随机浮点值。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.lcg-value-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.4.0</td>      <td>       此函数已被弃用。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 seealso" id="refsect1-function.lcg-value-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="methodname" style="color:#CC7832">{@link Random\Randomizer::getFloat()} - Get a uniformly selected float</span></li>    <li><span class="methodname" style="color:#CC7832">{@link Random\Randomizer::getInt()} - Get a uniformly selected integer</span></li>    <li><span class="function">{@link random_int()} - 获取生成加密安全、均匀分布的整数</span></li>   </ul>   </div></div>
 * 
     * Combined linear congruential generator
     * @link https://php.net/manual/zh/function.lcg-value.php
     * @return float A pseudo random float value in the range of (0, 1)
     */
    #[Deprecated("The function is deprecated", since: "8.4")]
    function lcg_value(): float {}

    /**
 * <div id="function.mt-srand" class="refentry"> <div class="refnamediv">  <h1 class="refname">mt_srand</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mt_srand</span> — <span class="dc-title">播下一个更好的随机数发生器种子</span></p> </div> <div class="refsect1 description" id="refsect1-function.mt-srand-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mt_srand</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">\$seed</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$mode</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/random.constants.php#constant.mt-rand-mt19937">MT_RAND_MT19937</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   用 <span class="parameter" style="color:#3A95FF">seed</span> 来给随机数发生器播种。 没有设定 <span class="parameter" style="color:#3A95FF">seed</span> 参数时，会被设为随时数。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">不再需要用<span class="function">{@link srand()}</span> 或 <span class="function"><strong>mt_srand()</strong></span>给随机数发生器播种，因为现在是由系统自动完成的。</span></p></blockquote>  <div class="caution"><strong class="caution">警告</strong> <p class="para">  由于 Mt19937（“梅森旋转算法”）引擎仅接受 32 位整数作为种子，因此尽管 Mt19937 的范围为  2<sup class="superscript">19937</sup>-1，但可能的随机序列数量仅限于 2<sup class="superscript">32</sup>（即 4,294,967,296）。 </p> <p class="para">  当依赖隐式或显式随机播种时，重复会出现得更早。根据生日问题，在少于 80,000 个随机生成的种子后，预计重复种子的概率为  50%。在随机生成大约 30,000 个种子后，重复种子的概率为 10%。 </p> <p class="para">  This makes Mt19937 unsuitable for applications where duplicated sequences must not happen with  more than a negligible probability.  如果需要可重复的种子，<span class="classname"><a href="https://php.net/manual/zh/class.random-engine-xoshiro256starstar.php" class="classname">Random\Engine\Xoshiro256StarStar</a></span> 和  <span class="classname"><a href="https://php.net/manual/zh/class.random-engine-pcgoneseq128xslrr64.php" class="classname">Random\Engine\PcgOneseq128XslRr64</a></span> 引擎都支持更大的种子，它们不太可能随机碰撞。如果不需要再现性，<span class="classname"><a href="https://php.net/manual/zh/class.random-engine-secure.php" class="classname">Random\Engine\Secure</a></span>  引擎提供加密安全随机性。 </p></div>  </div> <div class="refsect1 parameters" id="refsect1-function.mt-srand-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">seed</span></dt>     <dd>      <p class="para">       用线性同余生成器生成的值填充状态，该生成器使用解释为无符号 32 位整数的 <span class="parameter" style="color:#3A95FF">seed</span> 进行播种。      </p>      <p class="para">       如果省略 <span class="parameter" style="color:#3A95FF">seed</span> 或为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，则将使用随机无符号 32 位整数。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       使用以下一个常量指定要使用的实现算法。       </p><ul class="simplelist">        <li>         <strong><span><a href="https://php.net/manual/zh/random.constants.php#constant.mt-rand-mt19937">MT_RAND_MT19937</a></span></strong>：         正确的 Mt19937 实现，自 PHP 7.1.0 起可用。        </li>        <li>         <strong><span><a href="https://php.net/manual/zh/random.constants.php#constant.mt-rand-php">MT_RAND_PHP</a></span></strong>          使用不正确的梅森旋转（Mersenne Twister）实现，在 PHP 7.1.0          之前一直用于默认实现，此模式可用于向后兼容。        </li>       </ul>            <div class="warning"><strong class="warning">警告</strong><p class="simpara">本特性已自 PHP 8.3.0起<em>废弃</em>。强烈建议不要使用本特性。</p></div>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mt-srand-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.mt-srand-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.3.0</td>       <td>        <span class="parameter" style="color:#3A95FF">seed</span> 现在可为 null。       </td>      </tr>      <tr>       <td>7.1.0</td>       <td>        <span class="function">{@link srand()}</span> <a href="https://php.net/manual/zh/migration71.incompatible.php#migration71.incompatible.rand-srand-aliases" class="link">成为</a>        <span class="function"><strong>mt_srand()</strong></span> 的别名。       </td>      </tr>      <tr>       <td>7.1.0</td>       <td>        <span class="function">{@link mt_rand()}</span> <a href="https://php.net/manual/zh/migration71.incompatible.php#migration71.incompatible.fixes-to-mt_rand-algorithm" class="link">成为</a>使用梅森旋转（Mersenne        Twister）算法的固定、正确版本。要使用旧行为，请使用 <span class="function"><strong>mt_srand()</strong></span> 并将        <strong><span><a href="https://php.net/manual/zh/random.constants.php#constant.mt-rand-php">MT_RAND_PHP</a></span></strong> 作为第二个参数。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.mt-srand-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mt_rand()} - 通过梅森旋转（Mersenne Twister）随机数生成器生成随机值</span></li>    <li><span class="function">{@link mt_getrandmax()} - 显示随机数的最大可能值</span></li>    <li><span class="function">{@link srand()} - 播下随机数发生器种子</span></li>   </ul>   </div></div>
 * 
     * Seeds the Mersenne Twister Random Number Generator
     * @link https://php.net/manual/zh/function.mt-srand.php
     * @param int|null $seed <p>
     * An optional seed value
     * </p>
     * @param int $mode [optional] <p>
     * Use one of the following constants to specify the implementation of the algorithm to use.
     * </p>
     * @return void
     */
    function mt_srand(
        #[LanguageLevelTypeAware(['8.3' => 'int|null'], default: 'int')] $seed = null,
        #[PhpStormStubsElementAvailable(from: '7.1')] int $mode = MT_RAND_MT19937
    ): void {}

    /**
 * <div id="function.srand" class="refentry"> <div class="refnamediv">  <h1 class="refname">srand</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">srand</span> — <span class="dc-title">播下随机数发生器种子</span></p> </div> <div class="refsect1 description" id="refsect1-function.srand-description">  <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>srand</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></span> <span class="parameter" style="color:#3A95FF">\$seed</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$mode</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/random.constants.php#constant.mt-rand-mt19937">MT_RAND_MT19937</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   使用 <span class="parameter" style="color:#3A95FF">seed</span> 播下随机数发生器种子，或者<span class="parameter" style="color:#3A95FF">seed</span> 是 <span class="literal">0</span> 时，使用随时值。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>: <span class="simpara">不再需要用<span class="function"><strong>srand()</strong></span> 或 <span class="function">{@link mt_srand()}</span>给随机数发生器播种，因为现在是由系统自动完成的。</span></p></blockquote>  <div class="caution"><strong class="caution">警告</strong> <p class="para">  由于 Mt19937（“梅森旋转算法”）引擎仅接受 32 位整数作为种子，因此尽管 Mt19937 的范围为  2<sup class="superscript">19937</sup>-1，但可能的随机序列数量仅限于 2<sup class="superscript">32</sup>（即 4,294,967,296）。 </p> <p class="para">  当依赖隐式或显式随机播种时，重复会出现得更早。根据生日问题，在少于 80,000 个随机生成的种子后，预计重复种子的概率为  50%。在随机生成大约 30,000 个种子后，重复种子的概率为 10%。 </p> <p class="para">  This makes Mt19937 unsuitable for applications where duplicated sequences must not happen with  more than a negligible probability.  如果需要可重复的种子，<span class="classname"><a href="https://php.net/manual/zh/class.random-engine-xoshiro256starstar.php" class="classname">Random\Engine\Xoshiro256StarStar</a></span> 和  <span class="classname"><a href="https://php.net/manual/zh/class.random-engine-pcgoneseq128xslrr64.php" class="classname">Random\Engine\PcgOneseq128XslRr64</a></span> 引擎都支持更大的种子，它们不太可能随机碰撞。如果不需要再现性，<span class="classname"><a href="https://php.net/manual/zh/class.random-engine-secure.php" class="classname">Random\Engine\Secure</a></span>  引擎提供加密安全随机性。 </p></div>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    自 PHP 7.1.0 起，<span class="function"><strong>srand()</strong></span> 成为 <span class="function">{@link mt_srand()}</span> 的别名。   </span>  </p></blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.srand-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">seed</span></dt>     <dd>      <p class="para">       用线性同余生成器生成的值填充状态，该生成器使用解释为无符号 32 位整数的 <span class="parameter" style="color:#3A95FF">seed</span> 进行播种。      </p>      <p class="para">       如果省略 <span class="parameter" style="color:#3A95FF">seed</span> 或为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，则将使用随机无符号 32 位整数。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.srand-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.srand-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.3.0</td>       <td>        <span class="parameter" style="color:#3A95FF">seed</span> 现在可为 null。       </td>      </tr>      <tr>       <td>7.1.0</td>       <td>        <span class="function"><strong>srand()</strong></span> <a href="https://php.net/manual/zh/migration71.incompatible.php#migration71.incompatible.rand-srand-aliases" class="link">成为</a> <span class="function">{@link mt_srand()}</span> 的别名。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.srand-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link rand()} - 产生一个随机整数</span></li>    <li><span class="function">{@link getrandmax()} - 显示随机数最大的可能值</span></li>    <li><span class="function">{@link mt_srand()} - 播下一个更好的随机数发生器种子</span></li>   </ul>   </div></div>
 * 
     * Seed the random number generator
     * <p><strong>Note</strong>: As of PHP 7.1.0, {@see srand()} has been made
     * an alias of {@see mt_srand()}.
     * </p>
     * @link https://php.net/manual/zh/function.srand.php
     * @param int|null $seed <p>
     * Optional seed value
     * </p>
     * @param int $mode [optional] <p>
     * Use one of the following constants to specify the implementation of the algorithm to use.
     * </p>
     * @return void
     */
    function srand(
        #[LanguageLevelTypeAware(['8.3' => 'int|null'], default: 'int')] $seed = null,
        #[PhpStormStubsElementAvailable(from: '7.1')] int $mode = MT_RAND_MT19937
    ): void {}

    /**
 * <div id="function.rand" class="refentry"> <div class="refnamediv">  <h1 class="refname">rand</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">rand</span> — <span class="dc-title">产生一个随机整数</span></p> </div> <div class="refsect1 description" id="refsect1-function.rand-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rand</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>rand</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$min</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$max</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="simpara">   如果没有提供可选参数 <span class="parameter" style="color:#3A95FF">min</span> 和   <span class="parameter" style="color:#3A95FF">max</span> 调用 <span class="function"><strong>rand()</strong></span>   会返回 0 到 <span class="function">{@link getrandmax()}</span>   之间的伪随机整数。例如想要 5 到 15（包括 5 和 15）之间的随机数，用   <span class="literal">rand(5, 15)</span>。  </p>  <div class="caution"><strong class="caution">警告</strong> <p class="para">  本函数并不会生成安全加密的值，并且<em>不可</em>用于加密或者要求返回值不可猜测的目的。 </p> <p class="para">  如果需要加密安全随机，则可以将 <span class="classname"><a href="https://php.net/manual/zh/class.random-engine-secure.php" class="classname">Random\Engine\Secure</a></span> 引擎用于  <span class="classname"><a href="https://php.net/manual/zh/class.random-randomizer.php" class="classname">Random\Randomizer</a></span>。对于简单的用例，<span class="function">{@link random_int()}</span>  和 <span class="function">{@link random_bytes()}</span> 函数提供了操作系统的 <span>CSPRNG</span> 支持的方便且安全的 <span>API</span>。 </p></div>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    在 PHP 7.1.0 之前，<span class="function">{@link getrandmax()}</span>    在某些平台（如 Windows）上仅为 32767。如果需要的范围大于 32767，那么指定 <span class="parameter" style="color:#3A95FF">min</span>    和 <span class="parameter" style="color:#3A95FF">max</span> 参数就可以生成更大的数了，或者考虑用    <span class="function">{@link mt_rand()}</span> 来替代之。   </span>  </p></blockquote>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    <span class="simpara">    自 PHP 7.1.0 起，<span class="function"><strong>rand()</strong></span> 和 <span class="function">{@link mt_rand()}</span>    使用相同的随机数生成器。为了保持向后兼容性，<span class="function"><strong>rand()</strong></span> 允许    <span class="parameter" style="color:#3A95FF">max</span> 小于 <span class="parameter" style="color:#3A95FF">min</span>，而不是像    <span class="function">{@link mt_rand()}</span> 一样，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。   </span>  </p></blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.rand-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">min</span></dt>     <dd>      <p class="para">       返回的最低值（默认：0）      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">max</span></dt>     <dd>      <p class="para">       返回的最高值（默认：<span class="function">{@link getrandmax()}</span>）      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.rand-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   介于 <span class="parameter" style="color:#3A95FF">min</span> （或是 0）和 <span class="parameter" style="color:#3A95FF">max</span> （或   <span class="function">{@link getrandmax()}</span>，包含该值）之间的伪随机值。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.rand-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>7.2.0</td>       <td>        <span class="function"><strong>rand()</strong></span> 已收到模偏差的 <a href="https://php.net/manual/zh/migration72.incompatible.php#migration72.incompatible.rand-mt_rand-output" class="link">错误修复</a>。这意味着使用特定种子生成的序列可能与        64 位机器上的 PHP 7.1.0 不同。       </td>      </tr>      <tr>       <td>7.1.0</td>       <td>        <span class="function"><strong>rand()</strong></span> <a href="https://php.net/manual/zh/migration71.incompatible.php#migration71.incompatible.rand-srand-aliases" class="link">成为</a> <span class="function">{@link mt_rand()}</span> 的别名。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.rand-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3745">    <p><strong>示例 #1 <span class="function"><strong>rand()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">rand</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">rand</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br>echo </span><span style="color: #9876AA">rand</span><span style="color: #007700">(</span><span style="color: #9876AA">5</span><span style="color: #007700">, </span><span style="color: #9876AA">15</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">7771<br>22264<br>11</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.rand-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    <span class="parameter" style="color:#3A95FF">min</span> <span class="parameter" style="color:#3A95FF">max</span> 的范围必须在 <span class="function">{@link getrandmax()}</span>    范围内。即 (<span class="parameter" style="color:#3A95FF">max</span> - <span class="parameter" style="color:#3A95FF">min</span>) &lt;=    <span class="function">{@link getrandmax()}</span>。否则，<span class="function"><strong>rand()</strong></span> 可能会返回质量差的随机数。   </p>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.rand-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link srand()} - 播下随机数发生器种子</span></li>    <li><span class="function">{@link getrandmax()} - 显示随机数最大的可能值</span></li>    <li><span class="function">{@link mt_rand()} - 通过梅森旋转（Mersenne Twister）随机数生成器生成随机值</span></li>    <li><span class="function">{@link random_int()} - 获取生成加密安全、均匀分布的整数</span></li>    <li><span class="function">{@link random_bytes()} - Get cryptographically secure random bytes</span></li>   </ul>   </div></div>
 * 
     * Generate a random integer
     * @link https://php.net/manual/zh/function.rand.php
     * @param int $min [optional]
     * @param int $max [optional]
     * @return int A pseudo random value between min
     * (or 0) and max (or getrandmax, inclusive).
     */
    function rand(int $min, int $max): int {}

    /**
 * <div id="function.mt-rand" class="refentry"> <div class="refnamediv">  <h1 class="refname">mt_rand</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mt_rand</span> — <span class="dc-title">通过梅森旋转（Mersenne Twister）随机数生成器生成随机值</span></p> </div> <div class="refsect1 description" id="refsect1-function.mt-rand-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>mt_rand</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <div class="methodsynopsis dc-description"><span class="methodname" style="color:#CC7832"><strong>mt_rand</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$min</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$max</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="simpara">   很多老的 libc   的随机数发生器具有一些不确定和未知的特性而且很慢。<span class="function"><strong>mt_rand()</strong></span>   函数是旧的 <span class="function">{@link rand()}</span> 的临时替代。该函数用了<a href="http://www.math.sci.hiroshima-u.ac.jp/~m-mat/MT/emt.html" class="link external">»&nbsp;梅森旋转</a>中已知的特性作为随机数发生器，它可以产生随机数值的平均速度比   libc 提供的 rand() 快四倍。  </p>  <p class="simpara">   如果没有提供可选参数 <span class="parameter" style="color:#3A95FF">min</span> 和   <span class="parameter" style="color:#3A95FF">max</span>，<span class="function"><strong>mt_rand()</strong></span>   返回 0 到 <span class="function">{@link mt_getrandmax()}</span>   之间的伪随机数。例如想要 5 到 15（包括 5 和 15）之间的随机数，用   <span class="literal">mt_rand(5, 15)</span>。  </p>  <div class="caution"><strong class="caution">警告</strong> <p class="para">  本函数并不会生成安全加密的值，并且<em>不可</em>用于加密或者要求返回值不可猜测的目的。 </p> <p class="para">  如果需要加密安全随机，则可以将 <span class="classname"><a href="https://php.net/manual/zh/class.random-engine-secure.php" class="classname">Random\Engine\Secure</a></span> 引擎用于  <span class="classname"><a href="https://php.net/manual/zh/class.random-randomizer.php" class="classname">Random\Randomizer</a></span>。对于简单的用例，<span class="function">{@link random_int()}</span>  和 <span class="function">{@link random_bytes()}</span> 函数提供了操作系统的 <span>CSPRNG</span> 支持的方便且安全的 <span>API</span>。 </p></div> </div> <div class="refsect1 parameters" id="refsect1-function.mt-rand-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">min</span></dt>     <dd>      <p class="para">       可选的、返回的最小值（默认：0）      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">max</span></dt>     <dd>      <p class="para">       可选的、返回的最大值（默认：<span class="function">{@link mt_getrandmax()}</span>）      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.mt-rand-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回的随机整数值介于 <span class="parameter" style="color:#3A95FF">min</span>（或 0）和   <span class="parameter" style="color:#3A95FF">max</span>（或 <span class="function">{@link mt_getrandmax()}</span>，包括两端）。  </p> </div> <div class="refsect1 errors" id="refsect1-function.mt-rand-errors">  <h3 class="title">错误／异常</h3>  <ul class="itemizedlist">   <li class="listitem">    <span class="simpara">     如果 <span class="parameter" style="color:#3A95FF">max</span> 小于 <span class="parameter" style="color:#3A95FF">min</span>，则会抛出     <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span> 异常。    </span>   </li>  </ul> </div> <div class="refsect1 changelog" id="refsect1-function.mt-rand-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        如果 <span class="parameter" style="color:#3A95FF">max</span> 小于 <span class="parameter" style="color:#3A95FF">min</span>，则会抛出        <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span> 异常。之前会抛出 <strong><span><a href="https://php.net/manual/zh/errorfunc.constants.php#constant.e-warning">E_WARNING</a></span></strong> 错误，并且函数返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。       </td>      </tr>      <tr>       <td>7.2.0</td>       <td>        <span class="function">{@link rand()}</span> 已收到模偏差的 <a href="https://php.net/manual/zh/migration72.incompatible.php#migration72.incompatible.rand-mt_rand-output" class="link">错误修复</a>。这意味着使用特定种子生成的序列可能与        64 位机器上的 PHP 7.1.0 不同。        </td>      </tr>      <tr>       <td>7.1.0</td>       <td>        <span class="function">{@link rand()}</span> <a href="https://php.net/manual/zh/migration71.incompatible.php#migration71.incompatible.rand-srand-aliases" class="link">成为</a> <span class="function"><strong>mt_rand()</strong></span> 的别名。       </td>      </tr>      <tr>       <td>7.1.0</td>       <td>        <span class="function"><strong>mt_rand()</strong></span> <a href="https://php.net/manual/zh/migration71.incompatible.php#migration71.incompatible.fixes-to-mt_rand-algorithm" class="link">成为</a>使用梅森旋转（Mersenne        Twister）算法的固定、正确版本。要使用旧行为，请使用 <span class="function">{@link mt_srand()}</span> 并将        <strong><span><a href="https://php.net/manual/zh/random.constants.php#constant.mt-rand-php">MT_RAND_PHP</a></span></strong> 作为第二个参数。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.mt-rand-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-3744">    <p><strong>示例 #1 <span class="function"><strong>mt_rand()</strong></span> 例子</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br></span><span style="color: #007700">echo </span><span style="color: #9876AA">mt_rand</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br>echo </span><span style="color: #9876AA">mt_rand</span><span style="color: #007700">(), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br><br>echo </span><span style="color: #9876AA">mt_rand</span><span style="color: #007700">(</span><span style="color: #9876AA">5</span><span style="color: #007700">, </span><span style="color: #9876AA">15</span><span style="color: #007700">), </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">1604716014<br>1478613278<br>6</blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.mt-rand-notes">  <h3 class="title">注释</h3>  <div class="warning"><strong class="warning">警告</strong>   <p class="para">    <span class="parameter" style="color:#3A95FF">min</span> <span class="parameter" style="color:#3A95FF">max</span> 的范围必须在 <span class="function">{@link getrandmax()}</span>    范围内。即 (<span class="parameter" style="color:#3A95FF">max</span> - <span class="parameter" style="color:#3A95FF">min</span>) &lt;=    <span class="function">{@link getrandmax()}</span>。否则，<span class="function">{@link rand()}</span> 可能会返回质量差的随机数。   </p>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.mt-rand-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mt_srand()} - 播下一个更好的随机数发生器种子</span></li>    <li><span class="function">{@link mt_getrandmax()} - 显示随机数的最大可能值</span></li>    <li><span class="function">{@link random_int()} - 获取生成加密安全、均匀分布的整数</span></li>    <li><span class="function">{@link random_bytes()} - Get cryptographically secure random bytes</span></li>   </ul>   </div></div>
 * 
     * Generate a random value via the Mersenne Twister Random Number Generator
     * @link https://php.net/manual/zh/function.mt-rand.php
     * @param int $min [optional] <p>
     * Optional lowest value to be returned (default: 0)
     * </p>
     * @param int $max [optional] <p>
     * Optional highest value to be returned (default: mt_getrandmax())
     * </p>
     * @return int A random integer value between min (or 0)
     * and max (or mt_getrandmax, inclusive)
     */
    function mt_rand(int $min, int $max): int {}

    /**
 * <div id="function.mt-getrandmax" class="refentry"> <div class="refnamediv">  <h1 class="refname">mt_getrandmax</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">mt_getrandmax</span> — <span class="dc-title">显示随机数的最大可能值</span></p> </div> <div class="refsect1 description" id="refsect1-function.mt-getrandmax-description">  <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="methodname" style="color:#CC7832"><strong>mt_getrandmax</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="simpara">   返回调用 <span class="function">{@link mt_rand()}</span> 所能返回的最大的随机数。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.mt-getrandmax-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.mt-getrandmax-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回不带参数调用 <span class="function">{@link mt_rand()}</span> 时获取到的最大随机值，这可用于   <span class="parameter" style="color:#3A95FF">max</span> 参数而不是放大结果的最大值（更少的随机）。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.mt-getrandmax-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link mt_rand()} - 通过梅森旋转（Mersenne Twister）随机数生成器生成随机值</span></li>    <li><span class="function">{@link mt_srand()} - 播下一个更好的随机数发生器种子</span></li>    <li><span class="function">{@link getrandmax()} - 显示随机数最大的可能值</span></li>   </ul>   </div>  </div>
 * 
     * Show largest possible random value
     * @link https://php.net/manual/zh/function.mt-getrandmax.php
     * @return int the maximum random value returned by mt_rand
     */
    #[Pure]
    function mt_getrandmax(): int {}

    /**
 * <div id="function.getrandmax" class="refentry"> <div class="refnamediv">  <h1 class="refname">getrandmax</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">getrandmax</span> — <span class="dc-title">显示随机数最大的可能值</span></p> </div> <div class="refsect1 description" id="refsect1-function.getrandmax-description">  <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description">    <span class="methodname" style="color:#CC7832"><strong>getrandmax</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="simpara">   返回调用 <span class="function">{@link rand()}</span> 可能返回的最大值。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.getrandmax-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.getrandmax-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   <span class="function">{@link rand()}</span> 返回随机数可能返回的最大值  </p> </div> <div class="refsect1 seealso" id="refsect1-function.getrandmax-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link rand()} - 产生一个随机整数</span></li>    <li><span class="function">{@link srand()} - 播下随机数发生器种子</span></li>    <li><span class="function">{@link mt_getrandmax()} - 显示随机数的最大可能值</span></li>   </ul>   </div></div>
 * 
     * Show largest possible random value
     * @link https://php.net/manual/zh/function.getrandmax.php
     * @return int The largest possible random value returned by rand
     */
    #[Pure]
    function getrandmax(): int {}

    /**
 * <div id="function.random-bytes" class="refentry"> <div class="refnamediv">  <h1 class="refname">random_bytes</h1>  <p class="verinfo">(PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">random_bytes</span> — <span class="dc-title">Get cryptographically secure random bytes</span></p> </div> <div class="refsect1 description" id="refsect1-function.random-bytes-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>random_bytes</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$length</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   Generates a string containing uniformly selected random bytes with the requested <span class="parameter" style="color:#3A95FF">length</span>.  </p>  <p class="para">   As the returned bytes are selected completely randomly, the resulting string is likely   to contain unprintable characters or invalid UTF-8 sequences. It may be necessary to   encode it before transmission or display.  </p>  <p class="para">   The randomness generated by this function is suitable for all applications, including   the generation of long-term secrets, such as encryption keys.  </p>  <p class="para"> 此函数使用的随机性来源先后顺序如下：</p><ul class="itemizedlist"> <li class="listitem">  <p class="para">   Linux：<a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">»&nbsp;getrandom()</a>、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   FreeBSD &gt;= 12（PHP &gt;= 7.3）：<a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">»&nbsp;getrandom()</a>、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   Windows（PHP &gt;= 7.2）：<a href="https://docs.microsoft.com/en-us/windows/desktop/SecCNG/cng-portal" class="link external">»&nbsp;CNG-API</a>  </p>  <p class="para">   Windows：<a href="https://msdn.microsoft.com/en-us/library/windows/desktop/aa379942(v=vs.85).aspx" class="link external">»&nbsp;CryptGenRandom</a>  </p> </li> <li class="listitem">  <p class="para">   macOS（PHP &gt;= 8.2；&gt;= 8.1.9；&gt;= 8.0.22 如果 CCRandomGenerateBytes 在编译时可用）：CCRandomGenerateBytes()  </p>  <p class="para">   macOS（PHP &gt;= 8.1；&gt;= 8.0.2）：arc4random_buf()、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   NetBSD &gt;= 7（PHP &gt;= 7.1；&gt;= 7.0.1）：arc4random_buf()、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   OpenBSD &gt;= 5.5（PHP &gt;= 7.1；&gt;= 7.0.1）：arc4random_buf()、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   DragonflyBSD（PHP &gt;= 8.1）：<a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">»&nbsp;getrandom()</a>、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   Solaris（PHP &gt;= 8.1）：<a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">»&nbsp;getrandom()</a>、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <span class="simpara">   未提及的 PHP 版本和操作系统的组合：<var class="filename">/dev/urandom</var>  </span> </li> <li class="listitem">  <span class="simpara">   如果没有可用的来源或它们都无法生成随机性，则将抛出 <span class="classname"><a href="https://php.net/manual/zh/class.random-randomexception.php" class="classname">Random\RandomException</a></span>。  </span> </li></ul>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:   <span class="simpara">   虽然此函数是 PHP 7.0 添加到 PHP 中，但是从 PHP 5.2 到   PHP 5.6 都可以用 <a href="https://github.com/paragonie/random_compat" class="link external">»&nbsp;用户级实现</a>。  </span> </p></blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.random-bytes-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">length</span></dt>    <dd>     <p class="para">      The length of the random string that should be returned in bytes; must be <span class="literal">1</span> or greater.     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.random-bytes-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   A string containing the requested number of cryptographically   secure random bytes.  </p> </div> <div class="refsect1 errors" id="refsect1-function.random-bytes-errors">  <h3 class="title">错误／异常</h3>  <ul class="itemizedlist">    <li class="listitem">  <span class="simpara">   如果没有找到合适的随机性来源，将会抛出 <span class="classname"><a href="https://php.net/manual/zh/class.random-randomexception.php" class="classname">Random\RandomException</a></span>。  </span> </li>   <li class="listitem">    <span class="simpara">     If the value of <span class="parameter" style="color:#3A95FF">length</span> is less than <span class="literal">1</span>,     a <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span> will be thrown.    </span>   </li>  </ul> </div> <div class="refsect1 changelog" id="refsect1-function.random-bytes-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.2.0</td>      <td>       In case of a <span>CSPRNG</span> failure, this function will now throw a       <span class="classname"><a href="https://php.net/manual/zh/class.random-randomexception.php" class="classname">Random\RandomException</a></span>. Previously a plain       <span class="classname"><a href="https://php.net/manual/zh/class.exception.php" class="classname">Exception</a></span> was thrown.      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.random-bytes-examples">  <h3 class="title">示例</h3>  <div class="example" id="random-bytes.example.basic">   <p><strong>示例 #1 <span class="function"><strong>random_bytes()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$bytes </span><span style="color: #007700">= </span><span style="color: #9876AA">random_bytes</span><span style="color: #007700">(</span><span style="color: #9876AA">5</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">bin2hex</span><span style="color: #007700">(</span><span style="color: #9876AA">\$bytes</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例的输出类似于：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">string(10)&nbsp;"385e33f741"</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.random-bytes-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link Random\Randomizer::getBytes()} - Get random bytes</span></li>   <li><span class="function">{@link random_int()} - 获取生成加密安全、均匀分布的整数</span></li>   <li><span class="function">{@link bin2hex()} - 将二进制数据转换为十六进制表示</span></li>   <li><span class="function">{@link base64_encode()} - 使用 MIME base64 对数据进行编码</span></li>  </ul> </div></div>
 * 
     * Generates cryptographically secure pseudo-random bytes
     * @link https://php.net/manual/zh/function.random-bytes.php
     * @param int $length The length of the random string that should be returned in bytes.
     * @return string Returns a string containing the requested number of cryptographically secure random bytes.
     * @since 7.0
     * @throws Random\RandomException if an appropriate source of randomness cannot be found.
     */
    function random_bytes(int $length): string {}

    /**
 * <div id="function.random-int" class="refentry"> <div class="refnamediv">  <h1 class="refname">random_int</h1>  <p class="verinfo">(PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">random_int</span> — <span class="dc-title">获取生成加密安全、均匀分布的整数</span></p> </div> <div class="refsect1 description" id="refsect1-function.random-int-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>random_int</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$min</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$max</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div>  <p class="para rdfs-comment">   生成在指定最小值和最大值之间均匀分布的整数。  </p>  <p class="para">   该函数生成的随机性适用于所有应用，包括生成长期秘密，如加密密钥。  </p>  <p class="para"> 此函数使用的随机性来源先后顺序如下：</p><ul class="itemizedlist"> <li class="listitem">  <p class="para">   Linux：<a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">»&nbsp;getrandom()</a>、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   FreeBSD &gt;= 12（PHP &gt;= 7.3）：<a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">»&nbsp;getrandom()</a>、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   Windows（PHP &gt;= 7.2）：<a href="https://docs.microsoft.com/en-us/windows/desktop/SecCNG/cng-portal" class="link external">»&nbsp;CNG-API</a>  </p>  <p class="para">   Windows：<a href="https://msdn.microsoft.com/en-us/library/windows/desktop/aa379942(v=vs.85).aspx" class="link external">»&nbsp;CryptGenRandom</a>  </p> </li> <li class="listitem">  <p class="para">   macOS（PHP &gt;= 8.2；&gt;= 8.1.9；&gt;= 8.0.22 如果 CCRandomGenerateBytes 在编译时可用）：CCRandomGenerateBytes()  </p>  <p class="para">   macOS（PHP &gt;= 8.1；&gt;= 8.0.2）：arc4random_buf()、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   NetBSD &gt;= 7（PHP &gt;= 7.1；&gt;= 7.0.1）：arc4random_buf()、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   OpenBSD &gt;= 5.5（PHP &gt;= 7.1；&gt;= 7.0.1）：arc4random_buf()、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   DragonflyBSD（PHP &gt;= 8.1）：<a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">»&nbsp;getrandom()</a>、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <p class="para">   Solaris（PHP &gt;= 8.1）：<a href="http://man7.org/linux/man-pages/man2/getrandom.2.html" class="link external">»&nbsp;getrandom()</a>、<var class="filename">/dev/urandom</var>  </p> </li> <li class="listitem">  <span class="simpara">   未提及的 PHP 版本和操作系统的组合：<var class="filename">/dev/urandom</var>  </span> </li> <li class="listitem">  <span class="simpara">   如果没有可用的来源或它们都无法生成随机性，则将抛出 <span class="classname"><a href="https://php.net/manual/zh/class.random-randomexception.php" class="classname">Random\RandomException</a></span>。  </span> </li></ul>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:   <span class="simpara">   虽然此函数是 PHP 7.0 添加到 PHP 中，但是从 PHP 5.2 到   PHP 5.6 都可以用 <a href="https://github.com/paragonie/random_compat" class="link external">»&nbsp;用户级实现</a>。  </span> </p></blockquote> </div> <div class="refsect1 parameters" id="refsect1-function.random-int-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">min</span></dt>    <dd>     <p class="para">      要返回的最小值。     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">max</span></dt>    <dd>     <p class="para">      要返回的最大值。     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.random-int-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   从闭合区间 [<span class="parameter" style="color:#3A95FF">min</span>, <span class="parameter" style="color:#3A95FF">max</span>]   返回加密安全、均匀分布的整数。<span class="parameter" style="color:#3A95FF">min</span> 和 <span class="parameter" style="color:#3A95FF">max</span>   都有可能返回。  </p> </div> <div class="refsect1 errors" id="refsect1-function.random-int-errors">  <h3 class="title">错误／异常</h3>  <ul class="itemizedlist">    <li class="listitem">  <span class="simpara">   如果没有找到合适的随机性来源，将会抛出 <span class="classname"><a href="https://php.net/manual/zh/class.random-randomexception.php" class="classname">Random\RandomException</a></span>。  </span> </li>   <li class="listitem">    <span class="simpara">     如果 <span class="parameter" style="color:#3A95FF">max</span> 小于 <span class="parameter" style="color:#3A95FF">min</span>，将会抛出 <span class="classname"><a href="https://php.net/manual/zh/class.valueerror.php" class="classname">ValueError</a></span>。    </span>   </li>  </ul> </div> <div class="refsect1 changelog" id="refsect1-function.random-int-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>8.2.0</td>      <td>       <span>CSPRNG</span> 失败时，此函数现在将抛出 <span class="classname"><a href="https://php.net/manual/zh/class.random-randomexception.php" class="classname">Random\RandomException</a></span>。之前抛出普通的       <span class="classname"><a href="https://php.net/manual/zh/class.exception.php" class="classname">Exception</a></span>。      </td>     </tr>    </tbody>     </table> </div> <div class="refsect1 examples" id="refsect1-function.random-int-examples">  <h3 class="title">示例</h3>  <div class="example" id="random-int.example.basic">   <p><strong>示例 #1 <span class="function"><strong>random_int()</strong></span> 示例</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">random_int</span><span style="color: #007700">(</span><span style="color: #9876AA">100</span><span style="color: #007700">, </span><span style="color: #9876AA">999</span><span style="color: #007700">));<br></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">random_int</span><span style="color: #007700">(-</span><span style="color: #9876AA">1000</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例的输出类似于：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">int(248)<br>int(-898)</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.random-int-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="methodname" style="color:#CC7832">{@link Random\Randomizer::getInt()} - Get a uniformly selected integer</span></li>   <li><span class="function">{@link random_bytes()} - Get cryptographically secure random bytes</span></li>  </ul> </div></div>
 * 
     * Generates cryptographically secure pseudo-random integers
     * @link https://php.net/manual/zh/function.random-int.php
     * @param int $min The lowest value to be returned, which must be PHP_INT_MIN or higher.
     * @param int $max The highest value to be returned, which must be less than or equal to PHP_INT_MAX.
     * @return int Returns a cryptographically secure random integer in the range min to max, inclusive.
     * @since 7.0
     * @throws Random\RandomException if an appropriate source of randomness cannot be found.
     */
    function random_int(int $min, int $max): int {}
}

namespace Random\Engine
{
    use const MT_RAND_MT19937;

    /**
     * @since 8.2
     */
    final class Mt19937 implements \Random\Engine
    {

        public function __construct(int|null $seed = null, int $mode = MT_RAND_MT19937) {}


        public function generate(): string {}


        public function __serialize(): array {}


        public function __unserialize(array $data): void {}


        public function __debugInfo(): array {}
    }

    /**
     * @since 8.2
     */
    final class PcgOneseq128XslRr64 implements \Random\Engine
    {

        public function __construct(string|int|null $seed = null) {}


        public function generate(): string {}


        public function jump(int $advance): void {}


        public function __serialize(): array {}


        public function __unserialize(array $data): void {}


        public function __debugInfo(): array {}
    }

    /**
     * @since 8.2
     */
    final class Xoshiro256StarStar implements \Random\Engine
    {

        public function __construct(string|int|null $seed = null) {}


        public function generate(): string {}


        public function jump(): void {}


        public function jumpLong(): void {}


        public function __serialize(): array {}


        public function __unserialize(array $data): void {}


        public function __debugInfo(): array {}
    }

    /**
     * @since 8.2
     */
    final class Secure implements \Random\CryptoSafeEngine
    {

        public function generate(): string {}
    }
}

namespace Random
{
    use Error;
    use Exception;

    /**
     * @since 8.2
     */
    interface Engine
    {

        public function generate(): string;
    }
    /**
     * @since 8.2
     */
    interface CryptoSafeEngine extends Engine {}

    /**
     * @since 8.2
     */
    final class Randomizer
    {
        public readonly Engine $engine;


        public function __construct(?Engine $engine = null) {}


        public function nextInt(): int {}


        public function getInt(int $min, int $max): int {}


        public function getBytes(int $length): string {}


        public function shuffleArray(array $array): array {}


        public function shuffleBytes(string $bytes): string {}


        public function pickArrayKeys(array $array, int $num): array {}


        public function __serialize(): array {}


        public function __unserialize(array $data): void {}

        /**
         * @since 8.3
         */
        public function nextFloat(): float {}

        /**
         * @since 8.3
         */
        public function getFloat(float $min, float $max, IntervalBoundary $boundary = IntervalBoundary::ClosedOpen): float {}

        /**
         * @since 8.3
         */
        public function getBytesFromString(string $string, int $length): string {}
    }

    /**
     * @since 8.2
     */
    class RandomError extends Error {}

    /**
     * @since 8.2
     */
    class BrokenRandomEngineError extends RandomError {}

    /**
     * @since 8.2
     */
    class RandomException extends Exception {}

    /**
     * @since 8.3
     */
    enum IntervalBoundary implements \UnitEnum
    {
        public string $name;

        case ClosedOpen;
        case ClosedClosed;
        case OpenClosed;
        case OpenOpen;


        public static function cases(): array {}
    }
}
