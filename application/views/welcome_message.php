
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/sticky-footer/">

    <title>Codeigniter </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url('assets/bootstrap/css/ie10-viewport-bug-workaround.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/bootstrap/css/sticky-footer.css');?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url('assets/bootstrap/js/ie-emulation-modes-warning.js');?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Begin page content -->

    <div class="container">

      <div class="page-header">
        <h2>Codeigniter routes.php</h2>
      </div>

      <p><b><a href=<?php echo base_url('mahasiswa');?>>Mahasiswa</a></b>
      <br>
      call controller welcome/mahasiswa to display view  </p>


      <p><b><a href=<?php echo base_url('matakuliah');?>>Matakuliah</a></b>
      <br>
      call controller welcome/matakuliah to display view </p>


      <div class="page-header">
        <h2>Dashboard</h2>
      </div>

      <p><b><a href=<?php echo base_url('promh');?>>Profile Mahasiswa</a></b>
      <br>
      call controller welcome/mahasiswa to display view  </p>


      <p><b><a href=<?php echo base_url('promk');?>>Profile Matakuliah</a></b>
      <br>
      call controller welcome/matakuliah to display view </p>


    </div>



    <?php $this->load->view('footer'); ?>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
