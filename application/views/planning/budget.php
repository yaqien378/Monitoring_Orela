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
        <h2>Planning Budget</h2>
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
        <div class="row">
          <div class="col-md-12">
            
        <form class="form-horizontal form-label-left" method="post" action="#">

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Perusahaan</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="perusahaan" name="perusahaan" type="text" class="form-control" value="" readonly="readonly">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Proyek</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="jenis_proyek" name="jenis_proyek" type="text" class="form-control" readonly="readonly">
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Deskripsi
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select name="deskripsi" id="deskripsi" class="form-control">
                <option value="">-- pilih deskrpsi --</option>
                <option value="1">ini deskripsi</option>
                <option value="2">ini deskripsi</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
              <button type="button" class="btn btn-primary">View</button>
            </div>
          </div>
        </form>
          </div>
        </div>
          <br>
          <div class="ln_solid"></div>
          <br>
        <div class="row">
          <div class="col-md-12">
            
          <table  class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Nama Perusahaan</th>
                <th>Material</th>
                <th>Harga</th>
                <th>Tanggal Mulai</th>
                <th>Durasi</th>
                <th>Tanggal Selesai</th>
                <th>Jumlah Material</th>
                <th>Total Biaya</th>
                <th>Opsi</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td style="text-align:center"><strong>Main Task</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;">
                </td>
              </tr>

              <tr>
                <td><strong>Task 1</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;">
                  <div class="hidden-sm hidden-xs action-buttons">
                    <a class="red" href="<?php echo base_url(); ?>" >
                        <i class="ace-icon fa fa-times bigger-130"></i>
                    </a>
                    <a class="blue" href="#">
                        <i class="fa fa-plus bigger-130"></i>  
                    </a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>Encore Task 1</td>
                <td style="text-align:center">
                  <input type="text" name="material" id="material" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="harga" id="harga" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="durasi" id="durasi" class="form-control">
                </td>
                <td style="text-align:center">
                  <span><strong>mm/dd/yy</strong></span>
                </td>
                <td style="text-align:center">
                  <input type="number" name="jumlah_material" id="jumlah_material" class="form-control">
                </td>
                <td style="text-align:center"><span><strong>0</strong></span></td>
                <td style="text-align: center;">
                  <div class="hidden-sm hidden-xs action-buttons">
                    <a class="green" href="<?php echo base_url(); ?>" >
                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                    </a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>Encore Task 2</td>
                <td style="text-align:center">
                  <input type="text" name="material" id="material" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="harga" id="harga" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="durasi" id="durasi" class="form-control">
                </td>
                <td style="text-align:center">
                  <span><strong>mm/dd/yy</strong></span>
                </td>
                <td style="text-align:center">
                  <input type="number" name="jumlah_material" id="jumlah_material" class="form-control">
                </td>
                <td style="text-align:center"><span><strong>0</strong></span></td>
                <td style="text-align: center;">
                  <div class="hidden-sm hidden-xs action-buttons">
                    <a class="green" href="<?php echo base_url(); ?>" >
                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                    </a>
                  </div>
                </td>
              </tr>

              <tr>
                <td><strong>Task 2</strong></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: center;">
                  <div class="hidden-sm hidden-xs action-buttons">
                    <a class="red" href="<?php echo base_url(); ?>" >
                        <i class="ace-icon fa fa-times bigger-130"></i>
                    </a>
                    <a class="blue" href="#">
                        <i class="fa fa-plus bigger-130"></i>  
                    </a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>Encore Task 1</td>
                <td style="text-align:center">
                  <input type="text" name="material" id="material" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="harga" id="harga" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="durasi" id="durasi" class="form-control">
                </td>
                <td style="text-align:center">
                  <span><strong>mm/dd/yy</strong></span>
                </td>
                <td style="text-align:center">
                  <input type="number" name="jumlah_material" id="jumlah_material" class="form-control">
                </td>
                <td style="text-align:center"><span><strong>0</strong></span></td>
                <td style="text-align: center;">
                  <div class="hidden-sm hidden-xs action-buttons">
                    <a class="green" href="<?php echo base_url(); ?>" >
                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                    </a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>Encore Task 2</td>
                <td style="text-align:center">
                  <input type="text" name="material" id="material" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="harga" id="harga" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="durasi" id="durasi" class="form-control">
                </td>
                <td style="text-align:center">
                  <span><strong>mm/dd/yy</strong></span>
                </td>
                <td style="text-align:center">
                  <input type="number" name="jumlah_material" id="jumlah_material" class="form-control">
                </td>
                <td style="text-align:center"><span><strong>0</strong></span></td>
                <td style="text-align: center;">
                  <div class="hidden-sm hidden-xs action-buttons">
                    <a class="green" href="<?php echo base_url(); ?>" >
                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                    </a>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
          </div>
        </div><!-- end row -->
        
        <div class="row">
          <div class="col-md-12">
            <div class="pull-right">
              <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
<!-- /input master encore task -->

</div>
<!-- /page content -->
<script type="text/javascript">
  $(document).ready(function() {
  });
</script>