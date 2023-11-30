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
        $dispatch = $this->dispatchable()->dispatches()->where('dispatcher_type', static::class)->latest()->first();

        if (! $dispatch) {
            throw new Exception(__('message.dispatch.not_found'));
        }

        if ($dispatch->code !== $code) {
            throw new Exception(__('message.dispatch.invalid_code'));
        }

        if ($dispatch->verified) {
            throw new Exception(__('message.dispatch.already_verified'));
        }

        if ($dispatch->created_at->diffInMinutes(now()) > 5) {
            throw new Exception(__('message.dispatch.expired_code'));
        }

        $dispatch->verify();
    }
}
