@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Códigos</h1>
        <h4>Esta página contém a maioria dos códigos que já fiz</h4>
        @if(Auth::check())
            <br />
            <a href="{{ route('codigos.create') }}" class="btn btn-default">Novo código</a>
            <br />
        @endif
        <br />

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome da Questão</th>
                <th>Fonte</th>
                <th>Linguagem</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($codigos as $codigo)
                <tr>
                    <td>{{ $codigo->id }}</td>
                    <td>{{ $codigo->nome }}</td>
                    <td>{{ $codigo->fonte }}</td>
                    <td>{{ $codigo->linguagem }}</td>
                    <td>
                        @if(Auth::check())
                            <a href="{{ route('codigos.viewquestion',['id'=>$codigo->id]) }}" class="btn-sm btn-primary">Visualizar</a>
                        @else
                            <center><a href="{{ route('codigos.viewquestion',['id'=>$codigo->id]) }}" class="btn-sm btn-primary">Visualizar</a></center>
                        @endif
                        @if(Auth::check())
                            <a href="{{ route('codigos.edit',['id'=>$codigo->id]) }}" class="btn-sm btn-success">Editar</a>
                            <a href="{{ route('codigos.destroy', ['id'=>$codigo->id]) }}" class="btn-sm btn-danger">Remover</a>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
