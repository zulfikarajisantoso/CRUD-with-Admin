


<?php if ($_SERVER['REQUEST_METHOD'] == "POST") echo "$err"; ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box ">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $sub_judul; ?></h3>
                </div><!-- /.box-header -->
                <?php
                $attributes = array('autocomplete' => 'off', 'role' => 'form');
                echo form_open_multipart("admin/kategori_kos/add", $attributes);
                ?>
                <div class="box-body">
                    <div class="form-group">
                        <label class="control-label">Nama Kategori</label>
                        <input name="nama_kategori" type="text" class="form-control" placeholder="Nama Kategori" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Deskripsi</label>
                        <input name="deskripsi_kategori" type="text" class="form-control" placeholder="deskripsi Kategori"  required>
                    </div>
 
                </div><!-- /.box-body -->

                <div class="box-footer clearfix">
                    <button type="submit" class="btn btn-md btn-flat pull-right" style="background-color: #000;  color: #fff; margin-right: 5px;">Save</button>
                    <?php
                    echo form_close();
                    ?>
                 
                </div>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.cols -->
    </div><!-- /.row -->
</section><!-- /.content -->