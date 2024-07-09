<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'lastname', 'fecha_nacimiento', 'year'];

    public function equipment(){
        return $this->belongsTo('App\Models\Equipment');
    }
}
