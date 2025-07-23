<?php

// Start of rpminfo v.0.5.0

const RPMVERSION = '4.15.1';
const RPMSENSE_ANY = 0;
const RPMSENSE_LESS = 2;
const RPMSENSE_GREATER = 4;
const RPMSENSE_EQUAL = 8;
const RPMSENSE_POSTTRANS = 32;
const RPMSENSE_PREREQ = 64;
const RPMSENSE_PRETRANS = 128;
const RPMSENSE_INTERP = 256;
const RPMSENSE_SCRIPT_PRE = 512;
const RPMSENSE_SCRIPT_POST = 1024;
const RPMSENSE_SCRIPT_PREUN = 2048;
const RPMSENSE_SCRIPT_POSTUN = 4096;
const RPMSENSE_SCRIPT_VERIFY = 8192;
const RPMSENSE_FIND_REQUIRES = 16384;
const RPMSENSE_FIND_PROVIDES = 32768;
const RPMSENSE_TRIGGERIN = 65536;
const RPMSENSE_TRIGGERUN = 131072;
const RPMSENSE_TRIGGERPOSTUN = 262144;
const RPMSENSE_MISSINGOK = 524288;
const RPMSENSE_RPMLIB = 16777216;
const RPMSENSE_TRIGGERPREIN = 33554432;
const RPMSENSE_KEYRING = 67108864;
const RPMSENSE_CONFIG = 268435456;
const RPMMIRE_DEFAULT = 0;
const RPMMIRE_STRCMP = 1;
const RPMMIRE_REGEX = 2;
const RPMMIRE_GLOB = 3;
const RPMTAG_ARCH = 1022;
const RPMTAG_ARCHIVESIZE = 1046;
const RPMTAG_BASENAMES = 1117;
const RPMTAG_BUGURL = 5012;
const RPMTAG_BUILDARCHS = 1089;
const RPMTAG_BUILDHOST = 1007;
const RPMTAG_BUILDTIME = 1006;
const RPMTAG_C = 1054;
const RPMTAG_CHANGELOGNAME = 1081;
const RPMTAG_CHANGELOGTEXT = 1082;
const RPMTAG_CHANGELOGTIME = 1080;
const RPMTAG_CLASSDICT = 1142;
const RPMTAG_CONFLICTFLAGS = 1053;
const RPMTAG_CONFLICTNAME = 1054;
const RPMTAG_CONFLICTNEVRS = 5044;
const RPMTAG_CONFLICTS = 1054;
const RPMTAG_CONFLICTVERSION = 1055;
const RPMTAG_COOKIE = 1094;
const RPMTAG_DBINSTANCE = 1195;
const RPMTAG_DEPENDSDICT = 1145;
const RPMTAG_DESCRIPTION = 1005;
const RPMTAG_DIRINDEXES = 1116;
const RPMTAG_DIRNAMES = 1118;
const RPMTAG_DISTRIBUTION = 1010;
const RPMTAG_DISTTAG = 1155;
const RPMTAG_DISTURL = 1123;
const RPMTAG_DSAHEADER = 267;
const RPMTAG_E = 1003;
const RPMTAG_ENCODING = 5062;
const RPMTAG_ENHANCEFLAGS = 5057;
const RPMTAG_ENHANCENAME = 5055;
const RPMTAG_ENHANCENEVRS = 5061;
const RPMTAG_ENHANCES = 5055;
const RPMTAG_ENHANCEVERSION = 5056;
const RPMTAG_EPOCH = 1003;
const RPMTAG_EPOCHNUM = 5019;
const RPMTAG_EVR = 5013;
const RPMTAG_EXCLUDEARCH = 1059;
const RPMTAG_EXCLUDEOS = 1060;
const RPMTAG_EXCLUSIVEARCH = 1061;
const RPMTAG_EXCLUSIVEOS = 1062;
const RPMTAG_FILECAPS = 5010;
const RPMTAG_FILECLASS = 1141;
const RPMTAG_FILECOLORS = 1140;
const RPMTAG_FILECONTEXTS = 1147;
const RPMTAG_FILEDEPENDSN = 1144;
const RPMTAG_FILEDEPENDSX = 1143;
const RPMTAG_FILEDEVICES = 1095;
const RPMTAG_FILEDIGESTALGO = 5011;
const RPMTAG_FILEDIGESTS = 1035;
const RPMTAG_FILEFLAGS = 1037;
const RPMTAG_FILEGROUPNAME = 1040;
const RPMTAG_FILEINODES = 1096;
const RPMTAG_FILELANGS = 1097;
const RPMTAG_FILELINKTOS = 1036;
const RPMTAG_FILEMD5S = 1035;
const RPMTAG_FILEMODES = 1030;
const RPMTAG_FILEMTIMES = 1034;
const RPMTAG_FILENAMES = 5000;
const RPMTAG_FILENLINKS = 5045;
const RPMTAG_FILEPROVIDE = 5001;
const RPMTAG_FILERDEVS = 1033;
const RPMTAG_FILEREQUIRE = 5002;
const RPMTAG_FILESIGNATURELENGTH = 5091;
const RPMTAG_FILESIGNATURES = 5090;
const RPMTAG_FILESIZES = 1028;
const RPMTAG_FILESTATES = 1029;
const RPMTAG_FILETRIGGERCONDS = 5086;
const RPMTAG_FILETRIGGERFLAGS = 5072;
const RPMTAG_FILETRIGGERINDEX = 5070;
const RPMTAG_FILETRIGGERNAME = 5069;
const RPMTAG_FILETRIGGERPRIORITIES = 5084;
const RPMTAG_FILETRIGGERSCRIPTFLAGS = 5068;
const RPMTAG_FILETRIGGERSCRIPTPROG = 5067;
const RPMTAG_FILETRIGGERSCRIPTS = 5066;
const RPMTAG_FILETRIGGERTYPE = 5087;
const RPMTAG_FILETRIGGERVERSION = 5071;
const RPMTAG_FILEUSERNAME = 1039;
const RPMTAG_FILEVERIFYFLAGS = 1045;
const RPMTAG_FSCONTEXTS = 1148;
const RPMTAG_GIF = 1012;
const RPMTAG_GROUP = 1016;
const RPMTAG_HDRID = 269;
const RPMTAG_HEADERCOLOR = 5017;
const RPMTAG_HEADERI18NTABLE = 100;
const RPMTAG_HEADERIMAGE = 61;
const RPMTAG_HEADERIMMUTABLE = 63;
const RPMTAG_HEADERREGIONS = 64;
const RPMTAG_HEADERSIGNATURES = 62;
const RPMTAG_ICON = 1043;
const RPMTAG_INSTALLCOLOR = 1127;
const RPMTAG_INSTALLTID = 1128;
const RPMTAG_INSTALLTIME = 1008;
const RPMTAG_INSTFILENAMES = 5040;
const RPMTAG_INSTPREFIXES = 1099;
const RPMTAG_LICENSE = 1014;
const RPMTAG_LONGARCHIVESIZE = 271;
const RPMTAG_LONGFILESIZES = 5008;
const RPMTAG_LONGSIGSIZE = 270;
const RPMTAG_LONGSIZE = 5009;
const RPMTAG_MODULARITYLABEL = 5096;
const RPMTAG_N = 1000;
const RPMTAG_NAME = 1000;
const RPMTAG_NEVR = 5015;
const RPMTAG_NEVRA = 5016;
const RPMTAG_NOPATCH = 1052;
const RPMTAG_NOSOURCE = 1051;
const RPMTAG_NVR = 5014;
const RPMTAG_NVRA = 1196;
const RPMTAG_O = 1090;
const RPMTAG_OBSOLETEFLAGS = 1114;
const RPMTAG_OBSOLETENAME = 1090;
const RPMTAG_OBSOLETENEVRS = 5043;
const RPMTAG_OBSOLETES = 1090;
const RPMTAG_OBSOLETEVERSION = 1115;
const RPMTAG_OLDENHANCES = 1159;
const RPMTAG_OLDENHANCESFLAGS = 1161;
const RPMTAG_OLDENHANCESNAME = 1159;
const RPMTAG_OLDENHANCESVERSION = 1160;
const RPMTAG_OLDFILENAMES = 1027;
const RPMTAG_OLDSUGGESTS = 1156;
const RPMTAG_OLDSUGGESTSFLAGS = 1158;
const RPMTAG_OLDSUGGESTSNAME = 1156;
const RPMTAG_OLDSUGGESTSVERSION = 1157;
const RPMTAG_OPTFLAGS = 1122;
const RPMTAG_ORDERFLAGS = 5037;
const RPMTAG_ORDERNAME = 5035;
const RPMTAG_ORDERVERSION = 5036;
const RPMTAG_ORIGBASENAMES = 1120;
const RPMTAG_ORIGDIRINDEXES = 1119;
const RPMTAG_ORIGDIRNAMES = 1121;
const RPMTAG_ORIGFILENAMES = 5007;
const RPMTAG_OS = 1021;
const RPMTAG_P = 1047;
const RPMTAG_PACKAGER = 1015;
const RPMTAG_PATCH = 1019;
const RPMTAG_PATCHESFLAGS = 1134;
const RPMTAG_PATCHESNAME = 1133;
const RPMTAG_PATCHESVERSION = 1135;
const RPMTAG_PAYLOADCOMPRESSOR = 1125;
const RPMTAG_PAYLOADDIGEST = 5092;
const RPMTAG_PAYLOADDIGESTALGO = 5093;
const RPMTAG_PAYLOADFLAGS = 1126;
const RPMTAG_PAYLOADFORMAT = 1124;
const RPMTAG_PKGID = 261;
const RPMTAG_PLATFORM = 1132;
const RPMTAG_POLICIES = 1150;
const RPMTAG_POLICYFLAGS = 5033;
const RPMTAG_POLICYNAMES = 5030;
const RPMTAG_POLICYTYPES = 5031;
const RPMTAG_POLICYTYPESINDEXES = 5032;
const RPMTAG_POSTIN = 1024;
const RPMTAG_POSTINFLAGS = 5021;
const RPMTAG_POSTINPROG = 1086;
const RPMTAG_POSTTRANS = 1152;
const RPMTAG_POSTTRANSFLAGS = 5025;
const RPMTAG_POSTTRANSPROG = 1154;
const RPMTAG_POSTUN = 1026;
const RPMTAG_POSTUNFLAGS = 5023;
const RPMTAG_POSTUNPROG = 1088;
const RPMTAG_PREFIXES = 1098;
const RPMTAG_PREIN = 1023;
const RPMTAG_PREINFLAGS = 5020;
const RPMTAG_PREINPROG = 1085;
const RPMTAG_PRETRANS = 1151;
const RPMTAG_PRETRANSFLAGS = 5024;
const RPMTAG_PRETRANSPROG = 1153;
const RPMTAG_PREUN = 1025;
const RPMTAG_PREUNFLAGS = 5022;
const RPMTAG_PREUNPROG = 1087;
const RPMTAG_PROVIDEFLAGS = 1112;
const RPMTAG_PROVIDENAME = 1047;
const RPMTAG_PROVIDENEVRS = 5042;
const RPMTAG_PROVIDES = 1047;
const RPMTAG_PROVIDEVERSION = 1113;
const RPMTAG_PUBKEYS = 266;
const RPMTAG_R = 1002;
const RPMTAG_RECOMMENDFLAGS = 5048;
const RPMTAG_RECOMMENDNAME = 5046;
const RPMTAG_RECOMMENDNEVRS = 5058;
const RPMTAG_RECOMMENDS = 5046;
const RPMTAG_RECOMMENDVERSION = 5047;
const RPMTAG_RECONTEXTS = 1149;
const RPMTAG_RELEASE = 1002;
const RPMTAG_REMOVETID = 1129;
const RPMTAG_REQUIREFLAGS = 1048;
const RPMTAG_REQUIRENAME = 1049;
const RPMTAG_REQUIRENEVRS = 5041;
const RPMTAG_REQUIRES = 1049;
const RPMTAG_REQUIREVERSION = 1050;
const RPMTAG_RPMVERSION = 1064;
const RPMTAG_RSAHEADER = 268;
const RPMTAG_SHA1HEADER = 269;
const RPMTAG_SHA256HEADER = 273;
const RPMTAG_SIGGPG = 262;
const RPMTAG_SIGMD5 = 261;
const RPMTAG_SIGPGP = 259;
const RPMTAG_SIGSIZE = 257;
const RPMTAG_SIZE = 1009;
const RPMTAG_SOURCE = 1018;
const RPMTAG_SOURCEPACKAGE = 1106;
const RPMTAG_SOURCEPKGID = 1146;
const RPMTAG_SOURCERPM = 1044;
const RPMTAG_SUGGESTFLAGS = 5051;
const RPMTAG_SUGGESTNAME = 5049;
const RPMTAG_SUGGESTNEVRS = 5059;
const RPMTAG_SUGGESTS = 5049;
const RPMTAG_SUGGESTVERSION = 5050;
const RPMTAG_SUMMARY = 1004;
const RPMTAG_SUPPLEMENTFLAGS = 5054;
const RPMTAG_SUPPLEMENTNAME = 5052;
const RPMTAG_SUPPLEMENTNEVRS = 5060;
const RPMTAG_SUPPLEMENTS = 5052;
const RPMTAG_SUPPLEMENTVERSION = 5053;
const RPMTAG_TRANSFILETRIGGERCONDS = 5088;
const RPMTAG_TRANSFILETRIGGERFLAGS = 5082;
const RPMTAG_TRANSFILETRIGGERINDEX = 5080;
const RPMTAG_TRANSFILETRIGGERNAME = 5079;
const RPMTAG_TRANSFILETRIGGERPRIORITIES = 5085;
const RPMTAG_TRANSFILETRIGGERSCRIPTFLAGS = 5078;
const RPMTAG_TRANSFILETRIGGERSCRIPTPROG = 5077;
const RPMTAG_TRANSFILETRIGGERSCRIPTS = 5076;
const RPMTAG_TRANSFILETRIGGERTYPE = 5089;
const RPMTAG_TRANSFILETRIGGERVERSION = 5081;
const RPMTAG_TRIGGERCONDS = 5005;
const RPMTAG_TRIGGERFLAGS = 1068;
const RPMTAG_TRIGGERINDEX = 1069;
const RPMTAG_TRIGGERNAME = 1066;
const RPMTAG_TRIGGERSCRIPTFLAGS = 5027;
const RPMTAG_TRIGGERSCRIPTPROG = 1092;
const RPMTAG_TRIGGERSCRIPTS = 1065;
const RPMTAG_TRIGGERTYPE = 5006;
const RPMTAG_TRIGGERVERSION = 1067;
const RPMTAG_URL = 1020;
const RPMTAG_V = 1001;
const RPMTAG_VCS = 5034;
const RPMTAG_VENDOR = 1011;
const RPMTAG_VERBOSE = 5018;
const RPMTAG_VERIFYSCRIPT = 1079;
const RPMTAG_VERIFYSCRIPTFLAGS = 5026;
const RPMTAG_VERIFYSCRIPTPROG = 1091;
const RPMTAG_VERSION = 1001;
const RPMTAG_XPM = 1013;

/**
 * <div id="function.rpmvercmp" class="refentry"> <div class="refnamediv">  <h1 class="refname">rpmvercmp</h1>  <p class="verinfo">(PECL rpminfo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">rpmvercmp</span> — <span class="dc-title">RPM version comparison</span></p> </div> <div class="refsect1 description" id="refsect1-function.rpmvercmp-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rpmvercmp</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$evr1</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$evr2</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span></span> <span class="parameter" style="color:#3A95FF">\$operator</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span>|<span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></span></div>  <p class="simpara">   Compare two RPM package versions.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rpmvercmp-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">evr1</span></dt>    <dd>     <span class="simpara">      First <span class="literal">epoch:version-release</span> string.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">evr2</span></dt>    <dd>     <span class="simpara">      Second <span class="literal">epoch:version-release</span> string.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">operator</span></dt>    <dd>     <p class="para">      An optional operator.      The possible operators are:      <span class="simplelist"><span class="literal">&lt;</span>, <span class="literal">lt</span>, <span class="literal">&lt;=</span>, <span class="literal">le</span>, <span class="literal">&gt;</span>, <span class="literal">gt</span>, <span class="literal">&gt;=</span>, <span class="literal">ge</span>, <span class="literal">==</span>, <span class="literal">=</span>, <span class="literal">eq</span>, <span class="literal">!=</span>, <span class="literal">&lt;&gt;</span>, <span class="literal">ne</span></span>.     </p>     <span class="simpara">      This parameter is case-sensitive, values should be lowercase.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rpmvercmp-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns <span class="literal">-1</span> if <span class="parameter" style="color:#3A95FF">evr1</span> is less than   <span class="parameter" style="color:#3A95FF">evr2</span>, <span class="literal">1</span> if <span class="parameter" style="color:#3A95FF">evr1</span> is   greater than <span class="parameter" style="color:#3A95FF">evr2</span>, and <span class="literal">0</span> if they are equal.  </p>  <p class="simpara">   When using the optional <span class="parameter" style="color:#3A95FF">operator</span> argument, the   function will return <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> if the relationship is the one specified   by the operator, <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong> otherwise.  </p> </div> <div class="refsect1 changelog" id="refsect1-function.rpmvercmp-changelog">  <h3 class="title">更新日志</h3>  <table class="doctable informaltable">       <thead>     <tr>      <th>版本</th>      <th>说明</th>     </tr>    </thead>    <tbody class="tbody">     <tr>      <td>PECL rpminfo 0.7.0</td>      <td>       Optional <span class="parameter" style="color:#3A95FF">operator</span> was added.      </td>     </tr>    </tbody>     </table> </div></div>
 * 
 * Compare two RPM evr (epoch:version-release) strings
 *
 * @param string $evr1 <p>
 * First epoch:version-release string
 * </p>
 * @param string $evr2 <p>
 * Second epoch:version-release string
 * </p>
 * @return int <p>
 * < 0 if evr1 < evr2, > 0 if evr1 > evr2, 0 if equal.
 * </p>
 * @since 0.1.0
 */
function rpmvercmp(string $evr1, string $evr2) {}

/**
 * <div id="function.rpminfo" class="refentry"> <div class="refnamediv">  <h1 class="refname">rpminfo</h1>  <p class="verinfo">(PECL rpminfo &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">rpminfo</span> — <span class="dc-title">Get information from a RPM file</span></p> </div> <div class="refsect1 description" id="refsect1-function.rpminfo-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rpminfo</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$path</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$full</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter reference" style="color:#3A95FF">&amp;\$error</span><span class="initializer"> = ?</span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></span></div>  <p class="simpara">   Retrieve information about a local file, a RPM package.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rpminfo-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">path</span></dt>    <dd>     <span class="simpara">      Path of the RPM file.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">full</span></dt>    <dd>     <span class="simpara">      If <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> all information headers for the file are retrieved,      else only a minimal set.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">error</span></dt>    <dd>     <span class="simpara">      If provided, will receive the possible error message,      and will avoid a runtime warning.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rpminfo-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   An <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of information, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> on error.  </p> </div> <div class="refsect1 examples" id="refsect1-function.rpminfo-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-3451">   <p><strong>示例 #1 A <span class="function"><strong>rpminfo()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>rpmaddtag</span><span style="color: #007700">(</span><span style="color: #9876AA">RPMTAG_BUILDTIME</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$info </span><span style="color: #007700">= </span><span style="color: #9876AA">rpminfo</span><span style="color: #007700">(</span><span style="color: #DD0000">"./php-pecl-rpminfo-0.4.2-1.el8.remi.7.4.x86_64.rpm"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$info</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[Name]&nbsp;=&gt;&nbsp;php-pecl-rpminfo<br>&nbsp;&nbsp;&nbsp;&nbsp;[Version]&nbsp;=&gt;&nbsp;0.4.2<br>&nbsp;&nbsp;&nbsp;&nbsp;[Release]&nbsp;=&gt;&nbsp;1.el8<br>&nbsp;&nbsp;&nbsp;&nbsp;[Summary]&nbsp;=&gt;&nbsp;RPM&nbsp;information<br>&nbsp;&nbsp;&nbsp;&nbsp;[Buildtime]&nbsp;=&gt;&nbsp;1586244821<br>&nbsp;&nbsp;&nbsp;&nbsp;[Arch]&nbsp;=&gt;&nbsp;x86_64<br>)</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.rpminfo-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link rpmaddtag()} - Add tag retrieved in query</span></li>  </ul> </div></div>
 * 
 * Retrieve information from a RPM file, reading its metadata.
 * If given error will be used to store error message
 * instead of raising a warning. The return
 * value is a hash table,
 * or false if it fails.
 *
 * @param string $path <p>
 * Path to the RPM file.
 * </p>
 * @param bool $full [optional] <p>
 * If TRUE all information headers for the file are retrieved, else only a minimal set.
 * </p>
 * @param null|string &$error [optional] <p>
 * If provided, will receive the possible error message, and will avoid a runtime warning.
 * </p>
 *
 * @return array|null <p>
 * An array of information or <b>NULL</b> on error.
 * </p>
 * @since 0.1.0
 */
function rpminfo(string $path, bool $full = false, ?string &$error = null) {}

/**
 * <div id="function.rpmdbinfo" class="refentry"> <div class="refnamediv">  <h1 class="refname">rpmdbinfo</h1>  <p class="verinfo">(PECL rpminfo &gt;= 0.2.0)</p><p class="refpurpose"><span class="refname">rpmdbinfo</span> — <span class="dc-title">Get information from installed RPM</span></p> </div> <div class="refsect1 description" id="refsect1-function.rpmdbinfo-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rpmdbinfo</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$nevr</span></span>, <span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$full</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></span></div>  <p class="simpara">   Retrieve information about an installed package, from the system RPM database.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rpmdbinfo-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">nevr</span></dt>    <dd>     <span class="simpara">      Name with optional epoch, version and release.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">full</span></dt>    <dd>     <span class="simpara">      If <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> all information headers for the file are retrieved, else only a minimal set.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rpmdbinfo-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   An <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of information, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> on error.  </p> </div> <div class="refsect1 examples" id="refsect1-function.rpmdbinfo-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-3446">   <p><strong>示例 #1 A <span class="function"><strong>rpmdbinfo()</strong></span> example</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>rpmaddtag</span><span style="color: #007700">(</span><span style="color: #9876AA">RPMTAG_INSTALLTIME</span><span style="color: #007700">);<br></span><span style="color: #9876AA">\$info </span><span style="color: #007700">= </span><span style="color: #9876AA">rpmdbinfo</span><span style="color: #007700">(</span><span style="color: #DD0000">"php-pecl-rpminfo"</span><span style="color: #007700">);<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$info</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[0]&nbsp;=&gt;&nbsp;Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Name]&nbsp;=&gt;&nbsp;php-pecl-rpminfo<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Version]&nbsp;=&gt;&nbsp;0.4.2<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Release]&nbsp;=&gt;&nbsp;1.fc31<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Summary]&nbsp;=&gt;&nbsp;RPM&nbsp;information<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Installtime]&nbsp;=&gt;&nbsp;1586244687<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Arch]&nbsp;=&gt;&nbsp;x86_64<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br>)</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.rpmdbinfo-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link rpmaddtag()} - Add tag retrieved in query</span></li>  </ul> </div></div>
 * 
 * Retrieve information about an installed package, from the system RPM database.
 *
 * @param string $nevr <p>
 * Name with optional epoch, version and release.
 * </p>
 * @param bool $full [optional] <p>
 * If TRUE all information headers for the file are retrieved, else only a minimal set.
 * </p>
 *
 * @return array|null <p>
 * An array of arrays of information or <b>NULL</b> on error.
 * </p>
 * @since 0.2.0
 */
function rpmdbinfo(string $nevr, bool $full = false) {}

/**
 * <div id="function.rpmdbsearch" class="refentry"> <div class="refnamediv">  <h1 class="refname">rpmdbsearch</h1>  <p class="verinfo">(PECL rpminfo &gt;= 0.3.0)</p><p class="refpurpose"><span class="refname">rpmdbsearch</span> — <span class="dc-title">Search RPM packages</span></p> </div> <div class="refsect1 description" id="refsect1-function.rpmdbsearch-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rpmdbsearch</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.string.php" class="type string" style="color:#EAB766">string</a></span> <span class="parameter" style="color:#3A95FF">\$pattern</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$rpmtag</span><span class="initializer"> = RPMTAG_NAME</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$rpmmire</span><span class="initializer"> = -1</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span> <span class="parameter" style="color:#3A95FF">\$full</span><span class="initializer"> = <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong></span></span><br>): <span class="type" style="color:#EAB766"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.null.php" class="type null" style="color:#EAB766">?</a></span><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span></span></div>  <p class="simpara">   Search packages in the system RPM database.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rpmdbsearch-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">pattern</span></dt>    <dd>     <span class="simpara">      Value to search for.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">rpmtag</span></dt>    <dd>     <span class="simpara">      Search criterion, which is one of the      <strong><span><a href="https://php.net/manual/zh/rpminfo.constants.php#constant.rpmtag-arch">RPMTAG_<span class="replaceable">*</span></a></span></strong> constants.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">rpmmire</span></dt>    <dd>     <span class="simpara">      Pattern type, which is one of the      <strong><span><a href="https://php.net/manual/zh/rpminfo.constants.php#constant.rpmmire-default">RPMMIRE_<span class="replaceable">*</span></a></span></strong> constants.      When &lt; 0 the criterion must equal the value, and database index is used if possible.     </span>    </dd>          <dt><span class="parameter" style="color:#3A95FF">full</span></dt>    <dd>     <span class="simpara">      If <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong> all information headers for the file are retrieved, else only a minimal set.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rpmdbsearch-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   An <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.array.php" class="type array" style="color:#EAB766">array</a></span> of information, or <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.null">null</a></span></strong> on error.  </p> </div> <div class="refsect1 examples" id="refsect1-function.rpmdbsearch-examples">  <h3 class="title">示例</h3>  <div class="example" id="example-3447">   <p><strong>示例 #1 Searching for the package owning a file</strong></p>   <div class="example-contents"><div class="phpcode" style="border-color:gray;background:#1E1F22;"><blockquote style="border:1px gray solid;white-space:pre-wrap"><span style="color: #000000"><span style="color: #9876AA">&lt;?php<br>\$info </span><span style="color: #007700">= </span><span style="color: #9876AA">rpmdbsearch</span><span style="color: #007700">(</span><span style="color: #DD0000">"/usr/bin/php"</span><span style="color: #007700">, </span><span style="color: #9876AA">RPMTAG_INSTFILENAMES</span><span style="color: #007700">);<br></span><span style="color: #9876AA">print_r</span><span style="color: #007700">(</span><span style="color: #9876AA">\$info</span><span style="color: #007700">);<br></span><span style="color: #9876AA">?&gt;</span></span></blockquote></div>   </div>   <div class="example-contents"><p>以上示例会输出：</p></div>   <div class="example-contents screen" style="border-color:gray;background:#1E1F22;"><div class="examplescode"><blockquote style="border:1px gray solid;">Array<br>(<br>&nbsp;&nbsp;&nbsp;&nbsp;[0]&nbsp;=&gt;&nbsp;Array<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Name]&nbsp;=&gt;&nbsp;php-cli<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Version]&nbsp;=&gt;&nbsp;7.4.4<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Release]&nbsp;=&gt;&nbsp;1.fc32<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Summary]&nbsp;=&gt;&nbsp;Command-line&nbsp;interface&nbsp;for&nbsp;PHP<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Arch]&nbsp;=&gt;&nbsp;x86_64<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)<br><br>)</blockquote></div>   </div>  </div> </div> <div class="refsect1 seealso" id="refsect1-function.rpmdbsearch-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link rpmaddtag()} - Add tag retrieved in query</span></li>  </ul> </div></div>
 * 
 * Retriev information from the local RPM database.
 *
 * @param string $pattern <p>
 * Value to search for.
 * </p>
 * @param int $rpmtag [optional] <p>
 * Search criterion, one of RPMTAG_* constant.
 * </p>
 * @param int $rpmmire [optional] <p>
 * Pattern type, one of RPMMIRE_* constant.
 * When < 0 the criterion must equals the value, and database index is used if possible.
 * </p>
 * @param bool $full [optional] <p>
 * If TRUE all information headers for the file are retrieved, else only a minimal set.
 * </p>
 *
 * @return array|null <p>
 * An array of arrays of information or <b>NULL</b> on error.
 * </p>
 * @since 0.3.0
 */
function rpmdbsearch(string $pattern, int $rpmtag = RPMTAG_NAME, int $rpmmire = -1, bool $full = false) {}

/**
 * <div id="function.rpmaddtag" class="refentry"> <div class="refnamediv">  <h1 class="refname">rpmaddtag</h1>  <p class="verinfo">(PECL rpminfo &gt;= 0.5.0)</p><p class="refpurpose"><span class="refname">rpmaddtag</span> — <span class="dc-title">Add tag retrieved in query</span></p> </div> <div class="refsect1 description" id="refsect1-function.rpmaddtag-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="methodname" style="color:#CC7832"><strong>rpmaddtag</strong></span>(<span class="methodparam"><span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.integer.php" class="type int" style="color:#EAB766">int</a></span> <span class="parameter" style="color:#3A95FF">\$tag</span></span>): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/language.types.boolean.php" class="type bool" style="color:#EAB766">bool</a></span></div>  <p class="simpara">   Add an additional retrieved tag in subsequent queries.  </p> </div> <div class="refsect1 parameters" id="refsect1-function.rpmaddtag-parameters">  <h3 class="title">参数</h3>  <dl>       <dt><span class="parameter" style="color:#3A95FF">tag</span></dt>    <dd>     <span class="simpara">      One of <strong><span><a href="https://php.net/manual/zh/rpminfo.constants.php#constant.rpmtag-arch">RPMTAG_<span class="replaceable">*</span></a></span></strong> constant.     </span>    </dd>     </dl> </div> <div class="refsect1 returnvalues" id="refsect1-function.rpmaddtag-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   成功时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.true">true</a></span></strong>， 或者在失败时返回 <strong><span><a href="https://php.net/manual/zh/reserved.constants.php#constant.false">false</a></span></strong>。  </p> </div> <div class="refsect1 seealso" id="refsect1-function.rpmaddtag-seealso">  <h3 class="title">参见</h3>  <ul class="simplelist">   <li><span class="function">{@link rpminfo()} - Get information from a RPM file</span></li>   <li><span class="function">{@link rpmdbinfo()} - Get information from installed RPM</span></li>   <li><span class="function">{@link rpmdbsearch()} - Search RPM packages</span></li>  </ul> </div></div>
 * 
 * Add an additional retrieved tag in subsequent queries.
 *
 * @param int $tag One of RPMTAG_* constant, see the rpminfo constants page.
 *
 * @return bool Returns true on success or false on failure.
 * @since 0.5.0
 */
function rpmaddtag(int $tag): bool {}
