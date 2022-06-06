<?php

// Создаем массив с адресами для каждого языкового кода

$sites = array(

"ro" => "/ro/",

"en" => "/en/",

"ru" => "/ru/",

);

// получаем язык

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // вырезаем первые две буквы

// проверяем язык

$acceptLang = ['ro', 'en', 'ru'];//Ваши языки.

// перенаправление на субдомен

$lang = in_array($lang, $acceptLang) ? $lang : 'ro';//Сравниваем язык браузера с имеющимися, если нет совпадения, по умолчанию румынский язык(можете поменять).

$lang === 'ro' ? '' : (in_array($lang, $acceptLang) ? header('Location: ' . $sites[$lang]) : '');//Редирект на другие языки, если их нет, пользователь остается на румынском.

header('Location: ' . $sites[$lang]);

echo $sites[$lang];
?>


