<?php 

// core/Router.php

// 정확한 코드 작성을 위해 타입체크
declare(strict_types=1);

namespace Core;


class Router{
    public function run(){
        // 1. 현재 url 가져오기
        $uri = parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
        $uri = trim($uri,"/");

        // 2. explode 로 uri 나누기
        $segments = explode("/",$uri);

        // 3. 경로기반으로 controller/action/parameter 분리
        $controllerName = $segments[0] ?? "home"; //예 : / home
        $actionName = $segments[1] ?? "index"; // 예 : /home/index
        $parameter = $segments[2] ?? null; // 예 /user/show/5 -> 5

        $controllerClass = "App\\Controller\\". ucfirst($controllerName). "Controller";

        if(class_exists($controllerClass)){
            $controller = new $controllerClass();

            if(method_exists($controller,$actionName)){
                if($parameter){
                    $controller->$actionName($parameter);
                }else {
                    $controller->$actionName();
                }
                return;
            }
        }

        // 404
        echo "<h2 style='color:red;'>404 Not Found: {$controllerClass} → {$actionName}()</h2>";
    }

}

?>