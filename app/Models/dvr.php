<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dvr extends Model
{
    use HasFactory;

    public function camera(){
    return $this->hasMany('App\Models\Dvr');
    }
}
