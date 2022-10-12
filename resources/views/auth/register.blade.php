@extends('welcome')
@section('title', 'REGISTER APP')
@section('content')
<div class="container-login">
    <div class="login">
        <div class="header-login">
            <img src="img/Logo_ImportaApp.png" alt="">
        </div>
        <p style="font-size: 25px;">Registrate!</p>
        <div class="body-login">
            <form action="" method="POST">
                @csrf
                <div class="mail">
                    <p>EMAIL</p>
                    <input type="email" name="email" id="email" placeholder="EMAIL">
                </div>
                <div class="mail">
                    <p class="label">NAME / RAZON SOCIAL</p>
                    <input type="text" name="name" id="name" placeholder="NAME">
                </div>
                <div class="mail">
                    <p>C.I / RUC</p>
                    <input type="text" name="cedula" id="name" placeholder="C.I / RUC">
                </div>                
                <div class="mail">
                    <p class="label">METODO DE PAGO</p>
                    <div class="pagos">
                        <div class="pago" style="display: flex; flex-direction: row; align-items: center;">
                            <p>VISA</p>
                            <input type="radio" name="pago" id="name" placeholder="NAME" value="VISA">
                        </div>

                        <div class="pago2" style="display: flex; flex-direction: row; align-items: center;">
                            <p>PAYPAL</p>
                            <input type="radio" name="pago" id="name" placeholder="NAME" value="PAYPAL">
                        </div>
                    </div>
                </div>
                <div class="mail">
                    <p class="label">METODO DE BUSQUEDA</p>
                    <div class="pagos">
                        <div class="pago" style="display: flex; flex-direction: row; align-items: center;">
                            <p>PROVEEDORES</p>
                            <input type="radio" name="busqueda" id="name" placeholder="NAME" value=TRUE>
                        </div>

                        <div class="pago2" style="display: flex; flex-direction: row; align-items: center;">
                            <p>ARANCELES</p>
                            <input type="radio" name="busqueda" id="name" placeholder="NAME" value=FALSE>
                        </div>
                    </div>
                </div>
                <div class="pass">
                    <p>PASSWORD</p>
                    <input type="password" name="password" id="password" placeholder="PASSWORD">
                </div>
                <button type="submit">SEND</button>
            </form>
        </div>
    </div>
</div>
@endsection
