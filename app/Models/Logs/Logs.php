<?php

namespace App\Models\Logs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Logs extends Model
{
    public function logable(): MorphTo
    {
        return $this->morphTo();
    }
}
