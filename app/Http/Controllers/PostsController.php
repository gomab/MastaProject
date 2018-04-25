<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.post.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        if($categories->count() == 0 ){
            Toastr::info('Impossible de creer un article sans catégorie.', 'Désolé !', ["positionClass" => "toast-top-right"]);
            //Session::flash('info', 'You must have some categories before attempting to create a post.');

            return redirect()->back();
        }

        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'    => 'required',
            'featured' => 'required|image',
            'content'  => 'required',
            'category_id' => 'required',
           // 'tags'      => 'required'

        ], [
            'title.required' => 'veuillez remplir le champ Titre',
            'content.required' => 'veuillez remplir le champ contenu',
            'featured.required' => 'veuillez remplir le champ image',
            'category_id.required' => 'veuillez remplir le champ categorie',
            //'tags.required' => 'veuillez remplir le champ tag',
        ]);

        //Upload img
        $featured = $request->file('featured');
        $slug = str_slug($request->title);
        if(isset($featured)){
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $featured->getClientOriginalExtension();

            if(!file_exists('uploads/post')){
                mkdir('uploads/post', 0777, true);
            }
            $featured->move('uploads/post',$imagename);
        }else{
            $imagename = 'default.png';
        }

        //Create post
        $post = new Post();
        $post->category_id  = $request->category_id;
        $post->title        = $request->title;
        $post->slug         = str_slug($request->title);
       // $post->tags         = $request->tags;
        $post->content      = $request->input('content');
        $post->url          = $request->url;
        $post->featured     = $imagename;
        $post->save();

        return redirect()->route('post.index')->with('successMsg','Item ajouté avec succes');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
