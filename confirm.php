<?php 
$title = '確認画面 - 神奈川 ホームページ制作';
$name = isset( $_POST[ 'name' ] );
$email = isset( $_POST[ 'email' ] ) ? $_POST[ 'email' ] : NULL;
$subject = isset( $_POST[ 'subject' ] ) ? $_POST[ 'subject' ] : NULL;
$body = isset( $_POST[ 'body' ] ) ? $_POST[ 'body' ] : NULL;
$company = isset( $_POST[ 'company' ] ) ? $_POST[ 'company' ] : NULL;
$service = isset( $_POST[ '相談したいサービス' ] ) ? $_POST[ '相談したいサービス' ] : NULL;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?=$title?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="沖縄,ホームページ制作,web広告,webデザイン,那覇,ダーウィン,darwin"/>
    <meta name="description" content="企業のビジネス課題をIT・Webで解決。700社以上の制作実績。創業17年。官公庁から中小企業まで幅広い業種のWeb制作の実績。"/>
    <!-- Google Tag Manager -->
    <link rel="stylesheet" href="style2.css">
    <link rel="icon" href="image/home-icon.png" type="image/png">

</head>

<body>
  <div id="head">
   <h1>CONTACT - postmail</h1>
  </div>
<div id="body">
<h2>お問い合わせフォーム &gt; 確認画面</h2>
<ul>
<li>以下の内容でよろしければ「送信する」ボタンを押して下さい。</li>
</ul>
<div id="form-tbl">
<table id="form">

<tbody><tr>
  <th>会社名</th>
  <td><?=$company?></td>
</tr>

<tr>
  <th>お名前</th>
  <td><?=$name?></td>
</tr>

<tr>
  <th>メールアドレス</th>
  <td><?=$email?></td>
</tr>

<tr>
  <th>相談したいサービス</th>
  <td><?=$service?></td>
</tr>

<tr>
  <th>お問い合わせ内容</th>
  <td><?=$body?></td>
</tr>

<!-- <tr>
  <th>個人情報保護方針の同意</th>
  <td>ok</td>
</tr> -->

</tbody></table>
<form action="" method="post">
<input type="hidden" name="mode" value="send">
<input type="hidden" name="ses_id" value="B7YF0Jp5ZbDqDNkHLIsOw1nVd">
<input type="hidden" name="sort" value="">
<input type="hidden" name="会社名" value="31">
<input type="hidden" name="お名前" value="32">
<input type="hidden" name="email" value="72796f756a6940676d61696c2e636f6d">
<input type="hidden" name="相談したいサービス" value="e8aab2e9a18ce8a7a3e6b1ba576562e588b6e4bd9c">
<input type="hidden" name="お問い合わせ内容" value="32">
<input type="hidden" name="個人情報保護方針の同意" value="6f6b">

<p class="btn">
	<input type="button" value="< 前に戻る" onclick="history.back()">
	<input type="submit" value="送信する >">
</p>
</form>
</div>
</div>
</body>

