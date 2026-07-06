<?php

namespace App\Http\Controllers;

use App\Models\ProgramBantuan;
use Illuminate\Http\Request;

class ProgramBantuanController extends Controller
{
    public function index()
    {
        $bantuans = ProgramBantuan::all();

        return view('bantuan.index', compact('bantuans'));
    }

    public function create()
    {
        return view('bantuan.create');
    }

    public function store(Request $request)
    {
        ProgramBantuan::create($request->all());

        return redirect('/bantuan');
    }
}