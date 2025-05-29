<?php

namespace App\Http\Controllers;

use App\Models\modelDetailTransaksi;
use App\Models\tblCart;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\product;
use App\Models\transaksi;
//
use RealRashid\SweetAlert\Facades\Alert;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function shop()
    {
        $data = Product::paginate(8);
        $countKeranjang = TblCart::count();
        return view('pelanggan.page.shop', [
            'title' => 'Shop',
            'data' => $data,
            'count' => $countKeranjang,
        ]);
    }
    public function transaksi()
    {
        $db = TblCart::with('product')->where('idUser', 'guest123')->get();
        $countKeranjang = TblCart::count();

        // dd($db->product->product_name);
        return view('pelanggan.page.transaksi', [
            'title' => 'Transaksi',
            'count' => $countKeranjang,
            'data' => $db
        ]);
    }
    public function contact()
    {
        $countKeranjang = TblCart::count();
        return view('pelanggan.page.contact', [
            'title' => 'Contact Us',
            'count' => $countKeranjang,
        ]);
    }

    public function checkout()
    {
        $countKeranjang = TblCart::count();
        return view('pelanggan.page.checkout', [
            'title' => 'Check Out',
            'count' => $countKeranjang,
        ]);
    }
    public function prosesCheckout(Request $request, $id)
    {
        $data = $request->all();
        $findId = tblCart::find($id);
        $code = transaksi::count();
        $codeTransaksi = random_int(000, 999) . date('Ymd') . $code;
        // dd($data['product_id']);die;

        // simpan detail barang
        $detailTransaksi = new modelDetailTransaksi();

        $fieldDetail = [
            'id_transaksi'  => $codeTransaksi,
            'product_id'    => $data['product_id'],
            'qty'           => $data['qty'],
            'price'         => $data['total']
        ];
        $detailTransaksi::create($fieldDetail);

        // update cart
        $fieldCart = [
            'qty'   => $data['qty'],
            'price' => $data['total']
        ];
        TblCart::where('id',$id)->update($fieldCart);

        Alert::toast('Checkout Berhasil', 'success');
        return redirect()->route('checkout');
    }

    public function admin()
    {
        return view('admin.page.dashboard', [
            'name' => "Dashboard",
            'title' => 'Admin Dashboard',
        ]);
    }
    public function userManagement()
    {
        return view('admin.page.user', [
            'name' => "User Management",
            'title' => 'Admin user Management',
        ]);
    }
    public function report()
    {
        return view('admin.page.report', [
            'name' => "Report",
            'title' => 'Admin Report',
        ]);
    }
    public function login()
    {
        return view('admin.page.login', [
            'name' => "Login",
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

        if ($proses->is_admin === 0) {
            Session::flash('error', 'Kamu bukan admin');
            return back();
        } else {
            if (Auth::attempt($dataLogin)) {
                Alert::toast('Kamu berhasil login', 'success');
                $request->session()->regenerate();
                return redirect()->intended('/admin/dashboard');
            } else {
                Alert::toast('Email dan Password salah', 'error');
                return back();
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        Alert::toast('Kamu berhasil Logout', 'success');
        return redirect('admin');
    }
}
