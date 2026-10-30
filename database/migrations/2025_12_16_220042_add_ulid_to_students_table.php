<?php

use App\Models\Student;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Tambah kolom ulid
        Schema::table('students', function (Blueprint $table) {
            $table->ulid('ulid')->after('id')->nullable();
        });

        // 2. Generate ULID untuk user yang SUDAH ADA
        // Kita pakai chunk agar aman jika user sudah banyak
        Student::chunkById(100, function ($students) {
            foreach ($students as $student) {
                $student->update(['ulid' => (string) Str::ulid()]);
            }
        });

        // 3. Kunci kolom: Ubah jadi NOT NULL dan UNIQUE
        Schema::table('students', function (Blueprint $table) {
            $table->ulid('ulid')->nullable(false)->unique()->change();
        });
    }

    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn('ulid');
        });
    }
};
