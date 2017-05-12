<?php

include 'init.php';

if($CMS->Auth->checkLoginStatus()) {
    $CMS->Template->set('active_chart', 'active');
    $CMS->Template->set('param', 'Charts');
    $CMS->Template->loadUrl('templates/views/viewsPanel/header.php');
    $CMS->Template->loadUrl('config/views/charts.php');
    $CMS->Template->loadUrl('templates/views/viewsPanel/footer.php');
} else {
    $CMS->Template->redirect('login.php');
}

