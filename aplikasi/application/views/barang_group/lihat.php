<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel responsive - jQuery Mobile Demos</title>
    <link rel="stylesheet" href="
        <?php echo base_url('assets/css/themes/default/jquery.mobile-1.4.5.min.css');?>
    ">
    <link rel="stylesheet" href="
        <?php echo base_url('assets/_assets/css/jqm-demos.css');?> 
    ">
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<script src="<?php echo base_url('assets/js/jquery.js'); ?> "></script>
    <script src="<?php echo base_url('assets/_assets/js/index.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.mobile-1.4.5.min.js'); ?>"></script>
</head>
<body>
<div data-role="page" class="jqm-demos ui-responsive-panel" id="panel-responsive-page1" data-title="Panel responsive page">

    <div data-role="header">
        <h1>Data Group Barang</h1> 
    </div><!-- /header -->

    <div role="main" class="ui-content jqm-content jqm-fullwidth">
        <div class="ui-grid-a">
            <ul data-role="listview">
			<?php foreach($data as $_data){ ?>
				<li> 
					<a href="<?php echo base_url('index.php/Barang_group/Edit/').$_data->Id; ?>">  
					<?php echo $_data->Nama;?> 
					</a>
				</li>
			<?php } ?>
			</ul>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>

        <a href="../" data-rel="back" data-ajax="false" class="ui-btn ui-shadow ui-corner-all ui-mini ui-btn-inline ui-icon-carat-l ui-btn-icon-left ui-alt-icon ui-nodisc-icon">Back</a>

	</div><!-- /content -->

	<div data-role="panel" data-display="push" data-theme="b" id="nav-panel">

		<?php $this->load->view('side_menu'); ?>

	</div><!-- /panel -->


</div><!-- /page -->

<div data-role="page" id="panel-responsive-page2">

    <div data-role="header">
        <h1>Landing page</h1>
    </div><!-- /header -->

    <div role="main" class="ui-content jqm-content">

        <p>This is just a landing page.</p>

        <a href="#panel-responsive-page1" class="ui-btn ui-shadow ui-corner-all ui-btn-inline ui-mini ui-icon-back ui-btn-icon-left">Back</a>

    </div><!-- /content -->

</div><!-- /page -->

</body>
</html>
