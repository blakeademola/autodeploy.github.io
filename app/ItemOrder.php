<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemOrder extends Model
{
    protected $guarded = [];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function mode()
    {
        return $this->belongsTo(TransportMode::class, 'transport_mode_id');
    }

    public function dispatch()
    {
        return $this->belongsTo(Country::class, 'dispatch_country_id');
    }
}
