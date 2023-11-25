<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = [
        'transaction_header_id',
        'qty'
    ];
    public function transactionHeader()
    {
        return $this->belongsTo(TransactionHeader::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    use HasFactory;
}
