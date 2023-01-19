<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_date'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function transaction_details(){
        return $this->hasMany(TransactionDetail::class);
    }
}
