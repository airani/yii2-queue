<?php

namespace yii\queue;

/**
 * Interface Job
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
interface Job
{
    public function run();
}