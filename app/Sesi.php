<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    protected $table = "sesi";
    protected $guarded = []; // to assign with column is null
}
