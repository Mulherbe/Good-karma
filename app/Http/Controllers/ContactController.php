<?php

namespace App\Http\Controllers;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

        public function Contact()
    {
        return view('contact');
    }




    public function ContactValide(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'text' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('accueil')
                        ->withErrors($validator)
                        ->withInput();
        }



         Mail::to('fredericmuller06@hotmail.com')
        ->send(new Contact($request->except('_token')));
        return view('contact_valid');

    }


}
