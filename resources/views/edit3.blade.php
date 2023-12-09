@extends('master4')

@section('konten')
    <h3>Edit Data Bedak</h3>

    <form action="/bedak" method="get" class="form-horizontal">
        <input type="submit" value="Kembali" class="btn btn-primary">
    </form>

    <br />
    <br />

    @foreach ($bedak as $b)
        <form action="/bedak/update" method="post" class="form-horizontal">
            {{ csrf_field() }}
            {{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> --}}
            <input type="hidden" name="kodebedak" value="{{ $b->kodebedak }}">
            <div class = "form-group row">
                <label for = "merkbedak" class = "col-sm-2 control-label">Merk Bedak :</label>
                <div class = "col-sm-8 ">
                    <input name="merkbedak" type = "text" class = "form-control" id = "merkbedak"
                        placeholder = "Masukkan Merk Bedak" value="{{ $b->merkbedak }}">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "stockbedak" class = "col-sm-2 control-label">Stock Bedak :</label>
                <div class = "col-sm-8 ">
                    <input name="stockbedak" type = "number" class = "form-control" id = "stockbedak"
                        placeholder = "Masukkan Stock Bedak" value="{{ $b->stockbedak }}">
                </div>
            </div>
            <div class = "form-group row">
                <label for = "tersedia" class = "col-sm-2 control-label">Tersedia :</label>
                <div class = "col-sm-8 ">
                    <input name="tersedia" type = "number" class = "form-control" id = "tersedia"
                        placeholder = "Ketik 1 Jika Tersedia / Ketik 0 Jika Tersedia" value="{{ $b->tersedia }}">
                </div>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
    @endforeach
@endsection
