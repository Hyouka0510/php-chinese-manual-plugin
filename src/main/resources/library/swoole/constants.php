<?php

declare(strict_types=1);

/**
 * <span class="simpara">      Swoole version.     </span>
 */
define('SWOOLE_VERSION', '4.8.6');
/**
 * <span class="simpara">      Swoole version.     </span>
 */
define('SWOOLE_VERSION_ID', 40806);
/**
 * <span class="simpara">      Swoole major version.     </span>
 */
define('SWOOLE_MAJOR_VERSION', 4);
/**
 * <span class="simpara">      Swoole minor version.     </span>
 */
define('SWOOLE_MINOR_VERSION', 8);
/**
 * <span class="simpara">      Swoole release version.     </span>
 */
define('SWOOLE_RELEASE_VERSION', 6);
/**
 * <span class="simpara">      Swoole extra version.     </span>
 */
define('SWOOLE_EXTRA_VERSION', '');
/**
 * <span class="simpara">      Debug mode.     </span>
 */
define('SWOOLE_DEBUG', '');
/**
 * <span class="simpara">      Enable HTTP response compression mode.     </span>
 */
define('SWOOLE_HAVE_COMPRESSION', '1');
/**
 * <span class="simpara">      Have zlib compression tool.     </span>
 */
define('SWOOLE_HAVE_ZLIB', '1');
/**
 * <span class="simpara">      Have brotli compression tool.     </span>
 */
define('SWOOLE_HAVE_BROTLI', '1');
/**
 * <span class="simpara">      Support http2 server.     </span>
 */
define('SWOOLE_USE_HTTP2', '1');
/**
 * <span class="simpara">      Enable/disable short aliases.     </span>
 */
define('SWOOLE_USE_SHORTNAME', '1');
/**
 * <span class="simpara">      TCP ipv4 socket.     </span>
 */
define('SWOOLE_SOCK_TCP', 1);
/**
 * <span class="simpara">      TCP ipv6 socket.     </span>
 */
define('SWOOLE_SOCK_TCP6', 3);
/**
 * <span class="simpara">      UDP ipv4 socket.     </span>
 */
define('SWOOLE_SOCK_UDP', 2);
/**
 * <span class="simpara">      UDP ipv6 socket.     </span>
 */
define('SWOOLE_SOCK_UDP6', 4);
/**
 * <span class="simpara">      UNIX socket dgram.     </span>
 */
define('SWOOLE_SOCK_UNIX_DGRAM', 6);
/**
 * <span class="simpara">      UNIX socket stream.     </span>
 */
define('SWOOLE_SOCK_UNIX_STREAM', 5);

define('SWOOLE_TCP', 1);

define('SWOOLE_TCP6', 3);

define('SWOOLE_UDP', 2);

define('SWOOLE_UDP6', 4);

define('SWOOLE_UNIX_DGRAM', 6);

define('SWOOLE_UNIX_STREAM', 5);
/**
 * <span class="simpara">      Synchronous client mode.     </span>
 */
define('SWOOLE_SOCK_SYNC', '');
/**
 * <span class="simpara">      Asynchronous client mode.     </span>
 */
define('SWOOLE_SOCK_ASYNC', '1');

define('SWOOLE_SYNC', 2048);

define('SWOOLE_ASYNC', 1024);
/**
 * <span class="simpara">      Swoole\Client supports creating a TCP long connection to the server in PHP-FPM/Apache.     </span>
 */
define('SWOOLE_KEEP', 4096);
/**
 * <span class="simpara">      Enable SSL tunnel encryption.     </span>
 */
define('SWOOLE_SSL', 512);
/**
 * <span class="simpara">      SSLv3 method.     </span>
 */
define('SWOOLE_SSLv3_METHOD', 1);
/**
 * <span class="simpara">      SSLv3 server method.     </span>
 */
define('SWOOLE_SSLv3_SERVER_METHOD', 2);
/**
 * <span class="simpara">      SSLv3 client method.     </span>
 */
define('SWOOLE_SSLv3_CLIENT_METHOD', 3);
/**
 * <span class="simpara">      TLSv1 method.     </span>
 */
define('SWOOLE_TLSv1_METHOD', 6);
/**
 * <span class="simpara">      TLSv1 server method.     </span>
 */
define('SWOOLE_TLSv1_SERVER_METHOD', 7);
/**
 * <span class="simpara">      TLSv1 client method.     </span>
 */
define('SWOOLE_TLSv1_CLIENT_METHOD', 8);
/**
 * <span class="simpara">      TLSv1_1 method.     </span>
 */
define('SWOOLE_TLSv1_1_METHOD', 9);
/**
 * <span class="simpara">      TLSv1_1 server method.     </span>
 */
define('SWOOLE_TLSv1_1_SERVER_METHOD', 10);
/**
 * <span class="simpara">      TLSv1_1 client method.     </span>
 */
define('SWOOLE_TLSv1_1_CLIENT_METHOD', 11);
/**
 * <span class="simpara">      TLSv1_2 method.     </span>
 */
define('SWOOLE_TLSv1_2_METHOD', 12);
/**
 * <span class="simpara">      TLSv1_2 server method.     </span>
 */
define('SWOOLE_TLSv1_2_SERVER_METHOD', 13);
/**
 * <span class="simpara">      TLSv1_2 client method.     </span>
 */
define('SWOOLE_TLSv1_2_CLIENT_METHOD', 14);
/**
 * <span class="simpara">      DTLS server method.     </span>
 */
define('SWOOLE_DTLS_SERVER_METHOD', 16);
/**
 * <span class="simpara">      DTLS client method.     </span>
 */
define('SWOOLE_DTLS_CLIENT_METHOD', 15);
/**
 * <span class="simpara">      SSLv23 method.     </span>
 */
define('SWOOLE_SSLv23_METHOD', 0);
/**
 * <span class="simpara">      SSLv23 server method.     </span>
 */
define('SWOOLE_SSLv23_SERVER_METHOD', 4);
/**
 * <span class="simpara">      SSLv23 client method.     </span>
 */
define('SWOOLE_SSLv23_CLIENT_METHOD', 5);
/**
 * <span class="simpara">      TLS method.     </span>
 */
define('SWOOLE_TLS_METHOD', 0);
/**
 * <span class="simpara">      TLS server method.     </span>
 */
define('SWOOLE_TLS_SERVER_METHOD', 4);
/**
 * <span class="simpara">      TLS client method.     </span>
 */
define('SWOOLE_TLS_CLIENT_METHOD', 5);
/**
 * <span class="simpara">      TLSv1 protocol.     </span>
 */
define('SWOOLE_SSL_TLSv1', 8);
/**
 * <span class="simpara">      TLSv1_1 protocol.     </span>
 */
define('SWOOLE_SSL_TLSv1_1', 16);
/**
 * <span class="simpara">      TLSv1_2 protocol.     </span>
 */
define('SWOOLE_SSL_TLSv1_2', 32);
/**
 * <span class="simpara">      TLSv1_3 protocol.     </span>
 */
define('SWOOLE_SSL_TLSv1_3', 64);
/**
 * <span class="simpara">      DTLS protocol.     </span>
 */
define('SWOOLE_SSL_DTLS', 128);
/**
 * <span class="simpara">      SSLv2 protocol.     </span>
 */
define('SWOOLE_SSL_SSLv2', 2);
/**
 * <span class="simpara">      Whether to listen for readable events.     </span>
 */
define('SWOOLE_EVENT_READ', 512);
/**
 * <span class="simpara">      Whether to listen for writable events.     </span>
 */
define('SWOOLE_EVENT_WRITE', 1024);
/**
 * <span class="simpara">      Convert the system errno no into error messages.     </span>
 */
define('SWOOLE_STRERROR_SYSTEM', 0);
/**
 * <span class="simpara">      Convert the addr info errno no into error messages.     </span>
 */
define('SWOOLE_STRERROR_GAI', 1);
/**
 * <span class="simpara">      Convert the DNS errno no into error messages.     </span>
 */
define('SWOOLE_STRERROR_DNS', 2);
/**
 * <span class="simpara">      Convert the swoole errno no into error messages.     </span>
 */
define('SWOOLE_STRERROR_SWOOLE', 9);
/**
 * <span class="simpara">      Malloc memory fail.     </span>
 */
define('SWOOLE_ERROR_MALLOC_FAIL', 501);
/**
 * <span class="simpara">      System call fail.     </span>
 */
define('SWOOLE_ERROR_SYSTEM_CALL_FAIL', 502);
/**
 * <span class="simpara">      PHP fatal error.     </span>
 */
define('SWOOLE_ERROR_PHP_FATAL_ERROR', 503);
/**
 * <span class="simpara">      Name too long.     </span>
 */
define('SWOOLE_ERROR_NAME_TOO_LONG', 504);
/**
 * <span class="simpara">      Invalid params.     </span>
 */
define('SWOOLE_ERROR_INVALID_PARAMS', 505);
/**
 * <span class="simpara">      Queue full.     </span>
 */
define('SWOOLE_ERROR_QUEUE_FULL', 506);
/**
 * <span class="simpara">      Operation not support.     </span>
 */
define('SWOOLE_ERROR_OPERATION_NOT_SUPPORT', 507);
/**
 * <span class="simpara">      Protocol error.     </span>
 */
define('SWOOLE_ERROR_PROTOCOL_ERROR', 508);
/**
 * <span class="simpara">      Wrong operation.     </span>
 */
define('SWOOLE_ERROR_WRONG_OPERATION', 509);
/**
 * <span class="simpara">      File not exist.     </span>
 */
define('SWOOLE_ERROR_FILE_NOT_EXIST', 700);
/**
 * <span class="simpara">      File too large.     </span>
 */
define('SWOOLE_ERROR_FILE_TOO_LARGE', 701);
/**
 * <span class="simpara">      File empty.     </span>
 */
define('SWOOLE_ERROR_FILE_EMPTY', 702);
/**
 * <span class="simpara">      DNS Lookup duplicate request.     </span>
 */
define('SWOOLE_ERROR_DNSLOOKUP_DUPLICATE_REQUEST', 710);
/**
 * <span class="simpara">      DNS Lookup resolve failed.     </span>
 */
define('SWOOLE_ERROR_DNSLOOKUP_RESOLVE_FAILED', 711);
/**
 * <span class="simpara">      DNS Lookup resolve timeout.     </span>
 */
define('SWOOLE_ERROR_DNSLOOKUP_RESOLVE_TIMEOUT', 712);
/**
 * <span class="simpara">      DNS Lookup unsupported.     </span>
 */
define('SWOOLE_ERROR_DNSLOOKUP_UNSUPPORTED', 713);
/**
 * <span class="simpara">      DNS Lookup no server.     </span>
 */
define('SWOOLE_ERROR_DNSLOOKUP_NO_SERVER', 714);
/**
 * <span class="simpara">      Bad ipv6 address.     </span>
 */
define('SWOOLE_ERROR_BAD_IPV6_ADDRESS', 720);
/**
 * <span class="simpara">      Unregistered signal.     </span>
 */
define('SWOOLE_ERROR_UNREGISTERED_SIGNAL', 721);
/**
 * <span class="simpara">      Event socket removed.     </span>
 */
define('SWOOLE_ERROR_EVENT_SOCKET_REMOVED', 800);
/**
 * <span class="simpara">      Session closed by server.     </span>
 */
define('SWOOLE_ERROR_SESSION_CLOSED_BY_SERVER', 1001);
/**
 * <span class="simpara">      Session closed by client.     </span>
 */
define('SWOOLE_ERROR_SESSION_CLOSED_BY_CLIENT', 1002);
/**
 * <span class="simpara">      Session closing.     </span>
 */
define('SWOOLE_ERROR_SESSION_CLOSING', 1003);
/**
 * <span class="simpara">      Session closed.     </span>
 */
define('SWOOLE_ERROR_SESSION_CLOSED', 1004);
/**
 * <span class="simpara">      Session not exist.     </span>
 */
define('SWOOLE_ERROR_SESSION_NOT_EXIST', 1005);
/**
 * <span class="simpara">      Session invalid id.     </span>
 */
define('SWOOLE_ERROR_SESSION_INVALID_ID', 1006);
/**
 * <span class="simpara">      Session discard timeout data.     </span>
 */
define('SWOOLE_ERROR_SESSION_DISCARD_TIMEOUT_DATA', 1007);
/**
 * <span class="simpara">      Session discard data.     </span>
 */
define('SWOOLE_ERROR_SESSION_DISCARD_DATA', 1008);
/**
 * <span class="simpara">      Output buffer overflow.     </span>
 */
define('SWOOLE_ERROR_OUTPUT_BUFFER_OVERFLOW', 1009);
/**
 * <span class="simpara">      Output send yield     </span>
 */
define('SWOOLE_ERROR_OUTPUT_SEND_YIELD', 1010);
/**
 * <span class="simpara">      SSL not ready     </span>
 */
define('SWOOLE_ERROR_SSL_NOT_READY', 1011);
/**
 * <span class="simpara">      SSL cannot use senfile     </span>
 */
define('SWOOLE_ERROR_SSL_CANNOT_USE_SENFILE', 1012);
/**
 * <span class="simpara">      SSL empty peer certificate.     </span>
 */
define('SWOOLE_ERROR_SSL_EMPTY_PEER_CERTIFICATE', 1013);
/**
 * <span class="simpara">      SSL verify failed.     </span>
 */
define('SWOOLE_ERROR_SSL_VERIFY_FAILED', 1014);
/**
 * <span class="simpara">      SSL bad client.     </span>
 */
define('SWOOLE_ERROR_SSL_BAD_CLIENT', 1015);
/**
 * <span class="simpara">      SSL bad protocol.     </span>
 */
define('SWOOLE_ERROR_SSL_BAD_PROTOCOL', 1016);
/**
 * <span class="simpara">      SSL reset.     </span>
 */
define('SWOOLE_ERROR_SSL_RESET', 1017);
/**
 * <span class="simpara">      SSL handshake failed.     </span>
 */
define('SWOOLE_ERROR_SSL_HANDSHAKE_FAILED', 1018);
/**
 * <span class="simpara">      Package length too large.     </span>
 */
define('SWOOLE_ERROR_PACKAGE_LENGTH_TOO_LARGE', 1201);
/**
 * <span class="simpara">      Package length not found.     </span>
 */
define('SWOOLE_ERROR_PACKAGE_LENGTH_NOT_FOUND', 1202);
/**
 * <span class="simpara">      Data length too large.     </span>
 */
define('SWOOLE_ERROR_DATA_LENGTH_TOO_LARGE', 1203);
/**
 * <span class="simpara">      Package malformed error data.     </span>
 */
define('SWOOLE_ERROR_PACKAGE_MALFORMED_DATA', 1204);
/**
 * <span class="simpara">      Task package too big.     </span>
 */
define('SWOOLE_ERROR_TASK_PACKAGE_TOO_BIG', 2001);
/**
 * <span class="simpara">      Task dispatch fail.     </span>
 */
define('SWOOLE_ERROR_TASK_DISPATCH_FAIL', 2002);
/**
 * <span class="simpara">      Task timeout.     </span>
 */
define('SWOOLE_ERROR_TASK_TIMEOUT', 2003);
/**
 * <span class="simpara">      Http2 stream id too big.     </span>
 */
define('SWOOLE_ERROR_HTTP2_STREAM_ID_TOO_BIG', 3001);
/**
 * <span class="simpara">      Http2 stream no header.     </span>
 */
define('SWOOLE_ERROR_HTTP2_STREAM_NO_HEADER', 3002);
/**
 * <span class="simpara">      Http2 stream not found.     </span>
 */
define('SWOOLE_ERROR_HTTP2_STREAM_NOT_FOUND', 3003);
/**
 * <span class="simpara">      Http2 stream ignore.     </span>
 */
define('SWOOLE_ERROR_HTTP2_STREAM_IGNORE', 3004);
/**
 * <span class="simpara">      Aio bad request.     </span>
 */
define('SWOOLE_ERROR_AIO_BAD_REQUEST', 4001);
/**
 * <span class="simpara">      Aio canceled.     </span>
 */
define('SWOOLE_ERROR_AIO_CANCELED', 4002);
/**
 * <span class="simpara">      Aio timeout.     </span>
 */
define('SWOOLE_ERROR_AIO_TIMEOUT', 4003);
/**
 * <span class="simpara">      Client no connection.     </span>
 */
define('SWOOLE_ERROR_CLIENT_NO_CONNECTION', 5001);
/**
 * <span class="simpara">      Socket closed.     </span>
 */
define('SWOOLE_ERROR_SOCKET_CLOSED', 6001);
/**
 * <span class="simpara">      Socket poll timeout.     </span>
 */
define('SWOOLE_ERROR_SOCKET_POLL_TIMEOUT', 6002);
/**
 * <span class="simpara">      Socks5 unsupport version.     </span>
 */
define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_VERSION', 7001);
/**
 * <span class="simpara">      Socks5 unsupport method.     </span>
 */
define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_METHOD', 7002);
/**
 * <span class="simpara">      Socks5 auth failed.     </span>
 */
define('SWOOLE_ERROR_SOCKS5_AUTH_FAILED', 7003);
/**
 * <span class="simpara">      Socks5 server error.     </span>
 */
define('SWOOLE_ERROR_SOCKS5_SERVER_ERROR', 7004);
/**
 * <span class="simpara">      Socks5 handshake failed.     </span>
 */
define('SWOOLE_ERROR_SOCKS5_HANDSHAKE_FAILED', 7005);
/**
 * <span class="simpara">      Http proxy handshake error.     </span>
 */
define('SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_ERROR', 7101);
/**
 * <span class="simpara">      Http invalid protocol.     </span>
 */
define('SWOOLE_ERROR_HTTP_INVALID_PROTOCOL', 7102);
/**
 * <span class="simpara">      Http proxy handshake failed.     </span>
 */
define('SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_FAILED', 7103);
/**
 * <span class="simpara">      Http proxy bad response.     </span>
 */
define('SWOOLE_ERROR_HTTP_PROXY_BAD_RESPONSE', 7104);
/**
 * <span class="simpara">      Websocket bad client.     </span>
 */
define('SWOOLE_ERROR_WEBSOCKET_BAD_CLIENT', 8501);
/**
 * <span class="simpara">      Websocket bad opcode.     </span>
 */
define('SWOOLE_ERROR_WEBSOCKET_BAD_OPCODE', 8502);
/**
 * <span class="simpara">      Websocket unconnected.     </span>
 */
define('SWOOLE_ERROR_WEBSOCKET_UNCONNECTED', 8503);
/**
 * <span class="simpara">      Websocket handshake failed.     </span>
 */
define('SWOOLE_ERROR_WEBSOCKET_HANDSHAKE_FAILED', 8504);
/**
 * <span class="simpara">      Websocket pack failed.     </span>
 */
define('SWOOLE_ERROR_WEBSOCKET_PACK_FAILED', 8505);
/**
 * <span class="simpara">      Websocket unpack failed.     </span>
 */
define('SWOOLE_ERROR_WEBSOCKET_UNPACK_FAILED', 8506);
/**
 * <span class="simpara">      Websocket incomplete packet.     </span>
 */
define('SWOOLE_ERROR_WEBSOCKET_INCOMPLETE_PACKET', 8507);
/**
 * <span class="simpara">      Server must be created before client.     </span>
 */
define('SWOOLE_ERROR_SERVER_MUST_CREATED_BEFORE_CLIENT', 9001);
/**
 * <span class="simpara">      Server too many socket.     </span>
 */
define('SWOOLE_ERROR_SERVER_TOO_MANY_SOCKET', 9002);
/**
 * <span class="simpara">      Server worker terminated.     </span>
 */
define('SWOOLE_ERROR_SERVER_WORKER_TERMINATED', 9003);
/**
 * <span class="simpara">      Server invalid listen port.     </span>
 */
define('SWOOLE_ERROR_SERVER_INVALID_LISTEN_PORT', 9004);
/**
 * <span class="simpara">      Server too many listen port.     </span>
 */
define('SWOOLE_ERROR_SERVER_TOO_MANY_LISTEN_PORT', 9005);
/**
 * <span class="simpara">      Server pipe buffer full.     </span>
 */
define('SWOOLE_ERROR_SERVER_PIPE_BUFFER_FULL', 9006);
/**
 * <span class="simpara">      Server no idle worker.     </span>
 */
define('SWOOLE_ERROR_SERVER_NO_IDLE_WORKER', 9007);
/**
 * <span class="simpara">      Server only start one.     </span>
 */
define('SWOOLE_ERROR_SERVER_ONLY_START_ONE', 9008);
/**
 * <span class="simpara">      Server send in master.     </span>
 */
define('SWOOLE_ERROR_SERVER_SEND_IN_MASTER', 9009);
/**
 * <span class="simpara">      Server invalid request.     </span>
 */
define('SWOOLE_ERROR_SERVER_INVALID_REQUEST', 9010);
/**
 * <span class="simpara">      Server connect failed.     </span>
 */
define('SWOOLE_ERROR_SERVER_CONNECT_FAIL', 9011);
/**
 * <span class="simpara">      Server invalid command.     </span>
 */
define('SWOOLE_ERROR_SERVER_INVALID_COMMAND', 9012);
/**
 * <span class="simpara">      Server worker exit timeout.     </span>
 */
define('SWOOLE_ERROR_SERVER_WORKER_EXIT_TIMEOUT', 9101);
/**
 * <span class="simpara">      Server worker abnormal pipe data.     </span>
 */
define('SWOOLE_ERROR_SERVER_WORKER_ABNORMAL_PIPE_DATA', 9102);
/**
 * <span class="simpara">      Server worker unprocessed data.     </span>
 */
define('SWOOLE_ERROR_SERVER_WORKER_UNPROCESSED_DATA', 9103);
/**
 * <span class="simpara">      Coroutine out of coroutine.     </span>
 */
define('SWOOLE_ERROR_CO_OUT_OF_COROUTINE', 10001);
/**
 * <span class="simpara">      Coroutine has been bound.     </span>
 */
define('SWOOLE_ERROR_CO_HAS_BEEN_BOUND', 10002);
/**
 * <span class="simpara">      Coroutine has been discarded.     </span>
 */
define('SWOOLE_ERROR_CO_HAS_BEEN_DISCARDED', 10003);
/**
 * <span class="simpara">      Coroutine mutex double unlock.     </span>
 */
define('SWOOLE_ERROR_CO_MUTEX_DOUBLE_UNLOCK', 10004);
/**
 * <span class="simpara">      Coroutine block object locked.     </span>
 */
define('SWOOLE_ERROR_CO_BLOCK_OBJECT_LOCKED', 10005);
/**
 * <span class="simpara">      Coroutine block object waiting.     </span>
 */
define('SWOOLE_ERROR_CO_BLOCK_OBJECT_WAITING', 10006);
/**
 * <span class="simpara">      Coroutine yield failed.     </span>
 */
define('SWOOLE_ERROR_CO_YIELD_FAILED', 10007);
/**
 * <span class="simpara">      Coroutine getcontext failed.     </span>
 */
define('SWOOLE_ERROR_CO_GETCONTEXT_FAILED', 10008);
/**
 * <span class="simpara">      Coroutine swapcontext failed.     </span>
 */
define('SWOOLE_ERROR_CO_SWAPCONTEXT_FAILED', 10009);
/**
 * <span class="simpara">      Coroutine makecontext failed.     </span>
 */
define('SWOOLE_ERROR_CO_MAKECONTEXT_FAILED', 10010);
/**
 * <span class="simpara">      Coroutine iocpinit failed.     </span>
 */
define('SWOOLE_ERROR_CO_IOCPINIT_FAILED', 10011);
/**
 * <span class="simpara">      Coroutine protect stack failed.     </span>
 */
define('SWOOLE_ERROR_CO_PROTECT_STACK_FAILED', 10012);
/**
 * <span class="simpara">      Coroutine std thread link error.     </span>
 */
define('SWOOLE_ERROR_CO_STD_THREAD_LINK_ERROR', 10013);
/**
 * <span class="simpara">      Coroutine disabled multi thread.     </span>
 */
define('SWOOLE_ERROR_CO_DISABLED_MULTI_THREAD', 10014);
/**
 * <span class="simpara">      Coroutine cannot cancel.     </span>
 */
define('SWOOLE_ERROR_CO_CANNOT_CANCEL', 10015);
/**
 * <span class="simpara">      Coroutine not exists.     </span>
 */
define('SWOOLE_ERROR_CO_NOT_EXISTS', 10016);
/**
 * <span class="simpara">      Coroutine canceled.     </span>
 */
define('SWOOLE_ERROR_CO_CANCELED', 10017);
/**
 * <span class="simpara">      Coroutine timedout.     </span>
 */
define('SWOOLE_ERROR_CO_TIMEDOUT', 10018);
/**
 * <span class="simpara">      Record server log flag.     </span>
 */
define('SWOOLE_TRACE_SERVER', 2);
/**
 * <span class="simpara">      Record client log flag.     </span>
 */
define('SWOOLE_TRACE_CLIENT', 4);
/**
 * <span class="simpara">      Record buffer log flag.     </span>
 */
define('SWOOLE_TRACE_BUFFER', 8);
/**
 * <span class="simpara">      Record connect log flag.     </span>
 */
define('SWOOLE_TRACE_CONN', 16);
/**
 * <span class="simpara">      Record event log flag.     </span>
 */
define('SWOOLE_TRACE_EVENT', 32);
/**
 * <span class="simpara">      Record worker log flag.     </span>
 */
define('SWOOLE_TRACE_WORKER', 64);
/**
 * <span class="simpara">      Record memory log flag.     </span>
 */
define('SWOOLE_TRACE_MEMORY', 128);
/**
 * <span class="simpara">      Record reactor log flag.     </span>
 */
define('SWOOLE_TRACE_REACTOR', 256);
/**
 * <span class="simpara">      Record php log flag.     </span>
 */
define('SWOOLE_TRACE_PHP', 512);
/**
 * <span class="simpara">      Record http log flag.     </span>
 */
define('SWOOLE_TRACE_HTTP', 1024);
/**
 * <span class="simpara">      Record http2 log flag.     </span>
 */
define('SWOOLE_TRACE_HTTP2', 2048);
/**
 * <span class="simpara">      Record eof protocol log flag.     </span>
 */
define('SWOOLE_TRACE_EOF_PROTOCOL', 4096);
/**
 * <span class="simpara">      Record length protocol log flag.     </span>
 */
define('SWOOLE_TRACE_LENGTH_PROTOCOL', 8192);
/**
 * <span class="simpara">      Record close event log flag.     </span>
 */
define('SWOOLE_TRACE_CLOSE', 16384);
/**
 * <span class="simpara">      Record websocket log flag.     </span>
 */
define('SWOOLE_TRACE_WEBSOCKET', 32768);
/**
 * <span class="simpara">      Record redis client log flag.     </span>
 */
define('SWOOLE_TRACE_REDIS_CLIENT', 65536);
/**
 * <span class="simpara">      Record mysql client log flag.     </span>
 */
define('SWOOLE_TRACE_MYSQL_CLIENT', 131072);
/**
 * <span class="simpara">      Record http client log flag.     </span>
 */
define('SWOOLE_TRACE_HTTP_CLIENT', 262144);
/**
 * <span class="simpara">      Record AIO log flag.     </span>
 */
define('SWOOLE_TRACE_AIO', 524288);
/**
 * <span class="simpara">      Record SSL log flag.     </span>
 */
define('SWOOLE_TRACE_SSL', 1048576);
/**
 * <span class="simpara">      Record normal log flag.     </span>
 */
define('SWOOLE_TRACE_NORMAL', 2097152);
/**
 * <span class="simpara">      Record channel log flag.     </span>
 */
define('SWOOLE_TRACE_CHANNEL', 4194304);
/**
 * <span class="simpara">      Record timer log flag.     </span>
 */
define('SWOOLE_TRACE_TIMER', 8388608);
/**
 * <span class="simpara">      Record socket log flag.     </span>
 */
define('SWOOLE_TRACE_SOCKET', 16777216);
/**
 * <span class="simpara">      Record coroutine log flag.     </span>
 */
define('SWOOLE_TRACE_COROUTINE', 33554432);
/**
 * <span class="simpara">      Record context log flag.     </span>
 */
define('SWOOLE_TRACE_CONTEXT', 67108864);
/**
 * <span class="simpara">      Record coroutine http server log flag.     </span>
 */
define('SWOOLE_TRACE_CO_HTTP_SERVER', 134217728);
/**
 * <span class="simpara">      Record table log flag.     </span>
 */
define('SWOOLE_TRACE_TABLE', 268435456);
/**
 * <span class="simpara">      Record coroutine curl log flag.     </span>
 */
define('SWOOLE_TRACE_CO_CURL', 536870912);
/**
 * <span class="simpara">      Record cares log flag.     </span>
 */
define('SWOOLE_TRACE_CARES', 1073741824);
/**
 * <span class="simpara">      Record all level log flag.     </span>
 */
define('SWOOLE_TRACE_ALL', 9223372036854775807);
/**
 * <span class="simpara">      Record debug level log flag.     </span>
 */
define('SWOOLE_LOG_DEBUG', 0);
/**
 * <span class="simpara">      Record trace level log flag.     </span>
 */
define('SWOOLE_LOG_TRACE', 1);
/**
 * <span class="simpara">      Record info level log flag.     </span>
 */
define('SWOOLE_LOG_INFO', 2);
/**
 * <span class="simpara">      Record notice level log flag.     </span>
 */
define('SWOOLE_LOG_NOTICE', 3);
/**
 * <span class="simpara">      Record warning level log flag.     </span>
 */
define('SWOOLE_LOG_WARNING', 4);
/**
 * <span class="simpara">      Record error level log flag.     </span>
 */
define('SWOOLE_LOG_ERROR', 5);
/**
 * <span class="simpara">      Equivalent to turning off log information, log information will not be thrown.     </span>
 */
define('SWOOLE_LOG_NONE', 6);
/**
 * <span class="simpara">      disable log rotation.     </span>
 */
define('SWOOLE_LOG_ROTATION_SINGLE', 0);
/**
 * <span class="simpara">      Rotate logs monthly.     </span>
 */
define('SWOOLE_LOG_ROTATION_MONTHLY', 1);
/**
 * <span class="simpara">      Rotate logs daily.     </span>
 */
define('SWOOLE_LOG_ROTATION_DAILY', 2);
/**
 * <span class="simpara">      Rotate logs hourly.     </span>
 */
define('SWOOLE_LOG_ROTATION_HOURLY', 3);
/**
 * <span class="simpara">      Rotate logs every minute.     </span>
 */
define('SWOOLE_LOG_ROTATION_EVERY_MINUTE', 4);
/**
 * <span class="simpara">      Do not use any inter-process communication (IPC) features.     </span>
 */
define('SWOOLE_IPC_NONE', 0);
/**
 * <span class="simpara">      For inter-process communication (IPC), using Unix domain sockets (UnixSocket) in coroutine mode      is highly recommended.     </span>
 */
define('SWOOLE_IPC_UNIXSOCK', 1);
/**
 * <span class="simpara">      To use sockets for inter-process communication (IPC),      the listen method must be called to specify the address and port to monitor.     </span>
 */
define('SWOOLE_IPC_SOCKET', 3);
/**
 * <span class="simpara">      MAX iov limit.     </span>
 */
define('SWOOLE_IOV_MAX', 1024);

define('SWOOLE_FILELOCK', 2);
/**
 * <span class="simpara">      Mutex lock.     </span>
 */
define('SWOOLE_MUTEX', 3);

define('SWOOLE_SEM', 4);
/**
 * <span class="simpara">      RW lock.     </span>
 */
define('SWOOLE_RWLOCK', 1);
/**
 * <span class="simpara">      Spin lock.     </span>
 */
define('SWOOLE_SPINLOCK', 5);
/**
 * <span class="simpara">      Minimum supported timer interval (in milliseconds).     </span>
 */
define('SWOOLE_TIMER_MIN_MS', 1);
/**
 * <span class="simpara">      Minimum supported timer interval (in seconds).     </span>
 */
define('SWOOLE_TIMER_MIN_SEC', 0.001);
/**
 * <span class="simpara">      Maximum supported timer interval (in milliseconds).     </span>
 */
define('SWOOLE_TIMER_MAX_MS', 9223372036854775807);
/**
 * <span class="simpara">      Maximum supported timer interval (in seconds).     </span>
 */
define('SWOOLE_TIMER_MAX_SEC', 9.2233720368548E+15);

define('SWOOLE_DEFAULT_MAX_CORO_NUM', 100000);
/**
 * <span class="simpara">      Maximum number of coroutines created(PHP_INT_MAX).     </span>
 */
define('SWOOLE_CORO_MAX_NUM_LIMIT', 9223372036854775807);
/**
 * <span class="simpara">      Coroutine initializing.     </span>
 */
define('SWOOLE_CORO_INIT', 0);
/**
 * <span class="simpara">      Coroutine yield.     </span>
 */
define('SWOOLE_CORO_WAITING', 1);
/**
 * <span class="simpara">      Coroutine completed     </span>
 */
define('SWOOLE_CORO_RUNNING', 2);
/**
 * <span class="simpara">      Coroutine completed.     </span>
 */
define('SWOOLE_CORO_END', 3);
/**
 * <span class="simpara">      Executing exit() function in coroutine.     </span>
 */
define('SWOOLE_EXIT_IN_COROUTINE', 2);
/**
 * <span class="simpara">      Executing exit() function in server.     </span>
 */
define('SWOOLE_EXIT_IN_SERVER', 4);

define('SWOOLE_CHANNEL_OK', 0);

define('SWOOLE_CHANNEL_TIMEOUT', -1);

define('SWOOLE_CHANNEL_CLOSED', -2);

define('SWOOLE_CHANNEL_CANCELED', -3);
/**
 * <span class="simpara">      Coroutine-based stream of TCP Socket type, including the most common ones like Redis, PDO, Mysqli.     </span>
 */
define('SWOOLE_HOOK_TCP', 2);
/**
 * <span class="simpara">      Coroutine-based stream of UDP Socket type.     </span>
 */
define('SWOOLE_HOOK_UDP', 4);
/**
 * <span class="simpara">      Coroutine-based stream for Unix Stream Socket type.     </span>
 */
define('SWOOLE_HOOK_UNIX', 8);
/**
 * <span class="simpara">      Coroutine-based stream for UDG Stream Socket type.     </span>
 */
define('SWOOLE_HOOK_UDG', 16);
/**
 * <span class="simpara">      Coroutine-based stream for SSL Stream Socket type.     </span>
 */
define('SWOOLE_HOOK_SSL', 32);
/**
 * <span class="simpara">      Coroutine-based stream for TLS Stream Socket type.     </span>
 */
define('SWOOLE_HOOK_TLS', 64);
/**
 * <span class="simpara">      Coroutine-based stream_*() function.     </span>
 */
define('SWOOLE_HOOK_STREAM_FUNCTION', 128);

define('SWOOLE_HOOK_STREAM_SELECT', 128);
/**
 * <span class="simpara">      Coroutine-based file operations.     </span>
 */
define('SWOOLE_HOOK_FILE', 256);
/**
 * <span class="simpara">      Coroutine-based STDIO operations.     </span>
 */
define('SWOOLE_HOOK_STDIO', 32768);
/**
 * <span class="simpara">      Coroutine-based sleep operations, including sleep, usleep, time_nanosleep, time_sleep_until.     </span>
 */
define('SWOOLE_HOOK_SLEEP', 512);
/**
 * <span class="simpara">      Coroutine-based proc* functions, including: proc_open, proc_close, proc_get_status, proc_terminate.     </span>
 */
define('SWOOLE_HOOK_PROC', 1024);
/**
 * <span class="simpara">      Coroutine-based for curl extension.     </span>
 */
define('SWOOLE_HOOK_CURL', 2048);
/**
 * <span class="simpara">      Coroutine-based for native curl extension.     </span>
 */
define('SWOOLE_HOOK_NATIVE_CURL', 4096);
/**
 * <span class="simpara">      Coroutine-based for blocking function, include gethostbyname, exec, shell_exec.     </span>
 */
define('SWOOLE_HOOK_BLOCKING_FUNCTION', 8192);
/**
 * <span class="simpara">      Coroutine-based for the sockets extension     </span>
 */
define('SWOOLE_HOOK_SOCKETS', 16384);
/**
 * <span class="simpara">      Coroutine-based for all block functions and extensions.     </span>
 */
define('SWOOLE_HOOK_ALL', 2147481599);
/**
 * <span class="simpara">      Socket ecanceled error.     </span>
 */
define('SOCKET_ECANCELED', 125);
/**
 * <span class="simpara">      Connection timeout, the server is not listening on the port or there is a network failure,      you can read \$errCode to get the specific network error code.     </span>
 */
define('SWOOLE_HTTP_CLIENT_ESTATUS_CONNECT_FAILED', -1);
/**
 * <span class="simpara">      Request timeout, the server did not return a response within the specified timeout time.     </span>
 */
define('SWOOLE_HTTP_CLIENT_ESTATUS_REQUEST_TIMEOUT', -2);
/**
 * <span class="simpara">      After the client's request is sent, the server forcefully disconnects the connection.     </span>
 */
define('SWOOLE_HTTP_CLIENT_ESTATUS_SERVER_RESET', -3);
/**
 * <span class="simpara">      Client send failed (this constant is available in Swoole version &gt;= v4.5.9,      for versions less than this, please use the status code).     </span>
 */
define('SWOOLE_HTTP_CLIENT_ESTATUS_SEND_FAILED', -4);

define('SWOOLE_MYSQLND_CR_UNKNOWN_ERROR', 2000);

define('SWOOLE_MYSQLND_CR_CONNECTION_ERROR', 2002);

define('SWOOLE_MYSQLND_CR_SERVER_GONE_ERROR', 2006);

define('SWOOLE_MYSQLND_CR_OUT_OF_MEMORY', 2008);

define('SWOOLE_MYSQLND_CR_SERVER_LOST', 2013);

define('SWOOLE_MYSQLND_CR_COMMANDS_OUT_OF_SYNC', 2014);

define('SWOOLE_MYSQLND_CR_CANT_FIND_CHARSET', 2019);

define('SWOOLE_MYSQLND_CR_MALFORMED_PACKET', 2027);

define('SWOOLE_MYSQLND_CR_NOT_IMPLEMENTED', 2054);

define('SWOOLE_MYSQLND_CR_NO_PREPARE_STMT', 2030);

define('SWOOLE_MYSQLND_CR_PARAMS_NOT_BOUND', 2031);

define('SWOOLE_MYSQLND_CR_INVALID_PARAMETER_NO', 2034);

define('SWOOLE_MYSQLND_CR_INVALID_BUFFER_USE', 2035);

define('SWOOLE_REDIS_MODE_MULTI', 0);

define('SWOOLE_REDIS_MODE_PIPELINE', 1);

define('SWOOLE_REDIS_TYPE_NOT_FOUND', 0);

define('SWOOLE_REDIS_TYPE_STRING', 1);

define('SWOOLE_REDIS_TYPE_SET', 2);

define('SWOOLE_REDIS_TYPE_LIST', 3);

define('SWOOLE_REDIS_TYPE_ZSET', 4);

define('SWOOLE_REDIS_TYPE_HASH', 5);

define('SWOOLE_REDIS_ERR_IO', 1);

define('SWOOLE_REDIS_ERR_OTHER', 2);

define('SWOOLE_REDIS_ERR_EOF', 3);

define('SWOOLE_REDIS_ERR_PROTOCOL', 4);

define('SWOOLE_REDIS_ERR_OOM', 5);

define('SWOOLE_REDIS_ERR_CLOSED', 6);

define('SWOOLE_REDIS_ERR_NOAUTH', 7);

define('SWOOLE_REDIS_ERR_ALLOC', 8);
/**
 * <span class="simpara">      HTTP2 data frame.     </span>
 */
define('SWOOLE_HTTP2_TYPE_DATA', 0);
/**
 * <span class="simpara">      HTTP2 headers frame.     </span>
 */
define('SWOOLE_HTTP2_TYPE_HEADERS', 1);
/**
 * <span class="simpara">      HTTP2 priority frame.     </span>
 */
define('SWOOLE_HTTP2_TYPE_PRIORITY', 2);
/**
 * <span class="simpara">      HTTP2 rst stream frame.     </span>
 */
define('SWOOLE_HTTP2_TYPE_RST_STREAM', 3);
/**
 * <span class="simpara">      HTTP2 settings frame.     </span>
 */
define('SWOOLE_HTTP2_TYPE_SETTINGS', 4);
/**
 * <span class="simpara">      HTTP2 push promise frame.     </span>
 */
define('SWOOLE_HTTP2_TYPE_PUSH_PROMISE', 5);
/**
 * <span class="simpara">      HTTP2 ping frame.     </span>
 */
define('SWOOLE_HTTP2_TYPE_PING', 6);
/**
 * <span class="simpara">      HTTP2 goaway frame.     </span>
 */
define('SWOOLE_HTTP2_TYPE_GOAWAY', 7);
/**
 * <span class="simpara">      HTTP2 window update frame.     </span>
 */
define('SWOOLE_HTTP2_TYPE_WINDOW_UPDATE', 8);
/**
 * <span class="simpara">      HTTP2 continuation frame.     </span>
 */
define('SWOOLE_HTTP2_TYPE_CONTINUATION', 9);
/**
 * <span class="simpara">      HTTP2 no error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_NO_ERROR', 0);
/**
 * <span class="simpara">      HTTP2 protocol error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_PROTOCOL_ERROR', 1);
/**
 * <span class="simpara">      HTTP2 internal error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_INTERNAL_ERROR', 2);
/**
 * <span class="simpara">      HTTP2 flow control error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_FLOW_CONTROL_ERROR', 3);
/**
 * <span class="simpara">      HTTP2 setting timeout error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_SETTINGS_TIMEOUT', 4);
/**
 * <span class="simpara">      HTTP2 stream closed error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_STREAM_CLOSED', 5);
/**
 * <span class="simpara">      HTTP2 frame size error error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_FRAME_SIZE_ERROR', 6);
/**
 * <span class="simpara">      HTTP2 refused stream error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_REFUSED_STREAM', 7);
/**
 * <span class="simpara">      HTTP2 cancel error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_CANCEL', 8);
/**
 * <span class="simpara">      HTTP2 compression error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_COMPRESSION_ERROR', 9);
/**
 * <span class="simpara">      HTTP2 connect error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_CONNECT_ERROR', 10);
/**
 * <span class="simpara">      HTTP2 enhance your calm error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_ENHANCE_YOUR_CALM', 11);
/**
 * <span class="simpara">      HTTP2 inadequate security error.     </span>
 */
define('SWOOLE_HTTP2_ERROR_INADEQUATE_SECURITY', 12);
/**
 * <span class="simpara">      Basic mode.     </span>
 */
define('SWOOLE_BASE', 1);
/**
 * <span class="simpara">      Multi-process mode.     </span>
 */
define('SWOOLE_PROCESS', 2);
/**
 * <span class="simpara">      The task process communicates with the worker process using a Unix Socket.     </span>
 */
define('SWOOLE_IPC_UNSOCK', 1);
/**
 * <span class="simpara">      The task process communicates with the worker process using a sysvmsg queue.     </span>
 */
define('SWOOLE_IPC_MSGQUEUE', 2);
/**
 * <span class="simpara">      The task process communicates with the worker process using a preemptive mode over a sysvmsg queue.     </span>
 */
define('SWOOLE_IPC_PREEMPTIVE', 3);
/**
 * <span class="simpara">      Master process accept requests.     </span>
 */
define('SWOOLE_SERVER_COMMAND_MASTER', 2);
/**
 * <span class="simpara">      Manager process accept requests.     </span>
 */
define('SWOOLE_SERVER_COMMAND_MANAGER', 32);
/**
 * <span class="simpara">      Reactor thread accept requests.     </span>
 */
define('SWOOLE_SERVER_COMMAND_REACTOR_THREAD', 4);
/**
 * <span class="simpara">      Event worker thread process accept requests.     </span>
 */
define('SWOOLE_SERVER_COMMAND_EVENT_WORKER', 8);

define('SWOOLE_SERVER_COMMAND_WORKER', 8);
/**
 * <span class="simpara">      Task worker thread process accept requests.     </span>
 */
define('SWOOLE_SERVER_COMMAND_TASK_WORKER', 16);
/**
 * <span class="simpara">      Round robin mode, each Worker process will be allocated sequentially for every received connection.     </span>
 */
define('SWOOLE_DISPATCH_ROUND', 1);
/**
 * <span class="simpara">      Allocate Worker based on the connection's file descriptor. This ensures that data from the same connection      will be processed by the same Worker only.     </span>
 */
define('SWOOLE_DISPATCH_FDMOD', 2);
/**
 * <span class="simpara">      The main process will choose delivery based on the workload status of the Worker, delivering only to idle Workers.     </span>
 */
define('SWOOLE_DISPATCH_IDLE_WORKER', 3);
/**
 * <span class="simpara">      Allocate based on client IP using modulo hash, assigning to a specific Worker process.      This ensures that data from the same source IP connection will always be assigned to      the same Worker process. Algorithm: inet_addr_mod(ClientIP, worker_num).     </span>
 */
define('SWOOLE_DISPATCH_IPMOD', 4);
/**
 * <span class="simpara">      Requires binding a connection to a unique uid by calling Server-&gt;bind() in the user code.      Then, the underlying system allocates to different Worker processes based on the value of UID.      Algorithm: UID % worker_num. To use strings as UID, you can use crc32(UID_STRING).     </span>
 */
define('SWOOLE_DISPATCH_UIDMOD', 5);
/**
 * <span class="simpara">      Set a dispatch_func callback function, where its return value determines      which process handles the request.     </span>
 */
define('SWOOLE_DISPATCH_USERFUNC', 6);

define('SWOOLE_DISPATCH_STREAM', 7);
/**
 * <span class="simpara">      Determine which process handles the request based on the number of connections.     </span>
 */
define('SWOOLE_DISPATCH_CO_CONN_LB', 8);
/**
 * <span class="simpara">      Determine which process handles the request based on the number of requests.     </span>
 */
define('SWOOLE_DISPATCH_CO_REQ_LB', 9);

define('SWOOLE_DISPATCH_RESULT_DISCARD_PACKET', -1);

define('SWOOLE_DISPATCH_RESULT_CLOSE_CONNECTION', -2);

define('SWOOLE_DISPATCH_RESULT_USERFUNC_FALLBACK', -3);

define('SWOOLE_TASK_TMPFILE', 1);

define('SWOOLE_TASK_SERIALIZE', 2);

define('SWOOLE_TASK_NONBLOCK', 4);

define('SWOOLE_TASK_CALLBACK', 8);

define('SWOOLE_TASK_WAITALL', 16);

define('SWOOLE_TASK_COROUTINE', 32);

define('SWOOLE_TASK_PEEK', 64);

define('SWOOLE_TASK_NOREPLY', 128);
/**
 * <span class="simpara">      Process is busy.     </span>
 */
define('SWOOLE_WORKER_BUSY', 1);
/**
 * <span class="simpara">      Process is idle.     </span>
 */
define('SWOOLE_WORKER_IDLE', 2);
/**
 * <span class="simpara">      Process exited.     </span>
 */
define('SWOOLE_WORKER_EXIT', 3);
/**
 * <span class="simpara">      WebSocket is establishing a connection.     </span>
 */
define('SWOOLE_WEBSOCKET_STATUS_CONNECTION', 1);
/**
 * <span class="simpara">      The WebSocket is in the handshake phase.     </span>
 */
define('SWOOLE_WEBSOCKET_STATUS_HANDSHAKE', 2);
/**
 * <span class="simpara">      Active WebSocket connection.     </span>
 */
define('SWOOLE_WEBSOCKET_STATUS_ACTIVE', 3);
/**
 * <span class="simpara">      WebSocket connection is closed.     </span>
 */
define('SWOOLE_WEBSOCKET_STATUS_CLOSING', 4);
/**
 * <span class="simpara">      Websocket continuation frame.     </span>
 */
define('SWOOLE_WEBSOCKET_OPCODE_CONTINUATION', 0);
/**
 * <span class="simpara">      Websocket text frame.     </span>
 */
define('SWOOLE_WEBSOCKET_OPCODE_TEXT', 1);
/**
 * <span class="simpara">      Websocket binary frame.     </span>
 */
define('SWOOLE_WEBSOCKET_OPCODE_BINARY', 2);
/**
 * <span class="simpara">      Websocket close frame.     </span>
 */
define('SWOOLE_WEBSOCKET_OPCODE_CLOSE', 8);
/**
 * <span class="simpara">      Websocket ping frame.     </span>
 */
define('SWOOLE_WEBSOCKET_OPCODE_PING', 9);
/**
 * <span class="simpara">      Websocket pong frame.     </span>
 */
define('SWOOLE_WEBSOCKET_OPCODE_PONG', 10);
/**
 * <span class="simpara">      Websocket FIN flag.     </span>
 */
define('SWOOLE_WEBSOCKET_FLAG_FIN', 1);
/**
 * <span class="simpara">      Websocket RSV1 flag.     </span>
 */
define('SWOOLE_WEBSOCKET_FLAG_RSV1', 4);
/**
 * <span class="simpara">      Websocket RSV2 flag.     </span>
 */
define('SWOOLE_WEBSOCKET_FLAG_RSV2', 8);
/**
 * <span class="simpara">      Websocket RSV3 flag.     </span>
 */
define('SWOOLE_WEBSOCKET_FLAG_RSV3', 16);
/**
 * <span class="simpara">      Websocket MASK flag.     </span>
 */
define('SWOOLE_WEBSOCKET_FLAG_MASK', 32);
/**
 * <span class="simpara">      Websocket COMPRESS flag.     </span>
 */
define('SWOOLE_WEBSOCKET_FLAG_COMPRESS', 2);
/**
 * <span class="simpara">      Normal closure (connection completed successfully).     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_NORMAL', 1000);
/**
 * <span class="simpara">      Endpoint is going away (e.g., browser tab closed).     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_GOING_AWAY', 1001);
/**
 * <span class="simpara">      Protocol error (malformed data frame).     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_PROTOCOL_ERROR', 1002);
/**
 * <span class="simpara">      Received unsupported data (e.g., binary when expecting text).     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_DATA_ERROR', 1003);
/**
 * <span class="simpara">      No status code provided (sent as a placeholder).     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_STATUS_ERROR', 1005);
/**
 * <span class="simpara">      Abnormal closure (no close frame received, e.g., TCP reset).     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_ABNORMAL', 1006);
/**
 * <span class="simpara">      Invalid data (e.g., non-UTF-8 text in a text frame).     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_MESSAGE_ERROR', 1007);
/**
 * <span class="simpara">      Policy violation (e.g., unauthorized action).     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_POLICY_ERROR', 1008);
/**
 * <span class="simpara">      Message too large (exceeds server’s max size).     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_MESSAGE_TOO_BIG', 1009);
/**
 * <span class="simpara">      Client didn’t negotiate required extensions.     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_EXTENSION_MISSING', 1010);
/**
 * <span class="simpara">      Server encountered an error.     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_SERVER_ERROR', 1011);
/**
 * <span class="simpara">      TLS handshake failed (used when HTTPS fails).     </span>
 */
define('SWOOLE_WEBSOCKET_CLOSE_TLS', 1015);

define('WEBSOCKET_STATUS_CONNECTION', 1);

define('WEBSOCKET_STATUS_HANDSHAKE', 2);

define('WEBSOCKET_STATUS_FRAME', 3);

define('WEBSOCKET_STATUS_ACTIVE', 3);

define('WEBSOCKET_STATUS_CLOSING', 4);

define('WEBSOCKET_OPCODE_CONTINUATION', 0);

define('WEBSOCKET_OPCODE_TEXT', 1);

define('WEBSOCKET_OPCODE_BINARY', 2);

define('WEBSOCKET_OPCODE_CLOSE', 8);

define('WEBSOCKET_OPCODE_PING', 9);

define('WEBSOCKET_OPCODE_PONG', 10);

define('WEBSOCKET_CLOSE_NORMAL', 1000);

define('WEBSOCKET_CLOSE_GOING_AWAY', 1001);

define('WEBSOCKET_CLOSE_PROTOCOL_ERROR', 1002);

define('WEBSOCKET_CLOSE_DATA_ERROR', 1003);

define('WEBSOCKET_CLOSE_STATUS_ERROR', 1005);

define('WEBSOCKET_CLOSE_ABNORMAL', 1006);

define('WEBSOCKET_CLOSE_MESSAGE_ERROR', 1007);

define('WEBSOCKET_CLOSE_POLICY_ERROR', 1008);

define('WEBSOCKET_CLOSE_MESSAGE_TOO_BIG', 1009);

define('WEBSOCKET_CLOSE_EXTENSION_MISSING', 1010);

define('WEBSOCKET_CLOSE_SERVER_ERROR', 1011);

define('WEBSOCKET_CLOSE_TLS', 1015);
