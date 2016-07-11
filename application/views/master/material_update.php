<!-- page content -->
<div class="row">
<!-- input master material -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Update Master Material</h2>
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
              <input id="id" name="id" type="text" class="form-control" value="<?php echo $material->no_seri_material; ?>" readonly="readonly">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama" name="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="text" value="<?php echo $material->nama_material; ?>" >
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Satuan 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="satuan" name="satuan" class="form-control col-md-7 col-xs-12" data-validate-length-range="4" required="required" type="text" value="<?php echo $material->satuan_material; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Harga
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="harga" name="harga" type="number" name class="form-control" value="<?php echo $material->harga_material; ?>" >
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="button" class="btn btn-primary" onclick="javascript:history.go(-1);">Cancel</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- /input master material -->