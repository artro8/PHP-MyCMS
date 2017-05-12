<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link href="style/css/bootstrap.min.css" rel="stylesheet">
        <link href="style/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="style/css/datepicker3.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href="style/css/styles.css" rel="stylesheet">
        <link href="style/css/colorbox.css" rel="stylesheet">
        <link href='style/css/fullcalendar.min.css' rel='stylesheet' />
        <link href='style/css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
        

        
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
				<ul class="user-menu">
					<li class="dropdown pull-right">
                                            <a href="users.php#contact"><span class="glyphicon glyphicon-bell"><?php global $CMS; $CMS->Content->displayNoReadContact(); ?></span></a>
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>  User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li class="<?php echo $this->get('active_user'); ?>"><a href="login.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li class="<?php echo $this->get('active_settings'); ?>"><a href="?settings" id="setting"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-remove-circle"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div> 
							
		</div><!-- /.container-fluid -->
	</nav>
        
        
        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
                    <li class="<?php echo $this->get('active_user') ?>"><a href="login.php"><span class="glyphicon glyphicon-home"></span> Dashboard</a></li>
                    <li class="<?php echo $this->get('active_widget') ?>"><a href="widgets.php"><span class="glyphicon glyphicon-calendar"></span> Widgets</a></li>
                    <li class="<?php echo $this->get('active_chart') ?>"><a href="chart.php"><span class="glyphicon glyphicon-signal"></span> Charts</a></li>
                    <li class="<?php echo $this->get('active_table') ?>"><a href="tables.php"><span class="glyphicon glyphicon-th"></span> Pages</a></li>
                    <li class="<?php echo $this->get('active_form') ?>"><a href="form.php"><span class="glyphicon glyphicon-folder-open"></span> Forms</a></li>
                   
                    <li class="<?php echo $this->get('active_gallery') ?>"><a href="gallery.php"><span class="glyphicon glyphicon-picture"></span> Gallery</a></li>
                    
			
			<li role="presentation" class="divider"></li>
                        
                    <li><a href="../index.php"><span class="glyphicon glyphicon-eye-open"></span> Podgląd</a></li>
			
		</ul>
		
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo $this->get('param'); ?></h1>
			</div>
		</div><!--/.row-->

