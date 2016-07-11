<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?php echo base_url(); ?>index.php/ctr_beranda" class="site_title"><i class="fa fa-anchor"></i> <span>Orela Shipyard</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
    <ul class="nav side-menu">
      <li><a href="<?php echo base_url(); ?>index.php/ctr_beranda"><i class="fa fa-home"></i> Dashboard </a></li>
      <?php if($_SESSION['hak_akses'] == "pmanager") : ?>
        <li><a><i class="fa fa-edit"></i> Master <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="<?php echo base_url(); ?>index.php/ctr_perusahaan">Perusahaan</a>
            </li>
            <li><a href="<?php echo base_url(); ?>index.php/ctr_jenisproyek">Jenis Proyek</a>
            </li>
            <li><a href="<?php echo base_url(); ?>index.php/ctr_proyek">Proyek</a>
            </li>
            <li><a href="<?php echo base_url(); ?>index.php/ctr_task">Task</a>
            </li>
          </ul>
        </li>
        <li><a><i class="fa fa-laptop"></i> Planning <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="general_elements.html">Schedule</a>
            </li>
            <li><a href="media_gallery.html">Budget</a>
            </li>
          </ul>
        </li>
        <li><a><i class="fa fa-file-text"></i> Report <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a>Planning<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li class="sub_menu"><a href="level2.html">Schedule</a>
                </li>
                <li><a href="#level2_1">Budget</a>
                </li>
              </ul>
            </li>
            <li><a href="#level1_2">Kemajuan Proyek</a>
            </li>
          </ul>
        </li>
      <?php endif ?>
      <?php if($_SESSION['hak_akses'] == "logistik") : ?>
        <li><a href="<?php echo base_url(); ?>index.php/ctr_material"><i class="fa fa-edit"></i> Master Logistik </a>
        </li>
        <li><a><i class="fa fa-laptop"></i> Real Budget </a>
        </li>
      <?php endif ?>
      <?php if($_SESSION['hak_akses'] == "pteam") : ?>
        <li><a><i class="fa fa-laptop"></i> Real Schedule </a>
        </li>
      <?php endif ?>
    </ul>
    </div>
    </div>
    <!-- /sidebar menu -->  
  </div>
</div>