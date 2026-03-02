<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        $item = [
            'content' => 'お問い合わせ'
        ];
        return view('contact', $item);
    }


public function store(ContactRequest $request){

    return view('contact', ['content' => 'お問い合わせを受け付けました。']);
}

}
