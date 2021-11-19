@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Testimoni</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Mobil
                    <a href="{{route('testimoni.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Testimoni</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>ID Customer</th>
                                <th>Testimoni</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($testimoni as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->id_customer}}</td>
                                <td>{{$data->testimoni}}</td>
                                <td>
                                    <form action="{{route('testimoni.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('testimoni.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('testimoni.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
