<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        return view('web.service.service');
    }

    public function show($id)
    {
        return view('web.service.show', [
            'id' => $id,
        ]);
    }
}
