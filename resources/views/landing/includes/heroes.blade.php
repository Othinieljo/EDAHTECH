<section style="height: 100vh; position: relaative; overflow: hidden; background-size: cover;">
    <video autoplay muted loop class="hero-background-video w-full" style=" height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;" >
        <source src="{{asset('landing/assets/videos/videos2.mp4')}}" type="video/mp4">
    </video>
   

    <button class="landing-btn flex w-hit max-w-[400px] h-fit bg-white rounded-full shadow-[0px_5px_10px_#bebebe] justify-between items-center border-none cursor-pointer z-index-2 absolute font-bold uppercase btn-call-action whitespace-nowrap" >
        <a class="flex-1 h-full flex items-center justify-center text-[1.1em] me-4 whitespace-nowrap" href="{{route('accueil')}}">
          {{ __('landing/includes/heroes.button-discover') }} </a>
       
        <span class="flex w-[45px] h-[45px] bg-primary items-center justify-center rounded-full border-3 border-[#1d2129]" >
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
      
      
    
    
   
</section>
