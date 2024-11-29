<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::all();
        // $contacts = Contact::where('name', 'Krischal Shrestha')->get();

        return view('welcome', ['contacts' => $contacts]);
        // $users = [
        //     ['name' => 'Ram'],
        //     ['name' => 'Sam'],
        //     ['name' => 'Hari'],

        // ];
        // return view('welcome', ['users' => $users]);
    }
}
