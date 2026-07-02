@extends('layouts.app')

@section('content')

<h1>Daftar Survey</h1>

<div class="card">

    <ul>
        @foreach($surveys as $survey)
            <li>{{ $survey->status }}</li>
        @endforeach
    </ul>

</div>

@endsection