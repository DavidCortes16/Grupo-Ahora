<?php

namespace App\Http\Controllers;

use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function store(Request $request)
    {
        $contactu = Contactus::create($request->all());
        dd($contactu);
        return view('contactus.create', compact('contactus'));
    }
}
