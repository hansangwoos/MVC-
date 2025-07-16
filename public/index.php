<?php 
// public/index.php

// 정확한 코드 작성을 위해 타입체크
declare(strict_types=1);

// 1. 오토로더 등록
spl_autoload_register(function($class){
    // spl_autoload_register : 클래스 자동 로딩 설정
    $patch ="../". str_replace("\\","/",$class) . ".php";
    // str_replace("\\", "/", $class)	네임스페이스 -> 경로 전달
    if(file_exists($patch)){
        require_once $patch;
    }
});

// 2. 라우터 실행

use Core\Router;

$router = new Router();
$router->run();




?>