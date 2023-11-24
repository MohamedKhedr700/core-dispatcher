<?php

namespace Raid\Core\Dispatcher\Traits\Dispatcher;

use Exception;

trait WithVerify
{
    /**
     * Verify the dispatch.
     *
     * @throws Exception
     */
    public function verify(string $code): void
    {
        $dispatch = $this->dispatchable()->dispatches()->firstWhere('dispatcher_type', static::column());

        if ($dispatch->verified) {
            throw new Exception(__('message.dispatch.already_verified'));
        }

        if ($dispatch->code !== $code) {
            throw new Exception(__('message.dispatch.invalid_code'));
        }

        if ($dispatch->created_at->diffInMinutes(now()) > 5) {
            throw new Exception(__('message.dispatch.expired_code'));
        }

        $dispatch->verify();
    }
}
