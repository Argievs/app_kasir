<?php

namespace App\Models;
use App\Models\Pelanggan;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function Pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'IDpelanggan','id');

    }
    public function User()
    {
        return $this->belongsTo(User::class, 'IDuser','id');

    }
    public function Produk()
    {
        return $this->belongsTo(Produk::class, 'ProdukID','id');
    }

    public function DetailPenjualan()
    {
        return $this->hashMany(DetailPenjualan::class, '','id');
    }
}
