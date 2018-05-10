<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Setting;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'fr');
        return view('welcome')
            ->with('title', Setting::first()->name)
            ->with('logo', Setting::first()->logo)
            ->with('fav', Setting::first()->favicon)
            ->with('categories', Category::take(5)->get())
            ->with('first_post', Post::orderBy('created_at', 'desc')->first())
            ->with('content', Post::first()->content)
            ->with('second_post', Post::orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('first_slider', Post::where('category_id', '1')->orderBy('created_at', 'desc')->skip(1)->take(1)->get()->first())
            ->with('third_post', Post::orderBy('created_at', 'desc')->skip(2)->take(1)->get()->first())
            ->with('slide_post', Post::orderBy('created_at', 'desc'))
            //find($id)
            ->with('music', Category::find(1))
            ->with('sport', Category::find(2))
            ->with('first_music', Post::where('category_id', '1')->orderBy('created_at', 'desc')->take(1)->get()->first())
            ->with('settings', Setting::first());

        //return view('home');


        /**
         * return view('admin/dashboard');
        if(user->role = 1)
        if(!Auth::user()->admin){
        Toastr::success('Bienveu admin', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);
        return view('admin/dashboard');
        }
         */

    }
}
