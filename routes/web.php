<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;


use App\Http\Controllers\LanguageController;
// Route pour changer de langue
// Route::get('/lang/{locale}', [LanguageController::class, 'setLocale']
// )->name('change.language');


use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;

// Route::get('lang/{locale}', function ($locale) {
//     if (in_array($locale, ['en', 'fr'])) {
//         session(['locale' => $locale]);
//     }
//     return redirect()->back();
// })->name('change.language');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

// Groupe de routes avec localisation
Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'fr|en'], 'middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('landing.contents.landing');
    })->name('landing');

    Route::get('/accueil', function () {
        return view('main.contents.index');
    })->name('accueil');

    /* Nous connaitre  */

    Route::get('/a-propos', function () {
        return view('main.contents.about-us');
    })->name('about');
     

     /* Sous rubrique de Nous connaitre */
      

     /* History */
     Route::get('/history', function () {
        return view('main.contents.history');
    })->name('about.history');
    /* History */

    /* Vision */

    Route::get('/vision', function () {
        return view('main.contents.vision');
    })->name('about.vision');


    /* Vision */

    /*Valeurs */

    Route::get('/values', function () {
        return view('main.contents.values');
    })->name('about.values');


    /*Valeurs */

    /* Notre equipe */

    Route::get('/team', function () {
        return view('main.contents.team');
    })->name('about.team');


    /* Notre equipe */

    /* Partners */

    Route::get('/partners', function () {
        return view('main.contents.partners');
    })->name('about.partners');

    /* Partners */



     /* Sous rubrique de Nous connaitre */




    /* Nous connaitre  */



    /* Nos services */


     Route::get('/services', function () {
        return view('main.contents.services');
    })->name('services');

    /* Nos produits  */

    Route::get('/products', function() {

        return view('main.contents.product');


    })->name('products');

    /* News */

    Route::get('/news', function() {

        return view('main.contents.news');


    })->name('news');

    /* Carreer */

    Route::get('/career', function() {

        return view('main.contents.career');


    })->name('career');

    /* Contact */

    Route::get('/contact', function() {

        return view('main.contents.contact');


    })->name('contact');


    /* Domaines Expertises */


    /*  Main   */ 

    Route::get('domaines-expertises', function() {
        return view('main.contents.domaines-expertise');
    })->name('expertise');

     /*  Main   */
    

    /* Network Design & Planning */
    Route::get('/network-design', function () {
        return view('main.contents.expertises.network-design');
    })->name('expertises.network-design');

    /* Network Design & Planning */

    /* Radio optimisation */

    Route::get('radio-optimisation', function () {
        return view('main.contents.expertises.radio-optimisation');
    })->name('expertises.radio-optimisation');


    /* Radio optimisation */


    /* Site Installation ( Radio & Transission ) */


    Route::get('/radio-transmission', function() {
        return view('main.contents.expertises.radio-transmission');
    })->name('expertises.radio-transmission');




    /* Site Installation ( Radio & Transission ) */


    /* Civil Work & Data Center */

    Route::get('civil-work', function () {
        return view('main.contents.expertises.civil-work');
    })->name('expertises.civil-work');


    /* Civil Work & Data Center */


    /* Energie */

    Route::get('energie', function () {
        return view('main.contents.expertises.energie');
    })->name('expertises.energie');


    /* Energie */

    /* Fibre optique */

    Route::get('fibre-optique', function() {
        return view('main.contents.expertises.fibre-optique');
    })->name('expertises.fibre-optique');



    /* Fibre optique */

    /*Developpement d'application */

    Route::get('dev-application', function () {
        return view('main.contents.expertises.dev-application');
    })->name('expertises.dev-application');



    /*Developpement d'application */

    /* Cyber  Security */

    Route::get('cybersecurity', function () {
        return view('main.contents.expertises.cybersecurity');
    })->name('expertises.cybersecurity');


    /* Cyber  Security */

    /* Digitalisation */

    Route::get('digitalisation', function () {
        return view('main.contents.expertises.digitalisation');
    })->name('expertises.digitalisation');


    /*Digitalisation */



     /* Domaines Expertises */
     


     /* Media */
     

     /*  Galerie */

     Route::get('galerie', function () {
        return view('main.contents.media.galerie');
     })->name('media.galerie');
     
     
     /* Galerie */


     /* Actualites */

     Route::get('/news', function () {
        return view('main.contents.media.news');
     })->name('media.news');




     /* Actualites */


     /* Publi - Reportages */

     Route::get('/publi-reportages', function () {
        return view('main.contents.media.publi-reportages');
     })->name('media.publi-reportages');


     /* Publi Reportages */




     /* Media */



   
    
    // Route::get('/contact', [ContactController::class, 'index'])->name('contact');

    Route::get('/contacts', [ContactController::class, 'index']);

    Route::post('/contacts', [ContactController::class, 'store']);





    Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);




Route::get('/login-admin', function () {
    return view('main.contents.login');
 })->name('admin');




 Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/loginn', [AuthController::class, 'login'])->name('admin.connect');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Routes protégées par le middleware admin
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });
});


Route::post('/create', [AuthController::class, 'store'])->name('admin.store');



});






// Routes par défaut (français)
Route::get('/', function () {
    return view('landing.contents.landing');
})->name('landing');

Route::get('/accueil', function () {
    return view('main.contents.index');
})->name('accueil');

 /* Nous connaitre  */

 Route::get('/a-propos', function () {
    return view('main.contents.about-us');
})->name('about');


 /* Sous rubrique de Nous connaitre */
      

     /* History */
     Route::get('/history', function () {
        return view('main.contents.about-us');
    })->name('about.history');
    /* History */

    /* Vision */

    Route::get('/vision', function () {
        return view('main.contents.vision');
    })->name('about.vision');


    /* Vision */

    /*Valeurs */

    Route::get('/values', function () {
        return view('main.contents.values');
    })->name('about.values');


    /*Valeurs */

    /* Notre equipe */

    Route::get('/team', function () {
        return view('main.contents.team');
    })->name('about.team');


    /* Notre equipe */

    /* Partners */

    Route::get('/partners', function () {
        return view('main.contents.partners');
    })->name('about.partners');

    /* Partners */



     /* Sous rubrique de Nous connaitre */

 /* Nos services */


 Route::get('/services', function () {
    return view('main.contents.services');
})->name('services');

 /* Nos produits  */

 Route::get('/products', function() {

    return view('main.contents.product');


})->name('products');

/* News */

Route::get('/news', function() {

    return view('main.contents.news');


})->name('news');

/* Carreer */

Route::get('/career', function() {

    return view('main.contents.career');


})->name('career');

/* Contact */

Route::get('/contact', function() {

    return view('main.contents.contact');


})->name('contact');

 /* Domaines Expertises */


    /*  Main   */ 

    Route::get('domaines-expertises', function() {
        return view('main.contents.domaines-expertise');
    })->name('expertise');

     /*  Main   */ 
    

    /* Network Design & Planning */
    Route::get('/network-design', function () {
        return view('main.contents.expertises.network-design');
    })->name('expertises.network-design');

    /* Network Design & Planning */

    /* Radio optimisation */

    Route::get('radio-optimisation', function () {
        return view('main.contents.expertises.radio-optimisation');
    })->name('expertises.radio-optimisation');


    /* Radio optimisation */


    /* Site Installation ( Radio & Transission ) */


    Route::get('/radio-transmission', function() {
        return view('main.contents.expertises.radio-transmission');
    })->name('expertises.radio-transmission');




    /* Site Installation ( Radio & Transission ) */


    /* Civil Work & Data Center */

    Route::get('civil-work', function () {
        return view('main.contents.expertises.civil-work');
    })->name('expertises.civil-work');


    /* Civil Work & Data Center */


    /* Energie */

    Route::get('energie', function () {
        return view('main.contents.expertises.energie');
    })->name('expertises.energie');


    /* Energie */

    /* Fibre optique */

    Route::get('fibre-optique', function() {
        return view('main.contents.expertises.fibre-optique');
    })->name('expertises.fibre-optique');



    /* Fibre optique */

    /*Developpement d'application */

    Route::get('dev-application', function () {
        return view('main.contents.expertises.dev-application');
    })->name('expertises.dev-application');



    /*Developpement d'application */

    /* Cyber  Security */

    Route::get('cybersecurity', function () {
        return view('main.contents.expertises.cybersecurity');
    })->name('expertises.cybersecurity');


    /* Cyber  Security */

    /* Digitalisation */

    Route::get('digitalisation', function () {
        return view('main.contents.expertises.digitalisation');
    })->name('expertises.digitalisation');


    /*Digitalisation */



     /* Domaines Expertises */


     /* Media */
     

     /*  Galerie */

     Route::get('galerie', function () {
        return view('main.contents.media.galerie');
     })->name('media.galerie');
     
     
     /* Galerie */

      /* Actualites */

      Route::get('/news', function () {
        return view('main.contents.media.news');
     })->name('media.news');




     /* Actualites */


     /* Publi - Reportages */

     Route::get('/publi-reportages', function () {
        return view('main.contents.media.publi-reportages');
     })->name('media.publi-reportages');

     Route::get('/login-admin', function () {
        return view('main.contents.login');
     })->name('admin');


     /* Publi Reportages */




     /* Media */



// Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/contacts', [ContactController::class, 'index']);

Route::post('/contacts', [ContactController::class, 'store']);


Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);





Route::prefix('admin')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/loginn', [AuthController::class, 'login'])->name('admin.connect');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');

    // Routes protégées par le middleware admin
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });
});
Route::post('/create', [AuthController::class, 'store'])->name('admin.store');

// Route::post('/contacter-edah', ['uses' => 'ContactController@ContacterEDAH', 'as' => 'contactez_nous']);

Route::post('/contacter-edah', [ContactController::class, 'ContacterEDAH'])->name('contactez_nous');