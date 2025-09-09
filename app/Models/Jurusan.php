<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans';
    protected $primaryKey = 'id';
    protected $fillable = ['image','nama_jurusan','deskripsi','foto','nama_kaprog','nip','phone','visi','misi','presfot','juara','alumfot','namaalum','desalum'];
}   
