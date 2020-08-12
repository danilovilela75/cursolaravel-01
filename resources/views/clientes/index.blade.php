<style>
ul {
    list-style: none;
}
</style>

<h3>{{ $titulo }}</h3>
<a href="{{ route('clientes.create') }}">Novo Cliente</a>

@if(count($clientes)>0)
<ul>
    @foreach($clientes as $c)
        <li>
            {{ $c['id'] }}
            {{ $c['nome'] }} |
            <a href="{{ route('clientes.show', $c['id']) }}">Ver</a> |
            <a href="{{ route('clientes.edit', $c['id']) }}">Editar</a> |

            <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Apagar</button>
            </form>

        </li>
    @endforeach
</ul>
@endif

@empty($clientes)
    <h4>Não existem registros!</h4>
@endempty
