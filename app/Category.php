<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $fillable = [
        'category_name', 'remarks', 'added_by',
    ];

    public function creator() {
        return $this->hasOne( User::class, 'id', 'added_by' );
    }

}
