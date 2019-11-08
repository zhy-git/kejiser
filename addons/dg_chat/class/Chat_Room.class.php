<?php
class Chat_Room extends Dg_Base{
   
   /*获取未结算金额*/
   public static function getFirstRoom($uniacid){
   	  $records=pdo_fetch("SELECT * FROM ".tablename("chat_room")." WHERE uniacid=:uniacid",array(":uniacid"=>$uniacid));
   	  if(empty($records)){
   	  	 return false;
   	  }
   	  return $records;
   }
}
?>