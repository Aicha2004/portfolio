<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('portfolio.index'); // Retourne le formulaire
    }

    public function sendContact(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'messageContent' => $request->message,
    ];

    Mail::send('emails.contact', $data, function ($message) use ($request) {
        $message->to('your_email@gmail.com') // Remplacez par votre adresse
                ->subject($request->subject)
                ->from($request->email, $request->name);
    });

    return back()->with('success', 'Your message has been sent successfully!');
}
}
