<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['getcomment'] === '東京') {
        echo '正解';
    } else {
        echo '不正解';
    }
}
?>