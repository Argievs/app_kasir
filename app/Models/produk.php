<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penjualan;

class produk extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function Penjualan()
    {
        return $this->hasMany(Penjualan::class, '','id');
    }

    public function detailPenjualan() 
    {
        return $this->hasMany(DetailPenjualan::class, 'ProdukID', 'id');
    }
}
