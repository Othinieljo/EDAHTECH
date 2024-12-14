<div class="flex items-center justify-center mb-20  " data-aos="fade-up" >
    <div class="flex flex-row rounded-3xl shadow-2xl overflow-hidden w-11/12 lg:w-3/4 relative transform transition-all duration-500 hover:scale-105 bg-[#e8e8e8]">
      <!-- Image Container -->
      <div class="w-1/3 relative">
        <div class="hero-description-bk second"></div>
      </div>
  
      <!-- Text and Button Container -->
      <div class="relative flex flex-col items-center py-12 w-full max-w-md mx-auto  bg-opacity-90  transform transition-all duration-500 hover:scale-105 hover:rotate-2 ">
        <h1 class="text-xl font-black text-primary mb-5 text-center leading-tight tracking-widest uppercase drop-shadow-lg">
          {{__('landing/includes/call_to_action.call-1-titre')}}
        </h1>
        <p class="text-lg text-center mb-8 font-light tracking-wide leading-relaxed text-gray-700">
          {{__('landing/includes/call_to_action.call-1-text')}}
        </p>
        <button 
          class="px-10 py-4 bg-primary text-white font-semibold rounded-full shadow-lg transform transition-transform duration-300 hover:scale-110 hover: focus:outline-none focus:ring-4 focus:ring-indigo-300">
          {{__('landing/includes/call_to_action.call-1-btn')}}
        </button>
        <div class="absolute inset-0 bg-gradient-radial from-white/10 to-transparent rounded-3xl pointer-events-none"></div>
      </div>
    </div>
  </div>
  
  <div class="flex items-center justify-center " data-aos="fade-up" >
    <div class="flex flex-row rounded-3xl shadow-2xl overflow-hidden w-11/12 lg:w-3/4 relative transform transition-all duration-500 hover:scale-105 bg-[#e8e8e8]">
      <!-- Image Container -->
      
      <!-- Text and Button Container -->
      <div class="relative flex flex-col items-center py-12 w-full max-w-md mx-auto  bg-opacity-90  transform transition-all duration-500  ">
        <h1 class="text-xl font-black text-primary mb-5 text-center leading-tight tracking-widest uppercase drop-shadow-lg">
          {{__('landing/includes/call_to_action.call-2-titre')}}
        </h1>
        <p class="text-lg text-center mb-8 font-light tracking-wide leading-relaxed text-gray-700">
          {{__("landing/includes/call_to_action.call-2-text")}}
        </p>
        {{-- <div class="flex w-full mb-6 md:mb-8">
          <input type="email" placeholder="Entrez votre email" class="flex-1 px-4 py-3 rounded-l-full border-t border-b border-l border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-300">
          <button 
            class="px-6 py-3 bg-primary text-white font-semibold rounded-r-full shadow-lg transform transition-transform duration-300 hover:scale-110 focus:outline-none focus:ring-4 focus:ring-indigo-300">
            {{__("landing/includes/call_to_action.call-2-btn")}}
          </button>
        </div> --}}
        <div class="flex w-full mb-6 md:mb-8">
          <form 
  method="POST" 
  action="/contacts" 
  class="flex w-full mb-6 md:mb-8"
  id="newsletterForm"
  onsubmit="handleEmailSubmission(event)"
>
  @csrf
  <input 
    id="emailInput"
    name="email"
    type="email" 
    placeholder="{{__('landing/includes/call_to_action.mail-text')}}" 
    class="flex-1 px-4 py-3 rounded-l-full border-t border-b border-l border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-300"
    required
  >
  <button 
    id="submitButton"
    type="submit"
    class="px-6 py-3 bg-primary text-white font-semibold rounded-r-full shadow-lg transform transition-transform duration-300 hover:scale-110 focus:outline-none focus:ring-4 focus:ring-indigo-300 flex items-center justify-center"
  >
    <span id="buttonText">{{ __("landing/includes/call_to_action.call-2-btn") }}</span>
    <svg 
      id="loader1" 
      class="hidden w-5 h-5 ml-2 text-white animate-spin" 
      xmlns="http://www.w3.org/2000/svg" 
      fill="none" 
      viewBox="0 0 24 24"
    >
      <circle 
        class="opacity-25" 
        cx="12" 
        cy="12" 
        r="10" 
        stroke="currentColor" 
        stroke-width="4"
      ></circle>
      <path 
        class="opacity-75" 
        fill="currentColor" 
        d="M4 12a8 8 0 018-8v8H4z"
      ></path>
    </svg>
  </button>
</form>

        </div>
        
        <div class="absolute inset-0 bg-gradient-radial from-white/10 to-transparent rounded-3xl pointer-events-none"></div>
      </div>
      <div class="w-1/3 relative">
        <div class="hero-description-bk-first second"></div>
      </div>
  
    </div>
  </div>
  