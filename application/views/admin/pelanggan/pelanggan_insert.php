<section class="content-header">
    <h1>Insert Data Pelanggan</h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('admin/pelanggan/insert'); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>NIK Pelanggan</label>
                    <input class="form-control" type="text" name="nik_pelanggan">
                    <p class="text-red"><?php echo form_error('nik_pelanggan'); ?></p>
                </div>
                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input class="form-control" type="text" name="nama_pelanggan">
                    <p class="text-red"><?php echo form_error('nama_pelanggan'); ?></p>
                </div>
                <div class="form-group">
                    <label>Nomor HP Pelanggan</label>
                    <input class="form-control" type="text" name="hp_pelanggan">
                    <p class="text-red"><?php echo form_error('hp_pelanggan'); ?></p>
                </div>
                <div class="form-group">
                    <label>Email Pelanggan</label>
                    <input class="form-control" type="text" name="email_pelanggan">
                    <p class="text-red"><?php echo form_error('email_pelanggan'); ?></p>
                </div>
                <div class="form-group">
                    <label>Alamat Pelanggan</label>
                    <input class="form-control" type="text" name="alamat_pelanggan">
                    <p class="text-red"><?php echo form_error('alamat_pelanggan'); ?></p>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('admin/pelanggan/') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>