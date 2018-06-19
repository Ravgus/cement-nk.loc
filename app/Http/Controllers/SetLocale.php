<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Config;

class SetLocale extends Controller
{
    //
    public function index(Request $request)
    {
        $locale = $request->lang;
        if (in_array($locale, Config::get('app.locales'))) {
            Session::put('locale', $locale);
        }

        return redirect()->back();
    }
}
