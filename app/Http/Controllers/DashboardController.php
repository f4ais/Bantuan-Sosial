<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use App\Models\Survey;
use App\Models\ProgramBantuan;
use App\Models\Penyaluran;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahWarga = Warga::count();
        $jumlahSurvey = Survey::count();
        $jumlahBantuan = ProgramBantuan::count();
        $jumlahPenyaluran = Penyaluran::count();

        return view('dashboard.admin', compact(
            'jumlahWarga',
            'jumlahSurvey',
            'jumlahBantuan',
            'jumlahPenyaluran'
        ));
    }
}