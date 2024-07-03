<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Association;
use App\Models\Evenement;
use Illuminate\Http\Request;

class AssociationAdminController extends Controller
{
    public function index()
    {
        $associations = Association::withCount('evenements')->where('etat',true)->get();
        $evenement_count = Evenement::all()->$associations->count();

        return view('admins.associations.index',compact('associations','evenement_count'));
    }

    // asssociations bloquees
    public function listeBloquee()
    {
        $associations = Association::withCount('evenements')->where('etat',false)->get();
        return view('admins.associations.bloquee',compact('associations'));
    }

    public function show($id)
    {
        $association= Association::findOrFail($id);
        // Use the relationship to get the events associated with the specific association
        $evenements = $association->evenements;

        // Return the view with the association and its related events
        return view('admins.associations.show', compact('association', 'evenements'));
    }

    // bloquee un association
    public function bloquee_un_associatiation(Association $association){
    $association->update([
        'etat' => false,
    ]);
    return redirect()->back()->with('success','association est '.$association->nom.' bloquee');
    }


    public function debloquee_un_associatiation(Association $association){
        $association->update([
            'etat' => true,
        ]);
        return redirect()->back()->with('success','association est '.$association->nom.' debloquee');
        }



}
