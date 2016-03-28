<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SerabazarBD</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/custom.css">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/toolkit.css"> -->
</head>
<body>
	<header>
		<div id="navbar">
			<nav class="navbar">
				<div class="container">
					
					  <!-- Collect the nav links, forms, and other content for toggling -->
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3">
							<div class="navbar-header">
								
							     <a class="navbar-brand" href="#">SERA</a>
							     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							     </button>
							</div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
							
						      <ul class="nav navbar-nav hidden-xs">
						        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>						        
						      </ul>

						      <form class="navbar-form navbar-left" role="search">
						        <div class="form-group">
						          <input type="text" class="form-control" placeholder="Search">
						        </div>
						        <button type="submit" class="btn btn-default">Submit</button>
						      </form>

						      <ul class="nav navbar-nav navbar-right">
						        <div class="login_button">
				                  <a href="" class="btn" data-toggle="modal" data-target="#SignIN">Sign In</a>
				                </div>
						       
						      </ul>
						    </div><!-- /.navbar-collapse -->
						
					</div>

				    
				</div>
			</nav>
		</div>
	</header>

	<div class="modal fade" id="SignIN" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3 col-lg-3" >
				<div class="collapse navbar-collapse" id="sidebar-1">
					<div class="sidebar_header">
						<h2>Category</h2>
						<div class="sidebar">
							<ul id="category">
								<li><a href="">Home</a></li>
								<li><a href="">Main Menu </a></li>
								<li><a href="">Category</a></li>
								<li><a href="">Products</a></li>
								<li><a href="">order</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-9 col-sm-9 col-xs-9 col-lg-9">
				<div class="sidebar">
					<div class="sidebar_header">
						<h2>Main Content</h2>
					</div>
				</div>
			</div>
		</div>
	</div>


	<footer>
		
	</footer>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>js/jQuery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
</body>
</html>