<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Association;
use App\Models\Evenement;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(  )
    {
        $utilisateurs = User::latest()->take(5)->get();
        $associations= Association::latest()->take(5)->get();
         $evenements= Evenement::latest()->take(3)->get();
         $reservations= Reservation::All();

        return view('admins.dashboard', compact('associations','evenements','reservations','utilisateurs'));


    }

    public function listeEvenements(  )
    {
       
         $evenements= Evenement::all();

        return view('admins.evenements.index', compact('evenements'));


    }

    // voire liste des associations


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
