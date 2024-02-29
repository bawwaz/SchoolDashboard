@extends('dashboard.layouts.main')

@section('container')
    <h3>My profile</h3>
    <p>Nama: {{Auth::user()->name }}</p>
    <p>Kelas: {{Auth::user()->email }}</p>
@endsection
    