<?php

	//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5332594317:AAGIw2b5TB04wSaHaj7Pf5s3P73gpFm7N5o";

//Сюда вставляем chat_id
$chat_id = "-698734421";

/Определяем переменные для передачи данных из нашей формы
if ($_POST['act'] == 'order') {
    $name = ($_POST['name']);
    $email = ($_POST['email']);
    $phone = ($_POST['phone']);
    $news = ($_POST['news']);
    $data = ($_POST['data']);

//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Имя:' => $name,
        'Почта:' => $email,
        'Телефон:' => $phone,
        'Новости:' => $news,
        'Обработка данных:' => $data,
    );


//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };


	//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Выводим сообщение об успешной отправке
    if ($sendToTelegram) {
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
    }

//А здесь сообщение об ошибке при отправке
    else {
        alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
    }
}
?>