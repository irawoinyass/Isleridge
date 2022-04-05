<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
            //Table Name
    protected $table = 'slides';

    //primary key
    public $primaryKey = 'slide_id';

    //TImestamps
    public $timestamps = true;
}
