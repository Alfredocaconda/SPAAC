<?php
class principalController {
    public static function auth(){
        Middleware::auth();
    
    }
    
    public function __construct()
    {
        $this->auth();
    }
    public static function index(){
        include "View/principal/principal.php";
    }
    public static function principal2(){
        Middleware::auth();
        include "View/principal/principal2.php";
    }
}
?>