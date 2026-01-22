<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[HasMany(Speciality::class)]
#[HasMany(Role::class)]
class Volunteer extends Model
{
    public int $idHumHub;
    public string $regime;


}
