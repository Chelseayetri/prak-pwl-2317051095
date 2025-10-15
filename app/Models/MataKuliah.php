<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MataKuliah extends Model
{
    use HasFactory;

    // nama tabel sesuai migration
    protected $table = 'mata_kuliah';

    // lindungi kolom id agar tidak bisa di-mass assign
    protected $guarded = ['id'];

    // karena pakai UUID string
    public $incrementing = false;
    protected $keyType = 'string';

    // set UUID otomatis saat creating
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }

    // metode sesuai modul (opsional untuk Read)
    public function getAllMK()
    {
        return $this->all();
    }
}
