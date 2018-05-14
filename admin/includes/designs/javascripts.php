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



        });

</script>

<script type="text/javascript">
  $(document).ready(function(){
   $("#subsubcategory").click(function(){
        $("#categoryy").hide();
         $("#sub_category").show();
          $("#subsub_category").show();
          $("#c").show();
              $("#b").show();
                  $("#a").hide();
    });

    $("#category").click(function(){
        $("#categoryy").show();
         $("#sub_category").hide();
          $("#subsub_category").hide();
            $("#c").hide();
              $("#b").hide();
                  $("#a").show();
    });
     $("#subcategory").click(function(){
        $("#categoryy").show();
         $("#sub_category").show();
          $("#subsub_category").hide();
            $("#c").hide();
              $("#b").show();
                  $("#a").show();
    });
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
})
                    }
                    else
                    {
                         alert("Both Fields are Required");
                    }
               });



    });
</script>
