<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller

{
    public function index(){
        $item = [
            'title' => 'お問い合わせ'
        ];
        return view('contact', $item);
    }


public function confirm(ContactRequest $request){
   $param = [
    'name' => $request->name,
    'email' => $request->email,
    'tel' => $request->tel,
    'message' => $request->message
   ];
   return view('confirm', ['title' => 'お問い合わせ内容確認', 'data' => $param]);
}

public function send(ContactRequest $request){
Contact::create([
    'name' => $request->name,
    'email' => $request->email,
    'tel' => $request->tel,
    'message' => $request->message
]);

    return view('thanks');

    
}


}