@extends('master4')

@section('konten')
    <h3>Lihat Data Bedak</h3>

    {{-- <a href="/pegawai"> Kembali</a> --}}
    @foreach ($bedak as $b)
        <div class="container border p-5 bg-light">
            <div class="row">
                <div class="col border">
                    <p class="align-middle">Empty Box</p>
                </div>
                <div class="col">
                    <p>Kode Bedak : {{ $b->kodebedak }}</p>
                    <p>Merk Bedak : {{ $b->merkbedak }}</p>
                    <p>Stock Bedak : {{ $b->stockbedak }}</p>
                    @if ($b->tersedia === '1')
                        <p>Tersedia : Iya</p>
                    @else
                        <p>Tersedia : Tidak</p>
                    @endif
                    <form action="/bedak" method="GET">
                        <input type="submit" value="OK" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection
