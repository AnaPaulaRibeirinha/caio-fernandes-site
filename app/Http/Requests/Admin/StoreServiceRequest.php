<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'title' => [
                'required',
                'string',
                'max:150',
            ],

            'slug' => [
                'nullable',
                'string',
                'max:160',
                Rule::unique('services', 'slug'),
            ],

            'icon' => [
                'required',
                Rule::in([
                    'document',
                    'fauna',
                    'flora',
                    'education',
                    'leaf',
                ]),
            ],

            'short_description' => [
                'required',
                'string',
                'max:500',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'sort_order' => [
                'required',
                'integer',
                'min:0',
                'max:9999',
            ],

            'is_featured' => [
                'nullable',
                'boolean',
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
            'title' => 'título',
            'slug' => 'slug',
            'icon' => 'ícone',
            'short_description' => 'descrição curta',
            'description' => 'descrição completa',
            'sort_order' => 'ordem',
            'is_featured' => 'destaque',
            'is_active' => 'status',
        ];
    }
}