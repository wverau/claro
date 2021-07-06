<div class="modal fade" id="modal_Emails_Create" tabindex="-1" role="dialog" aria-labelledby="modal_Emails_Create_Title" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header colorCreate">
        <h4 class="modal-title" id="modal_Emails_Create_LongTitle">{{__('New')}} Emails
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">X</span>
          </button>
        </h4>
      </div>
      {!!Form::open(array('url'=>'emails','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
      {{Form::token()}}
      <div class="modal-body">
          <div class="row">
            
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12"> 
                  <div class="form-group">
                  	<label for="asunto">Asunto(*)</label>
                  	<input type="text" name="asunto" class="form-control" placeholder="Asunto(*)..." required>
                  </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12"> 
                  <div class="form-group">
                  	<label for="destinatario">Destinatario(*)</label>
                  	<input type="text" name="destinatario" class="form-control" placeholder="Destinatario(*)..." required>
                  </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12"> 
                  <div class="form-group">
                  	<label for="mensaje">Mensaje(*)</label>
                  	<textarea type="text" name="mensaje" class="form-control" placeholder="Mensaje(*)..." required></textarea>
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