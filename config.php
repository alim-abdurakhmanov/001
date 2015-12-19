<?php
	
/** Абсолютный путь к директории  */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');	
define('LIBPATH', ABSPATH.'lib/');
define('MODPATH', ABSPATH.'mod/');
define('TMPALATEPATH', ABSPATH.'html/');
date_default_timezone_set('Europe/Moscow');
error_reporting(E_ALL);


define('UPDIR', '/upload/');
define('UPLOADDIR',ABSPATH.'upload/');
define('ADMINURL', '/admin/admin.php');
/** Имя базы данных для WordPress */
define('DB_NAME', 'Buildex');

/** Имя пользователя MySQL */
define('DB_USER', 'buildex-des');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кол-во постов на странице */
define('POSTSONPAGE', '4');
/*** Кол-во категорий ***/
define('NUMOFCAT', '4');
/*** Время отображения объявления по умолчанию ***/
define('ADDAY', '30');
/** Расширенные диагностические сообщения */
define('DEBUG', 'on');


define('LOG_FILE_NAME', ABSPATH.'log/error.log');
define('LOG_FILE_MAXSIZE', 300);
define('LOG_ROTATE', TRUE);

//include_once(LIBPATH.'error_handler.php');
//set_error_handler('user_log');
//Путь к серверной составляющей
define('SERVER', ABSPATH.'/server');


