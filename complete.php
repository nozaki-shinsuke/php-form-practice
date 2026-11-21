<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー管理プログラム</title>
</head>

<body>
    <div class="complete">
        <h1>ユーザー登録（3/3）完了</h1>

        <?php
        $username = $_POST["name"];
        $safe_username = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
        $usermail = $_POST["email"];
        $safe_usermail = htmlspecialchars($usermail, ENT_QUOTES, 'UTF-8');
        $userage = $_POST["age"];
        $safe_userage = htmlspecialchars($userage, ENT_QUOTES, 'UTF-8');
        echo "{$safe_username}さん、登録が完了しました。<br>";
        echo "確認メールを {$safe_usermail} に送信しました。<br>";
        ?>
    </div>
    <a href="input.php">最初に戻る</a>
</body>

</html>