@extends('main.layouts.master')

@section('page-title')
    <title>
        {{__("main/contents/index.page-title")}}
    </title>



@endsection
@section('app-header')

@php
    $data = [
        'acceuil' => '',
        'about' => 'active',
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

<div class="relative bg-cover bg-center h-96" style="background-image: url('/main/images/height.jpg');">
  <!-- Overlay -->
  <div class="absolute inset-0 bg-blue-400 opacity-50"></div>
  
  <!-- Container -->
  <div class="relative container mx-auto px-4 h-full flex items-center">
      <div class="text-center w-full">
          <h2 class="text-5xl font-extrabold text-white drop-shadow-lg">Nous Connaître</h2>
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
                      Nous connaitre
                  </a>
              </li>
          </ol>
      </div>
  </nav>
</div>



 


   


{{-- A propos --}}

@include('main.includes.about-us')


{{-- Nos services  --}}








@endsection