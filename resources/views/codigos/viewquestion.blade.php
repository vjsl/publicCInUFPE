@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Visualizando: {{ $codigo->nome }}</h2>
        <h5>Fonte: {{ $codigo->fonte }}</h5>
        <pre>
            <code class="language-{{$codigo->linguagem}}">
                {{ $codigo->resposta }}
            </code>
        </pre>
    </div>
@endsection