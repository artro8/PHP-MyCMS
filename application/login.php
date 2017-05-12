<?php

include 'init.php';

if($CMS->Auth->checkLoginStatus()) {
    $CMS->Template->redirect('users.php');
} else {
    if(isset($_POST['submit'])) {

        $CMS->Template->set('user', $_POST['username']);
        $CMS->Template->set('pass', $_POST['password']);

        if($_POST['username'] == null || $_POST['password'] == '') {
            $CMS->Template->loadUrl("config/views/login.php");
        } else if($CMS->Auth->validateLogin($CMS->Template->get('user'), $CMS->Template->get('pass')) == false) {
            $CMS->Template->loadUrl("config/views/login.php");
        } else {
            $_SESSION['username'] = $CMS->Template->get['user'];
            $_SESSION['loggedin'] = true;
            $CMS->Template->redirect("users.php");
        }

    } else {
        $CMS->Template->loadUrl("config/views/login.php");
    }

}