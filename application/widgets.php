<?php

include 'init.php';

if($CMS->Auth->checkLoginStatus()) {
    $CMS->Template->set('active_widget', 'active');
    $CMS->Template->set('param', 'Widgets');
    $CMS->Template->loadUrl('templates/views/viewsPanel/header.php');
    $CMS->Template->loadUrl('config/views/widgets.php');
    $CMS->Template->loadUrl('templates/views/viewsPanel/footer.php');
    
    if(isset($_POST['submit'])) {
        $title = $_POST['title'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        
        echo $title." ".$start." ".$end;
        
        
        $CMS->Content->insertEvent($title, $start, $end);
       
    }
} else {
    $CMS->Template->redirect('login.php');
}


