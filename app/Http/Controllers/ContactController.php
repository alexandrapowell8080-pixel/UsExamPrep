<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required|string',
        ]);

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip()
        ]);

        $recaptchaData = $response->json();

        if (!$recaptchaData['success'] || $recaptchaData['score'] < 0.5) {
            return back()->withInput()->with('error', 'Bot activity detected. Please try again.');
        }

        try {
            Mail::to('support@usexamprep.com')->send(new ContactMessage($request->all()));
            return back()->with('success', 'Thank you! Your message has been sent successfully.');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Sorry, there was an issue sending your message. Please try again later.');
        }
    }
}