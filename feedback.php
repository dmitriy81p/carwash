<?php

$token = "5332594317:AAGIw2b5TB04wSaHaj7Pf5s3P73gpFm7N5o";

//Сюда вставляем chat_id
$chat_id = "-698734421";

if ($_POST['act'] == 'order') {
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
        'Обработка данных:' => $data
    );


    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };


    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

    if ($sendToTelegram) {
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
    }

    else {
        alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
    }
}
?>