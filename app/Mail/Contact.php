<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;



class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $contact)
    {
        $this->contact = $contact;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

       if (isset($this->contact['fichier']) ) {
            return $this->from('sromain54@hotmail.fr')
                ->attach($this->contact['fichier']->getRealPath(), array(
                    'as' => 'fichier.' . $this->contact['fichier']->getClientOriginalExtension(),
                    'mime' => $this->contact['fichier']->getMimeType()
                ))
                ->view('partials.belier-email-contact');

        }
       else{
           return $this->from('sromain54@hotmail.fr')->view('partials.belier-email-contact');

       }
    }
}
