<?php

namespace App\Http\Controllers\Web;

use App\Helpers\ImageUploadHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Web\CustomerSignupStoreRequest;
use App\Http\Requests\Web\ProviderSignupStoreRequest;
use App\Models\User;
use App\Models\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Spatie\Newsletter\Facades\Newsletter;

class SignupController extends Controller
{
    public function customerSignup(Request $request)
    {
        return view('web.auth.customer.signup');
    }

    public function customerLogin(Request $request)
    {
        return view('web.auth.customer.login');
    }

    public function providerSignup(Request $request)
    {
        return view('web.auth.provider.signup');
    }

    public function providerLogin(Request $request)
    {
        return view('web.auth.provider.login');
    }

    public function customerSignupStore(CustomerSignupStoreRequest $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->password;
        $postcode = $request->input('postcode');
        $phonenumber = $request->input('phonenumber');
        $services = json_decode($request['services']);
        $other_service = $request->input('other_service');
        $user = new User();
        $user->name = $name;
        $user->mobile_no = $phonenumber;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->user_type = 'customer';
        $user->post_code = $postcode;
        $user->other_service = $other_service;
        if ($request->hasfile('profilepic')) {
            $profile_image = ImageUploadHelper::imageUpload($request->file('profilepic'), 'customer-profile');
            $user->profile_image = $profile_image;
        }
        $user->save();
        foreach ($services as $service) {
            $service_name = DB::table('services')->where('service_id_no', $service)->first()->service_name;
            $user_service = new UserService();
            $user_service->user_id = $user->user_id_no;
            $user_service->service_id = $service;
            $user_service->service_name = $service_name;
            $user_service->save();
        }
        Auth::login($user);
        return response()->json([
            'message' => 'Customer Signup Successfully',
        ]);
    }

    public function providerSignupStore(ProviderSignupStoreRequest $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->password;
        $postcode = $request->input('postcode');
        $phonenumber = $request->input('phonenumber');
        $services = json_decode($request['services']);
        $other_service = $request->input('other_service');
        $user = new User();
        $user->name = $name;
        $user->mobile_no = $phonenumber;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->user_type = 'service_provider';
        $user->post_code = $postcode;
        $user->other_service = $other_service;
        $user->save();

        foreach ($services as $service) {
            $service_name = DB::table('services')->where('service_id_no', $service)->first()->service_name;
            $user_service = new UserService();
            $user_service->user_id = $user->user_id_no;
            $user_service->service_id = $service;
            $user_service->service_name = $service_name;
            $user_service->save();
        }
        Auth::login($user);
        return response()->json([
            'message' => 'Service Provider Signup Successfully',
        ]);
    }
}
