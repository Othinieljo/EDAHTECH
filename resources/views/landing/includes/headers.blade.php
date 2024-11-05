<header class="w-full py-4 ">
    <div class="container mx-auto flex justify-between items-center px-6 py-4" style="position: relative; z-index: 1;">
        <div class="text-white font-bold text-xl">
            <img src="{{asset('logo-white.svg')}}" alt="EDAHTECH">
        </div>
        <nav>
            <ul class="flex items-center space-x-4 text-white">
                <li><a  class="link-landing link--metis font-bold" href="{{route('accueil')}}">{{__('landing/includes/header.visit')}}</a></li>
                <li><a  class="link-landing link--metis font-bold" href="{{route('accueil')}}">{{__('landing/includes/header.contact')}}</a></li>
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
                        <li><a href="{{ url('/fr') }}" class="block px-4 py-2 hover:bg-gray-100">Français</a></li>
                        <li><a href="{{ url('/en') }}" class="block px-4 py-2 hover:bg-gray-100">English</a></li>
                        
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
