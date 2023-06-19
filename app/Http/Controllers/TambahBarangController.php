<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;

class TambahBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tambahBarang');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validasi Kebutuhan Inputan
        Request()->validate([
            'kd_barang' => 'required|unique:barang,kd_barang|min:6|max:6',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'stok_barang' => 'required|numeric',
            'harga_barang' => 'required|numeric',
            'tgl_masuk_barang' => 'required'

        ],
        //Pesan Validasi(Invalid Inputan)
        [
            'kd_barang.required' => '*Kode Barang harus diisi terlebih dahulu',
            'kd_barang.unique' => '*Kode barang suda ada',
            'kd_barang.max' => '*Kode Barang tidak bole lebih dari 6 Karakter',
            'kd_barang.min' => '*Kode Barang tidak bole kurang dari 6 Karakter',
            'nama_barang.required' => '*Nama Barang harus diisi terlebih dahulu',
            'jenis_barang.required' => '*Jenis Barang harus diisi terlebih dahulu',
            'stok_barang.required' => '*Stok Barang harus diisi terlebih dahulu',
            'stok_barang.numeric' => '*Stok Barang hanya bisa diisi dengan angka saja',
            'harga_barang.required' => '*Harga Barang harus diisi terlebih dahulu',
            'harga_barang.numeric' => '*Harga Barang hanya bisa diisi dengan angka saja',
            'tgl_masuk_barang.required' => '*Tanggal Masuk Barang harus diisi terlebih dahulu',

        ]);

        $data = $request->all();

        Barang::create($data);

        return redirect()->route('home')->with('pesan', 'Data Berhasil Di Tambahkan');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Barang::findOrFail($id);
        return view ('editBarang',[
            'items' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Barang::findOrFail($id);
        $item->update($data);
        return redirect()->route('home')->with('pesan', 'Data Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Barang::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect()->route('home')->with('pesan', 'Data Berhasil Di Hapus');
    }

    public function print(){
        $items = Barang::all();
        return view('barangPrintPdf', [
            'items' => $items
        ]);
    }
}
