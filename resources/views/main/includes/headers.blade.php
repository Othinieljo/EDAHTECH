<header class="w-full   border-b">
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
             <a href="/"><img src="{{ asset('logo.svg') }}" alt="EDAHTECH" class="h-10"></a>
        </div>


        <div class="sm:hidden flex items-center">
            <button id="menu-toggle" class="text-gray-800 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
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


        <div id="mobile-menu" class="fixed top-0 left-0 w-full h-screen bg-white z-50 transform -translate-x-full transition-transform duration-300">
            <div class="flex items-center justify-between px-6 py-4 border-b">
                <span class="text-lg font-bold">Menu</span>
                <button id="close-menu" class="text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <ul class="p-6 space-y-4">
                <li><a href="{{ route('accueil') }}" class="block text-gray-800 hover:text-primary">Accueil</a></li>
                <li>
                    <button class="flex items-center justify-between w-full text-left text-gray-800 hover:text-primary" data-submenu="submenu-about">
                        <span>Nous connaitre</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </li>
                <li><a href="{{ route('expertise') }}" class="block text-gray-800 hover:text-primary">Domaines d'expertises</a></li>
                <li><a href="{{ route('services') }}" class="block text-gray-800 hover:text-primary">Prestations & Services</a></li>
                <li>
                    <button class="flex items-center justify-between w-full text-left text-gray-800 hover:text-primary" data-submenu="submenu-media">
                        <span>Media</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </li>
                <li><a href="{{ route('career') }}" class="block text-gray-800 hover:text-primary">Carrière
                </a></li>
                <li><a href="{{ route('contact') }}" class="block text-gray-800 hover:text-primary">Contact</a></li>
            </ul>
        </div>
        
        <!-- Sous-menu -->
        <div id="submenu-about" class="fixed top-0 left-0 w-full h-screen bg-white z-50 transform translate-x-full transition-transform duration-300 submenu">
            <div class="flex items-center justify-between px-6 py-4 border-b">
                <button class="back-button text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <span class="text-lg font-bold">Nous connaitre</span>
            </div>
            <ul class="p-6 space-y-4">
                <li><a href="{{ route('about.history') }}" class="block text-gray-800 hover:text-primary">Notre Histoire</a></li>
                <li><a href="{{ route('about.team') }}" class="block text-gray-800 hover:text-primary">Notre Équipe</a></li>
                <li><a href="{{ route('about.values') }}" class="block text-gray-800 hover:text-primary">Nos Valeurs</a></li>
            </ul>
        </div>

        <div id="submenu-media" class="fixed top-0 left-0 w-full h-screen bg-white z-50 transform translate-x-full transition-transform duration-300 submenu">
            <div class="flex items-center justify-between px-6 py-4 border-b">
                <button class="back-button text-gray-800 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <span class="text-lg font-bold">Media</span>
            </div>
            <ul class="p-6 space-y-4">
                <li><a href="{{ route('media.news') }}" class="block text-gray-800 hover:text-primary">Actualités</a></li>
                <li><a href="{{ route('media.publi-reportages') }}" class="block text-gray-800 hover:text-primary">Publi-reportages</a></li>
                <li><a href="{{ route('media.galerie') }}" class="block text-gray-800 hover:text-primary">Galerie photo</a></li>
            </ul>
        </div>
        

        <nav id="menu" class="hidden sm:flex">
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
                <li class="py-6 relative group">
                    <a href="{{route('expertise')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$expertises}}">Domaines d'expertises</a>
                    {{-- <ul class="absolute left-0 mt-6 bg-white text-gray-800 rounded-lg shadow-md hidden group-hover:block w-40 z-10">
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('expertises.network-design') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Network Design & planning
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('expertises.radio-optimisation') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Radio Optimisation
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('expertises.radio-transmission') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Site Installation (Radio & Transmission)
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('expertises.civil-work') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Civil Work et Data Center
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('expertises.energie') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Energie (Électricité)
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('expertises.fibre-optique') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Fibre Optique
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('expertises.dev-application') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Développement d’application
                            </a>
                        </li>
                        
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('expertises.cybersecurity') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Cyber Security
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('expertises.digitalisation') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Digitalisation
                            </a>
                        </li>
                    </ul> --}}
                </li>
                <li class="py-6"><a href="{{route('services')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$services}}">Prestations & Services</a>

                
                </li>
                
                <li class="py-6 relative group">
                    
                    <a href="" class="text-gray-800 hover:text-primary link link--metis font-medium {{$media}}">Media</a>
                    <ul class="absolute left-0 mt-6 bg-white text-gray-800 rounded-lg shadow-md hidden group-hover:block w-40 z-10">
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('media.news') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Actualités 
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('media.publi-reportages') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Publi-reportages
                            </a>
                        </li>
                        <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('media.galerie') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Galerie photos
                            </a>
                        </li>
                        {{-- <li class="animated-item border-b border-blue-500">
                            <a href="{{ route('about.values') }}" class="block px-4 py-2 relative z-10 text-gray-800 transition-colors duration-300 ease-in-out hover:text-white">
                                Nos Valeurs
                            </a>
                        </li> --}}
                    </ul>
                
                </li>
                {{-- <li class="py-6"><a href="{{route('news')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$news}}">Actualités</a></li> --}}
                <li class="py-6"><a href="{{route('career')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$carriere}}">Carrière</a></li>
                <li class="py-6"><a href="{{route('contact')}}" class="text-gray-800 hover:text-primary link link--metis font-medium {{$contact}}">Contact</a></li>
            </ul>
        </nav>
        
        
    </div>
</header>

{{-- <script>
    // Toggle mobile menu
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    });
</script> --}}

<script>

document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');
    const submenuButtons = document.querySelectorAll('[data-submenu]');
    const submenus = document.querySelectorAll('.submenu');
    const backButtons = document.querySelectorAll('.back-button');
    console.log(submenus)

    // Ouvrir le menu mobile
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.remove('-translate-x-full');
    });

    // Fermer le menu mobile
    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('-translate-x-full');
    });

    // Ouvrir un sous-menu
    submenuButtons.forEach(button => {
        button.addEventListener('click', () => {
            const submenuId = button.dataset.submenu;
            const submenu = document.getElementById(submenuId);
            mobileMenu.classList.add('-translate-x-full');
            submenu.classList.remove('translate-x-full');
        });
    });

    // Revenir au menu principal
    
    backButtons.forEach(button => {
    button.addEventListener('click', () => {
       
        submenus.forEach(submenu => {
            console.log('Sous-menu avant :', submenu.classList);
            submenu.classList.add('translate-x-full');
            console.log('Sous-menu après :', submenu.classList);
        });

        
        mobileMenu.classList.remove('-translate-x-full');
        console.log('Menu principal après :', mobileMenu.classList);
    });
});


});

</script>