<?php

declare(strict_types = 1);

namespace App\Http\Requests\Person;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape([
        'name' => "string",
        'age'  => "string",
        'job'  => "string"
    ])]
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'age'  => 'required|integer',
            'job'  => 'required|string',
        ];
    }
}
