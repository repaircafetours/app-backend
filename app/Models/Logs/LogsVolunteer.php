<?php

namespace App\Models\Logs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class LogsVolunteer extends Model
{
    public function log(): MorphOne
    {
        return $this->morphOne(Logs::class, "logable");
    }
}
