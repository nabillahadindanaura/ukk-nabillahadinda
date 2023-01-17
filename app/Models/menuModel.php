<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menuModel extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $id = 'id';
    protected $fillable = [
        'id',
        'nama',
        'harga',
        'kategori',
        'cover',
    ];
}
