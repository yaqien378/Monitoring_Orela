<!-- page content -->
<div class="clearfix"></div>

<div class="row">
<!-- update master perusahaan -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ubah Perusahaan</h2>
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
              <input id="id" name="id" type="text" class="form-control" value="<?php echo $perusahaan->id_perusahaan; ?>" readonly="readonly">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama" name="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" placeholder="PT Orela Shipyard" required="required" type="text" value="<?php echo $perusahaan->nama_perusahaan; ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alamat 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="alamat" name="alamat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="text" value="<?php echo $perusahaan->alamat_perusahaan; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">No Telepon
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="telp" name="telp" type="text" name class="form-control" data-inputmask="'mask' : '999-999-9999'" value="<?php echo $perusahaan->telepon_perusahaan; ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="email" name="email" type="email" placeholder="Orela@gmail.com" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $perusahaan->email_perusahaan; ?>">
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
<!-- /update master perusahaan -->