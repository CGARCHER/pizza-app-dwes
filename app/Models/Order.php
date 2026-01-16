<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['delivery_id','order_date','pizza_ids'];
    protected $hidden = ['updated_at', 'created_at'];

    public function delivery(){
        return $this->belongsTo(Delivery::class);
    }

}
