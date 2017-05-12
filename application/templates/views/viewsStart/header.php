<?php include('application/counter.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        
        
        <link href="application/style/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
        <link href="application/style/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href="application/style/css/colorbox.css" rel="stylesheet">
        <link href="application/style/css/home.css" type="text/css" rel="stylesheet" />
        <link href="http://code.gijgo.com/1.0.0/css/gijgo.css" rel="stylesheet" type="text/css" />
        
        
        
        <title></title>
    </head>
    <body>
        
        <header>
            <nav>
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                 
                </div>
                <div class="row">
                    <?php if($CMS->Auth->checkLoginStatus()) { echo '<div class="toolsnip"><a href="application/users.php"><span class="glyphicon glyphicon-th-list"></span> Panel</a><a href="application/logout.php"><span class="glyphicon glyphicon-remove-circle"></span> Wyloguj</a></div>'; } ?>
                <img class="logo"/>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav <?php if($CMS->Template->get('active_menu')) { echo 'navbar-nav';} else if($CMS->Template->get('active_products')) { echo 'navbar-nav-p';} else if($CMS->Template->get('active_contact')) { echo 'navbar-nav-c';} else if($CMS->Template->get('active_conservation')) { echo 'navbar-nav-con';} else if($CMS->Template->get('active_gallery')) { echo 'navbar-nav-g';} ?>">
                        <li><a href="index.php" <?php if($CMS->Template->get('active_menu')) { echo 'style="border-bottom: 2px solid #d35400"';} ?>>O firmie</a></li>
                        <li><a href="ourProducts.php" <?php if($CMS->Template->get('active_products')) { echo 'style="border-bottom: 2px solid #43D043"';} ?>>Nasze produkty</a></li>
<!--                        <li><a href="conservation.php" <?php if($CMS->Template->get('active_conservation')) { echo 'style="border-bottom: 2px solid #636971"';} ?>>Konserwacja</a></li>-->
                        <li><a href="gallery.php" <?php if($CMS->Template->get('active_gallery')) { echo 'style="border-bottom: 2px solid #EAD200"';} ?>>Galeria</a></li>
                        <li><a href="contact.php" <?php if($CMS->Template->get('active_contact')) { echo 'style="border-bottom: 2px solid #358CCE"';} ?>>Kontakt</a></li>
                        
                    </ul>
                    </div>
                </div>
                </div>
            </nav>
            
        </header>
