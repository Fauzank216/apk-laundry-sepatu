<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;
use App\Models\Service;

class Transaction_detail extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionDetailFactory> */
    use HasFactory;
    protected $fillable = ['transaction_id', 'typeof_shoes', 'service_id', 'subtotal', 'img', 'notes'];

    function transactions()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }

    function services()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
