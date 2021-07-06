<div class="modal fade" id="modal-delete-{{$users->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  {{Form::Open(array('action'=>array('App\Http\Controllers\UsersControlador@destroy',$users->id),'method'=>'delete'))}}
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header colorModal">
        <h4 class="modal-title" id="exampleModalLabel">{{__('Delete')}} Users
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
          </button>
        </h5>
      </div>
      <div class="modal-body">
        <p>Confirm if you want to Delete Users</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">{{__('Close')}}</button>
		<button type="submit" class="btn btn-primary">{{__('Confirm')}}</button>
      </div>
    </div>
  </div>
  {{Form::Close()}}
</div>