<?php

namespace App\Models;

use App\Traits\HasSchemalessAttributes;
use Date;
use Illuminate\Database\Eloquent\Model;
use WendellAdriel\Lift\Attributes\Relations\BelongsToMany;
use WendellAdriel\Lift\Attributes\Relations\HasManyThrough;
use WendellAdriel\Lift\Lift;

#[BelongsToMany(Item::class, pivotModel:Appointment::class)]
#[HasManyThrough(Visitor::class, Item::class)]
/**
 * @property Item[] $items
 * @property Visitor[] $visitors
 */
class Event extends Model
{
    use HasSchemalessAttributes, Lift;

    public Date $date;
    public string $city;
    public string $zip_code;
    public string $address;

    public array $extra_attributes = [];

    /*public function items(): RelationsBelongsToMany {
        return $this->belongsToMany(Item::class);
    }

    public function visitors(): HasManyThrough {
        return $this->hasManyThrough(Visitor::class, Item::class);
    }*/
}
