<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class I18n extends Model
{
    use HasUuids;

    public $timestamps = false;
}
