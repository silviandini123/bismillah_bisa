<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    // protected $fillable = ['jenis_id', 'nama_menu', 'harga', 'image', 'deskripsi'];
    protected $guarded = ['id'];

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'jenis_id');
    }

    public function stok()
    {
        return $this->hasMany(Stok::class);
    }
}
