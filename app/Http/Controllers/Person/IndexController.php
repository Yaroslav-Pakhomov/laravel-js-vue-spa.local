<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Database\Eloquent\Collection;

class IndexController extends Controller
{
    public function __invoke(): Collection
    {
        return Person::all();
    }
}
