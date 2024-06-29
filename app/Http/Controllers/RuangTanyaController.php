<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\RequestException;

class RuangTanyaController extends Controller
{
    public function index()
    {
        return view('ruangbertanya.index');
    }
    public function chat(Request $request)
    {
        $client = new Client();
        try {
            // Kirim permintaan POST ke API
            $response = $client->post('https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=' . env('GEMINI_API_KEY'), [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    "contents" => [
                        [
                            "parts" => [
                                [
                                    "text" => $request->input('content')
                                ],
                            ]
                        ]
                    ],
                ]
            ]);

            // Dapatkan respons dari API
            $responseBody = json_decode($response->getBody(), true);
            $textContent = $responseBody['candidates'][0]['content']['parts'][0]['text'];
            return response()->json($textContent);
        } catch (RequestException $e) {
            // Tangani pengecualian permintaan
            if ($e->hasResponse()) {
                $errorResponse = $e->getResponse()->getBody()->getContents();
                $errorData = json_decode($errorResponse, true);
                return response()->json(['error' => $errorData], 500);
            } else {
                return response()->json(['error' => $e->getMessage()], 500);
            }
        }
    }
    
}
