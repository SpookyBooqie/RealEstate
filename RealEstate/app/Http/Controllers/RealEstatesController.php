<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\RealEstate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RealEstatesController extends Controller
{

    public function index(RealEstate $realestate)
    {
        return view('realestates.index', [
            'realestates' => RealEstate::all()
        ]);
    }

    public function show(RealEstate $realestate)
    {
        return view('realestates.show', [
            'realestate' => $realestate,
            'user' => $realestate->user()
        ]);
    }

    public function create(RealEstate $realestate)
    {
        return view ('realestates.create', compact('realestate'));
    }
    public function store()
    {
         $attributes = request()->validate([
            'price' => ['required'],
            'address' => ['string', 'required', 'max:255'],
            'description' => ['string', 'required', 'max:255']
         ]);

         RealEstate::create([
             'price' => $attributes['price'],
             'address' => $attributes['address'],
             'description' => $attributes['description'],
             'user_id' => auth()->id()
         ]);

         return redirect()->route('home');
    }

    public function send()
    {
        $attributes = request()->validate([
            'message' => ['required'],
            'email' => ['string']
        ]);

        Mail::to($attributes['email'])->send(new ContactMail($attributes));

        return redirect('/realestates');
    }
}
