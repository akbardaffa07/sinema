<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Submission;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Tambah kolom ulid (nullable dulu)
        Schema::table('submissions', function (Blueprint $table) {
            $table->ulid('ulid')->after('id')->nullable();
        });

        // 2. Isi ULID untuk data lama yang sudah ada
        // Menggunakan chunk agar aman jika data ribuan
        Submission::chunkById(100, function ($submissions) {
            foreach ($submissions as $submission) {
                // Generate ULID untuk setiap baris
                // Jika ingin rapi sesuai tanggal lama, bisa parsing created_at, 
                // tapi Str::ulid() saja sudah cukup untuk keamanan URL.
                $submission->update(['ulid' => (string) Str::ulid()]);
            }
        });

        // 3. Kunci kolom: Ubah jadi NOT NULL dan UNIQUE
        Schema::table('submissions', function (Blueprint $table) {
            $table->ulid('ulid')->nullable(false)->unique()->change();
        });
    }

    public function down(): void
    {
        Schema::table('submissions', function (Blueprint $table) {
            $table->dropColumn('ulid');
        });
    }
};
