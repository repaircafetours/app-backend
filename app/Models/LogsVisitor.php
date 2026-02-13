<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

#[MorphOne(Logs::class, "logable")]
class LogsVisitor extends Model
{
}
