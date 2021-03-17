<?php 	
	define('secure', true);	
	require_once 'db.php';
	//var_dump($_COOKIE);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>ОДент</title>
		
		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<?php if($_COOKIE['user-id'] == '' || !isset($_COOKIE['user-id'])) { ?>
	    	<div class="welcome-screen one-screen active-screen">
		    	<div class="container">
			    	<img src="img/logo-1024x4031.png" class="welcome-img" />
			    	<h3>Стоматология О'Дент</h3>
			    	<p>Записывайтесь к любимому стоматологу, контролируйте свое здоровье - все со смартфона!</p>
					<div class="row">
						<div class="col-6">
							<a class="blue-btn login-btn">Вход</a>
						</div>
						<div class="col-6">
							<a class="outline-btn reg-btn">Регистрация</a>
						</div>
					</div>
		    	</div>
	    	</div>
	    	
	    	<div class="login-screen one-screen">
		    	<div class="container">
			    	<a class="back-btn" target-screen="welcome-screen" href="#">
				    	<img src="img/back.svg" />
			    	</a>
			    	<h2>Авторизуйтесь для начала</h2>
			    	<form method="POST" class="login-form" action="/index.php">
				    	<label>Ваш телефон</label>
				    	<input type="text" name="login-phone" class="login-input" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ" />
				    	<label>Ваш пароль</label>
				    	<input type="password" name="login-pass" class="login-input" placeholder="Введите пароль" />
				    	<input type="hidden" name="action" value="login" />
				    	<button type="submit" class="blue-btn start-btn">Войти</button>
			    	</form>
		    	</div>
	    	</div>
	    	
	    	<div class="reg-screen one-screen">
		    	<div class="container">
			    	<a class="back-btn" target-screen="welcome-screen" href="#">
				    	<img src="img/back.svg" />
			    	</a>
			    	<h2>Пройдите регистрацию</h2>
			    	<form method="POST" class="login-form" action="/index.php">
				    	<label>Ваше имя</label>
				    	<input type="text" name="login-name" class="login-input" placeholder="Введите ФИО" />
				    	<label>Ваш телефон</label>
				    	<input type="text" name="login-phone" class="login-input" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ" />
				    	<label>Ваш пароль</label>
				    	<input type="password" name="login-pass" class="login-input" placeholder="Введите пароль" />
				    	<input type="hidden" name="action" value="register_user" />
				    	<button type="submit" class="blue-btn start-reg-btn">Войти</button>
			    	</form>
		    	</div>
	    	</div>
    	<? } else { ?>
	    	<div class="main-screen one-screen active-screen">
		    	<div class="main-header">
			    	<div class="container">
				    	<div class="row">
					    	<div class="col-9 search-container">
						    	<input type="text" name="search" class="search-input" placeholder="Поиск..." />
					    	</div>
					    	<div class="col-3 text-right">
						    	<a class="profile-link" href="#"></a>
						    	<a class="alert-icon" href="#">1</a>
					    	</div>
				    	</div>
				    	<div class="row">
					    	<div class="col-8">
						    	<h3 class="main-subheader">История посещений</h3>
						    	<span class="subheader-light">1 всего</span>
					    	</div>
					    	<div class="col-4">
						    	<a class="light-blue-btn calendar-btn" href="#">Сегодня</a>
					    	</div>
				    	</div>
			    	</div>
		    	</div>
		    	<div class="container">
			    	<div class="row">
				    	<div class="col-12">
					    	<div class="main-slider">
						    	<div class="one-main-slide">
							    	<span class="slide-title">Кабинет №1 / Врач Петро. С.</span>
							    	<span class="slide-time">16:00-16:45</span>
							    	
							    	<span class="slide-status done-status">Не пройдено</span>
						    	</div>
					    	</div>
				    	</div>
			    	</div>
			    	<div class="row">
				    	<div class="col-12">
					    	<div class="time-table">
						    	<div class="row">
							    	<div class="col-3">
								    	<div class="time-table-left">
								    		<span class="time-table-label text-right">Время</span>
								    		<span class="time-table-time">8:00</span>
								    		<span class="time-table-time">8:30</span>
								    		<span class="time-table-time">9:00</span>
								    		<span class="time-table-time">9:30</span>
								    		<span class="time-table-time">10:00</span>
								    		<span class="time-table-time">10:30</span>
								    		<span class="time-table-time">11:00</span>
								    		<span class="time-table-time">11:30</span>
								    		<span class="time-table-time">12:00</span>
								    		<span class="time-table-time">12:30</span>
								    		<span class="time-table-time">13:00</span>
								    		<span class="time-table-time">13:30</span>
								    		<span class="time-table-time">14:00</span>
								    		<span class="time-table-time">14:30</span>
								    		<span class="time-table-time">15:00</span>
								    		<span class="time-table-time">15:30</span>
								    		<span class="time-table-time">16:00</span>
								    		<span class="time-table-time">16:30</span>
								    		<span class="time-table-time">17:00</span>
								    		<span class="time-table-time">17:30</span>
								    	</div>
							    	</div>
							    	<div class="col-9">
								    	<div class="time-table-right">
								    		<span class="time-table-label text-left">Свободные окна</span>
								    		<? foreach($time_array as $time=>$data) { ?>
								    			<? if($data == '') { ?>
								    				<span class="empty-time"></span>
								    			<? } else { ?>
								    				<div class="one-time" time-id="<? echo $data['id']; ?>">
									    				<? echo $data['doctor_fio']; ?>
									    				<div style="display: none;">
										    				<span class="visit-time"><? echo $data['visit_time']; ?></span>
										    				<span class="visit-date"><? echo $data['visit_date']; ?></span>
										    				<span class="doctor-fio"><? echo $data['doctor_fio']; ?></span>
									    				</div>
								    				</div>
								    			<? } ?>
								    		<? } ?>
								    	</div>
							    	</div>
						    	</div>
					    	</div>
				    	</div>
			    	</div>
		    	</div>
	    	</div>
	    	
	    	<div class="card-screen one-screen">
				<div class="container">
					<div class="screen-header">
						<div class="row">
							<div class="col-2">
								<a class="back-btn" target-screen="main-screen" href="#"><img src="img/left-arrow.svg" /></a>
							</div>
							<div class="col-8 text-center">
								<span class="screen-header-text white-text">Карточка посещения</span>
							</div>
							<div class="col-2"></div>
						</div>
					</div>
					<div class="card-clocks">
						<img src="/img/clock.png" class="card-clock-img" />
						<div class="one-service" id="service-1">
							<div style="display: none;">
								<span class="service-name">Анестезия</span>
								<span class="service-price">300 руб.</span>
							</div>
						</div>
						<div class="one-service" id="service-2">
							<div style="display: none;">
								<span class="service-name">Имплантация</span>
								<span class="service-price">21 000 руб.</span>
							</div>
						</div>
						<div class="one-service" id="service-3">
							<div style="display: none;">
								<span class="service-name">Лечение кариеса</span>
								<span class="service-price">4 300 руб.</span>
							</div>
						</div>
					</div>
				</div>
	    	</div>
	    	
	    	<div class="client-screen one-screen">
				<div class="container">
					<div class="screen-header">
						<div class="row">
							<div class="col-2">
								<a class="back-btn" target-screen="main-screen" href="#"><img src="img/left-arrow-dark.svg" /></a>
							</div>
							<div class="col-8 text-center">
								<span class="screen-header-text">Мед. карта</span>
							</div>
							<div class="col-2"></div>
						</div>
					</div>
					<div class="med-card-header">
						<span class="med-card-title">Зубная карта</span>
						<span class="med-card-subtitle">Схема зубной карты пациента</span>
					</div>
					<div class="med-card">
						<img src="/img/graph.png" class="med-card-img" />
						<div class="one-tooth" id="tooth-1">
							<div style="display: none;">
								<span class="tooth-name">Зуб 1</span>
								<span class="tooth-desc">Кариес</span>
							</div>
						</div>
						<div class="one-tooth" id="tooth-2">
							<div style="display: none;">
								<span class="tooth-name">Зуб 2</span>
								<span class="tooth-desc">Удаление</span>
							</div>
						</div>
						<div class="one-tooth" id="tooth-3">
							<div style="display: none;">
								<span class="tooth-name">Зуб 3</span>
								<span class="tooth-desc">Кариес</span>
							</div>
						</div>
						<div class="one-tooth" id="tooth-4">
							<div style="display: none;">
								<span class="tooth-name">Зуб 4</span>
								<span class="tooth-desc">Имплантация</span>
							</div>
						</div>
					</div>
				</div>
	    	</div>
	    	
	    	<div class="map-screen one-screen">
				<div class="map-container">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab92dcabf060469b56f4f97f654393643dfb5ab9b77e4b8157091259416f82492&amp;width=100%25&amp;height=700&amp;lang=ru_RU&amp;scroll=false"></script>
				</div>
				<div class="address-block">
					<div class="address">
						<span class="address-line">Адрес: г. Санкт-Петербург, ул.Гжатская, д.22, к.1</span>
						<span class="address-line">Телефон: 8 (812) 618-15-62</span>
						<span class="address-line">График работы: 9:00-21:00</span>
					</div>
				</div>
	    	</div>
	    	
	    	<div class="main-menu">
		    	<a class="menu-link active-link" href="#" target-screen="main-screen">
			    	<img src="img/menu-1.svg" class="menu-img" />
		    	</a>
		    	<a class="menu-link" href="#" target-screen="card-screen">
			    	<img src="img/menu-2.svg" class="menu-img" />
		    	</a>
		    	<a class="menu-link menu-logo">
			    	<img src="img/plus.svg" class="menu-img" />
		    	</a>
		    	<a class="menu-link" href="#" target-screen="map-screen">
			    	<img src="img/menu-3.svg" class="menu-img" />
		    	</a>
		    	<a class="menu-link" href="#" target-screen="client-screen">
			    	<img src="img/menu-4.svg" class="menu-img" />
		    	</a>
	    	</div>
	    	
	    	<div id="alert_alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	            <div class="modal-dialog">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <h5 class="modal-title">Внимание!</h5>
	                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    </div>
	                	<div class="modal-body">
	                        <div class="row">
	                            <div class="col-md-12">
	                                <p>Для подключения функции оповещений, необходимо подписаться на рассылку PUSH-уведомлений.</p>
	                                <a class="blue-btn" href="#">Подписаться</a>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	        <div id="empty_alert" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	            <div class="modal-dialog">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <h5 class="modal-title">Внимание!</h5>
	                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    </div>
	                	<div class="modal-body">
	                        <div class="row">
	                            <div class="col-md-12">
	                                <p>Выберите свободное окно для записи или позвоните нам по телефону 8 (812) 618-15-62</p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	        <div id="free_time_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	            <div class="modal-dialog">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <h5 class="modal-title">Свободное окно</h5>
	                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    </div>
	                	<div class="modal-body">
	                        <div class="row">
	                            <div class="col-md-12">
	                                <div class="free-time-doctor-block">
		                                <i class="fas fa-hospital-user"></i> <span class="free-time-doctor-fio"></span>
	                                </div>
	                            </div>
	                            <div class="col-sm-6">
		                            <div class="free-time-date-block">
		                                <i class="fas fa-clock"></i> <span class="free-time-date"></span> в <span class="free-time-time"></span>
	                                </div>
	                            </div>
	                        </div>
	                        <a href="#" time-id="" class="blue-btn reserve-time-btn">Зарезервировать</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	        <div id="service_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	            <div class="modal-dialog">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <h5 class="modal-title"></h5>
	                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    </div>
	                	<div class="modal-body">
	                        <div class="row">
	                            <div class="col-md-12">
	                                <div class="free-time-doctor-block">
		                                <i class="fas fa-money-bill-alt"></i> <span class="service-price"></span>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        
	        <div id="tooth_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	            <div class="modal-dialog">
	                <div class="modal-content">
	                    <div class="modal-header">
	                        <h5 class="modal-title"></h5>
	                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	                    </div>
	                	<div class="modal-body">
	                        <div class="row">
	                            <div class="col-md-12">
	                                <div class="free-time-doctor-block">
		                                <i class="fas fa-tooth"></i> <span class="tooth-desc"></span>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    <? } ?>
	
		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.slim.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="vendor/jquery/jquery.maskedinput.min.js"></script>
        <script src="js/logic.js"></script>
</html>