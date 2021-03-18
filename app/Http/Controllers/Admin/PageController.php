<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function users()
    {
        return view('admin.users');
    }

    public function withdrawals()
    {
        return view('admin.withdrawals');
    }

    public function deposits()
    {
        return view('admin.deposits');
    }

    public function settings($type)
    {
        $setting = '';
        switch($type)
        {
            case 'trade_currency':
                $setting = $type;
                break;
            case 'account_currency':
                $setting = $type;
                break;
            default:
            abort('404');
        }
        return view('admin.settings.'.$setting);
    }

    public function login($id)
    {
        $guard = auth()->guard('web')->loginUsingId($id);
        return redirect()->to(route('dashboard'));
    }

    public function tickets()
    {
        return view('admin.tickets');
    }

    public function trades()
    {
        return view('admin.trades');
    }

    public function notFound()
    {
        return 'i dont know';
    }
}
