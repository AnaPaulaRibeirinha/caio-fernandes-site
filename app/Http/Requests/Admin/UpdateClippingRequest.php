<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateClippingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        $clipping = $this->route('clipping');

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
                Rule::unique('clippings', 'slug')
                    ->ignore($clipping?->id),
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

            'remove_image' => [
                'nullable',
                'boolean',
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
}