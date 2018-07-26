<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sesi extends Model
{
    protected $table = "sesi";
    protected $guarded = []; // to assign with column is null


    //accessor
    public function getCreatedAtFormatAttribute()
    {
    	return $this->created_at->format('d M Y');
    }
}
