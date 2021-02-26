@extends('layouts/master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ __('Data Kelurahan') }}
            <a href="{{route('kelurahan.create')}}" class="float-right btn btn-success"><i class="fa fa-plus-circle"></i>
             Buat Data Kelurahan
            </a>
        </div>
            <div class="card-body">
        <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kelurahan</th>
            <th scope="col">Kecamatan</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Action</th>
        </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($kelurahan as $data)
            <tr>
                <th scope="row">{{ $no++ }}</th>
                <td>{{$data->nama_kelurahan}}</td>
                <td>{{$data->kecamatan->nama_kecamatan}}</td>
                <td>
                <form action="{{route('kelurahan.destroy',$data->id)}}"method="post">
                @csrf
                @method('DELETE')
                    <a href="{{ route('kelurahan.edit', $data->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('kelurahan.show', $data->id)}}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> </a>
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