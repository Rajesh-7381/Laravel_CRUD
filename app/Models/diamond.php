<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diamond extends Model
{
    use HasFactory;
    protected $table="diamond";
    public function clarity(){
        return $this->belongsTo(clarity::class);
    }
    public function color(){
        return $this->belongsTo(color::class);
    }
    public function cut(){
        return $this->belongsTo(cut::class);
    }
    public function shape(){
        return $this->belongsTo(shape::class);
    }
}
