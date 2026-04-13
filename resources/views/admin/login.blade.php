@extends('layouts.admin')
@section('title', 'Admin Login')

@section('content')
<div id="login-container" class="grid-con">
    <form method="POST" action="{{ route('admin.login.post') }}" class="login-form col-span-full l-col-start-5 l-col-end-9">
        @csrf
        <h2>Admin Login</h2>

        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif

        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required autocomplete="username">
        </div>
        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
        </div>
        <button type="submit" class="login-btn">Login</button>
    </form>
</div>
@endsection