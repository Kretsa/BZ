<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$services = $_POST['services'];
$message = 'Сообщение успешно отправлено';
$message2 = 'При отправке сообщения возникли ошибки';





// Преобразует символы добавленные юзером

 $name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
// Декодирует URL
$name = urldecode($name);
$phone = urldecode($phone);
// Удаление пробелов с начала и конца строки
$name = trim($name);
$phone = trim($phone);

$text="Имя: ".$name;
$text.="\nПочта: ".$phone;
$text.="\nУслуга: ".$services;

if (mail("services", "Заказ с сайта", $text))
 {
    // echo "сообщение успешно отправлено"; 
    echo $message;


    
} 


else {
    echo $message2;
}
?>

