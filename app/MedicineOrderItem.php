<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class MedicineOrderItem extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity', 'rate', 'mrp', 'unit', 'prescriptionItem', 'batch', 'expired'];

    public function products()
    {
        return $this->hasMany('App\Products', 'id', 'product_id');
    }
}
