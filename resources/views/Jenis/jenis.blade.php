@extends('layout.master')
@section('content')
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4> Daftar Jenis </h4><br>
                                    <a href='Jenis/create' class=" btn btn-sm btn-warning">Tambah Data</a>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>Kode Jenis</th>
                                                    <th>Nama Jenis</th>
                                                    <th>Keterangan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($data as $tampil)
                                            <tbody>
                                                <tr>
                                                    <td>{{$tampil->KdJenis }}</td>
                                                    <td>{{$tampil->NamaJenis }}</td>
                                                    <td>{{$tampil->Ket }}</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('Jenis.edit',$tampil->id)}}">Edit</a>  |  
                                                        <a class="btn btn-danger btn-sm" href="{{ route('Jenis.destroy',$tampil->id)}}" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
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