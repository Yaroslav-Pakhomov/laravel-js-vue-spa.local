<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Resources\Person\PersonResource;
use App\Models\Person;
use JetBrains\PhpStorm\Pure;

class ShowController extends Controller
{
    #[Pure]
    public function __invoke(Person $person): PersonResource
    {
        return new PersonResource($person);
    }
}
