<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Récupérer tous les contacts
    public function index()
    {
        $contacts = Contact::all();
        return response()->json([
            'success' => true,
            'data' => $contacts,
        ]);
    }

    // Ajouter un nouveau contact
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:contacts',
            'nom' => 'nullable|string|max:255',
            'type' => 'required|in:newsletter,contact',
            'message' => 'nullable|string',
        ]);

        $contact = Contact::create($validatedData);

        return response()->json([
            'success' => true,
            'message' => 'Contact ajouté avec succès !',
            'data' => $contact,
        ], 201); // Code HTTP 201 pour une création réussie
    }

    // Supprimer un contact
    public function destroy($id)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json([
                'success' => false,
                'message' => 'Contact non trouvé.',
            ], 404); // Code HTTP 404 pour ressource non trouvée
        }

        $contact->delete();

        return response()->json([
            'success' => true,
            'message' => 'Contact supprimé avec succès.',
        ]);
    }
}
