@extends('adminlte::page')

@section('content')
    <h3>Novo Ator</h3>
    {!! Form::open(['url'=>'atores/store']) !!}

    @if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    
        <div class="form-group">
        <!-- Nome -->
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
        
        <!-- Nacionalidade -->
        {!! Form::label('nacionalidade', 'Nacionalidade:') !!}
        {!! Form::select('nacionalidade', 
                        array(  'BRA'=>'Brasileiro',
                                'USA'=>'Americano',
                                'CAN'=>'Canadense',
                                'ARG'=>'Argentino'),
                            'BRA',['class'=>'form-control', 'required']) !!}
        
        <!-- Data Nascimento -->
        {!! Form::label('dt_nascimento', 'Data de Nascimento:') !!}
        {!! Form::date('dt_nascimento', null, ['class'=>'form-control', 'required']) !!}
        
        <!-- inicio_atividades -->
        {!! Form::label('inicio_atividades', 'Inicio de Atividades:') !!}
        {!! Form::date('inicio_atividades', null, ['class'=>'form-control', 'required']) !!}
    
        <!-- Botão criar -->
        <div class="form-group-btn">
        {!! Form::submit('Criar Ator',['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar',['class'=>'btn btn-default']) !!}
        </div>
    </div>

    {!! Form::close() !!}
@stop



