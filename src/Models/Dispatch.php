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
        'verified',
        'code',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'verified' => 'boolean',
        'verified_at' => 'datetime',
    ];

    /**
     * Get the dispatch code.
     */
    public function code(): ?string
    {
        return $this->code;
    }

    /**
     * Get the dispatch verified status.
     */
    public function verified(): bool
    {
        return (bool) $this->verified;
    }

    /**
     * Indicates if the dispatch is expired.
     */
    public function expired(): bool
    {
        return $this->created_at->diffInMinutes(now()) > 5;
    }

    /**
     * Verify the dispatch.
     */
    public function verify(): void
    {
        $this->verified = true;
        $this->verified_at = now();
        $this->save();
    }

    /**
     * Get the dispatchable model.
     */
    public function dispatchable()
    {
        return $this->morphTo();
    }
}
