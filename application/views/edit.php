<div class="content-wrapper">
	<section class="content">
		<?php foreach ($bayararisan as $byrars) { ?>
		<form action="<?php echo base_url().'Bayararisan/update' ;?>" method="post">
			 <!-- <div class="form-group">
              <label>Nomor Arisan</label>
              <input type= "text" name="nomer" class="form-control" value="<?php  $byrars->nomer?>">
            </div> -->
            <div class="form-group">
              <label>Nomor Arisan</label>
              <input type= "text" name="nomer" class="form-control" value="<?php echo $byrars->nama_bayar_arisan?>">
            </div>
            <div class="form-group">
              <label>Nama Arisan</label>
              <input type= "hidden" name="id" class="form-control" value="<?php echo $byrars->id_bayar_arisan?>">
              <input type= "text" name="nama" class="form-control" value="<?php echo $byrars->nama_bayar_arisan?>">
            </div>
             
            <div class="form-group">
              <label>Status Bayar Arisan</label>
              <select name='statusbayar'>
                <option value=value="<?php echo $byrars->status_bayar?>">Belum Bayar</option>
                <option value=value="<?php echo $byrars->status_bayar?>">Bayar</option>
              </select>
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	<?php } ?>
	</section>
</div>