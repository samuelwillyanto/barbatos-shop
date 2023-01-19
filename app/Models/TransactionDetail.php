<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'product_id',
        'quantity'
    ];

    public function transactions(){
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    public function products(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
