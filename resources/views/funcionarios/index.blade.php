@extends('layouts.padrao')

@section('content')
<h1 class = "text-center">Funcionarios</h1>
<div class="table-responsive">          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Cargo</th>
        <th>Salario</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
    </thead>
    <tbody>
    @foreach($todososfuncionarios as $funcionario)
      <tr>
        <td><a href="/funcionarios/{{ $funcionario->id }}">{{ $funcionario->nome }}</a></td>
        <td>{{ $funcionario->cargo }}</td>
        <td>R$ {{ $funcionario->salario }}</td>
        <td><a href="/funcionarios/{{ $funcionario->id }}/edit"><i class="material-icons">edit</i></a></td>
        <td><a href="/funcionarios/{{ $funcionario->id }}/destroy" onclick="return confirm('Remover usuario?');"><i class="material-icons">delete</i></a></td>
      </tr>
    </tbody>
      @endforeach
  </table>
  </div>
  <a class="text-center" href="/funcionarios/create">Cadastrar novo funcionario</a>
@stop