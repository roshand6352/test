<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SignupController extends Controller
{
    public function customerSignupStore(Request $request)
    {
        {
            $email = $request->input('email');
            $name = $request->input('name');
            $postcode = $request->input('postcode');
            $phonenumber = $request->input('phonenumber');
            $services = implode(", ", $request->input('services', []));
            $other_service = $request->input('other_service');

            $data = [
                'email_address' => $email,
                'status' => 'subscribed',
                'merge_fields' => [
                    'NAME' => $name,
                    'POSTCODE' => $postcode,
                    'PHONENUMBER' => $phonenumber,
                    'SERVICES' => $services . ' ' . $other_service,
                ]
            ];

            $apiKey = '36ce65c029571cbcb64baeee9007c5e3-us7';
            $audienceId = '31c9c1cfa4';
            $dc = 'us7'; // Replace with the correct datacenter for your Mailchimp account

            $response = Http::withHeaders([
                'Authorization' => 'Basic ' . base64_encode('anystring:' . $apiKey),
            ])->post("https://{$dc}.api.mailchimp.com/3.0/lists/{$audienceId}/members/", $data);

            if ($response->successful()) {
                return redirect()->route('home')->with('success', 'You have successfully subscribed!');
            }

            return redirect()->route('home')->with('error', 'An error occurred. Please try again.');
        }
    }
}
