<?php

// Start of snmp v.0.1

/**
 * Represents SNMP session.
 * @link https://php.net/manual/en/class.snmp.php
 */
class SNMP
{
    /**
     * @var int Maximum OID per GET/SET/GETBULK request
     * @link https://secure.php.net/manual/en/class.snmp.php#snmp.props.max-oids
     */
    public $max_oids;

    /**
     * @var int Controls the method how the SNMP values will be returned
     * <dl>
     * <dt>SNMP_VALUE_LIBRARY</dt><dd>The return values will be as returned by the Net-SNMP library.</dd>
     * <dt>SNMP_VALUE_PLAIN</dt><dd>The return values will be the plain value without the SNMP type hint.</dd>
     * <dt>SNMP_VALUE_OBJECT</dt><dd>The return values will be objects with the properties "value" and "type", where the latter is one of the SNMP_OCTET_STR, SNMP_COUNTER etc. constants. The way "value" is returned is based on which one of SNMP_VALUE_LIBRARY, SNMP_VALUE_PLAIN is set</dd>
     * <dl>
     * @link https://secure.php.net/manual/en/class.snmp.php#snmp.props.max-oids
     */
    public $valueretrieval;

    /**
     * @var bool Value of quick_print within the NET-SNMP library
     * <p>Sets the value of quick_print within the NET-SNMP library. When this is set (1), the SNMP library will return 'quick printed' values. This means that just the value will be printed. When quick_print is not enabled (default) the UCD SNMP library prints extra information including the type of the value (i.e. IpAddress or OID). Additionally, if quick_print is not enabled, the library prints additional hex values for all strings of three characters or less.
     * @link https://secure.php.net/manual/en/class.snmp.php#snmp.props.quick-print
     */
    public $quick_print;

    /**
     * @var bool Controls the way enum values are printed
     * <p>Parameter toggles if walk/get etc. should automatically lookup enum values in the MIB and return them together with their human readable string.
     * @link https://secure.php.net/manual/en/class.snmp.php#snmp.props.enum-print
     */
    public $enum_print;

    /**
     * @var int Controls OID output format
     * <p>OID .1.3.6.1.2.1.1.3.0 representation for various oid_output_format values
     * <dl>
     * <dt>SNMP_OID_OUTPUT_FULL</dt><dd>.iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance</dd>
     * <dt>SNMP_OID_OUTPUT_NUMERIC</dt><dd>.1.3.6.1.2.1.1.3.0</dd>
     * <dt>SNMP_OID_OUTPUT_MODULE</dt><dd>DISMAN-EVENT-MIB::sysUpTimeInstance</dd>
     * <dt>SNMP_OID_OUTPUT_SUFFIX</dt><dd>sysUpTimeInstance</dd>
     * <dt>SNMP_OID_OUTPUT_UCD</dt><dd>system.sysUpTime.sysUpTimeInstance</dd>
     * <dt>SNMP_OID_OUTPUT_NONE</dt><dd>Undefined</dd>
     * </dl>
     * @link https://secure.php.net/manual/en/class.snmp.php#snmp.props.oid-output-format
     */
    public $oid_output_format;

    /**
     * @var bool Controls disabling check for increasing OID while walking OID tree
     * <p> Some SNMP agents are known for returning OIDs out of order but can complete the walk anyway. Other agents return OIDs that are out of order and can cause SNMP::walk() to loop indefinitely until memory limit will be reached. PHP SNMP library by default performs OID increasing check and stops walking on OID tree when it detects possible loop with issuing warning about non-increasing OID faced. Set oid_increasing_check to <b>FALSE</b> to disable this check.
     * @link https://secure.php.net/manual/en/class.snmp.php#snmp.props.oid-increasing-check
     */
    public $oid_increasing_check;

    /**
     * @var int Controls which failures will raise SNMPException instead of warning. Use bitwise OR'ed SNMP::ERRNO_* constants. By default all SNMP exceptions are disabled.
     * @link https://secure.php.net/manual/en/class.snmp.php#snmp.props.exceptions-enabled
     */
    public $exceptions_enabled;

    /**
     * @var array Read-only property with remote agent configuration: hostname, port, default timeout, default retries count
     * @link https://secure.php.net/manual/en/class.snmp.php#snmp.props.info
     */
    public $info;
    public const VERSION_1 = 0;
    public const VERSION_2c = 1;
    public const VERSION_2C = 1;
    public const VERSION_3 = 3;
    public const ERRNO_NOERROR = 0;
    public const ERRNO_ANY = 126;
    public const ERRNO_GENERIC = 2;
    public const ERRNO_TIMEOUT = 4;
    public const ERRNO_ERROR_IN_REPLY = 8;
    public const ERRNO_OID_NOT_INCREASING = 16;
    public const ERRNO_OID_PARSING_ERROR = 32;
    public const ERRNO_MULTIPLE_SET_QUERIES = 64;

    /**
     * Creates SNMP instance representing session to remote SNMP agent
     * @link https://php.net/manual/en/snmp.construct.php
     * @param int $version <p>SNMP protocol version:
     * <b>SNMP::VERSION_1</b>,
     * <b>SNMP::VERSION_2C</b>,
     * <b>SNMP::VERSION_3</b>.</p>
     * @param string $hostname The SNMP agent. <i>hostname</i> may be suffixed with
     * optional <acronym title="Simple Network Management Protocol">SNMP</acronym> agent port after colon. IPv6 addresses must be enclosed in square
     * brackets if used with port. If FQDN is used for <i>hostname</i>
     * it will be resolved by php-snmp library, not by Net-SNMP engine. Usage
     * of IPv6 addresses when specifying FQDN may be forced by enclosing FQDN
     * into square brackets. Here it is some examples:
     * <table>
     * <tbody>
     * <tr><td>IPv4 with default port</td><td>127.0.0.1</td></tr>
     * <tr><td>IPv6 with default port</td><td>::1 or [::1]</td></tr>
     * <tr><td>IPv4 with specific port</td><td>127.0.0.1:1161</td></tr>
     * <tr><td>IPv6 with specific port</td><td>[::1]:1161</td></tr>
     * <tr><td>FQDN with default port</td><td>host.domain</td></tr>
     * <tr><td>FQDN with specific port</td><td>host.domain:1161</td></tr>
     * <tr><td>FQDN with default port, force usage of IPv6 address</td><td>[host.domain]</td></tr>
     * <tr><td>FQDN with specific port, force usage of IPv6 address</td><td>[host.domain]:1161</td></tr>
     * </tbody>
     * </table>
     * @param string $community <p>The purpuse of <i>community</i> is
     * <acronym title="Simple Network Management Protocol">SNMP</acronym> version specific:</p>
     * <table>
     * <tbody>
     * <tr><td>SNMP::VERSION_1</td><td><acronym title="Simple Network Management Protocol">SNMP</acronym> community</td></tr>
     * <tr><td>SNMP::VERSION_2C</td><td><acronym title="Simple Network Management Protocol">SNMP</acronym> community</td></tr>
     * <tr><td>SNMP::VERSION_3</td><td><acronym title="Simple Network Management Protocol">SNMP</acronym>v3 securityName</td></tr>
     * </tbody>
     * </table>
     * @param int $timeout [optional] The number of microseconds until the first timeout.
     * @param int $retries [optional] The number of retries in case timeout occurs.
     * @since 5.4
     */
    public function __construct($version, $hostname, $community, $timeout = 1000000, $retries = 5) {}

    /**
     * Close SNMP session
     * @link https://php.net/manual/en/snmp.close.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     * @since 5.4
     */
    public function close() {}

    /**
     * Configures security-related SNMPv3 session parameters
     * @link https://php.net/manual/en/snmp.setsecurity.php
     * @param string $sec_level the security level (noAuthNoPriv|authNoPriv|authPriv)
     * @param string $auth_protocol [optional] the authentication protocol (MD5 or SHA)
     * @param string $auth_passphrase [optional] the authentication pass phrase
     * @param string $priv_protocol [optional] the privacy protocol (DES or AES)
     * @param string $priv_passphrase [optional] the privacy pass phrase
     * @param string $contextName [optional] the context name
     * @param string $contextEngineID [optional] the context EngineID
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     * @since 5.4
     */
    public function setSecurity($sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $contextName, $contextEngineID) {}

    /**
     * Fetch an SNMP object
     * @link https://php.net/manual/en/snmp.get.php
     * @param mixed $object_id The SNMP object (OID) or objects
     * @param bool $preserve_keys [optional] When object_id is a array and preserve_keys set to <b>TRUE</b> keys in results will be taken exactly as in object_id, otherwise SNMP::oid_output_format property is used to determinate the form of keys.
     * @return mixed SNMP objects requested as string or array
     * depending on <i>object_id</i> type or <b>FALSE</b> on error.
     * @since 5.4
     */
    public function get($object_id, $preserve_keys = false) {}

    /**
     * Fetch an SNMP object which
     * follows the given object id
     * @link https://php.net/manual/en/snmp.getnext.php
     * @param mixed $object_id <p>
     * The <acronym title="Simple Network Management Protocol">SNMP</acronym> object (OID) or objects
     * </p>
     * @return mixed SNMP objects requested as string or array
     * depending on <i>object_id</i> type or <b>FALSE</b> on error.
     * @since 5.4
     */
    public function getnext($object_id) {}

    /**
     * Fetch SNMP object subtree
     * @link https://php.net/manual/en/snmp.walk.php
     * @param string $object_id <p>Root of subtree to be fetched</p>
     * @param bool $suffix_as_keys [optional] <p>By default full OID notation is used for keys in output array. If set to <b>TRUE</b> subtree prefix will be removed from keys leaving only suffix of object_id.</p>
     * @param int $max_repetitions [optional] <p>This specifies the maximum number of iterations over the repeating variables. The default is to use this value from SNMP object.</p>
     * @param int $non_repeaters [optional] <p>This specifies the number of supplied variables that should not be iterated over. The default is to use this value from SNMP object.</p>
     * @return array|false associative array of the SNMP object ids and their values on success or <b>FALSE</b> on error.
     * When a SNMP error occures <b>SNMP::getErrno</b> and
     * <b>SNMP::getError</b> can be used for retrieving error
     * number (specific to SNMP extension, see class constants) and error message
     * respectively.
     * @since 5.4
     */
    public function walk($object_id, $suffix_as_keys = false, $max_repetitions, $non_repeaters) {}

    /**
     * Set the value of an SNMP object
     * @link https://php.net/manual/en/snmp.set.php
     * @param string $object_id <p>The SNMP object id</p>
     * @since 5.4
     *
     * <p>When count of OIDs in object_id array is greater than
     * max_oids object property set method will have to use multiple queries
     * to perform requested value updates. In this case type and value checks
     * are made per-chunk so second or subsequent requests may fail due to
     * wrong type or value for OID requested. To mark this a warning is
     * raised when count of OIDs in object_id array is greater than max_oids.
     * When count of OIDs in object_id array is greater than max_oids object property set method will have to use multiple queries to perform requested value updates. In this case type and value checks are made per-chunk so second or subsequent requests may fail due to wrong type or value for OID requested. To mark this a warning is raised when count of OIDs in object_id array is greater than max_oids.</p>
     * @param mixed $type <p>The MIB defines the type of each object id. It has to be specified as a single character from the below list.</p>
     * <b>types:</b>
     * <table>
     * <tbody>
     * <tr><td>=</td><td>The type is taken from the MIB</td></tr>
     * <tr><td>i</td><td>INTEGER</td> </tr>
     * <tr><td>u</td><td>INTEGER</td></tr>
     * <tr><td>s</td><td>STRING</td></tr>
     * <tr><td>x</td><td>HEX STRING</td></tr>
     * <tr><td>d</td><td>DECIMAL STRING</td></tr>
     * <tr><td>n</td><td>NULLOBJ</td></tr>
     * <tr><td>o</td><td>OBJID</td></tr>
     * <tr><td>t</td><td>TIMETICKS</td></tr>
     * <tr><td>a</td><td>IPADDRESS</td></tr>
     * <tr><td>b</td><td>BITS</td></tr>
     * </tbody>
     * </table>
     * <p>
     * If <b>OPAQUE_SPECIAL_TYPES</b> was defined while compiling the SNMP library, the following are also valid:
     * </p>
     * <b>types:</b>
     * <table>
     * <tbody>
     * <tr><td>U</td><td>unsigned int64</td></tr>
     * <tr><td>I</td><td>signed int64</td></tr>
     * <tr><td>F</td><td>float</td></tr>
     * <tr><td>D</td><td>double</td></tr>
     * </tbody>
     * </table>
     * <p>
     * Most of these will use the obvious corresponding ASN.1 type.  's', 'x', 'd' and 'b' are all different ways of specifying an OCTET STRING value, and
     * the 'u' unsigned type is also used for handling Gauge32 values.
     * </p>
     *
     * <p>
     * If the MIB-Files are loaded by into the MIB Tree with "snmp_read_mib" or by specifying it in the libsnmp config, '=' may be used as
     * the <i>type</i> parameter for all object ids as the type can then be automatically read from the MIB.
     * </p>
     *
     * <p>
     * Note that there are two ways to set a variable of the type BITS like e.g.
     * "SYNTAX    BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":
     * </p>
     * <ul>
     * <li>
     * Using type "b" and a list of bit numbers. This method is not recommended since GET query for the same OID would return e.g. 0xF8.
     * </li>
     * <li>
     * Using type "x" and a hex number but without(!) the usual "0x" prefix.
     * </li>
     * </ul>
     * <p>
     * See examples section for more details.
     * </p>
     * @param mixed $value <p>
     * The new value.</p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    public function set($object_id, $type, $value) {}

    /**
     * Get last error code
     * @link https://php.net/manual/en/snmp.geterrno.php
     * @return int one of SNMP error code values described in constants chapter.
     * @since 5.4
     */
    public function getErrno() {}

    /**
     * Get last error message
     * @link https://php.net/manual/en/snmp.geterror.php
     * @return string String describing error from last SNMP request.
     * @since 5.4
     */
    public function getError() {}
}

/**
 * Represents an error raised by SNMP. You should not throw a
 * <b>SNMPException</b> from your own code.
 * See Exceptions for more
 * information about Exceptions in PHP.
 * @link https://php.net/manual/en/class.snmpexception.php
 */
class SNMPException extends RuntimeException
{
    /**
     * @var string Textual error message. Exception::getMessage() to access it.
     */
    protected $message;

    /**
     * @var string SNMP library error code. Use Exception::getCode() to access it.
     */
    protected $code;
}

/**
 * <div id="function.snmpget" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmpget</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmpget</span> — <span class="dc-title">获取 <span>SNMP</span> 对象</span></p> </div> <div class="refsect1 description" id="refsect1-function.snmpget-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmpget</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$community</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>snmpget()</strong></span> 函数用于读取由 <span class="parameter" style="color:#3A95FF">object_id</span> 指定的 <span>SNMP</span> 对象的值。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.snmpget-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>     <dd>      <p class="para">       <span>SNMP</span> 代理。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">community</span></dt>     <dd>      <p class="para">       The read community.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>     <dd>      <p class="para">       <span>SNMP</span> 对象。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>     <dd>      <p class="para">       第一次超时前的微秒数。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>     <dd>      <p class="para">       发生超时时重试的次数。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.snmpget-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <span>SNMP</span> 对象值，错误时为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.snmpget-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4746">    <p><strong>示例 #1 使用 <span class="function"><strong>snmpget()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$syscontact </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">"system.SysContact.0"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.snmpget-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmpset()} - 设置 SNMP 对象的值</span></li>   </ul>   </div> </div>
 * 
 * Fetch an SNMP object
 * @link https://php.net/manual/zh/function.snmpget.php
 * @param string $hostname <p>
 * The SNMP agent.
 * </p>
 * @param string $community <p>
 * The read community.
 * </p>
 * @param string $object_id <p>
 * The SNMP object.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return string|false SNMP object value on success or <b>FALSE</b> on error.
 */
function snmpget($hostname, $community, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmpgetnext" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmpgetnext</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmpgetnext</span> — <span class="dc-title">   Fetch the <span>SNMP</span> object which follows the given object id  </span></p> </div> <div class="refsect1 description" id="refsect1-function.snmpgetnext-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmpgetnext</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$community</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>    <p class="para rdfs-comment">   The <span class="function"><strong>snmpgetnext()</strong></span> function is used to read the   value of the <span>SNMP</span> object that follows the specified    <span class="parameter" style="color:#3A95FF">object_id</span>.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.snmpgetnext-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>     <dd><p class="para">The hostname of the <span>SNMP</span> agent (server).</p></dd>             <dt><span class="parameter" style="color:#3A95FF">community</span></dt>     <dd><p class="para">The read community.</p></dd>             <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>     <dd><p class="para">The <span>SNMP</span> object id which precedes the wanted one.</p></dd>             <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>     <dd><p class="para">The number of microseconds until the first timeout.</p></dd>             <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>     <dd><p class="para">The number of times to retry if timeouts occur.</p></dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmpgetnext-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <span>SNMP</span> object value on success or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.   In case of an error, an E_WARNING message is shown.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.snmpgetnext-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4747">    <p><strong>示例 #1 Using <span class="function"><strong>snmpgetnext()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$nameOfSecondInterface </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpgetnetxt</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName.1'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.snmpgetnext-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmpget()} - 获取 SNMP 对象</span></li>    <li><span class="function">{@link snmpwalk()} - 从代理获取所有 SNMP 对象</span></li>   </ul>   </div> </div>
 * 
 * Fetch the SNMP object which follows the given object id
 * @link https://php.net/manual/zh/function.snmpgetnext.php
 * @param string $host <p>The hostname of the SNMP agent (server).</p>
 * @param string $community <p>The read community.</p>
 * @param string $object_id <p>The SNMP object id which precedes the wanted one.</p>
 * @param int $timeout [optional] <p>The number of microseconds until the first timeout.</p>
 * @param int $retries [optional] <p>The number of times to retry if timeouts occur.</p>
 * @return string|false SNMP object value on success or <b>FALSE</b> on error.
 * In case of an error, an E_WARNING message is shown.
 */
function snmpgetnext($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmpwalk" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmpwalk</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmpwalk</span> — <span class="dc-title">从代理获取所有 <span>SNMP</span> 对象</span></p> </div> <div class="refsect1 description" id="refsect1-function.snmpwalk-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmpwalk</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$community</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>snmpwalk()</strong></span> 函数用于从 <span class="parameter" style="color:#3A95FF">hostname</span> 指定的 <span>SNMP</span> 代理读取所有值。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.snmpwalk-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>     <dd>      <p class="para">       SNMP 代理（服务器）。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">community</span></dt>     <dd>      <p class="para">       The read community.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>     <dd>      <p class="para">       如果为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，则将 <span class="parameter" style="color:#3A95FF">object_id</span> 作为 <span>SNMP</span> 对象树的根，并且该树下的所有对象都作为数组返回。      </p>      <p class="para">       如果指定了 <span class="parameter" style="color:#3A95FF">object_id</span>，则返回该 <span class="parameter" style="color:#3A95FF">object_id</span> 下面的所有 <span>SNMP</span> 对象。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>     <dd>      <p class="para">       第一次超时前的微秒数。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>     <dd>      <p class="para">发生超时时重试的次数。</p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.snmpwalk-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回从 <span class="parameter" style="color:#3A95FF">object_id</span> 开始的 <span>SNMP</span> 对象值数组，如 root 或错误时为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.snmpwalk-examples">  <h3 class="title">示例</h3>  <p class="para">    </p><div class="example" id="example-4751">    <p><strong>示例 #1 <span class="function"><strong>snmpwalk()</strong></span> 示例</strong></p>    <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$a </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpwalk</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">); <br><br>foreach (</span><span style="color: #9876AA">\$a </span><span style="color: #007700">as </span><span style="color: #9876AA">\$val</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">\$val</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>     <p class="para">   上面的函数调用将从本地主机上运行的 <span>SNMP</span> 代理返回所有 <span>SNMP</span> 对象。 可以通过循环遍历这些值  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.snmpwalk-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmprealwalk()} - 返回指定的所有对象，包括它们各自的对象 ID</span></li>   </ul>   </div></div>
 * 
 * Fetch all the SNMP objects from an agent
 * @link https://php.net/manual/zh/function.snmpwalk.php
 * @param string $hostname <p>
 * The SNMP agent (server).
 * </p>
 * @param string $community <p>
 * The read community.
 * </p>
 * @param string $object_id <p>
 * If <b>NULL</b>, <i>object_id</i> is taken as the root of
 * the SNMP objects tree and all objects under that tree are returned as
 * an array.
 * </p>
 * <p>
 * If <i>object_id</i> is specified, all the SNMP objects
 * below that <i>object_id</i> are returned.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>The number of times to retry if timeouts occur.</p>
 * @return array an array of SNMP object values starting from the
 * <i>object_id</i> as root or <b>FALSE</b> on error.
 */
function snmpwalk($hostname, $community, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmprealwalk" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmprealwalk</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmprealwalk</span> — <span class="dc-title">   返回指定的所有对象，包括它们各自的对象 ID  </span></p> </div> <div class="refsect1 description" id="refsect1-function.snmprealwalk-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmprealwalk</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$community</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>snmprealwalk()</strong></span> 函数用于遍历从 <span class="parameter" style="color:#3A95FF">object_id</span> 开始的多个 <span>SNMP</span> 对象，不仅返回它们的值，还返回它们的对象 ID。  </p>  </div>  <div class="refsect1 parameters" id="refsect1-function.snmprealwalk-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>     <dd><p class="para"><span>SNMP</span> 代理（服务器）的主机名。</p></dd>             <dt><span class="parameter" style="color:#3A95FF">community</span></dt>     <dd><p class="para">The read community.</p></dd>             <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>     <dd><p class="para">在所需对象之前的 <span>SNMP</span> 对象 ID。</p></dd>             <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>     <dd><p class="para">第一次超时前的微秒数。</p></dd>             <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>     <dd><p class="para">发生超时时重试的次数。</p></dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmprealwalk-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <span>SNMP</span> 对象 ID 及其值的关联数组，错误时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。如果出现错误，将显示一条 E_WARNING 消息。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.snmprealwalk-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4748">    <p><strong>示例 #1 使用 <span class="function"><strong>snmprealwalk()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br> print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">snmprealwalk</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">"IF-MIB::ifName"</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>        <div class="example-contents"><p>     以上将输出如下内容：</p><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IF-MIB::ifName.1]&nbsp;=&gt;&nbsp;STRING:&nbsp;lo<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IF-MIB::ifName.2]&nbsp;=&gt;&nbsp;STRING:&nbsp;eth0<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IF-MIB::ifName.3]&nbsp;=&gt;&nbsp;STRING:&nbsp;eth2<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IF-MIB::ifName.4]&nbsp;=&gt;&nbsp;STRING:&nbsp;sit0<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IF-MIB::ifName.5]&nbsp;=&gt;&nbsp;STRING:&nbsp;sixxs<br>&nbsp;&nbsp;&nbsp;&nbsp;)</blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.snmprealwalk-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmpwalk()} - 从代理获取所有 SNMP 对象</span></li>   </ul>   </div></div>
 * 
 * Return all objects including their respective object ID within the specified one
 * @link https://php.net/manual/zh/function.snmprealwalk.php
 * @param string $host <p>The hostname of the SNMP agent (server).</p>
 * @param string $community <p>The read community.</p>
 * @param string $object_id <p>The SNMP object id which precedes the wanted one.</p>
 * @param int $timeout [optional] <p>The number of microseconds until the first timeout.</p>
 * @param int $retries [optional] <p>The number of times to retry if timeouts occur.</p>
 * @return array|false an associative array of the SNMP object ids and their values on success or <b>FALSE</b> on error.
 * In case of an error, an E_WARNING message is shown.
 */
function snmprealwalk($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmpwalkoid" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmpwalkoid</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmpwalkoid</span> — <span class="dc-title">查询有关网络实体的信息树  </span></p> </div> <div class="refsect1 description" id="refsect1-function.snmpwalkoid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmpwalkoid</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$community</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>snmpwalkoid()</strong></span> 函数用于从 <span class="parameter" style="color:#3A95FF">hostname</span> 指定的 SNMP 代理读取所有对象 ID 及其各自的值。  </p>  <p class="para">   <span class="function"><strong>snmpwalkoid()</strong></span> 和 <span class="function">{@link snmpwalk()}</span> 的存在是有历史原因的。提供这两个函数是为了向后兼容。请改用 <span class="function">{@link snmprealwalk()}</span>。  </p>  </div> <div class="refsect1 parameters" id="refsect1-function.snmpwalkoid-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>     <dd>      <p class="para">       SNMP 代理。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">community</span></dt>     <dd>      <p class="para">       The read community.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>     <dd>      <p class="para">       如果为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>，则将 <span class="parameter" style="color:#3A95FF">object_id</span> 作为 <span>SNMP</span> 对象树的根，并且该树下的所有对象都作为数组返回。      </p>      <p class="para">       如果指定了 <span class="parameter" style="color:#3A95FF">object_id</span>，则返回该 <span class="parameter" style="color:#3A95FF">object_id</span> 下面的所有 <span>SNMP</span> 对象。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>     <dd>      <p class="para">       第一次超时前的微秒数。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>     <dd>      <p class="para">       发生超时时重试的次数。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.snmpwalkoid-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回关联数组，其中包含对象 ID 及其各自的对象值，从 <span class="parameter" style="color:#3A95FF">object_id</span> 开始为 root 或错误时为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.snmpwalkoid-examples">  <h3 class="title">示例</h3>  <p class="para">    </p><div class="example" id="example-4752">    <p><strong>示例 #1 <span class="function"><strong>snmpwalkoid()</strong></span> 示例</strong></p>    <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$a </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpwalkoid</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">); <br>for (</span><span style="color: #9876AA">reset</span><span style="color: #007700">(</span><span style="color: #9876AA">\$a</span><span style="color: #007700">); </span><span style="color: #9876AA">\$i </span><span style="color: #007700">= </span><span style="color: #9876AA">key</span><span style="color: #007700">(</span><span style="color: #9876AA">\$a</span><span style="color: #007700">); </span><span style="color: #9876AA">next</span><span style="color: #007700">(</span><span style="color: #9876AA">\$a</span><span style="color: #007700">)) {<br>    echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">\$i</span><span style="color: #DD0000">: </span><span style="color: #9876AA">\$a</span><span style="color: #007700">[</span><span style="color: #9876AA">\$i</span><span style="color: #007700">]</span><span style="color: #DD0000">&lt;br /&gt;\n"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>     <p class="para">   上面的函数调用将从本地主机上运行的 SNMP 代理返回所有 SNMP 对象。可以通过循环遍历这些值  </p> </div> <div class="refsect1 seealso" id="refsect1-function.snmpwalkoid-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmpwalk()} - 从代理获取所有 SNMP 对象</span></li>   </ul>   </div></div>
 * 
 * Query for a tree of information about a network entity
 * @link https://php.net/manual/zh/function.snmpwalkoid.php
 * @param string $hostname <p>
 * The SNMP agent.
 * </p>
 * @param string $community <p>
 * The read community.
 * </p>
 * @param string $object_id <p>
 * If <b>NULL</b>, <i>object_id</i> is taken as the root of
 * the SNMP objects tree and all objects under that tree are returned as
 * an array.
 * </p>
 * <p>
 * If <i>object_id</i> is specified, all the SNMP objects
 * below that <i>object_id</i> are returned.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return array an associative array with object ids and their respective
 * object value starting from the <i>object_id</i>
 * as root or <b>FALSE</b> on error.
 */
function snmpwalkoid($hostname, $community, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmpset" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmpset</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmpset</span> — <span class="dc-title">设置 <span>SNMP</span> 对象的值</span></p> </div> <div class="refsect1 description" id="refsect1-function.snmpset-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmpset</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$community</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$type</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>snmpset()</strong></span> 用于通过 <span class="parameter" style="color:#3A95FF">object_id</span> 设置 <span>SNMP</span>   对象的值。   </p> </div> <div class="refsect1 parameters" id="refsect1-function.snmpset-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>     <dd>      <p class="para">       <span>SNMP</span> 代理（服务器）的主机名。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">community</span></dt>     <dd>      <p class="para">       The write community.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>     <dd>      <p class="para">       <span>SNMP</span> 对象 ID。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">type</span></dt>     <dd>      <p class="para"><span>MIB</span> 定义了各个对象 id 的类型。必须是下面列出的单个字符之一。</p><table class="doctable table"> <caption><strong>类型</strong></caption>   <tbody class="tbody">   <tr><td>=</td><td>MIB类型</td></tr>   <tr><td>i</td><td>INTEGER</td> </tr>   <tr><td>u</td><td>INTEGER</td></tr>   <tr><td>s</td><td>STRING</td></tr>   <tr><td>x</td><td>HEX STRING</td></tr>   <tr><td>d</td><td>DECIMAL STRING</td></tr>   <tr><td>n</td><td>NULLOBJ</td></tr>   <tr><td>o</td><td>OBJID</td></tr>   <tr><td>t</td><td>TIMETICKS</td></tr>   <tr><td>a</td><td>IPADDRESS</td></tr>   <tr><td>b</td><td>BITS</td></tr>  </tbody> </table><p class="para"> 如果在编译 <span>SNMP</span> 库时定义了 <strong><span>OPAQUE_SPECIAL_TYPES</span></strong>，那么下列值是合法的：</p><table class="doctable table"> <caption><strong>types</strong></caption>   <tbody class="tbody">   <tr><td>U</td><td>unsigned int64</td></tr>   <tr><td>I</td><td>signed int64</td></tr>   <tr><td>F</td><td>float</td></tr>   <tr><td>D</td><td>double</td></tr>  </tbody> </table>      <p class="para">这些值大都会使用与 ASN.1 相符的类型。's'，'x'，'d'以及 'b' 都是指定一个八字节字符串值的方式。并且 'u' 无符号类型也可用于处理 Gauge32 值。</p>      <p class="para">如果 MIB 文件是用 "snmp_read_mib" 或者通过在 libsnmp config 中指定而加载入 MIB 树时，'=' 可以被用作为所有对象的 <span class="parameter" style="color:#3A95FF">type</span> 参数，因为 type 可以被自动从 MIB 中读取。</p>      <p class="para">注意有两种方式可以设定 BITS 类型的变量，例如"SYNTAX    BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":</p><ul class="itemizedlist"> <li class="listitem">  <span class="simpara">   使用 "b" 类型以及一个位数的列表。不推荐使用此方法，因为 GET 查询对同一个 OID 将会返回例如 0xF8。  </span> </li> <li class="listitem">  <span class="simpara">   使用 "x" 类型以及一个十六进制数但是不需要通常的 "0x" 前缀。  </span> </li></ul><p class="para"> 更多细节见示例部分。</p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">value</span></dt>     <dd>      <p class="para">       新值。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>     <dd>      <p class="para">       第一次超时前的微秒数。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>     <dd>      <p class="para">       发生超时时重试的次数。      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmpset-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   如果 SNMP 主机拒绝该数据类型，则会出现一条 E_WARNING 消息，例如显示“Warning: Error in packet. Reason:(badValue)The value   given has the wrong type or length.”。如果指定了未知或无效的 OID，警告可能会显示为“Could not add variable”。  </p> </div> <div class="refsect1 examples" id="refsect1-function.snmpset-examples">  <h3 class="title">示例</h3>   <div class="example" id="example-4749">    <p><strong>示例 #1 使用 <span class="function"><strong>snmpset()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>  snmpset</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">"IF-MIB::ifAlias.3"</span><span style="color: #007700">, </span><span style="color: #DD0000">"s"</span><span style="color: #007700">, </span><span style="color: #DD0000">"foo"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   <div class="example" id="example-4750">    <p><strong>示例 #2 使用 <span class="function"><strong>snmpset()</strong></span> 设置 BITS <span>SNMP</span> 对象 ID</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>  snmpset</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">'FOO-MIB::bar.42'</span><span style="color: #007700">, </span><span style="color: #DD0000">'b'</span><span style="color: #007700">, </span><span style="color: #DD0000">'0 1 2 3 4'</span><span style="color: #007700">);<br></span><span style="color: #FF8000">// or<br>  </span><span style="color: #9876AA">snmpset</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">'FOO-MIB::bar.42'</span><span style="color: #007700">, </span><span style="color: #DD0000">'x'</span><span style="color: #007700">, </span><span style="color: #DD0000">'F0'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div> </div> <div class="refsect1 seealso" id="refsect1-function.snmpset-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmpget()} - 获取 SNMP 对象</span></li>   </ul>   </div></div>
 * 
 * Set the value of an SNMP object
 * @link https://php.net/manual/zh/function.snmpset.php
 * @param string $host <p>
 * The hostname of the SNMP agent (server).
 * </p>
 * @param string $community <p>
 * The write community.
 * </p>
 * @param string $object_id <p>
 * The SNMP object id.
 * </p>
 * @param string $type The MIB defines the type of each object id. It has to be specified as a single character from the below list.
 * </p>
 * types
 * <tr valign="top"><td>=</td><td>The type is taken from the MIB</td></tr>
 * <tr valign="top"><td>i</td><td>INTEGER</td> </tr>
 * <tr valign="top"><td>u</td><td>INTEGER</td></tr>
 * <tr valign="top"><td>s</td><td>STRING</td></tr>
 * <tr valign="top"><td>x</td><td>HEX STRING</td></tr>
 * <tr valign="top"><td>d</td><td>DECIMAL STRING</td></tr>
 * <tr valign="top"><td>n</td><td>NULLOBJ</td></tr>
 * <tr valign="top"><td>o</td><td>OBJID</td></tr>
 * <tr valign="top"><td>t</td><td>TIMETICKS</td></tr>
 * <tr valign="top"><td>a</td><td>IPADDRESS</td></tr>
 * <tr valign="top"><td>b</td><td>BITS</td></tr>
 * </table>
 * If <b>OPAQUE_SPECIAL_TYPES</b> was defined while compiling the SNMP library, the following are also valid:
 * </p>
 * types
 * <tr valign="top"><td>U</td><td>unsigned int64</td></tr>
 * <tr valign="top"><td>I</td><td>signed int64</td></tr>
 * <tr valign="top"><td>F</td><td>float</td></tr>
 * <tr valign="top"><td>D</td><td>double</td></tr>
 * </table>
 * Most of these will use the obvious corresponding ASN.1 type. &#x00027;s&#x00027;, &#x00027;x&#x00027;, &#x00027;d&#x00027; and &#x00027;b&#x00027; are all different ways of specifying an OCTET STRING value, and
 * the &#x00027;u&#x00027; unsigned type is also used for handling Gauge32 values.
 * </p>
 * If the MIB-Files are loaded by into the MIB Tree with "snmp_read_mib" or by specifying it in the libsnmp config, &#x00027;=&#x00027; may be used as
 * the <i>type</i> parameter for all object ids as the type can then be automatically read from the MIB.
 * </p>
 * Note that there are two ways to set a variable of the type BITS like e.g.
 * "SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":
 * </p>
 * Using type "b" and a list of bit numbers. This method is not recommended since GET query for the same OID would return e.g. 0xF8.
 * Using type "x" and a hex number but without(!) the usual "0x" prefix.
 * See examples section for more details.
 * </p>
 * @param mixed $value <p>
 * The new value.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * <p>
 * If the SNMP host rejects the data type, an E_WARNING message like "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." is shown.
 * If an unknown or invalid OID is specified the warning probably reads "Could not add variable".
 * </p>
 */
function snmpset($host, $community, $object_id, $type, $value, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmp-get-quick-print" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp_get_quick_print</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp_get_quick_print</span> — <span class="dc-title">   获取当前 NET-SNMP 库的 quick_print 设置的值  </span></p> </div> <div class="refsect1 description" id="refsect1-function.snmp-get-quick-print-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp_get_quick_print</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   返回当前 NET-SNMP 库中存储的 quick_print 值。   quick_print 默认为 off。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.snmp-get-quick-print-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-function.snmp-get-quick-print-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   如果 quick_print 为 on，返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> 否则为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 examples" id="refsect1-function.snmp-get-quick-print-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4727">    <p><strong>示例 #1 <span class="function"><strong>snmp_get_quick_print()</strong></span> 示例</strong></p>    <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$quickprint </span><span style="color: #007700">= </span><span style="color: #9876AA">snmp_get_quick_print</span><span style="color: #007700">();<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    </div> <div class="refsect1 seealso" id="refsect1-function.snmp-get-quick-print-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmp_set_quick_print()} - 在 NET-SNMP 库中设置 enable 的值</span> 查看 quick_print 的详细说明。</li>   </ul>   </div></div>
 * 
 * Fetches the current value of the UCD library's quick_print setting
 * @link https://php.net/manual/zh/function.snmp-get-quick-print.php
 * @return bool <b>TRUE</b> if quick_print is on, <b>FALSE</b> otherwise.
 */
function snmp_get_quick_print() {}

/**
 * <div id="function.snmp-set-quick-print" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp_set_quick_print</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp_set_quick_print</span> — <span class="dc-title">在 NET-<span>SNMP</span> 库中设置 <span class="parameter" style="color:#3A95FF">enable</span> 的值  </span></p> </div> <div class="refsect1 description" id="refsect1-function.snmp-set-quick-print-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp_set_quick_print</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$enable</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type true" style="color:#EAB766">true</a></span></div>  <p class="para rdfs-comment">   设置 NET-<span>SNMP</span> 库中 <span class="parameter" style="color:#3A95FF">enable</span> 的值。当设置为（1），<span>SNMP</span>   库将返回“quick printed”。这意味着仅会打印值。当 <span class="parameter" style="color:#3A95FF">enable</span> 未启用（默认），NET-<span>SNMP</span>   库输出额外信息，包含值的类型（比如 IpAddress 或 OID）。此外，如果 quick_print 未启用，库将为所有字符串额外打印出三个或更少字符的十六进制值。  </p>  <p class="para">   默认情况下，NET-<span>SNMP</span> 库返回详细值，quick_print 仅用于返回值。  </p>  <p class="para">   目前字符串仍会返回带有额外的引号，这将在以后的版本中得到纠正。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.snmp-set-quick-print-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">enable</span></dt>     <dd>      <p class="para">      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.snmp-set-quick-print-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   总是返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.snmp-set-quick-print-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr> <td>8.2.0</td> <td>  现在返回类型为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>；之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span>。 </td></tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.snmp-set-quick-print-examples">  <h3 class="title">示例</h3>  <p class="para">   当使用返回的信息而不是显示它时，经常使用设置 quick_print。  </p>  <p class="para">     </p><div class="example" id="example-4732">    <p><strong>示例 #1 使用 <span class="function"><strong>snmp_set_quick_print()</strong></span></strong></p>    <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>snmp_set_quick_print</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$a </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">".1.3.6.1.2.1.2.2.1.9.1"</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">\$a</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">snmp_set_quick_print</span><span style="color: #007700">(</span><span style="color: #9876AA">1</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$a </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">".1.3.6.1.2.1.2.2.1.9.1"</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">\$a</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>    <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">'Timeticks:&nbsp;(0)&nbsp;0:00:00.00'<br>'0:00:00.00'</blockquote></div>    </div>   </div>    </div>  <div class="refsect1 seealso" id="refsect1-function.snmp-set-quick-print-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmp_get_quick_print()} - 获取当前 NET-SNMP 库的 quick_print 设置的值</span></li>   </ul>   </div></div>
 * 
 * Set the value of <i>quick_print</i> within the UCD SNMP library
 * @link https://php.net/manual/zh/function.snmp-set-quick-print.php
 * @param bool $quick_print
 * @return bool No value is returned.
 */
function snmp_set_quick_print($quick_print) {}

/**
 * <div id="function.snmp-set-enum-print" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp_set_enum_print</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp_set_enum_print</span> — <span class="dc-title">   Return all values that are enums with their enum value instead of the raw integer  </span></p> </div> <div class="refsect1 description" id="refsect1-function.snmp-set-enum-print-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp_set_enum_print</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$enable</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type true" style="color:#EAB766">true</a></span></div>  <p class="para rdfs-comment">   This function toggles if snmpwalk/snmpget etc. should automatically lookup enum values   in the MIB and return them together with their human readable string.   </p> </div>  <div class="refsect1 parameters" id="refsect1-function.snmp-set-enum-print-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">enable</span></dt>    <dd>     <p class="para">      As the value is interpreted as boolean by the Net-SNMP library, it can only be "0" or "1".     </p>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.snmp-set-enum-print-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   总是返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.snmp-set-enum-print-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr> <td>8.2.0</td> <td>  现在返回类型为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>；之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span>。 </td></tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.snmp-set-enum-print-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4730">    <p><strong>示例 #1 Using <span class="function"><strong>snmp_set_enum_print()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br> snmp_set_enum_print</span><span style="color: #007700">(</span><span style="color: #9876AA">0</span><span style="color: #007700">);<br> echo </span><span style="color: #9876AA">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifOperStatus.3'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br> </span><span style="color: #9876AA">snmp_set_enum_print</span><span style="color: #007700">(</span><span style="color: #9876AA">1</span><span style="color: #007700">);<br> echo </span><span style="color: #9876AA">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifOperStatus.3'</span><span style="color: #007700">) . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   The above  would return</p><div class="examplescode"><blockquote style="border:1px gray solid;">INTEGER:&nbsp;up(1)<br>&nbsp;INTEGER:&nbsp;1</blockquote></div>   </div> </div>
 * 
 * Return all values that are enums with their enum value instead of the raw integer
 * @link https://php.net/manual/zh/function.snmp-set-enum-print.php
 * @param int $enum_print <p>
 * As the value is interpreted as boolean by the Net-SNMP library, it can only be "0" or "1".
 * </p>
 * @return bool
 */
function snmp_set_enum_print($enum_print) {}

/**
 * <div id="function.snmp-set-oid-output-format" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp_set_oid_output_format</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp_set_oid_output_format</span> — <span class="dc-title">   Set the OID output format  </span></p> </div> <div class="refsect1 description" id="refsect1-function.snmp-set-oid-output-format-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp_set_oid_output_format</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$format</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type true" style="color:#EAB766">true</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>snmp_set_oid_output_format()</strong></span> sets the output format   to be full or numeric.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.snmp-set-oid-output-format-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">format</span></dt>     <dd>      <table class="doctable table">       <caption><strong>OID .1.3.6.1.2.1.1.3.0 representation for various <span class="parameter" style="color:#3A95FF">format</span> values</strong></caption>                 <tbody class="tbody">          <tr><td><strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-oid-output-full">SNMP_OID_OUTPUT_FULL</a></span></strong></td><td>.iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance</td></tr>          <tr><td><strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-oid-output-numeric">SNMP_OID_OUTPUT_NUMERIC</a></span></strong></td><td>.1.3.6.1.2.1.1.3.0</td> </tr>          <tr><td><strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-oid-output-module">SNMP_OID_OUTPUT_MODULE</a></span></strong></td><td>DISMAN-EVENT-MIB::sysUpTimeInstance</td></tr>          <tr><td><strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-oid-output-suffix">SNMP_OID_OUTPUT_SUFFIX</a></span></strong></td><td>sysUpTimeInstance</td></tr>          <tr><td><strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-oid-output-ucd">SNMP_OID_OUTPUT_UCD</a></span></strong></td><td>system.sysUpTime.sysUpTimeInstance</td></tr>          <tr><td><strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-oid-output-none">SNMP_OID_OUTPUT_NONE</a></span></strong></td><td>Undefined</td></tr>         </tbody>               </table>      </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.snmp-set-oid-output-format-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   总是返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.snmp-set-oid-output-format-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr> <td>8.2.0</td> <td>  现在返回类型为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>；之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span>。 </td></tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.snmp-set-oid-output-format-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4731">    <p><strong>示例 #1 Using <span class="function">{@link snmprealwalk()}</span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br><br> snmp_read_mib</span><span style="color: #007700">(</span><span style="color: #DD0000">"/usr/share/mibs/netsnmp/NET-SNMP-TC"</span><span style="color: #007700">);<br><br> </span><span style="color: #FF8000">// default or SNMP_OID_OUTPUT_MODULE<br> </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">snmprealwalk</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'RFC1213-MIB::sysObjectID'</span><span style="color: #007700">) );<br><br> </span><span style="color: #9876AA">snmp_set_oid_output_format</span><span style="color: #007700">(</span><span style="color: #9876AA">SNMP_OID_OUTPUT_NUMERIC</span><span style="color: #007700">);<br> </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">snmprealwalk</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'RFC1213-MIB::sysObjectID'</span><span style="color: #007700">) );<br><br> </span><span style="color: #9876AA">snmp_set_oid_output_format</span><span style="color: #007700">(</span><span style="color: #9876AA">SNMP_OID_OUTPUT_FULL</span><span style="color: #007700">);<br> </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">snmprealwalk</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'RFC1213-MIB::sysObjectID'</span><span style="color: #007700">) );<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>        <div class="example-contents"><p>     The above would output:</p><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;[RFC1213-MIB::sysObjectID.0]&nbsp;=&gt;&nbsp;OID:&nbsp;NET-SNMP-TC::linux<br>&nbsp;)<br>&nbsp;Array<br>&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;[.1.3.6.1.2.1.1.2.0]&nbsp;=&gt;&nbsp;OID:&nbsp;.1.3.6.1.4.1.8072.3.2.10<br>&nbsp;)<br>&nbsp;Array<br>&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;[.iso.org.dod.internet.mgmt.mib-2.system.sysObjectID.0]&nbsp;=&gt;&nbsp;OID:&nbsp;.iso.org.dod.internet.private.enterprises.netSnmp.netSnmpEnumerations.netSnmpAgentOIDs.linux<br>&nbsp;)</blockquote></div>    </div>   </div>   </div>  </div>
 * 
 * Set the OID output format
 * @link https://php.net/manual/zh/function.snmp-set-oid-output-format.php
 * @param int $oid_format [optional] <table>
 * OID .1.3.6.1.2.1.1.3.0 representation for various <i>oid_format</i> values
 * <tr valign="top"><td><b>SNMP_OID_OUTPUT_FULL</b></td><td>.iso.org.dod.internet.mgmt.mib-2.system.sysUpTime.sysUpTimeInstance</td></tr>
 * <tr valign="top"><td><b>SNMP_OID_OUTPUT_NUMERIC</b></td><td>.1.3.6.1.2.1.1.3.0</td> </tr>
 * </table>
 * <p>Begining from PHP 5.4.0 four additional constants available:
 * <table>
 * <tr valign="top"><td><b>SNMP_OID_OUTPUT_MODULE</b></td><td>DISMAN-EVENT-MIB::sysUpTimeInstance</td></tr>
 * <tr valign="top"><td><b>SNMP_OID_OUTPUT_SUFFIX</b></td><td>sysUpTimeInstance</td></tr>
 * <tr valign="top"><td><b>SNMP_OID_OUTPUT_UCD</b></td><td>system.sysUpTime.sysUpTimeInstance</td></tr>
 * <tr valign="top"><td><b>SNMP_OID_OUTPUT_NONE</b></td><td>Undefined</td></tr>
 * </table>
 * </p>
 * @return bool No value is returned.
 */
function snmp_set_oid_output_format($oid_format = SNMP_OID_OUTPUT_MODULE) {}

/**
 * <div id="function.snmp-set-oid-numeric-print" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp_set_oid_numeric_print</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp_set_oid_numeric_print</span> — <span class="dc-title">别名 <span class="function">{@link snmp_set_oid_output_format()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.snmp-set-oid-numeric-print-description">  <h3 class="title">说明</h3>  <p class="para">  此函数是该函数的别名： <span class="function">{@link snmp_set_oid_output_format()}</span>.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.snmp-set-oid-numeric-print-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmp_set_oid_output_format()} - Set the OID output format</span></li>   </ul>   </div>  </div>
 * 
 * Set the oid output format
 * @link https://php.net/manual/zh/function.snmp-set-oid-numeric-print.php
 * @param int $oid_format
 * @return void
 */
function snmp_set_oid_numeric_print($oid_format) {}

/**
 * <div id="function.snmp2-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp2_get</h1>  <p class="verinfo">(PHP 5 &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp2_get</span> — <span class="dc-title">Fetch an <span>SNMP</span> object</span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp2-get-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp2_get</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$community</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   The <span class="function"><strong>snmp2_get()</strong></span> function is used to read the   value of an <span>SNMP</span> object specified by the   <span class="parameter" style="color:#3A95FF">object_id</span>.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.snmp2-get-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>    <dd>     <p class="para">      The <span>SNMP</span> agent.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">community</span></dt>    <dd>     <p class="para">      The read community.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>    <dd>     <p class="para">      The <span>SNMP</span> object.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>    <dd>     <p class="para">      The number of microseconds until the first timeout.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>    <dd>     <p class="para">      The number of times to retry if timeouts occur.     </p>    </dd>     </dl> </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmp2-get-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <span>SNMP</span> object value on success or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.snmp2-get-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4734">    <p><strong>示例 #1 Using <span class="function"><strong>snmp2_get()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$syscontact </span><span style="color: #007700">= </span><span style="color: #9876AA">snmp2_get</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">"system.SysContact.0"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.snmp2-get-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmp2_set()} - Set the value of an SNMP object</span></li>   </ul>   </div> </div>
 * 
 * Fetch an SNMP object
 * @link https://php.net/manual/zh/function.snmp2-get.php
 * @param string $host <p>
 * The SNMP agent.
 * </p>
 * @param string $community <p>
 * The read community.
 * </p>
 * @param string $object_id <p>
 * The SNMP object.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return string|false SNMP object value on success or <b>FALSE</b> on error.
 */
function snmp2_get($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmp2-getnext" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp2_getnext</h1>  <p class="verinfo">(PHP &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp2_getnext</span> — <span class="dc-title">Fetch the <span>SNMP</span> object which follows the given object id</span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp2-getnext-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp2_getnext</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$community</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   The <span class="function"><strong>snmp2_get_next()</strong></span> function is used to read the   value of the <span>SNMP</span> object that follows the specified   <span class="parameter" style="color:#3A95FF">object_id</span>.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.snmp2-getnext-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>    <dd>     <p class="para">      The hostname of the <span>SNMP</span> agent (server).     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">community</span></dt>    <dd>     <p class="para">      The read community.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>    <dd>     <p class="para">      The <span>SNMP</span> object id which precedes the wanted one.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>    <dd>     <p class="para">      The number of microseconds until the first timeout.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>    <dd>     <p class="para">      The number of times to retry if timeouts occur.     </p>    </dd>     </dl> </div>   <div class="refsect1 returnvalues" id="refsect1-function.snmp2-getnext-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <span>SNMP</span> object value on success or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.   In case of an error, an E_WARNING message is shown.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.snmp2-getnext-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4735">    <p><strong>示例 #1 Using <span class="function"><strong>snmp2_get_next()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$nameOfSecondInterface </span><span style="color: #007700">= </span><span style="color: #9876AA">snmp2_get_next</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName.1'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.snmp2-getnext-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmp2_get()} - Fetch an SNMP object</span></li>    <li><span class="function">{@link snmp2_walk()} - Fetch all the SNMP objects from an agent</span></li>   </ul>   </div> </div>
 * 
 * Fetch the SNMP object which follows the given object id
 * @link https://php.net/manual/zh/function.snmp2-getnext.php
 * @param string $host <p>
 * The hostname of the SNMP agent (server).
 * </p>
 * @param string $community <p>
 * The read community.
 * </p>
 * @param string $object_id <p>
 * The SNMP object id which precedes the wanted one.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return string|false SNMP object value on success or <b>FALSE</b> on error.
 * In case of an error, an E_WARNING message is shown.
 */
function snmp2_getnext($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmp2-walk" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp2_walk</h1>  <p class="verinfo">(PHP &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp2_walk</span> — <span class="dc-title">Fetch all the <span>SNMP</span> objects from an agent</span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp2-walk-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp2_walk</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$community</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>snmp2_walk()</strong></span> function is used to read all the values from   an <span>SNMP</span> agent specified by the <span class="parameter" style="color:#3A95FF">hostname</span>.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.snmp2-walk-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>    <dd>     <p class="para">      The SNMP agent (server).     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">community</span></dt>    <dd>     <p class="para">      The read community.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>    <dd>     <p class="para">      If <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>, <span class="parameter" style="color:#3A95FF">object_id</span> is taken as the root of      the <span>SNMP</span> objects tree and all objects under that tree are returned as      an array.     </p>     <p class="para">      If <span class="parameter" style="color:#3A95FF">object_id</span> is specified, all the <span>SNMP</span> objects      below that <span class="parameter" style="color:#3A95FF">object_id</span> are returned.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>    <dd>     <p class="para">      The number of microseconds until the first timeout.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>    <dd>     <p class="para">      The number of times to retry if timeouts occur.     </p>    </dd>     </dl> </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmp2-walk-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array of <span>SNMP</span> object values starting from the   <span class="parameter" style="color:#3A95FF">object_id</span> as root or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.snmp2-walk-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4739">    <p><strong>示例 #1 <span class="function"><strong>snmp2_walk()</strong></span> Example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$a </span><span style="color: #007700">= </span><span style="color: #9876AA">snmp2_walk</span><span style="color: #007700">(</span><span style="color: #DD0000">"127.0.0.1"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">""</span><span style="color: #007700">);<br><br>foreach (</span><span style="color: #9876AA">\$a </span><span style="color: #007700">as </span><span style="color: #9876AA">\$val</span><span style="color: #007700">) {<br>    echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">\$val</span><span style="color: #DD0000">\n"</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   Above function call would return all the <span>SNMP</span> objects from the   <span>SNMP</span> agent running on localhost. One can step through the values   with a loop  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.snmp2-walk-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmp2_real_walk()} - Return all objects including their respective object ID within the specified one</span></li>   </ul>   </div> </div>
 * 
 * Fetch all the SNMP objects from an agent
 * @link https://php.net/manual/zh/function.snmp2-walk.php
 * @param string $host <p>
 * The SNMP agent (server).
 * </p>
 * @param string $community <p>
 * The read community.
 * </p>
 * @param string $object_id <p>
 * If <b>NULL</b>, <i>object_id</i> is taken as the root of
 * the SNMP objects tree and all objects under that tree are returned as
 * an array.
 * </p>
 * <p>
 * If <i>object_id</i> is specified, all the SNMP objects
 * below that <i>object_id</i> are returned.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return array an array of SNMP object values starting from the
 * <i>object_id</i> as root or <b>FALSE</b> on error.
 */
function snmp2_walk($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmp2-real-walk" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp2_real_walk</h1>  <p class="verinfo">(PHP &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp2_real_walk</span> — <span class="dc-title">Return all objects including their respective object ID within the specified one</span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp2-real-walk-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp2_real_walk</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$community</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   The <span class="function"><strong>snmp2_real_walk()</strong></span> function is used to traverse over a number   of <span>SNMP</span> objects starting from <span class="parameter" style="color:#3A95FF">object_id</span>   and return not only their values but also their object ids.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.snmp2-real-walk-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>    <dd>     <p class="para">      The hostname of the <span>SNMP</span> agent (server).     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">community</span></dt>    <dd>     <p class="para">      The read community.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>    <dd>     <p class="para">      The <span>SNMP</span> object id which precedes the wanted one.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>    <dd>     <p class="para">      The number of microseconds until the first timeout.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>    <dd>     <p class="para">      The number of times to retry if timeouts occur.     </p>    </dd>     </dl> </div>   <div class="refsect1 returnvalues" id="refsect1-function.snmp2-real-walk-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an associative array of the <span>SNMP</span> object ids and their values on success or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.   In case of an error, an E_WARNING message is shown.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.snmp2-real-walk-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4736">    <p><strong>示例 #1 Using <span class="function"><strong>snmp2_real_walk()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br> print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">snmp2_real_walk</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">"IF-MIB::ifName"</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>        <div class="example-contents"><p>     The above will output something like:</p><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IF-MIB::ifName.1]&nbsp;=&gt;&nbsp;STRING:&nbsp;lo<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IF-MIB::ifName.2]&nbsp;=&gt;&nbsp;STRING:&nbsp;eth0<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IF-MIB::ifName.3]&nbsp;=&gt;&nbsp;STRING:&nbsp;eth2<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IF-MIB::ifName.4]&nbsp;=&gt;&nbsp;STRING:&nbsp;sit0<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[IF-MIB::ifName.5]&nbsp;=&gt;&nbsp;STRING:&nbsp;sixxs<br>&nbsp;&nbsp;&nbsp;&nbsp;)</blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.snmp2-real-walk-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmp2_walk()} - Fetch all the SNMP objects from an agent</span></li>   </ul>   </div> </div>
 * 
 * Return all objects including their respective object ID within the specified one
 * @link https://php.net/manual/zh/function.snmp2-real-walk.php
 * @param string $host <p>
 * The hostname of the SNMP agent (server).
 * </p>
 * @param string $community <p>
 * The read community.
 * </p>
 * @param string $object_id <p>
 * The SNMP object id which precedes the wanted one.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return array|false an associative array of the SNMP object ids and their values on success or <b>FALSE</b> on error.
 * In case of an error, an E_WARNING message is shown.
 */
function snmp2_real_walk($host, $community, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmp2-set" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp2_set</h1>  <p class="verinfo">(PHP &gt;= 5.2.0, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp2_set</span> — <span class="dc-title">Set the value of an <span>SNMP</span> object</span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp2-set-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp2_set</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$community</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$type</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>snmp2_set()</strong></span> is used to set the value of an <span>SNMP</span> object   specified by the <span class="parameter" style="color:#3A95FF">object_id</span>.  </p>   </div>  <div class="refsect1 parameters" id="refsect1-function.snmp2-set-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>    <dd>     <p class="para">      The hostname of the <span>SNMP</span> agent (server).     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">community</span></dt>    <dd>     <p class="para">      The write community.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>    <dd>     <p class="para">      The <span>SNMP</span> object id.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">type</span></dt>    <dd>     <p class="para"><span>MIB</span> 定义了各个对象 id 的类型。必须是下面列出的单个字符之一。</p><table class="doctable table"> <caption><strong>类型</strong></caption>   <tbody class="tbody">   <tr><td>=</td><td>MIB类型</td></tr>   <tr><td>i</td><td>INTEGER</td> </tr>   <tr><td>u</td><td>INTEGER</td></tr>   <tr><td>s</td><td>STRING</td></tr>   <tr><td>x</td><td>HEX STRING</td></tr>   <tr><td>d</td><td>DECIMAL STRING</td></tr>   <tr><td>n</td><td>NULLOBJ</td></tr>   <tr><td>o</td><td>OBJID</td></tr>   <tr><td>t</td><td>TIMETICKS</td></tr>   <tr><td>a</td><td>IPADDRESS</td></tr>   <tr><td>b</td><td>BITS</td></tr>  </tbody> </table><p class="para"> 如果在编译 <span>SNMP</span> 库时定义了 <strong><span>OPAQUE_SPECIAL_TYPES</span></strong>，那么下列值是合法的：</p><table class="doctable table"> <caption><strong>types</strong></caption>   <tbody class="tbody">   <tr><td>U</td><td>unsigned int64</td></tr>   <tr><td>I</td><td>signed int64</td></tr>   <tr><td>F</td><td>float</td></tr>   <tr><td>D</td><td>double</td></tr>  </tbody> </table>     <p class="para">这些值大都会使用与 ASN.1 相符的类型。's'，'x'，'d'以及 'b' 都是指定一个八字节字符串值的方式。并且 'u' 无符号类型也可用于处理 Gauge32 值。</p>     <p class="para">如果 MIB 文件是用 "snmp_read_mib" 或者通过在 libsnmp config 中指定而加载入 MIB 树时，'=' 可以被用作为所有对象的 <span class="parameter" style="color:#3A95FF">type</span> 参数，因为 type 可以被自动从 MIB 中读取。</p>     <p class="para">注意有两种方式可以设定 BITS 类型的变量，例如"SYNTAX    BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":</p><ul class="itemizedlist"> <li class="listitem">  <span class="simpara">   使用 "b" 类型以及一个位数的列表。不推荐使用此方法，因为 GET 查询对同一个 OID 将会返回例如 0xF8。  </span> </li> <li class="listitem">  <span class="simpara">   使用 "x" 类型以及一个十六进制数但是不需要通常的 "0x" 前缀。  </span> </li></ul><p class="para"> 更多细节见示例部分。</p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">value</span></dt>    <dd>     <p class="para">      The new value.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>    <dd>     <p class="para">      The number of microseconds until the first timeout.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>    <dd>     <p class="para">      The number of times to retry if timeouts occur.     </p>    </dd>     </dl> </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmp2-set-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   If the SNMP host rejects the data type, an E_WARNING message like "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." is shown.   If an unknown or invalid OID is specified the warning probably reads "Could not add variable".  </p> </div>    <div class="refsect1 examples" id="refsect1-function.snmp2-set-examples">  <h3 class="title">示例</h3>   <div class="example" id="example-4737">    <p><strong>示例 #1 Using <span class="function"><strong>snmp2_set()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>  snmp2_set</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">"IF-MIB::ifAlias.3"</span><span style="color: #007700">, </span><span style="color: #DD0000">"s"</span><span style="color: #007700">, </span><span style="color: #DD0000">"foo"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   <div class="example" id="example-4738">    <p><strong>示例 #2 Using <span class="function"><strong>snmp2_set()</strong></span> for setting BITS <span>SNMP</span> object id</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>  snmp2_set</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">'FOO-MIB::bar.42'</span><span style="color: #007700">, </span><span style="color: #DD0000">'b'</span><span style="color: #007700">, </span><span style="color: #DD0000">'0 1 2 3 4'</span><span style="color: #007700">);<br></span><span style="color: #FF8000">// or<br>  </span><span style="color: #9876AA">snmp2_set</span><span style="color: #007700">(</span><span style="color: #DD0000">"localhost"</span><span style="color: #007700">, </span><span style="color: #DD0000">"public"</span><span style="color: #007700">, </span><span style="color: #DD0000">'FOO-MIB::bar.42'</span><span style="color: #007700">, </span><span style="color: #DD0000">'x'</span><span style="color: #007700">, </span><span style="color: #DD0000">'F0'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div> </div>  <div class="refsect1 seealso" id="refsect1-function.snmp2-set-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmp2_get()} - Fetch an SNMP object</span></li>   </ul>   </div> </div>
 * 
 * Set the value of an SNMP object
 * @link https://php.net/manual/zh/function.snmp2-set.php
 * @param string $host <p>
 * The hostname of the SNMP agent (server).
 * </p>
 * @param string $community <p>
 * The write community.
 * </p>
 * @param string $object_id <p>
 * The SNMP object id.
 * </p>
 * @param string $type <p>The MIB defines the type of each object id. It has to be specified as a single character from the below list.
 * </p>
 * <p>types:</p>
 * <table>
 * <tr valign="top"><td>=</td><td>The type is taken from the MIB</td></tr>
 * <tr valign="top"><td>i</td><td>INTEGER</td> </tr>
 * <tr valign="top"><td>u</td><td>INTEGER</td></tr>
 * <tr valign="top"><td>s</td><td>STRING</td></tr>
 * <tr valign="top"><td>x</td><td>HEX STRING</td></tr>
 * <tr valign="top"><td>d</td><td>DECIMAL STRING</td></tr>
 * <tr valign="top"><td>n</td><td>NULLOBJ</td></tr>
 * <tr valign="top"><td>o</td><td>OBJID</td></tr>
 * <tr valign="top"><td>t</td><td>TIMETICKS</td></tr>
 * <tr valign="top"><td>a</td><td>IPADDRESS</td></tr>
 * <tr valign="top"><td>b</td><td>BITS</td></tr>
 * </table>
 * <p>If <b>OPAQUE_SPECIAL_TYPES</b> was defined while compiling the SNMP library, the following are also valid:
 * </p>
 * <p>types:</p>
 * <table>
 * <tr valign="top"><td>U</td><td>unsigned int64</td></tr>
 * <tr valign="top"><td>I</td><td>signed int64</td></tr>
 * <tr valign="top"><td>F</td><td>float</td></tr>
 * <tr valign="top"><td>D</td><td>double</td></tr>
 * </table>
 * <p>Most of these will use the obvious corresponding ASN.1 type. &#x00027;s&#x00027;, &#x00027;x&#x00027;, &#x00027;d&#x00027; and &#x00027;b&#x00027; are all different ways of specifying an OCTET STRING value, and
 * the &#x00027;u&#x00027; unsigned type is also used for handling Gauge32 values.
 * </p><p>
 * If the MIB-Files are loaded by into the MIB Tree with "snmp_read_mib" or by specifying it in the libsnmp config, &#x00027;=&#x00027; may be used as
 * the <i>type</i> parameter for all object ids as the type can then be automatically read from the MIB.
 * </p>
 * Note that there are two ways to set a variable of the type BITS like e.g.
 * "SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":
 * </p>
 * Using type "b" and a list of bit numbers. This method is not recommended since GET query for the same OID would return e.g. 0xF8.
 * Using type "x" and a hex number but without(!) the usual "0x" prefix.
 * See examples section for more details.
 * </p>
 * @param string $value <p>
 * The new value.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * <p>
 * If the SNMP host rejects the data type, an E_WARNING message like "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." is shown.
 * If an unknown or invalid OID is specified the warning probably reads "Could not add variable".
 * </p>
 */
function snmp2_set($host, $community, $object_id, $type, $value, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmp3-get" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp3_get</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp3_get</span> — <span class="dc-title">Fetch an <span>SNMP</span> object</span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp3-get-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp3_get</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$security_name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$security_level</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$auth_protocol</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$auth_passphrase</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$privacy_protocol</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$privacy_passphrase</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   The <span class="function"><strong>snmp3_get()</strong></span> function is used to read the   value of an <span>SNMP</span> object specified by the   <span class="parameter" style="color:#3A95FF">object_id</span>.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.snmp3-get-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>    <dd>     <p class="para">      The hostname of the <span>SNMP</span> agent (server).     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">security_name</span></dt>    <dd>     <p class="para">      the security name, usually some kind of username     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">security_level</span></dt>    <dd>     <p class="para">      the security level (noAuthNoPriv|authNoPriv|authPriv)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">auth_protocol</span></dt>    <dd>     <p class="para">      the authentication protocol (<span class="literal">"MD5"</span>, <span class="literal">"SHA"</span>,      <span class="literal">"SHA256"</span>, or <span class="literal">"SHA512"</span>)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">auth_passphrase</span></dt>    <dd>     <p class="para">      the authentication pass phrase     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">privacy_protocol</span></dt>    <dd>     <p class="para">      the privacy protocol (DES or AES)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">privacy_passphrase</span></dt>    <dd>     <p class="para">      the privacy pass phrase     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>    <dd>     <p class="para">      The <span>SNMP</span> object id.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>    <dd>     <p class="para">      The number of microseconds until the first timeout.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>    <dd>     <p class="para">      The number of times to retry if timeouts occur.     </p>    </dd>     </dl> </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmp3-get-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <span>SNMP</span> object value on success or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.  </p> </div>  <div class="refsect1 changelog" id="refsect1-function.snmp3-get-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.1.0</td>       <td>        The <span class="parameter" style="color:#3A95FF">auth_protocol</span> now accepts <span class="literal">"SHA256"</span>        and <span class="literal">"SHA512"</span> when supported by libnetsnmp.       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.snmp3-get-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4740">    <p><strong>示例 #1 Using <span class="function"><strong>snmp3_get()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$nameOfSecondInterface </span><span style="color: #007700">= </span><span style="color: #9876AA">snmp3_get</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'james'</span><span style="color: #007700">, </span><span style="color: #DD0000">'authPriv'</span><span style="color: #007700">, </span><span style="color: #DD0000">'SHA'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'AES'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName.2'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.snmp3-get-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmp3_set()} - Set the value of an SNMP object</span></li>   </ul>   </div> </div>
 * 
 * Fetch an SNMP object
 * @link https://php.net/manual/zh/function.snmp3-get.php
 * @param string $host <p>
 * The hostname of the SNMP agent (server).
 * </p>
 * @param string $sec_name <p>
 * the security name, usually some kind of username
 * </p>
 * @param string $sec_level <p>
 * the security level (noAuthNoPriv|authNoPriv|authPriv)
 * </p>
 * @param string $auth_protocol <p>
 * the authentication protocol (MD5 or SHA)
 * </p>
 * @param string $auth_passphrase <p>
 * the authentication pass phrase
 * </p>
 * @param string $priv_protocol <p>
 * the privacy protocol (DES or AES)
 * </p>
 * @param string $priv_passphrase <p>
 * the privacy pass phrase
 * </p>
 * @param string $object_id <p>
 * The SNMP object id.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return string|false SNMP object value on success or <b>FALSE</b> on error.
 */
function snmp3_get($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmp3-getnext" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp3_getnext</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp3_getnext</span> — <span class="dc-title">Fetch the <span>SNMP</span> object which follows the given object id</span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp3-getnext-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp3_getnext</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$security_name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$security_level</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$auth_protocol</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$auth_passphrase</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$privacy_protocol</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$privacy_passphrase</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   The <span class="function"><strong>snmp3_getnext()</strong></span> function is used to read the   value of the <span>SNMP</span> object that follows the specified   <span class="parameter" style="color:#3A95FF">object_id</span>.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.snmp3-getnext-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>    <dd>     <p class="para">      The hostname of the      <span>SNMP</span> agent (server).     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">security_name</span></dt>    <dd>     <p class="para">      the security name, usually some kind of username     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">security_level</span></dt>    <dd>     <p class="para">      the security level (noAuthNoPriv|authNoPriv|authPriv)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">auth_protocol</span></dt>    <dd>     <p class="para">      the authentication protocol (<span class="literal">"MD5"</span>, <span class="literal">"SHA"</span>,      <span class="literal">"SHA256"</span>, or <span class="literal">"SHA512"</span>)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">auth_passphrase</span></dt>    <dd>     <p class="para">      the authentication pass phrase     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">privacy_protocol</span></dt>    <dd>     <p class="para">      the privacy protocol (DES or AES)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">privacy_passphrase</span></dt>    <dd>     <p class="para">      the privacy pass phrase     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>    <dd>     <p class="para">      The <span>SNMP</span> object id.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>    <dd>     <p class="para">      The number of microseconds until the first timeout.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>    <dd>     <p class="para">      The number of times to retry if timeouts occur.     </p>    </dd>     </dl> </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmp3-getnext-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <span>SNMP</span> object value on success or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.   In case of an error, an E_WARNING message is shown.  </p> </div>  <div class="refsect1 changelog" id="refsect1-function.snmp3-getnext-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.1.0</td>       <td>        The <span class="parameter" style="color:#3A95FF">auth_protocol</span> now accepts <span class="literal">"SHA256"</span>        and <span class="literal">"SHA512"</span> when supported by libnetsnmp.       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.snmp3-getnext-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4741">    <p><strong>示例 #1 Using <span class="function"><strong>snmp3_getnext()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$nameOfSecondInterface </span><span style="color: #007700">= </span><span style="color: #9876AA">snmp3_getnext</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'james'</span><span style="color: #007700">, </span><span style="color: #DD0000">'authPriv'</span><span style="color: #007700">, </span><span style="color: #DD0000">'SHA'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'AES'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName.1'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.snmp3-getnext-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmp3_get()} - Fetch an SNMP object</span></li>    <li><span class="function">{@link snmp3_walk()} - Fetch all the SNMP objects from an agent</span></li>   </ul>   </div> </div>
 * 
 * Fetch the SNMP object which follows the given object id
 * @link https://php.net/manual/zh/function.snmp3-getnext.php
 * @param string $host <p>
 * The hostname of the
 * SNMP agent (server).
 * </p>
 * @param string $sec_name <p>
 * the security name, usually some kind of username
 * </p>
 * @param string $sec_level <p>
 * the security level (noAuthNoPriv|authNoPriv|authPriv)
 * </p>
 * @param string $auth_protocol <p>
 * the authentication protocol (MD5 or SHA)
 * </p>
 * @param string $auth_passphrase <p>
 * the authentication pass phrase
 * </p>
 * @param string $priv_protocol <p>
 * the privacy protocol (DES or AES)
 * </p>
 * @param string $priv_passphrase <p>
 * the privacy pass phrase
 * </p>
 * @param string $object_id <p>
 * The SNMP object id.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return string|false SNMP object value on success or <b>FALSE</b> on error.
 * In case of an error, an E_WARNING message is shown.
 */
function snmp3_getnext($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmp3-walk" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp3_walk</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp3_walk</span> — <span class="dc-title">Fetch all the <span>SNMP</span> objects from an agent</span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp3-walk-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp3_walk</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$security_name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$security_level</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$auth_protocol</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$auth_passphrase</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$privacy_protocol</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$privacy_passphrase</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>snmp3_walk()</strong></span> function is used to read all the values from   an <span>SNMP</span> agent specified by the <span class="parameter" style="color:#3A95FF">hostname</span>.   </p>  <p class="para">   Even if the security level does not use an auth or priv protocol/password valid values have to be specified.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.snmp3-walk-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>    <dd>     <p class="para">      The hostname of the SNMP agent (server).     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">security_name</span></dt>    <dd>     <p class="para">      the security name, usually some kind of username     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">security_level</span></dt>    <dd>     <p class="para">      the security level (noAuthNoPriv|authNoPriv|authPriv)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">auth_protocol</span></dt>    <dd>     <p class="para">      the authentication protocol (<span class="literal">"MD5"</span>, <span class="literal">"SHA"</span>,      <span class="literal">"SHA256"</span>, or <span class="literal">"SHA512"</span>)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">auth_passphrase</span></dt>    <dd>     <p class="para">      the authentication pass phrase     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">privacy_protocol</span></dt>    <dd>     <p class="para">      the privacy protocol (DES or AES)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">privacy_passphrase</span></dt>    <dd>     <p class="para">      the privacy pass phrase     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>    <dd>     <p class="para">      If <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong>, <span class="parameter" style="color:#3A95FF">object_id</span> is taken as the root of      the <span>SNMP</span> objects tree and all objects under that tree are returned as      an array.      </p>     <p class="para">      If <span class="parameter" style="color:#3A95FF">object_id</span> is specified, all the <span>SNMP</span> objects      below that <span class="parameter" style="color:#3A95FF">object_id</span> are returned.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>    <dd>     <p class="para">      The number of microseconds until the first timeout.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>    <dd>     <p class="para">      The number of times to retry if timeouts occur.     </p>    </dd>     </dl> </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmp3-walk-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array of <span>SNMP</span> object values starting from the   <span class="parameter" style="color:#3A95FF">object_id</span> as root or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.  </p> </div>   <div class="refsect1 changelog" id="refsect1-function.snmp3-walk-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.1.0</td>       <td>        The <span class="parameter" style="color:#3A95FF">auth_protocol</span> now accepts <span class="literal">"SHA256"</span>        and <span class="literal">"SHA512"</span> when supported by libnetsnmp.       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.snmp3-walk-examples">  <h3 class="title">示例</h3>  <p class="para">    </p><div class="example" id="example-4745">    <p><strong>示例 #1 <span class="function"><strong>snmp3_walk()</strong></span> Example</strong></p>    <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$ret </span><span style="color: #007700">= </span><span style="color: #9876AA">snmp3_walk</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'james'</span><span style="color: #007700">, </span><span style="color: #DD0000">'authPriv'</span><span style="color: #007700">, </span><span style="color: #DD0000">'SHA'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'AES'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">var_export</span><span style="color: #007700">(</span><span style="color: #9876AA">\$ret</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>     <p class="para">   Above function call would return all the <span>SNMP</span> objects from the   <span>SNMP</span> agent running on localhost:</p><div class="examplescode"><blockquote style="border:1px gray solid;">array&nbsp;(<br>&nbsp;&nbsp;0&nbsp;=&gt;&nbsp;'STRING:&nbsp;lo',<br>&nbsp;&nbsp;1&nbsp;=&gt;&nbsp;'STRING:&nbsp;eth0',<br>&nbsp;&nbsp;2&nbsp;=&gt;&nbsp;'STRING:&nbsp;eth2',<br>&nbsp;&nbsp;3&nbsp;=&gt;&nbsp;'STRING:&nbsp;sit0',<br>&nbsp;&nbsp;4&nbsp;=&gt;&nbsp;'STRING:&nbsp;sixxs',<br>)</blockquote></div>   </div> <div class="refsect1 seealso" id="refsect1-function.snmp3-walk-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link snmp3_real_walk()} - Return all objects including their respective object ID within the specified one</span></li>   </ul>   </div> </div>
 * 
 * Fetch all the SNMP objects from an agent
 * @link https://php.net/manual/zh/function.snmp3-walk.php
 * @param string $host <p>
 * The hostname of the SNMP agent (server).
 * </p>
 * @param string $sec_name <p>
 * the security name, usually some kind of username
 * </p>
 * @param string $sec_level <p>
 * the security level (noAuthNoPriv|authNoPriv|authPriv)
 * </p>
 * @param string $auth_protocol <p>
 * the authentication protocol (MD5 or SHA)
 * </p>
 * @param string $auth_passphrase <p>
 * the authentication pass phrase
 * </p>
 * @param string $priv_protocol <p>
 * the privacy protocol (DES or AES)
 * </p>
 * @param string $priv_passphrase <p>
 * the privacy pass phrase
 * </p>
 * @param string $object_id <p>
 * If <b>NULL</b>, <i>object_id</i> is taken as the root of
 * the SNMP objects tree and all objects under that tree are returned as
 * an array.
 * </p>
 * <p>
 * If <i>object_id</i> is specified, all the SNMP objects
 * below that <i>object_id</i> are returned.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return array an array of SNMP object values starting from the
 * <i>object_id</i> as root or <b>FALSE</b> on error.
 */
function snmp3_walk($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmp3-real-walk" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp3_real_walk</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp3_real_walk</span> — <span class="dc-title">Return all objects including their respective object ID within the specified one</span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp3-real-walk-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp3_real_walk</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$security_name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$security_level</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$auth_protocol</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$auth_passphrase</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$privacy_protocol</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$privacy_passphrase</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   The   <span class="function"><strong>snmp3_real_walk()</strong></span> function is used to traverse over a number   of   <span>SNMP</span> objects starting from   <span class="parameter" style="color:#3A95FF">object_id</span>   and return not only their values but also their object ids.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.snmp3-real-walk-parameters">  <h3 class="title">参数</h3>  <dl>       <dt>     <span class="parameter" style="color:#3A95FF">hostname</span>    </dt>    <dd>     <p class="para">      The hostname of the      <span>SNMP</span> agent (server).     </p>    </dd>          <dt>     <span class="parameter" style="color:#3A95FF">security_name</span>    </dt>    <dd>     <p class="para">      the security name, usually some kind of username     </p>    </dd>          <dt>     <span class="parameter" style="color:#3A95FF">security_level</span>    </dt>    <dd>     <p class="para">      the security level (noAuthNoPriv|authNoPriv|authPriv)     </p>    </dd>          <dt>     <span class="parameter" style="color:#3A95FF">auth_protocol</span>    </dt>    <dd>     <p class="para">      the authentication protocol (MD5 or SHA)     </p>    </dd>          <dt>     <span class="parameter" style="color:#3A95FF">auth_passphrase</span>    </dt>    <dd>     <p class="para">      the authentication pass phrase     </p>    </dd>          <dt>     <span class="parameter" style="color:#3A95FF">privacy_protocol</span>    </dt>    <dd>     <p class="para">      the authentication protocol (<span class="literal">"MD5"</span>, <span class="literal">"SHA"</span>,      <span class="literal">"SHA256"</span>, or <span class="literal">"SHA512"</span>)     </p>    </dd>          <dt>     <span class="parameter" style="color:#3A95FF">privacy_passphrase</span>    </dt>    <dd>     <p class="para">      the privacy pass phrase     </p>    </dd>          <dt>     <span class="parameter" style="color:#3A95FF">object_id</span>    </dt>    <dd>     <p class="para">      The <span>SNMP</span> object id.     </p>    </dd>          <dt>     <span class="parameter" style="color:#3A95FF">timeout</span>    </dt>    <dd>     <p class="para">      The number of microseconds until the first timeout.     </p>    </dd>          <dt>     <span class="parameter" style="color:#3A95FF">retries</span>    </dt>    <dd>     <p class="para">      The number of times to retry if timeouts occur.     </p>    </dd>     </dl> </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmp3-real-walk-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an associative array of the   <span>SNMP</span> object ids and their values on success or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> on error.   In case of an error, an E_WARNING message is shown.  </p> </div>  <div class="refsect1 changelog" id="refsect1-function.snmp3-real-walk-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.1.0</td>       <td>        The <span class="parameter" style="color:#3A95FF">auth_protocol</span> now accepts <span class="literal">"SHA256"</span>        and <span class="literal">"SHA512"</span> when supported by libnetsnmp.       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.snmp3-real-walk-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4742">    <p><strong>示例 #1 Using     <span class="function"><strong>snmp3_real_walk()</strong></span>    </strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br> var_export</span><span style="color: #007700">(</span><span style="color: #9876AA">snmp3_real_walk</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'james'</span><span style="color: #007700">, </span><span style="color: #DD0000">'authPriv'</span><span style="color: #007700">, </span><span style="color: #DD0000">'SHA'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'AES'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName'</span><span style="color: #007700">));<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>        <div class="example-contents"><p>     The above will output something like:</p><div class="examplescode"><blockquote style="border:1px gray solid;">array&nbsp;(<br>&nbsp;&nbsp;'IF-MIB::ifName.1'&nbsp;=&gt;&nbsp;'STRING:&nbsp;lo',<br>&nbsp;&nbsp;'IF-MIB::ifName.2'&nbsp;=&gt;&nbsp;'STRING:&nbsp;eth0',<br>&nbsp;&nbsp;'IF-MIB::ifName.3'&nbsp;=&gt;&nbsp;'STRING:&nbsp;eth2',<br>&nbsp;&nbsp;'IF-MIB::ifName.4'&nbsp;=&gt;&nbsp;'STRING:&nbsp;sit0',<br>&nbsp;&nbsp;'IF-MIB::ifName.5'&nbsp;=&gt;&nbsp;'STRING:&nbsp;sixxs',<br>)</blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.snmp3-real-walk-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>     <span class="function">{@link snmpwalk()} - 从代理获取所有 SNMP 对象</span>    </li>   </ul>   </div> </div>
 * 
 * Return all objects including their respective object ID within the specified one
 * @link https://php.net/manual/zh/function.snmp3-real-walk.php
 * @param string $host <p>
 * The hostname of the
 * SNMP agent (server).
 * </p>
 * @param string $sec_name <p>
 * the security name, usually some kind of username
 * </p>
 * @param string $sec_level <p>
 * the security level (noAuthNoPriv|authNoPriv|authPriv)
 * </p>
 * @param string $auth_protocol <p>
 * the authentication protocol (MD5 or SHA)
 * </p>
 * @param string $auth_passphrase <p>
 * the authentication pass phrase
 * </p>
 * @param string $priv_protocol <p>
 * the privacy protocol (DES or AES)
 * </p>
 * @param string $priv_passphrase <p>
 * the privacy pass phrase
 * </p>
 * @param string $object_id <p>
 * The SNMP object id.
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return array an associative array of the
 * SNMP object ids and their values on success or <b>FALSE</b> on error.
 * In case of an error, an E_WARNING message is shown.
 */
function snmp3_real_walk($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $timeout = null, $retries = null) {}

/**
 * <div id="function.snmp3-set" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp3_set</h1>  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp3_set</span> — <span class="dc-title">Set the value of an SNMP object</span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp3-set-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp3_set</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$hostname</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$security_name</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$security_level</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$auth_protocol</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$auth_passphrase</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$privacy_protocol</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$privacy_passphrase</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$object_id</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$type</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$timeout</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$retries</span><span class="initializer"> = -1</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   <span class="function"><strong>snmp3_set()</strong></span> is used to set the value of an <span>SNMP</span> object   specified by the <span class="parameter" style="color:#3A95FF">object_id</span>.  </p>  <p class="para">   Even if the security level does not use an auth or priv protocol/password valid values have to be specified.  </p>   </div>  <div class="refsect1 parameters" id="refsect1-function.snmp3-set-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">hostname</span></dt>    <dd>     <p class="para">      The hostname of the SNMP agent (server).     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">security_name</span></dt>    <dd>     <p class="para">      the security name, usually some kind of username     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">security_level</span></dt>    <dd>     <p class="para">      the security level (noAuthNoPriv|authNoPriv|authPriv)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">auth_protocol</span></dt>    <dd>     <p class="para">      the authentication protocol (MD5 or SHA)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">auth_passphrase</span></dt>    <dd>     <p class="para">      the authentication pass phrase     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">privacy_protocol</span></dt>    <dd>     <p class="para">      the privacy protocol (DES or AES)     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">privacy_passphrase</span></dt>    <dd>     <p class="para">      the privacy pass phrase     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">object_id</span></dt>    <dd>     <p class="para">      The <span>SNMP</span> object id.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">type</span></dt>    <dd>     <p class="para"><span>MIB</span> 定义了各个对象 id 的类型。必须是下面列出的单个字符之一。</p><table class="doctable table"> <caption><strong>类型</strong></caption>   <tbody class="tbody">   <tr><td>=</td><td>MIB类型</td></tr>   <tr><td>i</td><td>INTEGER</td> </tr>   <tr><td>u</td><td>INTEGER</td></tr>   <tr><td>s</td><td>STRING</td></tr>   <tr><td>x</td><td>HEX STRING</td></tr>   <tr><td>d</td><td>DECIMAL STRING</td></tr>   <tr><td>n</td><td>NULLOBJ</td></tr>   <tr><td>o</td><td>OBJID</td></tr>   <tr><td>t</td><td>TIMETICKS</td></tr>   <tr><td>a</td><td>IPADDRESS</td></tr>   <tr><td>b</td><td>BITS</td></tr>  </tbody> </table><p class="para"> 如果在编译 <span>SNMP</span> 库时定义了 <strong><span>OPAQUE_SPECIAL_TYPES</span></strong>，那么下列值是合法的：</p><table class="doctable table"> <caption><strong>types</strong></caption>   <tbody class="tbody">   <tr><td>U</td><td>unsigned int64</td></tr>   <tr><td>I</td><td>signed int64</td></tr>   <tr><td>F</td><td>float</td></tr>   <tr><td>D</td><td>double</td></tr>  </tbody> </table>     <p class="para">这些值大都会使用与 ASN.1 相符的类型。's'，'x'，'d'以及 'b' 都是指定一个八字节字符串值的方式。并且 'u' 无符号类型也可用于处理 Gauge32 值。</p>     <p class="para">如果 MIB 文件是用 "snmp_read_mib" 或者通过在 libsnmp config 中指定而加载入 MIB 树时，'=' 可以被用作为所有对象的 <span class="parameter" style="color:#3A95FF">type</span> 参数，因为 type 可以被自动从 MIB 中读取。</p>     <p class="para">注意有两种方式可以设定 BITS 类型的变量，例如"SYNTAX    BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":</p><ul class="itemizedlist"> <li class="listitem">  <span class="simpara">   使用 "b" 类型以及一个位数的列表。不推荐使用此方法，因为 GET 查询对同一个 OID 将会返回例如 0xF8。  </span> </li> <li class="listitem">  <span class="simpara">   使用 "x" 类型以及一个十六进制数但是不需要通常的 "0x" 前缀。  </span> </li></ul><p class="para"> 更多细节见示例部分。</p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">value</span></dt>    <dd>     <p class="para">      The new value     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">timeout</span></dt>    <dd>     <p class="para">      The number of microseconds until the first timeout.     </p>    </dd>          <dt><span class="parameter" style="color:#3A95FF">retries</span></dt>    <dd>     <p class="para">      The number of times to retry if timeouts occur.     </p>    </dd>     </dl> </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmp3-set-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <p class="para">   If the SNMP host rejects the data type, an E_WARNING message like "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." is shown.   If an unknown or invalid OID is specified the warning probably reads "Could not add variable".  </p> </div>  <div class="refsect1 examples" id="refsect1-function.snmp3-set-examples">  <h3 class="title">示例</h3>   <div class="example" id="example-4743">    <p><strong>示例 #1 Using <span class="function"><strong>snmp3_set()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>  snmp3_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'james'</span><span style="color: #007700">, </span><span style="color: #DD0000">'authPriv'</span><span style="color: #007700">, </span><span style="color: #DD0000">'SHA'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'AES'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifAlias.3'</span><span style="color: #007700">, </span><span style="color: #DD0000">'s'</span><span style="color: #007700">, </span><span style="color: #DD0000">"foo"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   <div class="example" id="example-4744">    <p><strong>示例 #2 Using <span class="function"><strong>snmp3_set()</strong></span> for setting BITS <span>SNMP</span> object id</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>  snmp3_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'james'</span><span style="color: #007700">, </span><span style="color: #DD0000">'authPriv'</span><span style="color: #007700">, </span><span style="color: #DD0000">'SHA'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'AES'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'FOO-MIB::bar.42'</span><span style="color: #007700">, </span><span style="color: #DD0000">'b'</span><span style="color: #007700">, </span><span style="color: #DD0000">'0 1 2 3 4'</span><span style="color: #007700">);<br></span><span style="color: #FF8000">// or<br>  </span><span style="color: #9876AA">snmp3_set</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'james'</span><span style="color: #007700">, </span><span style="color: #DD0000">'authPriv'</span><span style="color: #007700">, </span><span style="color: #DD0000">'SHA'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'AES'</span><span style="color: #007700">, </span><span style="color: #DD0000">'secret007'</span><span style="color: #007700">, </span><span style="color: #DD0000">'FOO-MIB::bar.42'</span><span style="color: #007700">, </span><span style="color: #DD0000">'x'</span><span style="color: #007700">, </span><span style="color: #DD0000">'F0'</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div> </div>  </div>
 * 
 * Set the value of an SNMP object
 * @link https://php.net/manual/zh/function.snmp3-set.php
 * @param string $host <p>
 * The hostname of the SNMP agent (server).
 * </p>
 * @param string $sec_name <p>
 * the security name, usually some kind of username
 * </p>
 * @param string $sec_level <p>
 * the security level (noAuthNoPriv|authNoPriv|authPriv)
 * </p>
 * @param string $auth_protocol <p>
 * the authentication protocol (MD5 or SHA)
 * </p>
 * @param string $auth_passphrase <p>
 * the authentication pass phrase
 * </p>
 * @param string $priv_protocol <p>
 * the privacy protocol (DES or AES)
 * </p>
 * @param string $priv_passphrase <p>
 * the privacy pass phrase
 * </p>
 * @param string $object_id <p>
 * The SNMP object id.
 * </p>
 * @param string $type <p>The MIB defines the type of each object id. It has to be specified as a single character from the below list.</p>
 * <p>types:</p>
 * <table>
 * <tr valign="top"><td>=</td><td>The type is taken from the MIB</td></tr>
 * <tr valign="top"><td>i</td><td>INTEGER</td></tr>
 * <tr valign="top"><td>u</td><td>INTEGER</td></tr>
 * <tr valign="top"><td>s</td><td>STRING</td></tr>
 * <tr valign="top"><td>x</td><td>HEX STRING</td></tr>
 * <tr valign="top"><td>d</td><td>DECIMAL STRING</td></tr>
 * <tr valign="top"><td>n</td><td>NULLOBJ</td></tr>
 * <tr valign="top"><td>o</td><td>OBJID</td></tr>
 * <tr valign="top"><td>t</td><td>TIMETICKS</td></tr>
 * <tr valign="top"><td>a</td><td>IPADDRESS</td></tr>
 * <tr valign="top"><td>b</td><td>BITS</td></tr>
 * </table>
 * <p>If <b>OPAQUE_SPECIAL_TYPES</b> was defined while compiling the SNMP library, the following are also valid:
 * </p>
 * <p>types:</p>
 * <table>
 * <tr valign="top"><td>U</td><td>unsigned int64</td></tr>
 * <tr valign="top"><td>I</td><td>signed int64</td></tr>
 * <tr valign="top"><td>F</td><td>float</td></tr>
 * <tr valign="top"><td>D</td><td>double</td></tr>
 * </table>
 * <p>Most of these will use the obvious corresponding ASN.1 type. &#x00027;s&#x00027;, &#x00027;x&#x00027;, &#x00027;d&#x00027; and &#x00027;b&#x00027; are all different ways of specifying an OCTET STRING value, and
 * the &#x00027;u&#x00027; unsigned type is also used for handling Gauge32 values.
 * </p>
 * <p>
 * If the MIB-Files are loaded by into the MIB Tree with "snmp_read_mib" or by specifying it in the libsnmp config, &#x00027;=&#x00027; may be used as
 * the <i>type</i> parameter for all object ids as the type can then be automatically read from the MIB.
 * </p>
 * <p>
 * Note that there are two ways to set a variable of the type BITS like e.g.
 * "SYNTAX BITS {telnet(0), ftp(1), http(2), icmp(3), snmp(4), ssh(5), https(6)}":
 * </p>
 * <p>
 * Using type "b" and a list of bit numbers. This method is not recommended since GET query for the same OID would return e.g. 0xF8.
 * Using type "x" and a hex number but without(!) the usual "0x" prefix.
 * See examples section for more details.
 * </p>
 * @param string $value <p>
 * The new value
 * </p>
 * @param int $timeout [optional] <p>
 * The number of microseconds until the first timeout.
 * </p>
 * @param int $retries [optional] <p>
 * The number of times to retry if timeouts occur.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * <p>
 * If the SNMP host rejects the data type, an E_WARNING message like "Warning: Error in packet. Reason: (badValue) The value given has the wrong type or length." is shown.
 * If an unknown or invalid OID is specified the warning probably reads "Could not add variable".
 * </p>
 */
function snmp3_set($host, $sec_name, $sec_level, $auth_protocol, $auth_passphrase, $priv_protocol, $priv_passphrase, $object_id, $type, $value, $timeout = 1000000, $retries = 5) {}

/**
 * <div id="function.snmp-set-valueretrieval" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp_set_valueretrieval</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.3, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp_set_valueretrieval</span> — <span class="dc-title">   Specify the method how the SNMP values will be returned  </span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp-set-valueretrieval-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp_set_valueretrieval</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$method</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type true" style="color:#EAB766">true</a></span></div> </div>  <div class="refsect1 parameters" id="refsect1-function.snmp-set-valueretrieval-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt>      <span class="parameter" style="color:#3A95FF">method</span>     </dt>     <dd>      <table class="doctable table">       <caption><strong>types</strong></caption>               <tbody class="tbody">         <tr>          <td>SNMP_VALUE_LIBRARY</td>          <td>The return values will be as returned by the Net-SNMP library.</td>         </tr>         <tr>          <td>SNMP_VALUE_PLAIN</td>          <td>The return values will be the plain value without the SNMP type information.</td>         </tr>         <tr>          <td>SNMP_VALUE_OBJECT</td>          <td>           The return values will be objects with the properties <span class="literal">value</span> and <span class="literal">type</span>, where the latter           is one of the <strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-octet-str">SNMP_OCTET_STR</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-counter">SNMP_COUNTER</a></span></strong> etc. constants. The           way <span class="literal">value</span> is returned is based on which one of constants           <strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-value-library">SNMP_VALUE_LIBRARY</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-value-plain">SNMP_VALUE_PLAIN</a></span></strong> is set.          </td>         </tr>        </tbody>             </table>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.snmp-set-valueretrieval-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   总是返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.snmp-set-valueretrieval-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr> <td>8.2.0</td> <td>  现在返回类型为 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>；之前是 <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span>。 </td></tr>     </tbody>       </table>   </div> <div class="refsect1 examples" id="refsect1-function.snmp-set-valueretrieval-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4733">    <p><strong>示例 #1 Using     <span class="function"><strong>snmp_set_valueretrieval()</strong></span>    </strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br> snmp_set_valueretrieval</span><span style="color: #007700">(</span><span style="color: #9876AA">SNMP_VALUE_LIBRARY</span><span style="color: #007700">);<br> </span><span style="color: #9876AA">\$ret </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName.1'</span><span style="color: #007700">);<br> </span><span style="color: #FF8000">// \$ret = "STRING: lo"<br><br> </span><span style="color: #9876AA">snmp_set_valueretrieval</span><span style="color: #007700">(</span><span style="color: #9876AA">SNMP_VALUE_PLAIN</span><span style="color: #007700">);<br> </span><span style="color: #9876AA">\$ret </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName.1'</span><span style="color: #007700">);<br> </span><span style="color: #FF8000">// \$ret = "lo";<br><br> </span><span style="color: #9876AA">snmp_set_valueretrieval</span><span style="color: #007700">(</span><span style="color: #9876AA">SNMP_VALUE_OBJECT</span><span style="color: #007700">);<br> </span><span style="color: #9876AA">\$ret </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName.1'</span><span style="color: #007700">);<br> </span><span style="color: #FF8000">// stdClass Object<br> // (<br> //   [type] =&gt; 4        &lt;-- SNMP_OCTET_STR, see constants<br> //   [value] =&gt; lo<br> // )<br><br> </span><span style="color: #9876AA">snmp_set_valueretrieval</span><span style="color: #007700">(</span><span style="color: #9876AA">SNMP_VALUE_OBJECT </span><span style="color: #007700">| </span><span style="color: #9876AA">SNMP_VALUE_PLAIN</span><span style="color: #007700">);<br> </span><span style="color: #9876AA">\$ret </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName.1'</span><span style="color: #007700">);<br> </span><span style="color: #FF8000">// stdClass Object<br> // (<br> //   [type] =&gt; 4        &lt;-- SNMP_OCTET_STR, see constants<br> //   [value] =&gt; lo<br> // )<br><br> </span><span style="color: #9876AA">snmp_set_valueretrieval</span><span style="color: #007700">(</span><span style="color: #9876AA">SNMP_VALUE_OBJECT </span><span style="color: #007700">| </span><span style="color: #9876AA">SNMP_VALUE_LIBRARY</span><span style="color: #007700">);<br> </span><span style="color: #9876AA">\$ret </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName.1'</span><span style="color: #007700">);<br> </span><span style="color: #FF8000">// stdClass Object<br> // (<br> //   [type] =&gt; 4        &lt;-- SNMP_OCTET_STR, see constants<br> //   [value] =&gt; STRING: lo<br> // )<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 seealso" id="refsect1-function.snmp-set-valueretrieval-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>     <span class="function">{@link snmp_get_valueretrieval()} - Return the method how the SNMP values will be returned</span>    </li>    <li><a href="https://php.net/manual/zh/snmp.constants.php" class="xref">预定义常量</a></li>   </ul>   </div> </div>
 * 
 * Specify the method how the SNMP values will be returned
 * @link https://php.net/manual/zh/function.snmp-set-valueretrieval.php
 * @param int $method <table>
 * types
 * <tr valign="top">
 * <td>SNMP_VALUE_LIBRARY</td>
 * <td>The return values will be as returned by the Net-SNMP library.</td>
 * </tr>
 * <tr valign="top">
 * <td>SNMP_VALUE_PLAIN</td>
 * <td>The return values will be the plain value without the SNMP type hint.</td>
 * </tr>
 * <tr valign="top">
 * <td>SNMP_VALUE_OBJECT</td>
 * <td>
 * The return values will be objects with the properties "value" and "type", where the latter
 * is one of the SNMP_OCTET_STR, SNMP_COUNTER etc. constants. The
 * way "value" is returned is based on which one of constants
 * <b>SNMP_VALUE_LIBRARY</b>, <b>SNMP_VALUE_PLAIN</b> is set.
 * </td>
 * </tr>
 * </table>
 * @return bool
 */
function snmp_set_valueretrieval($method) {}

/**
 * <div id="function.snmp-get-valueretrieval" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp_get_valueretrieval</h1>  <p class="verinfo">(PHP 4 &gt;= 4.3.3, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp_get_valueretrieval</span> — <span class="dc-title">   Return the method how the SNMP values will be returned  </span></p> </div>  <div class="refsect1 description" id="refsect1-function.snmp-get-valueretrieval-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp_get_valueretrieval</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span></div> </div> <div class="refsect1 parameters" id="refsect1-function.snmp-get-valueretrieval-parameters">  <h3 class="title">参数</h3>  <p class="para">此函数没有参数。</p> </div>  <div class="refsect1 returnvalues" id="refsect1-function.snmp-get-valueretrieval-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   OR-ed combitantion of constants ( <strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-value-library">SNMP_VALUE_LIBRARY</a></span></strong> or   <strong><span><a href="https://php.net/manual/zh/snmp.constants.php#constant.snmp-value-plain">SNMP_VALUE_PLAIN</a></span></strong> ) with   possible SNMP_VALUE_OBJECT set.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.snmp-get-valueretrieval-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4728">    <p><strong>示例 #1 Using <span class="function"><strong>snmp_get_valueretrieval()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br> \$ret </span><span style="color: #007700">= </span><span style="color: #9876AA">snmpget</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'IF-MIB::ifName.1'</span><span style="color: #007700">);<br> if (</span><span style="color: #9876AA">snmp_get_valueretrieval</span><span style="color: #007700">() &amp; </span><span style="color: #9876AA">SNMP_VALUE_OBJECT</span><span style="color: #007700">) {<br>   echo </span><span style="color: #9876AA">\$ret</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">value</span><span style="color: #007700">;<br> } else {<br>   echo </span><span style="color: #9876AA">\$ret</span><span style="color: #007700">;<br> }<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.snmp-get-valueretrieval-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li>     <span class="function">{@link snmp_set_valueretrieval()} - Specify the method how the SNMP values will be returned</span>    </li>    <li><a href="https://php.net/manual/zh/snmp.constants.php" class="xref">预定义常量</a></li>   </ul>   </div> </div>
 * 
 * Return the method how the SNMP values will be returned
 * @link https://php.net/manual/zh/function.snmp-get-valueretrieval.php
 * @return int OR-ed combitantion of constants ( <b>SNMP_VALUE_LIBRARY</b> or
 * <b>SNMP_VALUE_PLAIN</b> ) with
 * possible SNMP_VALUE_OBJECT set.
 */
function snmp_get_valueretrieval() {}

/**
 * <div id="function.snmp-read-mib" class="refentry"> <div class="refnamediv">  <h1 class="refname">snmp_read_mib</h1>  <p class="verinfo">(PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">snmp_read_mib</span> — <span class="dc-title">   Reads and parses a MIB file into the active MIB tree  </span></p> </div> <div class="refsect1 description" id="refsect1-function.snmp-read-mib-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>snmp_read_mib</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>    <p class="para rdfs-comment">   This function is used to load additional, e.g. vendor specific, MIBs so that   human readable OIDs like <span class="literal">VENDOR-MIB::foo.1</span> instead of error prone numeric OIDs   can be used.  </p>  <p class="para">   The order in which the MIBs are loaded does matter as the underlying Net-SNMP   library will print warnings if referenced objects cannot be resolved.  </p>   </div>  <div class="refsect1 parameters" id="refsect1-function.snmp-read-mib-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>     <dd><p class="para">The filename of the <span>MIB</span>.</p></dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.snmp-read-mib-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.snmp-read-mib-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-4729">    <p><strong>示例 #1 Using <span class="function"><strong>snmp_read_mib()</strong></span></strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br> print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">snmprealwalk</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'.1.3.6.1.2.1.2.3.4.5'</span><span style="color: #007700">) );<br> <br> </span><span style="color: #9876AA">snmp_read_mib</span><span style="color: #007700">(</span><span style="color: #DD0000">'./FOO-BAR-MIB.txt'</span><span style="color: #007700">);<br> </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">snmprealwalk</span><span style="color: #007700">(</span><span style="color: #DD0000">'localhost'</span><span style="color: #007700">, </span><span style="color: #DD0000">'public'</span><span style="color: #007700">, </span><span style="color: #DD0000">'FOO-BAR-MIB::someTable'</span><span style="color: #007700">) );<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   The above example is made up but the results would look like:</p><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[iso.3.6.1.2.1.2.3.4.5.0]&nbsp;=&gt;&nbsp;Gauge32:&nbsp;6<br>)<br>Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[FOO-BAR-MIB::someTable.0]&nbsp;=&gt;&nbsp;Gauge32:&nbsp;6<br>)</blockquote></div>   </div> </div>
 * 
 * Reads and parses a MIB file into the active MIB tree
 * @link https://php.net/manual/zh/function.snmp-read-mib.php
 * @param string $filename <p>The filename of the MIB.</p>
 * @return bool
 */
function snmp_read_mib($filename) {}

/**
 * <span class="simpara">    </span>
 * 
 * As of 5.4
 * @link https://php.net/manual/zh/snmp.constants.php
 */
define('SNMP_OID_OUTPUT_SUFFIX', 1);

/**
 * <span class="simpara">    </span>
 * 
 * As of 5.4
 * @link https://php.net/manual/zh/snmp.constants.php
 */
define('SNMP_OID_OUTPUT_MODULE', 2);

/**
 * <span class="simpara">    </span>
 * 
 * As of 5.2
 * @link https://php.net/manual/zh/snmp.constants.php
 */
define('SNMP_OID_OUTPUT_FULL', 3);

/**
 * <span class="simpara">    </span>
 * 
 * As of 5.2
 * @link https://php.net/manual/zh/snmp.constants.php
 */
define('SNMP_OID_OUTPUT_NUMERIC', 4);

/**
 * <span class="simpara">    </span>
 * 
 * As of 5.4
 * @link https://php.net/manual/zh/snmp.constants.php
 */
define('SNMP_OID_OUTPUT_UCD', 5);

/**
 * <span class="simpara">    </span>
 * 
 * As of 5.4
 * @link https://php.net/manual/zh/snmp.constants.php
 */
define('SNMP_OID_OUTPUT_NONE', 6);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_VALUE_LIBRARY', 0);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_VALUE_PLAIN', 1);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_VALUE_OBJECT', 2);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_BIT_STR', 3);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_OCTET_STR', 4);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_OPAQUE', 68);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_NULL', 5);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_OBJECT_ID', 6);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_IPADDRESS', 64);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_COUNTER', 66);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_UNSIGNED', 66);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_TIMETICKS', 67);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_UINTEGER', 71);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_INTEGER', 2);
/**
 * <span class="simpara">         </span>
 */
define('SNMP_COUNTER64', 70);

// End of snmp v.0.1
