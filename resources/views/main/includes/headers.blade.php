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
    <div class="container mx-auto flex justify-between items-center px-6  ">
        <!-- Logo de l'entreprise -->
        <div class="flex items-center">
            <img src="{{ asset('logo.svg') }}" alt="EDAHTECH" class="h-10">
        </div>

        <!-- Menu de navigation -->
        {{-- <nav class="flex space-x-6">
            
            <a href="{{route('accueil')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$acceuil}}">Accueil</a>
            <div class="relative group ">
                <a href="{{route('about')}}" class=" relative group text-gray-800 hover:text-primary link link--metis font-medium {{$about}}">Nous connaitre</a>
                <ul class="absolute left-0 mt-2 bg-white text-gray-800 rounded-lg shadow-md hidden group-hover:block w-40 z-10">
                    <li><a href="{{ route('about.history') }}" class="block px-4 py-2 hover:bg-gray-100">Notre Histoire</a></li>
                    <li><a href="{{ route('about.team') }}" class="block px-4 py-2 hover:bg-gray-100">Notre Équipe</a></li>
                    <li><a href="{{ route('about.values') }}" class="block px-4 py-2 hover:bg-gray-100">Nos Valeurs</a></li>
                </ul>
            </div>
            
            <a href="{{route('services')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$services}}">Services</a>
            <a href="{{route('products')}}" class="text-gray-800 hover:text-primary link link--metis font-medium  {{$products}}">Produits</a>
            <a href="{{route('news')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$news}}">Actualités</a>
            <a href="{{route('career')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$carriere}}">Carrière</a>
            <a href="{{route('contact')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$contact}}">Contact</a>
        </nav> --}}

        <nav>
            <ul class="flex space-x-6">
                <li class="py-6"><a href="{{route('accueil')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$acceuil}}">Accueil</a></li>
                <li class="relative group py-6">
                    <a href="{{route('about')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$about}}">Nous connaitre</a>
                    <ul class="absolute left-0 mt-6 bg-white text-gray-800 rounded-lg shadow-md hidden group-hover:block w-40 z-10">
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('about.history') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                EDAHTECH
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('about.team') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Notre Équipe
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('about.vision') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Mission et Vision
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('about.values') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Nos Valeurs
                            </a>
                        </li>
                    </ul>
                    
                    
                </li>
                <li class="py-6"><a href="{{route('services')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$services}}">Domaines d'expertises</a></li>
                <li class="py-6"><a href="{{route('services')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$services}}">Prestations & Services</a></li>
                
                <li class="py-6"><a href="{{route('products')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$products}}">Media</a></li>
                {{-- <li class="py-6"><a href="{{route('news')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$news}}">Actualités</a></li> --}}
                <li class="py-6"><a href="{{route('career')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$carriere}}">Carrière</a></li>
                <li class="py-6"><a href="{{route('contact')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$contact}}">Contact</a></li>
            </ul>
        </nav>
        
        
    </div>
</header>
