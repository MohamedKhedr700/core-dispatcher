<?php

namespace Raid\Core\Dispatcher\Dispatchers;


use Raid\Core\Dispatcher\Dispatchers\Contracts\DispatcherInterface;
use Raid\Core\Dispatcher\Traits\Provider\Dispatcher\WithDispatchable;

abstract class Dispatcher implements DispatcherInterface
{
    use WithDispatchable;
}
