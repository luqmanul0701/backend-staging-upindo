<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesCart extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function productDetail()
    {
        return $this->belongsTo(DetailProduct::class, 'detail_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'sales_id');
    }
}
