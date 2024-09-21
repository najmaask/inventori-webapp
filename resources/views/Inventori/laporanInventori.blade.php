@extends('layout.master')
@section('content')
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4> Daftar Inventori </h4><br>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>Kode Inventor</th>
                                                    <th>Nama Inventor</th>
                                                    <th>Kode Jenis</th>
                                                    <th>Kondisi</th>
                                                    <th>Jumlah</th>
                                                    <th>Tanggal Register</th>
                                                    <th>Kode Ruang</th>
                                                    <th>Keterangan</th>
                                                    <th>Kode Petugas</th>
                                                </tr>
                                            </thead>
                                            @foreach($data as $tampil)
                                            <tbody>
                                                <tr>
                                                    <td>{{$tampil->KdInventor }}</td>
                                                    <td>{{$tampil->NamaInventor }}</td>
                                                    <td>{{$tampil->NamaJenis }}</td>
                                                    <td>{{$tampil->Kondisi }}</td>
                                                    <td>{{$tampil->Jumlah }}</td>
                                                    <td>{{$tampil->TglRegister }}</td>
                                                    <td>{{$tampil->NamaRuang }}</td>
                                                    <td>{{$tampil->Ket }}</td>
                                                    <td>{{$tampil->NamaPetugas }}</td>
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