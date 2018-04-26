<?php

namespace App\Http\Controllers;

use App\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
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
            'tag' => 'required'
        ], [
            'tag.required' => 'Veuillez saisir le Tag'
        ]);

        $tag = Tag::create([
            'tag'  => $request->input('tag'),
            'slug'  => str_slug($request->input('tag'))
        ]);

        Toastr::success('Tag créé.', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);
        return redirect()->route('tag.index');
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
        $tag = Tag::find($id);

        return view('admin.tag.edit', compact('tag'));
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
            'tag' => 'required',
        ], [
            'tag.required' => 'Veuillez saisir le Tag'
        ]);

        $tag = Tag::find($id);

        $tag->tag = $request->tag;
        $tag->slug = str_slug($request->tag);
        $tag->save();

        Toastr::success('Tag MAJ.', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);

        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag = Tag::find($id)->delete();

        Toastr::success('Tag supprimé.', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);

        return redirect()->route('tag.index');
    }
}
