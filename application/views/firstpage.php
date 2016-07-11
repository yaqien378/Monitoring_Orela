<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Orela Shipyard || Monitoring Proyek</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'vendors/bootstrap/dist/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url().'vendors/font-awesome/css/font-awesome.min.css'; ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url().'vendors/iCheck/skins/flat/green.css';?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url().'vendors/datatables.net-bs/css/dataTables.bootstrap.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css';?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url().'assets/css/custom.css'; ?>" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url().'vendors/jquery/dist/jquery.min.js'; ?>"></script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <?php $this->load->view('sidebar'); ?>

        <?php if($_SESSION['hak_akses'] == "pmanager") : ?>
          <!-- top navigation -->
          <div class="top_nav">
            <div class="nav_menu">
              <nav class="" role="navigation">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="<?php echo base_url().'assets/images/img.jpg'; ?>" alt="">Project Manager
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="<?php echo base_url().'index.php/ctr_beranda/logout'; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- /top navigation -->
        <?php endif ?>
        <?php if($_SESSION['hak_akses'] == "logistik") : ?>
          <!-- top navigation -->
          <div class="top_nav">
            <div class="nav_menu">
              <nav class="" role="navigation">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="<?php echo base_url().'assets/images/img.jpg'; ?>" alt="">Logistic
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="<?php echo base_url().'index.php/ctr_beranda/logout'; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- /top navigation -->
        <?php endif ?>
        <?php if($_SESSION['hak_akses'] == "pteam") : ?>
          <!-- top navigation -->
          <div class="top_nav">
            <div class="nav_menu">
              <nav class="" role="navigation">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="<?php echo base_url().'assets/images/img.jpg'; ?>" alt="">Project Management Team
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="<?php echo base_url().'index.php/ctr_beranda/logout'; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- /top navigation -->
        <?php endif ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <?php $this->load->view($isi); ?>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            ©2016 || Rastra Sewa
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- Bootstrap -->
    <script src="<?php echo base_url().'vendors/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url().'vendors/fastclick/lib/fastclick.js'; ?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url().'vendors/nprogress/nprogress.js'; ?>"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url().'vendors/datatables.net/js/jquery.dataTables.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/datatables.net-bs/js/dataTables.bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/datatables.net-buttons/js/dataTables.buttons.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/datatables.net-buttons/js/buttons.flash.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/datatables.net-buttons/js/buttons.html5.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/datatables.net-buttons/js/buttons.print.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/datatables.net-keytable/js/dataTables.keyTable.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/datatables.net-responsive/js/dataTables.responsive.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js';?>"></script>
    <script src="<?php echo base_url().'vendors/datatables.net-scroller/js/datatables.scroller.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/jszip/dist/jszip.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/pdfmake/build/pdfmake.min.js';?>"></script>
    <script src="<?php echo base_url().'vendors/pdfmake/build/vfs_fonts.js';?>"></script>
    <!-- validator -->
    <script src="<?php echo base_url().'vendors/validator/validator.min.js';?>"></script>
    <!-- jquery.inputmask -->
    <script src="<?php echo base_url().'vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js';?>"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url().'assets/js/custom.js'; ?>"></script>

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "excel",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        var table = $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->

    <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->

    <!-- jquery.inputmask -->
    <script>
      $(document).ready(function() {
        $(":input").inputmask();
      });
    </script>
    <!-- /jquery.inputmask -->
  </body>
</html>