<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Location extends Model
{
    use HasFactory;

    public function branches():HasMany{
        return $this->hasMany(Branch::class);
    }

    public function company():HasOne{
        return $this->hasOne(Location::class);
    }

    
}


