<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Http\Requests\Person\UpdateRequest;
use App\Models\Person;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Person $person): bool
    {
        $data = $request->validated();

        return $person->update($data);
    }
}
