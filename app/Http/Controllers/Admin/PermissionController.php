<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions= Permission::get();
           return view('admins.permissions.index', compact('permissions'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpdatePermissionRequest $request)
    {
        try {

        Permission::create(
            [
                'name' => $request->name
            ]
        );
        return redirect()->route('permissions.index')->with('success', 'permission ajoute avec success');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Une erreur s\'est produite lors de l\'ajout un permission');
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permission = Permission::find($id);
        return view('admins.permissions.edit', compact('permission'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePermissionRequest  $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:30|unique:permissions,name',
        ]);
        $permission = Permission::findOrFail($id);

        $permission->update(['name' => $request->name]);

        return redirect()->route('permissions.index')->with('success', 'permission created');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Permission::findOrFail($id)->delete();
        return redirect()->route('permissions.index')->with('success', 'Rôle supprimé avec succès');
    }
}
