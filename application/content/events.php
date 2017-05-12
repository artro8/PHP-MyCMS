<?php

include("../init.php");

if($CMS->Auth->checkLoginStatus()) {
    if(isset($_GET['id'])) {
        $CMS->Content->deleteEvent($_GET['id']);
        $CMS->Template->redirect('../widgets.php');
    }
}
