@extends('master3')

@section('konten')
    {{-- <a href="/nilaikuliah"> Kembali</a> --}}
    <form action="/nilaikuliah" method="get" class="form-horizontal">
        <input type="submit" value="Kembali" class="btn btn-primary">
    </form>

    <br />
    <br />

    <form action="/nilaikuliah/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class = "form-group">
            <label for = "NRP" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-8 ">
                <input name="NRP" type = "text" class = "form-control" id = "NRP" placeholder = "Masukkan NRP">
            </div>
        </div>
        <div class = "form-group">
            <label for = "NilaiAngka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-8 ">
                <input name="NilaiAngka" type = "text" class = "form-control" id = "NilaiAngka"
                    placeholder = "Masukkan Nilai Angka">
            </div>
        </div>
        <div class = "form-group">
            <label for = "SKS" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-8 ">
                <input name="SKS" type = "text" class = "form-control" id = "SKS" placeholder = "Masukkan SKS">
            </div>
        </div>
        {{-- <div class = "form-group">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-8 ">
                <textarea name="alamat" type = "text" class = "form-control" id = "alamat" placeholder = "Masukkan Alamat Pegawai"></textarea>
            </div>
        </div> --}}
        {{-- Nama
        <br><input type="text" name="nama" required="required"> <br />
        Jabatan
        <br><input type="text" name="jabatan" required="required"> <br />
        Umur
        <br><input type="number" name="umur" required="required"> <br />
        Alamat
        <br>
        <textarea name="alamat" required="required"></textarea> <br /> --}}
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
