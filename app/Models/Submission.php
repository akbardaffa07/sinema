<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Submission extends Model
{
    use HasUlids;

    protected $guarded = [];

    /**
     * Tentukan kolom mana yang harus diisi otomatis dengan ULID.
     * Karena Primary Key kita tetap 'id' (integer), kita harus beri tahu Laravel
     * untuk mengisi kolom 'ulid' secara terpisah.
     */
    public function uniqueIds(): array
    {
        return ['ulid'];
    }

    /**
     * Beri tahu Laravel/Filament untuk memakai kolom 'ulid' di URL browser.
     * Bukan ID angka lagi.
     */
    public function getRouteKeyName(): string
    {
        return 'ulid';
    }

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function activityType(): BelongsTo
    {
        return $this->belongsTo(ActivityType::class);
    }
}
