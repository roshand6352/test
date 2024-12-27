<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\CustomerLoginRequest;
use App\Http\Requests\Web\ProviderLoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function providerLoginCheck(ProviderLoginRequest $request)
    {
        $validated = $request->validated();
        $user = User::query()
            ->where('email', $validated['email'])
            ->where('user_type', 'service_provider')
            ->first();
        if (empty($user)) {
            return response()->json([
                'message' => 'Invalid Email',
            ], 401);
        } else if (!Hash::check($validated['password'], $user->password)) {
            return response()->json([
                'message' => 'Invalid Password',
            ], 401);
        } else {
            Auth::login($user);
            return response()->json([
                'message' => 'Login Successfully',
            ]);
        }
    }

    public function customerLoginCheck(CustomerLoginRequest $request)
    {
        $validated = $request->validated();
        $user = User::query()
            ->where('email', $validated['email'])
            ->where('user_type', 'customer')
            ->first();
        if (empty($user)) {
            return response()->json([
                'message' => 'Invalid Email',
            ], 401);
        } else if (!Hash::check($validated['password'], $user->password)) {
            return response()->json([
                'message' => 'Invalid Password',
            ], 401);
        } else {
            Auth::login($user);
            return response()->json([
                'message' => 'Login Successfully',
            ]);
        }
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
