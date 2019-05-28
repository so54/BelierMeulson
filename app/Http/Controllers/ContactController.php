<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\Contact;
use App\Models\Lien;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Mail;
use Redirect;
use Validator;

class ContactController extends Controller
{

     public function show(){
         $liens = Lien::all();
        return view('vendor.belier-contact', ['liens'=>$liens]);
    }



    public function store(ContactRequest $request){
        $liens = Lien::all();


         Mail::to('sromain54@hotmail.fr')
        ->send(new Contact($request->except('_token')));

        flash('Nous vous remercions pour votre message. Nous vous répondrons dans les plus brefs délais.')->success();
        return view('vendor.belier-contact',['liens'=>$liens]);


    }
}
