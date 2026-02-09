<?php

namespace App\Models;

use App\Traits\HasSchemalessAttributes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use WendellAdriel\Lift\Lift;

#[BelongsTo(Visitor::class)]
/**
 * @property Visitor $visitor
 */
class Item extends Model
{

use HasSchemalessAttributes, Lift;
    //

    public float $weight;
    public int $age;
    public string $name;
    public bool $is_electric;
    public string $brand;

    public array $extra_attributes = [];

}
