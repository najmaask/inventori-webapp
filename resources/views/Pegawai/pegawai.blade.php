@extends('layout.master')
@section('content')
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Daftar Pegawai </h4><br>
                                    <a href='Pegawai/create' class=" btn btn-sm btn-warning">Tambah Data</a>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>Kode Pegawai</th>
                                                    <th>Nama Pegawai</th>
                                                    <th>Alamat</th>
                                                    <th>No Telepon</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach($data as $tampil)
                                            <tbody>
                                                <tr>
                                                    <td>{{$tampil->KdPegawai }}</td>
                                                    <td>{{$tampil->NamaPegawai }}</td>
                                                    <td>{{$tampil->Alamat }}</td>
                                                    <td>{{$tampil->NoTelp }}</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="{{ route('Pegawai.edit',$tampil->id)}}">Edit</a>  |  
                                                        <a class="btn btn-danger btn-sm" href="{{ route('Pegawai.destroy',$tampil->id)}}" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
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
                    </div>
                </div>
            </div>
        </div>

                        
@endsection