<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionAndAnswer extends Model
{
    protected $fillable = [
        'question',
        'answer',
        'order',
        'status'
    ];
}
