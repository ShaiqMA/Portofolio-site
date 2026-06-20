     
    @extends('layout')

    @section('content')
        <section id="banner" class="bg-taupe-300 shadow-lg text-center py-40  ">
            <h1 class="transform transition text-3xl sm:text-5xl font-light mb-2 text-taupe-600">Neem contact met mij op</h1>
            <p class=" font-extralight text-[14px]  text-taupe-500">Heb je vragen of wil je samenwerken? Stuur me een bericht!</p>
            <a href="#contactForm" onclick="document.getElementById('contactForm').scrollIntoView({behavior:'smooth', block:'start'})" class="inline-block bg-taupe-600 text-white px-4 py-2 rounded-lg hover:bg-taupe-700 transition duration-300 mt-4">
                Neem contact op
            </a>
       
        </section>

        <section class="bg-taupe-400 py-10 drop-shadow-2xl justify-center items-center flex flex-col sm:flex-row gap-4">
            <div class="m-2 rounded-lg  shadow-lg p-4 sm:w-2/4 sm:p-6 bg-taupe-300">
                <h2 class="text-2xl font-light text-taupe-600 px-4 border-b pb-2 border-taupe-600 text-center">Contactinformatie</h2>
                <p class="font-extralight text-taupe-500 px-4 mt-2 text-center">E-mail: <a href="mailto: shaiqahmed26@gmail.com" class="border-b border-taupe-600 hover:text-gray-300">
                    shaiqahmed26@gmail.com
                </a></p>
                <p class="font-extralight text-taupe-500 px-4 mt-2 text-center">Telefoon: <a href="tel:+31612345678" class="border-b border-taupe-600 hover:text-gray-300">
                    +31 6 86302819
                </a></p>
            </div>
        </section>

        <section class="bg-taupe-300 py-10 drop-shadow-2xl justify-center items-center flex flex-col  gap-4">
            <h2 class="text-2xl sm:text-4xl font-light text-taupe-600 px-4 ">Stuur een bericht</h2>
            <form action="https://api.web3forms.com/submit" method="POST" id="contactForm" class="w-full max-w-lg bg-taupe-300 p-6 rounded-lg shadow-lg">
                <input type="hidden" name="access_key" value="a4c36ca6-e584-4396-a119-1510522b3e84">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Naam:</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-black rounded-lg focus:outline-none focus:ring focus:ring-taupe-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">E-mail:</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-black rounded-lg focus:outline-none focus:ring focus:ring-taupe-500">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 font-bold mb-2">Bericht:</label>
                    <textarea id="message" name="message" rows="5" class="w-full px-3 py-2 border border-black rounded-lg focus:outline-none focus:ring focus:ring-taupe-500"></textarea>
                </div>
                <div class="flex justify-center">
                <button type="submit" class="bg-taupe-600 text-white px-4 py-2 rounded-lg hover:bg-taupe-700 transition duration-300 ">Verstuur</button>
                </div>
            </form>
        </section>
    @endsection    
