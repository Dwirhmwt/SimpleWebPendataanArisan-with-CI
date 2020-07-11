<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Dapat Arisan
      <small>KT. Guyub Makarti</small>
    </h1>
  </section>

  <section class="content">
    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success" style="margin-left: 20px"><i class="fa fa-plus"> Yang Dapat Arisan</i></button>
      <div class="navbar-form navbar-right">
        <?php echo form_open('dapatarisan/search') ?>
        <input type="text" name="keyword" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-success">Cari</button>

        <?php echo form_close() ?>
      </div>

    <table class="table table-striped" >
      <tr>
        <th>NO</th>
        <th>NOMOR ARISAN</th>
        <th>NAMA DAPAT ARISAN</th>
        <th>HARI/TANGGAL</th>
        <th>AKSI</th>
      </tr>

      <?php 

      $no = 1;
      foreach ($dapatarisan as $dars) : ?>
        <tr>
          <td><h4><?php echo $no++?></h4></td>
          <td><h4><?php echo $dars['no_dapat'] ?></h4></td>
          <td><h4><b><?php echo $dars['nama_dapat'] ?></b></h4></td>
          <td><h4><b><?php echo $dars['tgl_dapat'] ?></b></h4></td>
          <td onclick="javascript: return confirm('Yakin Akan Dihapus?')"><?php echo anchor('Dapatarisan/hapus/'.$dars['id_dapat'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"> Hapus</i></div>') ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DAPAT ARISAN</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url().'dapatarisan/tambah_aksi' ?>">
            <div class="form-group">
              <label>Nomor Arisan</label>
              <input type= "text" name="noarisan" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama Dapat Arisan</label>
              <input type= "text" name="namadapat" class="form-control">
            </div>
            <div class="form-group">
              <label>Tanggal Dapat Arisan</label>
              <input type= "date" name="tgl_dapat" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>