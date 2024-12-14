{{-- <div class="min-h-screen flex flex-col p-8 sm:p-16 md:p-24 justify-center bg-white">
    <div class="mx-auto max-w-6xl">
      <h2 class="sr-only">Featured case study</h2>
      <section class="font-sans text-black">
        <div class="lg:flex lg:items-center relative bg-white fancy-corners">
          <div class="flex-shrink-0 lg:flex-basis-1/2">
            <div class="h-full">
              <article class="h-full">
                <div class="h-full">
                  <img class="h-full object-cover" src="https://inviqa.com/sites/default/files/styles/pullout/public/2020-08/XD-1.jpeg?h=f75d236a&itok=PBoXPDmW" width="733" height="412" alt="Image description" />
                </div>
              </article>
            </div>
          </div>
          <div class="p-6 bg-gray-200">
            <div class="leading-relaxed">
              <h2 class="leading-tight text-4xl font-bold">Nous connaitre </h2>
              <p class="mt-4">EDAHTECH est une société de droit ivoirien inscrite au registre du commerce sous le numéro CI-ABJ-2019-12497 et spécialisée dans le domaine des Services Télécom et Informatique. Elle a été fondée le 20 Avril 2017 sous l’initiative de son actuel Gérant M. KOHOU Zon Séraphin, Ingénieur Electronique, diplômé de l’INP-HB.</p>
              <p class="mt-4"></p>
              <p><a class="mt-4 px-5 py-2 inline-block text-lg font-bold border-2 transition-colors duration-200 ease-in-out bg-primary border-primary text-white hover:bg-white hover:text-primary " href="https://inviqa.com/cxcon-experience-transformation">Poursuivre</a></p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div> --}}

  <section class="bg-gradient-to-br from-blue-100 to-gray-300 relative my-16">
    {{-- <div
      class="absolute inset-0 bg-cover bg-center opacity-20"
      style="background-image: url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=1080');"
    ></div> --}}
    <div class="relative mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-2">
        <!-- Image Section -->
        <div class="relative z-10 lg:py-16">
          <div class="relative h-64 sm:h-80 lg:h-full">
            <img
              alt=""
              src="{{asset('images/accueil/home.jpeg')}}"
              class="absolute inset-0 h-full w-full object-cover rounded-lg shadow-lg"
            />
          </div>
        </div>
  
        <!-- Content Section -->
        <div class="relative flex items-center bg-white bg-opacity-90 rounded-lg shadow-lg">
          <span
            class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-white opacity-90"
          ></span>
  
          <div class="p-8 sm:p-16 lg:p-24">
            <h2 class="text-3xl font-extrabold text-gray-800 sm:text-4xl">
              {{__('main/includes/about-us.title')}}
            </h2>
  
            <p class="mt-4 text-gray-600">
             {{__('main/includes/about-us.text')}}
            </p>
  
            <a
              href="{{route('about.history')}}"
              class="mt-8 inline-block rounded-lg border border-primary bg-primary px-12 py-3 text-sm font-medium text-white shadow hover:bg-transparent hover:text-primary focus:outline-none focus:ring focus:ring-primary/50 active:bg-primary/90"
            >
             {{__('main/includes/about-us.button')}}
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
  
  