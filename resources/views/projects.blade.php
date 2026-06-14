@extends('layout')

@section('content')

    <div class="bg-taupe-400 py-6 sm:py-8 md:py-10 drop-shadow-2xl justify-center items-center flex flex-col gap-4">
         <h1 class="text-center p-3 sm:p-4 bg-taupe-600 border-x text-taupe-200 rounded-lg text-lg sm:text-2xl md:text-3xl text-shadow-lg border-none shadow-lg font-light">Mijn Projecten</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 items-stretch gap-3 sm:gap-4 md:gap-5 p-3 sm:p-4 md:p-6 bg-taupe-100">
        <!-- Project 1: Takenbeheerder Python -->
        <div class="bg-taupe-300 shadow-lg rounded-lg p-3 sm:p-4 md:p-6 hover:shadow-2xl transition-shadow duration-300 flex flex-col min-h-[20rem] sm:min-h-[24rem] md:min-h-[28rem]">
            <h2 class="bg-taupe-500 p-2 sm:p-3 md:p-4 rounded-lg text-2xl sm:text-3xl md:text-4xl font-light mb-3 sm:mb-4 text-taupe-300 text-center shadow-2xl">Takenbeheerder</h2>
            <div class="flex-1 flex items-center">
                <p class="font-light bg-taupe-400 rounded-lg p-3 sm:p-4 text-sm sm:text-lg md:text-xl lg:text-2xl text-taupe-600 mb-3 sm:mb-4 text-center shadow-lg">
                    Een eenvoudige command-line takenbeheerder geschreven in Python. Gebruikers kunnen taken toevoegen, bekijken, markeren als voltooid en verwijderen. Maakt gebruik van een lokaal JSON-bestand voor opslag.
                </p>
            </div>
            <div class="flex flex-wrap gap-1.5 sm:gap-2 md:gap-3 mb-3 sm:mb-4 justify-center">
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">Python</span>
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">JSON</span>
            </div>
            <a href="https://github.com/ShaiqMA" class="mt-auto text-taupe-600 hover:text-taupe-800 text-sm sm:text-base md:text-lg">Bekijk op GitHub →</a>
        </div>

        <!-- Project 2: Portfolio Website -->
        <div class="bg-taupe-300 shadow-lg rounded-lg p-3 sm:p-4 md:p-6 hover:shadow-2xl transition-shadow duration-300 flex flex-col min-h-[20rem] sm:min-h-[24rem] md:min-h-[28rem]">
            <h2 class="bg-taupe-500 p-2 sm:p-3 md:p-4 rounded-lg text-2xl sm:text-3xl md:text-4xl font-light mb-3 sm:mb-4 text-taupe-300 text-center shadow-2xl">Portfolio Website</h2>
            <div class="flex-1 flex items-center">
                <p class="font-light bg-taupe-400 rounded-lg p-3 sm:p-4 text-sm sm:text-lg md:text-xl lg:text-2xl text-taupe-600 mb-3 sm:mb-4 text-center shadow-lg">
                    Deze website zelf! Gebouwd met Laravel en Tailwind CSS voor een moderne,
                    responsive portfolio. Toont mijn projecten, contactinformatie en professionele achtergrond.
                    Gebruikt Blade templates voor dynamische content.
                </p>
            </div>
            <div class="flex flex-wrap gap-1.5 sm:gap-2 md:gap-3 mb-3 sm:mb-4 justify-center">
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">Laravel</span>
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">Tailwind CSS</span>
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">PHP</span>
            </div>
            <a href="/" class="mt-auto text-taupe-600 hover:text-taupe-800 text-sm sm:text-base md:text-lg">Bekijk Live →</a>
        </div>

        <!-- Project 3: Unity Game C# -->
        <div class="bg-taupe-300 shadow-lg rounded-lg p-3 sm:p-4 md:p-6 hover:shadow-2xl transition-shadow duration-300 flex flex-col min-h-[20rem] sm:min-h-[24rem] md:min-h-[28rem]">
            <h2 class="bg-taupe-500 p-2 sm:p-3 md:p-4 rounded-lg text-2xl sm:text-3xl md:text-4xl font-light mb-3 sm:mb-4 text-taupe-300 text-center shadow-2xl">Unity Game</h2>
            <div class="flex-1 flex items-center">
                <p class="font-light bg-taupe-400 rounded-lg p-3 sm:p-4 text-sm sm:text-lg md:text-xl lg:text-2xl text-taupe-600 mb-3 sm:mb-4 text-center shadow-lg">
                    Een 2D Top-down shooter game gemaakt in Unity met C#. Spelers besturen een karakter dat vijanden moet verslaan. Bevat meerdere Wave's en een eenvoudig score-systeem.
                </p>
            </div>
            <div class="flex flex-wrap gap-1.5 sm:gap-2 md:gap-3 mb-3 sm:mb-4 justify-center">
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">Unity</span>
                <span class="bg-taupe-600 text-taupe-300 px-2 sm:px-3 py-0.5 sm:py-1 rounded text-xs sm:text-sm md:text-xl">C#</span>
            </div>
            <a href="#" class="mt-auto text-taupe-600 hover:text-taupe-800 text-sm sm:text-base md:text-lg">Bekijk op GitHub →</a>
        </div>
    </div>
    <div class="bg-taupe-400 py-6 sm:py-8 md:py-10 drop-shadow-2xl justify-center items-center flex flex-col gap-4">
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-light mb-2 sm:mb-3 md:mb-4 text-taupe-600 text-center">GitHub Repositories</h2>
        <p class="text-sm sm:text-lg md:text-xl lg:text-2xl text-taupe-600 text-center font-light px-4">Check mijn GitHub profiel voor meer projecten!</p>
        <a class="text-taupe-600 hover:text-taupe-800 text-sm sm:text-base md:text-lg" href="https://github.com/ShaiqMA">Bekijk op GitHub →</a>
    </div>

@endsection