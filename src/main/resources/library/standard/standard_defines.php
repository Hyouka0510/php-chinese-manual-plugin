<?php

// Start of standard v.5.3.1-0.dotdeb.1

/**
 * <span class="simpara">    </span>
 */
define('CONNECTION_ABORTED', 1);
/**
 * <span class="simpara">    </span>
 */
define('CONNECTION_NORMAL', 0);
/**
 * <span class="simpara">    </span>
 */
define('CONNECTION_TIMEOUT', 2);
/**
 * <span class="simpara">     可以在用户脚本（如使用 <span class="function">{@link ini_set()}</span>）或 <a href="https://php.net/manual/zh/configuration.changes.php#configuration.changes.windows" class="link">Windows     注册表</a>中设置条目。可以在 <var class="filename">.user.ini</var> 中设置条目    </span>
 */
define('INI_USER', 1);
/**
 * <span class="simpara">     可以在 <var class="filename">php.ini</var>、<var class="filename">.htaccess</var>、<var class="filename">httpd.conf</var> 或 <var class="filename">.user.ini</var> 中设置条目    </span>
 */
define('INI_PERDIR', 2);
/**
 * <span class="simpara">     可以在 <var class="filename">php.ini</var> 或 <var class="filename">httpd.conf</var> 中设置条目    </span>
 */
define('INI_SYSTEM', 4);
/**
 * <span class="simpara">     条目可以设置在任何地方    </span>
 */
define('INI_ALL', 7);

/**
 * <span class="simpara">     普通的 INI 扫描模式。    </span>
 * 
 * Normal INI scanner mode
 * @link https://php.net/manual/zh/filesystem.constants.php
 */
define('INI_SCANNER_NORMAL', 0);

/**
 * <span class="simpara">     Typed INI 扫描模式。    </span>
 * 
 * Typed INI scanner mode
 * @since 5.6.1
 * @link https://php.net/manual/zh/function.parse-ini-file.php
 */
define('INI_SCANNER_TYPED', 2);

/**
 * <span class="simpara">     原始（Raw） INI 扫描模式。    </span>
 * 
 * Raw INI scanner mode
 * @link https://php.net/manual/zh/filesystem.constants.php
 */
define('INI_SCANNER_RAW', 1);

/**
 * <span class="simpara">         </span>
 */
define('PHP_URL_SCHEME', 0);
/**
 * <span class="simpara">    输出解析 URL 的主机名。    </span>
 */
define('PHP_URL_HOST', 1);
/**
 * <span class="simpara">     输出解析 URL 的端口。    </span>
 */
define('PHP_URL_PORT', 2);
/**
 * <span class="simpara">     输出解析 URL 的用户名。    </span>
 */
define('PHP_URL_USER', 3);
/**
 * <span class="simpara">     输出解析 URL 的密码。    </span>
 */
define('PHP_URL_PASS', 4);
/**
 * <span class="simpara">     输出解析 URL 的路径。    </span>
 */
define('PHP_URL_PATH', 5);
/**
 * <span class="simpara">     输出解析 URL 的查询字符串。    </span>
 */
define('PHP_URL_QUERY', 6);
/**
 * <span class="simpara">     输出解析 URL 的片段（# 后的字符串）。    </span>
 */
define('PHP_URL_FRAGMENT', 7);

/**
 * <i>e</i> constant
 */
define('M_E', 2.718281828459);

/**
 * {@link log}<sub>2</sub><i>e</i> constant
 */
define('M_LOG2E', 1.442695040889);

/**
 * {@link log}<sub>10</sub><i>e</i> constant
 */
define('M_LOG10E', 0.43429448190325);

/**
 * {@link log}<sub><i>e</i></sub>2 constant
 */
define('M_LN2', 0.69314718055995);

/**
 * {@link log}<sub><i>e</i></sub>10 constant
 */
define('M_LN10', 2.302585092994);

/**
 * &pi; constant
 */
define('M_PI', 3.1415926535898);

/**
 * &pi;/2 constant
 */
define('M_PI_2', 1.5707963267949);

/**
 * &pi;/4 constant
 */
define('M_PI_4', 0.78539816339745);

/**
 * 1/&pi; constant
 */
define('M_1_PI', 0.31830988618379);

/**
 * 2/&pi; constant
 */
define('M_2_PI', 0.63661977236758);

/**
 * {@link sqrt}(&pi;) constant
 */
define('M_SQRTPI', 1.7724538509055);

/**
 * 2/{@link sqrt}(&pi;) constant
 */
define('M_2_SQRTPI', 1.1283791670955);

/**
 * {@link log}<sub><i>e</i></sub>&pi; constant
 */
define('M_LNPI', 1.1447298858494);

/**
 * Euler constant
 */
define('M_EULER', 0.57721566490153);

/**
 * {@link sqrt}(2) constant
 */
define('M_SQRT2', 1.4142135623731);

/**
 * 1/{@link sqrt}(2) constant
 */
define('M_SQRT1_2', 0.70710678118655);

/**
 * {@link sqrt}(3) constant
 */
define('M_SQRT3', 1.7320508075689);

/**
 * The infinite
 */
define('INF', (float)INF);

/**
 * Not A Number
 */
define('NAN', (float)NAN);

/**
 * Round halves up
 * @link https://php.net/manual/en/math.constants.php
 */
define('PHP_ROUND_HALF_UP', 1);

/**
 * Round halves down
 * @link https://php.net/manual/en/math.constants.php
 */
define('PHP_ROUND_HALF_DOWN', 2);

/**
 * Round halves to even numbers
 * @link https://php.net/manual/en/math.constants.php
 */
define('PHP_ROUND_HALF_EVEN', 3);

/**
 * Round halves to odd numbers
 * @link https://php.net/manual/en/math.constants.php
 */
define('PHP_ROUND_HALF_ODD', 4);
/**
 * <span class="simpara">     配置行，<var class="filename">php.ini</var> 的位置、构建日期，Web 服务器、操作系统及其他。    </span>
 */
define('INFO_GENERAL', 1);

/**
 * <span class="simpara">     PHP 贡献者。参见 <span class="function">{@link phpcredits()}</span>。    </span>
 * 
 * PHP Credits. See also phpcredits.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('INFO_CREDITS', 2);

/**
 * <span class="simpara">     当前 PHP 指令的本地（Local）和主（Master）值。参见 <span class="function">{@link ini_get()}</span>。    </span>
 * 
 * Current Local and Main values for PHP directives. See
 * also ini_get.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('INFO_CONFIGURATION', 4);

/**
 * <span class="simpara">     已加载的模块和各自的设置。    </span>
 * 
 * Loaded modules and their respective settings.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('INFO_MODULES', 8);

/**
 * <span class="simpara">     环境变量信息在 <var class="varname"><a href="https://php.net/manual/zh/reserved.variables.environment.php" class="classname">\$_ENV</a></var> 中亦有效。    </span>
 * 
 * Environment Variable information that's also available in
 * $_ENV.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('INFO_ENVIRONMENT', 16);

/**
 * <span class="simpara">     显示所有 <code class="literal">EGPCS</code> （环境变量、GET、POST、Cookie、Server）中的<a href="https://php.net/manual/zh/language.variables.predefined.php" class="link">预定义变量</a>。    </span>
 * 
 * Shows all
 * predefined variables from EGPCS (Environment, GET,
 * POST, Cookie, Server).
 * @link https://php.net/manual/zh/info.constants.php
 */
define('INFO_VARIABLES', 32);

/**
 * <span class="simpara">     PHP 版权信息。参见 <a href="https://www.php.net/license/" class="link external">»&nbsp;license faq</a>。    </span>
 * 
 * PHP License information. See also the license faq.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('INFO_LICENSE', 64);
/**
 * <span class="simpara">     显示以上所有。这是默认值。    </span>
 */
define('INFO_ALL', 4294967295);

/**
 * <span class="simpara">     核心开发者名单    </span>
 * 
 * A list of the core developers
 * @link https://php.net/manual/zh/info.constants.php
 */
define('CREDITS_GROUP', 1);

/**
 * <span class="simpara">     总的贡献：语言设计和理念，PHP 作者 和 SAPI 模块。    </span>
 * 
 * General credits: Language design and concept, PHP
 * authors and SAPI module.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('CREDITS_GENERAL', 2);

/**
 * <span class="simpara">     PHP 的服务器 API 模块列表，以及它们的作者。    </span>
 * 
 * A list of the server API modules for PHP, and their authors.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('CREDITS_SAPI', 4);

/**
 * <span class="simpara">     PHP 扩展的列表，以及它们的作者。    </span>
 * 
 * A list of the extension modules for PHP, and their authors.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('CREDITS_MODULES', 8);

/**
 * <span class="simpara">     文档组的贡献。    </span>
 * 
 * The credits for the documentation team.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('CREDITS_DOCS', 16);

/**
 * <span class="simpara">     通常与其他标志组合使用。通过其他标志指示了完整独立的 HTML 页面，用于打印包含信息。    </span>
 * 
 * Usually used in combination with the other flags. Indicates
 * that a complete stand-alone HTML page needs to be
 * printed including the information indicated by the other
 * flags.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('CREDITS_FULLPAGE', 32);

/**
 * <span class="simpara">     质量保证团队的贡献。    </span>
 * 
 * The credits for the quality assurance team.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('CREDITS_QA', 64);

/**
 * <span class="simpara">     所有的贡献者，等于使用 <code class="literal">CREDITS_DOCS     | CREDITS_GENERAL | CREDITS_GROUP | CREDITS_MODULES | CREDITS_QA     | CREDITS_FULLPAGE</code>。     它以合适的标签产生了完整的独立 HTML 页面。这是默认的值。    </span>
 * 
 * The configuration line, "php.ini" location, build date, Web
 * Server, System and more.
 * @link https://php.net/manual/zh/info.constants.php
 */
define('CREDITS_ALL', 4294967295);
/**
 * <span class="simpara">    </span>
 */
define('HTML_SPECIALCHARS', 0);
/**
 * <span class="simpara">    </span>
 */
define('HTML_ENTITIES', 1);

/**
 * <span class="simpara">    </span>
 * 
 * Will convert double-quotes and leave single-quotes alone.
 * @link https://php.net/manual/zh/function.htmlspecialchars.php
 */
define('ENT_COMPAT', 2);

/**
 * <span class="simpara">    </span>
 * 
 * Will convert both double and single quotes.
 * @link https://php.net/manual/zh/function.htmlspecialchars.php
 */
define('ENT_QUOTES', 3);

/**
 * <span class="simpara">    </span>
 * 
 * Will leave both double and single quotes unconverted.
 * @link https://php.net/manual/zh/function.htmlspecialchars.php
 */
define('ENT_NOQUOTES', 0);

/**
 * <span class="simpara">    </span>
 * 
 * Silently discard invalid code unit sequences instead of returning an empty string.
 * Using this flag is discouraged as it may have security implications.
 * @link https://php.net/manual/zh/function.htmlspecialchars.php
 */
define('ENT_IGNORE', 4);
/**
 * <span class="simpara">    </span>
 */
define('STR_PAD_LEFT', 0);
/**
 * <span class="simpara">    </span>
 */
define('STR_PAD_RIGHT', 1);
/**
 * <span class="simpara">    </span>
 */
define('STR_PAD_BOTH', 2);
/**
 * <span class="simpara">     目录或文件的路径。    </span>
 */
define('PATHINFO_DIRNAME', 1);
/**
 * <span class="simpara">     目录的名称或文件的名称和扩展名。    </span>
 */
define('PATHINFO_BASENAME', 2);
/**
 * <span class="simpara">     文件的扩展名。    </span>
 */
define('PATHINFO_EXTENSION', 4);

/**
 * <span class="simpara">     文件的名称（不带扩展名）或目录的名称。    </span>
 * 
 * @link https://php.net/manual/zh/filesystem.constants.php
 */
define('PATHINFO_FILENAME', 8);
/**
 * <span class="simpara">     路径信息的所有部分都以关联数组的形式返回。    </span>
 */
define('PATHINFO_ALL', 15);
/**
 * <span class="simpara">    </span>
 */
define('CHAR_MAX', 127);
/**
 * <span class="simpara">     字符分类和转换受区域设置的影响。    </span>
 */
define('LC_CTYPE', 0);
/**
 * <span class="simpara">     小数分隔符受区域设置的影响。    </span>
 */
define('LC_NUMERIC', 1);
/**
 * <span class="simpara">     日期和时间格式受区域设置的影响。    </span>
 */
define('LC_TIME', 2);
/**
 * <span class="simpara">     字符串比较受到区域设置的影响。    </span>
 */
define('LC_COLLATE', 3);
/**
 * <span class="simpara">     货币格式受区域设置的影响。    </span>
 */
define('LC_MONETARY', 4);
/**
 * <span class="simpara">     影响所有其他 <strong><code><a href="https://php.net/manual/zh/string.constants.php#constant.lc-ctype">LC_<span class="replaceable">*</span></a></code></strong> 常量所影响的所有函数。    </span>
 */
define('LC_ALL', 6);
/**
 * <span class="simpara">     系统响应受区域设置影响。如果 PHP 使用 libintl 编译，则可用。    </span>
 */
define('LC_MESSAGES', 5);
/**
 * <span class="simpara">    </span>
 */
define('SEEK_SET', 0);
/**
 * <span class="simpara">    </span>
 */
define('SEEK_CUR', 1);
/**
 * <span class="simpara">    </span>
 */
define('SEEK_END', 2);

/**
 * <span class="simpara">    </span>
 * 
 * Acquire a shared lock (reader).
 * @link https://www.php.net/manual/en/function.flock.php
 */
define('LOCK_SH', 1);

/**
 * <span class="simpara">    </span>
 * 
 * Acquire an exclusive lock (writer).
 * @link https://www.php.net/manual/en/function.flock.php
 */
define('LOCK_EX', 2);

/**
 * <span class="simpara">    </span>
 * 
 * Release lock (shared or exclusive).
 * @link https://www.php.net/manual/en/function.flock.php
 */
define('LOCK_UN', 3);

/**
 * <span class="simpara">    </span>
 * 
 * Non-blocking operation while locking.
 * @link https://www.php.net/manual/en/function.flock.php
 */
define('LOCK_NB', 4);

/**
 * <span class="simpara">      A connection with an external resource has been established.     </span>
 * 
 * A connection with an external resource has been established.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_CONNECT', 2);

/**
 * <span class="simpara">      Additional authorization is required to access the specified resource.     </span>
 * 
 * Additional authorization is required to access the specified resource.
 * Typical issued with severity level of
 * STREAM_NOTIFY_SEVERITY_ERR.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_AUTH_REQUIRED', 3);

/**
 * <span class="simpara">      Authorization has been completed (with or without success).     </span>
 * 
 * Authorization has been completed (with or without success).
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_AUTH_RESULT', 10);

/**
 * <span class="simpara">      The <code class="literal">mime-type</code> of resource has been identified.     </span>
 * 
 * The mime-type of resource has been identified,
 * refer to message for a description of the
 * discovered type.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_MIME_TYPE_IS', 4);

/**
 * <span class="simpara">      The <code class="literal">size</code> of the resource has been discovered.     </span>
 * 
 * The size of the resource has been discovered.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_FILE_SIZE_IS', 5);

/**
 * <span class="simpara">      The external resource has redirected the stream to an alternate location.     </span>
 * 
 * The external resource has redirected the stream to an alternate
 * location. Refer to message.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_REDIRECTED', 6);

/**
 * <span class="simpara">      Indicates current progress of the stream transfer in      <code class="parameter">bytes_transferred</code> and possibly      <code class="parameter">bytes_max</code> as well.     </span>
 * 
 * Indicates current progress of the stream transfer in
 * bytes_transferred and possibly
 * bytes_max as well.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_PROGRESS', 7);

/**
 * <span class="simpara">      A generic error occurred on the stream.     </span>
 * 
 * A generic error occurred on the stream, consult
 * message and message_code
 * for details.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_FAILURE', 9);

/**
 * <span class="simpara">      There is no more data available on the stream.      (First implemented as of PHP 8.3.0.)     </span>
 * 
 * There is no more data available on the stream.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_COMPLETED', 8);

/**
 * <span class="simpara">      A remote address required for this stream has been resolved,      or the resolution failed.     </span>
 * 
 * A remote address required for this stream has been resolved, or the resolution
 * failed. See severity for an indication of which happened.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_RESOLVE', 1);

/**
 * <span class="simpara">      Normal, non-error related, notification.     </span>
 * 
 * Normal, non-error related, notification.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_SEVERITY_INFO', 0);

/**
 * <span class="simpara">      Non critical error condition.      Processing may continue.     </span>
 * 
 * Non critical error condition. Processing may continue.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_SEVERITY_WARN', 1);

/**
 * <span class="simpara">      A critical error occurred.      Processing cannot continue.     </span>
 * 
 * A critical error occurred. Processing cannot continue.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_NOTIFY_SEVERITY_ERR', 2);

/**
 * <span class="simpara">     Indicate that the specified filter should only be applied when     <em>reading</em>.    </span>
 * 
 * Used with stream_filter_append and
 * stream_filter_prepend to indicate
 * that the specified filter should only be applied when
 * reading
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_FILTER_READ', 1);

/**
 * <span class="simpara">     Indicate that the specified filter should only be applied when     <em>writing</em>.    </span>
 * 
 * Used with stream_filter_append and
 * stream_filter_prepend to indicate
 * that the specified filter should only be applied when
 * writing
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_FILTER_WRITE', 2);

/**
 * <span class="simpara">     Equivalent to <code class="code">STREAM_FILTER_READ | STREAM_FILTER_WRITE</code>.    </span>
 * 
 * This constant is equivalent to
 * STREAM_FILTER_READ | STREAM_FILTER_WRITE
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_FILTER_ALL', 3);

/**
 * <span class="simpara">     Client socket should remain persistent between page loads.    </span>
 * 
 * Client socket opened with stream_socket_client
 * should remain persistent between page loads.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_CLIENT_PERSISTENT', 1);

/**
 * <span class="simpara">     Open client socket asynchronously.     This option must be used together with the     <strong><code><a href="https://php.net/manual/zh/stream.constants.php#constant.stream-client-connect">STREAM_CLIENT_CONNECT</a></code></strong> flag.    </span>
 * 
 * Open client socket asynchronously. This option must be used
 * together with the STREAM_CLIENT_CONNECT flag.
 * Used with stream_socket_client.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_CLIENT_ASYNC_CONNECT', 2);

/**
 * <span class="simpara">     Open client socket connection.     Client sockets should always include this flag.    </span>
 * 
 * Open client socket connection. Client sockets should always
 * include this flag. Used with stream_socket_client.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_CLIENT_CONNECT', 4);

/**
 * <span class="simpara">     Disable further receptions.    </span>
 * 
 * Used with stream_socket_shutdown to disable
 * further receptions.
 * @since 5.2.1
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_SHUT_RD', 0);

/**
 * <span class="simpara">     Disable further transmissions.    </span>
 * 
 * Used with stream_socket_shutdown to disable
 * further transmissions.
 * @since 5.2.1
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_SHUT_WR', 1);

/**
 * <span class="simpara">     Disable further receptions and transmissions.    </span>
 * 
 * Used with stream_socket_shutdown to disable
 * further receptions and transmissions.
 * @since 5.2.1
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_SHUT_RDWR', 2);

/**
 * <span class="simpara">      Internet Protocol Version 4 (IPv4).     </span>
 * 
 * Internet Protocol Version 4 (IPv4).
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_PF_INET', 2);

/**
 * <span class="simpara">      Internet Protocol Version 6 (IPv6).     </span>
 * 
 * Internet Protocol Version 6 (IPv6).
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_PF_INET6', 10);

/**
 * <span class="simpara">      Unix system internal protocols.     </span>
 * 
 * Unix system internal protocols.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_PF_UNIX', 1);

/**
 * <span class="simpara">      Provides a IP socket.     </span>
 * 
 * Provides a IP socket.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_IPPROTO_IP', 0);

/**
 * <span class="simpara">      Provides a TCP socket.     </span>
 * 
 * Provides a TCP socket.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_IPPROTO_TCP', 6);

/**
 * <span class="simpara">      Provides a UDP socket.     </span>
 * 
 * Provides a UDP socket.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_IPPROTO_UDP', 17);

/**
 * <span class="simpara">      Provides a ICMP socket.     </span>
 * 
 * Provides a ICMP socket.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_IPPROTO_ICMP', 1);

/**
 * <span class="simpara">      Provides a RAW socket.     </span>
 * 
 * Provides a RAW socket.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_IPPROTO_RAW', 255);

/**
 * <span class="simpara">      Provides sequenced, two-way byte streams with a transmission mechanism      for out-of-band data.      For example: TCP.     </span>
 * 
 * Provides sequenced, two-way byte streams with a transmission mechanism
 * for out-of-band data (TCP, for example).
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_SOCK_STREAM', 1);

/**
 * <span class="simpara">      Provides datagrams, which are connectionless messages.      For example: UDP.     </span>
 * 
 * Provides datagrams, which are connectionless messages (UDP, for
 * example).
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_SOCK_DGRAM', 2);

/**
 * <span class="simpara">      Provides a raw socket, which provides access to internal network      protocols and interfaces.      Usually this type of socket is just available to the root user.     </span>
 * 
 * Provides a raw socket, which provides access to internal network
 * protocols and interfaces. Usually this type of socket is just available
 * to the root user.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_SOCK_RAW', 3);

/**
 * <span class="simpara">      Provides a sequenced packet stream socket.     </span>
 * 
 * Provides a sequenced packet stream socket.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_SOCK_SEQPACKET', 5);

/**
 * <span class="simpara">      Provides a RDM (Reliably-delivered messages) socket.     </span>
 * 
 * Provides a RDM (Reliably-delivered messages) socket.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_SOCK_RDM', 4);
/**
 * <span class="simpara">     Retrieve data from the socket, but do not consume the buffer.    </span>
 */
define('STREAM_PEEK', 2);
/**
 * <span class="simpara">     Process OOB (<code class="literal">out-of-band</code>) data.    </span>
 */
define('STREAM_OOB', 1);

/**
 * <span class="simpara">     Indicates that a stream should bind to the specified target.     Server sockets should always include this flag.    </span>
 * 
 * Tells a stream created with stream_socket_server
 * to bind to the specified target. Server sockets should always include this flag.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_SERVER_BIND', 4);

/**
 * <span class="simpara">     Indicates that a stream bound using     <strong><code><a href="https://php.net/manual/zh/stream.constants.php#constant.stream-server-bind">STREAM_SERVER_BIND</a></code></strong>     flag to start listening to the socket.     Connection-orientated transports (such as TCP) must use this flag,     otherwise the server socket will not be enabled.     Using this flag for connect-less transports (such as UDP) is an error.    </span>
 * 
 * Tells a stream created with stream_socket_server
 * and bound using the STREAM_SERVER_BIND flag to start
 * listening on the socket. Connection-orientated transports (such as TCP)
 * must use this flag, otherwise the server socket will not be enabled.
 * Using this flag for connect-less transports (such as UDP) is an error.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_SERVER_LISTEN', 8);

/**
 * <span class="simpara">     在 <a href="https://php.net/manual/zh/ini.core.php#ini.include-path" class="link">include_path</a> 里搜索 <code class="parameter">filename</code>。    </span>
 * 
 * Search for filename in include_path
 * @link https://php.net/manual/zh/filesystem.constants.php
 */
define('FILE_USE_INCLUDE_PATH', 1);

/**
 * <span class="simpara">     过滤换行（EOL）字符。    </span>
 * 
 * Strip EOL characters
 * @link https://php.net/manual/zh/filesystem.constants.php
 */
define('FILE_IGNORE_NEW_LINES', 2);

/**
 * <span class="simpara">     过滤空行。    </span>
 * 
 * Skip empty lines
 * @link https://php.net/manual/zh/filesystem.constants.php
 */
define('FILE_SKIP_EMPTY_LINES', 4);

/**
 * <span class="simpara">     为存在的文件添加内容。    </span>
 * 
 * Append content to existing file.
 * @link https://php.net/manual/zh/filesystem.constants.php
 */
define('FILE_APPEND', 8);
/**
 * <span class="simpara">    </span>
 */
define('FILE_NO_DEFAULT_CONTEXT', 16);

/**
 * <p class="simpara">       此常量无效，并且自 PHP 8.1.0 起弃用。      </p>
 * 
 * <p>
 * This constant has no effect prior to PHP 6. It is only available for
 * forward compatibility.
 * </p>
 * @since 5.2.7
 * @link https://php.net/manual/zh/filesystem.constants.php
 * @deprecated 8.1
 */
define('FILE_TEXT', 0);

/**
 * <p class="simpara">       此常量无效，并且自 PHP 8.1.0 起弃用。      </p>
 * 
 * <p>
 * This constant has no effect prior to PHP 6. It is only available for
 * forward compatibility.
 * </p>
 * @since 5.2.7
 * @link https://php.net/manual/zh/filesystem.constants.php
 * @deprecated 8.1
 */
define('FILE_BINARY', 0);

/**
 * <span class="simpara">     禁用反斜线转义    </span>
 * 
 * Disable backslash escaping.
 * @link https://php.net/manual/zh/filesystem.constants.php
 */
define('FNM_NOESCAPE', 2);

/**
 * <span class="simpara">     字符串里的斜杠只匹配指定模式里的斜杠。    </span>
 * 
 * Slash in string only matches slash in the given pattern.
 * @link https://php.net/manual/zh/filesystem.constants.php
 */
define('FNM_PATHNAME', 1);

/**
 * <span class="simpara">     字符串里的起始点号必须完全匹配指定模式里的点号。    </span>
 * 
 * Leading period in string must be exactly matched by period in the given pattern.
 * @link https://php.net/manual/zh/filesystem.constants.php
 */
define('FNM_PERIOD', 4);

/**
 * <span class="simpara">     大小写不敏感的匹配，GNU 扩展的一部分。    </span>
 * 
 * Caseless match. Part of the GNU extension.
 * @link https://php.net/manual/zh/filesystem.constants.php
 */
define('FNM_CASEFOLD', 16);

/**
 * <span class="simpara">      Return value indicating that the userspace filter      returned buckets in <code class="parameter">\$out</code>.     </span>
 * 
 * Return Code indicating that the
 * userspace filter returned buckets in $out.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('PSFS_PASS_ON', 2);

/**
 * <span class="simpara">      Return value indicating that the userspace filter      did not return buckets in <code class="parameter">\$out</code>.      (i.e. No data available.)     </span>
 * 
 * Return Code indicating that the
 * userspace filter did not return buckets in $out
 * (i.e. No data available).
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('PSFS_FEED_ME', 1);

/**
 * <span class="simpara">      Return value indicating that the userspace filter      encountered an unrecoverable error.      (i.e. Invalid data received.)     </span>
 * 
 * Return Code indicating that the
 * userspace filter encountered an unrecoverable error
 * (i.e. Invalid data received).
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('PSFS_ERR_FATAL', 0);

/**
 * <span class="simpara">      Regular read/write.     </span>
 * 
 * Regular read/write.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('PSFS_FLAG_NORMAL', 0);

/**
 * <span class="simpara">      An incremental flush.     </span>
 * 
 * An incremental flush.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('PSFS_FLAG_FLUSH_INC', 1);

/**
 * <span class="simpara">      Final flush prior to closing.     </span>
 * 
 * Final flush prior to closing.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('PSFS_FLAG_FLUSH_CLOSE', 2);
/**
 * <span class="simpara">     一周中第一天的名称缩写。    </span>
 */
define('ABDAY_1', 131072);
/**
 * <span class="simpara">     一周中第二天的名称缩写。    </span>
 */
define('ABDAY_2', 131073);
/**
 * <span class="simpara">     一周中第三天的名称缩写。    </span>
 */
define('ABDAY_3', 131074);
/**
 * <span class="simpara">     一周中第四天的名称缩写。    </span>
 */
define('ABDAY_4', 131075);
/**
 * <span class="simpara">     一周中第五天的名称缩写。    </span>
 */
define('ABDAY_5', 131076);
/**
 * <span class="simpara">     一周中第六天的名称缩写。    </span>
 */
define('ABDAY_6', 131077);
/**
 * <span class="simpara">     一周中第七天的名称缩写。    </span>
 */
define('ABDAY_7', 131078);
/**
 * <span class="simpara">     一周中第一天的名称。    </span>
 */
define('DAY_1', 131079);
/**
 * <span class="simpara">     一周中第二天的名称。    </span>
 */
define('DAY_2', 131080);
/**
 * <span class="simpara">     一周中第三天的名称。    </span>
 */
define('DAY_3', 131081);
/**
 * <span class="simpara">     一周中第四天的名称。    </span>
 */
define('DAY_4', 131082);
/**
 * <span class="simpara">     一周中第五天的名称。    </span>
 */
define('DAY_5', 131083);
/**
 * <span class="simpara">     一周中第六天的名称。    </span>
 */
define('DAY_6', 131084);
/**
 * <span class="simpara">     一周中第七天的名称。    </span>
 */
define('DAY_7', 131085);
/**
 * <span class="simpara">     一年中第一个月的名称缩写。    </span>
 */
define('ABMON_1', 131086);
/**
 * <span class="simpara">     一年中第二个月的名称缩写。    </span>
 */
define('ABMON_2', 131087);
/**
 * <span class="simpara">     一年中第三个月的名称缩写。    </span>
 */
define('ABMON_3', 131088);
/**
 * <span class="simpara">     一年中第四个月的名称缩写。    </span>
 */
define('ABMON_4', 131089);
/**
 * <span class="simpara">     一年中第五个月的名称缩写。    </span>
 */
define('ABMON_5', 131090);
/**
 * <span class="simpara">     一年中第六个月的名称缩写。    </span>
 */
define('ABMON_6', 131091);
/**
 * <span class="simpara">     一年中第七个月的名称缩写。    </span>
 */
define('ABMON_7', 131092);
/**
 * <span class="simpara">     一年中第八个月的名称缩写。    </span>
 */
define('ABMON_8', 131093);
/**
 * <span class="simpara">     一年中第九个月的名称缩写。    </span>
 */
define('ABMON_9', 131094);
/**
 * <span class="simpara">     一年中第十个月的名称缩写。    </span>
 */
define('ABMON_10', 131095);
/**
 * <span class="simpara">     一年中第十一个月的名称缩写。    </span>
 */
define('ABMON_11', 131096);
/**
 * <span class="simpara">     一年中第十二个月的名称缩写。    </span>
 */
define('ABMON_12', 131097);
/**
 * <span class="simpara">     一年中第一个月的名称。    </span>
 */
define('MON_1', 131098);
/**
 * <span class="simpara">     一年中第二个月的名称。    </span>
 */
define('MON_2', 131099);
/**
 * <span class="simpara">     一年中第三个月的名称。    </span>
 */
define('MON_3', 131100);
/**
 * <span class="simpara">     一年中第四个月的名称。    </span>
 */
define('MON_4', 131101);
/**
 * <span class="simpara">     一年中第五个月的名称。    </span>
 */
define('MON_5', 131102);
/**
 * <span class="simpara">     一年中第六个月的名称。    </span>
 */
define('MON_6', 131103);
/**
 * <span class="simpara">     一年中第七个月的名称。    </span>
 */
define('MON_7', 131104);
/**
 * <span class="simpara">     一年中第八个月的名称。    </span>
 */
define('MON_8', 131105);
/**
 * <span class="simpara">     一年中第九个月的名称。    </span>
 */
define('MON_9', 131106);
/**
 * <span class="simpara">     一年中第十个月的名称。    </span>
 */
define('MON_10', 131107);
/**
 * <span class="simpara">     一年中第十一个月的名称。    </span>
 */
define('MON_11', 131108);
/**
 * <span class="simpara">     一年中第十二个月的名称。    </span>
 */
define('MON_12', 131109);
/**
 * <span class="simpara">     表示上午的字符串。    </span>
 */
define('AM_STR', 131110);
/**
 * <span class="simpara">     表示下午的字符串    </span>
 */
define('PM_STR', 131111);
/**
 * <span class="simpara">     用于 <span class="function">{@link strftime()}</span> 的格式字符串，表示时间和日期。    </span>
 */
define('D_T_FMT', 131112);
/**
 * <span class="simpara">     用于 <span class="function">{@link strftime()}</span> 的格式字符串，表示日期。    </span>
 */
define('D_FMT', 131113);
/**
 * <span class="simpara">     用于 <span class="function">{@link strftime()}</span> 的格式字符串，表示时间。    </span>
 */
define('T_FMT', 131114);
/**
 * <span class="simpara">     用于 <span class="function">{@link strftime()}</span> 的格式字符串，以 12 小时格式表示带上/下午的时间。    </span>
 */
define('T_FMT_AMPM', 131115);
/**
 * <span class="simpara">     Alternate era.    </span>
 */
define('ERA', 131116);
/**
 * <span class="simpara">     Date and time in alternate era format (string can be used in <span class="function">{@link strftime()}</span>).    </span>
 */
define('ERA_D_T_FMT', 131120);
/**
 * <span class="simpara">     Date in alternate era format (string can be used in <span class="function">{@link strftime()}</span>).    </span>
 */
define('ERA_D_FMT', 131118);
/**
 * <span class="simpara">     Time in alternate era format (string can be used in <span class="function">{@link strftime()}</span>).    </span>
 */
define('ERA_T_FMT', 131121);
/**
 * <span class="simpara">     Alternative symbols for digits.    </span>
 */
define('ALT_DIGITS', 131119);
/**
 * <span class="simpara">     Same value as <strong><code><a href="https://php.net/manual/zh/string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong>.    </span>
 */
define('CRNCYSTR', 262159);
/**
 * <span class="simpara">     Same value as <strong><code><a href="https://php.net/manual/zh/string.constants.php#constant.decimal-point">DECIMAL_POINT</a></code></strong>.    </span>
 */
define('RADIXCHAR', 65536);
/**
 * <span class="simpara">     Same value as <strong><code><a href="https://php.net/manual/zh/string.constants.php#constant.thousands-sep">THOUSANDS_SEP</a></code></strong>.    </span>
 */
define('THOUSEP', 65537);
/**
 * <span class="simpara">     Regex string for matching <code class="literal">"yes"</code> input.    </span>
 */
define('YESEXPR', 327680);
/**
 * <span class="simpara">     Regex string for matching <code class="literal">"no"</code> input.    </span>
 */
define('NOEXPR', 327681);
/**
 * <span class="simpara">     Output string for <code class="literal">"yes"</code>.    </span>
 */
define('YESSTR', 327682);
/**
 * <span class="simpara">     Output string for <code class="literal">"no"</code>.    </span>
 */
define('NOSTR', 327683);
/**
 * <span class="simpara">     Return a string with the name of the character encoding.    </span>
 */
define('CODESET', 14);
/**
 * <span class="simpara">    </span>
 */
define('CRYPT_SALT_LENGTH', 123);
/**
 * <span class="simpara">     表示 <span class="function">{@link crypt()}</span> 是否支持基于 DES 的标准散列。始终是 <code class="literal">1</code>。    </span>
 */
define('CRYPT_STD_DES', 1);
/**
 * <span class="simpara">     表示 <span class="function">{@link crypt()}</span> 是否支持基于 DES 的扩展散列。始终是 <code class="literal">1</code>。    </span>
 */
define('CRYPT_EXT_DES', 1);
/**
 * <span class="simpara">     表示 <span class="function">{@link crypt()}</span> 是否支持 MD5 散列。始终是 <code class="literal">1</code>。    </span>
 */
define('CRYPT_MD5', 1);
/**
 * <span class="simpara">     表示 <span class="function">{@link crypt()}</span> 是否支持 Blowfish 散列。始终是 <code class="literal">1</code>。    </span>
 */
define('CRYPT_BLOWFISH', 1);
/**
 * <span class="simpara">     表示 <span class="function">{@link crypt()}</span> 是否支持 SHA-256 散列。始终是 <code class="literal">1</code>。    </span>
 */
define('CRYPT_SHA256', 1);
/**
 * <span class="simpara">     表示 <span class="function">{@link crypt()}</span> 是否支持 SHA-512 散列。始终是 <code class="literal">1</code>。    </span>
 */
define('CRYPT_SHA512', 1);
/**
 * <span class="simpara">    </span>
 */
define('DIRECTORY_SEPARATOR', "/");
/**
 * <span class="simpara">     Windows 上使用分号，除此之外使用冒号。    </span>
 */
define('PATH_SEPARATOR', ":");
/**
 * <span class="simpara">     扩展 {a,b,c} 为匹配“a”、“b”或“c”    </span>
 */
define('GLOB_BRACE', 1024);
/**
 * <span class="simpara">     向每个返回的目录添加斜线（在 Windows 上为反斜线）    </span>
 */
define('GLOB_MARK', 2);
/**
 * <span class="simpara">     按照目录中出现的顺序返回文件（不排序）。当不使用此 flag 时，路径名按字母顺序排序    </span>
 */
define('GLOB_NOSORT', 4);
/**
 * <span class="simpara">     如果没有找到匹配该模式的文件，则返回搜索模式    </span>
 */
define('GLOB_NOCHECK', 16);
/**
 * <span class="simpara">     反斜线不引用元字符    </span>
 */
define('GLOB_NOESCAPE', 64);
/**
 * <span class="simpara">     读取错误（如目录无法读取）时停止，默认忽略错误。    </span>
 */
define('GLOB_ERR', 1);
/**
 * <span class="simpara">     只返回与模式匹配的目录条目    </span>
 */
define('GLOB_ONLYDIR', 1073741824);
/**
 * <span class="simpara">     所有 <strong><code><a href="https://php.net/manual/zh/filesystem.constants.php#constant.glob-available-flags">GLOB_<span class="replaceable">*</span></a></code></strong> flag 的组合。等同于     <code class="literal">0</code> | <strong><code><a href="https://php.net/manual/zh/filesystem.constants.php#constant.glob-brace">GLOB_BRACE</a></code></strong> |     <strong><code><a href="https://php.net/manual/zh/filesystem.constants.php#constant.glob-mark">GLOB_MARK</a></code></strong> | <strong><code><a href="https://php.net/manual/zh/filesystem.constants.php#constant.glob-nosort">GLOB_NOSORT</a></code></strong> |     <strong><code><a href="https://php.net/manual/zh/filesystem.constants.php#constant.glob-nocheck">GLOB_NOCHECK</a></code></strong> | <strong><code><a href="https://php.net/manual/zh/filesystem.constants.php#constant.glob-noescape">GLOB_NOESCAPE</a></code></strong> |     <strong><code><a href="https://php.net/manual/zh/filesystem.constants.php#constant.glob-err">GLOB_ERR</a></code></strong> | <strong><code><a href="https://php.net/manual/zh/filesystem.constants.php#constant.glob-onlydir">GLOB_ONLYDIR</a></code></strong>    </span>
 */
define('GLOB_AVAILABLE_FLAGS', 1073741911);
/**
 * <span class="simpara">    </span>
 */
define('EXTR_OVERWRITE', 0);
/**
 * <span class="simpara">    </span>
 */
define('EXTR_SKIP', 1);
/**
 * <span class="simpara">    </span>
 */
define('EXTR_PREFIX_SAME', 2);
/**
 * <span class="simpara">    </span>
 */
define('EXTR_PREFIX_ALL', 3);
/**
 * <span class="simpara">    </span>
 */
define('EXTR_PREFIX_INVALID', 4);
/**
 * <span class="simpara">    </span>
 */
define('EXTR_PREFIX_IF_EXISTS', 5);
/**
 * <span class="simpara">    </span>
 */
define('EXTR_IF_EXISTS', 6);
/**
 * <span class="simpara">    </span>
 */
define('EXTR_REFS', 256);

/**
 * <span class="simpara">     <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.sort-asc">SORT_ASC</a></code></strong> 用在 <span class="function">{@link array_multisort()}</span>     函数中，使其升序排列。    </span>
 * 
 * SORT_ASC is used with
 * array_multisort to sort in ascending order.
 * @link https://php.net/manual/zh/array.constants.php
 */
define('SORT_ASC', 4);

/**
 * <span class="simpara">     <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.sort-desc">SORT_DESC</a></code></strong> 用在 <span class="function">{@link array_multisort()}</span>     函数中，使其降序排列。    </span>
 * 
 * SORT_DESC is used with
 * array_multisort to sort in descending order.
 * @link https://php.net/manual/zh/array.constants.php
 */
define('SORT_DESC', 3);

/**
 * <span class="simpara">     <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.sort-regular">SORT_REGULAR</a></code></strong> 用于对对象进行通常比较。    </span>
 * 
 * SORT_REGULAR is used to compare items normally.
 * @link https://php.net/manual/zh/array.constants.php
 */
define('SORT_REGULAR', 0);

/**
 * <span class="simpara">     <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.sort-numeric">SORT_NUMERIC</a></code></strong> 用于对对象进行数值比较。    </span>
 * 
 * SORT_NUMERIC is used to compare items numerically.
 * @link https://php.net/manual/zh/array.constants.php
 */
define('SORT_NUMERIC', 1);

/**
 * <span class="simpara">    <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.sort-string">SORT_STRING</a></code></strong> 用于对对象进行字符串比较。    </span>
 * 
 * SORT_STRING is used to compare items as strings.
 * @link https://php.net/manual/zh/array.constants.php
 */
define('SORT_STRING', 2);

/**
 * <span class="simpara">    <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.sort-locale-string">SORT_LOCALE_STRING</a></code></strong> 基于当前区域来对对象进行字符串比较。    </span>
 * 
 * SORT_LOCALE_STRING is used to compare items as
 * strings, based on the current locale.
 * @since 5.0.2
 * @link https://php.net/manual/zh/array.constants.php
 */
define('SORT_LOCALE_STRING', 5);

/**
 * <span class="simpara">     <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.case-lower">CASE_LOWER</a></code></strong> 用在     <span class="function">{@link array_change_key_case()}</span> 中将数组的键名转换成小写字母。这也是     <span class="function">{@link array_change_key_case()}</span> 的默认值。从 PHP 8.2.0 开始，只转换 ASCII 字符。    </span>
 * 
 * CASE_LOWER is used with
 * array_change_key_case and is used to convert array
 * keys to lower case. This is also the default case for
 * array_change_key_case.
 * @link https://php.net/manual/zh/array.constants.php
 */
define('CASE_LOWER', 0);

/**
 * <span class="simpara">     <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.case-upper">CASE_UPPER</a></code></strong> 用在     <span class="function">{@link array_change_key_case()}</span> 中将数组的键名转换成大写字母。从 PHP 8.2.0 开始，只转换 ASCII 字符。    </span>
 * 
 * CASE_UPPER is used with
 * array_change_key_case and is used to convert array
 * keys to upper case.
 * @link https://php.net/manual/zh/array.constants.php
 */
define('CASE_UPPER', 1);
/**
 * <span class="simpara">    </span>
 */
define('COUNT_NORMAL', 0);
/**
 * <span class="simpara">    </span>
 */
define('COUNT_RECURSIVE', 1);
/**
 * <p class="simpara">本特性已自 PHP 8.3.0起<em>废弃</em>。强烈建议不要使用本特性。</p>
 */
define('ASSERT_ACTIVE', 1);
/**
 * <p class="simpara">本特性已自 PHP 8.3.0起<em>废弃</em>。强烈建议不要使用本特性。</p>
 */
define('ASSERT_CALLBACK', 2);
/**
 * <p class="simpara">本特性已自 PHP 8.3.0起<em>废弃</em>。强烈建议不要使用本特性。</p>
 */
define('ASSERT_BAIL', 3);
/**
 * <p class="simpara">本特性已自 PHP 8.3.0起<em>废弃</em>。强烈建议不要使用本特性。</p>
 */
define('ASSERT_WARNING', 4);

/**
 * <p class="simpara">此功能自 PHP 8.0.0 起<em>移除</em>。</p>
 * 
 * @removed 8.0
 */
define('ASSERT_QUIET_EVAL', 5);
/**
 * <p class="simpara">本特性已自 PHP 8.3.0起<em>废弃</em>。强烈建议不要使用本特性。</p>
 */
define('ASSERT_EXCEPTION', 5);

/**
 * <span class="simpara">      Flag indicating that relative paths should use the include path to      locate the resource.     </span>
 * 
 * Flag indicating if the stream used the include path.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_USE_PATH', 1);
/**
 * <span class="simpara">     Do not use plugin wrappers.    </span>
 */
define('STREAM_IGNORE_URL', 2);

define('STREAM_ENFORCE_SAFE_MODE', 4);

/**
 * <span class="simpara">      Flag indicating that the stream wrapper should report errors.      If the flag is not set, no errors should be reported.     </span>
 * 
 * Flag indicating if the wrapper
 * is responsible for raising errors using trigger_error
 * during opening of the stream. If this flag is not set, you
 * should not raise any errors.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_REPORT_ERRORS', 8);

/**
 * <span class="simpara">     Ensure stream is seekable.     This may result in a copy of the stream being created.    </span>
 * 
 * This flag is useful when your extension really must be able to randomly
 * seek around in a stream. Some streams may not be seekable in their
 * native form, so this flag asks the streams API to check to see if the
 * stream does support seeking. If it does not, it will copy the stream
 * into temporary storage (which may be a temporary file or a memory
 * stream) which does support seeking.
 * Please note that this flag is not useful when you want to seek the
 * stream and write to it, because the stream you are accessing might
 * not be bound to the actual resource you requested.
 * If the requested resource is network based, this flag will cause the
 * opener to block until the whole contents have been downloaded.
 * @link https://www.php.net/manual/en/stream.constants.php
 */
define('STREAM_MUST_SEEK', 16);
/**
 * <span class="simpara">      Only information about the link itself should be returned,      not the resource pointed to by the link.     </span>
 */
define('STREAM_URL_STAT_LINK', 1);
/**
 * <span class="simpara">      The wrapper should not raise any errors.     </span>
 */
define('STREAM_URL_STAT_QUIET', 2);
/**
 * <span class="simpara">      Recursive flag for the options parameters of      <span class="function">{@link mkdir()}</span> and <span class="function">{@link rmdir()}</span>.     </span>
 */
define('STREAM_MKDIR_RECURSIVE', 1);
/**
 * <span class="simpara">      Indicates that the stream wrapper protocol is a      <abbr title="Uniform Resource Locator">URL</abbr> protocol.     </span>
 */
define('STREAM_IS_URL', 1);
/**
 * <span class="simpara">      Set blocking/non-blocking mode on a stream.     </span>
 */
define('STREAM_OPTION_BLOCKING', 1);
/**
 * <span class="simpara">      Set read file buffering on a stream.           </span>
 */
define('STREAM_OPTION_READ_TIMEOUT', 4);
/**
 * <span class="simpara">      Set read file buffering on a stream.     </span>
 */
define('STREAM_OPTION_READ_BUFFER', 2);
/**
 * <span class="simpara">      Set write file buffering on a stream.     </span>
 */
define('STREAM_OPTION_WRITE_BUFFER', 3);
/**
 * <span class="simpara">         No buffering.        </span>
 */
define('STREAM_BUFFER_NONE', 0);
/**
 * <span class="simpara">         Line buffering.        </span>
 */
define('STREAM_BUFFER_LINE', 1);
/**
 * <span class="simpara">         Full buffering.        </span>
 */
define('STREAM_BUFFER_FULL', 2);

/**
 * <span class="simpara">      Indicates that <span class="methodname">{@link streamWrapper::stream_cast()}</span>      was called by any method other than      <span class="methodname"><strong>streamWrapper::stream_select()</strong></span>.     </span>
 * 
 * Stream casting, when stream_cast is called
 * otherwise (see above).
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_CAST_AS_STREAM', 0);

/**
 * <span class="simpara">      Indicates that <span class="methodname">{@link streamWrapper::stream_cast()}</span>      was called by <span class="methodname"><strong>streamWrapper::stream_select()</strong></span>.     </span>
 * 
 * Stream casting, for when stream_select is
 * calling stream_cast.
 * @link https://php.net/manual/zh/stream.constants.php
 */
define('STREAM_CAST_FOR_SELECT', 3);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_GIF', 1);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_JPEG', 2);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_PNG', 3);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_SWF', 4);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_PSD', 5);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_BMP', 6);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_TIFF_II', 7);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_TIFF_MM', 8);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_JPC', 9);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_JP2', 10);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_JPX', 11);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_JB2', 12);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_SWC', 13);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_IFF', 14);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_WBMP', 15);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_JPEG2000', 9);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_XBM', 16);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 */
define('IMAGETYPE_ICO', 17);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * Image type constant used by the {@link image_type_to_mime_type()} and {@link image_type_to_extension()} functions.
 * @link https://php.net/manual/zh/image.constants.php
 * @since 7.1
 */
define('IMAGETYPE_WEBP', 18);
/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 */
define('IMAGETYPE_UNKNOWN', 0);
/**
 * <span class="simpara">     可用于 <span class="function">{@link image_type_to_mime_type()}</span> 和 <span class="function">{@link image_type_to_extension()}</span>     函数的图像类型常量编号（包括 unknown 类型）。    </span>
 */
define('IMAGETYPE_COUNT', 20);

/**
 * <span class="simpara">    Image type constant used by the <span class="function">{@link image_type_to_mime_type()}</span>    and <span class="function">{@link image_type_to_extension()}</span> functions.</span>
 * 
 * @since 8.1
 */
define('IMAGETYPE_AVIF', 19);
/**
 * <span class="simpara">     IPv4 Address Resource.    </span>
 * 
 * IPv4 Address Resource
 * @link https://php.net/manual/zh/network.constants.php
 */
define('DNS_A', 1);

/**
 * <span class="simpara">     Certification Authority Authorization Resource.     Available as of PHP 7.0.16 and 7.1.2.    </span>
 */
define('DNS_CAA', 8192);

/**
 * <span class="simpara">     Authoritative Name Server Resource.    </span>
 * 
 * Authoritative Name Server Resource
 * @link https://php.net/manual/zh/network.constants.php
 */
define('DNS_NS', 2);

/**
 * <span class="simpara">     Alias (Canonical Name) Resource.    </span>
 * 
 * Alias (Canonical Name) Resource
 * @link https://php.net/manual/zh/network.constants.php
 */
define('DNS_CNAME', 16);

/**
 * <span class="simpara">     Start of Authority Resource.    </span>
 * 
 * Start of Authority Resource
 * @link https://php.net/manual/zh/network.constants.php
 */
define('DNS_SOA', 32);

/**
 * <span class="simpara">     Pointer Resource.    </span>
 * 
 * Pointer Resource
 * @link https://php.net/manual/zh/network.constants.php
 */
define('DNS_PTR', 2048);

/**
 * <span class="simpara">     Host Info Resource.     For more explanations and meanings of these values, visit IANA's page on     <a href="http://www.iana.org/assignments/operating-system-names" class="link external">»&nbsp;Operating System Names</a>.    </span>
 * 
 * Host Info Resource (See IANA's
 * Operating System Names
 * for the meaning of these values)
 * @link https://php.net/manual/zh/network.constants.php
 */
define('DNS_HINFO', 4096);

/**
 * <span class="simpara">     Mail Exchanger Resource.    </span>
 * 
 * Mail Exchanger Resource
 * @link https://php.net/manual/zh/network.constants.php
 */
define('DNS_MX', 16384);

/**
 * <span class="simpara">     Text Resource.    </span>
 * 
 * Text Resource
 * @link https://php.net/manual/zh/network.constants.php
 */
define('DNS_TXT', 32768);
/**
 * <span class="simpara">     Service locator.    </span>
 */
define('DNS_SRV', 33554432);
/**
 * <span class="simpara">     Naming Authority Pointer.    </span>
 */
define('DNS_NAPTR', 67108864);

/**
 * <span class="simpara">     IPv6 Address Resource.    </span>
 * 
 * IPv6 Address Resource
 * @link https://php.net/manual/zh/network.constants.php
 */
define('DNS_AAAA', 134217728);
/**
 * <span class="simpara">     Defined as part of early IPv6, but downgraded to historic by     <a href="https://datatracker.ietf.org/doc/html/rfc6563" class="link external">»&nbsp;RFC 6563</a>.    </span>
 */
define('DNS_A6', 16777216);

/**
 * <span class="simpara">     Any Resource Record.     On most systems this returns all resource records,     however due to eccentricities in the performance of     <code class="literal">libresolv</code> between platforms this is not guaranteed.    </span>
 * 
 * Any Resource Record. On most systems
 * this returns all resource records, however
 * it should not be counted upon for critical
 * uses. Try DNS_ALL instead.
 * @link https://php.net/manual/zh/network.constants.php
 */
define('DNS_ANY', 268435456);

/**
 * <span class="simpara">     Iteratively query the name server for each available record type.    </span>
 * 
 * Iteratively query the name server for
 * each available record type.
 * @link https://php.net/manual/zh/network.constants.php
 */
define('DNS_ALL', 251721779);

// End of standard v.5.3.1-0.dotdeb.1

//WI-11084 Constant not defined PHP_QUERY_RFC3986

/**
 * <span class="simpara">     根据 <a href="https://datatracker.ietf.org/doc/html/rfc1738" class="link external">»&nbsp;RFC 1738</a> 和 <code class="literal">application/x-www-form-urlencoded</code>     媒体类型执行编码，这意味着空格会编码为加号（<code class="literal">+</code>）。    </span>
 * 
 * Encoding is performed per RFC 1738 and the application/x-www-form-urlencoded media type,
 * which implies that spaces are encoded as plus (+) signs.
 * @link https://php.net/manual/zh/function.http-build-query.php
 */
define('PHP_QUERY_RFC1738', 1);
/**
 * <span class="simpara">      根据 <a href="https://datatracker.ietf.org/doc/html/rfc3986" class="link external">»&nbsp;RFC 3986</a> 执行编码，空格将会百分比编码（<code class="literal">%20</code>）。    </span>
 * 
 * Encoding is performed according to RFC 3986, and spaces will be percent encoded (%20).
 * @link https://php.net/manual/zh/function.http-build-query.php
 */
define('PHP_QUERY_RFC3986', 2);

//WI-11254 Stubs for missing constants from PHP 5.4

/**
 * <span class="simpara">     包含着会话名以及会话 ID 的常量，格式为     <code class="literal">"name=ID"</code>，或者如果会话 ID 已经在适当的会话     cookie 中设定时则为空字符串。     这和 <span class="function">{@link session_id()}</span> 返回的是同一个 ID。    </span>
 * 
 * (PHP4, PHP5)
 * <p>Constant containing either the session name and session ID in the form of "name=ID" or
 * empty string if session ID was set in an appropriate session cookie.
 * This is the same id as the one returned by session_id().</p>
 * @see session_id()
 * @link https://php.net/manual/zh/session.constants.php
 */
define('SID', "name=ID");
/**
 * <span class="simpara">     如果会话已禁用则返回 <span class="function">{@link session_status()}</span> 的值。    </span>
 * 
 * Return value of session_status() if sessions are disabled.
 * @since 5.4
 * @link https://php.net/manual/zh/function.session-status.php
 */
define('PHP_SESSION_DISABLED', 0);
/**
 * <span class="simpara">     在会话已启用但是没有会话的时候返回 <span class="function">{@link session_status()}</span> 的值。    </span>
 * 
 * Return value of session_status() if sessions are enabled, but no session exists.
 * @since 5.4
 * @link https://php.net/manual/zh/function.session-status.php
 */
define('PHP_SESSION_NONE', 1);
/**
 * <span class="simpara">     在一个会话已启用并存在时返回  <span class="function">{@link session_status()}</span> 的值。    </span>
 * 
 * Return value of session_status() if sessions are enabled, and a session exists.
 * @since 5.4
 * @link https://php.net/manual/zh/function.session-status.php
 */
define('PHP_SESSION_ACTIVE', 2);

/**
 * <span class="simpara">    </span>
 * 
 * Replace invalid code unit sequences with a Unicode Replacement Character
 * U+FFFD (UTF-8) or &#FFFD; (otherwise) instead of returning an empty string.
 * @since 5.4
 * @link https://php.net/manual/zh/function.htmlspecialchars.php
 */
define('ENT_SUBSTITUTE', 8);
/**
 * <span class="simpara">    </span>
 * 
 * Replace invalid code points for the given document type with
 * a Unicode Replacement Character U+FFFD (UTF-8) or &#FFFD;
 * (otherwise) instead of leaving them as is. This may be useful,
 * for instance, to ensure the well-formedness of XML documents
 * with embedded external content.
 * @since 5.4
 * @link https://php.net/manual/zh/function.htmlspecialchars.php
 */
define('ENT_DISALLOWED', 128);
/**
 * <span class="simpara">    </span>
 * 
 * Handle code as HTML 4.01.
 * @since 5.4
 * @link https://php.net/manual/zh/function.htmlspecialchars.php
 */
define('ENT_HTML401', 0);
/**
 * <span class="simpara">    </span>
 * 
 * Handle code as XML 1.
 * @since 5.4
 * @link https://php.net/manual/zh/function.htmlspecialchars.php
 */
define('ENT_XML1', 16);
/**
 * <span class="simpara">    </span>
 * 
 * Handle code as XHTML.
 * @since 5.4
 * @link https://php.net/manual/zh/function.htmlspecialchars.php
 */
define('ENT_XHTML', 32);
/**
 * <span class="simpara">    </span>
 * 
 * Handle code as HTML 5.
 * @since 5.4
 * @link https://php.net/manual/zh/function.htmlspecialchars.php
 */
define('ENT_HTML5', 48);

/**
 * <span class="simpara">    </span>
 */
define('SCANDIR_SORT_ASCENDING', 0);
/**
 * <span class="simpara">    </span>
 */
define('SCANDIR_SORT_DESCENDING', 1);
/**
 * <span class="simpara">    </span>
 */
define('SCANDIR_SORT_NONE', 2);

/**
 * <span class="simpara">    <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.sort-natural">SORT_NATURAL</a></code></strong> 用于对元素作为字符串使用“自然排序”（像是 <span class="function">{@link natsort()}</span>    ）比较。    </span>
 * 
 * SORT_NATURAL is used to compare items as strings using "natural ordering" like natsort().
 * @since 5.4
 * @link https://php.net/manual/zh/array.constants.php
 */
define('SORT_NATURAL', 6);
/**
 * <span class="simpara">    <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.sort-flag-case">SORT_FLAG_CASE</a></code></strong> 可以跟 <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.sort-string">SORT_STRING</a></code></strong> 或者 <strong><code><a href="https://php.net/manual/zh/array.constants.php#constant.sort-natural">SORT_NATURAL</a></code></strong>     组合（按位或（OR））对字符串进行大小写不敏感排序。从 PHP 8.2.0 开始，只转换 ASCII 字符。    </span>
 * 
 * SORT_FLAG_CASE can be combined (bitwise OR) with SORT_STRING or SORT_NATURAL to sort strings case-insensitively.
 * @since 5.4
 * @link https://php.net/manual/zh/array.constants.php
 */
define('SORT_FLAG_CASE', 8);

/**
 * <span class="simpara">      Indicates a call to <span class="function">{@link touch()}</span>.     </span>
 */
define('STREAM_META_TOUCH', 1);
/**
 * <span class="simpara">      Indicates a call to <span class="function">{@link chown()}</span>.     </span>
 */
define('STREAM_META_OWNER', 3);
/**
 * <span class="simpara">      Indicates a call to <span class="function">{@link chown()}</span>.     </span>
 */
define('STREAM_META_OWNER_NAME', 2);
/**
 * <span class="simpara">      Indicates a call to <span class="function">{@link chgrp()}</span>.     </span>
 */
define('STREAM_META_GROUP', 5);
/**
 * <span class="simpara">      Indicates a call to <span class="function">{@link chgrp()}</span>.     </span>
 */
define('STREAM_META_GROUP_NAME', 4);
/**
 * <span class="simpara">      Indicates a call to <span class="function">{@link chmod()}</span>.     </span>
 */
define('STREAM_META_ACCESS', 6);

/**
 * <span class="simpara">     SSL 2 on a client stream.    </span>
 */
define('STREAM_CRYPTO_METHOD_SSLv2_CLIENT', 3);
/**
 * <span class="simpara">     SSL 3 on a client stream.    </span>
 */
define('STREAM_CRYPTO_METHOD_SSLv3_CLIENT', 5);
/**
 * <span class="simpara">     TLS 1.0, 1.1 or 1.2 on a client stream.    </span>
 */
define('STREAM_CRYPTO_METHOD_SSLv23_CLIENT', 57);
/**
 * <span class="simpara">     Any TLS version on a client stream.    </span>
 */
define('STREAM_CRYPTO_METHOD_TLS_CLIENT', 121);
/**
 * <span class="simpara">     SSL 2 on a server stream.    </span>
 */
define('STREAM_CRYPTO_METHOD_SSLv2_SERVER', 2);
/**
 * <span class="simpara">     SSL 3 on a server stream.    </span>
 */
define('STREAM_CRYPTO_METHOD_SSLv3_SERVER', 4);
/**
 * <span class="simpara">     TLS 1.0, 1.1 or 1.2 on a server stream.    </span>
 */
define('STREAM_CRYPTO_METHOD_SSLv23_SERVER', 120);
/**
 * <span class="simpara">     Any TLS version on a server stream.    </span>
 */
define('STREAM_CRYPTO_METHOD_TLS_SERVER', 120);

define("STREAM_CRYPTO_METHOD_ANY_CLIENT", 127);
define("STREAM_CRYPTO_METHOD_ANY_SERVER", 126);
define("STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT", 9);
define("STREAM_CRYPTO_METHOD_TLSv1_0_SERVER", 8);
define("STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT", 17);
define("STREAM_CRYPTO_METHOD_TLSv1_1_SERVER", 16);
define("STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT", 33);
define("STREAM_CRYPTO_METHOD_TLSv1_2_SERVER", 32);
/**
 * @since 7.4
 */
define("STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT", 65);
/**
 * @since 7.4
 */
define("STREAM_CRYPTO_METHOD_TLSv1_3_SERVER", 64);

define("STREAM_CRYPTO_PROTO_SSLv3", 4);
define("STREAM_CRYPTO_PROTO_TLSv1_0", 8);
define("STREAM_CRYPTO_PROTO_TLSv1_1", 16);
define("STREAM_CRYPTO_PROTO_TLSv1_2", 32);
/**
 * @since 7.4
 */
define("STREAM_CRYPTO_PROTO_TLSv1_3", 64);

/**
 * <span class="simpara">      Indicates that the correct <a href="http://www.math.sci.hiroshima-u.ac.jp/m-mat/MT/ARTICLES/mt.pdf" class="link external">»&nbsp;Mt19937</a> (Mersenne Twister)      implementation will be used by the algorithm, when creating a <span class="classname"><a href="https://php.net/manual/zh/class.random-engine-mt19937.php" class="classname">Random\Engine\Mt19937</a></span> instance      using <span class="function">{@link Random\Engine\Mt19937::__construct()}</span> or seeding the global Mersenne Twister      with <span class="function">{@link mt_srand()}</span>.     </span>
 * 
 * @since 7.1
 */
define('MT_RAND_MT19937', 0);
/**
 * @since 7.1
 * @deprecated 8.3
 */
define("MT_RAND_PHP", 1);

/**
 * <span class="simpara">     Emergency, the system is unusable.     This corresponds to a panic condition.     Usually broadcast to all processes.    </span>
 * 
 * system is unusable
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_EMERG', 0);

/**
 * <span class="simpara">     Alert, immediate action is required.     For example, a corrupted system database.    </span>
 * 
 * action must be taken immediately
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_ALERT', 1);

/**
 * <span class="simpara">     Critical, action is required.     For example, a hard device errors.    </span>
 * 
 * critical conditions
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_CRIT', 2);

/**
 * <span class="simpara">     Errors messages.    </span>
 * 
 * error conditions
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_ERR', 3);

/**
 * <span class="simpara">     Warning messages.    </span>
 * 
 * warning conditions
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_WARNING', 4);

/**
 * <span class="simpara">     Notice messages, corresponds to conditions that are not error conditions,     but that may require special handling.    </span>
 * 
 * normal, but significant, condition
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_NOTICE', 5);

/**
 * <span class="simpara">     Informational messages.    </span>
 * 
 * informational message
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_INFO', 6);

/**
 * <span class="simpara">     Debugging messages that contain information normally of use only when     debugging a program.    </span>
 * 
 * debug-level message
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_DEBUG', 7);

/**
 * <span class="simpara">     For kernel messages.    </span>
 * 
 * kernel messages
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_KERN', 0);

/**
 * <span class="simpara">     For generic user-level messages.    </span>
 * 
 * generic user-level messages
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_USER', 8);

/**
 * <span class="simpara">     For messages from the mail subsystem.    </span>
 * 
 * mail subsystem
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_MAIL', 16);

/**
 * <span class="simpara">     For system daemon messages.    </span>
 * 
 * other system daemons
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_DAEMON', 24);

/**
 * <span class="simpara">     For security/authorization messages.    </span>
 * 
 * security/authorization messages (use <b>LOG_AUTHPRIV</b> instead
 * in systems where that constant is defined)
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_AUTH', 32);

/**
 * <span class="simpara">     For messages generated internally by <strong class="command">syslogd</strong>.    </span>
 * 
 * messages generated internally by syslogd
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_SYSLOG', 40);

/**
 * <span class="simpara">     For messages from the line printer subsystem.    </span>
 * 
 * line printer subsystem
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_LPR', 48);

/**
 * <span class="simpara">     For messages from the USENET news subsystem.    </span>
 * 
 * USENET news subsystem
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_NEWS', 56);

/**
 * <span class="simpara">     For messages from the UUCP subsystem.    </span>
 * 
 * UUCP subsystem
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_UUCP', 64);

/**
 * <span class="simpara">     For clock daemon messages.     For example <strong class="command">cron</strong> or <strong class="command">at</strong>.    </span>
 * 
 * clock daemon (cron and at)
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_CRON', 72);

/**
 * <span class="simpara">     For private security/authorization messages.    </span>
 * 
 * security/authorization messages (private)
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_AUTHPRIV', 80);
/**
 * <span class="simpara">     Reserved for local use.    </span>
 */
define('LOG_LOCAL0', 128);
/**
 * <span class="simpara">     Reserved for local use.    </span>
 */
define('LOG_LOCAL1', 136);
/**
 * <span class="simpara">     Reserved for local use.    </span>
 */
define('LOG_LOCAL2', 144);
/**
 * <span class="simpara">     Reserved for local use.    </span>
 */
define('LOG_LOCAL3', 152);
/**
 * <span class="simpara">     Reserved for local use.    </span>
 */
define('LOG_LOCAL4', 160);
/**
 * <span class="simpara">     Reserved for local use.    </span>
 */
define('LOG_LOCAL5', 168);
/**
 * <span class="simpara">     Reserved for local use.    </span>
 */
define('LOG_LOCAL6', 176);
/**
 * <span class="simpara">     Reserved for local use.    </span>
 */
define('LOG_LOCAL7', 184);

/**
 * <span class="simpara">     Include the PID with each log message.    </span>
 * 
 * include PID with each message
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_PID', 1);

/**
 * <span class="simpara">     If there is an error while sending data to the system logger,     write directly to the system console.    </span>
 * 
 * if there is an error while sending data to the system logger,
 * write directly to the system console
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_CONS', 2);

/**
 * <span class="simpara">     Delay opening the connection until the first message is logged.     This is the default behaviour.    </span>
 * 
 * (default) delay opening the connection until the first
 * message is logged
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_ODELAY', 4);

/**
 * <span class="simpara">     Open the connection to the logger immediately.    </span>
 * 
 * open the connection to the logger immediately
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_NDELAY', 8);
/**
 * <span class="simpara">    </span>
 */
define('LOG_NOWAIT', 16);

/**
 * <span class="simpara">     Additionally log messages to <strong><code><a href="https://php.net/manual/zh/reserved.constants.php#constant.stderr">STDERR</a></code></strong>.    </span>
 * 
 * print log message also to standard error
 * @link https://php.net/manual/zh/network.constants.php
 */
define('LOG_PERROR', 32);

/**
 * <span class="simpara">     Decimal point character.    </span>
 * 
 * @since 8.2
 */
define('DECIMAL_POINT', 65536);
/**
 * <span class="simpara">     Separator character for thousands (groups of three digits).    </span>
 * 
 * @since 8.2
 */
define('THOUSANDS_SEP', 65537);
/**
 * <span class="simpara">    </span>
 * 
 * @since 8.2
 */
define('GROUPING', 65538);

/**
 * <span class="simpara">     Year in alternate era format.    </span>
 * 
 * @since 8.2
 */
define('ERA_YEAR', 131117);

/**
 * <span class="simpara">     International currency symbol.    </span>
 * 
 * @since 8.2
 */
define('INT_CURR_SYMBOL', 262144);
/**
 * <span class="simpara">     Local currency symbol.    </span>
 * 
 * @since 8.2
 */
define('CURRENCY_SYMBOL', 262145);
/**
 * <span class="simpara">     Decimal point character.    </span>
 * 
 * @since 8.2
 */
define('MON_DECIMAL_POINT', 262146);
/**
 * <span class="simpara">     Thousands separator (groups of three digits).    </span>
 * 
 * @since 8.2
 */
define('MON_THOUSANDS_SEP', 262147);
/**
 * <span class="simpara">     Like <code class="literal">"grouping"</code> element.    </span>
 * 
 * @since 8.2
 */
define('MON_GROUPING', 262148);
/**
 * <span class="simpara">     Sign for positive values.    </span>
 * 
 * @since 8.2
 */
define('POSITIVE_SIGN', 262149);
/**
 * <span class="simpara">     Sign for negative values.    </span>
 * 
 * @since 8.2
 */
define('NEGATIVE_SIGN', 262150);
/**
 * <span class="simpara">     International fractional digits.    </span>
 * 
 * @since 8.2
 */
define('INT_FRAC_DIGITS', 262151);
/**
 * <span class="simpara">     Local fractional digits.    </span>
 * 
 * @since 8.2
 */
define('FRAC_DIGITS', 262152);
/**
 * <span class="simpara">     Returns 1 if <strong><code><a href="https://php.net/manual/zh/string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong> precedes a positive value.    </span>
 * 
 * @since 8.2
 */
define('P_CS_PRECEDES', 262153);
/**
 * <span class="simpara">     Returns 1 if a space separates <strong><code><a href="https://php.net/manual/zh/string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong> from a positive value.    </span>
 * 
 * @since 8.2
 */
define('P_SEP_BY_SPACE', 262154);
/**
 * <span class="simpara">     Returns 1 if <strong><code><a href="https://php.net/manual/zh/string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong> precedes a negative value.    </span>
 * 
 * @since 8.2
 */
define('N_CS_PRECEDES', 262155);
/**
 * <span class="simpara">     Returns 1 if a space separates <strong><code><a href="https://php.net/manual/zh/string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong> from a negative value.    </span>
 * 
 * @since 8.2
 */
define('N_SEP_BY_SPACE', 262156);
/**
 * <span class="simpara">                Returns 0 if parentheses surround the quantity and <strong><code><a href="https://php.net/manual/zh/string.constants.php#constant.currency-symbol">CURRENCY_SYMBOL</a></code></strong>.              </span>
 * 
 * @since 8.2
 */
define('P_SIGN_POSN', 262157);
/**
 * <span class="simpara">    </span>
 * 
 * @since 8.2
 */
define('N_SIGN_POSN', 262158);
