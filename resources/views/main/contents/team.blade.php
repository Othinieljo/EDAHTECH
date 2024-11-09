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
        'news' => '',
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
    <div class="absolute inset-0 bg-black opacity-50"></div>
    
    <!-- Container -->
    <div class="relative container mx-auto px-4 h-full flex items-center">
        <div class="text-center w-full">
            <h2 class="text-5xl font-extrabold text-white drop-shadow-lg">Nous Connaître</h2>
            <p class="text-white mt-2 text-lg font-light tracking-wide">
                <span class="text-gray-300">Accueil</span> <span class="mx-2 text-white">&#x2022;</span> <span class="text-gray-300">Equipe dirigeante</span>
            </p>
        </div>
    </div>
</div>


 


   


{{-- A propos --}}


{{-- @include('main.includes.about-us') --}}

{{-- Nos services  --}}

<div class="container mx-auto">
    <div class="text-center">
      <h3 class="text-2xl font-bold">Vos premiers interlocuteurs</h3>
      <p class="text-lg">---</p>
    </div>
  
    <hr class="my-6 border-gray-300">
  
    <div class="flex flex-wrap justify-center text-center space-y-6">
        <div class="w-full md:w-1/3 px-4">
            <div class="bg-white p-6 shadow-md rounded-lg">
                <div class="relative overflow-hidden rounded-full w-32 h-32 mx-auto mb-4 shadow-lg transition-all duration-300 hover:scale-105">
                    <a href="{{ asset('images/equipe/dg.jpeg') }}" class="absolute inset-0 flex items-center justify-center bg-gray-800 bg-opacity-0 hover:bg-opacity-70 transition-all duration-300">
                      <i class="text-white text-2xl fas fa-external-link-alt opacity-0 hover:opacity-100 transition-opacity duration-300"></i>
                    </a>
                    <img src="{{ asset('images/equipe/dg.jpeg') }}" alt="Profile Picture" class="rounded-full w-full h-full object-cover">
                  </div>
                  
              <h3 class="text-xl font-semibold">M.KOHOU Zon Seraphin</h3>
              <p class="text-gray-600 text-sm">President & CEO at EDAHTECH</p>
              <a href="https://www.linkedin.com/in/lionel-gino-ondo-etoughe-a447a331?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="inline-block mt-4 px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Découvrir le profil</a>
            </div>
          </div>
  
      


    </div>
  
    <hr class="my-6 border-gray-300">
  
    <!-- Repeat the above code for additional team members -->
  
  </div>
  








@endsection