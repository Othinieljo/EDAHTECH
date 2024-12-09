<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('page-title')
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('landing/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('main/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@^3.5.2/dist/css/glide.core.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

{{-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"> --}}


</head>
<body class="font-raleway  " style="overflow-x: hidden">
     {{-- @include('main.includes.headers') --}}
     @yield('app-header')
     @yield('main-corps')
     @include('main.includes.footer')

    

  
   
    <script type="module" src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide@^3.5.2/dist/glide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
    new Glide('.glide', {
        type: 'carousel',
        startAt: 0,
        perView: 4,
        gap: 2,
        autoplay: 4000,
        breakpoints: {
            1024: { perView: 3 },
            768: { perView: 2 },
            640: { perView: 1 }
        }
    }).mount();

    
});


    </script>
    {{-- <script>


        const carousel3Dswiper = new Swiper(".carousel-3D-swiper", {
            loop: true,
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 3,
            coverflowEffect: {
              rotate: 0,
              stretch: 0,
              depth: 350,
              modifier: 1,
              slideShadows: true
            },
                 navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            pagination: {
              el: ".swiper-pagination"
            }
          });
          console.log("11")
        </script> --}}
        {{-- <script>
            document.addEventListener("DOMContentLoaded", () => {
  const carousel3Dswiper = new Swiper(".carousel-3D-swiper", {
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 350,
      modifier: 1,
      slideShadows: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
});

        </script> --}}

<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
  
    const carousel3Dswiper = new Swiper(".carousel-3D-swiper", {
  loop: true, // Activer la boucle
  effect: "coverflow", // Effet visuel
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 3, // Nombre de slides visibles
  autoplay: {
    delay: 3000, // 3 secondes entre chaque transition
    disableOnInteraction: false, // Continuer même après interaction
  },
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 350,
    modifier: 1,
    slideShadows: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  on: {
    slideChangeTransitionEnd: function () {
      const swiper = this;
      if (swiper.realIndex === swiper.slides.length - 3) {
        // Inverser la direction à la fin
        swiper.autoplay.stop();
        swiper.params.autoplay.reverseDirection = !swiper.params.autoplay.reverseDirection;
        swiper.autoplay.start();
      }
    },
  },
});

  </script>
</body>
</html>
