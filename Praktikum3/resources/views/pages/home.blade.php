@extends('layouts.app')

@section('content')
    <div style="padding: 20px;">
        @if ($errors->any())
            <div style="background-color: #fee; border-left: 4px solid #c33; padding: 15px; margin-bottom: 20px; border-radius: 4px; max-width: 600px;">
                <span style="color: #c33; font-size: 14px; font-weight: 500;">{{ $errors->first() }}</span>
            </div>
        @endif

        @if (session('success'))
            <div style="background-color: #d4edda; border-left: 4px solid #28a745; padding: 15px; margin-bottom: 20px; border-radius: 4px; max-width: 600px;">
                <span style="color: #155724; font-size: 14px; font-weight: 500;">{{ session('success') }}</span>
            </div>
        @endif

        <h1 style="color: #333; font-size: 32px; margin-bottom: 10px;">Welcome to Home page</h1>
        <p style="color: #666; font-size: 16px;">Selamat datang di aplikasi perpustakaan</p>
    </div>
@endsection