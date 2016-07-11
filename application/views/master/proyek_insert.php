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
        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'index.php/ctr_proyek/update_ubah' ?>">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Perusahaan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select id="perusahaan" name="perusahaan" class="select2_single form-control">
                <?php foreach($perusahaan as $p) { ?>
                  <option value="<?php echo $p->id_perusahaan; ?>"><?php echo $p->nama_perusahaan; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Proyek</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select id="jenisproyek" name="jenisproyek" class="select2_single form-control">
                <?php foreach($jenisproyek as $jpro) { ?>
                  <option value="<?php echo $jpro->id_jenis_proyek; ?>"><?php echo $jpro->nama_jenis_proyek; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">ID </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="id_proyek" name="id_proyek" type="text" class="form-control" readonly="readonly">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Deskripsi 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="deskripsi" name="deskripsi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" required="required" type="text">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Tanggal Penerimaan 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="date" id="tgl_penerimaan" name="tgl_penerimaan" class="form-control col-md-7 col-xs-12" required="required" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Estimasi Waktu
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="est_waktu" name="est_waktu" type="number" name class="form-control">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Estimasi Biaya
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="est_biaya" name="est_biaya" type="text" name class="form-control">
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
<!-- /input master proyek -->

<!-- data table master proyek -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Table Master Proyek</h2>
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
              <th>Nama Perusahaan</th>
              <th>Jenis Proyek</th>
              <th>Deskripsi</th>
              <th>Tgl_Penerimaan</th>
              <th>Est. Waktu (Bulan)</th>
              <th>Est. Biaya (Rp.)</th>
              <th>Progress (%)</th>
              <th>Status</th>
              <th>Opsi</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($proyek as $pro) { ?>
            <tr>
              <td><?php echo $pro->id_proyek; ?></td>
              <td><?php echo $pro->id_perusahaan; ?></td>
              <td><?php echo $pro->id_jenis_proyek; ?></td>
              <td><?php echo $pro->deskripsi_proyek; ?></td>
              <td><?php echo $pro->tanggal_penerimaan_proyek; ?></td>
              <td><?php echo $pro->estimasi_waktu_proyek; ?></td>
              <td><?php echo $pro->estimasi_biaya_proyek; ?></td>
              <td><?php echo $pro->progress_proyek; ?></td>
              <td><?php echo $pro->status_proyek=="Y"?"Done":"Undone"; ?></td>
              <td style="text-align: center;">
                <div class="hidden-sm hidden-xs action-buttons">
                  <a class="green" href="<?php echo base_url().'index.php/ctr_proyek/ubah/'.$pro->id_proyek; ?>" >
                      <i class="ace-icon fa fa-pencil bigger-130"></i>
                  </a>
                  <a href="<?php echo base_url().'index.php/ctr_proyek/activate/'.$pro->id_proyek; ?>" onclick="return confirm('Anda yakin?');">
                      <?php if($pro->status_proyek  == "Y") { ?>
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
<!-- /data table master proyek -->
</div>
<!-- /page content -->
<script type="text/javascript">
  function get_increment(nama_perusahaan, jenis_proyek) {
    var increment = 0;
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "<?php echo base_url().'index.php/ctr_proyek/get_increment'; ?>", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("perusahaan=" + nama_perusahaan + "&jenis_proyek=" + jenis_proyek);
    increment = xhttp.responseText;
    return increment;
  }

  function generate_id(nama_perusahaan, jenis_proyek) {
    var id1 = nama_perusahaan.slice(-3);
    var id2 = jenis_proyek.slice(-3);
    var inc = "000" + get_increment(nama_perusahaan, jenis_proyek);
    return "PRO" + id1 + id2 + inc.slice(-3);
  }

  $(document).ready(function() {
    var id1 = $("#perusahaan").val();
    var id2 = $("#jenisproyek").val();
    var id = generate_id(id1, id2);
    $("#id_proyek").val(id);

    $("#perusahaan").change(function() {
      var id1 = $(this).val();
      var id2 = $("#jenisproyek").val();
      var id = generate_id(id1, id2);
      $("#id_proyek").val(id);
    });
    
    $("#jenisproyek").change(function() {
      var id1 = $("#perusahaan").val();
      var id2 = $(this).val();
      var id = generate_id(id1, id2);
      $("#id_proyek").val(id);
    });
  });
</script>