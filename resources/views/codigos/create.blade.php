@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Inserir novo código na Base de Dados</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        @endif
        {!! Form::open(['route'=>'codigos.store']) !!}
        <!--Form entrada do nome da questao-->
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>
        <!--Form entrada da fonte da questão-->
        <div class="form-group">
            {!! Form::label('fonte', 'Fonte:') !!}
            {!! Form::text('fonte', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('linguagem', 'Linguagem:') !!}
            {!! Form::text('linguagem', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('resposta', 'Resposta:') !!}
            {!! Form::textarea('resposta', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar código', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection