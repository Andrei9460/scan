<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FormController extends Controller {
    public function show(Request $request)    {
        echo __METHOD__;
        echo $request->name;
        $newUrl = $request->name;
        echo $newUrl;
        if(!empty($newUrl))
        //DB::insert("INSERT INTO 'form_models' ('siteUrl','taskQueue') VALUES (?, ?)", ['url 1', 'taskQueue']);
        DB::table('form_models')->insert ([['siteUrl'=>"$newUrl",'taskQueue'=> "0"]]);
        return view('welcome');

    }
}
