<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $request){

        $contactModel = new Contact();
        $contactModel->name = $request->input('name');
        $contactModel->save();

        return redirect()->route('home');
    }

    public function allData(){
        return view('messages', ['data' => Contact::all()]);
    }
}
