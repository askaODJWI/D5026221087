@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Lihat Data Pegawai</h3>

    {{-- <a href="/pegawai"> Kembali</a> --}}
    @foreach ($pegawai as $p)
        <div class="container border p-5 bg-light">
            <div class="row">
                <div class="col border">
                    <p class="align-middle">Empty Box</p>
                </div>
                <div class="col">
                    <p>Nama : {{ $p->pegawai_nama }}</p>
                    <p>Jabatan: {{ $p->pegawai_jabatan }}</p>
                    <p>Umur : {{ $p->pegawai_umur }}</p>
                    <p>Alamat : {{ $p->pegawai_alamat }}</p>
                    <form action="/pegawai" method="GET">
                        <input type="submit" value="OK" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center border">
            <div class="p-2 border">Empty Box</div>
            <div class="p-2">
                <p>Nama : {{ $p->pegawai_nama }}</p>
                <p>Jabatan: {{ $p->pegawai_jabatan }}</p>
                <p>Umur : {{ $p->pegawai_umur }}</p>
                <p>Alamat : {{ $p->pegawai_alamat }}</p>
                <form action="/pegawai" method="GET">
                    <input type="submit" value="OK" class="btn btn-primary">
                </form>
            </div>
        </div> --}}
        {{-- <div class="card-deck" style="width: 100%">
            <div class="card bg-primary">
                <div class="card-body text-center">
                    <p class="card-text">Some text inside the first card</p> --}}
        {{-- <p class="card-text">Some more text to increase the height</p>
                    <p class="card-text">Some more text to increase the height</p>
                    <p class="card-text">Some more text to increase the height</p> --}}
        {{-- </div>
            </div>
            <div class="card bg-warning">
                <div class="card-body text-center">
                    <p class="card-text">Some text inside the second card</p>
                    <p class="card-text">Some text inside the second card</p>
                    <p class="card-text">Some text inside the second card</p>
                </div>
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col" style="background-color:lavender;">.col</div>
            <div class="col" style="background-color:orange;" style="text-align: center"> --}}
        {{-- <div class = "form-group">
                    <label for = "nama" class = "col-sm-2 control-label">Nama</label>
                    <div class = "col-sm-8 ">
                        <input name="nama" type = "text" class = "form-control" id = "nama"
                            placeholder = "Masukkan Nama Pegawai" value="{{ $p->pegawai_nama }}">
                    </div>
                </div> --}}
        {{-- <ul style="list-style: none">
                    <li>Nama: {{ $p->pegawai_nama }}</li>
                    <li>Jabatan: {{ $p->pegawai_jabatan }}</li>
                    <li>Umur: {{ $p->pegawai_umur }}</li>
                    <li>Alamat: {{ $p->pegawai_alamat }}</li>
                </ul> --}}
        {{-- Nama: {{ $p->pegawai_nama }}
                <br>
                Jabatan: {{ $p->pegawai_jabatan }}
                <br>
                Umur: {{ $p->pegawai_umur }}
                <br>
                Alamat: {{ $p->pegawai_alamat }} --}}

        {{-- </div>
        </div> --}}
    @endforeach
    {{-- <div class="card" style="width:400px">
        <div class="container"></div>
        <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="#" class="btn btn-primary">See Profile</a>
        </div>
    </div> --}}
@endsection
