@extends('app')

@section('title')
    Halaman Home
@endsection

@section('content')
    <div style="min-height: 100vh; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
        
        <!-- Background Decorations -->
        <div style="position: absolute; top: 10%; left: 10%; width: 200px; height: 200px; background: rgba(255,255,255,0.05); border-radius: 50%; animation: float 8s ease-in-out infinite;"></div>
        <div style="position: absolute; top: 60%; right: 15%; width: 150px; height: 150px; background: rgba(255,255,255,0.08); border-radius: 50%; animation: float 6s ease-in-out infinite reverse;"></div>
        <div style="position: absolute; bottom: 20%; left: 20%; width: 100px; height: 100px; background: rgba(255,255,255,0.06); border-radius: 50%; animation: float 10s ease-in-out infinite;"></div>
        
        <!-- Main Content -->
        <div style="padding: 4rem 2rem; display: flex; align-items: center; justify-content: center; min-height: 100vh; position: relative; z-index: 2;">
            <div style="text-align: center; max-width: 800px;">
                
                <!-- Main Hero Section -->
                <div style="margin-bottom: 3rem;">
                    <h1 style="color: white; font-size: 4rem; font-weight: 800; margin-bottom: 1rem; text-shadow: 2px 2px 8px rgba(0,0,0,0.3); letter-spacing: -2px; animation: slideInUp 1s ease-out;">
                        🚗 <span style="background: linear-gradient(45deg, #fff, #a29bfe); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">AutoManager</span>
                    </h1>
                    <div style="height: 4px; width: 120px; background: linear-gradient(45deg, #00b894, #00cec9); margin: 0 auto 2rem auto; border-radius: 2px; animation: slideInUp 1s ease-out 0.3s both;"></div>
                </div>
                
                <!-- Welcome Message Card -->
                <div style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 2.5rem; margin-bottom: 3rem; box-shadow: 0 25px 50px rgba(0,0,0,0.2); animation: slideInUp 1s ease-out 0.6s both;">
                    <div style="font-size: 3rem; margin-bottom: 1rem;">👋</div>
                    <h2 style="color: #2d3436; font-size: 2rem; font-weight: 700; margin-bottom: 1rem; letter-spacing: -0.5px;">{{ $data }}</h2>
                    <p style="color: #636e72; font-size: 1.2rem; margin-bottom: 1.5rem; line-height: 1.6;">Kelola data mobil Anda dengan mudah dan elegan. Sistem manajemen mobil yang modern dan user-friendly.</p>
                    
                    <!-- Stats Section -->
                    <div style="display: flex; justify-content: center; gap: 2rem; margin-top: 2rem; flex-wrap: wrap;">
                        <div style="text-align: center; min-width: 120px;">
                            <div style="background: linear-gradient(45deg, #6c5ce7, #a29bfe); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 0.5rem auto; font-size: 1.5rem; font-weight: bold;">{{ $number }}</div>
                            <p style="color: #636e72; margin: 0; font-weight: 500;">Fitur Utama</p>
                        </div>
                        <div style="text-align: center; min-width: 120px;">
                            <div style="background: linear-gradient(45deg, #00b894, #00cec9); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 0.5rem auto; font-size: 1.5rem; font-weight: bold;">∞</div>
                            <p style="color: #636e72; margin: 0; font-weight: 500;">Data Tak Terbatas</p>
                        </div>
                        <div style="text-align: center; min-width: 120px;">
                            <div style="background: linear-gradient(45deg, #e17055, #fd79a8); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 0.5rem auto; font-size: 1.5rem; font-weight: bold;">⚡</div>
                            <p style="color: #636e72; margin: 0; font-weight: 500;">Akses Cepat</p>
                        </div>
                    </div>
                </div>
                
                <!-- Features Grid -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                    
                    <!-- Feature 1 -->
                    <div style="background: rgba(255, 255, 255, 0.1); border-radius: 15px; padding: 2rem; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s ease; animation: slideInUp 1s ease-out 0.9s both;"
                         onmouseover="this.style.transform='translateY(-10px)'; this.style.background='rgba(255, 255, 255, 0.15)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.2)'"
                         onmouseout="this.style.transform='translateY(0px)'; this.style.background='rgba(255, 255, 255, 0.1)'; this.style.boxShadow='none'">
                        <div style="font-size: 3rem; margin-bottom: 1rem;">🚙</div>
                        <h3 style="color: white; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">Kelola Data Mobil</h3>
                        <p style="color: rgba(255,255,255,0.8); line-height: 1.5; margin: 0;">Tambah, edit, dan kelola informasi mobil Anda dengan interface yang intuitif</p>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div style="background: rgba(255, 255, 255, 0.1); border-radius: 15px; padding: 2rem; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s ease; animation: slideInUp 1s ease-out 1.2s both;"
                         onmouseover="this.style.transform='translateY(-10px)'; this.style.background='rgba(255, 255, 255, 0.15)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.2)'"
                         onmouseout="this.style.transform='translateY(0px)'; this.style.background='rgba(255, 255, 255, 0.1)'; this.style.boxShadow='none'">
                        <div style="font-size: 3rem; margin-bottom: 1rem;">📊</div>
                        <h3 style="color: white; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">Tampilan Elegan</h3>
                        <p style="color: rgba(255,255,255,0.8); line-height: 1.5; margin: 0;">Desain modern dan responsif untuk pengalaman pengguna yang optimal</p>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div style="background: rgba(255, 255, 255, 0.1); border-radius: 15px; padding: 2rem; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); transition: all 0.3s ease; animation: slideInUp 1s ease-out 1.5s both;"
                         onmouseover="this.style.transform='translateY(-10px)'; this.style.background='rgba(255, 255, 255, 0.15)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.2)'"
                         onmouseout="this.style.transform='translateY(0px)'; this.style.background='rgba(255, 255, 255, 0.1)'; this.style.boxShadow='none'">
                        <div style="font-size: 3rem; margin-bottom: 1rem;">⚙️</div>
                        <h3 style="color: white; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">Mudah Digunakan</h3>
                        <p style="color: rgba(255,255,255,0.8); line-height: 1.5; margin: 0;">Interface yang user-friendly dengan navigasi yang sederhana dan jelas</p>
                    </div>
                </div>
                
                <!-- Call to Action -->
                <div style="animation: slideInUp 1s ease-out 1.8s both;">
                    <a href="{{ route('mobil') }}" style="text-decoration: none;">
                        <button style="background: linear-gradient(45deg, #e17055, #fd79a8); color: white; border: none; padding: 1.2rem 3rem; border-radius: 50px; font-size: 1.2rem; font-weight: 600; cursor: pointer; box-shadow: 0 10px 30px rgba(225, 112, 85, 0.4); transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden;"
                                onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 15px 40px rgba(225, 112, 85, 0.5)'"
                                onmouseout="this.style.transform='translateY(0px)'; this.style.boxShadow='0 10px 30px rgba(225, 112, 85, 0.4)'">
                            🚗 Mulai Kelola Mobil
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem !important;
            }
            h2 {
                font-size: 1.5rem !important;
            }
            div[style*="padding: 4rem 2rem"] {
                padding: 2rem 1rem !important;
            }
            div[style*="grid-template-columns"] {
                grid-template-columns: 1fr !important;
            }
            div[style*="gap: 2rem"] {
                gap: 1rem !important;
            }
        }
    </style>
@endsection