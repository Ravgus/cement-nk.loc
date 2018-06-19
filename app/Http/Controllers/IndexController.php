<?php

namespace App\Http\Controllers;

use App;
use DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show()
    {
        $title = 'Цемент-НК';
        $content = [];
        $navs = [];
        $products = [];
        $contacts = [];
        $languages = ['ru', 'uk'];

        if (App::getLocale() == 'ru') {
            $content = DB::table('chapters')->select('id', 'title_ru as title', 'text_ru as text')->get();
            $products = DB::table('products')->select('id', 'title_ru as title', 'text_ru as text')->get();
            $contacts = DB::table('contacts')->select('city_ru as city', 'address_ru as address', 'phone', 'email')->get();
        } elseif (App::getLocale() == 'uk') {
            $content = DB::table('chapters')->select('id', 'title_uk as title', 'text_uk as text')->get();
            $products = DB::table('products')->select('id', 'title_uk as title', 'text_uk as text')->get();
            $contacts = DB::table('contacts')->select('city_uk as city', 'address_uk as address', 'phone', 'email')->get();
        }

        foreach ($content as $cont) {
            if($cont->id == '1') { continue; }
            $navs[] = $cont->title;
        }

        return view('site.index', [
            'title' => $title,
            'languages' => $languages,
            'content' => $content,
            'navs' => $navs,
            'products' => $products,
            'contacts' => $contacts
        ]);
    }
}
