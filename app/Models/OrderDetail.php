<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'order_details';
    protected $fillable = ['order_id', 'admin_id', 'customer_id', 'field_id', 'time_id'];

    public function orders(){
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    public function admins() {
        return $this->belongsTo(Admin::class, 'admin_id', 'id');
    }

    public function customers() {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
    public function fields() {
        return $this->belongsTo(Field::class, 'field_id', 'id');
    }

    public function times() {
        return $this->belongsTo(Time::class, 'time_id', 'id');
    }
}
