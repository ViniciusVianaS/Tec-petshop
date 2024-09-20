<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicoPets extends Model
{
    use HasFactory;
    
    protected $table = "medico_pet";

    protected $fillable = [
        'pet_id',
        'medico_id',
    ];
}
