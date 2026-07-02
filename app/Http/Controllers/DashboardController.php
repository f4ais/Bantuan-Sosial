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
        return view('dashboard.admin', [
            'jumlahWarga'      => Warga::count(),
            'jumlahSurvey'     => Survey::count(),
            'jumlahBantuan'    => ProgramBantuan::count(),
            'jumlahPenyaluran' => Penyaluran::count(),
        ]);
    }

    public function rtrw()
    {
        return view('dashboard.rtrw', [
            'jumlahWargaWilayah' => Warga::count(),
            'statusVerifikasi'   => Survey::pluck('status'),
        ]);
    }

    public function surveyor()
    {
        return view('dashboard.surveyor', [
            'surveys' => Survey::all(),
        ]);
    }

    public function penyalur()
    {
        return view('dashboard.penyalur', [
            'bantuans' => ProgramBantuan::all(),
        ]);
    }
}