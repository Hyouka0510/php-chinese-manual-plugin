<?php
/**
 * Support Vector Machine Library

/**
* <div id="class.svm" class="reference"> <h1 class="title">The SVM class</h1>  <div class="partintro"><p class="verinfo">(PECL svm &gt;= 0.1.0)</p>  <div class="section" id="svm.intro">   <h2 class="title">简介</h2>   <p class="para">   </p>  </div>  <div class="section" id="svm.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">SVM</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 常量 </div>    <div class="fieldsynopsis">     <span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.c-svc"><var class="varname">C_SVC</var></a></var><span class="initializer"> = 0</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.nu-svc"><var class="varname">NU_SVC</var></a></var><span class="initializer"> = 1</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.one-class"><var class="varname">ONE_CLASS</var></a></var><span class="initializer"> = 2</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.epsilon-svr"><var class="varname">EPSILON_SVR</var></a></var><span class="initializer"> = 3</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.nu-svr"><var class="varname">NU_SVR</var></a></var><span class="initializer"> = 4</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.kernel-linear"><var class="varname">KERNEL_LINEAR</var></a></var><span class="initializer"> = 0</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.kernel-poly"><var class="varname">KERNEL_POLY</var></a></var><span class="initializer"> = 1</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.kernel-rbf"><var class="varname">KERNEL_RBF</var></a></var><span class="initializer"> = 2</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.kernel-sigmoid"><var class="varname">KERNEL_SIGMOID</var></a></var><span class="initializer"> = 3</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.kernel-precomputed"><var class="varname">KERNEL_PRECOMPUTED</var></a></var><span class="initializer"> = 4</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-type"><var class="varname">OPT_TYPE</var></a></var><span class="initializer"> = 101</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-kernel-type"><var class="varname">OPT_KERNEL_TYPE</var></a></var><span class="initializer"> = 102</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-degree"><var class="varname">OPT_DEGREE</var></a></var><span class="initializer"> = 103</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-shrinking"><var class="varname">OPT_SHRINKING</var></a></var><span class="initializer"> = 104</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-probability"><var class="varname">OPT_PROPABILITY</var></a></var><span class="initializer"> = 105</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-gamma"><var class="varname">OPT_GAMMA</var></a></var><span class="initializer"> = 201</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-nu"><var class="varname">OPT_NU</var></a></var><span class="initializer"> = 202</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-eps"><var class="varname">OPT_EPS</var></a></var><span class="initializer"> = 203</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-p"><var class="varname">OPT_P</var></a></var><span class="initializer"> = 204</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-coef-zero"><var class="varname">OPT_COEF_ZERO</var></a></var><span class="initializer"> = 205</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-c"><var class="varname">OPT_C</var></a></var><span class="initializer"> = 206</span>;</div>    <div class="fieldsynopsis"><span class="modifier">const</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>      <var class="fieldsynopsis_varname"><a href="https://php.net/manual/zh/class.svm.php#svm.constants.opt-cache-size"><var class="varname">OPT_CACHE_SIZE</var></a></var><span class="initializer"> = 207</span>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="constructorsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/svm.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>()</div>    <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link svm::crossvalidate}</span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$problem</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$number_of_folds</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/svm.getoptions.php" class="methodname" style="color:#CC7832">getOptions</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/svm.setoptions.php" class="methodname" style="color:#CC7832">setOptions</a></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$params</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div><div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832">{@link svm::train}</span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$problem</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$weights</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.svmmodel.php" class="type SVMModel" style="color:#EAB766">SVMModel</a></span></div>   }</div>  </div>  <div class="section" id="svm.constants">   <h2 class="title">预定义常量</h2>   <div class="section" id="svm.constants.types">    <h2 class="title">SVM Constants</h2>    <dl>           <dt id="svm.constants.c-svc"><strong><span>{@link SVM::C_SVC}</span></strong></dt>      <dd>       <p class="para">The basic C_SVC SVM type. The default, and a good starting point</p>      </dd>                <dt id="svm.constants.nu-svc"><strong><span>{@link SVM::NU_SVC}</span></strong></dt>      <dd>       <p class="para">The NU_SVC type uses a different, more flexible, error weighting</p>      </dd>                <dt id="svm.constants.one-class"><strong><span>{@link SVM::ONE_CLASS}</span></strong></dt>      <dd>       <p class="para">One class SVM type. Train just on a single class, using outliers as negative examples</p>      </dd>                <dt id="svm.constants.epsilon-svr"><strong><span>{@link SVM::EPSILON_SVR}</span></strong></dt>      <dd>       <p class="para">A SVM type for regression (predicting a value rather than just a class)</p>      </dd>                <dt id="svm.constants.nu-svr"><strong><span>{@link SVM::NU_SVR}</span></strong></dt>      <dd>       <p class="para">A NU style SVM regression type</p>      </dd>                <dt id="svm.constants.kernel-linear"><strong><span>{@link SVM::KERNEL_LINEAR}</span></strong></dt>      <dd>       <p class="para">A very simple kernel, can work well on large document classification problems</p>      </dd>                <dt id="svm.constants.kernel-poly"><strong><span>{@link SVM::KERNEL_POLY}</span></strong></dt>      <dd>       <p class="para">A polynomial kernel</p>      </dd>                <dt id="svm.constants.kernel-rbf"><strong><span>{@link SVM::KERNEL_RBF}</span></strong></dt>      <dd>       <p class="para">The common Gaussian RBD kernel. Handles non-linear problems well and is a good default for classification</p>      </dd>                <dt id="svm.constants.kernel-sigmoid"><strong><span>{@link SVM::KERNEL_SIGMOID}</span></strong></dt>      <dd>       <p class="para">A kernel based on the sigmoid function. Using this makes the SVM very similar to a two layer sigmoid based neural network</p>      </dd>                <dt id="svm.constants.kernel-precomputed"><strong><span>{@link SVM::KERNEL_PRECOMPUTED}</span></strong></dt>      <dd>       <p class="para">A precomputed kernel - currently unsupported.</p>      </dd>                <dt id="svm.constants.opt-type"><strong><span>{@link SVM::OPT_TYPE}</span></strong></dt>      <dd>       <p class="para">The options key for the SVM type</p>      </dd>                <dt id="svm.constants.opt-kernel-type"><strong><span>{@link SVM::OPT_KERNEL_TYPE}</span></strong></dt>      <dd>       <p class="para">The options key for the kernel type</p>      </dd>                <dt id="svm.constants.opt-degree"><strong><span>{@link SVM::OPT_DEGREE}</span></strong></dt>      <dd>       <p class="para"></p>      </dd>                <dt id="svm.constants.opt-shrinking"><strong><span>{@link SVM::OPT_SHRINKING}</span></strong></dt>      <dd>       <p class="para">Training parameter, boolean, for whether to use the shrinking heuristics</p>      </dd>                <dt id="svm.constants.opt-probability"><strong><span>{@link SVM::OPT_PROBABILITY}</span></strong></dt>      <dd>       <p class="para">Training parameter, boolean, for whether to collect and use probability estimates</p>      </dd>                <dt id="svm.constants.opt-gamma"><strong><span>{@link SVM::OPT_GAMMA}</span></strong></dt>      <dd>       <p class="para">Algorithm parameter for Poly, RBF and Sigmoid kernel types.</p>      </dd>                <dt id="svm.constants.opt-nu"><strong><span>{@link SVM::OPT_NU}</span></strong></dt>      <dd>       <p class="para">The option key for the nu parameter, only used in the NU_ SVM types</p>      </dd>                <dt id="svm.constants.opt-eps"><strong><span>{@link SVM::OPT_EPS}</span></strong></dt>      <dd>       <p class="para">The option key for the Epsilon parameter, used in epsilon regression</p>      </dd>                <dt id="svm.constants.opt-p"><strong><span>{@link SVM::OPT_P}</span></strong></dt>      <dd>       <p class="para">Training parameter used by Episilon SVR regression</p>      </dd>                <dt id="svm.constants.opt-coef-zero"><strong><span>{@link SVM::OPT_COEF_ZERO}</span></strong></dt>      <dd>       <p class="para">Algorithm parameter for poly and sigmoid kernels</p>      </dd>                <dt id="svm.constants.opt-c"><strong><span>{@link SVM::OPT_C}</span></strong></dt>      <dd>       <p class="para">The option for the cost parameter that controls tradeoff between errors and generality - effectively the penalty for misclassifying training examples. </p>      </dd>                <dt id="svm.constants.opt-cache-size"><strong><span>{@link SVM::OPT_CACHE_SIZE}</span></strong></dt>      <dd>       <p class="para">Memory cache size, in MB</p>      </dd>         </dl>   </div>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link SVM::__construct} — Construct a new SVM object</li><li>{@link SVM::crossvalidate} — Test training params on subsets of the training data</li><li>{@link SVM::getOptions} — Return the current training parameters</li><li>{@link SVM::setOptions} — Set training parameters</li><li>{@link SVM::train} — Create a SVMModel based on training data</li></ul></div>
 * LibSVM is an efficient solver for SVM classification and regression problems. The svm extension wraps this in a PHP interface for easy use in PHP scripts.
 * @since 7.0
 * @link https://www.php.net/manual/en/class.svm.php
 
*/
class SVM
{
    /* Constants */
    /**
     * The basic C_SVC SVM type. The default, and a good starting point
     */
    public const C_SVC = 0;

    /**
     * NU_SVC type uses a different, more flexible, error weighting
     */
    public const NU_SVC = 1;

    /**
     * One class SVM type. Train just on a single class, using outliers as negative examples
     */
    public const ONE_CLASS = 2;

    /**
     * A SVM type for regression (predicting a value rather than just a class)
     */
    public const EPSILON_SVR = 3;

    /**
     * A NU style SVM regression type
     */
    public const NU_SVR = 4;

    /**
     * A very simple kernel, can work well on large document classification problems
     */
    public const KERNEL_LINEAR = 0;

    /**
     * A polynomial kernel
     */
    public const KERNEL_POLY = 1;

    /**
     * The common Gaussian RBD kernel. Handles non-linear problems well and is a good default for classification
     */
    public const KERNEL_RBF = 2;

    /**
     * A kernel based on the sigmoid function. Using this makes the SVM very similar to a two layer sigmoid based neural network
     */
    public const KERNEL_SIGMOID = 3;

    /**
     * A precomputed kernel - currently unsupported.
     */
    public const KERNEL_PRECOMPUTED = 4;

    /**
     * The options key for the SVM type
     */
    public const OPT_TYPE = 101;

    /**
     * The options key for the kernel type
     */
    public const OPT_KERNEL_TYPE = 102;
    public const OPT_DEGREE = 103;

    /**
     * Training parameter, boolean, for whether to use the shrinking heuristics
     */
    public const OPT_SHRINKING = 104;

    /**
     * Training parameter, boolean, for whether to collect and use probability estimates
     */
    public const OPT_PROPABILITY = 105;

    /**
     * Algorithm parameter for Poly, RBF and Sigmoid kernel types.
     */
    public const OPT_GAMMA = 201;

    /**
     * The option key for the nu parameter, only used in the NU_ SVM types
     */
    public const OPT_NU = 202;

    /**
     * The option key for the Epsilon parameter, used in epsilon regression
     */
    public const OPT_EPS = 203;

    /**
     * Training parameter used by Episilon SVR regression
     */
    public const OPT_P = 204;

    /**
     * Algorithm parameter for poly and sigmoid kernels
     */
    public const OPT_COEF_ZERO = 205;

    /**
     * The option for the cost parameter that controls tradeoff between errors and generality - effectively the penalty for misclassifying training examples.
     */
    public const OPT_C = 206;

    /**
     * Memory cache size, in MB
     */
    public const OPT_CACHE_SIZE = 207;

    /* Methods */
    /**
     * Construct a new SVM object
     *
     * Constructs a new SVM object ready to accept training data.
     * @throws SVMException Throws SVMException if the libsvm library could not be loaded
     * @link https://www.php.net/manual/en/svm.construct.php
     */
    public function __construct() {}

/**
* <div id="svm.crossvalidate" class="refentry"> <div class="refnamediv">  <h1 class="refname">SVM::crossvalidate</h1>  <p class="verinfo">(PECL svm &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">SVM::crossvalidate</span> — <span class="dc-title">Test training params on subsets of the training data</span></p> </div> <div class="refsect1 description" id="refsect1-svm.crossvalidate-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>svm::crossvalidate</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$problem</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">$number_of_folds</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.float.php" class="type float" style="color:#EAB766">float</a></span></div>  <p class="para rdfs-comment">   Crossvalidate can be used to test the effectiveness of the current    parameter set on a subset of the training data. Given a problem set    and a n "folds", it separates the problem set into n subsets, and the    repeatedly trains on one subset and tests on another. While the accuracy    will generally be lower than a SVM trained on the enter data set, the    accuracy score returned should be relatively useful, so it can be used to    test different training parameters.   </p> </div> <div class="refsect1 parameters" id="refsect1-svm.crossvalidate-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">problem</span></dt>     <dd>      <p class="para">      The problem data. This can either be in the form of an array, the URL       of an SVMLight formatted file, or a stream to an opened SVMLight       formatted datasource.       </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">number_of_folds</span></dt>     <dd>      <p class="para">       The number of sets the data should be divided into and cross tested.        A higher number means smaller training sets and less reliability. 5 is        a good number to start with.       </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-svm.crossvalidate-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   The correct percentage, expressed as a floating point number from 0-1.    In the case of NU_SVC or EPSILON_SVR kernels the mean squared error will    returned instead.   </p> </div> <div class="refsect1 seealso" id="refsect1-svm.crossvalidate-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="methodname" style="color:#CC7832">{@link SVM::train()} - Create a SVMModel based on training data</span></li>   </ul>   </div></div>
    *
     * Test training params on subsets of the training data
     *
     * Crossvalidate can be used to test the effectiveness of the current parameter set on a subset of the training data. Given a problem set and a n "folds", it separates the problem set into n subsets, and the repeatedly trains on one subset and tests on another. While the accuracy will generally be lower than a SVM trained on the enter data set, the accuracy score returned should be relatively useful, so it can be used to test different training parameters.
     * @param array $problem The problem data. This can either be in the form of an array, the URL of an SVMLight formatted file, or a stream to an opened SVMLight formatted datasource.
     * @param int $number_of_folds The number of sets the data should be divided into and cross tested. A higher number means smaller training sets and less reliability. 5 is a good number to start with.
     * @return float The correct percentage, expressed as a floating point number from 0-1. In the case of NU_SVC or EPSILON_SVR kernels the mean squared error will returned instead.
     * @link https://www.php.net/manual/en/svm.crossvalidate.php
     
*/
    public function crossvalidate(array $problem, int $number_of_folds): float {}

/**
* <div id="svm.getoptions" class="refentry"> <div class="refnamediv">  <h1 class="refname">SVM::getOptions</h1>  <p class="verinfo">(PECL svm &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">SVM::getOptions</span> — <span class="dc-title">Return the current training parameters</span></p> </div> <div class="refsect1 description" id="refsect1-svm.getoptions-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SVM::getOptions</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Retrieve an array containing the training parameters.    The parameters will be keyed on the predefined SVM constants.   </p> </div> <div class="refsect1 parameters" id="refsect1-svm.getoptions-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-svm.getoptions-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array of configuration settings.   </p> </div></div>
    *
     * Return the current training parameters
     *
     * Retrieve an array containing the training parameters. The parameters will be keyed on the predefined SVM constants.
     * @return array Returns an array of configuration settings.
     * @link https://www.php.net/manual/en/svm.getoptions.php
     
*/
    public function getOptions(): array {}

/**
* <div id="svm.setoptions" class="refentry"> <div class="refnamediv">  <h1 class="refname">SVM::setOptions</h1>  <p class="verinfo">(PECL svm &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">SVM::setOptions</span> — <span class="dc-title">Set training parameters</span></p> </div> <div class="refsect1 description" id="refsect1-svm.setoptions-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description"><span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>SVM::setOptions</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$params</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Set one or more training parameters.  </p> </div> <div class="refsect1 parameters" id="refsect1-svm.setoptions-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">params</span></dt>     <dd>      <p class="para">       An array of training parameters, keyed on the SVM constants.       </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-svm.setoptions-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Return true on success, throws SVMException on error.  </p> </div></div>
    *
     * Set training parameters
     *
     * Set one or more training parameters.
     * @param array $params An array of training parameters, keyed on the SVM constants.
     * @return bool Return true on success, throws SVMException on error.
     * @throws SVMException
     * @link https://www.php.net/manual/en/svm.setoptions.php
     
*/
    public function setOptions(array $params): bool {}

/**
* <div id="svm.train" class="refentry"> <div class="refnamediv">  <h1 class="refname">SVM::train</h1>  <p class="verinfo">(PECL svm &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">SVM::train</span> — <span class="dc-title">Create a SVMModel based on training data</span></p> </div> <div class="refsect1 description" id="refsect1-svm.train-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">public</span> <span class="methodname" style="color:#CC7832"><strong>svm::train</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$problem</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">$weights</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.svmmodel.php" class="type SVMModel" style="color:#EAB766">SVMModel</a></span></div>  <p class="para rdfs-comment">   Train a support vector machine based on the supplied training data.   </p> </div> <div class="refsect1 parameters" id="refsect1-svm.train-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">problem</span></dt>     <dd>      <p class="para">       The problem can be provided in three different ways.        An array, where the data should start with the class label        (usually 1 or -1) then followed by a sparse data set of        dimension =&gt; data pairs.        A URL to a file containing a SVM Light formatted problem, with the        each line being a new training example, the start of each line        containing the class (1, -1) then a series of tab separated data        values shows as key:value.        A opened stream pointing to a data source formatted as in the file above.       </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">weights</span></dt>     <dd>      <p class="para">       Weights are an optional set of weighting parameters for the different        classes, to help account for unbalanced training sets. For example,        if the classes were 1 and -1, and -1 had significantly more example        than one, the weight for -1 could be 0.5. Weights should be in the range 0-1.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-svm.train-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an SVMModel that can be used to classify previously unseen data.   Throws SVMException on error  </p> </div></div>
    *
     * Create a SVMModel based on training data
     *
     * Train a support vector machine based on the supplied training data.
     * @param array $problem The problem can be provided in three different ways. An array, where the data should start with the class label (usually 1 or -1) then followed by a sparse data set of dimension => data pairs. A URL to a file containing a SVM Light formatted problem, with the each line being a new training example, the start of each line containing the class (1, -1) then a series of tab separated data values shows as key:value. A opened stream pointing to a data source formatted as in the file above.
     * @param array|null $weights Weights are an optional set of weighting parameters for the different classes, to help account for unbalanced training sets. For example, if the classes were 1 and -1, and -1 had significantly more example than one, the weight for -1 could be 0.5. Weights should be in the range 0-1.
     * @return SVMModel Returns an SVMModel that can be used to classify previously unseen data. Throws SVMException on error
     * @throws SMVException
     * @link https://www.php.net/manual/en/svm.train.php
     
*/
    public function train(array $problem, array $weights = null): SVMModel {}
}
