<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction_detail;

class Service extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceFactory> */
    use HasFactory;
    protected $fillable = ['name', 'price', 'thumbnail', 'description'];

    function details()
    {
        return $this->hasMany(Transaction_detail::class);
    }
}
