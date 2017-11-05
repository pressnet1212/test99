<?php
require(ROOT.'/config/db_connect.php');


class ModelsSite {


   public function addPubble (){


if(!empty($_POST)){
     
 
 

     if (!empty($_POST['g-recaptcha-response'])){
		 $name = strip_tags($_POST['name']);
		 $Email = strip_tags($_POST['email']);
		 $site = strip_tags($_POST['site']);
		 $public = strip_tags($_POST['public']);
          $data = date("m.d.y");
          $ip=$_SERVER['REMOTE_ADDR'];
            $user_agent = $_SERVER["HTTP_USER_AGENT"];
                      if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
                      elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
                      elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
                      elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
                      elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
                      else $browser = "Неизвестный";
 
         

$connect = new db_connect();
$connect ->connect();
$connect ->mysqli->query("INSERT INTO `public` (`name`,   `data`, `Email`, `site`, `public`, `ip`, `browser`)
                 VALUES  ('$name', '$data',  '$Email', '$site', ' $public', '$ip', '$browser')");

 
 header("Location: /");
}else{
  $_POST['mesage_Capcha'] = 'Заповніть поле Captcha !';
  
  
}

}
}
    public function updatePublic ($id){


 
        $name = strip_tags($_POST['name']);
         $Email = strip_tags($_POST['email']);
         $site = strip_tags($_POST['site']);
         $public = strip_tags($_POST['public']);

$connect = new db_connect();
$connect ->connect();
$connect ->mysqli->query("UPDATE public SET name='$name', email='$Email', site='$site',  public='$public' WHERE ID='$id'");
 
     
    


}
     public static function getPubble (){
        

        $connect = new db_connect();
        $connect ->connect();
        
        $sql=$connect->mysqli->query("SELECT id, name, data, email, site, public FROM public");
		$row = array();
		
       $i = 0;
		while($result=mysqli_fetch_array($sql)) {

		 $row[$i]['id'] =  $result['id'];
		 $row[$i]['name'] = $result['name'];
          $row[$i]['data'] = $result['data'];
		 $row[$i]['site'] = $result['site'];
		 $row[$i]['email'] = $result['email'];
		  $row[$i]['public'] = $result['public'];
         $i++;

                 }
       return $row;
        }

public static function checkUserData ($login, $pass){
        
          $host = 'localhost';
           $dbname = 'alexandr87';
           $user = 'alexandr87';
           $password = 'Ferma14583';
           $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password); 
      $sql = 'SELECT * FROM users WHERE login = :login AND  pass = :pass';
      
       ($result = $db->prepare($sql));
       $result->bindParam(':login', $login, PDO::PARAM_INT);
       $result->bindParam(':pass', $pass, PDO::PARAM_INT);
       $result->execute();

      $user = $result->fetch();
     $user['id'];
       if($user){
        return  $user['id'];

       }
       return false;
        }




public  function dellPublic($id){
         
         $connect = new db_connect();
        $connect ->connect();
        
        $sql=$connect->mysqli->query("DELETE FROM public WHERE id='$id'");
           header("Location: /admin");
          }


public  function onePublic($id){
         
         $connect = new db_connect();
        $connect ->connect();
        
        $sql=$connect->mysqli->query("SELECT * FROM public WHERE id='$id'");
        $row = array();
        
       $i = 0;
        while($result=mysqli_fetch_array($sql)) {

         $row[$i]['id'] =  $result['id'];
          $row[$i]['name'] = $result['name'];
          $row[$i]['data'] = $result['data'];
         $row[$i]['site'] = $result['site'];
         $row[$i]['email'] = $result['email'];
          $row[$i]['public'] = $result['public'];
         $i++;

                 }
   
        return $row;
}
}
?>