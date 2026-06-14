<!DOCTYPE html>
<html lang="nl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>
<body class="flex flex-col min-h-screen ">
    @vite('resources/css/app.css')
    <nav class="bg-taupe-600 text-white p-4 font-extralight drop-shadow-lg">
        <ul class="flex space-x-5 text-shadow-lg">
            <li><a href="/" class="hover:text-gray-300">Home</a></li>
            <li><a href="/projects" class="hover:text-gray-300">Projecten</a></li>
            <li><a href="/nieuw-project" class="hover:text-gray-300">Nieuw Project</a></li>
            <li><a href="/contact" class="hover:text-gray-300">Contact</a></li>
        </ul>
    </nav>
    <main class="grow">
            @yield('content')
    </main>
    <footer >
        <div class="bg-taupe-600 text-white p-4 text-center">
           <a href="https://www.linkedin.com/in/shaiq-ahmed-/" target="_blank" class="border-b border-white hover:text-gray-300">LinkedIn</a>
        </div>
        <div class="bg-taupe-600 text-white p-4 text-center">
            <p>&copy; {{ date('Y') }} Mijn Portfolio. Alle rechten voorbehouden.</p>
        </div>
    </footer>
</body>
</html>