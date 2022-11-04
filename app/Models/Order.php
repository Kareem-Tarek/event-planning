<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['order_number','paypal_orderid','user_id','user_to_id','value','is_paid'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function user_to()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->hasMany(EventOrder::class,'event_id','id');
    }
    public function ordernumber()
    {
        return $this->belongsTo(Event::class,'order_number','id');
    }
}
