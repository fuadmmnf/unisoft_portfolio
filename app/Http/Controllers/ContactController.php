<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContactEmail(Request $request)
    {
        // Validate request inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Extract form data
        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $subject = "Contact Us";
        $messageBody = $validatedData['message'];

        try {
            // Send email
            Mail::send('emails.contact', compact('name', 'email', 'subject', 'messageBody'), function ($message) use ($email, $name, $subject) {
                $message->from(config('mail.from.address'), config('mail.from.name'));
                $message->replyTo($email, $name);
                $message->to('rkpharma.bd@gmail.com')->subject($subject);
            });

            // Return success response
            return response()->json([
                'message' => 'Your message has been sent successfully!'
            ], 200);

        } catch (\Exception $e) {
            // Log the error for further debugging
            \Log::error('Mail sending failed: ' . $e->getMessage());

            // Return error response
            return response()->json([
                'message' => 'There was an error sending your message. Please try again later.',
                'error' => $e->getMessage() // Optionally include the error message in the response
            ], 500);
        }
    }
}
