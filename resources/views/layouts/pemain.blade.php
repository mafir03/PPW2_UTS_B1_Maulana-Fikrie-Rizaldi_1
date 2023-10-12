@extends('layouts.master')

@section('content')

    @include('layouts.header')
    <table class="table table-sm table-striped table-condensed">
        <thead>
            <th>ID</th>
            <th>Nama Pemain</th>
            <th>Nomor Punggung</th>
            <th>Posisi</th>
        </thead>
        <tbody>
            @foreach($data_pemain as $pemain)
                <tr>
                    <td>{{ $pemain->id }}</td>
                    <td>{{ $pemain->nama_pemain }}</td>
                    <td>{{ $pemain->no_punggung  }}</td>
                    <td>{{ $pemain->posisi}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection