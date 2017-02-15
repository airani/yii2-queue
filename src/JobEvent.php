<?php

namespace yii\queue;

use yii\base\Event;

/**
 * Class Event
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class JobEvent extends Event
{
    /**
     * @var Job
     */
    public $job;
}