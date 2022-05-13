<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static create(mixed $data)
 */
class Person extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

}
