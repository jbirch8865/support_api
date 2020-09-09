<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class issueclassification extends Model
{
    protected $table = 'issueclassifications';
    protected $fillable = ['name'];   
}
