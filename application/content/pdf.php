<?php

include("../init.php");

if($CMS->Auth->checkLoginStatus()) {
    if(isset($_GET['id']) && isset($_GET['name'])) {
        unlink("../resources/pdf/".$_GET['name']);
        $CMS->Content->deletePdf($_GET['id']);
        $CMS->Template->redirect('../form.php');
    }
}

