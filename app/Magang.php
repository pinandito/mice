<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    //
    protected $primaryKey = 'idmag';
    public $table = "maginf";
    const CREATED_AT = 'mcreated_at';
    const UPDATED_AT = 'mupdated_at';

    public function user()
    {
        return $this->belongsTo('App\User', 'mag_idp', 'id');
    }
}
