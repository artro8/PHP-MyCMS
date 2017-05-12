<?php

include("../init.php");

if($CMS->Auth->checkLoginStatus()) {
    if(isset($_GET['id']) && isset($_GET['name'])) {
        unlink("../resources/gallery/".$_GET['name']);
        $CMS->Content->deleteImage($_GET['id']);
        $CMS->Template->redirect('../gallery.php');
    }
}
