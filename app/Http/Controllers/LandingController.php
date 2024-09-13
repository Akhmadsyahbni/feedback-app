<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LandingController extends Controller
{
    public function index(){
        return view('landing');
    }

    public function store(Request $request)
{
    Log::info('Data yang diterima:', $request->all());
    $request->validate([
        'no_kamar' => 'required|string',
        'nama' => 'required|string',
        'alamat' => 'required|string',
        'phone' => 'required|string',
        'email' => 'required|email',
        'maksud_kunjungan' => 'required|string',
        'kamar' => 'required|string',
        'makan_pagi' => 'required|string',
        'makan_minuman' => 'required|string',
        'pelayanan' => 'required|string',
        'kebersihan' => 'required|string',
        'pelayanan_spa' => 'required|string',
        'penampilan_karyawan' => 'required|string',
        'keramahtamahan' => 'required|string',
        'Kunjungan' => 'required|string',
        'datang' => 'required|string',
        'saran' => 'nullable|string',
    ]);

    
    $feedback = new Feedback();
    $data = $request->all();
    // dd($data);
    $feedback->no_kamar = $data['no_kamar'];
    $feedback->nama = $data['nama'];
    $feedback->alamat = $data['alamat'];
    $feedback->phone = $data['phone'];
    $feedback->email = $data['email'];
    $feedback->maksud_kunjungan = $data['maksud_kunjungan'];
    $feedback->kamar = $data['kamar'];
    $feedback->makan_pagi = $data['makan_pagi'];
    $feedback->makan_minuman = $data['makan_minuman'];
    $feedback->pelayanan = $data['pelayanan'];
    $feedback->kebersihan = $data['kebersihan'];
    $feedback->pelayanan_spa = $data['pelayanan_spa'];
    $feedback->penampilan_karyawan = $data['penampilan_karyawan'];
    $feedback->keramahtamahan = $data['keramahtamahan'];
    $feedback->Kunjungan = $data['Kunjungan'];
    $feedback->datang = $data['datang'];
    $feedback->saran = $data['saran'];
    $save =  $feedback->save();
        
    if ($save) {
        // Redirect atau kembali dengan pesan sukses
    return redirect()->back()->with('success', 'Feedback berhasil disimpan!');
    } else {
        // Redirect atau kembali dengan pesan sukses
    return redirect()->back()->with('failed', 'Feedback berhasil disimpan!');
    }



   
}

    
}
