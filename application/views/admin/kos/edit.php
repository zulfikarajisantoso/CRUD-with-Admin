


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
                echo form_open_multipart("admin/kos/edit/" . $old_value['id_kos'], $attributes);
                ?>
                <div class="box-body">
                    <div class="form-group">
                        <label class="control-label">Kategori Menu</label>
                        <input name="id_kategori" type="number" class="form-control"  placeholder="Input id kategori" value="<?php echo $old_value["id_kategori"]; ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Nama Menu</label>
                        <input name="no_kamar" type="number" class="form-control" placeholder="Input No Kamar"  value="<?php echo $old_value["no_kamar"]; ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Harga</label>
                        <input name="harga_kamar" type="number" class="form-control"  placeholder="Input Harga Kamar"  value="<?php echo $old_value["harga_kamar"]; ?>">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Letak</label>
                        <input name="letak_kamar" type="text" class="form-control"  placeholder="Input Letak"  value="<?php echo $old_value["letak_kamar"]; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Kapasitas</label>
                        <input name="kapasitas_kamar" type="text" class="form-control"  placeholder="Input Kapasitas" value="<?php echo $old_value["kapasitas_kamar"]; ?>">
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Fasilitas</label>
                        <input name="fasilitas_kamar" type="text" class="form-control"  placeholder="Input Fasilitas"  value="<?php echo $old_value["fasilitas_kamar"]; ?>">
                    </div>
                    

                </div><!-- /.box-body -->

                <div class="box-footer clearfix">
                    <button type="submit" class="btn btn-md btn-flat pull-right" style="margin-right: px; background-color: #000; color:aliceblue; ">Update</button>
                  
                </div>

            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.cols -->
    </div><!-- /.row -->
</section><!-- /.content -->