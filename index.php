<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>日本の首都はどこ？</p>
<form action = "get.php" method = "GET">
    <input type = "text" name ="getcomment"><br/>
    <input type = "submit" value ="送信/">
</form>

<form action = "index.php" method = "POST">
<input type = "text" name ="postcomment"><br/>
<input type = "submit" value ="送信/">
</form>

<p>答え　
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['postcomment'] === '東京') {
        echo '正解';
    } else {
        echo '不正解';
    }
}
?>
</p>

</body>
</html>