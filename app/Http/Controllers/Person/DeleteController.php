<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class DeleteController extends Controller
{
    public function __invoke(Person $person): Response|Application|ResponseFactory
    {
        $person->delete();

        return response([]);
    }
}
