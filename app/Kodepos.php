<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kodepos extends Model
{
    //
    public $table = "tbl_kodepos";
    protected $primaryKey = 'id';
    
    /*
	public function perawat()
    {
        return $this->hasOne('App\Perawat', 'kodepos_id', 'id');
    }
    */
}
