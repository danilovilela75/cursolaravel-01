<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Loc</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                    <li><a class="{{ request()->routeIs('clientes.index') ? 'active' : '' }}" href="{{ route('clientes.index') }}">Clientes</a></li>
                    <li><a class="{{ request()->routeIs('produtos.index') ? 'active' : '' }}" href="{{ route('produtos.index') }}">Produtos</a></li>
                    <li><a class="{{ request()->routeIs('departamentos.index') ? 'active' : '' }}" href="{{ route('departamentos.index') }}">Departamentos</a></li>
                </ul>
            </div>
        </div>
        <div class="col2">
            @yield('content')
        </div>
    </div>

</body>
</html>
