<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Number;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "price",
        "desc",
        "type",
        "photo",
    ];

    public static $types = [
        'Coffee',
        'Non-Coffee',
        'Snack',
        'Dessert',
    ];

    public function getHargaAttribute()
    {
        return "Rp. " . Number::format($this->price);
    }

    public function getGambarAttribute()
    {
        return $this->photo ? Storage::url($this->photo) : url('images/noimage.jpg');
    }
}
