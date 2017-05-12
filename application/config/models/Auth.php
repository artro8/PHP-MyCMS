<?php


class Auth {
    
     private $salt = 'e3FG';
    
    function validateLogin($user, $pass) {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT * FROM users WHERE username = ? AND password = ?")) {
            $stmt->bind_param("ss", $user, md5($pass.$this->salt));
            $stmt->execute();
            $stmt->store_result();
            
            if($stmt->num_rows > 0) {
                $stmt->close();
                return true;
            } else {
                $stmt->close();
                return false;
            }
        } else {
            die();
        } 
    }
    
    function checkLoginStatus() {
        
        if(isset($_SESSION['loggedin'])) {
            return true;
        } else {
            return false;
        } 
    }
    
    function logout() {
        session_destroy();
        session_start();
    }
    
    function checkAuthorization() {
        global $CMS;
        if($this->checkLoginStatus() == FALSE) {
            $CMS->Template->error('unathorized');
            exit;
        }
    }
}
