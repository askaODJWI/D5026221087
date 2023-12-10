@extends('master4')
@section('title', 'Database Bedak')

@section('judul_halaman')
    {{-- <a href="/nilaikuliah/tambah"> + Tambah Data Baru</a> --}}
    <form action="/bedak/tambah" method="get" class="form-horizontal">
        <input type="submit" value="Tambah Data" class="btn btn-primary">
    </form>
    <br />
    <br>
@endsection

@section('konten')
    <p>Cari Data Bedak :</p>
    <form action="/bedak/cari" method="GET">
        <input class="form form-control" type="text" name="cari" placeholder="Masukkan Merk Bedak"
            value="{{ old('cari') }}">
        <input type="submit" value="Cari" class="btn btn-primary">
    </form>
    <br>
    <table class="table table-bordered table-striped table-hover">
        <colgroup>
            <col style="width: 25%;">
            <col style="width: 25%;">
            <col style="width: 25%;">
            <col style="width: 25%;">
        </colgroup>
        <thead class="text-center">
            <tr>
                {{-- <th>Kode Bedak</th> --}}
                <th style="border: 1px solid #dee2e6;">Merk Bedak</th>
                <th style="border: 1px solid #dee2e6;">Stock Bedak</th>
                <th style="border: 1px solid #dee2e6;">Tersedia</th>
                <th style="border: 1px solid #dee2e6;">Opsi</th>
            </tr>
        </thead>
        @foreach ($bedak as $b)
            <tr>
                {{-- <td>{{ $b->kodebedak }}</td> --}}
                <td>{{ $b->merkbedak }}</td>
                <td class="text-center">{{ $b->stockbedak }}</td>
                <td class="text-center">
                    @if ($b->tersedia === '1')
                        Iya
                    @else
                        Tidak
                    @endif
                </td>
                <td class="text-center">
                    <a href="/bedak/view/{{ $b->kodebedak }}" class="btn btn-success">View</a>
                    |
                    <a href="/bedak/edit/{{ $b->kodebedak }}" class="btn btn-warning">Edit</a>
                    |
                    {{-- <a href="/bedak/hapus/{{ $b->kodebedak }}" class="btn btn-danger">Hapus</a> --}}
                    <a href="/bedak/hapus/{{ $b->kodebedak }} " class="btn btn-danger"
                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{-- {{ $pegawai->links() }} --}}

@endsection
