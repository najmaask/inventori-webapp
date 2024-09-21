@extends('layout.master')
@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Daftar Ruang </h4><br>
                                    <a href='Ruang/create' class=" btn btn-sm btn-warning">Tambah Data</a>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>Kode Ruang</th>
                                                    <th>Nama Ruang</th>
                                                    <th>Keterangan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($data as $tampil)
                                            <tbody>
                                                <tr>
                                                    <td>{{$tampil->KdRuang }}</td>
                                                    <td>{{$tampil->NamaRuang }}</td>
                                                    <td>{{$tampil->Ket }}</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('Ruang.edit',$tampil->id)}}">Edit</a>  |  
                                                        <a class="btn btn-danger btn-sm" href="{{ route('Ruang.destroy',$tampil->id)}}" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                </div>
            </div>
        </div>
    </div>
                        
@endsection