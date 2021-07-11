        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                produkJamu nDashboard
                <small>1.0</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <ul class="breadcrumb">
                <li><a href="<?php echo base_url('admin/produkJamu/insert') ?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
            </ul>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">produkJamu</h3>
                        </div>

                        <div class="box-body">

                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Gambar</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    foreach ($produkJamu as $data) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data->id_produk ?></td>
                                            <td><?php echo $data->nama_produk ?></td>
                                            <?php header("Content-type: " . $data->gambar); ?>
                                            <?php echo "<td><img src='".base_url("upload/product/".$data->gambar)."' width='100' height='100'></td>";?>
                                            <td><?php echo $data->harga ?></td>
                                            <td><?php echo $data->stok ?></td>  
                                            <td align="center">
                                                <a href="<?php echo base_url('admin/produkJamu/edit/' . $data->id_produk); ?>">
                                                    <button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                                            </td>
                                            <td align="center">
                                                <a href="<?php echo base_url('admin/produkJamu/delete/' . $data->id_produk); ?>">
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