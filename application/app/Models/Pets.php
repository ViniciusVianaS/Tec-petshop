<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;
    protected $table = "pets";

    protected $fillable = [
        'nome',
        'pet',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
