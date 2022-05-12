<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public function pesanan_detail()
    {
        return $this->hasMany('App\Models\PesananDetail', 'barang_id', 'id');
    }

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori', 'kategori_id', 'id');
    }
}
