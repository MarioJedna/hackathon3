<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function Owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function Image()
    {
        return $this->belongsTo(Image::class);
    }
}
