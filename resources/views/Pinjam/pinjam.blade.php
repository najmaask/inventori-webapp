@extends('layout.master')
@section('content')
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4> Daftar Pinjam </h4><br>
                                    <a href='Pinjam/create' class=" btn btn-sm btn-warning">Tambah Data</a>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>Kode Pinjam</th>
                                                    <th>Tanggal Pinjam</th>
                                                    <th>Tanggal Kembali</th>
                                                    <th>Kode Pegawai</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($data as $tampil)
                                            <tbody>
                                                <tr>
                                                    <td>{{$tampil->KdPinjam }}</td>
                                                    <td>{{$tampil->TglPinjam }}</td>
                                                    <td>{{$tampil->TglKembali }}</td>
                                                    <td>{{$tampil->NamaPegawai }}</td>
                                                    <td>{{$tampil->Status }}</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('Pinjam.edit',$tampil->id)}}">Edit</a>  |  
                                                        <a class="btn btn-danger btn-sm" href="{{ route('Pinjam.destroy',$tampil->id)}}" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
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