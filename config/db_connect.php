<?php


class Db_connect {

      public $mysqli;

    public function connect (){
  
   $mysqli = new mysqli("localhost", "alexandr87", "Ferma14583", "alexandr87");
   $this->mysqli =  $mysqli = new mysqli("localhost", "alexandr87", "Ferma14583", "alexandr87");;
        if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}



    }



}

?>