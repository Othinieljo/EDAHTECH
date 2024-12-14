<section class="relative pt-12 py-16">
<section class="">
        <div class="w-full">
          <div class="xl:py-28 md:py-20 py-10 xl:px-0 px-10">
            <span class="w-fit mx-auto flex items-center justify-center bg-emerald-50 rounded-full text-emerald-600 text-center text-sm font-medium leading-5 px-3 py-1 mb-5">
              {{__('main/includes/career.title-1')}}
            </span>
            <h1 class="text-gray-900 text-center font-manrope lg:text-5xl text-4xl font-bold leading-tight mb-8">
              {{__('main/includes/career.title-2')}}
            </h1>
          </div>
          <div class="lg:py-24 md:py-16 py-10 bg-indigo-400 xl:px-0 px-10">
            <h2 class="text-gray-900 text-center font-manrope lg:text-4xl text-3xl font-bold leading-10 mb-14"> {{__('main/includes/career.title-4')}} </h2>
            <div class="lg:max-w-3xl md:max-w-xl sm:max-w-md max-w-sm mx-auto border border-slate-200 bg-white rounded-2xl p-12">
              <!-- Premier poste -->
              <div class="flex flex-col gap-4 pb-6 border-b border-gray-200">
                <div class="flex justify-between gap-x-8">
                  <h3 class="text-gray-900 text-xl font-medium leading-8">Technicien Reseau</h3>
                  <button 
                    class="w-20 h-9 rounded-full bg-indigo-50 hover:bg-indigo-100 transition-all duration-700 text-indigo-600 text-xs font-semibold leading-4 postuler-btn"
                    data-id="ux-designer-form">
                    {{__('main/includes/career.btn')}}
                  </button>
                </div>
                <div class="hidden form-container" id="ux-designer-form">
                  <form class="mt-4 bg-gray-100 p-4 rounded-md">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nom complet :</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md mb-4" placeholder="Votre nom complet" />
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email :</label>
                    <input type="email" class="w-full p-2 border border-gray-300 rounded-md mb-4" placeholder="Votre email" />
                    <label class="block text-gray-700 text-sm font-bold mb-2">Lettre de motivation :</label>
                    <textarea class="w-full p-2 border border-gray-300 rounded-md mb-4" rows="4" placeholder="Votre lettre de motivation"></textarea>
                    <label class="block text-gray-700 text-sm font-bold mb-2">CV (PDF, DOCX) :</label>
                    <input type="file" class="w-full p-2 border border-gray-300 rounded-md mb-4" accept=".pdf, .docx" />
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md">Envoyer</button>
                  </form>
                </div>
              </div>
              
              <!-- Répéter pour les autres postes -->
              <div class="flex flex-col gap-4 py-6 border-b border-gray-200">
                <div class="flex justify-between gap-x-8">
                  <h3 class="text-gray-900 text-xl font-medium leading-8">Chef Projet</h3>
                  <button 
                    class="w-20 h-9 rounded-full bg-indigo-50 hover:bg-indigo-100 transition-all duration-700 text-indigo-600 text-xs font-semibold leading-4 postuler-btn"
                    data-id="motion-designer-form">
                    {{__('main/includes/career.btn')}}
                  </button>
                </div>
                <div class="hidden form-container" id="motion-designer-form">
                  <form class="mt-4 bg-gray-100 p-4 rounded-md">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Nom complet :</label>
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-md mb-4" placeholder="Votre nom complet" />
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email :</label>
                    <input type="email" class="w-full p-2 border border-gray-300 rounded-md mb-4" placeholder="Votre email" />
                    <label class="block text-gray-700 text-sm font-bold mb-2">Lettre de motivation :</label>
                    <textarea class="w-full p-2 border border-gray-300 rounded-md mb-4" rows="4" placeholder="Votre lettre de motivation"></textarea>
                    <label class="block text-gray-700 text-sm font-bold mb-2">CV (PDF, DOCX) :</label>
                    <input type="file" class="w-full p-2 border border-gray-300 rounded-md mb-4" accept=".pdf, .docx" />
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md">Envoyer</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="xl:max-w-6xl w-auto mx-auto xl:py-28 md:py-16 py-10 xl:px-0 px-10">
            <div
        class="flex flex-col items-center gap-4 rounded-lg bg-primary p-6 shadow-lg sm:flex-row sm:justify-between"
      >
        <strong class="text-xl text-white sm:text-xl">CANDIDATURE SPONTANEE</strong>
  
        <a
          class="  inline-flex items-center gap-2 rounded-full border border-white bg-white px-8 py-3 text-primary hover:bg-transparent hover:text-white focus:outline-none focus:ring active:bg-white/90"
          href="#"
        >
          <span class="text-sm font-medium"> {{__('main/includes/career.btn')}} </span>
  
          <svg
            class="size-5 rtl:rotate-180"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M17 8l4 4m0 0l-4 4m4-4H3"
            />
          </svg>
        </a>
      </div>
            </div>
        </div>

        <div class="hidden form-container" id="spontaneous-form">
          <form class="mt-4 bg-gray-100 p-4 rounded-md">
            <label class="block text-gray-700 text-sm font-bold mb-2">Nom complet :</label>
            <input type="text" class="w-full p-2 border border-gray-300 rounded-md mb-4" placeholder="Votre nom complet" />
            <label class="block text-gray-700 text-sm font-bold mb-2">Email :</label>
            <input type="email" class="w-full p-2 border border-gray-300 rounded-md mb-4" placeholder="Votre email" />
            <label class="block text-gray-700 text-sm font-bold mb-2">Lettre de motivation :</label>
            <textarea class="w-full p-2 border border-gray-300 rounded-md mb-4" rows="4" placeholder="Votre lettre de motivation"></textarea>
            <label class="block text-gray-700 text-sm font-bold mb-2">CV (PDF, DOCX) :</label>
            <input type="file" class="w-full p-2 border border-gray-300 rounded-md mb-4" accept=".pdf, .docx" />
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md">Envoyer</button>
          </form>
        </div>
        
      </section>
      
    </section>
      
      <script>
        document.addEventListener("DOMContentLoaded", () => {
          const buttons = document.querySelectorAll(".postuler-btn");
      
          buttons.forEach(button => {
            button.addEventListener("click", () => {
              const formId = button.getAttribute("data-id");
              const form = document.getElementById(formId);
      
              // Basculer la visibilité du formulaire
              if (form.classList.contains("hidden")) {
                form.classList.remove("hidden");
              } else {
                form.classList.add("hidden");
              }
            });
          });
        });

        

      </script>
      


