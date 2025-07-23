<?php
/**
 * SQLSRV Extension Stub File.
 *
 * Current through version 3.0.1 (rel March 22, 2012) of Microsoft Drivers for PHP for SQL Server.
 *
 * Documentation taken from {@link http://msdn.microsoft.com/en-us/library/ee229547(v=sql.10).aspx} on Mar 22, 2012.
 * Additional information from using Reflection.
 */

/**
 * <span class="simpara">     Forces <span class="function">{@link sqlsrv_errors()}</span> to return errors only (no warnings)      when passed as a parameter.      </span>
 * 
 * Errors generated on the last sqlsrv function call are returned.
 *
 * <br />Used to specify if {@link sqlsrv_errors() sqlsrv_errors} returns errors, warnings, or both.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_ERR_ERRORS', 0);

/**
 * <span class="simpara">     Forces <span class="function">{@link sqlsrv_errors()}</span> to return warnings only (no errors)      when passed as a parameter.      </span>
 * 
 * Warnings generated on the last sqlsrv function call are returned.
 *
 * <br />Used to specify if {@link sqlsrv_errors() sqlsrv_errors} returns errors, warnings, or both.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_ERR_WARNINGS', 1);

/**
 * <span class="simpara">     Forces <span class="function">{@link sqlsrv_errors()}</span> to return both errors and warings      when passed as a parameter (the default behavior).      </span>
 * 
 * Errors and warnings generated on the last sqlsrv function call are returned.
 *
 * <br />This is the default value.<br />
 *
 * Used to specify if {@link sqlsrv_errors() sqlsrv_errors} returns errors, warnings, or both.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_ERR_ALL', 2);

/**
 * <span class="simpara">     Turns on logging of all subsystems when passed to      <span class="function">{@link sqlsrv_configure()}</span> as a parameter.      </span>
 * 
 * Turns on logging of all subsystems.
 *
 * <br />Used as the value for the LogSubsystems setting with
 * {@link sqlsrv_configure() sqlsrv_configure}.<br />
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_LOG_SYSTEM_ALL', -1);

/**
 * <span class="simpara">     Turns off logging of all subsystems when passed to      <span class="function">{@link sqlsrv_configure()}</span> as a parameter.      </span>
 * 
 * Turns logging off.
 *
 * <br />Used as the value for the LogSubsystems setting with  {@link sqlsrv_configure() sqlsrv_configure}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_LOG_SYSTEM_OFF', 0);

/**
 * <span class="simpara">     Turns on logging of initialization activity when passed to      <span class="function">{@link sqlsrv_configure()}</span> as a parameter.      </span>
 * 
 * Turns on logging of initialization activity.
 *
 * <br />Used as the value for the LogSubsystems setting with {@link sqlsrv_configure() sqlsrv_configure}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_LOG_SYSTEM_INIT', 1);

/**
 * <span class="simpara">     Turns on logging of connection activity when passed to      <span class="function">{@link sqlsrv_configure()}</span> as a parameter.      </span>
 * 
 * Turns on logging of connection activity.
 *
 * <br />Used as the value for the LogSubsystems setting with {@link sqlsrv_configure() sqlsrv_configure}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_LOG_SYSTEM_CONN', 2);

/**
 * <span class="simpara">     Turns on logging of statement activity when passed to      <span class="function">{@link sqlsrv_configure()}</span> as a parameter.      </span>
 * 
 * Turns on logging of statement activity.
 *
 * <br />Used as the value for the LogSubsystems setting with {@link sqlsrv_configure() sqlsrv_configure}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_LOG_SYSTEM_STMT', 4);

/**
 * <span class="simpara">     Turns on logging of error function activity when passed to      <span class="function">{@link sqlsrv_configure()}</span> as a parameter.      </span>
 * 
 * Turns on logging of error functions activity (such as handle_error and handle_warning).
 *
 * <br />Used as the value for the
 * LogSubsystems setting with {@link sqlsrv_configure() sqlsrv_configure}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_LOG_SYSTEM_UTIL', 8);

/**
 * <span class="simpara">     Specifies that errors, warnings, and notices will be logged      when passed to <span class="function">{@link sqlsrv_configure()}</span> as a parameter.      </span>
 * 
 * Specifies that errors, warnings, and notices will be logged.
 *
 * <br />Used as the value for the LogSeverity setting with {@link sqlsrv_configure() sqlsrv_configure}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_LOG_SEVERITY_ALL', -1);

/**
 * <span class="simpara">     Specifies that errors will be logged when passed to      <span class="function">{@link sqlsrv_configure()}</span> as a parameter.      </span>
 * 
 * Specifies that errors will be logged.
 *
 * <br />Used as the value for the LogSeverity setting with {@link sqlsrv_configure() sqlsrv_configure}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_LOG_SEVERITY_ERROR', 1);

/**
 * <span class="simpara">     Specifies that notices will be logged when passed to      <span class="function">{@link sqlsrv_configure()}</span> as a parameter.      </span>
 * 
 * Specifies that notices will be logged.
 *
 * <br />Used as the value for the LogSeverity setting with {@link sqlsrv_configure() sqlsrv_configure}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_LOG_SEVERITY_NOTICE', 4);

/**
 * <span class="simpara">     Specifies that warnings will be logged when passed to      <span class="function">{@link sqlsrv_configure()}</span> as a parameter.      </span>
 * 
 * Specifies that warnings will be logged.
 *
 * <br />Used as the value for the LogSeverity setting with {@link sqlsrv_configure() sqlsrv_configure}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_LOG_SEVERITY_WARNING', 2);

/**
 * <span class="simpara">     Forces <span class="function">{@link sqlsrv_fetch_array()}</span> to return an array with      numeric when passed as a parameter.      </span>
 * 
 * Returns numerically indexed array.
 *
 * <br />{@link sqlsrv_fetch_array() sqlsrv_fetch_array} returns the next row of data as a numerically indexed array.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_FETCH_NUMERIC', 1);

/**
 * <span class="simpara">     Forces <span class="function">{@link sqlsrv_fetch_array()}</span> to return an associative      array when passed as a parameter.      </span>
 * 
 * Returns an associative array.
 *
 * <br />{@link sqlsrv_fetch_array() sqlsrv_fetch_array} returns the next row of data as an associative array.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_FETCH_ASSOC', 2);

/**
 * <span class="simpara">     Forces <span class="function">{@link sqlsrv_fetch_array()}</span> to return an array with both      associative and numeric keys when passed as a parameter (the default behavior).      </span>
 * 
 * Returns both a numeric and associative array.
 *
 * <br />{@link sqlsrv_fetch_array() sqlsrv_fetch_array} returns the next row of data as an array with both numeric and
 * associative keys.<br />
 *
 * This is the default value.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_FETCH_BOTH', 3);

/**
 * Null
 *
 * <br />Used with {@link sqlsrv_prepare() sqlsrv_prepare},
 * {@link sqlsrv_query() sqlsrv_query}
 * and {@link sqlsrv_get_field() sqlsrv_get_field} to request a field be return as a specific PHP type.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_PHPTYPE_NULL', 1);

/**
 * <span class="simpara">     Specifies an integer PHP data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">»&nbsp;How to: Specify PHP Types</a>.     </span>
 * 
 * Integer
 *
 * <br />Used with {@link sqlsrv_prepare() sqlsrv_prepare},
 * {@link sqlsrv_query() sqlsrv_query}
 * and {@link sqlsrv_get_field() sqlsrv_get_field} to request a field be return as a specific PHP type.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_PHPTYPE_INT', 2);

/**
 * <span class="simpara">     Specifies a float PHP data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">»&nbsp;How to: Specify PHP Types</a>.     </span>
 * 
 * Float
 *
 * <br />Used with {@link sqlsrv_prepare() sqlsrv_prepare},
 * {@link sqlsrv_query() sqlsrv_query}
 * and {@link sqlsrv_get_field() sqlsrv_get_field} to request a field be return as a specific PHP type.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_PHPTYPE_FLOAT', 3);

/**
 * <span class="simpara">     Specifies a datetime PHP data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">»&nbsp;How to: Specify PHP Types</a>.     </span>
 * 
 * Datetime
 *
 * <br />Used with {@link sqlsrv_prepare() sqlsrv_prepare},
 * {@link sqlsrv_query() sqlsrv_query}
 * and {@link sqlsrv_get_field() sqlsrv_get_field} to request a field be return as a specific PHP type.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_PHPTYPE_DATETIME', 4);

/**
 * <span class="simpara">     Specifies that data is returned as a raw byte stream from the server without      performing encoding or translation. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">»&nbsp;How to: Specify PHP Types</a>.     </span>
 * 
 * Binary Encoding
 *
 * <br />Data is returned as a raw byte stream from the server without performing encoding or translation.<br />
 *
 * Used with {@link sqlsrv_prepare() sqlsrv_prepare},
 * {@link sqlsrv_query() sqlsrv_query}
 * and {@link sqlsrv_get_field() sqlsrv_get_field} to request a field be return as a specific PHP type.<br />
 *
 * This is used with {@link SQLSRV_PHPTYPE_STREAM() SQLSRV_PHPTYPE_STREAM} and
 * {@link SQLSRV_PHPTYPE_STRING() SQLSRV_PHPTYPE_STRING} to specify the encoding of those PHP types types.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_ENC_BINARY', 'binary');

/**
 * <span class="simpara">     Data is returned in 8-bit characters as specified in the code page of the      Windows locale that is set on the system. Any multi-byte characters or characters      that do not map into this code page are substituted with a single byte question      mark (?) character. This is the default encoding. For usage information,      see <a href="http://msdn.microsoft.com/en-us/library/cc296208.aspx" class="link external">»&nbsp;How to: Specify PHP Types</a>.     </span>
 * 
 * Character Encoding
 *
 * <br />Data is returned in 8-bit characters as specified in the code page of the Windows locale that is set on the
 * system. Any multi-byte characters or characters that do not map into this code page are substituted with a single
 * byte question mark (?) character.<br />
 *
 * This is the default encoding.<br />
 *
 * Used with {@link sqlsrv_prepare() sqlsrv_prepare},
 * {@link sqlsrv_query() sqlsrv_query}
 * and {@link sqlsrv_get_field() sqlsrv_get_field} to request a field be return as a specific PHP type.<br />
 *
 * This is used with {@link SQLSRV_PHPTYPE_STREAM() SQLSRV_PHPTYPE_STREAM} and
 * {@link SQLSRV_PHPTYPE_STRING() SQLSRV_PHPTYPE_STRING} to specify the encoding of those PHP types types.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_ENC_CHAR', 'char');

/**
 * <span class="simpara">     Indicates that a column is not nullable.     </span>
 * 
 * The column is not nullable.
 *
 * <br />You can compare the value of the Nullable key that is returned by
 * {@link sqlsrv_field_metadata() sqlsrv_field_metadata} to determine the column's nullable status.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_NULLABLE_NO', 0);

/**
 * <span class="simpara">     Indicates that a column is nullable.     </span>
 * 
 * The column is nullable.
 *
 * <br />You can compare the value of the Nullable key that is returned by
 * {@link sqlsrv_field_metadata() sqlsrv_field_metadata} to determine the column's nullable status.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_NULLABLE_YES', 1);

/**
 * <span class="simpara">     Indicates that it is not known if a column is nullable.     </span>
 * 
 * It is not known if the column is nullable.
 *
 * <br />You can compare the value of the Nullable key that is returned by
 * {@link sqlsrv_field_metadata() sqlsrv_field_metadata} to determine the column's nullable status.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_NULLABLE_UNKNOWN', 2);

/**
 * <span class="simpara">     Describes the bigint SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * bigint.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_BIGINT', -5);
/**
 * <span class="simpara">     Describes the bit SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * bit.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_BIT', -7);
/**
 * <span class="simpara">     Describes the char SQL Server data type. This constant works like a function      and accepts a parameter indicating the number characters. For usage information,      see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * char.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_CHAR', 1);
/**
 * <span class="simpara">     Describes the datetime SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * datetime.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_DATETIME', 25177693);
/**
 * <span class="simpara">     Describes the decimal SQL Server data type. This constant works like a function      and accepts two parameters indicating (in order) precision and scale. For usage information,      see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * decimal.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_DECIMAL', 3);
/**
 * <span class="simpara">     Describes the float SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * float.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_FLOAT', 6);
/**
 * <span class="simpara">     Describes the image SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * image.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_IMAGE', -4);
/**
 * <span class="simpara">     Describes the int SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * int.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_INT', 4);
/**
 * <span class="simpara">     Describes the money SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * money.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_MONEY', 33564163);
/**
 * <span class="simpara">     Describes the nchar SQL Server data type. This constant works like a function      and accepts a single parameter indicating the character count. For usage information,      see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * nchar.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_NCHAR', -8);
/**
 * <span class="simpara">     Describes the ntext SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * ntext.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_NTEXT', -10);
/**
 * <span class="simpara">     Describes the numeric SQL Server data type. This constant works like a function      and accepts two parameter indicating (in order) precision and scale. For usage      information, see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * numeric.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_NUMERIC', 2);
/**
 * <span class="simpara">     Describes the nvarchar SQL Server data type. This constant works like a function      and accepts a single parameter indicating the character count. For usage      information, see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * nvarchar.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_NVARCHAR', -9);
/**
 * <span class="simpara">     Describes the text SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * text.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_TEXT', -1);
/**
 * <span class="simpara">     Describes the real SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * real.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_REAL', 7);
/**
 * <span class="simpara">     Describes the smalldatetime SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * smalldatetime.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_SMALLDATETIME', 8285);
/**
 * <span class="simpara">     Describes the smallint SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * smallint.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_SMALLINT', 5);
/**
 * <span class="simpara">     Describes the smallmoney SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * smallmoney.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_SMALLMONEY', 33559555);
/**
 * <span class="simpara">     Describes the timestamp SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * timestamp.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_TIMESTAMP', 4606);
/**
 * <span class="simpara">     Describes the tinyint SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * tinyint.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_TINYINT', -6);
/**
 * <span class="simpara">     Describes the UDT SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * udt.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_UDT', -151);
/**
 * <span class="simpara">     Describes the uniqueidentifier SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * uniqueidentifier.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_UNIQUEIDENTIFIER', -11);
/**
 * <span class="simpara">     Describes the varbinary SQL Server data type. This constant works like a function      and accepts a single parameter indicating the byte count. For usage information,      see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * varbinary.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_VARBINARY', -3);
/**
 * <span class="simpara">     Describes the varchar SQL Server data type. This constant works like a function      and accepts a single parameter indicating the character count. For usage information,      see <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * varchar.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_VARCHAR', 12);
/**
 * <span class="simpara">     Describes the XML SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * xml.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_XML', -152);
/**
 * <span class="simpara">     Describes the date SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * date.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_DATE', 5211);
/**
 * <span class="simpara">     Describes the time SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * time.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_TIME', 58728806);
/**
 * <span class="simpara">     Describes the datetimeoffset SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * datetimeoffset.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_DATETIMEOFFSET', 58738021);
/**
 * <span class="simpara">     Describes the datetime2 SQL Server data type. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/cc626305.aspx" class="link external">»&nbsp;How to: Specify SQL Types</a>.     </span>
 * 
 * datetime2.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the SQL Server data type of a parameter.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SQLTYPE_DATETIME2', 58734173);

/**
 * <span class="simpara">     Indicates an input parameter when passed to <span class="function">{@link sqlsrv_query()}</span>      or <span class="function">{@link sqlsrv_prepare()}</span>.     </span>
 * 
 * Indicates an input parameter.
 *
 * <br />Used for specifying parameter direction when you call {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_PARAM_IN', 1);

/**
 * <span class="simpara">     Indicates a bidirectional parameter when passed to <span class="function">{@link sqlsrv_query()}</span>      or <span class="function">{@link sqlsrv_prepare()}</span>.     </span>
 * 
 * Indicates a bidirectional parameter.
 *
 * <br />Used for specifying parameter direction when you call {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_PARAM_INOUT', 2);

/**
 * <span class="simpara">     Indicates an output parameter when passed to <span class="function">{@link sqlsrv_query()}</span> or      <span class="function">{@link sqlsrv_prepare()}</span>.     </span>
 * 
 * Indicates an output parameter.
 *
 * <br />Used for specifying parameter direction when you call {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_PARAM_OUT', 4);

/**
 * <span class="simpara">     Indicates a transaction isolation level of READ UNCOMMITTED. This value is      used to set the TransactionIsolation level in the \$connectionOptions array      passed to <span class="function">{@link sqlsrv_connect()}</span>.     </span>
 * 
 * Read Uncommitted.
 *
 * <br />Specifies that statements can read rows that have been modified by other transactions but not yet committed.<br />
 *
 * Transactions running at the READ UNCOMMITTED level do not issue shared locks to prevent other transactions from
 * modifying data read by the current transaction. READ UNCOMMITTED transactions are also not blocked by exclusive locks
 * that would prevent the current transaction from reading rows that have been modified but not committed by other
 * transactions. When this option is set, it is possible to read uncommitted modifications, which are called dirty reads.
 * Values in the data can be changed and rows can appear or disappear in the data set before the end of the transaction.
 * This option has the same effect as setting NOLOCK on all tables in all SELECT statements in a transaction. This is
 * the least restrictive of the isolation levels.<br />
 *
 * Used with the TransactionIsolation key when calling {@link sqlsrv_connect() sqlsrv_connect}. For information on using
 * these constants, see {@link http://msdn.microsoft.com/en-us/library/ms173763(v=sql.110).aspx SET TRANSACTION ISOLATION LEVEL (Transact-SQL)}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_TXN_READ_UNCOMMITTED', 1);
/**
 * <span class="simpara">     Indicates a transaction isolation level of READ COMMITTED. This value is      used to set the TransactionIsolation level in the \$connectionOptions array      passed to <span class="function">{@link sqlsrv_connect()}</span>.     </span>
 * 
 * Read Committed.
 *
 * <br />Specifies that statements cannot read data that has been modified but not committed by other transactions.
 * This prevents dirty reads. Data can be changed by other transactions between individual statements within the current
 * transaction, resulting in nonrepeatable reads or phantom data. This option is the SQL Server default.<br />
 *
 * The behavior of READ COMMITTED depends on the setting of the READ_COMMITTED_SNAPSHOT database option.<br />
 *
 * Used with the TransactionIsolation key when calling {@link sqlsrv_connect() sqlsrv_connect}. For information on using
 * these constants, see {@link http://msdn.microsoft.com/en-us/library/ms173763(v=sql.110).aspx SET TRANSACTION ISOLATION LEVEL (Transact-SQL)}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_TXN_READ_COMMITTED', 2);
/**
 * <span class="simpara">     Indicates a transaction isolation level of REPEATABLE READ. This value is      used to set the TransactionIsolation level in the \$connectionOptions array      passed to <span class="function">{@link sqlsrv_connect()}</span>.     </span>
 * 
 * Repeatable Read.
 *
 * <br />Specifies that statements cannot read data that has been modified but not yet committed by other transactions and
 * that no other transactions can modify data that has been read by the current transaction until the current transaction
 * completes.<br />
 *
 * Shared locks are placed on all data read by each statement in the transaction and are held until the transaction
 * completes. This prevents other transactions from modifying any rows that have been read by the current transaction.
 * Other transactions can insert new rows that match the search conditions of statements issued by the current transaction.
 * If the current transaction then retries the statement it will retrieve the new rows, which results in phantom reads.
 * Because shared locks are held to the end of a transaction instead of being released at the end of each statement,
 * concurrency is lower than the default READ COMMITTED isolation level.<br />
 *
 * Use this option only when necessary.<br />
 *
 * Used with the TransactionIsolation key when calling {@link sqlsrv_connect() sqlsrv_connect}. For information on using
 * these constants, see {@link http://msdn.microsoft.com/en-us/library/ms173763(v=sql.110).aspx SET TRANSACTION ISOLATION LEVEL (Transact-SQL)}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_TXN_REPEATABLE_READ', 4);
/**
 * Serializable.
 *
 * <br />Specifies the following:
 * <ul><li>Statements cannot read data that has been modified but not yet committed by other transactions.</li>
 * <li>No other transactions can modify data that has been read by the current transaction until the current
 * transaction completes.</li>
 * <li>Other transactions cannot insert new rows with key values that would fall in the range of keys read by any
 * statements in the current transaction until the current transaction completes.</li></ul>
 *
 * Range locks are placed in the range of key values that match the search conditions of each statement executed in a
 * transaction. This blocks other transactions from updating or inserting any rows that would qualify for any of the
 * statements executed by the current transaction. This means that if any of the statements in a transaction are
 * executed a second time, they will read the same set of rows. The range locks are held until the transaction completes.
 * This is the most restrictive of the isolation levels because it locks entire ranges of keys and holds the locks until
 * the transaction completes. Because concurrency is lower, use this option only when necessary. This option has the same
 * effect as setting HOLDLOCK on all tables in all SELECT statements in a transaction.<br />
 *
 * Used with the TransactionIsolation key when calling {@link sqlsrv_connect() sqlsrv_connect}. For information on using
 * these constants, see {@link http://msdn.microsoft.com/en-us/library/ms173763(v=sql.110).aspx SET TRANSACTION ISOLATION LEVEL (Transact-SQL)}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_TXN_SERIALIZABLE', 8);
/**
 * <span class="simpara">     Indicates a transaction isolation level of SNAPSHOT. This value is used to      set the TransactionIsolation level in the \$connectionOptions array passed      to <span class="function">{@link sqlsrv_connect()}</span>.     </span>
 * 
 * Snapshot.
 *
 * <br />Specifies that data read by any statement in a transaction will be the transactionally consistent version of
 * the data that existed at the start of the transaction. The transaction can only recognize data modifications that
 * were committed before the start of the transaction. Data modifications made by other transactions after the start of
 * the current transaction are not visible to statements executing in the current transaction. The effect is as if the
 * statements in a transaction get a snapshot of the committed data as it existed at the start of the transaction.<br />
 *
 * Except when a database is being recovered, SNAPSHOT transactions do not request locks when reading data. SNAPSHOT
 * transactions reading data do not block other transactions from writing data. Transactions writing data do not block
 * SNAPSHOT transactions from reading data.<br />
 *
 * During the roll-back phase of a database recovery, SNAPSHOT transactions will request a lock if an attempt is made to
 * read data that is locked by another transaction that is being rolled back. The SNAPSHOT transaction is blocked until
 * that transaction has been rolled back. The lock is released immediately after it has been granted.<br />
 *
 * The ALLOW_SNAPSHOT_ISOLATION database option must be set to ON before you can start a transaction that uses the
 * SNAPSHOT isolation level. If a transaction using the SNAPSHOT isolation level accesses data in multiple databases,
 * ALLOW_SNAPSHOT_ISOLATION must be set to ON in each database.<br />
 *
 * A transaction cannot be set to SNAPSHOT isolation level that started with another isolation level; doing so will
 * cause the transaction to abort. If a transaction starts in the SNAPSHOT isolation level, you can change it to another
 * isolation level and then back to SNAPSHOT. A transaction starts the first time it accesses data.<br />
 *
 * A transaction running under SNAPSHOT isolation level can view changes made by that transaction. For example, if the
 * transaction performs an UPDATE on a table and then issues a SELECT statement against the same table, the modified
 * data will be included in the result set.<br />
 *
 * Used with the TransactionIsolation key when calling {@link sqlsrv_connect() sqlsrv_connect}. For information on using
 * these constants, see {@link http://msdn.microsoft.com/en-us/library/ms173763(v=sql.110).aspx SET TRANSACTION ISOLATION LEVEL (Transact-SQL)}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_TXN_SNAPSHOT', 32);

/**
 * <span class="simpara">     Specifies which row to select in a result set. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>.     </span>
 * 
 * Specifies the next row.
 *
 * <br />This is the default value, if you do not specify the row parameter for a scrollable result set.<br />
 *
 * Used with {@link sqlsrv_fetch() sqlsrv_fetch},
 * {@link sqlsrv_fetch_array() sqlsrv_fetch_array},
 * or {@link sqlsrv_fetch_object() sqlsrv_fetch_object} to specify a row.<br />
 *
 * Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify which row to select in the result set. For
 * information on using these constants, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SCROLL_NEXT', 1);
/**
 * <span class="simpara">     Specifies which row to select in a result set. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>.     </span>
 * 
 * Specifies the row before the current row.
 *
 * <br />Used with {@link sqlsrv_fetch() sqlsrv_fetch},
 * {@link sqlsrv_fetch_array() sqlsrv_fetch_array},
 * or {@link sqlsrv_fetch_object() sqlsrv_fetch_object} to specify a row.<br />
 *
 * Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify which row to select in the result set. For
 * information on using these constants, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SCROLL_PRIOR', 4);
/**
 * <span class="simpara">     Specifies which row to select in a result set. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>.     </span>
 * 
 * Specifies the first row in the result set.
 *
 * <br />Used with {@link sqlsrv_fetch() sqlsrv_fetch},
 * {@link sqlsrv_fetch_array() sqlsrv_fetch_array},
 * or {@link sqlsrv_fetch_object() sqlsrv_fetch_object} to specify a row.<br />
 *
 * Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify which row to select in the result set. For
 * information on using these constants, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SCROLL_FIRST', 2);
/**
 * <span class="simpara">     Specifies which row to select in a result set. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>.     </span>
 * 
 * Specifies the last row in the result set.
 *
 * <br />Used with {@link sqlsrv_fetch() sqlsrv_fetch},
 * {@link sqlsrv_fetch_array() sqlsrv_fetch_array},
 * or {@link sqlsrv_fetch_object() sqlsrv_fetch_object} to specify a row.<br />
 *
 * Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify which row to select in the result set. For
 * information on using these constants, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SCROLL_LAST', 3);
/**
 * <span class="simpara">     Specifies which row to select in a result set. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>.     </span>
 * 
 * Specifies the row specified with the offset parameter.
 *
 * <br />Used with {@link sqlsrv_fetch() sqlsrv_fetch},
 * {@link sqlsrv_fetch_array() sqlsrv_fetch_array},
 * or {@link sqlsrv_fetch_object() sqlsrv_fetch_object} to specify a row.<br />
 *
 * Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify which row to select in the result set. For
 * information on using these constants, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SCROLL_ABSOLUTE', 5);
/**
 * <span class="simpara">     Specifies which row to select in a result set. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>.     </span>
 * 
 * Specifies the row specified with the offset parameter from the current row.
 *
 * <br />Used with {@link sqlsrv_fetch() sqlsrv_fetch},
 * {@link sqlsrv_fetch_array() sqlsrv_fetch_array},
 * or {@link sqlsrv_fetch_object() sqlsrv_fetch_object} to specify a row.<br />
 *
 * Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify which row to select in the result set. For
 * information on using these constants, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_SCROLL_RELATIVE', 6);

/**
 * <span class="simpara">     Indicates a forward-only cursor. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>.     </span>
 * 
 * Lets you move one row at a time starting at the first row of the result set until you reach the end of
 * the result set.
 *
 * <br />This is the default cursor type.<br />
 *
 * {@link sqlsrv_num_rows() sqlsrv_num_rows} returns an error for result sets created with this cursor type.<br />
 *
 * Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the kind of cursor that you can use in a result
 * set. For information on using these constants, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_CURSOR_FORWARD', 'forward');
/**
 * <span class="simpara">     Indicates a static cursor. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>.     </span>
 * 
 * Lets you access rows in any order but will not reflect changes in the database.
 *
 * <br />Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the kind of cursor that you can use in a result
 * set. For information on using these constants, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_CURSOR_STATIC', 'static');
/**
 * <span class="simpara">     Indicates a dynamic cursor. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>.     </span>
 * 
 * Lets you access rows in any order and will reflect changes in the database.
 *
 * <br />{@link sqlsrv_num_rows() sqlsrv_num_rows} returns an error for result sets created with this cursor type.<br />
 *
 * Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the kind of cursor that you can use in a result
 * set. For information on using these constants, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_CURSOR_DYNAMIC', 'dynamic');
/**
 * <span class="simpara">     Indicates a keyset cursor. For usage information, see      <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>.     </span>
 * 
 * Lets you access rows in any order.
 *
 * <br />However, a keyset cursor does not update the row count if a row is deleted from the table (a deleted row is
 * returned with no values).<br />
 *
 * Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the kind of cursor that you can use in a result
 * set. For information on using these constants, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_CURSOR_KEYSET', 'keyset');
/**
 * Lets you access rows in any order.
 *
 * <br />Creates a client-side cursor query.<br />
 *
 * Used when calling {@link sqlsrv_query() sqlsrv_query} or
 *{@link sqlsrv_prepare() sqlsrv_prepare} to specify the kind of cursor that you can use in a result
 * set. For information on using these constants, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 */
define('SQLSRV_CURSOR_CLIENT_BUFFERED', 'buffered');

/**
 * <div id="function.sqlsrv-connect" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_connect</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_connect</span> — <span class="dc-title">Opens a connection to a Microsoft SQL Server database</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-connect-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_connect</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$serverName</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$connectionInfo</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span></div>  <p class="para rdfs-comment">   Opens a connection to a Microsoft SQL Server database. By default, the connection    is attempted using Windows Authentication. To connect using SQL Server    Authentication, include "UID" and "PWD" in the connection options array.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-connect-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">serverName</span></dt>     <dd>      <p class="para">       The name of the server to which a connection is established. To connect        to a specific instance, follow the server name with a backward slash        and the instance name (e.g. serverName\sqlexpress).      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">connectionInfo</span></dt>     <dd>      <p class="para">       An associative array that specifies options for connecting to the server.        If values for the UID and PWD keys are not specified, the connection        will be attempted using Windows Authentication. For a complete list of supported        keys, see <a href="http://msdn.microsoft.com/en-us/library/ff628167.aspx" class="link external">»&nbsp;SQLSRV Connection Options</a>.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-connect-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   A connection resource. If a connection cannot be successfully opened, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> is returned.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-connect-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2128">    <p><strong>示例 #1 Connect using Windows Authentication.</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\\sqlexpress"</span><span style="color: #007700">; </span><span style="color: #FF8000">//serverName\instanceName<br><br>// Since UID and PWD are not specified in the \$connectionInfo array,<br>// The connection will be attempted using Windows Authentication.<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br><br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">) {<br>     echo </span><span style="color: #DD0000">"Connection established.&lt;br /&gt;"</span><span style="color: #007700">;<br>}else{<br>     echo </span><span style="color: #DD0000">"Connection could not be established.&lt;br /&gt;"</span><span style="color: #007700">;<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2129">    <p><strong>示例 #2 Connect by specifying a user name and password.</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\\sqlexpress"</span><span style="color: #007700">; </span><span style="color: #FF8000">//serverName\instanceName<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"userName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br><br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">) {<br>     echo </span><span style="color: #DD0000">"Connection established.&lt;br /&gt;"</span><span style="color: #007700">;<br>}else{<br>     echo </span><span style="color: #DD0000">"Connection could not be established.&lt;br /&gt;"</span><span style="color: #007700">;<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2130">    <p><strong>示例 #3 Connect on a specified port.</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\\sqlexpress, 1542"</span><span style="color: #007700">; </span><span style="color: #FF8000">//serverName\instanceName, portNumber (default is 1433)<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"userName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br><br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">) {<br>     echo </span><span style="color: #DD0000">"Connection established.&lt;br /&gt;"</span><span style="color: #007700">;<br>}else{<br>     echo </span><span style="color: #DD0000">"Connection could not be established.&lt;br /&gt;"</span><span style="color: #007700">;<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.sqlsrv-connect-notes">  <h3 class="title">注释</h3>  <p class="para">   By default, the <span class="function"><strong>sqlsrv_connect()</strong></span> uses connection pooling to    improve connection performance. To turn off connection pooling (i.e. force a    new connection on each call), set the "ConnectionPooling" option in the    \$connectionOptions array to 0 (or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>). For more information, see    <a href="http://msdn.microsoft.com/en-us/library/cc644930.aspx" class="link external">»&nbsp;SQLSRV Connection Pooling</a>.  </p>  <p class="para">  The SQLSRV extension does not have a dedicated function for changing which   database is connected to. The target database is specified in the   \$connectionOptions array that is passed to sqlsrv_connect. To change the   database on an open connection, execute the following query "USE dbName"   (e.g. sqlsrv_query(\$conn, "USE dbName")).  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-connect-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_close()} - Closes an open connection and releases resourses associated with the connection</span></li>    <li><span class="function">{@link sqlsrv_errors()} - Returns error and warning information about the last SQLSRV operation performed</span></li>    <li><span class="function">{@link sqlsrv_query()} - Prepares and executes a query</span></li>   </ul>   </div></div>
 * 
 * Creates and opens a connection.
 *
 * <br />Creates a connection resource and opens a connection. By default, the connection is attempted using Windows
 * Authentication.<br />
 *
 * If values for the UID and PWD keys are not specified in the optional $connectionInfo parameter, the connection will
 * be attempted using Windows Authentication. For more information about connecting to the server,
 * see {@link http://msdn.microsoft.com/en-us/library/cc296205.aspx How to: Connect Using Windows Authentication}
 * and {@link http://msdn.microsoft.com/en-us/library/cc296182.aspx How to: Connect Using SQL Server Authentication.}<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-connect
 * @param string $server_name A string specifying the name of the server to which a connection is being established.
 * An instance name (for example, "myServer\instanceName") or port number (for example, "myServer, 1521") can be
 * included as part of this string. For a complete description of the options available for this parameter, see the
 * Server keyword in the ODBC Driver Connection String Keywords section
 * of {@link http://go.microsoft.com/fwlink/?LinkId=105504 Using Connection String Keywords with SQL Native Client}.<br />
 *
 * Beginning in version 3.0 of the Microsoft Drivers for PHP for SQL Server, you can also specify a LocalDB instance
 * with "(localdb)\instancename". For more information,
 * see {@link http://msdn.microsoft.com/en-us/library/hh487161.aspx PHP Driver for SQL Server Support for LocalDB} .<br />
 *
 * Also beginning in version 3.0 of the Microsoft Drivers for PHP for SQL Server, you can specify a virtual network name,
 * to connect to an AlwaysOn availability group. For more information about Microsoft Drivers for PHP for SQL Server
 * support for AlwaysOn Availability Groups,
 * see {@link http://msdn.microsoft.com/en-us/library/hh487159.aspx PHP Driver for SQL Server Support for High Availability, Disaster Recovery}.
 * @param array $connection_info [optional] An associative array that contains connection attributes (for example, array("Database" => "AdventureWorks")).
 * See {@link http://msdn.microsoft.com/en-us/library/ff628167.aspx Connection Options} for a list of the supported keys for the array.
 * @return resource|false A PHP connection resource. If a connection cannot be successfully created and opened, false is returned.
 */
function sqlsrv_connect($server_name, $connection_info = []) {}

/**
 * <div id="function.sqlsrv-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_close</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_close</span> — <span class="dc-title">Closes an open connection and releases resourses associated with the connection</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-close-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_close</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$conn</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Closes an open connection and releases resourses associated with the connection.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-close-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">conn</span></dt>     <dd>      <p class="para">       The connection to be closed.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-close-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-close-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2126">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_close()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpres"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connOptions </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbname"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connOptions </span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">//-------------------------------------<br>// Perform database operations here.<br>//-------------------------------------<br><br>// Close the connection.<br></span><span style="color: #9876AA">sqlsrv_close</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_connect()} - Opens a connection to a Microsoft SQL Server database</span></li>   </ul>   </div></div>
 * 
 * Closes a connection. Frees all resources associated with the connection.
 *
 * <br />Null is a valid parameter for this function. This allows the function to be called multiple times in a script. For
 * example, if you close a connection in an error condition and close it again at the end of the script, the second call
 * to sqlsrv_close will return true because the first call to sqlsrv_close (in the error condition) sets the connection
 * resource to null.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-close
 * @param resource|null $conn The connection to be closed.
 * @return bool The Boolean value true unless the function is called with an invalid parameter. If the function is called with an invalid parameter, false is returned.
 */
function sqlsrv_close($conn) {}

/**
 * <div id="function.sqlsrv-commit" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_commit</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_commit</span> — <span class="dc-title">Commits a transaction that was begun with <span class="function">{@link sqlsrv_begin_transaction()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-commit-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_commit</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$conn</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Commits a transaction that was begun with <span class="function">{@link sqlsrv_begin_transaction()}</span>.    The connection is returned to auto-commit mode after <span class="function"><strong>sqlsrv_commit()</strong></span>    is called. The transaction that is committed includes all statements that were    executed after the call to <span class="function">{@link sqlsrv_begin_transaction()}</span>.    Explicit transactions should be started and committed or rolled back using these    functions instead of executing SQL statements that begin and commit/roll back    transactions. For more information, see    <a href="http://msdn.microsoft.com/en-us/library/cc296206.aspx" class="link external">»&nbsp;SQLSRV Transactions</a>.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-commit-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">conn</span></dt>     <dd>      <p class="para">       The connection on which the transaction is to be committed.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-commit-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-commit-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2127">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_commit()</strong></span> example</strong></p>    <div class="example-contents"><p>    The following example demonstrates how to use <span class="function"><strong>sqlsrv_commit()</strong></span>     together with <span class="function">{@link sqlsrv_begin_transaction()}</span> and     <span class="function">{@link sqlsrv_rollback()}</span>.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"userName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true </span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Begin the transaction. <br></span><span style="color: #007700">if ( </span><span style="color: #9876AA">sqlsrv_begin_transaction</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">) === </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true </span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Initialize parameter values. <br></span><span style="color: #9876AA">\$orderId </span><span style="color: #007700">= </span><span style="color: #9876AA">1</span><span style="color: #007700">; </span><span style="color: #9876AA">\$qty </span><span style="color: #007700">= </span><span style="color: #9876AA">10</span><span style="color: #007700">; </span><span style="color: #9876AA">\$productId </span><span style="color: #007700">= </span><span style="color: #9876AA">100</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// Set up and execute the first query. <br></span><span style="color: #9876AA">\$sql1 </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO OrdersTable (ID, Quantity, ProductID)<br>         VALUES (?, ?, ?)"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$params1 </span><span style="color: #007700">= array( </span><span style="color: #9876AA">\$orderId</span><span style="color: #007700">, </span><span style="color: #9876AA">\$qty</span><span style="color: #007700">, </span><span style="color: #9876AA">\$productId </span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt1 </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql1</span><span style="color: #007700">, </span><span style="color: #9876AA">\$params1 </span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Set up and execute the second query. <br></span><span style="color: #9876AA">\$sql2 </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE InventoryTable <br>         SET Quantity = (Quantity - ?) <br>         WHERE ProductID = ?"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$params2 </span><span style="color: #007700">= array(</span><span style="color: #9876AA">\$qty</span><span style="color: #007700">, </span><span style="color: #9876AA">\$productId</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt2 </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql2</span><span style="color: #007700">, </span><span style="color: #9876AA">\$params2 </span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// If both queries were successful, commit the transaction. <br>// Otherwise, rollback the transaction. <br></span><span style="color: #007700">if( </span><span style="color: #9876AA">\$stmt1 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #9876AA">\$stmt2 </span><span style="color: #007700">) {<br>     </span><span style="color: #9876AA">sqlsrv_commit</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">);<br>     echo </span><span style="color: #DD0000">"Transaction committed.&lt;br /&gt;"</span><span style="color: #007700">;<br>} else {<br>     </span><span style="color: #9876AA">sqlsrv_rollback</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">);<br>     echo </span><span style="color: #DD0000">"Transaction rolled back.&lt;br /&gt;"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-commit-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_begin_transaction()} - Begins a database transaction</span></li>    <li><span class="function">{@link sqlsrv_rollback()} - Rolls back a transaction that was begun with   sqlsrv_begin_transaction</span></li>   </ul>   </div></div>
 * 
 * Commits a transaction that was begun with sqlsrv_begin_transaction.
 *
 * <br />Commits the current transaction on the specified connection and returns the connection to the auto-commit mode.
 * The current transaction includes all statements on the specified connection that were executed after the call to
 * sqlsrv_begin_transaction and before any calls to sqlsrv_rollback or sqlsrv_commit.<br />
 *
 * The Microsoft Drivers for PHP for SQL Server is in auto-commit mode by default. This means that all queries are
 * automatically committed upon success unless they have been designated as part of an explicit transaction by using
 * sqlsrv_begin_transaction.<br />
 *
 * If sqlsrv_commit is called on a connection that is not in an active transaction and that was initiated with
 * sqlsrv_begin_transaction, the call returns false and a Not in Transaction error is added to the error collection.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-commit
 * @param resource $conn The connection on which the transaction is active.
 * @return bool A Boolean value: true if the transaction was successfully committed. Otherwise, false.
 */
function sqlsrv_commit($conn) {}

/**
 * <div id="function.sqlsrv-begin-transaction" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_begin_transaction</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_begin_transaction</span> — <span class="dc-title">Begins a database transaction</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-begin-transaction-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_begin_transaction</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$conn</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   The transaction begun by <span class="function"><strong>sqlsrv_begin_transaction()</strong></span> includes    all statements that were executed after the call to    <span class="function"><strong>sqlsrv_begin_transaction()</strong></span> and before calls to    <span class="function">{@link sqlsrv_rollback()}</span> or <span class="function">{@link sqlsrv_commit()}</span>.    Explicit transactions should be started and committed or rolled back using    these functions instead of executing SQL statements that begin and commit/roll    back transactions. For more information, see    <a href="http://msdn.microsoft.com/en-us/library/cc296206.aspx" class="link external">»&nbsp;SQLSRV Transactions</a>.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.sqlsrv-begin-transaction-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">conn</span></dt>     <dd>      <p class="para">       The connection resource returned by a call to <span class="function">{@link sqlsrv_connect()}</span>.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-begin-transaction-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-begin-transaction-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2123">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_begin_transaction()</strong></span> example</strong></p>    <div class="example-contents"><p>    The following example demonstrates how to use     <span class="function"><strong>sqlsrv_begin_transaction()</strong></span> together with     <span class="function">{@link sqlsrv_commit()}</span> and <span class="function">{@link sqlsrv_rollback()}</span>.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"userName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true </span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Begin the transaction. <br></span><span style="color: #007700">if ( </span><span style="color: #9876AA">sqlsrv_begin_transaction</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">) === </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true </span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Initialize parameter values. <br></span><span style="color: #9876AA">\$orderId </span><span style="color: #007700">= </span><span style="color: #9876AA">1</span><span style="color: #007700">; </span><span style="color: #9876AA">\$qty </span><span style="color: #007700">= </span><span style="color: #9876AA">10</span><span style="color: #007700">; </span><span style="color: #9876AA">\$productId </span><span style="color: #007700">= </span><span style="color: #9876AA">100</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// Set up and execute the first query. <br></span><span style="color: #9876AA">\$sql1 </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO OrdersTable (ID, Quantity, ProductID)<br>          VALUES (?, ?, ?)"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$params1 </span><span style="color: #007700">= array( </span><span style="color: #9876AA">\$orderId</span><span style="color: #007700">, </span><span style="color: #9876AA">\$qty</span><span style="color: #007700">, </span><span style="color: #9876AA">\$productId </span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt1 </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql1</span><span style="color: #007700">, </span><span style="color: #9876AA">\$params1 </span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Set up and execute the second query. <br></span><span style="color: #9876AA">\$sql2 </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE InventoryTable <br>          SET Quantity = (Quantity - ?) <br>          WHERE ProductID = ?"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$params2 </span><span style="color: #007700">= array(</span><span style="color: #9876AA">\$qty</span><span style="color: #007700">, </span><span style="color: #9876AA">\$productId</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt2 </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql2</span><span style="color: #007700">, </span><span style="color: #9876AA">\$params2 </span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// If both queries were successful, commit the transaction. <br>// Otherwise, rollback the transaction. <br></span><span style="color: #007700">if( </span><span style="color: #9876AA">\$stmt1 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #9876AA">\$stmt2 </span><span style="color: #007700">) {<br>     </span><span style="color: #9876AA">sqlsrv_commit</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">);<br>     echo </span><span style="color: #DD0000">"Transaction committed.&lt;br /&gt;"</span><span style="color: #007700">;<br>} else {<br>     </span><span style="color: #9876AA">sqlsrv_rollback</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">);<br>     echo </span><span style="color: #DD0000">"Transaction rolled back.&lt;br /&gt;"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>    <div class="example-contents"><p>以上示例的输出类似于：</p></div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-begin-transaction-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_commit()} - Commits a transaction that was begun with sqlsrv_begin_transaction</span></li>    <li><span class="function">{@link sqlsrv_rollback()} - Rolls back a transaction that was begun with   sqlsrv_begin_transaction</span></li>   </ul>   </div></div>
 * 
 * Begins a database transaction.
 *
 * <br />Begins a transaction on a specified connection. The current transaction includes all statements on the specified
 * connection that were executed after the call to sqlsrv_begin_transaction and before any calls to sqlsrv_rollback or
 * sqlsrv_commit.<br />
 *
 * The Microsoft Drivers for PHP for SQL Server is in auto-commit mode by default. This means that all queries are
 * automatically committed upon success unless they have been designated as part of an explicit transaction by using
 * sqlsrv_begin_transaction.<br />
 *
 * If sqlsrv_begin_transaction is called after a transaction has already been initiated on the connection but not
 * completed by calling either sqlsrv_commit or sqlsrv_rollback, the call returns false and an Already in Transaction
 * error is added to the error collection.<br />
 *
 * Do not use embedded Transact-SQL to perform transactions. For example, do not execute a statement with
 * "BEGIN TRANSACTION" as the Transact-SQL query to begin a transaction. The expected transactional behavior cannot be
 * guaranteed when using embedded Transact-SQL to perform transactions.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296206.aspx How to Perform Transactions}
 * and {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-begin-transaction
 * @param resource $conn The connection with which the transaction is associated.
 * @return bool A Boolean value: true if the transaction was successfully begun. Otherwise, false.
 */
function sqlsrv_begin_transaction($conn) {}

/**
 * <div id="function.sqlsrv-rollback" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_rollback</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_rollback</span> — <span class="dc-title">Rolls back a transaction that was begun with   <span class="function">{@link sqlsrv_begin_transaction()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-rollback-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_rollback</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$conn</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Rolls back a transaction that was begun with <span class="function">{@link sqlsrv_begin_transaction()}</span>    and returns the connection to auto-commit mode.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-rollback-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">conn</span></dt>     <dd>      <p class="para">       The connection resource returned by a call to <span class="function">{@link sqlsrv_connect()}</span>.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-rollback-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-rollback-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2146">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_rollback()</strong></span> example</strong></p>    <div class="example-contents"><p>    The following example demonstrates how to use <span class="function">{@link sqlsrv_begin_transaction()}</span>     together with <span class="function">{@link sqlsrv_commit()}</span> and <span class="function"><strong>sqlsrv_rollback()</strong></span>.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"userName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true </span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Begin the transaction. <br></span><span style="color: #007700">if ( </span><span style="color: #9876AA">sqlsrv_begin_transaction</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">) === </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true </span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Initialize parameter values. <br></span><span style="color: #9876AA">\$orderId </span><span style="color: #007700">= </span><span style="color: #9876AA">1</span><span style="color: #007700">; </span><span style="color: #9876AA">\$qty </span><span style="color: #007700">= </span><span style="color: #9876AA">10</span><span style="color: #007700">; </span><span style="color: #9876AA">\$productId </span><span style="color: #007700">= </span><span style="color: #9876AA">100</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// Set up and execute the first query. <br></span><span style="color: #9876AA">\$sql1 </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO OrdersTable (ID, Quantity, ProductID)<br>         VALUES (?, ?, ?)"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$params1 </span><span style="color: #007700">= array( </span><span style="color: #9876AA">\$orderId</span><span style="color: #007700">, </span><span style="color: #9876AA">\$qty</span><span style="color: #007700">, </span><span style="color: #9876AA">\$productId </span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt1 </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql1</span><span style="color: #007700">, </span><span style="color: #9876AA">\$params1 </span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Set up and execute the second query. <br></span><span style="color: #9876AA">\$sql2 </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE InventoryTable <br>         SET Quantity = (Quantity - ?) <br>         WHERE ProductID = ?"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$params2 </span><span style="color: #007700">= array(</span><span style="color: #9876AA">\$qty</span><span style="color: #007700">, </span><span style="color: #9876AA">\$productId</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt2 </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql2</span><span style="color: #007700">, </span><span style="color: #9876AA">\$params2 </span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// If both queries were successful, commit the transaction. <br>// Otherwise, rollback the transaction. <br></span><span style="color: #007700">if( </span><span style="color: #9876AA">\$stmt1 </span><span style="color: #007700">&amp;&amp; </span><span style="color: #9876AA">\$stmt2 </span><span style="color: #007700">) {<br>     </span><span style="color: #9876AA">sqlsrv_commit</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">);<br>     echo </span><span style="color: #DD0000">"Transaction committed.&lt;br /&gt;"</span><span style="color: #007700">;<br>} else {<br>     </span><span style="color: #9876AA">sqlsrv_rollback</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">);<br>     echo </span><span style="color: #DD0000">"Transaction rolled back.&lt;br /&gt;"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-rollback-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_begin_transaction()} - Begins a database transaction</span></li>    <li><span class="function">{@link sqlsrv_commit()} - Commits a transaction that was begun with sqlsrv_begin_transaction</span></li>   </ul>   </div></div>
 * 
 * Rolls back a transaction that was begun with {@see sqlsrv_begin_transaction}.
 *
 * <br />Rolls back the current transaction on the specified connection and returns the connection to the auto-commit mode.
 * The current transaction includes all statements on the specified connection that were executed after the call to
 * sqlsrv_begin_transaction and before any calls to {@link sqlsrv_rollback() sqlsrv_rollback} or
 * {@link sqlsrv_commit() sqlsrv_commit}.<br />
 *
 * The Microsoft Drivers for PHP for SQL Server is in auto-commit mode by default. This means that all queries are
 * automatically committed upon success unless they have been designated as part of an explicit transaction by using
 * {@link sqlsrv_begin_transaction() sqlsrv_begin_transaction}.<br />
 *
 * If sqlsrv_rollback is called on a connection that is not in an active transaction that was initiated with
 * {@link sqlsrv_begin_transaction() sqlsrv_begin_transaction}, the call returns false and a Not in Transaction error
 * is added to the error collection.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296206.aspx How to Perform Transactions}
 * and {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-rollback
 * @param resource $conn The connection on which the transaction is active.
 * @return bool A Boolean value: true if the transaction was successfully rolled back. Otherwise, false.
 */
function sqlsrv_rollback($conn) {}

/**
 * <div id="function.sqlsrv-errors" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_errors</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_errors</span> — <span class="dc-title">Returns error and warning information about the last SQLSRV operation performed</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-errors-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">      <span class="methodname" style="color:#CC7832"><strong>sqlsrv_errors</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$errorsOrWarnings</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Returns error and warning information about the last SQLSRV operation performed.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-errors-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">errorsOrWarnings</span></dt>     <dd>      <p class="para">       Determines whether error information, warning information, or both are        returned. If this parameter is not supplied, both error information and        warning information are returned. The following are the supported values        for this parameter: SQLSRV_ERR_ALL, SQLSRV_ERR_ERRORS, SQLSRV_ERR_WARNINGS.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-errors-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   If errors and/or warnings occurred on the last sqlsrv operation, an array of    arrays containing error information is returned. If no errors and/or warnings    occurred on the last sqlsrv operation, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> is returned. The following table    describes the structure of the returned arrays:   </p><table class="doctable table">   <caption><strong>Array returned by sqlsrv_errors</strong></caption>       <thead>     <tr>      <th>Key</th>      <th>Description</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>SQLSTATE</td>      <td>For errors that originate from the ODBC driver, the SQLSTATE returned       by ODBC. For errors that originate from the Microsoft Drivers for PHP for       SQL Server, a SQLSTATE of IMSSP. For warnings that originate from the       Microsoft Drivers for PHP for SQL Server, a SQLSTATE of 01SSP.      </td>     </tr>     <tr>      <td>code</td>      <td>For errors that originate from SQL Server, the native SQL Server       error code. For errors that originate from the ODBC driver, the error       code returned by ODBC. For errors that originate from the Microsoft Drivers       for PHP for SQL Server, the Microsoft Drivers for PHP for SQL Server error code.      </td>     </tr>     <tr>      <td>message</td>      <td>A description of the error.</td>     </tr>    </tbody>     </table>   </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-errors-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2131">    <p><strong>示例 #1 <span class="function"><strong>functionname()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName/sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Set up a query to select an invalid column name. <br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT BadColumnName FROM Table_1"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// Execution of the query will fail because of the bad column name. <br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql </span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>    if( (</span><span style="color: #9876AA">\$errors </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">() ) != </span><span style="color: #9876AA">null</span><span style="color: #007700">) {<br>        foreach( </span><span style="color: #9876AA">\$errors </span><span style="color: #007700">as </span><span style="color: #9876AA">\$error </span><span style="color: #007700">) {<br>            echo </span><span style="color: #DD0000">"SQLSTATE: "</span><span style="color: #007700">.</span><span style="color: #9876AA">\$error</span><span style="color: #007700">[ </span><span style="color: #DD0000">'SQLSTATE'</span><span style="color: #007700">].</span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">;<br>            echo </span><span style="color: #DD0000">"code: "</span><span style="color: #007700">.</span><span style="color: #9876AA">\$error</span><span style="color: #007700">[ </span><span style="color: #DD0000">'code'</span><span style="color: #007700">].</span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">;<br>            echo </span><span style="color: #DD0000">"message: "</span><span style="color: #007700">.</span><span style="color: #9876AA">\$error</span><span style="color: #007700">[ </span><span style="color: #DD0000">'message'</span><span style="color: #007700">].</span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">;<br>        }<br>    }<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.sqlsrv-errors-notes">  <h3 class="title">注释</h3>  <p class="para">   By default, warnings generated on a call to any SQLSRV function are treated    as errors. This means that if a warning occurs on a call to a SQLSRV function,    the function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>. However, warnings that correspond to SQLSTATE    values 01000, 01001, 01003, and 01S02 are never treated as errors. For    information about changing this behavior, see <span class="function">{@link sqlsrv_configure()}</span>    and the WarningsReturnAsErrors setting.  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-errors-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_configure()} - Changes the driver error handling and logging configurations</span></li>   </ul>   </div></div>
 * 
 * Returns error and/or warning information about the last operation.
 *
 * <br />Returns extended error and/or warning information about the last sqlsrv operation performed. <br />
 *
 * The sqlsrv_errors function can return error and/or warning information by calling it with one of the parameter values
 * specified in the Parameters section below. <br />
 *
 * By default, warnings generated on a call to any sqlsrv function are treated as errors; if a warning occurs on a call
 * to a sqlsrv function, the function returns false. However, warnings that correspond to SQLSTATE values 01000, 01001,
 * 01003, and 01S02 are never treated as errors. <br />
 *
 * The following line of code turns off the behavior mentioned above; a warning generated by a call to a sqlsrv function
 * does not cause the function to return false: <br />
 *
 * <code>{@link sqlsrv_configure() sqlsrv_configure}("WarningsReturnAsErrors", 0);</code>
 *
 * The following line of code reinstates the default behavior; warnings (with exceptions, noted above) are treated as
 * errors: <br />
 *
 * <code>{@link sqlsrv_configure() sqlsrv_configure}("WarningsReturnAsErrors", 1);</code>
 *
 * Regardless of the setting, warnings can only be retrieved by calling sqlsrv_errors with either the SQLSRV_ERR_ALL or
 * SQLSRV_ERR_WARNINGS parameter value (see Parameters section below for details). <br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-errors
 * @param int $errorsAndOrWarnings [optional] A predefined constant. This parameter can take one of the values in the
 * following list: SQLSRV_ERR_ALL, SQLSRV_ERR_ERRORS, SQLSRV_ERR_WARNINGS. If no parameter value is supplied, both
 * errors and warnings generated by the last sqlsrv function call are returned.
 * @return array|null An array of arrays, or null. Each array in the returned array contains three key-value pairs. The
 * following table lists each key and its description: <br />
 * SQLSTATE:
 * <ul>
 * <li> For errors that originate from the ODBC driver, the SQLSTATE returned by ODBC.For information about SQLSTATE
 * values for ODBC, see {@link http://go.microsoft.com/fwlink/?linkid=119618 ODBC Error Codes}.</li>
 * <li> For errors that originate from the Microsoft Drivers for PHP for SQL Server, a SQLSTATE of IMSSP.</li>
 * <li> For warnings that originate from the Microsoft Drivers for PHP for SQL Server, a SQLSTATE of 01SSP.</li>
 * </ul>
 * code:
 * <ul>
 * <li>For errors that originate from SQL Server, the native SQL Server error code.</li>
 * <li>For errors that originate from the ODBC driver, the error code returned by ODBC.</li>
 * <li>For errors that originate from the Microsoft Drivers for PHP for SQL Server, the Microsoft Drivers for PHP for SQL Server error code. For more information, see {@link http://msdn.microsoft.com/en-us/library/cc626302.aspx Handling Errors and Warnings}.</li>
 * </ul>
 * message: A description of the error.<br />
 *
 * The array values can also be accessed with numeric keys 0, 1, and 2.<br /><br />
 *
 * If no errors or warnings occur, null is returned.<br />
 */
function sqlsrv_errors($errorsAndOrWarnings = SQLSRV_ERR_ALL) {}

/**
 * <div id="function.sqlsrv-configure" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_configure</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_configure</span> — <span class="dc-title">Changes the driver error handling and logging configurations</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-configure-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_configure</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$setting</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#3A95FF">\$value</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Changes the driver error handling and logging configurations.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-configure-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">setting</span></dt>     <dd>      <p class="para">       The name of the setting to set. The possible values are        "WarningsReturnAsErrors", "LogSubsystems", and "LogSeverity".      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">value</span></dt>     <dd>      <p class="para">       The value of the specified setting. The following table shows possible values:          </p><table class="doctable table">   <caption><strong>Error and Logging Setting Options</strong></caption>       <thead>     <tr>      <th>Setting</th>      <th>Options</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>WarningsReturnAsErrors</td>      <td>1 (<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>) or 0 (<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>)</td>     </tr>     <tr>      <td>LogSubsystems</td>      <td>SQLSRV_LOG_SYSTEM_ALL (-1)       SQLSRV_LOG_SYSTEM_CONN (2)       SQLSRV_LOG_SYSTEM_INIT (1)       SQLSRV_LOG_SYSTEM_OFF (0)       SQLSRV_LOG_SYSTEM_STMT (4)       SQLSRV_LOG_SYSTEM_UTIL (8)</td>     </tr>     <tr>      <td>LogSeverity</td>      <td>SQLSRV_LOG_SEVERITY_ALL (-1)       SQLSRV_LOG_SEVERITY_ERROR (1)       SQLSRV_LOG_SEVERITY_NOTICE (4)       SQLSRV_LOG_SEVERITY_WARNING (2)</td>     </tr>    </tbody>     </table>           </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-configure-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-configure-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><a href="http://msdn.microsoft.com/en-us/library/cc626302.aspx" class="link external">»&nbsp;SQLSRV Error Handling</a>.</li>    <li><a href="http://msdn.microsoft.com/en-us/library/cc296188.aspx" class="link external">»&nbsp;Logging SQLSRV Activity</a>.</li>   </ul>   </div></div>
 * 
 * Changes the driver error handling and logging configurations.
 *
 * <br />Changes the settings for error handling and logging options.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-configure
 * @param string $setting The name of the setting to be configured. See table below for list of settings.
 * @param mixed $value The value to be applied to the setting specified in the $setting parameter. The possible values for this parameter depend on which setting is specified. The following table lists the possible combinations.<br />
 * ClientBufferMaxKBSize (Default: 10240)<br />
 * For more information about client-side queries, see {@link http://msdn.microsoft.com/en-us/library/hh487160.aspx Cursor Types (SQLSRV Driver)}.
 * <ul>
 * <li>A non negative number up to the PHP memory limit.</li>
 * <li>Zero (0) means no limit to the buffer size.</li>
 * </ul>
 * LogSeverity (Default: SQLSRV_LOG_SEVERITY_ERROR )<br />
 * For more information about logging activity, see {@link http://msdn.microsoft.com/en-us/library/cc296188.aspx Logging Activity}.
 * <ul><li>SQLSRV_LOG_SEVERITY_ALL (-1)</li>
 * <li>SQLSRV_LOG_SEVERITY_ERROR (1)</li>
 * <li> SQLSRV_LOG_SEVERITY_NOTICE (4)</li>
 * <li>SQLSRV_LOG_SEVERITY_WARNING (2)</li></ul>
 * WarningsReturnAsErrors (Default: true )<br />
 * For more information about configuring error and warning handling, see {@link http://msdn.microsoft.com/en-us/library/cc626306.aspx How to: Configure Error and Warning Handling Using the SQLSRV Driver}.
 * <ul><li>true (1)</li>
 * <li>false (0)</li></ul>
 * @return bool If sqlsrv_configure is called with an unsupported setting or value, the function returns false. Otherwise, the function returns true.
 */
function sqlsrv_configure($setting, $value) {}

/**
 * <div id="function.sqlsrv-get-config" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_get_config</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_get_config</span> — <span class="dc-title">Returns the value of the specified configuration setting</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-get-config-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_get_config</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$setting</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Returns the value of the specified configuration setting.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-get-config-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">setting</span></dt>     <dd>      <p class="para">       The name of the setting for which the value is returned. For a list of        configurable settings, see <span class="function">{@link sqlsrv_configure()}</span>.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-get-config-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the value of the specified setting. If an invalid setting is specified,    <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> is returned.  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-get-config-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_configure()} - Changes the driver error handling and logging configurations</span></li>   </ul>   </div></div>
 * 
 * Returns the current value of the specified configuration setting.
 *
 * <br />If false is returned by sqlsrv_get_config, you must call {@link sqlsrv_errors() sqlsrv_errors} to determine if an error occurred or
 * if false is the value of the setting specified by the $setting parameter.<br />
 *
 * For a list of configurable settings, see {@link sqlsrv_configure() sqlsrv_configure}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-get-config
 * @param string $setting The configuration setting for which the value is returned.
 * @return mixed|false The value of the setting specified by the $setting parameter. If an invalid setting is specified, false is returned and an error is added to the error collection.
 */
function sqlsrv_get_config($setting) {}

/**
 * <div id="function.sqlsrv-prepare" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_prepare</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_prepare</span> — <span class="dc-title">Prepares a query for execution</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-prepare-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_prepare</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$conn</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$sql</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$params</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Prepares a query for execution. This function is ideal for preparing a query    that will be executed multiple times with different parameter values.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-prepare-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">conn</span></dt>     <dd>      <p class="para">       A connection resource returned by <span class="function">{@link sqlsrv_connect()}</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">sql</span></dt>     <dd>      <p class="para">       The string that defines the query to be prepared and executed.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">params</span></dt>     <dd>      <p class="para">       An array specifying parameter information when executing a parameterized        query. Array elements can be any of the following:       </p><ul class="simplelist">        <li>A literal value</li>        <li>A PHP variable</li>        <li>An array with this structure:         array(\$value [, \$direction [, \$phpType [, \$sqlType]]])</li>       </ul>       The following table describes the elements in the array structure above:              <table class="doctable table">       <caption><strong>Array structure</strong></caption>               <thead>         <tr>          <th>Element</th>          <th>Description</th>         </tr>        </thead>        <tbody class="tbody">         <tr>          <td>\$value</td>          <td>A literal value, a PHP variable, or a PHP by-reference variable.</td>         </tr>         <tr>          <td>\$direction (optional)</td>          <td>One of the following SQLSRV constants used to indicate the           parameter direction: SQLSRV_PARAM_IN, SQLSRV_PARAM_OUT, SQLSRV_PARAM_INOUT.           The default value is SQLSRV_PARAM_IN.         </td>         </tr>         <tr>          <td>\$phpType (optional)</td>          <td>A SQLSRV_PHPTYPE_* constant that specifies PHP data type of the           returned value.</td>         </tr>         <tr>          <td>\$sqlType (optional)</td>          <td>A SQLSRV_SQLTYPE_* constant that specifies the SQL Server data           type of the input value.</td>         </tr>        </tbody>             </table>     </dd>             <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">       An array specifying query property options. The supported keys are described        in the following table:      </p>      <table class="doctable table">       <caption><strong>Query Options</strong></caption>               <thead>         <tr>          <th>Key</th>          <th>Values</th>          <th>Description</th>         </tr>        </thead>        <tbody class="tbody">         <tr>          <td>QueryTimeout</td>          <td>A positive integer value.</td>          <td>Sets the query timeout in seconds. By default, the driver will           wait indefinitely for results.</td>         </tr>         <tr>          <td>SendStreamParamsAtExec</td>          <td><strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> (the default is <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>)</td>          <td>Configures the driver to send all stream data at execution (<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>),           or to send stream data in chunks (<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>). By default, the value is set to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>.           For more information, see <span class="function">{@link sqlsrv_send_stream_data()}</span>.</td>         </tr>         <tr>          <td>Scrollable</td>          <td>SQLSRV_CURSOR_FORWARD, SQLSRV_CURSOR_STATIC, SQLSRV_CURSOR_DYNAMIC,           or SQLSRV_CURSOR_KEYSET</td>          <td>See <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>           in the Microsoft SQLSRV documentation.</td>         </tr>        </tbody>             </table>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-prepare-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a statement resource on success and <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if an error occurred.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-prepare-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2144">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_prepare()</strong></span> example</strong></p>    <div class="example-contents"><p>    This example demonstrates how to prepare a statement with <span class="function"><strong>sqlsrv_prepare()</strong></span>     and re-execute it multiple times (with different parameter values) using <span class="function">{@link sqlsrv_execute()}</span>.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE Table_1<br>        SET OrderQty = ?<br>        WHERE SalesOrderID = ?"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// Initialize parameters and prepare the statement. <br>// Variables \$qty and \$id are bound to the statement, \$stmt.<br></span><span style="color: #9876AA">\$qty </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">; </span><span style="color: #9876AA">\$id </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_prepare</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql</span><span style="color: #007700">, array( &amp;</span><span style="color: #9876AA">\$qty</span><span style="color: #007700">, &amp;</span><span style="color: #9876AA">\$id</span><span style="color: #007700">));<br>if( !</span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Set up the SalesOrderDetailID and OrderQty information. <br>// This array maps the order ID to order quantity in key=&gt;value pairs.<br></span><span style="color: #9876AA">\$orders </span><span style="color: #007700">= array( </span><span style="color: #9876AA">1</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">10</span><span style="color: #007700">, </span><span style="color: #9876AA">2</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">20</span><span style="color: #007700">, </span><span style="color: #9876AA">3</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">30</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Execute the statement for each order.<br></span><span style="color: #007700">foreach( </span><span style="color: #9876AA">\$orders </span><span style="color: #007700">as </span><span style="color: #9876AA">\$id </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">\$qty</span><span style="color: #007700">) {<br>    </span><span style="color: #FF8000">// Because \$id and \$qty are bound to \$stmt1, their updated<br>    // values are used with each execution of the statement. <br>    </span><span style="color: #007700">if( </span><span style="color: #9876AA">sqlsrv_execute</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">) === </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>          die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>    }<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.sqlsrv-prepare-notes">  <h3 class="title">注释</h3>  <p class="para">   When you prepare a statement that uses variables as parameters, the variables    are bound to the statement. This means that if you update the values of the    variables, the next time you execute the statement it will run with updated    parameter values. For statements that you plan to execute only once, use    <span class="function">{@link sqlsrv_query()}</span>.  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-prepare-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_execute()} - Executes a statement prepared with sqlsrv_prepare</span></li>    <li><span class="function">{@link sqlsrv_query()} - Prepares and executes a query</span></li>   </ul>   </div></div>
 * 
 * Prepares a Transact-SQL query without executing it. Implicitly binds parameters.
 *
 * <br />Creates a statement resource associated with the specified connection. This function is useful for execution of
 * multiple queries.<br />
 *
 * Variables passed as query parameters should be passed by reference instead of by value. For example, pass
 * &$myVariable instead of $myVariable. A PHP warning will be raised when a query with by-value parameters is
 * executed.<br />
 *
 * When you prepare a statement that uses variables as parameters, the variables are bound to the statement. That means
 * that if you update the values of the variables, the next time you execute the statement it will run with updated
 * parameter values.<br />
 *
 * The combination of sqlsrv_prepare and {@link sqlsrv_execute() sqlsrv_execute} separates statement preparation and
 * statement execution in to two function calls and can be used to execute parameterized queries. This function is ideal
 * to execute a statement multiple times with different parameter values for each execution.<br />
 *
 * For alternative strategies for writing and reading large amounts of information, see
 * {@link http://go.microsoft.com/fwlink/?LinkId=104225 Batches of SQL Statements} and
 * {@link http://go.microsoft.com/fwlink/?LinkId=104226 BULK INSERT}.<br />
 *
 * For more information, see
 * {@link http://msdn.microsoft.com/en-us/library/cc626303.aspx How to: Retrieve Output Parameters Using the SQLSRV Driver.}<br />
 *
 * For additional Information see:
 * <ul><li>{@link http://msdn.microsoft.com/en-us/library/cc644934.aspx Using Directional Parameters}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296202.aspx Updating Data (Microsoft Drivers for PHP for SQL Server)}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296201.aspx How to: Perform Parameterized Queries}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296191.aspx How to: Send Data as a Stream}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}</li></ul>
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-prepare
 * @param resource $conn The connection resource associated with the created statement.
 * @param string $tsql The Transact-SQL expression that corresponds to the created statement.
 * @param array $params [optional]: An array of values that correspond to parameters in a parameterized query. Each
 * element of the array can be one of the following: a literal value, a reference to a PHP variable, or an array with
 * the following structure:
 * <code>array(&$value [, $direction [, $phpType [, $sqlType]]])</code>
 * The following table describes these array elements:
 * <ul><li>&$value - A literal value or a reference to a PHP variable.</li>
 * <li>$direction[optional] - One of the following SQLSRV_PARAM_* constants used to indicate the parameter direction:
 * SQLSRV_PARAM_IN, SQLSRV_PARAM_OUT, SQLSRV_PARAM_INOUT. The default value is SQLSRV_PARAM_IN. For more information
 * about PHP constants, see
 * {@link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server Constants (Microsoft Drivers for PHP for SQL Server)}.</li>
 * <li>$phpType[optional] - A SQLSRV_PHPTYPE_* constant that specifies PHP data type of the returned value.</li>
 * <li>$sqlType[optional] - A SQLSRV_SQLTYPE_* constant that specifies the SQL Server data type of the input value.</li></ul>
 * @param array $options [optional]: An associative array that sets query properties. The table below lists the
 * supported keys and corresponding values:<br />
 *
 * QueryTimeout (int) - Sets the query timeout in seconds. By default, the driver will wait indefinitely for results.
 * Any positive integer value.<br />
 *
 * SendStreamParamsAtExec (bool) - Configures the driver to send all stream data at execution (true), or to send stream
 * data in chunks (false). By default, the value is set to true. For more information, see
 * {@link sqlsrv_send_stream_data() sqlsrv_send_stream_data}.<br />
 *
 * Scrollable - For more information about these values, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.
 * <ul><li>SQLSRV_CURSOR_FORWARD</li>
 * <li>SQLSRV_CURSOR_STATIC</li>
 * <li>SQLSRV_CURSOR_DYNAMIC</li>
 * <li>SQLSRV_CURSOR_KEYSET</li>
 * <li>SQLSRV_CURSOR_CLIENT_BUFFERED</li></ul>
 * @return resource|false A statement resource. If the statement resource cannot be created, false is returned.
 */
function sqlsrv_prepare($conn, $tsql, $params = [], $options = []) {}

/**
 * <div id="function.sqlsrv-execute" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_execute</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_execute</span> — <span class="dc-title">Executes a statement prepared with <span class="function">{@link sqlsrv_prepare()}</span></span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-execute-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_execute</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Executes a statement prepared with <span class="function">{@link sqlsrv_prepare()}</span>. This    function is ideal for executing a prepared statement multiple times with    different parameter values.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-execute-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       A statement resource returned by <span class="function">{@link sqlsrv_prepare()}</span>.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-execute-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-execute-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2132">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_execute()</strong></span> example</strong></p>    <div class="example-contents"><p>    This example demonstrates how to prepare a statement with     <span class="function">{@link sqlsrv_prepare()}</span> and re-execute it multiple times (with     different parameter values) using <span class="function"><strong>sqlsrv_execute()</strong></span>.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE Table_1<br>        SET OrderQty = ?<br>        WHERE SalesOrderID = ?"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// Initialize parameters and prepare the statement. <br>// Variables \$qty and \$id are bound to the statement, \$stmt.<br></span><span style="color: #9876AA">\$qty </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">; </span><span style="color: #9876AA">\$id </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_prepare</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql</span><span style="color: #007700">, array( &amp;</span><span style="color: #9876AA">\$qty</span><span style="color: #007700">, &amp;</span><span style="color: #9876AA">\$id</span><span style="color: #007700">));<br>if( !</span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Set up the SalesOrderDetailID and OrderQty information. <br>// This array maps the order ID to order quantity in key=&gt;value pairs.<br></span><span style="color: #9876AA">\$orders </span><span style="color: #007700">= array( </span><span style="color: #9876AA">1</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">10</span><span style="color: #007700">, </span><span style="color: #9876AA">2</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">20</span><span style="color: #007700">, </span><span style="color: #9876AA">3</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">30</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Execute the statement for each order.<br></span><span style="color: #007700">foreach( </span><span style="color: #9876AA">\$orders </span><span style="color: #007700">as </span><span style="color: #9876AA">\$id </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">\$qty</span><span style="color: #007700">) {<br>    </span><span style="color: #FF8000">// Because \$id and \$qty are bound to \$stmt1, their updated<br>    // values are used with each execution of the statement. <br>    </span><span style="color: #007700">if( </span><span style="color: #9876AA">sqlsrv_execute</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">) === </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>          die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>    }<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.sqlsrv-execute-notes">  <h3 class="title">注释</h3>  <p class="para">   When you prepare a statement that uses variables as parameters, the variables    are bound to the statement. This means that if you update the values of the    variables, the next time you execute the statement it will run with updated    parameter values. For statements that you plan to execute only once, use    <span class="function">{@link sqlsrv_query()}</span>.  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-execute-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_prepare()} - Prepares a query for execution</span></li>    <li><span class="function">{@link sqlsrv_query()} - Prepares and executes a query</span></li>   </ul>   </div></div>
 * 
 * Executes a statement prepared with {@see sqlsrv_prepare}
 *
 * <br />Executes a previously prepared statement. See {@link sqlsrv_prepare() sqlsrv_prepare} for information on preparing a statement
 * for execution.<br />
 *
 * This function is ideal for executing a prepared statement multiple times with different parameter values.<br />
 *
 * For additional Information see:
 * <ul><li>{@link sqlsrv_query() sqlsrv_query}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296201.aspx How to: Perform Parameterized Queries}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}</li></ul>
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-execute
 * @param resource $stmt A resource specifying the statement to be executed. For more information about how to create a
 * statement resource, see {@link sqlsrv_prepare() sqlsrv_prepare}.
 * @return bool A Boolean value: true if the statement was successfully executed. Otherwise, false.
 */
function sqlsrv_execute($stmt) {}

/**
 * <div id="function.sqlsrv-query" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_query</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_query</span> — <span class="dc-title">Prepares and executes a query</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-query-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_query</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$conn</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$sql</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$params</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$options</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Prepares and executes a query.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-query-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">conn</span></dt>     <dd>      <p class="para">       A connection resource returned by <span class="function">{@link sqlsrv_connect()}</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">sql</span></dt>     <dd>      <p class="para">       The string that defines the query to be prepared and executed.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">params</span></dt>     <dd>      <p class="para">       An array specifying parameter information when executing a parameterized query.        Array elements can be any of the following:       </p><ul class="simplelist">        <li>A literal value</li>        <li>A PHP variable</li>        <li>An array with this structure:         array(\$value [, \$direction [, \$phpType [, \$sqlType]]])</li>       </ul>       The following table describes the elements in the array structure above:              <table class="doctable table">       <caption><strong>Array structure</strong></caption>               <thead>         <tr>          <th>Element</th>          <th>Description</th>         </tr>        </thead>        <tbody class="tbody">         <tr>          <td>\$value</td>          <td>A literal value, a PHP variable, or a PHP by-reference variable.</td>         </tr>         <tr>          <td>\$direction (optional)</td>          <td>One of the following SQLSRV constants used to indicate the           parameter direction: SQLSRV_PARAM_IN, SQLSRV_PARAM_OUT, SQLSRV_PARAM_INOUT.           The default value is SQLSRV_PARAM_IN.</td>         </tr>         <tr>          <td>\$phpType (optional)</td>          <td>A SQLSRV_PHPTYPE_* constant that specifies PHP data type of the           returned value.</td>         </tr>         <tr>          <td>\$sqlType (optional)</td>          <td>A SQLSRV_SQLTYPE_* constant that specifies the SQL Server data           type of the input value.</td>         </tr>        </tbody>             </table>     </dd>             <dt><span class="parameter" style="color:#3A95FF">options</span></dt>     <dd>      <p class="para">       An array specifying query property options. The supported keys are described        in the following table:      </p>      <table class="doctable table">       <caption><strong>Query Options</strong></caption>               <thead>         <tr>          <th>Key</th>          <th>Values</th>          <th>Description</th>         </tr>        </thead>        <tbody class="tbody">         <tr>          <td>QueryTimeout</td>          <td>A positive integer value.</td>          <td>Sets the query timeout in seconds. By default, the driver will           wait indefinitely for results.</td>         </tr>         <tr>          <td>SendStreamParamsAtExec</td>          <td><strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> (the default is <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>)</td>          <td>Configures the driver to send all stream data at execution (<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>),           or to send stream data in chunks (<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>). By default, the value is set           to <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>. For more information, see <span class="function">{@link sqlsrv_send_stream_data()}</span>.</td>         </tr>         <tr>          <td>Scrollable</td>          <td>SQLSRV_CURSOR_FORWARD, SQLSRV_CURSOR_STATIC, SQLSRV_CURSOR_DYNAMIC,           or SQLSRV_CURSOR_KEYSET</td>          <td>See <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying           a Cursor Type and Selecting Rows</a> in the Microsoft SQLSRV documentation.</td>         </tr>        </tbody>             </table>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-query-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns a statement resource on success and <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if an error occurred.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-query-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2145">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_query()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password" </span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO Table_1 (id, data) VALUES (?, ?)"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$params </span><span style="color: #007700">= array(</span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"some data"</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql</span><span style="color: #007700">, </span><span style="color: #9876AA">\$params</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.sqlsrv-query-notes">  <h3 class="title">注释</h3>  <p class="para">   For statements that you plan to execute only once, use <span class="function"><strong>sqlsrv_query()</strong></span>.    If you intend to re-execute a statement with different parameter values, use    the combination of <span class="function">{@link sqlsrv_prepare()}</span> and <span class="function">{@link sqlsrv_execute()}</span>.  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-query-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_prepare()} - Prepares a query for execution</span></li>    <li><span class="function">{@link sqlsrv_execute()} - Executes a statement prepared with sqlsrv_prepare</span></li>   </ul>   </div></div>
 * 
 * Prepares and executes a Transact-SQL query.
 *
 * <br />Prepares and executes a statement.<br />
 *
 * The sqlsrv_query function is well-suited for one-time queries and should be the default choice to execute queries
 * unless special circumstances apply. This function provides a streamlined method to execute a query with a minimum
 * amount of code. The sqlsrv_query function does both statement preparation and statement execution, and can be used to
 * execute parameterized queries.<br />
 *
 * For more information, see
 * {@link http://msdn.microsoft.com/en-us/library/cc626303.aspx How to: Retrieve Output Parameters Using the SQLSRV Driver.}<br />
 *
 * For additional Information see:
 * <ul><li>{@link http://msdn.microsoft.com/en-us/library/cc644934.aspx Using Directional Parameters}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296202.aspx Updating Data (Microsoft Drivers for PHP for SQL Server)}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296201.aspx How to: Perform Parameterized Queries}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296191.aspx How to: Send Data as a Stream}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}</li></ul>
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-query
 * @param resource $conn The connection resource associated with the prepared statement.
 * @param string $tsql The Transact-SQL expression that corresponds to the prepared statement.
 * @param array $params [optional]: An array of values that correspond to parameters in a parameterized query. Each
 * element of the array can be one of the following: a literal value, a reference to a PHP variable, or an array with
 * the following structure:
 * <code>array($value [, $direction [, $phpType [, $sqlType]]])</code>
 * The following table describes these array elements:
 * <ul><li>&$value - A literal value, a PHP variable, or a PHP by-reference variable.</li>
 * <li>$direction[optional] - One of the following SQLSRV_PARAM_* constants used to indicate the parameter direction:
 * SQLSRV_PARAM_IN, SQLSRV_PARAM_OUT, SQLSRV_PARAM_INOUT. The default value is SQLSRV_PARAM_IN. For more information
 * about PHP constants, see
 * {@link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server Constants (Microsoft Drivers for PHP for SQL Server)}.</li>
 * <li>$phpType[optional] - A SQLSRV_PHPTYPE_* constant that specifies PHP data type of the returned value.</li>
 * <li>$sqlType[optional] - A SQLSRV_SQLTYPE_* constant that specifies the SQL Server data type of the input value.</li></ul>
 * @param array $options [optional]: An associative array that sets query properties. The table below lists the
 * supported keys and corresponding values:<br />
 *
 * QueryTimeout (int) - Sets the query timeout in seconds. By default, the driver will wait indefinitely for results.
 * Any positive integer value.<br />
 *
 * SendStreamParamsAtExec (bool) - Configures the driver to send all stream data at execution (true), or to send stream
 * data in chunks (false). By default, the value is set to true. For more information, see
 * {@link sqlsrv_send_stream_data() sqlsrv_send_stream_data}.<br />
 *
 * Scrollable - For more information about these values, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.
 * <ul><li>SQLSRV_CURSOR_FORWARD</li>
 * <li>SQLSRV_CURSOR_STATIC</li>
 * <li>SQLSRV_CURSOR_DYNAMIC</li>
 * <li>SQLSRV_CURSOR_KEYSET</li>
 * <li>SQLSRV_CURSOR_CLIENT_BUFFERED</li></ul>
 * @return resource|false A statement resource. If the statement cannot be created and/or executed, false is returned.
 */
function sqlsrv_query($conn, $tsql, $params = [], $options = []) {}

/**
 * <div id="function.sqlsrv-fetch" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_fetch</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_fetch</span> — <span class="dc-title">Makes the next row in a result set available for reading</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-fetch-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">      <span class="methodname" style="color:#CC7832"><strong>sqlsrv_fetch</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$row</span><span class="initializer"> = ?</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$offset</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Makes the next row in a result set available for reading. Use    <span class="function">{@link sqlsrv_get_field()}</span> to read the fields of the row.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-fetch-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       A statement resource created by executing <span class="function">{@link sqlsrv_query()}</span>        or <span class="function">{@link sqlsrv_execute()}</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">row</span></dt>     <dd>      <p class="para">       The row to be accessed. This parameter can only be used if the specified        statement was prepared with a scrollable cursor. In that case, this parameter        can take on one of the following values:       </p><ul class="simplelist">        <li>SQLSRV_SCROLL_NEXT</li>        <li>SQLSRV_SCROLL_PRIOR</li>        <li>SQLSRV_SCROLL_FIRST</li>        <li>SQLSRV_SCROLL_LAST</li>        <li>SQLSRV_SCROLL_ABSOLUTE</li>        <li>SQLSRV_SCROLL_RELATIVE</li>       </ul>           </dd>             <dt><span class="parameter" style="color:#3A95FF">offset</span></dt>     <dd>      <p class="para">       Specifies the row to be accessed if the row parameter is set to       <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-absolute">SQLSRV_SCROLL_ABSOLUTE</a></span></strong> or       <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-relative">SQLSRV_SCROLL_RELATIVE</a></span></strong>. Note that the first row in       a result set has index 0.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-fetch-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the next row of a result set was successfully retrieved,    <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if an error occurs, and <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> if there are no more rows in the result set.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-fetch-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2133">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_fetch()</strong></span> example</strong></p>    <div class="example-contents"><p>    The following example demonstrates how to retrieve a row with     <span class="function"><strong>sqlsrv_fetch()</strong></span> and get the row fields with     <span class="function">{@link sqlsrv_get_field()}</span>.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT Name, Comment <br>        FROM Table_1<br>        WHERE ReviewID=1"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Make the first (and in this case, only) row of the result set available for reading.<br></span><span style="color: #007700">if( </span><span style="color: #9876AA">sqlsrv_fetch</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Get the row fields. Field indices start at 0 and must be retrieved in order.<br>// Retrieving row fields by name is not supported by sqlsrv_get_field.<br></span><span style="color: #9876AA">\$name </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_get_field</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">\$name</span><span style="color: #DD0000">: "</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$comment </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_get_field</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">\$comment</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-fetch-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_get_field()} - Gets field data from the currently selected row</span></li>    <li><span class="function">{@link sqlsrv_fetch_array()} - Returns a row as an array</span></li>    <li><span class="function">{@link sqlsrv_fetch_object()} - Retrieves the next row of data in a result set as an object</span></li>   </ul>   </div></div>
 * 
 * Makes the next row in a result set available for reading.
 *
 * <br />Makes the next row of a result set available for reading. Use {@link sqlsrv_get_field() sqlsrv_get_field} to read fields of
 * the row.<br />
 *
 * A statement must be executed before results can be retrieved. For information on executing a statement, see {@link sqlsrv_query() sqlsrv_query}
 * and {@link sqlsrv_execute() sqlsrv_execute}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-fetch
 * @param resource|null $stmt A statement resource corresponding to an executed statement.
 * @param int|null $row [optional]: One of the following values, specifying the row to access in a result set that uses a
 * scrollable cursor: SQLSRV_SCROLL_NEXT, SQLSRV_SCROLL_PRIOR, SQLSRV_SCROLL_FIRST, SQLSRV_SCROLL_LAST,
 * SQLSRV_SCROLL_ABSOLUTE, SQLSRV_SCROLL_RELATIVE. <br />
 *
 * For more information on these values, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.
 * @param int|null $offset [optional] Used with SQLSRV_SCROLL_ABSOLUTE and SQLSRV_SCROLL_RELATIVE to specify the row to
 * retrieve. The first record in the result set is 0.
 * @return bool|null If the next row of the result set was successfully retrieved, true is returned. If there are
 * no more results in the result set, null is returned. If an error occurred, false is returned.
 */
function sqlsrv_fetch($stmt, $row = null, $offset = null) {}

/**
 * <div id="function.sqlsrv-get-field" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_get_field</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_get_field</span> — <span class="dc-title">Gets field data from the currently selected row</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-get-field-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_get_field</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$fieldIndex</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$getAsType</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Gets field data from the currently selected row. Fields must be accessed in    order. Field indices start at 0.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-get-field-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       A statement resource returned by <span class="function">{@link sqlsrv_query()}</span> or        <span class="function">{@link sqlsrv_execute()}</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">fieldIndex</span></dt>     <dd>      <p class="para">       The index of the field to be retrieved. Field indices start at 0. Fields        must be accessed in order. i.e. If you access field index 1, then field        index 0 will not be available.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">getAsType</span></dt>     <dd>      <p class="para">       The PHP data type for the returned field data. If this parameter is not        set, the field data will be returned as its default PHP data type.       For information about default PHP data types, see        <a href="http://msdn.microsoft.com/en-us/library/cc296193.aspx" class="link external">»&nbsp;Default PHP Data Types</a>        in the Microsoft SQLSRV documentation.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-get-field-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns data from the specified field on success. Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-get-field-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2139">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_get_field()</strong></span> example</strong></p>    <div class="example-contents"><p>    The following example demonstrates how to retrieve a row with     <span class="function">{@link sqlsrv_fetch()}</span> and get the row fields with     <span class="function"><strong>sqlsrv_get_field()</strong></span>.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT Name, Comment <br>        FROM Table_1<br>        WHERE ReviewID=1"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Make the first (and in this case, only) row of the result set available for reading.<br></span><span style="color: #007700">if( </span><span style="color: #9876AA">sqlsrv_fetch</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Get the row fields. Field indices start at 0 and must be retrieved in order.<br>// Retrieving row fields by name is not supported by sqlsrv_get_field.<br></span><span style="color: #9876AA">\$name </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_get_field</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">, </span><span style="color: #9876AA">0</span><span style="color: #007700">);<br>echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">\$name</span><span style="color: #DD0000">: "</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$comment </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_get_field</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">);<br>echo </span><span style="color: #9876AA">\$comment</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-get-field-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_fetch()} - Makes the next row in a result set available for reading</span></li>    <li><span class="function">{@link sqlsrv_fetch_array()} - Returns a row as an array</span></li>    <li><span class="function">{@link sqlsrv_fetch_object()} - Retrieves the next row of data in a result set as an object</span></li>   </ul>   </div></div>
 * 
 * Retrieves a field in the current row by index. The PHP return type can be specified.
 *
 * <br />Retrieves data from the specified field of the current row. Field data must be accessed in order. For example,
 * data from the first field cannot be accessed after data from the second field has been accessed.<br />
 *
 * The combination of {@link sqlsrv_fetch() sqlsrv_fetch} and
 * {@link sqlsrv_get_field() sqlsrv_get_field} provides forward-only access to data.<br />
 *
 * The combination of {@link sqlsrv_fetch() sqlsrv_fetch} and
 * {@link sqlsrv_get_field() sqlsrv_get_field} loads only one
 * field of a result set row into script memory and allows PHP return type specification. (For information about how to
 * specify the PHP return type, see {@link http://msdn.microsoft.com/en-us/library/cc296208.aspx How to: Specify PHP Data Types}.)
 * This combination of functions also allows data to be retrieved as a stream. (For information about retrieving data
 * as a stream, see {@link http://msdn.microsoft.com/en-us/library/cc296155.aspx Retrieving Data as a Stream Using the SQLSRV Driver}.)<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-get-field
 * @param resource $stmt A statement resource corresponding to an executed statement.
 * @param int $field_index The index of the field to be retrieved. Indexes begin at zero.
 * @param int $get_as_type [optional] A SQLSRV constant (SQLSRV_PHPTYPE_*) that determines the PHP data type for the returned
 * data. For information about supported data types, see
 * {@link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server Constants (Microsoft Drivers for PHP for SQL Server)}.
 * If no return type is specified, a default PHP type will be returned. For information about default PHP types, see
 * {@link http://msdn.microsoft.com/en-us/library/cc296193.aspx Default PHP Data Types}. For information about
 * specifying PHP data types, see {@link http://msdn.microsoft.com/en-us/library/cc296208.aspx How to: Specify PHP Data Types}.
 * @return mixed The field data. You can specify the PHP data type of the returned data by using the $getAsType
 * parameter. If no return data type is specified, the default PHP data type will be returned. For information about
 * default PHP types, see {@link http://msdn.microsoft.com/en-us/library/cc296193.aspx Default PHP Data Types}. For
 * information about specifying PHP data types,
 * see {@link http://msdn.microsoft.com/en-us/library/cc296208.aspx How to: Specify PHP Data Types}.
 */
function sqlsrv_get_field($stmt, $field_index, $get_as_type = null) {}

/**
 * <div id="function.sqlsrv-fetch-array" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_fetch_array</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_fetch_array</span> — <span class="dc-title">Returns a row as an array</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-fetch-array-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_fetch_array</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$fetchType</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$row</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$offset</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Returns the next available row of data as an associative array, a numeric    array, or both (the default).  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-fetch-array-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       A statement resource returned by sqlsrv_query or sqlsrv_prepare.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">fetchType</span></dt>     <dd>      <p class="para">       A predefined constant specifying the type of array to return. Possible        values are <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-fetch-assoc">SQLSRV_FETCH_ASSOC</a></span></strong>,        <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-fetch-numeric">SQLSRV_FETCH_NUMERIC</a></span></strong>, and        <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-fetch-both">SQLSRV_FETCH_BOTH</a></span></strong> (the default).      </p>      <p class="para">      A fetch type of SQLSRV_FETCH_ASSOC should not be used when consuming a       result set with multiple columns of the same name.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">row</span></dt>     <dd>      <p class="para">       Specifies the row to access in a result set that uses a scrollable cursor.        Possible values are <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-next">SQLSRV_SCROLL_NEXT</a></span></strong>,        <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-prior">SQLSRV_SCROLL_PRIOR</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-first">SQLSRV_SCROLL_FIRST</a></span></strong>,        <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-last">SQLSRV_SCROLL_LAST</a></span></strong>, <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-absolute">SQLSRV_SCROLL_ABSOLUTE</a></span></strong> and,        <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-relative">SQLSRV_SCROLL_RELATIVE</a></span></strong> (the default). When this parameter        is specified, the <span class="parameter" style="color:#3A95FF">fetchType</span> must be explicitly defined.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">offset</span></dt>     <dd>      <p class="para">       Specifies the row to be accessed if the row parameter is set to       <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-absolute">SQLSRV_SCROLL_ABSOLUTE</a></span></strong> or       <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-relative">SQLSRV_SCROLL_RELATIVE</a></span></strong>. Note that the first row in       a result set has index 0.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-fetch-array-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array on success, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> if there are no more rows to return, and    <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if an error occurs.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-fetch-array-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2134">    <p><strong>示例 #1 Retrieving an associative array.</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\instanceName"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT FirstName, LastName FROM SomeTable"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql </span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">) );<br>}<br><br>while( </span><span style="color: #9876AA">\$row </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_fetch_array</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">, </span><span style="color: #9876AA">SQLSRV_FETCH_ASSOC</span><span style="color: #007700">) ) {<br>      echo </span><span style="color: #9876AA">\$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'LastName'</span><span style="color: #007700">].</span><span style="color: #DD0000">", "</span><span style="color: #007700">.</span><span style="color: #9876AA">\$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'FirstName'</span><span style="color: #007700">].</span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #9876AA">sqlsrv_free_stmt</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>    <p class="para">   </p><div class="example" id="example-2135">    <p><strong>示例 #2 Retrieving a numeric array.</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\instanceName"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT FirstName, LastName FROM SomeTable"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql </span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">) );<br>}<br><br>while( </span><span style="color: #9876AA">\$row </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_fetch_array</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">, </span><span style="color: #9876AA">SQLSRV_FETCH_NUMERIC</span><span style="color: #007700">) ) {<br>      echo </span><span style="color: #9876AA">\$row</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">].</span><span style="color: #DD0000">", "</span><span style="color: #007700">.</span><span style="color: #9876AA">\$row</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">].</span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">;<br>}<br><br></span><span style="color: #9876AA">sqlsrv_free_stmt</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.sqlsrv-fetch-array-notes">  <h3 class="title">注释</h3>  <p class="para">   Not specifying the <span class="parameter" style="color:#3A95FF">fetchType</span> or explicitly using the    <strong><span>SQLSRV_FETCH_TYPE</span></strong> constant in the examples above will    return an array that has both associative and numeric keys.   </p>  <p class="para">   If more than one column is returned with the same name, the last column will    take precedence. To avoid field name collisions, use aliases.   </p>  <p class="para">  If a column with no name is returned, the associative key for the array element   will be an empty string ("").  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-fetch-array-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_connect()} - Opens a connection to a Microsoft SQL Server database</span></li>    <li><span class="function">{@link sqlsrv_query()} - Prepares and executes a query</span></li>    <li><span class="function">{@link sqlsrv_errors()} - Returns error and warning information about the last SQLSRV operation performed</span></li>    <li><span class="function">{@link sqlsrv_fetch()} - Makes the next row in a result set available for reading</span></li>   </ul>   </div></div>
 * 
 * Retrieves the next row of data as a numerically indexed array, an associative array, or both.
 *
 * <br />If a column with no name is returned, the associative key for the array element will be an empty string (""). For
 * example, consider this Transact-SQL statement that inserts a value into a database table and retrieves the
 * server-generated primary key:
 * <code>  INSERT INTO Production.ProductPhoto (LargePhoto) VALUES (?);
 * SELECT SCOPE_IDENTITY()</code>
 * If the result set returned by the SELECT SCOPE_IDENTITY() portion of this statement is retrieved as an associative
 * array, the key for the returned value will be an empty string ("") because the returned column has no name. To avoid
 * this, you can retrieve the result as a numeric array, or you can specify a name for the returned column in the
 * Transact-SQL statement. The following is one way to specify a column name in Transact-SQL:
 * <code>SELECT SCOPE_IDENTITY() AS PictureID</code>
 * If a result set contains multiple columns without names, the value of the last unnamed column will be assigned to the
 * empty string ("") key.<br />
 *
 * The sqlsrv_fetch_array function always returns data according to the
 * {@link http://msdn.microsoft.com/en-us/library/cc296193.aspx Default PHP Data Types}. For information about
 * how to specify the PHP data type,
 * see {@link http://msdn.microsoft.com/en-us/library/cc296208.aspx How to: Specify PHP Data Types}.<br />
 *
 * If a field with no name is retrieved, the associative key for the array element will be an empty string (""). For
 * more information, see {@link sqlsrv_fetch_array() sqlsrv_fetch_array}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296160.aspx Retrieving Data} and
 * {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-fetch-array
 * @param resource|null $stmt A statement resource corresponding to an executed statement.
 * @param int $fetch_type [optional] A predefined constant. This parameter can take on one of the values listed in the
 * following table:
 * <ul><li>SQLSRV_FETCH_NUMERIC - The next row of data is returned as a numeric array.</li>
 * <li>SQLSRV_FETCH_ASSOC - The next row of data is returned as an associative array. The array keys are the column
 * names in the result set.</li>
 * <li>SQLSRV_FETCH_BOTH - The next row of data is returned as both a numeric array and an associative array. This is
 * the default value. </li></ul>
 * @param int|null $row [optional]: One of the following values, specifying the row to access in a result set that uses a
 * scrollable cursor: SQLSRV_SCROLL_NEXT, SQLSRV_SCROLL_PRIOR, SQLSRV_SCROLL_FIRST, SQLSRV_SCROLL_LAST,
 * SQLSRV_SCROLL_ABSOLUTE, SQLSRV_SCROLL_RELATIVE. <br />
 *
 * For more information on these values, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.
 * @param int|null $offset [optional] Used with SQLSRV_SCROLL_ABSOLUTE and SQLSRV_SCROLL_RELATIVE to specify the row to
 * retrieve. The first record in the result set is 0.
 * @return array|null|false If a row of data is retrieved, an array is returned. If there are no more rows to retrieve, null is returned. If an error occurs, false is returned.
 */
function sqlsrv_fetch_array($stmt, $fetch_type = null, $row = null, $offset = null) {}

/**
 * <div id="function.sqlsrv-fetch-object" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_fetch_object</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_fetch_object</span> — <span class="dc-title">Retrieves the next row of data in a result set as an object</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-fetch-object-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_fetch_object</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$className</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> <span class="parameter" style="color:#3A95FF">\$ctorParams</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$row</span><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$offset</span><span class="initializer"> = ?</span></span><br>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Retrieves the next row of data in a result set as an instance of the specified    class with properties that match the row field names and values that correspond    to the row field values.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-fetch-object-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       A statement resource created by <span class="function">{@link sqlsrv_query()}</span> or        <span class="function">{@link sqlsrv_execute()}</span>.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">className</span></dt>     <dd>      <p class="para">       The name of the class to instantiate. If no class name is specified,        stdClass is instantiated.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">ctorParams</span></dt>     <dd>      <p class="para">       Values passed to the constructor of the specified class. If the constructor        of the specified class takes parameters, the ctorParams array must be        supplied.      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">row</span></dt>     <dd>      <p class="para">       The row to be accessed. This parameter can only be used if the specified        statement was prepared with a scrollable cursor. In that case, this parameter        can take on one of the following values:       </p><ul class="simplelist">        <li>SQLSRV_SCROLL_NEXT</li>        <li>SQLSRV_SCROLL_PRIOR</li>        <li>SQLSRV_SCROLL_FIRST</li>        <li>SQLSRV_SCROLL_LAST</li>        <li>SQLSRV_SCROLL_ABSOLUTE</li>        <li>SQLSRV_SCROLL_RELATIVE</li>       </ul>           </dd>             <dt><span class="parameter" style="color:#3A95FF">offset</span></dt>     <dd>      <p class="para">       Specifies the row to be accessed if the row parameter is set to       <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-absolute">SQLSRV_SCROLL_ABSOLUTE</a></span></strong> or       <strong><span><a href="https://php.net/manual/zh/sqlsrv.constants.php#constant.sqlsrv-scroll-relative">SQLSRV_SCROLL_RELATIVE</a></span></strong>. Note that the first row in       a result set has index 0.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-fetch-object-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">    Returns an object on success, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> if there are no more rows to return,    and <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if an error occurs or if the specified class does not exist.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-fetch-object-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2136">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_fetch_object()</strong></span> example</strong></p>    <div class="example-contents"><p>    The following example demonstrates how to retrieve a row as a stdClass object.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT fName, lName FROM Table_1"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">// Retrieve each row as an object.<br>// Because no class is specified, each row will be retrieved as a stdClass object.<br>// Property names correspond to field names.<br></span><span style="color: #007700">while( </span><span style="color: #9876AA">\$obj </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_fetch_object</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">)) {<br>      echo </span><span style="color: #9876AA">\$obj</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">fName</span><span style="color: #007700">.</span><span style="color: #DD0000">", "</span><span style="color: #007700">.</span><span style="color: #9876AA">\$obj</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">lName</span><span style="color: #007700">.</span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.sqlsrv-fetch-object-notes">  <h3 class="title">注释</h3>  <p class="para">   If a class name is specified with the optional \$className parameter and the    class has properties whose names match the result set field names, the corresponding    result set values are applied to the properties. If a result set field name    does not match a class property, a property with the result set field name is added    to the object and the result set value is applied to the property. The following    rules apply when using the \$className parameter:   </p><ul class="simplelist">      <li>Field-property name matching is case-sensitive.</li>      <li>Field-property matching occurs regardless of access modifiers.</li>      <li>Class property data types are ignored when applying a field value to a property.</li>      <li>If the class does not exist, the function returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> and adds an error to the error collection.</li>   </ul>   Regardless of whether the \$className parameter is supplied, if a field with no    name is returned, the field value will be ignored and a warning will be added    to the error collection.    <p class="para">   When consuming a result set that has multiple columns with the same name, it may    be better to use <span class="function">{@link sqlsrv_fetch_array()}</span> or the combination of    <span class="function">{@link sqlsrv_fetch()}</span> and <span class="function">{@link sqlsrv_get_field()}</span>.  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-fetch-object-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_fetch()} - Makes the next row in a result set available for reading</span></li>    <li><span class="function">{@link sqlsrv_fetch_array()} - Returns a row as an array</span></li>   </ul>   </div></div>
 * 
 * Retrieves the next row of data as an object.
 *
 * <br />Retrieves the next row of data as a PHP object.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296160.aspx Retrieving Data} and
 * {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-fetch-object
 * @param resource $stmt A statement resource corresponding to an executed statement.
 * @param string|null $class_name [optional] A string specifying the name of the class to instantiate. If a value for the
 * $className parameter is not specified, an instance of the PHP {@link stdClass} is instantiated.
 * @param array|null $ctor_params [optional]  An array that contains values passed to the constructor of the class
 * specified with the $className parameter. If the constructor of the specified class accepts parameter values, the
 * $ctorParams parameter must be used when calling sqlsrv_fetch_object.
 * @param int|null $row [optional] One of the following values, specifying the row to access in a result set that uses a
 * scrollable cursor: SQLSRV_SCROLL_NEXT, SQLSRV_SCROLL_PRIOR, SQLSRV_SCROLL_FIRST, SQLSRV_SCROLL_LAST,
 * SQLSRV_SCROLL_ABSOLUTE, SQLSRV_SCROLL_RELATIVE. <br />
 *
 * For more information on these values, see
 * {@link http://msdn.microsoft.com/en-us/library/ee376927.aspx Specifying a Cursor Type and Selecting Rows}.
 * @param int|null $offset [optional] Used with SQLSRV_SCROLL_ABSOLUTE and SQLSRV_SCROLL_RELATIVE to specify the row to
 * retrieve. The first record in the result set is 0.
 * @return object|false|null A PHP object with properties that correspond to result set field names. Property values are
 * populated with the corresponding result set field values. If the class specified with the optional $className
 * parameter does not exist or if there is no active result set associated with the specified statement, false is
 * returned. If there are no more rows to retrieve, null is returned.<br /><br />
 *
 * The data type of a value in the returned object will be the default PHP data type. For information on default PHP data
 * types, see {@link http://msdn.microsoft.com/en-us/library/cc296193.aspx Default PHP Data Types}.<br />
 */
function sqlsrv_fetch_object($stmt, $class_name = null, $ctor_params = null, $row = null, $offset = null) {}

/**
 * <div id="function.sqlsrv-has-rows" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_has_rows</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_has_rows</span> — <span class="dc-title">Indicates whether the specified statement has rows</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-has-rows-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_has_rows</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Indicates whether the specified statement has rows.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-has-rows-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       A statement resource returned by <span class="function">{@link sqlsrv_query()}</span> or        <span class="function">{@link sqlsrv_execute()}</span>.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-has-rows-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the specified statement has rows and <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if the statement    does not have rows or if an error occurred.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-has-rows-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2140">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_has_rows()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$server </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password" </span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$server</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT * FROM Table_1"</span><span style="color: #007700">);<br><br>if (</span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">) {<br>   </span><span style="color: #9876AA">\$rows </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_has_rows</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">);<br>   if (</span><span style="color: #9876AA">\$rows </span><span style="color: #007700">=== </span><span style="color: #9876AA">true</span><span style="color: #007700">)<br>      echo </span><span style="color: #DD0000">"There are rows. &lt;br /&gt;"</span><span style="color: #007700">;<br>   else <br>      echo </span><span style="color: #DD0000">"There are no rows. &lt;br /&gt;"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-has-rows-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_num_rows()} - Retrieves the number of rows in a result set</span></li>    <li><span class="function">{@link sqlsrv_query()} - Prepares and executes a query</span></li>   </ul>   </div></div>
 * 
 * Detects if a result set has one or more rows.
 *
 * <br />Indicates if the result set has one or more rows.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-has-rows
 * @param resource $stmt The executed statement.
 * @return bool If there are rows in the result set, the return value will be true. If there are no rows, or if the
 * function call fails, the return value will be false.
 */
function sqlsrv_has_rows($stmt) {}

/**
 * <div id="function.sqlsrv-num-fields" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_num_fields</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_num_fields</span> — <span class="dc-title">Retrieves the number of fields (columns) on a statement</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-num-fields-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_num_fields</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Retrieves the number of fields (columns) on a statement.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-num-fields-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       The statement for which the number of fields is returned.        <span class="function"><strong>sqlsrv_num_fields()</strong></span> can be called on a statement before        or after statement execution.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-num-fields-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of fields on success. Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-num-fields-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2142">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_num_fields()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>   die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT * FROM Table_1"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">(</span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>   die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$numFields </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_num_fields</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">);<br><br>while( </span><span style="color: #9876AA">sqlsrv_fetch</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">)) {<br>   </span><span style="color: #FF8000">// Iterate through the fields of each row.<br>   </span><span style="color: #007700">for(</span><span style="color: #9876AA">\$i </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">; </span><span style="color: #9876AA">\$i </span><span style="color: #007700">&lt; </span><span style="color: #9876AA">\$numFields</span><span style="color: #007700">; </span><span style="color: #9876AA">\$i</span><span style="color: #007700">++) { <br>      echo </span><span style="color: #9876AA">sqlsrv_get_field</span><span style="color: #007700">(</span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">, </span><span style="color: #9876AA">\$i</span><span style="color: #007700">).</span><span style="color: #DD0000">" "</span><span style="color: #007700">;<br>   }<br>   echo </span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-num-fields-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_field_metadata()} - Retrieves metadata for the fields of a statement prepared by   sqlsrv_prepare or sqlsrv_query</span></li>    <li><span class="function">{@link sqlsrv_fetch()} - Makes the next row in a result set available for reading</span></li>    <li><span class="function">{@link sqlsrv_get_field()} - Gets field data from the currently selected row</span></li>   </ul>   </div></div>
 * 
 * Retrieves the number of fields (columns) on a statemen.
 *
 * <br />Retrieves the number of fields in an active result set. Note that sqlsrv_num_fields can be called on any
 * prepared statement, before or after execution.<br />
 *
 * Additional Information at {@link sqlsrv_field_metadata() sqlsrv_field_metadata} and
 * {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-num-fields
 * @param resource $stmt The statement on which the targeted result set is active.
 * @return int|false An integer value that represents the number of fields in the active result set. If an error occurs,
 * the Boolean value false is returned.
 */
function sqlsrv_num_fields($stmt) {}

/**
 * <div id="function.sqlsrv-next-result" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_next_result</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_next_result</span> — <span class="dc-title">Makes the next result of the specified statement active</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-next-result-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_next_result</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Makes the next result of the specified statement active. Results include result    sets, row counts, and output parameters.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-next-result-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       The statement on which the next result is being called.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-next-result-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the next result was successfully retrieved, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if an error    occurred, and <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> if there are no more results to retrieve.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-next-result-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2141">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_next_result()</strong></span> example</strong></p>    <div class="example-contents"><p>    The following example executes a batch query that inserts into a table and     then selects from the table. This produces two results on the statement:     one for the rows affected by the INSERT and one for the rows returned by     the SELECT. To get to the rows returned by the SELECT,     <span class="function"><strong>sqlsrv_next_result()</strong></span> must be called to move past the first result.    </p></div>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"userName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$query </span><span style="color: #007700">= </span><span style="color: #DD0000">"INSERT INTO Table_1 (id, data) VALUES (?,?); SELECT * FROM TABLE_1;"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$params </span><span style="color: #007700">= array(</span><span style="color: #9876AA">1</span><span style="color: #007700">, </span><span style="color: #DD0000">"some data"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">(</span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$query</span><span style="color: #007700">, </span><span style="color: #9876AA">\$params</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Consume the first result (rows affected by INSERT) without calling sqlsrv_next_result.<br></span><span style="color: #007700">echo </span><span style="color: #DD0000">"Rows affected: "</span><span style="color: #007700">.</span><span style="color: #9876AA">sqlsrv_rows_affected</span><span style="color: #007700">(</span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">).</span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// Move to the next result and display results.<br></span><span style="color: #9876AA">\$next_result </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_next_result</span><span style="color: #007700">(</span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$next_result </span><span style="color: #007700">) {<br>   while( </span><span style="color: #9876AA">\$row </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_fetch_array</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">, </span><span style="color: #9876AA">SQLSRV_FETCH_ASSOC</span><span style="color: #007700">)){<br>      echo </span><span style="color: #9876AA">\$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'id'</span><span style="color: #007700">].</span><span style="color: #DD0000">": "</span><span style="color: #007700">.</span><span style="color: #9876AA">\$row</span><span style="color: #007700">[</span><span style="color: #DD0000">'data'</span><span style="color: #007700">].</span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">; <br>   }<br>} elseif( </span><span style="color: #9876AA">is_null</span><span style="color: #007700">(</span><span style="color: #9876AA">\$next_result</span><span style="color: #007700">)) {<br>     echo </span><span style="color: #DD0000">"No more results.&lt;br /&gt;"</span><span style="color: #007700">;<br>} else {<br>     die(</span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-next-result-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_query()} - Prepares and executes a query</span></li>    <li><span class="function">{@link sqlsrv_fetch_array()} - Returns a row as an array</span></li>    <li><span class="function">{@link sqlsrv_rows_affected()} - Returns the number of rows modified by the last INSERT, UPDATE, or   DELETE query executed</span></li>   </ul>   </div></div>
 * 
 * Makes the next result of the specified statement active.
 *
 * <br />Makes the next result (result set, row count, or output parameter) of the specified statement active.<br />
 *
 * The first (or only) result returned by a batch query or stored procedure is active without a call to sqlsrv_next_result.<br />
 *
 * Additional Information at
 * {@link http://msdn.microsoft.com/en-us/library/cc296202.aspx Updating Data (Microsoft Drivers for PHP for SQL Server)} and
 * {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-next-result
 * @param resource $stmt The executed statement on which the next result is made active.
 * @return bool|null If the next result was successfully made active, the Boolean value true is returned. If an error occurred in
 * making the next result active, false is returned. If no more results are available, null is returned.
 */
function sqlsrv_next_result($stmt) {}

/**
 * <div id="function.sqlsrv-num-rows" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_num_rows</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_num_rows</span> — <span class="dc-title">Retrieves the number of rows in a result set</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-num-rows-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_num_rows</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Retrieves the number of rows in a result set. This function requires that the    statement resource be created with a static or keyset cursor. For more information,    see <span class="function">{@link sqlsrv_query()}</span>, <span class="function">{@link sqlsrv_prepare()}</span>,    or <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>    in the Microsoft SQLSRV documentation.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-num-rows-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       The statement for which the row count is returned. The statement resource        must be created with a static or keyset cursor. For more information, see        <span class="function">{@link sqlsrv_query()}</span>, <span class="function">{@link sqlsrv_prepare()}</span>, or        <a href="http://msdn.microsoft.com/en-us/library/ee376927.aspx" class="link external">»&nbsp;Specifying a Cursor Type and Selecting Rows</a>        in the Microsoft SQLSRV documentation.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-num-rows-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of rows retrieved on success and <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if an error occurred.    If a forward cursor (the default) or dynamic cursor is used, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> is returned.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-num-rows-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2143">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_num_rows()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$server </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password" </span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$server</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT * FROM Table_1"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$params </span><span style="color: #007700">= array();<br></span><span style="color: #9876AA">\$options </span><span style="color: #007700">=  array( </span><span style="color: #DD0000">"Scrollable" </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">SQLSRV_CURSOR_KEYSET </span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql </span><span style="color: #007700">, </span><span style="color: #9876AA">\$params</span><span style="color: #007700">, </span><span style="color: #9876AA">\$options </span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$row_count </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_num_rows</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">);<br>   <br>if (</span><span style="color: #9876AA">\$row_count </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">)<br>   echo </span><span style="color: #DD0000">"Error in retrieveing row count."</span><span style="color: #007700">;<br>else<br>   echo </span><span style="color: #9876AA">\$row_count</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-num-rows-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_has_rows()} - Indicates whether the specified statement has rows</span></li>    <li><span class="function">{@link sqlsrv_rows_affected()} - Returns the number of rows modified by the last INSERT, UPDATE, or   DELETE query executed</span></li>   </ul>   </div></div>
 * 
 * Retrieves the number of rows in a result set.
 *
 * <br />sqlsrv_num_rows requires a client-side, static, or keyset cursor, and will return false if you use a forward cursor
 * or a dynamic cursor. (A forward cursor is the default.) For more information about cursors, see
 * {@link sqlsrv_prepare() sqlsrv_prepare},
 * {@link sqlsrv_query() sqlsrv_query} and
 * {@link http://msdn.microsoft.com/en-us/library/hh487160.aspx Cursor Types (SQLSRV Driver)}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-num-rows
 * @param resource $stmt The result set for which to count the rows.
 * @return int|false False if there was an error calculating the number of rows. Otherwise, returns the number of rows in the result set.
 */
function sqlsrv_num_rows($stmt) {}

/**
 * <div id="function.sqlsrv-rows-affected" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_rows_affected</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_rows_affected</span> — <span class="dc-title">Returns the number of rows modified by the last INSERT, UPDATE, or   DELETE query executed</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-rows-affected-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_rows_affected</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   Returns the number of rows modified by the last INSERT, UPDATE, or DELETE    query executed. For information about the number of rows returned by a SELECT    query, see <span class="function">{@link sqlsrv_num_rows()}</span>.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-rows-affected-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       The executed statement resource for which the number of affected rows is returned.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-rows-affected-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns the number of rows affected by the last INSERT, UPDATE, or DELETE query.    If no rows were affected, 0 is returned. If the number of affected rows cannot    be determined, -1 is returned. If an error occurred, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> is returned.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-rows-affected-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2147">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_rows_affected()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password" </span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE Table_1 SET data = ? WHERE id = ?"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$params </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"updated data"</span><span style="color: #007700">, </span><span style="color: #9876AA">1</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql</span><span style="color: #007700">, </span><span style="color: #9876AA">\$params</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">\$rows_affected </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_rows_affected</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$rows_affected </span><span style="color: #007700">=== </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>} elseif( </span><span style="color: #9876AA">\$rows_affected </span><span style="color: #007700">== -</span><span style="color: #9876AA">1</span><span style="color: #007700">) {<br>      echo </span><span style="color: #DD0000">"No information available.&lt;br /&gt;"</span><span style="color: #007700">;<br>} else {<br>      echo </span><span style="color: #9876AA">\$rows_affected</span><span style="color: #007700">.</span><span style="color: #DD0000">" rows were updated.&lt;br /&gt;"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-rows-affected-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_num_rows()} - Retrieves the number of rows in a result set</span></li>   </ul>   </div></div>
 * 
 * Returns the number of modified rows.
 *
 * <br />Returns the number of rows modified by the last statement executed. This function does not return the number of
 * rows returned by a SELECT statement.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-rows-affected
 * @param resource $stmt A statement resource corresponding to an executed statement.
 * @return int|false An integer indicating the number of rows modified by the last executed statement. If no rows were
 * modified, zero (0) is returned. If no information about the number of modified rows is available, negative one (-1)
 * is returned. If an error occurred in retrieving the number of modified rows, false is returned.
 */
function sqlsrv_rows_affected($stmt) {}

/**
 * <div id="function.sqlsrv-client-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_client_info</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_client_info</span> — <span class="dc-title">Returns information about the client and specified connection</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-client-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_client_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$conn</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Returns information about the client and specified connection  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-client-info-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">conn</span></dt>     <dd>      <p class="para">       The connection about which information is returned.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-client-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an associative array with keys described in the table below.    Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.    </p><table class="doctable table">   <caption><strong>Array returned by sqlsrv_client_info</strong></caption>       <thead>     <tr>      <th>Key</th>      <th>Description</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>DriverDllName</td>      <td>SQLNCLI10.DLL</td>     </tr>     <tr>      <td>DriverODBCVer</td>      <td>ODBC version (xx.yy)</td>     </tr>     <tr>      <td>DriverVer</td>      <td>SQL Server Native Client DLL version (10.5.xxx)</td>     </tr>     <tr>      <td>ExtensionVer</td>      <td>php_sqlsrv.dll version (2.0.xxx.x)</td>     </tr>    </tbody>     </table>   </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-client-info-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2125">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_client_info()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connOptions </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connOptions </span><span style="color: #007700">);<br><br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>    die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br>if( </span><span style="color: #9876AA">\$client_info </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_client_info</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">)) {<br>    foreach( </span><span style="color: #9876AA">\$client_info </span><span style="color: #007700">as </span><span style="color: #9876AA">\$key </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">\$value</span><span style="color: #007700">) {<br>        echo </span><span style="color: #9876AA">\$key</span><span style="color: #007700">.</span><span style="color: #DD0000">": "</span><span style="color: #007700">.</span><span style="color: #9876AA">\$value</span><span style="color: #007700">.</span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">;<br>    }<br>} else {<br>    echo </span><span style="color: #DD0000">"Error in retrieving client info.&lt;br /&gt;"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-client-info-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_server_info()} - Returns information about the server</span></li>   </ul>   </div></div>
 * 
 * Provides information about the client.
 *
 * <br />Returns information about the connection and client stack.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-client-info
 * @param resource $conn The connection resource by which the client is connected.
 * @return array|false An associative array with keys described in the table below, or false if the connection resource
 * is null.<br />
 * <ul><li>DriverDllName - SQLNCLI10.DLL (Microsoft Drivers for PHP for SQL Server version 2.0)</li>
 * <li>DriverODBCVer - ODBC version (xx.yy)</li>
 * <li>DriverVer - SQL Server Native Client DLL version: 10.50.xxx (Microsoft Drivers for PHP for SQL Server version 2.0)</li>
 * <li>ExtensionVer - php_sqlsrv.dll version: 2.0.xxxx.x(Microsoft Drivers for PHP for SQL Server version 2.0)</li></ul>
 */
function sqlsrv_client_info($conn) {}

/**
 * <div id="function.sqlsrv-server-info" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_server_info</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_server_info</span> — <span class="dc-title">Returns information about the server</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-server-info-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_server_info</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$conn</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></div>  <p class="para rdfs-comment">   Returns information about the server.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-server-info-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">conn</span></dt>     <dd>      <p class="para">       The connection resource that connects the client and the server.      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-server-info-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array as described in the following table:  </p><table class="doctable table">  <caption><strong>Returned Array</strong></caption>       <thead>     <tr>      <th>CurrentDatabase</th>      <th>The connected-to database.</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>SQLServerVersion</td>      <td>The SQL Server version.</td>     </tr>     <tr>      <td>SQLServerName</td>      <td>The name of the server.</td>     </tr>    </tbody>     </table>  </div> <div class="refsect1 examples" id="refsect1-function.sqlsrv-server-info-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2149">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_server_info()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$server_info </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_server_info</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$server_info </span><span style="color: #007700">)<br>{<br>    foreach( </span><span style="color: #9876AA">\$server_info </span><span style="color: #007700">as </span><span style="color: #9876AA">\$key </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">\$value</span><span style="color: #007700">) {<br>       echo </span><span style="color: #9876AA">\$key</span><span style="color: #007700">.</span><span style="color: #DD0000">": "</span><span style="color: #007700">.</span><span style="color: #9876AA">\$value</span><span style="color: #007700">.</span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">;<br>    }<br>} else {<br>      die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-server-info-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_client_info()} - Returns information about the client and specified connection</span></li>   </ul>   </div></div>
 * 
 * Returns information about the server.
 *
 * <br />Returns information about the server. A connection must be established before calling this function.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-server-info
 * @param resource $conn The connection resource by which the client and server are connected.
 * @return array An associative array with the following keys:
 * <ul><li>CurrentDatabase -  The database currently being targeted.</li>
 * <li>SQLServerVersion - The version of SQL Server.</li>
 * <li>SQLServerName - The name of the server.</li></ul>
 */
function sqlsrv_server_info($conn) {}

/**
 * <div id="function.sqlsrv-cancel" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_cancel</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_cancel</span> — <span class="dc-title">Cancels a statement</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-cancel-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_cancel</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Cancels a statement. Any results associated with the statement that have not    been consumed are deleted. After <span class="function"><strong>sqlsrv_cancel()</strong></span> has been    called, the specified statement can be re-executed if it was created with    <span class="function">{@link sqlsrv_prepare()}</span>. Calling <span class="function"><strong>sqlsrv_cancel()</strong></span>    is not necessary if all the results associated with the statement have been    consumed.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-cancel-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       The statement resource to be cancelled.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-cancel-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-cancel-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2124">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_cancel()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT Sales FROM Table_1"</span><span style="color: #007700">;<br><br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_prepare</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql</span><span style="color: #007700">);<br><br>if( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br>if( </span><span style="color: #9876AA">sqlsrv_execute</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">) === </span><span style="color: #9876AA">false</span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$salesTotal </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$count </span><span style="color: #007700">= </span><span style="color: #9876AA">0</span><span style="color: #007700">;<br><br>while( (</span><span style="color: #9876AA">\$row </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_fetch_array</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">)) &amp;&amp; </span><span style="color: #9876AA">\$salesTotal </span><span style="color: #007700">&lt;=</span><span style="color: #9876AA">100000</span><span style="color: #007700">)<br>{<br>     </span><span style="color: #9876AA">\$qty </span><span style="color: #007700">= </span><span style="color: #9876AA">\$row</span><span style="color: #007700">[</span><span style="color: #9876AA">0</span><span style="color: #007700">];<br>     </span><span style="color: #9876AA">\$price </span><span style="color: #007700">= </span><span style="color: #9876AA">\$row</span><span style="color: #007700">[</span><span style="color: #9876AA">1</span><span style="color: #007700">];<br>     </span><span style="color: #9876AA">\$salesTotal </span><span style="color: #007700">+= ( </span><span style="color: #9876AA">\$price </span><span style="color: #007700">* </span><span style="color: #9876AA">\$qty</span><span style="color: #007700">);<br>     </span><span style="color: #9876AA">\$count</span><span style="color: #007700">++;<br>}<br><br>echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">\$count</span><span style="color: #DD0000"> sales accounted for the first \$</span><span style="color: #9876AA">\$salesTotal</span><span style="color: #DD0000"> in revenue.&lt;br /&gt;"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// Cancel the pending results. The statement can be reused.<br></span><span style="color: #9876AA">sqlsrv_cancel</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div> <div class="refsect1 notes" id="refsect1-function.sqlsrv-cancel-notes">  <h3 class="title">注释</h3>  <p class="para">   The main difference between <span class="function"><strong>sqlsrv_cancel()</strong></span> and    <span class="function">{@link sqlsrv_free_stmt()}</span> is that a statement resource cancelled with    <span class="function"><strong>sqlsrv_cancel()</strong></span> can be re-executed if it was created with    <span class="function">{@link sqlsrv_prepare()}</span>. A statement resource cancelled with    <span class="function"><strong>sqlsrv_free_statement()</strong></span> cannot be re-executed.  </p> </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-cancel-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_free_stmt()} - Frees all resources for the specified statement</span></li>    <li><span class="function">{@link sqlsrv_prepare()} - Prepares a query for execution</span></li>   </ul>   </div></div>
 * 
 * Cancels a statement; discards any pending results for the statement.
 *
 * <br />Cancels a statement. This means that any pending results for the statement are discarded. After this function
 * is called, the statement can be re-executed if it was prepared with {@link sqlsrv_prepare() sqlsrv_prepare}. Calling
 * this function is not necessary if all the results associated with the statement have been consumed.<br />
 *
 * A statement that is prepared and executed using the combination of {@link sqlsrv_prepare() sqlsrv_prepare} and
 * {@link sqlsrv_execute() sqlsrv_execute} can be re-executed
 * with {@link sqlsrv_execute() sqlsrv_execute} after calling sqlsrv_cancel. A statement that is executed with
 * {@link sqlsrv_query() sqlsrv_query} cannot be re-executed after calling sqlsrv_cancel.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-cancel
 * @param resource $stmt The statement to be canceled.
 * @return bool A Boolean value: true if the operation was successful. Otherwise, false.
 */
function sqlsrv_cancel($stmt) {}

/**
 * <div id="function.sqlsrv-free-stmt" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_free_stmt</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_free_stmt</span> — <span class="dc-title">Frees all resources for the specified statement</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-free-stmt-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_free_stmt</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Frees all resources for the specified statement. The statement cannot be used    after <span class="function"><strong>sqlsrv_free_stmt()</strong></span> has been called on it. If    <span class="function"><strong>sqlsrv_free_stmt()</strong></span> is called on an in-progress statement    that alters server state, statement execution is terminated and the statement    is rolled back.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-free-stmt-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       The statement for which resources are freed.        Note that <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> is a valid parameter value. This allows the function to be        called multiple times in a script.       </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-free-stmt-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-free-stmt-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2138">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_free_stmt()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_query</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #DD0000">"SELECT * FROM Table_1"</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #FF8000">//-------------------------------<br>     Process query results here.<br>-------------------------------<br><br>// Free the statement resources. <br></span><span style="color: #9876AA">sqlsrv_free_stmt</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>   <div class="refsect1 notes" id="refsect1-function.sqlsrv-free-stmt-notes">  <h3 class="title">注释</h3>  <p class="para">   The main difference between <span class="function"><strong>sqlsrv_free_stmt()</strong></span> and    <span class="function">{@link sqlsrv_cancel()}</span> is that a statement resource cancelled with    <span class="function">{@link sqlsrv_cancel()}</span> can be re-executed if it was created with    <span class="function">{@link sqlsrv_prepare()}</span>. A statement resource cancelled with    <span class="function"><strong>sqlsrv_free_statement()</strong></span> cannot be re-executed.  </p> </div> <div class="refsect1 seealso" id="refsect1-function.sqlsrv-free-stmt-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_cancel()} - Cancels a statement</span></li>   </ul>   </div></div>
 * 
 * Closes a statement. Frees all resources associated with the statement.
 *
 * <br />Frees all resources associated with the specified statement. The statement cannot be used again after this function
 * has been called.<br />
 *
 * Null is a valid parameter for this function. This allows the function to be called multiple times in a script. For
 * example, if you free a statement in an error condition and free it again at the end of the script, the second call to
 * sqlsrv_free_stmt will return true because the first call to sqlsrv_free_stmt (in the error condition) sets the
 * statement resource to null.<br />
 *
 * Additional Information at {@link sqlsrv_cancel() sqlsrv_cancel} and
 * {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-free-stmt
 * @param resource|null $stmt The statement to be closed.
 * @return bool The Boolean value true unless the function is called with an invalid parameter. If the function is
 * called with an invalid parameter, false is returned.
 */
function sqlsrv_free_stmt($stmt) {}

/**
 * <div id="function.sqlsrv-field-metadata" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_field_metadata</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_field_metadata</span> — <span class="dc-title">Retrieves metadata for the fields of a statement prepared by   <span class="function">{@link sqlsrv_prepare()}</span> or <span class="function">{@link sqlsrv_query()}</span>  </span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-field-metadata-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_field_metadata</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.mixed.php" class="type mixed" style="color:#EAB766">mixed</a></span></div>  <p class="para rdfs-comment">   Retrieves metadata for the fields of a statement prepared by    <span class="function">{@link sqlsrv_prepare()}</span> or <span class="function">{@link sqlsrv_query()}</span>.    <span class="function"><strong>sqlsrv_field_metadata()</strong></span> can be called on a statement before    or after statement execution.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-field-metadata-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       The statement resource for which metadata is returned.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-field-metadata-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns an array of arrays on success. Otherwise, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> is returned.    Each returned array is described by the following table:   </p><table class="doctable table">   <caption><strong>Array returned by sqlsrv_field_metadata</strong></caption>       <thead>     <tr>      <th>Key</th>      <th>Description</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>Name</td>      <td>The name of the field.</td>     </tr>     <tr>      <td>Type</td>      <td>The numeric value for the SQL type.</td>     </tr>     <tr>      <td>Size</td>      <td>The number of characters for fields of character type, the number of       bytes for fields of binary type, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> for other types.</td>     </tr>     <tr>      <td>Precision</td>      <td>The precision for types of variable precision, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> for other types.</td>     </tr>     <tr>      <td>Scale</td>      <td>The scale for types of variable scale, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> for other types.</td>     </tr>     <tr>      <td>Nullable</td>      <td>An enumeration indicating whether the column is nullable, not nullable,       or if it is not known.</td>     </tr>    </tbody>     </table>  For more information, see <a href="http://msdn.microsoft.com/en-us/library/cc296197.aspx" class="link external">»&nbsp;sqlsrv_field_metadata</a>   in the Microsoft SQLSRV documentation.   </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-field-metadata-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2137">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_field_metadata()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"AdventureWorks"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>   die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"SELECT * FROM Table_1"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_prepare</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql </span><span style="color: #007700">);<br><br>foreach( </span><span style="color: #9876AA">sqlsrv_field_metadata</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">) as </span><span style="color: #9876AA">\$fieldMetadata </span><span style="color: #007700">) {<br>    foreach( </span><span style="color: #9876AA">\$fieldMetadata </span><span style="color: #007700">as </span><span style="color: #9876AA">\$name </span><span style="color: #007700">=&gt; </span><span style="color: #9876AA">\$value</span><span style="color: #007700">) {<br>       echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">\$name</span><span style="color: #DD0000">: </span><span style="color: #9876AA">\$value</span><span style="color: #DD0000">&lt;br /&gt;"</span><span style="color: #007700">;<br>    }<br>      echo </span><span style="color: #DD0000">"&lt;br /&gt;"</span><span style="color: #007700">;<br>}<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-field-metadata-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_client_info()} - Returns information about the client and specified connection</span></li>   </ul>   </div></div>
 * 
 * Returns field metadata.
 *
 * <br />Retrieves metadata for the fields of a prepared statement. For information about preparing a statement,
 * see {@link sqlsrv_query() sqlsrv_query}
 * or {@link sqlsrv_prepare() sqlsrv_prepare}. Note that sqlsrv_field_metadata can be called on any prepared statement,
 * pre- or post-execution.<br />
 *
 * Additional Information at {@link sqlsrv_cancel() sqlsrv_cancel} and
 * {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-field-metadata
 * @param resource $stmt A statement resource for which field metadata is sought.
 * @return array|false An array of arrays or false. The array consists of one array for each field in the result set.
 * Each sub-array has keys as described in the table below. If there is an error in retrieving field metadata, false is
 * returned.
 * <ul><li>Name - Name of the column to which the field corresponds.</li>
 * <li>Type - Numeric value that corresponds to a SQL type.</li>
 * <li>Size - Number of characters for fields of character type (char(n), varchar(n), nchar(n), nvarchar(n), XML).
 * Number of bytes for fields of binary type (binary(n), varbinary(n), UDT). NULL for other SQL Server data types.</li>
 * <li>Precision - The precision for types of variable precision (real, numeric, decimal, datetime2, datetimeoffset, and
 * time). NULL for other SQL Server data types.</li>
 * <li>Scale - The scale for types of variable scale (numeric, decimal, datetime2, datetimeoffset, and time). NULL for other
 * SQL Server data types.</li>
 * <li>Nullable - An enumerated value indicating whether the column is nullable (SQLSRV_NULLABLE_YES), the column is not
 * nullable (SQLSRV_NULLABLE_NO), or it is not known if the column is nullable (SQLSRV_NULLABLE_UNKNOWN).</li></ul>
 * See the {@link http://msdn.microsoft.com/en-us/library/cc296197.aspx function documentation} for more information on
 * the keys for each sub-array.
 */
function sqlsrv_field_metadata($stmt) {}

/**
 * <div id="function.sqlsrv-send-stream-data" class="refentry"> <div class="refnamediv">  <h1 class="refname">sqlsrv_send_stream_data</h1>  <p class="verinfo">(No version information available, might only be in Git)</p><p class="refpurpose"><span class="refname">sqlsrv_send_stream_data</span> — <span class="dc-title">Sends data from parameter streams to the server</span></p> </div> <div class="refsect1 description" id="refsect1-function.sqlsrv-send-stream-data-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>sqlsrv_send_stream_data</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$stmt</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   Send data from parameter streams to the server. Up to 8 KB of data is sent    with each call.  </p> </div>  <div class="refsect1 parameters" id="refsect1-function.sqlsrv-send-stream-data-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">stmt</span></dt>     <dd>      <p class="para">       A statement resource returned by <span class="function">{@link sqlsrv_query()}</span> or        <span class="function">{@link sqlsrv_execute()}</span>.      </p>     </dd>       </dl>   </div>  <div class="refsect1 returnvalues" id="refsect1-function.sqlsrv-send-stream-data-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   Returns <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if there is more data to send and <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> if there is not.  </p> </div>  <div class="refsect1 examples" id="refsect1-function.sqlsrv-send-stream-data-examples">  <h3 class="title">示例</h3>  <p class="para">   </p><div class="example" id="example-2148">    <p><strong>示例 #1 <span class="function"><strong>sqlsrv_send_stream_data()</strong></span> example</strong></p>    <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$serverName </span><span style="color: #007700">= </span><span style="color: #DD0000">"serverName\sqlexpress"</span><span style="color: #007700">;<br></span><span style="color: #9876AA">\$connectionInfo </span><span style="color: #007700">= array( </span><span style="color: #DD0000">"Database"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"dbName"</span><span style="color: #007700">, </span><span style="color: #DD0000">"UID"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"PWD"</span><span style="color: #007700">=&gt;</span><span style="color: #DD0000">"password" </span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$conn </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_connect</span><span style="color: #007700">( </span><span style="color: #9876AA">\$serverName</span><span style="color: #007700">, </span><span style="color: #9876AA">\$connectionInfo</span><span style="color: #007700">);<br>if( </span><span style="color: #9876AA">\$conn </span><span style="color: #007700">=== </span><span style="color: #9876AA">false </span><span style="color: #007700">) {<br>     die( </span><span style="color: #9876AA">print_r</span><span style="color: #007700">( </span><span style="color: #9876AA">sqlsrv_errors</span><span style="color: #007700">(), </span><span style="color: #9876AA">true</span><span style="color: #007700">));<br>}<br><br></span><span style="color: #9876AA">\$sql </span><span style="color: #007700">= </span><span style="color: #DD0000">"UPDATE Table_1 SET data = ( ?) WHERE id = 100"</span><span style="color: #007700">;<br><br></span><span style="color: #FF8000">// Open parameter data as a stream and put it in the \$params array.<br></span><span style="color: #9876AA">\$data </span><span style="color: #007700">= </span><span style="color: #9876AA">fopen</span><span style="color: #007700">( </span><span style="color: #DD0000">"data://text/plain,[ Lengthy content here. ]"</span><span style="color: #007700">, </span><span style="color: #DD0000">"r"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$params </span><span style="color: #007700">= array( &amp;</span><span style="color: #9876AA">\$data</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Prepare the statement. Use the \$options array to turn off the<br>// default behavior, which is to send all stream data at the time of query<br>// execution.<br></span><span style="color: #9876AA">\$options </span><span style="color: #007700">= array(</span><span style="color: #DD0000">"SendStreamParamsAtExec"</span><span style="color: #007700">=&gt;</span><span style="color: #9876AA">0</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$stmt </span><span style="color: #007700">= </span><span style="color: #9876AA">sqlsrv_prepare</span><span style="color: #007700">( </span><span style="color: #9876AA">\$conn</span><span style="color: #007700">, </span><span style="color: #9876AA">\$sql</span><span style="color: #007700">, </span><span style="color: #9876AA">\$params</span><span style="color: #007700">, </span><span style="color: #9876AA">\$options</span><span style="color: #007700">);<br><br></span><span style="color: #9876AA">sqlsrv_execute</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">);<br><br></span><span style="color: #FF8000">// Send up to 8K of parameter data to the server <br>// with each call to sqlsrv_send_stream_data.<br></span><span style="color: #9876AA">\$i </span><span style="color: #007700">= </span><span style="color: #9876AA">1</span><span style="color: #007700">;<br>while( </span><span style="color: #9876AA">sqlsrv_send_stream_data</span><span style="color: #007700">( </span><span style="color: #9876AA">\$stmt</span><span style="color: #007700">)) {<br>      </span><span style="color: #9876AA">\$i</span><span style="color: #007700">++;<br>}<br>echo </span><span style="color: #DD0000">"</span><span style="color: #9876AA">\$i</span><span style="color: #DD0000"> calls were made."</span><span style="color: #007700">;<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>    </div>   </div>   </div>  <div class="refsect1 seealso" id="refsect1-function.sqlsrv-send-stream-data-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link sqlsrv_prepare()} - Prepares a query for execution</span></li>    <li><span class="function">{@link sqlsrv_query()} - Prepares and executes a query</span></li>   </ul>   </div></div>
 * 
 * Sends up to eight kilobytes (8 KB) of data to the server with each call to the function.
 *
 * <br />Sends data from parameter streams to the server. Up to eight kilobytes (8K) of data is sent with each call to
 * sqlsrv_send_stream_data.<br />
 *
 * By default, all stream data is sent to the server when a query is executed. If this default behavior is not changed,
 * you do not have to use sqlsrv_send_stream_data to send stream data to the server. For information about changing the
 * default behavior, see the Parameters section of {@link sqlsrv_query() sqlsrv_query}
 * or {@link sqlsrv_prepare() sqlsrv_prepare}.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/sqlsrv-send-stream-data
 * @param resource $stmt A statement resource corresponding to an executed statement.
 * @return bool Boolean : true if there is more data to be sent. Otherwise, false.
 */
function sqlsrv_send_stream_data($stmt) {}

/**
 * Specifies the encoding of a stream of data from the server.
 *
 * <br />When specifying the PHP data type of a value being returned from the server, this allows you to specify the encoding
 * used to process the value if the value is a stream.<br />
 *
 * In the documentation this is presented as a constant that accepts an arguement.<br />
 *
 * When you use SQLSRV_PHPTYPE_STREAM, the encoding must be specified. If no parameter is supplied, an error will be
 * returned.<br />
 *
 * Additional Information at:
 * <ul>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296208.aspx How to: Specify PHP Data Types}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296163.aspx How to: Retrieve Character Data as a Stream Using the SQLSRV Driver.}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc626307.aspx How to: Send and Retrieve UTF-8 Data Using Built-In UTF-8 Support.}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}</li>
 * </ul>
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 *
 * @param string $encoding The encoding to use for the stream. The valid options are SQLSRV_ENC_BINARY, SQLSRV_ENC_CHAR
 * or "UTF-8".
 *
 * @return int Value to use in any place that accepts a SQLSRV_PHPTYPE_* constant to represent a PHP stream with the
 * given encoding.
 */
function SQLSRV_PHPTYPE_STREAM($encoding) {}

/**
 * Specifies the encoding of a string being received form the server.
 *
 * <br />When specifying the PHP data type of a value being returned from the server, this allows you to specify the
 * encoding used to process the value if the value is a string.<br />
 *
 * In the documentation this is presented as a constant that accepts an arguement.<br />
 *
 * When you use SQLSRV_PHPTYPE_STRING, the encoding must be specified. If no parameter is supplied, an error will be
 * returned.<br />
 *
 * Additional Information at:
 * <ul>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296208.aspx How to: Specify PHP Data Types}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296163.aspx How to: Retrieve Character Data as a Stream Using the SQLSRV Driver.}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc626307.aspx How to: Send and Retrieve UTF-8 Data Using Built-In UTF-8 Support.}</li>
 * <li>{@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}</li>
 * </ul>
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 *
 * @param string $encoding The encoding to use for the stream. The valid options are SQLSRV_ENC_BINARY, SQLSRV_ENC_CHAR
 * or "UTF-8".
 *
 * @return int Value to use in any place that accepts a SQLSRV_PHPTYPE_* constant to represent a PHP string with the
 * given encoding.
 */
function SQLSRV_PHPTYPE_STRING($encoding) {}

/**
 * Specifies a SQL Server binary field.
 *
 * <br />In the documentation this is presented as a constant that accepts an arguement.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 * @param int $byteCount Must be between 1 and 8000.
 * @return int Value to use in any place that accepts a SQLSRV_SQLTYPE_* constant to represent the 'binary' data type.
 */
function SQLSRV_SQLTYPE_BINARY($byteCount) {}

/**
 * Specifies a SQL Server varbinary field.
 *
 * <br />In the documentation this is presented as a constant that accepts an arguement.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 * @param int|string $byteCount Must be between 1 and 8000 or 'max'.
 * @return int Value to use in any place that accepts a SQLSRV_SQLTYPE_* constant to represent the varbinary data type.
 */
function SQLSRV_SQLTYPE_VARBINARY($byteCount) {}

/**
 * Specifies a SQL Server varchar filed.
 *
 * <br />In the documentation this is presented as a constant that accepts an arguement.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 *
 * @param int|string $charCount Must be between 1 and 8000 or 'max'.
 *
 * @return int Value to use in any place that accepts a SQLSRV_SQLTYPE_* constant to represent the varchar data type.
 */
function SQLSRV_SQLTYPE_VARCHAR($charCount) {}

/**
 * Specifies a SQL Server char field.
 *
 * <br />In the documentation this is presented as a constant that accepts an arguement.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 * @param int $charCount Must be between 1 and 8000.
 * @return int Value to use in any place that accepts a SQLSRV_SQLTYPE_* constant to represent the char data type.
 */
function SQLSRV_SQLTYPE_CHAR($charCount) {}

/**
 * Specifies a SQL Server nchar field.
 *
 * <br />In the documentation this is presented as a constant that accepts an arguement.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 * @param int $charCount Must be between 1 and 4000.
 * @return int Value to use in any place that accepts a SQLSRV_SQLTYPE_* constant to represent the nchar data type.
 */
function SQLSRV_SQLTYPE_NCHAR($charCount) {}

/**
 * Specifies a SQL Server nvarchar field.
 *
 * <br />In the documentation this is presented as a constant that accepts an arguement.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 * @param int|string $charCount Must be between 1 and 4000 or 'max'.
 * @return int Value to use in any place that accepts a SQLSRV_SQLTYPE_* constant to represent the nvarchar data type.
 */
function SQLSRV_SQLTYPE_NVARCHAR($charCount) {}

/**
 * Specifies a SQL Server decimal field.
 *
 * <br />In the documentation this is presented as a constant that accepts an arguement.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 * @param int $precision Must be between 1 and 38.
 * @param int $scale Must be between 1 and $precision.
 * @return int Value to use in any place that accepts a SQLSRV_SQLTYPE_* constant to represent the decimal data type.
 */
function SQLSRV_SQLTYPE_DECIMAL($precision, $scale) {}

/**
 * Specifies a SQL Server numeric field.
 *
 * <br />In the documentation this is presented as a constant that accepts an arguement.<br />
 *
 * Additional Information at {@link http://msdn.microsoft.com/en-us/library/cc296152.aspx SQLSRV Driver API Reference}<br />
 *
 * @link https://docs.microsoft.com/en-us/sql/connect/php/constants-microsoft-drivers-for-php-for-sql-server
 * @param int $precision Must be between 1 and 38.
 * @param int $scale Must be between 1 and $precision.
 * @return int Value to use in any place that accepts a SQLSRV_SQLTYPE_* constant to represent the numeric data type.
 */
function SQLSRV_SQLTYPE_NUMERIC($precision, $scale) {}
