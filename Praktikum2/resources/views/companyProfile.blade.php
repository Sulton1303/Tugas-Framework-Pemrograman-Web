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
                
                @if(isset($video))
                <div style="margin-top: 3rem; background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2.5rem; box-shadow: 0 25px 50px rgba(0,0,0,0.2); text-align: center;">
                    <h3 style="color: #2d3436; font-size: 2rem; font-weight: 700; margin-bottom: 2rem;">🎬 Video Showcase</h3>
                    <div style="position: relative; max-width: 800px; margin: 0 auto;">
                        <video style="width: 100%; border-radius: 15px; box-shadow: 0 15px 40px rgba(0,0,0,0.3);" controls poster="" preload="metadata">
                            <source src="{{ $video }}" type="video/mp4">
                            <p style="color: #636e72; padding: 2rem; background: #f8f9fa; border-radius: 10px;">Browser Anda tidak mendukung tag video HTML5.</p>
                        </video>
                    </div>
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