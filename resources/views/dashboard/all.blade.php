@extends('dashboard.layouts.main')

@section('container')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h1>welcome</h1>
<h2>{{ Auth::user()->name }}</h2>
    
@endsection