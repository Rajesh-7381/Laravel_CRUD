<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clarity extends Model
{
    use HasFactory;
    protected $table="clarity_master";
    public function diamond(){
        return $this->hasMany(diamond::class);
    }
}
