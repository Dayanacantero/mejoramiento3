<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'fecha_nacimiento', 'position'];

    public function equipment(){
        return $this->belongsTo('App\Models\Equipment');
    }

    public function goals(){
        return $this->belongsTo('App\Model\Goal');
    }
}
