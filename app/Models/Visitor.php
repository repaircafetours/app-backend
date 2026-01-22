<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use WendellAdriel\Lift\Lift;

use App\Traits\HasSchemalessAttributes;
use WendellAdriel\Lift\Attributes\Cast;

#[HasMany(Item::class)]
class Visitor extends Model
{

    use HasSchemalessAttributes, Lift;
    public string $email;

    public string $title;
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
