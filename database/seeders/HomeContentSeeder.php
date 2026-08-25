<?php

namespace Database\Seeders;

use App\Models\Clipping;
use App\Models\Project;
use App\Models\Service;
use App\Models\Statistic;
use Illuminate\Database\Seeder;

class HomeContentSeeder extends Seeder
{
    public function run(): void
    {
        Service::query()->updateOrCreate(
            ['slug' => 'licenciamento-ambiental'],
            [
                'title' => 'Licenciamento Ambiental',
                'icon' => 'document',
                'short_description' => 'Assessoria completa para obtenção, renovação e regularização de licenças e autorizações ambientais.',
                'sort_order' => 1,
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        Service::query()->updateOrCreate(
            ['slug' => 'estudos-de-fauna'],
            [
                'title' => 'Estudos de Fauna',
                'icon' => 'fauna',
                'short_description' => 'Inventários, resgates, monitoramentos e manejo de fauna para estudos, obras e licenciamentos.',
                'sort_order' => 2,
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        Service::query()->updateOrCreate(
            ['slug' => 'estudos-de-flora'],
            [
                'title' => 'Estudos de Flora',
                'icon' => 'flora',
                'short_description' => 'Inventários florísticos, caracterização vegetal, supressão, compensação e recuperação ambiental.',
                'sort_order' => 3,
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        Service::query()->updateOrCreate(
            ['slug' => 'educacao-ambiental'],
            [
                'title' => 'Educação Ambiental',
                'icon' => 'education',
                'short_description' => 'Programas, treinamentos e ações de conscientização para empresas, escolas e comunidades.',
                'sort_order' => 4,
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        Statistic::query()->updateOrCreate(
            ['label' => 'Projetos realizados com sucesso'],
            [
                'value' => '+200',
                'icon' => 'project',
                'sort_order' => 1,
                'is_active' => true,
            ]
        );

        Statistic::query()->updateOrCreate(
            ['label' => 'De experiência na área ambiental'],
            [
                'value' => '20 anos',
                'icon' => 'experience',
                'sort_order' => 2,
                'is_active' => true,
            ]
        );

        Statistic::query()->updateOrCreate(
            ['label' => 'Municípios atendidos em todo o Brasil'],
            [
                'value' => '30+',
                'icon' => 'location',
                'sort_order' => 3,
                'is_active' => true,
            ]
        );

        Statistic::query()->updateOrCreate(
            ['label' => 'Compromisso com a sustentabilidade'],
            [
                'value' => '100%',
                'icon' => 'check',
                'sort_order' => 4,
                'is_active' => true,
            ]
        );

        Project::query()->updateOrCreate(
            ['slug' => 'monitoramento-e-manejo-de-fauna-silvestre'],
            [
                'title' => 'Monitoramento e manejo de fauna silvestre',
                'category' => 'Fauna',
                'location' => 'Sorocaba, SP',
                'year' => 2026,
                'short_description' => 'Levantamento de espécies, acompanhamento de campo e definição de medidas para reduzir impactos ambientais.',
                'cover_image' => 'assets/images/projects/projeto-fauna.jpg',
                'sort_order' => 1,
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        Project::query()->updateOrCreate(
            ['slug' => 'inventario-e-caracterizacao-de-vegetacao'],
            [
                'title' => 'Inventário e caracterização de vegetação',
                'category' => 'Flora',
                'location' => 'Itu, SP',
                'year' => 2025,
                'short_description' => 'Estudo técnico para identificação das espécies presentes e avaliação das condições ambientais da área.',
                'cover_image' => 'assets/images/projects/projeto-flora.jpg',
                'sort_order' => 2,
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        Project::query()->updateOrCreate(
            ['slug' => 'programa-de-educacao-ambiental'],
            [
                'title' => 'Programa de educação ambiental',
                'category' => 'Educação ambiental',
                'location' => 'Campinas, SP',
                'year' => 2025,
                'short_description' => 'Ações de conscientização e capacitação desenvolvidas com colaboradores e comunidades.',
                'cover_image' => 'assets/images/projects/projeto-educacao.jpg',
                'sort_order' => 3,
                'is_featured' => true,
                'is_active' => true,
            ]
        );
    }
}