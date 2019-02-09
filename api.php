<?php
/**
** Call API like:
** http://localhost:8080/api.php?key=1111111111&action=tts&device=fa399a3b-1ff0-48fc-92f0-123226310806&text=%E9%9D%9E%E5%B8%B8%E5%A5%BD
** Will use the first device if device not specified
**/
// check API_KEY first
if($_REQUEST['key']!=$_ENV['API_KEY']){
  http_response_code(401);
}

require('text_to_speech.php');
$cookie = login($_ENV['MI_USER'], $_ENV['MI_PASSWORD']);
$action = $_REQUEST['action'];

if($action=='devices'){
  print(json_encode(get_devices($cookie)));
}elseif($action=='tts'){
  $deviceID = $_REQUEST['device'];
  $text = $_REQUEST['text'];
  if(NULL==$deviceID || ''==$deviceID){
		$deviceID = _read_devices[0]->deviceID;
	}
	text_to_speech($cookie, $deviceID, $text);
}else{
  echo "Unkown action";
}
?>
