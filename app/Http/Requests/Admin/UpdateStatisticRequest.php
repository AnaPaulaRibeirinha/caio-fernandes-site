<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStatisticRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'value' => [
                'required',
                'string',
                'max:50',
            ],

            'label' => [
                'required',
                'string',
                'max:180',
            ],

            'icon' => [
                'required',
                Rule::in([
                    'project',
                    'experience',
                    'location',
                    'check',
                ]),
            ],

            'sort_order' => [
                'required',
                'integer',
                'min:0',
                'max:9999',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ];
    }

    public function attributes(): array
    {
        return [
            'value' => 'valor',
            'label' => 'descrição',
            'icon' => 'ícone',
            'sort_order' => 'ordem',
            'is_active' => 'status',
        ];
    }
}