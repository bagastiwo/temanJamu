<section class="content-header">
    <h1>Insert Data produkJamu</h1>
</section>

<section class="content">
    <div class="box box-primary">

        <form role="form" action="<?php echo base_url('admin/produkJamu/insert'); ?>" method="post" enctype="multipart/form-data">
            <div class=" box-body">  
            <div class="form-group">
                <label>Nama Produk</label>
                <input class="form-control" type="text" name="nama_produk">
                <p class="text-red"><?php echo form_error('nama_produk'); ?></p>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input class="form-control" type="file" name="gambar">
                <p class="text-red"><?php echo form_error('gambar'); ?></p>
            </div>
            <div class="form-group">
                <label>Khasiat</label>
                <input class="form-control" type="text" name="khasiat">
                <p class="text-red"><?php echo form_error('harga'); ?></p>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input class="form-control" type="text" name="harga">
                <p class="text-red"><?php echo form_error('harga'); ?></p>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input class="form-control" type="text" name="stok">
                <p class="text-red"><?php echo form_error('stok'); ?></p>
            </div>
    </div>

    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?php echo base_url('admin/produkJamu/') ?>" class="btn btn-primary">Batal</a>
    </div>
    </form>
    </div>
</section>