<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kategoriModel;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama_kategori' => 'elektronik'],
            ['nama_kategori' => 'mainan'],
            ['nama_kategori' => 'pakaian'],
            ['nama_kategori' => 'makanan'],
        ];
        foreach ($data as $item){
            kategoriModel::create($item);
        }
    }
}
