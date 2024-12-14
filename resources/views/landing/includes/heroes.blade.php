<section style="height: 100vh; position: relsative; overflow: hidden; background-size: cover;" class="overflow-hidden">
  <div class="absolute inset-0  bg-opacity-50"></div>

  <!-- Background Video -->
  <video autoplay muted loop class="w-full h-full object-cover absolute top-0 left-0 max-lg:hidden" >
    <source src="{{asset('landing/assets/videos/edah2.mp4')}}" type="video/mp4">
  </video>
  
    <img
      alt="EDAHTECH - Societe de Service Telecom Cote d'Ivoire"
      src="{{asset('images/values/innovation.jpg')}}"
      class="w-full h-full object-cover "
    />
  

  <!-- Title -->
  <h1 class="hidden lg:block absolute top-1/3 left-1/2 lg:left-2/4  transform -translate-x-1/2 -translate-y-1/3 text-yellow-500 font-extrabold text-5xl md:text-7xl px-4">
    LET'S <br>
    THINK <br>
    TO CHANGE THE WORLD
  </h1>

  <h1 class=" absolute top-1/3  text-center -translate-y-1/3 text-yellow-500 font-extrabold text-3xl md:text-7xl px-4 lg:hidden">
    LET'S
    THINK 
    TO CHANGE THE WORLD
  </h1>

  <!-- Button Section -->
  <div class="absolute top-2/3 left-1/2 lg:left-3/4 transform -translate-x-1/2 px-4 space-y-16">
    <!-- Discover Button -->
    <button class="flex w-full max-w-xs h-fit bg-white rounded-full shadow-lg justify-between items-center border-none cursor-pointer font-bold uppercase whitespace-nowrap transition-transform transform hover:scale-105">
      <a class="flex-1 h-full flex items-center justify-center text-[1.1em] pr-4" href="{{route('accueil')}}">
        {{ __('landing/includes/heroes.button-discover') }}
      </a>
      <span class="flex w-[45px] h-[45px] bg-primary items-center justify-center rounded-full border-3 border-[#1d2129]">
        <svg
          width="16"
          height="19"
          viewBox="0 0 16 19"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <circle cx="1.61321" cy="1.61321" r="1.5" fill="black"></circle>
          <circle cx="5.73583" cy="1.61321" r="1.5" fill="black"></circle>
          <circle cx="5.73583" cy="5.5566" r="1.5" fill="black"></circle>
          <circle cx="9.85851" cy="5.5566" r="1.5" fill="black"></circle>
          <circle cx="9.85851" cy="9.5" r="1.5" fill="black"></circle>
          <circle cx="13.9811" cy="9.5" r="1.5" fill="black"></circle>
          <circle cx="5.73583" cy="13.4434" r="1.5" fill="black"></circle>
          <circle cx="9.85851" cy="13.4434" r="1.5" fill="black"></circle>
          <circle cx="1.61321" cy="17.3868" r="1.5" fill="black"></circle>
          <circle cx="5.73583" cy="17.3868" r="1.5" fill="black"></circle>
        </svg>
      </span>
    </button>

    <!-- New Animated Button -->
    <button class="animated-button text-black">
      <a href="{{route('expertise')}}">
      {{ __('landing/includes/heroes.button-expertises')}}
    </a>
    </button>
  </div>
</section>
