<?php

include 'init.php';

if($CMS->Auth->checkLoginStatus()) {
    $CMS->Template->set('active_gallery', 'active');
    $CMS->Template->set('param', 'Gallery');
    $CMS->Template->loadUrl('templates/views/viewsPanel/header.php');
    $CMS->Template->loadUrl('config/views/gallery.php');
    $CMS->Template->loadUrl('templates/views/viewsPanel/footer.php');
    
    if(isset($_POST['submit'])) {
        $volume = $_FILES['plik']['size'];
        $types = $_FILES['plik']['type'];
        $name = $_FILES['plik']['name'];
        $instant = $_FILES['plik']['tmp_name'];
        $filter = $_POST['options'];
        
        $enlargement = array_pop(explode(".", $name)); // Wycinka rozszerzenia
        
        $max_size=round(($_POST['max_file_size']/1048576),3)."MB";
        
        $volumeMB=round(($volume/1048576),2).'MB'; 

        $changeName=(md5($name)).".".$enlargement;
        
        $folder="resources/gallery/";
        
        if ($volume <= 0)
        {
          echo ("Plik jest pusty nie mogę go przesłać <b>".$name." ".$volumeMB."</b><br />");
          exit;
        }

        if ($volumeMB > $max_size)
        {
          echo("Plik jest za duży maksymalnie można wysłać <b>".$max_size."</b>"." .Plik wysyłany ma rozmiar <b><i>".$volumeMB."</b></i><br />");
          exit;
        }

        if (file_exists($folder.$changeName))
        {
          echo ("Plik o takiej nazwie jest już na serwerku <b><i>".$changeName."</b></i><br />");
          exit;
        }
        
        if(!@move_uploaded_file($instant, $folder.$changeName)) {
          exit('Nie mozna zachowac pliku. Prawdopodobnie nie ma folderu lub nie można w nim zapisać');
        } else {
        echo "Przeslanie udało się - <b>".$name."</b>"." ".$volumeMB."<br />";
        $path_file=$folder.$changeName;
        $CMS->Content->insertImage($name, $changeName, $filter);
        }  
    }
} else {
    $CMS->Template->redirect('login.php');
}

