
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>assets/dist/img/KT.GM.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>KT. Guyub Makarti</p>
          <a href="https://www.instagram.com/ktr.guyubmakarti/"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <hr>
      <p style="color: white; font-family: Courier New; text-align: center; ">Gedong, Gedong, Ngadirojo, Wonogiri</p>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        <li <?=$this->uri->segment(1) == 'admin' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
          <a href="<?=site_url('admin/dashboard')?>"><i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
          </a>
        </li>
        <li <?=$this->uri->segment(1) == 'arisan' ? 'class="active"' : '' ?>>
          <a href="<?=site_url('arisan/index')?>">
            <i class="fa fa-user"></i> <span>Join Arisan</span>
          </a>
        </li>
        <li <?=$this->uri->segment(1) == 'dapatarisan' ? 'class="active"' : '' ?>>
          <a href="<?=site_url('dapatarisan/index')?>">
            <i class="fa fa-user"></i> <span>Dapat Arisan</span>
          </a>
        </li>
        <li <?=$this->uri->segment(1) == 'belumdapatarisan' ? 'class="active"' : '' ?>>
          <a href="<?=site_url('belumdapatarisan/index')?>">
            <i class="fa fa-user"></i> <span>Belum Dapat Arisan</span>
          </a>
        </li>
         <li <?=$this->uri->segment(1) == 'bayararisan' ? 'class="active"' : '' ?>>
          <a href="<?=site_url('bayararisan/index')?>">
            <i class="fa fa-book"></i> <span>ARISAN</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-book"></i> <span>Kas</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-sign-out"></i> <span>Log Out</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>