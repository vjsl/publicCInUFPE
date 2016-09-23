@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Código {{ $codigo->name }}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors as $error)
                    <li><p></p>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['codigos.update',$codigo->id], 'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $codigo->nome, ['class'=>'form-control']) !!}
        </div>
        <!--Form entrada da fonte da questão-->
        <div class="form-group">
            {!! Form::label('fonte', 'Fonte:') !!}
            {!! Form::text('fonte', $codigo->fonte, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('linguagem', 'Linguagem:') !!}
            {!! Form::text('linguagem', $codigo->linguagem, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('resposta', 'Resposta:') !!}
            {!! Form::textarea('resposta', $codigo->resposta, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Atualizar Código', ['class'=> 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection