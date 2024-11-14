<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_address',
        'city',
        'province',
        'zip_code',
        'status',
        'order_date',
        'received_date',
        'notes',
        'user_id',
        'receipt',
        'total_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaction_detail()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
