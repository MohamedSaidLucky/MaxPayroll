<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Document extends Model
{
    use HasFactory;

    public function employee():HasOne{
        return $this->hasOne(Branch::class);
    }

    public function documentType():HasOne{
        return $this->hasOne(DocumentType::class);
    }

    public function company():HasOne{
        return $this->hasOne(Company::class);
    }

}
