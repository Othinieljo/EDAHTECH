<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

use Illuminate\Support\Facades\Session;
class Localization
{
    // public function handle(Request $request, Closure $next)
    // {
    //     $locale = $request->segment(1);

    //     if (in_array($locale, Config::get('app.locales'))) {

           
    //         // Si la langue est valide, la définir dans la session et l'application
    //         session(['locale' => $locale]);
    //         App::setLocale($locale);
    //     } else {
    //         // Si le préfixe de langue est manquant, redirige vers l'URL avec la langue par défaut
    //         $localeInSession = session('locale', Config::get('app.fallback_locale'));

    //         // Vérifiez si la langue est déjà présente dans l'URL avant de rediriger
    //         if ($locale !== $localeInSession) {
    //             return redirect()->to("/$localeInSession" . $request->getRequestUri());
    //         }
    //     }

    //     return $next($request);
    // }
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('locale')){
            App::setLocale(Session::get('locale'));
        }
        return $next($request);
    }
}
