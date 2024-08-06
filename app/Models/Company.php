<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Company extends Model
{
    use HasFactory;

    public function Departments():HasMany{
        return $this->hasMany(Department::class);
    }

    public function Employees():HasMany{
        return $this->hasMany(Employee::class);
    }

    public function locations():HasMany{
        return $this->hasMany(Location::class);
    }

    public function branches():HasMany{
        return $this->hasMany(Branch::class);
    }

    public function positions():HasMany{
        return $this->hasMany(Position::class);
    }

    public function documentTypes():HasMany{
        return $this->hasMany(DocumentType::class);
    }
    
    public function templateTypes():HasMany{
        return $this->hasMany(TemplateType::class);
    }


}
