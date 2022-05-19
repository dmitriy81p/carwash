<?php

// Создаем массив с адресами для каждого языкового кода

$sites = array(

"pl" => "/index-pl.php",

"en" => "/index-en.php",

"ru" => "/index-ru.php",

);

// получаем язык

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); // вырезаем первые две буквы

// проверяем язык

$acceptLang = ['pl', 'en', 'ru'];//Ваши языки.

// перенаправление на субдомен

$lang = in_array($lang, $acceptLang) ? $lang : 'pl';//Сравниваем язык браузера с имеющимися, если нет совпадения, по умолчанию английский язык(можете поменять).

$lang === 'pl' ? '' : (in_array($lang, $acceptLang) ? header('Location: ' . $sites[$lang]) : '');//Редирект на другие языки, если их нет, пользователь остается на английском.

header('Location: ' . $sites[$lang]);

echo $sites[$lang];
?>


