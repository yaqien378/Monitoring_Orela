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
<!-- input master material -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Insert Master Material</h2>
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
        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'index.php/ctr_material/tambah_ubah' ?>">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nomor Seri Material </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="id" name="id" type="text" class="form-control" value="<?php echo $no_seri_material; ?>" readonly="readonly">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama" name="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Satuan 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="satuan" name="satuan" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" required="required" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Harga
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="harga" name="harga" type="number" name class="form-control" >
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
<!-- /input master material -->

<!-- data table master material -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Table Master Material</h2>
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
              <th>Satuan</th>
              <th>Harga</th>
              <th>Status</th>
              <th>Opsi</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($material as $m) { ?>
            <tr>
              <td><?php echo $m->no_seri_material; ?></td>
              <td><?php echo $m->nama_material; ?></td>
              <td><?php echo $m->satuan_material; ?></td>
              <td><?php echo $m->harga_material; ?></td>
              <td><?php echo $m->status_material=="Y"?"Aktif":"Non-Aktif"; ?></td>
              <td style="text-align: center;">
                <div class="hidden-sm hidden-xs action-buttons">
                  <a class="green" href="<?php echo base_url().'index.php/ctr_material/ubah/'.$m->no_seri_material; ?>" >
                      <i class="ace-icon fa fa-pencil bigger-130"></i>
                  </a>
                  <a href="<?php echo base_url().'index.php/ctr_material/activate/'.$m->no_seri_material; ?>" onclick="return confirm('Anda yakin?');">
                      <?php if($m->status_material == "Y") { ?>
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
<!-- /data table master material -->
</div>
<!-- /page content -->