<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = ['desc', 'minute'];

    public function players(){
        return $this->belongsTo('App\Models\Player');
    }

    public function games(){
        return $this->hasMany('App\Models\Game');
    }
}
