<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function myProfileSp(Request $request)
    {
        return view('web.profile.my-profile-sp');
    }
    public function myProfileC(Request $request)
    {
        return view('web.profile.my-profile-c');
    }
}
