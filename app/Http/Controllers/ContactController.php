<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\EmailContact;
use Illuminate\Support\Facades\Mail;

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

    public function ContacterEDAH(Request $request)
    {
        // Récupérer les informations du formulaire
        $data = $request->all();
        $data['typeMessage'] = 'contact';
    
        // Récupérer la réponse du reCAPTCHA du client
        
    
     
                // Envoi des emails
                $this->envoiDesEmails($data);
    
                // Réponse de la requête
                return response()->json('Votre message a été transmis');
            
    }
    
        //
        public function PostulerChezEDAH(Request $request)
        {
            // recuperation des informations du formulaire
            $data = $request->all();
            $data['typeMessage'] = 'carriere';
    
            // envoi des emails
            $this->envoiDesEmails($data);
    
            // reponse de la requette
            return response()->json('Votre dossier a été transmis');
        }
    
        public function envoiDesEmails($data) {
    
            # code...Volet Visiteur
            // $email_visiteur = $data['email'];
            // Mail::to($email_visiteur)
            //     ->send(new EmailVisiteurSmartex($data));
    
            # code...EDAH
            $email_edah = 'jsomakpo@smartex-expertises.com';
            Mail::to($email_edah)
                ->send(new EmailContact($data));
            
        }
    
}
