<?php 
require_once(ROOT.'/models/models.php');

class AdminController
{
public $id;


public function actionLogin(){

 $User = new ModelsSite();
         
   

       if(!empty($_POST)){
       $login = $_POST['login'];
         $pass = $_POST['pass'];
      }
    
       
          
      $userId = $User->checkUserData($login, $pass);

      if($userId == false){
      	echo "Невірний логін або пароль";
      }else{  
    $_SESSION['user'] = $userId;
header("Location: /admin.php");
      }

		

}

public function actionAdmin(){

 if(isset($_SESSION['user'])){

 	$data = new ModelsSite();
 	$public = $data->getPubble();
 
 if(isset($_GET['id'])){
  	$id = $_GET['id'];
       $dell = $data->dellPublic($id);

   }

   require(ROOT.'/views/admin.php');
   }else{
 require(ROOT.'/views/login.php');
   }

  
}

public function actionPost(){
  
 
  if(isset($_GET['pub'])){
    $id = $_GET['pub'];
   $_SESSION['id'] = $id;
  $get = new ModelsSite();
  $result = $get->onePublic($id);


}
  if(isset($_POST['name'])){
  $data = new ModelsSite();
  $num = $_SESSION['id']; 
  $data->updatePublic($num);
 $_POST['mesage'] = 'Повідомлення успішно редаговано';
 $result = $data->onePublic($num);
    
}require(ROOT.'/views/post.php');

}
   



}
?>