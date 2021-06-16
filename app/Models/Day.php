<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Recycle;

class Day extends Model
{
    use HasFactory;

    public function recycle(){

        return $this->hasMany(Recycle::class);
    }
}
