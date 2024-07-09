<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;

    protected $fillable = ['desc', 'minute'];

    public function players(){
        return $this->hasMany('App\Models\Player');
    }

    public function games(){
        return $this->belongsTo('App\Models\Game');
    }
}
