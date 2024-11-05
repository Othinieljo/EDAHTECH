<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('landing/layout/master.page-title')}}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('landing/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body class="font-raleway">
     @include('landing.includes.headers')
     @yield('landing-corps-edahtech')

    

    {{-- <section id="features" class="bg-gradient-to-r from-blue-500 to-blue-800 py-20 text-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-12">Fonctionnalités Clés</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-white p-6 rounded-lg shadow-md text-gray-900">
                    <h3 class="font-bold text-xl mb-4">Facile à Utiliser</h3>
                    <p class="text-gray-600">Notre interface intuitive vous permet de naviguer sans effort.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-gray-900">
                    <h3 class="font-bold text-xl mb-4">100% Sécurisé</h3>
                    <p class="text-gray-600">Vos données sont en sécurité avec nous.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md text-gray-900">
                    <h3 class="font-bold text-xl mb-4">Support 24/7</h3>
                    <p class="text-gray-600">Notre équipe de support est toujours prête à vous aider.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="bg-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">À Propos</h2>
            <p class="text-gray-600 text-lg mb-8">
                MonApp est conçu pour les professionnels qui souhaitent maximiser leur efficacité avec une solution technologique moderne.
            </p>
            <div class="flex justify-center">
                <img src="https://via.placeholder.com/800x400" alt="Présentation de MonApp" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <section id="contact" class="bg-gray-100 py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-4">Contactez-nous</h2>
            <p class="text-gray-600 text-lg mb-8">Des questions ? Nous sommes là pour vous aider.</p>
            <a href="mailto:support@monapp.com" class="bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700">Envoyer un E-mail</a>
        </div>
    </section> --}}

   
    <script type="module" src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
