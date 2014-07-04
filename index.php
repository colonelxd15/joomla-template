<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/stylesheets/template.css" rel="stylesheet" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/stylesheets/bootstrap-theme.min.css" rel="stylesheet" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/stylesheets/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/stylesheets/font-awesome.min.css" rel="stylesheet" />
		</head>
	<body>
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
			          <a class="navbar-brand" href="#">Project name</a>
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
								<div class="col-md-offset-2 col-md-8">
									<jdoc:include type="component" />
								</div>
				                <jdoc:include type="modules" name="management" />
				                <jdoc:include type="modules" name="about-slider" />
				                <jdoc:include type="modules" name="works" />
				                <jdoc:include type="modules" name="works-content" />
				                <jdoc:include type="modules" name="works-quote" />
				                <jdoc:include type="modules" name="services" />
				                <jdoc:include type="modules" name="contacts" />
							</div>
						</div>
		                <jdoc:include type="modules" name="featured" />
				        <jdoc:include type="modules" name="partners" />
						<jdoc:include type="modules" name="process" />
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
	</body>
</html>