@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')
    <h2>www.malasngoding.com</h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br />
    <br />
@endsection

@section('konten')
    <p>Cari Data Pegawai :</p>
    <form action="/pegawai/cari" method="GET">
        <input class="form form-control" type="text" name="cari" placeholder="Cari Pegawai Berdasarkan Nama..."
            value="{{ old('cari') }}">
        <input type="submit" value="Cari" class="btn btn-primary">
    </form>
    <br>
    <table class="table table-bordered table-striped table-hover">
        <colgroup>
            <col style="width: 20%;">
            <col style="width: 20%;">
            <col style="width: 10%;">
            <col style="width: 25%;">
            <col style="width: 25%;">
        </colgroup>
        <thead class="text-center">
            <tr>
                <th style="border: 1px solid #dee2e6;">Nama</th>
                <th style="border: 1px solid #dee2e6;">Jabatan</th>
                <th style="border: 1px solid #dee2e6;">Umur</th>
                <th style="border: 1px solid #dee2e6;">Alamat</th>
                <th style="border: 1px solid #dee2e6;">Opsi</th>
            </tr>
        </thead>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td class="text-center">
                    <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
                    |
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }}

@endsection
