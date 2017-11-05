<?php 

require_once(ROOT.'/models/models.php');

class SiteController
{

   public function actionIndex(){

   $add = new ModelsSite();
  
    $public = $add->getPubble();
 $add->addPubble();


       require_once(ROOT.'/views/index.php');

   
   }
   



}