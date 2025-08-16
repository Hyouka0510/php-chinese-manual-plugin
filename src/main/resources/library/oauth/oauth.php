<?php

/**
 * <span class="simpara">      OAuth <em>RSA-SHA1</em> 签名方法。     </span>
 */
define('OAUTH_SIG_METHOD_RSASHA1', 'RSA-SHA1');

define('OAUTH_SIG_METHOD_HMACSHA1', 'HMAC-SHA1');
/**
 * <span class="simpara">      OAuth <em>HMAC-SHA256</em> 签名方法。     </span>
 */
define('OAUTH_SIG_METHOD_HMACSHA256', 'HMAC-SHA256');


define('OAUTH_AUTH_TYPE_AUTHORIZATION', 3);

define('OAUTH_AUTH_TYPE_NONE', 2);

define('OAUTH_AUTH_TYPE_URI', 1);

define('OAUTH_AUTH_TYPE_FORM', 2);


define('OAUTH_HTTP_METHOD_GET', 'GET');

define('OAUTH_HTTP_METHOD_POST', 'POST');

define('OAUTH_HTTP_METHOD_PUT', 'PUT');

define('OAUTH_HTTP_METHOD_HEAD', 'HEAD');
/**
 * <span class="simpara">      为 OAuth 请求使用 <em>DELETE</em> 方法。     </span>
 */
define('OAUTH_HTTP_METHOD_DELETE', 'DELETE');

/**
 * <span class="simpara">      使用 <span class="methodname">{@link OAuth::setRequestEngine()}</span> 来设置引擎为 <a href="https://php.net/manual/zh/book.stream.php" class="link">PHP 流</a>，与用 <strong><code><a href="https://php.net/manual/zh/oauth.constants.php#constant.oauth-reqengine-curl">OAUTH_REQENGINE_CURL</a></code></strong> 的 <a href="https://php.net/manual/zh/book.curl.php" class="link">Curl</a> 截然相反。     </span>
 */
define('OAUTH_REQENGINE_STREAMS', 1);
/**
 * <span class="simpara">      使用 <span class="methodname">{@link OAuth::setRequestEngine()}</span> 来设置引擎为 <a href="https://php.net/manual/zh/book.curl.php" class="link">Curl</a>，与用 <strong><code><a href="https://php.net/manual/zh/oauth.constants.php#constant.oauth-reqengine-streams">OAUTH_REQENGINE_STREAMS</a></code></strong> 的 <a href="https://php.net/manual/zh/book.stream.php" class="link">PHP 流</a> 截然相反。     </span>
 */
define('OAUTH_REQENGINE_CURL', 2);

/**
 * <span class="simpara">     一切良好。     </span>
 */
define('OAUTH_OK', 0);
/**
 * <span class="simpara">      <em>oauth_nonce</em> 值已经用于上一个上一个请求，因此现在不能使用了。     </span>
 */
define('OAUTH_BAD_NONCE', 4);
/**
 * <span class="simpara">       <em>oauth_timestamp</em> 值不能被服务提供者接受。这种情况下，响应应该也包含 <em>oauth_acceptable_timestamps</em> 参数。     </span>
 */
define('OAUTH_BAD_TIMESTAMP', 8);
/**
 * <span class="simpara">     <em>oauth_consumer_key</em> 暂时不能被服务提供者接受。比如，服务提供者限流了使用者。     </span>
 */
define('OAUTH_CONSUMER_KEY_UNKNOWN', 16);
/**
 * <span class="simpara">      使用者密钥遭拒绝。     </span>
 */
define('OAUTH_CONSUMER_KEY_REFUSED', 32);
/**
 * <span class="simpara">       <em>oauth_signature</em> 无效，因为和服务提供者的签名计算不匹配。     </span>
 */
define('OAUTH_INVALID_SIGNATURE', 64);
/**
 * <span class="simpara">      <em>oauth_token</em> 已经被消费。此令牌不能再被使用，因为在上一次请求中已经使用过。     </span>
 */
define('OAUTH_TOKEN_USED', 128);
/**
 * <span class="simpara">      <em>oauth_token</em> 已经过期。     </span>
 */
define('OAUTH_TOKEN_EXPIRED', 256);
/**
 * <span class="simpara">      <em>oauth_token</em> 被服务提供者拒绝。原因未知，也许是因为令牌从未发布、已经消费、过期、或服务提供者忘记了。     </span>
 */
define('OAUTH_TOKEN_REJECTED', 1024);
/**
 * <span class="simpara">      <em>oauth_verifier</em> 不正确。     </span>
 */
define('OAUTH_VERIFIER_INVALID', 2048);
/**
 * <span class="simpara">      一个必需的参数没有接收到。这种情况下，响应也应该包含 <em>oauth_parameters_absent</em> 参数。     </span>
 */
define('OAUTH_PARAMETER_ABSENT', 4096);
/**
 * <span class="simpara">      <em>oauth_signature_method</em> 不能被服务提供者接受。     </span>
 */
define('OAUTH_SIGNATURE_METHOD_REJECTED', 8192);

/**
 * <div id="function.oauth-get-sbs" class="refentry"> <div class="refnamediv">  <h1 class="refname">oauth_get_sbs</h1>  <p class="verinfo">(PECL OAuth &gt;=0.99.7)</p><p class="refpurpose"><span class="refname">oauth_get_sbs</span> — <span class="dc-title">生成一个签名字符基串</span></p> </div> <div class="refsect1 description" id="refsect1-function.oauth-get-sbs-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>oauth_get_sbs</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$http_method</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$uri</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$request_parameters</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment"> 根据 pecl/oauth 生成一个签名字符基串。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.oauth-get-sbs-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">http_method</span></dt>     <dd>      <p class="para">     HTTP 方法。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">uri</span></dt>     <dd>      <p class="para">       将要编码的 URI  。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">request_parameters</span></dt>     <dd>      <p class="para">       请求参数的数组。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.oauth-get-sbs-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回一个签名字符基串。  </p> </div></div>
 * 
 * Generate a Signature Base String
 *
 * @param string $http_method
 * @param string $uri
 * @param array $request_parameters
 * @return string
 */
function oauth_get_sbs($http_method, $uri, $request_parameters = []) {}

/**
 * <div id="function.oauth-urlencode" class="refentry"> <div class="refnamediv">  <h1 class="refname">oauth_urlencode</h1>  <p class="verinfo">(PECL OAuth &gt;=0.99.2)</p><p class="refpurpose"><span class="refname">oauth_urlencode</span> — <span class="dc-title">将 URI 编码为 RFC 3986 规范</span></p> </div> <div class="refsect1 description" id="refsect1-function.oauth-urlencode-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>oauth_urlencode</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$uri</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></div>  <p class="para rdfs-comment">   将 URI 编码为 <a href="https://datatracker.ietf.org/doc/html/rfc3986" class="link external">»&nbsp;RFC 3986</a> 规范。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.oauth-urlencode-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">uri</span></dt>     <dd>      <p class="para">       将要编码的 URI 。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.oauth-urlencode-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回一个 <a href="https://datatracker.ietf.org/doc/html/rfc3986" class="link external">»&nbsp;RFC 3986</a> 规范的编码字符串。  </p> </div></div>
 * 
 * Encode a URI to RFC 3986
 *
 * @param string $uri
 * @return string
 */
function oauth_urlencode($uri) {}

/**
 * The OAuth extension provides a simple interface to interact with data providers using the OAuth HTTP specification to protect private resources.
 */
class OAuth
{
    /**
     * @var bool
     */
    public $debug;

    /**
     * @var bool
     */
    public $sslChecks;

    /**
     * @var array
     */
    public $debugInfo;

    /**
     * Create a new OAuth object
     * @param string $consumer_key
     * @param string $consumer_secret
     * @param string $signature_method
     * @param int $auth_type
     * @throws \OAuthException
     */
    public function __construct($consumer_key, $consumer_secret, $signature_method = OAUTH_SIG_METHOD_HMACSHA1, $auth_type = OAUTH_AUTH_TYPE_AUTHORIZATION) {}

    /**
     * Turn off verbose debugging
     * @return bool
     */
    public function disableDebug() {}

    /**
     * Turn off redirects
     * @return void
     */
    public function disableRedirects() {}

    /**
     * Turn off SSL checks
     * @return bool
     */
    public function disableSSLChecks() {}

    /**
     * Turn on verbose debugging
     * @return bool
     */
    public function enableDebug() {}

    /**
     * Turn on redirects
     * @return bool
     */
    public function enableRedirects() {}

    /**
     * Turn on SSL checks
     * @return bool
     */
    public function enableSSLChecks() {}

    /**
     * Set the timeout
     * @param int $timeout Time in milliseconds
     * @return void
     */
    public function setTimeout($timeout) {}

    /**
     * Fetch an OAuth-protected resource
     * @param string $protected_resource_url
     * @param array $extra_parameters
     * @param string $http_method
     * @param array $http_headers
     * @throws \OAuthException
     * @return mixed
     */
    public function fetch($protected_resource_url, $extra_parameters = [], $http_method = null, $http_headers = []) {}

    /**
     * Fetch an access token
     * @param string $access_token_url
     * @param string $auth_session_handle
     * @param string $verifier_token
     * @throws \OAuthException
     * @return array
     */
    public function getAccessToken($access_token_url, $auth_session_handle = null, $verifier_token = null) {}

    /**
     * Get CA information
     * @return array
     */
    public function getCAPath() {}

    /**
     * Get the last response
     * @return string
     */
    public function getLastResponse() {}

    /**
     * Get headers for last response
     * @return string|false
     */
    public function getLastResponseHeaders() {}

    /**
     * Get HTTP information about the last response
     * @return array
     */
    public function getLastResponseInfo() {}

    /**
     * Generate OAuth header string signature
     * @param string $http_method
     * @param string $url
     * @param mixed  $extra_parameters
     * @return string|false
     */
    public function getRequestHeader($http_method, $url, $extra_parameters = '') {}

    /**
     * Fetch a request token
     * @param string $request_token_url
     * @param string $callback_url
     * @param string $http_method
     * @throws \OAuthException
     * @return array
     */
    public function getRequestToken($request_token_url, $callback_url = null, $http_method = 'GET') {}

    /**
     * Set authorization type
     * @param int $auth_type
     * @return bool
     */
    public function setAuthType($auth_type) {}

    /**
     * Set CA path and info
     * @param string $ca_path
     * @param string $ca_info
     * @return mixed
     */
    public function setCAPath($ca_path = null, $ca_info = null) {}

    /**
     * Set the nonce for subsequent requests
     * @param string $nonce
     * @return mixed
     */
    public function setNonce($nonce) {}

    /**
     * @param int $reqengine
     * @return void
     */
    public function setRequestEngine($reqengine) {}

    /**
     * Set the RSA certificate
     * @param string $cert
     * @return mixed
     */
    public function setRSACertificate($cert) {}

    /**
     * Set the timestamp
     * @param string $timestamp
     * @return mixed
     */
    public function setTimestamp($timestamp) {}

    /**
     * Set the token and secret
     * @param string $token
     * @param string $token_secret
     * @return bool
     */
    public function setToken($token, $token_secret) {}

    /**
     * Set the OAuth version
     * @param string $version
     * @return bool
     */
    public function setVersion($version) {}
}


class OAuthException extends Exception
{
    /**
     * The response of the exception which occurred, if any
     * @var string
     */
    public $lastResponse;

    /**
     * @var array
     */
    public $debugInfo;
}

;

/**
 * Manages an OAuth provider class.
 */
class OAuthProvider
{
    /**
     * @param string $req_params
     * @return bool
     */
    final public function addRequiredParameter($req_params) {}

    /**
     * @return void
     */
    public function callconsumerHandler() {}

    /**
     * @return void
     */
    public function callTimestampNonceHandler() {}

    /**
     * @return void
     */
    public function calltokenHandler() {}

    /**
     * @param string $uri
     * @param string $method
     * @return void
     */
    public function checkOAuthRequest($uri = '', $method = '') {}

    /**
     * @param array $params_array
     */
    public function __construct($params_array) {}

    /**
     * @param callable $callback_function
     * @return void
     */
    public function consumerHandler($callback_function) {}

    /**
     * @param int $size
     * @param bool $strong
     * @return string
     */
    final public static function generateToken($size, $strong = false) {}

    /**
     * @param mixed $params_array
     * @return void
     */
    public function is2LeggedEndpoint($params_array) {}

    /**
     * @param bool $will_issue_request_token
     * @return void
     */
    public function isRequestTokenEndpoint($will_issue_request_token) {}

    /**
     * @param string $req_params
     * @return bool
     */
    final public function removeRequiredParameter($req_params) {}

    /**
     * @param string $oauthexception
     * @param bool $send_headers
     * @return string
     */
    final public static function reportProblem($oauthexception, $send_headers = true) {}

    /**
     * @param string $param_key
     * @param mixed $param_val
     * @return bool
     */
    final public function setParam($param_key, $param_val = null) {}

    /**
     * @param string $path
     * @return bool
     */
    final public function setRequestTokenPath($path) {}

    /**
     * @param callable $callback_function
     * @return void
     */
    public function timestampNonceHandler($callback_function) {}

    /**
     * @param callable $callback_function
     * @return void
     */
    public function tokenHandler($callback_function) {}
}
