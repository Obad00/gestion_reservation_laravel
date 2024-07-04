<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\User;
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
        $baseRoles = ['super_admin', 'admin', 'association', 'user'];

        // Trouver le rôle par son ID
        $role = Role::findOrFail($id);

        // Vérifier si le rôle fait partie des rôles de base
        if (in_array($role->name, $baseRoles)) {
            return redirect()->route('roles.index')->with('error', 'Ce rôle ne peut pas être supprimé.');
        }
        $role->update(['name' => $request->name]);

        return redirect()->route('roles.index')->with('success', 'Rôle supprimé avec succès');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Liste des rôles de base qui ne peuvent pas être supprimés
        $baseRoles = ['super_admin', 'admin', 'association', 'user'];

        // Trouver le rôle par son ID
        $role = Role::findOrFail($id);

        // Vérifier si le rôle fait partie des rôles de base
        if (in_array($role->name, $baseRoles)) {
            return redirect()->route('roles.index')->with('error', 'Ce rôle ne peut pas être supprimé.');
        }

        // Supprimer le rôle
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Rôle supprimé avec succès');
    }


    public function assignPermissions($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('admins.roles.assign_permissions', compact('role', 'permissions'));
    }

    public function assignRole(Request $request, $id)
{
    // Vérifier si l'utilisateur actuel est un super admin
    if (!auth()->user()->hasRole('super_admin')) {
        return redirect()->back()->with('error', 'Vous n\'avez pas l\'autorisation d\'assigner des rôles.');
    }

    // Valider les données entrantes
    $request->validate([
        'role' => 'required|exists:roles,name'
    ]);

    // Trouver l'utilisateur par son ID
    $user = User::findOrFail($id);

    // Assigner le rôle à l'utilisateur
    $user->syncRoles($request->role);

    return redirect()->back()->with('success', 'Rôle assigné avec succès à l\'utilisateur.');
}


    public function storePermissions(UpdateRoleRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->syncPermissions($request->permissions);
        return redirect()->back()->with('success', 'Permissions assignées avec succès');
    }
}
