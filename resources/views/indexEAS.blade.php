@extends('masterEAS')
@section('title', 'Database Kategori')

@section('konten')
    <form action="/hasilcombo" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Nama">Pilih Kategori</label>
            <br>
            <select class="form-control" name="ID" id="Nama">
                @foreach ($kategori as $k)
                    <option value="{{ $k->ID }}">{{ $k->Nama }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="KIRIM" class="btn btn-primary">
    </form>
@endsection
