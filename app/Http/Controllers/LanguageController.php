<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
class LanguageController extends Controller
{
    //

    public function setLocale($locale){
        // if (array_key_exists($locale, Config::get('app.locales'))) {
        //     Session::put('locale', $locale);
        //     App::setLocale($locale);
         

        // }
        return redirect()->back();
    }
    // public function setLocale($locale, Request $request)
    // {
    //     // Vérifiez si la langue est supportée
    //     if (in_array($locale, Config::get('app.locales'))) {
    //         session(['locale' => $locale]);
    //         App::setLocale($locale);
    //     } else {
    //         // Si la langue n'est pas supportée, redirigez vers la langue par défaut
    //         $locale = session('locale', Config::get('app.fallback_locale'));
    //     }

    //     // Analysez l'URL et remplacez le préfixe de langue si nécessaire
    //     $segments = $request->segments();
        
    //     // Vérifiez si le premier segment est une locale supportée
    //     if (in_array($segments[0], Config::get('app.locales'))) {
    //         // Remplacez le segment existant par la nouvelle locale
    //         $segments[0] = $locale;
    //     } else {
    //         // Ajoutez la locale au début si elle n'est pas déjà définie
    //         array_unshift($segments, $locale);
    //     }

    //     // Construisez la nouvelle URL
    //     $newUrl = '/' . implode('/', $segments);

    //     return redirect($newUrl);
    // }
    
}
