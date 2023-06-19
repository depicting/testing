<?php
include_once '/config/config.php';
global $bot_token, $chat_id;



function telegram($msg)
{
    global $bot_token, $chat_id;
    $url='https://api.telegram.org/bot'.$bot_token.'/sendMessage';$data=array('chat_id'=>$chat_id,'text'=>$msg,  'reply_markup' => json_encode(array("inline_keyboard" => array(array(array("text" => "Ban User", "callback_data" => json_encode(array("type" => "ban", "ip" => $_SERVER['REMOTE_ADDR']))))))), 'parse_mode' => 'html');
        $options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
        $context=stream_context_create($options);
        $result=file_get_contents($url,false,$context);
        return $result;
}



header("Location: ../ ");

?>