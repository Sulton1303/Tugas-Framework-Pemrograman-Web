@extends('app')

@section('content')
    <div style="min-height: 100vh; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 2rem; display: flex; align-items: center; justify-content: center;">
        <div style="max-width: 600px; width: 100%; background: rgba(255, 255, 255, 0.95); border-radius: 20px; box-shadow: 0 25px 50px rgba(0,0,0,0.2); overflow: hidden;">
            
            <div style="background: linear-gradient(45deg, #2c3e50, #34495e); padding: 2rem; text-align: center; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -30px; left: -30px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; animation: pulse 4s ease-in-out infinite;"></div>
                <h1 style="color: #fff; font-size: 2.5rem; margin: 0; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); letter-spacing: -1px;">🚗 Tambah Mobil</h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1rem; margin: 0.5rem 0 0 0;">Lengkapi data mobil baru Anda</p>
            </div>
            
            <div style="padding: 2.5rem;">
                
                @if($errors->any())
                    <div style="background: linear-gradient(45deg, #e74c3c, #fd79a8); color: white; padding: 1rem; border-radius: 10px; margin-bottom: 2rem; box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);">
                        <h4 style="margin: 0 0 0.5rem 0; font-weight: 600;">⚠️ Terjadi Kesalahan:</h4>
                        <ul style="margin: 0; padding-left: 1.5rem;">
                            @foreach($errors->all() as $error)
                                <li style="margin: 0.25rem 0;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('error'))
                    <div style="background: linear-gradient(45deg, #e74c3c, #c0392b); color: white; padding: 1rem; border-radius: 10px; margin-bottom: 2rem; box-shadow: 0 4px 15px rgba(231, 76, 60, 0.3);">
                        <h4 style="margin: 0 0 0.5rem 0; font-weight: 600;">❌ Error:</h4>
                        <p style="margin: 0;">{{ session('error') }}</p>
                    </div>
                @endif
                
                <form action="{{ route('mobil.simpan') }}" method="POST">
                    @csrf
                    
                    <div style="margin-bottom: 1.8rem; position: relative;">
                        <label for="nama_mobil" style="display: block; margin-bottom: 0.5rem; color: #2d3436; font-weight: 600; font-size: 0.95rem; letter-spacing: 0.3px;">🚙 Nama Mobil</label>
                        <input type="text" 
                               id="nama_mobil" 
                               name="nama_mobil" 
                               value="{{ old('nama_mobil') }}" 
                               required
                               style="width: 100%; padding: 1rem 1.2rem; border: 2px solid #ddd; border-radius: 10px; font-size: 1rem; transition: all 0.3s ease; background: #f8f9fa; box-sizing: border-box;"
                               placeholder="Contoh: Toyota Avanza"
                               onfocus="this.style.border='2px solid #6c5ce7'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(108, 92, 231, 0.1)'"
                               onblur="this.style.border='2px solid #ddd'; this.style.background='#f8f9fa'; this.style.boxShadow='none'">
                    </div>
                    
                    <div style="margin-bottom: 1.8rem; position: relative;">
                        <label for="merk" style="display: block; margin-bottom: 0.5rem; color: #2d3436; font-weight: 600; font-size: 0.95rem; letter-spacing: 0.3px;">🏷️ Merk</label>
                        <input type="text" 
                               id="merk" 
                               name="merk" 
                               value="{{ old('merk') }}" 
                               required
                               style="width: 100%; padding: 1rem 1.2rem; border: 2px solid #ddd; border-radius: 10px; font-size: 1rem; transition: all 0.3s ease; background: #f8f9fa; box-sizing: border-box;"
                               placeholder="Contoh: Toyota"
                               onfocus="this.style.border='2px solid #00b894'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(0, 184, 148, 0.1)'"
                               onblur="this.style.border='2px solid #ddd'; this.style.background='#f8f9fa'; this.style.boxShadow='none'">
                    </div>
                    
                    <div style="margin-bottom: 2rem; position: relative;">
                        <label for="kapasitas_mesin" style="display: block; margin-bottom: 0.5rem; color: #2d3436; font-weight: 600; font-size: 0.95rem; letter-spacing: 0.3px;">⚙️ Kapasitas Mesin</label>
                        <input type="text" 
                               id="kapasitas_mesin" 
                               name="kapasitas_mesin" 
                               value="{{ old('kapasitas_mesin') }}" 
                               required
                               style="width: 100%; padding: 1rem 1.2rem; border: 2px solid #ddd; border-radius: 10px; font-size: 1rem; transition: all 0.3s ease; background: #f8f9fa; box-sizing: border-box;"
                               placeholder="Contoh: 1300cc"
                               onfocus="this.style.border='2px solid #fdcb6e'; this.style.background='white'; this.style.boxShadow='0 0 0 3px rgba(253, 203, 110, 0.1)'"
                               onblur="this.style.border='2px solid #ddd'; this.style.background='#f8f9fa'; this.style.boxShadow='none'">
                    </div>
                    
                    <div style="display: flex; gap: 1rem; justify-content: space-between;">
                        <a href="{{ route('mobil') }}" style="text-decoration: none; flex: 1;">
                            <button type="button" 
                                    style="width: 100%; padding: 1rem; border: 2px solid #ddd; background: white; color: #636e72; border-radius: 10px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease;"
                                    onmouseover="this.style.background='#f8f9fa'; this.style.borderColor='#bbb'; this.style.transform='translateY(-2px)'"
                                    onmouseout="this.style.background='white'; this.style.borderColor='#ddd'; this.style.transform='translateY(0px)'">
                                ← Kembali
                            </button>
                        </a>
                        <button type="submit" 
                                style="flex: 2; padding: 1rem; border: none; background: linear-gradient(45deg, #e17055, #fd79a8); color: white; border-radius: 10px; font-size: 1rem; font-weight: 600; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(225, 112, 85, 0.3);"
                                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(225, 112, 85, 0.4)'"
                                onmouseout="this.style.transform='translateY(0px)'; this.style.boxShadow='0 4px 15px rgba(225, 112, 85, 0.3)'">
                            💾 Simpan Data
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <style>
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.8; }
            50% { transform: scale(1.1); opacity: 1; }
        }
        
        @media (max-width: 768px) {
            div[style*="padding: 2rem"] {
                padding: 1rem !important;
            }
            h1 {
                font-size: 2rem !important;
            }
            div[style*="flex"] button {
                font-size: 0.9rem !important;
            }
        }
    </style>
@endsection