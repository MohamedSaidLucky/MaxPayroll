<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    public function branch():HasOne{
        return $this->hasOne(Branch::class);
    }
    public function company():HasOne{
        return $this->hasOne(Company::class);
    }
    public function position():HasOne{
        return $this->hasOne(Position::class);
    }
    public function section():HasOne{
        return $this->hasOne(Section::class);
    }
    public function nationality():HasOne{
        return $this->hasOne(Nationality::class);
    }
}
