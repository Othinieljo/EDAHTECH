@extends('main.layouts.master')

@section('page-title')
    <title>
        {{__("main/contents/index.page-title")}}
    </title>



@endsection
@section('app-header')

@php
    $data = [
        'acceuil' => 'active',
        'about' => '',
        'products' => '',
        'media' => '',
        'expertises' => '',
        'services' => '',
        'carriere' => '',
        'contact' => '',
   
    ];
    
@endphp

@include('main.includes.headers',$data)
@endsection
@section('main-corps')


 <!-- COMPARISON SLIDER CODE START -->
 {{-- <div class="comparison-slider-wrapper flex">
    <!-- Comparaison Slider - Slide 1 -->
    <div class="comparison-slider w-1/4">
      <img src="https://raw.githubusercontent.com/Mario-Duarte/CodePen/main/assets/marioPhoto-2.jpg" alt="marioPhoto 2">
    </div>

    <!-- Comparaison Slider - Slide 2 -->
    <div class="comparison-slider w-1/4">
      <img src="https://raw.githubusercontent.com/Mario-Duarte/CodePen/main/assets/marioPhoto-1.jpg" alt="marioPhoto 1">
    </div>

    <!-- Comparaison Slider - Slide 3 -->
    <div class="comparison-slider w-1/4">
      <img src="https://raw.githubusercontent.com/Mario-Duarte/CodePen/main/assets/marioPhoto-2.jpg" alt="marioPhoto 2">
    </div>

    <!-- Comparaison Slider - Slide 4 -->
    <div class="comparison-slider w-1/4">
      <img src="https://raw.githubusercontent.com/Mario-Duarte/CodePen/main/assets/marioPhoto-1.jpg" alt="marioPhoto 1">
    </div>
</div> --}}
  <!-- COMPARISON SLIDER CODE END -->
  <div class="glide mx-auto w-full glide-container relative font-poppins">
    {{-- <h2 class="absolute top-1/4 left-1/4 text-4xl font-bold text-white z-10">
      Let's think to change the world
  </h2> --}}
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
        <li class="glide__slide">
          <div class="relative overflow-hidden shadow-lg flex flex-col justify-between  h-full text-white bg-blue-400 bg-opacity-50  rounded-lg transition-transform hover:scale-105">
            <div class="p-8">
                <h2 class="text-3xl font-bold mb-4 text-yellow-500" > {{__('main/contents/index.caroussel-1')}} </h2>
                
            </div>
            <div class="p-8">
              {{-- <p class="text-sm mb-4">Nous révolutionnons la manière dont les entreprises connectent et innovent. Profitez d'une technologie avancée et d'une assistance dédiée.</p> --}}
                <a href="#" class="mt-6 px-6 py-3 text-xl font-bold flex items-center transition duration-300 ease-in-out text-yellow-500 shadow-2xl  dark:bg-gray-900">
                  {{__('main/contents/index.btn')}} 
                    <x-css-arrow-right class="ml-2 w-4 h-4" />
                </a>
            </div>
        </div>
        </li>
        <li class="glide__slide">
          <div class="relative overflow-hidden shadow-lg flex flex-col justify-between  h-full text-white bg-blue-400 bg-opacity-50 rounded-lg transition-transform hover:scale-105">
            <div class="p-8">
                <h2 class="text-3xl font-bold mb-4 text-yellow-500">{{__('main/contents/index.caroussel-2')}}</h2>
                
            </div>
            <div class="p-8">
              {{-- <p class="text-sm mb-4">Nos experts sont à votre disposition pour garantir une assistance technique proactive et efficace, 24h/24.</p> --}}
                <a href="#" class="mt-6 px-6 py-3 text-xl font-bold flex items-center transition duration-300 ease-in-out text-yellow-500 shadow-2xl  dark:bg-gray-900">
                  {{__('main/contents/index.btn')}}
                    <x-css-arrow-right class="ml-2 w-4 h-4" />
                </a>
            </div>
        </div>
        </li>
        <li class="glide__slide">
          <div class="relative overflow-hidden shadow-lg flex flex-col justify-between  h-full text-white bg-blue-400 bg-opacity-50 rounded-lg transition-transform hover:scale-105">
            <div class="p-8">
                <h2 class="text-3xl font-bold mb-4 text-yellow-500">{{__('main/contents/index.caroussel-3')}}</h2>
                
            </div>
            <div class="p-8">
              {{-- <p class="text-sm mb-4">Engagés pour un avenir meilleur, nous mettons l'innovation au service de la durabilité et du progrès collectif.</p> --}}
                <a href="#" class="mt-6 px-6 py-3 text-xl font-bold flex items-center transition duration-300 ease-in-out text-yellow-500 shadow-2xl  dark:bg-gray-900">
                    {{__('main/contents/index.btn')}}
                    <x-css-arrow-right class="ml-2 w-4 h-4" />
                </a>
            </div>
        </div>
        </li>
        <li class="glide__slide">
            <div class="relative overflow-hidden shadow-lg flex flex-col justify-between   h-full text-white bg-blue-400 bg-opacity-50 rounded-lg ">
                <div class="p-8">
                    <h2 class="text-3xl font-bold mb-4 text-yellow-500">{{__('main/contents/index.caroussel-1')}}</h2>
                    
                </div>
                <div class="p-8">
                  {{-- <p class="text-sm mb-4">Engagés pour un avenir meilleur, nous mettons l'innovation au service de la durabilité et du progrès collectif.</p> --}}
                    <a href="#" class="mt-6 px-6 py-3 text-xl  font-bold flex items-center transition duration-300 ease-in-out text-yellow-500 shadow-2xl  dark:bg-gray-900">
                        {{__('main/contents/index.btn')}}
                        <x-css-arrow-right class="ml-2 w-4 h-4" />
                    </a>
                </div>
            </div>
        </li>
    </ul>
</div>


    <div class="glide__arrows" data-glide-el="controls">
      <button class="glide__arrow glide__arrow--left absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-md" data-glide-dir="<">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
      </button>
      <button class="glide__arrow glide__arrow--right absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-md" data-glide-dir=">">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
      </button>
  </div>
  
</div>

@include('main.includes.about-us')

{{-- Nos services  --}}

@include('main.includes.services')

@include('main.includes.step-work')










@endsection