<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Day;

class Recycle extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_id',
        'tipo_raccolta',
        'inizio_raccolta',
        'fine_raccolta'

    ];

    public function day(){

        return $this->belongsTo(Day::class);
    }
}
