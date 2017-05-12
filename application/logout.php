<?php

 include 'init.php';
 
 $CMS->Auth->logout();
 
 $CMS->Template->redirect('login.php');

