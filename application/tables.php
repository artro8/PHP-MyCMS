<?php

include 'init.php';

if($CMS->Auth->checkLoginStatus()) {
    $CMS->Template->set('active_table', 'active');
    $CMS->Template->set('param', 'Pages');
    $CMS->Template->loadUrl('templates/views/viewsPanel/header.php');
    $CMS->Template->loadUrl('config/views/tables.php');
    $CMS->Template->loadUrl('templates/views/viewsPanel/footer.php');
} else {
    $CMS->Template->redirect('login.php');
}

