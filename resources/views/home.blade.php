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
<!-- de header van de pagina: in het groot op de scherm te zien met een titel en een korte zin -->
    <header id="banner" class="bg-taupe-300 shadow-lg text-center py-40  ">
        <h1 class="transform transition text-3xl sm:text-5xl font-light mb-2 text-taupe-600">Welkom op mijn portfolio</h1>
        <p class=" font-extralight text-[14px]  text-taupe-500">Hier vind je een overzicht van mijn projecten en
            contactinformatie.</p>
    </header>

    <!-- korte beschrijfving over mezelf  -->
    <section aria-labelledby="over-mij" class="bg-taupe-400 py-10 drop-shadow-2xl justify-center items-center flex flex-col sm:flex-row gap-4">
        <div class="m-2 rounded-lg  shadow-lg p-4 sm:w-2/4 sm:p-6 bg-taupe-300">
            <h2 id="over-my" class="text-2xl font-light text-taupe-600 px-4 border-b pb-2 border-taupe-600 text-center">Over mij</h2>
            <p class="font-extralight text-taupe-500 px-4 mt-2 text-center">Ik ben een enthousiaste student met een passie
                voor het creëren van innovatieve oplossingen. Met ervaring in verschillende programmeertalen en frameworks,
                streef ik ernaar om gebruiksvriendelijke en efficiënte applicaties te bouwen.</p>
        </div>
    </section>

    <!-- mijn vaardigheden & redenen om mij aan te nemen -->
    <section aria-labelledby="vaardigheden" class="sm:flex sm:max-[1540px]:flex-wrap">
        <!-- mijn vaardigheden sectie -->
        <div class="sm:w-1/2 sm:max-[1540px]:w-full bg-taupe-200 py-10 drop-shadow-2xl justify-center items-center flex flex-col sm:flex-row gap-4 px-4">
            <h2 id="vaardigheden" class="text-2xl sm:text-4xl font-light text-taupe-600 px-4 border-l-4 border-taupe-600">Gespecialiseerd In
            </h2>
            <!-- de vaardigheden -->
            <ul class="border-l-4 text-1xl sm:text-4xl list-none list-inside font-extralight text-taupe-500 ">
                <li class="p-4 m-1 hover:ease-in-out duration-500 hover:bg-taupe-300 rounded-lg">Webontwikkeling</li>
                <li class="p-4 m-1 hover:ease-in-out duration-500 hover:bg-taupe-300 rounded-lg">Frontend en Backend</li>
                <li class="p-4 m-1 hover:ease-in-out duration-500 hover:bg-taupe-300 rounded-lg">Databasebeheer</li>
                <li class="p-4 m-1 hover:ease-in-out duration-500 hover:bg-taupe-300 rounded-lg">Gameontwikkeling</li>
            </ul>
        </div>
        <!-- waarom mij aannemen? sectie -->
        <div class=" sm:w-1/2 sm:max-[1540px]:w-full bg-taupe-200 py-10 drop-shadow-2xl justify-center items-center flex flex-col sm:flex-row gap-4 px-4">
            <h2 class="text-2xl sm:text-4xl font-light  text-taupe-600 px-4 border-l-4 border-taupe-600">Waarom Mij
                Aannemen?</h2>
            <ul>
                <!-- de redenen, de svg zijn de checkicoontjes -->
                <li class="p-4 m-1 hover:ease-in-out duration-500 hover:bg-taupe-300 rounded-lg"><svg
                        class="inline-block mr-2" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg> Toegewijd en leergierig
                </li>
                <li class="p-4 m-1 hover:ease-in-out duration-500 hover:bg-taupe-300 rounded-lg"><svg
                        class="inline-block mr-2" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg> Sterke probleemoplossende vaardigheden
                </li>
                <li class="p-4 m-1 hover:ease-in-out duration-500 hover:bg-taupe-300 rounded-lg"><svg
                        class="inline-block mr-2" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg> Ervaring met verschillende programmeertalen
                </li>
                <li class="p-4 m-1 hover:ease-in-out duration-500 hover:bg-taupe-300 rounded-lg"><svg
                        class="inline-block mr-2" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg> Gepassioneerd over hoogwaardige code
                </li>
            </ul>
        </div>
    </section>

    <!-- Op zoek naar een stage plek sectie met mijn stagedata in bullet points -->
    <section aria-labelledby="form" class="bg-taupe-400 py-10 drop-shadow-2xl justify-center items-center flex flex-col sm:flex-row gap-4">
        <h2 id="form" class="text-2xl sm:text-4xl font-light text-taupe-600 px-4 ">Opzoek naar een stageplek!</h2>
        <ul>
            <!-- stage data, svg is voor de checkicoontjes -->
            <li class="p-4 m-1 hover:ease-in-out duration-500 bg-taupe-300 rounded-lg"><svg class="inline-block mr-2"
                    width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg> Beschikbaar voor een stage vanaf 24 augustus t/m 18 juni
            </li>
            <li class="p-4 m-1 hover:ease-in-out duration-500 bg-taupe-300 rounded-lg"><svg class="inline-block mr-2"
                    width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg> Omgeving Amsterdam / Noord-Holland
            </li>
            <li class="p-4 m-1 hover:ease-in-out duration-500 bg-taupe-300 rounded-lg"><svg class="inline-block mr-2"
                    width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg> Gemotiveerd om te leren en bij te dragen aan projecten
            </li>
        </ul>
    </section>

    <!-- intresse sectie met een knop naar contact pagina -->
    <section class="bg-taupe-200 py-10 drop-shadow-2xl justify-center items-center flex flex-col sm:flex-row gap-4">
        <h2 class="text-2xl sm:text-4xl font-light text-taupe-600 px-4 ">Interesse?</h2>
        <p class="font-extralight text-taupe-500 px-4 mt-2">Neem gerust contact met mij op voor meer informatie of om een
            gesprek in te plannen. Ik kijk ernaar uit om van u te horen!</p>
        <button class="bg-taupe-600 text-white py-2 px-4 rounded-lg hover:bg-taupe-700 transition-colors duration-300"><a
                href="/contact">Neem Contact Op</a></button>
    </section>

@endsection