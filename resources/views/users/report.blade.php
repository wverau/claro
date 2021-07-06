@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Report Users</h3>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<script> document.title = "Report Users"; </script>
			<table id="exportar" class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					<th>Id</th>
					<th>Email</th>
					<th>Password</th>
					<th>Name</th>
					<th>Celular</th>
					<th>Cedula</th>
					<th>Nacimiento</th>
					<th>Email Verified At</th>
					<th>Remember Token</th>
					<th>Created At</th>
					<th>Updated At</th>
				</thead>
               @foreach ($userss as $users)
				<tr>
					
					<td>{{$users->id}}</td>
					<td>{{$users->email}}</td>
					<td>{{$users->password}}</td>
					<td>{{$users->name}}</td>
					<td>{{$users->celular}}</td>
					<td>{{$users->cedula}}</td>
					<td>{{$users->nacimiento}}</td>
					<td>{{$users->email_verified_at}}</td>
					<td>{{$users->remember_token}}</td>
					<td>{{$users->created_at}}</td>
					<td>{{$users->updated_at}}</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$userss->render()}}
	</div>
</div>

@endsection