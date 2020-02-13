@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card mt-5">
                <div class="body">
                <div class="card-header">Laporkan Keluhan Kamu</div>
                
                    <form action="/success" method="POST">
                    @csrf
                    <div class="form-group-now mt-2">
                        <label class="col-sm-2 col-form-2">Nama Lengkap</label>
                    <div class="col-sm-11">
                        <input type="text" class="form-control @error('namalengkap') is-invalid @enderror" id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap...">
                    @error('namalengkap')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    
                    </div>
                    </div>

                    <div class="form-group-row">
                        <label class="col-sm-2 col-form-2 mt-2">Keluhan</label>
                        <select name="keluh" id="keluh"class="form-control">
                                <option hidden>Keluhan</option>
                                <option value="Kebersihan">Kebersihan</option>
                                <option value="Fasilitas">Fasilitas</option>
                                <option value="Administrasi">Administrasi</option>
                            </select>
                    </div>
            
                            <label class="col-sm-2 col-form-2 mt-2">Kelas</label>
                            <select name="kelas" id="kelas" class="form-control">
                                <option hidden>Kelas</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>

                            <label class="col-sm-2 col-form-2 mt-2">Nomor Handphone</label>
                            <input type="text" class="form-control" name="nomorhp" id="nomorhp" placehoder="Masukan Nomor Handphone...">
                            @error('nomorhp')
                            <div class="text-danger">{{$message}}</div>
                            @enderror


                            <label class="col-sm-2 col-form-2 mt-2">Jenis Kelamin</label>
                            <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                                <option hidden>Jenis kelamin</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Waria">Waria</option>
                            </select>

                            <label class="col-sm-2 col-form-2 mt-2">Komentar</label>
                            <textarea name="kategori" id="kategori" cols="10" rows="3" class="form-control"></textarea>

                            <button type="submit" class="btn btn-outline-primary float-right mt-3">Kirim Laporan!</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>