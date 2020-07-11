<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Join Arisan
      <small>KT. Guyub Makarti</small>
    </h1>
  </section>

  <section class="content">
    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success" style="margin-left: 20px"><i class="fa fa-plus"> Tambah Data</i></button>
    <a class="btn btn-danger" href=" <?php echo base_url('arisan/print')?>"><i class="fa fa-print"></i> Print</a>
    <p>

      <div class="navbar-form navbar-right">
        <?php echo form_open('arisan/search') ?>
        <input type="text" name="keyword" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-success">Cari</button>

        <?php echo form_close() ?>
      </div>

    <table class="table table-striped" >
      <tr>
        <th>NO</th>
        <th>NOMOR ARISAN</th>
        <th>NAMA ARISAN</th>
        <th>AKSI</th>
      </tr>

      <?php 

      $no = 1;
      foreach ($arisan as $ars) : ?>
        <tr>
          <td><h4><?php echo $no++ ?></h4></td>
          <td><h4><b><?php echo $ars['no_arisan'] ?></b></h4></td>
          <td><h4><b><?php echo $ars['nama_arisan'] ?></b></h4></td>
          <td onclick="javascript: return confirm('Yakin Akan Dihapus?')"><?php echo anchor('Arisan/hapus/'.$ars['id'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"> Hapus</i></div>') ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA JOIN ARISAN</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url().'arisan/tambah_aksi' ?>">

            <div class="form-group">
              <label>Nomor Arisan</label>
              <input type= "text" name="nomer" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama Arisan</label>
              <input type= "text" name="nama" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>