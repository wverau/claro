@extends ('layouts.admin')
@section ('contenido')
@toastr_css
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
		<h3>Users List<a href="users/create"></a></h3>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">	
		@include('users.create')
		@include('users.search')

		@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
		@endif
	</div>
	<div class="col-lg-4 col-md-8 col-sm-8 col-xs-12">
		<div class="text-right">
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_Users_Create">{{__('New')}}</button>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover table-sm">
				<thead>
					
					<th>Id</th>
					<th>Email</th>
					<th>Name</th>
					<th>Celular</th>
					<th>Cedula</th>
					<th>Nacimiento</th>
					<th>Created At</th>
					<th>Updated At</th>
					<th class="text-center">{{__('Actions')}}</th>
				</thead>
               @foreach ($userss as $users)
				<tr>
					
					<td>{{$users->id}}</td>
					<td>{{$users->email}}</td>
					<td>{{$users->name}}</td>
					<td>{{$users->celular}}</td>
					<td>{{$users->cedula}}</td>
					<td>{{$users->nacimiento}}</td>
					<td>{{$users->created_at}}</td>
					<td>{{$users->updated_at}}</td>
					<td class="text-center">
						<a href="" data-target="#modal-edit-{{$users->id}}" data-toggle="modal" title="Editar datos de este registro"><button class="btn btn-info btn-sm">{{__('Edit')}}</button></a>
                        <a href="" data-target="#modal-delete-{{$users->id}}" data-toggle="modal" title="Eliminar este registro"><button class="btn btn-danger btn-sm">{{__('Delete')}}</button></a>
                        <a href="" data-target="#modal-ver-{{$users->id}}" data-toggle="modal" title="Ver datos de este registro"><button class="btn btn-success btn-sm">{{__('Show')}}</button></a>
					</td>
				</tr>
				@include('users.modal')
				@include('users.edit')
				@include('users.show')
				@endforeach
			</table>
		</div>
		{{$userss->render()}}
	</div>
</div>
@jquery 
@toastr_js
@toastr_render
@endsection