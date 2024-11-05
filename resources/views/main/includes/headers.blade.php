<header class="w-full border-b">
    <!-- Premier niveau du header : Contact et choix de langue -->
    <div class="bg-gray-100 ">
        <div class="container mx-auto flex justify-between items-center px-6">
            <!-- Adresse e-mail de contact -->
            <span class="text-sm text-gray-600 font-bold">contact@edahtech.com</span>

            <!-- Choix de langue -->
            <div class=" relative group group-hover:block py-2 ">
                <div class="flex items-center cursor-pointer">
                    <span class="text-sm text-primary font-bold mr-2">Langue :</span>
                    <span class="mr-2">
                        <x-iconpark-world class="w-6 h-6 text-primary" />
                    </span>
                    <span class="text-primary font-bold" >
                        @if(app()->getLocale() == 'en')
                            English
                        @elseif(app()->getLocale() == 'fr')
                            Français
                        @endif
                    </span>
                </div>

                <!-- Menu déroulant pour les langues -->
                <ul class="absolute -right-3 mt-2 bg-white text-gray-800 rounded-lg shadow-md hidden group-hover:block w-28 z-10">
                    <li>
                        <a href="{{ url('fr' . '/' . implode('/', array_slice(Request::segments(), 1))) }}" class="block px-4 py-2 hover:bg-gray-100 ">Français</a>
                    </li>
                    <li>
                        <a href="{{ url('en' . '/' . implode('/', array_slice(Request::segments(), 1))) }}" class="block px-4 py-2 hover:bg-gray-100">English</a>
                    </li>
                    
                    

                </ul>
            </div>
        </div>
    </div>

    <!-- Deuxième niveau du header : Logo et navigation -->
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
        <!-- Logo de l'entreprise -->
        <div class="flex items-center">
            <img src="{{ asset('logo.svg') }}" alt="EDAHTECH" class="h-10">
        </div>

        <!-- Menu de navigation -->
        <nav class="flex space-x-6">
            <a href="{{route('accueil')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$acceuil}}">Accueil</a>
            <a href="{{route('about')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$about}}">Nous connaitre</a>
            <a href="{{route('services')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$services}}">Services</a>
            <a href="{{route('products')}}" class="text-gray-800 hover:text-primary link link--metis font-medium  {{$products}}">Produits</a>
            <a href="{{route('news')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$news}}">Actualités</a>
            <a href="{{route('career')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$carriere}}">Carrière</a>
            <a href="{{route('contact')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$contact}}">Contact</a>
        </nav>
    </div>
</header>
