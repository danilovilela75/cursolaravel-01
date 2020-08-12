@extends('template.principal')
@section('content')

<h3>Ver Cliente</h3>

<p>ID: {{ $cliente['id'] }}</p>
<p>NOME: {{ $cliente['nome'] }}</p>
<br>

<a href="{{ route('clientes.index') }}">Voltar</a>
@endsection
