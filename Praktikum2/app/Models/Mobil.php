<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobils';
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi mass assignment
    protected $fillable = [
        'nama_mobil',
        'merk',
        'kapasitas_mesin',
    ];

    // Kolom yang tidak bisa diisi mass assignment
    protected $guarded = [];

    // Aktifkan timestamps
    public $timestamps = true;

    // Cast untuk tipe data
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}