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
        'code',
        'verified_at',
        'verified',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'dispatched' => 'boolean',
        'verified' => 'boolean',
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
     * Verify.
     */
    public function verify(): void
    {
        $this->verified = true;
        $this->verified_at = now();
        $this->save();
    }
}