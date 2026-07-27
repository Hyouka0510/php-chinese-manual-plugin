<?php

namespace MongoDB\Driver\Exception;

use Throwable;

/**
 * <div id="class.mongodb-driver-exception-exception" class="reference"> <h1 class="title">The MongoDB\Driver\Exception\Exception interface</h1>  <div class="partintro"><p class="verinfo">(mongodb &gt;= 1.0.0)</p>  <div class="section" id="mongodb-driver-exception-exception.intro">   <h2 class="title">简介</h2>   <p class="simpara">    Common interface for all extension exceptions. This interface is also used    by the library, and may be used to identify any exceptions originating from    the MongoDB PHP driver (i.e. extension and library).   </p>  </div>  <div class="section" id="mongodb-driver-exception-exception.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">MongoDB\Driver\Exception\Exception</strong>     </span>     {</div>   }</div>  </div> </div></div>
 * 
 * Common interface for all driver exceptions. This may be used to catch only exceptions originating from the driver itself.
 * @link https://php.net/manual/zh/class.mongodb-driver-exception-exception.php
 */
interface Exception extends Throwable {}
