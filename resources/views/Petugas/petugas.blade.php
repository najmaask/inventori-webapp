@extends('layout.master')
@section('content')
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4> Daftar Petugas </h4><br>
                                    <a href='Petugas/create' class=" btn btn-sm btn-warning">Tambah Data</a>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>Kode Petugas</th>
                                                    <th>Nama Petugas</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>ID Level</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($data as $tampil)
                                            <tbody>
                                                <tr>
                                                    <td>{{$tampil->KdPetugas }}</td>
                                                    <td>{{$tampil->NamaPetugas }}</td>
                                                    <td>{{$tampil->Username }}</td>
                                                    <td>{{$tampil->Password }}</td>
                                                    <td>{{$tampil->NamaLevel }}</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('Petugas.edit',$tampil->id)}}">Edit</a>  |  
                                                        <a class="btn btn-danger btn-sm" href="{{ route('Petugas.destroy',$tampil->id)}}" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
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