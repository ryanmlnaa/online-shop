<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Http\Requests\StoretransaksiRequest;
use App\Http\Requests\UpdatetransaksiRequest;
use App\Models\Product;
use App\Models\TblCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $best = Product::where('quantity_out','>=',5)->get();
        $data = Product::paginate(15);
        $countKeranjang = TblCart::where(['idUser' => 'guest123', 'status' => 0])->count();
        return view('pelanggan.page.home', [
            'title'     => 'Home',
            'data'      => $data,
            'best'      => $best,
            'count'     => $countKeranjang,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
   public function addToCart(Request $request)
    {
        //
        dd($request)
        $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        // $db = new TblCart ;
        // $product = Product::find($product_id);
        // $field = [
        //     'idUser'    => 'guest123',
        //     'id_barang' => $product_id,
        //     'qty'       => 1,
        //     'price'     => $product->harga,
        // ];
        // $db::create($field);
        // return redirect('/');

        $product_id = $request->input('product_id');
        $product = Product::find($product_id);

    //
        // Simulasi user guest
    $idUser = 'guest123';

    // Cek apakah produk sudah ada di keranjang
    $existingCart = TblCart::where('idUser', $idUser)
        ->where('product_id', $product_id)
        ->where('status', 0) // Belum checkout
        ->first();

    if ($existingCart) {
    $newQty = $existingCart->qty + 1;

    $existingCart->update([
        'qty'   => $newQty,
        'price' => $newQty * $product->price
    ]);
} else {
    TblCart::create([
        'idUser'     => $idUser,
        'product_id' => $product_id,
        'qty'        => 1,
        'price'      => $product->price,
        'status'     => 0
    ]);
    }

    Alert::success('Sukses', 'Produk berhasil ditambahkan ke keranjang!');
    return redirect('/shop');
}
//

    public function checkout()
    {
        $keranjang = TblCart::with('product')
            ->where('idUser', 'guest123')
            ->where('status', 0)
            ->get();

        return view('pelanggan.page.check-out', [
            'keranjang' => $keranjang,
            'title' => 'Checkout'
        ]);
    }



    public function store(StoreTransaksiRequest $request)
    {
        //
    }


    public function show(Transaksi $transaksi)
    {

    }


    public function edit(Transaksi $transaksi)
    {
        //
    }

    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        //
    }


    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
