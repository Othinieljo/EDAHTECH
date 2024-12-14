<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailContact extends Mailable
{
    // use Queueable, SerializesModels;

    // /**
    //  * Create a new message instance.
    //  */
    // public function __construct()
    // {
    //     //
    // }

    // /**
    //  * Get the message envelope.
    //  */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         subject: 'Email Contact',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }

    use Queueable, SerializesModels;

    private $contactData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->contactData = $data;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $infos = $this->contactData;
        $copies = [
            'joel.somakpo@gmail.com'
        ];
        //
        if ($infos['typeMessage'] === 'contact') {

            // formulaire de contact
            $mail_to_send = $this->view('mail.edah.email_contact_edah', compact('infos'));
            // objet
            $objetEmail = 'Contact';

        } else {

            // formulaire de carriere
            $mail_to_send = $this->view('mail.edah.email_carriere_edah', compact('infos'));
            // objet
            $objetEmail = 'Dépôt de dossier de candidature';
            // dd($infos, 'ok');

            // ajout du CV en piece jointe
            $cv = $infos['user_resume'];
            $mail_to_send->attach($cv->getRealPath(), [
                'as' => $cv->getClientOriginalName(),
                'mime' => $cv->getClientMimeType()
            ]);

        }
        // ajout de l'object
        $mail_to_send->bcc($copies);
        $mail_to_send->subject($objetEmail);
        return $mail_to_send;
    }
}
