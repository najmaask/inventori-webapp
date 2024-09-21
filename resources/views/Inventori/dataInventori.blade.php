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
                                    <h4>Data Inventori</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" action="{{route ('Inventori.store')}}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label>Kode Inventori</label>
                                                <input type="text" name="KdInventor" class="form-control" placeholder="Kode Inventori" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Inventori</label>
                                                <input type="text" name="NamaInventor" class="form-control" placeholder="Nama Inventori" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Jenis</label>
                                                    <select class="form-control" name="KdJenis">
                                                        <option>Pilih Jenis</option>
                                                        @foreach($jenis as $jen)
                                                        <option value="{{$jen->id}}">{{$jen->NamaJenis}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kondisi</label>
                                                <input type="text" name="Kondisi" class="form-control" placeholder="Kondisi" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah</label>
                                                <input type="text" name="Jumlah" class="form-control" placeholder="Jumlah" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Register</label>
                                                <input type="date" name="TglRegister" class="form-control" placeholder="Tanggal Register" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Ruang</label>
                                                    <select class="form-control" name="KdRuang">
                                                        <option>Pilih Ruang</option>
                                                        @foreach($ruang as $rua)
                                                        <option value="{{$rua->id}}">{{$rua->NamaRuang}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" name="Ket" class="form-control" placeholder="Keterangan" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Petugas</label>
                                                    <select class="form-control" name="KdPetugas">
                                                        <option>Pilih Petugas</option>
                                                        @foreach($petugas as $pet)
                                                        <option value="{{$pet->id}}">{{$pet->NamaPetugas}}</option>
                                                        @endforeach
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