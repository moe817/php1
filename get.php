<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_POST['postcomment'] === '東京') {
        echo '正解';
    } else {
        echo '不正解';
    }
}
?>