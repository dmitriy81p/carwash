<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5332594317:AAGIw2b5TB04wSaHaj7Pf5s3P73gpFm7N5o";

//Сюда вставляем chat_id
$chat_id = "-698734421";


//Определяем переменные для передачи данных из нашей формы
  $name = ($_POST['name']);
  $email = ($_POST['email']);
  $phone = ($_POST['phone']);
  $news = ($_POST['news']);
  $data = ($_POST['data']);

$arr = array(
  'Имя:' => $name,
  'Почта:' => $email,
  'Телефон:' => $phone,
  'Новости:' => $news,
  'Данные:' => $data,
);

//Настраиваем внешний вид сообщения в телеграме
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if($sendToTelegram){
  echo "Ваша заявка успешно отправлена!\n\rМы свяжемся с Вами в ближайшее время.\n\r";
} else {
  echo 'При отправке заявки произошла ошибка...';
}
unset($_POST);
?>