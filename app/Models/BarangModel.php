<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'barang'; // Assuming your barang table is named 'barang'
    protected $primaryKey = 'barang_id'; // Assuming your barang primary key is 'barang_id'

    protected $fillable = [
        'kategori_id', // Foreign key referencing 'm_kategori.kategori_id'
        'barang_kode',
        'barang_nama',
        'barang_harga',
        'barang_deskripsi',
        // Add other relevant fields for your barang table
    ];

    public function kategori()
    {
        return $this->belongsTo(KategoriModel::class, 'kategori_id', 'kategori_id');
    }
}
