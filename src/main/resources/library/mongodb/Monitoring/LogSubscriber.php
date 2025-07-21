<?php

namespace MongoDB\Driver\Monitoring;

/**
 * @since 1.17.0
 * @link https://www.php.net/manual/en/class.mongodb-driver-monitoring-logsubscriber.php
 */
interface LogSubscriber extends Subscriber
{
    public const LEVEL_ERROR = 0;
    public const LEVEL_CRITICAL = 1;
    public const LEVEL_WARNING = 2;
    public const LEVEL_MESSAGE = 3;
    public const LEVEL_INFO = 4;
    public const LEVEL_DEBUG = 5;

    /* MONGOC_LOG_LEVEL_TRACE is intentionally omitted. Trace logs are only
     * reported via streams (i.e. mongodb.debug INI), so the constant is not
     * relevant to LogSubscriber implementations. */

/**
* <div id="function.log" class="refentry"> <div class="refnamediv">  <h1 class="refname">log</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">log</span> — <span class="dc-title">自然对数</span></p> </div> <div class="refsect1 description" id="refsect1-function.log-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>log</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span> <span class="parameter" style="color:#3A95FF">$num</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span> <span class="parameter" style="color:#3A95FF">$base</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/math.constants.php#constant.m-e">M_E</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></div>   <p class="para rdfs-comment">    如果指定了可选的参数 <span class="parameter" style="color:#3A95FF">base</span>，<span class="function"><strong>log()</strong></span>    返回 log<sub class="subscript">base</sub>    <span class="parameter" style="color:#3A95FF">num</span>，否则 <span class="function"><strong>log()</strong></span>     返回参数 <span class="parameter" style="color:#3A95FF">num</span> 的自然对数。   </p>  </div>  <div class="refsect1 parameters" id="refsect1-function.log-parameters">   <h3 class="title">参数</h3>   <p class="para">    </p><dl>           <dt><span class="parameter" style="color:#3A95FF">num</span></dt>      <dd>       <p class="para">        要计算对数的值       </p>      </dd>                <dt><span class="parameter" style="color:#3A95FF">base</span></dt>      <dd>       <p class="para">        可选的底数（默认是“e”，也可以说是自然对数）。       </p>      </dd>         </dl>     </div> <div class="refsect1 returnvalues" id="refsect1-function.log-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   以 <span class="parameter" style="color:#3A95FF">base</span> 为底   <span class="parameter" style="color:#3A95FF">num</span> 的对数，如果未指定   <span class="parameter" style="color:#3A95FF">num</span> 则为自然对数。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.log-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link log10()} - 以 10 为底的对数</span></li>    <li><span class="function">{@link exp()} - 计算 e 的指数</span></li>    <li><span class="function">{@link pow()} - 指数表达式</span></li>    <li><span class="function">{@link error_log()} - 发送错误信息到某个地方</span></li>   </ul>   </div></div>
*/
    public function log(int $level, string $domain, string $message): void;
}
