   <!-- Content Header (Page header) -->
   

   <!-- Main content -->
   <section class="content">

     <!-- Default box -->
     <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">User Data</h3>

         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
             <i class="fa fa-minus"></i></button>
         
         </div>
       </div>
       <div class="box-body">
         <table id="example2" class="table table-hover">
           <tr>
             <th style="text-align: center;">User ID</th>
             <th style="text-align: center;">Username</th>        
             <th style="text-align: center;">E-mail</th>
             <th style="text-align: center;">Level</th>
             <th style="text-align: center;">Aksi</th>
           </tr>
           <?php foreach ($hasil as $key => $list) { ?>
             <tr>
               <td><?php echo $list['id']; ?></td>
               <td><?php echo $list['username']; ?></td>           
               <td><?php echo $list['email']; ?></td>
               <td><?php echo $list['level']; ?></td>
               <td align="center">
               <a href='<?php echo "./user/edit/$list[id]"; ?>' class="btn btn-warning btn-md">Edit</a>
                                            &nbsp;&nbsp;&nbsp;
                 <a href='<?php echo "./user/delete/$list[id]"; ?>' type="button" class='btn btn-danger'>Hapus</a>
               </td>
             </tr>
           <?php } ?>
         </table>
       </div>
       <!-- /.box-body -->
       <div class="box-footer">
         <p><a href="User/add" class="btn " style="background-color: #000;  color: #fff;">Add User</a></p>
       </div>
       <!-- /.box-footer-->
     </div>
     <!-- /.box -->

   </section>
   <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->