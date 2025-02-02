<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCountOut extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product_count_out()
    {
        return $this->belongsTo(OutProducts::class);
    }
}
