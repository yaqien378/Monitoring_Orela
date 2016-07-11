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
<!-- input master encore task -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Master Encore Task</h2>
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
        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'index.php/ctr_encoretask/tambah_ubah' ?>">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Task</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="hidden" id="task" name="task" value="<?php echo $task[0]->id_task; ?>">
              <input id="task2" name="task2" type="text" class="form-control" value="<?php echo $task[0]->nama_task; ?>" readonly="readonly">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">ID </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="id_encore_task" name="id_encore_task" type="text" class="form-control" readonly="readonly">
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
              <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/ctr_task" >Back</a>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- /input master encore task -->

<!-- data table master encore task -->
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Table Master Encore Task</h2>
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
              <th>Task</th>
              <th>Nama</th>
              <th>Status</th>
              <th>Opsi</th>
            </tr>
          </thead>

          <tbody>
            <?php foreach ($encoretask as $et) { ?>
            <tr>
              <td><?php echo $et->id_encore_task; ?></td>
              <td><?php echo $et->id_task; ?></td>
              <td><?php echo $et->nama_encore_task; ?></td>
              <td><?php echo $et->status_encore_task=="Y"?"Aktif":"Non-Aktif"; ?></td>
              <td style="text-align: center;">
                <div class="hidden-sm hidden-xs action-buttons">
                  <a class='blue'>
                    <i class="ace-icon fa fa-file bigger-130"></i>
                  </a>
                  <a class="green" href="<?php echo base_url().'index.php/ctr_encoretask/ubah/'.$et->id_encore_task; ?>" >
                      <i class="ace-icon fa fa-pencil bigger-130"></i>
                  </a>
                  <a href="<?php echo base_url().'index.php/ctr_task/activate/'.$et->id_encore_task; ?>" onclick="return confirm('Anda yakin?');">
                      <?php if($et->status_encore_task == "Y") { ?>
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
<!-- /data table master encore task -->
</div>
<!-- /page content -->
<script type="text/javascript">
  function get_increment(task) {
    var increment = 0;
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "<?php echo base_url().'index.php/ctr_encoretask/get_increment'; ?>", false);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("task=" + task);
    increment = xhttp.responseText;
    return increment;
  }

  function generate_id(task) {
    var id1 = task.slice(-6);
    var inc = "000" + get_increment(task);
    return "ET" + id1 + inc.slice(-6);
    alert(inc);
  }

  $(document).ready(function() {
    var id1 = $("#task").val();
    var id = generate_id(id1);
    $("#id_encore_task").val(id);

    $("#task").change(function() {
      var id1 = $(this).val();
      var id = generate_id(id1);
      $("#id_encore_task").val(id);
    });
  });
</script>