@extends('layouts.app')
<script src ="{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
    <script src ="{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
    <script src ="{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
    <link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}" type = "text/javascript"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}">
    <script src="{{ asset('js/iziToast.min.js') }}"></script>
<!-- Scripts de configurações -->
<script src="{{ asset('js/produtos/produtos.js') }}"></script>

@section('contentheader_title')
	Produtos
@endsection


@section('main-content')
		<div class="row">
			<div class="col-md-4">
				<div class="box">
				<div class="box-header">
					<h3 class="box-title">Inserir Produto</h3>
				</div>
				<div class="box-body">
					<form >
					<div class="form-group">
						<label>Titulo</label>
						<input type="text" name="titulo" id="descricao" class="form-control">
						<label>Descrição</label>						
						<textarea type="text" name="descricao" rows="5" id="descricao" class="form-control">
						</textarea>
					</div>
					<div class="form-group">
					   <div class="pull-right">
						<a class="btn btn-success"><i class="fa fa-save"></i></a>
						</div>
					</div>
					</form>
				</div>
				</div>						

			</div>
			
			<div class="col-md-8">
				<div class="box">
				<div class="box-header">
					<h3 class="box-title">Produtos</h3>
				</div>
					<div class="box-body">
						<table class="table table-bordered" id="produtos">
							<thead>
								<tr>
									<th>Nº</th>
									<th>Titulo</th>
									<th>Descrição</th>
									<th>Ações</th>
								</tr>
							</thead>
							<tbody>
								@foreach($produtos as $key => $produto)
								<tr>
									<td></td>
									<td>{{ $produto->titulo }}</td>
									<td>{{ $produto->descricao }}</td>
									<td></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

@endsection
