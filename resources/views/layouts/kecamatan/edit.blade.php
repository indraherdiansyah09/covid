@extends('layouts/master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Kecamatan') }}</div>
                <div class="card-body">

                <form action="{{route('kecamatan.update',$kecamatan->id)}}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Kecamatan</label>
                        <input type="text" name="kode_kecamatan" value="{{$kecamatan->kode_kecamatan}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kecamatan</label>
                        <input type="text" name="nama_kecamatan" value="{{$kecamatan->nama_kecamatan}}" class="form-control" id="exampleInputPassword1">
                    </div>   

                    <div class="form-group">
                        <label for="">Provinsi</label>
                        <select name="id_kota" class="form-control" required>
                            @foreach($kota as $data)
                            <option value="{{$data->id}}"
                                {{$data->id == $kecamatan->id_kota ? "selected":""}}>{{$data->nama_kota}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    
                </form>                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection