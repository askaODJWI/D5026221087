@extends('master4')

@section('konten')
    <h3>Tambah Data Bedak</h3>
    {{-- <a href="/nilaikuliah"> Kembali</a> --}}
    <form action="/bedak" method="get" class="form-horizontal">
        <input type="submit" value="Kembali" class="btn btn-primary">
    </form>

    <br />
    <br />

    <form action="/bedak/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class = "form-group row">
            <label for = "merkbedak" class = "col-sm-2 control-label">Merk Bedak :</label>
            <div class = "col-sm-8 ">
                <input name="merkbedak" type = "text" class = "form-control" id = "merkbedak"
                    placeholder = "Masukkan Merk Bedak">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "stockbedak" class = "col-sm-2 control-label">Stock Bedak :</label>
            <div class = "col-sm-8 ">
                <input name="stockbedak" type = "number" class = "form-control" id = "stockbedak"
                    placeholder = "Masukkan Stock Bedak">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "tersedia" class = "col-sm-2 control-label">Tersedia :</label>
            <div class = "col-sm-8 ">
                <input name="tersedia" type = "text" class = "form-control" id = "tersedia"
                    placeholder = "Ketik 1 Jika Tersedia / Ketik 0 Jika Tersedia">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
