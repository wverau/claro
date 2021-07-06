@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Report Emails</h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<script> document.title = "Report Emails"; </script>
			<table id="exportar" class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>Id</th>
					<th>Asunto</th>
					<th>Destinatario</th>
					<th>Mensaje</th>
					<th>Created At</th>
					<th>Update At</th>
					<th>User</th>
				</thead>
               @foreach ($emailss as $emails)
				<tr>
					
					<td>{{$emails->id}}</td>
					<td>{{$emails->asunto}}</td>
					<td>{{$emails->destinatario}}</td>
					<td>{{$emails->mensaje}}</td>
					<td>{{$emails->created_at}}</td>
					<td>{{$emails->update_at}}</td>
					<td>{{$emails->name_users}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$emailss->render()}}
	</div>
</div>

@endsection