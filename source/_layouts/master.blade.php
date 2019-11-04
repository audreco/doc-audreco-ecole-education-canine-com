<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="https://ecole-education-canine.com/assets/img/tmp-img/audreco-logo.jpg"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@Audreco_online" />
        <meta name="twitter:title" content="École Éducation Canine" />
        <meta name="twitter:description" content="Le guide du métier d'éducateur canin - éducation canine." />
        <meta name="twitter:image" content="https://ecole-education-canine.com/assets/img/tmp-img/audreco-logo.jpg" />
        <meta name="twitter:image:alt" content="{{ $page->siteName }}">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <meta name="generator" content="tighten_jigsaw_doc">
        @endif

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favico.png">
        <link rel="canonical" href="https://ecole-education-canine.com/" />

        @stack('meta')

        @if ($page->production)
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-38510644-20"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'UA-38510644-4');
            </script>
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body itemscope itemtype="https://schema.org/EducationalOrganization" class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
        <header class="flex items-center shadow bg-white border-b h-24 py-4 fixed top-0 left-0 w-full" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img itemprop="logo" class="h-8 md:h-10 mr-3" src="/assets/img/tmp-img/audreco-logo.jpg" alt="{{ $page->siteName }} logo" />
                    </a>
                </div>
                <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <h1 itemprop="name" class="text-lg md:text-2xl font-semibold hover:text-blue-600 my-0 pr-4 text-right">{{ $page->siteName }}</h1>
                    </a>
                </div>
                    @if ($page->docsearchApiKey && $page->docsearchIndexName)
                        @include('_nav.search-input')
                    @endif
            </div>

            @yield('nav-toggle')
        </header>

        <main role="main" class="w-full flex-auto">
            @yield('body')
        </main>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        <noscript>Votre navigateur ne supporte pas JavaScript !</noscript>

        @stack('scripts')

        <footer class="bg-white text-center text-sm mt-12 py-4" role="contentinfo">
            <p><a itemprop="url" href="https://ecole-education-canine.com">École de toilettage</a> est un site de <a href="https://audreco.com/?utm_source=ecole+education+canine+com" target="_blank">l'École des Métiers de l'Animal de Compagnie</a><br><a href="https://github.com/audreco/doc-audreco-ecole-education-canine-com">GitHub</a><br />&copy; <a href="https://bluerock.ie/?utm_source=ecole+education+canine+com" title="BlueRock">BlueRock</a> {{ date('Y') }}. Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a> and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.</p>
        </footer>
    </body>
</html>
