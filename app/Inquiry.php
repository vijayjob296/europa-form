<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $primaryKey = 'id';
    protected $table = "inquires";
    public $timestamp = false;
}
