<?php

namespace App\Models;

use App\Traits\HasSchemalessAttributes;
use DateTimeImmutable;
use Illuminate\Database\Eloquent\Relations\Pivot;
use WendellAdriel\Lift\Attributes\Relations\HasMany;
use WendellAdriel\Lift\Attributes\Relations\HasOne;
use WendellAdriel\Lift\Attributes\Rules;
use WendellAdriel\Lift\Lift;

#[HasOne(Item::class)]
#[HasOne(Event::class)]
class Appointment extends Pivot
{
    use HasSchemalessAttributes, Lift;

    public string $comment;

    public DateTimeImmutable $appointment_date;

    #[Rules(min:1, max:5, messages:["min" => "The satisfaction rating must be at least 1.", "max" => "The satisfaction rating may not be greater than 5."])]
    public int $satisfaction_rating;
}
