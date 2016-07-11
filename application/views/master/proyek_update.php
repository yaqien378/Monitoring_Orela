<!-- page content -->
<div class="row">
<!-- input master proyek -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Master Proyek</h2>
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
        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'index.php/ctr_proyek/tambah_ubah' ?>">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Perusahaan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select id="perusahaan" name="perusahaan" class="select2_single form-control">
                <?php foreach($perusahaan as $pr) { ?>
                  <option value="<?php echo $pr->id_perusahaan; ?>" <?php echo $pr->id_perusahaan==$p->id_perusahaan?'selected':''; ?>><?php echo $pr->nama_perusahaan; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Proyek</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select id="jenisproyek" name="jenisproyek" class="select2_single form-control">
                <?php foreach($jenisproyek as $jpro) { ?>
                  <option value="<?php echo $jpro->id_jenis_proyek; ?>" <?php echo $jpro->id_jenis_proyek==$p->id_jenis_proyek?'selected':''; ?> ><?php echo $jpro->nama_jenis_proyek; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">ID </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="id_proyek" name="id_proyek" type="text" class="form-control" readonly="readonly" value="<?php echo $p->id_proyek; ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Deskripsi 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="deskripsi" name="deskripsi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="text" value="<?php echo $p->deskripsi_proyek; ?>">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tanggal Penerimaan 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="date" id="tgl_penerimaan" name="tgl_penerimaan" class="form-control col-md-7 col-xs-12" required="required" type="text" value="<?php echo $p->tanggal_penerimaan_proyek; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Estimasi Waktu
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="est_waktu" name="est_waktu" type="number" name class="form-control" value="<?php echo $p->estimasi_waktu_proyek; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Estimasi Biaya
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="est_biaya" name="est_biaya" type="text" name class="form-control" value="<?php echo $p->estimasi_biaya_proyek; ?>">
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
<!-- /input master proyek -->