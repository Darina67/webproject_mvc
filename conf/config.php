<?
//константа корневой директории приложения
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
//константа определяет путь до контроллеров
define("CONTROLLER_PATH", ROOT . "/controllers/");

define("MODEL_PATH", ROOT . "/models/");

define("VIEW_PATH", ROOT . "/views/");

//файл подкл к бд
require_once("db.php");
//роут
require_once("route.php");
//общий файл модели
require_once MODEL_PATH . 'Model.php';
require_once VIEW_PATH . 'View.php';
require_once CONTROLLER_PATH . 'Controller.php';

Routing::buildRoute();
