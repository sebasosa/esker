<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function __construct()
  {
    $this->middleware('admin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::all();
        return view('categories.index', ['categorias'=> $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $category= new Category;
      return view('categories.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'id' => ['required', 'numeric', 'unique:categories'],
        'title' => ['required', 'string', 'max:255', 'unique:categories'],
        ]);
      $category = new Category;
      $category->id = $request->id;
      $category->title = $request->title;

      if ($category->save()) {
        return redirect('/categories');
      } else {
        return view('categories.create',['category' => $category]);
      }
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
      return view('categories.edit', ['category' => $category]);
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
      $validatedData = $request->validate([
        'id' => ['required', 'numeric', 'unique:categories'],
        'title' => ['required', 'string', 'max:255', 'unique:categories'],
        ]);
      $category = Category::find($id);
      $category->id = $request->id;
      $category->title = $request->title;

      if ($category->save()) {
        return redirect('/categories');
      } else {
        return view('categories.edit',['category' => $category]);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Category::destroy($id);
      return redirect('/categories');
    }
}
