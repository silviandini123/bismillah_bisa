<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model  
{
    use HasFactory;
    protected $table ='produks';
    protected $fillable =['nama_produk', 'category_id', 'harga', 'deskripsi'];
}
