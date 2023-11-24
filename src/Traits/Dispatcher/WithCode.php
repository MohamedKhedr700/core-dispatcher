<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

trait WithCode
{
    /**
     * {@inheritdoc}
     */
    public function getCode(): string
    {
        return mt_rand(100000, 999999);
    }
}
