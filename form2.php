<?php
 /* Здесь проверяется существование переменных */
  if (isset($_POST['contact_tel'])) {$phone = $_POST['contact_tel'];}
 if (isset($_POST['contact_name'])) {$name = $_POST['contact_name'];}
 if (isset($_POST['email'])) {$email = $_POST['other'];}

/* Сюда впишите свою эл. почту */
 $address = "efimovstroy@tut.by";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Новый ЗАКАЗ с сайта \nТелефон (email): $phone\nИмя: $name\nСрочно свяжитесь";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='ЗАКАЗ с сайта'; //сабж
$email = "PROFARENDA.by"; // от кого
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Спасибо! Ваша заявка успешно получена. Мы свяжемся с Вами в ближайшее время!</title>
<meta name="generator">


<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<h1>Спасибо! Ваша заявка успешно получена. Мы свяжемся с Вами в ближайшее время!</h1>
</body>
</html>