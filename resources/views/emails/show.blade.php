<!-- emails show.blade.php    Ver Detalle de Emails -->
<div class="modal fade" id="modal-ver-{{$emails->id}}" tabindex="-1" role="dialog" aria-labelledby="modal_emails_Ver_Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header colorShow">
        <h4 class="modal-title" id="modal_emails_Ver_LongTitle">Show Emails
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
          </button>
        </h4>
      </div>
      {!!Form::model($emails,['method'=>'GET','route'=>['emails.index']])!!}
      {{Form::token()}}
      <div class="modal-body">
          <div class="row">
            
            
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="asunto">Asunto(*)</label>
	            	<input type="text" name="asunto" class="form-control" value="{{$emails->asunto}}" disabled>
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="destinatario">Destinatario(*)</label>
	            	<input type="text" name="destinatario" class="form-control" value="{{$emails->destinatario}}" disabled>
	            </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           		<div class="form-group">
	            	<label for="mensaje">Mensaje(*)</label>
	            	<textarea type="text" name="mensaje" class="form-control" value="{{$emails->mensaje}}" disabled>{{$emails->mensaje}}</textarea>
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