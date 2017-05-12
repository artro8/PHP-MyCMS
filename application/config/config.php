<?php


class Config {
    
    public $Auth;
    
    public $Chart;
    
    public $Content;
    
    public $Counter;
    
    public $Database;
    
    public $Template;
    
    public function __construct($server, $user, $pass, $db) {
        $this->Database = new mysqli($server, $user, $pass, $db);
        $this->Database->set_charset('utf8');
        
        include(APP_PATH.'config/models/Auth.php');
        $this->Auth = new Auth();
        
        include(APP_PATH.'config/models/Template.php');
        $this->Template = new Template();
        
        include(APP_PATH.'content/models/Edit.php');
        $this->Content = new Edit();
        
        include(APP_PATH.'counter/models/counter.php');
        $this->Counter = new Counter();
        
       
        
        
        
        
        session_start();
    }
    
    function __destruct() {
        $this->Database->close();
    }
    
}
