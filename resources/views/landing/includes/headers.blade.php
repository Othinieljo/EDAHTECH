<div id="loader" class="bg-[#e8e8e8]">

    <div class="boxes">
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="box">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

</div>

<header class="w-full py-4  bg-blue-800 absolute ">
    <div class="container mx-auto flex justify-between items-center px-6 py-4 relative z-10 ">
        <!-- Logo -->
        <div class="text-white font-bold text-3xl">
            <img src="{{asset('logo-white.svg')}}" alt="EDAHTECH" class=" w-96 h-auto" >
        </div>
        
        
        <!-- Hamburger Menu for Mobile -->
        <button id="menu-toggle" class="lg:hidden flex items-center text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>

        <!-- Navigation -->
        <nav id="menu" class="hidden lg:flex lg:items-center lg:space-x-4 lg:static absolute top-full left-0 w-full bg-blue-800 lg:bg-transparent lg:w-auto">
            <ul class="flex flex-col lg:flex-row items-start lg:items-center lg:space-x-4 text-white">
                <li><a class="link-landing link--metis font-bold block px-4 py-2 lg:p-0" href="{{route('accueil')}}">{{__('landing/includes/header.visit')}}</a></li>
                <li><a class="link-landing link--metis font-bold block px-4 py-2 lg:p-0" href="{{route('accueil')}}">{{__('landing/includes/header.contact')}}</a></li>
                <li class="relative group focus:outline-none py-4">
                    <button class="flex items-center bg-blue-600 text-white px-4 py-2 rounded-full focus:outline-none">
                        <span class="mr-2">
                            <x-iconpark-world class="w-6 h-6" />
                        </span>
                        @if(app()->getLocale() == 'en')
                            English
                        @elseif(app()->getLocale() == 'fr')
                            Français
                        @endif
                    </button>
                    <ul class="absolute bg-white text-gray-800 rounded-lg shadow-md mt-1 hidden group-hover:block w-full">
                        <li><a href="{{ route('lang.switch', 'fr') }}"  class="block px-4 py-2 hover:bg-gray-100">Français</a></li>
                        <li><a href="{{ route('lang.switch', 'en') }}"  class="block px-4 py-2 hover:bg-gray-100">English</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    });
    
    // JavaScript pour cacher le loader après que la page est entièrement chargée
window.addEventListener('load', function() {
    // Cacher le loader
    const loader = document.getElementById('loader');
    if (loader) {
        loader.style.display = 'none'; // On cache le loader
    }
});

</script>
