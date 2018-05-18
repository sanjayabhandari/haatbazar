

<div id="content" class="content">

			<!-- end breadcrumb -->

			<!-- end page-header -->

			<!-- begin row -->
			<div class="row">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
          <li><a href="javascript:;">Home</a></li>
          <li><a href="javascript:;">CATEGORIES</a></li>
          <li><a href="javascript:;">SUB-CATEGORIES</a></li>
          <li class="active">SUB-SUB-CATEGORIES</li>
                <li class="active">PRODUCTS</li>
        </ol>
			    <!-- begin col-2 -->

			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-md-12">


                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">

                                	<a href="#" data-toggle="modal" data-target="#myModal" style="decoration:none; color:green; font:150;">Add Products</a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success refreshproduct" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">PRODUCTS</h4>
                        </div>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="100px" nowrap>ID</th>
                                        <th width="100px" nowrap>NAME</th>
																		    <th width="10px" nowrap>IMAGE</th>
																				   <th width="20px" nowrap>STATUS</th>
																					    <th width="20px" nowrap>PRICE</th>
                                        <th width="200px" nowrap>SUBCATEGORY</th>
                                        <th width="100px" nowrap>SUB-SUB-CATEGORY</th>

																				<th>EDIT</th>
                                        		<th>DELETE</th>

                                    </tr>
                                </thead>
                                <tbody class="tbl_product">




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

		<div id="messages"></div>

		<form action="ajax/uploadimage.php" method="post" enctype="multipart/form-data" id="uploadImageForm">
		  <div class="form-group">
		    <label >Name</label>
		    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
		  </div>
      <div class="form-group">
        <label >price</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="price">
      </div>

			<select name="category" id="category" class="form-control action">



			</select>
			<br />
			<select name="subcategory" id="subcategory" class="form-control action">
			 <option value="">Select State</option>
			</select>
			<br />
			<select name="subsubcategory" id="subsubcategory" class="form-control ">
			 <option value="">Select City</option>
			</select>

      <div class="form-group">
        <label >status</label>
				<select name="status" id="status" class="form-control">
					 <option value="1">Active</option>
				 <option value="0">Deactive</option>
				</select>

      </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Photo</label>
		    <div id="kv-avatar-errors-2" class="center-block" style="width:400px;display:none"></div>

            <div class="kv-avatar " style="width:200px">
		        <input id="avatar-2" name="userImage" type="file" class="file-loading">
		    </div>
		  </div>
		  <button type="submit" name="submitpro" class="btn btn-default">Submit</button>
		</form>



    </div>
    </div>
    </div>

</div>


<div class="modal fade" id="addpro" role="dialog">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Modal Header</h4>
</div>
<div class="modal-body">

<div id="messages"></div>

<form  method="post" id="proeditform" >
	<div class="form-group">
		<label >Name</label>
		<input type="text" class="form-control" id="name" name="name">
	</div>
	<div class="form-group">
		<label >price</label>
		<input type="text" class="form-control" id="price" name="price">
	</div>
	<div class="form-group">
		<label >status</label>
		<input type="text" class="form-control" id="status" name="status" >
	</div>
	<div class="form-group">
		<label >subcategory</label>
		<input type="text" class="form-control" id="subc" name="subc" >
	</div>
	<div class="form-group">
		<label >subsubcategory</label>
		<input type="text" class="form-control" id="ssubc" name="ssubc">
	</div>
	<div class="form-group">
		<label>Photo</label>

				<input id="image" name="image" type="text" class="form-control">
		</div>
	<input id="pid" name="pid" type="hidden" class="form-control">
	  <input type="submit" name="insertpro" id="insert" class="btn btn-success">
</form>



</div>
</div>
</div>

</div>






		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
