@extends ('layouts.admin')
@section ('contenido')
@toastr_css
<div class="row">
	<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
		<h3>Emails List<a href="emails/create"></a></h3>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">	
		@include('emails.create')
		@include('emails.search')

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
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_Emails_Create">{{__('New')}}</button>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover table-sm">
				<thead>
					
					<th>Id</th>
					<th>Asunto</th>
					<th>Destinatario</th>
					<th>Mensaje</th>
					<th>Created At</th>
					<th>Update At</th>
					<th class="text-center">{{__('Actions')}}</th>
				</thead>
               @foreach ($emailss as $emails)
				<tr>
					
					<td>{{$emails->id}}</td>
					<td>{{$emails->asunto}}</td>
					<td>{{$emails->destinatario}}</td>
					<td>{{$emails->mensaje}}</td>
					<td>{{$emails->created_at}}</td>
					<td>{{$emails->updated_at}}</td>

					<td class="text-center">
						<a href="" data-target="#modal-edit-{{$emails->id}}" data-toggle="modal" title="Editar datos de este registro"><button class="btn btn-info btn-sm">{{__('Edit')}}</button></a>
                        <a href="" data-target="#modal-delete-{{$emails->id}}" data-toggle="modal" title="Eliminar este registro"><button class="btn btn-danger btn-sm">{{__('Delete')}}</button></a>
                        <a href="" data-target="#modal-ver-{{$emails->id}}" data-toggle="modal" title="Ver datos de este registro"><button class="btn btn-success btn-sm">{{__('Show')}}</button></a>
					</td>
				</tr>
				@include('emails.modal')
				@include('emails.edit')
				@include('emails.show')
				@endforeach
			</table>
		</div>
		{{$emailss->render()}}
	</div>
</div>
@jquery 
@toastr_js
@toastr_render
@endsection