<!--FOR CATEGORY-->
 <!--FOR LOADING CATEGORY-->
<script>
$(document).ready(function(){
  load_category_data();
select_category_data();
<!--FORLOADING CATEGORY-->
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
 //FOR LOADING CATEGORY

//FOR SELECT-BOX
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
 //For selct box dyanmic
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
                     


                $(document).on('click', '.delete', function(){
       var id=$(this).data("id3");
         var cid=$(this).data("iid3");
          var scid=$(this).data("sid");
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
       data:{action:action,id:id,cid:cid,scid:scid},
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
