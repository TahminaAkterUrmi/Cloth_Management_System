<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function changeLanguage($local){
        // dd($local);
        App::setLocale($local);
        Session()->put('applocale', $local);
        // dd(app()->getLocale());
        return redirect()->back();

    }
}
