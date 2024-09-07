<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelEasyRepository\Traits\GenUid;

class Product extends Model
{
    use HasFactory, GenUid;

    protected $primaryKey = 'kode_produk';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_produk',
        'harga_produk',
        'tgl_produksi',
        'tgl_expired',
    ];
}
