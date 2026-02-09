<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use WendellAdriel\Lift\Attributes\Relations\BelongsToMany;

#[BelongsToMany(Volunteer::class, pivotModel:'volunteer_roles')]
class Role extends Model
{
    public string $name;
}
