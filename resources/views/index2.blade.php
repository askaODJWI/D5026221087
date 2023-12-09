@extends('master3')
@section('title', 'Database Nilai Kuliah')

@section('judul_halaman')
    {{-- <a href="/nilaikuliah/tambah"> + Tambah Data Baru</a> --}}
    <form action="/nilaikuliah/tambah" method="get" class="form-horizontal">
        <input type="submit" value="Tambah Data" class="btn btn-primary">
    </form>

    <br />
    <br />
@endsection

@section('konten')
    {{-- <p>Cari Data Pegawai :</p>
    <form action="/pegawai/cari" method="GET">
        <input class="form form-control" type="text" name="cari" placeholder="Cari Pegawai Berdasarkan Nama..."
            value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form> --}}
    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $nk)
            <tr>
                <td>{{ $nk->ID }}</td>
                <td>{{ $nk->NRP }}</td>
                <td>{{ $nk->NilaiAngka }}</td>
                <td>{{ $nk->SKS }}</td>
                {{-- <td>
                    <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
                    |
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td> --}}
                <td>
                    @if ($nk->NilaiAngka <= 40)
                        D
                    @elseif ($nk->NilaiAngka >= 41 && $nk->NilaiAngka <= 60)
                        C
                    @elseif ($nk->NilaiAngka >= 61 && $nk->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>
                    {{ $nk->NilaiAngka * $nk->SKS }}
                </td>
            </tr>
        @endforeach
    </table>
    {{-- {{ $pegawai->links() }} --}}

@endsection
