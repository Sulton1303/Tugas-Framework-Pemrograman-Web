@extends('app')

@section('content')
    <h1>Selamat Datang di Halaman Daftar Buku</h1>
    <div>
        <a href="/tambah-buku"><button>Tambah Buku</button></a>
    </div>
    <table border="1">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Opsi</th>
            </tr>
        </thead>

        <tbody>
            @if ($data == null)
                <td>Tidak Ada Data Yang Ditampilkan</td>
            @else
                @foreach ($data as $buku)
                <tr>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->pengarang }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>
                        <a href="/edit-buku/{{ $buku->id }}"><button>Edit</button></a>
                        <form action="/hapus-buku/{{ $buku->id }}" method="POST" style="display:inline;"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection