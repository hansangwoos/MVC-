<?php 

// core/Router.php

class Router{
    public function run(){
        // 1. URL 파싱하기
        $controllerName = $_GET['controller'] ?? 'home';
        // $_GET['controller'] 은 URL에서 컨트롤러 이름 추출  ex) ?controller=user 만약 없으면 home 
        $actionName = $_GET['action'] ?? 'index';


        // 2. 컨트롤러 클래스명 만들기
        $controllerClass = "App\\Controller\\".ucfirst($controllerName) . "Conteroller";
        // App\Controller\HomeController 는 호출할 컨트롤러 클래스 경로를 말함.
        // ucfirst 는 첫글자를 대문자로 변환해주는 내장함수 위에 코드로보면 home-> HomeConteroller 이 된다

        // 3. 클래스와 메서드가 존재하면 실행

        if(class_exists($controllerClass) && method_exists($controllerClass, $actionName)){
        // method_exists : 해당 메서드가 클래스에 있는지 확인
            $controller = new $controllerClass();
            // 동적으로 객체 생성   
            $controller->$actionName();
            // 동적으로 메서드 생성
        }else {
            echo "요청한 페이지를 찾을 수 없습니다.";
        }
    }

}

?>