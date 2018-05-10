<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Setting;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    /**
     * @return mixed
     */
    public function index(){
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

    }

    /**
     * @param $slug
     * @return mixed
     */
    public function singlePost($slug){
        Carbon::setLocale('fr');
        setlocale(LC_TIME, 'fr');
       // $category = Category::where('slug', $cat)->first();
        $post     = Post::where('slug', $slug)->first();

        //dd($post);

        //Pagination
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');

        return view('single')->with('post', $post)
                               // ->with('category', $category)
                                ->with('title', $post->title)
                                ->with('settings', Setting::first())
                                ->with('categories', Category::take(5)->get())
                                ->with('title', Setting::first()->name)
                                ->with('logo', Setting::first()->logo)
                                ->with('fav', Setting::first()->favicon)
                                ->with('next', Post::find($next_id))
                                ->with('prev', Post::find($prev_id))
                                ->with('tags', Tag::all());

    }

    /**
     * @param $id
     * @return mixed
     */
    public function category($id){
        $category = Category::find($id);

        return view('frontend.category')->with('category', $category)
            ->with('title', $category->name)
            //->with('settings', Setting::first())
            ->with('title', Setting::first()->name)
            ->with('logo', Setting::first()->logo)
            ->with('fav', Setting::first()->favicon)
            ->with('categories', Category::take(5)->get());
    }

    /**
     * @param $id
     * @return mixed
     */
    public function tag($id){
        $tag = Tag::find($id);

        return view('front.tag')->with('tag', $tag)
            ->with('title', $tag->tag)
           // ->with('settings', Setting::first())
            ->with('categories', Category::take(5)->get());
    }
}
