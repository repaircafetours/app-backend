<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use WendellAdriel\Lift\Lift;

use App\Traits\HasSchemalessAttributes;
use WendellAdriel\Lift\Attributes\Cast;
use WendellAdriel\Lift\Attributes\Relations\HasManyThrough as RelationsHasManyThrough;
use WendellAdriel\Lift\Attributes\Rules;

#[HasMany(Item::class)]
#[RelationsHasManyThrough(Visitor::class, Item::class)]
/**
 * @property Item[] $items
 * @property Visitor[] $visitors
 */
class Visitor extends Model
{

    use HasSchemalessAttributes, Lift;
    public string $email;

    public string $title;

    #[Rules(["required"])]
    public string $name;
    public string $surname;
    public string $zip_code;
    public string $city;
    public string $phone_number;
    public string $source;

    #[Cast("bool")]
    public bool $notification;

    public array $extra_attributes = [];
}
