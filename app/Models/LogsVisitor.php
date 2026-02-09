<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class LogsVisitor extends Model
{
    public function log(): MorphOne
    {
        return $this->morphOne(Logs::class, "logable");
    }
}
