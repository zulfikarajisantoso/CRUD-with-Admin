



<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">

                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $sub_judul; ?></h3>
                    <?php echo anchor('admin/kategori_kos/add', '<button class="btn btn-flat btn-sm pull-right"  style="background-color: #000;  color: #fff;">Add Kategori Menu</button>'); ?>
                </div><!-- /.box-header -->

                <div class="box-body">
                    <?php
                    if (count($hasil) > 0) {
                        $i = 1;
                    ?>
                        <table id="tabeldata" class="table table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th width="8%">ID</th>
                                    <th width="23%">Nama Kategori</th>
                                    <th>Deskripsi</th>
                                    <th width="9%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($hasil as $key => $list) {
                                ?>
                                    <tr>
                                        <td><?php echo $list['kategori_id']; ?></td>
                                        <td><?php echo $list['nama_kategori']; ?></td>
                                        <td><?php echo $list['deskripsi_kategori']; ?></td>
                                        <td>

                                            <a href='<?php echo "./kategori_kos/delete/$list[kategori_id]"; ?>' class="btn btn-danger" onClick="return confirm('Delete Forever')">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    <?php
                    } else {
                    ?>
                        <p class="text-muted">Data not available...</p>
                    <?php
                    }
                    ?>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.cols -->
    </div><!-- /.row -->
</section><!-- /.content -->