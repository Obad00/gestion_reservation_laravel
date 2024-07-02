<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{  public function index()
    {
        $categories= Categorie::get();
           return view('categories.index', compact('categories'));


    }

    /**string('name'string('name'););
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoriecategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:30|unique:categories,name',
        ]);
        Categorie::create(
            [
                'name' => $request->name

            ]
        );
        return redirect()->route('category.index')->with('success', 'categorie created');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie = Categorie::find($id);
        return view('categories.show', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categorie = Categorie::find($id);
        return view('categories.edit', compact('categorie'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:30|unique:categories,name',
        ]);
        $categorie = Categorie::findOrFail($id);

        $categorie->update(['name' => $request->name]);

        return redirect()->route('category.index')->with('success', 'Categorie supprimé avec succès');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Categorie::findOrFail($id)->delete();
        return redirect()->route('category.index')->with('success', 'Categorie supprimé avec succès');
    }
}
