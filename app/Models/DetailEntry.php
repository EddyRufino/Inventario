<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailEntry extends Model
{
    use HasFactory;

    protected $table = 'detail_entries';

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

}
