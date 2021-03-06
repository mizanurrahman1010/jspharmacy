<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Unit extends Model {

    //protected $table = 'units';
    public $table = 'units';

    protected $fillable = ['unit_name', 'created_by'];

    public function creator() {
        return $this->hasOne( User::class, 'id', 'created_by' );
    }

}
