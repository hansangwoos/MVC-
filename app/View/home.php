<?php 

// App/View/home

declare(strict_types=1);

?>

<!-- app/View/home.php -->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>사용자 목록</title>
</head>
<body>
      <h1>👤 사용자 목록</h1>
    <ul>
        <?php foreach($users as $user): ?>
            <li><?= $user['id'] ?> : <?= htmlspecialchars($user['name']) ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>