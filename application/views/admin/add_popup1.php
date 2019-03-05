<style>
    #insert_services label.error {
        color:red;
    }
    #insert_services input.error,textarea.error,select.error {
        border:1px solid red;
        color:red;
    }
    .popover {
    z-index: 2000;
    position:relative;
    }
    .insert_services.fa-spin {
      display:block;
    }
</style>
<div class="modal-dialog" role="document">
    <div class="modal-content" style="overflow:hidden">
        <div class="modal-header" style="border-bottom-color: #ccc;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" align="center">Add / Edit Popup1</h4>
        </div>
        <div class="modal-body">
            <form id="insert_services">
                <div class="form-group row">
                    <label for="example-tel-input" class="col-sm-3 col-form-label form-control-label">Title En</label>
                    <div class="col-sm-9">
                        <input class="form-control" type="text" name="data[text]" value="<?php echo @$value['text']?>" placeholder="" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-sm-3 col-form-label form-control-label">Checkbox</label>
                    <div class="col-sm-9">
                      <div class="form-check">
                                        <label for="chkme" class="form-check-label">
                                            <input type="checkbox" value="hi" class="form-check-input" name="data[check]">
                                            check 1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label for="chkme" class="form-check-label">
                                            <input type="checkbox" value="hello" class="form-check-input"  name="data[check]">
                                            Check 2
                                        </label>
                                    </div>
                    </div>
                </div>
								<div class="form-group row">
                    <label for="example-tel-input" class="col-sm-3 col-form-label form-control-label">Radio </label>
                    <div class="col-sm-9">
                      <fieldset class="form-group">
                                      <label class="form-control-label">Radio buttons</label>
                                      <div class="form-check">
                                          <label for="optionsRadios1" class="form-check-label">
                                              <input type="radio" class="form-check-input" name="data[radio]" id="optionsRadios1" value="option1" >
                                              Option one
                                          </label>
                                      </div>
                                      <div class="form-check">
                                          <label for="optionsRadios2" class="form-check-label">
                                              <input type="radio" class="form-check-input" name="data[radio]" id="optionsRadios2" value="option2">
                                              Option two
                                          </label>
                                      </div>
                                  </fieldset>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-sm-3 col-form-label form-control-label">Date</label>
                    <div class="col-sm-9">
                        <input class="form-control mydate" type="text" data-dtp="dtp_7QZeZ" id="date" name="data[date]"  placeholder="yyyy-mm-dd" >
                    </div>
                </div>
								<div class="form-group row">
					             <label for="example-tel-input" class="col-sm-3 col-form-label form-control-label">Choose Image</label>
					            <div class="col-sm-9">
					                <input type="file" id="file"  name="image" value="" class="form-control">
					            </div>
							</div>
                  <div class="form-group row">
                        <label class="col-sm-3 col-form-label form-control-label">Status</label>
                        <div class="col-sm-9">
                                <select class="form-control" name="data[status]">
                                  <option value="1" <?php if(isset($value['status'])) { if($value['status'] == "1"){ echo "selected";}} ?>>Active</option>
                                  <option value="0" <?php if(isset($value['status'])) { if($value['status'] == "0"){ echo "selected";}} ?>>Inactive</option>
                            </select>
                        </div>
                </div>
                <input type="hidden" name="data[id]" value="<?php echo @$id; ?>">
                <input type="hidden" name="table_name" value="popup">
            </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary waves-effect waves-light insert_services">Save changes</button>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
$("#insert_services").validate({
            rules: {
                "data[text]"   : "required",
                "data[check]"   : "required",
								"data[radio]"   : "required",
								"data[date]"   : "required",
                "data[status]"   : "required",
                "image"   : "required",
								<?php
						if(@$id==''){ ?>
							"image"                         : "required",
					  <?php }?>
                "data[status]"      : "required"
            },
            messages : {
                "data[title_en]"   : "",
                "data[title_ar]"   : "",
								"data[description_en]"   : "",
								"data[description_ar]"   : "",
                "data[status]"      : ""
            },
    });
    $('.insert_services').click(function(){

        var validator = $("#insert_services").validate();
            validator.form();
            if(validator.form() == true){
                 $('.insert_services').html("<i class='fa fa-spinner fa-spin'></i>");
                  var data = new FormData($('#insert_services')[0]);
                $.ajax({
                    url: "#",
                    type: "POST",
                    data: data,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData:false,
                    error:function(request,response){
                        console.log(request);
                    },
                    success: function(result){
                        if (result == "success") {
                           location.reload();
                        }
                    }
                });
            }
        });

  $('.mydate').bootstrapMaterialDatePicker({
    time: false,
    format: 'YYYY-MM-DD'
  });
});
</script>
