<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;
//    public $timestamps = false;
    const CREATED_AT = null;
    const UPDATED_AT = null;
    protected $table = 'orders';
    protected $fillable = ['order_note', 'status', 'date'];
}
