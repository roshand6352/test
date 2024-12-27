<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutUs(Request $request)
    {
        return view('web.page.about-us');
    }

    public function contactUs(Request $request)
    {
        return view('web.page.contact-us');
    }

    public function new(Request $request)
    {
        return view('web.page.new');
    }

    public function becomeAProvider(Request $request)
    {
        return view('web.service-provider.become-a-provider');
    }
}
