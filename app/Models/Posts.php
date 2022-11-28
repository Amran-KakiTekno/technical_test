<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    /**
     * The model's default values for attributes.
     *
     * @var array
     */

    protected $attributes = [
        'userId' => "",
        'id' => "",
        'title' => "",
        'body' => "",
    ];
}
