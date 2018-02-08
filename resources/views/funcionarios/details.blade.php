@extends('layouts.padrao')

@section('content')
<h1>Página de detalhe</h1>
<h2>Nome: {{ $detailpage->nome }}</h2>
<p>Cargo: {{ $detailpage->cargo }}</p>
<p>Salario: {{ $detailpage->salario }}</p>
<a href="/funcionarios">Voltar</a>
@stop