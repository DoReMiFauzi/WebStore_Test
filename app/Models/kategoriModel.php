<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\barangModel;

class kategoriModel extends Model
{
    protected $table = 'kategori';

    protected $fillable = [
        'nama_kategori'
    ];

    public function barang(){
        return $this->hasMany(barangModel::class, 'kategori_id');
    }
}
