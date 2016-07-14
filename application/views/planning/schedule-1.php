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
        <h2>Planning Schedule</h2>
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
              <select id="perusahaan" name="perusahaan" class="form-control" onchange="pilih_jenis()" required>
                <option value="">-- Pilih Persahaan --</option>
                <?php foreach($perusahaan as $p) { ?>
                  <option value="<?php echo $p->id_perusahaan; ?>"><?php echo $p->nama_perusahaan; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Proyek</label>
            <div class="col-md-6 col-sm-6 col-xs-12" id="box_jenis_proyek">
              <select id="jenis_proyek" name="jenis_proyek" class="form-control" required>
                <option value="">-- Jenis proyek --</option>
              </select>
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Deskripsi
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control" readonly="true" required></textarea>
              <!-- <select name="deskripsi" id="deskripsi" class="form-control">
                <option value="">-- pilih deskrpsi --</option>
                <option value="1">ini deskripsi</option>
                <option value="2">ini deskripsi</option>
              </select> -->
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
                <th>Tanggal Mulai</th>
                <th>Durasi</th>
                <th>Tanggal Selesai</th>
                <th>Est Waktu Tenaga Kerja</th>
                <th>Tarif Tenaga Kerja</th>
                <th>Jumlah Tenaga Kerja</th>
                <th>Biaya Tenaga Kerja</th>
                <th>Biaya Lain</th>
                <th>Biaya Total</th>
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
                <td></td>
                <td></td>
                <td style="text-align: center;">
                  <div class="hidden-sm hidden-xs action-buttons">
                    <a class="red" href="<?php echo base_url(); ?>" >
                        <i class="ace-icon fa fa-times bigger-130"></i>
                    </a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>Encore Task 1</td>
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
                  <input type="number" name="waktu_tk" id="waktu_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="tarif_tk" id="tarif_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="jumlah_tk" id="jumlah_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <span><strong>0</strong></span>
                </td>
                <td style="text-align:center">
                  <input type="number" name="biaya_lain" id="biaya_lain" class="form-control">
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
                  <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="durasi" id="durasi" class="form-control">
                </td>
                <td style="text-align:center">
                  <span><strong>mm/dd/yy</strong></span>
                </td>
                <td style="text-align:center">
                  <input type="number" name="waktu_tk" id="waktu_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="tarif_tk" id="tarif_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="jumlah_tk" id="jumlah_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <span><strong>0</strong></span>
                </td>
                <td style="text-align:center">
                  <input type="number" name="biaya_lain" id="biaya_lain" class="form-control">
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
                <td></td>
                <td></td>
                <td style="text-align: center;">
                  <div class="hidden-sm hidden-xs action-buttons">
                    <a class="red" href="<?php echo base_url(); ?>" >
                        <i class="ace-icon fa fa-times bigger-130"></i>
                    </a>
                  </div>
                </td>
              </tr>

              <tr>
                <td>Encore Task 1</td>
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
                  <input type="number" name="waktu_tk" id="waktu_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="tarif_tk" id="tarif_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="jumlah_tk" id="jumlah_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <span><strong>0</strong></span>
                </td>
                <td style="text-align:center">
                  <input type="number" name="biaya_lain" id="biaya_lain" class="form-control">
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
                  <input type="date" name="tgl_mulai" id="tgl_mulai" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="durasi" id="durasi" class="form-control">
                </td>
                <td style="text-align:center">
                  <span><strong>mm/dd/yy</strong></span>
                </td>
                <td style="text-align:center">
                  <input type="number" name="waktu_tk" id="waktu_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="tarif_tk" id="tarif_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <input type="number" name="jumlah_tk" id="jumlah_tk" class="form-control">
                </td>
                <td style="text-align:center">
                  <span><strong>0</strong></span>
                </td>
                <td style="text-align:center">
                  <input type="number" name="biaya_lain" id="biaya_lain" class="form-control">
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
  function pilih_jenis()
  {
    var id_perusahaan = $("#perusahaan").val();
    if (id_perusahaan)
    {
      $.ajax({
        url : '<?php echo base_url() ?>planning/schedule_act/set_jenis',
        type : 'post',
        data : {'id':id_perusahaan},
        success : function(data)
        {
          $("#box_jenis_proyek").html(data);
          $("#deskripsi").val('');
        },
        error : function()
        {
          alert("Sistem error , Please contact manintenace !");
        }
      });
    }else{
      $("#perusahaan").focus();
      $("#jenis_proyek").val('');
      $("#deskripsi").val('');
    }
  }

  function pilih_proyek()
  {
    var id_perusahaan = $("#perusahaan").val();
    var id_jenis = $("#jenis_proyek").val();
    if (id_perusahaan && id_jenis)
    {
      $.ajax({
        url : '<?php echo base_url() ?>planning/schedule_act/set_proyek',
        type : 'post',
        data : {'id_perusahaan':id_perusahaan,'id_jenis':id_jenis},
        success : function(data)
        {
          $("#deskripsi").val(data);
        },
        error : function()
        {
          alert("Sistem error , Please contact manintenace !");
        }
      });
    }else{
      $("#perusahaan").focus();
      $("#jenis_proyek").val('');
      $("#deskripsi").val('');
    }
  }


  $(document).ready(function() {
  });
</script>