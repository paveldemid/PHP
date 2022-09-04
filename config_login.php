<?php
    // Получаем данные при входе в систему.
	$date_login=array($_POST);
     // Записываем даннные из БД.
    $data_register=array();
    
    // получаем данные из JSON файла
    $json=file_get_contents("register.json");
    // Преобразуем в массив
    $data_register=json_decode($json,true);

    //Проверяем наличие данных пользователя в БД.

   if ($date_login[0]['username']==$data_register[0]['username']) {


       		if ($date_login[0]['password']==$data_register[0]['password']){
                        // Успешный вход.
        				include 'successful_login.html';
        		}

    			else {
                        // Ошибочный пароль.
    		 			include 'wrong_password.html';
    		}
    }
    

    else {
        // Ошибочный логин.
    	include 'wrong_login.html';
    }
?>