<?php

include 'init.php';

if($CMS->Auth->checkLoginStatus()) {
    $CMS->Template->set('active_alert', 'active');
    $CMS->Template->set('param', 'Alerts');
    $CMS->Template->loadUrl('templates/views/viewsPanel/header.php');
    
    $CMS->Template->loadUrl('templates/views/viewsPanel/footer.php');
} else {
    $CMS->Template->redirect('login.php');
}

