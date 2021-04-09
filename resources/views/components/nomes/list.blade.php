@php
    $i=0;
@endphp
@foreach ($nomes as $nome)
<div class="row">
    <div class="col-md-12">
        <table width="100%"  @if ($i%2 == 0) style="background-color: graytext" @endif>
            <tr>
                <td width="50%"> {{ $nome->nome }}</td>
                <td width="30%">{{ $nome->telefone }}</td>
                <td><a href="{{ route ('nomes.edit', $nome->id) }}">Alterar</a></td>
                <td><form id="form" action="{{ route ('nomes.delete', $nome->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type='hidden' name='_method' value='DELETE' />
                        <a href="#" onclick="document.getElementById('form').submit()">Deletar</a>
                    </form></td>
            </tr>
        </table>
    </div>
</div>
@php
    $i++;
@endphp
@endforeach