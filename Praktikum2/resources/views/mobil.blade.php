@extends('app')

@section('content')
    <div style="min-height: 100vh; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 2rem;">
        <div style="max-width: 1200px; margin: 0 auto; background: rgba(255, 255, 255, 0.95); border-radius: 20px; box-shadow: 0 25px 50px rgba(0,0,0,0.2); overflow: hidden;">
            
            <div style="background: linear-gradient(45deg, #2c3e50, #34495e); padding: 2rem; text-align: center; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: rgba(255,255,255,0.1); border-radius: 50%; animation: float 6s ease-in-out infinite;"></div>
                <h1 style="color: #fff; font-size: 2.8rem; margin: 0; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3); letter-spacing: -1px;">🚗 Koleksi Mobil</h1>
                <p style="color: rgba(255,255,255,0.8); font-size: 1.1rem; margin: 0.5rem 0 0 0;">Kelola data mobil dengan mudah dan elegan</p>
            </div>
            
            @if(session('success'))
                <div style="background: linear-gradient(45deg, #00b894, #00cec9); color: white; padding: 1rem 2rem; margin: 0; text-align: center; font-weight: 500; box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);">
                    ✅ {{ session('success') }}
                </div>
            @endif
            
            <div style="padding: 2rem;">
                
                <div style="text-align: center; margin-bottom: 2rem;">
                    <a href="{{ route('mobil.tambah') }}" style="text-decoration: none;">
                        <button style="background: linear-gradient(45deg, #e17055, #fd79a8); color: white; border: none; padding: 1rem 2rem; border-radius: 50px; font-size: 1.1rem; font-weight: 600; cursor: pointer; box-shadow: 0 8px 25px rgba(225, 112, 85, 0.3); transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden;">
                            <span style="position: relative; z-index: 2;">➕ Tambah Mobil Baru</span>
                            <div style="position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent); transition: left 0.5s;"></div>
                        </button>
                    </a>
                </div>
                
                @if($mobils->count() > 0)
                <div style="overflow-x: auto; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <table style="width: 100%; border-collapse: collapse; background: white; border-radius: 15px; overflow: hidden; min-width: 600px;">
                        <thead>
                            <tr style="background: linear-gradient(45deg, #6c5ce7, #a29bfe); color: white;">
                                <th style="padding: 1.5rem 1rem; text-align: left; font-weight: 600; font-size: 1rem; letter-spacing: 0.5px; border: none; position: relative;">
                                    🚙 Nama Mobil
                                </th>
                                <th style="padding: 1.5rem 1rem; text-align: left; font-weight: 600; font-size: 1rem; letter-spacing: 0.5px; border: none;">
                                    🏷️ Merk
                                </th>
                                <th style="padding: 1.5rem 1rem; text-align: left; font-weight: 600; font-size: 1rem; letter-spacing: 0.5px; border: none;">
                                    ⚙️ Kapasitas Mesin
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mobils as $index => $mobil)
                            <tr style="background: {{ $index % 2 == 0 ? '#f8f9fa' : 'white' }}; transition: all 0.3s ease; border-bottom: 1px solid #e9ecef;" 
                                onmouseover="this.style.background='#e3f2fd'; this.style.transform='scale(1.01)'; this.style.boxShadow='0 4px 15px rgba(0,0,0,0.1)'" 
                                onmouseout="this.style.background='{{ $index % 2 == 0 ? '#f8f9fa' : 'white' }}'; this.style.transform='scale(1)'; this.style.boxShadow='none'">
                                <td style="padding: 1.2rem 1rem; border: none; font-weight: 500; color: #2d3436;">
                                    {{ $mobil->nama_mobil }}
                                </td>
                                <td style="padding: 1.2rem 1rem; border: none; color: #636e72; font-weight: 500;">
                                    <span style="background: linear-gradient(45deg, #00b894, #00cec9); color: white; padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">
                                        {{ $mobil->merk }}
                                    </span>
                                </td>
                                <td style="padding: 1.2rem 1rem; border: none; color: #2d3436; font-weight: 500;">
                                    <span style="background: linear-gradient(45deg, #fdcb6e, #e17055); color: white; padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.85rem; font-weight: 600;">
                                        {{ $mobil->kapasitas_mesin }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div style="text-align: center; padding: 3rem; background: #f8f9fa; border-radius: 15px; border: 2px dashed #ddd;">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">🚗</div>
                    <h3 style="color: #636e72; margin-bottom: 0.5rem; font-weight: 600;">Belum Ada Data Mobil</h3>
                    <p style="color: #74b9ff; margin: 0;">Klik tombol "Tambah Mobil Baru" untuk menambahkan data pertama</p>
                </div>
                @endif
                
            </div>
        </div>
    </div>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        button:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 12px 35px rgba(225, 112, 85, 0.4) !important;
        }
        
        button:hover div {
            left: 100% !important;
        }
        
        button:active {
            transform: translateY(0px) !important;
        }
        
        @media (max-width: 768px) {
            div[style*="padding: 2rem"] {
                padding: 1rem !important;
            }
            h1 {
                font-size: 2rem !important;
            }
        }
    </style>
@endsection