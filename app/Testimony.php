<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
            //Table Name
    protected $table = 'testimony';

    //primary key
    public $primaryKey = 'testimony_id';

    //TImestamps
    public $timestamps = true;
}
