<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html>
	<head>
		<script src="//code.jquery.com/jquery-2.1.1.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/stylesheets/template.css" rel="stylesheet" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/stylesheets/bootstrap-theme.min.css" rel="stylesheet" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/stylesheets/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/stylesheets/font-awesome.min.css" rel="stylesheet" />
	</head>
	<body>
		<jdoc:include type="message" />
		<div id="wrapper">
			<div id="top-menu-wrapper">
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			      <div class="container">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <a class="navbar-brand" href="<?php echo $this->baseurl; ?>">MTO</a>
			        </div>
			        <div class="navbar-collapse collapse">
			          	<jdoc:include type="modules" name="top-page" />
			        </div>
			      </div>
			    </div>
			</div>
			<div id="main-page-wrapper">
				<div class="container-fluid"> 
					<div class="row">
						<jdoc:include type="modules" name="landing-page" />
						<div class="container">
							<div class="row">
								<jdoc:include type="component" />
							</div>
						</div>
						<jdoc:include type="modules" name="process" />
						<div class="container">
							<div class="row">
							    <jdoc:include type="modules" name="management" />
				                <jdoc:include type="modules" name="works" />
							    <jdoc:include type="modules" name="works-content" />
				                <jdoc:include type="modules" name="works-quote" />
				                <jdoc:include type="modules" name="services" />
				                <jdoc:include type="modules" name="contacts" />	
							</div>
						</div>
					    <jdoc:include type="modules" name="about-slider" />
		                <jdoc:include type="modules" name="featured" />
				        <jdoc:include type="modules" name="partners" />
					</div>
				</div>
			</div>
			<div id="footer-section">
				<div class="container-fluid">
					<div class="row">
						<div class="clearfix"></div>
						<jdoc:include type="modules" name="bottom-page-left" />
						<jdoc:include type="modules" name="bottom-page-right" />
						<jdoc:include type="modules" name="bottom-page-small" />
					</div>
				</div>
			</div>	
		</div>
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap.min.js"></script>
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/jquery.slider1.js"></script>
		<script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/window-resize.js"></script>
		</body>
</html>