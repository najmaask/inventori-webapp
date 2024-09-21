@extends('layout.master')
@section('content')
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Data Pinjam</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" action="{{route ('Pinjam.store')}}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label>Kode Pinjam</label>
                                                <input type="text" name="KdPinjam" class="form-control" placeholder="Kode Pinjam" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Pinjam</label>
                                                <input type="date" name="TglPinjam" class="form-control" placeholder="Tanggal Pinjam" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Kembali</label>
                                                <input type="date" name="TglKembali" class="form-control" placeholder="Tanggal Kembali" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Pegawai</label>
                                                    <select class="form-control" name="KdPegawai">
                                                        <option>Pilih Pegawai</option>
                                                        @foreach($pegawai as $pegawais)
                                                        <option value="{{$pegawais->id}}">{{$pegawais->NamaPegawai}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="Status">
                                                    <option>Sedang Dipinjam</option>
                                                    <option>Sudah Dikembalikan</option>
                                                </select>
                                            </div>
                                            

                                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-default">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                </div>
            </div>
        </div>
@endsection