<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineOrder extends Model {

    protected $dates = ['created_at', 'updated_at', 'deleted_at','shipped_at'];

    protected $fillable = [
        'customer_id',
        'delivery_address',
        'delivery_to',
        'delivery_mobile',
        'delivery_house',
        'delivery_road',
        'delivery_ward',
        'delivery_para',
        'delivery_district_city',
        'delivery_note',
        'prescription_image',
        'status',
        'accepted_by',
        'accepted_at',
        'shipped_by',
        'shipped_at',
        'canceled_by',
        'canceled_at',
        'delivery_by',
        'delivery_at',
        'delivery_man_mobile_no',
    ];

    public function customer() {
        return $this->hasOne( User::class, 'id', 'customer_id' );
    }

    public function orderItems() {
        return $this->hasMany( MedicineOrderItem::class, 'order_id', 'id' )
            ->with(['products','products.products_category','products.products_unit']);
    }

}
