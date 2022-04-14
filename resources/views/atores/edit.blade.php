@extends('adminlte::page')

@section('content')
    <h3>Editando Ator: {{$ator->nome}} </h3>
    {!! Form::open(['route'=>["atores.update", 'id'=>$ator->id], 'method'=>'put']) !!}

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
        {!! Form::text('nome', $ator->nome, ['class'=>'form-control', 'required']) !!}
        
        <!-- Nacionalidade -->
        {!! Form::label('nacionalidade', 'Nacionalidade:') !!}
        {!! Form::select('nacionalidade', 
                        array(  'BRA'=>'Brasileiro',
                                'USA'=>'Americano',
                                'CAN'=>'Canadense',
                                'ARG'=>'Argentino'),
                            $ator->nacionalidade,['class'=>'form-control', 'required']) !!}
        
        <!-- Data Nascimento -->
        {!! Form::label('dt_nascimento', 'Data de Nascimento:') !!}
        {!! Form::date('dt_nascimento', $ator->dt_nascimento, ['class'=>'form-control', 'required']) !!}
        
        <!-- inicio_atividades -->
        {!! Form::label('inicio_atividades', 'Inicio de Atividades:') !!}
        {!! Form::date('inicio_atividades', $ator->inicio_atividades, ['class'=>'form-control', 'required']) !!}
    
        <!-- Botão criar -->
        <div class="form-group-btn">
        {!! Form::submit('Editar ator',['class'=>'btn btn-primary']) !!}
        {!! Form::reset('Limpar',['class'=>'btn btn-default']) !!}
        </div>
    </div>

    {!! Form::close() !!}
@stop



