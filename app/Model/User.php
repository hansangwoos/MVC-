<?php 

// App/Model/User.php

declare(strict_types=1);

namespace App\Model;

class User{

    public function getAlluser() : array {
        // 가짜데이터
        return [
            ['id' => 1, 'name' =>"상우"],
            ['id' => 2, 'name' =>"철수"],
            ['id' => 3, 'name' =>"영희"],
        ];
    }

}






?>