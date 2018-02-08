@extends('layouts.padrao')
@section('content')
    <h1 class = "text-center">Editar funcionario</h1>
    <form action="/funcionarios/{{ $funcionario->id }}/update" method="GET">
        <input type="hidden"  name="id" value="{{ $funcionario->id }}" placeholder="">


        <input type="text" class="form-control" name="nome" value="{{ $funcionario->nome }}" placeholder="Nome"><br>
        {{ ($errors->has('nome')) ? "Nome requirido" : '' }}

        <input type="text" class="form-control" name="cargo" value="{{ $funcionario->cargo }}" placeholder="Cargo"><br>
        {{ ($errors->has('cargo')) ? $errors->first('cargo') : '' }}
        
        <input type="number"class="form-control" name="salario" value="{{ $funcionario->salario }}" placeholder="Salario"><br>
        {{ ($errors->has('salario')) ? $errors->first('salario') : '' }}
        
        <input type="hidden" name="_method" value="update">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class = "btn btn-default" type="submit" name="name" value="Salvar">
    </form>
    <a href="/funcionarios">Voltar</a>

@stop