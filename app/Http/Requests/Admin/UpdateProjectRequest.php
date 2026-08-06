<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        $project = $this->route('project');

        return [
            'title' => [
                'required',
                'string',
                'max:180',
            ],

            'slug' => [
                'nullable',
                'string',
                'max:190',
                Rule::unique('projects', 'slug')
                    ->ignore($project?->id),
            ],

            'category' => [
                'required',
                'string',
                'max:100',
            ],

            'location' => [
                'nullable',
                'string',
                'max:150',
            ],

            'year' => [
                'nullable',
                'integer',
                'min:1900',
                'max:' . (date('Y') + 5),
            ],

            'short_description' => [
                'required',
                'string',
                'max:700',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'cover_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],

            'remove_cover_image' => [
                'nullable',
                'boolean',
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
            'category' => 'categoria',
            'location' => 'localização',
            'year' => 'ano',
            'short_description' => 'descrição curta',
            'description' => 'descrição completa',
            'cover_image' => 'imagem de capa',
            'sort_order' => 'ordem',
            'is_featured' => 'destaque',
            'is_active' => 'status',
        ];
    }
}