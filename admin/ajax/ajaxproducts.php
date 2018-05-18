

	<!-- bootsrap js -->

	<!-- file input -->
	<script src="assets/fileinput/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
	<script src="assets/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script>
	<script src="assets/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
	<script src="assets/fileinput/js/fileinput.min.js"></script>

<script>
$(document).ready(function(){
load_product_data();

 function load_product_data()
 {
  var action="fetchproduct";
  $.ajax({
   url:"ajax/ajaxcontrol.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {

    $('.tbl_product').html(data);

   }
  });
 }
 $(document).on('click', '.refreshproduct', function(){
              load_product_data();
 });
 $(document).on('click', '.updateproducts', function(){
  var pro_id = $(this).attr("proid");
	var action="proupdate";
  $.ajax({
   url:"ajax/ajaxcontrol.php",
   method:"post",
   data:{pro_id:pro_id,action:action},
   dataType:"json",
   success:function(data)
   {


      $('#name').val(data.pname);
			$('#price').val(data.pprice);
			    $('#status').val(data.pstatus);
					    $('#subc').val(data.psid);
							    $('#ssubc').val(data.pssid);
									    $('#image').val(data.pimage);
											 $('#pid').val(data.pid);
											  $('#insert').val("UPDATE");
											  $('#addpro').modal('show');
   }
  });
 });



 $('#proeditform').on("submit",function(event)
{
event.preventDefault();


if($('#name').val()=="")
{

swal("Name Required!", "You must provide a name!", "warning")

}
if($('#price').val()=="")
{

swal("Price  Required!", "You must provide a price!", "warning")

}
if($('#status').val()=="")
{

swal("Status Required!", "You must provide a status!", "warning")

}
if($('#subc').val()=="")
{

swal("Subcategory Required!", "You must provide a subcategory!", "warning")

}
if($('#ssubc').val()=="")
{

swal("Sub-Subcategory Required!", "You must provide a subsubcategory!", "warning")

}
if($('#image').val()=="")
{

swal("Image Required!", "You must provide a image!", "warning")

}
else{
	swal("Ready!", "All Fields Are Set")

$.ajax({
url:"ajax/ajaxcontrol.php",
method:"POST",
data:$('#proeditform').serialize()+"&action=insertpro",
success:function(data)
{


$('#proeditform')[0].reset();
  $('#addpro').modal('hide');
	swal("success!", "Product Details Updated Successfully", "success")

    load_product_data();

}
})


}


});

                 $(document).on('click', '.deletepro', function(){
        var id=$(this).data("id4");
        var action="deletepro";
        swal({
    title: "Are you sure?",
    text: "You will not be able to recover this data!",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "No,dont delete it!",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm) {
    if (isConfirm)
    {
    $.ajax({
        url:"ajax/ajaxcontrol.php",
        method:"POST",
        data:{action:action,id:id},
        dataType:"text",
        success:function(data){
 swal("Deleted!", "The product has been deleted.", "success");
      load_product_data();

      }


   });

 }
 else {
  swal("Cancelled", "The Product has no been deeted", "error");
 }





  });
    });
















			var btnCust = '<button type="button" class="btn btn-default" title="Add picture tags" ' +
		    'onclick="alert(\'Call your custom code here.\')">' +
		    '<i class="glyphicon glyphicon-tag"></i>' +
		    '</button>';
		$("#avatar-2").fileinput({
	    overwriteInitial: true,
	    maxFileSize: 150000,
	    showClose: false,
	    showCaption: false,
	    showBrowse: false,
	    browseOnZoneClick: true,
	    removeLabel: '',
	    removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
	    removeTitle: 'Cancel or reset changes',
	    elErrorContainer: '#kv-avatar-errors-2',
	    msgErrorClass: 'alert alert-block alert-danger',
	    defaultPreviewContent: '<img src="fileicon.png" alt="Your Avatar" style="width:100px; height:100px;">',
	    layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
	    allowedFileExtensions: ["jpg", "png", "gif"]
		});


			$("#uploadImageForm").unbind('submit').bind('submit', function() {

				var form = $(this);
				var formData = new FormData($(this)[0]);

				$.ajax({
					url: form.attr('action'),
					type: form.attr('method'),
					data: formData,
					dataType: 'json'+"&action=upload",
					cache: false,
					contentType: false,
					processData: false,
					success:function(response) {

						if(response.success == true) {
							$('#myModal').modal('hide');
							swal("success!", "Product Inserted Successfully", "success")
					load_product_data();

							$('input[type="text"]').val('');
							$(".fileinput-remove-button").click();
						}
						else {
							$("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
						  '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
						  response.messages +
						'</div>');
						}
					}
				});

				return false;
			});

    });
	</script>
