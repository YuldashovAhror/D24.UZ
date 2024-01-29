<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        dd($request->all());
        
        if ($request->phone) {
            if (!Auth::check()) {
                $mavjudFoydalanuvchi = User::where('phone', $request->phone)->first();
                if (!$mavjudFoydalanuvchi) {
                    User::create([
                        'phone' => $request->phone,
                        'phone_sms' => $request->phone_sms,
                    ]);
                    // Sahifaga yo'naltiramiz
                    return redirect()->back();
                } else {
                    return redirect()->back();
                }
            }
        }

        if ($request->phone_sms) {
            // dd('asd');
            if (!Auth::check()) {
                $phone_sms = User::where('phone_sms', $request->phone_sms)->first();
                if ($phone_sms) {
                    Auth::login($phone_sms);
                    return redirect()->route('cabinet');
                } else {
                    return redirect()->back()->withInput()->withErrors(['phone_sms' => 'Sms code xato']);
                }
            }
        }
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
