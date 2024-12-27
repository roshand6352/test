<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function providerDashboard(Request $request)
    {
        if (!is_null(Auth::user())) {
            $user_id = Auth::user()->user_id_no;
            $user = User::where('user_id_no', $user_id)->first();
            $my_jobs = DB::table('bookings')
                ->where('status', 'accepted')
                ->where('assign_provider_id', $user_id)
                ->get();
            $job_requests = DB::table('bookings')
                ->where('status', 'pending')
                ->where('assign_provider_id', $user_id)
                ->get();
            $notifications = DB::table('notifications')
                ->where('sender_id', $user_id)
                ->get();
            return view('web.dashboard.provider-dashboard', [
                'user' => $user,
                'my_jobs' => $my_jobs,
                'job_requests' => $job_requests,
                'notifications' => $notifications,
            ]);
        } else {
            return redirect(route('home'));
        }
    }

    public function customerDashboard(Request $request)
    {
        return view('web.dashboard.customer-dashboard');
    }
}
