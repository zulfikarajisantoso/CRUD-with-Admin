   <!-- Content Header (Page header) -->
   <section class="content-header">
   	<h1>
   		Blank page
   		<small>it all starts here</small>
   	</h1>
   	<ol class="breadcrumb">
   		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   		<li><a href="#">Examples</a></li>
   		<li class="active">User Data</li>
   	</ol>
   </section>

   <!-- Main content -->
   <section class="content">

   	<!-- Default box -->
   	<div class="box">
   		<div class="box-header with-border">
   			<h3 class="box-title">Add User</h3>

   			<div class="box-tools pull-right">
   				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
   					<i class="fa fa-minus"></i></button>
   				<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
   					<i class="fa fa-times"></i></button>
   			</div>
   		</div>
   		<div class="box-body">


   			<form action="<?php echo base_url('admin/User/add') ?>" method="post">
   				<div class="form-group">
   					<label for="username">id</label>
   					<input class="form-control " type="text" name="id" placeholder="Input Id" />

   				</div>

   				<div class="form-group">
   					<label for="username">Username</label>
   					<input class="form-control " type="text" name="username" placeholder="Username" />

   				</div>

   				<div class="form-group">
   					<label for="fullname">Password</label>
   					<input class="form-control " type="text" name="password" placeholder="Password" />

   				</div>
   			

   				<div class="form-group">
   					<label for="email">E-Mail</label>
   					<input class="form-control " type="email" name="email" placeholder="Email" />

   				</div>

   				<div class="form-group">
   					<label for="level">Level</label>

   					<input class="form-control " type="text" name="level" placeholder="Role" />

   				</div>

   				<input class="btn " style="background-color: #778899; color:aliceblue; " type="submit" name="btnSubmit" value="Save" />
   			</form>


   		</div>
   		<!-- /.box-body -->
   		<!-- <div class="box-footer"> -->
   		<!-- <p><a href="User/add" class="btn btn-primary">Add User</a></p> -->
   		<!-- </div> -->
   		<!-- /.box-footer-->
   	</div>
   	<!-- /.box -->

   </section>
   <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->