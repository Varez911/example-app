<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function person()
    {
        return $this->belongsTo(Person::class);
    }

    public function konsinyasis()
    {
        return $this->belongsToMany(Konsinyasi::class, 'item_konsinyasi', 'item_id', 'konsinyasi_id')
        ->withPivot(['jumlah_konsinyasi']);
    }
}
