<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    /**
     * The model's default values for attributes.
     *
     * @var array
     */

    protected $attributes = [
        'postId' => "",
        'id' => "",
        'name' => "",
        'email' => "",
        'body' => "",
    ];
}
