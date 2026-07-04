<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
   public function index()
{
    $surveys = Survey::all();

    return view('survey.index', compact('surveys'));
}

public function create()
{
    return view('survey.create');
}

public function store(Request $request)
{
    Survey::create($request->all());

    return redirect('/survey');
}
}