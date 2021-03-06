<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable {
    use Notifiable;
    use SoftDeletes;
    //protected $softDelete = true;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
//        'name', 'email', 'password','mobile','present_address','permanent_address','user_type'
        'name',
        'email',
        'password',
        'user_type',
        'dob',
        'mobile',
        'photo',
        'perm_add_house',
        'perm_add_road',
        'perm_add_ward',
        'perm_add_para',
        'perm_add_district_city',
        'pres_add_house',
        'pres_add_road',
        'pres_add_ward',
        'pres_add_para',
        'pres_add_district_city',
        'geo_address',
        'geo_location',
        'address',
        'status'
    ];

//$table->string('dob', 10)->nullable();
    //$table->string('mobile', 15)->nullable();
    //$table->string('photo', 100)->nullable();
    //
    //$table->string('perm_add_house', 100)->nullable();
    //$table->string('perm_add_road', 100)->nullable();
    //$table->string('perm_add_word', 100)->nullable();
    //$table->string('perm_add_para', 100)->nullable();
    //$table->string('perm_add_district_city', 100)->nullable();
    //
    //$table->string('pres_add_house', 100)->nullable();
    //$table->string('pres_add_road', 100)->nullable();
    //$table->string('pres_add_word', 100)->nullable();
    //$table->string('pres_add_para', 100)->nullable();
    //$table->string('pres_add_district_city', 100)->nullable();
    //
    //$table->string('geo_location', 100)->nullable();

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Check User Verified Account Status
     */
    public function checkUserType() {
        return $this->user_type;
    }
}
