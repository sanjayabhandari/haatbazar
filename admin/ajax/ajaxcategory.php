

<script>
$(document).ready(function(){
  load_category_data();
select_category_data();

 function load_category_data()
 {
  var action="fetch";
  $.ajax({
   url:"ajax/ajaxcontrol.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {

    $('.tbl_image').html(data);
    App.init();
    TableManageCombine.init();

   }
  });
 }
 function select_category_data()
 {
  var action="selectcat";
  $.ajax({
   url:"ajax/ajaxcontrol.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {

    $('#category').html(data);


   }
  });
 }
 $('.action').change(function(){
  if($(this).val() != '')
  {
   var action = $(this).attr("id");
   var query = $(this).val();
   var result = '';
   if(action == "category")
   {
    result = 'subcategory';
   }
   else
   {
    result = 'subsubcategory';
   }
   $.ajax({
    url:"ajax/ajaxcontrol.php",
    method:"POST",
    data:{action:action, query:query},
    success:function(data){
     $('#'+result).html(data);
    }
   })
  }
 });

  load_subcat_data();
  function load_subcat_data()
  {
   var action="fetchsubcat";
   $.ajax({
    url:"ajax/ajaxcontrol.php",
    method:"POST",
    data:{action:action},
    success:function(data)
    {
     $('#subcategory').html(data);
    }
   });
  }

   load_subsubcat_data();
   function load_subsubcat_data()
   {
    var action="fetchsubsubcat";
    $.ajax({
     url:"ajax/ajaxcontrol.php",
     method:"POST",
     data:{action:action},
     success:function(data)
     {
      $('#subsubcategory').html(data);
     }
    });
   }
   $(document).on('click', '#button_actiona', function(){


                 var cat_name= $('#categoryname').val();
                      var subcat_name= $('#categoryname').val();
                 var action="insert";


                     if(cat_name!='')
                     {






                       $.ajax({
    url:"ajax/ajaxcontrol.php",
    method:"POST",
    data:{cat_name:cat_name,action:action},
    dataType:"text",
    success:function(data)
    {



    }
 });

                     }
                     else
                     {
                          alert("Both Fields are Required");
                     }

                 });
                      function edit_data(id, text, column_name)
                  {
                    var action="update";
                      $.ajax({
                          url:"ajax/ajaxcontrol.php",
                          method:"POST",
                          data:{action:action,id:id, text:text, column_name:column_name},
                          dataType:"text",
                          success:function(data){
                              alert(data);
              				$('#result').html("<div class='alert alert-success'>"+data+"</div>");
                          }
                      });
                  }
                  $(document).on('click', '.update', function(){
                    var action ="cupdate";
       var cat_id = $(this).attr("id0");

       $.ajax({
        url:"ajax/ajaxcontrol.php",
        method:"POST",
        data:{action:action,cat_id:cat_id},
        dataType:"text",
        success:function(data)
        {
         $('#userModal').modal('show');
         $('#first_name').val(data.id0);
         $('#last_name').val(data.status);
         $('.modal-title').text("Edit category");
         $('#user_id').val(id);

         $('#action').val("Edit");
         $('#operation').val("Edit");
        }
       })
      });




                $(document).on('click', '.delete', function(){
       var id=$(this).data("id3");
       var action="deletecat";
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
swal("Deleted!", "Your data has been deleted.", "success");
     load_category_data();

     }


  });

}
else {
 swal("Cancelled", "Your data is safe :)", "error");
}





 });

   });
     $(document).on('click', '.refresh', function(){
                  load_category_data();
     });



        });

</script>
