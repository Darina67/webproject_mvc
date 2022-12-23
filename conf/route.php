<?php
class Routing
{
    public static function buildRoute()
    {
        /* Контроллер и action по умолчанию */
        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";
        $route = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

        // echo "<pre>";
        // print_r($route);
        // echo "</pre>";

        $i = count($route) - 1;
        while ($i > 0) {
            if ($route[$i] != '') {
                //поиск по пути папки с контрроллером, приводя большую букву
                if (is_file(CONTROLLER_PATH . ucfirst($route[$i]) . "Controller.php") || !empty($_GET)) {
                    $controllerName = ucfirst($route[$i]) . "Controller";
                    $modelName =  ucfirst($route[$i]) . "Model";
                    break;
                } else {
                    $action = $route[$i];
                }
            }
            $i--;
        }
        require_once CONTROLLER_PATH . $controllerName . ".php";
        require_once MODEL_PATH . $modelName . ".php";
        $controller = new $controllerName();
        $controller->$action();
    }
    public function errorPage()
    {
    }
}
