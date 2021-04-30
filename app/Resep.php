<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Resep extends Model
{
    use SoftDeletes;

    public $table = 'resep';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_resep',
        'name',
        'gambar',
        'alat_bahan',
        'step',
        'kategori_id',
        'slug',
        'created_at',
        'updated_at',
        'deleted_at',
    ];



    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function kategori()
    {
        return $this->belongsToMany(Kategori::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    // public function getImageAttribute()
    // {
    //     return $this->getMedia('gambar');
    // }
}
