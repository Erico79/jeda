<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = array(
        'class_name', 'class_code', 'class_status', 'school_id'
    );
}
