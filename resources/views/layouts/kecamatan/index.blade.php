@extends('layouts/master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Data Kecamatan') }}
            <a href="{{route('kecamatan.create')}}" class="float-right btn btn-success"><i class="fa fa-plus-circle"></i>
             Buat Data Kecamatan
            </a>
        </div>
            <div class="card-body">
        <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">Kode Kecamatan</th>
            <th scope="col">Kota</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Action</th>
        </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($kecamatan as $data)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{$data->nama_kecamatan}}</td>
                <td>{{$data->kode_kecamatan}}</td>
                <td>{{$data->kota->nama_kota}}</td>
                <td>
                <form action="{{route('kecamatan.destroy',$data->id)}}"method="post">
                @csrf
                @method('DELETE')
                    <a href="{{ route('kecamatan.edit', $data->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('kecamatan.show', $data->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
                    <button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('apakah data ini akan di hapus?')"><i class="fa fa-trash-alt">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
</div>
</div>
@endsection