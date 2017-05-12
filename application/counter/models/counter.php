<?php

class Counter {
    
    public function counterVisitor($data) {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT data FROM counter_v")) {
            $stmt->execute();
            $res = $stmt->get_result();
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                   $dataTime = $row['data'];
                   
                   if($dataTime == $data) {
                       if($dataTime == date('Y-m-d')) {
                       $stmt = $CMS->Database->prepare("UPDATE counter_v SET count = count + 1 WHERE data = '$dataTime'");
                       $stmt->execute();
                       } 
                   }  
                }
                
                if($dataTime != $data) {
                    $stmt = $CMS->Database->prepare("INSERT INTO counter_v (data, count) VALUES (NOW(), count = count + 1)");
                    $stmt->execute(); 
                }
                
            } 
        }  
    }
    
    public function sumCount() {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT SUM(count) AS sums FROM counter_v")) {
            $stmt->execute();
            $res = $stmt->get_result();
            if($res->num_rows > 0) {
                while($result = $res->fetch_assoc()) {
                    echo $result['sums'];
                }
            }
        }
        
    }
    
    public function insertIp($ip) {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT ip FROM server_ip ")) {
            $stmt->execute();
            $res = $stmt->get_result();
           if($res->num_rows > 0) {
               while($row = $res->fetch_assoc()) {
                   $result = $row['ip'];
                   if($result == $ip) {
                       $stmt = $CMS->Database->prepare("UPDATE server_ip SET data=NOW() WHERE ip = '$result'");
                       $stmt->execute();
                   } 
               }
               
               if($result != $ip) {
                   $stmt = $CMS->Database->prepare("INSERT INTO server_ip (ip, data) VALUES (?, NOW())");
                   $stmt->bind_param("s", $ip);
                   $stmt->execute();
               }
           }   
        }  
    }
    
    public function counterVisitorReal($data) {
        
        global $CMS;
        
        
        if($stmt = $CMS->Database->prepare("SELECT data FROM counter_v_real")) {
            $stmt->execute();
            $res = $stmt->get_result();
            if($res->num_rows > 0) {
                while($row = $res->fetch_assoc()) {
                   $dataTime = $row['data'];
                   
                   if($dataTime == $data) {
                       if($dataTime == date('Y-m-d')) {
                       $stmt = $CMS->Database->prepare("UPDATE counter_v_real SET count = count + 1 WHERE data = '$dataTime'");
                       $stmt->execute();
                       } 
                   }  
                }
                
                if($dataTime != $data) {
                    $stmt = $CMS->Database->prepare("INSERT INTO counter_v_real (data, count) VALUES (NOW(), count = count + 1)");
                    $stmt->execute(); 
                }
                
            } 
        }  

              
    }
    
    public function sumCountReal() {
        
        global $CMS;
        
        if($stmt = $CMS->Database->prepare("SELECT SUM(count) AS sums FROM counter_v_real")) {
            $stmt->execute();
            $res = $stmt->get_result();
            if($res->num_rows > 0) {
                while($result = $res->fetch_assoc()) {
                    echo $result['sums'];
                }
            }
        }
        
    }
    
}

