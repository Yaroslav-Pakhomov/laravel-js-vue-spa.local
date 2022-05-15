<?php

declare(strict_types=1);

namespace App\Http\Resources\Person;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property mixed $id
 * @property mixed $name
 * @property mixed $age
 * @property mixed $job
 */
class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    #[ArrayShape([
        'id'   => "mixed",
        'name' => "mixed",
        'age'  => "mixed",
        'job'  => "mixed"
    ])]
    public function toArray($request): array
    {
        return [
            'id'   => $this->id,
            'name' => $this->name,
            'age'  => $this->age,
            'job'  => $this->job,
        ];
    }
}
