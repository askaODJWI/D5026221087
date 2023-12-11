@extends('masterEAS')

@section('konten')
    @foreach ($kategori as $k)
        <h3>Anda telah memilih Kategori dengan Kode : {{ $k->ID }}</h3>
    @endforeach
@endsection
