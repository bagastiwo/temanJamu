<section class="content-header">
    <h1>Insert Data Artikel</h1>
</section>

<section class="content">
    <div class="box box-primary">

        <form role="form" action="<?php echo base_url('admin/artikel/insert'); ?>" method="post" enctype="multipart/form-data">
            <div class=" box-body">
            <div class="form-group">
                    <label>Judul Artikel</label>
                    <input class="form-control" type="text" name="judul_artikel">
                    <p class="text-red"><?php echo form_error('judul_artikel'); ?></p>
                </div>
                <div class="form-group" >
                    <label>Isi Artikel</label>
                    <textarea class="form-control" type="text" name="isi_artikel" > </textarea>
                    <p class="text-red"><?php echo form_error('isi_artikel'); ?></p>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input class="form-control" type="file" name="gambar">
                    <p class="text-red"><?php echo form_error('gambar'); ?></p>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?php echo base_url('admin/artikel/') ?>" class="btn btn-primary">Batal</a>
            </div>
        </form>
    </div>
</section>