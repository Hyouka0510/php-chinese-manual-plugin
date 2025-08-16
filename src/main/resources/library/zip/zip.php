<?php

// Start of zip v.1.14.0
use JetBrains\PhpStorm\Deprecated;
use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Internal\TentativeType;

/**
 * A file archive, compressed with Zip.
 * @link https://php.net/manual/en/class.ziparchive.php
 */
class ZipArchive implements Countable
{
    /**
     * Zip library version
     * @link https://php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const LIBZIP_VERSION = '1.7.3';

    /**
     * Create the archive if it does not exist.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CREATE = 1;

    /**
     * Error if archive already exists.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const EXCL = 2;

    /**
     * Perform additional consistency checks on the archive, and error if they fail.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CHECKCONS = 4;

    /**
     * Always start a new archive, this mode will overwrite the file if
     * it already exists.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const OVERWRITE = 8;

    /**
     * Ignore case on name lookup
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const FL_NOCASE = 1;

    /**
     * Ignore directory component
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const FL_NODIR = 2;

    /**
     * Read compressed data
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const FL_COMPRESSED = 4;

    /**
     * Use original data, ignoring changes.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const FL_UNCHANGED = 8;
    public const FL_RECOMPRESS = 16;
    public const FL_ENCRYPTED = 32;
    public const FL_OVERWRITE = 8192;
    public const FL_LOCAL = 256;
    public const FL_CENTRAL = 512;
    public const EM_TRAD_PKWARE = 1;
    public const EM_UNKNOWN = 65535;

    /**
     * better of deflate or store.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_DEFAULT = -1;

    /**
     * stored (uncompressed).
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_STORE = 0;

    /**
     * shrunk
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_SHRINK = 1;

    /**
     * reduced with factor 1
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_REDUCE_1 = 2;

    /**
     * reduced with factor 2
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_REDUCE_2 = 3;

    /**
     * reduced with factor 3
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_REDUCE_3 = 4;

    /**
     * reduced with factor 4
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_REDUCE_4 = 5;

    /**
     * imploded
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_IMPLODE = 6;

    /**
     * deflated
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_DEFLATE = 8;

    /**
     * deflate64
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_DEFLATE64 = 9;

    /**
     * PKWARE imploding
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_PKWARE_IMPLODE = 10;

    /**
     * BZIP2 algorithm
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const CM_BZIP2 = 12;
    public const CM_LZMA = 14;
    public const CM_TERSE = 18;
    public const CM_LZ77 = 19;
    public const CM_WAVPACK = 97;
    public const CM_PPMD = 98;

    /**
     * No error.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_OK = 0;

    /**
     * Multi-disk zip archives not supported.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_MULTIDISK = 1;

    /**
     * Renaming temporary file failed.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_RENAME = 2;

    /**
     * Closing zip archive failed
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_CLOSE = 3;

    /**
     * Seek error
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_SEEK = 4;

    /**
     * Read error
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_READ = 5;

    /**
     * Write error
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_WRITE = 6;

    /**
     * CRC error
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_CRC = 7;

    /**
     * Containing zip archive was closed
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_ZIPCLOSED = 8;

    /**
     * No such file.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_NOENT = 9;

    /**
     * File already exists
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_EXISTS = 10;

    /**
     * Can't open file
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_OPEN = 11;

    /**
     * Failure to create temporary file.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_TMPOPEN = 12;

    /**
     * Zlib error
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_ZLIB = 13;

    /**
     * Memory allocation failure
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_MEMORY = 14;

    /**
     * Entry has been changed
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_CHANGED = 15;

    /**
     * Compression method not supported.
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_COMPNOTSUPP = 16;

    /**
     * Premature EOF
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_EOF = 17;

    /**
     * Invalid argument
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_INVAL = 18;

    /**
     * Not a zip archive
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_NOZIP = 19;

    /**
     * Internal error
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_INTERNAL = 20;

    /**
     * Zip archive inconsistent
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_INCONS = 21;

    /**
     * Can't remove file
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_REMOVE = 22;

    /**
     * Entry has been deleted
     * @link https://php.net/manual/en/zip.constants.php
     */
    public const ER_DELETED = 23;

    /**
     * No encryption
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.2
     */
    public const EM_NONE = 0;

    /**
     * AES 128 encryption
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.2
     */
    public const EM_AES_128 = 257;

    /**
     * AES 192 encryption
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.2
     */
    public const EM_AES_192 = 258;

    /**
     * AES 256 encryption
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.2
     */
    public const EM_AES_256 = 259;

    /**
     * Open archive in read only mode
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const RDONLY = 16;

    /**
     * Guess string encoding (is default)
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.0.8
     */
    public const FL_ENC_GUESS = 0;

    /**
     * Get unmodified string
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.0.8
     */
    public const FL_ENC_RAW = 64;

    /**
     * Follow specification strictly
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.0.8
     */
    public const FL_ENC_STRICT = 128;

    /**
     * String is UTF-8 encoded
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.0.8
     */
    public const FL_ENC_UTF_8 = 2048;

    /**
     * String is CP437 encoded
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.0.8
     */
    public const FL_ENC_CP437 = 4096;

    /**
     * LZMA2 algorithm
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const CM_LZMA2 = 33;

    /**
     * XZ algorithm
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const CM_XZ = 95;

    /**
     * Encryption method not support
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const ER_ENCRNOTSUPP = 24;

    /**
     * Read-only archive
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const ER_RDONLY = 25;

    /**
     * No password provided
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const ER_NOPASSWD = 26;

    /**
     * Wrong password provided
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const ER_WRONGPASSWD = 27;

    /**
     * Operation not supported
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const ER_OPNOTSUPP = 28;

    /**
     * Resource still in use
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const ER_INUSE = 29;

    /**
     * Tell error
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const ER_TELL = 30;

    /**
     * Compressed data invalid
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const ER_COMPRESSED_DATA = 31;

    /**
     * Operation cancelled
     * @link https://secure.php.net/manual/en/zip.constants.php
     * @since 7.4.3
     */
    public const ER_CANCELLED = 32;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_DOS = 0;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_AMIGA = 1;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_OPENVMS = 2;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_UNIX = 3;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_VM_CMS = 4;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_ATARI_ST = 5;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_OS_2 = 6;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_MACINTOSH = 7;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_Z_SYSTEM = 8;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @removed 8.0 Use {@link ZipArchive::ZOPSYS_CPM} instead.
     * @since 5.6
     */
    public const OPSYS_Z_CPM = 9;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_WINDOWS_NTFS = 10;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_MVS = 11;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_VSE = 12;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_ACORN_RISC = 13;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_VFAT = 14;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_ALTERNATE_MVS = 15;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_BEOS = 16;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_TANDEM = 17;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_OS_400 = 18;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_OS_X = 19;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     */
    public const OPSYS_CPM = 9;

    /**
     * @link https://www.php.net/manual/en/zip.constants.php#ziparchive.constants.opsys.default
     * @since 5.6
     */
    public const OPSYS_DEFAULT = 3;
    public const FL_OPEN_FILE_NOW = 1073741824;
    public const CM_ZSTD = 93;
    public const ER_DATA_LENGTH = 33;
    public const ER_NOT_ALLOWED = 34;
    public const AFL_RDONLY = 2;
    public const AFL_IS_TORRENTZIP = 4;
    public const AFL_WANT_TORRENTZIP = 8;
    public const AFL_CREATE_OR_KEEP_FILE_FOR_EMPTY_ARCHIVE = 16;
    public const LENGTH_TO_END = 0;
    public const LENGTH_UNCHECKED = -2;

    /**
     * Status of the Zip Archive
     * @var int
     */
    #[LanguageLevelTypeAware(['8.1' => 'int'], default: '')]
    public $status;

    /**
     * System status of the Zip Archive
     * @var int
     */
    #[LanguageLevelTypeAware(['8.1' => 'int'], default: '')]
    public $statusSys;

    /**
     * Number of files in archive
     * @var int
     */
    #[LanguageLevelTypeAware(['8.1' => 'int'], default: '')]
    public $numFiles;

    /**
     * File name in the file system
     * @var string
     */
    #[LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $filename;

    /**
     * Comment for the archive
     * @var string
     */
    #[LanguageLevelTypeAware(['8.1' => 'string'], default: '')]
    public $comment;

    /**
     * @var int
     */
    #[LanguageLevelTypeAware(['8.1' => 'int'], default: '')]
    public $lastId;

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Open a ZIP file archive
     *
     * @link https://php.net/manual/en/ziparchive.open.php
     *
     * @param string $filename <p>
     * The file name of the ZIP archive to open.
     * </p>
     * @param int $flags [optional] <p>
     * The mode to use to open the archive.
     * </p>
     * <p>
     * <b>ZipArchive::OVERWRITE</b>
     * </p>
     *
     * @return int|bool <i>Error codes</i>
     * <p>
     * Returns <b>TRUE</b> on success, <b>FALSE</b> or the error code on error.
     * </p>
     * <p>
     * <b>ZipArchive::ER_EXISTS</b>
     * </p>
     * <p>
     * File already exists.
     * </p>
     * <p>
     * <b>ZipArchive::ER_INCONS</b>
     * </p>
     * <p>
     * Zip archive inconsistent.
     * </p>
     * <p>
     * <b>ZipArchive::ER_INVAL</b>
     * </p>
     * <p>
     * Invalid argument.
     * </p>
     * <p>
     * <b>ZipArchive::ER_MEMORY</b>
     * </p>
     * <p>
     * Malloc failure.
     * </p>
     * <p>
     * <b>ZipArchive::ER_NOENT</b>
     * </p>
     * <p>
     * No such file.
     * </p>
     * <p>
     * <b>ZipArchive::ER_NOZIP</b>
     * </p>
     * <p>
     * Not a zip archive.
     * </p>
     * <p>
     * <b>ZipArchive::ER_OPEN</b>
     * </p>
     * <p>
     * Can't open file.
     * </p>
     * <p>
     * <b>ZipArchive::ER_READ</b>
     * </p>
     * <p>
     * Read error.
     * </p>
     * <p>
     * <b>ZipArchive::ER_SEEK</b>
     * </p>
     * <p>
     * Seek error.
     * </p>
     */
    #[TentativeType]
    public function open(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $filename,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): int|bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Close the active archive (opened or newly created)
     * @link https://php.net/manual/en/ziparchive.close.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function close(): bool {}

    /**
     * (PHP 7 &gt;= 7.2.0, PECL zip &gt;= 1.15.0)<br/>
     * Counts the number of files in the archive.
     * @link https://www.php.net/manual/en/ziparchive.count.php
     * @return int
     * @since 7.2
     */
    #[TentativeType]
    public function count(): int {}

    /**
     * Returns the status error message, system and/or zip messages
     * @link https://php.net/manual/en/ziparchive.getstatusstring.php
     * @return string|false a string with the status message on success or <b>FALSE</b> on failure.
     * @since 5.2.7
     */
    #[TentativeType]
    public function getStatusString(): string {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.8.0)<br/>
     * Add a new directory
     * @link https://php.net/manual/en/ziparchive.addemptydir.php
     * @param string $dirname <p>
     * The directory to add.
     * </p>
     * @param int $flags [optional] Set how to manage name encoding (ZipArchive::FL_ENC_*) and entry replacement (ZipArchive::FL_OVERWRITE)
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function addEmptyDir(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $dirname,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags
    ): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Add a file to a ZIP archive using its contents
     * @link https://php.net/manual/en/ziparchive.addfromstring.php
     * @param string $name <p>
     * The name of the entry to create.
     * </p>
     * @param string $content <p>
     * The contents to use to create the entry. It is used in a binary
     * safe mode.
     * </p>
     * @param int $flags [optional] Set how to manage name encoding (ZipArchive::FL_ENC_*) and entry replacement (ZipArchive::FL_OVERWRITE)
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function addFromString(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $content,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = 8192
    ): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Adds a file to a ZIP archive from the given path
     * @link https://php.net/manual/en/ziparchive.addfile.php
     * @param string $filepath <p>
     * The path to the file to add.
     * </p>
     * @param string $entryname [optional] <p>
     * If supplied, this is the local name inside the ZIP archive that will override the <i>filename</i>.
     * </p>
     * @param int $start [optional] <p>
     * This parameter is not used but is required to extend <b>ZipArchive</b>.
     * </p>
     * @param int $length [optional] <p>
     * This parameter is not used but is required to extend <b>ZipArchive</b>.
     * </p>
     * @param int $flags [optional] Set how to manage name encoding (ZipArchive::FL_ENC_*) and entry replacement (ZipArchive::FL_OVERWRITE)
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function addFile(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $filepath,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $entryname = null,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $start = 0,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $length = 0,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = 8192
    ): bool {}

    /**
     * (PHP 5 &gt;= 5.3.0, PECL zip &gt;= 1.9.0)<br/>
     * Add files from a directory by glob pattern
     * @link https://php.net/manual/en/ziparchive.addglob.php
     * @param string $pattern <p>
     * A <b>glob</b> pattern against which files will be matched.
     * </p>
     * @param int $flags [optional] <p>
     * A bit mask of glob() flags.
     * </p>
     * @param array $options [optional] <p>
     * An associative array of options. Available options are:
     * </p>
     * <p>
     * "add_path"
     * </p>
     * <p>
     * Prefix to prepend when translating to the local path of the file within
     * the archive. This is applied after any remove operations defined by the
     * "remove_path" or "remove_all_path"
     * options.
     * </p>
     * @return array|false
     */
    #[TentativeType]
    public function addGlob(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $pattern,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = 0,
        array $options = []
    ): array|false {}

    /**
     * (PHP 5 &gt;= 5.3.0, PECL zip &gt;= 1.9.0)<br/>
     * Add files from a directory by PCRE pattern
     * @link https://php.net/manual/en/ziparchive.addpattern.php
     * @param string $pattern <p>
     * A PCRE pattern against which files will be matched.
     * </p>
     * @param string $path [optional] <p>
     * The directory that will be scanned. Defaults to the current working directory.
     * </p>
     * @param array $options [optional] <p>
     * An associative array of options accepted by <b>ZipArchive::addGlob</b>.
     * </p>
     * @return array|false
     */
    #[TentativeType]
    public function addPattern(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $pattern,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $path = '.',
        array $options = []
    ): array|false {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
     * Renames an entry defined by its index
     * @link https://php.net/manual/en/ziparchive.renameindex.php
     * @param int $index <p>
     * Index of the entry to rename.
     * </p>
     * @param string $new_name <p>
     * New name.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function renameIndex(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $new_name
    ): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
     * Renames an entry defined by its name
     * @link https://php.net/manual/en/ziparchive.renamename.php
     * @param string $name <p>
     * Name of the entry to rename.
     * </p>
     * @param string $new_name <p>
     * New name.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function renameName(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $new_name
    ): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.4.0)<br/>
     * Set the comment of a ZIP archive
     * @link https://php.net/manual/en/ziparchive.setarchivecomment.php
     * @param string $comment <p>
     * The contents of the comment.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function setArchiveComment(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $comment): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Returns the Zip archive comment
     * @link https://php.net/manual/en/ziparchive.getarchivecomment.php
     * @param int $flags [optional] <p>
     * If flags is set to <b>ZipArchive::FL_UNCHANGED</b>, the original unchanged
     * comment is returned.
     * </p>
     * @return string|false the Zip archive comment or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function getArchiveComment(#[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null): string|false {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.4.0)<br/>
     * Set the comment of an entry defined by its index
     * @link https://php.net/manual/en/ziparchive.setcommentindex.php
     * @param int $index <p>
     * Index of the entry.
     * </p>
     * @param string $comment <p>
     * The contents of the comment.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function setCommentIndex(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $comment
    ): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.4.0)<br/>
     * Set the comment of an entry defined by its name
     * @link https://php.net/manual/en/ziparchive.setcommentname.php
     * @param string $name <p>
     * Name of the entry.
     * </p>
     * @param string $comment <p>
     * The contents of the comment.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function setCommentName(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $comment
    ): bool {}

    /**
     * Set the compression method of an entry defined by its index
     * @link https://php.net/manual/en/ziparchive.setcompressionindex.php
     * @param int $index Index of the entry.
     * @param int $method The compression method. Either ZipArchive::CM_DEFAULT, ZipArchive::CM_STORE or ZipArchive::CM_DEFLATE.
     * @param int $compflags [optional] Compression flags. Currently unused.
     * @return bool Returns TRUE on success or FALSE on failure.
     * @since 7.0
     */
    #[TentativeType]
    public function setCompressionIndex(int $index, int $method, int $compflags = 0): bool {}

    /**
     * Set the compression method of an entry defined by its name
     * https://secure.php.net/manual/en/ziparchive.setcompressionname.php
     * @param string $name Name of the entry.
     * @param int $method The compression method. Either ZipArchive::CM_DEFAULT, ZipArchive::CM_STORE or ZipArchive::CM_DEFLATE.
     * @param int $compflags [optional] Compression flags. Currently unused.
     * @return bool Returns TRUE on success or FALSE on failure.
     * @since 7.0
     */
    #[TentativeType]
    public function setCompressionName(string $name, int $method, int $compflags = 0): bool {}

    /**
     * Set the encryption method of an entry defined by its index
     * @link https://php.net/manual/en/ziparchive.setencryptionindex.php
     * @param int $index Index of the entry.
     * @param int $method The encryption method defined by one of the ZipArchive::EM_ constants.
     * @param string|null $password [optional] Optional password, default used when missing.
     * @return bool Returns TRUE on success or FALSE on failure.
     * @since 7.2
     */
    #[TentativeType]
    public function setEncryptionIndex(int $index, int $method, ?string $password = null): bool {}

    /**
     * Set the encryption method of an entry defined by its name
     * @link https://php.net/manual/en/ziparchive.setencryptionname.php
     * @param string $name Name of the entry.
     * @param int $method The encryption method defined by one of the ZipArchive::EM_ constants.
     * @param string|null $password [optional] Optional password, default used when missing.
     * @return bool Returns TRUE on success or FALSE on failure.
     * @since 7.2
     */
    #[TentativeType]
    public function setEncryptionName(string $name, int $method, ?string $password = null): bool {}

    /**
     * (PHP 5 &gt;= 5.6.0, PECL zip &gt;= 1.12.0)<br/>
     * @param string $password
     * @return bool
     */
    #[TentativeType]
    public function setPassword(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $password): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.4.0)<br/>
     * Returns the comment of an entry using the entry index
     * @link https://php.net/manual/en/ziparchive.getcommentindex.php
     * @param int $index <p>
     * Index of the entry
     * </p>
     * @param int $flags [optional] <p>
     * If flags is set to <b>ZipArchive::FL_UNCHANGED</b>, the original unchanged
     * comment is returned.
     * </p>
     * @return string|false the comment on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function getCommentIndex(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): string|false {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.4.0)<br/>
     * Returns the comment of an entry using the entry name
     * @link https://php.net/manual/en/ziparchive.getcommentname.php
     * @param string $name <p>
     * Name of the entry
     * </p>
     * @param int $flags [optional] <p>
     * If flags is set to <b>ZipArchive::FL_UNCHANGED</b>, the original unchanged
     * comment is returned.
     * </p>
     * @return string|false the comment on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function getCommentName(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): string|false {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
     * delete an entry in the archive using its index
     * @link https://php.net/manual/en/ziparchive.deleteindex.php
     * @param int $index <p>
     * Index of the entry to delete.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function deleteIndex(#[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
     * delete an entry in the archive using its name
     * @link https://php.net/manual/en/ziparchive.deletename.php
     * @param string $name <p>
     * Name of the entry to delete.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function deleteName(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
     * Get the details of an entry defined by its name.
     * @link https://php.net/manual/en/ziparchive.statname.php
     * @param string $name <p>
     * Name of the entry
     * </p>
     * @param int $flags [optional] <p>
     * The flags argument specifies how the name lookup should be done.
     * Also, <b>ZipArchive::FL_UNCHANGED</b> may be ORed to it to request
     * information about the original file in the archive,
     * ignoring any changes made.
     * <b>ZipArchive::FL_NOCASE</b>
     * </p>
     * @return array{name: string, index: int, crc: int, size: int, mtime: int, comp_size: int, comp_method: int, encryption_method: int}|false an array containing the entry details or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function statName(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): array|false {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Get the details of an entry defined by its index.
     * @link https://php.net/manual/en/ziparchive.statindex.php
     * @param int $index <p>
     * Index of the entry
     * </p>
     * @param int $flags [optional] <p>
     * <b>ZipArchive::FL_UNCHANGED</b> may be ORed to it to request
     * information about the original file in the archive,
     * ignoring any changes made.
     * </p>
     * @return array{name: string, index: int, crc: int, size: int, mtime: int, comp_size: int, comp_method: int, encryption_method: int}|false an array containing the entry details or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function statIndex(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): array|false {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
     * Returns the index of the entry in the archive
     * @link https://php.net/manual/en/ziparchive.locatename.php
     * @param string $name <p>
     * The name of the entry to look up
     * </p>
     * @param int $flags [optional] <p>
     * The flags are specified by ORing the following values,
     * or 0 for none of them.
     * <b>ZipArchive::FL_NOCASE</b>
     * </p>
     * @return int|false the index of the entry on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function locateName(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): int|false {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
     * Returns the name of an entry using its index
     * @link https://php.net/manual/en/ziparchive.getnameindex.php
     * @param int $index <p>
     * Index of the entry.
     * </p>
     * @param int $flags [optional] <p>
     * If flags is set to <b>ZipArchive::FL_UNCHANGED</b>, the original unchanged
     * name is returned.
     * </p>
     * @return string|false the name on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function getNameIndex(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): string|false {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Revert all global changes done in the archive.
     * @link https://php.net/manual/en/ziparchive.unchangearchive.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function unchangeArchive(): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Undo all changes done in the archive
     * @link https://php.net/manual/en/ziparchive.unchangeall.php
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function unchangeAll(): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Revert all changes done to an entry at the given index
     * @link https://php.net/manual/en/ziparchive.unchangeindex.php
     * @param int $index <p>
     * Index of the entry.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function unchangeIndex(#[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.5.0)<br/>
     * Revert all changes done to an entry with the given name.
     * @link https://php.net/manual/en/ziparchive.unchangename.php
     * @param string $name <p>
     * Name of the entry.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function unchangeName(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Extract the archive contents
     * @link https://php.net/manual/en/ziparchive.extractto.php
     * @param string $pathto <p>
     * Location where to extract the files.
     * </p>
     * @param string[]|string|null $files [optional] <p>
     * The entries to extract. It accepts either a single entry name or
     * an array of names.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function extractTo(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $pathto,
        #[LanguageLevelTypeAware(['8.0' => 'array|string|null'], default: '')] $files = null
    ): bool {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Returns the entry contents using its name
     * @link https://php.net/manual/en/ziparchive.getfromname.php
     * @param string $name <p>
     * Name of the entry
     * </p>
     * @param int $len [optional] <p>
     * The length to be read from the entry. If 0, then the
     * entire entry is read.
     * </p>
     * @param int $flags [optional] <p>
     * The flags to use to open the archive. the following values may
     * be ORed to it.
     * <b>ZipArchive::FL_UNCHANGED</b>
     * </p>
     * @return string|false the contents of the entry on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function getFromName(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $len = 0,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): string|false {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.3.0)<br/>
     * Returns the entry contents using its index
     * @link https://php.net/manual/en/ziparchive.getfromindex.php
     * @param int $index <p>
     * Index of the entry
     * </p>
     * @param int $len [optional] <p>
     * The length to be read from the entry. If 0, then the
     * entire entry is read.
     * </p>
     * @param int $flags [optional] <p>
     * The flags to use to open the archive. the following values may
     * be ORed to it.
     * </p>
     * <p>
     * <b>ZipArchive::FL_UNCHANGED</b>
     * </p>
     * @return string|false the contents of the entry on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function getFromIndex(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $len = 0,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): string|false {}

    /**
     * (PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.1.0)<br/>
     * Get a file handler to the entry defined by its name (read only).
     * @link https://php.net/manual/en/ziparchive.getstream.php
     * @param string $name <p>
     * The name of the entry to use.
     * </p>
     * @return resource|false a file pointer (resource) on success or <b>FALSE</b> on failure.
     */
    public function getStream(#[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name) {}

    /**
     * (PHP 8 &gt;= 8.2.0, PECL zip &gt;= 1.20.0)<br/>
     * Get a file handler to the entry defined by its index (read only)
     * @link https://php.net/manual/en/ziparchive.getstreamindex.php
     * @param int $index <p>
     * Index of the entry
     * </p>
     * @param int $flags [optional] <p>
     * If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged stream is returned.
     * </p>
     * @return resource|false a file pointer (resource) on success or <b>FALSE</b> on failure.
     */
    public function getStreamIndex(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = 0
    ) {}

    /**
     * Set the external attributes of an entry defined by its name
     * @link https://www.php.net/manual/en/ziparchive.setexternalattributesname.php
     * @param string $name Name of the entry
     * @param int $opsys The operating system code defined by one of the ZipArchive::OPSYS_ constants.
     * @param int $attr The external attributes. Value depends on operating system.
     * @param int $flags [optional] Optional flags. Currently unused.
     * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function setExternalAttributesName(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $opsys,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $attr,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): bool {}

    /**
     * Retrieve the external attributes of an entry defined by its name
     * @link https://www.php.net/manual/en/ziparchive.getexternalattributesname.php
     * @param string $name Name of the entry
     * @param int &$opsys On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.
     * @param int &$attr On success, receive the external attributes. Value depends on operating system.
     * @param int $flags [optional] If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged attributes are returned.
     * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function getExternalAttributesName(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] &$opsys,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] &$attr,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): bool {}

    /**
     * Set the external attributes of an entry defined by its index
     * @link https://www.php.net/manual/en/ziparchive.setexternalattributesindex.php
     * @param int $index Index of the entry.
     * @param int $opsys The operating system code defined by one of the ZipArchive::OPSYS_ constants.
     * @param int $attr The external attributes. Value depends on operating system.
     * @param int $flags [optional] Optional flags. Currently unused.
     * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function setExternalAttributesIndex(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $opsys,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $attr,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): bool {}

    /**
     * Retrieve the external attributes of an entry defined by its index
     * @link https://www.php.net/manual/en/ziparchive.getexternalattributesindex.php
     * @param int $index Index of the entry.
     * @param int &$opsys On success, receive the operating system code defined by one of the ZipArchive::OPSYS_ constants.
     * @param int &$attr On success, receive the external attributes. Value depends on operating system.
     * @param int $flags [optional] If flags is set to ZipArchive::FL_UNCHANGED, the original unchanged attributes are returned.
     * @return bool Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */
    #[TentativeType]
    public function getExternalAttributesIndex(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] &$opsys,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] &$attr,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): bool {}

    #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')]
    public static function isEncryptionMethodSupported(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $method,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $enc = true
    ) {}

    #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')]
    public static function isCompressionMethodSupported(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $method,
        #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')] $enc = true
    ) {}

    #[TentativeType]
    public function registerCancelCallback(#[LanguageLevelTypeAware(['8.0' => 'callable'], default: '')] $callback): bool {}

    #[TentativeType]
    public function registerProgressCallback(
        #[LanguageLevelTypeAware(['8.0' => 'float'], default: '')] $rate,
        #[LanguageLevelTypeAware(['8.0' => 'callable'], default: '')] $callback
    ): bool {}

    #[TentativeType]
    public function setMtimeName(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $timestamp,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): bool {}

    #[TentativeType]
    public function setMtimeIndex(
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $timestamp,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): bool {}

    #[TentativeType]
    public function replaceFile(
        #[LanguageLevelTypeAware(['8.0' => 'string'], default: '')] $filepath,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $index,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $start = null,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $length = null,
        #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')] $flags = null
    ): bool {}

    #[LanguageLevelTypeAware(['8.0' => 'void'], default: '')]
    public function clearError() {}

    /**
     * @param int $flag
     * @param int $value
     * @return bool
     */
    #[LanguageLevelTypeAware(['8.0' => 'bool'], default: '')]
    public function setArchiveFlag(
        #[LanguageLevelTypeAware(['8.3' => 'int'], default: '')] $flag,
        #[LanguageLevelTypeAware(['8.3' => 'int'], default: '')] $value
    ) {}

    /**
     * @param int $flag
     * @param int $flags
     * @return int
     */
    #[LanguageLevelTypeAware(['8.0' => 'int'], default: '')]
    public function getArchiveFlag(
        #[LanguageLevelTypeAware(['8.3' => 'int'], default: '')] $flag,
        #[LanguageLevelTypeAware(['8.3' => 'int'], default: '')] $flags = 0
    ) {}

    /**
     * @param string $name
     * @param int $flags
     * @return void
     */
    public function getStreamName(
        #[LanguageLevelTypeAware(['8.2' => 'string'], default: '')] $name,
        #[LanguageLevelTypeAware(['8.2' => 'int'], default: '')] $flags = 0
    ) {}
}

/**
 * <div id="function.zip-open" class="refentry"> <div class="refnamediv">  <h1 class="refname">zip_open</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_open</span> — <span class="dc-title">打开 ZIP 文件归档</span></p> </div> <div id="function.zip-open-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 8.0.0 起被<em>废弃</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.zip-open-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>zip_open</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$filename</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   打开一个新的ZIP归档文件进行读取。   </p> </div> <div class="refsect1 parameters" id="refsect1-function.zip-open-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">filename</span></dt>     <dd>      <p class="para">       待打开ZIP归档的文件名。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.zip-open-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功的时候返回资源句柄供 <span class="function">{@link zip_read()}</span> 和 <span class="function">{@link zip_close()}</span> 后续使用；如果   <span class="parameter" style="color:#3A95FF">filename</span> 文件不存在或者出现其他错误，则会返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> 或相应的错误码。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.zip-open-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        弃用此函数，取而代之的是对象 API，请参阅 <span class="methodname" style="color:#CC7832">{@link ZipArchive::open()}</span>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.zip-open-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link zip_read()} - 读取 ZIP 文件归档中下一项</span></li>    <li><span class="function">{@link zip_close()} - 关闭一个ZIP档案文件</span></li>   </ul>   </div></div>
 * 
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.0.0)<br/>
 * Open a ZIP file archive
 * @link https://php.net/manual/zh/function.zip-open.php
 * @param string $filename <p>
 * The file name of the ZIP archive to open.
 * </p>
 * @return resource|int|false a resource handle for later use with
 * <b>zip_read</b> and <b>zip_close</b>
 * or returns the number of error if <i>filename</i> does not
 * exist or in case of other error.
 * @deprecated 8.0 Use {@link ZipArchive} instead.
 */
function zip_open(string $filename) {}

/**
 * <div id="function.zip-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">zip_close</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_close</span> — <span class="dc-title">关闭一个ZIP档案文件</span></p> </div> <div id="function.zip-close-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 8.0.0 起被<em>废弃</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.zip-close-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>zip_close</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$zip</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.void.php" class="type void" style="color:#EAB766">void</a></span></div>  <p class="para rdfs-comment">   关闭一个指定的ZIP档案文件。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.zip-close-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">zip</span></dt>     <dd>      <p class="para">       一个由<span class="function">{@link zip_open()}</span>打开的ZIP文件资源。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.zip-close-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   没有返回值。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.zip-close-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        弃用此函数，取而代之的是对象 API，请参阅 <span class="methodname" style="color:#CC7832">{@link ZipArchive::close()}</span>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.zip-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link zip_open()} - 打开 ZIP 文件归档</span></li>    <li><span class="function">{@link zip_read()} - 读取 ZIP 文件归档中下一项</span></li>   </ul>   </div></div>
 * 
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.0.0)<br/>
 * Close a ZIP file archive
 * @link https://php.net/manual/zh/function.zip-close.php
 * @param resource $zip <p>
 * A ZIP file previously opened with <b>zip_open</b>.
 * </p>
 * @return void No value is returned.
 * @deprecated 8.0 Use {@link ZipArchive} instead.
 */
function zip_close($zip): void {}

/**
 * <div id="function.zip-read" class="refentry"> <div class="refnamediv">  <h1 class="refname">zip_read</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_read</span> — <span class="dc-title">读取 ZIP 文件归档中下一项</span></p> </div> <div id="function.zip-read-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 8.0.0 起被<em>废弃</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.zip-read-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>zip_read</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$zip</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   读取 ZIP 文件归档中下一项。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.zip-read-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">zip</span></dt>     <dd>      <p class="para">        一个ZIP压缩文件,该ZIP归档文件之前应由函数 <span class="function">{@link zip_open()}</span> 打开。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.zip-read-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功的时候返回该当前实体资源供<span class="literal">zip_entry_...</span> 系列函数后续使用;    如果没有更多的读取项，则会返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>   如果遇到错误则会返回相应的错误码。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.zip-read-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        弃用此函数，取而代之的是对象 API，请参阅 <span class="methodname" style="color:#CC7832">{@link ZipArchive::statIndex()}</span>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.zip-read-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link zip_open()} - 打开 ZIP 文件归档</span></li>    <li><span class="function">{@link zip_close()} - 关闭一个ZIP档案文件</span></li>    <li><span class="function">{@link zip_entry_open()} - 打开用于读取的目录实体</span></li>    <li><span class="function">{@link zip_entry_read()} - 读取一个打开了的压缩目录实体</span></li>   </ul>   </div></div>
 * 
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.0.0)<br/>
 * Read next entry in a ZIP file archive
 * @link https://php.net/manual/zh/function.zip-read.php
 * @param resource $zip <p>
 * A ZIP file previously opened with <b>zip_open</b>.
 * </p>
 * @return resource|false a directory entry resource for later use with the
 * zip_entry_... functions, or <b>FALSE</b> if
 * there are no more entries to read, or an error code if an error
 * occurred.
 * @deprecated 8.0 Use {@link ZipArchive} instead.
 */
function zip_read($zip) {}

/**
 * <div id="function.zip-entry-open" class="refentry"> <div class="refnamediv">  <h1 class="refname">zip_entry_open</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_open</span> — <span class="dc-title">打开用于读取的目录实体</span></p> </div> <div id="function.zip-entry-open-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 8.0.0 起被<em>废弃</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.zip-entry-open-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>zip_entry_open</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$zip_dp</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$zip_entry</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$mode</span><span class="initializer"> = "rb"</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   打开ZIP文件中的目录实体以便后续读取。   </p> </div> <div class="refsect1 parameters" id="refsect1-function.zip-entry-open-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">zip_dp</span></dt>     <dd>      <p class="para">       由函数<span class="function">{@link zip_open()}</span>返回的有效的资源句柄。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">zip_entry</span></dt>     <dd>      <p class="para">       由函数<span class="function">{@link zip_read()}</span>返回的目录实体。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">mode</span></dt>     <dd>      <p class="para">       任何在<span class="function">{@link fopen()}</span>处理文档中指定的模式。      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        </p><p class="para">        由于ZIP在PHP中只支持读取模式，所以<span class="parameter" style="color:#3A95FF">mode</span>         实际上总是被设置为<span class="literal">"rb"</span>(其他模式会被忽略)。       </p>      </blockquote>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-open-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p>  <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:    </p><p class="para">    与<span class="function">{@link fopen()}</span>和其他类似的方法不同，<span class="function"><strong>zip_entry_open()</strong></span>    的返回值只用于标示该操作结果，不需要读取或关闭该目录实体。   </p>  </blockquote> </div> <div class="refsect1 changelog" id="refsect1-function.zip-entry-open-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        弃用此函数，取而代之的是对象 API。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.zip-entry-open-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link zip_entry_close()} - 关闭目录项</span></li>    <li><span class="function">{@link zip_entry_read()} - 读取一个打开了的压缩目录实体</span></li>   </ul>   </div></div>
 * 
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.0.0)<br/>
 * Open a directory entry for reading
 * @link https://php.net/manual/zh/function.zip-entry-open.php
 * @param resource $zip_dp <p>
 * A valid resource handle returned by <b>zip_open</b>.
 * </p>
 * @param resource $zip_entry <p>
 * A directory entry returned by <b>zip_read</b>.
 * </p>
 * @param string $mode [optional] <p>
 * Any of the modes specified in the documentation of
 * <b>fopen</b>.
 * </p>
 * <p>
 * Currently, <i>mode</i> is ignored and is always
 * "rb". This is due to the fact that zip support
 * in PHP is read only access.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * <p>
 * Unlike <b>fopen</b> and other similar functions,
 * the return value of <b>zip_entry_open</b> only
 * indicates the result of the operation and is not needed for
 * reading or closing the directory entry.
 * </p>
 */
#[Deprecated(reason: 'This function is deprecated in favor of the Object API', since: "8.0")]
function zip_entry_open($zip_dp, $zip_entry, string $mode = 'rb'): bool {}

/**
 * <div id="function.zip-entry-close" class="refentry"> <div class="refnamediv">  <h1 class="refname">zip_entry_close</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_close</span> — <span class="dc-title">关闭目录项</span></p> </div> <div id="function.zip-entry-close-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 8.0.0 起被<em>废弃</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.zip-entry-close-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>zip_entry_close</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$zip_entry</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="para rdfs-comment">   关闭指定的目录项。   </p> </div> <div class="refsect1 parameters" id="refsect1-function.zip-entry-close-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">zip_entry</span></dt>     <dd>      <p class="para">       一个由<span class="function">{@link zip_entry_open()}</span>打开的项目。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-close-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.zip-entry-close-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        弃用此函数，取而代之的是对象 API。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.zip-entry-close-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link zip_entry_open()} - 打开用于读取的目录实体</span></li>    <li><span class="function">{@link zip_entry_read()} - 读取一个打开了的压缩目录实体</span></li>   </ul>   </div></div>
 * 
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.0.0)<br/>
 * Close a directory entry
 * @link https://php.net/manual/zh/function.zip-entry-close.php
 * @param resource $zip_entry <p>
 * A directory entry previously opened <b>zip_entry_open</b>.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * @deprecated 8.0 Use {@link ZipArchive} instead.
 */
function zip_entry_close($zip_entry): bool {}

/**
 * <div id="function.zip-entry-read" class="refentry"> <div class="refnamediv">  <h1 class="refname">zip_entry_read</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_read</span> — <span class="dc-title">读取一个打开了的压缩目录实体</span></p> </div> <div id="function.zip-entry-read-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 8.0.0 起被<em>废弃</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.zip-entry-read-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>zip_entry_read</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$zip_entry</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$len</span><span class="initializer"> = 1024</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   读取一个打开了的压缩目录实体。  </p> </div> <div class="refsect1 parameters" id="refsect1-function.zip-entry-read-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">zip_entry</span></dt>     <dd>      <p class="para">       由函数<span class="function">{@link zip_read()}</span> 返回的目录实体。      </p>     </dd>             <dt><span class="parameter" style="color:#3A95FF">len</span></dt>     <dd>      <p class="para">       需要返回的字节数。      </p>      <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:        </p><p class="para">        这字节数应该是你所要读取的未压缩的字节数。       </p>      </blockquote>     </dd>       </dl>   </div> <div class="refsect1 changelog" id="refsect1-function.zip-entry-read-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        弃用此函数，取而代之的是对象 API，请参阅 <span class="methodname" style="color:#CC7832">{@link ZipArchive::getFromIndex()}</span>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.zip-entry-read-seealso">  <h3 class="title">返回值</h3>  <p class="para">   成功的时候返回读取到的数据；到达文件末尾的时候返回一个空的字符串；   读取出错的时候则会返回<strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>   </p> </div> <div class="refsect1 seealso" id="refsect1-function.zip-entry-read-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link zip_entry_open()} - 打开用于读取的目录实体</span></li>    <li><span class="function">{@link zip_entry_close()} - 关闭目录项</span></li>    <li><span class="function">{@link zip_entry_filesize()} - 检索目录实体的实际大小</span></li>   </ul>   </div></div>
 * 
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.0.0)<br/>
 * Read from an open directory entry
 * @link https://php.net/manual/zh/function.zip-entry-read.php
 * @param resource $zip_entry <p>
 * A directory entry returned by <b>zip_read</b>.
 * </p>
 * @param int $len [optional] <p>
 * The number of bytes to return.
 * </p>
 * <p>
 * This should be the uncompressed length you wish to read.
 * </p>
 * @return string|false the data read, empty string on end of a file, or <b>FALSE</b> on error.
 * @deprecated 8.0 Use {@link ZipArchive} instead.
 */
function zip_entry_read($zip_entry, int $len = 1024): string|false {}

/**
 * <div id="function.zip-entry-filesize" class="refentry"> <div class="refnamediv">  <h1 class="refname">zip_entry_filesize</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_filesize</span> — <span class="dc-title">检索目录实体的实际大小</span></p> </div> <div id="function.zip-entry-filesize-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 8.0.0 起被<em>废弃</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.zip-entry-filesize-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>zip_entry_filesize</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$zip_entry</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   返回指定目录实体的实际大小。   </p> </div> <div class="refsect1 parameters" id="refsect1-function.zip-entry-filesize-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">zip_entry</span></dt>     <dd>      <p class="para">       由函数<span class="function">{@link zip_read()}</span> 返回的目录实体。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-filesize-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   返回该目录实体的大小， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.zip-entry-filesize-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        弃用此函数，取而代之的是对象 API，请参阅 <span class="methodname" style="color:#CC7832">{@link ZipArchive::statIndex()}</span>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.zip-entry-filesize-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link zip_open()} - 打开 ZIP 文件归档</span></li>    <li><span class="function">{@link zip_read()} - 读取 ZIP 文件归档中下一项</span></li>   </ul>   </div></div>
 * 
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.0.0)<br/>
 * Retrieve the actual file size of a directory entry
 * @link https://php.net/manual/zh/function.zip-entry-filesize.php
 * @param resource $zip_entry <p>
 * A directory entry returned by <b>zip_read</b>.
 * </p>
 * @return int|false The size of the directory entry.
 * @deprecated 8.0 Use {@link ZipArchive} instead.
 */
function zip_entry_filesize($zip_entry): int|false {}

/**
 * <div id="function.zip-entry-name" class="refentry"> <div class="refnamediv">  <h1 class="refname">zip_entry_name</h1>                   <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_name</span> — <span class="dc-title">检索目录项的名称</span></p> </div> <div id="function.zip-entry-name-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 8.0.0 起被<em>废弃</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.zip-entry-name-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>zip_entry_name</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$zip_entry</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   返回指定目录项的名称。   </p> </div> <div class="refsect1 parameters" id="refsect1-function.zip-entry-name-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">zip_entry</span></dt>     <dd>      <p class="para">       由函数<span class="function">{@link zip_read()}</span> 返回的目录项。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-name-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   目录项的名称， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.zip-entry-name-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        弃用此函数，取而代之的是对象 API，请参阅 <span class="methodname" style="color:#CC7832">{@link ZipArchive::statIndex()}</span>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.zip-entry-name-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link zip_open()} - 打开 ZIP 文件归档</span></li>    <li><span class="function">{@link zip_read()} - 读取 ZIP 文件归档中下一项</span></li>   </ul>   </div></div>
 * 
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.0.0)<br/>
 * Retrieve the name of a directory entry
 * @link https://php.net/manual/zh/function.zip-entry-name.php
 * @param resource $zip_entry <p>
 * A directory entry returned by <b>zip_read</b>.
 * </p>
 * @return string|false The name of the directory entry.
 * @deprecated 8.0 Use {@link ZipArchive} instead.
 */
function zip_entry_name($zip_entry): string|false {}

/**
 * <div id="function.zip-entry-compressedsize" class="refentry"> <div class="refnamediv">  <h1 class="refname">zip_entry_compressedsize</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_compressedsize</span> — <span class="dc-title">检索目录项压缩过后的大小</span></p> </div> <div id="function.zip-entry-compressedsize-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 8.0.0 起被<em>废弃</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.zip-entry-compressedsize-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>zip_entry_compressedsize</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$zip_entry</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   返回指定目录项压缩过后的大小。   </p> </div> <div class="refsect1 parameters" id="refsect1-function.zip-entry-compressedsize-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">zip_entry</span></dt>     <dd>      <p class="para">       由函数<span class="function">{@link zip_read()}</span> 返回的目录项。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-compressedsize-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   压缩后的大小， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.zip-entry-compressedsize-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        弃用此函数，取而代之的是对象 API，请参阅 <span class="methodname" style="color:#CC7832">{@link ZipArchive::statIndex()}</span>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.zip-entry-compressedsize-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link zip_open()} - 打开 ZIP 文件归档</span></li>    <li><span class="function">{@link zip_read()} - 读取 ZIP 文件归档中下一项</span></li>   </ul>   </div></div>
 * 
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.0.0)<br/>
 * Retrieve the compressed size of a directory entry
 * @link https://php.net/manual/zh/function.zip-entry-compressedsize.php
 * @param resource $zip_entry <p>
 * A directory entry returned by <b>zip_read</b>.
 * </p>
 * @return int|false The compressed size.
 * @deprecated 8.0 Use {@link ZipArchive} instead.
 */
function zip_entry_compressedsize($zip_entry): int|false {}

/**
 * <div id="function.zip-entry-compressionmethod" class="refentry"> <div class="refnamediv">  <h1 class="refname">zip_entry_compressionmethod</h1>  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PHP 7, PHP 8, PECL zip &gt;= 1.0.0)</p><p class="refpurpose"><span class="refname">zip_entry_compressionmethod</span> — <span class="dc-title">检索目录实体的压缩方法</span></p> </div> <div id="function.zip-entry-compressionmethod-refsynopsisdiv">   <div class="warning"><strong class="warning">警告</strong><p class="simpara">本函数已自 PHP 8.0.0 起被<em>废弃</em>。强烈建议不要依赖本函数。</p></div> </div> <div class="refsect1 description" id="refsect1-function.zip-entry-compressionmethod-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="attribute"><a href="https://php.net/manual/zh/class.deprecated.php">#[\Deprecated]</a> </span><br>   <span class="methodname" style="color:#CC7832"><strong>zip_entry_compressionmethod</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.resource.php" class="type resource" style="color:#EAB766">resource</a></span> <span class="parameter" style="color:#3A95FF">\$zip_entry</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.singleton.php" class="type false" style="color:#EAB766">false</a></span></span></div>  <p class="para rdfs-comment">   返回由函数<span class="parameter" style="color:#3A95FF">zip_entry</span>确定的目录实体的压缩方法。   </p> </div> <div class="refsect1 parameters" id="refsect1-function.zip-entry-compressionmethod-parameters">  <h3 class="title">参数</h3>  <p class="para">   </p><dl>         <dt><span class="parameter" style="color:#3A95FF">zip_entry</span></dt>     <dd>      <p class="para">       由函数<span class="function">{@link zip_read()}</span> 返回的目录实体。      </p>     </dd>       </dl>   </div> <div class="refsect1 returnvalues" id="refsect1-function.zip-entry-compressionmethod-returnvalues">  <h3 class="title">返回值</h3>  <p class="para">   压缩方法， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 changelog" id="refsect1-function.zip-entry-compressionmethod-changelog">  <h3 class="title">更新日志</h3>  <p class="para">   </p><table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>8.0.0</td>       <td>        弃用此函数，取而代之的是对象 API，请参阅 <span class="methodname" style="color:#CC7832">{@link ZipArchive::statIndex()}</span>。       </td>      </tr>     </tbody>       </table>   </div> <div class="refsect1 seealso" id="refsect1-function.zip-entry-compressionmethod-seealso">  <h3 class="title">参见</h3>  <p class="para">   </p><ul class="simplelist">    <li><span class="function">{@link zip_open()} - 打开 ZIP 文件归档</span></li>    <li><span class="function">{@link zip_read()} - 读取 ZIP 文件归档中下一项</span></li>   </ul>   </div></div>
 * 
 * (PHP 4 &gt;= 4.1.0, PHP 5 &gt;= 5.2.0, PECL zip &gt;= 1.0.0)<br/>
 * Retrieve the compression method of a directory entry
 * @link https://php.net/manual/zh/function.zip-entry-compressionmethod.php
 * @param resource $zip_entry <p>
 * A directory entry returned by <b>zip_read</b>.
 * </p>
 * @return string|false The compression method.
 * @deprecated 8.0 Use {@link ZipArchive} instead.
 */
function zip_entry_compressionmethod($zip_entry): string|false {}

// End of zip v.1.11.0
