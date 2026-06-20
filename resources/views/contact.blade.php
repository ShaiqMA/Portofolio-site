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


FORM SUBMITTING
 https://www.youtube.com/watch?v=-HeadgoqJ7A
-->
@extends('layout')

@section('content')
<!-- sectie waar je een grote titel en een pargaaf ziet met een knop eronder die je naar de form brengt -->
    <section id="banner" class="bg-taupe-300 shadow-lg text-center py-40  ">
        <h1 class="transform transition text-3xl sm:text-5xl font-light mb-2 text-taupe-600">Neem contact met mij op</h1>
        <p class=" font-extralight text-[14px]  text-taupe-500">Heb je vragen of wil je samenwerken? Stuur me een bericht!
        </p>
        <a href="#contactForm"
            onclick="document.getElementById('contactForm').scrollIntoView({behavior:'smooth', block:'start'})"
            class="inline-block bg-taupe-600 text-white px-4 py-2 rounded-lg hover:bg-taupe-700 transition duration-300 mt-4">
            Neem contact op
        </a>
    </section>

    <!-- sectie met mijn contact informatie erin -->
    <section class="bg-taupe-400 py-10 drop-shadow-2xl justify-center items-center flex flex-col sm:flex-row gap-4">
        <div class="m-2 rounded-lg  shadow-lg p-4 sm:w-2/4 sm:p-6 bg-taupe-300">
            <h2 class="text-2xl font-light text-taupe-600 px-4 border-b pb-2 border-taupe-600 text-center">Contactinformatie
            </h2>
            <!-- email -->
            <p class="font-extralight text-taupe-500 px-4 mt-2 text-center">E-mail: <a href="mailto: shaiqahmed26@gmail.com"
                    class="border-b border-taupe-600 hover:text-gray-300">
                    shaiqahmed26@gmail.com
                </a></p>
                <!-- nummer -->
            <p class="font-extralight text-taupe-500 px-4 mt-2 text-center">Telefoon: <a href="tel:+31612345678"
                    class="border-b border-taupe-600 hover:text-gray-300">
                    +31 6 86302819
                </a></p>
        </div>
    </section>

    <!-- formulier met naam email en een bericht die je wilt intypen en een versturen knop -->
    <section class="bg-taupe-300 py-10 drop-shadow-2xl justify-center items-center flex flex-col  gap-4">
        <h2 class="text-2xl sm:text-4xl font-light text-taupe-600 px-4 ">Stuur een bericht</h2>
        <form action="https://api.web3forms.com/submit" method="POST" id="contactForm"
            class="w-full max-w-lg bg-taupe-300 p-6 rounded-lg shadow-lg">
            <input type="hidden" name="access_key" value="a4c36ca6-e584-4396-a119-1510522b3e84">
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Naam:</label>
                <input type="text" id="name" name="name"
                    class="w-full px-3 py-2 border border-black rounded-lg focus:outline-none focus:ring focus:ring-taupe-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">E-mail:</label>
                <input type="email" id="email" name="email"
                    class="w-full px-3 py-2 border border-black rounded-lg focus:outline-none focus:ring focus:ring-taupe-500">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 font-bold mb-2">Bericht:</label>
                <textarea id="message" name="message" rows="5"
                    class="w-full px-3 py-2 border border-black rounded-lg focus:outline-none focus:ring focus:ring-taupe-500"></textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-taupe-600 text-white px-4 py-2 rounded-lg hover:bg-taupe-700 transition duration-300 ">Verstuur</button>
            </div>
        </form>
    </section>
@endsection