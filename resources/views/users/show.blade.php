<!-- users show.blade.php    Ver Detalle de Users -->
<div class="modal fade" id="modal-ver-{{$users->id}}" tabindex="-1" role="dialog" aria-labelledby="modal_users_Ver_Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header colorShow">
        <h4 class="modal-title" id="modal_users_Ver_LongTitle">Show Users
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
          </button>
        </h4>
      </div>
      {!!Form::model($users,['method'=>'GET','route'=>['users.index']])!!}
      {{Form::token()}}
      <div class="modal-body">
          <div class="row">
            
            
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="email">Email(*)</label>
	            	<input type="email" name="email" class="form-control" value="{{$users->email}}" disabled>
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="password">Password(*)</label>
	            	<input type="password" name="password" class="form-control" value="{{$users->password}}" disabled>
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="name">Name(*)</label>
	            	<input type="text" name="name" class="form-control" value="{{$users->name}}" disabled>
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="celular">Celular</label>
	            	<input type="text" name="celular" class="form-control" value="{{$users->celular}}" disabled>
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="cedula">Cedula(*)</label>
	            	<input type="text" name="cedula" class="form-control" value="{{$users->cedula}}" disabled>
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="nacimiento">Nacimiento(*)</label>
	            	<input type="date" name="nacimiento" class="form-control" value="{{$users->nacimiento}}" disabled>
	            </div>
            </div>


		  </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-danger" data-dismiss="modal" title="Regresar al Listado Anterior">{{__('Return')}}</a>
      </div>
      {!!Form::close()!!} 
    </div>
  </div>
</div>