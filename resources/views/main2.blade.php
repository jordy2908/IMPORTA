<div class="table-container" style="overflow-x:auto;">
    <table id="tabla">
            <tr>
                <th>DESCRIPCION COMERCIAL</th>
                <th>PARTIDA ARANCELARIA</th>
            </tr>
            @if (auth()->check())
                @foreach ($buscador as $c)
                <tr>
                    <td><div class="descripcion">{{$c -> descripcion_despacho}}</div></td>
                    <td class="pago">{{$c -> posicion_arancelaria}}</td> <!-- PAGO -->
                    <td>
                        <a href="{{ route('home.pdf', $c -> id) }}">
                            <img src="img/pdf.png" ></img>
                        </a>
                    </td>
                </tr>
                @endforeach
            @else
                @foreach ($buscador as $c)
                <tr>
                    <td> <div class="descripcion">{{$c -> xxx.xx.xx.xx}}</div> </td> <!-- PAGO -->
                    <td id="arancel">{{$c -> xxxx.xx.xx.xx}}</td>
                </tr>
                @endforeach
            @endif
    </table>
</div>