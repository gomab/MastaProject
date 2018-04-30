<?php

namespace App\Http\Controllers;

use App\Category;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name' => 'required'
        ], [
            'name.required' => 'Veuillez saisir le nom  de la category'
        ]);

        $category = Category::create([
            'name'  => $request->input('name'),
            'slug'  => str_slug($request->input('name'))
        ]);

        return redirect()->route('category.index')->with('successMsg', 'Catégorie ajoutée avec success');
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
        $category = Category::find($id);

        return view('admin.category.edit', compact('category'));
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
            'name' => 'required',
        ], [
            'name.required' => 'Veuillez saisir le nom de la catégoorie'
        ]);

        $category = Category::find($id);

        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->save();

        return redirect()->route('category.index')->with('successMsg', 'Catégorie MAJ avec success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        //delete posts associed to category
        foreach ($category->posts as $post){
            $post->forceDelete();
        }

        $category->delete();

        //Session::flash('success', 'You successfuly deleted the category.');
        Toastr::success('Catégorie supprimé ', 'Title', ["positionClass" => "toast-top-right"]);
        return redirect()->route('category.index');
        //return redirect()->route('category.index')->with('successMsg', 'Catégorie supprimée avec success');
    }
}
