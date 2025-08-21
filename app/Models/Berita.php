<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'beritas';
    protected $primaryKey = 'id';
    protected $fillable = ['image','judul_berita','deskripsi_singkat','deskripsi'];
}
