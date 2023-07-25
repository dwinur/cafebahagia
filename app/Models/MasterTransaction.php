<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterTransaction extends Model
{
    // use HasFactory;
    protected $fillable = ['order_date', 'order_number', 'customer_name', 'product_id', 'quantity', 'total_price'];

    public function product()
    {
        return $this->belongsTo(MasterProduct::class, 'product_id');
    }
}
