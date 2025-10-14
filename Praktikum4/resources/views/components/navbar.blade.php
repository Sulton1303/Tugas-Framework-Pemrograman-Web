<nav style="background-color: #1a73e8; padding: 0; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
    <ul style="list-style: none; margin: 0; padding: 0; display: flex; flex-direction: column;">
        <div style="display: flex; align-items: center;">
            <a href="/home" style="text-decoration: none; color: white; padding: 15px 25px; display: block; transition: background-color 0.3s;"
                onmouseover="this.style.backgroundColor='#1557b0';"
                onmouseout="this.style.backgroundColor='transparent';">
                <li style="font-weight: 500; font-size: 16px;">Home</li>
            </a>
            <a href="/buku" style="text-decoration: none; color: white; padding: 15px 25px; display: block; transition: background-color 0.3s;"
                onmouseover="this.style.backgroundColor='#1557b0';"
                onmouseout="this.style.backgroundColor='transparent';">
                <li style="font-weight: 500; font-size: 16px;">Buku</li>
            </a>
        </div>
        <form action="{{ route('logout') }}" method="post" style="margin: 0; border-top: 1px solid rgba(255, 255, 255, 0.2);">
            @csrf
            <button type="submit" 
                style="width: 100%; padding: 15px 25px; background-color: transparent; color: white; border: none; text-align: left; font-size: 16px; font-weight: 500; cursor: pointer; transition: background-color 0.3s;"
                onmouseover="this.style.backgroundColor='#c82333';"
                onmouseout="this.style.backgroundColor='transparent';">
                Logout
            </button>
        </form>
    </ul>
</nav>