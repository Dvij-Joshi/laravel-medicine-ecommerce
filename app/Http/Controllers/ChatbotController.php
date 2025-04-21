<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    private $responses = [
        'what is the price of' => 'The price varies depending on the medicine. Please check our product listings for specific prices.',
        'how to use' => 'Please read the instructions on the medicine packaging or consult with your doctor.',
        'side effects' => 'All medicines may have side effects. Please consult with your doctor or pharmacist for specific information.',
        'expiry date' => 'The expiry date is printed on the medicine packaging. Please check before purchasing.',
        'prescription required' => 'Some medicines require a prescription. Please check with our staff or your doctor.',
    ];

    public function index()
    {
        return view('chatbot.index');
    }

    public function respond(Request $request)
    {
        $question = strtolower($request->input('question'));
        $response = 'I\'m sorry, I don\'t understand that question. Please try asking about prices, usage, side effects, expiry dates, or prescription requirements.';

        foreach ($this->responses as $key => $value) {
            if (strpos($question, $key) !== false) {
                $response = $value;
                break;
            }
        }

        return response()->json(['response' => $response]);
    }
} 