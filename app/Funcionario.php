<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['nome','cargo','salario'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'funcionarios';}
