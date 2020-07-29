<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Apod extends Model
{
    protected $fillable = [
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

}
