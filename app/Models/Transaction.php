<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'items',
        'desc',
        'price',
        'is_done',
    ];

    protected function casts()
    {
        return [
            'items' => 'array',
        ];
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
