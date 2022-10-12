@extends('welcome')
@section('image')
    <img src="img/Logo_ImportaApp.png" alt="">
@endsection
@section('title', 'HOME')
@section('content')


            <!-- JS -->
    <script>
        window.addEventListener("load", function(){
            document.getElementById('buscador').addEventListener("keyup", function(){
                fetch(`/?buscarpor=${document.getElementById("buscador").value}`,{
                    method: 'get'
                })
                .then(response => response.text())
                .then(html => {
                    document.getElementById("blur").innerHTML = html
                    document.getElementById("table").style.display = 'block'
                })
            })
        })
    </script>



    <div class="container-home" id="blur">
        <!-- <div class="divisor">
            <div class="ico">

            </div> -->
            <!-- <div class="browser"> -->
                <div class="container-search">

                    <form >
                        <input type="text" name="buscarpor" id="buscador" value="{{ $buscarpor }}" placeholder="Descripción comercial / país / subpartida arancelaria / nombre arancelario" >
                        <button type="submit" class="button-brow" >
                            <i class="fa fa-search" style="font-size: 20px;"></i>
                        </button>
                    </form>
                </div>

                <div class="blur" id="table" style="display: none;">
                    @if ( auth() -> check() )
                        @if ( auth() -> user() -> busqueda )
                            @include('main')
                        @else
                            @include('main2')
                        @endif
                    @else
                        @include('main')
                    @endif
                </div>
            <!-- </div> -->
        <!-- </div> -->
    </div>
@endsection
