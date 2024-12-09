@extends('main.layouts.master')

@section('page-title')
    <title>
        Galerie - EDAHTECH
    </title>



@endsection
@section('app-header')

@php
    $data = [
        'acceuil' => '',
        'about' => '',
        'products' => '',
        'media' => 'active',
        'expertises' => '',
        'services' => '',
        'carriere' => '',
        'contact' => '',
   
    ];
    
@endphp

@include('main.includes.headers',$data)
@endsection
@section('main-corps')

<div class="relative bg-cover bg-center h-96" style="background-image: url('/main/images/height.jpg');">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-blue-400 opacity-50"></div>
    
    <!-- Container -->
    <div class="relative container mx-auto px-4 h-full flex items-center">
        <div class="text-center w-full">
            <h2 class="text-5xl font-extrabold text-white drop-shadow-lg">Galerie photos</h2>
        </div>
    </div>
  
    <!-- Breadcrumb Navigation -->
    <nav aria-label="Breadcrumb" class="absolute bottom-0 left-0  font-bold">
        <div class="container  pr-16">
            <ol class="flex overflow-hidden  border border-gray-200 text-primary bg-white px-4 ">
                <li class="flex items-center">
                    <a
                        href="{{route('accueil')}}"
                        class="flex h-10 items-center gap-1.5 bg-gray-100 px-4 transition hover:text-yellow-600"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="size-4"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                            />
                        </svg>
                        <span class="ms-1.5  font-bold text-lg">Accueil</span>
                    </a>
                </li>
  
                <li class="relative flex items-center">
                    <span
                        class="absolute inset-y-0 -start-px h-10 w-4 bg-gray-100 [clip-path:_polygon(0_0,_0%_100%,_100%_50%)] rtl:rotate-180"
                    >
                    </span>
                    <a
                        href="#"
                        class="flex h-10 items-center bg-white pe-4 ps-8 text-lg font-bold transition hover:text-yellow-600"
                    >
                    Galerie photos
                    </a>
                </li>
            </ol>
        </div>
    </nav>
  </div>





 


   


{{-- A propos --}}

{{-- @include('main.includes.about-us') --}}
{{-- <h1 class="mb-10">Nos valeurs</h1> --}}


{{-- @include('main.includes.values') --}}

{{-- Nos services  --}}

<section class="relative pt-12 py-16">
    <div class="container mx-auto px-4">
        <!-- Navigation des filtres -->
        <nav class="text-center my-6">
            <ul class="flex flex-wrap justify-center gap-3">
                <li>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700 actives" data-filter="*">
                        Tous
                    </button>
                </li>
                <li>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700" data-filter=".ministre-pme">
                        Visite Ministre du PME
                    </button>
                </li>
                <li>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700" data-filter=".sos-village">
                        Don au village SoS de Yamoussoukro
                    </button>
                </li>
                <li>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700" data-filter=".gspm">
                        Formation des équipes au secourisme au GSPM
                    </button>
                </li>
                <li>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700" data-filter=".chauffeur">
                        Formation des chauffeurs à la conduite défensive
                    </button>
                </li>
                <li>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700" data-filter=".anniversaire-edahtech">
                        Anniversaire 2 ans EDAHTECH
                    </button>
                </li>
                <li>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700" data-filter=".divers">
                        Divers
                    </button>
                </li>
                
                {{-- <li>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700" data-filter=".fdfp">
                        FDFP
                    </button>
                </li>
                <li>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700" data-filter=".solibra">
                        Solibra
                    </button>
                </li>
                <li>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700" data-filter=".sifca">
                        SIFCA
                    </button>
                </li>
                <li>
                    <button class="bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700" data-filter=".orange">
                        Orange
                    </button>
                </li> --}}
            </ul>
        </nav>
    
        <!-- Galerie -->
        <div class=" flex justify-center items-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="gallery">
            <!-- Exemple d'éléments -->
            <div class="relative group ministre-pme">
                <a href="{{asset('images/gallerie/visite-pme-ministre/ministrepme-1.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/visite-pme-ministre/ministrepme-1.jpg')}}" alt="MINISTRE PME A EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Visite du Ministre PME 
                            <small class="block text-sm">Visite du Ministre PME</small>
                        </h3>
                    </div>
                </a>
                
            </div>
            <div class="relative group ministre-pme">
                <a href="{{asset('images/gallerie/visite-pme-ministre/ministrepme-2.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/visite-pme-ministre/ministrepme-2.jpg')}}" alt="MINISTRE PME A EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Visite du Ministre PME 
                            <small class="block text-sm">Visite du Ministre PME</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group ministre-pme">
                <a href="{{asset('images/gallerie/visite-pme-ministre/ministrepme-3.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/visite-pme-ministre/ministrepme-3.jpg')}}" alt="MINISTRE PME A EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Visite du Ministre PME 
                            <small class="block text-sm">Visite du Ministre PME</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group ministre-pme">
                <a href="{{asset('images/gallerie/visite-pme-ministre/ministrepme-4.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/visite-pme-ministre/ministrepme-4.jpg')}}" alt="MINISTRE PME A EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Visite du Ministre PME 
                            <small class="block text-sm">Visite du Ministre PME</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            

            <div class="relative group ministre-pme">
                <a href="{{asset('images/gallerie/visite-pme-ministre/ministrepme-6.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/visite-pme-ministre/ministrepme-6.jpg')}}" alt="MINISTRE PME A EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Visite du Ministre PME 
                            <small class="block text-sm">Visite du Ministre PME</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group ministre-pme">
                <a href="{{asset('images/gallerie/visite-pme-ministre/ministrepme-7.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/visite-pme-ministre/ministrepme-7.jpg')}}" alt="MINISTRE PME A EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Visite du Ministre PME 
                            <small class="block text-sm">Visite du Ministre PME</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group ministre-pme">
                <a href="{{asset('images/gallerie/visite-pme-ministre/ministrepme-8.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/visite-pme-ministre/ministrepme-8.jpg')}}" alt="MINISTRE PME A EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Visite du Ministre PME 
                            <small class="block text-sm">Visite du Ministre PME</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group ministre-pme">
                <a href="{{asset('images/gallerie/visite-pme-ministre/ministrepme-9.jpg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/visite-pme-ministre/ministrepme-9.jpg')}}" alt="MINISTRE PME A EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Visite du Ministre PME 
                            <small class="block text-sm">Visite du Ministre PME</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group sos-village">
                <a href="{{asset('images/gallerie/sos_village/sos-villavge2.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/sos_village/sos-villavge2.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Don au village SoS de Yamoussoukro
                            <small class="block text-sm">Don au village SoS de Yamoussoukro</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group sos-village">
                <a href="{{asset('images/gallerie/sos_village/sos-village3.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/sos_village/sos-village3.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Don au village SoS de Yamoussoukro
                            <small class="block text-sm">Don au village SoS de Yamoussoukro</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group sos-village">
                <a href="{{asset('images/gallerie/sos_village/sos-village4.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/sos_village/sos-village4.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Don au village SoS de Yamoussoukro
                            <small class="block text-sm">Don au village SoS de Yamoussoukro</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group sos-village">
                <a href="{{asset('images/gallerie/sos_village/sos-village5.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/sos_village/sos-village5.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Don au village SoS de Yamoussoukro
                            <small class="block text-sm">Don au village SoS de Yamoussoukro</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group gspm">
                <a href="{{asset('images/gallerie/Gspm/gspm1.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/Gspm/gspm1.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Formation des équipes au secourisme au GSPM
                            <small class="block text-sm">Formation des équipes au secourisme au GSPM</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group gspm">
                <a href="{{asset('images/gallerie/Gspm/gspm2.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/Gspm/gspm2.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Formation des équipes au secourisme au GSPM
                            <small class="block text-sm">Formation des équipes au secourisme au GSPM</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group gspm">
                <a href="{{asset('images/gallerie/Gspm/gspm3.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/Gspm/gspm3.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Formation des équipes au secourisme au GSPM
                            <small class="block text-sm">Formation des équipes au secourisme au GSPM</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group gspm">
                <a href="{{asset('images/gallerie/Gspm/gspm4.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/Gspm/gspm4.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Formation des équipes au secourisme au GSPM
                            <small class="block text-sm">Formation des équipes au secourisme au GSPM</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group gspm">
                <a href="{{asset('images/gallerie/Gspm/gspm5.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/Gspm/gspm5.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Formation des équipes au secourisme au GSPM
                            <small class="block text-sm">Formation des équipes au secourisme au GSPM</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group chauffeur">
                <a href="{{asset('images/gallerie/chauffeur/chauffeur1.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/chauffeur/chauffeur1.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Formation des chauffeurs à la conduite défensive
                            <small class="block text-sm">Formation des chauffeurs à la conduite défensive</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group chauffeur">
                <a href="{{asset('images/gallerie/chauffeur/chauffeur2.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/chauffeur/chauffeur2.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Formation des chauffeurs à la conduite défensive
                            <small class="block text-sm">Formation des chauffeurs à la conduite défensive</small>
                        </h3>
                    </div>
                </a>
                
            </div>

            <div class="relative group chauffeur">
                <a href="{{asset('images/gallerie/chauffeur/chauffeur3.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/chauffeur/chauffeur3.jpeg')}}" alt="SOS Village YAMOUSSOKRO" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Formation des chauffeurs à la conduite défensive
                            <small class="block text-sm">Formation des chauffeurs à la conduite défensive</small>
                        </h3>
                    </div>
                </a>
                
            </div>
    
            <div class="relative group divers">
                <a href="{{asset('images/gallerie/divers/divers_1.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/divers/divers_1.jpeg')}}" alt="EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Divers
                            <small class="block text-sm"></small>
                        </h3>
                    </div>
                </a>
            </div>

            <div class="relative group divers">
                <a href="{{asset('images/gallerie/divers/divers_2.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/divers/divers_2.jpeg')}}" alt="EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Divers
                            <small class="block text-sm"></small>
                        </h3>
                    </div>
                </a>
            </div>

            <div class="relative group divers">
                <a href="{{asset('images/gallerie/divers/divers_3.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/divers/divers_3.jpeg')}}" alt="EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Divers
                            <small class="block text-sm"></small>
                        </h3>
                    </div>
                </a>
            </div>

            <div class="relative group divers">
                <a href="{{asset('images/gallerie/divers/divers_4.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/divers/divers_4.jpeg')}}" alt="EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Divers
                            <small class="block text-sm"></small>
                        </h3>
                    </div>
                </a>
            </div>
    
            <div class="relative group anniversaire-edahtech">
                <a href="{{asset('images/gallerie/anniversaire_2/anniversaire_2.1.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/anniversaire_2/anniversaire_2.1.jpeg')}}" alt="Anniversaire 2 ans EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Anniversaire 2 ans EDAHTECH
                            <small class="block text-sm">EDAHTECH</small>
                        </h3>
                    </div>
                </a>
            </div>

            <div class="relative group anniversaire-edahtech">
                <a href="{{asset('images/gallerie/anniversaire_2/anniversaire_2.2.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/anniversaire_2/anniversaire_2.2.jpeg')}}" alt="Anniversaire 2 ans EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Anniversaire 2 ans EDAHTECH
                            <small class="block text-sm">EDAHTECH</small>
                        </h3>
                    </div>
                </a>
            </div>

            <div class="relative group anniversaire-edahtech">
                <a href="{{asset('images/gallerie/anniversaire_2/anniversaire_2.3.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/anniversaire_2/anniversaire_2.3.jpeg')}}" alt="Anniversaire 2 ans EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Anniversaire 2 ans EDAHTECH
                            <small class="block text-sm">EDAHTECH</small>
                        </h3>
                    </div>
                </a>
            </div>

            <div class="relative group anniversaire-edahtech">
                <a href="{{asset('images/gallerie/anniversaire_2/anniversaire_2.4.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/anniversaire_2/anniversaire_2.4.jpeg')}}" alt="Anniversaire 2 ans EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Anniversaire 2 ans EDAHTECH
                            <small class="block text-sm">EDAHTECH</small>
                        </h3>
                    </div>
                </a>
            </div>

           

            <div class="relative group anniversaire-edahtech">
                <a href="{{asset('images/gallerie/anniversaire_2/anniversaire_2.6.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/anniversaire_2/anniversaire_2.6.jpeg')}}" alt="Anniversaire 2 ans EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Anniversaire 2 ans EDAHTECH
                            <small class="block text-sm">EDAHTECH</small>
                        </h3>
                    </div>
                </a>
            </div>

            <div class="relative group anniversaire-edahtech">
                <a href="{{asset('images/gallerie/anniversaire_2/anniversaire_2.7.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/anniversaire_2/anniversaire_2.7.jpeg')}}" alt="Anniversaire 2 ans EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Anniversaire 2 ans EDAHTECH
                            <small class="block text-sm">EDAHTECH</small>
                        </h3>
                    </div>
                </a>
            </div>

            <div class="relative group anniversaire-edahtech">
                <a href="{{asset('images/gallerie/anniversaire_2/anniversaire_2.8.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/anniversaire_2/anniversaire_2.8.jpeg')}}" alt="Anniversaire 2 ans EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Anniversaire 2 ans EDAHTECH
                            <small class="block text-sm">EDAHTECH</small>
                        </h3>
                    </div>
                </a>
            </div>

            <div class="relative group anniversaire-edahtech">
                <a href="{{asset('images/gallerie/anniversaire_2/anniversaire_2.9.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/anniversaire_2/anniversaire_2.9.jpeg')}}" alt="Anniversaire 2 ans EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Anniversaire 2 ans EDAHTECH
                            <small class="block text-sm">EDAHTECH</small>
                        </h3>
                    </div>
                </a>
            </div>

            <div class="relative group anniversaire-edahtech">
                <a href="{{asset('images/gallerie/anniversaire_2/anniversaire_2.10.jpeg')}}" data-rel="prettyPhoto[gal]">
                    <img src="{{asset('images/gallerie/anniversaire_2/anniversaire_2.10.jpeg')}}" alt="Anniversaire 2 ans EDAHTECH" class="w-full h-auto rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-gray-900 bg-opacity-60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                        <h3 class="text-white text-lg">
                            Anniversaire 2 ans EDAHTECH
                            <small class="block text-sm">EDAHTECH</small>
                        </h3>
                    </div>
                </a>
            </div>
        </div>
       </div>
    </div>
    
    <!-- Script JS -->
    <script>
        // Gestion des filtres
        document.querySelectorAll('button[data-filter]').forEach(button => {
            button.addEventListener('click', () => {
                const filter = button.getAttribute('data-filter');
                const galleryItems = document.querySelectorAll('#gallery > div');
    
                // activesr le bouton sélectionné
                document.querySelectorAll('button[data-filter]').forEach(btn => btn.classList.remove('actives'));
                button.classList.add('actives');
    
                // Filtrer les éléments
                galleryItems.forEach(item => {
                    if (filter === '*' || item.classList.contains(filter.substring(1))) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
    

</section>    









@endsection