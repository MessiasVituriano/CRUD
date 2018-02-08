    <h1>Funcionarios</h1>
     
        @foreach($funcionarios as $funcionario)
            <h2><a href="/funcionario/{{ $funcionario->id }}">{{ $funcionario->nome }}</a></h2>
            <p>{{ $funcionario -> descricao }}</p>
            <a href="/funcionario/{{ $funcionario->id }}/edit">Editar</a>
            <form action="/funcionario/{{ $funcionario->id }}" method="POST">
                <input type="hidden" name="_method" value="delete">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" name="name" value="Apagar">
            </form>
            <hr>
        @endforeach
