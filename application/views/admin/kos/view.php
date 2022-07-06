


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box ">

                <div class="box-header ">
                    <h3 class="box-title"><?php echo $sub_judul; ?></h3>
                    <?php echo anchor('admin/kos/add', '<button class="btn  btn-flat btn-sm pull-right" style="background-color: #000; color: #fff; ">Tambah List Menu</button>'); ?>
                </div><!-- /.box-header -->

                <div class="box-body">
                    <?php
                    if (count($hasil) > 0) {
                        $i = 1;
                    ?>
                        <table id="tabeldata" class="table  table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th width="8%">No</th>
                                    <th width="13%">Id Kategori</th>
                                    <th width="9%">No Kamar</th>
                                    <th width="15%">Harga</th>
                                    <th width="9%">Letak</th>
                                    <th width="9%">Kapasitas</th>
                                    <th width="17%">Fasilitas</th>
                                    <th width="30%">Aksi</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($hasil as $key => $list) {
                                    // Tampilkan hanya sebagian isi berita
                                    $news_content = strip_tags($list['id_kos']);
                                    $content = substr($news_content, 0, 100); // ambil sebanyak 220 karakter
                                    $content = substr($news_content, 0, strrpos($news_content, " ")); // spasi antar kalimat
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $list['id_kategori']; ?></td>
                                        <td><?php echo $list['no_kamar']; ?></td>
                                        <td>Rp. <?php echo $list['harga_kamar']; ?>/bulan</td>
                                        <td><?php echo $list['letak_kamar']; ?></td>
                                        <td><?php echo $list['kapasitas_kamar']; ?></td>
                                        <td><?php echo $list['fasilitas_kamar']; ?></td>

                                        <td>
                                            <a href='<?php echo "./kos/edit/$list[id_kos]"; ?>' class="btn btn-warning btn-md">Edit</a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href='<?php echo "./kos/delete/$list[id_kos]"; ?>'type="button" class='btn btn-danger' onClick="return confirm('Delete Forever')">
                                            Hapus</a>
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