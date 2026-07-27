<?php

namespace MongoDB\Driver\Monitoring;

use MongoDB\BSON\ObjectId;

/**
 * <div id="class.mongodb-driver-monitoring-topologyopeningevent" class="reference"> <h1 class="title">The MongoDB\Driver\Monitoring\TopologyOpeningEvent class</h1>  <div class="partintro"><p class="verinfo">(mongodb &gt;=1.13.0)</p>  <div class="section" id="mongodb-driver-monitoring-topologyopeningevent.intro">   <h2 class="title">简介</h2>   <p class="simpara">    The <span class="classname"><strong class="classname">MongoDB\Driver\Monitoring\TopologyOpeningEvent</strong></span>    class encapsulates information about an opened topology.   </p>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">注意</strong>:     <span class="simpara">     Due to the driver's     <a href="https://php.net/manual/zh/mongodb.connection-handling.php" class="link">connection handling and persistence</a>     behavior, this event may not be observed if a     <span class="classname"><a href="https://php.net/manual/zh/class.mongodb-driver-manager.php" class="classname">MongoDB\Driver\Manager</a></span> uses a previously persisted     <a href="https://github.com/mongodb/mongo-c-driver" class="link external">»&nbsp;libmongoc</a> client.    </span>   </p></blockquote>  </div>  <div class="section" id="mongodb-driver-monitoring-topologyopeningevent.synopsis">   <h2 class="title">类摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="modifier">final</span>     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">MongoDB\Driver\Monitoring\TopologyOpeningEvent</strong>     </span>     {</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 属性 </div>    <div class="fieldsynopsis">     <span class="modifier">public</span>     <span class="modifier">readonly</span>     <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.mongodb-bson-objectid.php" class="type MongoDB\BSON\ObjectId" style="color:#EAB766">MongoDB\BSON\ObjectId</a></span>      <var class="varname"><a href="https://php.net/manual/zh/class.mongodb-driver-monitoring-topologyopeningevent.php#mongodb-driver-monitoring-topologyopeningevent.props.topologyid">\$<var class="varname">topologyId</var></a></var>;</div>    <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>    <div class="methodsynopsis dc-description">   <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><a href="https://php.net/manual/zh/mongodb-driver-monitoring-topologyopeningevent.gettopologyid.php" class="methodname" style="color:#CC7832">getTopologyId</a></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.mongodb-bson-objectid.php" class="type MongoDB\BSON\ObjectId" style="color:#EAB766">MongoDB\BSON\ObjectId</a></span></div>   }</div>  </div>  <div class="section" id="mongodb-driver-monitoring-topologyopeningevent.props">   <h2 class="title">属性</h2>   <dl>         <dt id="mongodb-driver-monitoring-topologyopeningevent.props.topologyid"><var class="varname">topologyId</var></dt>     <dd>      <span class="simpara">The topology ID.</span>     </dd>       </dl>  </div>  <div class="section">   <h2 class="title">更新日志</h2>   <table class="doctable informaltable">         <thead>      <tr>       <th>版本</th>       <th>说明</th>      </tr>     </thead>     <tbody class="tbody">      <tr>       <td>PECL mongodb 2.3.0</td>       <td>        Added public <span class="modifier">readonly</span> properties.       </td>      </tr>     </tbody>       </table>  </div> </div> <h2>目录</h2><ul class="chunklist chunklist_reference"><li>{@link MongoDB\Driver\Monitoring\TopologyOpeningEvent::getTopologyId} — Returns the topology ID</li></ul></div>
 * 
 * @since 1.13.0
 */
final class TopologyOpeningEvent
{
    /**
     * @since 2.3.0
     */
    public readonly ObjectId $topologyId;


    final private function __construct() {}

    /**
 * <div id="mongodb-driver-monitoring-topologyopeningevent.gettopologyid" class="refentry"> <div class="refnamediv">  <h1 class="refname">MongoDB\Driver\Monitoring\TopologyOpeningEvent::getTopologyId</h1>  <p class="verinfo">(mongodb &gt;=1.13.0)</p><p class="refpurpose"><span class="refname">MongoDB\Driver\Monitoring\TopologyOpeningEvent::getTopologyId</span> — <span class="dc-title">Returns the topology ID</span></p> </div> <div class="refsect1 description" id="refsect1-mongodb-driver-monitoring-topologyopeningevent.gettopologyid-description">  <h3 class="title">说明</h3>  <div class="methodsynopsis dc-description">   <span class="modifier">final</span> <span class="modifier">public</span> <span class="modifier">function</span> <span class="methodname" style="color:#CC7832"><strong>MongoDB\Driver\Monitoring\TopologyOpeningEvent::getTopologyId</strong></span>(): <span class="type" style="color:#EAB766"><a href="https://php.net/manual/zh/class.mongodb-bson-objectid.php" class="type MongoDB\BSON\ObjectId" style="color:#EAB766">MongoDB\BSON\ObjectId</a></span></div> </div> <div class="refsect1 parameters" id="refsect1-mongodb-driver-monitoring-topologyopeningevent.gettopologyid-parameters">  <h3 class="title">参数</h3>  <p class="simpara">此函数没有参数。</p> </div> <div class="refsect1 returnvalues" id="refsect1-mongodb-driver-monitoring-topologyopeningevent.gettopologyid-returnvalues">  <h3 class="title">返回值</h3>  <p class="simpara">   Returns the topology ID.  </p> </div> <div class="refsect1 errors" id="refsect1-mongodb-driver-monitoring-topologyopeningevent.gettopologyid-errors">  <h3 class="title">错误／异常</h3>  <ul class="simplelist">   <li>Throws <span class="classname"><a href="https://php.net/manual/zh/class.mongodb-driver-exception-invalidargumentexception.php" class="classname">MongoDB\Driver\Exception\InvalidArgumentException</a></span> on argument parsing errors.</li>  </ul> </div></div>
 * 
     * Returns the topology ID
     * @link https://www.php.net/manual/en/mongodb-driver-monitoring-topologyopeningevent.gettopologyid.php
     */
    final public function getTopologyId(): ObjectId {}


    final public function __wakeup(): void {}
}
