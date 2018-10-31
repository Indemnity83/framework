<?php

namespace Solder\Framework\Models;

use Illuminate\Database\Eloquent\Model;

class Modpack extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}
