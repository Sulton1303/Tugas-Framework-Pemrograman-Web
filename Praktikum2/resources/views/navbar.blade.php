<nav style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 0; box-shadow: 0 4px 20px rgba(0,0,0,0.1); position: sticky; top: 0; z-index: 1000;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; align-items: center; height: 70px;">
            
            <!-- Logo/Brand -->
            <li style="margin-right: auto;">
                <a href="{{ route('home') }}" style="text-decoration: none; color: white; font-size: 1.5rem; font-weight: 700; letter-spacing: -0.5px;">
                    🚗 <span style="background: linear-gradient(45deg, #fff, #a29bfe); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">AutoManager</span>
                </a>
            </li>
            
            <!-- Navigation Links -->
            <li style="margin: 0;">
                <a href="{{ route('home') }}" 
                   style="text-decoration: none; color: rgba(255,255,255,0.9); padding: 0.8rem 1.5rem; margin: 0 0.25rem; border-radius: 25px; font-weight: 500; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; display: inline-block;"
                   onmouseover="this.style.background='rgba(255,255,255,0.15)'; this.style.color='white'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'"
                   onmouseout="this.style.background='transparent'; this.style.color='rgba(255,255,255,0.9)'; this.style.transform='translateY(0px)'; this.style.boxShadow='none'">
                    🏠 Home
                </a>
            </li>
            
            <li style="margin: 0;">
                <a href="{{ route('mobil') }}" 
                   style="text-decoration: none; color: rgba(255,255,255,0.9); padding: 0.8rem 1.5rem; margin: 0 0.25rem; border-radius: 25px; font-weight: 500; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; display: inline-block;"
                   onmouseover="this.style.background='rgba(255,255,255,0.15)'; this.style.color='white'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'"
                   onmouseout="this.style.background='transparent'; this.style.color='rgba(255,255,255,0.9)'; this.style.transform='translateY(0px)'; this.style.boxShadow='none'">
                    🚙 Mobil
                </a>
            </li>
            
            <li style="margin: 0;">
                <a href="{{ route('company-profile') }}" 
                   style="text-decoration: none; color: rgba(255,255,255,0.9); padding: 0.8rem 1.5rem; margin: 0 0.25rem; border-radius: 25px; font-weight: 500; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; display: inline-block;"
                   onmouseover="this.style.background='rgba(255,255,255,0.15)'; this.style.color='white'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'"
                   onmouseout="this.style.background='transparent'; this.style.color='rgba(255,255,255,0.9)'; this.style.transform='translateY(0px)'; this.style.boxShadow='none'">
                    🏢 Company Profile
                </a>
            </li>
            
            <li style="margin: 0;">
                <a href="{{ route('about') }}" 
                   style="text-decoration: none; color: rgba(255,255,255,0.9); padding: 0.8rem 1.5rem; margin: 0 0.25rem; border-radius: 25px; font-weight: 500; transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); position: relative; overflow: hidden; display: inline-block;"
                   onmouseover="this.style.background='rgba(255,255,255,0.15)'; this.style.color='white'; this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'"
                   onmouseout="this.style.background='transparent'; this.style.color='rgba(255,255,255,0.9)'; this.style.transform='translateY(0px)'; this.style.boxShadow='none'">
                    ℹ️ About
                </a>
            </li>
        </ul>
    </div>
    
    <!-- Mobile responsive -->
    <style>
        @media (max-width: 768px) {
            nav div {
                padding: 0 1rem !important;
            }
            nav ul {
                flex-wrap: wrap;
                height: auto !important;
                padding: 1rem 0;
            }
            nav li:first-child {
                width: 100%;
                text-align: center;
                margin-bottom: 1rem;
            }
            nav li:not(:first-child) {
                margin: 0.25rem;
            }
            nav li a {
                padding: 0.6rem 1rem !important;
                font-size: 0.9rem;
            }
        }
        
        @media (max-width: 992px) {
            nav li a {
                padding: 0.6rem 1rem !important;
                font-size: 0.85rem !important;
            }
        }
    </style>
</nav>