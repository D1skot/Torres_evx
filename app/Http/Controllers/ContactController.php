<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormEmail;

class ContactController extends Controller
{
   public function index(Request $request)
    {
        return view('page.contact');
    }
    public function save(Request $request)
    {
        $data = $request->validate([
            'email' => ['max:255', 'email'],
            'firstname' => ['required', 'max:255'],
            'adres' => ['max:255'],
            'phone' => ['max:255'],
            'topic' => ['max:255'],
            'question' => ['max:320'],
            'agree_regulations1' => ['nullable'],
        ], [
            'firstname.required' => 'Pole nazwisko jest wymagane.'
        ]);

       try {
           Mail::to('maciej.figaszewski@ssangyong-auto.pl')->send(new ContactFormEmail($data));

           return response()->json(['success' => 1]);
        } catch (\Exception $e) {
            return response()->json(['success' => 0, 'error' => $e->getMessage()]);
        }
    }
}
