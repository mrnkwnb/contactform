<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合わせフォーム</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="form_section">
            <h1>お問合わせ内容確認</h1>

            <div class="form">
                <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>
                よろしければ「送信する」ボタンを押して下さい。</p>

                <dl>
                    <dt>名前</dt>
                    <dd><?php echo $_POST['name'];?></dd>
                    <dt>メールアドレス</dt>
                    <dd><?php echo $_POST['mail'];?></dd>
                    <dt>年齢</dt>
                    <dd><?php echo $_POST['age'].'歳';?></dd>
                    <dt>コメント</dt>
                    <dd><?php echo $_POST['comments'];?></dd>
                </dl>
                
                <form action="index.html">
                    <input type="submit" value="戻って修正する" class="button">
                </form>
                <form action="insert.php" method="post">
                    <input type="submit" value="登録する" class="submit">
                    <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name"> <!--「登録する」を押す事で処理する内容を記入 -->
                    <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                    <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
                    <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                </form>
            </div>
    </div>
</body>
</html>