<?php 
$title = '確認画面 - 神奈川 ホームページ制作';
require 'header.php';
$name = isset( $_POST[ 'name' ] );
$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : NULL;
$subject = isset( $_POST[ 'subject' ] ) ? $_POST[ 'subject' ] : NULL;
$body = isset( $_POST[ 'body' ] ) ? $_POST[ 'body' ] : NULL;
$company = isset( $_POST[ 'company' ] ) ? $_POST[ 'company' ] : NULL;
?>


<?php require 'footer.php'?>