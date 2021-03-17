<?php 	
	if(!defined('secure') && !isset($_SERVER["HTTP_REFERER"])) die('access denied');
	
	$host = 'localhost';
	$dbname = 'kryuch6b_odent';
	$user = 'kryuch6b_odent';
	$pass = 'L1L4*3Jk';
	$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
	$dbh->exec("set names utf8");
	
	
	/* ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1); */
	
	if(isset($_COOKIE['user-id'])) {
		$user_id = $_COOKIE['user-id'];
		$user_info = array();
		$sth = $dbh->query('SELECT `users`.* FROM `users` WHERE `users`.`id` = "'.$user_id.'" LIMIT 1');
		$user_info = $sth->fetch(PDO::FETCH_ASSOC);
	}
	
	//var_dump($_GET);
	if(isset($_POST)) {
		if(isset($_POST['action'])) {
			switch($_POST['action']) {
				case 'register_user':
					$client_fio = $_POST['login-name'];
					$client_phone = $_POST['login-phone'];
					$client_password = $_POST['login-pass'];
					$client_password = md5($client_password);
					
					$sth = $dbh->prepare("INSERT INTO `users` (`client_fio`, `client_phone`, `client_password`) values ('".$client_fio."', '".$client_phone."', '".$client_password."')");  
					$sth->execute();
					
					$login = $_POST['login-phone'];
					$password = md5($_POST['login-pass']);
					$sth = $dbh->query('SELECT * FROM `users` WHERE `users`.`client_phone` = "'.$login.'" AND `users`.`client_password` = "'.$password.'" LIMIT 1');
					$user_data = $sth->fetch(PDO::FETCH_ASSOC);
					if(!empty($user_data)) {
						$user_type = $user_data['type'];
						$user_id = $user_data['id'];
						session_start();
						setcookie("user-type", $user_type, strtotime(' +50 days')); 
						setcookie("user-id", $user_id, strtotime(' +50 days')); 
						$result['success'] = 'Авторизация успешна';
						header('Location: /');
					}
					else {
						$result['error'] = 'Проверьте правильность ввода логина и пароля';	
					}
				break;
				
				case 'login':
					$login = $_POST['login-phone'];
					$password = md5($_POST['login-pass']);
					$sth = $dbh->query('SELECT * FROM `users` WHERE `users`.`client_phone` = "'.$login.'" AND `users`.`client_password` = "'.$password.'" LIMIT 1');
					$user_data = $sth->fetch(PDO::FETCH_ASSOC);
					if(!empty($user_data)) {
						$user_type = $user_data['type'];
						$user_id = $user_data['id'];
						session_start();
						setcookie("user-type", $user_type, strtotime(' +50 days')); 
						setcookie("user-id", $user_id, strtotime(' +50 days')); 
						$result['success'] = 'Авторизация успешна';
						header('Location: /');
					}
					else {
						$result['error'] = 'Проверьте правильность ввода логина и пароля';	
					}
				break;
			}
		}
	}	
	
	//список инструкторов
	if($_SERVER["SCRIPT_NAME"] == '/index.php') {
		$sth = $dbh->query('SELECT `free_time`.* FROM `free_time` ORDER BY `id` ASC');
		$free_time = array();
		$time_array = array(
			'8:00' => '',
			'8:30' => '',
			'9:00' => '',
			'9:30' => '',
			'10:00' => '',
			'10:30' => '',
			'11:00' => '',
			'11:30' => '',
			'12:00' => '',
			'12:30' => '',
			'13:00' => '',
			'13:30' => '',
			'14:00' => '',
			'14:30' => '',
			'15:00' => '',
			'15:30' => '',
			'16:00' => '',
			'16:30' => '',
			'17:00' => '',
			'17:30' => '',
		);
		while($row = $sth->fetch()) {
			$row['visit_date'] = date('d.m.Y', strtotime($row['visit_date']));
			$time_array[$row['visit_time']] = $row;
			$free_time[] = $row;
		}
		
	}
?>
