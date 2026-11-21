<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー管理プログラム</title>
</head>

<body>
    <div class="result">
        <h1>ユーザー登録（2/3）確認</h1>

        <?php
        $username = $_POST["name"];
        $safe_username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
        $usermail = $_POST["email"];
        $safe_usermail = htmlspecialchars($usermail, ENT_QUOTES, 'UTF-8');
        $userage = $_POST["age"];
        $safe_userage = htmlspecialchars($userage, ENT_QUOTES, 'UTF-8');
        echo "以下の内容で登録します。よろしいですか？<br>";
        echo "| お名前         | {$safe_username}  |<br>";
        echo "| メールアドレス  | {$safe_usermail}  |<br>";
        echo "| 年齢           | {$safe_userage}  |<br>";

        ?>
        <form action="complete.php" method="post">
            <input type="hidden" name="name" value="<?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="email" value="<?php echo htmlspecialchars($usermail, ENT_QUOTES, 'UTF-8'); ?>">
            <input type="hidden" name="age" value="<?php echo htmlspecialchars($userage, ENT_QUOTES, 'UTF-8'); ?>">
            <button type="button" onclick="history.back()">戻る</button>
            <button type="submit">登録する</button>
    </div>
</body>

</html>