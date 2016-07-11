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
<!-- input master task -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Master Task</h2>
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
        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'index.php/ctr_task/tambah_ubah' ?>">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Main Task</label>
            <div class="col-md-5 col-sm-6 col-xs-12">
              <select id="maintask" name="maintask" class="select2_single form-control">
                <?php foreach($maintask as $mt) { ?>
                  <option value="<?php echo $mt->id_main_task; ?>"><?php echo $mt->nama_main_task; ?></option>
                <?php } ?>
              </select>
            </div>
            <a class="btn btn-success" href="<?php echo base_url(); ?>index.php/ctr_maintask" >Insert</a>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">ID </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="id_task" name="id_task" type="text" class="form-control" readonly="readonly">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama" name="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="5" type="text">
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
<!-- /input master task -->

<!-- data table master task -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Table Master Task</h2>
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
              <th>Main Task</th>
              <th>Nama</th>
              <th>Status</th>
              <th>Opsi</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($task as $t) { ?>
            <tr>
              <td><?php echo $t->id_task; ?></td>
              <td><?php echo $t->id_main_task; ?></td>
              <td><?php echo $t->nama_task; ?></td>
              <td><?php echo $t->status_task=="Y"?"Aktif":"Non-Aktif"; ?></td>
              <td style="text-align: center;">
                <div class="hidden-sm hidden-xs action-buttons">
                  <a class="blue" href="<?php echo base_url(); ?>index.php/ctr_encoretask/index/<?php echo $t->id_task; ?>">
                    <i class="ace-icon fa fa-file bigger-130"></i>
                  </a>
                  <a class="green" href="<?php echo base_url().'index.php/ctr_task/ubah/'.$t->id_task; ?>" >
                      <i class="ace-icon fa fa-pencil bigger-130"></i>
                  </a>
                  <a href="<?php echo base_url().'index.php/ctr_task/activate/'.$t->id_task; ?>" onclick="return confirm('Anda yakin?');">
                      <?php if($t->status_task == "Y") { ?>
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
<!-- /data table master task -->
</div>
<!-- /page content -->
<script type="text/javascript">
  function get_increment(nama_maintask) {
    var increment = 0;
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "<?php echo base_url().'index.php/ctr_task/get_increment'; ?>", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("maintask=" + nama_maintask);
    increment = xhttp.responseText;
    return increment;
  }

  function generate_id(nama_maintask) {
    var id1 = nama_maintask.slice(-3);
    var inc = "000" + get_increment(nama_maintask);
    return "TASK" + id1 + inc.slice(-3);
  }

  $(document).ready(function() {
    var id1 = $("#maintask").val();
    var id = generate_id(id1);
    $("#id_task").val(id);

    $("#maintask").change(function() {
      var id1 = $(this).val();
      var id = generate_id(id1);
      $("#id_task").val(id);
    });
    
    // $("#jenisproyek").change(function() {
    //   var id1 = $("#perusahaan").val();
    //   var id2 = $(this).val();
    //   var id = generate_id(id1, id2);
    //   $("#id_proyek").val(id);
    // });
  });
</script>