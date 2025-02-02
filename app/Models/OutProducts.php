<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutProducts extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product_count_out()
    {
        return $this->hasMany(ProductCountOut::class);
    }
}
