<?php

namespace App\Filament\Resources\SubmissionResource\Pages;

use App\Filament\Resources\SubmissionResource;
use App\Models\ActivityType;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateSubmission extends CreateRecord
{
    protected static string $resource = SubmissionResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Cek jika activity_type_id masih kosong/null
        if (empty($data['activity_type_id'])) {

            $query = ActivityType::query()
                ->where('activity_field_id', $data['activity_field_id'])
                ->where('name', $data['activity_name']);

            // LOGIKA BARU: Cek apakah user memilih level atau tidak
            if (!empty($data['activity_level'])) {
                // Jika ada level, cari ActivityType yang levelnya cocok
                // dan achievement-nya mungkin null (default untuk level tersebut)
                $query->where('level', $data['activity_level']);
            } else {
                // Jika tidak ada level, cari yang levelnya null
                $query->whereNull('level');
            }

            // Ambil record pertama yang cocok (biasanya yang achievement-nya null/default)
            $activity = $query->first();

            if ($activity) {
                $data['activity_type_id'] = $activity->id;
            }
        }

        // Isi student_id jika yang membuat adalah mahasiswa
        if (Auth::user()?->role === 'Student') {
            $data['student_id'] = Auth::user()->student->id;
        }

        // Hapus field sementara yang tidak ada di database
        unset($data['activity_field_id']);
        unset($data['activity_name']);
        unset($data['activity_level']);

        return $data;
    }
}
