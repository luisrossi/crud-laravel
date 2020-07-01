@extends('layouts.default')
@section('title', 'Clientes')

@section('content')

	<div class="card">
	    <div class="card-header">
	        <h3><i class="fas fa-users mr-1"></i> Clientes</h3>
	    </div>

	    <div class="card-body">
			<div class='d-flex justify-content-between'>
				{!! Form::open(['name'=>'form_name', 'route'=>'clientes', 'style'=>'width: 45%']) !!}
					<div calss="sidebar-form">
						<div class="input-group">
							<input type="text" name="desc_filtro" class="form-control" style="width:80% !important;" placeholder="Pesquisa...">
							<span class="input-group-btn">
			                	<button type="submit" name="search" id="search-btn" class="btn btn-default"><i class="fa fa-search"></i></button>
			              	</span>
						</div>
					</div>
				{!! Form::close() !!}

				<a href="{{ route('clientes.create', []) }}" class='btn-sm btn-primary float-right my-2'>Adicionar</a>
			</div>
			<table class='table table-striped table-bordered table-hover table-sm'>
				<thead>
					<th width="25px">Cod</th>
					<th>Nome</th>
					<th width="200px">Cidade</th>
					<th width="170px"></th>
				</thead>
				<tbody>
					@foreach($clientes as $cliente)
						<tr>
							<td>{{ $cliente->id }}</td>
							<td>{{ $cliente->nome }}</td>
							<td>{{ $cliente->cidade->nome }}</td>
							<td>
								<a href="{{ route('clientes.edit', ['id'=>\Crypt::encrypt($cliente->id)]) }}" class='btn-sm btn-success'><i class="fas fa-pencil-alt"></i> Editar</a>
								<a href="#" onclick="return ConfirmaExclusao(this, '{{\Crypt::encrypt($cliente->id)}}')" class='btn-sm btn-danger'><i class="fas fa-trash"></i> Remover</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
	    </div>
	</div>
	{{ $clientes->links() }}
@stop
 
@section('table-delete')
"clientes"
@stop