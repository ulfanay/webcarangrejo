<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index(){
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('page.contact', compact('contacts'));
    }

    public function staf(){
        $staf= Contact::all();
        return view('page.contact', compact('contacts'));
    }

    public function struktur(){
        // $structur = ;
        return view('page.contact', compact('contacts'));
    } 
}
