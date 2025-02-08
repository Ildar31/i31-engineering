<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Ваш email, на который будут приходить сообщения
    $to = "irashitov79@mail.ru"; // Укажите ваш email
    $subject = "Новое сообщение с сайта";
    
    // Формируем тело письма
    $body = "Имя: $name\nEmail: $email\nСообщение: $message";
    
    // Заголовки для письма
    $headers = "From: $email";
    
    // Отправляем письмо
    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение отправлено!";
    } else {
        echo "Ошибка отправки сообщения.";
    }
}
?>
