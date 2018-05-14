  <script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
  <script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
  <script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
    <script src="assets/crossbrowserjs/html5shiv.js"></script>
    <script src="assets/crossbrowserjs/respond.min.js"></script>
    <script src="assets/crossbrowserjs/excanvas.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
  <!-- ================== END BASE JS ================== -->

  <!-- ================== BEGIN PAGE LEVEL JS ================== -->
  <script src="assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
  <script src="assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js"></script>
  <script src="assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js"></script>
  <script src="assets/js/table-manage-combine.demo.min.js"></script>
  <script src="assets/js/apps.min.js"></script>
  <!-- ================== END PAGE LEVEL JS ================== -->

  <script>
    $(document).ready(function() {
      App.init();
      TableManageCombine.init();
    });
  </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53034621-1', 'auto');
  ga('send', 'pageview');
</script>



<script>
$(document).ready(function(){
 load_image_data();
 function load_image_data()
 {
  var action="fetch";
  $.ajax({
   url:"ajaxcontrol.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('.tbl_image').html(data);
   }
  });
 }

  load_subcat_data();
  function load_subcat_data()
  {
   var action="fetchsubcat";
   $.ajax({
    url:"ajaxcontrol.php",
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
     url:"ajaxcontrol.php",
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
                 var action="insert";

                     if(cat_name!='')
                     {
                       $.ajax({
    url:"ajaxcontrol.php",
    method:"POST",
    data:{cat_name:cat_name,action:action},
    dataType:"text",
    success:function(data)
    {

       load_image_data();
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
                          url:"ajaxcontrol.php",
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
        url:"ajaxcontrol.php",
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
       url:"ajaxcontrol.php",
       method:"POST",
       data:{action:action,id:id},
       dataType:"text",
       success:function(data){
swal("Deleted!", "Your data has been deleted.", "success");
     load_image_data();

     }


  });

}
else {
 swal("Cancelled", "Your data is safe :)", "error");
}





 });

   });
     $(document).on('click', '.refresh', function(){
                  load_image_data();
     });



        });

</script>
