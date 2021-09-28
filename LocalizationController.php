<?php

namespace App\Http\Controllers;

//Add this file to controller folder

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class LocalizationController extends Controller
{
    public $allowedLangArr = ['en','cn'];

    public function lang_change(Request $request)
    {
        $lang_key = $request->lang_key;
        if(in_array($lang_key, $this->allowedLangArr)){
            App::setLocale($lang_key);
            session()->put('locale', $lang_key);
        }
        return redirect(app()->getLocale());
    }
}
