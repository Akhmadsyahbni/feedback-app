<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class PresentaseController extends Controller
{
    public function laporanPersentase()
{
    // Total feedback yang masuk
    $totalFeedback = Feedback::count();

    // Hitung persentase untuk kategori 'kamar'
    $kamarSangatBagus = Feedback::where('kamar', 'sangat_bagus')->count();
    $kamarBagus = Feedback::where('kamar', 'bagus')->count();
    $kamarCukup = Feedback::where('kamar', 'cukup')->count();
    
    // Hitung persentase berdasarkan total
    $persentaseKamarSangatBagus = $totalFeedback ? ($kamarSangatBagus / $totalFeedback) * 100 : 0;
    $persentaseKamarBagus = $totalFeedback ? ($kamarBagus / $totalFeedback) * 100 : 0;
    $persentaseKamarCukup = $totalFeedback ? ($kamarCukup / $totalFeedback) * 100 : 0;

    // Hitung persentase untuk kategori 'pelayanan'
    $pelayananSangatBagus = Feedback::where('pelayanan', 'sangat_bagus')->count();
    $pelayananBagus = Feedback::where('pelayanan', 'bagus')->count();
    $pelayananCukup = Feedback::where('pelayanan', 'cukup')->count();
    
    $persentasePelayananSangatBagus = $totalFeedback ? ($pelayananSangatBagus / $totalFeedback) * 100 : 0;
    $persentasePelayananBagus = $totalFeedback ? ($pelayananBagus / $totalFeedback) * 100 : 0;
    $persentasePelayananCukup = $totalFeedback ? ($pelayananCukup / $totalFeedback) * 100 : 0;

    // Return data ke view
    return view('dashboard', compact(
        'persentaseKamarSangatBagus', 'persentaseKamarBagus', 'persentaseKamarCukup',
        'persentasePelayananSangatBagus', 'persentasePelayananBagus', 'persentasePelayananCukup',
        'totalFeedback'
    ));
    
}

}
