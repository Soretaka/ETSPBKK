<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guardeed = ['id'];
    public function pasien(){
        return $this->hasMany(Pasien::class);
    }
    public function dokter(){
        return $this->hasM(Dokter::class);
    }
}

