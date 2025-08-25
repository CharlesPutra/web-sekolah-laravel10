<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infrastruktur extends Model
{
    use HasFactory;

    protected $table = 'infrastrukturs';
    protected $primaryKey = 'id';
    protected $fillable = ['luas_tanah','ruang_kelas','lab_komputer','perpustakaan'];
}
