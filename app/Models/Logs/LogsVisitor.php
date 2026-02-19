<?php

namespace App\Models\Logs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

#[MorphOne(Logs::class, "logable")]
class LogsVisitor extends Model
{
}
