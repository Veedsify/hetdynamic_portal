<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
    public function index()
    {
        $countries = DB::connection("maindb")->table('countries')->orderBy('name','asc')->get();
        return view('pages.country',[
            'countries' => $countries
        ]);
    }
}   
