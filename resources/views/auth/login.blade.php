@extends('welcome')
@section('title', 'LOGIN APP')
@section('image')
    <img src="img/Logo_ImportaApp.png" alt="">
@endsection
@section('content')
    <div class="container-login">
        <div class="login">
            <div class="header-login">
                <img src="img/Logo_ImportaApp.png" alt="">
            </div>
            <p style="font-size: 20px;">Inicia sesion en tu cuenta</p>
            <div class="body-login">
                <form action="" method="POST">
                @csrf
                    <div class="mail">
                        <p>EMAIL</p>
                        <input type="email" name="email" id="email" placeholder="EMAIL">
                    </div>
                    <div class="pass">
                        <p>PASSWORD</p>
                        <input type="password" name="password" id="password" placeholder="PASSWORD">
                    </div>
                    @error('message')
                        <div class="error">
                        Email or password is incorrect. Try again
                        </div>
                    @enderror
                    <button type="submit">SEND</button>
                </form>
            </div>
        </div>
    </div>
@endsection
