<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PropertiesUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:1', 'max:255'],
            'address_street' => ['required', 'string', 'min:1', 'max:255'],
            'address_postcode' => ['nullable', 'string', 'min:1', 'max:255'],
            'lat' => ['nullable', 'numeric', 'regex:/^[-]?((([0-8]?[0-9])(\.(\d{1,8}))?)|(90(\.0+)?))$/'],
            'long' => ['nullable', 'numeric', 'regex:/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))(\.(\d{1,8}))?)|180(\.0+)?)$/'],
        ];
    }
}
