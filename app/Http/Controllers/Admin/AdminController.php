<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $utilisateurs = User::where('etat', 1)->whereHas('roles', function ($query) {
            $query->whereIn('name', ['admin']);
        })->get();
        return view('admins.auths.index', compact('utilisateurs'));
    }

    public function listeAdminBloquee()
    {
        $utilisateurs = User::where('etat', 0)->whereHas('roles', function ($query) {
            $query->whereIn('name', ['admin']);
        })->get();
        return view('admins.auths.bloquee', compact('utilisateurs'));
    }

    public function show($id)
    {
        $admin = User::find($id);
        return view('admins.auths.index', compact('admin'));

    }
}
