<?php
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
$pdo->exec("insert into contactform(name,mail,age,comments)values
('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."');");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>お問合わせフォーム</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="form_section">
        <h1>お問合わせフォーム</h1>
        <div class="form">
                <p>お問い合わせ有難うございました。<br>
                3営業日以内に担当者よりご連絡差し上げます。
                </p>
        </div>
    </div>
</body>
</html>
