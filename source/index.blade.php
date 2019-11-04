@extends('_layouts.master')

@section('body')
<section class="bg-cover mt-24 h-screen-60 bg-image-header">

</section>
<section itemscope itemtype="https://schema.org/EducationalOrganization" class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="sm:w-4/5 mx-auto bg-white text-center rounded shadow-lg-soft">
        <div class="flex -mx-2 mb-10 lg:flex-row lg:mb-24 justify-center">
            <div class="mt-8 px-2 flex-1 text-center">
                <h1 itemprop="name" id="intro-docs-template">{{ $page->siteName }}</h1>
                <h2 itemprop="description" id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>
        
                <div class="flex my-10 justify-center">
                    <a href="/docs/formation-educateur-canin" title="{{ $page->siteName }} toilettage canin - toiletteur de chien" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Éducation Canine : le Guide</a>
        
                    <a itemprop="url" href="https://audreco.com/?utm_source=ecole+education+canine+com" title="Jigsaw by Tighten" class="bg-gray-400 hover:bg-gray-600 text-blue-900 font-normal hover:text-white rounded py-2 px-6">Site principal Audreco</a>
                </div>
            </div>
        </div>
    </div>
    <hr class="block my-8 border lg:hidden">
        <div itemscope itemtype="https://schema.org/Offer" class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
            <img src="/assets/img/tmp-img/basic_todolist_pen.svg" class="h-12 w-12" alt="to do list with pen icon">
            <h3 itemprop="description" id="étude éducation canine" class="text-2xl text-blue-900 mb-0">Recevez une étude gratuite sur l'éducation canine</h3>

            <p>Téléchargez nos études gratuites sur : <a itemprop="url" href="https://audreco.com">Audreco</a> onglet "GRATUIT". <br>
                Vous pouvez également consuler nos services, onglet "SERVICES"<br> ainsi que nos formations longues et courtes, onglet "FORMATIONS".
            </p>
        </div>
        <div itemscope itemptype="https://schema.org/Blog" class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
            <img src="/assets/img/tmp-img/basic_laptop.svg" class="h-12 w-12" alt="laptop icon">
            <h3 id="blogs toilettage canin" class="text-2xl text-blue-900 mb-0">Consultez nos blogs</h3>
            <p>
                <a itemprop="url" href="https://audreco.com/mon-chien/?utm_source=ecole+education+canine+com">Tout ce que vous avez toujours cru savoir sur votre chien ou votre chat,<br>et qui n'est peut-être pas vrai !</a> <br>
                <a itemprop="url" href="http://entreprendre-animaux.audreco.com/?utm_source=ecole+education+canine+com">Entreprendre dans les métiers de services auprès des animaux !</a>
            </p>
        </div>

        <div itemscope itemptype="https://schema.org/LocalBusiness" class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
            <img src="/assets/img/tmp-img/basic_spread_text_bookmark.svg" class="h-12 w-12" alt="text book icon">
            <h3 id="livre animaux" class="text-2xl text-blue-900 mb-0">Faites un petit tour dans notre librairie</h3>
            <p><a itemprop="url" href="https://librairie.audreco.com/?utm_source=ecole+education+canine+com">Des livres sur les animaux et le toilettage ! Accéder à la librairie</a></p>
        </div>

        <div itemscope itemptype="https://schema.org/EducationalOrganization" class="max-w-xl lg:max-w-7xl mx-auto px-4 pb-12 lg:pb-20 flex flex-col items-center text-center">
            <img src="/assets/img/tmp-img/basic_magnifier.svg" class="h-12 w-12" alt="magnifier icon">
            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Visitez notre site : Formation toiletteur canin</h3>

            <p><a itemprop="url" href="https://formation-toiletteur-canin.net/?utm_source=ecole+education+canine+com">Tout savoir sur la formation de toiletteur canin : quelles formations en toilettage canin ? quels programmes ? quelles méthodes ? quels sont les points essentiels à observer ?</a>
            </p>
        </div>
    <div itemscope itemptype="https://schema.org/CreativeWork" class="text-center">
        <h3>Sommaire</h3>
        <ul>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-educateur-canin/">
                    Éducateur Canin - le métier
                </a><br />
                <p itemprop="abstract">Éducateur canin, le métier, de quoi s'agit-il ? Que savoir, quand on envisage d'entrer dans cette profession ?</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-educateur-canin/details-metier-educateur-canin">
                    Éducateur canin, le métier dans tous ses détails ! 
                </a><br />
                <p itemprop="abstract">Résumons ! Le travail de l'éducateur canin moderne est de construire, d'optimiser, d'entretenir une relation de qualité entre une famille et un chien.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-educateur-canin/educateur-dresseur-comportementaliste">
                    Educateur canin, le métier : éducateur, dresseur, comportementaliste ?
                </a><br />
                <p itemprop="abstract">On parlait autrefois, et uniquement, de « dresseurs » de chiens. Nombre d'entre eux étaient spécialisés. Par exemple, pour la préparation des chiens de chasse ou l'entraînement des chiens de défense.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-educateur-canin/metier-pratique">
                    Educateur canin, le métier, beaucoup de façons de procéder
                </a><br />
                <p itemprop="abstract">On commence de l'anticiper, l'activité de l'éducateur peut revêtir de nombreux aspects, parfois bien différents ! C'est aussi ce qui construit la richesse de ce métier.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-educateur-canin/educateur-canin-juridique">
                    Educateur canin, le métier, cadre juridique
                </a><br />
                <p itemprop="abstract">Il existe relativement peu d'emplois salariés d'éducateur canin. Et quand de tels emplois existent, l'employeur est rarement une entreprise d'éducation, mais bien plus probablement une entreprise voulant s'adjoindre les compétences d'un éducateur.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-educateur-canin/formation">
                    Educateur canin, le métier : la formation
                </a><br />
                <p itemprop="abstract">L'éducateur canin ne peut faire l'économie d'une solide formation. Le programme devra largement traiter des techniques propres à tout processus éducatif. Et nous l'avons dit, il devra faire une large part à l'étude du comportement.</p>
            </li>
            <li itemscope itemptype="https://schema.org/Article">
                <a itemprop="url" href="docs/formation-educateur-canin/conclusion-educateur-canin">
                    Educateur canin, le métier interface entre l'animal et l'humain
                </a><br />
                <p itemprop="abstract">Concluons : la demande du public invite l'éducateur canin moderne à étendre son offre bien toujours plus loin et plus longtemps. Il faut en effet aider les hommes et les chiens à vivre en harmonie tout au long de leur vie commune.</p>
            </li>
        </ul>
    </div>
</section>
@endsection
