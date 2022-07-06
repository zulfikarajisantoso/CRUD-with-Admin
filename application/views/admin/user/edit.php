

   <!-- Main content -->
   <section class="content">

   	<!-- Default box -->
   	<div class="box">
   		<div class="box-header with-border">
   			<h3 class="box-title">Edit User</h3>

   			<div class="box-tools pull-right">
   				<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
   					<i class="fa fa-minus"></i></button>
   				
   			</div>
   		</div>
   		<?php
			$attributes = array('autocomplete' => 'off', 'role' => 'form');
			echo form_open_multipart("admin/user/edit/" . $old_value['id'], $attributes);
			?>
   	
   		<div class="box-body">
   			<div class="form-group">
   				<label class="control-label">Username</label>
   				<input name="username" type="text" class="form-control" placeholder="Input Username" value="<?php echo $old_value["username"]; ?>">
   			</div>
   			<div class="form-group">
   				<label class="control-label">Email</label>
   				<input name="email" type="email" class="form-control" placeholder="Input Email" value="<?php echo $old_value["email"]; ?>">
   			</div>
   			<div class="form-group">
   				<label class="control-label">Level</label>
   				<input name="level" type="text" class="form-control" placeholder="Input Level" value="<?php echo $old_value["level"]; ?>">
   			</div>
   		

   		</div><!-- /.box-body -->

   		<div class="box-footer clearfix">
   			<button type="submit" class="btn btn-md btn-flat pull-right" style="margin-right: 5px; background-color: #000; color:#fff; ">Update</button>
   			<?php
				echo form_close();
				?>
   		
   		</div>

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