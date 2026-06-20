<!-- 
Alle bronnen voor mijn code: 
STYLING
 - voor styling heb ik gebruik gemaakt van tailwind css: hiervoor heb ik bijna alles gezocht uit de tailinwind docs,
    alles is hierin te vinden voor me omdat ik al weet hoe ik normale css moet gebruiken en alleen de keywordszoals "responsive design" moet zoeken

    https://tailwindcss.com/docs/installation/using-vite
    https://tailwindcss.com/docs/responsive-design
    (de meest gebruikte onderwerpen die ik heb gezocht: 
    - flexbox & grid
    - layout
    - backgrounds
    - borders
    - effects
    )

GEBRUIK VAN BLADES
 - voor mijn applicatie heb ik laravel gebruikt, hierbij is het van belang dat ik weet hoe ik layouts kan gebruiken zonder heletijd navbars kopieren en plakken

    https://laravel.com/docs/
    https://laravel.com/docs/13.x/blade#main-content
    https://dev.to/icornea/laravel-blade-template-engine-a-beginners-guide-54bi

    schoolmodules:
    https://talnet.instructure.com/courses/20302/pages/routing-2?module_item_id=975642
    https://talnet.instructure.com/courses/20302

-->
@extends('layout')

@section('content')
    @vite(['resources/js/filter.ts'])
    <!-- titel sectie "Mijn projecten" -->
    <header class="bg-taupe-400 py-6 sm:py-8 md:py-10 drop-shadow-2xl justify-center items-center flex flex-col gap-4">
        <h1 class="text-center p-3 sm:p-4 bg-taupe-600 border-x text-taupe-200 rounded-lg text-lg sm:text-2xl md:text-3xl text-shadow-lg border-none shadow-lg font-light">
            Mijn Projecten</h1>
    </header>

    <!-- filter sectie met de filter knoppen voor bepaalde technologieen -->
    <nav aria-label="Project filters" class="bg-taupe-200 py-4 flex flex-wrap gap-2 sm:gap-3 justify-center items-center border-b border-taupe-300 shadow-inner">
        <button data-filter="all" class="filter-btn px-4 py-1.5 sm:px-5 sm:py-2 rounded-lg bg-taupe-600 text-taupe-200 font-light text-sm sm:text-base transition-all duration-200 shadow-md">
            Alles
        </button>
        <button data-filter="laravel" class="filter-btn px-4 py-1.5 sm:px-5 sm:py-2 rounded-lg bg-taupe-600 text-taupe-200 font-light text-sm sm:text-base transition-all duration-200 shadow-md">
            Laravel
        </button>
        <button data-filter="python" class="filter-btn px-4 py-1.5 sm:px-5 sm:py-2 rounded-lg bg-taupe-600 text-taupe-200 font-light text-sm sm:text-base transition-all duration-200 shadow-md">
            Python
        </button>
        <button data-filter="unity" class="filter-btn px-4 py-1.5 sm:px-5 sm:py-2 rounded-lg bg-taupe-600 text-taupe-200 font-light text-sm sm:text-base transition-all duration-200 shadow-md">
            Unity
        </button>
    </nav>

    <!-- projecten sectie -->
    <section aria-label="lijst van projecten" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-stretch gap-3 sm:gap-4 md:gap-5 p-3 sm:p-4 md:p-6 bg-taupe-100">
        <!-- Project 1: Takenbeheerder Python -->
        <article
            class="bg-taupe-300 shadow-lg rounded-lg p-3 sm:p-4 md:p-6 hover:shadow-2xl transition-shadow duration-300 flex flex-col min-h-[20rem] sm:min-h-[24rem] md:min-h-[28rem]">
            <h2 class="bg-taupe-500 p-2 sm:p-3 md:p-4 rounded-lg text-2xl sm:text-3xl md:text-4xl font-light mb-3 sm:mb-4 text-taupe-300 text-center shadow-2xl">
                Takenbeheerder</h2>
            <div class="flex-1 flex items-center">
                <p class="font-light bg-taupe-400 rounded-lg p-3 sm:p-4 text-sm sm:text-lg md:text-xl lg:text-2xl text-taupe-600 mb-3 sm:mb-4 text-center shadow-lg">
                    Een eenvoudige command-line takenbeheerder geschreven in Python. Gebruikers kunnen taken toevoegen,
                    bekijken, markeren als voltooid en verwijderen. Maakt gebruik van een lokaal JSON-bestand voor opslag.
                </p>
            </div>
            <div aria-label="Gebruikte technologiëen" class="flex flex-wrap gap-1.5 sm:gap-2 md:gap-3 mb-3 sm:mb-4 justify-center">
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">Python</span>
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">JSON</span>
            </div>
            <a href="https://github.com/ShaiqMA"
                class="mt-auto text-taupe-600 hover:text-taupe-800 text-sm sm:text-base md:text-lg">Bekijk op GitHub →</a>
        </article>

        <!-- Project 2: Portfolio Website -->
        <article class="bg-taupe-300 shadow-lg rounded-lg p-3 sm:p-4 md:p-6 hover:shadow-2xl transition-shadow duration-300 flex flex-col min-h-[20rem] sm:min-h-[24rem] md:min-h-[28rem]">
            <h2 class="bg-taupe-500 p-2 sm:p-3 md:p-4 rounded-lg text-2xl sm:text-3xl md:text-4xl font-light mb-3 sm:mb-4 text-taupe-300 text-center shadow-2xl">
                Portfolio Website</h2>
            <div class="flex-1 flex items-center">
                <p class="font-light bg-taupe-400 rounded-lg p-3 sm:p-4 text-sm sm:text-lg md:text-xl lg:text-2xl text-taupe-600 mb-3 sm:mb-4 text-center shadow-lg">
                    Deze website zelf! Gebouwd met Laravel en Tailwind CSS voor een moderne,
                    responsive portfolio. Toont mijn projecten, contactinformatie en professionele achtergrond.
                    Gebruikt Blade templates voor dynamische content.
                </p>
            </div>
            <div aria-label="Gebruikte technologiëen" class="flex flex-wrap gap-1.5 sm:gap-2 md:gap-3 mb-3 sm:mb-4 justify-center">
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">Laravel</span>
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">Tailwind
                    CSS</span>
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">PHP</span>
            </div>
            <a href="/" class="mt-auto text-taupe-600 hover:text-taupe-800 text-sm sm:text-base md:text-lg">Bekijk Live
                →</a>
        </article>

        <!-- Project 3: Unity Game C# -->
        <article class="bg-taupe-300 shadow-lg rounded-lg p-3 sm:p-4 md:p-6 hover:shadow-2xl transition-shadow duration-300 flex flex-col min-h-[20rem] sm:min-h-[24rem] md:min-h-[28rem]">
            <h2 class="bg-taupe-500 p-2 sm:p-3 md:p-4 rounded-lg text-2xl sm:text-3xl md:text-4xl font-light mb-3 sm:mb-4 text-taupe-300 text-center shadow-2xl">
                Unity Game</h2>
            <div class="flex-1 flex items-center">
                <p class="font-light bg-taupe-400 rounded-lg p-3 sm:p-4 text-sm sm:text-lg md:text-xl lg:text-2xl text-taupe-600 mb-3 sm:mb-4 text-center shadow-lg">
                    Een 2D Top-down shooter game gemaakt in Unity met C#. Spelers besturen een karakter dat vijanden moet
                    verslaan. Bevat meerdere Wave's en een eenvoudig score-systeem.
                </p>
            </div>
            <div aria-label="Gebruikte technologiëen" class="flex flex-wrap gap-1.5 sm:gap-2 md:gap-3 mb-3 sm:mb-4 justify-center">
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">Unity</span>
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">C#</span>
            </div>
            <a href="#" class="mt-auto text-taupe-600 hover:text-taupe-800 text-sm sm:text-base md:text-lg">Bekijk op GitHub
                →</a>
        </article>
    </section>

    <!-- github link text -->
    <aside class="bg-taupe-400 py-6 sm:py-8 md:py-10 drop-shadow-2xl justify-center items-center flex flex-col gap-4">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-light mb-2 sm:mb-3 md:mb-4 text-taupe-600 text-center">GitHub
            Repositories</h2>
        <p class="text-sm sm:text-lg md:text-xl lg:text-2xl text-taupe-600 text-center font-light px-4">Check mijn GitHub
            profiel voor meer projecten!</p>
        <a class="text-taupe-600 hover:text-taupe-800 text-sm sm:text-base md:text-lg"
            href="https://github.com/ShaiqMA">Bekijk op GitHub →</a>
    </aside>

@endsection