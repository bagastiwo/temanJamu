<section class="content-header">
    <h1>
        Edit Data Barang
    </h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('admin/barang/edit/' . $barang[0]->id_barang); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input class="form-control" type="text" name="nama_barang" value="<?php echo $barang[0]->nama_barang ?>">
                    <p class="text-red"><?php echo form_error('nama_barang'); ?></p>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input class="form-control" type="file" name="gambar" value="<?php echo $barang[0]->gambar ?>">
                    <p class="text-red"><?php echo form_error('gambar'); ?></p>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input class="form-control" type="text" name="harga" value="<?php echo $barang[0]->harga ?>">
                    <p class="text-red"><?php echo form_error('harga'); ?></p>
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input class="form-control" type="text" name="stok" value="<?php echo $barang[0]->stok ?>">
                    <p class="text-red"><?php echo form_error('stok'); ?></p>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('admin/barang') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>