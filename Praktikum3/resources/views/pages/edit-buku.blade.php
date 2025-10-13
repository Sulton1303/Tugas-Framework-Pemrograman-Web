@extends('layouts.app')

@section('content')
    <div style="padding: 30px; display: flex; justify-content: center; align-items: center; min-height: calc(100vh - 100px);">
        <div style="background-color: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 100%; max-width: 500px;">
            <h1 style="text-align: center; color: #1a73e8; margin-bottom: 10px; font-size: 28px;">Edit Buku</h1>
            <p style="text-align: center; color: #666; margin-bottom: 30px; font-size: 14px;">Perbarui data buku</p>

            <form action="/update-buku/{{$buku->id}}" method="post">
                @csrf
                @method('PUT')
                <div style="margin-bottom: 20px;">
                    <label for="judul" style="display: block; margin-bottom: 8px; color: #333; font-weight: 500; font-size: 14px;">Judul:</label>
                    <input type="text" id="judul" name="judul" value="{{$buku->judul}}" required 
                        style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; transition: border-color 0.3s;"
                        onfocus="this.style.borderColor='#1a73e8'; this.style.outline='none';"
                        onblur="this.style.borderColor='#ddd';"
                        placeholder="Masukkan judul buku">
                </div>
                <div style="margin-bottom: 20px;">
                    <label for="pengarang" style="display: block; margin-bottom: 8px; color: #333; font-weight: 500; font-size: 14px;">Pengarang:</label>
                    <input type="text" id="pengarang" name="pengarang" value="{{$buku->pengarang}}" required 
                        style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; transition: border-color 0.3s;"
                        onfocus="this.style.borderColor='#1a73e8'; this.style.outline='none';"
                        onblur="this.style.borderColor='#ddd';"
                        placeholder="Masukkan nama pengarang">
                </div>
                <div style="margin-bottom: 25px;">
                    <label for="penerbit" style="display: block; margin-bottom: 8px; color: #333; font-weight: 500; font-size: 14px;">Penerbit:</label>
                    <input type="text" id="penerbit" name="penerbit" value="{{$buku->penerbit}}" required 
                        style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; transition: border-color 0.3s;"
                        onfocus="this.style.borderColor='#1a73e8'; this.style.outline='none';"
                        onblur="this.style.borderColor='#ddd';"
                        placeholder="Masukkan nama penerbit">
                </div>
                <div style="display: flex; gap: 10px;">
                    <button type="submit" 
                        style="flex: 1; padding: 12px; background-color: #ffc107; color: #333; border: none; border-radius: 6px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background-color 0.3s;"
                        onmouseover="this.style.backgroundColor='#e0a800';"
                        onmouseout="this.style.backgroundColor='#ffc107';">
                        Ubah
                    </button>
                    <a href="/buku" style="flex: 1; text-decoration: none;">
                        <button type="button" 
                            style="width: 100%; padding: 12px; background-color: #6c757d; color: white; border: none; border-radius: 6px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background-color 0.3s;"
                            onmouseover="this.style.backgroundColor='#5a6268';"
                            onmouseout="this.style.backgroundColor='#6c757d';">
                            Batal
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection