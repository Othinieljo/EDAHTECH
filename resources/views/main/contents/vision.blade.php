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
                <span class="text-gray-300">Accueil</span> <span class="mx-2 text-white">&#x2022;</span> <span class="text-gray-300">Vision et Mission</span>
            </p>
        </div>
    </div>
</div>


 


   


{{-- A propos --}}
{{-- <h1>Vision et Mission</h1> --}}

{{-- @include('main.includes.about-us') --}}

{{-- Nos services  --}}

<div class=" flex container mx-auto px-4 py-8">
    <div class="flex flex-col items-center text-center space-y-4">
        <h2 class="text-xl font-semibold text-blue-600">VISION</h2>
        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-blue-600">
            <img src="{{ asset('images/vision.jpg') }}" alt="VISION" class="w-full h-full object-cover" />
        </div>
        <p class="text-gray-700">Apporter des Solutions Innovantes pour changer le quotidien de nos populations.</p>
    </div>
    <div class="flex flex-col items-center text-center space-y-4">
        <h2 class="text-xl font-semibold text-blue-600">MISSION</h2>
        <div class="w-40 h-40 rounded-full overflow-hidden border-4 border-blue-600">
            <img src="{{ asset('images/mission.jpg') }}" alt="VISION" class="w-full h-full object-cover" />
        </div>
        <p class="text-gray-700">Construire une relation gagnant-gagnant de long terme avec nos partenaires pour répondre au mieux aux besoins du client final.</p>
    </div>
</div>








@endsection