<?php

namespace MongoDB\Driver\Monitoring;

/**
 * <div id="class.mongodb-driver-monitoring-subscriber" class="reference"> <h1 class="title">The MongoDB\Driver\Monitoring\Subscriber interface</h1>  <div class="partintro"><p class="verinfo">(mongodb &gt;=1.3.0)</p>  <div class="section" id="mongodb-driver-monitoring-subscriber.intro">   <h2 class="title">简介</h2>   <p class="simpara">    Base interface for event subscribers. This is used as a parameter type in the functions    <span class="function">{@link MongoDB\Driver\Monitoring\addSubscriber()}</span> and    <span class="function">{@link MongoDB\Driver\Monitoring\removeSubscriber()}</span> and should    not be implemented directly.   </p>  </div>  <div class="section" id="mongodb-driver-monitoring-subscriber.synopsis">   <h2 class="title">接口摘要</h2>   <div class="classsynopsis">    <span class="ooclass"><strong class="classname"></strong></span>    <div class="classsynopsisinfo">     <span class="ooclass">      <span class="modifier">class</span> <strong class="classname">MongoDB\Driver\Monitoring\Subscriber</strong>     </span>     {</div>   }</div>   <p class="simpara">    This interface has no methods. Its only purpose is to be the base interface    for all event subscribers.   </p>  </div> </div></div>
 * 
 * Base interface for event subscribers.
 * This is used for type-hinting MongoDB\Driver\Monitoring\addSubscriber() and MongoDB\Driver\Monitoring\removeSubscriber() and should not be implemented directly.
 * This interface has no methods. Its only purpose is to be the base interface for all event subscribers.
 * @link https://secure.php.net/manual/en/class.mongodb-driver-monitoring-subscriber.php
 * @since 1.3.0
 */
interface Subscriber {}
