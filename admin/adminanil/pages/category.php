<?php @include_once('../session.php');?>
<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">CATEGORIES</a></li>
				<li><a href="javascript:;">SUB-CATEGORIES</a></li>
				<li class="active">SUB-SUB-CATEGORIES</li>
			</ol>
			<!-- end breadcrumb -->

			<!-- end page-header -->

			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->

			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-12">


                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">

                            	<a href="#" data-toggle="modal" data-target="#myModal">Add Category</a>
																<a href="#" data-toggle="modal" data-target="#myModal3">Add SubCategory</a>

										
                         
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success refresh" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">DataTable - Extension Combination</h4>
                        </div>
                        <div class="panel-body tbl_image">




                                </tbody>
                            </table>
                        </div>
                    </div>
			    </div>

			    <!-- end col-10 -->
			</div>


			<!-- end row -->
		</div>




		<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Modal Header</h4>
</div>
<div class="modal-body">
<form method="post">
<label id="a">ADD-CATEGORY</label>

<input type="text" name="cat_name" id="categoryname" class="form-control" />
</br>
		 <div align="right">
					<input type="hidden" name="action" id="action" />
					<input type="hidden" name="user_id" id="user_id" />
					<button  id="button_actiona" class="btn btn-success">ACTIVE</button>


		 <button   id="button_actionb"  class="btn btn-danger" >DEACTIVE</button>
		 </div>


</form>
</div>

</div>
</div>
</div>

<div class="modal fade" id="myModal3" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Modal Header</h4>
</div>
<div class="modal-body">
<form method="post" >

				<select name="category" id="category" class="form-control action">



				</select>
				<br />
				<select name="subcategory" id="subcategory" class="form-control action">
			<option value="">Select sub-category</option>
				</select>
				<br />
				<select name="subsubcategory" id="subsubcategory" class="form-control ">
				 <option value="">Select sub-sub-category</option>
				</select>
<br />



 <div align="right">
			<input type="hidden" name="action" id="action" />
			<input type="hidden" name="user_id" id="user_id" />
			<input type="submit" name="button_actiona" id="button_action" class="btn btn-success" value="active"/>


 <input type="submit"  name="button_action" id="button_action"  class="btn btn-danger" value="deactive">
 </div>


</form>
</div>

</div>
</div>
</div>


<div id="userModal" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="user_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Add User</h4>
    </div>
    <div class="modal-body">
     <label>Enter First Name</label>
     <input type="text" name="first_name" id="first_name" class="form-control" />
     <br />
     <label>Enter Last Name</label>
     <input type="text" name="last_name" id="last_name" class="form-control" />
     <br />
     <label>Select User Image</label>
     <input type="file" name="user_image" id="user_image" />
     <span id="user_uploaded_image"></span>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </form>
 </div>
</div>




















		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
