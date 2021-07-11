<section class="content-header">
    <h1>
        Edit Tagihan
    </h1>
</section>

<section class="content">
    <div class="box box-primary">
        <form role="form" action="<?php echo base_url('index.php/admin/tagihan/edit/'.$tagihan[0]->id_transaksi); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>Edit Tanggal</label>
                    <input class="form-control" type="date" name="tanggal" value="<?php echo $tagihan[0]->tanggal ?>">
                    <p class="text-red"><?php echo form_error('tanggal');?></p>
                </div>
                <div class="form-group">
                    <label>Edit Pelanggan Beli</label>
                    <div>
                        <?php echo form_dropdown('pelangganbeli', $pelangganbeli, $tagihan[0]->pelangganbeli)?>
                    </div>
                    <p class="text-red"><?php echo form_error('pelangganbeli');?></p>
                </div>
                <div class="form-group">
                    <label>Edit Pilihan Jamu</label>
                    <div>
                        <?php echo form_dropdown('jamu', $jamu, $tagihan[0]->jamu)?>
                    </div>
                    <p class="text-red"><?php echo form_error('jamu');?></p>
                </div>
                <div class="form-group">
                    <label>Edit Stok</label>
                    <input class="form-control" type="text" name="qtyjamu" value="<?php echo $tagihan[0]->qtyjamu ?>">
                    <p class="text-red"><?php echo form_error('qtyjamu');?></p>
                </div>
                <div class="form-group">
                    <label>Edit Harga</label>
                    <input class="form-control" type="text" name="hargajamu" value="<?php echo $tagihan[0]->hargajamu ?>">
                    <p class="text-red"><?php echo form_error('hargajamu');?></p>
                </div>
                <div class="form-group">
                    <label>Edit Pilihan Franchise</label>
                    <div>
                        <?php echo form_dropdown('franchise', $franchise, $tagihan[0]->franchise)?>
                    </div>
                    <p class="text-red"><?php echo form_error('franchise');?></p>
                </div>
                <div class="form-group">
                    <label>Edit Harga Franchise</label>
                    <input class="form-control" type="text" name="hargafranchise" value="<?php echo $tagihan[0]->hargafranchise ?>">
                    <p class="text-red"><?php echo form_error('hargafranchise');?></p>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="<?php echo base_url('index.php/admin/tagihan') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>