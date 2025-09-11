<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans';
    protected $primaryKey = 'id';
    protected $fillable = ['image','nama_jurusan','deskripsi','foto','nama_kaprog','nip','phone','visi','misi','category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    // public function category() {
    //     return $this->belongsTo(Category::class, 'category_id', 'id');
    // }

    public function prestasi() {
        return $this->hasMany(Prestasi::class, 'category_id', 'id');
    }

    public function alumni() {
        return $this->hasMany(Alumni::class,'category_id', 'id');
    }
}   
