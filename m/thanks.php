<?
$link = false;
$mails = array(
	"yandex.ru" => "http://mail.yandex.ru/",
	"ya.ru" => "http://mail.yandex.ru/",
	"gmail.com" => "http://mail.google.com/",
	"mail.ru" => "http://mail.ru/",
	"inbox.ru" => "http://mail.ru/",
	"list.ru" => "http://mail.ru/",
	"bk.ru" => "http://mail.ru/",
);
if( isset($_POST["email"]) && $_POST["email"] != "" ){
	$arr = explode("@", trim($_POST["email"]));
	if( isset($mails[$arr[1]]) ){
		$link = $mails[$arr[1]];
	}
}
?>
<!-- <? if( $link !== false ): ?>
	<a href="<?=$link?>" class="b-btn b-orange-btn b-btn-big" target="_blank"><span>Проверить почту</span></a>
<? endif; ?> -->
<?php
	require_once("phpmail.php");

	// $email_admin = "dima@redder.pro";
	$email_admin = "huckconversionlp@transfiguration.agency";
	// $email_admin = "mike@kitaev.pro";

	$from = "“Флагман TFA”";
	$email_from = "flagman@transfiguration.agency";

	$deafult = array(
		"name"=>"Имя", 
		"phone"=>"Телефон", 
		"email"=>"E-mail", 
		"type" => "У меня бизнес в сфере", 
		"type-more" => "Другая сфера бизнеса", 
		"works" => "Если коротко, то мы",
		"site" => "Есть сайт",
		"task" => "Какая у вас сейчас задача?",
		"mytask-text" =>  "Конкретная задача",
		"promo" => "Вы понимаете, что потребуется бюджет на рекламу?",
		"amount" => "В месяц инвестирую в неё",
		"more-request" => "Скажите, чего вы хотите в целом?"
	);

	$fields = array();

	if( count($_POST) ){

		foreach ($deafult  as $key => $value){
			if( isset($_POST[$key]) ){
				if( is_array($_POST[$key]) ){
					$_POST[$key] = implode(", ", $_POST[$key]);
				}
				if( $_POST[$key] != "" ){
					if( $key == "amount" ){
						if( intval($_POST[$key]) == 200 ){
							$_POST[$key] = "> ".$_POST[$key];
						}
						$fields[$value] = $_POST[$key]." тысяч рублей";
					}else{
						$fields[$value] = $_POST[$key];
					}
				}
			}
		}

		$i = 1;
		while( isset($_POST[''.$i]) ){
			$fields[$_POST[$i."-name"]] = $_POST[''.$i];
			$i++;
		}

		$subject = $_POST["subject"];

		$title = "Поступила заявка с сайта ".$from.":\n";

		$message = "<div><h3 style=\"color: #333;\">".$title."</h3>";

		foreach ($fields  as $key => $value){
			$message .= "<div><p><b>".$key.": </b>".$value."</p></div>";
		}
			
		$message .= "</div>";
		
		send_mime_mail("Сайт ".$from,$email_from,$name,$email_admin,'UTF-8','UTF-8',$subject,$message,true);

		require_once("thanks-".$_POST["thanks"].".php");
	}

?>