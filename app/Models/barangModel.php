<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\kategoriModel;

class barangModel extends Model
{
    protected $table = 'barang';

    protected $fillable = [
        'nama_barang',
        'kategori_id',
        'deskripsi',
        'harga',
    ];

    public function kategori(){
        return $this->belongsTo(kategoriModel::class, 'kategori_id');
    }
}
