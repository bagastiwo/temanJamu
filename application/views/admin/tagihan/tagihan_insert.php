<section class="content-header">
    <h1>Insert Tagihan</h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('index.php/admin/tagihan/insert'); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>Tanggal Pembelian</label>
                    <input class="tm form-control" type="date" name="tanggal">
                    <p class="text-red"><?php echo form_error('tanggal');?></p>
                </div>
                <div class="form-group">
                    <label>Nama Pembeli</label>
                    <div>
                        <?php echo form_dropdown('pelangganbeli', $pelangganbeli)?>
                    </div>
                    <p class="text-red"><?php echo form_error('pelangganbeli');?></p>
                </div>
                <div class="form-group">
                    <label>Nama Produkt Jamu</label>
                    <div>
                        <?php echo form_dropdown('jamu', $jamu)?>
                    </div>
                    <p class="text-red"><?php echo form_error('jamu');?></p>
                </div>
                <div class="form-group">
                    <label>Stok Beli</label>
                    <input class="form-control" type="text" name="qtyjamu">
                    <p class="text-red"><?php echo form_error('qtyjamu');?></p>
                </div>
                <div class="form-group">
                    <label>Harga Jamu</label>
                    <input class="form-control" type="text" name="hargajamu">
                    <p class="text-red"><?php echo form_error('hargajamu');?></p>
                </div>
                <div class="form-group">
                    <label>Paket Franchise</label>
                    <div>
                        <?php echo form_dropdown('franchise', $franchise)?>
                    </div>
                    <p class="text-red"><?php echo form_error('franchise');?></p>
                </div>
                <div class="form-group">
                    <label>Harga Franchise</label>
                    <input class="form-control" type="text" name="hargafranchise">
                    <p class="text-red"><?php echo form_error('hargafranchise');?></p>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('index.php/admin/tagihan/') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
        
    </div>
</section>
