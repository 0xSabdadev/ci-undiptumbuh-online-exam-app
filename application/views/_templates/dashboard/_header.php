<!DOCTYPE html>
<html>

<head>

	<!-- Meta Tag -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$judul?></title>
	<meta content="UndipTumbuh 2022" name="title">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="UndipTumbuh,UNDIPTumbuh=,Universitas Diponegoro,hackaton,revealthesun,undip,TEDxundip,TEDx2022"
        name="keywords">
    <meta
        content="One of the greatest event is finally back! Prepare yourself and get ready to be part of TEDx 2022~! Be there or be square."
        name="description">
    <link rel="canonical" hreflang="id" href="https://undiptumbuh.test/login.html">
    <link rel="alternate" hreflang="en" href="https://undiptumbuh.test/login.html">
    <link rel="alternate" hreflang="x-default" href="https://undiptumbuh.test/login.html">
    <meta property="og:title" content="TEDx UNDIP 2022">
    <meta property="og:url" content="https://undiptumbuh.test/login.html">
    <meta property="og:image" content="../../../assets/img/og-image.png">
    <meta property="og:description"
        content="One of the greatest event is finally back! Prepare yourself and get ready to be part of TEDx 2022~! Be there or be square.">
    <link href="<?=base_url()?>assets/dist/img/icon.png" rel="icon">
    <link href="<?=base_url()?>assets/dist/img/icon.png" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap"
        rel="stylesheet">
	
	<!-- Required CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/AdminLTE.min.css?<?php echo time(); ?>">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/skin-blue.min.css?<?php echo time(); ?>">
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/skins/skin-black.min.css?<?php echo time(); ?>">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/pace/pace-theme-flash.css">
	
	<!-- Datatables Buttons -->
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/css/buttons.bootstrap.min.css">

	<!-- textarea editor -->
	<link rel="stylesheet" href="<?=base_url()?>assets/bower_components/codemirror/lib/codemirror.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/froala_style.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/bower_components/froala_editor/css/themes/royal.min.css">
	<!-- /texarea editor; -->

	<!-- datepicker -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	
	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/mystyle.css?<?php echo time(); ?>">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	<!-- include summernote css/js -->
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<style>
		@font-face {
			font-family: "Muli";
			src: url('../fonts/muli/Muli-Regular.ttf') format('truetype');
			font-weight: normal;
			font-style: normal;
			font-display: swap;
		}
		muli-normal {
			font-family: 'Muli', 'Courier New', Courier, monospace !important;
		}
		.fw-bold{
			font-weight: 600 !important;
		}
		.fw-bolder{
			font-weight: 700 !important;
		}
		.fw-boldest{
			font-weight: 800 !important;
		}
	</style>
</head>

<!-- Must Load First -->
<script src="<?=base_url()?>assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/select2/js/select2.full.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url()?>assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>		

<script type="text/javascript">
	let base_url = '<?=base_url()?>';
</script>

<body class="hold-transition skin-black sidebar-mini layout-fixed  " >
	<div class="wrapper">

		<header class="main-header">
			<?php require_once("_topmenu.php"); ?>
		</header>

		<!-- Sidebar -->
		<?php require_once("_sidebar.php"); ?>
		<!-- /.sidebar -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<section class="content-header">
				<h1>
					<?=$judul?>
					<small><?=$subjudul?></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard   fw-boldest"></i> Dashboard</a></li>
					<li class="active text-light-blue"><?=$judul;?></li>
					<li class="active"><?=$subjudul?></li>
				</ol>
			</section>
			<!-- Main content -->
			<section class="content container-fluid">
