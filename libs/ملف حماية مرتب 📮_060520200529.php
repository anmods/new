<?php
/*p
Saad Mohammed And Sajad Salam !
*/
$API_KEY = "token";
define('API_KEY','5543556908:AAH8vyZ0ZuzpwWPe8MWyni8nkgJEfy58gZ4');
echo "api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];

define('NO', '❌');
define('YES', '✅');
$e = "@VerifyinANInstaBot";
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
  }
  function save($id){
  $get = json_decode(file_get_contents("data.json"), true);
  if (!in_array($id, $get['groups'])) {
    $get['groups'][$id] = array('photo' =>['ok'=> YES],'edited'=>['ok'=> YES],"location"=>['ok'=> YES],'arabic'=>['ok'=> YES],'chat'=>['ok'=> YES],'joinmember'=>['ok'=> YES],'english'=>['ok'=> YES], 'video'=>[ 'ok'=> YES],'voice'=>[ 'ok'=> YES],'audio'=>[ 'ok'=> YES],'sticker'=>[ 'ok'=> NO],'fwd'=> ['ok'=> NO],'links'=>[ 'ok'=> NO],'bots'=> ['ok'=> NO],'user'=>['ok'=> NO],'mark'=>[ 'ok'=> NO],'doc'=> ['ok'=> YES], 'gif'=> ['ok'=> NO],'contact'=>['ok'=>NO]);
  file_put_contents("data.json", json_encode($get));
  return true;
  }else{
    return false;
  }
}
#                     ZHAEMR                       #
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$user_id = $message->from->id;
$from_id = $message->from->id;
$text = $message->text;
$new_user = $new->username;
$chat_id = $message->chat->id;
$Name_Group = $update->message->chat->title;
$new = $message->new_chat_member;
$left = $update->message->left_chat_member;
$contact = $update->message->contact;
$audio = $update->message->audio;
$location = $update->message->location;
$memb = $update->message->message_id;
$game = $update->message->game; 
$edited = $update->edited_message->text;
$first_name = $update->message->from->first_name;
$USERNAME = $message->from->username;
$gpname = $update->message->chat->title;
$user = $update->message->from->username;
$username = $update->message->from->username;
$for = $update->message->from->id;
$sticker = $update->message->sticker;
$video = $update->message->video;
$photo = $update->message->photo;
$voice = $update->message->voice;
$doc = $update->message->document;
$fwd = $update->message->forward_from;
$id = $message->from->id;
$id_bot = IDBOT;
$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
$type = $update->message->chat->type;
$name = $message->from->first_name;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$re_msgid = $update->message->reply_to_message->message_id;
$type = $update->message->chat->type;
$data = $update->callback_query->data;
$mid = $message->message_id;

$js = json_decode(file_get_contents("http://rueslinks.000webhostapp.com/Date.php?from=date"));
$date = $js->Date;
$time = $js->Time;

$get = json_decode(file_get_contents("data.json"), true);
if (!file_exists("data.json")) { file_put_contents("data.json", "{\"groups\":[]}");
}

$zha = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($zha, true);
$you = $info['result']['status'];
if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if ($text == "تفعيل" or $text == '/add' and  $you == "administrator") {
save($chat_id);
  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"• تم تفعيل البوت في المجموعةه بنجاح ، 👋🏻
• اكتب الاوامر لرؤية اوامر البوت ، 📌
• الاسم ؛ $Name_Group ، 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🌐؛](https://t.me/an3rakan)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• قائمةه الاوامر ، 📢", "callback_data"=>"zhaemr3"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"- اضغط هنا وتابع جديدنا 🔱 -", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
}
}


if(preg_match('/^(معلومات)(.*)/',$text)){
    $str = str_replace('معلومات @','',$text);
$get = file_get_contents('https://t.me/'.$str);
$info = explode('<meta property="twitter:',$get);
$name1 = str_replace('title" content="','',str_replace('">','',$info[1]));
$photo = str_replace('image" content="','',str_replace('">','',$info[2]));
$bio = explode('<div class="tgme_page_',$get);
$bio = str_replace('description">','',str_replace('</div>','',$bio[5]));
file_put_contents('p.jpg',file_get_contents($photo));
bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>new CURLFile('p.jpg'),
    'caption'=>"- ايدي المجموعةه : $chat_id 🚩 •
- المعرف : @$str ⚜ •
- الاسم : $name1 💌 •
- البايو : $bio"
    ]);
}

if(preg_match('/^(ايدي)(.*)/',$text)){
    $str = str_replace('ايدي @','',$text);
$get = file_get_contents('https://t.me/'.$str);
$info = explode('<meta property="twitter:',$get);
$name1 = str_replace('title" content="','',str_replace('">','',$info[1]));
$photo = str_replace('image" content="','',str_replace('">','',$info[2]));
$bio = explode('<div class="tgme_page_',$get);
$bio = str_replace('description">','',str_replace('</div>','',$bio[5]));
file_put_contents('p.jpg',file_get_contents($photo));
bot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>new CURLFile('p.jpg'),
    'caption'=>"- ايدي المجموعةه : $chat_id 🚩 •
- المعرف : @$str ⚜ •
- الاسم : $name1 💌 •
- البايو : $bio"
    ]);
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الملصقات' || $text == 'قفل الملصقات بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Stickers has been Locked by del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الملصقات بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['sticker']['ok'] = NO; $get['groups'][$chat_id]['sticker']['del'] = NO; $get['groups'][$chat_id]['sticker']['warn'] = YES; $get['groups'][$chat_id]['sticker']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الملصقات بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Stickers has been Locked by kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الملصقات بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['sticker']['ok'] = NO; $get['groups'][$chat_id]['sticker']['del'] = YES; $get['groups'][$chat_id]['sticker']['warn'] = YES; $get['groups'][$chat_id]['sticker']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الملصقات بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Stickers has been Locked by warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الملصقات بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['sticker']['ok'] = NO; $get['groups'][$chat_id]['sticker']['del'] = YES; $get['groups'][$chat_id]['sticker']['warn'] = NO; $get['groups'][$chat_id]['sticker']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($sticker){
 if( $get['groups'][$chat_id]['sticker']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['sticker']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['sticker']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال الملصقات •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الصور' || $text == 'قفل الصور بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Photo has been Locked by del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الصور بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['photo']['ok'] = NO; $get['groups'][$chat_id]['photo']['del'] = NO; $get['groups'][$chat_id]['photo']['warn'] = YES; $get['groups'][$chat_id]['photo']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الصور بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Photo has been Locked by kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الصور بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['photo']['ok'] = NO; $get['groups'][$chat_id]['photo']['del'] = YES; $get['groups'][$chat_id]['photo']['warn'] = YES; $get['groups'][$chat_id]['photo']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الصور بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Photo has been Locked by del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الصور بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['photo']['ok'] = NO; $get['groups'][$chat_id]['photo']['del'] = YES; $get['groups'][$chat_id]['photo']['warn'] = NO; $get['groups'][$chat_id]['photo']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($photo){
 if( $get['groups'][$chat_id]['photo']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['photo']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['photo']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال الصور •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الجهات' || $text == 'قفل الجهات بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Contact has been Locked by del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الجهات بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['contact']['ok'] = NO; $get['groups'][$chat_id]['contact']['del'] = NO; $get['groups'][$chat_id]['contact']['warn'] = YES; $get['groups'][$chat_id]['contact']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الجهات بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Contact has been Locked by kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الجهات بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['contact']['ok'] = NO; $get['groups'][$chat_id]['contact']['del'] = YES; $get['groups'][$chat_id]['contact']['warn'] = YES; $get['groups'][$chat_id]['contact']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الجهات بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Contact has been Locked by warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الجهات بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['contact']['ok'] = NO; $get['groups'][$chat_id]['contact']['del'] = YES; $get['groups'][$chat_id]['contact']['warn'] = NO; $get['groups'][$chat_id]['contact']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($contact){
 if( $get['groups'][$chat_id]['contact']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['contact']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['contact']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال الجهات •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الملفات' || $text == 'قفل الملفات بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Doc has been Locked by del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الملفات بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['doc']['ok'] = NO; $get['groups'][$chat_id]['doc']['del'] = NO; $get['groups'][$chat_id]['doc']['warn'] = YES; $get['groups'][$chat_id]['doc']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الملفات بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Doc has been Locked by kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الملفات بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['doc']['ok'] = NO; $get['groups'][$chat_id]['doc']['del'] = YES; $get['groups'][$chat_id]['doc']['warn'] = YES; $get['groups'][$chat_id]['doc']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الملفات بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Doc has been Locked by warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الملفات بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['doc']['ok'] = NO; $get['groups'][$chat_id]['doc']['del'] = YES; $get['groups'][$chat_id]['doc']['warn'] = NO; $get['groups'][$chat_id]['doc']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($doc){
 if( $get['groups'][$chat_id]['doc']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['doc']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['doc']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال الملفات •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل التوجيه' || $text == 'قفل التوجيه بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Forward has been Locked by del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل التوجيه بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['fwd']['ok'] = NO; $get['groups'][$chat_id]['fwd']['del'] = NO; $get['groups'][$chat_id]['fwd']['warn'] = YES; $get['groups'][$chat_id]['fwd']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل التوجيه بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Forward has been Locked by kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل التوجيه بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['fwd']['ok'] = NO; $get['groups'][$chat_id]['fwd']['del'] = YES; $get['groups'][$chat_id]['fwd']['warn'] = YES; $get['groups'][$chat_id]['fwd']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل التوجيه بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Forward has been Locked by warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل التوجيه بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['fwd']['ok'] = NO; $get['groups'][$chat_id]['fwd']['del'] = YES; $get['groups'][$chat_id]['fwd']['warn'] = NO; $get['groups'][$chat_id]['fwd']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($update->message->forward_from_chat or $fwd){
 if( $get['groups'][$chat_id]['fwd']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['fwd']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['fwd']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال التوجيه •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل البصمه' || $text == 'قفل البصمه بالمسح' || $text == 'قفل البصمات' || $text == 'قفل البصمات بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Voice has been Locked by del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل البصمات بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['voice']['ok'] = NO; $get['groups'][$chat_id]['voice']['del'] = NO; $get['groups'][$chat_id]['voice']['warn'] = YES; $get['groups'][$chat_id]['voice']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل البصمه بالطرد' || $text == 'قفل البصمات بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Voice has been Locked by kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل البصمات بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['voice']['ok'] = NO; $get['groups'][$chat_id]['voice']['del'] = YES; $get['groups'][$chat_id]['voice']['warn'] = YES; $get['groups'][$chat_id]['voice']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل البصمه بالتحذير' || $text == 'قفل البصمات بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Voice has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل البصمات بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['voice']['ok'] = NO; $get['groups'][$chat_id]['voice']['del'] = YES; $get['groups'][$chat_id]['voice']['warn'] = NO; $get['groups'][$chat_id]['voice']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($voice){
 if( $get['groups'][$chat_id]['voice']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['voice']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['voice']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال البصمات •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الكلايش' || $text == 'قفل الكلايش بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Document has been Locked by del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الكلايش بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['document']['ok'] = NO; $get['groups'][$chat_id]['document']['del'] = NO; $get['groups'][$chat_id]['document']['warn'] = YES; $get['groups'][$chat_id]['document']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الكلايش بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
     'text'=>"[- Document has been Locked by kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الكلايش بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['document']['ok'] = NO; $get['groups'][$chat_id]['document']['del'] = YES; $get['groups'][$chat_id]['document']['warn'] = YES; $get['groups'][$chat_id]['document']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الكلايش بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Document has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الكلايش بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['document']['ok'] = NO; $get['groups'][$chat_id]['document']['del'] = YES; $get['groups'][$chat_id]['document']['warn'] = NO; $get['groups'][$chat_id]['document']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($document){
 if( $get['groups'][$chat_id]['document']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['document']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['document']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال الكلايش •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الروابط' || $text == 'قفل الروابط بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Links has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الروابط بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['links']['ok'] = NO; $get['groups'][$chat_id]['links']['del'] = NO; $get['groups'][$chat_id]['links']['warn'] = YES; $get['groups'][$chat_id]['links']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الروابط بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
     'text'=>"[- Links has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الروابط بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['links']['ok'] = NO; $get['groups'][$chat_id]['links']['del'] = YES; $get['groups'][$chat_id]['links']['warn'] = YES; $get['groups'][$chat_id]['links']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الروابط بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Links has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الروابط بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['links']['ok'] = NO; $get['groups'][$chat_id]['links']['del'] = YES; $get['groups'][$chat_id]['links']['warn'] = NO; $get['groups'][$chat_id]['links']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me|(.*)telesco.me|telesco.me(.*)/i',$text)){
 if( $get['groups'][$chat_id]['links']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['links']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['links']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال الروابط •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الدردشه' || $text == 'قفل الدردشه بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Chat has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الدردشه بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['chat']['ok'] = NO; $get['groups'][$chat_id]['chat']['del'] = NO; $get['groups'][$chat_id]['chat']['warn'] = YES; $get['groups'][$chat_id]['chat']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الدردشه بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
     'text'=>"[- Chat has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الدردشه بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['chat']['ok'] = NO; $get['groups'][$chat_id]['chat']['del'] = YES; $get['groups'][$chat_id]['chat']['warn'] = YES; $get['groups'][$chat_id]['chat']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الدردشه بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Chat has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الدردشه بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['chat']['ok'] = NO; $get['groups'][$chat_id]['chat']['del'] = YES; $get['groups'][$chat_id]['chat']['warn'] = NO; $get['groups'][$chat_id]['chat']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($chat and $message){
 if( $get['groups'][$chat_id]['chat']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['chat']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['chat']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال الرسائل •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الاشعارات' || $text == 'قفل الاشعارات بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Join has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الاشعارات بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['joinmember']['ok'] = NO; $get['groups'][$chat_id]['joinmember']['del'] = NO; $get['groups'][$chat_id]['joinmember']['warn'] = YES; $get['groups'][$chat_id]['joinmember']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الاشعارات بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
     'text'=>"[- Join has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الاشعارات بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['joinmember']['ok'] = NO; $get['groups'][$chat_id]['joinmember']['del'] = YES; $get['groups'][$chat_id]['joinmember']['warn'] = YES; $get['groups'][$chat_id]['joinmember']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الاشعارات بالترحيب'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Join has been Locked by Welcome , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الاشعارات بـ الترحيب ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['joinmember']['ok'] = NO; $get['groups'][$chat_id]['joinmember']['del'] = YES; $get['groups'][$chat_id]['joinmember']['warn'] = NO; $get['groups'][$chat_id]['joinmember']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($joinmember){
 if( $get['groups'][$chat_id]['joinmember']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['joinmember']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['joinmember']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' اهلا بك عزيزي'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل المواقع' || $text == 'قفل المواقع بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Location has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل المواقع بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['location']['ok'] = NO; $get['groups'][$chat_id]['location']['del'] = NO; $get['groups'][$chat_id]['location']['warn'] = YES; $get['groups'][$chat_id]['location']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل المواقع بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Location has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل المواقع بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['location']['ok'] = NO; $get['groups'][$chat_id]['location']['del'] = YES; $get['groups'][$chat_id]['location']['warn'] = YES; $get['groups'][$chat_id]['location']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل المواقع بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Location has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل المواقع بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['location']['ok'] = NO; $get['groups'][$chat_id]['location']['del'] = YES; $get['groups'][$chat_id]['location']['warn'] = NO; $get['groups'][$chat_id]['location']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($location){
 if( $get['groups'][$chat_id]['location']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['location']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['location']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال المواقع •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل التاك' || $text == 'قفل التاك بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Tag has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل التاك بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['tag']['ok'] = NO; $get['groups'][$chat_id]['comnd']['del'] = NO; $get['groups'][$chat_id]['comnd']['warn'] = YES; $get['groups'][$chat_id]['comnd']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل التاك بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Tag has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل التاك بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['tag']['ok'] = NO; $get['groups'][$chat_id]['comnd']['del'] = YES; $get['groups'][$chat_id]['comnd']['warn'] = YES; $get['groups'][$chat_id]['comnd']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل التاك بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Tag has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل التاك بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['tag']['ok'] = NO; $get['groups'][$chat_id]['comnd']['del'] = YES; $get['groups'][$chat_id]['comnd']['warn'] = NO; $get['groups'][$chat_id]['comnd']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
 if( $get['groups'][$chat_id]['comnd']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['comnd']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['comnd']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال التاك •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل التعديل' || $text == 'قفل التعديل بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Edit has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل التعديل بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['edited']['ok'] = NO; $get['groups'][$chat_id]['edited']['del'] = NO; $get['groups'][$chat_id]['edited']['warn'] = YES; $get['groups'][$chat_id]['edited']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل التعديل بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Edit has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل التعديل بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['edited']['ok'] = NO; $get['groups'][$chat_id]['edited']['del'] = YES; $get['groups'][$chat_id]['edited']['warn'] = YES; $get['groups'][$chat_id]['edited']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل التعديل بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Edit has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل التعديل بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['edited']['ok'] = NO; $get['groups'][$chat_id]['edited']['del'] = YES; $get['groups'][$chat_id]['edited']['warn'] = NO; $get['groups'][$chat_id]['edited']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($edited){
 if( $get['groups'][$chat_id]['edited']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['edited']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['edited']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ تعديل الرسائل •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الصوت' || $text == 'قفل الصوت بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Audio has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الصوت بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['audio']['ok'] = NO; $get['groups'][$chat_id]['audio']['del'] = NO; $get['groups'][$chat_id]['audio']['warn'] = YES; $get['groups'][$chat_id]['audio']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الصوت بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Audio has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الصوت بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['audio']['ok'] = NO; $get['groups'][$chat_id]['audio']['del'] = YES; $get['groups'][$chat_id]['audio']['warn'] = YES; $get['groups'][$chat_id]['audio']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الصوت بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Audio has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الصوت بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['audio']['ok'] = NO; $get['groups'][$chat_id]['audio']['del'] = YES; $get['groups'][$chat_id]['audio']['warn'] = NO; $get['groups'][$chat_id]['audio']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($audio){
 if( $get['groups'][$chat_id]['audio']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['audio']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['audio']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال الصوت •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الفيديو' || $text == 'قفل الفيديو بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Video has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الفيديو بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['video']['ok'] = NO; $get['groups'][$chat_id]['video']['del'] = NO; $get['groups'][$chat_id]['video']['warn'] = YES; $get['groups'][$chat_id]['video']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الفيديو بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Video has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الفيديو بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['video']['ok'] = NO; $get['groups'][$chat_id]['video']['del'] = YES; $get['groups'][$chat_id]['video']['warn'] = YES; $get['groups'][$chat_id]['video']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الفيديو بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Video has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الفيديو بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['video']['ok'] = NO; $get['groups'][$chat_id]['video']['del'] = YES; $get['groups'][$chat_id]['video']['warn'] = NO; $get['groups'][$chat_id]['video']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($video){
 if( $get['groups'][$chat_id]['video']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['video']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['video']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال الفيديوهات •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل المعرف' || $text == 'قفل المعرف بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- User has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل المعرف بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['user']['ok'] = NO; $get['groups'][$chat_id]['user']['del'] = NO; $get['groups'][$chat_id]['user']['warn'] = YES; $get['groups'][$chat_id]['user']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل المعرف بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- User has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل المعرف بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['user']['ok'] = NO; $get['groups'][$chat_id]['user']['del'] = YES; $get['groups'][$chat_id]['user']['warn'] = YES; $get['groups'][$chat_id]['user']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل المعرف بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- User has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل المعرف بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['user']['ok'] = NO; $get['groups'][$chat_id]['user']['del'] = YES; $get['groups'][$chat_id]['user']['warn'] = NO; $get['groups'][$chat_id]['user']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
 if( $get['groups'][$chat_id]['user']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['user']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['user']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال اليوزرات •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الماركدون' || $text == 'قفل الماركدون بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- MarkDown has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الماركدون بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['mark']['ok'] = NO; $get['groups'][$chat_id]['mark']['del'] = NO; $get['groups'][$chat_id]['mark']['warn'] = YES; $get['groups'][$chat_id]['mark']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الماركدون بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- MarkDown has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الماركدون بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['mark']['ok'] = NO; $get['groups'][$chat_id]['mark']['del'] = YES; $get['groups'][$chat_id]['mark']['warn'] = YES; $get['groups'][$chat_id]['mark']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الماركدون بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- MarkDown has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الماركدون بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['mark']['ok'] = NO; $get['groups'][$chat_id]['mark']['del'] = YES; $get['groups'][$chat_id]['mark']['warn'] = NO; $get['groups'][$chat_id]['mark']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($message->entities){
 if( $get['groups'][$chat_id]['mark']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['mark']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['mark']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال الماركدون •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل البوتات بالطرد' || $text == 'قفل البوتات'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Bots has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل البوتات بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['bots']['ok'] = NO; $get['groups'][$chat_id]['bots']['del'] = YES; $get['groups'][$chat_id]['bots']['warn'] = YES; $get['groups'][$chat_id]['bots']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل البوتات بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Bots has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل البوتات بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['bots']['ok'] = NO; $get['groups'][$chat_id]['bots']['del'] = YES; $get['groups'][$chat_id]['bots']['warn'] = NO; $get['groups'][$chat_id]['bots']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and $id != $id_bot){
 if( $get['groups'][$chat_id]['bots']['del'] == NO ){
 	bot('kickChatMember',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id,
'user_id'=>$id
      ]);
}
if( $get['groups'][$chat_id]['bots']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$id,
      ]);
}
if( $get['groups'][$chat_id]['bots']['warn'] == NO){
	 bot('kickChatMember',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ اضافةه البوتات •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل المتحركه' || $text == 'قفل المتحركه بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Gif has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل المتحركه بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['gif']['ok'] = NO; $get['groups'][$chat_id]['gif']['del'] = NO; $get['groups'][$chat_id]['gif']['warn'] = YES; $get['groups'][$chat_id]['gif']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل المتحركه بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Gif has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل المتحركه بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['gif']['ok'] = NO; $get['groups'][$chat_id]['gif']['del'] = YES; $get['groups'][$chat_id]['gif']['warn'] = YES; $get['groups'][$chat_id]['gif']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل المتحركه بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Gif has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل المتحركه بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['gif']['ok'] = NO; $get['groups'][$chat_id]['gif']['del'] = YES; $get['groups'][$chat_id]['gif']['warn'] = NO; $get['groups'][$chat_id]['gif']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if($message->document and $message->document->mime_type == "video/mp4"){
 if( $get['groups'][$chat_id]['gif']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['gif']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['gif']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال المتحركه •'
      ]);
}    
}
}


if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل العربيه' || $text == 'قفل العربيه بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Arabic has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل العربيه بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['arabic']['ok'] = NO; $get['groups'][$chat_id]['arabic']['del'] = NO; $get['groups'][$chat_id]['arabic']['warn'] = YES; $get['groups'][$chat_id]['arabic']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل العربيه بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Arabic has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل العربيه بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['arabic']['ok'] = NO; $get['groups'][$chat_id]['arabic']['del'] = YES; $get['groups'][$chat_id]['arabic']['warn'] = YES; $get['groups'][$chat_id]['arabic']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل العربيه بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Arabic has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل العربيه بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['arabic']['ok'] = NO; $get['groups'][$chat_id]['arabic']['del'] = YES; $get['groups'][$chat_id]['arabic']['warn'] = NO; $get['groups'][$chat_id]['arabic']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if(preg_match('/^(.*)ث|ص(.*)|ض(.*)|(.*)ع|(.*)غ(.*)|ف(.*)|(.*)ق|(.*)|ج(.*)|ر(.*)|د(.*)|ظ(.*)|ز(.*)|و(.*)|و(.*)|ة(.*)|ة(.*)|ى(.*)|ر(.*)|ؤ(.*)|ء(.*)|ذ(.*)|ط(.*)|ك(.*)|م(.*)|ن(.*)|ت(.*)|ا(.*)|ل(.*)|ب(.*)|ي(.*)|ن(.*)|س(.*)|ج(.*)|ح(.*)|خ(.*)|(.*)ه|(.*)ش|ا(.*)/i',$text)){
 if( $get['groups'][$chat_id]['arabic']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['arabic']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['arabic']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال العربيةه •'
      ]);
}    
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'قفل الانكليزيه' || $text == 'قفل الانكليزيه بالمسح'){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- English has been Locked by Del , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الانكليزيه بـ المسح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['english']['ok'] = NO; $get['groups'][$chat_id]['english']['del'] = NO; $get['groups'][$chat_id]['english']['warn'] = YES; $get['groups'][$chat_id]['english']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'قفل الانكليزيه بالطرد'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- English has been Locked by Kick , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الانكليزيه بـ الطرد ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['english']['ok'] = NO; $get['groups'][$chat_id]['english']['del'] = YES; $get['groups'][$chat_id]['english']['warn'] = YES; $get['groups'][$chat_id]['english']['kick'] = NO; file_put_contents("data.json", json_encode($get));
}
if($text == 'قفل الانكليزيه بالتحذير'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- English has been Locked by Warn , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم قفل الانكليزيه بـ التحذير ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]); $get['groups'][$chat_id]['english']['ok'] = NO; $get['groups'][$chat_id]['english']['del'] = YES; $get['groups'][$chat_id]['english']['warn'] = NO; $get['groups'][$chat_id]['english']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}
if($you != "creator" && $you != "administrator" && $from_id != $sudo){
if(preg_match('/^(.*)w|e(.*)|q(.*)|(.*)t|(.*)y(.*)|t(.*)|(.*)r|(.*)|z(.*)|u(.*)|(.*)|i(.*)|p(.*)|o(.*)|v(.*)|a(.*)|v(.*)|m(.*)|n(.*)|x(.*)|s(.*)|ا(.*)|l(.*)|b(.*)|c(.*)|d(.*)|j(.*)|k(.*)|f(.*)|f(.*)|(.*)g|(.*)h|ا(.*)/i',$text)){
 if( $get['groups'][$chat_id]['english']['del'] == NO ){
 	bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
      ]);
}
if( $get['groups'][$chat_id]['english']['kick'] == NO){ 
bot('deleteMessage',[ 
'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('kickChatMember',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->from->id
      ]);
}
if( $get['groups'][$chat_id]['english']['warn'] == NO){
	 bot('deleteMessage',[
	  'chat_id'=>$chat_id, 'message_id'=>$message->message_id
      ]);
      bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>'@'.$message->from->username.' - عذرا عزيزي ممنوع ⚠️ ارسال الانكليزيه •'
      ]);
}    
}
}
	
	if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'فتح الانكليزيه'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- English has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الانكليزيه بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['english']['ok'] = YES; $get['groups'][$chat_id]['english']['del'] = YES; $get['groups'][$chat_id]['english']['warn'] = YES; $get['groups'][$chat_id]['english']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح العربيه'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Arabic has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح العربيه بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['arabic']['ok'] = YES; $get['groups'][$chat_id]['arabic']['del'] = YES; $get['groups'][$chat_id]['arabic']['warn'] = YES; $get['groups'][$chat_id]['arabic']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح الروابط'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Links has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الروابط بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['links']['ok'] = YES; $get['groups'][$chat_id]['links']['del'] = YES; $get['groups'][$chat_id]['links']['warn'] = YES; $get['groups'][$chat_id]['links']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح الجهات'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Contact has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الجهات بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['contact']['ok'] = YES; $get['groups'][$chat_id]['contact']['del'] = YES; $get['groups'][$chat_id]['contact']['warn'] = YES; $get['groups'][$chat_id]['contact']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح الصور'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Photo has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الصور بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['photo']['ok'] = YES; $get['groups'][$chat_id]['photo']['del'] = YES; $get['groups'][$chat_id]['photo']['warn'] = YES; $get['groups'][$chat_id]['photo']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح الملصقات'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Stickers has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الملصقات بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['sticker']['ok'] = YES; $get['groups'][$chat_id]['sticker']['del'] = YES; $get['groups'][$chat_id]['sticker']['warn'] = YES; $get['groups'][$chat_id]['sticker']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح الملفات'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Doc has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الملفات بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['doc']['ok'] = YES; $get['groups'][$chat_id]['doc']['del'] = YES; $get['groups'][$chat_id]['doc']['warn'] = YES; $get['groups'][$chat_id]['doc']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح التوجيه'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Forward has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح التوجيه بنجاح ، 📢", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['fwd']['ok'] = YES; $get['groups'][$chat_id]['fwd']['del'] = YES; $get['groups'][$chat_id]['fwd']['warn'] = YES; $get['groups'][$chat_id]['fwd']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح البصمه'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Voice has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح البصمه بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['voice']['ok'] = YES; $get['groups'][$chat_id]['voice']['del'] = YES; $get['groups'][$chat_id]['voice']['warn'] = YES; $get['groups'][$chat_id]['voice']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح الكلايش'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Document has been unLocked , 📡](https://t.me/an3rakanhttps://t.me/an3rakanhttps://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الكلايش بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['document']['ok'] = YES; $get['groups'][$chat_id]['document']['del'] = YES; $get['groups'][$chat_id]['document']['warn'] = YES; $get['groups'][$chat_id]['document']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح الدردشه'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Chat has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الدردشه بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['chat']['ok'] = YES; $get['groups'][$chat_id]['chat']['del'] = YES; $get['groups'][$chat_id]['chat']['warn'] = YES; $get['groups'][$chat_id]['chat']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح الاشعارات'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Join has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الاشعارات بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['joinmember']['ok'] = YES; $get['groups'][$chat_id]['joinmember']['del'] = YES; $get['groups'][$chat_id]['joinmember']['warn'] = YES; $get['groups'][$chat_id]['joinmember']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح المواقع'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Location has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح المواقع بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['location']['ok'] = YES; $get['groups'][$chat_id]['location']['del'] = YES; $get['groups'][$chat_id]['location']['warn'] = YES; $get['groups'][$chat_id]['location']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح التاك'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Tag has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح التاك بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['tag']['ok'] = YES; $get['groups'][$chat_id]['comnd']['del'] = YES; $get['groups'][$chat_id]['comnd']['warn'] = YES; $get['groups'][$chat_id]['comnd']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح التعديل'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Edit has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح التعديل بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['edited']['ok'] = YES; $get['groups'][$chat_id]['edited']['del'] = YES; $get['groups'][$chat_id]['edited']['warn'] = YES; $get['groups'][$chat_id]['edited']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح الصوت'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Audio has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الصوت بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['audio']['ok'] = YES; $get['groups'][$chat_id]['audio']['del'] = YES; $get['groups'][$chat_id]['audio']['warn'] = YES; $get['groups'][$chat_id]['audio']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح الفيديو'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Video has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الفيديو بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['video']['ok'] = YES; $get['groups'][$chat_id]['video']['del'] = YES; $get['groups'][$chat_id]['video']['warn'] = YES; $get['groups'][$chat_id]['video']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح المعرف'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- User has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح المعرف بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['user']['ok'] = YES; $get['groups'][$chat_id]['user']['del'] = YES; $get['groups'][$chat_id]['user']['warn'] = YES; $get['groups'][$chat_id]['user']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح الماركدون'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Markdown has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح الماركدون بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['mark']['ok'] = YES; $get['groups'][$chat_id]['mark']['del'] = YES; $get['groups'][$chat_id]['mark']['warn'] = YES; $get['groups'][$chat_id]['mark']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح البوتات'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Bots has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح البوتات بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['bots']['ok'] = YES; $get['groups'][$chat_id]['bots']['del'] = YES; $get['groups'][$chat_id]['bots']['warn'] = YES; $get['groups'][$chat_id]['bots']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}

if($text == 'فتح المتحركه'){
	bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"[- Gif has been unLocked , 📡](https://t.me/joinchat/AAAAAEb6ZkvW3Zg-FKXFqA)
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[• اضغط هنا وتابع جديدنا 🔰؛](https://t.me/an3rakan)",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم فتح المتحركه بنجاح ، 👋🏻؛", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"• By ؛", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
 $get['groups'][$chat_id]['gif']['ok'] = YES; $get['groups'][$chat_id]['gif']['del'] = YES; $get['groups'][$chat_id]['gif']['warn'] = YES; $get['groups'][$chat_id]['gif']['kick'] = YES; file_put_contents("data.json", json_encode($get));
}
}

if($text=="/start"){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"• اهلا بك عزيزي [$name](https://t.me/an3rakan) 📨 •

ֆ - - - - - - - - - - - - - - ֆ

- `في بوت حمايةه المجموعات` 🔱 -

- `يمكنك من خلال هذا البوت ان تحمي 🎩 مجموعتك الخاصةه من ( الروابط , التوجيه` , `الملصقات , الخ ... )` 👅 •

- `اضف البوت لمجموعتك ⚜ ارفع البوت ادمن في المجموعةه 🚩` -

• `ارسل كلمة ( تفعيل ) في 💎 المجموعةه اكتب الاوامر في المجموعةه لاضهار الاوامر 🦋` -

• `بعد قفل الميديا اكتب 📊 ( الاعدادات ) لمعرفة الاوامر المقفولة والمفتوحةه ⚠️` -

ֆ - - - - - - - - - - - - - - ֆ

[- اضغط هنا وتابع قناة البوت 🔖 -](https://t.me/an3rakan)",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"• اضغط هنا وتابع جديدنا ✅ •",'url'=>"https://t.me/an3rakan"]],
        [['text'=>"• اضغط هنا لصنع بوت حمايةه 👅 -",'url'=>"https://t.me/NS3BOT"]],
    ]

  ])
  ]);
}

$reply_mesage = $message->reply_to_message;
    $mid_pin = $reply_mesage->message_id;
    $id_reply = $reply_mesage->from->id;
    $user_reply = $reply_mesage->from->username;
    $name_reply = $reply_mesage->from->first_name;
    if($text == "معلوماته" or $text == "ايديي" or $text == "ايديه" or $text == "/id_r" or $text == "/info_r" and $reply_mesage){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• معلوماته 🔱  •
        ֆ - - - - - - - - - - - - - - ֆ
       - اسمه الاول ✅  • : $name_reply •
       - معرفه 📌 • : @$user_reply •
       - ايديه ✖️ • : $id_reply •
       ֆ - - - - - - - - - - - - - - ֆ
       - الوقت 🕐 : $time •
       - التأريخ 📆 : $date •",
        'reply_to_message_id'=>$message->message_id,
    ]);
}

if($text == "معلوماتي"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"• معلوماتك 🔱  •
    ֆ - - - - - - - - - - - - - - ֆ
   - اسمك الاول ✅  • : $name •
   - معرفك 📌 • : @$user •
   - ايديك ✖️ • : $from_id •
   ֆ - - - - - - - - - - - - - - ֆ
   - الوقت 🕐 : $time •
   - التأريخ 📆 : $date •",
    'reply_to_message_id'=>$message->message_id,
]);
}

if($text == "/link" or $text == "الرابط"){
    $export = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/exportChatInviteLink?chat_id=$chat_id"));
    $l = $export->result;
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"- رابط المجموعة  ⬇️ ؛ 
$l ",
      'disable_web_page_preview'=>true,
      'reply_to_message_id'=>$message->message_id,
      ]);
  }
if($text=="الاوامر" or $text=="/help" or $text=="/help$e" and  $you == "administrator"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- اهلا بك ؛ [$name](https://t.me/an3rakan) •
- اختر ماتريد من الاسفل ☑️ -

 - اسم المجموعة 🔱 : $Name_Group •
- ايدي المجموعة ✨ : $chat_id •
ֆ - - - - - - - - - - - - - - ֆ
• م1 - /h1 ؛ لاضهار اوامر الحمايةه ✨ -
- م2 - /h2 ؛ لاضهار اوامر العامةه ، 📢

ֆ - - - - - - - - - - - - - - ֆ
#تستطيع استخدام او روئية الاوامر بالاعدادات الاختيارية ֆ 
       - اي بالـ Ar & En ، 👋🏻؛
       
ֆ - - - - - - - - - - - - - - ֆ
   - الوقت 🕐 : $time •
   - التأريخ 📆 : $date •",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• اضغط هنا وتابع جديدنا ✨ •", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
}

if($text=="م1" or $text=="/h1" or $text=="/h1$e" and  $you == "administrator"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• اوامر القفل 🔐 •
- اسم المجموعة 🔱 : $Name_Group •
- ايدي المجموعة ✨ : $chat_id •
    
- قفل بالطرد ؛ للقفل بلطرد❕•
- قفل بالمسح ؛ للقفل بالمسح ، 📢
- قفل بالتحذير ؛ للقفل بالمسح والتحذير 💌 •
- فتح + الامر ؛ للفتح 🚸 •

ֆ - - - - - - - - - - - - - - ֆ

    - الصور 🌠  •
    - الملصقات ◽️ •

    - الملفات 📂  •
    - التوجيه 🔱 •

    - الصوت 🎙 •
    - الروابط 🔗 •

    - البصمه 🔊 •
    - الفيديو ▶️ •

    - المتحركة 🔄 •
    - الجهات 🔖 •

    - البوتات 🤖 •
    - الماركداون 🚸 •

    - المعرف 📌 •
    - الكلايش ❇️ •

    - الدردشه ✨ •
    - العربيه 🦁 •

    - الانكليزيه 💌 •
    - المواقع 🌐 •

    - الاشعارات 🕘 •
    
ֆ - - - - - - - - - - - - - - ֆ
#تستطيع استخدام او روئية الاوامر بالاعدادات الاختيارية ֆ 
       - اي بالـ Ar & En ، 👋🏻؛
ֆ - - - - - - - - - - - - - - ֆ
- الوقت 🕐 : $time •
- التأريخ 📆 : $date •

-  [اضغط هنا وتابع جديدنا ☑️](https://t.me/an3rakan) -",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• اضغط هنا وتابع جديدنا ⚡ •", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
}   

if($text=="م2" or $text=="/h2" or $text=="/h2$e" and  $you == "administrator"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"• اوامر العامةه ⚠️ •
- اسم المجموعة 🔱 : $Name_Group •
- ايدي المجموعة ✨ : $chat_id •
ֆ - - - - - - - - - - - - - - ֆ

- انستا + اليوزر ؛ لاضهار معلومات حساب الانستا 🔱 •
- معلوماتي ؛ لعرض معلومات حسابك ✅ •

- ضع وصف + الوصف ؛ لتغيير وصف المجموعةه 🚩 •
- معلومات المجموعة ؛ لعرض معلومات المجموعة ✨ •

- الرابط ؛ لاضهار رابط المجموعةه ⚡️ •
- موقع + المدينةه ؛ لعرض الموقع ⚜ •

- ترجم عربي + النص ؛ للترجمة للعربيةه ، 👋🏻؛
- ترجم انكلش + النص ؛ للترجمه للانكليزيةه 💭 •
- ترجم فارسي + النص ؛ للترجمة للفارسيةه 🐾 •

- رسائلي ؛ لعرض عدد الرسائل 📊 •
- مسح + العدد ؛ لمسح العدد من المجموعةه 🕘 •

- جلب صوره ؛ بالرد لجلب صورة العضو 🌐 •
- مسح ؛ بالرد لمسح الرسالةه 💡 •

- ضع اسم + الاسم ؛ لوضع اسم للمجموعةه ◀️ •
- تثبيت ؛ بالرد لتثبيت الرسالةه ، 📢

- حظر ؛ بالرد لحظر العضو وطرده ⚠️ •
- طرد ؛ بالرد لطرد العضو 🔗 •

- بايو ؛ لعرض البايو الخاص بك 🕸 •
- الغاء حظر ؛ بالرد لالغاء حظر العضو 🔬 •

- الاعدادات ؛ لمعرفة الوسائط المفتوحه ولمقفولة 📧 •
- ايدي ؛ لاضهار معلوماتك مع صورتك ▫️ •

- عدد الرسائل ؛ لاضهار عدد رسائل المجموعةه 📬 •
- معلومات ؛ بالرد لعرض معلومات العضو 🍥 •

- معلومات + المعرف ؛ لعرض معلومات العضو ⚡️ •

- ايدي بالرد ؛ لعرض ايدي الشخص 🌪 •
- رابط الحذف ؛ لعرض رابط الحذف ▪️•

- كتم ؛ بالرد لكتم العضو 💌 •
- الغاء كتم ؛ بالرد لالغاء كتم العضو❕•

ֆ - - - - - - - - - - - - - - ֆ
#تستطيع استخدام او روئية الاوامر بالاعدادات الاختيارية ֆ 
       - اي بالـ Ar & En ، 👋🏻؛
ֆ - - - - - - - - - - - - - - ֆ
- الوقت 🕐 : $time •
- التأريخ 📆 : $date •

- [اضغط هنا وتابع جديدنا ⚡️](https://t.me/an3rakan) -",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• اضغط هنا وتابع جديدنا ⚡ •", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
}   

$re_user = $update->message->reply_to_message->from->username;
  if($re  &&  $text == "/del" ){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
    ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/ban" or $text == "حظر" or $text == "/kick" or $text=="طرد"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"- The member has been Kicked ⚠️ •",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"- @$re_user -", "callback_data"=>"dan1"],['text'=>"- العضو 🦋 •", "callback_data"=>"dan1"]
],
[
['text'=>"- يلا برا 👞 •", "callback_data"=>"dan1"],
],
]
])
]);
    bot('kickChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }
  if($re and $re_id != $bot and $re_id != $sudo and $text=="/unban" or $text == "الغاء حظر"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"- Canceled a ban of the member 📫 •`",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"- @$re_user -", "callback_data"=>"dan2"],['text'=>"- العضو 🦋 •", "callback_data"=>"dan2"]
],
[
['text'=>"- تم الغاء حظره 🚩 •", "callback_data"=>"dan2"],
],
]
])
]);
    bot('unbanChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
    }
  if($re and $re_id != $bot and $re_id != $sudo and $text == "الغاء الكتم" or $text == "الغاء كتم"){
      bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- The member has been muted 🔊 •",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"- @$re_user -", "callback_data"=>"dan3"],['text'=>"- العضو 🦋 •", "callback_data"=>"dan3"]
],
[
['text'=>"- تم الغاء كتمه 🚩 •", "callback_data"=>"dan3"],
],
]
])
]);
      bot('promoteChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$re_id
        ]);
  }
  if($text == "حذف المكتومين" or $text == "مسح المكتومين"){
      bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- Has been cleared of all the action ⚜؛",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"- تم مسح جميع المكتومين ✅؛ •", "url"=>"https://t.me/an3rakan"],
],
[
['text'=>"- By 👅 :", "url"=>"https://t.me/an3rakan"],['text'=>"@$user ، 📌", "url"=>"https://t.me/an3rakan"]
],
]
])
]);
      bot('promoteChatMember',[
          'chat_id'=>$chat_id,
          'user_id'=>$re_id
        ]);
  }
  $ename = str_replace("/setname ", "$ename", $text);
  $aname = str_replace("ضع اسم ", "$aname", $text);
  if($text == "/setname $ename"){
    bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$ename 
      ]);
      bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- Changed the name of the group ✨ •`",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
               [
              ["text"=>"- تم تغيير اسم المجموعةه ، 👋🏻؛",'url'=>"https://t.me/an3rakan"], 
              ]
              ]
        ])
]);
}
   if($text == "ضع اسم $aname"){
     bot('setChatTitle',[
      'chat_id'=>$chat_id,
      'title'=>$aname 
      ]);
      bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- Changed the name of the group ✨ •",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
               [
              ["text"=>"- تم تغيير اسم المجموعةه ، 👋🏻؛",'url'=>"https://t.me/an3rakan"], 
              ]
              ]
        ])
]);
}
   if($re and $text == "/pin" or $text == "تثبيت"){
    bot('pinChatMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$re_msgid
      ]);
   bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- Has been pinned message ⚡️ •`",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
               [
              ["text"=>"- تم تثبيت الرسالةه 🐾 •",'url'=>"https://t.me/an3rakan"], 
              ]
              ]
        ])
]);
}

if($text=="موقعي" and $you == "creator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- انت منشى المجموعةه ⚠️ -

• ايديك : $id ⚡️ •
• معرفك : @$user ✅ •
• اسمك : $name •"
]);
}
if($text=="موقعي" and  $you == "administrator"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- انت ادمن للمجموعةه ⚠️ -

• ايديك : $id ⚡️ •
• معرفك : @$user ✅ •
• اسمك : $name •"
]);
}
if($text=="موقعي" and  $you == "member"){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"- انت عضو فقط ⚠️ -

• ايديك : $id ⚡️ •
• معرفك : @$user ✅ •
• اسمك : $name •"
]);
}
 
if($text == 'ايدي' and !$reply_mesage){

$get_photo = file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id&limit=1");
$json = json_decode($get_photo);
$photo_user = $json->result->photos[0][0]->file_id;
$lang = json_decode($group_admin);
$langs = $lang->result->user->language_code;
$me = $lang->result->status;

bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$photo_user,
'width'=>'160',
'height'=>'160',
'caption'=>"- ايدي المجموعةه ؛ $chat_id ، 👋🏻
- ايديك ؛ $id ، 📌
- معرفك ؛ @$user ، 📃
- اسمك ؛ $name ، ",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'• اضغط هنا وتابع جديدنا ، 🔰؛','url'=>'https://t.me/an3rakan']]
]
])
]);

}

if($re and $text == "جلب صوره"){
  $g = bot("getUserProfilePhotos",["user_id"=>$re_id,"limit"=>1,"offset"=>0]);
$r = $g->result->photos[0][2]->file_id;
$pa = bot("getFile",["file_id"=>$r]);
$path = $pa->result->file_path;
file_put_contents("$rnd.jpg",file_get_contents("https://api.telegram.org/file/bot".$API_KEY."/".$path));

bot("sendPhoto",[
'chat_id'=>$chat_id,
"photo"=>new CURLFile("$rnd.jpg"),
]);
unlink("$rnd.jpg");
}

if($re and $re_id != $bot and $re_id != $sudo and $text=="كتم"){
    bot('sendMessage',[
      'chat_id'=>$chat_id,
      'user_id'=>$message->reply_to_messsage->from->id,
        'can_send_messages'=>false,
      'text'=>"*- The member has been muted 👤🔕 •*",
  'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"- @$re_user -", "callback_data"=>"dan"],['text'=>"- العضو 🦋 •", "callback_data"=>"dan"]
],
[
['text'=>"- تم الكتم 🌚✨ •", "callback_data"=>"dan"],
],
]
])
]);
    bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$re_id
      ]);
  }

if($data == "dan"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"- تم كتم العضو 👅 •",
'show_alert'=>true
]);
}
if($data == "dan1"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"- تم حظر العضو 👅 •",
'show_alert'=>true
]);
}
if($data == "dan2"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"- تم الغاء حظر العضو 👅 •",
'show_alert'=>true
]);
}
if($data == "dan3"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"- تم الغاء كتم العضو 👅 •",
'show_alert'=>true
]);
}

if($data == "time"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"- الوقت ؛ $time 🕘 •
- التاريخ ؛ $date 📆 •",
'show_alert'=>true
]);
}

if(preg_match('/^(انستا) (.*)/', $text, $iinsta)){
$insta = json_decode(file_get_contents("https://instagram.com/".$iinsta[2]."/?__a=1"), true);
$a1 = $insta['user']['biography'];
$a6 = $insta['user']['username'];
$a2 = $insta["user"]["followed_by"]["count"];
$a3 = $insta["user"]["follows"]["count"];
$a4 = $insta["user"]["media"]["count"];
$a5 = $insta["user"]["profile_pic_url_hd"];
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$a5,
'caption'=>"$a1",
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"• الصورة مع البايو 🤘🏿 •",'url'=>"https://t.me/an3rakan"]],[['text'=>"UserName",'url'=>"http://instagram.com/$iinsta[2]"],['text'=>"$a6",'url'=>"http://instagram.com/$iinsta[2]"]],[['text'=>"Followers",'callback_data'=>"2$iinsta[2]"],['text'=>"$a2",'url'=>"http://instagram.com/$iinsta[2]"]],[['text'=>"Following",'callback_data'=>"3$iinsta[2]"],['text'=>"$a3",'url'=>"http://instagram.com/$iinsta[2]"]],[['text'=>"Posts",'callback_data'=>"4$iinsta[2]"],['text'=>"$a4",'url'=>"http://instagram.com/$iinsta[2]"]],]])]);}

$memb = $message->new_chat_member; 
if($memb) {
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
[- اهلا وسهلا اضغط هنا من فضلك 💛🦋 •](https://t.me/an3rakan)",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
'parse_mode'=>"MarkDown",
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [
        ['text'=>"- اهلا وسهلا عزيزي ✨ •", "url"=>"https://t.me/an3rakan"],
],
[
['text'=>"- @jx_xx -", "url"=>"https://t.me/an3rakan"],['text'=>"- تابع 🦋 •", "url"=>"https://t.me/an3rakan"],
],
              ]
        ])
]);
}

 if($text == "رابط حذف"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"• رابط حذف التلي ⬇️ ֆ
• احذف ولا ترجع عيش حياتك 😾💚ֆ
• https://telegram.org/deactivate",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
 ]);
 }
 if($text == "رابط الحذف"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"• رابط حذف التلي ⬇️ ֆ
• احذف ولا ترجع عيش حياتك 😾💚ֆ
• https://telegram.org/deactivate",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
 ]);
 }
 if($text == "باي"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"[وين رايح ولك بعد وكت ☹️❤️](https://t.me/an3rakan)",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
 ]);
 }
 if($text == "ملل"){
 bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>"https://t.me/devlbbb/251",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
 ]);
 }
 
if($data=="zhaemr"){
  bot('editMessageText',[
   'chat_id'=>$chat_id2,
   'message_id'=>$message_id,
    'text'=>'• اوامر العامةه ⚠️ •
    - اسم المجموعة 🔱 : $Name_Group •
    - ايدي المجموعة ✨ : $chat_id •
ֆ - - - - - - - - - - - - - - ֆ

- انستا + اليوزر ؛ لاضهار معلومات حساب الانستا 🔱 •
- معلوماتي ؛ لعرض معلومات حسابك ✅ •

- ضع وصف + الوصف ؛ لتغيير وصف المجموعةه 🚩 •
- معلومات المجموعة ؛ لعرض معلومات المجموعة ✨ •

- الرابط ؛ لاضهار رابط المجموعةه ⚡️ •
- موقع + المدينةه ؛ لعرض الموقع ⚜ •

- ترجم عربي + النص ؛ للترجمة للعربيةه ، 👋🏻؛
- ترجم انكلش + النص ؛ للترجمه للانكليزيةه 💭 •
- ترجم فارسي + النص ؛ للترجمة للفارسيةه 🐾 •

- رسائلي ؛ لعرض عدد الرسائل 📊 •
- مسح + العدد ؛ لمسح العدد من المجموعةه 🕘 •

- جلب صوره ؛ بالرد لجلب صورة العضو 🌐 •
- مسح ؛ بالرد لمسح الرسالةه 💡 •

- ضع اسم + الاسم ؛ لوضع اسم للمجموعةه ◀️ •
- تثبيت ؛ بالرد لتثبيت الرسالةه ، 📢

- حظر ؛ بالرد لحظر العضو وطرده ⚠️ •
- طرد ؛ بالرد لطرد العضو 🔗 •

- بايو ؛ لعرض البايو الخاص بك 🕸 •
- الغاء حظر ؛ بالرد لالغاء حظر العضو 🔬 •

- الاعدادات ؛ لمعرفة الوسائط المفتوحه ولمقفولة 📧 •
- ايدي ؛ لاضهار معلوماتك مع صورتك ▫️ •

- عدد الرسائل ؛ لاضهار عدد رسائل المجموعةه 📬 •
- معلومات ؛ بالرد لعرض معلومات العضو 🍥 •

- معلومات + المعرف ؛ لعرض معلومات العضو ⚡️ •

- ايدي بالرد ؛ لعرض ايدي الشخص 🌪 •
- رابط الحذف ؛ لعرض رابط الحذف ▪️•

- كتم ؛ بالرد لكتم العضو 💌 •
- الغاء كتم ؛ بالرد لالغاء كتم العضو❕•

ֆ - - - - - - - - - - - - - - ֆ
#تستطيع استخدام او روئية الاوامر بالاعدادات الاختيارية ֆ 
       - اي بالـ Ar & En ، 👋🏻؛
ֆ - - - - - - - - - - - - - - ֆ
- الوقت 🕐 : $time •
- التأريخ 📆 : $date •

- [اضغط هنا وتابع جديدنا ⚡️](https://t.me/an3rakan) -',
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"- العودة ☑️ -", "callback_data"=>"zhaemr3"]
],
[
['text'=>"• اضغط هنا وتابع جديدنا ⚡ •", "url"=>"t.me/jx_xx"],
],
]
])
]);
}
if($data=="zhaemr2"){
  bot('editMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id,
    'text'=>'• اوامر القفل 🔐 •
    - اسم المجموعة 🔱 : $Name_Group •
    - ايدي المجموعة ✨ : $chat_id •
    
- قفل بالطرد ؛ للقفل بلطرد❕•
- قفل بالمسح ؛ للقفل بالمسح ، 📢
- قفل بالتحذير ؛ للقفل بالمسح والتحذير 💌 •
- فتح + الامر ؛ للفتح 🚸 •

ֆ - - - - - - - - - - - - - - ֆ

    - الصور 🌠  •
    - الملصقات ◽️ •

    - الملفات 📂  •
    - التوجيه 🔱 •

    - الصوت 🎙 •
    - الروابط 🔗 •

    - البصمه 🔊 •
    - الفيديو ▶️ •

    - المتحركة 🔄 •
    - الجهات 🔖 •

    - البوتات 🤖 •
    - الماركداون 🚸 •

    - المعرف 📌 •
    - الكلايش ❇️ •

    - الدردشه ✨ •
    - العربيه 🦁 •

    - الانكليزيه 💌 •
    - المواقع 🌐 •

    - الاشعارات 🕘 •
    
ֆ - - - - - - - - - - - - - - ֆ
#تستطيع استخدام او روئية الاوامر بالاعدادات الاختيارية ֆ 
       - اي بالـ Ar & En ، 👋🏻؛
ֆ - - - - - - - - - - - - - - ֆ
- الوقت 🕐 : $time •
- التأريخ 📆 : $date •

-  [اضغط هنا وتابع جديدنا ☑️](https://t.me/an3rakan) -',
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"- العودة ✅ -", "callback_data"=>"zhaemr3"]
],
[
['text'=>"• اضغط هنا وتابع جديدنا ⚡️ •", "url"=>"t.me/jx_xx"],
],
]
])
]);
}
if($data=="zhaemr3"){
  bot('editMessageText',[
   'chat_id'=>$chat_id2,
   'message_id'=>$message_id,
    'text'=>'- اهلا بك ؛ [$name](https://t.me/an3rakan) •
- اختر ماتريد من الاسفل ☑️ -
 - اسم المجموعة 🔱 : $Name_Group •
    - ايدي المجموعة ✨ : $chat_id •
ֆ - - - - - - - - - - - - - - ֆ
• م1 - /h1 ؛ لاضهار اوامر الحمايةه ✨ -
- م2 - /h2 ؛ لاضهار اوامر العامةه ، 📢
ֆ - - - - - - - - - - - - - - ֆ

#تستطيع استخدام او روئية الاوامر بالاعدادات الاختيارية ֆ 
       - اي بالـ Ar & En ، 👋🏻؛

• او اضغط على 🚸 ؛
- احد الازرار التي في الاسفل 👇🏿•',
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"- اوامر العامةه ⚙؛", "callback_data"=>"zhaemr"],['text'=>"- اوامر الحمايةه , 📡", "callback_data"=>"zhaemr2"]
],
[
['text'=>"• اضغط هنا وتابع جديدنا ⚡ •", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
}
$idbotid = bot('getme',['h'])->result->id;  // id for your bot
$groups  = explode("\n",file_get_contents("groups.txt")); 

if($message->new_chat_member and $message->new_chat_member->id == $iddd) {

if(!in_array($chat_id,$groups)) {

file_put_contents("groups.txt", "$chat_id\n", FILE_APPEND);

}
}

$New_member = $message->new_chat_member;
$usser = $New_member->username;
$id = $New_member->id; 
if(preg_match('/^(.*)([Bb][Oo][Tt])/',$usser) and $New_member and $id != $iddd){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
}

$phone = +9647735334728;
if($text == "المطور"){
bot('SendContact',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'phone_number'=>$phone,
'first_name'=>"• 𖤍 سسعد مححمد -"
]);
}

$msgid = $message->message_id;
$reply = $message->reply_to_message; 
$reply_id = $reply->message_id;
  
if($reply and $text == "مسح"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$reply_id
]);
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$msgid
]);
}

if($text == "عدد الرسائل" or $text == "/msg" or $text == "رسائلي" && $message->message_id > 1000 && $message->chat->type == "supergroup"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- عدد رسائل المجموعةه 🚩 -",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"- $message->message_id -", "callback_data"=>"#"],['text'=>"- عدد الرسائل ⚠️ •", "callback_data"=>"#"]
],
[
['text'=>"- مجموعتك متفاعلةه 🦋 •", "callback_data"=>"#"],
],
]
])
]);
}

if(preg_match('/^(ترجم عربي) (.*)/s',$text)){
preg_match('/^(ترجم عربي) (.*)/s',$text,$mtch);
$txt = urlencode($mtch[2]);
$rs = json_decode(file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=ar&text='.$txt));
bot('sendMessage',array(
'chat_id'=>$chat_id,
'text'=>"".$rs->text[0],
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
              ["text"=>'• تابع قناة البوت 👅 •','url'=>'https://t.me/an3rakan'], 
              ]
              ]
        ])
));
}

 if(preg_match('/^(ترجم انكلش) (.*)/s',$text)){
preg_match('/^(ترجم انكلش) (.*)/s',$text,$mtch);
$txt = urlencode($mtch[2]);
$rs = json_decode(file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=en&text='.$txt));
bot('sendMessage',array(
'chat_id'=>$chat_id,
'text'=>"".$rs->text[0],
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
              ["text"=>'• تابع قناة البوت 👅 •','url'=>'https://t.me/an3rakan'], 
              ]
              ]
        ])
));
}

 if(preg_match('/^(ترجم فارسي) (.*)/s',$text)){
preg_match('/^(ترجم فارسي) (.*)/s',$text,$mtch);
$txt = urlencode($mtch[2]);
$rs = json_decode(file_get_contents('https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20160119T111342Z.fd6bf13b3590838f.6ce9d8cca4672f0ed24f649c1b502789c9f4687a&format=plain&lang=fa&text='.$txt));
bot('sendMessage',array(
'chat_id'=>$chat_id,
'text'=>"".$rs->text[0],
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [
              ["text"=>'• تابع قناة البوت 👅 •','url'=>'https://t.me/an3rakan'], 
              ]
              ]
        ])
));
}

$ksk = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChatMemberscount?chat_id=$chat_id"));
$ksmk = $ksk->result;  
if($text == "الاعضاء"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
- عدد اعضاء المجموعةه 👥 : $ksmk •
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"- $ksmk -", "url"=>"https://t.me/an3rakan"],['text'=>"- الاعضاء ⚠️ •", "url"=>"https://t.me/an3rakan"]
],
]
])
]);
}

if($text == "معلومات"){
$c = count($groups);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• اهلا بك عزيزي معلومات العضو هي ⚠️ •",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"- معلومات العضو ⚡️ -", "callback_data"=>"#"]
],
[
['text'=>"@$re_user", "callback_data"=>"#"],['text'=>"- المعرف 🦋 •","callback_data"=>"#"]
],
[
['text'=>"$re_id", "callback_data"=>"#"],['text'=>"- الايدي 🔱 •","callback_data"=>"#"]
],
[
['text'=>"- اضغط هنا من فضلك 👅 •","url"=>"https://t.me/an3rakan"]
],
]
])
]);
}

if($text == "بايو"){
$get= file_get_contents("https://wathiq.us/api/getbio/" . $user);
$json = json_decode($get);
$bio = $json->bio; 
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"- `البايو الخاص بك 🦋` :

`$bio`",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
               [
              ["text"=>"• تابع قناة البوت 👅 •",'url'=>"https://t.me/an3rakan"], 
              ]
              ]
        ])
]);
}

$msgid = $message->message_id;
$expdel = explode(' ', $text);
if($expdel[0] == "مسح" and isset($expdel[1]) and $expdel[1] < 100){
for($y = $msgid - $expdel[1]; $y < $msgid; $y++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$y
]);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- Messages have been erased 👅؛",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[
['text'=>"• تم مسح الرسائل 🚩 •", "url"=>"https://t.me/an3rakan"]
],
[
['text'=>"- $expdel[1]", "url"=>"https://t.me/an3rakan"],['text'=>"- العدد ☑️", "url"=>"https://t.me/an3rakan"],
],
]
])
]);
}

$rand = array('[ فديت صخامك 💙🙊 ](https://t.me/an3rakan)' , '[ منور صخام الجدر 😹☝️ ](https://t.me/an3rakan)' , '[ اوف ابو سمره 🙊😹 ](https://t.me/an3rakan)');
$z39 = array_rand($rand, 1);

if($text ==  "🌚" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$z39],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    
    $rand = array('[لضوج حبيبي 😢❤️🍃](https://t.me/an3rakan)');
$z38 = array_rand($rand, 1);

if($text ==   "🙁"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$z38],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    
    $rand = array('[كول وماكول لاحد 🙊💓](https://t.me/an3rakan)');
$z31 = array_rand($rand, 1);

if($text ==  "اكلك" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$z31],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    
    $rand = array('[داحس بيك 🌚😹](https://t.me/an3rakan)');
$z29 = array_rand($rand, 1);

if($text ==  "شدتحس" ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$z29],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    
    $rand = array('[عود ثكيل ؟ 😪](https://t.me/an3rakan)' , '[فدوا رحت للثكيل 💙🙊](https://t.me/an3rakan)' , '[يؤبرني انا الثكيل┊😻🙊💗 ](https://t.me/an3rakan)');
$z28 = array_rand($rand, 1);

if($text ==  "🙃"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$z28],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[عود ثكيل ؟ 😪](https://t.me/an3rakan)' , '[فدوا رحت للثكيل 💙🙊](https://t.me/an3rakan)' , '[يؤبرني انا الثكيل┊😻🙊💗 ](https://t.me/an3rakan)');
$z27 = array_rand($rand, 1);

if($text ==  "🙂"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$z27],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[مححح 😻😽](https://t.me/an3rakan)');
$z15 = array_rand($rand, 1);

if($text == "مح"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$z15],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[وجعا اشبيك الفاهي🌚](https://t.me/an3rakan)');
$ff2008 = array_rand($rand, 1);

if($text == "ها"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$ff2008],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
$rand = array('[و المطلوب شنو اركصلك/ج مثلا 🙊😋](https://t.me/an3rakan)');
$ff22 = array_rand($rand, 1);

if($text == "ضوجه"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$ff22],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[هلا بريحة هلي 😻](https://t.me/an3rakan)' , '[لُـﮩـضڵ تتـمشـﮥ اڪعـد ﺳـﯠڵـف 😐👋🏻](https://t.me/an3rakan)');
$ff13 = array_rand($rand, 1);

if($text == "🚶"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$ff13],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[تاكل خرة الجيش 😂😂](https://t.me/an3rakan)' , '[كيفي 🐸](https://t.me/an3rakan)');
$ff14 = array_rand($rand, 1);

if($text == "ليش"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$ff14],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[شبيك كالب خلقتك 😐](https://t.me/an3rakan)');
$ff7 = array_rand($rand, 1);

if($text == "😒"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$ff7],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[ندري بيك حبي منور😹😼](https://t.me/an3rakan)');
$ff4 = array_rand($rand, 1);

if($text == "فرخ"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$ff4],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[ٱنـﮩـت الاحـلآ 🌚❤️](https://t.me/an3rakan)');
$ff6 = array_rand($rand, 1);

if($text == "حلو"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$ff6],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[لا كسمك 😒😂](https://t.me/an3rakan)', '[عييب ستحي شويه😱](https://t.me/an3rakan)');
$g57666r = array_rand($rand, 1);

if($text == "كسمك"   ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g57666r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[لـﮩـضـوج פـٍـٍبيبي  😢❤️🍃](https://t.me/an3rakan)', '[عدل حلكك يول بعدني احبك 😻💋 😍](https://t.me/an3rakan)');
$g576r = array_rand($rand, 1);

if($text == "☹️"   ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g576r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[قناه داني شرفنه بيها @jx_xx 🌝💚](https://t.me/an3rakan)');
$g55r = array_rand($rand, 1);

if($text == "القناه"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g55r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[قناه داني شرفنه بيها @jx_xx 🌝💚](https://t.me/an3rakan)');
$g55r = array_rand($rand, 1);

if($text == "القناة"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g55r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[قناه داني شرفنه بيها @jx_xx 🌝💚](https://t.me/an3rakan)');
$g55r = array_rand($rand, 1);

if($text == "قناة"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g55r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[يسلمك الله 💗🌼](https://t.me/an3rakan)' , '[الله يسلمگ 🙊💗](https://t.me/an3rakan)' , '[يسلمك الرب 😻💚](https://t.me/an3rakan)');
$g54r = array_rand($rand, 1);

if($text == "تسلم"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g54r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[عليكم سلام والرحمه 💗 ](https://t.me/an3rakan)' , '[هلا نورت 🙂💗](https://t.me/an3rakan)' , '[اهلا وسهلا 🙊😻](https://t.me/an3rakan)');
$g53r = array_rand($rand, 1);

if($text == "السلام عليكم"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g53r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[روحا ┇😻🙊](https://t.me/an3rakan)' );
$g43r = array_rand($rand, 1);

if($text == "بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g43r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[دوم حـيـآتـي┊😻💗](https://t.me/an3rakan)' , '[دوم يارب 🙊🌼](https://t.me/an3rakan)' , '[دوم نشالله 😻💚](https://t.me/an3rakan)');
$g48r = array_rand($rand, 1);

if($text == "هههه"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g48r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[متمل انت 😒🌿](https://t.me/an3rakan)' , '[لع منريد 😹🌚](https://t.me/an3rakan)' , '[بعدكم عايشين 🌚💗](https://t.me/an3rakan)');
$g50r = array_rand($rand, 1);

if($text == "تبادل"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g50r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[يضحك الفطير 😹🌚](https://t.me/an3rakan)' , '[ضحكه لو عافية┊💜🙊](https://t.me/an3rakan)' , '[دوم┊💗😻 ](https://t.me/an3rakan)');
$g27r = array_rand($rand, 1);


if($text == "😂"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g27r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[احترمك لخاطر الموجودين 🌚🌼](https://t.me/an3rakan)' , '[ع وجهك 🌚😹](https://t.me/an3rakan)' , '[اهينك 🌚😹 ؟](https://t.me/an3rakan)');
$g30r = array_rand($rand, 1);

if($text == "نجب"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g30r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[اني مو ابوك 🌚💚](https://t.me/an3rakan)' , '[يمشوك بيها 💜😹](https://t.me/an3rakan)' , '[تنكال الك 🌝🌿](https://t.me/an3rakan)');
$g33r = array_rand($rand, 1);

if($text == "دي"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g33r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[ادخله 🌚😹](https://t.me/an3rakan)' , '[يلا يلا عكيف 😹](https://t.me/an3rakan)' , '[وف رتاحيت 😹🌚](https://t.me/an3rakan)');
$g36r = array_rand($rand, 1);

if($text == "اه"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g36r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[معاجبك 🌚🌼 ؟](https://t.me/an3rakan)' , '[شبي 😒😹](https://t.me/joinchat/AAAAAEDKgc8W0AlBhL1rYw)' , '[صكارك/ج 🌚💗](https://t.me/an3rakan)');
$g39r = array_rand($rand, 1);

if($text == "البوت"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g39r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[يضحك الفطير 😹🌚](https://t.me/an3rakan)' , '[ضحكه لو عافية┊💜🙊](https://t.me/an3rakan)' , '[دوم┊💗😻 ](https://t.me/an3rakan)');
$g26r = array_rand($rand, 1);

if($text == "😹"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g26r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[هلاوات 🙈💗](https://t.me/an3rakan)' , '[هلا نورت/ي 😻💚](https://t.me/an3rakan)' , '[اهلا 😻💗](https://t.me/an3rakan)');
$g17r = array_rand($rand, 1);

if($text == "هلو"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g17r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[مراحب┊😻💗 ](https://t.me/an3rakan)' , '[هلا نورت/ي ┋🙊💛 ](https://t.me/an3rakan)' , '[مرحبتين ┋🙊💜 ](https://t.me/an3rakan)');
$g18r = array_rand($rand, 1);

if($text == "مرحبا"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g18r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
$rand = array('[تمام ونت ┊🙂💚 ](https://t.me/an3rakan)' , '[الحـمدلله وانـت ┋😻🌼 ](https://t.me/an3rakan)' , '[تمام ┊😻💗 ](https://t.me/an3rakan)');
$g19r = array_rand($rand, 1);

if($text == "شلونكم"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g19r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[تمام ونت ┊🙂💚 ](https://t.me/an3rakanhttps://t.me/an3rakanhttps://t.me/an3rakan)' , '[الحـمدلله وانـت ┋😻🌼 ](https://t.me/an3rakan)' , '[تمام ┊😻💗 ](https://t.me/an3rakan)');
$g20r = array_rand($rand, 1);


if($text == "شلونك"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g20r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[وينها 😹🌚](https://t.me/an3rakan)' , '[هايات 💜🙊](https://t.me/an3rakan)' , '[هلا نورت 💚😻](https://t.me/an3rakan)');
$g24r = array_rand($rand, 1);

if($text == "هاي"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g24r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[صاحو لعافيه┊💜🙊](https://t.me/an3rakan)' , '[شتريد منه هذا مالتي 💚🙊](https://t.me/an3rakan)' , '[تعال يردوك 💜😒 @zhaemr](https://t.me/an3rakan)');
$g25r = array_rand($rand, 1);

if($text == "سعد"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g25r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
$rand = array('[صاحو لعافيه┊💜🙊](https://t.me/an3rakan)' , '[شتريد منه هذا مالتي 💚🙊](https://t.me/an3rakan)' , '[تعال يردوك 💜😒 @zhaemr](https://t.me/an3rakan)');
$g349r = array_rand($rand, 1);

if($text == "داني"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g349r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    $rand = array('[منور حبعمري 🌝💋](https://t.me/an3rakan)' , '[شدتحس ؟ 🌚💗](https://t.me/an3rakan)' , '[ه.ه عود ثكيل 🌝💔](https://t.me/an3rakan)' , '[بيك ابو صفار 😷😹](https://t.me/an3rakan)' , '[صاير نضيف 🌞😹](https://t.me/an3rakan)');
$g9033r = array_rand($rand, 1);

if($text == "🌝"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> $rand[$g9033r],
'reply_to_message_id'=>$message->message_id,
"parse_mode"=>"MARKDOWN",
"disable_web_page_preview"=>"true",
'reply_markup' .

   'reply_markup'=>json_encode([
 
    ])
    ]);
    }
    
    $rep = $message->reply_to_message;
if(preg_match('/^(تاك)(.*)/',$text)){
 $text = str_replace('تاك ','',$text);
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"[$text](tg://user?id=".$rep->from->id.")",
 'parse_mode'=>'markdown'
 ]);
}
$rep = $message->reply_to_message;
if(preg_match('/^(سويله تاك)(.*)/',$text)){
 if($rep){
 $text = str_replace('سويله تاك ','',$text);
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"[$text](tg://user?id=".$rep->from->id.")",
 'parse_mode'=>'markdown'
 ]);
}
}
$rep = $message->reply_to_message;
if(preg_match('/^(تاك)(.*)/',$text)){
 if($rep){
 $text = str_replace('تاك ','',$text);
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"[$text](tg://user?id=".$rep->from->id.")",
 'parse_mode'=>'markdown'
 ]);
}
}

if($you == "creator" or $you == "administrator" or $from_id == $sudo){
if($text == 'الاعدادات'){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>'اعدادات المجموعة ⚠️ .
    • كما في الاسفل 🔂  •

مقفول = ❌
مفتوح = ✅

      ֆ - - - - - - - - - - - - - - ֆ

[- اضغط هنا وتابع جديدنا ، 👋🏻؛](https://t.me/an3rakan)',

'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
               [["text"=>$get['groups'][$chat_id]['photo']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الصور 🌠 •",'url'=>"https://t.me/an3rakan"]],
              [
              ["text"=>$get['groups'][$chat_id]['edited']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- التعديل ⚠️ •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
              ["text"=>$get['groups'][$chat_id]['location']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- المواقع 📮 •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
                ["text"=>$get['groups'][$chat_id]['english']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- الانكليزيةه 📠•",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['arabic']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- العربيةه 🅾️ •",'url'=>"https://t.me/an3rakan"] 
              ],
               [["text"=>$get['groups'][$chat_id]['chat']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"الدردشةه 💌",'url'=>"https://t.me/an3rakan"]],
               [["text"=>$get['groups'][$chat_id]['joinmember']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الاشعارات 📧 •",'url'=>"https://t.me/an3rakan"]],
              [["text"=>$get['groups'][$chat_id]['sticker']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الملصقات 🚩 •",'url'=>"https://t.me/an3rakan"]],
              [
              ["text"=>$get['groups'][$chat_id]['doc']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الملفات 📂 •",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['fwd']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - التوجيه 🔱 •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
              ["text"=>$get['groups'][$chat_id]['audio']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الصوت 🎙 •",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['links']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الروابط 🔗 •",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['voice']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - البصمه 🔊 •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
              ["text"=>$get['groups'][$chat_id]['video']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الفيديو ▶️ •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['gif']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - المتحركة 🦋 •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['contact']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الجهات 🔖 •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['bots']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - البوتات 🤖 •",'url'=>"https://t.me/an3rakan"] 
              ], [
              ["text"=>$get['groups'][$chat_id]['mark']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الماركدون 🚸 •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['user']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - المعرف 📌 •",'url'=>"https://t.me/an3rakan"] 
              ],
              ]
            ])
    ]);
}
if($text == '/settings'){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>'اعدادات المجموعة ⚠️ .
    • كما في الاسفل 🔂  •

مقفول = ❌
مفتوح = ✅

      ֆ - - - - - - - - - - - - - - ֆ

[- اضغط هنا وتابع جديدنا ، 👋🏻؛](https://t.me/an3rakan)',

'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
               [["text"=>$get['groups'][$chat_id]['photo']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الصور 🌠 •",'url'=>"https://t.me/an3rakan"]],
              [
              ["text"=>$get['groups'][$chat_id]['edited']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- التعديل ⚠️ •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
              ["text"=>$get['groups'][$chat_id]['location']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- المواقع 📮 •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
                ["text"=>$get['groups'][$chat_id]['english']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- الانكليزيةه 📠•",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['arabic']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- العربيةه 🅾️ •",'url'=>"https://t.me/an3rakan"] 
              ],
               [["text"=>$get['groups'][$chat_id]['chat']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"الدردشةه 💌",'url'=>"https://t.me/an3rakan"]],
               [["text"=>$get['groups'][$chat_id]['joinmember']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الاشعارات 📧 •",'url'=>"https://t.me/an3rakan"]],
              [["text"=>$get['groups'][$chat_id]['sticker']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الملصقات 🚩 •",'url'=>"https://t.me/an3rakan"]],
              [
              ["text"=>$get['groups'][$chat_id]['doc']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الملفات 📂 •",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['fwd']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - التوجيه 🔱 •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
              ["text"=>$get['groups'][$chat_id]['audio']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الصوت 🎙 •",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['links']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الروابط 🔗 •",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['voice']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - البصمه 🔊 •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
              ["text"=>$get['groups'][$chat_id]['video']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الفيديو ▶️ •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['gif']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - المتحركة 🦋 •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['contact']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الجهات 🔖 •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['bots']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - البوتات 🤖 •",'url'=>"https://t.me/an3rakan"] 
              ], [
              ["text"=>$get['groups'][$chat_id]['mark']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الماركدون 🚸 •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['user']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - المعرف 📌 •",'url'=>"https://t.me/an3rakan"] 
              ],
              ]
            ])
    ]);
}
if($text == '/setting'){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>'اعدادات المجموعة ⚠️ .
    • كما في الاسفل 🔂  •

مقفول = ❌
مفتوح = ✅

      ֆ - - - - - - - - - - - - - - ֆ

[- اضغط هنا وتابع جديدنا ، 👋🏻؛](https://t.me/an3rakan)',

'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
               [["text"=>$get['groups'][$chat_id]['photo']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الصور 🌠 •",'url'=>"https://t.me/an3rakan"]],
              [
              ["text"=>$get['groups'][$chat_id]['edited']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- التعديل ⚠️ •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
              ["text"=>$get['groups'][$chat_id]['location']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- المواقع 📮 •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
                ["text"=>$get['groups'][$chat_id]['english']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- الانكليزيةه 📠•",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['arabic']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"- العربيةه 🅾️ •",'url'=>"https://t.me/an3rakan"] 
              ],
               [["text"=>$get['groups'][$chat_id]['chat']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>"الدردشةه 💌",'url'=>"https://t.me/an3rakan"]],
               [["text"=>$get['groups'][$chat_id]['joinmember']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الاشعارات 📧 •",'url'=>"https://t.me/an3rakan"]],
              [["text"=>$get['groups'][$chat_id]['sticker']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الملصقات 🚩 •",'url'=>"https://t.me/an3rakan"]],
              [
              ["text"=>$get['groups'][$chat_id]['doc']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الملفات 📂 •",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['fwd']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - التوجيه 🔱 •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
              ["text"=>$get['groups'][$chat_id]['audio']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الصوت 🎙 •",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['links']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الروابط 🔗 •",'url'=>"https://t.me/an3rakan"] 
              ],
               [
              ["text"=>$get['groups'][$chat_id]['voice']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - البصمه 🔊 •",'url'=>"https://t.me/an3rakan"] 
              ],
              [
              ["text"=>$get['groups'][$chat_id]['video']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الفيديو ▶️ •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['gif']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - المتحركة 🦋 •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['contact']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الجهات 🔖 •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['bots']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - البوتات 🤖 •",'url'=>"https://t.me/an3rakan"] 
              ], [
              ["text"=>$get['groups'][$chat_id]['mark']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - الماركدون 🚸 •",'url'=>"https://t.me/an3rakan"] 
              ],[
              ["text"=>$get['groups'][$chat_id]['user']['ok'],'url'=>"https://t.me/an3rakan"],["text"=>" - المعرف 📌 •",'url'=>"https://t.me/an3rakan"] 
              ],
              ]
            ])
    ]);
}
}

$url2 = "http://api.telegram.org/bot".API_KEY."/getChatMembersCount?chat_id=$chat_id";
$getmember = file_get_contents($url2);
$json2 = json_decode($getmember);
$result2 = $json2->result; 
$get = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$chat_id"));
$about = $get->result->description;
if($text == "/infog" or $text == "معلومات المجموعة"){
    bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"- اهلا بك ⚜ : @$username  •
    • معلومات المجموعة 🔱 • 
ֆ - - - - - - - - - - - - - - ֆ

    - اسم المجموعة ⚙ : $Name_Group •
    - ايدي المجموعة 🎈 : $chat_id •
    - عدد الاعضاء 🔆 : $result2 •
    - عدد الرسائل 📝 :  $message->message_id •
    - وصف المجموعة ❇️ : $about •
    
ֆ - - - - - - - - - - - - - - ֆ
    - الوقت 🕐 : $time •
    - التأريخ 📆 : $date •",
    'reply_to_message_id'=>$message->message_id,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
        [['text'=>"- اضغط هنا وتابع جديدنا 🔱 •",'url'=>"t.me/jx_xx"]]
    ]
    ])
    ]);
}

$desc = str_replace("ضع وصف ", "$desc", $text);
if ($text == "ضع وصف $desc") {
    bot('setChatDescription',[
        'chat_id'=>$chat_id,
        'description'=>"$desc",
    ]);
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"- تم وضع وصف للمجموعة ✅ • 
        - ايدي المجموعة 🔱 : $chat_id  •
ֆ - - - - - - - - - - - - - - ֆ

        الوصف الجديد 💌 : $desc ",
        'reply_to_message_id'=>$message->message_id,
    ]);
}


- ملف حماية تابع لسجاد سلام جان ٥٠٠ سطر وطورته اني وساعدني بي سجاد ، القفل ب ٣ انواع مسح طرد تحذير ؛ تخزين جسون سرعته تخبل .. 💗👇🏻'

- تنشر اذكر اسمي ؛ سعد محمد
