<?php 

// app/Controller/HomeController.php

// 정확한 코드 작성을 위해 타입체크
declare(strict_types=1);

namespace App\Controller;

use App\Model\User;



class HomeController {

    public function index(){

        $userModel = new User();
        $users = $userModel->getAlluser();
        
        require_once __DIR__ ."/../../app/View/home.php";
        // __DIR__ : 현재 파일경로
        // Controller 에서 View/home.php로 이동하는것
    }


}

?>