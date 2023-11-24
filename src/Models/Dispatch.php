<?php

namespace Raid\Core\Dispatcher\Models;

use Raid\Core\Model\Models\Model;

class Dispatch extends Model
{
    /**
     * {@inheritdoc}
     */
    protected $table = 'dispatches';

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'dispatchable_id',
        'dispatchable_type',
        'dispatcher_type',
        'dispatcher_column',
        'verified_at',
        'dispatched',
        'verified',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'dispatched' => 'boolean',
        'verified' => 'boolean',
        'dispatched_at' => 'datetime',
        'verified_at' => 'datetime',
    ];

    /**
     * Get the dispatchable model.
     */
    public function dispatchable()
    {
        return $this->morphTo();
    }

    /**
     * Dispatch.
     */
    public function dispatch(): void
    {
        $this->dispatched = true;
        $this->dispatched_at = now();
        $this->save();
    }

    /**
     * Verify.
     */
    public function verify(): void
    {
        $this->verified = true;
        $this->verified_at = now();
        $this->save();
    }

    /**
     * Reset.
     */

    public function reset(): void
    {
        $this->verified = false;
        $this->verified_at = null;
        $this->dispatched = false;
        $this->dispatched_at = null;
        $this->save();
    }
}