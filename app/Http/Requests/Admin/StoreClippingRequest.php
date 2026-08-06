<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClippingRequest extends FormRequest
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
                'max:200',
            ],

            'slug' => [
                'nullable',
                'string',
                'max:210',
                Rule::unique('clippings', 'slug'),
            ],

            'source' => [
                'nullable',
                'string',
                'max:150',
            ],

            'published_at' => [
                'nullable',
                'date',
            ],

            'excerpt' => [
                'required',
                'string',
                'max:700',
            ],

            'content' => [
                'nullable',
                'string',
            ],

            'image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:5120',
            ],

            'external_url' => [
                'nullable',
                'url',
                'max:2048',
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
            'source' => 'fonte',
            'published_at' => 'data de publicação',
            'excerpt' => 'resumo',
            'content' => 'conteúdo',
            'image' => 'imagem',
            'external_url' => 'link externo',
            'sort_order' => 'ordem',
            'is_featured' => 'destaque',
            'is_active' => 'status',
        ];
    }

    public function messages(): array
    {
        return [
            'external_url.url' => 'O link externo precisa ser uma URL válida.',
            'image.image' => 'O arquivo enviado precisa ser uma imagem.',
            'image.mimes' => 'A imagem deve estar em JPG, JPEG, PNG ou WEBP.',
            'image.max' => 'A imagem pode ter no máximo 5 MB.',
        ];
    }
}