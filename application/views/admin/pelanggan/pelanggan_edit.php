<section class="content-header">
    <h1>
        Edit Data Pelanggan
    </h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('admin/pelanggan/edit/'.$pelanggan[0]->id_pelanggan); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>NIK Pelanggan</label>
                    <input class="form-control" type="text" name="nik_pelanggan" value="<?php echo $pelanggan[0]->nik_pelanggan ?>">
                    <p class="text-red"><?php echo form_error('nik_pelanggan');?></p>
                </div>
                <div class="form-group">
                    <label>Nama Pelanggan</label>
                    <input class="form-control" type="text" name="nama_pelanggan" value="<?php echo $pelanggan[0]->nama_pelanggan ?>">
                    <p class="text-red"><?php echo form_error('nama_pelanggan');?></p>
                </div>
                <div class="form-group">
                    <label>HP Pelanggan</label>
                    <input class="form-control" type="text" name="hp_pelanggan" value="<?php echo $pelanggan[0]->hp_pelanggan ?>">
                    <p class="text-red"><?php echo form_error('hp_pelanggan');?></p>
                </div>
                <div class="form-group">
                    <label>Email Pelanggan</label>
                    <input class="form-control" type="text" name="email_pelanggan" value="<?php echo $pelanggan[0]->email_pelanggan ?>">
                    <p class="text-red"><?php echo form_error('email_pelanggan');?></p>
                </div>
                <div class="form-group">
                    <label>Alamat Pelanggan</label>
                    <input class="form-control" type="text" name="alamat_pelanggan" value="<?php echo $pelanggan[0]->alamat_pelanggan ?>">
                    <p class="text-red"><?php echo form_error('alamat_pelanggan');?></p>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('admin/pelanggan') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>