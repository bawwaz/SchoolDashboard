@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="mb-3 fw-bold">Create Data Kelas</h3>
            @auth
            <a href="/kelas/create/" class="btn btn-warning mb-4">Add Data</a>
            @endauth
        </div>
    </div>

    @if(session()->has('success'))
    <div id="success-alert" class="alert alert-success col-lg-12" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row justify-content-center">
        <table class="table" style="width: 1000px;">
            <thead>
                <tr class="table-dark">
                    <th scope="col">No</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php 
                $no = 1;
                @endphp

                @foreach ($kelas as $kelas)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$kelas->nama_kelas }}</td>
                    <td>
                        <a href="/kelas/{{ $kelas->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="/kelas/delete/{{$kelas->id}}" method="post" class="d-inline"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
<script>
    // Menghilangkan pesan setelah 5 detik
    setTimeout(function() {
        document.getElementById('success-alert').style.display = 'none';
    }, 5000);
</script>
@endsection
