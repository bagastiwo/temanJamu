        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                artikel nDashboard
                <small>1.0</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <ul class="breadcrumb">
                <li><a href="<?php echo base_url('admin/artikel/insert') ?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
            </ul>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Artikel</h3>
                        </div>

                        <div class="box-body">

                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Artikel</th>
                                        <th>Judul Artikel</th>
                                        <th>Isi Artikel</th>
                                        <th>Gambar</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($artikel as $data) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data->id_artikel ?></td>
                                            <td><?php echo $data->judul_artikel ?></td>
                                            <td><?php echo $data->isi_artikel ?></td>
                                            <?php header("Content-type: " . $data->gambar); ?>
                                            <?php echo "<td><img src='" . base_url("upload/product/" . $data->gambar) . "' width='100' height='100'></td>"; ?>
                                            <td align="center">
                                                <a href="<?php echo base_url('admin/artikel/edit/' . $data->id_artikel); ?>">
                                                    <button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                                            </td>
                                            <td align="center">
                                                <a href="<?php echo base_url('admin/artikel/delete/' . $data->id_artikel); ?>">
                                                    <button type="button" class="btn btn-primary btn-xs">Delete</button></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <?php echo $this->session->flashdata('pesan'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>