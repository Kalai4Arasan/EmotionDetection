<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emotions extends Model
{
    //protecting the table:
    protected $table='todo';
    //make public the key field:
    public $primaryKey='id';
}
