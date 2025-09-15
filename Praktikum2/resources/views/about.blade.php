@extends('app')

@section('content')
    <div style="min-height: 100vh; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); position: relative; overflow: hidden;">
        
        <!-- Background Decorations -->
        <div style="position: absolute; top: 15%; right: 10%; width: 300px; height: 300px; background: rgba(255,255,255,0.03); border-radius: 50%; animation: rotate 20s linear infinite;"></div>
        <div style="position: absolute; bottom: 10%; left: 15%; width: 200px; height: 200px; background: rgba(255,255,255,0.05); border-radius: 50%; animation: rotate 15s linear infinite reverse;"></div>
        
        <!-- Main Content -->
        <div style="padding: 4rem 2rem; display: flex; align-items: center; justify-content: center; min-height: 100vh; position: relative; z-index: 2;">
            <div style="max-width: 900px; width: 100%;">
                
                <!-- Header Section -->
                <div style="text-align: center; margin-bottom: 4rem; animation: fadeInDown 1s ease-out;">
                    <h1 style="color: white; font-size: 3.5rem; font-weight: 800; margin-bottom: 1rem; text-shadow: 2px 2px 8px rgba(0,0,0,0.3); letter-spacing: -1px;">
                        ℹ️ Tentang <span style="background: linear-gradient(45deg, #00b894, #00cec9); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">AutoManager</span>
                    </h1>
                    <div style="height: 4px; width: 100px; background: linear-gradient(45deg, #00b894, #00cec9); margin: 0 auto; border-radius: 2px;"></div>
                </div>
                
                <!-- About Content Card -->
                <div style="background: rgba(255, 255, 255, 0.95); border-radius: 20px; padding: 3rem; box-shadow: 0 25px 50px rgba(0,0,0,0.2); margin-bottom: 3rem; animation: fadeInUp 1s ease-out 0.3s both;">
                    
                    <!-- Main Description -->
                    <div style="text-align: center; margin-bottom: 3rem;">
                        <div style="font-size: 4rem; margin-bottom: 1.5rem;">🚗</div>
                        <h2 style="color: #2d3436; font-size: 2rem; font-weight: 700; margin-bottom: 1.5rem; letter-spacing: -0.5px;">Sistem Manajemen Mobil Modern</h2>
                        <p style="color: #636e72; font-size: 1.2rem; line-height: 1.7; margin-bottom: 2rem;">
                            AutoManager adalah aplikasi web modern yang dirancang khusus untuk membantu Anda mengelola data mobil dengan mudah, efisien, dan elegan. Dengan interface yang intuitif dan desain yang responsif, mengelola koleksi mobil Anda tidak pernah semudah ini.
                        </p>
                    </div>
                    
                    <!-- Features Grid -->
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
                        
                        <!-- Feature Item 1 -->
                        <div style="text-align: center; padding: 1.5rem; border-radius: 15px; background: linear-gradient(45deg, #f8f9fa, #e9ecef); transition: all 0.3s ease;"
                             onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'"
                             onmouseout="this.style.transform='translateY(0px)'; this.style.boxShadow='none'">
                            <div style="font-size: 2.5rem; margin-bottom: 1rem; color: #6c5ce7;">📝</div>
                            <h3 style="color: #2d3436; font-size: 1.2rem; font-weight: 600; margin-bottom: 0.8rem;">Kelola Data</h3>
                            <p style="color: #636e72; font-size: 0.95rem; line-height: 1.5; margin: 0;">Tambah, edit, dan hapus data mobil dengan interface yang user-friendly</p>
                        </div>
                        
                        <!-- Feature Item 2 -->
                        <div style="text-align: center; padding: 1.5rem; border-radius: 15px; background: linear-gradient(45deg, #f8f9fa, #e9ecef); transition: all 0.3s ease;"
                             onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'"
                             onmouseout="this.style.transform='translateY(0px)'; this.style.boxShadow='none'">
                            <div style="font-size: 2.5rem; margin-bottom: 1rem; color: #00b894;">📱</div>
                            <h3 style="color: #2d3436; font-size: 1.2rem; font-weight: 600; margin-bottom: 0.8rem;">Responsif</h3>
                            <p style="color: #636e72; font-size: 0.95rem; line-height: 1.5; margin: 0;">Desain yang responsif untuk pengalaman optimal di semua perangkat</p>
                        </div>
                        
                        <!-- Feature Item 3 -->
                        <div style="text-align: center; padding: 1.5rem; border-radius: 15px; background: linear-gradient(45deg, #f8f9fa, #e9ecef); transition: all 0.3s ease;"
                             onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'"
                             onmouseout="this.style.transform='translateY(0px)'; this.style.boxShadow='none'">
                            <div style="font-size: 2.5rem; margin-bottom: 1rem; color: #e17055;">⚡</div>
                            <h3 style="color: #2d3436; font-size: 1.2rem; font-weight: 600; margin-bottom: 0.8rem;">Performa Cepat</h3>
                            <p style="color: #636e72; font-size: 0.95rem; line-height: 1.5; margin: 0;">Aplikasi yang cepat dan ringan dengan performa yang optimal</p>
                        </div>
                    </div>
                    
                    <!-- Technology Stack -->
                    <div style="border-top: 2px solid #e9ecef; padding-top: 2rem;">
                        <h3 style="color: #2d3436; font-size: 1.5rem; font-weight: 600; text-align: center; margin-bottom: 2rem;">Teknologi yang Digunakan</h3>
                        
                        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem;">
                            <span style="background: linear-gradient(45deg, #e74c3c, #c0392b); color: white; padding: 0.6rem 1.2rem; border-radius: 25px; font-weight: 600; font-size: 0.9rem;">Laravel</span>
                            <span style="background: linear-gradient(45deg, #3498db, #2980b9); color: white; padding: 0.6rem 1.2rem; border-radius: 25px; font-weight: 600; font-size: 0.9rem;">PHP</span>
                            <span style="background: linear-gradient(45deg, #f39c12, #e67e22); color: white; padding: 0.6rem 1.2rem; border-radius: 25px; font-weight: 600; font-size: 0.9rem;">MySQL</span>
                            <span style="background: linear-gradient(45deg, #e67e22, #d35400); color: white; padding: 0.6rem 1.2rem; border-radius: 25px; font-weight: 600; font-size: 0.9rem;">HTML5</span>
                            <span style="background: linear-gradient(45deg, #3498db, #2980b9); color: white; padding: 0.6rem 1.2rem; border-radius: 25px; font-weight: 600; font-size: 0.9rem;">CSS3</span>
                            <span style="background: linear-gradient(45deg, #f1c40f, #f39c12); color: white; padding: 0.6rem 1.2rem; border-radius: 25px; font-weight: 600; font-size: 0.9rem;">JavaScript</span>
                        </div>
                    </div>
                </div>
                
                <!-- Developer Info -->
                <div style="background: rgba(255, 255, 255, 0.1); border-radius: 15px; padding: 2rem; text-align: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2); animation: fadeInUp 1s ease-out 0.6s both;">
                    <h3 style="color: white; font-size: 1.5rem; font-weight: 600; margin-bottom: 1rem;">👨‍💻 Dikembangkan dengan ❤️</h3>
                    <p style="color: rgba(255,255,255,0.9); font-size: 1.1rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        Aplikasi ini dikembangkan sebagai solusi modern untuk manajemen data mobil yang efisien dan user-friendly.
                    </p>
                    <a href="{{ route('mobil') }}" style="text-decoration: none;">
                        <button style="background: linear-gradient(45deg, #00b894, #00cec9); color: white; border: none; padding: 1rem 2rem; border-radius: 50px; font-size: 1rem; font-weight: 600; cursor: pointer; box-shadow: 0 8px 25px rgba(0, 184, 148, 0.3); transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 12px 35px rgba(0, 184, 148, 0.4)'"
                                onmouseout="this.style.transform='translateY(0px)'; this.style.boxShadow='0 8px 25px rgba(0, 184, 148, 0.3)'">
                            🚀 Mulai Sekarang
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
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
            div[style*="padding: 3rem"] {
                padding: 2rem !important;
            }
            div[style*="grid-template-columns"] {
                grid-template-columns: 1fr !important;
            }
        }
    </style>
@endsection