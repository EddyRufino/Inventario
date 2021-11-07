<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    public function detail_entries()
    {
        return $this->hasMany(DetailEntry::class);
    }

    public function detail_sales()
    {
        return $this->hasMany(DetailSale::class);
    }
}
