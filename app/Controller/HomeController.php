<?php 

// app/Controller/HomeController.php

// 정확한 코드 작성을 위해 타입체크
declare(strict_types=1);

namespace App\Controller;

class HomeController {

    public function index(){
        echo "<h1>HomeController → index 메서드가 실행되었습니다!</h1>";
    }

}

?>