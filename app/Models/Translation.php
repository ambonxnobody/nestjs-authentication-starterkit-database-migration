<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    use HasUuids;

    protected $fillable = [
        'i18n_id',
        'language_locale',
        'value',
    ];
}
