<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Testing\Fluent\Concerns\Has;

class Student extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = [];

    /**
     * Tentukan kolom yang diisi otomatis oleh ULID.
     * Kita pisahkan dari Primary Key 'id' agar relasi ke tabel lain aman.
     */
    public function uniqueIds(): array
    {
        return ['ulid'];
    }

    /**
     * Beri tahu Laravel/Filament untuk memakai kolom 'ulid' di URL.
     */
    public function getRouteKeyName(): string
    {
        return 'ulid';
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function submissions(): HasMany
    {
        return $this->hasMany(Submission::class);
    }

    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    }

    public function studyProgram(): BelongsTo
    {
        return $this->belongsTo(StudyProgram::class);
    }

    public function transcriptRequests(): HasMany
    {
        return $this->hasMany(TranscriptRequest::class);
    }
}
