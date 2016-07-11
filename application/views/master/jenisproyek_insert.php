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
<!-- input master jenis proyek -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Master Jenis Proyek</h2>
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
        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'index.php/ctr_jenisproyek/tambah_ubah' ?>">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">ID </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="id" name="id" type="text" class="form-control" value="<?php echo $id_jenis_proyek; ?>" readonly="readonly">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama" name="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="Sea Bus" required="required" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Ukuran Panjang Kapal
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="ukuran" name="ukuran" type="number" name class="form-control" data-inputmask="'mask' : '9999'  required="required" >
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
<!-- /input master jenis proyek -->

<!-- data table master jenis proyek -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Table Master Jenis Proyek</h2>
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
              <th>Ukuran (Meter)</th>
              <th>Status</th>
              <th>Opsi</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($jenisproyek as $jp) { ?>
            <tr>
              <td><?php echo $jp->id_jenis_proyek; ?></td>
              <td><?php echo $jp->nama_jenis_proyek; ?></td>
              <td><?php echo $jp->ukuran_jenis_proyek; ?></td>
              <td><?php echo $jp->status_jenis_proyek=="Y"?"Aktif":"Non-Aktif"; ?></td>
              <td style="text-align: center;">
                <div class="hidden-sm hidden-xs action-buttons">
                  <a class="green" href="<?php echo base_url().'index.php/ctr_jenisproyek/ubah/'.$jp->id_jenis_proyek; ?>" >
                      <i class="ace-icon fa fa-pencil bigger-130"></i>
                  </a>
                  <a href="<?php echo base_url().'index.php/ctr_jenisproyek/activate/'.$jp->id_jenis_proyek; ?>" onclick="return confirm('Anda yakin?');">
                      <?php if($jp->status_jenis_proyek == "Y") { ?>
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
<!-- /data table master jenis proyek -->
</div>
<!-- /page content -->