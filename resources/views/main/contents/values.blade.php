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
            <h2 class="text-5xl font-extrabold text-white drop-shadow-lg">Nous connaitre</h2>
            <p class="text-white mt-2 text-lg font-light tracking-wide">
                <span class="text-gray-300">Accueil</span> <span class="mx-2 text-white">&#x2022;</span> <span class="text-gray-300">Nos valeurs</span>
            </p>
        </div>
    </div>
</div>


 


   


{{-- A propos --}}

{{-- @include('main.includes.about-us') --}}
{{-- <h1 class="mb-10">Nos valeurs</h1> --}}


<div class="flex flex-wrap justify-center gap-4">
    <!-- Innovation Card -->
    {{-- <div class="max-w-sm bg-[#FF6B6B] text-white rounded-lg shadow-md p-4">
        <img class="w-12 h-12 mb-4" src="https://cdn-icons-png.flaticon.com/512/1077/1077042.png" alt="Innovation Icon" />
        <h3 class="text-xl font-bold mb-2">Innovation</h3>
        <ul class="list-disc list-inside text-sm space-y-1">
            <li>Avant-gardiste des technologies de l'Information et de la Communication</li>
            <li>Amélioration constante de nos solutions et pratiques</li>
            <li>Mise en œuvre de nouvelles idées pour la recherche de solutions aux problèmes complexes</li>
        </ul>
    </div>

    <!-- Fiabilité Card -->
    <div class="max-w-sm bg-[#4AA8D8] text-white rounded-lg shadow-md p-4">
        <img class="w-12 h-12 mb-4" src="https://cdn-icons-png.flaticon.com/512/2272/2272261.png" alt="Fiabilité Icon" />
        <h3 class="text-xl font-bold mb-2">Fiabilité</h3>
        <ul class="list-disc list-inside text-sm space-y-1">
            <li>Culture des solutions applicables</li>
            <li>Conformité aux cahiers des charges et satisfaction du client</li>
            <li>Inspirer confiance à nos partenaires et mériter leur confiance</li>
        </ul>
    </div>

    <!-- Responsabilité Card -->
    <div class="max-w-sm bg-[#FF4A4A] text-white rounded-lg shadow-md p-4">
        <img class="w-12 h-12 mb-4" src="https://cdn-icons-png.flaticon.com/512/1666/1666965.png" alt="Responsabilité Icon" />
        <h3 class="text-xl font-bold mb-2">Responsabilité</h3>
        <p class="italic text-sm mb-2">(Entreprise citoyenne)</p>
        <ul class="list-disc list-inside text-sm space-y-1">
            <li>Ethique : Cohérence et respect des dispositions réglementaires, hygiène et sécurité au travail</li>
            <li>RSE : Engagement envers la communauté et les parties prenantes</li>
            <li>Durabilité : Respect de l’environnement - Solutions Vertes</li>
        </ul>
    </div>

    <!-- Intégrité Card -->
    <div class="max-w-sm bg-[#6B8E23] text-white rounded-lg shadow-md p-4">
        <img class="w-12 h-12 mb-4" src="https://cdn-icons-png.flaticon.com/512/1828/1828490.png" alt="Intégrité Icon" />
        <h3 class="text-xl font-bold mb-2">Intégrité</h3>
        <ul class="list-disc list-inside text-sm space-y-1">
            <li>Honnêteté et transparence dans toutes nos actions</li>
            <li>Respect des engagements et valeurs</li>
            <li>Agir avec éthique pour nos clients et partenaires</li>
        </ul>
    </div>

    <!-- Dynamisme Card -->
    <div class="max-w-sm bg-[#FFA500] text-white rounded-lg shadow-md p-4">
        <img class="w-12 h-12 mb-4" src="https://cdn-icons-png.flaticon.com/512/3715/3715738.png" alt="Dynamisme Icon" />
        <h3 class="text-xl font-bold mb-2">Dynamisme</h3>
        <ul class="list-disc list-inside text-sm space-y-1">
            <li>Équipe jeune et passionnée par le métier</li>
            <li>Adaptabilité aux évolutions rapides du marché</li>
            <li>Motivation et engagement dans chaque projet</li>
        </ul>
    </div>

    <!-- Leadership Card -->
    <div class="max-w-sm bg-[#8A2BE2] text-white rounded-lg shadow-md p-4">
        <img class="w-12 h-12 mb-4" src="https://cdn-icons-png.flaticon.com/512/3566/3566342.png" alt="Leadership Icon" />
        <h3 class="text-xl font-bold mb-2">Leadership</h3>
        <ul class="list-disc list-inside text-sm space-y-1">
            <li>Encourager l’excellence et l’innovation</li>
            <li>Influencer positivement le secteur et nos clients</li>
            <li>Inspirer confiance et guider notre équipe vers le succès</li>
        </ul>
    </div> --}}
   

    <div class="max-w-sm rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:scale-105 hover:shadow-2xl bg-white my-16">
        <img class="w-full h-48 object-cover" src="{{asset('images/vision.jpg')}}" alt="Sunset in the mountains">
        
        <div class="p-6">
          <div class="font-bold text-2xl text-gray-800 mb-2 text-center">
            Innovation
          </div>
      
          <ul class="list-disc list-inside text-sm text-gray-700 space-y-2 mt-4">
            <li>Avant-gardiste des technologies de l'Information et de la Communication</li>
            <li>Amélioration constante de nos solutions et pratiques</li>
            <li>Mise en œuvre de nouvelles idées pour la recherche de solutions aux problèmes complexes</li>
          </ul>
        </div>
      </div>
      
</div>

{{-- Nos services  --}}








@endsection