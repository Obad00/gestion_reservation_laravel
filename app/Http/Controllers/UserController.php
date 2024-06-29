<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $utilisateurs = User::all()->where('roles','role:super_admin');
        $utilisateurs = User::all()->where('etat',true);
        return view('admins.utilisateurs.index', compact('utilisateurs'));
    }

    public function listeUserBloquee()
    {
        $utilisateurs = User::all()->where('etat',false);
        return view('admins.utilisateurs.bloquee',compact('utilisateurs'));
    }

    public function bloquee_un_user(User $utilisateur){
        $utilisateur->update([
            'etat' => false,
        ]);
        return redirect()->back()->with('success','utilisateur est '.$utilisateur->nom.' bloquee');
        }
    
    
        public function debloquee_un_user(User $utilisateur){
            $utilisateur->update([
                'etat' => true,
            ]);
            return redirect()->back()->with('success','utilisateur est '.$utilisateur->nom.' debloquee');
            }
        
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
