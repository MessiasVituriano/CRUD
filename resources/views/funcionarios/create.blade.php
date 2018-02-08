@extends('layouts.padrao')
@section('content')
    <h1 class = "text-center">Cadastrar novo funcionario</h1>
    <form class="" action="/funcionarios/store" method="POST">
        <input class = "form-control" type = "text" name="nome" id = "nome" placeholder ="Nome">
        {{ ($errors->has('nome')) ? $errors->first('nome') : '' }}<br>
        

        <input class = "form-control" type = "text" name="cargo" id = "cargo" placeholder="Cargo" >
        {{ ($errors->has('cargo')) ? $errors->first('cargo') : '' }}<br>
        

        <input class = "form-control" type = "number" name="salario" id = "salario" placeholder="Salario">
        {{ ($errors->has('salario')) ? $errors->first('salario') : '' }}<br>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
	    <input class = "btn btn-default" type="submit" name="name" value="Salvar">
    </form>
    <a href="/funcionarios">Voltar</a>


@stop