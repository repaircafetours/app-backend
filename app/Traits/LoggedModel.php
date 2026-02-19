<?php

namespace App\Traits;

/**
 * Disables the automatic updates of the columns "updated_at" and "created_at" and "updated_at"
 * since it's handled by the logger.
 */
trait LoggedModel
{
    public $timestamps = false;
}
