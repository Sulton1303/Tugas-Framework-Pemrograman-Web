<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; display: flex; justify-content: center; align-items: center; min-height: 100vh; padding: 20px 0;">

    <div style="background-color: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); width: 100%; max-width: 400px;">
        <h1 style="text-align: center; color: #1a73e8; margin-bottom: 10px; font-size: 28px;">Register</h1>
        <p style="text-align: center; color: #666; margin-bottom: 30px; font-size: 14px;">Buat akun baru Anda</p>

        @if ($errors->any())
            <div style="background-color: #fee; border-left: 4px solid #c33; padding: 12px; margin-bottom: 20px; border-radius: 4px;">
                <ul style="margin: 0; padding-left: 20px; color: #c33; font-size: 14px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register.post') }}" method="post">
            @csrf
            <div style="margin-bottom: 20px;">
                <label for="name" style="display: block; margin-bottom: 8px; color: #333; font-weight: 500; font-size: 14px;">Nama:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required 
                    style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; transition: border-color 0.3s;"
                    onfocus="this.style.borderColor='#1a73e8'; this.style.outline='none';"
                    onblur="this.style.borderColor='#ddd';">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="email" style="display: block; margin-bottom: 8px; color: #333; font-weight: 500; font-size: 14px;">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required 
                    style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; transition: border-color 0.3s;"
                    onfocus="this.style.borderColor='#1a73e8'; this.style.outline='none';"
                    onblur="this.style.borderColor='#ddd';">
            </div>
            <div style="margin-bottom: 20px;">
                <label for="password" style="display: block; margin-bottom: 8px; color: #333; font-weight: 500; font-size: 14px;">Password:</label>
                <input type="password" id="password" name="password" required 
                    style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; transition: border-color 0.3s;"
                    onfocus="this.style.borderColor='#1a73e8'; this.style.outline='none';"
                    onblur="this.style.borderColor='#ddd';">
            </div>
            <div style="margin-bottom: 25px;">
                <label for="password_confirmation" style="display: block; margin-bottom: 8px; color: #333; font-weight: 500; font-size: 14px;">Konfirmasi Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required 
                    style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box; transition: border-color 0.3s;"
                    onfocus="this.style.borderColor='#1a73e8'; this.style.outline='none';"
                    onblur="this.style.borderColor='#ddd';">
            </div>
            <button type="submit" 
                style="width: 100%; padding: 12px; background-color: #1a73e8; color: white; border: none; border-radius: 6px; font-size: 16px; font-weight: 600; cursor: pointer; transition: background-color 0.3s;"
                onmouseover="this.style.backgroundColor='#1557b0';"
                onmouseout="this.style.backgroundColor='#1a73e8';">
                Register
            </button>
        </form>

        <div style="text-align: center; margin-top: 20px; padding-top: 20px; border-top: 1px solid #eee;">
            <p style="color: #666; font-size: 14px; margin: 0;">
                Sudah punya akun? 
                <a href="{{ route('login') }}" 
                    style="color: #1a73e8; text-decoration: none; font-weight: 600;"
                    onmouseover="this.style.textDecoration='underline';"
                    onmouseout="this.style.textDecoration='none';">
                    Login di sini
                </a>
            </p>
        </div>
    </div>

</body>
</html>