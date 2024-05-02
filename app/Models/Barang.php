<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Satuan;


class Barang extends Model
{
    protected $table = 'barangs';

    protected $fillable = [
        'kode',
        'nama',
        'harga',
        'deskripsi',
        'satuan_id',
    ];

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }
}

