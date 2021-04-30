<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class Kategori extends Model
{
    use SoftDeletes;

    public $table = 'kategori';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_kategori',
        'slug',
        'keterangan',
        'gambar_sampul',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    // public function users()
    // {
    //     return $this->belongsToMany(Kategori::class);
    // }
}
