<?php 

include 'init.php';

$CMS->Auth->checkAuthorization();

if($CMS->Auth->checkLoginStatus()) {
    $CMS->Template->loadUrl('config/views/settings.php');     
     
    
            
    if(isset($_POST['changeName'])&& isset($_POST['newUsername'])) {
        
        $username = $_POST['newUsername'];
        $CMS->Content->changeUserName($username);
        
    }
    
} else {
    $CMS->Template->redirect('login.php');
}

