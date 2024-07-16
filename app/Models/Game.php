<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['goals_fuera', 'goals_casa', 'fecha'];

    public function goals(){
        return $this->belongsTo('App\Models\Goal');
    }

    public function equipment(){
        return $this->belongsToMany('App\Models\Equipment');
    }
}
