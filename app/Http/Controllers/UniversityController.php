<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UniversityController extends Controller
{
    public function index($country)
    {
        $countryId = DB::connection("maindb")->table('countries')->where('slug',strtolower($country))->first();
        $universities = DB::connection("maindb")->table('universities')->where('country_id',$countryId->id)->orderBy('name','asc')->paginate(9);
        return view('pages.universities', [
            'universities' => $universities,
        ]);
    }

    public function showUniversity($slug)
    {
        $university = DB::connection("maindb")->table('universities')->where('slug', $slug)->first();
        $courses = DB::connection("maindb")->table('courses')->where('university_id', $university->id)->get();

        return view('pages.universities-details', [
            'university' => $university,
            'courses' => $courses
        ]);
    }
}
