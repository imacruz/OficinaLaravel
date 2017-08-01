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
			<div class="col-md-12">
				<div class="box">
				<div class="box-header">
					<h3 class="box-title"></h3>
					<div class="pull-right">
						<a class="btn btn-primary" data-toggle="tooltip" title="Inserir Produto"><i class="fa fa-plus"></i></a>
					</div>
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
								<tr class="item{{$produto->id}}">
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
