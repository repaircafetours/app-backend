<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Logs extends Model
{
    public function logable(): MorphTo
    {
        return $this->morphTo();
    }
}
