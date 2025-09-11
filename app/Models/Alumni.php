<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $table = 'alumnis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'fotoalum',
        'namaalum',
        'category_id',
        'deskripsialum',
        'rating',
        'angkatan',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
