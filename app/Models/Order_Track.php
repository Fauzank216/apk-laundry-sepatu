<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class Order_Track extends Model
{
    protected $table = 'order_tracking';

    function transactions()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
