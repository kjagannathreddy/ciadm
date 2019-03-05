
      <!-- Side-Nav-->
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
         <div class="container-fluid">

    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h5 class="card-header-text">Popups </h5>

          	</div>
			<span><button class="btn btn-success fa fa-plus add_services" data-name="<?php echo @$current_page; ?>" style="/*margin-left:75%;margin-top:-75px;*/">popup1 </button></span>
      <!-- <span><button class="btn btn-success fa fa-plus add_services2" data-name="<?php echo @$current_page; ?>" style="/*margin-left:75%;margin-top:-75px;*/">popup2 </button></span>
      <span><button class="btn btn-success fa fa-plus add_services3" data-name="<?php echo @$current_page; ?>" style="/*margin-left:75%;margin-top:-75px;*/">popup3 </button></span>
      <span><button class="btn btn-success fa fa-plus add_services4" data-name="<?php echo @$current_page; ?>" style="/*margin-left:75%;margin-top:-75px;*/">popup4 </button></span>
      <span><button class="btn btn-success fa fa-plus add_services5" data-name="<?php echo @$current_page; ?>" style="/*margin-left:75%;margin-top:-75px;*/">popup5 </button></span> -->
          <div class="card-block">
            <div class="data_table_main table-responsive">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <!-- Container-fluid ends -->
     </div>
</div>
 <section>
    <div class = "modal fade" data-backdrop="static" data-keyboard="false" id = "add_services" tabindex = "-1" role = "dialog" aria-labelledby = "myModalLabel" aria-hidden = "true"></div>
    </section>
<script type="text/javascript">
$(document).ready(function () {
var $modal = $('#add_services');
$('.add_services').on('click',function(event){
	var id = $(this).data('id');
	event.stopPropagation();
	$modal.load('<?php echo "popup1";?>', {id: id},
	function(){
	/*$('.modal').replaceWith('');*/
	$modal.modal('show');
	});
});
  $('.delete_user1').on('click',function(event){

          alert("dfdsfds");
        });

});
</script>
