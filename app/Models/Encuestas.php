<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuestas extends Model
{
    use HasFactory;

    protected $table = 'encuestas';

    protected $fillable = [
        'id','pregunta_1','pregunta_2','pregunta_3','created_by_user_id'
    ];

}
