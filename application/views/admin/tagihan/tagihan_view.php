<!-- Content Header (Page header) -->
<section class="content-header">
            <h1>
                Tagihan nDashboard
                <small>1.0</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <ul class="breadcrumb">
                <li><a href="<?php echo base_url('index.php/admin/tagihan/insert') ?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
            </ul>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data Pembelian</h3>
                        </div>

                        <div class="box-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No ID</th>
                                        <th>Tanggal</th>
                                        <th>Nama Pembeli</th>
                                        <th>Nama Jamu</th>
                                        <th>Stok</th>
                                        <th>Harga Jamu</th>
                                        <th>Nama Franchise</th>
                                        <th>Harga Franchise</th>
                                        <th>Total Pembayaran</th>
                                        <th align="center">Pilihan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     foreach ($tagihan as $data) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data->id_transaksi ?></td>
                                            <td><?php echo $data->tanggal ?></td>
                                            <td><?php echo $data->a; ?></td>
                                            <td><?php echo $data->b; ?></td>
                                            <td><?php echo $data->c; ?></td>
                                            <td><?php echo $data->d; ?></td>
                                            <td><?php echo $data->e; ?></td>
                                            <td><?php echo $data->f; ?></td>
                                            <td><?php echo (($data->c*$data->d)+$data->f); ?></td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/admin/tagihan/edit/'. $data->id_transaksi); ?>">
                                                    <button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                                            
                                                <a href="<?php echo base_url('index.php/admin/tagihan/delete/'. $data->id_transaksi); ?>">
                                                    <button type="button" class="btn btn-primary btn-xs">Delete</button></a>
                                            </td>
                                        </tr>
                                    <?php }
                                    
                                    ?>

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
