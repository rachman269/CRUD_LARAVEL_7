<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use softDeletes;

    protected $fillable = ['nama', 'npm', 'jurusan', 'email', 'alamat'];
}
