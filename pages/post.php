<?
// ----------------------------конфигурация-------------------------- //

$adminemail = "Ivan.Sorochinsky@yandex.ru"; // e-mail админа
$sitename = "GalantService";


$date=date("d.m.y"); // число.месяц.год

$time=date("H:i"); // часы:минуты:секунды

$backurl="http://galantservice.local/";  // На какую страничку переходит после отправки письма

//---------------------------------------------------------------------- //

// Принимаем данные с формы

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["message"]);
$message2 = "Имя: $name \nТелефон: $phone \nТекст: $message";

echo $message2;

    // Отправляем письмо админу
    $pagetitle = "Новая заявка с сайта \"$sitename\"";
    mail($adminemail, $pagetitle, $message2, "Content-type: text/plain; charset=\"utf-8\"\n From: $adminemail");


// Сохраняем в базу данных

    $f = fopen("message.txt", "a+");

    fwrite($f," \n $date $time Сообщение от $name");

    fwrite($f,"\n $message2 ");

    fwrite($f,"\n ---------------");

    fclose($f);



// Выводим сообщение пользователю

    print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 1000); 
//--></script> 
 
$message
 
<p>Сообщение отправлено! Подождите, сейчас вы будете перенаправлены на главную страницу...</p>";

?>