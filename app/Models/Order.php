<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id',
        'order_number',
        'status',
        'total_amount',
        'payment_status',
        'snap_token',
        'name',
        'phone',
        'address',
    ];
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;
    

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
