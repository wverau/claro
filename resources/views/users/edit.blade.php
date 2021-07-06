<div class="modal fade" id="modal-edit-{{$users->id}}" tabindex="-1" role="dialog" aria-labelledby="modal_users_Edit_Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header colorEdit">
        <h4 class="modal-title" id="modal_users_Edit_LongTitle">{{__('Edit')}} Users
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
          </button>
        </h4>
      </div>
      {!!Form::model($users,['method'=>'PATCH','files'=>'true','route'=>['users.update',$users->id]])!!}
      {{Form::token()}}
      <div class="modal-body">
          <div class="row">
            
            
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="email">Email(*)</label>
	            	<input type="email" name="email" class="form-control" value="{{old('email',$users->email)}}" placeholder="Email(*)..." required>
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="password">Password(*)</label>
	            	<input type="password" name="password" class="form-control" value="{{old('password',$users->password)}}" placeholder="Password(*)..." required>
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="name">Name(*)</label>
	            	<input type="text" name="name" class="form-control" value="{{old('name',$users->name)}}" placeholder="Name(*)..." required>
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="celular">Celular</label>
	            	<input type="text" name="celular" class="form-control" value="{{old('celular',$users->celular)}}" placeholder="Celular..." >
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="cedula">Cedula(*)</label>
	            	<input type="text" name="cedula" class="form-control" value="{{old('cedula',$users->cedula)}}" placeholder="Cedula(*)..." required>
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="nacimiento">Nacimiento(*)</label>
	            	<input type="date" name="nacimiento" class="form-control" value="{{old('nacimiento',$users->nacimiento)}}" placeholder="Nacimiento(*)..." required>
	            </div>
            </div>


          </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">{{__('Save')}}</button>
        <button class="btn btn-danger" type="reset">{{__('Cancel')}}</button>
      </div>
      {!!Form::close()!!} 
    </div>
  </div>
</div>