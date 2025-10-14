@extends('layouts.app')

@section('content')
    <div style="padding: 30px; max-width: 1200px; margin: 0 auto;">
        <div style="text-align: center; margin-bottom: 30px;">
            <h1 style="color: #333; font-size: 32px; margin-bottom: 10px;">Daftar Buku</h1>
            <p style="color: #666; font-size: 16px; margin-bottom: 20px;">Kelola koleksi buku perpustakaan</p>
            <a href="/tambah-buku" style="text-decoration: none;">
                <button style="padding: 12px 24px; background-color: #28a745; color: white; border: none; border-radius: 6px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background-color 0.3s;"
                    onmouseover="this.style.backgroundColor='#218838';"
                    onmouseout="this.style.backgroundColor='#28a745';">
                    + Tambah Buku
                </button>
            </a>
        </div>

        <div style="background-color: white; border-radius: 10px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); overflow: hidden;">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #1a73e8;">
                        <th style="padding: 15px; text-align: left; color: white; font-weight: 600; font-size: 14px; border-bottom: 2px solid #1557b0;">Judul</th>
                        <th style="padding: 15px; text-align: left; color: white; font-weight: 600; font-size: 14px; border-bottom: 2px solid #1557b0;">Pengarang</th>
                        <th style="padding: 15px; text-align: left; color: white; font-weight: 600; font-size: 14px; border-bottom: 2px solid #1557b0;">Penerbit</th>
                        <th style="padding: 15px; text-align: left; color: white; font-weight: 600; font-size: 14px; border-bottom: 2px solid #1557b0;">Kategori</th>
                        <th style="padding: 15px; text-align: center; color: white; font-weight: 600; font-size: 14px; border-bottom: 2px solid #1557b0; width: 200px;">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($data == 'null')
                        <tr>
                            <td colspan="4" style="padding: 40px; text-align: center; color: #999; font-size: 16px;">
                                Tidak ada data buku
                            </td>
                        </tr>
                    @else
                        @foreach ($data as $index => $buku)
                            <tr style="background-color: {{ $index % 2 == 0 ? '#f9f9f9' : 'white' }}; transition: background-color 0.2s;"
                                onmouseover="this.style.backgroundColor='#e3f2fd';"
                                onmouseout="this.style.backgroundColor='{{ $index % 2 == 0 ? '#f9f9f9' : 'white' }}';">
                                <td style="padding: 15px; color: #333; font-size: 14px; border-bottom: 1px solid #eee;">{{ $buku->judul }}</td>
                                <td style="padding: 15px; color: #666; font-size: 14px; border-bottom: 1px solid #eee;">{{ $buku->pengarang }}</td>
                                <td style="padding: 15px; color: #666; font-size: 14px; border-bottom: 1px solid #eee;">{{ $buku->penerbit }}</td>
                                <td style="padding: 15px; color: #666; font-size: 14px; border-bottom: 1px solid #eee;">{{ $buku->kategoriBuku ? $buku->kategoriBuku->nama_kategori : 'Tidak ada kategori' }}</td>
                                <td style="padding: 15px; text-align: center; border-bottom: 1px solid #eee;">
                                    <a href="/edit-buku/{{ $buku->id }}" style="text-decoration: none; display: inline-block; margin-right: 8px;">
                                        <button style="padding: 8px 16px; background-color: #ffc107; color: #333; border: none; border-radius: 4px; font-size: 14px; font-weight: 600; cursor: pointer; transition: background-color 0.3s;"
                                            onmouseover="this.style.backgroundColor='#e0a800';"
                                            onmouseout="this.style.backgroundColor='#ffc107';">
                                            Edit
                                        </button>
                                    </a>
                                    <form action="/hapus-buku/{{ $buku->id }}" method="post" style="display: inline-block;"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                            style="padding: 8px 16px; background-color: #dc3545; color: white; border: none; border-radius: 4px; font-size: 14px; font-weight: 600; cursor: pointer; transition: background-color 0.3s;"
                                            onmouseover="this.style.backgroundColor='#c82333';"
                                            onmouseout="this.style.backgroundColor='#dc3545';">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection