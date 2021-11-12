<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function create()
    {
        $contactus = Contactus::all();
        return view('contactus.create', compact('contactus'));
    }
}
