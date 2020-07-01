@extends('layouts.default')
@section('title', 'Clientes')

@section('content')

	<div class="card">
	    <div class="card-header">
	        <h3><i class="fas fa-user-edit mr-1"></i> Editar Cliente: {{ $cliente->nome }}</h3>
	    </div>

	    <div class="card-body">

			@if($errors->any())
				<ul class='alert alert-danger'>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif

			{!! Form::open(['route'=>["clientes.update", 'id'=>$cliente->id], 'method'=>'put']) !!}

				<div class='form-row'>
					<div class="form-group col-md-4">
						{!! Form::label('nome', 'Nome:') !!}
						{!! Form::text('nome', $cliente->nome, ['class'=>'form-control', 'required']) !!}
					</div>
					<div class="form-group col-md-4">
						{!! Form::label('cidades_id', 'Cidade:') !!}
						{!! Form::select('cidades_id', \App\Cidade::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control', 'required']) !!}
					</div>
				</div>

				<div class='form-row'>
					<div class="form-group col-md-6">
					{!! Form::submit('Salvar Modificações', ['class'=>'btn btn-primary']) !!}
					{!! Form::reset('Retornar Originais', ['class'=>'btn btn-default']) !!}
				</div>

			{!! Form::close() !!}
	    </div>
	</div>
	
@stop 
