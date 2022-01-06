<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $plans = Plan::with('features')->get();
        return view('user.front.index', compact('plans'));
    }

    public function about()
    {
        return view('user.front.about');
    }
    public function contact()
    {
        return view('user.front.contact');
    }

    public function faq()
    {
        return view('user.front.faq');
    }

    public function terms()
    {
        return view('user.front.terms');
    }

    public function privacy()
    {
        return view('user.front.privacy');
    }

    public function offline()
    {
        return view('vendor.laravelpwa.offline');
    }

    public function dashboard()
    {
        return view('user.dashboard.index');
    }

    public function trade()
    {
        return view('user.dashboard.trade');
    }

    public function wallet()
    {
        return view('user.dashboard.wallet');
    }

    public function verify()
    {
        return view('user.dashboard.verify');
    }

    public function profile()
    {
        return view('user.dashboard.profile');
    }

    public function profileEdit()
    {
        return view('user.dashboard.profile-edit');
    }

    public function withdraw()
    {
        return view('user.dashboard.withdraw');
    }

    public function deposit()
    {
        return view('user.dashboard.deposit');
    }

    public function subscribe()
    {
        return view('user.dashboard.subscription');
    }

    public function twoFactorAuth()
    {
        return view('user.dashboard.two-factor-authentication');
    }
}
