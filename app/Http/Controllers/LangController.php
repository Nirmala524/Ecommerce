<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($lang)
    {
        if (in_array($lang, ['en', 'hin', 'guj'])) {
            Session::put('locale', $lang);
            App::setLocale($lang);
            return redirect()->back();
        }

        return redirect()->back();
    }
}
