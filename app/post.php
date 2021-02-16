<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = ['status'];
    protected $fillable = ['id','title', 'post'];
}
