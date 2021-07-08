<section class="content-header">
    <h1>
        Edit Data User
    </h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('admin/Data_user/edit/' . $Data_user[0]->userID); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" value="<?php echo $Data_user[0]->username ?>">
                    <p class="text-red"><?php echo form_error('username'); ?></p>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="text" name="password" value="<?php echo $Data_user[0]->password ?>">
                    <p class="text-red"><?php echo form_error('password'); ?></p>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('admin/Data_user') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>