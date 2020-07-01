@extends('layouts.default')
@section('title', 'Clientes')

@section('content')

	<div class="card">
	    <div class="card-header">
	        <h3><i class="fas fa-plus-square mr-1"></i> Cadastro de Cliente</h3>
	    </div>

	    <div class="card-body">

			@if($errors->any())
				<ul class='alert alert-danger'>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			@endif

			{!! Form::open(['route'=>["clientes.store"]]) !!}

				<div class='form-row'>
					<div class="form-group col-md-4">
						{!! Form::label('nome', 'Nome:') !!}
						{!! Form::text('nome', null, ['class'=>'form-control', 'required']) !!}
					</div>
					<div class="form-group col-md-4">
						{!! Form::label('cidades_id', 'Cidade:') !!}
						{!! Form::select('cidades_id', \App\Cidade::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control', 'required']) !!}
					</div>
				</div>

				<div class='form-row'>
					<div class="form-group col-md-6">
					{!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}
					{!! Form::reset('Limpar', ['class'=>'btn btn-default']) !!}
				</div>

			{!! Form::close() !!}
	    </div>
	</div>
	
@stop 
