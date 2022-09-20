<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = ['per_id', 'from', 'body'];
}
