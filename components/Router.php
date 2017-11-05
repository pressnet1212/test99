<?php 

class Router
{

      private $routes;

      public function __construct(){
     
    $routesPath = ROOT.'/config/routes.php';
           $this->routes = include($routesPath);
      }



private function GetUri (){
    
       if (!empty($_SERVER['REQUEST_URI'])){
       return trim($_SERVER['REQUEST_URI'],'/');
  }

}



public function run(){

     $uri = $this->GetUri();
      if(empty($uri)){

        $uri = 'index';
      }

      foreach ($this->routes as $uriPattern => $path){


      	if(preg_match("~$uriPattern~", $uri)){

      	  $segments = explode('/', $path);

       $controllerName = array_shift($segments).'Controller';
      	
          if($controllerName=='Controller'){
            $controllerName = 'SiteController';
          }


          $controllerName = ucfirst($controllerName);
           
     $actionName = 'action'.ucfirst(array_shift($segments));

 if( $actionName=='action'){
            $actionName = 'actionIndex';
          }


        $controllerFile = ROOT.'/controllers/'.
          $controllerName.'.php';

          if (file_exists($controllerFile)){
          	include_once($controllerFile);
          } 
        $controllerObject = new $controllerName;
        $result =$controllerObject->$actionName();
        if ($result != null){
        	break;
        }



      	}
      }
     

}


}




?>