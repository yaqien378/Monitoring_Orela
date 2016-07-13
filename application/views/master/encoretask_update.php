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
        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url().'ctr_encoretask/Update_encoretask' ?>">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">ID </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="id_encore_task" name="id_encore_task" type="text" class="form-control" value="<?php echo $encoretask->id_encore_task; ?>" readonly="readonly">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama 
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="nama" name="nama" class="form-control col-md-7 col-xs-12" data-validate-length-range="5" type="text" value="<?php echo $encoretask->nama_encore_task; ?>" >
            </div>
          </div>
          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/ctr_encoretask" >Back</a>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- /input master encore task -->
</div>
<!-- page content -->