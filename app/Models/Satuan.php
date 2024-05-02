<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Satuan extends Model
{
    protected $table = 'satuans';

    public function barang()
    {
        return $this->hasMany(Barang::class, 'satuan_id');
    }
}
