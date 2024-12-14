@extends('main.layouts.master')

@section('page-title')
    <title>
      Network Design & planning (Radio & Transmission)
    </title>



@endsection
@section('app-header')

@php
    $data = [
        'acceuil' => '',
        'about' => '',
        'products' => '',
        'media' => '',
        'expertises' => 'active',
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
          <h2 class="text-5xl font-extrabold text-white drop-shadow-lg"> {{__('main/contents/network-design.title')}} </h2>
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
                      <span class="ms-1.5  font-bold text-lg">{{__('main/contents/network-design.title-1')}} </span>
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
                  {{__('main/contents/network-design.title-2')}} 
                  </a>
              </li>
          </ol>
      </div>
  </nav>
</div>





<div class="container  mx-auto ">
  {{-- <h1 class="text-3xl font-bold  mb-8">Nos services</h1> --}}
  
  <ul class="grid gap-8 xl:m-32 list-none grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/study.jpeg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
            <div>
              {{-- Étude de couverture et de propagation radio --}}
              <h3 class="mb-1 text-lg font-bold">{{__('main/contents/network-design.card-1')}} </h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
             {{__('main/contents/network-design.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
          
          
        </div>
      </a>
    </li>
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('main/images/services/TE_INSTALLATION.jpg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              {{-- Conception de l'architecture réseau --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/network-design.card-2')}} </h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
             {{__('main/contents/network-design.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('main/images/services/TE_INSTALLATION.jpg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              {{-- Sélection et dimensionnement des équipements --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/network-design.card-3')}} </h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
             {{__('main/contents/network-design.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/size.jpeg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
            
            <div>
              {{-- Optimisation des performances du réseau --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/network-design.card-4')}} </h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
             {{__('main/contents/network-design.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/frequence.jpg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
            
            <div>
              {{-- Planification des fréquences --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/network-design.card-5')}} </h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
             {{__('main/contents/network-design.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/test.jpg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              {{-- Test et validation du réseau --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/network-design.card-6')}} </h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
             {{__('main/contents/network-design.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>


    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/maintenance.jpeg')}}" class="w-full h-full object-cover" alt="DEVELOPPEMENT D'APPLICATION" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              {{-- Maintenance et optimisation continue --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/network-design.card-7')}} </h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
             {{__('main/contents/network-design.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>


    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/security.jpg')}}" class="w-full h-full object-cover" alt="CYBERSECURITE" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              {{-- Sécurité du réseau --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/network-design.card-8')}} </h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
            {{__('main/contents/network-design.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>


    
   
    <!-- Répétez les autres éléments de la même manière -->
  </ul>

  {{-- <ul class="flex justify-center">
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('main/images/services/IOT.jpg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
          
            <div>
              <h3 class="mb-1 text-lg font-bold ">Développement d’application</h3>
             
            </div>
          </div>
          <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p>
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
             {{__('main/contents/network-design.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
          
           
        </div>
      </a>
    </li>
  </ul> --}}
</div>


@endsection