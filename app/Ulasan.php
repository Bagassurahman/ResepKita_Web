<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    public $table = 'ulasan';
    protected $fillable = [
        'nama',
        'pesan',
        'created_at',
        'updated_at',
    ];

    public function resep()
    {
        return $this->belongsToMany(Resep::class);
    }
}
