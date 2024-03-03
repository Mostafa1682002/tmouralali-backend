<?php

namespace App\Http\Controllers\dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout', 'profile', 'profileUpdate');
        $this->middleware('auth:admin')->only('profile', 'profileUpdate');
    }

    public function login()
    {
        return view('Dashboard.index');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => "required|email",
            'password' => "required|string",
        ]);
        $remember_me = $request->has('remember') ? true : false;
        if (auth()->guard('admin')->attempt($request->only('email', 'password'), $remember_me)) {
            return redirect()->route('admin.home');
        }
        // toastr()->error('البيانات المدخلةغير صحيحة');
        return redirect()->back()->withInput($request->all())->with('error', 'البيانات المدخلةغير صحيحة');
    }

    public function profile(Request $request)
    {
        $profile = $request->user();
        return view('Dashboard.profile', compact('profile'));
    }


    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => "required|string",
            'email' => "required|email|unique:admins,email,$id",
            'password' => "nullable|min:5|string|confirmed"
        ]);
        $profile = $request->user();
        if ($request->password) {
            $profile->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
        } else {
            $profile->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }
        return redirect()->back()->with('success', 'تم تعديل البيانات  بنجاح');
    }

    public function logout()
    {
        auth('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'تم تسجيل الخروج بنجاح');
    }
}
