<?php

namespace Database\Seeders;

use App\Models\Clipping;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClientClippingSeeder extends Seeder
{
    public function run(): void
    {
        $items = [

            /*
            |--------------------------------------------------------------------------
            | Vídeos
            |--------------------------------------------------------------------------
            */

            [
                'title' => 'Documentário Porto de Paranaguá 91 anos',
                'source' => 'YouTube',
                'type' => 'video',
                'published_at' => null,
                'excerpt' => 'Participação em conteúdo audiovisual relacionado ao Porto de Paranaguá.',
                'external_url' => 'https://www.youtube.com/watch?v=MGTQN23uUow',
            ],

            [
                'title' => 'Acidentes com animais peçonhentos aumentam no Paraná',
                'source' => 'YouTube',
                'type' => 'video',
                'published_at' => '2026-01-29',
                'excerpt' => 'Conteúdo sobre prevenção e cuidados com animais peçonhentos no Paraná.',
                'external_url' => 'https://youtu.be/oL_6jYNYiuw?si=smC018ACwceUB7Vl',
            ],

            [
                'title' => 'Cuidados com animais peçonhentos durante o verão',
                'source' => 'YouTube',
                'type' => 'video',
                'published_at' => null,
                'excerpt' => 'Orientações sobre os cuidados necessários durante o período de maior aparecimento de animais peçonhentos.',
                'external_url' => 'https://youtu.be/1okUQU00YRI?si=9eyTE6Xeb4Pv8zt9',
            ],

            /*
            |--------------------------------------------------------------------------
            | Matérias
            |--------------------------------------------------------------------------
            */

            [
                'title' => 'Por que os mosquitos não desaparecem mais no inverno?',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Especialista explica as mudanças no comportamento e na presença de mosquitos durante o inverno.',
                'external_url' => 'https://jblitoral.com.br/cidades/por-que-os-mosquitos-nao-desaparecem-mais-no-inverno-especialista-explica-ao-jb-litoral-o-que-mudou/',
            ],

            [
                'title' => 'Licenciamento da Marginal Direita provoca debate sobre impactos ambientais',
                'source' => 'Jornal Cruzeiro',
                'type' => 'article',
                'published_at' => '2026-05-01',
                'excerpt' => 'Debate sobre licenciamento e impactos ambientais relacionados ao projeto da Marginal Direita.',
                'external_url' => 'https://www.jornalcruzeiro.com.br/sorocaba/noticias/2026/05/760211-licenciamento-da-marginal-direita-provoca-debate-sobre-impactos-ambientais.html',
            ],

            [
                'title' => 'Livro de biólogo sorocabano chega às livrarias em meio a recorde de acidentes com animais peçonhentos',
                'source' => 'SMetal',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Matéria sobre o lançamento de livro dedicado à prevenção de acidentes com animais peçonhentos.',
                'external_url' => 'https://smetal.org.br/imprensa/livro-de-biologo-sorocabano-chega-as-livrarias-em-meio-a-recorde-de-acidentes-com-animais-peconhentos/',
            ],

            [
                'title' => 'Biólogo de Paranaguá lança livro sobre acidentes com animais peçonhentos',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Publicação destaca o lançamento de livro voltado à prevenção e conscientização.',
                'external_url' => 'https://jblitoral.com.br/cidades/biologo-de-paranagua-lanca-livro-sobre-acidentes-com-animais-peconhentos/',
            ],

            [
                'title' => 'Acidentes com animais peçonhentos aumentam no litoral do Paraná',
                'source' => 'Ilha do Mel FM',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Alerta sobre prevenção diante do aumento de ocorrências envolvendo animais peçonhentos.',
                'external_url' => 'https://ilhadomelfm.com.br/acidentes-com-animais-peconhentos-aumentam-no-litoral-do-parana-e-acendem-alerta-para-prevencao/',
            ],

            [
                'title' => 'Pavões se tornam centro de disputa entre moradores',
                'source' => 'Jornal Cruzeiro',
                'type' => 'article',
                'published_at' => '2026-02-01',
                'excerpt' => 'Discussão envolvendo fauna urbana e convivência entre moradores.',
                'external_url' => 'https://www.jornalcruzeiro.com.br/sorocaba/noticias/2026/02/756800-pavoes-se-tornam-centro-de-disputa-entre-moradores.html',
            ],

            [
                'title' => 'Litoral do Paraná registra mais de 2.400 ocorrências com águas-vivas e caravelas',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Informações e orientações relacionadas ao aumento de ocorrências com animais marinhos.',
                'external_url' => 'https://jblitoral.com.br/cidades/litoral-do-parana-ja-teve-mais-de-2400-ocorrencias-com-aguas-vivas-e-caravelas-na-temporada/',
            ],

            [
                'title' => 'Litoral ganha primeiro centro de compostagem de resíduos',
                'source' => 'Folha do Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Iniciativa ambiental voltada ao tratamento e aproveitamento de resíduos orgânicos.',
                'external_url' => 'https://folhadolitoral.com.br/editorias/meio-ambiente/litoral-ganha-1-centro-de-compostagem-de-residuos/',
            ],

            [
                'title' => 'Por que o caranguejo só pode ser capturado agora e o siri durante todo o ano?',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Explicação sobre períodos de captura, reprodução e conservação de espécies.',
                'external_url' => 'https://jblitoral.com.br/cidades/por-que-o-caranguejo-so-pode-agora-e-o-siri-o-ano-inteiro-o-jb-explica/',
            ],

            [
                'title' => 'Invasão de borboletas chama atenção no litoral',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Especialista explica o fenômeno ambiental que provocou grande concentração de borboletas.',
                'external_url' => 'https://jblitoral.com.br/cidades/invasao-de-borboletas-entenda-o-fenomeno-que-vem-chamando-a-atencao-no-litoral/',
            ],

            [
                'title' => 'Semana do Meio Ambiente promove conscientização em Paranaguá',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Evento reúne atividades de educação ambiental e conscientização.',
                'external_url' => 'https://jblitoral.com.br/cidades/16a-semana-do-meio-ambiente-feira-promete-divertir-e-conscientizar-visitantes-em-paranagua/',
            ],

            [
                'title' => 'O enigma da invasão de insetos em Paranaguá',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Explicação científica para o fenômeno de grande presença de insetos na região.',
                'external_url' => 'https://jblitoral.com.br/cidades/o-enigma-da-invasao-de-insetos-em-paranagua-foi-desvendado-descubra-do-que-se-trata/',
            ],

            [
                'title' => 'Quase 30% do esgoto no litoral não recebe tratamento',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Reportagem aborda saneamento básico e seus impactos ambientais no litoral do Paraná.',
                'external_url' => 'https://jblitoral.com.br/cidades/quase-30-do-esgoto-gerado-em-guaratuba-matinhos-e-pontal-do-parana-nao-e-tratado/',
            ],

            [
                'title' => 'Criança é picada por jararaca dentro de casa em Guaraqueçaba',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Caso reforça a importância da prevenção e orientação sobre acidentes com animais peçonhentos.',
                'external_url' => 'https://jblitoral.com.br/cidades/crianca-de-7-anos-e-picada-por-jararaca-dentro-de-casa-em-guaraquecaba/',
            ],

            [
                'title' => 'Começa temporada de praia iluminada por plâncton na Ilha do Mel',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Fenômeno natural de bioluminescência volta a chamar atenção na Ilha do Mel.',
                'external_url' => 'https://jblitoral.com.br/noticias/comeca-temporada-de-praia-iluminada-por-plancton-na-ilha-do-mel/',
            ],

            [
                'title' => 'Dengue: litoral do Paraná registra novos casos',
                'source' => 'Agora Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Atualização sobre o cenário da dengue e os cuidados de prevenção na região.',
                'external_url' => 'https://agoralitoral.com.br/dengue-litoral-do-parana-soma-1060-novos-casos-da-doenca-na-ultima-semana',
            ],

            [
                'title' => 'Aterro sanitário de Pontal vira lixão a céu aberto',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Reportagem aborda problemas ambientais e tratamento inadequado de resíduos e chorume.',
                'external_url' => 'https://jblitoral.com.br/noticias/em-plena-temporada-aterro-sanitario-de-pontal-virou-lixao-a-ceu-aberto-sem-tratamento-adequado-do-chorume/',
            ],

            [
                'title' => 'Biólogo lança livro para prevenir acidentes com animais peçonhentos',
                'source' => 'Gazeta de Votorantim',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Livro apresenta informações acessíveis para prevenção e conscientização sobre animais peçonhentos.',
                'external_url' => 'https://www.gazetadevotorantim.com.br/noticia/55895/votorantim/noticias/biologo-lanca-livro-com-linguagem-acessivel-para-prevenir-acidentes-com-animais-peconhentos.html',
            ],

            [
                'title' => 'Tempo mostrará a melhor decisão, diz biólogo',
                'source' => 'Jornal Ipanema',
                'type' => 'interview',
                'published_at' => null,
                'excerpt' => 'Participação do biólogo em debate de interesse ambiental e regional.',
                'external_url' => 'https://www.jornalipanema.com.br/noticia/8356/votorantim/sorocaba/tempo-mostrara-a-melhor-decisao-diz-biologo-sobre-sandro.html',
            ],

            [
                'title' => 'Autor sorocabano lança livro Animais Peçonhentos: da Preservação à Prevenção',
                'source' => 'Agenda Sorocaba',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Divulgação do lançamento da publicação dedicada à preservação e prevenção.',
                'external_url' => 'https://agendasorocaba.com.br/listas-novidades/autor-sorocabano-lanca-livro-animais-peconhentos-da-preservacao-a-prevencao/',
            ],

            [
                'title' => 'Desmistificando a comunicação ambiental',
                'source' => 'JB Litoral',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Reflexão sobre comunicação, ciência e conscientização ambiental.',
                'external_url' => 'https://jblitoral.com.br/coluna/territorio-animal/desmistificando-a-comunicacao-ambiental/',
            ],

            [
                'title' => 'Biólogo sorocabano lança livro sobre prevenção a picadas de animais peçonhentos',
                'source' => 'Portal Porque',
                'type' => 'article',
                'published_at' => null,
                'excerpt' => 'Matéria sobre o lançamento de obra dedicada à prevenção de acidentes com animais peçonhentos.',
                'external_url' => 'https://www.portalporque.com.br/cultura/biologo-sorocabano-lanca-livro-sobre-prevencao-a-picadas-de-animais-peconhentos/',
            ],

            /*
            |--------------------------------------------------------------------------
            | Redes e televisão
            |--------------------------------------------------------------------------
            */

            [
                'title' => 'Publicação sobre atuação profissional',
                'source' => 'Instagram',
                'type' => 'social',
                'published_at' => null,
                'excerpt' => 'Conteúdo publicado nas redes sociais relacionado à atuação profissional.',
                'external_url' => 'https://www.instagram.com/p/DJ3-hGiv4cB/',
            ],

            [
                'title' => 'Animais peçonhentos, saúde pública e prevenção',
                'source' => 'LinkedIn',
                'type' => 'social',
                'published_at' => null,
                'excerpt' => 'Publicação relacionada ao livro e à conscientização sobre animais peçonhentos.',
                'external_url' => 'https://www.linkedin.com/posts/roberto-fernandes-amadio_livrobitseditora-animaispeconhentos-saudepublica-activity-7478776613481132032-Dmux/?originalSubdomain=pt',
            ],

            [
                'title' => 'Participação em reportagem da Globo',
                'source' => 'GloboPlay',
                'type' => 'interview',
                'published_at' => null,
                'excerpt' => 'Participação em reportagem televisiva sobre tema relacionado ao meio ambiente e à biologia.',
                'external_url' => 'https://globoplay.globo.com/v/14504201/',
            ],
        ];

        foreach ($items as $index => $item) {
            Clipping::query()->updateOrCreate(
                [
                    'external_url' => $item['external_url'],
                ],
                [
                    'title' => $item['title'],
                    'slug' => Str::slug($item['title']),
                    'source' => $item['source'],
                    'type' => $item['type'],
                    'published_at' => $item['published_at'],
                    'excerpt' => $item['excerpt'],
                    'content' => null,
                    'image' => null,
                    'sort_order' => $index + 1,
                    'is_featured' => $index < 3,
                    'is_active' => true,
                ]
            );
        }
    }
}