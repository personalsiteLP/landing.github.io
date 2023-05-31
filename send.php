<?php
 if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "urusova.elina@mail.ru";
  $subject = "Новое сообщение от $name";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
   echo "Сообщение отправлено!";
  } else {
   echo "Ошибка при отправке сообщения.";
  }
 }
 ?>
