@extends('layout')

@section('content')

<!-- Header van de pagina  -->
<header class="bg-[#918574] justify-center p-6 flex items-center">
    <div class="bg-[#B8AFA2] rounded-lg text-center inset-shadow-sm/40">
        <h1 class="text-white px-10 py-6 text-[25px] font-extralight">Schiphol-Dashboard </h1>
    </div>
</header>

<!-- Project beschrijving -->
<section class="bg-[#B8AFA2] flex flex-col justify-center items-center p-8 gap-6 text-white font-extralight">
    <article class="bg-[#918574] px-4 py-8 rounded shadow-[0_0_20px_rgba(0,0,0,0.30)]">
        <p>
            Op luchthaven Schiphol vertrekken en landen dagelijks talloze vluchten. <br> Dit vereist een effectieve organisatie van vluchtgegevens, reizigersinformatie <br> en managementinzichten.
        </p>
    </article>
    <article class="bg-[#918574] px-4 py-8 rounded shadow-[0_0_20px_rgba(0,0,0,0.30)]">
        <p>
            Dit project draait om het bouwen van een interactief <br>Schiphol-dashboard waarmee reizigers vluchten kunnen zoeken en boeken, <br>vluchtcoördinatoren vluchtschema’s en gatebeheer kunnen uitvoeren, en de directie overzichtelijke <br>rapportages ontvangt over omzet en gebruik.
        </p>
    </article>
</section>

<!-- Core functions & Gebruikte Technologieen -->
<section class="bg-[#D5CFC5] flex   items-center justify-center gap-20  max-[1411px]:gap-50 h-full">

    <div class="flex  items-center font-extralight text-2xl  py-6">
        <h2 class="text-[#534A3E] text-center px-15">Core <br>Functions</h2>
        <ul class="flex flex-col justify-center gap-4 ">
            <li class="bg-[#B8AFA2] p-4 rounded h-25 text-center w-80 max-[1360px]:w-30 text-[80%] max-[718px]:text-[10px] max-[1320px]:text-[10px] font-extralight flex items-center">Volledige CRUD functionaliteit <br>voor coördinatoren</li>
            <li class="bg-[#B8AFA2] p-4 rounded h-25 text-center w-80 max-[1360px]:w-30 text-[60%] max-[718px]:text-[10px] max-[1320px]:text-[10px] font-extralight flex items-center">Custom Laravel Middleware die <br> inkomende HTTP-verzoeken intercept en <br> routes autoriseert op basis van <br> authenticatie-context.</li>
            <li class="bg-[#B8AFA2] p-4 rounded h-25 text-center w-80 max-[1360px]:w-30 text-[60%] max-[718px]:text-[10px] max-[1320px]:text-[10px] font-extralight flex items-center">Een beveiligde back-end route voor directe <br> database-mutaties op de rollenstructuur <br> van gebruikers.</li>
        </ul>
    </div>

    <aside class=" max-[1360px]:hidden px-30 bg-[#D5CFC5]">
        <h2 class="text-[#534A3E] text-[40px] pt-20 pb-2 font-extralight text-center">Gebruikte Technologieen</h2>
        <ul class="flex flex-col justify-center items-center gap-3 pb-20">
            <li class="bg-[#918574]  py-4 rounded w-[60%] text-center text-white text-2xl font-extralight">Laravel</li>
            <li class="bg-[#918574]  py-4 rounded w-[60%] text-center text-white text-2xl font-extralight">Tailwind</li>            
            <li class="bg-[#918574]  py-4 rounded w-[60%] text-center text-white text-2xl font-extralight">MYSQL</li>
        </ul>
    </aside>
</section>

<aside class="bg-[#D5CFC5] hidden max-[1360px]:block px-30">
    <h2 class="text-[#534A3E] text-[40px] max-[609px]:text-[35px] pt-20 pb-2 font-extralight text-center">Gebruikte Technologieen</h2>
    <ul class="flex flex-col justify-center items-center gap-3 pb-20">
        <li class="bg-[#918574]  py-4 rounded w-[60%] text-center text-white text-2xl font-extralight max-[609px]:text-[14px]">Laravel</li>
        <li class="bg-[#918574]  py-4 rounded w-[60%] text-center text-white text-2xl font-extralight max-[609px]:text-[14px]">Tailwind</li>            
        <li class="bg-[#918574]  py-4 rounded w-[60%] text-center text-white text-2xl font-extralight max-[609px]:text-[14px]">MYSQL</li>
    </ul>
</aside>

<!-- Foto Section-->
 <section class="bg-[#B8AFA2] flex flex-col items-center">
    <div class="justify-center p-6 flex items-center w-full ">
        <h2 class="bg-[#534A3E] text-center p-4 rounded text-white font-extralight w-[99%] text-2xl">Foto's van het project</h2>
    </div>
    <div class=" grid grid-cols-2 gap-20 place-items-center w-full pb-10 max-[1200px]:grid-cols-1 max-[1200px]:gap-5 max-[1200px]:h-[200vw] ">
        <div class="bg-white w-[70%] h-[15vw]"><img src="{{ asset('images/home.png') }}"></div>
        <div class="bg-white w-[70%] h-[15vw]"><img src="{{ asset('images/home2.png') }}" ></div>
        <div class="bg-white w-[70%] h-[15vw]"><img src="{{ asset('images/Flights.png') }}" ></div>
        <div class="bg-white w-[70%] h-[15vw]"><img src="{{ asset('images/bookings.png') }}"></div>
    </div>
    <a href="http://www.github.com/shaiqMA" class="text-white text-center font-extralight p-5 text-[30px]">Check op GitHub →</a>
 </section>

@endsection
