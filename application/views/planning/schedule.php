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
              <button type="button" class="btn btn-primary" onclick="view()">View</button>
            </div>
          </div>
          </div>
        </div>
          <br>
          <div class="ln_solid"></div>
          <br>
        <div id="box_view">

        </div><!-- box_view -->
        </form>

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

  function view()
  {
    var id_perusahaan   = $("#perusahaan").val();
    var id_jenis        = $("#jenis_proyek").val();
    var deskripsi       = $("#deskripsi").val();
    if (id_perusahaan && id_jenis && deskripsi)
    {
      $.ajax({
        url : '<?php echo base_url() ?>planning/schedule_act/set_view',
        type : 'post',
        data : {'id_perusahaan':id_perusahaan,'id_jenis':id_jenis,'deskripsi':deskripsi},
        success : function(data)
        {
          $("#box_view").html(data);
        },
        error : function()
        {
          alert("Sistem error , Please contact manintenace !");
        }
      });
    }else{
      $("#perusahaan").focus();
    }
  }

  function set_tgl_selesai(id)
  {
    var tgl_mulai = $("#tgl_mulai_"+id).val();
    var durasi = $("#durasi_"+id).val();

    $("#span_tgl_selesai_"+id).text(tgl_mulai);

    var d = Date(2015,08,13+3);

    // var a =  d+4;
    alert(d);


  }

  function set_biaya_tk(id)
  {
    var tarif = $("#tarif_tk_"+id).val();
    var jumlah = $("#jumlah_tk_"+id).val();
    var biaya_tk = parseInt(tarif) * parseInt(jumlah);
    
    $("#biaya_tk_"+id).val(biaya_tk);
    $("#span_biaya_tk_"+id).html("<strong>"+biaya_tk+"</strong>");
  }

  function set_biaya_total(id)
  {
    var biaya_lain = $("#biaya_lain_"+id).val();
    var biaya_tk = $("#biaya_tk_"+id).val();
    var biaya_total = parseInt(biaya_tk) + parseInt(biaya_lain);
    
    $("#biaya_total_"+id).val(biaya_total);
    $("#span_biaya_total_"+id).html("<strong>"+biaya_total+"</strong>");


  }


</script>