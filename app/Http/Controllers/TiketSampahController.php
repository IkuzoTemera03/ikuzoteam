<?php

namespace App\Http\Controllers;

use App\Models\tiketSampah;
use App\Models\jenisSampah;
use Illuminate\Http\Request;

class TiketSampahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = tiketSampah::where('penukar_id', auth()->user()->id)->orderBy('updated_at', 'desc')->get();

        return view('home', [
            'page' => 'Home',
            'tickets' => $tickets
        ]);
    }

    public function pending()
    {
        $tickets = tiketSampah::where('penukar_id', auth()->user()->id)
            ->where('status_sampah', false)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('home', [
            'page' => 'Riwayat Tiket Tertunda',
            'tickets' => $tickets
        ]);
    }

    public function accept()
    {
        $tickets = tiketSampah::where('penukar_id', auth()->user()->id)
            ->where('status_sampah', true)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('home', [
            'page' => 'Riwayat Tiket Diterima',
            'tickets' => $tickets
        ]);
    }

    public function add()
    {
        $jenis = jenisSampah::all();
        return view('pengajuan', [
            'page' => 'Pengajuan Sampah',
            'jenis' => $jenis
        ]);
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'jenis_sampah' => 'required|exists:jenis_sampahs,id',
            'jumlah' => 'required|integer|min:1',
            'alamat' => 'required',
        ]);
        $jenis_barang = jenisSampah::find($credentials['jenis_sampah']);
        $new = [
            'jenis_sampah_id' => $credentials['jenis_sampah'],
            'jumlah' => $credentials['jumlah'],
            'alamat' => $credentials['alamat'],
            'penukar_id' => auth()->user()->id,
            'total_harga' => $credentials['jumlah'] * $jenis_barang->harga,
        ];
        tiketSampah::create($new);
        return redirect('/home')->with('success', 'Sampah berhasil diajukan!');
    }

    public function edit(tiketSampah $tiket)
    {
        $jenis = jenisSampah::all();
        return view('edit', [
            'page' => 'Pengajuan Sampah',
            'jenis' => $jenis,
            'tiket' => $tiket
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tiketSampah $tiket)
    {
        $credentials = $request->validate([
            'jenis_sampah' => 'required|exists:jenis_sampahs,id',
            'jumlah' => 'required|integer|min:1',
            'alamat' => 'required',
        ]);

        if($request->status_sampah){
            return redirect('/home')->with('error', 'Sampah yang sudah diterima tidak dapat ubah!');
        }
        $jenis_barang = jenisSampah::find($credentials['jenis_sampah']);
        $update = [
            'jenis_sampah_id' => $credentials['jenis_sampah'],
            'jumlah' => $credentials['jumlah'],
            'alamat' => $credentials['alamat'],
            'penukar_id' => auth()->user()->id,
            'total_harga' => $credentials['jumlah'] * $jenis_barang->harga,
        ];
        $tiket->update($update);
        return redirect('/home')->with('success', 'Sampah berhasil diajukan!');
    }
}
