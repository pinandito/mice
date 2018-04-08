<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    //
    public $table = "vendor";
    protected $primaryKey = 'idven';
	
	public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'idus');
    }
}
