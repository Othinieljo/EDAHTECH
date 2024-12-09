{{-- <div class=" flex container mx-auto px-4 py-8">
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
</div> --}}

<div class="flex flex-col items-center space-y-6 px-4 py-8 bg-gray-100">
    <!-- Card 1 -->
    <div class="w-full max-w-4xl overflow-hidden rounded-lg shadow-lg sm:flex ">
      <div class="w-full sm:w-1/2">
        <img class="object-cover w-full h-64" src="{{ asset('images/vision.jpg') }}" alt="Flower and sky" />
      </div>
      <div class="flex-1 px-6 py-4">
        <h4 class="mb-3 text-2xl font-extrabold tracking-tight text-primary">VISION</h4>
        <p class="leading-normal text-gray-700">
          Créer un monde où l'innovation technologique favorise le bien-être des individus, tout en préservant notre planète.
        </p>
      </div>
    </div>
  
    <!-- Card 2 -->
    <div class="w-full max-w-4xl overflow-hidden rounded-lg shadow-lg sm:flex">
        <div class="flex-1 px-6 py-4">
            <h4 class="mb-3 text-2xl font-extrabold tracking-tight text-primary">MISSION</h4>
            <p class="leading-normal text-gray-700">
              Participer à la transformation du monde en développant des solutions technologiques novatrices qui facilitent le quotidien des citoyens, améliorent les processus d'entreprise et encouragent l'innovation, tout en respectant les normes strictes d'éthique, de durabilité et d'inclusivité.
            </p>
          </div>
      <div class="w-full sm:w-1/2">
        <img class="object-cover w-full h-64" src="{{ asset('images/mission.jpg') }}" alt="Flower and sky" />
      </div>
      
    </div>
  </div>
  