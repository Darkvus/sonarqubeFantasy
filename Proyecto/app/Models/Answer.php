<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';
    protected $fillable = ['answertext' ,
                         'status' ,
                         'token_pa' ,
                         'id_question'
                         ];
}