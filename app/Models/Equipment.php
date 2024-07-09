<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'city', 'stadium', 'aforo', 'year', 'president_id'];

    public function players(){
        return $this->hasMany('App\Models\Player');
    }

    public function games(){
        return $this->belongsToMany('App\Models\Game');
    }

    public function presidents(){
        return $this->hasOne('App\Models\President');
    }
}
