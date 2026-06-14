@extends('layout')

@section('content')

<!-- Header van de pagina  -->
<div class="bg-[#918574] justify-center p-6 flex items-center">
    <div class="bg-[#B8AFA2] rounded-lg text-center inset-shadow-sm/40">
        <h1 class="text-white px-10 py-6 text-[25px] font-extralight">Schiphol-Dashboard </h1>
    </div>
</div>

<!-- Project beschrijving -->
<div class="bg-[#B8AFA2] flex flex-col justify-center items-center p-8 gap-6 text-white font-extralight">
    <div class="bg-[#918574] px-4 py-8 rounded shadow-[0_0_20px_rgba(0,0,0,0.30)]">
        <p>
            Op luchthaven Schiphol vertrekken en landen dagelijks talloze vluchten. <br> Dit vereist een effectieve organisatie van vluchtgegevens, reizigersinformatie <br> en managementinzichten.
        </p>
    </div>
    <div class="bg-[#918574] px-4 py-8 rounded shadow-[0_0_20px_rgba(0,0,0,0.30)]">
        <p>
            Dit project draait om het bouwen van een interactief <br>Schiphol-dashboard waarmee reizigers vluchten kunnen zoeken en boeken, <br>vluchtcoördinatoren vluchtschema’s en gatebeheer kunnen uitvoeren, en de directie overzichtelijke <br>rapportages ontvangt over omzet en gebruik.
        </p>
    </div>
</div>

<!-- Core functions & Gebruikte Technologieen -->
<div>
    <div>
        <h2>Core Function</h2>
        <ul>
            <li>Volledige CRUD functionaliteit voor <br> coördinatoren</li>
            <li>Custom Laravel Middleware die <br> inkomende HTTP-verzoeken intercept en <br> routes autoriseert op basis van <br> authenticatie-context.</li>
            <li>Een beveiligde back-end route voor directe <br> database-mutaties op de rollenstructuur <br> van gebruikers.</li>
        </ul>
    </div>
    <div>
        <h2>Gebruikte Tehcnologieen</h2>
        <li>Laravel</li>
        <li>MYSQL</li>
        <li>Tailwind</li>
    </div>
</div>

<!-- Foto Section-->
 <div>
    <h2>Foto's van het project</h2>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <a href="http://www.github.com/shaiqMA">Check op GitHub →</a>
 </div>

@endsection
