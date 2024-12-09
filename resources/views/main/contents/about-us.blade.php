@extends('main.layouts.master')

@section('page-title')
    <title>
        À propos - EDAHTECH
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
            <p class="text-white mt-2 text-lg font-light tracking-wide">
                <span class="text-gray-300">Accueil</span> <span class="mx-2 text-white">&#x2022;</span> <span class="text-gray-300">À propos de nous</span>
            </p>
        </div>
    </div>
</div>


 


   


{{-- A propos --}}

@include('main.includes.about-us')

{{-- Nos services  --}}








@endsection