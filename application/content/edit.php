<?php

include("../init.php");

$CMS->Auth->checkAuthorization();

if(isset($_POST['field'])) {
    
    $id = $CMS->Content->cleanContentId($_GET['id']);
    $type = htmlentities($_GET['type'], ENT_QUOTES);
    
    $content = $_POST['field'];
    
    $CMS->Content->updateContent($id, $content);
    $CMS->Template->redirect('../tables.php');
    
} else {
    if(isset($_GET['id']) == false || isset($_GET['type']) == false) {
        echo "Błąd";
        exit();
    } 
    
    $id = $CMS->Content->cleanContentId($_GET['id']);
    $type = htmlentities($_GET['type'], ENT_QUOTES);
    
    $content = $CMS->Content->loadContent($id);
    
    $CMS->Template->set('block_id', $id);
    $CMS->Template->set('block_type', $type);
    $CMS->Template->set('cms_field', $CMS->Content->generate($type, $content), false);
    
    $CMS->Template->loadUrl(APP_PATH. 'content/views/Edit.php');
}

