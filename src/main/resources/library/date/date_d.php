<?php

// Start of date v.5.3.2-0.dotdeb.1

/**
 * <span class="simpara">     Atom（示例：<code class="literal">2005-08-15T15:52:01+00:00</code>）    </span>
 */
define('DATE_ATOM', "Y-m-d\TH:i:sP");
/**
 * <span class="simpara">     HTTP Cookie（示例：<code class="literal">Monday, 15-Aug-2005 15:52:01 UTC</code>）    </span>
 */
define('DATE_COOKIE', "l, d-M-Y H:i:s T");

/**
 * <span class="simpara">     ISO-8601（示例：<code class="literal">2005-08-15T15:52:01+0000</code>）    </span>
 * 
 * This format is not compatible with ISO-8601, but is left this way for backward compatibility reasons.
 * Use DateTime::ATOM or DATE_ATOM for compatibility with ISO-8601 instead.
 * @deprecated
 */
define('DATE_ISO8601', "Y-m-d\TH:i:sO");
/**
 * <span class="simpara">     ISO-8601 扩充（示例：<code class="literal">+10191-07-26T08:59:52+01:00</code>）    </span>
 */
define('DATE_ISO8601_EXPANDED', "X-m-d\\TH:i:sP");
/**
 * <span class="simpara">     RFC 822（示例：<code class="literal">Mon, 15 Aug 05 15:52:01 +0000</code>）    </span>
 */
define('DATE_RFC822', "D, d M y H:i:s O");
/**
 * <span class="simpara">     RFC 850（示例：<code class="literal">Monday, 15-Aug-05 15:52:01 UTC</code>）    </span>
 */
define('DATE_RFC850', "l, d-M-y H:i:s T");
/**
 * <span class="simpara">     RFC 1036（示例：<code class="literal">Mon, 15 Aug 05 15:52:01 +0000</code>）    </span>
 */
define('DATE_RFC1036', "D, d M y H:i:s O");
/**
 * <span class="simpara">     RFC 1123（示例：<code class="literal">Mon, 15 Aug 2005 15:52:01 +0000</code>）    </span>
 */
define('DATE_RFC1123', "D, d M Y H:i:s O");
/**
 * <span class="simpara">     RFC 2822（示例：<code class="literal">Mon, 15 Aug 2005 15:52:01 +0000</code>）    </span>
 */
define('DATE_RFC2822', "D, d M Y H:i:s O");
/**
 * <span class="simpara">     与 <strong><code><a href="https://php.net/manual/zh/datetime.constants.php#constant.date-atom">DATE_ATOM</a></code></strong> 相同。    </span>
 */
define('DATE_RFC3339', "Y-m-d\TH:i:sP");
/**
 * <span class="simpara">     RFC 3339 EXTENDED 格式（示例：<code class="literal">2005-08-15T15:52:01.000+00:00</code>）    </span>
 */
define('DATE_RFC3339_EXTENDED', "Y-m-d\TH:i:s.vP");
/**
 * <span class="simpara">     RFC 7231（自 PHP 7.0.19 和 7.1.5 起）（示例：<code class="literal">Sat, 30 Apr 2016 17:52:13 GMT</code>）    </span>
 */
define('DATE_RFC7231', "D, d M Y H:i:s \G\M\T");
/**
 * <span class="simpara">     RSS（示例：<code class="literal">Mon, 15 Aug 2005 15:52:01 +0000</code>）.     别名 <strong><code><a href="https://php.net/manual/zh/datetime.constants.php#constant.date-rfc1123">DATE_RFC1123</a></code></strong>.    </span>
 */
define('DATE_RSS', "D, d M Y H:i:s O");
/**
 * <span class="simpara">     万维网联盟（示例：<code class="literal">2005-08-15T15:52:01+00:00</code>）。别名 <strong><code><a href="https://php.net/manual/zh/datetime.constants.php#constant.date-rfc3339">DATE_RFC3339</a></code></strong>。    </span>
 */
define('DATE_W3C', "Y-m-d\TH:i:sP");

/**
 * <span class="simpara">     时间戳    </span>
 * 
 * Timestamp
 * @link https://php.net/manual/zh/datetime.constants.php
 * @deprecated 8.4
 */
define('SUNFUNCS_RET_TIMESTAMP', 0);

/**
 * <span class="simpara">     小时:分钟（例如：<code class="literal">08:02</code>）    </span>
 * 
 * Hours:minutes (example: 08:02)
 * @link https://php.net/manual/zh/datetime.constants.php
 * @deprecated 8.4
 */
define('SUNFUNCS_RET_STRING', 1);

/**
 * <span class="simpara">     浮点数表示的小时（例如：<code class="literal">8.75</code>）    </span>
 * 
 * Hours as floating point number (example 8.75)
 * @link https://php.net/manual/zh/datetime.constants.php
 * @deprecated 8.4
 */
define('SUNFUNCS_RET_DOUBLE', 2);

// End of date v.5.3.2-0.dotdeb.1
