@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">{{ $title }}</h1>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $index => $u)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $u->nama }}</td>
                <td>{{ $u->nim }}</td>
                <td>{{ $u->kelas->nama_kelas ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
