<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action = "index2.php" method = "POST">
<input type = "text" name ="arraysearch"><br/>
<input type = "submit" value ="送信">
</form>
<?php
$fruits = ['apple', 'orange', 'strawberry'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach($fruits as $fruit){
        if($_POST['arraysearch'] === $fruit){
            echo $fruit."は、配列に含まれています。";
            $i = 1;
        }
    }
    if($i == 0){
        echo $_POST['arraysearch']."は、配列に含まれていません。";
    }
}
?>
    
</body>
</html>