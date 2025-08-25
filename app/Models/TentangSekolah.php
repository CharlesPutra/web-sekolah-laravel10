<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangSekolah extends Model
{
    use HasFactory;

    protected $table = 'tentang_sekolahs';
    protected $primaryKey = 'id';
    protected $fillable = ['tentang_sekolah'];
}
