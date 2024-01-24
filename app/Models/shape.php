<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shape extends Model
{
    use HasFactory;
    protected $table="shape_master_";
    public function shape(){
        return $this->hasMany(shape::class);
    }
}
