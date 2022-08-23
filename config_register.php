<?php
	$data=array($_POST);

   

    // Проверка, совпадают ли пароли.
    if($data[0]['password']==$data[0]['Confirm_password'])

    {
        // Преобразовываем его в json вид.
		$json=json_encode($data);

		// Создаем новый файл.
		$file=fopen('register.json','w');

		// Записываем туда данные.
		$write=fwrite($file, $json);

		//закрываем файл
    	fclose($file);


   	//Сообщние об удачной регистрации.
   	include 'success_register.html';


    }


    else 
    {

    	include 'repeat_password.html';


    }
 
?>

    
    		