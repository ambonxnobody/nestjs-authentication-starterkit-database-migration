<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasUuids;

    protected $fillable = [
        'name',
        'code',
        'locale',
        'is_rtl',
        'icon',
    ];
}
