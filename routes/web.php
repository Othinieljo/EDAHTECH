<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\LangageController;
// Route pour changer de langue
// Route::get('/lang/{locale}', [LanguageController::class, 'setLocale']
// )->name('change.language');

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('change.language');

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




   
    
    // Route::get('/contact', [ContactController::class, 'index'])->name('contact');
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



// Route::get('/contact', [ContactController::class, 'index'])->name('contact');
