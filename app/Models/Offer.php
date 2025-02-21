<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function refferalCodes()
    {
        return $this->hasMany(RefferalCode::class);
    }
}
