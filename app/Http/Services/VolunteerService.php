<?php

namespace App\Http\Services;

use App\Models\Volunteer;

class VolunteerService
{
    function save(Volunteer $volunteer)
    {
        // TODO: Logs
        $volunteer->save();
    }
}
