<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
//
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function shop()
    {
        $data = product::paginate(8);
        return view('pelanggan.page.shop', [
            'title' => 'Shop',
            'data'  => $data,
        ]);
    }
    public function transaksi()
    {
        return view('pelanggan.page.transaksi', [
            'title' => 'Transaksi',
        ]);
    }
    public function contact()
    {
        return view('pelanggan.page.contact', [
            'title' => 'Contact Us',
        ]);
    }

    public function checkout()
    {
        return view('pelanggan.page.checkout', [
            'title' => 'Check Out',
        ]);
    }
    public function admin()
    {
        return view('admin.page.dashboard', [
            'name'  =>  "Dashboard",
            'title' => 'Admin Dashboard',
        ]);
    }
    public function userManagement()
    {
        return view('admin.page.user', [
            'name'  =>  "User Management",
            'title' => 'Admin user Management',
        ]);
    }
    public function report()
    {
        return view('admin.page.report', [
            'name'  =>  "Report",
            'title' => 'Admin Report',
        ]);
    }
    public function login()
    {
        return view('admin.page.login', [
            'name'  =>  "Login",
            'title' => 'Admin Login',
        ]);
    }
    public function loginProses(HttpRequest $request)
    {
        Session::flash('error', $request->email);
        $dataLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $user = new User;
        $proses = $user::where('email', $request->email)->first();

        if($proses->is_admin === 0){
            Session::flash('error','Kamu bukan admin');
            return back();
        } else {
            if(Auth::attempt($dataLogin)){
                Alert::toast('Kamu berhasil login','success');
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            } else {
                Alert::toast('Email dan Password salah','error');
                return back();
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::toast('Kamu berhasil Logout','success');
        return redirect('admin');
    }
}
