<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Belum Dapat Arisan
      <small>KT. Guyub Makarti</small>
    </h1>
  </section>

  <section class="content">
    <button data-toggle="modal" data-target="#exampleModal" class="btn btn-success" style="margin-left: 20px"><i class="fa fa-plus"> Yang Belum Dapat Arisan</i></button>
      <div class="navbar-form navbar-right">
        <?php echo form_open('belumdapatarisan/search') ?>
        <input type="text" name="keyword" class="form-control" placeholder="Search">
        <button type="submit" class="btn btn-success">Cari</button>

        <?php echo form_close() ?>
      </div>

    <table class="table table-striped" >
      <tr>
        <th>NO</th>
        <th>NOMOR ARISAN</th>
        <th>NAMA BELUM DAPAT ARISAN</th>
        <th>AKSI</th>
      </tr>

      <?php 

      $no = 1;
      foreach ($belumdapatarisan as $bdars) : ?>
        <tr>
          <td><h4><?php echo $no++?></h4></td>
          <td><h4><?php echo $bdars['no_belum'] ?></h4></td>
          <td><h4><b><?php echo $bdars['nama_belum'] ?></b></h4></td>
          <td onclick="javascript: return confirm('Yakin Akan Dihapus?')"><?php echo anchor('Belumdapatarisan/hapus/'.$bdars['id_belum'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"> Hapus</i></div>') ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">FORM INPUT BELUM DAPAT ARISAN</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="<?php echo base_url().'belumdapatarisan/tambah_aksi' ?>">
            <div class="form-group">
              <label>Nomor Arisan</label>
              <input type= "text" name="noarisan" class="form-control">
            </div>
            <div class="form-group">
              <label>Nama Belum Dapat Arisan</label>
              <input type= "text" name="namadapat" class="form-control">
            </div>
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>