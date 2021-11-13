<?php
$data = $_POST;


if(isset($data['do_login'])) { 
 $errors = array();
 $user = R::findOne('users', 'login = ?', array($data['login']));

 if($user) {

 	
 	if(password_verify($data['password'], $user->pass)) {
 		$_SESSION['logged_user'] = $user;
        header('Location: index.html');

 	} else {
    
    $errors[] = 'Пароль неверно введен!';

 	}

 } else {
 	$errors[] = 'Пользователь с таким логином не найден!';
 }

if(!empty($errors)) {

		echo '<div style="color: red; ">' . array_shift($errors). '</div><hr>';

	}

}
?>