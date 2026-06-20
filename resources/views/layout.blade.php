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
<!DOCTYPE html>
<html lang="nl" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>

<body class="flex flex-col min-h-screen ">
    <!-- koppeling naar app.css -->
    @vite('resources/css/app.css')

    <!-- navigatiebar -->
    <nav aria-label="Hoofdnavigatie" class="bg-taupe-600 text-white p-4 font-extralight drop-shadow-lg">
        <ul class="flex space-x-5 text-shadow-lg">
            <li><a href="/" class="hover:text-gray-300">Home</a></li>
            <li><a href="/projects" class="hover:text-gray-300">Projecten</a></li>
            <li><a href="/nieuw-project" class="hover:text-gray-300">Nieuw Project</a></li>
            <li><a href="/contact" class="hover:text-gray-300">Contact</a></li>
        </ul>
    </nav>

    <!-- hier komt de main content in  van elk pagina-->
    <main class="grow">
        @yield('content')
    </main>

    <!-- footer sectie -->
    <footer>
        <div class="bg-taupe-600 text-white p-4 text-center">
            <a href="https://www.linkedin.com/in/shaiq-ahmed-/" target="_blank"
                class="border-b border-white hover:text-gray-300">LinkedIn</a>
        </div>
        <div class="bg-taupe-600 text-white p-4 text-center">
            <p>&copy; {{ date('Y') }} Mijn Portfolio. Alle rechten voorbehouden.</p>
        </div>
    </footer>
</body>

</html>