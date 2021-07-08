        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                pelanggan nDashboard
                <small>1.0</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <ul class="breadcrumb">
                <li><a href="<?php echo base_url('admin/pelanggan/insert') ?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
            </ul>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Pelanggan</h3>
                        </div>

                        <div class="box-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID Pelanggan</th>
                                        <th>NIK Pelanggan</th>
                                        <th>Nama Pelanggan</th>
                                        <th>Kontak Pelanggan</th>
                                        <th>Email Pelanggan</th>
                                        <th>Alamat Pelanggan</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($pelanggan as $data) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data->id_pelanggan ?></td>
                                            <td><?php echo $data->nik_pelanggan ?></td>
                                            <td><?php echo $data->nama_pelanggan ?></td>
                                            <td><?php echo $data->hp_pelanggan ?></td>
                                            <td><?php echo $data->email_pelanggan ?></td>
                                            <td><?php echo $data->alamat_pelanggan ?></td>
                                            <td align="center">
                                                <a href="<?php echo base_url('admin/pelanggan/edit/' . $data->id_pelanggan); ?>">
                                                    <button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                                            </td>
                                            <td align="center">
                                                <a href="<?php echo base_url('admin/pelanggan/delete/' . $data->id_pelanggan); ?>">
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