<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk1 extends Model
{
    protected $table = 'produk1s';
    protected $primaryKey = 'id_produk';
    // protected $guarded = [];
    protected $fillable = [
        'kode_produk', 'nama_produk', 'id_kategori', 'merk', 'harga_beli', 'harga_jual', 'stok'];
    public function kategori(){
        return $this->belongsTo(Kategori1::class,'id_kategori');
    }
}
