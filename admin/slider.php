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
			    	      	      <div class="container box" style=" width:100%;  
                     padding:20px; 

                     background-color:#fff;  
                     border:1px solid #ccc;  
                     border-radius:1px;  
                     margin-top:10px;  ">  
           
                
                <br /><br />  
                <div id="user_collapse" class="collapse">  
                     <form method="post" id="user_form"> 
                        <label>YOU ARE GOING TO ADD?</label> <br/>
                         <label>CATEGORY</label> 
                          <input type="checkbox" name="category" value="1" id="category"  />  
                            <label>SUB-CATEGORY</label> 
                          <input type="checkbox" name="subcategory" value="2" id="subcategory"  /> 
                             <label>SUB-SUB-CATEGORY</label> 
                          <input type="checkbox" name="subsubcategory" value="3" id="subsubcategory"  /> 
                          <br />  
                           <label id="a">CATEGORY</label>  
                          <input type="text" name="last_name" id="categoryy" class="form-control" />  
                          <br />  

                          <label id="b">SUB-CATEGORY NAME</label>  
                          <input type="text" name="first_name" id="sub_category" class="form-control" />  
                          <br />  
                          <label id="c">OTHER</label>  
                          <input type="text" name="last_name" id="subsub_category" class="form-control" />  
                          <br />  


                          <label>Select User Image</label>  
                          <input type="file" name="user_image" id="user_image" />  
                          <input type="hidden" name="hidden_user_image" id="hidden_user_image" />  
                          <span id="uploaded_image"></span>  
                          <br />  
                          <div align="center">  
                               <input type="hidden" name="action" id="action" />  
                               <input type="hidden" name="user_id" id="user_id" />  
                               <input type="submit" name="button_action" id="button_action" class="btn btn-default" value="Insert" />  
                          </div>  
                          <br />  
                     </form>  
                </div>
            </div>
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                            	<a href="#" data-toggle="collapse" data-target="#user_collapse"><i class="fa fa-2x fa-plus" ></i></a>

                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">DataTable - Extension Combination</h4>
                        </div>
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="100px" nowrap>ID</th>
                                        <th width="200px" nowrap>NAME</th>
                                        <th width="200px" nowrap>STATUS</th>
                                        <th width="200px" nowrap>DATE</th>
                                        <th>CID</th>


                                    </tr>
                                </thead>
                                <tbody >
                                	<?php 
                                	include('class/class.categories.php');
$category =new Categories();
$category->listallcategories();


                                	?>
                              
                                </tbody>
                            </table>
                        </div>
                    </div>
			    </div>

			    <!-- end col-10 -->
			</div>


			<!-- end row -->
		</div>
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	