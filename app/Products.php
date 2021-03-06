<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model {
    protected $fillable = ['product_name', 'category', 'rate', 'unit', 'detail','short_code','product_status', 'added_by'];

    public function products_category() {
        return $this->hasOne( Category::class, 'id', 'category' );
    }

    public function creator() {
        return $this->hasOne( User::class, 'id', 'added_by' );
    }

    public function productUnit() {
        return $this->hasOne( Unit::class, 'id', 'unit' );
    }

    public function products_unit() {
        return $this->hasOne( Unit::class, 'id', 'unit' );
    }

}
