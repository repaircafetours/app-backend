<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use WendellAdriel\Lift\Lift;

use App\Traits\HasSchemalessAttributes;
use WendellAdriel\Lift\Attributes\Cast;
use WendellAdriel\Lift\Attributes\PrimaryKey;

class Visitor extends Model
{

    use HasSchemalessAttributes, Lift;
    //
    protected $primaryKey = "email";
    protected $keyType = "string";
    public $incrementing = false;

    #[PrimaryKey(type: "string",  incrementing: false)]
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
}
<?php

namespace App\Models;

cl
