@extends('main.layouts.master')

@section('page-title')
    <title>
      CyberSecurity
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
          <h2 class="text-5xl font-extrabold text-white drop-shadow-lg">{{__('main/contents/cybersecurity.title')}}</h2>
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
                      <span class="ms-1.5  font-bold text-lg">{{__('main/contents/cybersecurity.title-1')}}</span>
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
                  {{__('main/contents/cybersecurity.title-2')}}
                  </a>
              </li>
          </ol>
      </div>
  </nav>
</div>





<div class="container  mx-auto my-16">
  {{-- <h1 class="text-3xl font-bold  mb-8">Nos services</h1> --}}
  
  <ul class="grid gap-8 xl:m-32 list-none grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    <li class="flex">
      <a  href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/surveill.jpg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
            <div>
              {{-- Surveillance et détection des menaces --}}
              <h3 class="mb-1 text-lg font-bold">{{__('main/contents/cybersecurity.card-1')}}</h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
            {{__('main/contents/cybersecurity.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
          
          
        </div>
      </a>
    </li>
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/incid.jpg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              {{-- Gestion des incidents de sécurité --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/cybersecurity.card-2')}}</h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
            {{__('main/contents/cybersecurity.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/audit.jpg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              {{-- Audit de sécurité et conformité --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/cybersecurity.card-3')}}</h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
            {{__('main/contents/cybersecurity.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/f_s.jpg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
            
            <div>
              {{-- Formation et sensibilisation des employés --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/cybersecurity.card-4')}}</h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
            {{__('main/contents/cybersecurity.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/gestion_r.jpg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
            
            <div>
              {{-- Gestion des risques --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/cybersecurity.card-5')}} </h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
            {{__('main/contents/cybersecurity.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>
    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/politique.jpg')}}" class="w-full h-full object-cover" alt="" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              {{-- Développement de politiques de sécurité --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/cybersecurity.card-6')}}</h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
            {{__('main/contents/cybersecurity.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>


    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/chiffrement.jpg')}}" class="w-full h-full object-cover" alt="DEVELOPPEMENT D'APPLICATION" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              {{-- Chiffrement des données --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/cybersecurity.card-7')}}</h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
            {{__('main/contents/cybersecurity.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>


    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/securite-phy.jpeg')}}" class="w-full h-full object-cover" alt="CYBERSECURITE" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              {{-- Gestion des identités et des accès --}}
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/cybersecurity.card-8')}}</h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
            {{__('main/contents/cybersecurity.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>


    <li class="flex">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/eval.jpg')}}" class="w-full h-full object-cover" alt="DIGITALISATION" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/cybersecurity.card-9')}}</h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
            {{__('main/contents/cybersecurity.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>

    
   
    <!-- Répétez les autres éléments de la même manière -->
  </ul>

  <ul class="flex justify-center">
    <li class="flex max-w-[480px]">
      <a href="#" class="relative block w-full h-[400px] overflow-hidden text-none rounded-[40px] group">
        <img src="{{asset('images/expertises/planf.jpg')}}" class="w-full h-full object-cover" alt="DIGITALISATION" />
        <div class="absolute bottom-20 left-0 right-0 z-10 p-0 translate-y-full bg-white rounded-[40px] transition-transform duration-200 ease-in-out group-hover:translate-y-20">
          <div class="relative flex items-center gap-8 p-8 bg-white rounded-t-[40px]">
            <svg class="absolute bottom-full right-0 z-10 w-20 h-20" xmlns="http://www.w3.org/2000/svg">
              <path fill="#fff" />
            </svg>                     
           
            <div>
              <h3 class="mb-1 text-lg font-bold ">{{__('main/contents/cybersecurity.card-10')}}</h3>
              {{-- <span class="text-sm text-[#D7BDCA]">1 hour ago</span> --}}
            </div>
          </div>
          {{-- <p class="p-8 m-0 text-[#D7BDCA] line-clamp-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, blanditiis?</p> --}}
          <button   class=" relative left-2/4 flex items-center px-8 py-2 my-2 font-bold text-indigo-600 bg-indigo-50 border-b-4 border-indigo-600 rounded-md shadow hover:bg-indigo-50  hover:shadow-md">
            
            {{__('main/contents/cybersecurity.btn')}}
            <span class="ml-2 text-green-500">→</span>
          
          </button>
        </div>
      </a>
    </li>
  </ul>
</div>


@endsection