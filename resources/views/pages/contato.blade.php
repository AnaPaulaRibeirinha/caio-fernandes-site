@extends('layouts.site')

@section('title', 'Contato | Caio Fernandes')

@section(
    'meta_description',
    'Entre em contato com Caio Fernandes para serviços ambientais, consultoria técnica, palestras e projetos.'
)

@section('content')

    {{-- Hero --}}
    <section
        class="
            relative overflow-hidden
            bg-white pb-20 pt-36
            lg:pb-24 lg:pt-40
        "
    >
        {{-- Forma decorativa direita --}}
        <div
            aria-hidden="true"
            class="
                pointer-events-none absolute
                -right-28 top-20
                h-[420px] w-[420px]
                rounded-full
                bg-lime-300/70
            "
        ></div>

        {{-- Círculo interno --}}
        <div
            aria-hidden="true"
            class="
                pointer-events-none absolute
                -right-10 top-40
                h-[260px] w-[260px]
                rounded-full
                border-[42px]
                border-green-800/10
            "
        ></div>

        {{-- Detalhe esquerdo --}}
        <div
            aria-hidden="true"
            class="
                pointer-events-none absolute
                -left-24 bottom-[-100px]
                h-64 w-64
                rounded-full
                border-[35px]
                border-lime-300/30
            "
        ></div>

        <div class="container-site relative z-10">

            <span
                class="
                    inline-flex items-center gap-2
                    text-xs font-extrabold uppercase
                    tracking-[0.18em]
                    text-lime-600
                "
            >
                <span
                    class="h-2 w-2 rounded-full bg-lime-500"
                ></span>

                Contato
            </span>

            <h1
                class="
                    mt-5 max-w-4xl
                    text-5xl font-black
                    leading-[0.98]
                    tracking-[-0.055em]
                    text-zinc-950
                    sm:text-6xl
                    lg:text-7xl
                "
            >
                Vamos conversar sobre
                <span class="text-green-800">
                    seu projeto?
                </span>
            </h1>

            <p
                class="
                    mt-7 max-w-2xl
                    text-base leading-8
                    text-zinc-600
                    sm:text-lg
                "
            >
                Entre em contato para tirar dúvidas, solicitar uma proposta
                ou conversar sobre demandas ambientais, palestras,
                consultorias e projetos.
            </p>

            <div
                class="
                    mt-9 flex flex-col gap-3
                    sm:flex-row
                "
            >
                <a
                    href="https://wa.me/5515998546600"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="button-primary"
                >
                    Falar pelo WhatsApp

                    <svg
                        class="h-4 w-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8
                            8.5 8.5 0 0 1-7.6 4.7
                            8.38 8.38 0 0 1-3.8-.9
                            L3 21l1.9-5.7
                            a8.38 8.38 0 0 1-.9-3.8
                            8.5 8.5 0 0 1 4.7-7.6
                            A8.38 8.38 0 0 1 12.5 3h.5
                            a8.48 8.48 0 0 1 8 8Z"
                        />
                    </svg>
                </a>

                <a
                    href="#formulario-contato"
                    class="button-secondary"
                >
                    Enviar mensagem

                    <svg
                        class="h-4 w-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14m-6-6 6 6-6 6"
                        />
                    </svg>
                </a>
            </div>

        </div>
    </section>

    {{-- Contato --}}
    <section class="bg-[#f7f8f4] py-20 lg:py-28">
        <div
            class="
                container-site
                grid gap-10
                lg:grid-cols-[0.85fr_1.15fr]
            "
        >
            {{-- Informações --}}
            <div>
                <span class="section-eyebrow">
                    Fale comigo
                </span>

                <h2 class="section-title mt-5">
                    Escolha o melhor canal para entrar em contato
                </h2>

                <div class="mt-10 space-y-4">

                    <a
                        href="https://wa.me/5515998546600"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="
                            group flex items-center gap-5
                            rounded-2xl border border-zinc-200
                            bg-white p-5
                            transition
                            hover:-translate-y-1
                            hover:border-lime-300
                            hover:shadow-lg
                        "
                    >
                        <div
                            class="
                                flex h-12 w-12 shrink-0
                                items-center justify-center
                                rounded-xl bg-lime-100
                                text-green-800
                            "
                        >
                            ☎
                        </div>

                        <div>
                            <span
                                class="
                                    text-xs font-extrabold
                                    uppercase tracking-wider
                                    text-zinc-400
                                "
                            >
                                WhatsApp
                            </span>

                            <strong
                                class="
                                    mt-1 block
                                    text-lg text-zinc-950
                                "
                            >
                                (15) 99854-6600
                            </strong>
                        </div>
                    </a>

                    <a
                        href="mailto:territorioanimal@gmail.com.br"
                        class="
                            group flex items-center gap-5
                            rounded-2xl border border-zinc-200
                            bg-white p-5
                            transition
                            hover:-translate-y-1
                            hover:border-lime-300
                            hover:shadow-lg
                        "
                    >
                        <div
                            class="
                                flex h-12 w-12 shrink-0
                                items-center justify-center
                                rounded-xl bg-lime-100
                                text-green-800
                            "
                        >
                            ✉
                        </div>

                        <div class="min-w-0">
                            <span
                                class="
                                    text-xs font-extrabold
                                    uppercase tracking-wider
                                    text-zinc-400
                                "
                            >
                                E-mail
                            </span>

                            <strong
                                class="
                                    mt-1 block break-all
                                    text-lg text-zinc-950
                                "
                            >
                                territorioanimal@gmail.com.br
                            </strong>
                        </div>
                    </a>

                    <div
                        class="
                            flex items-center gap-5
                            rounded-2xl border border-zinc-200
                            bg-white p-5
                        "
                    >
                        <div
                            class="
                                flex h-12 w-12 shrink-0
                                items-center justify-center
                                rounded-xl bg-lime-100
                                text-green-800
                            "
                        >
                            ⌖
                        </div>

                        <div>
                            <span
                                class="
                                    text-xs font-extrabold
                                    uppercase tracking-wider
                                    text-zinc-400
                                "
                            >
                                Localização
                            </span>

                            <strong
                                class="
                                    mt-1 block
                                    text-lg text-zinc-950
                                "
                            >
                                Sorocaba, São Paulo
                            </strong>
                        </div>
                    </div>

                    <div
                        class="
                            flex items-center gap-5
                            rounded-2xl border border-zinc-200
                            bg-white p-5
                        "
                    >
                        <div
                            class="
                                flex h-12 w-12 shrink-0
                                items-center justify-center
                                rounded-xl bg-lime-100
                                text-green-800
                            "
                        >
                            ◷
                        </div>

                        <div>
                            <span
                                class="
                                    text-xs font-extrabold
                                    uppercase tracking-wider
                                    text-zinc-400
                                "
                            >
                                Atendimento
                            </span>

                            <strong
                                class="
                                    mt-1 block
                                    text-lg text-zinc-950
                                "
                            >
                                Segunda a sexta, das 8h às 18h
                            </strong>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Formulário --}}
            <div
                id="formulario-contato"
                class="
                    scroll-mt-32
                    rounded-3xl border border-zinc-200
                    bg-white p-7 shadow-sm
                    sm:p-9
                "
            >
                <h2 class="text-2xl font-black text-zinc-950">
                    Envie uma mensagem
                </h2>

                <p class="mt-2 text-sm leading-6 text-zinc-500">
                    Preencha os dados abaixo. Você será redirecionado
                    para o WhatsApp com a mensagem pronta.
                </p>

                <form
                    id="contact-form"
                    class="mt-8 grid gap-5"
                >
                    <div>
                        <label
                            for="contact-name"
                            class="
                                mb-2 block text-sm
                                font-extrabold text-zinc-800
                            "
                        >
                            Nome
                        </label>

                        <input
                            type="text"
                            id="contact-name"
                            required
                            class="
                                w-full rounded-xl
                                border border-zinc-300
                                px-4 py-3
                                outline-none transition
                                focus:border-green-700
                                focus:ring-4
                                focus:ring-green-100
                            "
                            placeholder="Seu nome"
                        >
                    </div>

                    <div>
                        <label
                            for="contact-company"
                            class="
                                mb-2 block text-sm
                                font-extrabold text-zinc-800
                            "
                        >
                            Empresa
                        </label>

                        <input
                            type="text"
                            id="contact-company"
                            class="
                                w-full rounded-xl
                                border border-zinc-300
                                px-4 py-3
                                outline-none transition
                                focus:border-green-700
                                focus:ring-4
                                focus:ring-green-100
                            "
                            placeholder="Nome da empresa, se houver"
                        >
                    </div>

                    <div>
                        <label
                            for="contact-subject"
                            class="
                                mb-2 block text-sm
                                font-extrabold text-zinc-800
                            "
                        >
                            Assunto
                        </label>

                        <select
                            id="contact-subject"
                            class="
                                w-full rounded-xl
                                border border-zinc-300
                                bg-white px-4 py-3
                                outline-none transition
                                focus:border-green-700
                                focus:ring-4
                                focus:ring-green-100
                            "
                        >
                            <option>
                                Licenciamento Ambiental
                            </option>

                            <option>
                                Estudos de Fauna
                            </option>

                            <option>
                                Estudos de Flora
                            </option>

                            <option>
                                Educação Ambiental
                            </option>

                            <option>
                                Palestras
                            </option>

                            <option>
                                Outro assunto
                            </option>
                        </select>
                    </div>

                    <div>
                        <label
                            for="contact-message"
                            class="
                                mb-2 block text-sm
                                font-extrabold text-zinc-800
                            "
                        >
                            Mensagem
                        </label>

                        <textarea
                            id="contact-message"
                            rows="6"
                            required
                            class="
                                w-full resize-y
                                rounded-xl
                                border border-zinc-300
                                px-4 py-3
                                outline-none transition
                                focus:border-green-700
                                focus:ring-4
                                focus:ring-green-100
                            "
                            placeholder="Conte um pouco sobre sua necessidade."
                        ></textarea>
                    </div>

                    <button
                        type="submit"
                        class="button-primary mt-2"
                    >
                        Enviar pelo WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
<script>
    document
        .getElementById('contact-form')
        ?.addEventListener('submit', function (event) {
            event.preventDefault();

            const name = document
                .getElementById('contact-name')
                .value.trim();

            const company = document
                .getElementById('contact-company')
                .value.trim();

            const subject = document
                .getElementById('contact-subject')
                .value;

            const message = document
                .getElementById('contact-message')
                .value.trim();

            const text = [
                'Olá, Caio! Vim pelo site.',
                '',
                `Nome: ${name}`,
                company ? `Empresa: ${company}` : null,
                `Assunto: ${subject}`,
                '',
                message,
            ]
                .filter(Boolean)
                .join('\n');

            const url =
                'https://wa.me/5515998546600?text=' +
                encodeURIComponent(text);

            window.open(url, '_blank');
        });
</script>
@endpush