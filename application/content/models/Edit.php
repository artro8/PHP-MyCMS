<?php


class Edit {
    
    private $contentType = array(
     'wysywig',
     'textarea',
     'oneline'
    );
    
    
    public function cleanContentId ($id) {
        $id = str_replace(' ', '_', $id);
        $id = str_replace('-', '_', $id);
        $id = preg_replace("/[^a-zA-Z0-9_]/",'', $id);
        
        return strtolower($id);
    }   

    public function loadContent($id) {
        global $CMS;
        if($stmt = $CMS->Database->prepare("SELECT content FROM content WHERE id = ?")) {
             $stmt->bind_param("s", $id);
             $stmt->execute();
             $stmt->store_result();
             
             if($stmt->num_rows > 0) {
                 $stmt->bind_result($content);
                 $stmt->fetch();
                 $stmt->close();
                 return $content;
             } else {
                 $stmt->close();
                 return false;
             }
         }
    }
    
    public function displayContent($id, $type = "wysywig") {
        $id = $this->cleanContentId($id);
     
        $type = strtolower(htmlentities($type, ENT_QUOTES));
        if(in_array($type, $this->contentType) == false) {
            echo "Nieprawidłowy typ zawartości";
            return;
        }

        $content = $this->loadContent($id);
        
        if($content === FALSE){
                $this->createBlock($id);
                $content = '';
            }
        
        $id = $this->cleanContentId($id);
     
        $type = strtolower(htmlentities($type, ENT_QUOTES));
        if(in_array($type, $this->contentType) == false) {
            echo "Nieprawidłowy typ zawartości";
            return;
        }

        $content = $this->loadContent($id);
        
        echo $content;
    }
    
    public function displayContentEdit($id, $type = "wysywig") {
        
        global $CMS;
        
        $id = $this->cleanContentId($id);
     
        $type = strtolower(htmlentities($type, ENT_QUOTES));
        if(in_array($type, $this->contentType) == false) {
            echo "Nieprawidłowy typ zawartości";
            return;
        }

        $content = $this->loadContent($id);
        
        if($CMS->Auth->checkLoginStatus()) {
           $edit_start = '<div class="">';
           $idBlock = '<td>'.$id.'</td>';
           $type . '">' . 'oneline' . '</a>';
           $edit_link = '<td><a class="" href="' . SITE_PATH . '/application/content/Edit.php?id='. $id.'&type='.$type . '"><span class="glyphicon glyphicon-pencil"></span> Edytuj blok</a></td>';
           $edit_end = '</div>';
           
           $contentchar = strlen($content);
           
           if($contentchar > 35) {
               $cut = substr($content, 0, 35);
               
               $content = $cut.'<a href="' . SITE_PATH . '/application/content/Edit.php?id='. $id.'&type='.$type . '"> ... </a>';
           }
           
           echo $edit_start;
           echo $idBlock.'<td>'.$content.'</td>'.$edit_link . $edit_end;
        } else {
            echo $content;
        }
    }
    
    
    public function generate($type, $content){
        if($type == 'wysiwyg'){
            return '<textarea name="field" id="field" class="wysiwyg">' . $content . '</textarea>';
        } else if ($type == 'textarea'){
            return '<textarea name="field" id="field" class="textarea">' . $content . '</textarea>';
        } else if ($type == 'oneline'){
            return '<input name="field" id="field" class="oneline" value="' . $content . '">';
        } else {
            $error = '<p>Uzyj właściwego typu treści</p>';
            return $error;
        }
    }
    
    public function updateContent($id, $content) {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("UPDATE content SET content = ? WHERE id = ?")) {
            $stmt->bind_param("ss", $content, $id);
            $stmt->execute();
            $stmt->close();
            
            $CMS->Template->redirect("../users.php");
        }
    }
    
    
    
    public function changeUserName($username) {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("UPDATE users SET username = ? WHERE id = 1 ")) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->close();
            
            $CMS->Template->redirect("../users.php");
        }
        
    }
    
    public function insertPdf($name, $changeName) {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("INSERT INTO pdf (name, changeName, data) VALUES (?, ?, NOW())")) {
            $stmt->bind_param("ss", $name, $changeName);
             $stmt->execute();
             $stmt->close();
        }
    }
    
    public function displayPdf() {
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT id, name, changeName,data FROM pdf")) {
            $stmt->execute();
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $changeName = $row['changeName'];
                    $data = $row['data'];
                    $result = "<tr><td>$id</td><td>$name</td><td>$changeName</td><td>$data</td><td><a href=".SITE_PATH."/application/content/pdf.php?id="."$id"."&name=$changeName".">Usuń</a></td></tr>";
                    echo $result_html = $result;
                }
            }
        }
    }
    
    public function displayPdfForUser() {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT id, name, changeName,data FROM pdf")) {
            $stmt->execute();
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $changeName = $row['changeName'];
                    $data = $row['data'];
                    $result = "<div class='col-mg-6 col-lg-6 col-xs-6'><a href=".SITE_PATH."/application/resources/pdf/$changeName><span class='fa fa-2x fa-fw fa-file-pdf-o'></span>$name</a></div>";
                    echo $result_html = $result;
                }
            }
        }
    }
    
    public function deletePdf($id) {
       global $CMS;
       
       if($stmt = $CMS->Database->prepare("DELETE FROM pdf WHERE id = ?")) {
           $stmt->bind_param("i", $id);
           $stmt->execute();
           $stmt->close();
       }
    }
    
    public function displayEvent() {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT * FROM evenement WHERE id")) {
            $stmt->execute();
            
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    echo json_encode($row).",";
                }
                $stmt->close();
            } 
        }
    }
    
    public function displayEventToFilter() {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT * FROM evenement WHERE id")) {
            $stmt->execute();
            
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    $i = 0;
                    $i++;
                    $id = $row['id'];
                    $title = $row['title'];
                    $start = $row['start'];
                    $end = $row['end'];
                    
                    if($end == null) {
                        $end = $start;
                        echo '<tr><td class="minify sortID">'.$i.'</td><td class="sortDesc">'.$title.'</td><td class="sortTotal">'.$start.'</td><td class="sortTotalTwo">'.$end.'</td><td><button class="btn btn-danger"><a href="'.SITE_PATH.'/application/content/events.php?id='.$id.'&name='.$title.'>Usuń</a></button>'.'</td></tr>';
                    } else {
                    echo '<tr><td class="minify sortID">'.$i.'</td><td class="sortDesc">'.$title.'</td><td class="sortTotal">'.$start.'</td><td class="sortTotalTwo">'.$end.'</td><td><button class="btn btn-danger"><a href="'.SITE_PATH.'/application/content/events.php?id='.$id.'$name='.$title.'">Usuń</a></button>'.'</td></tr>';
                    }
                    
                }
            } 
        }
    }
    
    public function insertEvent($title, $start, $end) {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("INSERT INTO evenement (title, start, end) VALUES (?, ?, ?)")) {
            $stmt->bind_param("sss", $title, $start, $end);
            $stmt->execute();
            $stmt->close();
            
            $CMS->Template->redirect('widgets.php');
        }
    }
    
    public function insertContact($email = false, $telephoneNumber = false) {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("INSERT INTO contact (email, telephone_number, status,data) VALUES (?, ?, false, NOW())")) {
            $stmt->bind_param("ss", $email, $telephoneNumber);
            $stmt->execute();
            $stmt->close();
        }
        
    }
    
    public function displayContact() {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT * FROM contact WHERE id")) {
            $stmt->execute();
            
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    $id = $row['id'];
                    $email = $row['email'];
                    $phone = $row['telephone_number'];
                    $status = $row['status'];
                    $data = $row['data'];
                    
                    if($status == true) {
                         echo "<tr><td class='sortDesc'>$email</td><td class='sortTotal'>$phone</td><td class='sortTotalTwo'>$data</td><td class='status-success'><span class='glyphicon glyphicon-ok'></span> Odpisano!</td></tr>";
                    } else {
                        if($email == null){
                            echo "<tr><td class='sortDesc'>$email</td><td class='sortTotal'>$phone</td><td class='sortTotalTwo'>$data</td><td class='status-danger'><span class='glyphicon glyphicon-remove'></span><a href=".SITE_PATH."/application/content/editContact.php?telephone=".$phone."&id=".$id."> Nie odpisano - Odpisz!</a></td></tr>";
                        } else if($phone == null){
                            echo "<tr><td class='sortDesc'>$email</td><td class='sortTotal'>$phone</td><td class='sortTotalTwo'>$data</td><td class='status-danger'><span class='glyphicon glyphicon-remove'></span><a href=".SITE_PATH."/application/content/editContact.php?email=".$email."&id=".$id."> Nie odpisano - Odpisz!</a></td></tr>";
                        } else {
                            echo "<tr><td class='sortDesc'>$email</td><td class='sortTotal'>$phone</td><td class='sortTotalTwo'>$data</td><td class='status-danger'><span class='glyphicon glyphicon-remove'></span><a href=".SITE_PATH."/application/content/editContact.php?telephone=".$phone."&email=".$email."&id=".$id."> Nie odpisano - Odpisz!</a></td></tr>";
                        }
                    }
                    
                }
            } 
        }
    }
    
    public function updateStatus($id) {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("UPDATE contact SET status = true WHERE id = ?")) {
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        }
    }
    
    public function displayDateViewsInJson() {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT data FROM counter_v")) {
            $stmt->execute();
            
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    $data = $row['data'];
                    echo json_encode($data).",";
                }
            }
            
        }
    }
    
    public function displayQuantityViewsJson() {
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT count FROM counter_v")) {
            $stmt->execute();
            
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    $count = $row['count'];
                    echo json_encode($count).",";
                }
            }
            
        }
    }
    
    public function displayDateViewsRealInJson() {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT data FROM counter_v_real")) {
            $stmt->execute();
            
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    $data = $row['data'];
                    echo json_encode($data).",";
                }
            }
            
        }
    }
    public function displayQuantityViewsRealInJson() {
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT count FROM counter_v_real")) {
            $stmt->execute();
            
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    $count = $row['count'];
                    echo json_encode($count).",";
                }
            }
            
        }
    }
    
    public function displayNoReadContact() {
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT SUM(status = false) AS sums FROM contact")) {
            $stmt->execute();
            $res = $stmt->get_result();
            if($res->num_rows > 0) {
                while($result = $res->fetch_assoc()) {
                    echo $result['sums'];
                }
            }
        }
    }
    
    function createBlock($id){
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("INSERT INTO content (id) VALUES (?)")){
            $stmt->bind_param('s', $id);
            $stmt->execute();
            $stmt->close();
        }
    }
    
    public function displayContentForAdmin() {
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT id, content FROM content")) {
            $stmt->execute();
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    $id = $row['id'];
                    $name = $row['content'];
                    $value = substr($name, 0, 100);
                    $type = 'textarea';
                    $result = '<tr><td>'.$id.'</td><td>'.$value.'</td><td><a class="" href="' . SITE_PATH . '/application/content/Edit.php?id='. $id.'&type='.$type . '"><span class="glyphicon glyphicon-pencil"></span> Edytuj blok</a></td></tr>';
                    echo $result_html = $result;
                }
            }
        }
    }
    
     public function deleteEvent($id) {
       global $CMS;
       
       if($stmt = $CMS->Database->prepare("DELETE FROM evenement WHERE id = ?")) {
           $stmt->bind_param("i", $id);
           $stmt->execute();
           $stmt->close();
       }
    }
    
    public function insertImage($name, $changeName, $filter) {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("INSERT INTO gallery (name, changeName, filter) VALUES (?, ?, ?)")) {
            $stmt->bind_param("sss", $name, $changeName, $filter);
             $stmt->execute();
             $stmt->close();
        }
    }
    
    public function displayImage() {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT id, name, changeName,filter FROM gallery")) {
            $stmt->execute();
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $changeName = $row['changeName'];
                    $filter = $row['filter'];
                    $result = "<tr id='addr0'><td align = 'center'><img class='image-panel' src=".SITE_PATH."/application/resources/gallery/$changeName /></td><td>".$name."</td><td>".$filter."</td><td><button class='btn btn-danger'><a href='".SITE_PATH."/application/content/image.php?id=$id&name=$changeName'>Usuń</a></button></td></tr>";
                    echo $result_html = $result;
                }
            }
        }
    }
    
    public function displayImageForUser() {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT id, name, changeName,filter FROM gallery")) {
            $stmt->execute();
            $res = $stmt->get_result();
            
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $changeName = $row['changeName'];
                    $filter = $row['filter'];
                    $result = " <div class='gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter $filter'><img class='img-responsive' src=".SITE_PATH."/application/resources/gallery/$changeName /></div>";
                    echo $result_html = $result;
                }
            }
        }
    }
    
     public function deleteImage($id) {
       global $CMS;
       
       if($stmt = $CMS->Database->prepare("DELETE FROM gallery WHERE id = ?")) {
           $stmt->bind_param("i", $id);
           $stmt->execute();
           $stmt->close();
       }
    }
}