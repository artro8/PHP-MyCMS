<?php

include 'init.php';


if($CMS->Auth->checkLoginStatus()) {
    $CMS->Template->set('active_user', 'active');
    $CMS->Template->set('param', 'Dashboard');
    $CMS->Template->loadUrl('templates/views/viewsPanel/header.php');
    $CMS->Template->loadUrl('config/views/panel.php');
    $CMS->Template->loadUrl('templates/views/viewsPanel/footer.php');
    
    
} else {
    $CMS->Template->redirect('login.php');
}

