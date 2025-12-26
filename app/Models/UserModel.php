<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';          // pastikan sama dengan nama tabel
    protected $guarded = ['id'];        // atau gunakan $fillable sesuai skema

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }

    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                    ->select('user.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}
