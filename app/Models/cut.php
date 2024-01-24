<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cut extends Model
{
    use HasFactory;
    protected $table="cut_master";
    public function cut(){
        return $this->hasMany(cut::class);
    }
}
