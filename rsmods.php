<?php
$CHECKUSERID = $_GET['id']; 
$CHANEEL=$_GET['ch']; 
if($CHECKUSERID){
$api = file_get_contents("https://api.telegram.org/bot5452548013:AAGJFIxj4xulpcjSEeaYIUTnuPTpizcbo6c/getChatMember?chat_id=$CHANEEL&user_id=".$CHECKUSERID);
if((strpos($api,'"status":"left"') or strpos($api,'"Bad Request: USER_ID_INVALID"') or strpos($api,'"status":"kicked"'))!== false){
echo "غير مشترك";
}else{
echo "انت مشترك";
}
}
