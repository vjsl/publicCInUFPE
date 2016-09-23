<?php

namespace VitorCIn;

use Illuminate\Database\Eloquent\Model;

class Codigo extends Model
{
    protected $fillable = ['nome', 'fonte', 'linguagem', 'resposta'];
}
