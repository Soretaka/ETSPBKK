<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $guardeed = ['id'];
    public function Post(){
        return $this->hasMany(Post::class);
    }
}
