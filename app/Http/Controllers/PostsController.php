<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
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
        $posts = Post::orderBy('updated_at', 'desc')->get();

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
        $tags       = Tag::all();

        if($categories->count() == 0 || $tags->count() == 0 ){
            Toastr::info('Impossible de creer un article sans catégorie ou tag.', 'Désolé !', ["positionClass" => "toast-top-right"]);
            //Session::flash('info', 'You must have some categories before attempting to create a post.');

            return redirect()->back();
        }

        return view('admin.post.create', compact('categories', 'tags'));
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
            'title'       => 'required',
            'featured'    => 'required|image',
            'content'     => 'required',
            'category_id' => 'required',
            'tag'         => 'required'

        ], [
            'title.required'       => 'veuillez remplir le champ Titre',
            'content.required'     => 'veuillez remplir le champ contenu',
            'featured.required'    => 'veuillez remplir le champ image',
            'category_id.required' => 'veuillez remplir le champ categorie',
            'tag.required'         => 'veuillez remplir le champ tag',
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
       // $post->tag          = $request->tag;
        $post->content      = $request->input('content');
        $post->url          = $request->url;
        $post->featured     = $imagename;
        $post->save();

        //Lier le post aux tags
        $post->tags()->attach($request->tags);

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
        $post       = Post::find($id);
        $categories = Category::all();
        $tags       = Tag::all();

        return view('admin.post.edit', compact('post', 'categories', 'tags'));
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
        $this->validate($request, [
            'title'    => 'required',
           // 'featured' => 'required|image',
            'content'  => 'required',
            'category_id' => 'required',
            // 'tags'      => 'required'

        ], [
            'title.required' => 'veuillez remplir le champ Titre',
            'content.required' => 'veuillez remplir le champ contenu',
           // 'featured.required' => 'veuillez remplir le champ image',
            'category_id.required' => 'veuillez remplir le champ categorie',
            //'tags.required' => 'veuillez remplir le champ tag',
        ]);

        $categories = Category::all();
        $post = Post::find($id);

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
            $imagename = $post->featured;
        }

        //Create post
        $post->category_id  = $request->category_id;
        $post->title        = $request->title;
        $post->slug         = str_slug($request->title);
        // $post->tags         = $request->tags;
        $post->content      = $request->input('content');
        $post->url          = $request->url;
        $post->featured     = $imagename;
        $post->updated_at   = now();
        $post->save();


        //Update Tags
        $post->tags()->sync($request->tags);

        Toastr::success('Article MAJ.', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);
        return redirect()->route('post.index')->with('successMsg','Article ajouté avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->published = 0;
        $post->save();
        $post->delete();

        Toastr::success('Larticle a été placé dans la corbeille.', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    /**
     * View post trashed
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function trashed(){
        $posts = Post::onlyTrashed()->get();

        //Toastr::success('Article restauré.', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);

        return view('admin.post.trashed', compact('posts'));
    }

    /**
     * Permanently deleting post
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function kill($id){
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->forceDelete();

        Toastr::success('Article supprimé avec succes', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    /**
     * Restoring trashed post
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore($id){
        $post = Post::withTrashed()->where('id', $id)->first();
        $post->restore();

        Toastr::success('Article restoré avec succes', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);

        return redirect()->route('post.index');
    }

    public function indexPub()
    {
        $posts = Post::where('published', '1')->orderBy('created_at', 'desc')->get();

        return view('admin.post.published', compact('posts'));

    }

    public function indexNoPub()
    {
        $posts = Post::where('published', '0')->orderBy('created_at', 'desc')->get();

        return view('admin.post.no-published', compact('posts'));

    }

    public function published($id){
        $post = Post::find($id);
        $post->published = 1;
        $post->save();

        Toastr::success('L article a été mis en ligne.', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }

    public function noPublished($id){
        $post = Post::find($id);
        $post->published = 0;
        $post->save();

        Toastr::success('L article a été retiré.', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }
}
