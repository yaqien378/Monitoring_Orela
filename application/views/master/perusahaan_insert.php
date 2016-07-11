<div class="clearfix"></div>
<?php if (isset($_SESSION['pesan'])) { ?>
  <div class="alert alert-block alert-info" role="alert">
    <button type="button" class="close" data-dismiss="alert">
      <i class="ace-icon fa fa-times"></i>
    </button>
    <?php echo $this->session->flashdata('pesan'); ?>
  </div>
<?php } ?>
<!-- page content -->
<div class="row">
<!-- input master perusahaan -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Master Perusahaan</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"></a>
          </li>
          <li><a class="collapse-link"></a>
          </li>
          <li><a class="collapse-link"></a>
          </li>
          <li><a class="collapse-link"></a>
          </li>
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'index.php/ctr_perusahaan/tambah_ubah' ?>">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">ID </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="id" name="id" type="text" class="form-control" value="<?php echo $id_perusahaan; ?>" readonly="readonly">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama" name="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="PT Orela Shipyard" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alamat 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="alamat" name="alamat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Jl Teluk Semangka 64, Surabaya" required="required" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">No Telepon
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="telp" name="telp" type="text" name class="form-control" data-inputmask="'mask' : '999-999-9999'">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="email" name="email" type="email" placeholder="Orela@gmail.com" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="reset" class="btn btn-primary">Cancel</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- /input master perusahaan -->

<!-- data table master perusahaan -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Table Master Perusahaan</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"></a>
            </li>
            <li><a class="collapse-link"></a>
            </li>
            <li><a class="collapse-link"></a>
            </li>
            <li><a class="collapse-link"></a>
            </li>
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable-buttons" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>No Telp</th>
              <th>E-mail</th>
              <th>Status</th>
              <th>Opsi</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($perusahaan as $p) { ?>
            <tr>
              <td><?php echo $p->id_perusahaan; ?></td>
              <td><?php echo $p->nama_perusahaan; ?></td>
              <td><?php echo $p->alamat_perusahaan; ?></td>
              <td><?php echo $p->telepon_perusahaan; ?></td>
              <td><?php echo $p->email_perusahaan; ?></td>
              <td><?php echo $p->status_perusahaan=="Y"?"Aktif":"Non-Aktif"; ?></td>
              <td style="text-align: center;">
                <div class="hidden-sm hidden-xs action-buttons">
                  <a class="green" href="<?php echo base_url().'index.php/ctr_perusahaan/ubah/'.$p->id_perusahaan; ?>" >
                      <i class="ace-icon fa fa-pencil bigger-130"></i>
                  </a>
                  <a href="<?php echo base_url().'index.php/ctr_perusahaan/activate/'.$p->id_perusahaan; ?>" onclick="return confirm('Anda yakin?');">
                      <?php if($p->status_perusahaan == "Y") { ?>
                      <i class="ace-icon fa fa-remove bigger-130 red"></i>
                      <?php } else { ?>
                      <i class="ace-icon fa fa-undo bigger-130 orange"></i>
                      <?php } ?>
                  </a>
                </div>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<!-- /data table master perusahaan -->
</div>
<!-- /page content -->