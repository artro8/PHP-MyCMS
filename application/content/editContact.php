<?php
    
include("../init.php");
if($CMS->Auth->checkLoginStatus()) {
    
    if(isset($_GET['id'])) {
        $CMS->Content->updateStatus($_GET['id']);
        $CMS->Template->redirect('../users.php');
        
    }
}
