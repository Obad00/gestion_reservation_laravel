<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles= Role::get();
           return view('admins.roles.index', compact('roles'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        // $request->validate([
        //     'name' => 'required|min:3|max:30|unique:roles,name',
        // ]);
        Role::create(
            [
                'name' => $request->name

            ]
        );
        return redirect()->route('roles.index')->with('success', 'role created');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::find($id);
        return view('admins.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::find($id);
        return view('admins.roles.edit', compact('role'));    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRoleRequest $request, string $id)
    {
        // $request->validate([
        //     'name' => 'required|min:3|max:30|unique:roles,name',
        // ]);
        $role = Role::findOrFail($id);

        $role->update(['name' => $request->name]);

        return redirect()->route('roles.index')->with('success', 'Rôle supprimé avec succès');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return redirect()->route('roles.index')->with('success', 'Rôle supprimé avec succès');
    }


    public function assignPermissions($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('admins.roles.assign_permissions', compact('role', 'permissions'));
    }

    public function storePermissions(UpdateRoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->syncPermissions($request->permissions);
        return redirect()->back()->with('success', 'Permissions assignées avec succès');
    }
}
