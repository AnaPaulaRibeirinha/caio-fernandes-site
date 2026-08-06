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
                'value' => '15 anos',
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

        Clipping::query()->updateOrCreate(
            ['slug' => 'importancia-do-planejamento-ambiental'],
            [
                'title' => 'A importância do planejamento ambiental para o desenvolvimento sustentável',
                'source' => 'Portal Ambiental',
                'published_at' => '2026-07-18',
                'excerpt' => 'Como estudos técnicos e planejamento podem reduzir riscos e tornar os empreendimentos mais responsáveis.',
                'image' => 'assets/images/clipping/clipping-destaque.jpg',
                'sort_order' => 1,
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        Clipping::query()->updateOrCreate(
            ['slug' => 'monitoramento-de-fauna-reduz-impactos'],
            [
                'title' => 'Monitoramento de fauna auxilia na redução de impactos ambientais',
                'source' => 'Jornal Regional',
                'published_at' => '2026-07-09',
                'excerpt' => 'Conheça algumas das etapas realizadas durante o acompanhamento de fauna em áreas de intervenção.',
                'image' => 'assets/images/clipping/clipping-fauna.jpg',
                'sort_order' => 2,
                'is_featured' => true,
                'is_active' => true,
            ]
        );

        Clipping::query()->updateOrCreate(
            ['slug' => 'educacao-ambiental-aproxima-comunidades'],
            [
                'title' => 'Educação ambiental aproxima empresas e comunidades',
                'source' => 'Revista Sustentável',
                'published_at' => '2026-06-25',
                'excerpt' => 'Ações educativas podem fortalecer o diálogo e ampliar a participação da comunidade.',
                'image' => 'assets/images/clipping/clipping-educacao.jpg',
                'sort_order' => 3,
                'is_featured' => true,
                'is_active' => true,
            ]
        );
    }
}