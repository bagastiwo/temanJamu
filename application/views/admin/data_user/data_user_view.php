        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data User nDashboard
                <small>1.0</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <ul class="breadcrumb">
                <li><a href="<?php echo base_url('admin/Data_user/insert') ?>"><i class="fa fa-plus"></i>Tambah Data</a></li>
            </ul>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Data User</h3>
                        </div>

                        <div class="box-body">
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>userID</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($Data_user as $data) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data->userID ?></td>
                                            <td><?php echo $data->username ?></td>
                                            <td><?php echo $data->password ?></td>
                                            <td align="center">
                                                <a href="<?php echo base_url('admin/Data_user/edit/' . $data->userID); ?>">
                                                    <button type="button" class="btn btn-primary btn-xs">Edit</button></a>
                                            </td>
                                            <td align="center">
                                                <a href="<?php echo base_url('admin/Data_user/delete/' . $data->userID); ?>">
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