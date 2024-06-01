<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public function index()
    {
        $services = DB::connection("maindb")->table('services')->get()->count();
        $universities = DB::connection("maindb")->table('universities')->get()->count();
        $courses = DB::connection("maindb")->table('courses')->get()->count();
        $blogs = DB::connection("maindb")->table('blogs')->orderBy('created_at','desc')->take(5)->get();

        return view('pages.dashboard',[
            'services' => $services,
            'universities' => $universities,
            'courses' => $courses,
            'blogs' => $blogs
        ]);
    }
}
