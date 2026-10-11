<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction_detail;
use App\Models\Customer;
use App\Models\User;
use App\Models\Order_Track;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;
    protected $fillable = ['customer_id', 'qty', 'total_amount', 'amount_paid', 'payment_method', 'order_type'];

    function customers()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function details()
    {
        return $this->hasMany(Transaction_detail::class);
    }

    function tracks()
    {
        return $this->hasMany(Order_Track::class);
    }
}