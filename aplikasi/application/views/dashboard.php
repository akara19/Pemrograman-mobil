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
        <h1>Panel responsive</h1>
        <a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
        <a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a>
    </div><!-- /header -->

    <div role="main" class="ui-content jqm-content jqm-fullwidth">

    	<h1>Panel responsive</h1>

        <p>This is a typical page that has two buttons in the header bar that open panels. The left panel has the push display mode, the right panel reveal. To make this responsive, you can make the page re-flow at wider widths. This allows both the panel menu and page to be used together when more space is available. This behavior is controlled by CSS media queries. You can create a custom one for a specific breakpoint or use the breakpoint preset by adding the <code>class="ui-responsive-panel"</code> to the page container. We have added this class on this demo page. Note that when using the preset class, we also hide the dismiss layer on wider screens if the panel has the push display mode.</p>

		<div data-demo-html="#panel-responsive-page1"></div><!--/demo-html -->

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

	<div data-role="panel" data-position="right" data-display="reveal" data-theme="a" id="add-form">

        <form class="userform">

        	<h2>Login</h2>

            <label for="name">Username:</label>
            <input type="text" name="name" id="name" value="" data-clear-btn="true" data-mini="true">

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="" data-clear-btn="true" autocomplete="off" data-mini="true">

            <div class="ui-grid-a">
                <div class="ui-block-a"><a href="#" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-b ui-mini">Cancel</a></div>
                <div class="ui-block-b"><a href="#" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-mini">Save</a></div>
			</div>
        </form>

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
