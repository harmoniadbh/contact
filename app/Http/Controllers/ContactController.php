<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    
    public function liste_contact()
    {
        $contacts = Contact::paginate(5);
        return view('contact.liste', compact('contacts'));
    }

    public function ajouter_contact()
    {
        return view('contact.ajouter');
    }
    
    public function ajouter_contact_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
        ]);

        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->telephone = $request->telephone;
        $contact->save();

        return redirect('/ajouter')->with('status', 'contact ajoute avec success');
    }

    public function update_contact($id){
        $contacts = Contact::find($id);

        return view('contact.update', compact('contacts'));
    }

    public function update_contact_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
        ]);
        $contact = Contact::find($request->id);
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->telephone = $request->telephone;
        $contact->update();

        return redirect('/contact')->with('status', 'contact modifie avec success');
    }

    public function delete_contact($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/contact')->with('status', 'contact supprime avec success');


    }
    


}

